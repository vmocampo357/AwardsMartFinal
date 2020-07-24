<?php

/* @AdminInterface/Single/add-addon.html.twig */
class __TwigTemplate_8e4996aea6615dbfd5658a9f2a23ecec5690d7dbd4ab1e2282156321143e4967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "@AdminInterface/Single/add-addon.html.twig", 1);
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
                    <h3>Addons <small>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</small></h3>
                </div>
                <div class=\"col-md-6\">
                    <h3>Addon Options <small>Options for the addon</small></h3>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
    <form action=\"\" method=\"POST\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"row\">
                    <div class=\"col-md-10\">
                        <h4>Addon Name</h4>
                        <input required name=\"addon[name]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "name", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-10\">
                        <h4>Addon Label (Used in the dropdowns)</h4>
                        <input name=\"addon[label]\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "addonLabel", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-10\">
                        <h4>Is active?</h4>
                        <select name=\"addon[active]\" class=\"form-control\">
                            <option value=\"0\">No</option>
                            <option ";
        // line 41
        if ($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "isActive", array())) {
            echo "selected";
        }
        echo " value=\"1\">Yes</option>
                        </select>
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-10\">
                        <div class=\"well-sm\">
                            <button type=\"submit\" class=\"btn btn-success\">Finish and Update Addon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a href=\"javascript:void(0);\" class=\"btn btn-info trigger-new-option\"><i class=\"fa fa-plus-square-o\"></i> Add another Option</a>
                    </div>
                </div>
                <hr />
                ";
        // line 61
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "options", array())) > 0)) {
            // line 62
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ao"]) {
                // line 63
                echo "                        ";
                if (($this->getAttribute($context["ao"], "IsActive", array()) == 1)) {
                    // line 64
                    echo "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h4>Option Name</h4>
                                <input required name=\"option[existing][";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "id", array()), "html", null, true);
                    echo "][name]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "name", array()), "html", null, true);
                    echo "\" class=\"form-control\" type=\"text\" />
                            </div>
                            <div class=\"col-md-3\">
                                <h4>Addl. Price</h4>
                                <input name=\"option[existing][";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "id", array()), "html", null, true);
                    echo "][price]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ao"], "price", array()), "html", null, true);
                    echo "\" class=\"form-control\" type=\"number\" />
                            </div>
                            <div class=\"col-md-1\">
                                <h4>&nbsp;</h4>
                                <a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deactivate.existing.addon_option", array("addon_option_id" => $this->getAttribute($context["ao"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger deactivate-option\"><i class=\"fa fa-minus-square\"></i></a>
                            </div>
                        </div>
                        ";
                }
                // line 79
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                ";
        }
        // line 81
        echo "                <div id=\"new-options\">
                    <div id=\"new-option-template\" class=\"row insert-after new-option\">
                        <div class=\"col-md-6\">
                            <h4>Option Name</h4>
                            <input name=\"option[new][0][name]\" class=\"form-control\" type=\"text\" />
                        </div>
                        <div class=\"col-md-3\">
                            <h4>Addl. Price</h4>
                            <input name=\"option[new][0][price]\" class=\"form-control\" type=\"number\" />
                        </div>
                        <div class=\"col-md-1\">
                            <h4>&nbsp;</h4>
                            <a href=\"javascript:void(0);\" class=\"btn btn-danger remove-inline-option\"><i class=\"fa fa-minus-square\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 101
    public function block_javascript($context, array $blocks = array())
    {
        // line 102
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(e){
            window.newCount = 0;

            // Adds a 'new' option to the list of options
            \$(document).on(\"click\",\".trigger-new-option\",function(){
                window.newCount++;
                var template = \"<div class=\\\"row new-option\\\">\" + \$(\"#new-option-template\").html() + \"</div>\";
                template = template.replace(/\\[0\\]/g,\"[\"+window.newCount+\"]\");
                \$(\"#new-options\").append( \$(template) );
            });

            // Deactivates an option
            \$(document).on(\"click\",\".deactivate-option\",function(e){
                e.preventDefault();
                if( confirm(\"Are you sure you want to de-activate this option? Unsaved work may be lost.\") ){
                    window.location.href = \$(this).attr(\"href\");
                }
            });

            // Inline removes a new option
            \$(document).on(\"click\",\".remove-inline-option\",function(e){
                if(\$(\".new-option\").length > 1){
                    \$(this).parent().parent().remove();
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Single/add-addon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 102,  179 => 101,  156 => 81,  153 => 80,  147 => 79,  140 => 75,  131 => 71,  122 => 67,  117 => 64,  114 => 63,  109 => 62,  107 => 61,  82 => 41,  70 => 32,  60 => 25,  40 => 8,  34 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Single/add-addon.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Single\\add-addon.html.twig");
    }
}
