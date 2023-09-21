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
class __TwigTemplate_5e3b496ac7e50078a6f4fda587259e7d9db012f6f64b3a0716758eba6e53a3d1 extends \Twig\Template
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
        return new Source("{% if j3.settings.get('catalogLanguageStatus') %}
  {% if languages|length > 1 %}
    {% set current_language = null %}
    {% for language in languages %}
      {% if language.code == code %}
        {% set current_language = language %}
      {% endif %}
    {% endfor %}
    <div id=\"language\" class=\"language\">
      <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
        <div class=\"dropdown drop-menu\">
          <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"language-flag-title\">
            <span class=\"symbol\"><img src=\"{{ j3.imageToBase64('catalog/language/' ~ current_language.code ~ '/' ~ current_language.code ~ '.png') }}\" width=\"16\" height=\"11\" alt=\"{{ current_language.name }}\" title=\"{{ current_language.name }}\"/></span>
            <span class=\"language-title\">{{ current_language.name }}</span>
          </span>
          </button>
          <div class=\"dropdown-menu j-dropdown\">
            <ul class=\"j-menu\">
              {% for language in languages %}
                {% if current_language.name == language.name %}
                  <li class =\"j-menu_language_active\">
                    <a data-active='true' class=\"language-select\" data-name=\"{{ language.code }}\">
                      <span class=\"language-flag\"><img src=\"{{ j3.imageToBase64('catalog/language/' ~ language.code ~ '/' ~ language.code ~ '.png') }}\" width=\"16\" height=\"11\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\"/></span>
                      <span class=\"language-title-dropdown\" style=\"color: #FFF;\">{{ language.name }}</span>
                    </a>
                  </li>
                {% else %}
                  <li>
                    <a class=\"language-select no-active-lang-cust\" data-name=\"{{ language.code }}\">
                      <span class=\"language-flag\"><img src=\"{{ j3.imageToBase64('catalog/language/' ~ language.code ~ '/' ~ language.code ~ '.png') }}\" width=\"16\" height=\"11\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\"/></span>
                      <span class=\"language-title-dropdown\">{{ language.name }}</span>
                    </a>
                  </li>
                {% endif %}
                {# <li>
                <a class=\"language-select\" data-name=\"{{ language.code }}\">
                  <span class=\"language-flag\"><img src=\"{{ j3.imageToBase64('catalog/language/' ~ language.code ~ '/' ~ language.code ~ '.png') }}\" width=\"16\" height=\"11\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\"/></span>
                  <span class=\"language-title-dropdown\">{{ language.name }}</span>
                </a>
              </li> #}
              {% endfor %}
            </ul>
          </div>
        </div>
        <input type=\"hidden\" name=\"code\" value=\"\"/>
        <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
      </form>
    </div>
  {% endif %}
{% endif %}

<script>

</script>", "journal3/template/common/language.twig", "");
    }
}
