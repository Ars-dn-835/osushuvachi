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

/* journal3/template/journal3/headers/mobile/header_mobile_2.twig */
class __TwigTemplate_16639cf6399a239bfa0be2197361ed9427a86ee161676d46872829e2d46ee048 extends \Twig\Template
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
        echo "<div class=\"mobile-header mobile-default mobile-2\">
  <div class=\"mobile-top-bar\">
    <div class=\"mobile-top-menu-wrapper\">
      ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => "mobile_top_menu"], "method", false, false, false, 4);
        echo "
    </div>
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 6), "get", [0 => "mobileLangPosition"], "method", false, false, false, 6) == "top")) {
            // line 7
            echo "    <div class=\"language-currency top-menu\">
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 9), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 9)) ? (($context["currency"] ?? null)) : (""));
            echo "
      </div>
      <div class=\"mobile-language-wrapper\">
        ";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 12), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 12)) ? (($context["language"] ?? null)) : (""));
            echo "
      </div>
    </div>
    ";
        }
        // line 16
        echo "  </div>
  <div class=\"mobile-bar sticky-bar\">

    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "mobileCustomMenuStatus1"], "method", false, false, false, 19)) {
            // line 20
            echo "    <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "mobileCustomMenuLink1.href"], "method", false, false, false, 20);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "mobileCustomMenuLink1.attrs"], "method", false, false, false, 20)], "method", false, false, false, 20);
            echo ">
      ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "mobileCustomMenuLink1.name"], "method", false, false, false, 21), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 21), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "mobileCustomMenuLink1.total"], "method", false, false, false, 21)], "method", false, false, false, 21), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "mobileCustomMenuLink1.classes"], "method", false, false, false, 21)], "method", false, false, false, 21);
            echo "
    </a>
    ";
        }
        // line 24
        echo "    <div class=\"mobile-logo-wrapper\">
      ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 25), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 25)) {
            // line 26
            echo "        <div id=\"logo\">
          ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "logo_src"], "method", false, false, false, 27)) {
                // line 28
                echo "            <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
              <img src=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "logo_src"], "method", false, false, false, 29);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "logo2x_src"], "method", false, false, false, 29)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "logo_src"], "method", false, false, false, 29);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "logo2x_src"], "method", false, false, false, 29);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "logo_width"], "method", false, false, false, 29);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "logo_height"], "method", false, false, false, 29);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
            </a>
          ";
            } else {
                // line 32
                echo "            <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
          ";
            }
            // line 34
            echo "        </div>
      ";
        }
        // line 36
        echo "    </div>
    ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 37), "get", [0 => "mobileCustomMenuStatus2"], "method", false, false, false, 37)) {
            // line 38
            echo "    <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "mobileCustomMenuLink2.href"], "method", false, false, false, 38);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "mobileCustomMenuLink2.attrs"], "method", false, false, false, 38)], "method", false, false, false, 38);
            echo ">
      ";
            // line 39
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "mobileCustomMenuLink2.name"], "method", false, false, false, 39), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 39), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "mobileCustomMenuLink2.total"], "method", false, false, false, 39)], "method", false, false, false, 39), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "mobileCustomMenuLink2.classes"], "method", false, false, false, 39)], "method", false, false, false, 39);
            echo "
    </a>
    ";
        }
        // line 42
        echo "    <div class=\"menu-trigger\">
      <button><span>Menu</span></button>
    </div>
";
        // line 48
        echo "  </div>
  <div class=\"mobile-bar-group mobile-search-group\">
    <div class=\"mobile-search-wrapper full-search\">
      ";
        // line 51
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 51), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 51)) ? (($context["search"] ?? null)) : (""));
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/mobile/header_mobile_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 51,  158 => 48,  153 => 42,  147 => 39,  140 => 38,  138 => 37,  135 => 36,  131 => 34,  123 => 32,  101 => 29,  96 => 28,  94 => 27,  91 => 26,  89 => 25,  86 => 24,  80 => 21,  73 => 20,  71 => 19,  66 => 16,  59 => 12,  53 => 9,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mobile-header mobile-default mobile-2\">
  <div class=\"mobile-top-bar\">
    <div class=\"mobile-top-menu-wrapper\">
      {{ j3.settings.get('mobile_top_menu') }}
    </div>
    {% if j3.settings.get('mobileLangPosition') == 'top' %}
    <div class=\"language-currency top-menu\">
      <div class=\"mobile-currency-wrapper\">
        {{ j3.document.hasClass('mobile-header-active') ? currency : '' }}
      </div>
      <div class=\"mobile-language-wrapper\">
        {{ j3.document.hasClass('mobile-header-active') ? language : '' }}
      </div>
    </div>
    {% endif %}
  </div>
  <div class=\"mobile-bar sticky-bar\">

    {% if j3.settings.get('mobileCustomMenuStatus1') %}
    <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"{{ j3.settings.get('mobileCustomMenuLink1.href') }}\" {{ j3.linkAttrs(j3.settings.get('mobileCustomMenuLink1.attrs')) }}>
      {{ j3.countBadge(j3.settings.get('mobileCustomMenuLink1.name'), j3.cache.update(j3.settings.get('mobileCustomMenuLink1.total')), j3.settings.get('mobileCustomMenuLink1.classes')) }}
    </a>
    {% endif %}
    <div class=\"mobile-logo-wrapper\">
      {% if j3.document.hasClass('mobile-header-active') %}
        <div id=\"logo\">
          {% if j3.settings.get('logo_src') %}
            <a href=\"{{ home }}\">
              <img src=\"{{ j3.settings.get('logo_src') }}\" {% if j3.settings.get('logo2x_src') %}srcset=\"{{ j3.settings.get('logo_src') }} 1x, {{ j3.settings.get('logo2x_src') }} 2x\"{% endif %} width=\"{{ j3.settings.get('logo_width') }}\" height=\"{{ j3.settings.get('logo_height') }}\" alt=\"{{ name }}\" title=\"{{ name }}\"/>
            </a>
          {% else %}
            <h1><a href=\"{{ home }}\">{{ name }}</a></h1>
          {% endif %}
        </div>
      {% endif %}
    </div>
    {% if j3.settings.get('mobileCustomMenuStatus2') %}
    <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"{{ j3.settings.get('mobileCustomMenuLink2.href') }}\" {{ j3.linkAttrs(j3.settings.get('mobileCustomMenuLink2.attrs')) }}>
      {{ j3.countBadge(j3.settings.get('mobileCustomMenuLink2.name'), j3.cache.update(j3.settings.get('mobileCustomMenuLink2.total')), j3.settings.get('mobileCustomMenuLink2.classes')) }}
    </a>
    {% endif %}
    <div class=\"menu-trigger\">
      <button><span>Menu</span></button>
    </div>
{#    <div class=\"mobile-cart-wrapper mini-cart\">#}
{#      {{ j3.document.hasClass('mobile-header-active') ? cart : '' }}#}
{#    </div>#}
  </div>
  <div class=\"mobile-bar-group mobile-search-group\">
    <div class=\"mobile-search-wrapper full-search\">
      {{ j3.document.hasClass('mobile-header-active') ? search : '' }}
    </div>
  </div>
</div>
", "journal3/template/journal3/headers/mobile/header_mobile_2.twig", "/home/goodin01/webfun.com.ua/osushuvachi/catalog/view/theme/journal3/template/journal3/headers/mobile/header_mobile_2.twig");
    }
}
