<?php

/* AdminInterfaceBundle:Default/widgets:menu.html.twig */
class __TwigTemplate_a429b34754963cf18f74dd90c7708a6cc6fdc699f7ef1870833f1028b75282f0 extends Twig_Template
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
        echo "<div class=\"nav_menu\">
    <nav>
        ";
        // line 6
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"\">
                <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastName", array()), "html", null, true);
        echo " <span class=\" fa fa-angle-down\"></span>
                </a>
                <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    ";
        // line 20
        echo "                    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homepage");
        echo "\">Browse Site</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin.logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                </ul>
            </li>

        </ul>
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Default/widgets:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 21,  37 => 20,  29 => 10,  23 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Default/widgets:menu.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Default/widgets/menu.html.twig");
    }
}
