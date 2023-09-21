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

/* journal3/template/common/maintenance.twig */
class __TwigTemplate_b63402320789e394689b809d9c803c6ee068c1e2234a06f849855d72d5c716e3 extends \Twig\Template
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
<div id=\"common-maintenance\" class=\"container\">
    ";
        // line 3
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => "maintenanceContent"], "method", false, false, false, 3);
        echo "
    ";
        // line 4
        echo ($context["grid"] ?? null);
        echo "
</div>
";
        // line 6
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"common-maintenance\" class=\"container\">
    {{ j3.settings.get('maintenanceContent') }}
    {{ grid }}
</div>
{{ footer }}
", "journal3/template/common/maintenance.twig", "");
    }
}
