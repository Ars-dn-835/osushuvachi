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

/* journal3/template/journal3/headers/desktop/mega.twig */
class __TwigTemplate_ae9f8f73aadbc50c32f9e8bb865a24afdcab8e703497909220f004d02bd4993e extends \Twig\Template
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
        echo "<div class=\"header header-mega header-lg\">
  <div class=\"top-bar navbar-nav\">
    ";
        // line 3
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => "desktop_top_menu"], "method", false, false, false, 3);
        echo "
";
        // line 14
        echo "    <div class=\"third-menu\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => "desktop_top_menu_3"], "method", false, false, false, 14);
        echo "</div>
    ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 15) == "top")) {
            // line 16
            echo "      <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 16), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 16);
            echo "</div>
    ";
        }
        // line 18
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "langPosition"], "method", false, false, false, 18) == "top")) {
            // line 19
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">




          <div id=\"language\" class=\"language\">
            <form>
              <div class=\"dropdown drop-menu\">
                <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"language-flag-title\">
          <span class=\"language-title\"></span>
        </span>
                </button>
                <div class=\"dropdown-menu j-dropdown\">
                  <ul class=\"j-menu j-menu_mob\">
                    <li>
                      <a data-active=\"true\" class=\"language-select\" href=\"";
            // line 36
            echo ($context["base"] ?? null);
            echo "ru/\">
                        <span class=\"language-title-dropdown\">Російська</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"language-select no-active-lang-cust\" href=\"";
            // line 41
            echo ($context["base"] ?? null);
            echo "\">
                        <span class=\"language-title-dropdown\">Українська</span>
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
            </form>
          </div>














";
            // line 66
            echo "        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 68
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 72
        echo "  </div>
  <div class=\"mid-bar navbar-nav\">
    <div class=\"desktop-logo-wrapper\">
      <div id=\"logo\">
        ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "logo_src"], "method", false, false, false, 76)) {
            // line 77
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
            <img src=\"";
            // line 78
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "logo_src"], "method", false, false, false, 78);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "logo2x_src"], "method", false, false, false, 78)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "logo_src"], "method", false, false, false, 78);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "logo2x_src"], "method", false, false, false, 78);
                echo " 2x\"";
            }
            echo " width=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "logo_width"], "method", false, false, false, 78);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "logo_height"], "method", false, false, false, 78);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
          </a>
        ";
        } else {
            // line 81
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 83
        echo "      </div>
    </div>
    <div class=\"desktop-main-menu-wrapper menu-";
        // line 85
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 85), "get", [0 => "headerMenuLayout"], "method", false, false, false, 85);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 85), "get", [0 => "desktop_main_menu_2"], "method", false, false, false, 85)) {
            echo "has-menu-2";
        }
        echo " navbar-nav\">
      ";
        // line 86
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 86), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 86)) ? ("") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 86), "get", [0 => "desktop_main_menu"], "method", false, false, false, 86)));
        echo "
      <div class=\"desktop-search-wrapper full-search default-search-wrapper\">
        ";
        // line 88
        echo ($context["search"] ?? null);
        echo "
      </div>
      ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 90), "get", [0 => "headerMainMenu2Position"], "method", false, false, false, 90) == "menu")) {
            // line 91
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 91), "get", [0 => "desktop_main_menu_2"], "method", false, false, false, 91);
            echo "
      ";
        }
        // line 93
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 93), "get", [0 => "cartPosition"], "method", false, false, false, 93) == "menu")) {
            // line 94
            echo "        <div class=\"desktop-cart-wrapper default-cart-wrapper\">
          ";
            // line 95
            echo ($context["cart"] ?? null);
            echo "
        </div>
      ";
        }
        // line 98
        echo "    </div>
    ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 99), "get", [0 => "headerMainMenu2Position"], "method", false, false, false, 99) == "top")) {
            // line 100
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 100), "get", [0 => "desktop_main_menu_2"], "method", false, false, false, 100);
            echo "
    ";
        }
        // line 102
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 102) == "cart")) {
            // line 103
            echo "      <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 103), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 103);
            echo "</div>
    ";
        }
        // line 105
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 105), "get", [0 => "langPosition"], "method", false, false, false, 105) == "search")) {
            // line 106
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 108
            echo ($context["language"] ?? null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 111
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 115
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 115), "get", [0 => "cartPosition"], "method", false, false, false, 115) == "top")) {
            // line 116
            echo "      <div class=\"desktop-cart-wrapper default-cart-wrapper\">
        ";
            // line 117
            echo ($context["cart"] ?? null);
            echo "
      </div>
    ";
        }
        // line 120
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/mega.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 120,  257 => 117,  254 => 116,  251 => 115,  244 => 111,  238 => 108,  234 => 106,  231 => 105,  225 => 103,  222 => 102,  216 => 100,  214 => 99,  211 => 98,  205 => 95,  202 => 94,  199 => 93,  193 => 91,  191 => 90,  186 => 88,  181 => 86,  173 => 85,  169 => 83,  161 => 81,  139 => 78,  134 => 77,  132 => 76,  126 => 72,  119 => 68,  115 => 66,  88 => 41,  80 => 36,  61 => 19,  58 => 18,  52 => 16,  50 => 15,  45 => 14,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/mega.twig", "/home/goodin01/webfun.com.ua/osushuvachi/catalog/view/theme/journal3/template/journal3/headers/desktop/mega.twig");
    }
}
