<?php

/* CoreBundle:widgets:main-menu.html.twig */
class __TwigTemplate_23c465031571b9c752dbb450bc8da82c13669b4ad4a80682d06fbf7a12f1751c extends Twig_Template
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
        echo "<div class=\"menu-main-menu-container\">
    <ul id=\"main-menu\" class=\"menu\">
        <li class=\"menu-item\"><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homepage");
        echo "\">Home</a></li>
        <li class=\"menu-item\"><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_us_cms");
        echo "\">About Us</a></li>
        <li class=\"menu-item\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("artwork_cms");
        echo "\">Artwork</a></li>
        <li class=\"menu-item\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("textwriting_cms");
        echo "\">Text Writing</a></li>
        <li class=\"menu-item\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mfgprocess_cms");
        echo "\">MFG Process</a></li>
        <li class=\"menu-item\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("whitepapers_cms");
        echo "\">White Papers</a></li>
        <li class=\"menu-item\"><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_cms");
        echo "\">Contact Us</a></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:widgets:main-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:widgets:main-menu.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\CoreBundle/Resources/views/widgets/main-menu.html.twig");
    }
}
