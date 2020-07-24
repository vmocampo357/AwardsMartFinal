<?php

/* @PrimarySite/default/order-mail.html.twig */
class __TwigTemplate_978005b34c245104cf370c2b5151d80c16d7d88a6012ac3c418d52bf348d1e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>A new website order!</h1>

<h1>Order Details</h1>
<p>Purchase Order Number: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ponum"]) ? $context["ponum"] : null), "html", null, true);
        echo "</p>

";
        // line 7
        echo "<h2>Customer Information</h2>
<table>
    <tr>
        <th style=\"text-align:left;\">Customer Name</th>
        <th style=\"text-align:left;\">Customer Email</th>
        <th style=\"text-align:left;\">Customer Phone</th>
        <th style=\"text-align:left;\">Time of Event</th>
        <th style=\"text-align:left;\">Date of Event</th>
        <th style=\"text-align:left;\">Callback Time</th>
    </tr>
    <tr>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "name", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "email", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "phone", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "time", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "eventDate", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "callbackTime", array()), "html", null, true);
        echo "</td>
    </tr>
</table>
<br /><br />
";
        // line 28
        echo "<h2>Shipping Address</h2>
<table>
    <tr>
        <th style=\"text-align:left;\">Address</th>
        <th style=\"text-align:left;\">City</th>
        <th style=\"text-align:left;\">State</th>
        <th style=\"text-align:left;\">Zip Code</th>
        <th style=\"text-align:left;\">Phone (1)</th>
        <th style=\"text-align:left;\">Phone (2)</th>
    </tr>
    <tr>
        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "address", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "city", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "state", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "zipCode", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "phone", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping"]) ? $context["shipping"] : null), "phoneAlt", array()), "html", null, true);
        echo "</td>
    </tr>
</table>
<br /><br />
";
        // line 49
        echo "<h2>Billing Address</h2>
<table>
    <tr>
        <th style=\"text-align:left;\">Address</th>
        <th style=\"text-align:left;\">City</th>
        <th style=\"text-align:left;\">State</th>
        <th style=\"text-align:left;\">Zip Code</th>
        <th style=\"text-align:left;\">Phone (1)</th>
        <th style=\"text-align:left;\">Phone (2)</th>
    </tr>
    <tr>
        <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "address", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "city", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "state", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "zipCode", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "phone", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billing"]) ? $context["billing"] : null), "phoneAlt", array()), "html", null, true);
        echo "</td>
    </tr>
</table>
<br /><br />
<h2>Items Purchased</h2>
";
        // line 71
        echo "<table>
    <tr>
        <th style=\"text-align:left;\">Product Name</th>
        <th style=\"text-align:left;\">Product Number</th>
        <th style=\"text-align:left;\">Selected Size</th>
        <th style=\"text-align:left;\">Selected Option</th>
        <th style=\"text-align:left;\">Quantity</th>
        <th style=\"text-align:left;\">Addons (if any)</th>
        <th style=\"text-align:left;\">Addon Total</th>
        <th style=\"text-align:left;\">Subtotal</th>
    </tr>
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cartItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 83
            echo "        <tr>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "product", array()), "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "product", array()), "sku", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "size", array()), "size", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "size", array()), "units", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cartItem"], "option", array()), "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["cartItem"], "quantity", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 90
            if ((twig_length_filter($this->env, $this->getAttribute($context["cartItem"], "addonOptions", array())) > 0)) {
                // line 91
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cartItem"], "addonOptions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["addonOption"]) {
                    // line 92
                    echo "                        <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["addonOption"], "addon", array()), "name", array()), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "name", array()), "html", null, true);
                    echo ", </strong><br />
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addonOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                ";
            } else {
                // line 95
                echo "                    No addons selected
                ";
            }
            // line 97
            echo "            </td>
            <td>\$";
            // line 98
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["cartItem"], "addonTotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>
            <td>\$";
            // line 99
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["cartItem"], "subtotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "</table>

<h2>Fees</h2>
<table class=\"table\">
    <thead>
    <tr>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>Fee description</th>
        <th>Subtotal</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 124
        echo "    </tbody>
</table>

<h1>Order Final Total</h1>
<h2>\$";
        // line 128
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total", array()), 2, ".", ","), "html", null, true);
        echo "</h2>";
    }

    public function getTemplateName()
    {
        return "@PrimarySite/default/order-mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 128,  251 => 124,  234 => 102,  225 => 99,  221 => 98,  218 => 97,  214 => 95,  211 => 94,  200 => 92,  195 => 91,  193 => 90,  188 => 88,  184 => 87,  178 => 86,  174 => 85,  170 => 84,  167 => 83,  163 => 82,  150 => 71,  142 => 65,  138 => 64,  134 => 63,  130 => 62,  126 => 61,  122 => 60,  109 => 49,  102 => 44,  98 => 43,  94 => 42,  90 => 41,  86 => 40,  82 => 39,  69 => 28,  62 => 23,  58 => 22,  54 => 21,  50 => 20,  46 => 19,  42 => 18,  29 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrimarySite/default/order-mail.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle\\Resources\\views\\default\\order-mail.html.twig");
    }
}
