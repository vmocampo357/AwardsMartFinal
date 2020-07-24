<?php

/* @AdminInterface/Single/view-order.html.twig */
class __TwigTemplate_b1014e98943f7428fcd85e03b08a8643cf5278c37eafc1c4383f0bedae95e625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "@AdminInterface/Single/view-order.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AdminInterface/Default/base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>Orders <small>Reviewing order (";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "purchaseOrderNumber", array()), "html", null, true);
        echo ")</small></h3>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />

    <div class=\"row\">
        <div class=\"col-md-4\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th colspan=\"2\">Customer Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><th>Full Name</th><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "name", array()), "html", null, true);
        echo "</td></tr>
                    <tr><th>Callback Phone</th><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "phone", array()), "html", null, true);
        echo "</td></tr>
                    <tr><th>Callback Time</th><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "callbackTime", array()), "html", null, true);
        echo "</td></tr>
                    <tr><th>Email</th><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "email", array()), "html", null, true);
        echo "</td></tr>
                    <tr><th>Event Date</th><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "eventDate", array()), "html", null, true);
        echo "</td></tr>
                    <tr><th>Event Time</th><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "time", array()), "html", null, true);
        echo "</td></tr>
                </tbody>
            </table>
        </div>
        <div class=\"col-md-4\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th colspan=\"2\">Shipping Address</th>
                </tr>
                </thead>
                <tbody>
                <tr><th>First Name</th><td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "shippingAddress", array()), "firstName", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Last Name</th><td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "shippingAddress", array()), "lastName", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Address</th><td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "shippingAddress", array()), "address", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>City</th><td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "shippingAddress", array()), "city", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>State</th><td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "shippingAddress", array()), "state", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Zipcode</th><td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "shippingAddress", array()), "zipCode", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Phone (1)</th><td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "shippingAddress", array()), "phone", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Phone (alt)</th><td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "shippingAddress", array()), "phoneAlt", array()), "html", null, true);
        echo "</td></tr>
                </tbody>
            </table>
        </div>
        <div class=\"col-md-4\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th colspan=\"2\">Billing Address</th>
                </tr>
                </thead>
                <tbody>
                <tr><th>First Name</th><td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "billingAddress", array()), "firstName", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Last Name</th><td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "billingAddress", array()), "lastName", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Address</th><td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "billingAddress", array()), "address", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>City</th><td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "billingAddress", array()), "city", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>State</th><td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "billingAddress", array()), "state", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Zipcode</th><td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "billingAddress", array()), "zipCode", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Phone (1)</th><td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "billingAddress", array()), "phone", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Phone (alt)</th><td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer", array()), "billingAddress", array()), "phoneAlt", array()), "html", null, true);
        echo "</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2>Purchase Order</h2>
        </div>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Product Num</th><th>Product Name</th><th>Qty</th>
                        <th>Size</th><th>Option</th><th>Add-ons</th><th>Files</th><th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 91
        $context["cart"] = $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "cart", array());
        // line 92
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cartItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 93
            echo "                        <tr>
                            <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "sku", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "size", array()), "size", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "size", array()), "units", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 98
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "option", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "option", array(), "any", false, true), "name", array()), "None selected")) : ("None selected")), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 100
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "addonOptions", array())) > 0)) {
                // line 101
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "addonOptions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                    // line 102
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "name", array()), "html", null, true);
                    echo " (+ \$";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["addon"], "price", array()), 2, ".", ","), "html", null, true);
                    echo ")<br />
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                                ";
            } else {
                // line 105
                echo "                                    None selected
                                ";
            }
            // line 107
            echo "                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle btn-sm btn btn-warning\" data-toggle=\"dropdown\">See Files <b class=\"caret\"></b></a>
                                    ";
            // line 111
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "uploads", array())) > 0)) {
                // line 112
                echo "                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        ";
                // line 113
                if ($this->getAttribute($context["item"], "LogoUpload", array())) {
                    echo "<li><a data-featherlight=\"\" target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "LogoUpload", array()), "source", array())), "html", null, true);
                    echo "\">Logo</a></li>";
                }
                // line 114
                echo "                                        ";
                if ($this->getAttribute($context["item"], "NamesUpload", array())) {
                    echo "<li><a data-featherlight=\"\" target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "NamesUpload", array()), "source", array())), "html", null, true);
                    echo "\">Names</a></li>";
                }
                // line 115
                echo "                                        ";
                if ($this->getAttribute($context["item"], "OtherUpload", array())) {
                    echo "<li><a data-featherlight=\"\" target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "OtherUpload", array()), "source", array())), "html", null, true);
                    echo "\">Other</a></li>";
                }
                // line 116
                echo "                                    </ul>
                                    ";
            } else {
                // line 118
                echo "                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li><a href=\"javascript:void(0);\">No files uploaded</a></li>
                                    </ul>
                                    ";
            }
            // line 122
            echo "                                </div>
                            </td>
                            <td>\$";
            // line 124
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "subtotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 col-md-push-6\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th colspan=\"2\"><h3>Fees</h3></th>
                    </tr>
                    <tr>
                        <td>
                            <table class=\"table\">
                                ";
        // line 141
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "fees", array())) > 0)) {
            // line 142
            echo "                                    <tr><th>Fee Name</th><th>Fee Cost</th></tr>
                                    ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "fees", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["fee"]) {
                // line 144
                echo "                                        <tr>
                                            <td>";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["fee"], "name", array()), "html", null, true);
                echo "</td>
                                            <td>\$";
                // line 146
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["fee"], "cost", array()), 2, ".", ","), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                                ";
        } else {
            // line 150
            echo "                                    <tr><th><h3>No fees</h3></th></tr>
                                ";
        }
        // line 152
        echo "                            </table>
                        </td>
                    </tr>
                    <tr><th><h3>Final Total</h3></th><td><h3>\$";
        // line 155
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total", array()), 2, ".", ","), "html", null, true);
        echo "</h3></td></tr>
                </tbody>
            </table>
        </div>
    </div>

";
    }

    // line 162
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Single/view-order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 162,  357 => 155,  352 => 152,  348 => 150,  345 => 149,  336 => 146,  332 => 145,  329 => 144,  325 => 143,  322 => 142,  320 => 141,  304 => 127,  295 => 124,  291 => 122,  285 => 118,  281 => 116,  274 => 115,  267 => 114,  261 => 113,  258 => 112,  256 => 111,  250 => 107,  246 => 105,  243 => 104,  232 => 102,  227 => 101,  225 => 100,  220 => 98,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  199 => 93,  194 => 92,  192 => 91,  167 => 69,  163 => 68,  159 => 67,  155 => 66,  151 => 65,  147 => 64,  143 => 63,  139 => 62,  124 => 50,  120 => 49,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  81 => 31,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  40 => 8,  34 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Single/view-order.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Single\\view-order.html.twig");
    }
}
