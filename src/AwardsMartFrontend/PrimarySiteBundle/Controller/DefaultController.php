<?php

namespace AwardsMartFrontend\PrimarySiteBundle\Controller;

use AwardsMartBackend\CustomerBundle\Entity\CartItemUpload;
use AwardsMartBackend\CustomerBundle\Entity\CustomerAddress;
use AwardsMartBackend\ProductsBundle\Data\ProductSearchCriteria;
use AwardsMartBackend\ProductsBundle\Entity\Category;
use AwardsMartBackend\ProductsBundle\Repository\CategoryRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="my_homepage")
     */
    public function indexAction()
    {
        return $this->render('@PrimarySite/default/index.html.twig');
    }

    /**
     * @Route("/mail-test", name="mailer.test")
     */
    public function testEmailerAction()
    {
        $this->get('app.cart_mailer')->testEmail("vmocampo357@gmail.com");
        return $this->render('@PrimarySite/default/index.html.twig');
    }

    /**
     * @Route("/my-cart", name="cart_view")
     */
    public function cartViewAction()
    {
        // Load the cart from our service
        $cart = $this->get('app.cart_provider')->getCart();

        return $this->render('@PrimarySite/default/cart-view.html.twig', ["cart" => $cart]);
    }

    /**
     * @Route("/update-cart-item/{cart_item_id}", name="cart_item_update")
     */
    public function updateCartItemAction(Request $request, $cart_item_id)
    {
        $em = $this->getDoctrine()->getManager();
        $cart = $this->get('app.cart_provider')->getCart();
        if( $cart->hasCartItem($em->find("CustomerBundle:CartItem", intval($cart_item_id))) ){
            $cart_item = $em->find("CustomerBundle:CartItem", intval($cart_item_id));

            if($request->getMethod() == "POST"){
                if( $request->request->has('update') ){
                    $update = $request->request->get('update');
                    if( isset($update['id']) ){

                        if( isset($update['size']) ){
                            $newSize = $em->find("ProductsBundle:ProductSize", intval($update['size']));
                            $cart_item->setSize( $newSize );
                        }

                        if( isset($update['option']) ){
                            $newOption = $em->find("ProductsBundle:ProductOption", intval($update['option']));
                            $cart_item->setOption( $newOption );
                        }

                        if( isset($update['quantity'])){
                            $cart_item->setQuantity( intval($update['quantity']) );
                        }

                        if( isset($update['addon']) ){
                            $cart_item->clearAddons();
                            foreach( $update['addon'] as $addon_id ){
                                $newAddon = $em->find("ProductsBundle:ProductAddonOption", intval($addon_id));
                                $cart_item->addAddonOption($newAddon);
                            }
                        }

                        if( isset($update['engraving']) ){
                            $cart_item->setEngraving( $update['engraving'] );
                        }

                        if( $request->files->get('names') ){
                            $uploaded = $request->files->get('names');
                            $source = $this->get('app.cart_uploader')->upload($uploaded);

                            // Add upload to the cart item
                            $cartUpload = new CartItemUpload();
                            $cartUpload->setRole(CartItemUpload::ROLE_NAMES);
                            $cartUpload->setSource($source);
                            $cart_item->addUpload($cartUpload);
                        }

                        if( $request->files->get('logo') ){
                            $uploaded = $request->files->get('logo');
                            $source = $this->get('app.cart_uploader')->upload($uploaded);

                            // Add upload to the cart item
                            $cartUpload = new CartItemUpload();
                            $cartUpload->setRole(CartItemUpload::ROLE_LOGO);
                            $cartUpload->setSource($source);
                            $cart_item->addUpload($cartUpload);
                        }

                        if( $request->files->get('other') ){
                            $uploaded = $request->files->get('other');
                            $source = $this->get('app.cart_uploader')->upload($uploaded);

                            // Add upload to the cart item
                            $cartUpload = new CartItemUpload();
                            $cartUpload->setRole(CartItemUpload::ROLE_OTHER);
                            $cartUpload->setSource($source);
                            $cart_item->addUpload($cartUpload);
                        }

                        $em->persist($cart_item);

                        $em->flush();

                        // Send the back to the cart
                        // TODO: Add like a SESSION message or something
                        // return $this->redirectToRoute("cart_view");
                    }
                }
            }

            return $this->render('@PrimarySite/default/update-cart-item.html.twig',[
                "item" => $cart_item
            ]);
        }else{
            //TODO: Some flash bangs
            return $this->redirectToRoute("cart_view");
        }
    }

    /**
     * @Route("/remove-cart-item/{cart_item_id}", name="cart_item_delete")
     */
    public function removeCartItemAction($cart_item_id = 0)
    {
        $cart = $this->get('app.cart_provider')->getCart();
        $em = $this->getDoctrine()->getManager();

        if( $cart->hasCartItem( $em->find("CustomerBundle:CartItem", intval($cart_item_id)) )){
            if($cart_item_id && $cart_item_id != 0 ){
                $em = $this->getDoctrine()->getManager();
                $em->remove( $em->find("CustomerBundle:CartItem",intval($cart_item_id)) );
                $em->flush();
            }
        }

        $this->get('session')->getFlashBag()->add('successes',"Your cart item was removed!");
        return $this->redirectToRoute("cart_view");
    }

    /**
     * @Route("/checkout/", name="cart_checkout")
     * @Method("GET")
     */
    public function checkoutAction()
    {
        $cart = $this->get('app.cart_provider')->getCart();
        $customer = $cart->getCustomer();
        $cart->updateTotal();

        if($customer){

            if(is_null($customer->getAddresses())){
                $billing_address = new CustomerAddress();
                $billing_address->setRole(CustomerAddress::BILLING_ADDR);

                $shipping_address = new CustomerAddress();
                $shipping_address->setRole(CustomerAddress::SHIPPING_ADDR);
            }else{
                $billing_address = $customer->getBillingAddress();
                $shipping_address = $customer->getShippingAddress();
            }

            return $this->render('@PrimarySite/default/checkout.html.twig',[
                "customer" => $customer,
                "shipping" => $shipping_address,
                "billing" => $billing_address,
                "cart" => $cart
            ]);
        }else{
            // For some reason, the CART didn't init. Send to homepage
            return $this->redirectToRoute("my_homepage");
        }
    }

    /**
     * @Route("/checkout/", name="cart_checkout_post")
     * @Method("POST")
     */
    public function checkoutPostAction(Request $request)
    {
        if( $request->request->has('checkout') ){

            // Load cart, customer
            $cart = $this->get('app.cart_provider')->getCart();
            $customer = $cart->getCustomer();

            if($cart->getTotal() > 0){
                if(is_null($customer->getAddresses())){
                    $billing_address = new CustomerAddress();
                    $billing_address->setRole(CustomerAddress::BILLING_ADDR);

                    $shipping_address = new CustomerAddress();
                    $shipping_address->setRole(CustomerAddress::SHIPPING_ADDR);
                }else{
                    $billing_address = $customer->getBillingAddress();
                    $shipping_address = $customer->getShippingAddress();
                }

                // Finally, load all the info from REQUEST, MAYBE validate..(FormBuilder)
                //TODO: Form builder.
                // And then, just, like, put it.
                $em = $this->getDoctrine()->getManager();

                $pc = $request->request->get('customer');
                $customer->setName($pc['name']);
                $customer->setCallbackTime($pc['callbackTime']);
                $customer->setEmail($pc['email']);
                $customer->setEventDate(new \DateTime($pc['eventDate']));
                $customer->setPhone($pc['phone']);
                $customer->setTime($pc['time']);

                $ba = $request->request->get('billing');
                $billing_address->setPhone($ba['phone']);
                $billing_address->setAddress($ba['address']);
                $billing_address->setCity($ba['city']);
                $billing_address->setFirstName($ba['firstName']);
                $billing_address->setLastName($ba['lastName']);
                $billing_address->setPhone($ba['phone']);
                $billing_address->setState($ba['state']);
                $billing_address->setPhoneAlt($ba['phoneAlt']);
                $billing_address->setZipCode($ba['zipCode']);

                $sa = $request->request->get('shipping');

                $other['addresses'] = 0;

                if($request->request->has('other')){
                    $other = $request->request->get('other');
                }

                if( $other['addresses'] == "1" ){
                    $shipping_address->setPhone($ba['phone']);
                    $shipping_address->setAddress($ba['address']);
                    $shipping_address->setCity($ba['city']);
                    $shipping_address->setFirstName($ba['firstName']);
                    $shipping_address->setLastName($ba['lastName']);
                    $shipping_address->setPhone($ba['phone']);
                    $shipping_address->setState($ba['state']);
                    $shipping_address->setPhoneAlt($ba['phoneAlt']);
                    $shipping_address->setZipCode($ba['zipCode']);
                }else{
                    $shipping_address->setPhone($sa['phone']);
                    $shipping_address->setAddress($sa['address']);
                    $shipping_address->setCity($sa['city']);
                    $shipping_address->setFirstName($sa['firstName']);
                    $shipping_address->setLastName($sa['lastName']);
                    $shipping_address->setPhone($sa['phone']);
                    $shipping_address->setState($sa['state']);
                    $shipping_address->setPhoneAlt($sa['phoneAlt']);
                    $shipping_address->setZipCode($sa['zipCode']);
                }

                $customer->addAddress($billing_address);

                $customer->addAddress($shipping_address);

                $em->persist($customer);

                $em->flush();

                /*
                 * If everything went well, we push the cart, addresses
                 * and customer up to the cart.mailer service, which will
                 * then send an e-mail to the recipients.
                 *
                 */

                # Create a new CustomerOrder with the details as of..now.
                $poNumber = $this->get('app.cart_provider')->generateOrder($customer, $cart);

                # Send the new order (hey, we need to create a new order too pal)
                $this->get('app.cart_mailer')->notify($cart, $customer, $poNumber);

                # Destroy the session (this way.. IDK.)
                $this->get('app.cart_provider')->destroyCart();

                # Render the thanks page!
                return $this->render('@PrimarySite/default/thanks.html.twig');
            }else{
                $this->get('session')->getFlashBag()->add("errors","You can't submit an empty cart!");
                return $this->redirectToRoute("cart_checkout");
            }
        }else{
            //TODO: ERROR MESSAGES SON.
            return $this->redirectToRoute("cart_checkout");
        }
    }

    /**
     * @Route("/search", name="main_search_container")
     */
    public function searchPageContainer(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $criteria = new ProductSearchCriteria();

        if( $request->query->has("executed-search") ){
            $sku = $request->query->get('f');
            if( $sku && !empty($sku) ){
                $criteria->setByText($sku);
            }
        }

        return $this->render('@PrimarySite/default/search.html.twig',[
            "themes"
                => $em->getRepository("ProductsBundle:Category")->buildCategoryMenuForType(CategoryRepository::THEMES_TYPE),
            "products"
                => $em->getRepository("ProductsBundle:Category")->buildCategoryMenuForType(CategoryRepository::PRODUCTS_TYPE),
            "results"
                => $em->getRepository("ProductsBundle:Product")->findProductsByCriteria( $criteria )
        ]);
    }

    /**
     * @Route("/delete-upload/{cart_item_id}/{upload_id}", name="delete_upload")
     */
    public function removeUploadAction($cart_item_id, $upload_id)
    {
        if($cart_item_id){
            if($upload_id){

                $em = $this->getDoctrine()->getManager();
                $upload = $em->find("CustomerBundle:CartItemUpload",intval($upload_id));

                if($upload){

                    $em->remove($upload);

                    $em->flush();

                }

                $this->get('session')->getFlashBag()->add("successes","Your upload was removed!");
                return $this->redirectToRoute("cart_item_update",array("cart_item_id" => $cart_item_id));
            }else{
                $this->get('session')->getFlashBag()->add("errors","No upload ID was given!");
                return $this->redirectToRoute("cart_item_update",array("cart_item_id" => $cart_item_id));
            }
        }else{
            return $this->redirectToRoute("my_homepage");
        }
    }
}
