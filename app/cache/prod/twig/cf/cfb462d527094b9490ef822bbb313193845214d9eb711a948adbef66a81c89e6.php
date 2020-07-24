<?php

/* @AdminInterface/Default/login.html.twig */
class __TwigTemplate_4eae75e833958d23ee73ff01c0b9498faa9526f8820e2b416b83723bda93fb26 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>AwardMart | Login</title>

    ";
        // line 12
        $this->loadTemplate("@AdminInterface/Default/widgets/header-javascript.html.twig", "@AdminInterface/Default/login.html.twig", 12)->display($context);
        // line 13
        echo "</head>

<body class=\"login\">
";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-dismissable alert-danger\" role=\"alert\">
        <strong>Error!</strong> ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
    </div>
";
        }
        // line 21
        echo "<div>
    <a class=\"hiddenanchor\" id=\"signup\"></a>
    <a class=\"hiddenanchor\" id=\"signin\"></a>

    <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
            <section class=\"login_content\">
                <form action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin.login");
        echo "\" method=\"POST\">
                    <h1>AwardsMart Login</h1>
                    <div>
                        <input name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                    </div>
                    <div>
                        <input name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"hidden\" name=\"_target_path\" value=\"main_administrator_container\" />
                        <button type=\"submit\" class=\"btn btn-success\">Log in</button>
                    </div>
                    <div class=\"clearfix\"></div>
                </form>
            </section>
        </div>

    </div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 31,  59 => 28,  50 => 21,  44 => 18,  41 => 17,  39 => 16,  34 => 13,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Default/login.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
