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

/* default/template/checkout/simplecheckout_shipping_address.twig */
class __TwigTemplate_869c9873dc2927a4f6e7f04fef835a7e025dee3ea9ba8cf9311fc2fa3bb8f624 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_shipping_address\" ";
        echo ((($context["hide"] ?? null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo (((($context["display_error"] ?? null) && ($context["has_error"] ?? null))) ? ("data-error=\"true\"") : (""));
        echo ">
  ";
        // line 2
        if (($context["display_header"] ?? null)) {
            // line 3
            echo "    <div class=\"checkout-heading panel-heading\">";
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"simplecheckout-block-content\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hidden_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  73 => 10,  68 => 9,  59 => 7,  55 => 6,  52 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"simplecheckout-block\" id=\"simplecheckout_shipping_address\" {{ hide ? 'data-hide=\"true\"' : '' }} {{ display_error and has_error ? 'data-error=\"true\"' : '' }}>
  {% if display_header %}
    <div class=\"checkout-heading panel-heading\">{{ text_checkout_shipping_address }}</div>
  {% endif %}
  <div class=\"simplecheckout-block-content\">
    {% for row in rows %}
      {{ row }}
    {% endfor %}
    {% for row in hidden_rows %}
      {{ row }}
    {% endfor %}
  </div>
</div>", "default/template/checkout/simplecheckout_shipping_address.twig", "");
    }
}
