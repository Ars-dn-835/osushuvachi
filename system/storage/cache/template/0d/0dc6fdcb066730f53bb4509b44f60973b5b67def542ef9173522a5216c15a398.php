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

/* journal3/template/journal3/module/blog_side_posts.twig */
class __TwigTemplate_e2287116c156195380c6740010fa142643b59dc88cc6c771923a2f44cce04cd7 extends \Twig\Template
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
        // line 23
        $macros["self"] = $this->macros["self"] = $this;
        // line 24
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 24);
        echo "\">
  <div class=\"module-body\">
    ";
        // line 27
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "blocks")) {
            // line 28
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 29)], "method", false, false, false, 29);
                echo "\">
          ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "            <h3 class=\"title module-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 31);
                    echo "</h3>
          ";
                }
                // line 33
                echo "          ";
                echo twig_call_macro($macros["self"], "macro_renderPostsItem", [$context["item"], $context], 33, $context, $this->getSourceContext());
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "tabs")) {
            // line 39
            echo "      <ul class=\"nav nav-tabs\">
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "          <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 41)], "method", false, false, false, 41);
                echo "\">
            <a href=\"#";
                // line 42
                echo ($context["id"] ?? null);
                echo "-tab-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 42);
                echo "</a>
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "          <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-tab-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48);
                echo "\">
            ";
                // line 49
                echo twig_call_macro($macros["self"], "macro_renderPostsItem", [$context["item"], $context], 49, $context, $this->getSourceContext());
                echo "
          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </div>
    ";
        }
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "accordion")) {
            // line 56
            echo "      <div class=\"panel-group\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                echo "          <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 58)], "method", false, false, false, 58);
                echo "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 61
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61);
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo ($context["id"] ?? null);
                echo "-collapse\" aria-expanded=\"false\">
                  ";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 62);
                echo "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 67)], "method", false, false, false, 67);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 67);
                echo "\">
              <div class=\"panel-body\">
                ";
                // line 69
                echo twig_call_macro($macros["self"], "macro_renderPostsItem", [$context["item"], $context], 69, $context, $this->getSourceContext());
                echo "
              </div>
            </div>
          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </div>
    ";
        }
        // line 76
        echo "  </div>
</div>
";
    }

    // line 1
    public function macro_renderPostsItem($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
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
            $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "posts", [], "any", false, false, false, 3);
            // line 4
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "carousel", [], "any", false, false, false, 4)) {
                // line 5
                echo "    <div class=\"swiper\" data-items-per-row='";
                echo json_encode(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "itemsPerRow", [], "any", false, false, false, 5), twig_constant("JSON_FORCE_OBJECT"));
                echo "' data-options='";
                echo json_encode(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "carouselOptions", [], "any", false, false, false, 5), twig_constant("JSON_FORCE_OBJECT"));
                echo "'>
      <div class=\"swiper-container\" ";
                // line 6
                if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 6)) {
                    echo "dir=\"rtl\"";
                }
                echo ">
        <div class=\"swiper-wrapper side-posts\">
          ";
                // line 8
                $this->loadTemplate("journal3/template/journal3/side_posts.twig", "journal3/template/journal3/module/blog_side_posts.twig", 8)->display(twig_array_merge($context, ($context["context"] ?? null)));
                // line 9
                echo "        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  ";
            } else {
                // line 18
                echo "    <div class=\"side-posts\">
      ";
                // line 19
                $this->loadTemplate("journal3/template/journal3/side_posts.twig", "journal3/template/journal3/module/blog_side_posts.twig", 19)->display(twig_array_merge($context, ($context["context"] ?? null)));
                // line 20
                echo "    </div>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_side_posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 20,  322 => 19,  319 => 18,  308 => 9,  306 => 8,  299 => 6,  292 => 5,  289 => 4,  286 => 3,  283 => 2,  269 => 1,  263 => 76,  259 => 74,  240 => 69,  231 => 67,  223 => 62,  215 => 61,  208 => 58,  191 => 57,  186 => 56,  183 => 55,  181 => 54,  177 => 52,  160 => 49,  151 => 48,  134 => 47,  130 => 45,  109 => 42,  104 => 41,  87 => 40,  84 => 39,  81 => 38,  79 => 37,  76 => 36,  66 => 33,  60 => 31,  58 => 30,  53 => 29,  48 => 28,  45 => 27,  39 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderPostsItem(item, context) %}
  {% import _self as self %}
  {% set posts = item.posts %}
  {% if context.carousel %}
    <div class=\"swiper\" data-items-per-row='{{ context.itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ context.carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'>
      <div class=\"swiper-container\" {% if j3.isRTL() %}dir=\"rtl\"{% endif %}>
        <div class=\"swiper-wrapper side-posts\">
          {% include \"journal3/template/journal3/side_posts.twig\" with context %}
        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  {% else %}
    <div class=\"side-posts\">
      {% include \"journal3/template/journal3/side_posts.twig\" with context %}
    </div>
  {% endif %}
{% endmacro %}
{% import _self as self %}
<div class=\"{{ j3.classes(classes) }}\">
  <div class=\"module-body\">
    {# grid #}
    {% if sectionsDisplay == 'blocks' %}
      {% for item in items %}
        <div class=\"{{ j3.classes(item.classes) }}\">
          {% if item.title %}
            <h3 class=\"title module-title\">{{ item.title }}</h3>
          {% endif %}
          {{ self.renderPostsItem(item, _context) }}
        </div>
      {% endfor %}
    {% endif %}
    {# tabs #}
    {% if sectionsDisplay == 'tabs' %}
      <ul class=\"nav nav-tabs\">
        {% for item in items %}
          <li class=\"{{ j3.classes(item.tab_classes) }}\">
            <a href=\"#{{ id }}-tab-{{ loop.index }}\" data-toggle=\"tab\">{{ item.title }}</a>
          </li>
        {% endfor %}
      </ul>
      <div class=\"tab-content\">
        {% for item in items %}
          <div class=\"{{ j3.classes(item.classes) }}\" id=\"{{ id }}-tab-{{ loop.index }}\">
            {{ self.renderPostsItem(item, _context) }}
          </div>
        {% endfor %}
      </div>
    {% endif %}
    {# accordion #}
    {% if sectionsDisplay == 'accordion' %}
      <div class=\"panel-group\" id=\"{{ id }}-collapse\">
        {% for item in items %}
          <div class=\"{{ j3.classes(item.classes) }}\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#{{ id }}-collapse-{{ loop.index }}\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#{{ id }}-collapse\" aria-expanded=\"false\">
                  {{ item.title }}
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"{{ j3.classes(item.panel_classes) }}\" id=\"{{ id }}-collapse-{{ loop.index }}\">
              <div class=\"panel-body\">
                {{ self.renderPostsItem(item, _context) }}
              </div>
            </div>
          </div>
        {% endfor %}
      </div>
    {% endif %}
  </div>
</div>
", "journal3/template/journal3/module/blog_side_posts.twig", "");
    }
}
