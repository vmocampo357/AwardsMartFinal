<?php

/* @PrimarySite/default/upload.html.twig */
class __TwigTemplate_a0b55af0e43944b468e3168f5e4d3714d471d02484c8b41a957460754390c78f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <title>Just testing uploads</title>
    </head>
    <body>
        <form action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
            <input type=\"file\" name=\"addonOne\" />
            <input type=\"submit\" />
        </form>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@PrimarySite/default/upload.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrimarySite/default/upload.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle\\Resources\\views\\default\\upload.html.twig");
    }
}
