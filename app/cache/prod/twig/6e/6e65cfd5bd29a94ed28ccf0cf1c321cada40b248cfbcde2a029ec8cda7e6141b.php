<?php

/* @PrimarySite/default/single-product.html.twig */
class __TwigTemplate_b2b68799836cb6e0b570dd4d663e476712a4d3fe2f3ba0b987c8e477f7581136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/main-template.html.twig", "@PrimarySite/default/single-product.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaTitle", array()), "AwardsMart Products")) : ("AwardsMart Products")), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <form id=\"add-cart\" action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_to_cart");
        echo "\" method=\"POST\">
        <div class=\"row product-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"featured-image\">
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "getPageImage", array(), "method")), "html", null, true);
        echo "\" />
                    </div>
                    <div style=\"text-align:center\">
                        <a data-featherlight=\"\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "getZoomImage", array(), "method")), "html", null, true);
        echo "\">Zoom +</a>
                    </div>
                    <div class=\"product-attributes\">
                        <ul>
                            ";
        // line 22
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "options", array())) > 0)) {
            // line 23
            echo "                                <li>
                                    <strong>Available Option(s)</strong>
                                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 26
                echo "                                        <input name=\"product[option][]\" class=\"single-product-atts\" type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                echo "\" /><label>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                echo "</label> &nbsp;<br />
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                                </li>
                            ";
        }
        // line 30
        echo "                        </ul>
                    </div>
                    ";
        // line 32
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "addons", array())) > 0)) {
            // line 33
            echo "                        <div id=\"special-group-selections\">
                            <h4>Product Addons:</h4>
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "addons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 36
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "addonLabel", array()), "html", null, true);
                echo "</strong>
                                <select name=\"product[addon][]\" data-sgo-id=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "id", array()), "html", null, true);
                echo "\" class=\"product-special-option\">
                                    <option value=\"0\">Select an option</option>
                                    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["addon"], "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 40
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "getPriceLabel", array(), "method"), "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                                </select>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        </div>
                    ";
        }
        // line 46
        echo "                </div>
                <div class=\"col-md-8 product-details\">
                    ";
        // line 49
        echo "                        ";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array());
        echo "
                    ";
        // line 51
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 52
            echo "                        <a class=\"btn btn-info btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.existing.product", array("product_id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()))), "html", null, true);
            echo "\">Edit this product</a>
                    ";
        }
        // line 54
        echo "                    <p>&nbsp;</p>
                    <div id=\"pd-addcart-form\">
                        <input type=\"hidden\" name=\"product[id]\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
        echo "\" />
                        <input value=\"1\" required name=\"product[quantity]\" id=\"single-product-quantity\" min=\"1\" type=\"number\" placeholder=\"Enter quantity\" />
                        <select name=\"product[size]\" id=\"single-product-sizes\">
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "productSizes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 60
            echo "                                ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["size"], "prices", array())) > 0)) {
                // line 61
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "size", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "units", array()), "html", null, true);
                echo "</option>
                                ";
            }
            // line 63
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </select>
                        <a onclick=\"\$('#add-cart').submit()\" data-id=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
        echo "\" class=\"ac-addtocart addcart-large\" href=\"javascript:void(0);\">Add to Cart</a>
                    </div>
                    <p>&nbsp;</p>
                    <table class=\"product-detail-table\">
                        <thead>
                        <tr><th colspan=\"3\">Prices per quantity range, per size.</th></tr>
                        </thead>
                        <tbody>
                        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "productSizes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 74
            echo "                            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["size"], "prices", array())) > 0)) {
                // line 75
                echo "                                <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "size", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "units", array()), "html", null, true);
                echo "</td><td>Per Item Cost</td><td>Per Quantity</td></tr>
                                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["size"], "prices", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                    // line 77
                    echo "                                    <tr><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sku", array()), "html", null, true);
                    echo "</td><td>\$";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["price"], "price", array()), 2, ".", ","), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "min", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "max", array()), "html", null, true);
                    echo "</td></tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                                <tr class=\"price-sep\" style=\"background-color:#cecece;\"><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                            ";
            }
            // line 81
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "@PrimarySite/default/single-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 82,  249 => 81,  245 => 79,  230 => 77,  226 => 76,  219 => 75,  216 => 74,  212 => 73,  201 => 65,  198 => 64,  192 => 63,  182 => 61,  179 => 60,  175 => 59,  169 => 56,  165 => 54,  159 => 52,  156 => 51,  151 => 49,  147 => 46,  143 => 44,  136 => 42,  123 => 40,  119 => 39,  114 => 37,  109 => 36,  105 => 35,  101 => 33,  99 => 32,  95 => 30,  91 => 28,  80 => 26,  76 => 25,  72 => 23,  70 => 22,  63 => 18,  57 => 15,  48 => 9,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrimarySite/default/single-product.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle\\Resources\\views\\default\\single-product.html.twig");
    }
}
