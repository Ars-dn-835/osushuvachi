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

/* journal3/template/common/header.twig */
class __TwigTemplate_8e311f5ec8fe1e1581d68b2b842c90486e1977d33a934e4b0e62ed1be32cb5fe extends \Twig\Template
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
        if ( !(isset($context["j3"]) || array_key_exists("j3", $context))) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 12
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 12), "getClasses", [], "method", false, false, false, 12), " ");
        echo "\" data-jb=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "JOURNAL3_BUILD"], "method", false, false, false, 12);
        echo "\" data-jv=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "JOURNAL3_VERSION"], "method", false, false, false, 12);
        echo "\" data-ov=\"";
        echo twig_constant("VERSION");
        echo "\">
<head typeof=\"og:website\">
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 17
        echo ($context["title"] ?? null);
        echo "</title>
<link href=\"stylesheet/custom_fonts.css\" rel=\"stylesheet\" type=\"text/css\">
<base href=\"";
        // line 19
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 20), "hasFonts", [], "method", false, false, false, 20)) {
            // line 21
            echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\" crossorigin>
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
";
        }
        // line 24
        if (($context["description"] ?? null)) {
            // line 25
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 27
        if (($context["keywords"] ?? null)) {
            // line 28
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 30), "isPopup", [], "method", false, false, false, 30)) {
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/meta_tags"], "method", false, false, false, 31));
            foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
                // line 32
                echo "<meta ";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 32);
                echo "=\"";
                echo $context["key"];
                echo "\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "content", [], "any", false, false, false, 32);
                echo "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "SENTRY_JS_DSN"], "method", false, false, false, 35)) {
            // line 36
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "SENTRY_JS_DSN"], "method", false, false, false, 36);
            echo "
";
        }
        // line 38
        echo "<script>window['Journal'] = ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 38), "getJs", [], "method", false, false, false, 38));
        echo ";</script>
";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 39), "isPopup", [], "method", false, false, false, 39)) {
            // line 40
            echo "<script>";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/mql"], "method", false, false, false, 40);
            echo "</script>
";
        }
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 42), "hasFonts", [], "method", false, false, false, 42)) {
            // line 43
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "performanceAsyncFontsStatus"], "method", false, false, false, 43)) {
                // line 44
                echo "<script>WebFontConfig = { google: { families: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 44), "getFonts", [0 => true], "method", false, false, false, 44);
                echo " } };</script>
";
            } else {
                // line 46
                echo "<link href=\"https://fonts.googleapis.com/css?family=";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 46), "getFonts", [0 => false], "method", false, false, false, 46);
                echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
            }
        }
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 49), "getStyles", [0 => ($context["styles"] ?? null)], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 50)) {
                // line 51
                echo "<style>";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 51);
                echo "</style>
";
            } else {
                // line 53
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 53), "staticUrl", [0 => twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 53), 1 => false], "method", false, false, false, 53);
                echo "\" type=\"text/css\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 53);
                echo "\" media=\"all\" />
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 57
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 57);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 57);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 60
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "<style>
";
        // line 63
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 63), "getCss", [], "method", false, false, false, 63);
        echo "
</style>
";
        // line 65
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 65), "get", [0 => "customCSS"], "method", false, false, false, 65)) {
            // line 66
            echo "<style>";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 66), "get", [0 => "customCSS"], "method", false, false, false, 66);
            echo "</style>
";
        }
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 68), "getScripts", [0 => "header", 1 => ($context["scripts"] ?? null)], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 69
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 69), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 69);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "get", [0 => "performanceJSDefer"], "method", false, false, false, 69)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "customCodeHeader"], "method", false, false, false, 71)) {
            // line 72
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 72), "get", [0 => "customCodeHeader"], "method", false, false, false, 72);
            echo "
";
        }
        // line 74
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/journal3/stylesheet/styleone.css\" >
  <link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/journal3/stylesheet/stylesecond.css\" >
</head>
<body class=\"";
        // line 77
        echo ($context["class"] ?? null);
        echo "\">

";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "get", [0 => "oldBrowserStatus"], "method", false, false, false, 79)) {
            // line 80
            echo "<div class=\"old-browser\">
  <div class=\"ob-content\">
    <h2 class=\"ob-title\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 82), "get", [0 => "oldBrowserTitle"], "method", false, false, false, 82);
            echo "</h2>
    <span class=\"ob-text\">";
            // line 83
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 83), "get", [0 => "oldBrowserText"], "method", false, false, false, 83);
            echo "</span>
    <div class=\"ob-links\">
      <a href=\"https://www.google.com/chrome/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 86
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 86), "get", [0 => "oldBrowserChrome"], "method", false, false, false, 86);
            echo "\" alt=\"Chrome\" />
        <span class=\"ob-name\">Chrome</span>
      </a>
      <a href=\"https://www.mozilla.org/firefox/new/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 90
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 90), "get", [0 => "oldBrowserFirefox"], "method", false, false, false, 90);
            echo "\" alt=\"Firefox\" />
        <span class=\"ob-name\">Firefox</span>
      </a>
      <a href=\"https://www.microsoft.com/en-us/windows/microsoft-edge\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 94
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 94), "get", [0 => "oldBrowserEdge"], "method", false, false, false, 94);
            echo "\" alt=\"edge\" />
        <span class=\"ob-name\">Microsoft Edge</span>
      </a>
      <a href=\"https://www.opera.com/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 98
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 98), "get", [0 => "oldBrowserOpera"], "method", false, false, false, 98);
            echo "\" alt=\"opera\" />
        <span class=\"ob-name\">Opera</span>
      </a>
      <a href=\"https://www.apple.com/lae/safari/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 102
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "oldBrowserSafari"], "method", false, false, false, 102);
            echo "\" alt=\"safari\" />
        <span class=\"ob-name\">Safari on Mac</span>
      </a>
    </div>
  </div>
</div>
";
        }
        // line 109
        echo "
";
        // line 110
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 110), "isPopup", [], "method", false, false, false, 110)) {
            // line 111
            echo "<div class=\"mobile-container mobile-main-menu-container\">
  <div class=\"mobile-wrapper-header\">
";
            // line 114
            echo "    <div id=\"logo\">
      ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 115), "get", [0 => "logo_src"], "method", false, false, false, 115)) {
                // line 116
                echo "        <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
          <img src=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "logo_src"], "method", false, false, false, 117);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "logo2x_src"], "method", false, false, false, 117)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "logo_src"], "method", false, false, false, 117);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "logo2x_src"], "method", false, false, false, 117);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "logo_width"], "method", false, false, false, 117);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "logo_height"], "method", false, false, false, 117);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
        </a>
      ";
            } else {
                // line 120
                echo "        <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
      ";
            }
            // line 122
            echo "    </div>
    ";
            // line 123
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 123), "get", [0 => "mobileLangPosition"], "method", false, false, false, 123) == "menu")) {
                // line 124
                echo "      <div class=\"language-currency top-menu\">
        <div class=\"mobile-currency-wrapper\">
            ";
                // line 126
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 126), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 126)) ? (($context["currency"] ?? null)) : (""));
                echo "
        </div>
        <div class=\"mobile-language-wrapper\">
            ";
                // line 129
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 129), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 129)) ? (($context["language"] ?? null)) : (""));
                echo "
        </div>
      </div>
    ";
            }
            // line 133
            echo "    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-main-menu-wrapper\">
    <div class=\"contact-info-cust\">
      <div class=\"social-icons-cust\">
        <div class=\"social-icons-left-cust\">
          <div class=\"icons-items-cust\"><a href=\"#\"><img src=\"";
            // line 139
            echo ($context["base"] ?? null);
            echo "image/catalog/icons/facebook.svg\" alt=\"Facebook\"></a></div>
          <div class=\"icons-items-cust\"><a href=\"#\"><img src=\"";
            // line 140
            echo ($context["base"] ?? null);
            echo "image/catalog/icons/telegram.svg\" alt=\"Telegram\"></a></div>
          <div class=\"icons-items-cust\"><a href=\"#\"><img src=\"";
            // line 141
            echo ($context["base"] ?? null);
            echo "image/catalog/icons/instagram.svg\" alt=\"Instagram\"></a></div>
          <div class=\"icons-items-cust\"><a href=\"#\"><img src=\"";
            // line 142
            echo ($context["base"] ?? null);
            echo "image/catalog/icons/youtube.svg\" alt=\"YouTube\"></a></div>
        </div>
        <div class=\"social-icons-right-cust\">
          <a href=\"#\"><img class=\"telephone-mobile-cust\" src=\"";
            // line 145
            echo ($context["base"] ?? null);
            echo "image/catalog/icons/telephone.svg\" alt=Telephone><span class=\"number-text-cust\">0 800 000 000</span></a>
        </div>
      </div>
    </div>
    <div class=\"mobile-language-wrapper\">

      <div id=\"language\" class=\"language\">
        <form>
          <div class=\"dropdown drop-menu\">
            <div class=\"dropdown-menu j-dropdown\">
              <ul class=\"j-menu j-menu_mob\">
                <li>
                  <a data-active=\"true\" class=\"language-select\" href=\"";
            // line 157
            echo ($context["base"] ?? null);
            echo "ru/\">
                    <span class=\"language-title-dropdown\">Російська</span>
                  </a>
                </li>
                <li>
                  <a class=\"language-select no-active-lang-cust\" href=\"";
            // line 162
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
            // line 173
            echo "    </div>
    ";
            // line 174
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 174), "isPhone", [], "method", false, false, false, 174) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 174), "isTablet", [], "method", false, false, false, 174) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 174), "get", [0 => "mobileHeaderOn"], "method", false, false, false, 174) == "tablet")))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 174), "get", [0 => "mobile_main_menu"], "method", false, false, false, 174)) : (""));
            echo "
  </div>
</div>

<div class=\"mobile-container mobile-filter-container\">
  <div class=\"mobile-wrapper-header\"></div>
  <div class=\"mobile-filter-wrapper\"></div>
</div>

<div class=\"mobile-container mobile-cart-content-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 185
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 185), "get", [0 => "headerMobileCartTitle"], "method", false, false, false, 185);
            echo "</span>
    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-cart-content-wrapper cart-content\"></div>
</div>
";
        }
        // line 191
        echo "
";
        // line 192
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "popup"], "method", false, false, false, 192);
        echo "

<div class=\"site-wrapper\">

  ";
        // line 196
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "header_notice"], "method", false, false, false, 196);
        echo "

  ";
        // line 198
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 198), "isPopup", [], "method", false, false, false, 198)) {
            // line 199
            echo "  <header class=\"header-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => "headerType"], "method", false, false, false, 199);
            echo "\">
    ";
            // line 200
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 200), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 200) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 200), "get", [0 => "headerType"], "method", false, false, false, 200))) {
                // line 201
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/desktop/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 201), "get", [0 => "headerType"], "method", false, false, false, 201)) . ".twig"), "journal3/template/common/header.twig", 201)->display($context);
                // line 202
                echo "    ";
            }
            // line 203
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 203), "get", [0 => "mobileHeaderType"], "method", false, false, false, 203)) {
                // line 204
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/mobile/header_mobile_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 204), "get", [0 => "mobileHeaderType"], "method", false, false, false, 204)) . ".twig"), "journal3/template/common/header.twig", 204)->display($context);
                // line 205
                echo "    ";
            }
            // line 206
            echo "  </header>
  ";
        }
        // line 208
        echo "
  <script>
      document.addEventListener(\"DOMContentLoaded\", function() {
      var currentURL = window.location.href;
      var languageTitle = document.querySelector(\".language-title\");
      if (currentURL.includes(\"ru/\")) {
      languageTitle.textContent = \"Російська\";
    } else {
      languageTitle.textContent = \"Українська\";
    }
    });
      document.addEventListener(\"DOMContentLoaded\", function() {
      var currentURL = window.location.href.replace(/^https:\\/\\//, \"\");
      currentURL = currentURL.replace(/\\/{2,}/g, \"/\");
      if (!currentURL.endsWith(\"/\")) {
      currentURL += \"/\";
    }
      var languageTitle = document.querySelector(\".language-title\");
      if (currentURL.includes(\"/ru/\")) {
      languageTitle.textContent = \"Російська\";
    } else {
      // В іншому випадку, встановити текст \"Українська\"
      languageTitle.textContent = \"Українська\";
    }
    });
      document.addEventListener(\"DOMContentLoaded\", function() {
        var currentURL = window.location.href.replace(/^https:\\/\\//, \"\");
        currentURL = currentURL.replace(/\\/{2,}/g, \"/\");
        if (!currentURL.endsWith(\"/\")) {
          currentURL += \"/\";
        }
        var menuItems = document.querySelectorAll(\".j-menu_mob li\");
        var hasRuLanguage = currentURL.includes(\"/ru/\");
        if (hasRuLanguage) {
          menuItems[0].classList.add(\"j-menu_language_active\");
          menuItems[1].classList.remove(\"j-menu_language_active\");
        } else {
          menuItems[1].classList.add(\"j-menu_language_active\");
          menuItems[0].classList.remove(\"j-menu_language_active\");
        }
      });

      // document.addEventListener(\"DOMContentLoaded\", function() {
      //   var currentURL = window.location.href.replace(/^https:\\/\\//, \"\");
      //   currentURL = currentURL.replace(/\\/{2,}/g, \"/\");
      //   if (!currentURL.endsWith(\"/\")) {
      //     currentURL += \"/\";
      //   }
      //   window.history.replaceState({}, \"\", \"https://\" + currentURL);
      // });

  </script>

  ";
        // line 261
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "fullscreen_slider"], "method", false, false, false, 261);
        echo "
<style>
  .contact-info-cust{
    background-color: #FFF;
    margin-top:30px;
  }
  .social-icons-cust{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 65px;
    margin-left: 35px;
    margin-right: 35px;
  }

  .mobile-language-wrapper{
    display: flex;
    justify-content: center;
  }

.social-icons-left-cust{
  display: flex;
  width: 40%;
  justify-content: space-between;
}

.social-icons-right-cust{
  display: flex;
  width: 48%;
  align-items: center;
}
  .telephone-mobile-cust{
    margin-right: 8px;
  }
  .number-text-cust{
    color:#343434;
    font-family: Proxima Nova;
    font-size: 18px;
    font-style: normal;
    font-weight: 600;
    text-decoration: none;
  }

  .mobile-main-menu-wrapper .item-assets img {
    width: 30%;
  }
  .j-menu_language_active .language-select {
    background-color: #3591D0 !important;
    border-radius: 3px !important;
  }
</style>

  <script>
    const megaFullWidthItem = document.querySelector('.mega-fullwidth');
    const menuItems = document.querySelectorAll('.multi-level');
    const textCatalog = document.querySelectorAll('.links-text');
    const contactInfo = document.querySelectorAll('.contact-info-cust');

    let isHidden = false; // Змінна для відстеження стану

    megaFullWidthItem.addEventListener('click', () => {
      if (isHidden) {
        menuItems.forEach(menuItem => {
          menuItem.style.display = 'block'; // Показуємо елементи
          textCatalog.forEach(textItem => {
            textItem.style.color = ''; // Змінюємо колір тексту
          });
        });
        isHidden = false;
      } else {
        menuItems.forEach(menuItem => {
          if (menuItem !== megaFullWidthItem) {
            menuItem.style.display = 'none';
          }
          textCatalog.forEach(textItem => {
            textItem.style.color = '#3591D0'; // Змінюємо колір тексту
          });
          contactInfo.forEach(textItem => {
            textItem.style.display = 'none';
          });
        });
        isHidden = true;
      }
    });
  </script>";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 261,  517 => 208,  513 => 206,  510 => 205,  507 => 204,  504 => 203,  501 => 202,  498 => 201,  496 => 200,  491 => 199,  489 => 198,  484 => 196,  477 => 192,  474 => 191,  465 => 185,  451 => 174,  448 => 173,  435 => 162,  427 => 157,  412 => 145,  406 => 142,  402 => 141,  398 => 140,  394 => 139,  386 => 133,  379 => 129,  373 => 126,  369 => 124,  367 => 123,  364 => 122,  356 => 120,  334 => 117,  329 => 116,  327 => 115,  324 => 114,  320 => 111,  318 => 110,  315 => 109,  305 => 102,  298 => 98,  291 => 94,  284 => 90,  277 => 86,  271 => 83,  267 => 82,  263 => 80,  261 => 79,  256 => 77,  251 => 74,  246 => 72,  244 => 71,  231 => 69,  227 => 68,  221 => 66,  219 => 65,  214 => 63,  211 => 62,  203 => 60,  199 => 59,  188 => 57,  184 => 56,  172 => 53,  166 => 51,  164 => 50,  160 => 49,  153 => 46,  147 => 44,  145 => 43,  143 => 42,  137 => 40,  135 => 39,  130 => 38,  125 => 36,  123 => 35,  109 => 32,  105 => 31,  103 => 30,  97 => 28,  95 => 27,  89 => 25,  87 => 24,  82 => 21,  80 => 20,  76 => 19,  71 => 17,  53 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/header.twig", "");
    }
}
