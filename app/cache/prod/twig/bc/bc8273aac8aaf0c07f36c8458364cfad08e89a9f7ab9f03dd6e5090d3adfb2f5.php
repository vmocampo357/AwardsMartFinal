<?php

/* @AdminInterface/Default/all-orders.html.twig */
class __TwigTemplate_9ad7e5b67ee82b0f412aaee8052bd1893dfb4954722baa9eaa57e519a6453f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "@AdminInterface/Default/all-orders.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
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
                    <h3>Orders <small>View and review your customer's orders</small></h3>
                </div>
            </div>

            ";
        // line 21
        echo "
            <div class=\"row\">
                <form method=\"get\" action=\"\">
                    <div class=\"col-md-3\">
                        <label>Filter by text:</label>
                        <input value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "text"), "method"), "html", null, true);
        echo "\" name=\"text\" type=\"text\" class=\"form-control\" />
                    </div>
                    <div class=\"col-md-3\">
                        <label>Where grand total is...</label>
                        <select name=\"gtelte\" class=\"form-control\">
                            <option value=\"0\">No preference</option>
                            <option ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "gtelte"), "method") ==  -1)) {
            echo "selected";
        }
        echo " value=\"-1\">Less than..</option>
                            <option ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "gtelte"), "method") == 1)) {
            echo "selected";
        }
        echo " value=\"1\">More than..</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label>Total (greater or less than)</label>
                        <input value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "total"), "method"), "html", null, true);
        echo "\" name=\"total\" type=\"text\" class=\"form-control\" />
                    </div>
                    <div class=\"col-md-3\">
                        <label>&nbsp;</label><br />
                        <button type=\"submit\" class=\"btn btn-success\">Filter Orders</button>
                    </div>
                </form>
            </div>
            <br />

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table jambo_table table-bordered\">
                        <thead>
                        <tr>
                            <th>Purchase Order</th>
                            <th>Customer Name (Full)</th>
                            <th>Date</th>
                            <th>Order Total</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 62
            echo "                            <tr>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "PurchaseOrderNumber", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "customer", array()), "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "dateSubmitted", array()), "D, m/d/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "dateSubmitted", array()), "H:i a"), "html", null, true);
            echo "</td>
                                <td>\$";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "finalTotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle btn btn-warning\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders.single.view", array("order_id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">View</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <br />

            ";
        // line 83
        if (((isset($context["total"]) ? $context["total"] : null) > 0)) {
            // line 84
            echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"btn-group\">
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 88
                echo "                                ";
                $context["class"] = "btn-default";
                // line 89
                echo "                                ";
                if (((isset($context["curr"]) ? $context["curr"] : null) == $context["i"])) {
                    $context["class"] = "btn-info";
                }
                // line 90
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders.paged.view", array("page" => $context["i"])), "html", null, true);
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
            // line 92
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 96
        echo "
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Default/all-orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 96,  180 => 92,  167 => 90,  162 => 89,  159 => 88,  155 => 87,  150 => 84,  148 => 83,  140 => 77,  128 => 71,  120 => 66,  114 => 65,  110 => 64,  106 => 63,  103 => 62,  99 => 61,  73 => 38,  63 => 33,  57 => 32,  48 => 26,  41 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Default/all-orders.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Default\\all-orders.html.twig");
    }
}
