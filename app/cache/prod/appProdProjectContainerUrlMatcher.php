<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // api_search_products
        if ($pathinfo === '/api/search-products') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\ApiController::indexAction',  '_route' => 'api_search_products',);
        }

        // my_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_homepage');
            }

            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_homepage',);
        }

        // cart_view
        if ($pathinfo === '/my-cart') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\DefaultController::cartViewAction',  '_route' => 'cart_view',);
        }

        // cart_item_update
        if (0 === strpos($pathinfo, '/update-cart-item') && preg_match('#^/update\\-cart\\-item/(?P<cart_item_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cart_item_update')), array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\DefaultController::updateCartItemAction',));
        }

        // cart_item_delete
        if (0 === strpos($pathinfo, '/remove-cart-item') && preg_match('#^/remove\\-cart\\-item(?:/(?P<cart_item_id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cart_item_delete')), array (  'cart_item_id' => 0,  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\DefaultController::removeCartItemAction',));
        }

        if (0 === strpos($pathinfo, '/checkout')) {
            // cart_checkout
            if (rtrim($pathinfo, '/') === '/checkout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cart_checkout;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cart_checkout');
                }

                return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\DefaultController::checkoutAction',  '_route' => 'cart_checkout',);
            }
            not_cart_checkout:

            // cart_checkout_post
            if ($pathinfo === '/checkout/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cart_checkout_post;
                }

                return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\DefaultController::checkoutPostAction',  '_route' => 'cart_checkout_post',);
            }
            not_cart_checkout_post:

        }

        // main_search_container
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\DefaultController::searchPageContainer',  '_route' => 'main_search_container',);
        }

        // delete_upload
        if (0 === strpos($pathinfo, '/delete-upload') && preg_match('#^/delete\\-upload/(?P<cart_item_id>[^/]++)/(?P<upload_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_upload')), array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\DefaultController::removeUploadAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // about_us_cms
            if ($pathinfo === '/about-us') {
                return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::aboutUsAction',  '_route' => 'about_us_cms',);
            }

            // artwork_cms
            if ($pathinfo === '/artwork') {
                return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::artworkAction',  '_route' => 'artwork_cms',);
            }

        }

        // textwriting_cms
        if ($pathinfo === '/text-writing') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::textWritingAction',  '_route' => 'textwriting_cms',);
        }

        // mfgprocess_cms
        if ($pathinfo === '/mfg-process') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::mfgProcessAction',  '_route' => 'mfgprocess_cms',);
        }

        // whitepapers_cms
        if ($pathinfo === '/white-papers') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::whitePapersAction',  '_route' => 'whitepapers_cms',);
        }

        // contact_cms
        if ($pathinfo === '/contact-us') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::contactUsAction',  '_route' => 'contact_cms',);
        }

        // shipping_cms
        if ($pathinfo === '/shipping') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::shippingAction',  '_route' => 'shipping_cms',);
        }

        // warranty_cms
        if ($pathinfo === '/warranty') {
            return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::warrantyAction',  '_route' => 'warranty_cms',);
        }

        if (0 === strpos($pathinfo, '/pr')) {
            // privacypolicy_cms
            if ($pathinfo === '/privacy-policy') {
                return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\HtmlPagesController::privacyPolicyAction',  '_route' => 'privacypolicy_cms',);
            }

            if (0 === strpos($pathinfo, '/products')) {
                if (0 === strpos($pathinfo, '/products/categories')) {
                    // invalid_categories
                    if (rtrim($pathinfo, '/') === '/products/categories') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'invalid_categories');
                        }

                        return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\ProductsController::invalidCategoryViewAction',  '_route' => 'invalid_categories',);
                    }

                    // products_category_view
                    if (preg_match('#^/products/categories/(?P<category_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_category_view')), array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\ProductsController::CategoryViewAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/products/single')) {
                    // single_product
                    if (preg_match('#^/products/single/(?P<category_id>[^/]++)/(?P<product_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'single_product')), array (  'category_id' => 0,  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\ProductsController::ProductViewAction',));
                    }

                    // awardsmartfrontend_primarysite_products_productview
                    if (preg_match('#^/products/single/(?P<product_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'awardsmartfrontend_primarysite_products_productview')), array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\ProductsController::ProductViewAction',));
                    }

                }

                // empty_cart
                if ($pathinfo === '/products/destroy-cart') {
                    return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\ProductsController::emptyCartAction',  '_route' => 'empty_cart',);
                }

                // add_to_cart
                if ($pathinfo === '/products/add-to-cart') {
                    return array (  '_controller' => 'AwardsMartFrontend\\PrimarySiteBundle\\Controller\\ProductsController::addCartAction',  '_route' => 'add_to_cart',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/data-provider')) {
            if (0 === strpos($pathinfo, '/data-provider/category-menu-builder')) {
                // awardsmartbackend_frontprovider_default_buildcategorymenufortype
                if (preg_match('#^/data\\-provider/category\\-menu\\-builder(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'awardsmartbackend_frontprovider_default_buildcategorymenufortype')), array (  'type' => 1,  '_controller' => 'AwardsMartBackend\\FrontProviderBundle\\Controller\\DefaultController::buildCategoryMenuForTypeAction',));
                }

                // awardsmartbackend_frontprovider_default_testcategorymenu
                if (rtrim($pathinfo, '/') === '/data-provider/category-menu-builder/test') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'awardsmartbackend_frontprovider_default_testcategorymenu');
                    }

                    return array (  '_controller' => 'AwardsMartBackend\\FrontProviderBundle\\Controller\\DefaultController::testCategoryMenuAction',  '_route' => 'awardsmartbackend_frontprovider_default_testcategorymenu',);
                }

            }

            // awardsmartbackend_frontprovider_default_getcartcount
            if ($pathinfo === '/data-provider/get-cart-count') {
                return array (  '_controller' => 'AwardsMartBackend\\FrontProviderBundle\\Controller\\DefaultController::getCartCountAction',  '_route' => 'awardsmartbackend_frontprovider_default_getcartcount',);
            }

        }

        if (0 === strpos($pathinfo, '/administrator')) {
            // main_administrator_login
            if ($pathinfo === '/administrator/login') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::loginPageAction',  '_route' => 'main_administrator_login',);
            }

            // awardsmartbackend_admininterface_default_index
            if (rtrim($pathinfo, '/') === '/administrator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'awardsmartbackend_admininterface_default_index');
                }

                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'awardsmartbackend_admininterface_default_index',);
            }

            // main_administrator_container
            if ($pathinfo === '/administrator/dashboard') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'main_administrator_container',);
            }

            if (0 === strpos($pathinfo, '/administrator/products/all')) {
                // products_all_view
                if ($pathinfo === '/administrator/products/all') {
                    return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllProductsAction',  '_route' => 'products_all_view',);
                }

                // products_paged_view
                if (0 === strpos($pathinfo, '/administrator/products/all/page') && preg_match('#^/administrator/products/all/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_paged_view')), array (  'page' => 1,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllProductsAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/addons')) {
                // addons.all.view
                if ($pathinfo === '/administrator/addons/all') {
                    return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllAddonsAction',  '_route' => 'addons.all.view',);
                }

                // addons.paged.view
                if (0 === strpos($pathinfo, '/administrator/addons/page') && preg_match('#^/administrator/addons/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'addons.paged.view')), array (  'page' => 1,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllAddonsAction',));
                }

            }

            // orders.single.view
            if (0 === strpos($pathinfo, '/administrator/orders/view') && preg_match('#^/administrator/orders/view(?:/(?P<order_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders.single.view')), array (  'order_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::viewSingleOrder',));
            }

            // categories.all.view
            if ($pathinfo === '/administrator/categories/all') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllCategories',  '_route' => 'categories.all.view',);
            }

            if (0 === strpos($pathinfo, '/administrator/orders')) {
                // orders.all.view
                if ($pathinfo === '/administrator/orders/all') {
                    return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllOrders',  '_route' => 'orders.all.view',);
                }

                // orders.paged.view
                if (0 === strpos($pathinfo, '/administrator/orders/page') && preg_match('#^/administrator/orders/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders.paged.view')), array (  'page' => 1,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllOrders',));
                }

            }

            // cms.pages.all
            if ($pathinfo === '/administrator/cms-pages/all') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllPages',  '_route' => 'cms.pages.all',);
            }

            // images.all
            if ($pathinfo === '/administrator/library-images/all') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\DefaultController::showAllImages',  '_route' => 'images.all',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // admin.login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SecurityController::indexAction',  '_route' => 'admin.login',);
            }

            // admin.logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'admin.logout',);
            }

        }

        if (0 === strpos($pathinfo, '/administrator/update')) {
            // update.create.addon
            if ($pathinfo === '/administrator/update/new/addon') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::createAddonAction',  '_route' => 'update.create.addon',);
            }

            // update.existing.addon
            if (0 === strpos($pathinfo, '/administrator/update/existing/addon') && preg_match('#^/administrator/update/existing/addon(?:/(?P<addon_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update.existing.addon')), array (  'addon_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::updateAddonAction',));
            }

            if (0 === strpos($pathinfo, '/administrator/update/deactivate/addon')) {
                // deactivate.existing.addon
                if (preg_match('#^/administrator/update/deactivate/addon(?:/(?P<addon_id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate.existing.addon')), array (  'addon_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::deactivateAddonAction',));
                }

                // deactivate.existing.addon_option
                if (0 === strpos($pathinfo, '/administrator/update/deactivate/addon-option') && preg_match('#^/administrator/update/deactivate/addon\\-option(?:/(?P<addon_option_id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate.existing.addon_option')), array (  'addon_option_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::deactivateAddonOption',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/update/new/category')) {
                // update.create.category.parent
                if (preg_match('#^/administrator/update/new/category(?:/(?P<class_id>[^/]++)(?:/(?P<parent_id>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update.create.category.parent')), array (  'parent_id' => 0,  'class_id' => 1,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::addNewCategory',));
                }

                // update.create.category
                if (rtrim($pathinfo, '/') === '/administrator/update/new/category') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'update.create.category');
                    }

                    return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::addNewCategory',  '_route' => 'update.create.category',);
                }

            }

            // update.existing.category
            if (0 === strpos($pathinfo, '/administrator/update/existing/category') && preg_match('#^/administrator/update/existing/category(?:/(?P<category_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update.existing.category')), array (  'category_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::updateCategory',));
            }

            // deactivate.existing.category
            if (0 === strpos($pathinfo, '/administrator/update/deactivate/category') && preg_match('#^/administrator/update/deactivate/category(?:/(?P<category_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate.existing.category')), array (  'category_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::deactivateCategoryAction',));
            }

            // update.create.product
            if (rtrim($pathinfo, '/') === '/administrator/update/new/product') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'update.create.product');
                }

                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::addNewProduct',  '_route' => 'update.create.product',);
            }

            // update.existing.product
            if (0 === strpos($pathinfo, '/administrator/update/existing/product') && preg_match('#^/administrator/update/existing/product(?:/(?P<product_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update.existing.product')), array (  'product_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::updateExistingProduct',));
            }

            // deactivate.existing.product
            if (0 === strpos($pathinfo, '/administrator/update/deactivate/product') && preg_match('#^/administrator/update/deactivate/product(?:/(?P<product_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate.existing.product')), array (  'product_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::deactivateProductAction',));
            }

            // update.existing.page
            if (0 === strpos($pathinfo, '/administrator/update/existing/cms-page') && preg_match('#^/administrator/update/existing/cms\\-page(?:/(?P<page_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update.existing.page')), array (  'page_id' => 0,  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::updateExistingPage',));
            }

            // create.new.image
            if ($pathinfo === '/administrator/update/new/library-image') {
                return array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::addLibraryImage',  '_route' => 'create.new.image',);
            }

            // deactivate.existing.image
            if (0 === strpos($pathinfo, '/administrator/update/deactivate/library-image') && preg_match('#^/administrator/update/deactivate/library\\-image/(?P<image_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate.existing.image')), array (  '_controller' => 'AwardsMartBackend\\AdminInterfaceBundle\\Controller\\SingleUpdateRoutesController::removeLibraryImage',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
