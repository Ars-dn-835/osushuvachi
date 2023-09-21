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
class __TwigTemplate_9db798340a122de70ff3efa8b474510ceb1039c7393041986531c3b9393dbfcb extends \Twig\Template
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
        echo "
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
        if (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "coupon", [], "array", true, true, false, 145)) {
            // line 146
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 147
            echo ($context["entry_coupon"] ?? null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" data-onchange=\"reloadAll\" name=\"coupon\" value=\"";
            echo ($context["coupon"] ?? null);
            echo "\" /></span>
    </div>
";
        }
        // line 150
        if ((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "reward", [], "array", true, true, false, 150) && (($context["points"] ?? null) > 0))) {
            // line 151
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 152
            echo ($context["entry_reward"] ?? null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" name=\"reward\" data-onchange=\"reloadAll\" value=\"";
            echo ($context["reward"] ?? null);
            echo "\" /></span>
    </div>
";
        }
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "voucher", [], "array", true, true, false, 155)) {
            // line 156
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 157
            echo ($context["entry_voucher"] ?? null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" name=\"voucher\" data-onchange=\"reloadAll\" value=\"";
            echo ($context["voucher"] ?? null);
            echo "\" /></span>
    </div>
";
        }
        // line 160
        if (((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "coupon", [], "array", true, true, false, 160) || (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "reward", [], "array", true, true, false, 160) && (($context["points"] ?? null) > 0))) || twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "voucher", [], "array", true, true, false, 160))) {
            // line 161
            echo "    <div class=\"simplecheckout-cart-total simplecheckout-cart-buttons\">
        <span class=\"inputs buttons\"><a id=\"simplecheckout_button_cart\" data-onclick=\"reloadAll\" class=\"button btn-primary button_oc btn\"><span>";
            // line 162
            echo ($context["button_update"] ?? null);
            echo "</span></a></span>
    </div>
";
        }
        // line 165
        echo "<input type=\"hidden\" name=\"remove\" value=\"\" id=\"simplecheckout_remove\">
<div style=\"display:none;\" id=\"simplecheckout_cart_total\">";
        // line 166
        echo ($context["cart_total"] ?? null);
        echo "</div>
";
        // line 167
        if (($context["display_weight"] ?? null)) {
            // line 168
            echo "    <div style=\"display:none;\" id=\"simplecheckout_cart_weight\">";
            echo ($context["weight"] ?? null);
            echo "</div>
";
        }
        // line 170
        if ( !($context["display_model"] ?? null)) {
            // line 171
            echo "    <style>
    .simplecheckout-cart col.model,
    .simplecheckout-cart th.model,
    .simplecheckout-cart td.model {
        display: none;
    }
    </style>
";
        }
        // line 179
        echo "</div>
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
        return array (  204 => 179,  194 => 171,  192 => 170,  186 => 168,  184 => 167,  180 => 166,  177 => 165,  171 => 162,  168 => 161,  166 => 160,  158 => 157,  155 => 156,  153 => 155,  145 => 152,  142 => 151,  140 => 150,  132 => 147,  129 => 146,  127 => 145,  119 => 142,  113 => 140,  110 => 139,  104 => 137,  101 => 136,  95 => 134,  93 => 133,  88 => 131,  84 => 130,  79 => 129,  75 => 128,  72 => 127,  66 => 9,  64 => 8,  58 => 6,  56 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/simplecheckout_cart.twig", "");
    }
}
