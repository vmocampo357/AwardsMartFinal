<?php

/* AdminInterfaceBundle:Single/widgets:product-addons.html.twig */
class __TwigTemplate_9e8772616ed26c3d7ba88aee0da8fbff7507f3685249a84b1600708586d3f4e5 extends Twig_Template
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
        <h4>Product Addons</h4>
    </div>
    <div class=\"panel-body\">
        <div class=\"btn-group\">
            <a class=\"btn btn-info trigger-add-addon\" href=\"javascript:void(0);\">Add New Addon</a>
        </div>
        <ul class=\"product-selections\" id=\"product-addons-list\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "addons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
            // line 11
            echo "                <li>
                    <select name=\"product[addons][]\" class=\"form-control\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addonOptions"]) ? $context["addonOptions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["addonOption"]) {
                // line 14
                echo "                            <option ";
                if (($this->getAttribute($context["addon"], "id", array()) == $this->getAttribute($context["addonOption"], "id", array()))) {
                    echo "selected";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "name", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addonOption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                    </select>
                    <div class=\"controls btn-group\">
                        ";
            // line 19
            echo "                        <a class=\"remove-this-addon btn btn-danger\" href=\"javascript:void(0);\"><i class=\"fa fa-minus-circle\"></i></a>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Single/widgets:product-addons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  61 => 19,  57 => 16,  42 => 14,  38 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Single/widgets:product-addons.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Single/widgets/product-addons.html.twig");
    }
}
