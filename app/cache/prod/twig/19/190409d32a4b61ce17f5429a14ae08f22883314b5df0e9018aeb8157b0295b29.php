<?php

/* @AdminInterface/Single/add-product.html.twig */
class __TwigTemplate_8236091cf1e027e535b78242d441c9859bc4b3670ca361e8d29a397ea08d10f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminInterface/Default/base-admin.html.twig", "@AdminInterface/Single/add-product.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        .product-selections li, .product-selections{
            list-style-type:none;
        }
        .product-selections{
            padding:0px;
            margin:5px 0px;
        }
        .product-selections li{
            position:relative;
            margin-bottom:5px;
        }
        .product-selections .controls{
            position: absolute;
            right:0px;
            top:0px;
        }
        .hidden-template{
            display: none;
        }
        #product-sizes-list{
            padding-top:10px;
        }
        .size-input-list-item{
            clear:both;
            position:relative !important;
            margin-bottom:15px !important;
        }
            .size-input-list-item ul{
                padding:20px;
                background-color:rgba(0,0,0,0.1);
            }
            .size-input-group{
                padding-bottom:15px;
                box-shadow:inset 0px -1px 0px 0px rgba(0,0,0,.2);
            }
            .size-input-group:after{
                content: \"\";
                display: table;
                clear: both;
            }
            .size-input-group label{
                float:left;
                padding:5px 0px;
                width:5%;
            }
            .size-input-group .size-input{
                float:left;
                width:40%;
                margin-right:20px;
            }
            .size-input-group .size-units{
                float:left;
                width:20%;
            }
            .price-selection-list-item:after{
                content: \"\";
                display: table;
                clear: both;
            }
            .price-selection-list-item{
                position: relative;
                padding:10px 0px;
                box-shadow:inset 0px -1px 0px 0px rgba(0,0,0,0.09), inset 0px 1px 0px 0px rgba(0,0,0,0.09);
            }
                .price-selection-list-item .controls{
                    top:15px;
                    right:15px;
                }
                .price-selection-list-item:hover{
                    background-color:rgba(0,0,0,.1);
                }
                .price-selection-list-item .size-price-input,
                .price-selection-list-item label{
                    float:left;
                    width:5%;
                }
                .price-selection-list-item label{
                    text-align: center;
                    padding:6px 0px;
                }
                .price-price-input{
                    width:30% !important;
                }
                .min-price-input, .max-price-input{
                    width:10% !important;
                }
                .max-price-input, .price-right{
                    margin-right:20px;
                }
    </style>
";
    }

    // line 95
    public function block_main_body($context, array $blocks = array())
    {
        // line 96
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>Products <small>";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</small></h3>
                </div>
                <div class=\"col-md-6\">
                    <a class=\"btn btn-default\" href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_all_view");
        echo "\">Back to all products</a>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <br />
    <form action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h4>Product Name</h4>
                        <input required name=\"product[name]\" type=\"text\" class=\"form-control\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"col-md-6\">
                        <h4>Product Number</h4>
                        <input required name=\"product[sku]\" type=\"text\" class=\"form-control\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sku", array()), "html", null, true);
        echo "\" />
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4>Browser Title</h4>
                        <input name=\"product[metatitle]\" type=\"text\" class=\"form-control\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaTitle", array()), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4>Browser Description</h4>
                        <textarea name=\"product[metadesc]\" style=\"height:100px;\" class=\"form-control\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "metaDescription", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4>Page Description</h4>
                        <textarea name=\"product[desc]\" contenteditable=\"true\" id=\"product-description\" style=\"overflow:scroll; min-height:500px;\" class=\"editor-wrapper form-control\">";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 148
        $this->loadTemplate("@AdminInterface/Single/widgets/product-addons.html.twig", "@AdminInterface/Single/add-product.html.twig", 148)->display($context);
        // line 149
        echo "                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 154
        $this->loadTemplate("@AdminInterface/Single/widgets/product-options.html.twig", "@AdminInterface/Single/add-product.html.twig", 154)->display($context);
        // line 155
        echo "                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 160
        $this->loadTemplate("@AdminInterface/Single/widgets/product-categories.html.twig", "@AdminInterface/Single/add-product.html.twig", 160)->display($context);
        // line 161
        echo "                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 166
        $this->loadTemplate("@AdminInterface/Single/widgets/product-sizes.html.twig", "@AdminInterface/Single/add-product.html.twig", 166)->display($context);
        // line 167
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4>Thumbnail Image</h4>
                        <div class=\"well\">
                            <img width=\"40%\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "primaryImage", array())), "html", null, true);
        echo "\" />
                            <input type=\"file\" name=\"thumbnail\" />
                        </div>
                        <h4>Main Image</h4>
                        <div class=\"well\">
                            <img width=\"50%\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pageImage", array())), "html", null, true);
        echo "\" />
                            <input type=\"file\" name=\"primary\" />
                        </div>
                        <h4>Zoom Image</h4>
                        <div class=\"well\">
                            <img width=\"100%\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "zoomImage", array())), "html", null, true);
        echo "\" />
                            <input type=\"file\" name=\"zoom\" />
                        </div>
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <div class=\"col-md-11 col-md-push-1\">
                        <select name=\"product[active]\" class=\"form-control\">
                            <option value=\"0\">Inactive</option>
                            <option ";
        // line 195
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "isActive", array()) == 1)) {
            echo "selected";
        }
        echo " value=\"1\">Active</option>
                        </select>
                        <br />
                        <button class=\"btn btn-success\" type=\"submit\">Finish and Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    ";
        // line 204
        $this->loadTemplate("@AdminInterface/Single/widgets/templates.html.twig", "@AdminInterface/Single/add-product.html.twig", 204)->display($context);
    }

    // line 206
    public function block_javascript($context, array $blocks = array())
    {
        // line 207
        echo "    <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=tlw2ypxglv76saqrvipf8krx8bkedeo4ojm5fd7liz9ih6lv\"></script>
    <script>tinymce.init({
            selector:'#product-description',
            theme: 'modern',
            plugins: ['advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality emoticons template paste textcolor']
    });</script>
    <script type=\"text/javascript\">
        \$(document).ready(function(e){

            window.incrementingSizes = 0;
            window.incrementingPrices = 0;

            // Autocomplete
            function setAutocomplete(){
                \$(\".option-select\").off().autocomplete({
                    lookup:";
        // line 224
        echo (isset($context["productOptions"]) ? $context["productOptions"] : null);
        echo ",
                    onSelect:function(){}
                });
                \$(\".size-units\").off().autocomplete({
                    lookup:";
        // line 228
        echo (isset($context["labelsOptions"]) ? $context["labelsOptions"] : null);
        echo ",
                    onSelect:function(){}
                });
            }

            // Duplicating addons
            \$(document).on(\"click\",\".trigger-add-addon\",function(e){
                var html_template = \$(\"#new-addon-template\").html();
                \$(\"#product-addons-list\").append(\$(html_template));
            });

            // Removing addons
            \$(document).on(\"click\",\".remove-this-addon, .remove-this-price, .remove-this-option, .remove-this-category\",function(e){
                \$(this).parent().parent().remove();
                \$(\".tooltip\").tooltip('hide');
            });

            \$(document).on(\"click\",\".remove-this-size\",function(){
                \$(this).parent().parent().parent().remove();
                \$(\".tooltip\").tooltip('hide');
            });

            // Adding options
            \$(document).on(\"click\",\".trigger-add-option\",function(e){
                var html_template = \$(\"#new-option-template\").html();
                \$(\"#product-options-list\").append(\$(html_template));
                setAutocomplete();
            });

            // Adding categories
            \$(document).on(\"click\",\".trigger-add-category\",function(e){
                var html_template = \$(\"#new-category-template\").html();
                \$(\"#product-categories-list\").append(\$(html_template));
            });

            \$(document).on(\"click\",\".trigger-add-size\",function(e){
                e.preventDefault();
                var html_template = \$(\"#new-size-template\").html();
                html_template = html_template.replace(/xxx/g,window.incrementingSizes);
                \$(\"#product-sizes-list\").append(\$(html_template));
                setAutocomplete();
                window.incrementingSizes++;
            });

            \$(document).on(\"click\",\".add-price-to-this-size\",function(e){
                e.preventDefault();
                var html_template = \$(\"#new-price-template\").html();
                html_template = html_template.replace(/xxx/g, \$(this).attr(\"data-for\"));
                html_template = html_template.replace(/yyy/g, \"-\"+window.incrementingPrices);
                if( \$(this).hasClass(\"is-existing\") ){
                    html_template = html_template.replace(/new/g, \"existing\");
                }
                \$(this).parent().parent().parent().find('.size-prices-list').append( \$(html_template) );
                window.incrementingPrices++;
            });

            setAutocomplete();

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@AdminInterface/Single/add-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 228,  314 => 224,  295 => 207,  292 => 206,  288 => 204,  274 => 195,  261 => 185,  253 => 180,  245 => 175,  235 => 167,  233 => 166,  226 => 161,  224 => 160,  217 => 155,  215 => 154,  208 => 149,  206 => 148,  197 => 142,  187 => 135,  177 => 128,  167 => 121,  160 => 117,  143 => 103,  137 => 100,  131 => 96,  128 => 95,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdminInterface/Single/add-product.html.twig", "C:\\xampp\\htdocs\\awardsmart\\src\\AwardsMartBackend\\AdminInterfaceBundle\\Resources\\views\\Single\\add-product.html.twig");
    }
}
