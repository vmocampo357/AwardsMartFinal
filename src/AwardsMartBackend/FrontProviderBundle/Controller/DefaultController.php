<?php

namespace AwardsMartBackend\FrontProviderBundle\Controller;

use AwardsMartBackend\ProductsBundle\Entity\Category;
use AwardsMartBackend\ProductsBundle\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/data-provider")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/category-menu-builder/{type}")
     */
    public function buildCategoryMenuForTypeAction($type=1)
    {
        $category_repo = $this->getDoctrine()->getManager()->getRepository('ProductsBundle:Category');
        $tree = $category_repo->buildCategoryMenuForType( $type );
        $html = [];
        foreach($tree as $i => $set){
            $URL = $this->get('router')->generate(
                'products_category_view',
                array('category_id' => $set['id'])
            );
            $html[] = "<li><a href='" . $URL . "'>" . $set['name'] . "</a></li>";
        }
        return new Response(implode("",$html));
    }

    /**
     * @Route("/category-menu-builder/test/")
     */
    public function testCategoryMenuAction()
    {
        /** @var CategoryRepository $category_repo */
        $category_repo = $this->getDoctrine()->getManager()->getRepository('ProductsBundle:Category');
        dump( $category_repo->buildTreeFromType(2) );
    }

    /**
     * @Route("/get-cart-count");
     */
    public function getCartCountAction()
    {
        $cart = $this->get('app.cart_provider')->getCart();
        return new Response("(".number_format($cart->getRunningQuantity(),0,".",",").")");
    }
}
