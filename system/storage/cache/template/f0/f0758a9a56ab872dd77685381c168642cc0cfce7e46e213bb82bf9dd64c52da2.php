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

/* default/template/checkout/simplecheckout_cart.twig */
class __TwigTemplate_5e885bb2900ce2c09ebc2769b8b8617e6fa32af5051908cfe3e389a5087a7004 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_cart\" ";
        echo ((($context["hide"] ?? null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo ((($context["has_error"] ?? null)) ? ("data-error=\"true\"") : (""));
        echo ">
";
        // line 2
        if (($context["display_header"] ?? null)) {
            // line 3
            echo "    <div class=\"checkout-heading panel-heading\">";
            echo ($context["text_cart"] ?? null);
            echo " <span class=\"checkout-heading-button\"><a href=\"javascript:void(0)\" data-onclick=\"clearCart\" class=\"text-danger\" data-confirm-text=\"";
            echo ($context["text_clear_cart_question"] ?? null);
            echo "\">";
            echo ($context["text_clear_cart"] ?? null);
            echo "</a></span></div>
";
        }
        // line 5
        if (($context["attention"] ?? null)) {
            // line 6
            echo "    <div class=\"alert alert-danger simplecheckout-warning-block\">";
            echo ($context["attention"] ?? null);
            echo "</div>
";
        }
        // line 8
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-danger simplecheckout-warning-block\">";
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 127
        echo "<div class=\"simple__heading__title__cust\">";
        echo ($context["text_order_simcheck"] ?? null);
        echo "</div>
";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 129
            echo "    <div class=\"simplecheckout-cart-total\" id=\"total_";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["total"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null);
            echo "\">
        <span><b>";
            // line 130
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["total"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null);
            echo ":</b></span>
        <span class=\"simplecheckout-cart-total-value\">";
            // line 131
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["total"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["text"] ?? null) : null);
            echo "</span>
        <span class=\"simplecheckout-cart-total-remove\">
            ";
            // line 133
            if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["total"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null) == "coupon")) {
                // line 134
                echo "                <i data-onclick=\"removeCoupon\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"fa fa-times-circle\"></i>
            ";
            }
            // line 136
            echo "            ";
            if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["total"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["code"] ?? null) : null) == "voucher")) {
                // line 137
                echo "                <i data-onclick=\"removeVoucher\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"fa fa-times-circle\"></i>
            ";
            }
            // line 139
            echo "            ";
            if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["total"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["code"] ?? null) : null) == "reward")) {
                // line 140
                echo "                <i data-onclick=\"removeReward\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"fa fa-times-circle\"></i>
            ";
            }
            // line 142
            echo "        </span>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
    <div class=\"simplecheckout-button-block buttons\" id=\"buttons\" style=\"display: none;\">
        <div class=\"simplecheckout-button-right\">
            ";
        // line 148
        if (($context["display_agreement_checkbox"] ?? null)) {
            // line 149
            echo "                <span id=\"agreement_checkbox\">
                                ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["text_agreements"] ?? null));
            foreach ($context['_seq'] as $context["agreement_id"] => $context["text_agreement"]) {
                // line 151
                echo "                                    <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"";
                echo $context["agreement_id"];
                echo "\" ";
                echo ((twig_in_filter($context["agreement_id"], ($context["agreements"] ?? null))) ? ("checked=\"checked\"") : (""));
                echo " />";
                echo $context["text_agreement"];
                echo "</label></div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['text_agreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                            </span>
            ";
        }
        // line 155
        echo "            ";
        if ((($context["steps_count"] ?? null) > 1)) {
            // line 156
            echo "                <a class=\"button btn-primary button_oc btn\" data-onclick=\"nextStep\" id=\"simplecheckout_button_next\"><span>";
            echo ($context["button_next"] ?? null);
            echo "</span></a>
            ";
        }
        // line 158
        echo "            <a class=\"button btn-primary button_oc btn\" ";
        echo ((($context["block_order"] ?? null)) ? ("disabled") : (""));
        echo " data-onclick=\"createOrder\" id=\"simplecheckout_button_confirm\"><span>";
        echo ($context["button_order"] ?? null);
        echo "</span></a>
        </div>
        <div class=\"simplecheckout-button-left\">
            ";
        // line 161
        if (($context["display_back_button"] ?? null)) {
            // line 162
            echo "                <a class=\"button btn-primary button_oc btn\" data-onclick=\"backHistory\" id=\"simplecheckout_button_back\"><span>";
            echo ($context["button_back"] ?? null);
            echo "</span></a>
            ";
        }
        // line 164
        echo "            ";
        if ((($context["steps_count"] ?? null) > 1)) {
            // line 165
            echo "                <a class=\"button btn-primary button_oc btn\" data-onclick=\"previousStep\" id=\"simplecheckout_button_prev\"><span>";
            echo ($context["button_prev"] ?? null);
            echo "</span></a>
            ";
        }
        // line 167
        echo "        </div>
    </div>



    <div id=\"oneclick\" >
    <h3>";
        // line 173
        echo ($context["text_one_click_header"] ?? null);
        echo "</h3>
    <div class=\"input-group\">
        <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 175
        echo ($context["text_one_click_placeholder"] ?? null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\">
        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 177
            echo "        
        <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 178
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 178);
            echo "\">
        <span class=\"input-group-btn\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                    <button type=\"submit\" id=\"button-oneclick\" class=\"btn btn-primary\">";
        echo ($context["text_one_click_button"] ?? null);
        echo "</button>
                </span>
    </div>
    <span class=\"help-block\">";
        // line 184
        echo ($context["text_one_click_help"] ?? null);
        echo "</span>
</div>
";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "coupon", [], "array", true, true, false, 186)) {
            // line 187
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 188
            echo ($context["entry_coupon"] ?? null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" data-onchange=\"reloadAll\" name=\"coupon\" value=\"";
            echo ($context["coupon"] ?? null);
            echo "\" /></span>
    </div>
";
        }
        // line 191
        if ((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "reward", [], "array", true, true, false, 191) && (($context["points"] ?? null) > 0))) {
            // line 192
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 193
            echo ($context["entry_reward"] ?? null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" name=\"reward\" data-onchange=\"reloadAll\" value=\"";
            echo ($context["reward"] ?? null);
            echo "\" /></span>
    </div>
";
        }
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "voucher", [], "array", true, true, false, 196)) {
            // line 197
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 198
            echo ($context["entry_voucher"] ?? null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" name=\"voucher\" data-onchange=\"reloadAll\" value=\"";
            echo ($context["voucher"] ?? null);
            echo "\" /></span>
    </div>
";
        }
        // line 201
        if (((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "coupon", [], "array", true, true, false, 201) || (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "reward", [], "array", true, true, false, 201) && (($context["points"] ?? null) > 0))) || twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "voucher", [], "array", true, true, false, 201))) {
            // line 202
            echo "    <div class=\"simplecheckout-cart-total simplecheckout-cart-buttons\">
        <span class=\"inputs buttons\"><a id=\"simplecheckout_button_cart\" data-onclick=\"reloadAll\" class=\"button btn-primary button_oc btn\"><span>";
            // line 203
            echo ($context["button_update"] ?? null);
            echo "</span></a></span>
    </div>
";
        }
        // line 206
        echo "<input type=\"hidden\" name=\"remove\" value=\"\" id=\"simplecheckout_remove\">
<div style=\"display:none;\" id=\"simplecheckout_cart_total\">";
        // line 207
        echo ($context["cart_total"] ?? null);
        echo "</div>
";
        // line 208
        if (($context["display_weight"] ?? null)) {
            // line 209
            echo "    <div style=\"display:none;\" id=\"simplecheckout_cart_weight\">";
            echo ($context["weight"] ?? null);
            echo "</div>
";
        }
        // line 211
        if ( !($context["display_model"] ?? null)) {
            // line 212
            echo "    <style>
    .simplecheckout-cart col.model,
    .simplecheckout-cart th.model,
    .simplecheckout-cart td.model {
        display: none;
    }
    </style>
";
        }
        // line 220
        echo "</div>

<style>
    .simplecheckout-right-column .simplecheckout-block{
        padding: 40px;
    }
    .simple__heading__title__cust{
        color: #343434;
        font-family: Proxima Nova;
        font-size: 18px;
        font-style: normal;
        font-weight: 600;
    }
    #input-payment-telephone{
        border: 1px solid #EEF0F3;
    }
</style>

<script src=\"catalog/view/javascript/jquery.maskedinput.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#input-payment-telephone\").mask(\"";
        // line 241
        echo ($context["text_one_click_mask"] ?? null);
        echo "\",{placeholder:\" \"});
    });
</script>

<script type=\"text/javascript\">
    \$('#button-oneclick').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/simplecheckout_cart/add',
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
</script>


";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 241,  317 => 220,  307 => 212,  305 => 211,  299 => 209,  297 => 208,  293 => 207,  290 => 206,  284 => 203,  281 => 202,  279 => 201,  271 => 198,  268 => 197,  266 => 196,  258 => 193,  255 => 192,  253 => 191,  245 => 188,  242 => 187,  240 => 186,  235 => 184,  228 => 181,  219 => 178,  216 => 177,  212 => 176,  208 => 175,  203 => 173,  195 => 167,  189 => 165,  186 => 164,  180 => 162,  178 => 161,  169 => 158,  163 => 156,  160 => 155,  156 => 153,  143 => 151,  139 => 150,  136 => 149,  134 => 148,  129 => 145,  121 => 142,  115 => 140,  112 => 139,  106 => 137,  103 => 136,  97 => 134,  95 => 133,  90 => 131,  86 => 130,  81 => 129,  77 => 128,  72 => 127,  66 => 9,  64 => 8,  58 => 6,  56 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"simplecheckout-block\" id=\"simplecheckout_cart\" {{ hide ? 'data-hide=\"true\"' : '' }} {{ has_error ? 'data-error=\"true\"' : '' }}>
{% if display_header %}
    <div class=\"checkout-heading panel-heading\">{{ text_cart }} <span class=\"checkout-heading-button\"><a href=\"javascript:void(0)\" data-onclick=\"clearCart\" class=\"text-danger\" data-confirm-text=\"{{ text_clear_cart_question }}\">{{ text_clear_cart }}</a></span></div>
{% endif %}
{% if attention %}
    <div class=\"alert alert-danger simplecheckout-warning-block\">{{ attention }}</div>
{% endif %}
{% if error_warning %}
    <div class=\"alert alert-danger simplecheckout-warning-block\">{{ error_warning }}</div>
{% endif %}
{#    <div class=\"table-responsive\">#}
{#        <table class=\"simplecheckout-cart dd\">#}
{#            <colgroup>#}
{#                <col class=\"image\">#}
{#                <col class=\"name\">#}
{#                <col class=\"model\">#}
{#                <col class=\"quantity\">#}
{#                <col class=\"price\">#}
{#                <col class=\"total\">#}
{#                <col class=\"remove\">#}
{#            </colgroup>#}
{#            <thead>#}
{#                <tr>#}
{#                    <th class=\"image\">{{ column_image }}</th>#}
{#                    <th class=\"name\">{{ column_name }}</th>#}
{#                    <th class=\"model\">{{ column_model }}</th>#}
{#                    <th class=\"quantity\">{{ column_quantity }}</th>#}
{#                    <th class=\"price\">{{ column_price }}</th>#}
{#                    <th class=\"total\">{{ column_total }}</th>#}
{#                    <th class=\"remove\"></th>#}
{#                </tr>#}
{#            </thead>#}
{#            <tbody>#}
{#                {% for product in products %}#}
{#                    {% if product['recurring'] is not empty %}#}
{#                        <tr>#}
{#                            <td class=\"simplecheckout-recurring-product\" style=\"border:none;\"><img src=\"{{ additional_path }}catalog/view/theme/default/image/reorder.png\" alt=\"\" title=\"\" style=\"float:left;\" />#}
{#                                <span style=\"float:left;line-height:18px; margin-left:10px;\">#}
{#                                <strong>{{ text_recurring_item }}</strong>#}
{#                                {{ product['profile_description'] }}#}
{#                                </span>#}
{#                            </td>#}
{#                        </tr>#}
{#                    {% endif %}#}
{#                    <tr>#}
{#                        <td class=\"image\">#}
{#                            {% if product['thumb'] %}#}
{#                                <a href=\"{{ product['href'] }}\"><img src=\"{{ product['thumb'] }}\" alt=\"{{ product['name'] }}\" title=\"{{ product['name'] }}\" /></a>#}
{#                            {% endif %}#}
{#                        </td>#}
{#                        <td class=\"name\">#}
{#                            {% if product['thumb'] %}#}
{#                                <div class=\"image\">#}
{#                                    <a href=\"{{ product['href'] }}\"><img src=\"{{ product['thumb'] }}\" alt=\"{{ product['name'] }}\" title=\"{{ product['name'] }}\" /></a>#}
{#                                </div>#}
{#                            {% endif %}#}
{#                            <a href=\"{{ product['href'] }}\">{{ product['name'] }}</a>#}
{#                            {% if not product['stock'] and (config_stock_warning or not config_stock_checkout) %}#}
{#                                <span class=\"product-warning\">***</span>#}
{#                            {% endif %}#}
{#                            <div class=\"options\">#}
{#                            {% for option in product['option'] %}#}
{#                            &nbsp;<small> - {{ option['name'] }}: {{ option['value'] }}</small><br />#}
{#                            {% endfor %}#}
{#                            {% if product['recurring'] is not empty %}#}
{#                            - <small>{{ text_payment_profile }}: {{ product['profile_name'] }}</small>#}
{#                            {% endif %}#}
{#                            </div>#}
{#                            {% if product['reward'] %}#}
{#                            <small>{{ product['reward'] }}</small>#}
{#                            {% endif %}#}
{#                        </td>#}
{#                        <td class=\"model\">{{ product['model'] }}</td>#}
{#                        <td class=\"quantity\">#}
{#                            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">#}
{#                                <span class=\"input-group-btn\">#}
{#                                    <button class=\"btn btn-primary\" data-onclick=\"decreaseProductQuantity\" data-toggle=\"tooltip\" type=\"submit\">#}
{#                                        <i class=\"fa fa-minus\"></i>#}
{#                                    </button>#}
{#                                </span>#}
{#                                <input class=\"form-control\" type=\"text\" data-onchange=\"changeProductQuantity\" {{ quantity_step_as_minimum ? 'data-minimum=\"' ~ product['minimum'] ~ '\"' : '' }} name=\"quantity[{{ product['cart_id'] is not empty ? product['cart_id'] : product['key'] }}]\" value=\"{{ product['quantity'] }}\" size=\"1\" />#}
{#                                <span class=\"input-group-btn\">#}
{#                                    <button class=\"btn btn-primary\" data-onclick=\"increaseProductQuantity\" data-toggle=\"tooltip\" type=\"submit\">#}
{#                                        <i class=\"fa fa-plus\"></i>#}
{#                                    </button>#}
{#                                    <button class=\"btn btn-danger\" data-onclick=\"removeProduct\" data-product-key=\"{{ product['cart_id'] is not empty ? product['cart_id'] : product['key'] }}\" data-toggle=\"tooltip\" type=\"button\">#}
{#                                        <i class=\"fa fa-times-circle\"></i>#}
{#                                    </button>#}
{#                                </span>#}
{#                            </div>#}
{#                        </td>#}
{#                        <td class=\"price\">#}
{#                            {% if product['old_price'] is not empty %}#}
{#                                <div style=\"text-decoration: line-through;\">{{ product['old_price'] }}</div>#}
{#                            {% endif %}#}
{#                            <div>{{ product['price'] }}</div>#}
{#                        </td>#}
{#                        <td class=\"total\">{{ product['total'] }}</td>#}
{#                        <td class=\"remove\">#}
{#                        </td>#}
{#                    </tr>#}
{#                {% endfor %}#}
{#                {% for voucher_info in vouchers %}#}
{#                    <tr>#}
{#                        <td class=\"image\"></td>#}
{#                        <td class=\"name\">{{ voucher_info['description'] }}</td>#}
{#                        <td class=\"model\"></td>#}
{#                        <td class=\"quantity\">#}
{#                            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">#}
{#                                <input class=\"form-control\" type=\"text\" disabled value=\"1\" size=\"1\" />#}
{#                                <span class=\"input-group-btn\">#}
{#                                    <button class=\"btn btn-danger\" data-onclick=\"removeGift\" data-gift-key=\"{{ voucher_info['key'] }}\" title=\"{{ button_remove }}\" type=\"button\">#}
{#                                        <i class=\"fa fa-times-circle\"></i>#}
{#                                    </button>#}
{#                                </span>#}
{#                            </div>#}
{#                        </td>#}
{#                        <td class=\"price\">{{ voucher_info['amount'] }}</td>#}
{#                        <td class=\"total\">{{ voucher_info['amount'] }}</td>#}
{#                        <td class=\"remove\">#}
{#                        </td>#}
{#                    </tr>#}
{#                {% endfor %}#}
{#            </tbody>#}
{#        </table>#}
{#    </div>#}
<div class=\"simple__heading__title__cust\">{{ text_order_simcheck }}</div>
{% for total in totals %}
    <div class=\"simplecheckout-cart-total\" id=\"total_{{ total['code'] }}\">
        <span><b>{{ total['title'] }}:</b></span>
        <span class=\"simplecheckout-cart-total-value\">{{ total['text'] }}</span>
        <span class=\"simplecheckout-cart-total-remove\">
            {% if total['code'] == 'coupon' %}
                <i data-onclick=\"removeCoupon\" title=\"{{ button_remove }}\" class=\"fa fa-times-circle\"></i>
            {% endif %}
            {% if total['code'] == 'voucher' %}
                <i data-onclick=\"removeVoucher\" title=\"{{ button_remove }}\" class=\"fa fa-times-circle\"></i>
            {% endif %}
            {% if total['code'] == 'reward' %}
                <i data-onclick=\"removeReward\" title=\"{{ button_remove }}\" class=\"fa fa-times-circle\"></i>
            {% endif %}
        </span>
    </div>
{% endfor %}

    <div class=\"simplecheckout-button-block buttons\" id=\"buttons\" style=\"display: none;\">
        <div class=\"simplecheckout-button-right\">
            {% if display_agreement_checkbox %}
                <span id=\"agreement_checkbox\">
                                {% for agreement_id, text_agreement in text_agreements %}
                                    <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"{{ agreement_id }}\" {{ agreement_id in agreements ? 'checked=\"checked\"' : '' }} />{{ text_agreement }}</label></div>
                                {% endfor %}
                            </span>
            {% endif %}
            {% if steps_count > 1 %}
                <a class=\"button btn-primary button_oc btn\" data-onclick=\"nextStep\" id=\"simplecheckout_button_next\"><span>{{ button_next }}</span></a>
            {% endif %}
            <a class=\"button btn-primary button_oc btn\" {{ block_order ? 'disabled' : ''}} data-onclick=\"createOrder\" id=\"simplecheckout_button_confirm\"><span>{{ button_order }}</span></a>
        </div>
        <div class=\"simplecheckout-button-left\">
            {% if display_back_button %}
                <a class=\"button btn-primary button_oc btn\" data-onclick=\"backHistory\" id=\"simplecheckout_button_back\"><span>{{ button_back }}</span></a>
            {% endif %}
            {% if steps_count > 1 %}
                <a class=\"button btn-primary button_oc btn\" data-onclick=\"previousStep\" id=\"simplecheckout_button_prev\"><span>{{ button_prev }}</span></a>
            {% endif %}
        </div>
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
{% if modules['coupon'] is defined %}
    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">{{ entry_coupon }}&nbsp;<input class=\"form-control\" type=\"text\" data-onchange=\"reloadAll\" name=\"coupon\" value=\"{{ coupon }}\" /></span>
    </div>
{% endif %}
{% if modules['reward'] is defined and points > 0 %}
    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">{{ entry_reward }}&nbsp;<input class=\"form-control\" type=\"text\" name=\"reward\" data-onchange=\"reloadAll\" value=\"{{ reward }}\" /></span>
    </div>
{% endif %}
{% if modules['voucher'] is defined %}
    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">{{ entry_voucher }}&nbsp;<input class=\"form-control\" type=\"text\" name=\"voucher\" data-onchange=\"reloadAll\" value=\"{{ voucher }}\" /></span>
    </div>
{% endif %}
{% if modules['coupon'] is defined or (modules['reward'] is defined and points > 0) or modules['voucher'] is defined %}
    <div class=\"simplecheckout-cart-total simplecheckout-cart-buttons\">
        <span class=\"inputs buttons\"><a id=\"simplecheckout_button_cart\" data-onclick=\"reloadAll\" class=\"button btn-primary button_oc btn\"><span>{{ button_update }}</span></a></span>
    </div>
{% endif %}
<input type=\"hidden\" name=\"remove\" value=\"\" id=\"simplecheckout_remove\">
<div style=\"display:none;\" id=\"simplecheckout_cart_total\">{{ cart_total }}</div>
{% if display_weight %}
    <div style=\"display:none;\" id=\"simplecheckout_cart_weight\">{{ weight }}</div>
{% endif %}
{% if not display_model %}
    <style>
    .simplecheckout-cart col.model,
    .simplecheckout-cart th.model,
    .simplecheckout-cart td.model {
        display: none;
    }
    </style>
{% endif %}
</div>

<style>
    .simplecheckout-right-column .simplecheckout-block{
        padding: 40px;
    }
    .simple__heading__title__cust{
        color: #343434;
        font-family: Proxima Nova;
        font-size: 18px;
        font-style: normal;
        font-weight: 600;
    }
    #input-payment-telephone{
        border: 1px solid #EEF0F3;
    }
</style>

<script src=\"catalog/view/javascript/jquery.maskedinput.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#input-payment-telephone\").mask(\"{{ text_one_click_mask }}\",{placeholder:\" \"});
    });
</script>

<script type=\"text/javascript\">
    \$('#button-oneclick').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/simplecheckout_cart/add',
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
</script>


", "default/template/checkout/simplecheckout_cart.twig", "");
    }
}