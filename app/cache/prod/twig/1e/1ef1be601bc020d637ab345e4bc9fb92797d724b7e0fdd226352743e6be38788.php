<?php

/* @AdminInterface/Single/widgets/product-options.html.twig */
class __TwigTemplate_24043fd004621335cb35e8dc7cbd654429f1138f8fd0cbd59c7e828a0db9da70 extends Twig_Template
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
        echo "<div class=\"panel panel-warning\">
    <div class=\"panel-heading\">
        <h4>Product Options</h4>
    </div>
    <div class=\"panel-body\">
        <div class=\"btn-group\">
            <a class=\"trigger-add-option btn btn-info\" href=\"javascript:void(0);\">Add New Option</a>
        </div>
        <ul class=\"product-selections\" id=\"product-options-list\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 11
            echo "                <li>
                    <input name=\"product[option][]\" type=\"text\" class=\"form-control option-select\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
            echo "\" />
                    <div class=\"controls btn-group\">
                        ";
            // line 15
            echo "                        <a class=\"remove-this-option btn btn-danger\" href=\"javascript:void(0);\"><i class=\"fa fa-minus-circle\"></i></a>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Single/widgets/product-options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  42 => 15,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Single/widgets/product-options.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Single\\widgets\\product-options.html.twig");
    }
}
