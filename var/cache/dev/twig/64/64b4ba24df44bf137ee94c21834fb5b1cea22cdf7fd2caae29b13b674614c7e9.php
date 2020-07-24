<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a42794857e95336455081b46eceb56d415fe0fa1db4a90cd7319d5d46a085ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42794857e95336455081b46eceb56d415fe0fa1db4a90cd7319d5d46a085ed0->enter($__internal_a42794857e95336455081b46eceb56d415fe0fa1db4a90cd7319d5d46a085ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_785e91a56964915e8c1d9d28423dc398d312756cb81c10e08cb2368ccf115c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785e91a56964915e8c1d9d28423dc398d312756cb81c10e08cb2368ccf115c3b->enter($__internal_785e91a56964915e8c1d9d28423dc398d312756cb81c10e08cb2368ccf115c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a42794857e95336455081b46eceb56d415fe0fa1db4a90cd7319d5d46a085ed0->leave($__internal_a42794857e95336455081b46eceb56d415fe0fa1db4a90cd7319d5d46a085ed0_prof);

        
        $__internal_785e91a56964915e8c1d9d28423dc398d312756cb81c10e08cb2368ccf115c3b->leave($__internal_785e91a56964915e8c1d9d28423dc398d312756cb81c10e08cb2368ccf115c3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f86218beee91adc5fa4808a63b54dec7dbf60097af21c87632ae13415017527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f86218beee91adc5fa4808a63b54dec7dbf60097af21c87632ae13415017527->enter($__internal_1f86218beee91adc5fa4808a63b54dec7dbf60097af21c87632ae13415017527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7367cf37d0eaf0a2bc4d06aba82ea24278234a995aab12e10ff5272d3435b89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7367cf37d0eaf0a2bc4d06aba82ea24278234a995aab12e10ff5272d3435b89b->enter($__internal_7367cf37d0eaf0a2bc4d06aba82ea24278234a995aab12e10ff5272d3435b89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7367cf37d0eaf0a2bc4d06aba82ea24278234a995aab12e10ff5272d3435b89b->leave($__internal_7367cf37d0eaf0a2bc4d06aba82ea24278234a995aab12e10ff5272d3435b89b_prof);

        
        $__internal_1f86218beee91adc5fa4808a63b54dec7dbf60097af21c87632ae13415017527->leave($__internal_1f86218beee91adc5fa4808a63b54dec7dbf60097af21c87632ae13415017527_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_620310403a78a8070307e27d62eecd17ad424d7f595482938ed4402c4f9b7d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620310403a78a8070307e27d62eecd17ad424d7f595482938ed4402c4f9b7d13->enter($__internal_620310403a78a8070307e27d62eecd17ad424d7f595482938ed4402c4f9b7d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d18c6078f0f5d7ec39b0d7729b7460761e2b4c4c60bf76143f1a85624c798fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18c6078f0f5d7ec39b0d7729b7460761e2b4c4c60bf76143f1a85624c798fb4->enter($__internal_d18c6078f0f5d7ec39b0d7729b7460761e2b4c4c60bf76143f1a85624c798fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d18c6078f0f5d7ec39b0d7729b7460761e2b4c4c60bf76143f1a85624c798fb4->leave($__internal_d18c6078f0f5d7ec39b0d7729b7460761e2b4c4c60bf76143f1a85624c798fb4_prof);

        
        $__internal_620310403a78a8070307e27d62eecd17ad424d7f595482938ed4402c4f9b7d13->leave($__internal_620310403a78a8070307e27d62eecd17ad424d7f595482938ed4402c4f9b7d13_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aceee8771d233a45e4a52faa14d1a1bc63e9f5f651e47af07d05ae4805c152c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aceee8771d233a45e4a52faa14d1a1bc63e9f5f651e47af07d05ae4805c152c2->enter($__internal_aceee8771d233a45e4a52faa14d1a1bc63e9f5f651e47af07d05ae4805c152c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b2019d91a9e9c70c3ca216dc67d2a9567d2691113a16da096fceabf3966479a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2019d91a9e9c70c3ca216dc67d2a9567d2691113a16da096fceabf3966479a6->enter($__internal_b2019d91a9e9c70c3ca216dc67d2a9567d2691113a16da096fceabf3966479a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b2019d91a9e9c70c3ca216dc67d2a9567d2691113a16da096fceabf3966479a6->leave($__internal_b2019d91a9e9c70c3ca216dc67d2a9567d2691113a16da096fceabf3966479a6_prof);

        
        $__internal_aceee8771d233a45e4a52faa14d1a1bc63e9f5f651e47af07d05ae4805c152c2->leave($__internal_aceee8771d233a45e4a52faa14d1a1bc63e9f5f651e47af07d05ae4805c152c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\awardsmart\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
