<?php

/* CoreBundle::no-menu.html.twig */
class __TwigTemplate_69e0588122f080066a504e32f69fbf7b6a13deee91b54eb4c8c6469490313073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/base.html.twig", "CoreBundle::no-menu.html.twig", 1);
        $this->blocks = array(
            'main_container' => array($this, 'block_main_container'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Core/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main_container($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"row\">

        <div class=\"col-md-12\">";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        echo "</div>

    </div>

";
    }

    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoreBundle::no-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle::no-menu.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\CoreBundle/Resources/views/no-menu.html.twig");
    }
}
