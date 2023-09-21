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

/* journal3/template/journal3/module/blog_search.twig */
class __TwigTemplate_8d604d6424531b7bea1abeca4c64b2fb6a144d3f20f234d8a1650c9d68138e0a extends \Twig\Template
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
        echo "\" data-url=\"";
        echo ($context["url"] ?? null);
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
    <div class=\"box-search\">
      <input type=\"text\" class=\"form-control blog-search\" value=\"";
        // line 7
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/>
      <button class=\"btn search-btn\">
        <i class=\"fa fa-search\"></i>
      </button>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  52 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ j3.classes(classes) }}\" data-url=\"{{ url }}\">
  {% if title %}
    <h3 class=\"title module-title\">{{ title }}</h3>
  {% endif %}
  <div class=\"module-body\">
    <div class=\"box-search\">
      <input type=\"text\" class=\"form-control blog-search\" value=\"{{ search }}\" placeholder=\"{{ placeholder }}\"/>
      <button class=\"btn search-btn\">
        <i class=\"fa fa-search\"></i>
      </button>
    </div>
  </div>
</div>
", "journal3/template/journal3/module/blog_search.twig", "");
    }
}
