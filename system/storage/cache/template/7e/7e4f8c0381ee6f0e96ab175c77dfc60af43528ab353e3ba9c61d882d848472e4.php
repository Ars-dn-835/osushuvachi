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

/* default/template/common/simple_row_hidden.twig */
class __TwigTemplate_6e484463c2f2800e8246d1823309f75b3cead08701465863790f709bd29c1506 extends \Twig\Template
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
        echo "<input type=\"hidden\" name=\"";
        echo ($context["name"] ?? null);
        echo "\" id=\"";
        echo ($context["id"] ?? null);
        echo "\" value=\"";
        echo ($context["value"] ?? null);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "default/template/common/simple_row_hidden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<input type=\"hidden\" name=\"{{ name }}\" id=\"{{ id }}\" value=\"{{ value }}\">", "default/template/common/simple_row_hidden.twig", "");
    }
}
