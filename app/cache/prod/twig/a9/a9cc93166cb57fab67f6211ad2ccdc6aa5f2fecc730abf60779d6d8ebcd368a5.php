<?php

/* AdminInterfaceBundle:Single:add-category.html.twig */
class __TwigTemplate_5ba7868cbd4351fd94ec22f515d0b7277c734262c5a71c5661594fe27c626730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "AdminInterfaceBundle:Single:add-category.html.twig", 1);
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
                    <h3>Categories <small>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</small></h3>
                </div>
                <div class=\"col-md-6\">
                    <a class=\"btn btn-default\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories.all.view");
        echo "\">Back to all categories</a>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
    <form action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h4>Category Name</h4>
                <input required value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"category[name]\" />
                <hr />
                <h4>Category Browser Title</h4>
                <input value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "metaTitle", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"category[title]\" />
                <hr />
                <h4>Category Browser Description</h4>
                <textarea name=\"category[description]\" class=\"form-control\" style=\"height:200px\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "metaDescription", array()), "html", null, true);
        echo "</textarea>
                <hr />
                <button type=\"submit\" class=\"btn btn-success\">Finish and Update</button>
            </div>
            <div class=\"col-md-6\">
                <h4>Classification</h4>
                <select class=\"form-control\" name=\"category[type]\">
                    <option value=\"1\">Product</option>
                    <option ";
        // line 37
        if (((isset($context["class_id"]) ? $context["class_id"] : null) == 2)) {
            echo "selected";
        }
        echo " value=\"2\">Theme</option>
                </select>
                <hr />
                <h4>Parent Category</h4>
                <select class=\"form-control\" name=\"category[parent_id]\">
                    <option value=\"0\">No parent (Root Category)</option>
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_options"]) ? $context["category_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 44
            echo "                        ";
            if (($this->getAttribute($context["option"], "isActive", array()) == 1)) {
                // line 45
                echo "                        <option ";
                if (($this->getAttribute($context["option"], "id", array()) == (isset($context["parent_id"]) ? $context["parent_id"] : null))) {
                    echo "selected";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                echo "</option>
                        ";
            }
            // line 47
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </select>
                <hr />
                <h4>Category Thumbnail</h4>
                <img width=\"200px\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "primaryImage", array())), "html", null, true);
        echo "\" />
                <input type=\"file\" name=\"primary_image\" />
            </div>
        </div>
    </form>
";
    }

    // line 57
    public function block_javascript($context, array $blocks = array())
    {
        // line 58
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(e){

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Single:add-category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 58,  135 => 57,  125 => 51,  120 => 48,  114 => 47,  102 => 45,  99 => 44,  95 => 43,  84 => 37,  73 => 29,  67 => 26,  61 => 23,  46 => 11,  40 => 8,  34 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Single:add-category.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Single/add-category.html.twig");
    }
}
