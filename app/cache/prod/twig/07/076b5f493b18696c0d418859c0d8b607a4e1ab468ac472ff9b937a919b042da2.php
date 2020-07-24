<?php

/* CoreBundle:widgets:top-menu.html.twig */
class __TwigTemplate_44649fc19fa568d419af4df3a3c45b572918610206ce200ea6034b8ac7e3356f extends Twig_Template
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
        echo "<div class=\"menu-header-menu-container\">
    <ul id=\"upper-menu\" class=\"menu\">
        <li id=\"menu-item-50\" class=\"menu-item\"><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_view");
        echo "\">View Cart ";
        echo "</a></li>
        <li id=\"menu-item-26\" class=\"menu-item\"><a href=\"#\">1-866-901-9900</a></li>
        <li id=\"menu-item-27\" class=\"menu-item\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shipping_cms");
        echo "\">Shipping</a></li>
        <li id=\"menu-item-29\" class=\"menu-item\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("warranty_cms");
        echo "\">Warranty</a></li>
        <li id=\"menu-item-28\" class=\"menu-item\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privacypolicy_cms");
        echo "\">Privacy Policy</a></li>
        <li id=\"menu-item-28\" class=\"menu-item\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_search_container");
        echo "\">Search Products</a></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:widgets:top-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:widgets:top-menu.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\CoreBundle/Resources/views/widgets/top-menu.html.twig");
    }
}
