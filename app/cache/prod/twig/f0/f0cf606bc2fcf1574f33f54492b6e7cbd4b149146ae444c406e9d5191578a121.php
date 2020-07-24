<?php

/* PrimarySiteBundle:default:search.html.twig */
class __TwigTemplate_c0e885398dc294a2942ae5e009e418aef2dbf4bde9728111a4c08a1f8c29d1ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/base.html.twig", "PrimarySiteBundle:default:search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main_container' => array($this, 'block_main_container'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Core/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "AwardsMart | Search Page";
    }

    // line 3
    public function block_main_container($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-3 sidebar\">
            <div class=\"acp-search-sidebar acp-module\" data-acp-role=\"browser\" data-acp-tax=\"0\" data-acp-module=\"ssidebar\">
                <h3>Products</h3>
                <ul>
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "                        <li><input class=\"add-tax-filter\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\"> <label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</label></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
                <h3>Themes</h3>
                <ul>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 17
            echo "                        <li><input class=\"add-tax-filter\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\"> <label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</label></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"row main-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <form id=\"search-overall\">
                            <div class=\"col-md-12\">
                                <h3>Any Keyword (Product SKU, name, description or others)</h3>
                                <input id=\"sform-keyword\" type=\"text\" class=\"form-control\" />
                            </div>
                            <div class=\"col-md-12\">&nbsp;</div>
                            <div class=\"col-md-6\">
                                <h3>Price Range (price per unit)</h3>
                                <input id=\"price-range\" type=\"hidden\" class=\"slider-input\" value=\"100\" />
                            </div>
                            <div class=\"col-md-3\">
                                <h3>Sorting Options</h3>
                                <select id=\"sform-sort\" class=\"form-control\">
                                    <option value=\"0\">No preference</option>
                                    <option value=\"1\">Price high to low</option>
                                    <option value=\"2\">Price low to high</option>
                                    <option value=\"3\">Product name, A-Z</option>
                                    <option value=\"4\">Product name, Z-A</option>
                                </select>
                            </div>
                            <div class=\"col-md-3\">
                                <h3>&nbsp;</h3>
                                <input value=\"Run Search\" id=\"trigger-other-update\" type=\"submit\" class=\"btn btn-warning\" />
                            </div>
                        </form>
                    </div>
                    <div class=\"row\">
                        <div class=\"acp-search-results acp-module\" data-acp-role=\"browser\" data-acp-tax=\"0\" data-acp-module=\"ssearch\">
                            <ul id=\"search-results\">
                                ";
        // line 55
        if ((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : null)) > 0)) {
            // line 56
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 57
                echo "                                        <li data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "link", array()), "html", null, true);
                echo "\">
                                            <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product", array("product_id" => $this->getAttribute($context["res"], "link", array()))), "html", null, true);
                echo "\">
                                                <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["res"], "image", array())), "html", null, true);
                echo "\">
                                                <label>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "name", array()), "html", null, true);
                echo "</label>
                                            </a>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                ";
        } else {
            // line 65
            echo "                                    <li>No products found</li>
                                ";
        }
        // line 67
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 76
    public function block_javascript($context, array $blocks = array())
    {
        // line 77
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/site/Search.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            window.searchInstance = new ProductSearch();
            window.searchInstance.setApiUrl(\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_search_products");
        echo "\");
            window.searchInstance.setProductUrl(\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product", array("product_id" => 0));
        echo "\");
            window.productImagePath = \"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\";
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "PrimarySiteBundle:default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 83,  184 => 82,  180 => 81,  172 => 77,  169 => 76,  157 => 67,  153 => 65,  150 => 64,  140 => 60,  136 => 59,  132 => 58,  127 => 57,  122 => 56,  120 => 55,  82 => 19,  71 => 17,  67 => 16,  62 => 13,  51 => 11,  47 => 10,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrimarySiteBundle:default:search.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle/Resources/views/default/search.html.twig");
    }
}
