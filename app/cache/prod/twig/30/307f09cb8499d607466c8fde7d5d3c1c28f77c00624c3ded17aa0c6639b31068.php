<?php

/* AdminInterfaceBundle:Single/widgets:product-categories.html.twig */
class __TwigTemplate_d930f49151f8bf10c49d52c0411e7648320329525f80389ce00d094796365cb8 extends Twig_Template
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
        <h4>Product Categories</h4>
    </div>
    <div class=\"panel-body\">
        <div class=\"btn-group\">
            <a class=\"btn btn-info trigger-add-category\" href=\"javascript:void(0);\">Add To Another Category</a>
        </div>
        <ul class=\"product-selections\" id=\"product-categories-list\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                <li>
                    <select name=\"product[category][]\" class=\"form-control\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryOptions"]) ? $context["categoryOptions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categoryOption"]) {
                // line 14
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["categoryOption"], "parent", array()), "id", array()) != 0)) {
                    // line 15
                    echo "                                <option ";
                    if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute($context["categoryOption"], "id", array()))) {
                        echo "selected";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categoryOption"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["categoryOption"], "parent", array()), "name", array()), "html", null, true);
                    echo " >> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categoryOption"], "name", array()), "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 17
                    echo "                                <option ";
                    if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute($context["categoryOption"], "id", array()))) {
                        echo "selected";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categoryOption"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categoryOption"], "name", array()), "html", null, true);
                    echo "</option>
                            ";
                }
                // line 19
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryOption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                    </select>
                    <div class=\"controls btn-group\">
                        ";
            // line 23
            echo "                        <a class=\"btn btn-danger remove-this-category\" href=\"javascript:void(0);\"><i class=\"fa fa-minus-circle\"></i></a>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Single/widgets:product-categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  81 => 23,  77 => 20,  71 => 19,  59 => 17,  45 => 15,  42 => 14,  38 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Single/widgets:product-categories.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Single/widgets/product-categories.html.twig");
    }
}
