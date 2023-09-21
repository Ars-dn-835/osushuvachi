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
class __TwigTemplate_e1daed9084b02aab0480149ed24b5b06054698f091f87b901a01d6db37c9d2c0 extends \Twig\Template
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
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_2.twig", "/home/goodin01/webfun.com.ua/osushuvachi/catalog/view/theme/journal3/template/journal3/headers/mobile/header_mobile_2.twig");
    }
}
