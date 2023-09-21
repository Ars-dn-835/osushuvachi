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

/* journal3/template/journal3/layout.twig */
class __TwigTemplate_7e49253a69526846ed6310c434d7e38795ec26ef7f2bf0dd26fa48cdfdc1b4b5 extends \Twig\Template
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
        if (($context["rows"] ?? null)) {
            // line 2
            echo "  <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["grid_classes"] ?? null)], "method", false, false, false, 2);
            echo "\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["grid_row"]) {
                // line 4
                echo "      <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["grid_row"], "classes", [], "any", false, false, false, 4)], "method", false, false, false, 4);
                echo "\">
        ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["grid_row"], "waveStatus", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "          <svg viewBox=\"0 0 100 20\" class=\"wave wave-top\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25 ";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["grid_row"], "waveDirection", [], "any", false, false, false, 7);
                    echo " 55 10 T 100 10 V 30 Z\"></path>
          </svg>
        ";
                }
                // line 10
                echo "        <div class=\"grid-cols\">
          ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["grid_row"], "columns", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["grid_column"]) {
                    // line 12
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["grid_column"], "classes", [], "any", false, false, false, 12)], "method", false, false, false, 12);
                    echo "\">
              <div class=\"grid-items\">
                ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["grid_column"], "items", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["grid_item"]) {
                        // line 15
                        echo "                  <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["grid_item"], "classes", [], "any", false, false, false, 15)], "method", false, false, false, 15);
                        echo "\">
                    ";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["grid_item"], "item", [], "any", false, false, false, 16);
                        echo "
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "              </div>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        </div>
        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["grid_row"], "wave2Status", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "          <svg viewBox=\"0 0 100 20\" class=\"wave wave-bottom\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25 ";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["grid_row"], "wave2Direction", [], "any", false, false, false, 25);
                    echo " 55 10 T 100 10 V 30 Z\"></path>
          </svg>
        ";
                }
                // line 28
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["grid_row"], "videoBgStatus", [], "any", false, false, false, 28) && twig_get_attribute($this->env, $this->source, $context["grid_row"], "videoBg", [], "any", false, false, false, 28))) {
                    // line 29
                    echo "          <div class=\"video-row\">
            <video autoplay loop muted playsinline data-src=\"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["grid_row"], "videoBg", [], "any", false, false, false, 30);
                    echo "\" class=\"video-bg lazyload\"></video>
          </div>
        ";
                }
                // line 33
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  129 => 33,  123 => 30,  120 => 29,  117 => 28,  111 => 25,  108 => 24,  106 => 23,  103 => 22,  95 => 19,  86 => 16,  81 => 15,  77 => 14,  71 => 12,  67 => 11,  64 => 10,  58 => 7,  55 => 6,  53 => 5,  48 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if rows %}
  <div class=\"{{ j3.classes(grid_classes) }}\">
    {% for grid_row in rows %}
      <div class=\"{{ j3.classes(grid_row.classes) }}\">
        {% if grid_row.waveStatus %}
          <svg viewBox=\"0 0 100 20\" class=\"wave wave-top\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25 {{ grid_row.waveDirection }} 55 10 T 100 10 V 30 Z\"></path>
          </svg>
        {% endif %}
        <div class=\"grid-cols\">
          {% for grid_column in grid_row.columns %}
            <div class=\"{{ j3.classes(grid_column.classes) }}\">
              <div class=\"grid-items\">
                {% for grid_item in grid_column.items %}
                  <div class=\"{{ j3.classes(grid_item.classes) }}\">
                    {{ grid_item.item }}
                  </div>
                {% endfor %}
              </div>
            </div>
          {% endfor %}
        </div>
        {% if grid_row.wave2Status %}
          <svg viewBox=\"0 0 100 20\" class=\"wave wave-bottom\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25 {{ grid_row.wave2Direction }} 55 10 T 100 10 V 30 Z\"></path>
          </svg>
        {% endif %}
        {% if grid_row.videoBgStatus and grid_row.videoBg %}
          <div class=\"video-row\">
            <video autoplay loop muted playsinline data-src=\"{{ grid_row.videoBg }}\" class=\"video-bg lazyload\"></video>
          </div>
        {% endif %}
      </div>
    {% endfor %}
  </div>
{% endif %}
", "journal3/template/journal3/layout.twig", "");
    }
}
