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

/* extension/dashboard/sale_info.twig */
class __TwigTemplate_743ca3597ce5aae4b18675d7b4d1b65d38fdde6360ff96e5cd32cb5e5ecf507e extends \Twig\Template
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
        echo "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo " <span class=\"pull-right\">
    ";
        // line 3
        if ((($context["percentage"] ?? null) > 0)) {
            // line 4
            echo "    <i class=\"fa fa-caret-up\"></i>
    ";
        } elseif ((        // line 5
($context["percentage"] ?? null) < 0)) {
            // line 6
            echo "    <i class=\"fa fa-caret-down\"></i>
    ";
        }
        // line 8
        echo "    ";
        echo ($context["percentage"] ?? null);
        echo "%</span></div>
  <div class=\"tile-body\"><i class=\"fa fa-credit-card\"></i>
    <h2 class=\"pull-right\">";
        // line 10
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 12
        echo ($context["sale"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/sale_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  61 => 10,  55 => 8,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">{{ heading_title }} <span class=\"pull-right\">
    {% if percentage > 0 %}
    <i class=\"fa fa-caret-up\"></i>
    {% elseif percentage < 0 %}
    <i class=\"fa fa-caret-down\"></i>
    {% endif %}
    {{ percentage }}%</span></div>
  <div class=\"tile-body\"><i class=\"fa fa-credit-card\"></i>
    <h2 class=\"pull-right\">{{ total }}</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"{{ sale }}\">{{ text_view }}</a></div>
</div>
", "extension/dashboard/sale_info.twig", "");
    }
}
