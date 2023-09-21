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

/* journal3/template/journal3/blog/posts.twig */
class __TwigTemplate_722c98a423716dba8784e08e23b12e88d20aaff4bc749b46af2a2dd7372ff67d extends \Twig\Template
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

";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => "pageTitlePosition"], "method", false, false, false, 3) == "top")) {
            // line 4
            echo "  <h1 class=\"title page-title\">
    <span >
      ";
            // line 6
            echo ($context["heading_title"] ?? null);
            echo "
";
            // line 10
            echo "    </span>
  </h1>
";
        }
        // line 13
        echo "<ul class=\"breadcrumb\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 18);
        echo "
<div class=\"container blog-home\">
  <div class=\"row\">";
        // line 20
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 22), "get", [0 => "pageTitlePosition"], "method", false, false, false, 22) == "default")) {
            // line 23
            echo "        <h1 class=\"title page-title\">
          ";
            // line 24
            echo ($context["heading_title"] ?? null);
            echo "
";
            // line 28
            echo "        </h1>
      ";
        }
        // line 30
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 31
        if (($context["category_description"] ?? null)) {
            // line 32
            echo "      <div class=\"category-description\">";
            echo ($context["category_description"] ?? null);
            echo "</div>
      ";
        }
        // line 34
        echo "      ";
        if (($context["posts"] ?? null)) {
            // line 35
            echo "        <div class=\"main-posts post-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "globalPostView"], "method", false, false, false, 35);
            echo "\">
          ";
            // line 36
            $this->loadTemplate("journal3/template/journal3/post_grid.twig", "journal3/template/journal3/blog/posts.twig", 36)->display($context);
            // line 37
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 39
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 40
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 43
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 45
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 48
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 49
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 51
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/blog/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 51,  157 => 49,  152 => 48,  144 => 45,  138 => 43,  132 => 40,  128 => 39,  124 => 37,  122 => 36,  117 => 35,  114 => 34,  108 => 32,  106 => 31,  101 => 30,  97 => 28,  93 => 24,  90 => 23,  88 => 22,  83 => 20,  78 => 18,  75 => 17,  64 => 15,  60 => 14,  57 => 13,  52 => 10,  48 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

{% if j3.settings.get('pageTitlePosition') == 'top' %}
  <h1 class=\"title page-title\">
    <span >
      {{ heading_title }}
{#      {% if feed_url %}#}
{#        <a class=\"blog-feed\" href=\"{{ feed_url }}\" target=\"_blank\"><span class=\"feed-text\">{{ j3.settings.get('blogFeedText') }}</span></a>#}
{#      {% endif %}#}
    </span>
  </h1>
{% endif %}
<ul class=\"breadcrumb\">
  {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
  {% endfor %}
</ul>
{{ j3.loadController('journal3/layout', 'top') }}
<div class=\"container blog-home\">
  <div class=\"row\">{{ column_left }}
    <div id=\"content\">
      {% if j3.settings.get('pageTitlePosition') == 'default' %}
        <h1 class=\"title page-title\">
          {{ heading_title }}
{#          {% if feed_url %}#}
{#            <a class=\"blog-feed\" href=\"{{ feed_url }}\" target=\"_blank\"><span class=\"feed-text\">{{ j3.settings.get('blogFeedText') }}</span></a>#}
{#          {% endif %}#}
        </h1>
      {% endif %}
      {{ content_top }}
      {% if category_description %}
      <div class=\"category-description\">{{ category_description }}</div>
      {% endif %}
      {% if posts %}
        <div class=\"main-posts post-{{ j3.settings.get('globalPostView') }}\">
          {% include \"journal3/template/journal3/post_grid.twig\" %}
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
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "journal3/template/journal3/blog/posts.twig", "");
    }
}
