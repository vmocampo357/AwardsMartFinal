<?php

namespace AwardsMartBackend\AdminInterfaceBundle\Controller;

use AwardsMartBackend\ProductsBundle\Data\OrderSearchCriteria;
use AwardsMartBackend\ProductsBundle\Data\ProductSearchCriteria;
use AwardsMartBackend\ProductsBundle\Entity\Category;
use AwardsMartBackend\ProductsBundle\Repository\CategoryRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/administrator")
 */
class DefaultController extends Controller
{

    /**
     * @Route("/login", name="main_administrator_login")
     */
    public function loginPageAction()
    {
        return $this->render('@AdminInterface/Default/login.html.twig');
    }

    /**
     * @Route("/")
     * @Route("/dashboard", name="main_administrator_container")
     */
    public function indexAction()
    {
        return $this->render('@AdminInterface/Default/dashboard.html.twig');
    }

    /**
     * @Route("/products/all", name="products_all_view")
     * @Route("/products/all/page/{page}", name="products_paged_view")
     */
    public function showAllProductsAction(Request $request, $page = 1)
    {
        // Start an EntityManager
        $em = $this->getDoctrine()->getManager();

        // Start a criteria object
        $criteria = new ProductSearchCriteria();

        // Checking for products matching text
        if( $request->query->has('text') ){
            $criteria->setByText( $request->query->get('text') );
            $criteria->setBySku( $request->query->get('text') );
        }

        // Checking for category specific products
        if( $request->query->has('category') ){
            $relatedCategories = $em->getRepository('ProductsBundle:Category')->getRelatedCategoryIdsFor( intval(
                $request->query->get('category')
            ) );
            $criteria->setByCategoryId( $relatedCategories );
        }

        // Checking for active/inactive products
        if( $request->query->has('active') ){
            $criteria->setActive( boolval(intval($request->query->get('active'))) );
        }

        // If no filters are active, add the MaxID directive to get this to load faster
        if( $request->query->count() == 0 ){
            $criteria->setByMaxId(true);
        }

        // Build a menu for themes, then types
        $theme_options = $em->getRepository("ProductsBundle:Category")->buildCategoryMenuForType( CategoryRepository::THEMES_TYPE );
        $prods_options = $em->getRepository("ProductsBundle:Category")->buildCategoryMenuForType( CategoryRepository::PRODUCTS_TYPE );

        // Get information about which page, etc.
        $limit = 20;

        // Do the final query (also, build the pagination info)
        $products_repo = $em->getRepository("ProductsBundle:Product");
        $products = $products_repo->findProductsByCriteriaPaginated( $criteria,$page,$limit );

        // Build out the info we need to build the page links
        $totalProducts = $products->count();
        $maxPages = ceil($totalProducts / $limit);

        // Finally, output the final..output
        return $this->render('@AdminInterface/Default/all-products.html.twig',[
            'products' => $products->getIterator(),
            'theme_options' => $theme_options,
            'product_options' => $prods_options,
            'pages' => $maxPages,
            'curr' => $page,
            'total' => $totalProducts
        ]);
    }

    /**
     * @Route("/addons/all", name="addons.all.view")
     * @Route("/addons/page/{page}", name="addons.paged.view")
     */
    public function showAllAddonsAction(Request $request, $page=1)
    {
        // Get information about which page, etc.
        $limit = 10;

        // Do the stuff
        $em = $this->getDoctrine()->getManager();
        $addons = $em->getRepository("ProductsBundle:ProductAddon")->findPaginatedAll($limit,$page);

        // Get some info for the paginator
        $totalAddons = $addons->count();
        $maxPages = ceil($totalAddons / $limit);

        return $this->render('@AdminInterface/Default/all-addons.html.twig',[
            'addons' => $addons->getIterator(),
            'pages' => $maxPages,
            'curr' => $page,
            'total' => $totalAddons
        ]);
    }

    /**
     * @Route("/orders/view/{order_id}", name="orders.single.view")
     */
    public function viewSingleOrder(Request $request, $order_id = 0)
    {
        $order = $this->getDoctrine()->getEntityManager()->find("ProductsBundle:CustomerOrder", intval($order_id));

        $order->getCart()->updateTotal();

        return $this->render("@AdminInterface/Single/view-order.html.twig",[
           "order" => $order
        ]);
    }

    /**
     * @Route("/categories/all", name="categories.all.view")
     */
    public function showAllCategories()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('@AdminInterface/Default/all-categories.html.twig',[
            "products" => 
                $em->getRepository("ProductsBundle:Category")
                   ->buildCategoryMenuForType(CategoryRepository::PRODUCTS_TYPE, false),
            "themes" =>
                $em->getRepository("ProductsBundle:Category")
                    ->buildCategoryMenuForType(CategoryRepository::THEMES_TYPE, false)
        ]);
    }

    /**
     * @Route("/categories/products/order/{category_id}", defaults={"category_id"="0"}, name="categories.products.order")
     */
    public function updateCategoryProductsOrderAction($category_id)
    {
        # Get emily
        $category_id = intval($category_id);
        $em = $this->getDoctrine()->getManager();

        # Get its repo
        $repo = $em->getRepository("ProductsBundle:Category");

        # Load all the products as they would on the page
        $products = $repo->loadCategoryProductsFlattened($category_id);

        # Load the Category
        $category = $repo->find($category_id);

        # Send it out
        return $this->render('AdminInterfaceBundle:Single:update-category-products-order.html.twig',[
            'category' => $category,
            'products' => $products
        ]);
    }

    /**
     * @Route("/categories/products/order_ajax", name="categories.products.order.ajax")
     */
    public function ajaxUpdateCategoryProductsOrderAction(Request $request)
    {
        if($request->query->get('order_array'))
        {
            # Get emily
            $em = $this->getDoctrine()->getManager();
            
            # Start a response
            $response = ['error' => false];
            
            # Go through each product, load it, persist, etc.
            $order_array = $request->query->get('order_array');
            
            foreach($order_array as $i)
            {
                $product_id = intval($i['product_id']);
                $order = intval($i['order']);
                $Product = $em->find('ProductsBundle:Product', $product_id);
                $Product->setOrderIndexNum($order);
                $em->persist($Product);
            }

            $em->flush();

            return new JsonResponse($response);
        }
    }

    /**
     * @Route("/orders/all", name="orders.all.view")
     * @Route("/orders/page/{page}", name="orders.paged.view")
     */
    public function showAllOrders(Request $request, $page = 1)
    {
        // Get information about which page, etc.
        $limit = 10;

        // Start the Criteria
        $criteria = new OrderSearchCriteria();

        // Checking for orders matching text
        if( $request->query->has('text') ){
            $criteria->setText( $request->query->get('text') );
        }

        // If the Search has a TOTAL
        if( $request->query->has('total') ){
            $criteria->setTotal( $request->query->get('total') );
        }

        // If the Search has a GTE or LTE
        if( $request->query->has('gtelte') ){
            switch( intval($request->query->get('gtelte')) ){
                case(-1):
                    $criteria->setLte(true);
                    break;
                case(1):
                    $criteria->setGte(true);
                    break;
            }
        }

        // Do the stuff
        $em = $this->getDoctrine()->getManager();
        $orders = $em->getRepository("ProductsBundle:CustomerOrder")->findCriteriaOrdersPaged($criteria, $page, $limit);

        // Get some info for the paginator
        $totalOrders = $orders->count();
        $maxPages = ceil($totalOrders / $limit);

        return $this->render('@AdminInterface/Default/all-orders.html.twig',[
            'orders' => $orders->getIterator(),
            'pages' => $maxPages,
            'curr' => $page,
            'total' => $totalOrders
        ]);
    }

    /**
     * @Route("/cms-pages/all", name="cms.pages.all")
     */
    public function showAllPages()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $pages = $em->getRepository("PrimarySiteBundle:HtmlPage")->findAll();

        return $this->render('@AdminInterface/Default/all-pages.html.twig',[
            "pages" => $pages
        ]);
    }

    /**
     * @Route("/library-images/all", name="images.all")
     */
    public function showAllImages()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $images = $em->getRepository("PrimarySiteBundle:LibraryImage")->findAll();

        return $this->render("@AdminInterface/Default/all-images.html.twig",[
            'images' => $images
        ]);
    }
}
