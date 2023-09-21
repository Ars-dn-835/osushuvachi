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

/* journal3/template/account/wishlist.twig */
class __TwigTemplate_0fc9db7755e764ec5f0da9b221a618ea993e02a38ab8cf011e9d86d212c9584f extends \Twig\Template
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
<div id=\"account-wishlist\" class=\"container\">
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "pageTitlePosition"], "method", false, false, false, 26) == "default")) {
            // line 27
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 29
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 30
        if (($context["products"] ?? null)) {
            // line 31
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center td-image\">";
            // line 35
            echo ($context["column_image"] ?? null);
            echo "</td>
              <td class=\"text-left td-name\">";
            // line 36
            echo ($context["column_name"] ?? null);
            echo "</td>
              <td class=\"text-center td-model\">";
            // line 37
            echo ($context["column_model"] ?? null);
            echo "</td>
              <td class=\"text-center td-stock\">";
            // line 38
            echo ($context["column_stock"] ?? null);
            echo "</td>
              <td class=\"text-center td-price\">";
            // line 39
            echo ($context["column_price"] ?? null);
            echo "</td>
              <td class=\"text-center td-action\">";
            // line 40
            echo ($context["column_action"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                echo "          <tr class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 46)], "method", false, false, false, 46);
                echo "\">
            <td class=\"text-center td-image\">";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 47)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 47);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left td-name\"><a href=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                echo "</a></td>
            <td class=\"text-center td-model\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 49);
                echo "</td>
            <td class=\"text-center td-stock ";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 50);
                echo "</td>
            <td class=\"text-center td-price\">";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "              <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52)) {
                        // line 53
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53);
                        echo "
                ";
                    } else {
                        // line 54
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 54);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54);
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 55
                echo "</td>
            <td class=\"text-center td-action\">
              ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "catalogCartStatus"], "method", false, false, false, 57)) {
                    // line 58
                    echo "              <button type=\"button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
                    echo "');\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" class=\"btn btn-primary\" data-loading-text=\"<i class='fa fa-shopping-cart'></i>\"><i class=\"fa fa-shopping-cart\"></i></button>
              ";
                }
                // line 60
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 60);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-remove\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 68
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 70
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 71
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 73
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 74
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 76
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 76,  279 => 74,  275 => 73,  268 => 71,  265 => 70,  259 => 68,  252 => 63,  240 => 60,  232 => 58,  230 => 57,  226 => 55,  216 => 54,  210 => 53,  207 => 52,  205 => 51,  195 => 50,  191 => 49,  185 => 48,  171 => 47,  166 => 46,  162 => 45,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  128 => 31,  126 => 30,  121 => 29,  115 => 27,  113 => 26,  108 => 25,  105 => 24,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  88 => 18,  83 => 17,  75 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
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
<div id=\"account-wishlist\" class=\"container\">
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  {% endif %}
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
      {% if products %}
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center td-image\">{{ column_image }}</td>
              <td class=\"text-left td-name\">{{ column_name }}</td>
              <td class=\"text-center td-model\">{{ column_model }}</td>
              <td class=\"text-center td-stock\">{{ column_stock }}</td>
              <td class=\"text-center td-price\">{{ column_price }}</td>
              <td class=\"text-center td-action\">{{ column_action }}</td>
            </tr>
          </thead>
          <tbody>
          
          {% for product in products %}
          <tr class=\"{{ j3.classes(product.classes) }}\">
            <td class=\"text-center td-image\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" /></a>{% endif %}</td>
            <td class=\"text-left td-name\"><a href=\"{{ product.href }}\">{{ product.name }}</a></td>
            <td class=\"text-center td-model\">{{ product.model }}</td>
            <td class=\"text-center td-stock {% if product.quantity %}in-stock{% else %}out-of-stock{% endif %}\">{{ product.stock }}</td>
            <td class=\"text-center td-price\">{% if product.price %}
              <div class=\"price\"> {% if not product.special %}
                {{ product.price }}
                {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>
              {% endif %}</td>
            <td class=\"text-center td-action\">
              {% if j3.settings.get('catalogCartStatus') %}
              <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" data-toggle=\"tooltip\" title=\"{{ button_cart }}\" class=\"btn btn-primary\" data-loading-text=\"<i class='fa fa-shopping-cart'></i>\"><i class=\"fa fa-shopping-cart\"></i></button>
              {% endif %}
              <a href=\"{{ product.remove }}\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger btn-remove\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          {% endfor %}
            </tbody>
          
        </table>
      </div>
      {% else %}
      <p>{{ text_empty }}</p>
      {% endif %}
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "journal3/template/account/wishlist.twig", "");
    }
}
