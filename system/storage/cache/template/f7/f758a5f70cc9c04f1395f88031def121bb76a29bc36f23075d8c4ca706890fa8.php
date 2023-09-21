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

/* journal3/template/product/search.twig */
class __TwigTemplate_ca88c1cbe5ec6961ef85597d9345a0083b13b27c5f4371c5875e1df3a47e8c0f extends \Twig\Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div id=\"product-search\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "pageTitlePosition"], "method", false, false, false, 21) == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 24
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"title search-criteria-title\">";
        // line 25
        echo ($context["entry_search"] ?? null);
        echo "</h2>

      <div class=\"search-form\">
        <div class=\"inputs\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 29
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />

          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 32
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 34
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 34) == ($context["category_id"] ?? null))) {
                // line 35
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 35);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 35);
                echo "</option>
              ";
            } else {
                // line 37
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 37);
                echo "</option>
              ";
            }
            // line 39
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 40
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 40) == ($context["category_id"] ?? null))) {
                    // line 41
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 41);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 41);
                    echo "</option>
                ";
                } else {
                    // line 43
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 43);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 43);
                    echo "</option>
                ";
                }
                // line 45
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 46
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 46) == ($context["category_id"] ?? null))) {
                        // line 47
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 47);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 47);
                        echo "</option>
                  ";
                    } else {
                        // line 49
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 49);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 49);
                        echo "</option>
                  ";
                    }
                    // line 51
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          </select>
        </div>

        <div class=\"checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 59
        if (($context["sub_category"] ?? null)) {
            // line 60
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 62
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 64
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>

        <div class=\"checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 69
        if (($context["description"] ?? null)) {
            // line 70
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
            ";
        } else {
            // line 72
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
            ";
        }
        // line 74
        echo "            ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
        </div>

      </div>

      <div class=\"buttons clearfix\">
          <div class=\"pull-right\"><button id=\"button-search\" class=\"btn btn-primary\"><span>";
        // line 80
        echo ($context["button_search"] ?? null);
        echo "</span></button></div>
      </div>
      <h2 class=\"title search-products-title\">";
        // line 82
        echo ($context["text_search"] ?? null);
        echo "</h2>
      <div class=\"main-products-wrapper\">
      ";
        // line 84
        if (($context["products"] ?? null)) {
            // line 85
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 85), "get", [0 => "sortBarStatus"], "method", false, false, false, 85)) {
                // line 119
                echo "          ";
            }
            // line 120
            echo "        <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 120), "get", [0 => "globalProductView"], "method", false, false, false, 120);
            echo "\">
          ";
            // line 121
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 121), "get", [0 => "globalProductView"], "method", false, false, false, 121);
            // line 122
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/search.twig", 122)->display($context);
            // line 123
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 125
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 126
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 129
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 131
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 134
        echo "      </div>
      ";
        // line 135
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 136
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 185
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 185,  332 => 136,  328 => 135,  325 => 134,  317 => 131,  311 => 129,  305 => 126,  301 => 125,  297 => 123,  294 => 122,  292 => 121,  287 => 120,  284 => 119,  281 => 85,  279 => 84,  274 => 82,  269 => 80,  259 => 74,  255 => 72,  251 => 70,  249 => 69,  240 => 64,  236 => 62,  232 => 60,  230 => 59,  223 => 54,  217 => 53,  211 => 52,  205 => 51,  197 => 49,  189 => 47,  186 => 46,  181 => 45,  173 => 43,  165 => 41,  162 => 40,  157 => 39,  149 => 37,  141 => 35,  138 => 34,  134 => 33,  130 => 32,  122 => 29,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<ul class=\"breadcrumb\">
  {% for breadcrumb in breadcrumbs %}
  <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
  {% endfor %}
</ul>
{% if j3.settings.get('pageTitlePosition') == 'top' %}
  <h1 class=\"title page-title\"><span>{{ heading_title }}</span></h1>
{% endif %}
{{ j3.loadController('journal3/layout', 'top') }}
<div id=\"product-search\" class=\"container\">
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">
      {% if j3.settings.get('pageTitlePosition') == 'default' %}
        <h1 class=\"title page-title\">{{ heading_title }}</h1>
      {% endif %}
      {{ content_top }}
      <h2 class=\"title search-criteria-title\">{{ entry_search }}</h2>

      <div class=\"search-form\">
        <div class=\"inputs\">
          <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_keyword }}\" id=\"input-search\" class=\"form-control\" />

          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">{{ text_category }}</option>
            {% for category_1 in categories %}
              {% if category_1.category_id == category_id %}
                <option value=\"{{ category_1.category_id }}\" selected=\"selected\">{{ category_1.name }}</option>
              {% else %}
                <option value=\"{{ category_1.category_id }}\">{{ category_1.name }}</option>
              {% endif %}
              {% for category_2 in category_1.children %}
                {% if category_2.category_id == category_id %}
                  <option value=\"{{ category_2.category_id }}\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>
                {% else %}
                  <option value=\"{{ category_2.category_id }}\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>
                {% endif %}
                {% for category_3 in category_2.children %}
                  {% if category_3.category_id == category_id %}
                    <option value=\"{{ category_3.category_id }}\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>
                  {% else %}
                    <option value=\"{{ category_3.category_id }}\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>
                  {% endif %}
                {% endfor %}
              {% endfor %}
            {% endfor %}
          </select>
        </div>

        <div class=\"checkbox\">
          <label class=\"checkbox-inline\">
            {% if sub_category %}
            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            {% else %}
            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            {% endif %}
            {{ text_sub_category }}</label>
        </div>

        <div class=\"checkbox\">
          <label class=\"checkbox-inline\">
            {% if description %}
              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
            {% else %}
              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
            {% endif %}
            {{ entry_description }}</label>
        </div>

      </div>

      <div class=\"buttons clearfix\">
          <div class=\"pull-right\"><button id=\"button-search\" class=\"btn btn-primary\"><span>{{ button_search }}</span></button></div>
      </div>
      <h2 class=\"title search-products-title\">{{ text_search }}</h2>
      <div class=\"main-products-wrapper\">
      {% if products %}
          {% if j3.settings.get('sortBarStatus') %}
{#              <div class=\"products-filter\">#}
{#                  <div class=\"grid-list\">#}
{#                    <button id=\"btn-grid-view\" class=\"view-btn {% if j3.settings.get('globalProductView') == 'grid' %}active{% endif %}\" data-toggle=\"tooltip\" title=\"{{ button_grid }}\" data-view=\"grid\"></button>#}
{#                    <button id=\"btn-list-view\" class=\"view-btn {% if j3.settings.get('globalProductView') == 'list' %}active{% endif %}\" data-toggle=\"tooltip\" title=\"{{ button_list }}\" data-view=\"list\"></button>#}
{#                    <a href=\"{{ compare }}\" id=\"compare-total\" class=\"compare-btn\">{{ text_compare }}</a>#}
{#                  </div>#}
{#                  <div class=\"select-group\">#}
{#                      <div class=\"input-group input-group-sm sort-by\">#}
{#                          <label class=\"input-group-addon\" for=\"input-sort\">{{ text_sort }}</label>#}
{#                          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">#}
{#                              {% for sorts in sorts %}#}
{#                                  {% if sorts.value == '%s-%s'|format(sort, order) %}#}
{#                                      <option value=\"{{ sorts.href }}\" selected=\"selected\">{{ sorts.text }}</option>#}
{#                                  {% else %}#}
{#                                      <option value=\"{{ sorts.href }}\">{{ sorts.text }}</option>#}
{#                                  {% endif %}#}
{#                              {% endfor %}#}
{#                          </select>#}
{#                      </div>#}
{#                      <div class=\"input-group input-group-sm per-page\">#}
{#                          <label class=\"input-group-addon\" for=\"input-limit\">{{ text_limit }}</label>#}
{#                          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">#}
{#                              {% for limits in limits %}#}
{#                                  {% if limits.value == limit %}#}
{#                                      <option value=\"{{ limits.href }}\" selected=\"selected\">{{ limits.text }}</option>#}
{#                                  {% else %}#}
{#                                      <option value=\"{{ limits.href }}\">{{ limits.text }}</option>#}
{#                                  {% endif %}#}
{#                              {% endfor %}#}
{#                          </select>#}
{#                      </div>#}
{#                  </div>#}
{#              </div>#}
          {% endif %}
        <div class=\"main-products product-{{ j3.settings.get('globalProductView') }}\">
          {% set display = j3.settings.get('globalProductView') %}
          {% include \"journal3/template/journal3/product_card.twig\" %}
        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-right\">{{ results }}</div>
        </div>
      {% else %}
        <p>{{ text_empty }}</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
        </div>
      {% endif %}
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
{{ footer }}
", "journal3/template/product/search.twig", "");
    }
}
