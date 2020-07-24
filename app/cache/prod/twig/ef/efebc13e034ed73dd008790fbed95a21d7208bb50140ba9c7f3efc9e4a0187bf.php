<?php

/* AdminInterfaceBundle:Default:all-products.html.twig */
class __TwigTemplate_42ab78a7adaf9f82411c17106fc31a0b06e47a947198c4a78040f1a079be0868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "AdminInterfaceBundle:Default:all-products.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>Products <small>View and manage all your products</small></h3>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"well well-sm\">
                        <div class=\"btn-group\">
                            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.product");
        echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-plus\"></i> Add New Product</a>
                            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.addon");
        echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-plus\"></i> Add New Addon</a>
                        </div>
                    </div>
                </div>
            </div>
            <br />

            <div class=\"row\">
                <form method=\"get\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_all_view");
        echo "\">
                    <div class=\"col-md-3\">
                        <label>Filter by name:</label>
                        <input value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "text"), "method"), "html", null, true);
        echo "\" name=\"text\" type=\"text\" class=\"form-control\" />
                    </div>
                    <div class=\"col-md-3\">
                        <label>Filter by category:</label>
                        <select name=\"category\" class=\"form-control\">
                            <option value=\"\">--PRODUCTS--</option>
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 34
            echo "                                <option ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "category"), "method") == $this->getAttribute($context["opt"], "id", array()))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "name", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            <option value=\"\">--THEMES--</option>
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_options"]) ? $context["theme_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 38
            echo "                                <option ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "category"), "method") == $this->getAttribute($context["opt"], "id", array()))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "name", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label>Filter by status:</label>
                        <select name=\"active\" class=\"form-control\">
                            <option value=\"1\">Active</option>
                            <option ";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "active"), "method") == "0")) {
            echo "selected";
        }
        echo " value=\"0\">Inactive</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label>&nbsp;</label><br />
                        <button type=\"submit\" class=\"btn btn-success\">Filter Products</button>
                    </div>
                </form>
            </div>
            <br />

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table jambo_table table-bordered\">
                        <thead>
                        <tr>
                            <th>Product #</th>
                            <th>Product Name</th>
                            <th>Product Is Active?</th>
                            <th>Product Is Featured?</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 71
            echo "                                <tr>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "sku", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <label class=\"badge badge-info\">
                                            ";
            // line 76
            if (($this->getAttribute($context["product"], "IsActive", array()) == 1)) {
                echo "YES";
            } else {
                echo "NO";
            }
            // line 77
            echo "                                        </label>
                                    </td>
                                    <td>
                                        <label class=\"badge badge-info\">N/A</label>
                                    </td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle btn btn-warning\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                                <!--<li>
                                                    <a href=\"#\">View</a>
                                                </li>!-->
                                                <li>
                                                    <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.existing.product", array("product_id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                                </li>
                                                <li>
                                                    <a class=\"trigger-product-delete\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deactivate.existing.product", array("product_id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">Deactivate</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            ";
        if (((isset($context["total"]) ? $context["total"] : null) <= 0)) {
            // line 101
            echo "                                <tr><td colspan=\"5\">No matching products found!</td></tr>
                            ";
        }
        // line 103
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <br />

            ";
        // line 109
        if (((isset($context["total"]) ? $context["total"] : null) > 0)) {
            // line 110
            echo "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"btn-group\">
                        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 114
                echo "                            ";
                $context["class"] = "btn-default";
                // line 115
                echo "                            ";
                if (((isset($context["curr"]) ? $context["curr"] : null) == $context["i"])) {
                    $context["class"] = "btn-info";
                }
                // line 116
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_paged_view", array("page" => $context["i"])), "html", null, true);
                echo "?";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "queryString", array()), "html", null, true);
                echo "\" class=\"btn btn-sm ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                    </div>
                </div>
            </div>
            ";
        }
        // line 122
        echo "
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
";
    }

    // line 128
    public function block_javascript($context, array $blocks = array())
    {
        // line 129
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
           \$(\".trigger-product-delete\").click(function(e){
                e.preventDefault();
               if( confirm(\"Are you sure you want to deactivate this product?\") ){
                   window.location.href = \$(this).attr(\"href\");
               }
           });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Default:all-products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 129,  275 => 128,  266 => 122,  260 => 118,  245 => 116,  240 => 115,  237 => 114,  233 => 113,  228 => 110,  226 => 109,  218 => 103,  214 => 101,  211 => 100,  198 => 93,  192 => 90,  177 => 77,  171 => 76,  165 => 73,  161 => 72,  158 => 71,  154 => 70,  125 => 46,  117 => 40,  102 => 38,  98 => 37,  95 => 36,  80 => 34,  76 => 33,  67 => 27,  61 => 24,  50 => 16,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Default:all-products.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Default/all-products.html.twig");
    }
}
