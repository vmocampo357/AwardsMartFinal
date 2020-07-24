<?php

/* PrimarySiteBundle:default:upload.html.twig */
class __TwigTemplate_9e0fd695e4ce1e13af169c03eb00c0009aee5312f77822140113793c8f342dbe extends Twig_Template
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
        return "PrimarySiteBundle:default:upload.html.twig";
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
        return new Twig_Source("", "PrimarySiteBundle:default:upload.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle/Resources/views/default/upload.html.twig");
    }
}
