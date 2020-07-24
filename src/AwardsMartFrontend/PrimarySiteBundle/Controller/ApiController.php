<?php

namespace AwardsMartFrontend\PrimarySiteBundle\Controller;

use AwardsMartBackend\ProductsBundle\Data\ProductSearchCriteria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api");
 */
class ApiController extends Controller
{
    /**
     * @Route("/search-products", name="api_search_products")
     */
    public function indexAction(Request $request)
    {
        $results = array("No results");
        $final_set = [];

        if( $request->request->count() > 0 ){
            $criteria = $request->request->get('criteria');
            $min_price = $criteria['min_price'];
            $max_price = $criteria['max_price'];
            $text = $criteria['text'];
            $sort_by = intval($criteria['sortBy']);
            $categories = ( isset($criteria['categories']) && !empty($criteria['categories']) ) ? $criteria['categories'] : false;
            $SearchCriteria = new ProductSearchCriteria();

            # Set text criteria
            if( $text && !empty($text) ){
                $SearchCriteria->setByText($text);
            }else{
                # Set maximum price
                if( $max_price && $max_price > 0 ) $SearchCriteria->setByPriceMax(floatval($max_price));

                # Set minimum price
                if( $min_price && $min_price > 0 ) $SearchCriteria->setByPriceMin(floatval($min_price));

                # If we have categories, loop through each, find related cats, and add them all.....
                if( !empty($categories) ){
                    foreach($categories as $category_parent){
                        $final_set = $final_set + $this
                                ->getDoctrine()
                                ->getRepository("ProductsBundle:Category")
                                ->getRelatedCategoryIdsFor($category_parent);
                    }
                    $SearchCriteria->setByCategoryId($final_set);
                }
            }

            # Set sorting
            if( $sort_by && !empty($sort_by) ) $SearchCriteria->setSortBy($sort_by);

            $repo = $this
                ->getDoctrine()
                ->getRepository("ProductsBundle:Product");

            $results = $repo->findProductsByCriteria( $SearchCriteria );
        }

        return new JsonResponse([
            "products" => $results,
            "finalSet" => $final_set,
            "count" => count($results),
            "query" => $repo->query
        ]);
    }
}
