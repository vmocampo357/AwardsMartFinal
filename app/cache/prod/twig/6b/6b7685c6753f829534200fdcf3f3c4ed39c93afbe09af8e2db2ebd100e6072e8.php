<?php

/* @AdminInterface/Single/widgets/templates.html.twig */
class __TwigTemplate_26636778ad823bb05b42cd5fef8d4e706828c373bc8cf604eb6e0546f7511a97 extends Twig_Template
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
        echo "<div class=\"hidden-template\" id=\"new-category-template\">
    <li>
        <select name=\"product[category][]\" class=\"form-control\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryOptions"]) ? $context["categoryOptions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryOption"]) {
            // line 5
            echo "                ";
            if (($this->getAttribute($this->getAttribute($context["categoryOption"], "parent", array()), "id", array()) != 0)) {
                // line 6
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoryOption"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["categoryOption"], "parent", array()), "name", array()), "html", null, true);
                echo " >> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoryOption"], "name", array()), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 8
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoryOption"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoryOption"], "name", array()), "html", null, true);
                echo "</option>
                ";
            }
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </select>
        <div class=\"controls btn-group\">
            ";
        // line 14
        echo "            <a class=\"btn btn-danger remove-this-category\" href=\"javascript:void(0);\"><i class=\"fa fa-minus-circle\"></i></a>
        </div>
    </li>
</div>

<div id=\"new-option-template\" class=\"hidden-template\">
    <li>
        <input name=\"product[option][]\" type=\"text\" class=\"form-control option-select\" value=\"\" />
        <div class=\"controls btn-group\">
            ";
        // line 24
        echo "            <a class=\"remove-this-option btn btn-danger\" href=\"javascript:void(0);\"><i class=\"fa fa-minus-circle\"></i></a>
        </div>
    </li>
</div>

<div id=\"new-addon-template\" class=\"hidden-template\">
    <li>
        <select name=\"product[addons][]\" class=\"form-control\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addonOptions"]) ? $context["addonOptions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["addonOption"]) {
            // line 33
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["addonOption"], "name", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addonOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </select>
        <div class=\"controls btn-group\">
            ";
        // line 38
        echo "            <a class=\"remove-this-addon btn btn-danger\" href=\"javascript:void(0);\"><i class=\"fa fa-minus-circle\"></i></a>
        </div>
    </li>
</div>

<div id=\"new-size-template\" class=\"hidden-template\">
    <li class=\"size-input-list-item\">
        <div class=\"size-input-group\">
            <label>Size</label>
            <input name=\"product[size][new][xxx][size]\" value=\"\" type=\"text\" class=\"form-control size-input\" />
            <label>Units</label>
            <input name=\"product[size][new][xxx][units]\" value=\"\" type=\"text\" class=\"form-control size-units\" />
            <div class=\"controls btn-group\">
                ";
        // line 52
        echo "                <a title=\"Add Price\" data-for=\"xxx\" data-toggle=\"tooltip\" class=\"add-price-to-this-size btn btn-success\" href=\"javascript:void(0);\"><i class=\"fa fa-plus-square\"></i></a>
                <a title=\"Remove Size\" data-toggle=\"tooltip\" class=\"remove-this-size btn btn-danger\" href=\"javascript:void(0);\"><i class=\"fa fa-minus-circle\"></i></a>
            </div>
        </div>
        <ul class=\"size-prices-list\"></ul>
    </li>
</div>

<div id=\"new-price-template\" class=\"hidden-template\">
    <li class=\"price-selection-list-item\">
        <label class=\"price-right\">Qty</label>
        <input name=\"product[size][new][xxx][price][yyy][min]\" value=\"\" type=\"text\" class=\"form-control min-price-input size-price-input\" />
        <label>&ndash;</label>
        <input name=\"product[size][new][xxx][price][yyy][max]\" value=\"\" type=\"text\" class=\"form-control max-price-input size-price-input\" />
        <label class=\"price-right\">Price</label>
        <input name=\"product[size][new][xxx][price][yyy][price]\" value=\"\" type=\"text\" class=\"form-control price-price-input size-price-input\" />
        <div class=\"controls btn-group\">
            ";
        // line 70
        echo "            <a title=\"Remove Price\" data-toggle=\"tooltip\" class=\"remove-this-price btn btn-xs btn-danger\" href=\"javascript:void(0);\"><i class=\"fa fa-close\"></i></a>
        </div>
    </li>
</div>";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Single/widgets/templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 70,  114 => 52,  99 => 38,  95 => 35,  84 => 33,  80 => 32,  70 => 24,  59 => 14,  55 => 11,  49 => 10,  41 => 8,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Single/widgets/templates.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Single\\widgets\\templates.html.twig");
    }
}
