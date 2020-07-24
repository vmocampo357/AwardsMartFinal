<?php

/* AdminInterfaceBundle:Default:base-admin.html.twig */
class __TwigTemplate_7aa8c068f8643f528cc84581878f48f4e6c15fff85a12dbcf0d8bee32e14ec94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'main_body' => array($this, 'block_main_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>AwardsMart Administrator | ";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

    ";
        // line 12
        $this->loadTemplate("@AdminInterface/Default/widgets/header-javascript.html.twig", "AdminInterfaceBundle:Default:base-admin.html.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            ";
        // line 21
        $this->loadTemplate("@AdminInterface/Default/widgets/main-menu.html.twig", "AdminInterfaceBundle:Default:base-admin.html.twig", 21)->display($context);
        // line 22
        echo "        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
           ";
        // line 26
        $this->loadTemplate("@AdminInterface/Default/widgets/menu.html.twig", "AdminInterfaceBundle:Default:base-admin.html.twig", 26)->display($context);
        // line 27
        echo "        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            ";
        // line 32
        $this->loadTemplate("@AdminInterface/Default/widgets/alert.html.twig", "AdminInterfaceBundle:Default:base-admin.html.twig", 32)->display($context);
        // line 33
        echo "            ";
        $this->displayBlock('main_body', $context, $blocks);
        // line 34
        echo "        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class=\"pull-right\">
                AwardsMart | Administrative Interface
            </div>
            <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

";
        // line 48
        $this->loadTemplate("@AdminInterface/Default/widgets/footer-javascript.html.twig", "AdminInterfaceBundle:Default:base-admin.html.twig", 48)->display($context);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('javascript', $context, $blocks);
        // line 51
        echo "
</body>
</html>
";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_main_body($context, array $blocks = array())
    {
    }

    // line 50
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Default:base-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  117 => 33,  112 => 14,  106 => 10,  99 => 51,  97 => 50,  94 => 49,  92 => 48,  76 => 34,  73 => 33,  71 => 32,  64 => 27,  62 => 26,  56 => 22,  54 => 21,  46 => 15,  44 => 14,  41 => 13,  39 => 12,  34 => 10,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Default:base-admin.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Default/base-admin.html.twig");
    }
}
