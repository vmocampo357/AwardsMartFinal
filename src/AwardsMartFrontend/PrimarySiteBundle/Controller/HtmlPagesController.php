<?php

namespace AwardsMartFrontend\PrimarySiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HtmlPagesController extends Controller
{
    /**
     * @Route("/about-us", name="about_us_cms")
     */
    public function aboutUsAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 21);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

    /**
     * @Route("/artwork", name="artwork_cms")
     */
    public function artworkAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 22);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

    /**
     * @Route("/text-writing", name="textwriting_cms")
     */
    public function textWritingAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 23);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

    /**
 * @Route("/mfg-process", name="mfgprocess_cms")
 */
    public function mfgProcessAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 24);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

    /**
     * @Route("/white-papers", name="whitepapers_cms")
     */
    public function whitePapersAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 29);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

    /**
     * @Route("/contact-us", name="contact_cms")
     */
    public function contactUsAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 27);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

    /**
     * @Route("/shipping", name="shipping_cms")
     */
    public function shippingAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 28);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

    /**
     * @Route("/warranty", name="warranty_cms")
     */
    public function warrantyAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 20);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

    /**
     * @Route("/privacy-policy", name="privacypolicy_cms")
     */
    public function privacyPolicyAction()
    {
        $html = $this->getDoctrine()->getManager()->find("PrimarySiteBundle:HtmlPage", 34);
        return $this->render("@PrimarySite/default/cms.html.twig",[
            "page"=>$html
        ]);
    }

}
