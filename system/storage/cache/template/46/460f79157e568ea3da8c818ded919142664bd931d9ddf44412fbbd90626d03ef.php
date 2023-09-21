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

/* journal3/template/journal3/module/title.twig */
class __TwigTemplate_a18e71cba594e34b22db1338d8aa472d698dd7cf8de267449cfeafac6f62424f extends \Twig\Template
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
  <div class=\"title-wrapper\">
    ";
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "    <h3>";
            echo ($context["title"] ?? null);
            echo "</h3>
    ";
        }
        // line 6
        echo "    <div class=\"title-divider\"></div>
    <div class=\"subtitle\">";
        // line 7
        echo ($context["subtitle"] ?? null);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ j3.classes(classes) }}\">
  <div class=\"title-wrapper\">
    {% if title %}
    <h3>{{ title }}</h3>
    {% endif %}
    <div class=\"title-divider\"></div>
    <div class=\"subtitle\">{{ subtitle }}</div>
  </div>
</div>
", "journal3/template/journal3/module/title.twig", "");
    }
}
