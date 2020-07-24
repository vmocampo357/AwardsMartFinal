<?php

/* PrimarySiteBundle:default:checkout.html.twig */
class __TwigTemplate_3e712100f8cf5ed1422abaed89720bfa1278a9616a11f238e70ef90cb68ef290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/no-menu.html.twig", "PrimarySiteBundle:default:checkout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Core/no-menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Awards Mart | Checkout";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <style>
        .checkout-table{}
        .checkout-table tr th{
            font-size:14px;
            font-weight:bold;
        }
        .checkout-table tr td{
            font-size:14px;
        }
    </style>
    <div class=\"row main-body checkout-body\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Checkout</h2>
                    <p>Fill the form below, review your order and submit when it is ready.<br />
                        Submitting an order will not require a credit card on submission.<br />
                        An AwardsMart representative will contact you within the next business day to complete order.</p>
                    <p><strong style=\"font-weight:600\">Disclaimers</strong></p>
                    <p>There is a standard artwork fee, not included in final total<br />
                        If a logo has been uploaded; a minimum of \$14.95 artwork fee will be added.</p>
                    <p>if the item is to be shipped, additional shipping charges will apply.  Payment will be required prior shipping.</p>
                </div>
            </div>
            <form id=\"ac-checkout-form\" method=\"POST\">
                <div class=\"row checkout-step\">
                    <div class=\"col-md-12\">
                        <h1 class=\"checkout-title\">1) Fill out contact information</h1>
                        <h3>Contact Name*</h3>
                        <input value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "name", array()), "html", null, true);
        echo "\" required name=\"customer[name]\" data-label=\"Contact Name\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Contact E-mail*</h3>
                        <input value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "email", array()), "html", null, true);
        echo "\" required name=\"customer[email]\" data-label=\"Contact E-mail\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Contact Phone Number*</h3>
                        <input value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "phone", array()), "html", null, true);
        echo "\" required name=\"customer[phone]\" data-label=\"Contact Number\" class=\"checkout-field form-control\" type=\"text\"/>
                        <h3>Event Date*</h3>
                        <input value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "eventDate", array()), "html", null, true);
        echo "\" required name=\"customer[eventDate]\" data-label=\"Event Date\" class=\"checkout-field form-control\" type=\"text\"/>
                        <h3>Event Time*</h3>
                        <input value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "time", array()), "html", null, true);
        echo "\" required name=\"customer[time]\" data-label=\"Event Time\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Preferred Callback Time</h3>
                        <input value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "callbackTime", array()), "html", null, true);
        echo "\" name=\"customer[callbackTime]\" data-label=\"Preferred Callback Time\" class=\"checkout-field form-control\" type=\"text\" />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"checkout-title\">2) Fill out billing address</h1>
                        <br /><br />
                    </div>
                </div>
                <div class=\"row checkout-step\">
                    <div class=\"col-md-12\">
                        <h3>First Name</h3>
                        <input value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "firstName", array()), "html", null, true);
        echo "\" name=\"billing[firstName]\" data-label=\"Billing First Name\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Last Name</h3>
                        <input value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "lastName", array()), "html", null, true);
        echo "\" name=\"billing[lastName]\" data-label=\"Billing Last Name\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Address</h3>
                        <input value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "address", array()), "html", null, true);
        echo "\" name=\"billing[address]\" data-label=\"Billing Address\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>City</h3>
                        <input value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "city", array()), "html", null, true);
        echo "\" name=\"billing[city]\" data-label=\"Billing City\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Phone (1)*</h3>
                        <input value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "phone", array()), "html", null, true);
        echo "\" name=\"billing[phone]\" data-label=\"Billing Phone(1)\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Zip Code</h3>
                        <input value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "zipCode", array()), "html", null, true);
        echo "\" name=\"billing[zipCode]\" data-label=\"Billing Zipcode\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>State</h3>
                        <input value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "state", array()), "html", null, true);
        echo "\" name=\"billing[state]\" data-label=\"Billing State\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Phone (2)*</h3>
                        <input value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "phoneAlt", array()), "html", null, true);
        echo "\" name=\"billing[phoneAlt]\" data-label=\"Billing Phone\" class=\"checkout-field form-control\" type=\"text\" />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"checkout-title\">3) Fill out shipping address</h1>
                        <input name=\"other[addresses]\" id=\"checkout-same-addresses\" value=\"1\" type=\"checkbox\" />&nbsp;<small>Billing and shipping address are the same</small>
                        <br /><br />
                    </div>
                </div>
                <div class=\"row checkout-step\">
                    <div class=\"col-md-12\">
                        <h3>First Name*</h3>
                        <input value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "firstName", array()), "html", null, true);
        echo "\" name=\"shipping[firstName]\" data-label=\"Shipping First Name\" class=\"checkout-field form-control\" type=\"text\"/>
                        <h3>Last Name</h3>
                        <input value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "lastName", array()), "html", null, true);
        echo "\" name=\"shipping[lastName]\" data-label=\"Shipping Last Name\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Address*</h3>
                        <input value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "address", array()), "html", null, true);
        echo "\" name=\"shipping[address]\" data-label=\"Shipping Address\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>City*</h3>
                        <input value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "city", array()), "html", null, true);
        echo "\" name=\"shipping[city]\" data-label=\"Shipping City\" data-label=\"Shipping Address\" class=\"checkout-field form-control\" type=\"text\"/>
                        <h3>Phone (1)*</h3>
                        <input value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "phone", array()), "html", null, true);
        echo "\" name=\"shipping[phone]\" data-label=\"Shipping Phone(1)\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Zip Code*</h3>
                        <input value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "zipCode", array()), "html", null, true);
        echo "\" name=\"shipping[zipCode]\" data-label=\"Shipping Zipcode\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>State*</h3>
                        <input value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "state", array()), "html", null, true);
        echo "\" name=\"shipping[state]\" data-label=\"Shipping State\" class=\"checkout-field form-control\" type=\"text\" />
                        <h3>Phone (2)*</h3>
                        <input value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "phoneAlt", array()), "html", null, true);
        echo "\" name=\"shipping[phoneAlt]\" data-label=\"Shipping Phone(2)\" class=\"checkout-field form-control\" type=\"text\" />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"checkout-title\">4) Review your order below</h1>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <table class=\"table checkout-table\">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Size</th>
                                <th>Option</th>
                                <th>Addons</th>
                                <th>Addon Cost</th>
                                <th>Actions</th>
                                <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cartItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 122
            echo "                            <tr>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "product", array()), "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartItem"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "size", array()), "size", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "size", array()), "units", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "option", array()), "name", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 128
            if ((twig_length_filter($this->env, $this->getAttribute($context["cartItem"], "addonOptions", array())) > 0)) {
                // line 129
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cartItem"], "addonOptions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["addonOption"]) {
                    // line 130
                    echo "                                            <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["addonOption"], "addon", array()), "name", array()), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "name", array()), "html", null, true);
                    echo ", </strong><br />
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addonOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "                                    ";
            } else {
                // line 133
                echo "                                        No addons selected
                                    ";
            }
            // line 135
            echo "                                </td>
                                <td>\$";
            // line 136
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["cartItem"], "addonTotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_item_update", array("cart_item_id" => $this->getAttribute($context["cartItem"], "id", array()))), "html", null, true);
            echo "\">Update</a></td>
                                <td>\$";
            // line 138
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["cartItem"], "subtotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                            </tbody>
                        </table>
                        <h2>Fees</h2>
                        <table class=\"table checkout-table\">
                            <thead>
                            <tr>
                                <th><strong>Fee description</strong></th>
                                <th><strong>Fee</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 152
        if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "fees", array())) {
            // line 153
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "fees", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["fee"]) {
                // line 154
                echo "                                    <tr>
                                        <td>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["fee"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>\$";
                // line 156
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["fee"], "cost", array()), 2, ".", ","), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                            ";
        } else {
            // line 160
            echo "                                <tr><td colspan=\"2\">No fees</td></tr>
                            ";
        }
        // line 162
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-md-push-6\">
                        <h2>Final Total</h2>
                        <h1>\$";
        // line 169
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total", array()), 2, ".", ","), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-md-push-6\">
                        <input type=\"hidden\" name=\"checkout\" value=\"true\" />
                        <button class=\"btn btn-success trigger-final-order\" type=\"submit\">Submit Final Order</button>
                        <a class=\"btn btn-default\" href=\"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_view");
        echo "\">Change Order</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "PrimarySiteBundle:default:checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 176,  346 => 169,  337 => 162,  333 => 160,  330 => 159,  321 => 156,  317 => 155,  314 => 154,  309 => 153,  307 => 152,  294 => 141,  285 => 138,  281 => 137,  277 => 136,  274 => 135,  270 => 133,  267 => 132,  256 => 130,  251 => 129,  249 => 128,  244 => 126,  238 => 125,  234 => 124,  230 => 123,  227 => 122,  223 => 121,  196 => 97,  191 => 95,  186 => 93,  181 => 91,  176 => 89,  171 => 87,  166 => 85,  161 => 83,  145 => 70,  140 => 68,  135 => 66,  130 => 64,  125 => 62,  120 => 60,  115 => 58,  110 => 56,  95 => 44,  90 => 42,  85 => 40,  80 => 38,  75 => 36,  70 => 34,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrimarySiteBundle:default:checkout.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle/Resources/views/default/checkout.html.twig");
    }
}
