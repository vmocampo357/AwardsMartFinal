<?php

/* AdminInterfaceBundle:Default:all-images.html.twig */
class __TwigTemplate_1ca86011707c5e7ce620e20f954639af09570b721f3f8d721382c71c1480abb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "AdminInterfaceBundle:Default:all-images.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
            'javascript' => array($this, 'block_javascript'),
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
                    <h3>Library Images <small>View and use your available site images</small></h3>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"well well-sm\">
                        <div class=\"btn-group\">
                            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create.new.image");
        echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-plus\"></i> Add New Library Image</a>
                        </div>
                    </div>
                </div>
            </div>
            <br />

            ";
        // line 47
        echo "
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table jambo_table table-bordered\">
                        <thead>
                        <tr>
                            <th>Image ID</th>
                            <th>Preview</th>
                            <th>Image Nickname</th>
                            <th>Source</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 62
            echo "                            <tr>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "</td>
                                <td><a data-featherlight=\"\" target=\"_blank\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "source", array())), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "source", array())), "html", null, true);
            echo "\" height=\"40px\" /></a></td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "nickname", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "source", array())), "html", null, true);
            echo "</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle btn btn-warning\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a class=\"trigger-remove-image\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deactivate.existing.image", array("image_id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\">Remove Image</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) < 1)) {
            // line 78
            echo "                            <tr>
                                <td colspan=\"5\">No images were found in the library</td>
                            </tr>
                        ";
        }
        // line 82
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <br />

            ";
        // line 101
        echo "
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
";
    }

    // line 107
    public function block_javascript($context, array $blocks = array())
    {
        // line 108
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\".trigger-remove-image\").click(function(e){
                e.preventDefault();
                if(confirm(\"Are you sure you want to remove this image?\")){
                    window.location.href = \$(this).attr(\"href\");
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdminInterfaceBundle:Default:all-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 108,  139 => 107,  130 => 101,  122 => 82,  116 => 78,  113 => 77,  101 => 71,  93 => 66,  89 => 65,  83 => 64,  79 => 63,  76 => 62,  72 => 61,  56 => 47,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminInterfaceBundle:Default:all-images.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle/Resources/views/Default/all-images.html.twig");
    }
}
