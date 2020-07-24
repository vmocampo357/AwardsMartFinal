<?php

/* @AdminInterface/Single/widgets/product-sizes.html.twig */
class __TwigTemplate_4e54bbc1cc09e724b398143be04bcca170ab7fba309d135ac25974777e96a407 extends Twig_Template
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
        <h4>Product Sizes, Prices</h4>
    </div>
    <div class=\"panel-body\">
        <div class=\"btn-group\">
            <a class=\"btn btn-info trigger-add-size\" href=\"#\">Add New Size</a>
        </div>
        <ul class=\"product-selections\" id=\"product-sizes-list\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "productSizes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 11
            echo "                <li class=\"size-input-list-item\">
                    <div class=\"size-input-group\">
                        <label>Size</label>
                        <input name=\"product[size][existing][";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
            echo "][size]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "size", array()), "html", null, true);
            echo "\" type=\"text\" class=\"form-control size-input\" />
                        <label>Units</label>
                        <input name=\"product[size][existing][";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
            echo "][units]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "units", array()), "html", null, true);
            echo "\" type=\"text\" class=\"form-control size-units\" />
                        <div class=\"controls btn-group\">
                            ";
            // line 19
            echo "                            <a data-for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
            echo "\" title=\"Add Price\" data-toggle=\"tooltip\" class=\"add-price-to-this-size is-existing btn btn-success\" href=\"javascript:void(0);\"><i class=\"fa fa-plus-square\"></i></a>
                            <a title=\"Remove Size\" data-toggle=\"tooltip\" class=\"remove-this-size btn btn-danger\" href=\"javascript:void(0);\"><i class=\"fa fa-minus-circle\"></i></a>
                        </div>
                    </div>
                    <ul class=\"size-prices-list\">
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["size"], "prices", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 25
                echo "                            <li class=\"price-selection-list-item\">
                                <label class=\"price-right\">Qty</label>
                                <input name=\"product[size][existing][";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
                echo "][price][";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "id", array()), "html", null, true);
                echo "][min]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "min", array()), "html", null, true);
                echo "\" type=\"text\" class=\"form-control min-price-input size-price-input\" />
                                <label>&ndash;</label>
                                <input name=\"product[size][existing][";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
                echo "][price][";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "id", array()), "html", null, true);
                echo "][max]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "max", array()), "html", null, true);
                echo "\" type=\"text\" class=\"form-control max-price-input size-price-input\" />
                                <label class=\"price-right\">Price</label>
                                <input name=\"product[size][existing][";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", array()), "html", null, true);
                echo "][price][";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "id", array()), "html", null, true);
                echo "][price]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "price", array()), "html", null, true);
                echo "\" type=\"text\" class=\"form-control price-price-input size-price-input\" />
                                <div class=\"controls btn-group\">
                                    ";
                // line 34
                echo "                                    <a title=\"Remove Price\" data-toggle=\"tooltip\" class=\"remove-this-price btn btn-xs btn-danger\" href=\"javascript:void(0);\"><i class=\"fa fa-close\"></i></a>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    </ul>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Single/widgets/product-sizes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  106 => 38,  97 => 34,  88 => 31,  79 => 29,  70 => 27,  66 => 25,  62 => 24,  53 => 19,  46 => 16,  39 => 14,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Single/widgets/product-sizes.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Single\\widgets\\product-sizes.html.twig");
    }
}
