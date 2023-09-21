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

/* journal3/template/journal3/module/catalog.twig */
class __TwigTemplate_cbbbf6cb2ca5f0692fc3f5da5e7b7b498662ae3992ae10ef30b1e483c5cdb0d0 extends \Twig\Template
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
        // line 34
        $macros["self"] = $this->macros["self"] = $this;
        // line 35
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 35);
        echo "\">
  ";
        // line 36
        if (($context["title"] ?? null)) {
            // line 37
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 39
        echo "  <div class=\"module-body\">
    ";
        // line 40
        if (($context["carousel"] ?? null)) {
            // line 41
            echo "      <div class=\"swiper\" data-items-per-row='";
            echo json_encode(($context["itemsPerRow"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo json_encode(($context["carouselOptions"] ?? null));
            echo "'>
        <div class=\"swiper-container\" ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 42)) {
                echo "dir=\"rtl\"";
            }
            echo ">
          <div class=\"swiper-wrapper\">
            ";
            // line 44
            echo twig_call_macro($macros["self"], "macro_renderCatalog", [($context["j3"] ?? null), $context], 44, $context, $this->getSourceContext());
            echo "
          </div>
        </div>
        <div class=\"swiper-buttons\">
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    ";
        } else {
            // line 54
            echo "      ";
            echo twig_call_macro($macros["self"], "macro_renderCatalog", [($context["j3"] ?? null), $context], 54, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 56
        echo "  </div>
</div>

";
    }

    // line 1
    public function macro_renderCatalog($__j3__ = null, $__context__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "j3" => $__j3__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  ";
            $macros["self"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "items", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "    <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 4)], "method", false, false, false, 4);
                echo "\">
      <div class=\"item-content\">
        <a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 6);
                echo "\" class=\"catalog-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 6);
                echo "</a>
        <div class=\"item-assets image-left\">
          ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 9);
                    echo "\" class=\"catalog-image\">
              ";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 10), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 10)) {
                        // line 11
                        echo "                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 11);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 11)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 11);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 11);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 11), "width", [], "any", false, false, false, 11);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 11), "height", [], "any", false, false, false, 11);
                        echo "\" class=\"lazyload\"/>
              ";
                    } else {
                        // line 13
                        echo "                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13);
                            echo " 2x\" data-image2x=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13);
                            echo "\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 13);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 13), "width", [], "any", false, false, false, 13);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 13), "height", [], "any", false, false, false, 13);
                        echo "\"/>
              ";
                    }
                    // line 15
                    echo "            </a>
          ";
                }
                // line 17
                echo "          <div class=\"subitems\">
            ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                    // line 19
                    echo "              <div class=\"subitem\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 19);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 19)) {
                        echo "data-image2x=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 19);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 19);
                        echo " 2x\"";
                    }
                    echo ">
                <a href=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "href", [], "any", false, false, false, 20);
                    echo "\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 20);
                    echo "</span></a>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 23) > twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 23)))) {
                    // line 24
                    echo "              <div class=\"subitem view-more\">
                <a href=\"";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 25);
                    echo "\"><span>";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreText", [], "any", false, false, false, 25);
                    echo "</span></a>
              </div>
            ";
                }
                // line 28
                echo "          </div>
        </div>
      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 28,  230 => 25,  227 => 24,  224 => 23,  213 => 20,  200 => 19,  196 => 18,  193 => 17,  189 => 15,  165 => 13,  141 => 11,  139 => 10,  134 => 9,  132 => 8,  125 => 6,  119 => 4,  114 => 3,  111 => 2,  97 => 1,  90 => 56,  84 => 54,  71 => 44,  64 => 42,  57 => 41,  55 => 40,  52 => 39,  46 => 37,  44 => 36,  39 => 35,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderCatalog(j3, context) %}
  {% import _self as self %}
  {% for item in context.items %}
    <div class=\"{{ j3.classes(item.classes) }}\">
      <div class=\"item-content\">
        <a href=\"{{ item.href }}\" class=\"catalog-title\">{{ item.name }}</a>
        <div class=\"item-assets image-left\">
          {% if item.image %}
            <a href=\"{{ item.href }}\" class=\"catalog-image\">
              {% if j3.settings.get('performanceLazyLoadImagesStatus') %}
                <img src=\"{{ context.dummy_image }}\" data-src=\"{{ item.image }}\" data-image=\"{{ item.image }}\" {% if item.image2x %}data-srcset=\"{{ item.image }} 1x, {{ item.image2x }} 2x\"{% endif %} alt=\"{{ item.name }}\" width=\"{{ context.imageDimensions.width }}\" height=\"{{ context.imageDimensions.height }}\" class=\"lazyload\"/>
              {% else %}
                <img src=\"{{ item.image }}\" data-image=\"{{ item.image }}\" {% if item.image2x %}srcset=\"{{ item.image }} 1x, {{ item.image2x }} 2x\" data-image2x=\"{{ item.image2x }}\"{% endif %} alt=\"{{ item.name }}\" width=\"{{ context.imageDimensions.width }}\" height=\"{{ context.imageDimensions.height }}\"/>
              {% endif %}
            </a>
          {% endif %}
          <div class=\"subitems\">
            {% for sub_item in item.items %}
              <div class=\"subitem\" data-image=\"{{ sub_item.image }}\" {% if item.image2x %}data-image2x=\"{{ sub_item.image }} 1x, {{ sub_item.image2x }} 2x\"{% endif %}>
                <a href=\"{{ sub_item.href }}\"><span>{{ sub_item.name }}</span></a>
              </div>
            {% endfor %}
            {% if item.total > item.items|length %}
              <div class=\"subitem view-more\">
                <a href=\"{{ item.href }}\"><span>{{ context.viewMoreText }}</span></a>
              </div>
            {% endif %}
          </div>
        </div>
      </div>
    </div>
  {% endfor %}
{% endmacro %}
{% import _self as self %}
<div class=\"{{ j3.classes(classes) }}\">
  {% if title %}
    <h3 class=\"title module-title\">{{ title }}</h3>
  {% endif %}
  <div class=\"module-body\">
    {% if carousel %}
      <div class=\"swiper\" data-items-per-row='{{ itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ carouselOptions|json_encode }}'>
        <div class=\"swiper-container\" {% if j3.isRTL() %}dir=\"rtl\"{% endif %}>
          <div class=\"swiper-wrapper\">
            {{ self.renderCatalog(j3, _context) }}
          </div>
        </div>
        <div class=\"swiper-buttons\">
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    {% else %}
      {{ self.renderCatalog(j3, _context) }}
    {% endif %}
  </div>
</div>

", "journal3/template/journal3/module/catalog.twig", "");
    }
}
