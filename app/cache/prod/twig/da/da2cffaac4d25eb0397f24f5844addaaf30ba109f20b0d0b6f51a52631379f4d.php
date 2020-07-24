<?php

/* AdminInterfaceBundle:Default:all-addons.html.twig */
class __TwigTemplate_6826d4f185fa48e0218f7b20151f1bf482c83e7a5eedb04fa60f10d4c6c63a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "AdminInterfaceBundle:Default:all-addons.html.twig", 1);
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
                    <h3>Addons <small>View and manage all your addons</small></h3>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"well well-sm\">
                        <div class=\"btn-group\">
                            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.addon");
        echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-plus\"></i> Add New Addon</a>
                        </div>
                    </div>
                </div>
            </div>
            <br />

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table jambo_table table-bordered\">
                        <thead>
                        <tr>
                            <th>Addon ID</th>
                            <th>Addon Name</th>
                            <th>Addon Options</th>
                            <th>Addon Is Active?</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addons"]) ? $context["addons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
            // line 36
            echo "                                <tr>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <select class=\"form-control\">
                                            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["addon"], "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                // line 42
                echo "                                                ";
                if (($this->getAttribute($context["opt"], "IsActive", array()) == 1)) {
                    // line 43
                    echo "                                                    <option>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "name", array()), "html", null, true);
                    echo " (+\$";
                    echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, $this->getAttribute($context["opt"], "price", array()), 2, ".", ","), "0.0"), "html", null, true);
                    echo ")</option>
                                                ";
                }
                // line 45
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                        </select>
                                    </td>
                                    <td>
                                        <label class=\"badge badge-info\">
                                            ";
            // line 50
            if (($this->getAttribute($context["addon"], "IsActive", array()) == 1)) {
                echo "YES";
            } else {
                echo "NO";
            }
            // line 51
            echo "                                        </label>
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
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.existing.addon", array("addon_id" => $this->getAttribute($context["addon"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                                </li>
                                                <li>
                                                    <a class=\"trigger-addon-delete\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deactivate.existing.addon", array("addon_id" => $this->getAttribute($context["addon"], "id", array()))), "html", null, true);
            echo "\">Deactivate</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <br />

            ";
        // line 77
        if (((isset($context["total"]) ? $context["total"] : null) > 0)) {
            // line 78
            echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"btn-group\">
                            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 82
                echo "                                ";
                $context["class"] = "btn-default";
                // line 83
                echo "                                ";
                if (((isset($context["curr"]) ? $context["curr"] : null) == $context["i"])) {
                    $context["class"] = "btn-info";
                }
                // line 84
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addons.paged.view", array("page" => $context["i"])), "html", null, true);
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
            // line 86
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 90
        echo "
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
";
    }

    // line 96
    public function block_javascript($context, array $blocks = array())
    {
        // line 97
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\".trigger-addon-delete\").click(function(e){
                e.preventDefault();
                if( confirm(\"Are you sure you want to deactivate this addon?\") ){
                    window.location.href = \$(this).attr(\"href\");
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Default:all-addons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 97,  205 => 96,  196 => 90,  190 => 86,  177 => 84,  172 => 83,  169 => 82,  165 => 81,  160 => 78,  158 => 77,  150 => 71,  137 => 64,  131 => 61,  119 => 51,  113 => 50,  107 => 46,  101 => 45,  93 => 43,  90 => 42,  86 => 41,  80 => 38,  76 => 37,  73 => 36,  69 => 35,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Default:all-addons.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Default/all-addons.html.twig");
    }
}
