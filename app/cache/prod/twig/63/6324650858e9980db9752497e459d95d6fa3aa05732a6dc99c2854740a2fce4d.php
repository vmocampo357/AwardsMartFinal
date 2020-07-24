<?php

/* @PrimarySite/default/cms.html.twig */
class __TwigTemplate_613aeec51bfe06770c954f6b0c1171b832bbd2571e93648239854a79ad513ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/main-template.html.twig", "@PrimarySite/default/cms.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Core/main-template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metaTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metaTitle", array()), "AwardsMart | Celebrating life's victories. San Antonio's premier awards shop.")) : ("AwardsMart | Celebrating life's victories. San Antonio's premier awards shop.")), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row main-body\">
        <div class=\"col-md-12\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo " ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            echo "<a class=\"btn btn-sm btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.existing.page", array("page_id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()))), "html", null, true);
            echo "\">Edit this page</a>";
        }
        echo "</h2>
            ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@PrimarySite/default/cms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  43 => 7,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrimarySite/default/cms.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartFrontend\\PrimarySiteBundle\\Resources\\views\\default\\cms.html.twig");
    }
}
