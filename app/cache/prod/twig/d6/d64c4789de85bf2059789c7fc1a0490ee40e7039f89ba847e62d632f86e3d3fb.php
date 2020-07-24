<?php

/* CoreBundle::main-template.html.twig */
class __TwigTemplate_dab4672976b8d055db5418f116e233c60ba55a7053f617b1a36bb18162be1203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/base.html.twig", "CoreBundle::main-template.html.twig", 1);
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

        <div class=\"col-md-9 col-md-push-3\">";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        echo "</div>

        <div class=\"col-md-3 col-md-pull-9\">
            ";
        // line 9
        $this->loadTemplate("@Core/widgets/category-menu.html.twig", "CoreBundle::main-template.html.twig", 9)->display($context);
        // line 10
        echo "        </div>

    </div>

";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoreBundle::main-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  45 => 10,  43 => 9,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle::main-template.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\CoreBundle/Resources/views/main-template.html.twig");
    }
}
