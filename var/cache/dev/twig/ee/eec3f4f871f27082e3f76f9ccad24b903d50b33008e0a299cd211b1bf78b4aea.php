<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa54b79f4db0eb116aee9e639d9c2829bb73e8b9a1bc5098f4f3b9cb68f393c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa54b79f4db0eb116aee9e639d9c2829bb73e8b9a1bc5098f4f3b9cb68f393c3->enter($__internal_aa54b79f4db0eb116aee9e639d9c2829bb73e8b9a1bc5098f4f3b9cb68f393c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f67600738b8efb68a52da1201e30c64941b5b7c3502e36b9dac1eeaaaa07d51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67600738b8efb68a52da1201e30c64941b5b7c3502e36b9dac1eeaaaa07d51b->enter($__internal_f67600738b8efb68a52da1201e30c64941b5b7c3502e36b9dac1eeaaaa07d51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_aa54b79f4db0eb116aee9e639d9c2829bb73e8b9a1bc5098f4f3b9cb68f393c3->leave($__internal_aa54b79f4db0eb116aee9e639d9c2829bb73e8b9a1bc5098f4f3b9cb68f393c3_prof);

        
        $__internal_f67600738b8efb68a52da1201e30c64941b5b7c3502e36b9dac1eeaaaa07d51b->leave($__internal_f67600738b8efb68a52da1201e30c64941b5b7c3502e36b9dac1eeaaaa07d51b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a4a9ba99ac9f4a94f451fbf9cad3ec0d94f8a7335cfb871423f5f040ac2ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a4a9ba99ac9f4a94f451fbf9cad3ec0d94f8a7335cfb871423f5f040ac2ff9->enter($__internal_b5a4a9ba99ac9f4a94f451fbf9cad3ec0d94f8a7335cfb871423f5f040ac2ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd16dd6d90598f3b94fce853779160e71a256717ae076cbce3d0f0ec6440074f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd16dd6d90598f3b94fce853779160e71a256717ae076cbce3d0f0ec6440074f->enter($__internal_bd16dd6d90598f3b94fce853779160e71a256717ae076cbce3d0f0ec6440074f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd16dd6d90598f3b94fce853779160e71a256717ae076cbce3d0f0ec6440074f->leave($__internal_bd16dd6d90598f3b94fce853779160e71a256717ae076cbce3d0f0ec6440074f_prof);

        
        $__internal_b5a4a9ba99ac9f4a94f451fbf9cad3ec0d94f8a7335cfb871423f5f040ac2ff9->leave($__internal_b5a4a9ba99ac9f4a94f451fbf9cad3ec0d94f8a7335cfb871423f5f040ac2ff9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfa3dd46c87ff37fc7438bb3933334e7c69c43c21b42969046de286b97cf9ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa3dd46c87ff37fc7438bb3933334e7c69c43c21b42969046de286b97cf9ede->enter($__internal_cfa3dd46c87ff37fc7438bb3933334e7c69c43c21b42969046de286b97cf9ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c040004babd7ba5667be85734fb9a067e1970e64524378879e6d2458780b2f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c040004babd7ba5667be85734fb9a067e1970e64524378879e6d2458780b2f73->enter($__internal_c040004babd7ba5667be85734fb9a067e1970e64524378879e6d2458780b2f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c040004babd7ba5667be85734fb9a067e1970e64524378879e6d2458780b2f73->leave($__internal_c040004babd7ba5667be85734fb9a067e1970e64524378879e6d2458780b2f73_prof);

        
        $__internal_cfa3dd46c87ff37fc7438bb3933334e7c69c43c21b42969046de286b97cf9ede->leave($__internal_cfa3dd46c87ff37fc7438bb3933334e7c69c43c21b42969046de286b97cf9ede_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab72e204032e6e9740a050b7dad771477ab8deec4a542f53aef8fea55000a6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab72e204032e6e9740a050b7dad771477ab8deec4a542f53aef8fea55000a6dd->enter($__internal_ab72e204032e6e9740a050b7dad771477ab8deec4a542f53aef8fea55000a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d46f404c3dd68497763131e075409e1db061f3ef9a59b600d5210221ac54f1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46f404c3dd68497763131e075409e1db061f3ef9a59b600d5210221ac54f1b3->enter($__internal_d46f404c3dd68497763131e075409e1db061f3ef9a59b600d5210221ac54f1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d46f404c3dd68497763131e075409e1db061f3ef9a59b600d5210221ac54f1b3->leave($__internal_d46f404c3dd68497763131e075409e1db061f3ef9a59b600d5210221ac54f1b3_prof);

        
        $__internal_ab72e204032e6e9740a050b7dad771477ab8deec4a542f53aef8fea55000a6dd->leave($__internal_ab72e204032e6e9740a050b7dad771477ab8deec4a542f53aef8fea55000a6dd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce383b613f484f2befbaacffb0b09c61ec328c7dbaeb055b975ccec96e66cdb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce383b613f484f2befbaacffb0b09c61ec328c7dbaeb055b975ccec96e66cdb4->enter($__internal_ce383b613f484f2befbaacffb0b09c61ec328c7dbaeb055b975ccec96e66cdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1a00f41083d1cfcd1597edabc1fd8d84a18aede3374b8fb1619259d49257ceb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a00f41083d1cfcd1597edabc1fd8d84a18aede3374b8fb1619259d49257ceb3->enter($__internal_1a00f41083d1cfcd1597edabc1fd8d84a18aede3374b8fb1619259d49257ceb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1a00f41083d1cfcd1597edabc1fd8d84a18aede3374b8fb1619259d49257ceb3->leave($__internal_1a00f41083d1cfcd1597edabc1fd8d84a18aede3374b8fb1619259d49257ceb3_prof);

        
        $__internal_ce383b613f484f2befbaacffb0b09c61ec328c7dbaeb055b975ccec96e66cdb4->leave($__internal_ce383b613f484f2befbaacffb0b09c61ec328c7dbaeb055b975ccec96e66cdb4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\awardsmart\\app\\Resources\\views\\base.html.twig");
    }
}
