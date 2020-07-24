<?php

/* @AdminInterface/Default/widgets/main-menu.html.twig */
class __TwigTemplate_5d8f6b9272ea8466dbc6e71698d8ea96b82ebafd23a6c0a4ee65ccf15a713825 extends Twig_Template
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
        echo "<div class=\"left_col scroll-view\">
    <div class=\"navbar nav_title\" style=\"border: 0;\">
        <a href=\"index.html\" class=\"site_title\"> <span>AwardsMart Admin</span></a>
    </div>

    <div class=\"clearfix\"></div>

    <br />

    <!-- sidebar menu -->
    <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
        <div class=\"menu_section\">
            <h3>General</h3>
            <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-dashboard\"></i> Dashboard <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#\">Cart Overview</a></li>
                    </ul>
                </li>
                <li><a><i class=\"fa fa-table\"></i> Products <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_all_view");
        echo "\">All Products</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.product");
        echo "\">Add New Product</a></li>
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addons.all.view");
        echo "\">All Addons</a></li>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.addon");
        echo "\">Add New Addon</a></li>
                    </ul>
                </li>
                <li><a><i class=\"fa fa-sitemap\"></i> Categories <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories.all.view");
        echo "\">All Categories</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update.create.category");
        echo "\">Add New Category</a></li>
                    </ul>
                </li>
                <li><a><i class=\"fa fa-paste\"></i> Orders <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders.all.view");
        echo "\">Review All Orders</a></li>
                    </ul>
                </li>
                <li><a><i class=\"fa fa-pagelines\"></i> CMS Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms.pages.all");
        echo "\">Edit CMS (WP) Pages</a></li>
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("images.all");
        echo "\">View Image Libary</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create.new.image");
        echo "\">Add Image Library Image</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class=\"sidebar-footer hidden-small\">
        <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
            <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
        </a>
        <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
            <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
        </a>
        <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
            <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
        </a>
        <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
            <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Default/widgets/main-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  86 => 42,  82 => 41,  74 => 36,  66 => 31,  62 => 30,  54 => 25,  50 => 24,  46 => 23,  42 => 22,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Default/widgets/main-menu.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Default\\widgets\\main-menu.html.twig");
    }
}
