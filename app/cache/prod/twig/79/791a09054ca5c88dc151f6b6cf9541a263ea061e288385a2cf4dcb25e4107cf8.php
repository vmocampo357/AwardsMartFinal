<?php

/* @Core/widgets/category-menu.html.twig */
class __TwigTemplate_9f1699a221dfda171a8affe23b09f4955dd12f0d6034c64ad4b27dd828f54549 extends Twig_Template
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
        echo "<div class=\"sidebar-menu\">
    <h1>products</h1>
    <ul id=\"sidebar-products-menu\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrontProviderBundle:Default:buildCategoryMenuForType", array("type" => 1)));
        echo "
    </ul>
</div>

<div class=\"sidebar-menu\">
    <h1>themes</h1>
    <ul id=\"sidebar-themes-menu\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrontProviderBundle:Default:buildCategoryMenuForType", array("type" => 2)));
        echo "
    </ul>
</div>

<ul id=\"footer-menu\">
    <li><a target=\"_blank\" href=\"http://www.promoplace.com/24488\">Promotional Products</a></li>
    <li><a target=\"_blank\" href=\"http://www.4logoapparel.com/cgi-bin/hw/phwPseudo_Submit.w?hwCN=197208212203201210201214205199180214205199201200&hwCNCD=likOamsDPlciaczn\">Apparel Catalog</a></li>
    <li><a target=\"_blank\" href=\"http://www.bestsignboards.com/\">Bulletin Boards/Pedestal Signage Catalog</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@Core/widgets/category-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Core/widgets/category-menu.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\CoreBundle\\Resources\\views\\widgets\\category-menu.html.twig");
    }
}
