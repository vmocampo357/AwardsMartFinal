<?php

/* AdminInterfaceBundle:Single:add-page.html.twig */
class __TwigTemplate_d56d97441cd5134ea277c36357b38dded899e1df9881be3880f17f574bfeb836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "AdminInterfaceBundle:Single:add-page.html.twig", 1);
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <style></style>
";
    }

    // line 5
    public function block_main_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>CMS Pages <small>Update your CMS page</small></h3>
                </div>
                <div class=\"col-md-6\">
                    <a class=\"btn btn-default\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms.pages.all");
        echo "\">Back to all pages</a>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
    <form action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h4>Page Title</h4>
                <input name=\"page[title]\" type=\"text\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "\" />
            </div>
            <div class=\"col-md-6\">
                <h4>Page (Meta) Title</h4>
                <input name=\"page[metaTitle]\" type=\"text\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metaTitle", array()), "html", null, true);
        echo "\" />
            </div>
        </div>
        <hr />
        <div class=\"row\">
            <div class=\"col-md-12\">
                <textarea name=\"page[content]\" style=\"height:600px;\" id=\"page-content\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "</textarea>
            </div>
        </div>
        <hr />
        <div class=\"row\">
            <div class=\"col-md-6\">
                <button type=\"submit\" class=\"btn btn-info\">Finish and Submit</button>
            </div>
        </div>
    </form>
";
    }

    // line 46
    public function block_javascript($context, array $blocks = array())
    {
        // line 47
        echo "    <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=tlw2ypxglv76saqrvipf8krx8bkedeo4ojm5fd7liz9ih6lv\"></script>
    <script>tinymce.init({
            selector:'#page-content',
            theme: 'modern',
            plugins: ['advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality emoticons template paste textcolor']
        });</script>
    <script type=\"text/javascript\">
        \$(document).ready(function(e){});
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Single:add-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  96 => 46,  81 => 35,  72 => 29,  65 => 25,  50 => 13,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Single:add-page.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Single/add-page.html.twig");
    }
}
