<?php

namespace AwardsMartBackend\AdminInterfaceBundle\Controller;

use AwardsMartBackend\ProductsBundle\Entity\Category;
use AwardsMartBackend\ProductsBundle\Entity\CategoryImage;
use AwardsMartBackend\ProductsBundle\Entity\Product;
use AwardsMartBackend\ProductsBundle\Entity\ProductAddon;
use AwardsMartBackend\ProductsBundle\Entity\ProductAddonOption;
use AwardsMartBackend\ProductsBundle\Entity\ProductExtraFee;
use AwardsMartBackend\ProductsBundle\Entity\ProductImage;
use AwardsMartBackend\ProductsBundle\Entity\ProductOption;
use AwardsMartBackend\ProductsBundle\Entity\ProductSize;
use AwardsMartBackend\ProductsBundle\Entity\SizePrice;
use AwardsMartFrontend\PrimarySiteBundle\Entity\LibraryImage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @Route("/administrator/update")
 */
class SingleUpdateRoutesController extends Controller
{
    /**
     * @Route("/new/addon", name="update.create.addon")
     */
    public function createAddonAction(Request $request)
    {
        $addon = new ProductAddon();

        /*
         * If a POST was submitted, we know that the form is in, and we
         * want to run an update.
         */
        if($request->getMethod() == "POST"){

            $error = false;

            $em = $this->getDoctrine()->getEntityManager();

            # Load from POST
            $addonData = $request->request->get('addon');

            # Load from POST
            $optionData = $request->request->get('option');

            # Addon info
            $addon->setName($addonData['name']);
            $addon->setAddonLabel($addonData['label']);
            $addon->setIsActive( boolval(intval($addonData['active'])) );

            # Existing Options
            $newOptions = $optionData['new'];
            if(!empty($newOptions)){
                foreach($newOptions as $eo){
                    $AddonOption = new ProductAddonOption();
                    if($eo['name']){
                        $AddonOption->setName($eo['name']);
                        $AddonOption->setPrice($eo['price']);
                        $addon->addOption( $AddonOption );
                        $em->persist( $AddonOption );
                    }else{
                        $error = true;
                        $this->get('session')->getFlashBag()->add('error','Options should have a name!');
                    }
                }
            }

            # End validation
            if( empty($newOptions) ){
                $error = true;
                $this->get('session')->getFlashBag()->add('error','Addon should have at least one option!');
            }
            if( empty($addonData['name']) ){
                $error = true;
                $this->get('session')->getFlashBag()->add('error','Addon needs to have a name!');
            }

            if(!$error){
                $em->persist($addon);

                $em->flush();

                $this->get('session')->getFlashBag()->add('success','Your addon was created!');

                return $this->redirectToRoute("update.existing.addon", ['addon_id' => $addon->getId()]);
            }
        }

        return $this->render('@AdminInterface/Single/add-addon.html.twig',[
            'addon' => $addon,
            'title' => "Create a new addon"
        ]);
    }

    /**
     * @Route("/existing/addon/{addon_id}", name="update.existing.addon")
     */
    public function updateAddonAction(Request $request, $addon_id = 0)
    {
        if($addon_id){

            $em = $this->getDoctrine()->getEntityManager();
            $addon = $em->find("ProductsBundle:ProductAddon", intval($addon_id));

            /*
             * If a POST was submitted, we know that the form is in, and we
             * want to run an update.
             */
            if($request->getMethod() == "POST"){

                $error = false;

                # Load from POST
                $addonData = $request->request->get('addon');

                # Load from POST
                $optionData = $request->request->get('option');

                # Addon info
                $addon->setName($addonData['name']);
                $addon->setAddonLabel($addonData['label']);
                $addon->setIsActive( boolval(intval($addonData['active'])) );

                # Existing Options
                $existingOptions = @$optionData['existing'];
                if(!empty($existingOptions)){
                    foreach($existingOptions as $eo_id => $eo){
                        $AddonOption = $em->find("ProductsBundle:ProductAddonOption", intval($eo_id));
                        if( $eo['name'] && !empty($eo['name']) ){
                            $AddonOption->setName($eo['name']);
                            $AddonOption->setPrice($eo['price']);
                            $em->persist( $AddonOption );
                        }else{
                            $error = true;
                            $this->get('session')->getFlashBag()->add('error','Addon option needs to have a name!');
                        }
                    }
                }

                # Existing Options
                $newOptions = @$optionData['new'];
                if(!empty($newOptions)){
                    foreach($newOptions as $eo){
                        if( $eo['name'] && !empty($eo['name']) ){
                            $AddonOption = new ProductAddonOption();
                            $AddonOption->setName($eo['name']);
                            $AddonOption->setPrice($eo['price']);
                            $addon->addOption( $AddonOption );
                            $em->persist( $AddonOption );
                        }
                    }
                }

                # End validation
                if( empty($newOptions) && empty($existingOptions) ){
                    $error = true;
                    $this->get('session')->getFlashBag()->add('error','Addon should have at least one option!');
                }
                if( empty($addonData['name']) ){
                    $error = true;
                    $this->get('session')->getFlashBag()->add('error','Addon needs to have a name!');
                }

                if(!$error){
                    $em->persist($addon);

                    $em->flush();

                    $this->get('session')->getFlashBag()->add('success','Your addon was updated!');
                }
            }

            return $this->render("@AdminInterface/Single/add-addon.html.twig",[
                'addon' => $addon,
                'title' => "Update existing addon"
            ]);

        }else{
            throw new NotFoundHttpException("Couldn't load this Addon!");
        }
    }

    /**
     * @Route("/deactivate/addon/{addon_id}", name="deactivate.existing.addon")
     */
    public function deactivateAddonAction($addon_id = 0)
    {
        if($addon_id){

            $em = $this->getDoctrine()->getEntityManager();

            $addon = $em->find("ProductsBundle:ProductAddon", $addon_id);

            $addon->setIsActive(false);

            $em->flush();

            $this->get('session')->getFlashBag()->add("success","Addon successfully de-activated!");

            return $this->redirectToRoute("addons.all.view");

        }else{
            throw new NotFoundHttpException("Couldn't find this addon!");
        }
    }

    /**
     * @Route("/deactivate/addon-option/{addon_option_id}", name="deactivate.existing.addon_option")
     */
    public function deactivateAddonOption($addon_option_id = 0)
    {
        if($addon_option_id){

            $em = $this->getDoctrine()->getEntityManager();

            $addonOption = $em->find("ProductsBundle:ProductAddonOption", $addon_option_id);

            $addonOption->setIsActive(false);

            $em->flush();

            $this->get('session')->getFlashBag()->add("success","Addon option successfully de-activated!");

            return $this->redirectToRoute("update.existing.addon",["addon_id"=>$addonOption->getAddon()->getId()]);

        }else{
            throw new NotFoundHttpException("Couldn't find this addon option!");
        }
    }

    /**
     * @Route("/new/category/{class_id}/{parent_id}", name="update.create.category.parent")
     * @Route("/new/category/", name="update.create.category")
     */
    public function addNewCategory(Request $request, $parent_id=0, $class_id = 1)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $category = new Category();

        if($request->getMethod() == "POST"){

            $error = false;

            // Submitted the form
            $categoryData = $request->request->get('category');
            $category->setIsActive(true);
            $category->setName( $categoryData['name'] );
            $category->setMetaDescription( $categoryData['description'] );
            $category->setType( intval($categoryData['type']) );
            $category->setMetaTitle( $categoryData['title'] );

            // Set the parent now
            if($categoryData['parent_id'] > 0){
                $category->setParent( $em->find("ProductsBundle:Category",intval($categoryData['parent_id'])) );
            }

            // Finally, set and upload the image (and add it)
            if( $request->files->get('primary_image') ){
                $uploadedFile = $request->files->get('primary_image');
                $uploadedPath = $this->get('app.cart_uploader')->upload( $uploadedFile );
                $PrimaryImage = new CategoryImage();
                $PrimaryImage->setDateAdded( new \DateTime() );
                $PrimaryImage->setRole( CategoryImage::THUMBNAIL_ROLE );
                $PrimaryImage->setSource( $uploadedPath );
                $PrimaryImage->setCategory( $category );
                $category->addCategoryImage( $PrimaryImage );
                $em->persist($PrimaryImage);
            }

            if( empty($categoryData['name']) ){
                $error = true;
                $this->get("session")->getFlashBag()->add('error',"Please enter a category name!");
            }

            if(!$error){
                $em->persist( $category );

                $em->flush();

                $this->get("session")->getFlashBag()->add('success',"Your category was created!");

                return $this->redirectToRoute("categories.all.view");
            }
        }

        return $this->render('@AdminInterface/Single/add-category.html.twig',[
            "parent_id" => $parent_id,
            "class_id" => $class_id,
            "category_options" => $em->getRepository("ProductsBundle:Category")->findAll(),
            "category" => $category,
            'title' => 'Add new category'
        ]);
    }

    /**
     * @Route("/existing/category/{category_id}", name="update.existing.category")
     */
    public function updateCategory(Request $request, $category_id = 0)
    {
        $em = $this->getDoctrine()->getEntityManager();

        /** @var Category $category */
        $category = $em->find("ProductsBundle:Category", intval($category_id));

        if($request->getMethod() == "POST"){

            $error = false;

            // Submitted the form
            $categoryData = $request->request->get('category');
            $category->setIsActive(true);
            $category->setName( $categoryData['name'] );
            $category->setMetaDescription( $categoryData['description'] );
            $category->setType( intval($categoryData['type']) );
            $category->setMetaTitle( $categoryData['title'] );

            if($categoryData['parent_id'] > 0){
                $category->setParent( $em->find("ProductsBundle:Category",intval($categoryData['parent_id'])) );
            }

            // Finally, set and upload the image (and add it)
            if( $request->files->get('primary_image') ){
                $uploadedFile = $request->files->get('primary_image');
                $uploadedPath = $this->get('app.cart_uploader')->upload( $uploadedFile );
                $PrimaryImage = $category->getPrimaryImageObject();
                $PrimaryImage->setSource( $uploadedPath );
                $em->persist($PrimaryImage);
            }

            if( empty($categoryData['name']) ){
                $error = true;
                $this->get("session")->getFlashBag()->add('error',"Please enter a category name!");
            }

            if(!$error){
                $em->persist( $category );

                $em->flush();

                $this->get("session")->getFlashBag()->add('success',"Your category was updated!");

                return $this->redirectToRoute("update.existing.category",["category_id" => $category_id]);
            }
        }

        return $this->render('@AdminInterface/Single/add-category.html.twig',[
            "parent_id" => ($category->getParent()) ? ($category->getParent()->getId()) : 0,
            "class_id" => $category->getType(),
            "category_options" => $em->getRepository("ProductsBundle:Category")->findAll(),
            "category" => $category,
            'title' => "Update your category"
        ]);
    }

    /**
     * @Route("/deactivate/category/{category_id}", name="deactivate.existing.category")
     */
    public function deactivateCategoryAction($category_id=0)
    {
        if($category_id){

            $em = $this->getDoctrine()->getEntityManager();

            $category = $em->find("ProductsBundle:Category", $category_id);

            $category->setIsActive(false);

            $em->persist($category);

            $em->flush();

            $this->get('session')->getFlashBag()->add("success","Category successfully de-activated!");

            return $this->redirectToRoute("categories.all.view");

        }else{
            throw new NotFoundHttpException("Couldn't find this category!");
        }
    }

    /**
     * @Route("/new/product/", name="update.create.product")
     */
    public function addNewProduct(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $product = new Product();

        /*
         * CREATE section
         */
        if($request->getMethod() == "POST"){

            $error = false;

            $productData = $request->request->get('product');

            // Start by setting up the new product
            $product->setName( $productData['name'] );
            $product->setMetaTitle( $productData['metatitle'] );
            $product->setMetaDescription( $productData['metadesc'] );
            $product->setDescription( $productData['desc'] );
            $product->setSku( $productData['sku'] );
            $product->setIsActive(true);
            $product->setIsFeatured(false);
            $product->setIsGender(false);

            // Next, any addons selected
            if( !empty($productData['addons']) ){
                foreach( $productData['addons'] as $addon_id ){
                    $addon = $em->find("ProductsBundle:ProductAddon", intval($addon_id));
                    $product->addAddon( $addon );
                }
            }

            // Next, any options selected
            if( !empty($productData['option']) ){
                foreach( $productData['option'] as $value ){
                    if(!empty($value)){
                        $candidate = $em->getRepository("ProductsBundle:ProductOption")->findBy(['name'=>$value]);
                        $candidate = $candidate[0];
                        if(empty($candidate)){
                            $candidate = new ProductOption();
                            $candidate->setIsActive(true);
                            $candidate->setCode("NEW");
                            $candidate->setName($value);
                            $em->persist($candidate);
                        }
                        $product->addOption($candidate);
                    }
                }
            }

            // Next, any categories given
            if( !empty($productData['category']) ){
                foreach( $productData['category'] as $category_id ){
                    $category = $em->find("ProductsBundle:Category", intval($category_id));
                    $product->addCategory( $category );
                }
            }

            // 4) RESET IMAGES
            if( $request->files->get('thumbnail') ){
                $uploadedFile = $request->files->get('thumbnail');
                $filePath = $this->get('app.cart_uploader')->upload( $uploadedFile );

                /** @var ProductImage $existing */
                $existing = $product->getPrimaryImageObject();
                $existing->setSource( $filePath );
                $existing->setRole( ProductImage::THUMBNAIL_ROLE );
                $existing->setProduct( $product );

                $em->persist($existing);
            }
            if( $request->files->get('primary') ){
                $uploadedFile = $request->files->get('primary');
                $filePath = $this->get('app.cart_uploader')->upload( $uploadedFile );

                /** @var ProductImage $existing */
                $existing = $product->getPageImageObject();
                $existing->setSource( $filePath );
                $existing->setRole( ProductImage::MEDIUM_ROLE );
                $existing->setProduct( $product );

                $em->persist($existing);
            }
            if( $request->files->get('zoom') ){
                $uploadedFile = $request->files->get('zoom');
                $filePath = $this->get('app.cart_uploader')->upload( $uploadedFile );

                /** @var ProductImage $existing */
                $existing = $product->getZoomImageObject();
                $existing->setSource( $filePath );
                $existing->setRole( ProductImage::LARGE_ROLE );
                $existing->setProduct( $product );

                $em->persist($existing);
            }

            // Next, Sizes:
            if( !empty($productData['size']['new']) ){
                foreach($productData['size']['new'] as $index => $newSizeData){
                    $newSize = new ProductSize();
                    $newSize->setSize( $newSizeData['size'] );
                    $newSize->setUnits( $newSizeData['units'] );
                    $newSize->setProduct( $product );
                    if( !empty($newSizeData['price']) ){
                        foreach( $newSizeData['price'] as $inx => $priceData ){
                            $newPrice = new SizePrice();
                            $newPrice->setSize( $newSize );
                            $newPrice->setMin( intval($priceData['min']) );
                            $newPrice->setMax( intval($priceData['max']) );
                            $newPrice->setPrice( floatval($priceData['price']) );
                            $newPrice->setIsSingle(false);
                            $newSize->addPrice($newPrice);
                            $em->persist( $newPrice );
                        }
                    }
                    $product->addProductSize( $newSize );
                    $em->persist($newSize);
                }
            }

            // Add FEES
            if( !empty($productData['fee']['new']) ){
                foreach($productData['fee']['new'] as $index => $newFeeData ){
                    $newFee = new ProductExtraFee();
                    $newFee->setFeeAmount( $newFeeData['feeAmount'] );
                    $newFee->setFeeName( $newFeeData['feeName'] );
                    $product->addFee( $newFee );
                    $newFee->setProduct( $product );
                    $em->persist( $newFee );
                }
            }

            // Now, for END validation
            if( empty($productData['name']) ){
                $error = true;
                $this->get('session')->getFlashBag()->add('error',"Please enter a product name!");
            }
            if( empty($productData['sku']) ){
                $error = true;
                $this->get('session')->getFlashBag()->add('error',"Please enter a product number!");
            }
            if( empty($productData['size']['new'] ) ){
                $error = true;
                $this->get('session')->getFlashBag()->add('error',"Please enter at least one size!");
            }

            if(!$error){
                // Persist, and flush
                $em->persist($product);
                $em->flush();

                // Send them back with a nice message!
                $this->get('session')->getFlashBag()->add('success',"Your product has been created!");

                return $this->redirectToRoute("update.existing.product",['product_id'=>$product->getId()]);
            }
        }

        $addonOptions = $em->getRepository("ProductsBundle:ProductAddon")->findBy(['isActive' => 1]);

        $productOptions = $em->getRepository("ProductsBundle:ProductOption")->findBy(['isActive' => 1]);

        $categoryOptions = $em->getRepository("ProductsBundle:Category")->getSelectReadyCategories();

        // Format the ProductOptions
        $finalProductOptions = [];
        foreach( $productOptions as $option ){
            $optionStd = new \stdClass();
            $optionStd->data = $option->getName();
            $optionStd->value = $option->getName();
            $finalProductOptions[] = $optionStd;
        }

        return $this->render('@AdminInterface/Single/add-product.html.twig',[
            'product' => $product,
            'addonOptions' => $addonOptions,
            'productOptions' => json_encode($finalProductOptions),
            'categoryOptions' => $categoryOptions,
            'labelsOptions' => json_encode($em->getRepository('ProductsBundle:SizeLabel')->getAutocompleteReadyList()),
            'title' => 'Create a new product'
        ]);
    }

    /**
     * @Route("/existing/product/{product_id}", name="update.existing.product")
     */
    public function updateExistingProduct(Request $request, $product_id = 0)
    {
        if( $product_id ){
            $em = $this->getDoctrine()->getManager();

            $product = $em->find("ProductsBundle:Product", intval($product_id));

            if($request->getMethod() == "POST"){

                $error = false;

                $productData = $request->request->get('product');

                // Start by setting up the new product
                $product->setName( $productData['name'] );
                $product->setMetaTitle( $productData['metatitle'] );
                $product->setMetaDescription( $productData['metadesc'] );
                $product->setDescription( $productData['desc'] );
                $product->setSku( $productData['sku'] );
                $product->setIsActive( boolval(intval($productData['active'])) );

                // 1) RESET ADDONS
                $product->resetAddons();
                if( !empty($productData['addons']) ){
                    foreach( $productData['addons'] as $addon_id ){
                        $addon = $em->find("ProductsBundle:ProductAddon", intval($addon_id));
                        $product->addAddon( $addon );
                    }
                }

                // 2) RESET OPTIONS
                $product->resetOptions();
                if( !empty($productData['option']) ){
                    foreach( $productData['option'] as $value ){
                        if(!empty($value)){
                            $candidate = $em->getRepository("ProductsBundle:ProductOption")->findBy(['name'=>$value]);
                            $candidate = @$candidate[0];
                            if(empty($candidate)){
                                $candidate = new ProductOption();
                                $candidate->setIsActive(true);
                                $candidate->setCode("NEW");
                                $candidate->setName($value);
                                $em->persist($candidate);
                            }
                            $product->addOption($candidate);
                        }
                    }
                }

                // 3) RESET CATEGORIES
                $product->resetCategories();
                if( !empty($productData['category']) ){
                    foreach( $productData['category'] as $category_id ){
                        $category = $em->find("ProductsBundle:Category", intval($category_id));
                        $product->addCategory( $category );
                    }
                }

                // 4) RESET IMAGES
                if( $request->files->get('thumbnail') ){
                    $uploadedFile = $request->files->get('thumbnail');
                    $filePath = $this->get('app.cart_uploader')->upload( $uploadedFile );

                    /** @var ProductImage $existing */
                    $existing = $product->getPrimaryImageObject();
                    $existing->setSource( $filePath );
                    $existing->setRole( ProductImage::THUMBNAIL_ROLE );
                    $existing->setProduct( $product );

                    $em->persist($existing);
                }
                if( $request->files->get('primary') ){
                    $uploadedFile = $request->files->get('primary');
                    $filePath = $this->get('app.cart_uploader')->upload( $uploadedFile );

                    /** @var ProductImage $existing */
                    $existing = $product->getPageImageObject();
                    $existing->setSource( $filePath );
                    $existing->setRole( ProductImage::MEDIUM_ROLE );
                    $existing->setProduct( $product );

                    $em->persist($existing);
                }
                if( $request->files->get('zoom') ){
                    $uploadedFile = $request->files->get('zoom');
                    $filePath = $this->get('app.cart_uploader')->upload( $uploadedFile );

                    /** @var ProductImage $existing */
                    $existing = $product->getZoomImageObject();
                    $existing->setSource( $filePath );
                    $existing->setRole( ProductImage::LARGE_ROLE );
                    $existing->setProduct( $product );

                    $em->persist($existing);
                }

                // 5) UPDATE 'EXISTING' SIZES
                $product->resetSizes();
                if( !empty($productData['size']['existing']) ){
                    foreach($productData['size']['existing'] as $sizeId => $newSizeData){
                        $newSize = $em->find("ProductsBundle:ProductSize", intval($sizeId));
                        if(!$newSize) $newSize = new ProductSize();
                        $newSize->setSize( $newSizeData['size'] );
                        $newSize->setUnits( $newSizeData['units'] );
                        $newSize->setProduct( $product );
                        $newSize->resetPrices();
                        if( !empty($newSizeData['price']) ){
                            foreach( $newSizeData['price'] as $priceId => $priceData ){
                                $newPrice = $em->find("ProductsBundle:SizePrice", intval($priceId));
                                if(!$newPrice) $newPrice = new SizePrice();
                                $newPrice->setSize( $newSize );
                                $newPrice->setMin( intval($priceData['min']) );
                                $newPrice->setMax( intval($priceData['max']) );
                                $newPrice->setPrice( floatval($priceData['price']) );
                                $newPrice->setIsSingle(false);
                                $newSize->addPrice($newPrice);
                                $em->persist( $newPrice );
                            }
                        }
                        $product->addProductSize( $newSize );
                        $em->persist($newSize);
                    }
                }

                // UPDATE 'EXISTING' FEES
                $product->resetFees();
                if( !empty($productData['fee']['existing']) ){
                    foreach($productData['fee']['existing'] as $feeId => $newFeeData){
                        $newFee = $em->find("ProductsBundle:ProductExtraFee", intval($feeId));
                        if(!$newFee) $newFee = new ProductExtraFee();
                        $newFee->setFeeAmount( $newFeeData['feeAmount'] );
                        $newFee->setFeeName( $newFeeData['feeName'] );
                        $newFee->setProduct( $product );
                        $product->addFee( $newFee );
                    }
                }

                // 6) ADD 'NEW' SIZES
                if( !empty($productData['size']['new']) ){
                    foreach($productData['size']['new'] as $index => $newSizeData){
                        $newSize = new ProductSize();
                        $newSize->setSize( $newSizeData['size'] );
                        $newSize->setUnits( $newSizeData['units'] );
                        $newSize->setProduct( $product );
                        if( !empty($newSizeData['price']) ){
                            foreach( $newSizeData['price'] as $inx => $priceData ){
                                $newPrice = new SizePrice();
                                $newPrice->setSize( $newSize );
                                $newPrice->setMin( intval($priceData['min']) );
                                $newPrice->setMax( intval($priceData['max']) );
                                $newPrice->setPrice( floatval($priceData['price']) );
                                $newPrice->setIsSingle(false);
                                $newSize->addPrice($newPrice);
                                $em->persist( $newPrice );
                            }
                        }
                        $product->addProductSize( $newSize );
                        $em->persist($newSize);
                    }
                }

                // Add 'NEW' FEES
                if( !empty($productData['fee']['new']) ){
                    foreach($productData['fee']['new'] as $index => $newFeeData ){
                        $newFee = new ProductExtraFee();
                        $newFee->setFeeAmount( $newFeeData['feeAmount'] );
                        $newFee->setFeeName( $newFeeData['feeName'] );
                        $product->addFee( $newFee );
                        $newFee->setProduct( $product );
                        $em->persist( $newFee );
                    }
                }

                // 7) end validation
                if( empty($productData['name']) ){
                    $error = true;
                    $this->get('session')->getFlashBag()->add('error',"Please enter a product name!");
                }
                if( empty($productData['sku']) ){
                    $error = true;
                    $this->get('session')->getFlashBag()->add('error',"Please enter a product number!");
                }
                if( empty($productData['size']['existing']) && empty($productData['size']['new'] ) ){
                    $error = true;
                    $this->get('session')->getFlashBag()->add('error',"Please enter at least one size!");
                }

                if(!$error){
                    // Persist, and flush
                    $em->persist($product);
                    $em->flush();

                    // Send them back with a nice message!
                    $this->get('session')->getFlashBag()->add('success',"Your product has been updated!");
                }
            }

            $addonOptions = $em->getRepository("ProductsBundle:ProductAddon")->findBy(['isActive' => 1]);

            $productOptions = $em->getRepository("ProductsBundle:ProductOption")->findBy(['isActive' => 1]);

            $categoryOptions = $em->getRepository("ProductsBundle:Category")->getSelectReadyCategories();

            // Format the ProductOptions
            $finalProductOptions = [];
            foreach( $productOptions as $option ){
                $optionStd = new \stdClass();
                $optionStd->data = $option->getName();
                $optionStd->value = $option->getName();
                $finalProductOptions[] = $optionStd;
            }

            return $this->render('@AdminInterface/Single/add-product.html.twig',[
                'product' => $product,
                'addonOptions' => $addonOptions,
                'productOptions' => json_encode($finalProductOptions),
                'categoryOptions' => $categoryOptions,
                'labelsOptions' => json_encode($em->getRepository('ProductsBundle:SizeLabel')->getAutocompleteReadyList()),
                'title' => 'Update your product'
            ]);
        }else{
            throw new NotFoundHttpException("Product not found");
        }
    }

    /**
     * @Route("/deactivate/product/{product_id}", name="deactivate.existing.product")
     */
    public function deactivateProductAction($product_id=0)
    {
        if($product_id){

            $em = $this->getDoctrine()->getEntityManager();

            $product = $em->find("ProductsBundle:Product", $product_id);

            $product->setIsActive(false);

            $em->persist($product);

            $em->flush();

            $this->get('session')->getFlashBag()->add("success","Product successfully de-activated!");

            return $this->redirectToRoute("products_all_view");

        }else{
            throw new NotFoundHttpException("Couldn't find this product!");
        }
    }

    /**
     * @Route("/existing/cms-page/{page_id}", name="update.existing.page")
     */
    public function updateExistingPage(Request $request, $page_id=0)
    {
        if( $page_id ){

            $em = $this->getDoctrine()->getEntityManager();
            $cms_page = $em->find("PrimarySiteBundle:HtmlPage", intval($page_id));

            /*
             * UPDATE/POST STUFF HERE
             */
            if( $request->getMethod() == "POST" ){
                $pageData = $request->request->get('page');
                $cms_page->setContent( $pageData['content'] );
                $cms_page->setTitle( $pageData['title'] );
                $cms_page->setMetaTitle( $pageData['metaTitle'] );
                $em->persist( $cms_page );
                $em->flush();

                $this->get('session')->getFlashBag()->add("success","Your page was updated!");
            }
            /* --- */

            return $this->render('@AdminInterface/Single/add-page.html.twig',[
                'page' => $cms_page
            ]);
        }else{
            throw new NotFoundHttpException("Could not find this page!");
        }
    }

    /**
     * @Route("/new/library-image", name="create.new.image")
     */
    public function addLibraryImage(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $image = new LibraryImage();

        /*
         * CREATE ACTION - POST
         */
        if( $request->getMethod() == "POST"){
            $imageData = $request->request->get('image');
            $image->setNickname( $imageData['nickname'] );

            if( $request->files->get('source') ){
                $uploadedFile = $request->files->get('source');
                $uploadedPath = $this->get('app.cart_uploader')->upload($uploadedFile);
                $image->setSource( $uploadedPath );
            }

            $em->persist($image);

            $em->flush();

            $this->get('session')->getFlashBag()->add('success',"Your image was successfully added!");

            return $this->redirectToRoute("images.all");
        }
        /* *** */

        return $this->render('@AdminInterface/Single/add-library-image.html.twig',[
            'image' => $image
        ]);
    }

    /**
     * @Route("/deactivate/library-image/{image_id}", name="deactivate.existing.image")
     */
    public function removeLibraryImage($image_id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove( $em->find("PrimarySiteBundle:LibraryImage", intval($image_id)) );
        $em->flush();
        $this->get('session')->getFlashBag()->add('success','Your image was removed!');
        return $this->redirectToRoute("images.all");
    }
}
