<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* journal3/template/checkout/cart.twig */
class __TwigTemplate_90a36f21d55a661812b2e506846013121f64791890038981cff85642a2024ac5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "    <h1 class=\"title page-title\">
    <span>
      ";
            // line 10
            echo ($context["heading_title"] ?? null);
            echo "
";
            // line 14
            echo "    </span>
    </h1>
    <ul class=\"breadcrumb\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 18
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </ul>
";
        }
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 22);
        echo "
<div id=\"checkout-cart\" class=\"container\">
    ";
        // line 24
        if (($context["attention"] ?? null)) {
            // line 25
            echo "        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 29
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 30
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 34
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 35
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 39
        echo "    <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 40
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 41
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 42
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 43
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 44
            echo "        ";
        } else {
            // line 45
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 46
            echo "        ";
        }
        // line 47
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "pageTitlePosition"], "method", false, false, false, 48) == "default")) {
            // line 49
            echo "                <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "
                    ";
            // line 50
            if (($context["weight"] ?? null)) {
                // line 51
                echo "                        &nbsp;(";
                echo ($context["weight"] ?? null);
                echo ")
                    ";
            }
            // line 52
            echo " </h1>
            ";
        }
        // line 54
        echo "            ";
        echo ($context["content_top"] ?? null);
        echo "
            <div class=\"cart-page\">
                <form action=\"";
        // line 56
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"cart-table\">
";
        // line 70
        echo "
";
        // line 72
        echo "
";
        // line 140
        echo "
";
        // line 142
        echo "
                    <div>
                        ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 145
            echo "                            <div style=\"display: flex; justify-content: space-between; background: #FFF; padding: 0 107px 0 42px\">
                            <div style=\"display: flex;\">
                                <div>
                                    ";
            // line 148
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 148)) {
                // line 149
                echo "                                        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 149);
                echo "\">
                                            <img  src=\"";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 150);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 150);
                echo "\" style=\"padding: 30% 40px 0px 0px; \"
                                                 title=\"";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 151);
                echo "\"/>
                                        </a>
                                    ";
            }
            // line 154
            echo "                                </div>
                                <div>
                                        <div class=\"product-sku\">
                                            <p>Код товару: ";
            // line 157
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 157);
            echo "</p>
                                        </div>
                                    <h2>
                                        <a style=\"font-size: 18px\" href=\"";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 160);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 160);
            echo "</a>
                                        ";
            // line 161
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 161)) {
                // line 162
                echo "                                            <span class=\"text-danger\">***</span>
                                        ";
            }
            // line 164
            echo "                                    </h2>
                                    <p>";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 165);
            echo "</p>
                                </div>
                            </div>
                            <div style=\"display: flex; align-items: center;\">
                                <div>
                                    <div style=\"display: flex;\" class=\"stepper\">
                                                    <span class=\"stepper-arrow stepper__minus\" v-on:click=\"updateCartItemQuantity(index, -1)\">
                                                        <svg height=\"1em\" viewBox=\"0 0 320 512\">
                                                            <path d=\"M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></span>
                                        <input type=\"text\" name=\"quantity[";
            // line 174
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 174);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 174);
            echo "\" size=\"1\" class=\"form-control\"/>
                                        <span class=\"stepper-arrow stepper__plus\" v-on:click=\"updateCartItemQuantity(index, 1)\">
                                            <svg height=\"1em\" viewBox=\"0 0 320 512\"><path d=\"M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\"/></svg></span>
                                    </div>
                                </div>
                                <div>
                                    <h3 class=\"text-center td-price\">";
            // line 180
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 180);
            echo "</h3>
                                    <p class=\"text-center td-total\">";
            // line 181
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 181);
            echo "</p>
                                </div>
                            </div>
                                <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 184
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-update\"><i
                                            class=\"fa fa-refresh\"></i></button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 186
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-remove\"
                                        onclick=\"cart.remove('";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 187);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                    </div>
                </form>
                <div>
                <div style=\"display: flex; align-items: center;\" class=\"cart-bottom\">
                    <div class=\"panels-total\">
";
        // line 196
        echo "                        <h3>";
        echo ($context["cart_title_order"] ?? null);
        echo "</h3>
                        <p>";
        // line 197
        echo ($context["cart_text_ware"] ?? null);
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 197);
        echo "</p>
                        <p style=\"color:#F45656;\">";
        // line 198
        echo ($context["cart_text_discount"] ?? null);
        echo "</p>
                        <p>";
        // line 199
        echo ($context["cart_the_total_cost"] ?? null);
        echo "</p>
";
        // line 201
        echo "                        ";
        if ((($context["modules"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 201), "get", [0 => "cartPanelsStatus"], "method", false, false, false, 201))) {
            // line 202
            echo "                            <div class=\"cart-panels\">
";
            // line 204
            echo "                                <p>";
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                            </div>
                        ";
        }
        // line 207
        echo "                        <div class=\"cart-total\">
                            <table class=\"table table-bordered\">
                                ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 210
            echo "                                    <tr>
                                        <td class=\"text-right\"><strong>";
            // line 211
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 211);
            echo ":</strong></td>
                                        <td class=\"text-right\">";
            // line 212
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 212);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                            </table>
                        </div>
                        <div class=\"buttons clearfix\">
                            <div style=\"padding: 0px 0px 50px 0px;\" class=\"pull-right\"><a href=\"";
        // line 218
        echo ($context["checkout"] ?? null);
        echo "\"
                                                       class=\"btn btn-primary\"><span>";
        // line 219
        echo ($context["button_checkout"] ?? null);
        echo "</span></a></div>
                        </div>
                        <div id=\"oneclick\" >
                            <h3>";
        // line 222
        echo ($context["text_one_click_header"] ?? null);
        echo "</h3>
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 224
        echo ($context["text_one_click_placeholder"] ?? null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\">
                                ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 226
            echo "
                                <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 227
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 227);
            echo "\">
                                <span class=\"input-group-btn\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "                    <button type=\"submit\" id=\"button-oneclick\" class=\"btn btn-primary\">";
        echo ($context["text_one_click_button"] ?? null);
        echo "</button>
                </span>
                            </div>
                            <span class=\"help-block\">";
        // line 233
        echo ($context["text_one_click_help"] ?? null);
        echo "</span>
                        </div>
                    </div>

                </div>

                <div style=\"display: flex; align-items: center;\" class=\"cart-bottom\">
                    <div class=\"panel-group\" id=\"accordion\"> ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 241
            echo "                            ";
            echo $context["module"];
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "                    </div>
                </div>
                </div>


            </div>
            ";
        // line 249
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 250
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 252
        echo ($context["footer"] ?? null);
        echo "
<style>
    #content {
        padding-top: 40px;
        padding-right: 0px;
        padding-bottom: 40px;
        padding-left: 0px;
    }
    html:not(.popup) .page-title {
        padding-bottom: 0;
    }
    .cart-bottom {
        background: #fff;
        padding: 20px;
        margin-left: 20px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(226,226,226,1);
    }
    .route-checkout-cart .buttons>div+div {
        padding-left: 0px;
    }
</style>

<script type=\"text/javascript\">
    \$('#button-oneclick').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/addCart',
            type: 'post',
            data: \$('#oneclick input[type=\\'text\\'], #oneclick input[type=\\'hidden\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('#button-oneclick').button('loading');
            },
            complete: function() {
                \$('#button-oneclick').button('reset');
            },
            success: function(json) {
                \$('.alert, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['telephone']) {
                        \$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['telephone'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        \$('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                    if (json['error']['product']) {
                        \$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['product'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        \$('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                    if (json['error']['order']) {
                        \$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['order'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        \$('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                }

                if (json['success']) {
                    \$('.breadcrumb').after('<div class=\"alert alert-success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    \$('html, body').animate({ scrollTop: 0 }, 'slow');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "journal3/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 252,  433 => 250,  429 => 249,  421 => 243,  412 => 241,  408 => 240,  398 => 233,  391 => 230,  382 => 227,  379 => 226,  375 => 225,  371 => 224,  366 => 222,  360 => 219,  356 => 218,  351 => 215,  342 => 212,  338 => 211,  335 => 210,  331 => 209,  327 => 207,  320 => 204,  317 => 202,  314 => 201,  310 => 199,  306 => 198,  301 => 197,  296 => 196,  289 => 190,  280 => 187,  276 => 186,  271 => 184,  265 => 181,  261 => 180,  250 => 174,  238 => 165,  235 => 164,  231 => 162,  229 => 161,  223 => 160,  217 => 157,  212 => 154,  206 => 151,  200 => 150,  195 => 149,  193 => 148,  188 => 145,  184 => 144,  180 => 142,  177 => 140,  174 => 72,  171 => 70,  167 => 56,  161 => 54,  157 => 52,  151 => 51,  149 => 50,  144 => 49,  142 => 48,  137 => 47,  134 => 46,  131 => 45,  128 => 44,  125 => 43,  122 => 42,  119 => 41,  117 => 40,  112 => 39,  104 => 35,  101 => 34,  93 => 30,  90 => 29,  82 => 25,  80 => 24,  75 => 22,  71 => 20,  60 => 18,  56 => 17,  51 => 14,  47 => 10,  43 => 8,  41 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{#<ul class=\"breadcrumb\">#}
{#    {% for breadcrumb in breadcrumbs %}#}
{#        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>#}
{#    {% endfor %}#}
{#</ul>#}
{% if j3.settings.get('pageTitlePosition') == 'top' %}
    <h1 class=\"title page-title\">
    <span>
      {{ heading_title }}
{#        {% if weight %}#}
{#            &nbsp;({{ weight }})#}
{#        {% endif %}#}
    </span>
    </h1>
    <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
            <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
    </ul>
{% endif %}
{{ j3.loadController('journal3/layout', 'top') }}
<div id=\"checkout-cart\" class=\"container\">
    {% if attention %}
        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ attention }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    {% endif %}
    {% if success %}
        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    {% endif %}
    {% if error_warning %}
        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    {% endif %}
    <div class=\"row\">{{ column_left }}
        {% if column_left and column_right %}
            {% set class = 'col-sm-6' %}
        {% elseif column_left or column_right %}
            {% set class = 'col-sm-9' %}
        {% else %}
            {% set class = 'col-sm-12' %}
        {% endif %}
        <div id=\"content\" class=\"{{ class }}\">
            {% if j3.settings.get('pageTitlePosition') == 'default' %}
                <h1 class=\"title page-title\">{{ heading_title }}
                    {% if weight %}
                        &nbsp;({{ weight }})
                    {% endif %} </h1>
            {% endif %}
            {{ content_top }}
            <div class=\"cart-page\">
                <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"cart-table\">
{#                    <div class=\"table-responsive\">#}
{#                        <table class=\"table table-bordered\">#}
{#                            <thead>#}
{#                            <tr>#}
{#                                <td class=\"text-center td-image\">{{ column_image }}</td>#}
{#                                <td class=\"text-left td-name\">{{ column_name }}</td>#}
{#                                <td class=\"text-center td-model\">{{ column_model }}</td>#}
{#                                <td class=\"text-center td-qty\">{{ column_quantity }}</td>#}
{#                                <td class=\"text-center td-price\">{{ column_price }}</td>#}
{#                                <td class=\"text-center td-total\">{{ column_total }}</td>#}
{#                            </tr>#}
{#                            </thead>#}
{#                            <tbody>#}

{#                            {% for product in products %}#}

{#                    /////////////////////////////////////////////////////////#}
{#                                <tr>#}
{#                                    <td class=\"text-center td-image\">{% if product.thumb %} <a#}
{#                                                href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\"#}
{#                                                                               alt=\"{{ product.name }}\"#}
{#                                                                               title=\"{{ product.name }}\"/></a> {% endif %}#}
{#                                    </td>#}
{#                                    <td class=\"text-left td-name\"><a#}
{#                                                href=\"{{ product.href }}\">{{ product.name }}</a> {% if not product.stock %}#}
{#                                            <span class=\"text-danger\">***</span> {% endif %}#}
{#                                        {% if product.option %}#}
{#                                            {% for option in product.option %} <br/>#}
{#                                                <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}#}
{#                                        {% endif %}#}
{#                                        {% if product.reward %} <br/>#}
{#                                            <small>{{ product.reward }}</small> {% endif %}#}
{#                                        {% if product.recurring %} <br/>#}
{#                                            <span class=\"label label-info\">{{ text_recurring_item }}</span>#}
{#                                            <small>{{ product.recurring }}</small> {% endif %}</td>#}
{#                                    <td class=\"text-center td-model\">{{ product.model }}</td>#}
{#                                    <td class=\"text-center td-qty\">#}
{#                                        <div class=\"input-group btn-block\">#}
{#                                            <div class=\"stepper\">#}
{#                                                <span class=\"stepper-arrow stepper__minus\"#}
{#                                                      v-on:click=\"updateCartItemQuantity(index, -1)\"><svg height=\"1em\"#}
{#                                                                                                          viewBox=\"0 0 320 512\"><path#}
{#                                                                d=\"M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></span>#}
{#                                                <input type=\"text\" name=\"quantity[{{ product.cart_id }}]\"#}
{#                                                       value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control\"/>#}
{#                                                <span class=\"stepper-arrow stepper__plus\"#}
{#                                                      v-on:click=\"updateCartItemQuantity(index, 1)\"><svg height=\"1em\"#}
{#                                                                                                         viewBox=\"0 0 320 512\"><path#}
{#                                                                d=\"M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\"/></svg></span>#}
{#                                            </div>#}
{#                                            <span class=\"input-group-btn\">#}
{#                    <button type=\"submit\" data-toggle=\"tooltip\" title=\"{{ button_update }}\" class=\"btn btn-update\"><i#}
{#                                class=\"fa fa-refresh\"></i></button>#}
{#                    <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-remove\"#}
{#                            onclick=\"cart.remove('{{ product.cart_id }}');\"><i class=\"fa fa-times-circle\"></i></button>#}
{#                  </span>#}
{#                                        </div>#}
{#                                    </td>#}
{#                                    <td class=\"text-center td-price\">{{ product.price }}</td>#}
{#                                    <td class=\"text-center td-total\">{{ product.total }}</td>#}
{#                                </tr>#}
{#                            {% endfor %}#}
{#                            {% for voucher in vouchers %}#}
{#                                <tr>#}
{#                                    <td></td>#}
{#                                    <td class=\"text-left td-voucher\">{{ voucher.description }}</td>#}
{#                                    <td class=\"text-left td-voucher\"></td>#}
{#                                    <td class=\"text-left td-voucher\">#}
{#                                        <div class=\"input-group btn-block\" style=\"max-width: 200px;\">#}
{#                                            <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\"#}
{#                                                   class=\"form-control\"/>#}
{#                                            <span class=\"input-group-btn\">#}
{#                  <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"#}
{#                          onclick=\"voucher.remove('{{ voucher.key }}');\"><i class=\"fa fa-times-circle\"></i></button>#}
{#                  </span></div>#}
{#                                    </td>#}
{#                                    <td class=\"text-right td-voucher\">{{ voucher.amount }}</td>#}
{#                                    <td class=\"text-right td-voucher\">{{ voucher.amount }}</td>#}
{#                                </tr>#}
{#                            {% endfor %}#}
{#                            </tbody>#}
{#                        </table>#}
{#                    </div>#}

{#                    ////////////////////////////////////////////////////////////////////////////////#}

                    <div>
                        {% for product in products %}
                            <div style=\"display: flex; justify-content: space-between; background: #FFF; padding: 0 107px 0 42px\">
                            <div style=\"display: flex;\">
                                <div>
                                    {% if product.thumb %}
                                        <a href=\"{{ product.href }}\">
                                            <img  src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" style=\"padding: 30% 40px 0px 0px; \"
                                                 title=\"{{ product.name }}\"/>
                                        </a>
                                    {% endif %}
                                </div>
                                <div>
                                        <div class=\"product-sku\">
                                            <p>Код товару: {{ product.model }}</p>
                                        </div>
                                    <h2>
                                        <a style=\"font-size: 18px\" href=\"{{ product.href }}\">{{ product.name }}</a>
                                        {% if not product.stock %}
                                            <span class=\"text-danger\">***</span>
                                        {% endif %}
                                    </h2>
                                    <p>{{ product.price }}</p>
                                </div>
                            </div>
                            <div style=\"display: flex; align-items: center;\">
                                <div>
                                    <div style=\"display: flex;\" class=\"stepper\">
                                                    <span class=\"stepper-arrow stepper__minus\" v-on:click=\"updateCartItemQuantity(index, -1)\">
                                                        <svg height=\"1em\" viewBox=\"0 0 320 512\">
                                                            <path d=\"M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></span>
                                        <input type=\"text\" name=\"quantity[{{ product.cart_id }}]\" value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control\"/>
                                        <span class=\"stepper-arrow stepper__plus\" v-on:click=\"updateCartItemQuantity(index, 1)\">
                                            <svg height=\"1em\" viewBox=\"0 0 320 512\"><path d=\"M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\"/></svg></span>
                                    </div>
                                </div>
                                <div>
                                    <h3 class=\"text-center td-price\">{{ product.price }}</h3>
                                    <p class=\"text-center td-total\">{{ product.total }}</p>
                                </div>
                            </div>
                                <button type=\"submit\" data-toggle=\"tooltip\" title=\"{{ button_update }}\" class=\"btn btn-update\"><i
                                            class=\"fa fa-refresh\"></i></button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-remove\"
                                        onclick=\"cart.remove('{{ product.cart_id }}');\"><i class=\"fa fa-times-circle\"></i></button>
                            </div>
                        {% endfor %}
                    </div>
                </form>
                <div>
                <div style=\"display: flex; align-items: center;\" class=\"cart-bottom\">
                    <div class=\"panels-total\">
{#                        {% for product in products %}#}
                        <h3>{{ cart_title_order }}</h3>
                        <p>{{ cart_text_ware }}{{ product.price }}</p>
                        <p style=\"color:#F45656;\">{{ cart_text_discount }}</p>
                        <p>{{ cart_the_total_cost }}</p>
{#                        {% endfor %}#}
                        {% if modules and j3.settings.get('cartPanelsStatus') %}
                            <div class=\"cart-panels\">
{#                                <h2 class=\"title\">{{ text_next }}</h2>#}
                                <p>{{ text_next_choice }}</p>
                            </div>
                        {% endif %}
                        <div class=\"cart-total\">
                            <table class=\"table table-bordered\">
                                {% for total in totals %}
                                    <tr>
                                        <td class=\"text-right\"><strong>{{ total.title }}:</strong></td>
                                        <td class=\"text-right\">{{ total.text }}</td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </div>
                        <div class=\"buttons clearfix\">
                            <div style=\"padding: 0px 0px 50px 0px;\" class=\"pull-right\"><a href=\"{{ checkout }}\"
                                                       class=\"btn btn-primary\"><span>{{ button_checkout }}</span></a></div>
                        </div>
                        <div id=\"oneclick\" >
                            <h3>{{ text_one_click_header }}</h3>
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"{{ text_one_click_placeholder }}\" id=\"input-payment-telephone\" class=\"form-control\">
                                {% for product in products %}

                                <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\">
                                <span class=\"input-group-btn\">
            {% endfor %}
                    <button type=\"submit\" id=\"button-oneclick\" class=\"btn btn-primary\">{{  text_one_click_button }}</button>
                </span>
                            </div>
                            <span class=\"help-block\">{{ text_one_click_help }}</span>
                        </div>
                    </div>

                </div>

                <div style=\"display: flex; align-items: center;\" class=\"cart-bottom\">
                    <div class=\"panel-group\" id=\"accordion\"> {% for module in modules %}
                            {{ module }}
                        {% endfor %}
                    </div>
                </div>
                </div>


            </div>
            {{ content_bottom }}</div>
        {{ column_right }}</div>
</div>
{{ footer }}
<style>
    #content {
        padding-top: 40px;
        padding-right: 0px;
        padding-bottom: 40px;
        padding-left: 0px;
    }
    html:not(.popup) .page-title {
        padding-bottom: 0;
    }
    .cart-bottom {
        background: #fff;
        padding: 20px;
        margin-left: 20px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(226,226,226,1);
    }
    .route-checkout-cart .buttons>div+div {
        padding-left: 0px;
    }
</style>

<script type=\"text/javascript\">
    \$('#button-oneclick').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/addCart',
            type: 'post',
            data: \$('#oneclick input[type=\\'text\\'], #oneclick input[type=\\'hidden\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('#button-oneclick').button('loading');
            },
            complete: function() {
                \$('#button-oneclick').button('reset');
            },
            success: function(json) {
                \$('.alert, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['telephone']) {
                        \$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['telephone'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        \$('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                    if (json['error']['product']) {
                        \$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['product'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        \$('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                    if (json['error']['order']) {
                        \$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['order'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        \$('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                }

                if (json['success']) {
                    \$('.breadcrumb').after('<div class=\"alert alert-success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    \$('html, body').animate({ scrollTop: 0 }, 'slow');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
</script>", "journal3/template/checkout/cart.twig", "");
    }
}
