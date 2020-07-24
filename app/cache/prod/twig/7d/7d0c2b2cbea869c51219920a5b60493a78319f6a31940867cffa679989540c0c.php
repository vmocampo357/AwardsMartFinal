<?php

/* @PrimarySite/default/index.html.twig */
class __TwigTemplate_8e4f9bb2695f0d086573a8e55db949e158effadba6fce675cb1f32748f1358d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/main-template.html.twig", "@PrimarySite/default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Core/main-template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "AwardsMart | For individuals and organizations.";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <!-- *************************************************************** !-->

    <div id=\"homepage-slideshow\">

        <div class=\"slide\">

            <h1>AWARDS FOR</h1>

            <h2>Individuals + Organizations</h2>

            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_search_container");
        echo "\">See More</a>

            <img width=\"100%\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/slider-01.jpg"), "html", null, true);
        echo "\" />

        </div>

    </div>

    <div class=\"row\" style=\"margin:30px -15px 30px -15px;\">

        <div class=\"col-md-5\">

            <div class=\"homepage-services\">

                <div class=\"hms-block\">

                    <h1 style=\"left:20px;top:45px;color:white;font-size:24px;font-weight:800\">Gavels +</h1>

                    <span style=\"left:20px;top:70px;color:white;font-size:19px;font-weight:200;line-height:22px;\">other plaques</span>

                </div>

                <div class=\"hms-block\">



                </div>

                <div class=\"hms-block\">



                </div>

                <div class=\"hms-block\">

                    <h1 style=\"text-align:center;width:145px;left:5px;top:35px;color:white;font-size:31px;font-weight:800\">Acrylic +<br /> Glass</h1>

                </div>

            </div>

        </div>

        <div class=\"col-md-7\">

            <img style=\"position:relative;left:-20px;height:325px\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/old-trophy.jpg"), "html", null, true);
        echo "\" width=\"105%\" />

        </div>

    </div>

    <div class=\"row main-body\">

        <div class=\"col-md-12\">

            <!--<h2>Featured Products</h2>!-->

            <!--<ul class=\"products\">

                <li class=\"product\">

                    <div class=\"product-head\"></div>

                    <div class=\"product-info\">

                        <p>Black Marble With Glass Disc</p>

                    </div>

                </li>

            </ul>!-->

        </div>

    </div>

    <!-- *************************************************************** !-->


";
    }

    public function getTemplateName()
    {
        return "@PrimarySite/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 61,  56 => 17,  51 => 15,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrimarySite/default/index.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle\\Resources\\views\\default\\index.html.twig");
    }
}
