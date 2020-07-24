<?php

/* CoreBundle::base.html.twig */
class __TwigTemplate_507e4b8f744dc07c27eeb24a6d73889a06a36ca5fddcaf47735e37cfe057edd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'main_container' => array($this, 'block_main_container'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html class=\"no-js\">

    <head>

        <meta charset=\"utf-8\">

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta name=\"description\" content=\"";
        // line 13
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\">

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css\">

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/reset.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/main.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/responsive.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/awardscart.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/slippry/slippry.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/slick/slick.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/slick/slick-theme.css"), "html", null, true);
        echo "\">

        <link href='https://fonts.googleapis.com/css?family=Raleway:800,200' rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>

        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/admin/vendors/featherlight/release/featherlight.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <script src=\"https://code.jquery.com/jquery-1.11.2.min.js\"></script>

        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/slippry/slippry.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/slick/slick.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/sticker.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/fixed-header.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/admin/vendors/featherlight/release/featherlight.min.js"), "html", null, true);
        echo "\"></script>

        <script>

            \$(document).ready(function(){

                \$(\"#header\").stick_in_parent();

            });

        </script>

        <!--<script src=\"https://use.typekit.net/wgp4uio.js\"></script>

        <script>try{Typekit.load({ async: true });}catch(e){}</script>!-->
        <style>
            .alert-center{
                width:100%;
                position: relative;
                top:-15px;
                cursor: pointer;
            }
        </style>

    </head>

    <body>

        <div id=\"header\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-md-3\">

                        <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/logo.jpg"), "html", null, true);
        echo "\" /></a>

                        <div id=\"secret-menu\">
                            <div class=\"trigger\"><img width=\"30\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/hamburger.png"), "html", null, true);
        echo "\" /></div>
                            <div class=\"sm-search\">
                                <a href=\"\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/search.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"sm-cart\">
                                <a href=\"\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/cart-icon.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                            <div class=\"sm-content\">
                                <ul></ul>
                            </div>
                        </div>

                    </div>

                    <div class=\"col-md-9\">
                        ";
        // line 107
        $this->loadTemplate("@Core/widgets/top-menu.html.twig", "CoreBundle::base.html.twig", 107)->display($context);
        // line 108
        echo "                    </div>

                </div>

            </div>

        </div>

        <div id=\"main-menu-container\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-md-10\">
                        ";
        // line 123
        $this->loadTemplate("@Core/widgets/main-menu.html.twig", "CoreBundle::base.html.twig", 123)->display($context);
        // line 124
        echo "                    </div>

                    <div class=\"col-md-2\">

                        <div id=\"menu-search\">

                            <a href=\"javascript:void(0);\">

                                <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/search-icon.jpg"), "html", null, true);
        echo "\" />

                            </a>

                        </div>

                    </div>

                </div>

                <div class=\"row\">

                    <div class=\"col-md-12\">

                        <form action=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_search_container");
        echo "\" method=\"GET\">

                            <input name=\"f\" id=\"product-search\" placeholder=\"Find by product number...\" type=\"text\" class=\"form-control\" />

                            <input name=\"executed-search\" value=\"1\" type=\"hidden\" />

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <div id=\"main-content\">
            <div class=\"container\">

                ";
        // line 165
        $this->loadTemplate("@Core/widgets/alerts.html.twig", "CoreBundle::base.html.twig", 165)->display($context);
        // line 166
        echo "
                ";
        // line 167
        $this->displayBlock('main_container', $context, $blocks);
        // line 168
        echo "
            </div>
        </div>

        <div id=\"footer\" class=\"container\">

            <div id=\"footer-images\">

                <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/footer-logo.jpg"), "html", null, true);
        echo "\" />

            </div>

                <span class=\"copyright\">

                    Copyright &copy; 2016-2021 AwardsMart. All Rights Reserved.

                </span>

        </div>

        <!-- JS INCLUDES !-->

        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>
        <!-- Some basic JS stuff !-->

    <script>

        jQuery(document).ready(function(e){

            jQuery(\"#menu-search a\").click(function(e){

                jQuery(\"#product-search\").toggle();

            });

            jQuery(\"#secret-menu .trigger\").click(function(e){

                jQuery(\"#secret-menu .sm-content\").toggle();

            });

        });

    </script>

        <link rel='stylesheet' id='alertify-styles-css'  href='";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/third-party/alertify/css/alertify.min.css"), "html", null, true);
        echo "' type='text/css' media='all' />
        <link rel='stylesheet' id='alertify-theme-styles-css'  href='";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/third-party/alertify/css/themes/default.min.css"), "html", null, true);
        echo "' type='text/css' media='all' />
        <link rel='stylesheet' id='jranger-theme-styles-css'  href='";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/third-party/jquery.range.css"), "html", null, true);
        echo "' type='text/css' media='all' />
        <script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js?ver=4.5.3'></script>
        <script type='text/javascript' src='";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/third-party/alertify.min.js"), "html", null, true);
        echo "'></script>
        <script type='text/javascript' src='";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/third-party/jquery.range-min.js"), "html", null, true);
        echo "'></script>
        <script type='text/javascript' src='";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/third-party/masonry.js"), "html", null, true);
        echo "'></script>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.0/imagesloaded.min.js?ver=4.5.3'></script>

    ";
        // line 222
        $this->displayBlock('javascript', $context, $blocks);
        // line 223
        echo "
        <div id=\"main-loading-gif\">
            <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/spinner.gif"), "html", null, true);
        echo "\" />
        </div>

    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "AwardsMart | Celebrating life's victories. San Antonio's premier Awards shop.";
    }

    // line 13
    public function block_meta_description($context, array $blocks = array())
    {
        echo "Offer a selection of presentation cups, awards and acrylic trophies.";
    }

    // line 167
    public function block_main_container($context, array $blocks = array())
    {
    }

    // line 222
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoreBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 222,  371 => 167,  365 => 13,  359 => 11,  350 => 225,  346 => 223,  344 => 222,  338 => 219,  334 => 218,  330 => 217,  325 => 215,  321 => 214,  317 => 213,  277 => 176,  267 => 168,  265 => 167,  262 => 166,  260 => 165,  238 => 146,  221 => 132,  211 => 124,  209 => 123,  192 => 108,  190 => 107,  177 => 97,  171 => 94,  166 => 92,  158 => 89,  119 => 53,  114 => 51,  109 => 49,  104 => 47,  99 => 45,  92 => 41,  83 => 35,  78 => 33,  73 => 31,  68 => 29,  63 => 27,  58 => 25,  53 => 23,  40 => 13,  35 => 11,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle::base.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\CoreBundle/Resources/views/base.html.twig");
    }
}
