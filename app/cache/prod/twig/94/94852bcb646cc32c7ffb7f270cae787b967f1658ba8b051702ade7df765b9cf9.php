<?php

/* @AdminInterface/Default/all-categories.html.twig */
class __TwigTemplate_af6e3207b25f60acce2c0d8c94652893fa7423805b376a67c1f34e285a2f908d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "@AdminInterface/Default/all-categories.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        .disabled-category{
            display: none;
        }
        .disabled-category label a.category-name{
            text-decoration: line-through;
        }
        .disabled-category .action-bronson{
            display:none;
        }
        .close-group{ display: none; }
        .remove-category{ display: block; }
        .has-children .close-group{
            display: inline-block;
            font-size:14px;
            color:black;
        }
        /*.has-children .remove-category{
            display: none;
        }*/
        .categories{
            padding-left:0px;
        }
        .categories, .categories li
        {
            list-style-type:none;
        }
            .categories label:hover{
                background-color:rgba(0,0,0,0.07);
            }
            .children:hover{
                box-shadow:-3px 0px 0px 0px skyblue !important;
            }
            .categories .children{
                box-shadow:-3px 0px 0px 0px #5A738E;
                margin-left:32px;
                padding-left:0px;
            }
                .categories li label a{
                    font-size:20px;
                }
                    .categories li label .btn{
                        font-size:10px !important;
                    }
                .categories li label{
                    display:block;
                    box-shadow:inset 0px 0px 2px 0px darkgray;
                    padding:10px;
                    padding-left:20px;
                    position: relative;
                }
                    .categories .children li label{
                        padding-left:0px;
                    }
                .categories .children li label a{
                    font-size:14px;
                }
                .children .category-name:before{
                    content: '——';
                }
        .action-bronson{
            position: absolute;
            top:5px;
            right:5px;
        }
    </style>
";
    }

    // line 107
    public function block_main_body($context, array $blocks = array())
    {
        // line 108
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>Categories <small>View and review your cart's categories</small></h3>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h3>Products</h3>
            <a class=\"btn btn-sm btn-success\" href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.category.parent", array("class_id" => 1, "parent_id" => 0)), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"></i> Add Product Category</a>
            <ul class=\"categories\">
                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 126
            echo "                    ";
            echo $this->getAttribute($this, "recursiveCategory", array(0 => $context["product"]), "method");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            </ul>
        </div>
        <div class=\"col-md-6\">
            <h3>Themes</h3>
            <a class=\"btn btn-sm btn-success\" href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.category.parent", array("class_id" => 2, "parent_id" => 0)), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"></i> Add Theme Category</a>
            <ul class=\"categories\">
                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 135
            echo "                    ";
            echo $this->getAttribute($this, "recursiveCategory", array(0 => $context["theme"]), "method");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "            </ul>
        </div>
    </div>
";
    }

    // line 142
    public function block_javascript($context, array $blocks = array())
    {
        // line 143
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(e){

           // Code for intercepting deletes
           \$(document).on(\"click\",\".remove-category\",function(e){
                e.preventDefault();
                var href = \$(this).attr(\"href\");
                if( confirm(\"Are you sure you want to deactivate this category?\") ){
                    window.location.href = href;
                }
           });

           // Code for toggling the sub-categories
           \$(document).on(\"click\",\".close-group\",function(){
               var parent_id = \$(this).attr(\"data-for\");
               \$(\".children[data-parent=\" + parent_id + \"]\").slideToggle();
           });
        });
    </script>
";
    }

    // line 72
    public function getrecursiveCategory($__category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 73
            echo "    <li class=\"";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "IsActive", array()) == 0)) {
                echo "disabled-category";
            }
            echo "\">
        <label class=\"
            ";
            // line 75
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "ChildrenCategories", array())) > 0)) {
                echo "has-children";
            }
            // line 76
            echo "            ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parent", array()) == false)) {
                echo "is-root";
            }
            echo "\">
            <a class=\"category-name\" href=\"#\">
                ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "
                <a data-for=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
            echo "\" class=\"close-group\" href=\"javascript:void(0);\">
                    (<i class=\"fa fa-bars\"></i>)
                </a>
            </a>
            <div class=\"action-bronson\">
                <div class=\"btn-group\">
                    <a data-toggle=\"tooltip\" title=\"Edit Category\" class=\"btn btn-sm btn-info edit-category\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.existing.category", array("category_id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"fa fa-pencil\"></i>
                    </a>
                    <a data-toggle=\"tooltip\" title=\"Add Child Category\" class=\"btn btn-sm btn-success add-child-category\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.category.parent", array("parent_id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "class_id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "type", array()))), "html", null, true);
            echo "\">
                        <i class=\"fa fa-plus\"></i>
                    </a>
                    <a data-toggle=\"tooltip\" title=\"Remove Category\" class=\"btn btn-sm btn-danger remove-category\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deactivate.existing.category", array("category_id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                    </a>
                </div>
            </div>
        </label>
        ";
            // line 97
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "ChildrenCategories", array()))) {
                // line 98
                echo "            <ul data-parent=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
                echo "\" class=\"children\">
                ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "ChildrenCategories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 100
                    echo "                    ";
                    echo $this->getAttribute($this, "recursiveCategory", array(0 => $context["child"]), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "            </ul>
        ";
            }
            // line 104
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Default/all-categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 104,  284 => 102,  275 => 100,  271 => 99,  266 => 98,  264 => 97,  255 => 91,  249 => 88,  243 => 85,  234 => 79,  230 => 78,  222 => 76,  218 => 75,  210 => 73,  198 => 72,  175 => 143,  172 => 142,  165 => 137,  156 => 135,  152 => 134,  147 => 132,  141 => 128,  132 => 126,  128 => 125,  123 => 123,  106 => 108,  103 => 107,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Default/all-categories.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Default\\all-categories.html.twig");
    }
}
