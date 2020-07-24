<?php

/* CoreBundle:widgets:alerts.html.twig */
class __TwigTemplate_62ae848deac7664de10088ceaeed2e00dee9226159ead36a92ff12d81af725f7 extends Twig_Template
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
        echo "<div class=\"alert-center\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "errors"), "method")) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "errors"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["err"]) {
                // line 4
                echo "        <div class=\"alert alert-danger\">
            <strong>";
                // line 5
                echo twig_escape_filter($this->env, $context["err"], "html", null, true);
                echo "</strong>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "successes"), "method")) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "successes"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["err"]) {
                // line 11
                echo "            <div class=\"alert alert-success\">
                <strong>";
                // line 12
                echo twig_escape_filter($this->env, $context["err"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "others"), "method")) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "others"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["err"]) {
                // line 18
                echo "            <div class=\"alert alert-warning\">
                <strong>";
                // line 19
                echo twig_escape_filter($this->env, $context["err"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        // line 23
        echo "</div>
<script type=\"text/javascript\">
    \$(document).on(\"click\",\".alert\",function(e){
       \$(this).fadeOut();
    });
    setTimeout(function(){
        \$(\".alert\").fadeOut();
    }, 3000);
</script>";
    }

    public function getTemplateName()
    {
        return "CoreBundle:widgets:alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  87 => 22,  78 => 19,  75 => 18,  70 => 17,  67 => 16,  64 => 15,  55 => 12,  52 => 11,  47 => 10,  44 => 9,  41 => 8,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:widgets:alerts.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\CoreBundle/Resources/views/widgets/alerts.html.twig");
    }
}
