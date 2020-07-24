<?php

namespace AwardsMartFrontend\PrimarySiteBundle\Controller;

use AwardsMartBackend\ProductsBundle\Entity\Category;
use AwardsMartBackend\ProductsBundle\Entity\Product;
use AwardsMartBackend\ProductsBundle\Entity\ProductOption;
use Doctrine\Common\Collections\ArrayCollection;
use Proxies\__CG__\AwardsMartBackend\ProductsBundle\Entity\ProductSize;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/products")
 */
class ProductsController extends Controller
{

    /**
     * @return \AwardsMartBackend\CustomerBundle\Services\CartServiceProvider
     * Calls the cart service and returns the instance, so that we already have
     * called the construct each time this is set-up.
     */
    public function getCartService()
    {
        return $this->get('app.cart_provider');
    }

    /**
     * @Route("/categories/",name="invalid_categories")
     */
    public function invalidCategoryViewAction()
    {
        return $this->redirectToRoute("my_homepage");
    }

    /**
     * @Route("/categories/{category_id}",name="products_category_view")
     */
    public function CategoryViewAction($category_id)
    {
        if( $category_id && $category_id != 0 ){

            /*
             * 1) Fire up the Category repo, and use a helper to figure out if it has any Child categories.
             *    If it doesn't, we can go ahead and load its products.
             *    If it does, let's load the (sub) category page.
             */
            $em = $this->getDoctrine()->getManager();

            # Category Repository
            $category_repo = $em->getRepository("ProductsBundle:Category");

            # Category Entity
            $category = $category_repo->find( $category_id );

            # Boolean to represent if the category has sub-categories
            $has_children = (count($category->getChildrenCategories()) > 0);

            # So, if there are still children, display the Sub-Categories page
            if( $has_children ){
                return $this->render('@PrimarySite/default/subcategories.html.twig',[
                    "category" => $category,
                    "subcategories" => $category_repo->loadCategoryChildrenFlattened($category_id)
                ]);
            }else{
                /*
                 * 2) Now, we assume that we have reached a 'final' category, and so we will load Products
                 *    that belong to this Category. We want to make sure to get a nicely flattened array, though,
                 *    so we may want to look into doing some sort of JOIN?
                 */

                # Added 1/3/2018 -- Now, we want to store the order of products separately
                $products = $category_repo->loadCategoryProductsFlattened($category_id);
                $this->get('session')->set('currentProductsOrder', $this->flattenProductsOrder($products));

                return $this->render('@PrimarySite/default/products.html.twig',[
                    "category" => $category,
                    "products" => $products
                ]);
            }

        }else{
            return $this->redirectToRoute("my_homepage");
        }
    }

    /**
     * @Route("/single/{category_id}/{product_id}", name="single_product")
     * @Route("/single/{product_id}")
     */
    public function ProductViewAction($category_id = 0, $product_id)
    {

        // If they wanted a product, they need a Cart
        $_cart = $this->getCartService();

        if($product_id && $product_id != 0){

            /** @var Product $Product */
            $Product = $this->getDoctrine()->getManager()->find("ProductsBundle:Product",$product_id);

            $Category = new Category();

            if( $category_id && $category_id != 0){
                $Category = $this->getDoctrine()->getManager()->find("ProductsBundle:Category",$category_id);
            }

            if($Product){

                $localizedInformation = $this->localizeProductOrderInformation($Product->getId());
                $prevItem = false;
                $nextItem = false;
                if($localizedInformation){
                    if($localizedInformation['prev_product']){
                        $prevItem = $localizedInformation['prev_product'];
                    }
                    if($localizedInformation['next_product']){
                        $nextItem = $localizedInformation['next_product'];
                    }
                }

                return $this->render("@PrimarySite/default/single-product.html.twig",[
                    "product" => $Product,
                    "category" => $Category,
                    "prevItem" => $prevItem,
                    "nextItem" => $nextItem
                ]);
            }else{
                //TODO: 404 Page for missing product
            }
        }else{
            return $this->redirectToRoute("my_homepage");
        }
    }

    /**
     * @Route("/destroy-cart", name="empty_cart")
     */
    public function emptyCartAction()
    {
        $this->get('app.cart_provider')->destroyCart();
        return $this->redirectToRoute("my_homepage");
    }

    /**
     * @Route("/add-to-cart", name="add_to_cart")
     */
    public function addCartAction(Request $request)
    {
        if( $request->request->has('product') ){

            /*
             * Now, we validate the action by looking for the different KEY components.
             * For example, we reallly need to know which PRODUCT we want to add,
             * and the quantity should at least be more than 0
             */
            $product_candidate = $request->request->get('product');

            if( $product_candidate['quantity'] != 0 ){

                if( $product_candidate['id'] != 0 && isset($product_candidate['id']) ){

                    $em = $this->getDoctrine()->getManager();

                    $product = $em->find('ProductsBundle:Product', intval($product_candidate['id']));
                    $quantity = intval($product_candidate['quantity']);

                    if($product){

                        if( isset($product_candidate['size']) && $product_candidate['size'] != 0 ){

                            $size = $em->find("ProductsBundle:ProductSize", intval($product_candidate['size']));

                            if($size){

                                $cart = $this->get('app.cart_provider');

                                $addons = array();

                                if( isset($product_candidate['addon']) && count($product_candidate['addon']) ){
                                    foreach( $product_candidate['addon'] as $addon_id ){
                                        $addon = $em->find("ProductsBundle:ProductAddonOption", intval($addon_id));
                                        if($addon) $addons[] = $addon;
                                    }
                                }

                                if( isset($product_candidate['option']) && count($product_candidate['option']) > 0 ){
                                    foreach($product_candidate['option'] as $opt){
                                        $option = $em->find("ProductsBundle:ProductOption", intval($opt));
                                        $cart->addToCart($product, $size, $option, intval($quantity), $addons);
                                    }
                                }else{
                                    $cart->addToCart($product, $size, new ProductOption(), intval($quantity), $addons);
                                }

                                $this->get('session')->getFlashBag()->add("successes","Item added to cart!");
                                return $this->redirectToRoute("cart_view");
                            }else{
                                $this->get('session')->getFlashBag()->add("errors","That size was missing!");
                                return $this->redirectToRoute("single_product", array("product_id" => $product_candidate['id']));
                            }
                        }else{
                            // No size selected
                            $this->get('session')->getFlashBag()->add("errors","Please select a size.");
                            return $this->redirectToRoute("single_product", array("product_id" => $product_candidate['id']));
                        }
                    }else{
                        // Product not found
                        $this->get('session')->getFlashBag()->add("errors","Product not found!");
                        return $this->redirectToRoute("single_product", array("product_id" => $product_candidate['id']));
                    }
                }else{
                    // Not sure who sent this, but they go to 404
                    $this->get('session')->getFlashBag()->add("errors","Something went wrong!");
                    return $this->redirectToRoute("single_product", array("product_id" => $product_candidate['id']));
                }
            }else{
                // add some message about quantity...
                $this->get('session')->getFlashBag()->add("errors","Please select a QUANTITY.");
                return $this->redirectToRoute("single_product", array("product_id" => $product_candidate['id']));
            }
        }else{
            // not sure who sent this, but they goin to our 404 page.
            $this->get('session')->getFlashBag()->add("errors","Could not add to cart.");
            return $this->redirectToRoute("my_homepage");
        }
    }

    /**
     * @param array $array
     * @return array
     * This method will take a list of Product entities specifically, and create a indexed list
     * we can use to find out order of products
     */
    public function flattenProductsOrder($array)
    {
        if(!empty($array)){
            $return = [];
            /** @var Product $Product */
            foreach($array as $i => $Product){

                $prevId = 0;
                $nextId = 0;

                if(!empty($array[$i-1])){
                    /** @var Product $PreviousProduct */
                    $PreviousProduct = $array[$i-1];
                    $prevId = $PreviousProduct->getId();
                }

                if(!empty($array[$i+1])){
                    /** @var Product $NextProduct */
                    $NextProduct = $array[$i+1];
                    $nextId = $NextProduct->getId();
                }

                $return[$i] = [
                    'prev_product' => $prevId,
                    'product' => $Product->getId(),
                    'next_product' => $nextId
                ];
            }

            return $return;
        }else{
            return [];
        }
    }

    /**
     * @param $productId
     * @param $orderArray
     * @return array
     */
    public function localizeProductOrderInformation($productId)
    {
        if($this->get('session')->has('currentProductsOrder')){
            $orderArray = $this->get('session')->get('currentProductsOrder');
            foreach ($orderArray as $i => $productOrderLocation){
                if($productOrderLocation['product'] == $productId){
                    return $orderArray[$i];
                }
            }
            return false;
        }else{
            return false;
        }
    }
    
}
