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

/* journal3/template/common/language.twig */
class __TwigTemplate_d10c12be2459d3316fa1bf27fa9bb2a8ce156bd7b6a0875c8de403070326e293 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1), "get", [0 => "catalogLanguageStatus"], "method", false, false, false, 1)) {
            // line 2
            echo "  ";
            if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                // line 3
                echo "    ";
                $context["current_language"] = null;
                // line 4
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 5
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null))) {
                        // line 6
                        echo "        ";
                        $context["current_language"] = $context["language"];
                        // line 7
                        echo "      ";
                    }
                    // line 8
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "    <div id=\"language\" class=\"language\">
      <form action=\"";
                // line 10
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
        <div class=\"dropdown drop-menu\">
          <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"language-flag-title\">
            <span class=\"symbol\"><img src=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "imageToBase64", [0 => (((("catalog/language/" . twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "code", [], "any", false, false, false, 14)) . "/") . twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "code", [], "any", false, false, false, 14)) . ".png")], "method", false, false, false, 14);
                echo "\" width=\"16\" height=\"11\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "name", [], "any", false, false, false, 14);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "name", [], "any", false, false, false, 14);
                echo "\"/></span>
            <span class=\"language-title\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "name", [], "any", false, false, false, 15);
                echo "</span>
          </span>
          </button>
          <div class=\"dropdown-menu j-dropdown\">
            <ul class=\"j-menu\">
              ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 21
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "name", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 21))) {
                        // line 22
                        echo "                  <li class =\"j-menu_language_active\">
                    <a data-active='true' class=\"language-select\" data-name=\"";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 23);
                        echo "\">
                      <span class=\"language-flag\"><img src=\"";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "imageToBase64", [0 => (((("catalog/language/" . twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 24)) . "/") . twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 24)) . ".png")], "method", false, false, false, 24);
                        echo "\" width=\"16\" height=\"11\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 24);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 24);
                        echo "\"/></span>
                      <span class=\"language-title-dropdown\" style=\"color: #FFF;\">";
                        // line 25
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 25);
                        echo "</span>
                    </a>
                  </li>
                ";
                    } else {
                        // line 29
                        echo "                  <li>
                    <a class=\"language-select no-active-lang-cust\" data-name=\"";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 30);
                        echo "\">
                      <span class=\"language-flag\"><img src=\"";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "imageToBase64", [0 => (((("catalog/language/" . twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 31)) . "/") . twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 31)) . ".png")], "method", false, false, false, 31);
                        echo "\" width=\"16\" height=\"11\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 31);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 31);
                        echo "\"/></span>
                      <span class=\"language-title-dropdown\">";
                        // line 32
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 32);
                        echo "</span>
                    </a>
                  </li>
                ";
                    }
                    // line 36
                    echo "                ";
                    // line 42
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "            </ul>
          </div>
        </div>
        <input type=\"hidden\" name=\"code\" value=\"\"/>
        <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 47
                echo ($context["redirect"] ?? null);
                echo "\"/>
      </form>
    </div>
  ";
            }
        }
        // line 52
        echo "
<script>

</script>";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 52,  156 => 47,  150 => 43,  144 => 42,  142 => 36,  135 => 32,  127 => 31,  123 => 30,  120 => 29,  113 => 25,  105 => 24,  101 => 23,  98 => 22,  95 => 21,  91 => 20,  83 => 15,  75 => 14,  68 => 10,  65 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/language.twig", "");
    }
}
