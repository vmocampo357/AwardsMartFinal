<?php

/* @PrimarySite/default/thanks.html.twig */
class __TwigTemplate_23237e3f0584ec52ca0b23a616edd5f19cfa4bac1980aad2674c097fb656514c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/main-template.html.twig", "@PrimarySite/default/thanks.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Core/main-template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Awards Mart | Shopping Cart";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row main-body checkout-body\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h2>Thank you for your order</h2>
                <p>An AwardsMart representative will contact you within the next business day to complete order.</p>
                <p>For any questions, call 210-655-4848 or 866-901-9900</p>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@PrimarySite/default/thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrimarySite/default/thanks.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle\\Resources\\views\\default\\thanks.html.twig");
    }
}
