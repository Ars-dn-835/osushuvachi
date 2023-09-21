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

/* journal3/template/product/category.twig */
class __TwigTemplate_6680b8a3fc1716d439c6d86ddf3143cf29335cab13edd62baa8b7cc28702d545 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<h1 class=\"main_title_cust\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h1>
<ul class=\"breadcrumb\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 8), "get", [0 => "pageTitlePosition"], "method", false, false, false, 8) == "top")) {
            // line 9
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 11);
        echo "
<div class=\"container\">
  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => "pageTitlePosition"], "method", false, false, false, 15) == "default")) {
            // line 16
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 18
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "categoryPageDescStatus"], "method", false, false, false, 18)) {
            // line 19
            echo "      ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 20
                echo "        <div class=\"category-description\">
          ";
                // line 21
                if ((($context["thumb"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "categoryPageCategoryImageStatus"], "method", false, false, false, 21))) {
                    // line 22
                    echo "          <img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" ";
                    if (($context["thumb2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["thumb"] ?? null);
                        echo " 1x, ";
                        echo ($context["thumb2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"category-image\"/>
          ";
                }
                // line 24
                echo "          ";
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 24), "get", [0 => "categoryPageCategoryDescriptionStatus"], "method", false, false, false, 24))) {
                    // line 25
                    echo "            <div class=\"category-text\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
          ";
                }
                // line 27
                echo "        </div>
      ";
            }
            // line 29
            echo "      ";
        }
        // line 30
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 31)) {
            // line 32
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 33
                echo "          <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 33);
                echo "\">
            ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "refineTitle"], "method", false, false, false, 34)) {
                    // line 35
                    echo "              <h3 class=\"refine-title title\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "refineTitleText"], "method", false, false, false, 35);
                    echo "</h3>
            ";
                }
                // line 37
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 37), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 37) == "carousel")) {
                    // line 38
                    echo "            <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "subcategoriesItemsPerRow"], "method", false, false, false, 38), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 38), "getJs", [], "method", false, false, false, 38), 1 => "subcategoriesCarouselStyle"], "method", false, false, false, 38), twig_constant("JSON_FORCE_OBJECT"));
                    echo "'>
              <div class=\"swiper-container\" ";
                    // line 39
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 39)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                <div class=\"swiper-wrapper\">
                  ";
                } else {
                    // line 42
                    echo "                  <div class=\"refine-items\">
                    ";
                }
                // line 44
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 45
                    echo "                      <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 45), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 45) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 46);
                    echo "\">
                          ";
                    // line 47
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 47), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 47) != "links")) {
                        // line 48
                        echo "                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 48);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 48)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 48);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 48);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 48);
                        echo "\"/>
                          ";
                    }
                    // line 50
                    echo "                          <span class=\"refine-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 50);
                    echo "</span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 54), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 54) != "carousel")) {
                    // line 55
                    echo "                  </div>
                  ";
                } else {
                    // line 57
                    echo "                </div>
              </div>
              <div class=\"swiper-buttons\">
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
              </div>
              <div class=\"swiper-pagination\"></div>
            </div>
            ";
                }
                // line 66
                echo "          </div>
        ";
            }
            // line 68
            echo "      ";
        }
        // line 69
        echo "      <div class=\"main-products-wrapper\">
      ";
        // line 70
        if (($context["products"] ?? null)) {
            // line 71
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "sortBarStatus"], "method", false, false, false, 71)) {
                // line 72
                echo "        <div style=\"background:#F7F7FB;\" class=\"products-filter\">
";
                // line 104
                echo "        </div>
        ";
            }
            // line 106
            echo "        <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 106), "get", [0 => "globalProductView"], "method", false, false, false, 106);
            echo "\">
          ";
            // line 107
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 107), "get", [0 => "globalProductView"], "method", false, false, false, 107);
            // line 108
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/category.twig", 108)->display($context);
            // line 109
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 111
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 112
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        }
        // line 115
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 116
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 118
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 121
        echo "      </div>
      ";
        // line 122
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 123
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 125
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 125);
        echo "
";
        // line 126
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 126,  318 => 125,  313 => 123,  309 => 122,  306 => 121,  298 => 118,  292 => 116,  289 => 115,  283 => 112,  279 => 111,  275 => 109,  272 => 108,  270 => 107,  265 => 106,  261 => 104,  258 => 72,  255 => 71,  253 => 70,  250 => 69,  247 => 68,  243 => 66,  232 => 57,  228 => 55,  225 => 54,  214 => 50,  198 => 48,  196 => 47,  192 => 46,  185 => 45,  180 => 44,  176 => 42,  168 => 39,  161 => 38,  158 => 37,  152 => 35,  150 => 34,  145 => 33,  142 => 32,  140 => 31,  135 => 30,  132 => 29,  128 => 27,  122 => 25,  119 => 24,  101 => 22,  99 => 21,  96 => 20,  93 => 19,  90 => 18,  84 => 16,  82 => 15,  77 => 13,  72 => 11,  66 => 9,  64 => 8,  61 => 7,  50 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<h1 class=\"main_title_cust\">{{ heading_title }}</h1>
<ul class=\"breadcrumb\">
  {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
  {% endfor %}
</ul>
{% if j3.settings.get('pageTitlePosition') == 'top' %}
  <h1 class=\"title page-title\"><span>{{ heading_title }}</span></h1>
{% endif %}
{{ j3.loadController('journal3/layout', 'top') }}
<div class=\"container\">
  <div class=\"row\">{{ column_left }}
    <div id=\"content\">
      {% if j3.settings.get('pageTitlePosition') == 'default' %}
        <h1 class=\"title page-title\">{{ heading_title }}</h1>
      {% endif %}
      {% if j3.settings.get('categoryPageDescStatus') %}
      {% if thumb or description %}
        <div class=\"category-description\">
          {% if thumb and j3.settings.get('categoryPageCategoryImageStatus') %}
          <img src=\"{{ thumb }}\" {% if thumb2x %}srcset=\"{{ thumb }} 1x, {{ thumb2x }} 2x\"{% endif %} alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" class=\"category-image\"/>
          {% endif %}
          {% if description and j3.settings.get('categoryPageCategoryDescriptionStatus') %}
            <div class=\"category-text\">{{ description }}</div>
          {% endif %}
        </div>
      {% endif %}
      {% endif %}
      {{ content_top }}
      {% if j3.settings.get('subcategoriesStatus') %}
        {% if categories %}
          <div class=\"refine-categories refine-{{ j3.settings.get('subcategoriesDisplay') }}\">
            {% if j3.settings.get('refineTitle') %}
              <h3 class=\"refine-title title\">{{ j3.settings.get('refineTitleText') }}</h3>
            {% endif %}
            {% if j3.settings.get('subcategoriesDisplay') == 'carousel' %}
            <div class=\"swiper\" data-items-per-row='{{ j3.settings.get('subcategoriesItemsPerRow')|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ j3.carousel(j3.document.getJs(), 'subcategoriesCarouselStyle')|json_encode(constant('JSON_FORCE_OBJECT')) }}'>
              <div class=\"swiper-container\" {% if j3.isRTL() %}dir=\"rtl\"{% endif %}>
                <div class=\"swiper-wrapper\">
                  {% else %}
                  <div class=\"refine-items\">
                    {% endif %}
                    {% for category in categories %}
                      <div class=\"refine-item {% if j3.settings.get('subcategoriesDisplay') == 'carousel' %}swiper-slide{% endif %}\">
                        <a href=\"{{ category.href }}\">
                          {% if j3.settings.get('subcategoriesDisplay') != 'links' %}
                            <img src=\"{{ category.image }}\" {% if category.image2x %}data-srcset=\"{{ category.image }} 1x, {{ category.image2x }} 2x\"{% endif %} alt=\"{{ category.alt }}\"/>
                          {% endif %}
                          <span class=\"refine-name\">{{ category.name }}</span>
                        </a>
                      </div>
                    {% endfor %}
                    {% if j3.settings.get('subcategoriesDisplay') != 'carousel' %}
                  </div>
                  {% else %}
                </div>
              </div>
              <div class=\"swiper-buttons\">
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
              </div>
              <div class=\"swiper-pagination\"></div>
            </div>
            {% endif %}
          </div>
        {% endif %}
      {% endif %}
      <div class=\"main-products-wrapper\">
      {% if products %}
        {% if j3.settings.get('sortBarStatus') %}
        <div style=\"background:#F7F7FB;\" class=\"products-filter\">
{#          <div class=\"grid-list\">#}
{#            <button id=\"btn-grid-view\" class=\"view-btn {% if j3.settings.get('globalProductView') == 'grid' %}active{% endif %}\" data-toggle=\"tooltip\" title=\"{{ button_grid }}\" data-view=\"grid\"></button>#}
{#            <button id=\"btn-list-view\" class=\"view-btn {% if j3.settings.get('globalProductView') == 'list' %}active{% endif %}\" data-toggle=\"tooltip\" title=\"{{ button_list }}\" data-view=\"list\"></button>#}
{#            <a href=\"{{ compare }}\" id=\"compare-total\" class=\"compare-btn\">{{ text_compare }}</a>#}
{#          </div>#}
{#          <div class=\"select-group\">#}
{#            <div class=\"input-group input-group-sm sort-by\">#}
{#              <label class=\"input-group-addon\" for=\"input-sort\">{{ text_sort }}</label>#}
{#              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">#}
{#                {% for sorts in sorts %}#}
{#                  {% if sorts.value == '%s-%s'|format(sort, order) %}#}
{#                    <option value=\"{{ sorts.href }}\" selected=\"selected\">{{ sorts.text }}</option>#}
{#                  {% else %}#}
{#                    <option value=\"{{ sorts.href }}\">{{ sorts.text }}</option>#}
{#                  {% endif %}#}
{#                {% endfor %}#}
{#              </select>#}
{#            </div>#}
{#            <div class=\"input-group input-group-sm per-page\">#}
{#              <label class=\"input-group-addon\" for=\"input-limit\">{{ text_limit }}</label>#}
{#              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">#}
{#                {% for limits in limits %}#}
{#                  {% if limits.value == limit %}#}
{#                    <option value=\"{{ limits.href }}\" selected=\"selected\">{{ limits.text }}</option>#}
{#                  {% else %}#}
{#                    <option value=\"{{ limits.href }}\">{{ limits.text }}</option>#}
{#                  {% endif %}#}
{#                {% endfor %}#}
{#              </select>#}
{#            </div>#}
{#          </div>#}
        </div>
        {% endif %}
        <div class=\"main-products product-{{ j3.settings.get('globalProductView') }}\">
          {% set display = j3.settings.get('globalProductView') %}
          {% include \"journal3/template/journal3/product_card.twig\" %}
        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-right\">{{ results }}</div>
        </div>
      {% endif %}
      {% if not categories and not products %}
        <p>{{ text_empty }}</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
        </div>
      {% endif %}
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ j3.loadController('journal3/seo/rich_snippets', breadcrumbs) }}
{{ footer }}
", "journal3/template/product/category.twig", "");
    }
}
