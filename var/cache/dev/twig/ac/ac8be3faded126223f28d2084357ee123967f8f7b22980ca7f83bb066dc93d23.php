<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5564b8377f4fcec15f3fd49cfce9bae075fa9fcb08bc183e10e829d24d05f939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5564b8377f4fcec15f3fd49cfce9bae075fa9fcb08bc183e10e829d24d05f939->enter($__internal_5564b8377f4fcec15f3fd49cfce9bae075fa9fcb08bc183e10e829d24d05f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4d8955a4c0261d34d9b5f4d19aed227f92e0931052fbad4471838c13220d543f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8955a4c0261d34d9b5f4d19aed227f92e0931052fbad4471838c13220d543f->enter($__internal_4d8955a4c0261d34d9b5f4d19aed227f92e0931052fbad4471838c13220d543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5564b8377f4fcec15f3fd49cfce9bae075fa9fcb08bc183e10e829d24d05f939->leave($__internal_5564b8377f4fcec15f3fd49cfce9bae075fa9fcb08bc183e10e829d24d05f939_prof);

        
        $__internal_4d8955a4c0261d34d9b5f4d19aed227f92e0931052fbad4471838c13220d543f->leave($__internal_4d8955a4c0261d34d9b5f4d19aed227f92e0931052fbad4471838c13220d543f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5629cb2679831cd05385da309531c7d41bbcf05852ac665bdeb335552b261d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5629cb2679831cd05385da309531c7d41bbcf05852ac665bdeb335552b261d33->enter($__internal_5629cb2679831cd05385da309531c7d41bbcf05852ac665bdeb335552b261d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f1e68bcdf996cc6117d25f425e39cf2e9750a0847c062e8e54498c06fd12f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1e68bcdf996cc6117d25f425e39cf2e9750a0847c062e8e54498c06fd12f84->enter($__internal_5f1e68bcdf996cc6117d25f425e39cf2e9750a0847c062e8e54498c06fd12f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f1e68bcdf996cc6117d25f425e39cf2e9750a0847c062e8e54498c06fd12f84->leave($__internal_5f1e68bcdf996cc6117d25f425e39cf2e9750a0847c062e8e54498c06fd12f84_prof);

        
        $__internal_5629cb2679831cd05385da309531c7d41bbcf05852ac665bdeb335552b261d33->leave($__internal_5629cb2679831cd05385da309531c7d41bbcf05852ac665bdeb335552b261d33_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d126d242d5d6f071882ea6a8a8b7842d7fab6ec47280134a58e23b7cebb1a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d126d242d5d6f071882ea6a8a8b7842d7fab6ec47280134a58e23b7cebb1a3e->enter($__internal_9d126d242d5d6f071882ea6a8a8b7842d7fab6ec47280134a58e23b7cebb1a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1b8b49132e9e109d7527181eef1acffd1daac5b790e8c590bd4ba5149ad3a59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8b49132e9e109d7527181eef1acffd1daac5b790e8c590bd4ba5149ad3a59b->enter($__internal_1b8b49132e9e109d7527181eef1acffd1daac5b790e8c590bd4ba5149ad3a59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1b8b49132e9e109d7527181eef1acffd1daac5b790e8c590bd4ba5149ad3a59b->leave($__internal_1b8b49132e9e109d7527181eef1acffd1daac5b790e8c590bd4ba5149ad3a59b_prof);

        
        $__internal_9d126d242d5d6f071882ea6a8a8b7842d7fab6ec47280134a58e23b7cebb1a3e->leave($__internal_9d126d242d5d6f071882ea6a8a8b7842d7fab6ec47280134a58e23b7cebb1a3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a03afbbdfec4e72b2394ba8dddf5b19a78fbf23cbbb7a0de01cbf6f360b51f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03afbbdfec4e72b2394ba8dddf5b19a78fbf23cbbb7a0de01cbf6f360b51f2e->enter($__internal_a03afbbdfec4e72b2394ba8dddf5b19a78fbf23cbbb7a0de01cbf6f360b51f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b13210a5317d9f08971920d7a3ef022bd1e8c2777437bfd76f7e167916d35925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13210a5317d9f08971920d7a3ef022bd1e8c2777437bfd76f7e167916d35925->enter($__internal_b13210a5317d9f08971920d7a3ef022bd1e8c2777437bfd76f7e167916d35925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b13210a5317d9f08971920d7a3ef022bd1e8c2777437bfd76f7e167916d35925->leave($__internal_b13210a5317d9f08971920d7a3ef022bd1e8c2777437bfd76f7e167916d35925_prof);

        
        $__internal_a03afbbdfec4e72b2394ba8dddf5b19a78fbf23cbbb7a0de01cbf6f360b51f2e->leave($__internal_a03afbbdfec4e72b2394ba8dddf5b19a78fbf23cbbb7a0de01cbf6f360b51f2e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\awardsmart\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
