<?php

/* @AdminInterface/Default/dashboard.html.twig */
class __TwigTemplate_47306af3354575137f4cddadd52613e379d3c995e18a55c0116ee2e6c211c403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "@AdminInterface/Default/dashboard.html.twig", 1);
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
        <div class=\"col-md-12 col-sm-12 col-xs-12 bg-white\">
            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>Dashboard <small>Statistics overview</small></h3>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\" role=\"heading\">
                            <i class=\"fa fa-question-circle\"></i> <strong>Welcome to your new Admin interface.</strong>
                        </div>
                        <div class=\"panel-body\">
                            <p>For help and support, please contact vmocampo357@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Default/dashboard.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Default\\dashboard.html.twig");
    }
}
