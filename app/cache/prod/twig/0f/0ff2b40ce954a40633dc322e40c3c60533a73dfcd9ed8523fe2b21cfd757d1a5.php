<?php

/* @AdminInterface/Single/add-library-image.html.twig */
class __TwigTemplate_4f4b1fb3113c7d01613c2a3d9b1a23a2a9e595571bd85e5c39722caa26574f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "@AdminInterface/Single/add-library-image.html.twig", 1);
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
                    <h3>Image Library <small>Create a new image for CMS Pages</small></h3>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
    <form action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4>Image Nickname</h4>
                        <input name=\"image[nickname]\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "nickname", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4>Image (Raw)</h4>
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "source", array())), "html", null, true);
        echo "\" />
                        <input type=\"file\" name=\"source\" />
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <button class=\"btn btn-default\">Finish and Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 43
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Single/add-library-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 43,  64 => 29,  54 => 22,  34 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Single/add-library-image.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Single\\add-library-image.html.twig");
    }
}
