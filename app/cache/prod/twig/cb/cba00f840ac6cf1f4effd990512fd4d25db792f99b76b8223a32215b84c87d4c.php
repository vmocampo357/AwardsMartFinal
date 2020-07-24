<?php

/* @PrimarySite/default/update-cart-item.html.twig */
class __TwigTemplate_00bd23d5ed8f80c29a48f175e42a070b139b9e3c427a934f46859e4bb615a5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/main-template.html.twig", "@PrimarySite/default/update-cart-item.html.twig", 1);
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
        echo "AwardsMart | Update Cart Item";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        label{
            font-size:20px;
            font-weight:bold;
            display:block;
            margin-bottom:0px;
            margin-top:5px;
        }
        h5{
            font-size:20px;
        }
    </style>

    <form class=\"update-form\" id=\"update-cart\" action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"row product-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>Update your Cart Item</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "product", array()), "name", array()), "html", null, true);
        echo "</h2>
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col-md-12\">
                    <label>Quantity</label><br />
                    <input class=\"form-control\" type=\"text\" name=\"update[quantity]\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity", array()), "html", null, true);
        echo "\" required />
                </div>
            </div>
            ";
        // line 35
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "product", array()), "options", array())) > 0)) {
            // line 36
            echo "            <div class=\"row form-group\">
                <div class=\"col-md-12\">
                    <label>Selected Option</label><br />
                    <select class=\"form-control\" name=\"update[option]\">
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "product", array()), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 41
                echo "                            ";
                if (($this->getAttribute($context["option"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option", array()), "id", array()))) {
                    // line 42
                    echo "                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 44
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                    echo "</option>
                            ";
                }
                // line 46
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    </select>
                </div>
            </div>
            ";
        }
        // line 51
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "product", array()), "addons", array())) > 0)) {
            // line 52
            echo "                <div class=\"row form-group\">
                    <div class=\"col-md-12\">
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "product", array()), "addons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 55
                echo "                            <label>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "name", array()), "html", null, true);
                echo "</label><br />
                            <select class=\"form-control\" name=\"update[addon][]\">
                                ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["addon"], "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["addonOption"]) {
                    // line 58
                    echo "                                    <option ";
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "containsAddonOption", array(0 => $this->getAttribute($context["addonOption"], "id", array())), "method")) {
                        echo "selected";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "getPriceLabel", array(), "method"), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addonOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                            </select>
                            <br />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    </div>
                </div>
            ";
        }
        // line 66
        echo "            <div class=\"row form-group\">
                <div class=\"col-md-12\">
                    <label>Selected Size</label><br />
                    <select class=\"form-control\" name=\"update[size]\">
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "product", array()), "productSizes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 71
            echo "                            ";
            if (($this->getAttribute($context["size"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "size", array()), "id", array()))) {
                // line 72
                echo "                                <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "size", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "units", array()), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 74
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "size", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "units", array()), "html", null, true);
                echo "</option>
                            ";
            }
            // line 76
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </select>
                </div>
            </div>
            <hr />
            <div class=\"row form-group\">
                <div class=\"col-md-12\">
                    <label>Engraving Text (if needed)</label>
                    <textarea class=\"form-control\" style=\"height:200px;\" name=\"update[engraving]\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "engraving", array()), "html", null, true);
        echo "</textarea>
                </div>
            </div>
            <hr />
            <div class=\"row form-group\">
                <div class=\"col-md-12\">
                    <label>List of Names to Engrave (one name per line)</label>
                    <input type=\"file\" name=\"names\" />
                    ";
        // line 92
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "namesUpload", array())) {
            // line 93
            echo "                        <br />
                        ";
            // line 94
            $context["name_upload"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "namesUpload", array());
            // line 95
            echo "                        <span style=\"font-style:italic\">Your uploaded file: &nbsp;</span>
                        <a data-featherlight=\"\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["name_upload"]) ? $context["name_upload"] : null), "source", array())), "html", null, true);
            echo "\" target=\"_blank\">Click to view your uploaded file</a>
                        | <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_upload", array("cart_item_id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "upload_id" => $this->getAttribute((isset($context["name_upload"]) ? $context["name_upload"] : null), "id", array()))), "html", null, true);
            echo "\">Remove file</a>
                    ";
        }
        // line 99
        echo "                </div>
            </div>
            <hr />
            <div class=\"row form-group\">
                <div class=\"col-md-12\">
                    <label>Logo to Engrave (if applicable)</label>
                    <span style=\"display:block;margin:5px 0px\">If a logo is uploaded, a fee of \$14.95 will be added for artwork</span>
                    <input type=\"file\" name=\"logo\" />
                    ";
        // line 107
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "logoUpload", array())) {
            // line 108
            echo "                        <br />
                        ";
            // line 109
            $context["name_upload"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "logoUpload", array());
            // line 110
            echo "                        <span style=\"font-style:italic\">Your uploaded file: &nbsp;</span>
                        <a data-featherlight=\"\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["name_upload"]) ? $context["name_upload"] : null), "source", array())), "html", null, true);
            echo "\" target=\"_blank\">Click to view your uploaded file</a>
                        | <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_upload", array("cart_item_id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "upload_id" => $this->getAttribute((isset($context["name_upload"]) ? $context["name_upload"] : null), "id", array()))), "html", null, true);
            echo "\">Remove file</a>
                    ";
        }
        // line 114
        echo "                </div>
            </div>
            <hr />
            <div class=\"row form-group\">
                <div class=\"col-md-12\">
                    <label>Other engraving file (if needed)</label>
                    <input type=\"file\" name=\"other\" />
                    ";
        // line 121
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "otherUpload", array())) {
            // line 122
            echo "                        <br />
                        ";
            // line 123
            $context["name_upload"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "otherUpload", array());
            // line 124
            echo "                        <span style=\"font-style:italic\">Your uploaded file: &nbsp;</span>
                        <a data-featherlight=\"\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["name_upload"]) ? $context["name_upload"] : null), "source", array())), "html", null, true);
            echo "\" target=\"_blank\">Click to view your uploaded file</a>
                        | <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_upload", array("cart_item_id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "upload_id" => $this->getAttribute((isset($context["name_upload"]) ? $context["name_upload"] : null), "id", array()))), "html", null, true);
            echo "\">Remove file</a>
                    ";
        }
        // line 128
        echo "                </div>
            </div>
            <hr />
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <label>Current Subtotal:</label>
                </div>
                <div class=\"col-md-6\">
                    <h5>\$";
        // line 136
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "subtotal", array()), 2, ".", ","), "html", null, true);
        echo "</h5>
                </div>
            </div>
            <br />
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <label>Cost of Addons:</label>
                </div>
                <div class=\"col-md-6\">
                    <h5>\$";
        // line 145
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "addonTotal", array()), 2, ".", ","), "html", null, true);
        echo "</h5>
                </div>
            </div>
            <br />
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <label>Price Discount:</label>
                </div>
                <div class=\"col-md-6\">
                    <h5>\$";
        // line 154
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chosenPrice", array()), "price", array()), 2, ".", ","), "html", null, true);
        echo " per item (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chosenPrice", array()), "min", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chosenPrice", array()), "max", array()), "html", null, true);
        echo ")</h5>
                </div>
            </div>
            <hr />
            <br />
            <div class=\"row form-group\">
                <div class=\"col-md-12\">
                    <input type=\"hidden\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true);
        echo "\" name=\"update[id]\" />
                    <div class=\"btn-group\">
                        <button class=\"btn btn-info\" type=\"submit\">Update and Review</button>
                        <a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_view");
        echo "\" class=\"btn btn-default\">Return to Cart</a>
                        <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_checkout");
        echo "\" class=\"btn btn-default\">Continue to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "@PrimarySite/default/update-cart-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 165,  360 => 164,  354 => 161,  340 => 154,  328 => 145,  316 => 136,  306 => 128,  301 => 126,  297 => 125,  294 => 124,  292 => 123,  289 => 122,  287 => 121,  278 => 114,  273 => 112,  269 => 111,  266 => 110,  264 => 109,  261 => 108,  259 => 107,  249 => 99,  244 => 97,  240 => 96,  237 => 95,  235 => 94,  232 => 93,  230 => 92,  219 => 84,  210 => 77,  204 => 76,  194 => 74,  184 => 72,  181 => 71,  177 => 70,  171 => 66,  166 => 63,  158 => 60,  141 => 58,  137 => 57,  131 => 55,  127 => 54,  123 => 52,  120 => 51,  114 => 47,  108 => 46,  100 => 44,  92 => 42,  89 => 41,  85 => 40,  79 => 36,  77 => 35,  71 => 32,  62 => 26,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrimarySite/default/update-cart-item.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle\\Resources\\views\\default\\update-cart-item.html.twig");
    }
}
