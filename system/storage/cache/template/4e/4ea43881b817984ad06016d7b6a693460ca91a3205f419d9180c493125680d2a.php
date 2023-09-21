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

/* journal3/template/journal3/post_grid.twig */
class __TwigTemplate_3128fa119baf9d555b9064621ca92f8b68dafd319e675579c02ab927be0933e3 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "  <div class=\"post-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["post"], "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            echo "\">
    <div class=\"post-thumb\">
      <div class=\"image\">
        ";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 5), "get", [0 => "datePosition"], "method", false, false, false, 5) == "image")) {
                // line 6
                echo "        <span class=\"p-date p-date-image\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 6);
                echo "</span>
        ";
            }
            // line 8
            echo "        <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 8);
            echo "\">
          ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 9), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 9)) {
                // line 10
                echo "            <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 10);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 10)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 10);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 10);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 10);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive lazyload\"/>
          ";
            } else {
                // line 12
                echo "            <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 12);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 12)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 12);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 12);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 12);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 12);
                echo "\" class=\"img-responsive\"/>
          ";
            }
            // line 14
            echo "        </a>
      </div>

      <div class=\"caption\">

        <div class=\"post-stats\">
          <span class=\"p-author\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 20);
            echo "</span>
          ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "datePosition"], "method", false, false, false, 21) == "default")) {
                // line 22
                echo "          <span class=\"p-date p-date-default\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 22);
                echo "</span>
          ";
            }
            // line 24
            echo "          <span class=\"p-comment\">";
            echo twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 24);
            echo "</span>
          <span class=\"p-view\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, false, 25);
            echo "</span>
        </div>

        <div class=\"name\"><a href=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 28);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 28);
            echo "</a></div>

        <div class=\"description\">";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 30);
            echo "</div>

        <div class=\"button-group\">
          <a class=\"btn btn-read-more\" href=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 33);
            echo "\" ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "getIn", [0 => "PostGridButtonDisplay", 1 => $context], "method", false, false, false, 33) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "getIn", [0 => "PostGridButtonTooltipStatus", 1 => $context], "method", false, false, false, 33))) {
                echo "  data-toggle=\"tooltip\" data-tooltip-class=\"";
                echo ((($context["module_id"] ?? null)) ? ((("module-blog_posts-" . ($context["module_id"] ?? null)) . " module-blog_posts-grid")) : ("post-grid"));
                echo " read-more-tooltip\" data-placement=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "getIn", [0 => "PostGridButtonTooltipPosition", 1 => $context], "method", false, false, false, 33);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "blogReadMoreButtonText"], "method", false, false, false, 33);
                echo "\" ";
            }
            echo ">
            <span class=\"btn-text\">";
            // line 34
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "blogReadMoreButtonText"], "method", false, false, false, 34);
            echo "</span>
          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/post_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 34,  153 => 33,  147 => 30,  140 => 28,  134 => 25,  129 => 24,  123 => 22,  121 => 21,  117 => 20,  109 => 14,  87 => 12,  63 => 10,  61 => 9,  56 => 8,  50 => 6,  48 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
  <div class=\"post-layout {{ j3.classes(post.classes) }}\">
    <div class=\"post-thumb\">
      <div class=\"image\">
        {% if j3.settings.get('datePosition') == 'image' %}
        <span class=\"p-date p-date-image\">{{ post.date }}</span>
        {% endif %}
        <a href=\"{{ post.href }}\">
          {% if j3.settings.get('performanceLazyLoadImagesStatus') %}
            <img src=\"{{ dummy_image }}\" data-src=\"{{ post.thumb }}\" {% if post.thumb2x %}data-srcset=\"{{ post.thumb }} 1x, {{ post.thumb2x }} 2x\" {% endif %} width=\"{{ image_width }}\" height=\"{{ image_height }}\" alt=\"{{ post.name }}\" title=\"{{ post.name }}\" class=\"img-responsive lazyload\"/>
          {% else %}
            <img src=\"{{ post.thumb }}\" {% if post.thumb2x %}srcset=\"{{ post.thumb }} 1x, {{ post.thumb2x }} 2x\" {% endif %} width=\"{{ image_width }}\" height=\"{{ image_height }}\" alt=\"{{ post.name }}\" title=\"{{ post.name }}\" class=\"img-responsive\"/>
          {% endif %}
        </a>
      </div>

      <div class=\"caption\">

        <div class=\"post-stats\">
          <span class=\"p-author\">{{ post.author }}</span>
          {% if j3.settings.get('datePosition') == 'default' %}
          <span class=\"p-date p-date-default\">{{ post.date }}</span>
          {% endif %}
          <span class=\"p-comment\">{{ post.comments }}</span>
          <span class=\"p-view\">{{ post.views }}</span>
        </div>

        <div class=\"name\"><a href=\"{{ post.href }}\">{{ post.name }}</a></div>

        <div class=\"description\">{{ post.description }}</div>

        <div class=\"button-group\">
          <a class=\"btn btn-read-more\" href=\"{{ post.href }}\" {% if (j3.settings.getIn('PostGridButtonDisplay', _context) == \"icon\") and (j3.settings.getIn('PostGridButtonTooltipStatus', _context)) %}  data-toggle=\"tooltip\" data-tooltip-class=\"{{ module_id ? 'module-blog_posts-' ~ module_id ~ ' module-blog_posts-grid' : 'post-grid' }} read-more-tooltip\" data-placement=\"{{ j3.settings.getIn('PostGridButtonTooltipPosition', _context) }}\" title=\"{{ j3.settings.get('blogReadMoreButtonText') }}\" {% endif %}>
            <span class=\"btn-text\">{{ j3.settings.get('blogReadMoreButtonText') }}</span>
          </a>
        </div>
      </div>
    </div>
  </div>
{% endfor %}
", "journal3/template/journal3/post_grid.twig", "/home/goodin01/webfun.com.ua/osushuvachi/catalog/view/theme/journal3/template/journal3/post_grid.twig");
    }
}
