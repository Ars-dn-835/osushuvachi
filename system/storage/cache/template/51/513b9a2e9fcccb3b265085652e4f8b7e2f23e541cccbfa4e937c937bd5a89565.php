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

/* journal3/template/journal3/module/blog_tags.twig */
class __TwigTemplate_595380a10c48dc7b36947e64b49432ceb734998421959a92bc1ce032b1aa6902 extends \Twig\Template
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
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 1);
        echo "\">
  ";
        // line 2
        if (($context["title"] ?? null)) {
            // line 3
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 5
        echo "  <div class=\"module-body\">
    <div class=\"tags\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "        <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 8);
            echo "</a><b>,</b>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  58 => 8,  54 => 7,  50 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ j3.classes(classes) }}\">
  {% if title %}
    <h3 class=\"title module-title\">{{ title }}</h3>
  {% endif %}
  <div class=\"module-body\">
    <div class=\"tags\">
      {% for item in items %}
        <a href=\"{{ item.href }}\">{{ item.name }}</a><b>,</b>
      {% endfor %}
    </div>
  </div>
</div>
", "journal3/template/journal3/module/blog_tags.twig", "");
    }
}
