<?php

/* @AdminInterface/Default/all-pages.html.twig */
class __TwigTemplate_a43ee94be0e0472890ff212174e5528f61a80b252845998554cd863b52347d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "@AdminInterface/Default/all-pages.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AdminInterface/Default/base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>CMS Pages <small>View and review your site's CMS pages</small></h3>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table jambo_table table-bordered\">
                        <thead>
                        <tr>
                            <th>Page ID</th>
                            <th>Page Title</th>
                            <th>Page (Browser) Title</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "                            <tr>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "metaTitle", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle btn btn-warning\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.existing.page", array("page_id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">Edit</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <br />

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Default/all-pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  76 => 32,  68 => 27,  64 => 26,  60 => 25,  57 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Default/all-pages.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Default\\all-pages.html.twig");
    }
}
