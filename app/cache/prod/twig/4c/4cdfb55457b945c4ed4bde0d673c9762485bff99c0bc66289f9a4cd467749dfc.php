<?php

/* @PrimarySite/default/cart-view.html.twig */
class __TwigTemplate_3f1ad96a5079727ee282d528e1986ea54499b9c8082ced411e72367048a10dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/main-template.html.twig", "@PrimarySite/default/cart-view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo "Awards Mart | Shopping Cart";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row main-body\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My Shopping Cart</h2>
                </div>
            </div>
            <div class=\"row hidden-xs\">
                <div class=\"col-xs-1\">
                    <p>&nbsp;</p>
                </div>
                <div class=\"col-xs-5\">
                    <h3>Product Name</h3>
                </div>
                <div class=\"col-xs-2\">
                    <h3>Quantity</h3>
                </div>
                <div class=\"col-xs-2\">
                    <h3>Size</h3>
                </div>
                <div class=\"col-xs-2\">
                    <h3>Subtotal</h3>
                </div>
            </div>

            ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cartItems", array())) > 0)) {
            // line 31
            echo "
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cartItems", array()));
            foreach ($context['_seq'] as $context["index"] => $context["cartItem"]) {
                // line 33
                echo "
                    ";
                // line 34
                $context["product"] = $this->getAttribute($context["cartItem"], "product", array());
                // line 35
                echo "
                    <form id=\"\" action=\"\" method=\"POST\">
                        <div class=\"row cart-item\" data-context=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cartItem"], "id", array()), "html", null, true);
                echo "\">
                            <div class=\"col-sm-1 col-xs-6\">
                                <img width=\"100%\" src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["cartItem"], "product", array()), "getPrimaryImage", array(), "method")), "html", null, true);
                echo "\" />
                            </div>
                            <div class=\"col-sm-5 col-xs-12\">
                                <h3><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product", array("product_id" => $this->getAttribute($this->getAttribute($context["cartItem"], "product", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "product", array()), "getName", array(), "method"), "html", null, true);
                echo "</a></h3>
                                <div>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "product", array()), "getMetaDescription", array(), "method"), "html", null, true);
                echo "</div>
                                <div style=\"margin-top:20px;\">
                                    <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_item_update", array("cart_item_id" => $this->getAttribute($context["cartItem"], "id", array()))), "html", null, true);
                echo "\" class=\"btn trigger-change-addons btn-warning\">Update Details</a>
                                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_item_delete", array("cart_item_id" => $this->getAttribute($context["cartItem"], "id", array()))), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cartItem"], "id", array()), "html", null, true);
                echo "\" class=\"btn trigger-remove-item btn-danger\">Remove Item</a>
                                </div>
                            </div>
                            <div class=\"col-sm-2 col-xs-6\">
                                <label class=\"visible-xs-block\">Quantity</label>
                                <input class=\"form-control cart-item-quantity\" type=\"text\" disabled value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["cartItem"], "getQuantity", array(), "method"), "html", null, true);
                echo "\" />
                            </div>
                            <div class=\"col-sm-2 col-xs-6\">
                                <label class=\"visible-xs-block\">Size</label>
                                <input class=\"form-control cart-item-quantity\" type=\"text\" disabled value=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "getSize", array(), "method"), "size", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "getSize", array(), "method"), "units", array()), "html", null, true);
                echo "\" />
                            </div>
                            <div class=\"col-sm-2 col-xs-12\">
                                <label class=\"visible-xs-block\">Subtotal:</label> <strong>\$<span class=\"format-usd\">";
                // line 58
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["cartItem"], "getSubtotal", array(), "method"), 2, ".", ","), "html", null, true);
                echo "</span></strong>
                            </div>
                        </div>
                        <div style=\"margin:10px 0px;\">&nbsp</div>
                        <input type=\"hidden\" name=\"cartItem[id]\" value=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["cartItem"], "id", array()), "html", null, true);
                echo "\" />
                    </form>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['cartItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
            ";
        } else {
            // line 68
            echo "                <div class=\"row\">
                    <div class=\"col-md-11 col-md-push-1\">
                        <h1>There are no products in your cart!</h1>
                    </div>
                </div>
            ";
        }
        // line 74
        echo "
            <div class=\"row\">
                <div class=\"col-md-6\">&nbsp;</div>
                <div class=\"col-md-6\">
                    <h2>Estimated Total: \$<span class=\"format-usd\">";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total", array()), 2, ".", ","), "html", null, true);
        echo "</span></h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">&nbsp;</div>
                <div class=\"col-md-6\">
                    <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homepage");
        echo "\" class=\"btn btn-default\">Continue Shopping</a>
                    <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_checkout");
        echo "\" class=\"btn btn-success\">Continue To Checkout</a>
                </div>
            </div>

        </div>
    </div>

";
    }

    // line 93
    public function block_javascript($context, array $blocks = array())
    {
        // line 94
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(document).on(\"click\",\".trigger-remove-item\",function(e){
                var url = \$(this).attr(\"href\");
                if(confirm(\"Are you sure you want to remove this item?\")){
                    window.location.href = url;
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@PrimarySite/default/cart-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 94,  196 => 93,  184 => 85,  180 => 84,  171 => 78,  165 => 74,  157 => 68,  153 => 66,  143 => 62,  136 => 58,  128 => 55,  121 => 51,  111 => 46,  107 => 45,  102 => 43,  96 => 42,  90 => 39,  85 => 37,  81 => 35,  79 => 34,  76 => 33,  72 => 32,  69 => 31,  67 => 30,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrimarySite/default/cart-view.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle\\Resources\\views\\default\\cart-view.html.twig");
    }
}
