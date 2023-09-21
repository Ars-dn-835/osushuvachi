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

/* journal3/template/common/simple_footer.twig */
class __TwigTemplate_496923cec4b1811dfaca2bbd8a9597c2df6c59d6adfc80249abd46f26e166b4a extends \Twig\Template
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
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 2
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 4
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "journal3/template/common/simple_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "journal3/template/common/simple_footer.twig", "/home/goodin01/webfun.com.ua/osushuvachi/catalog/view/theme/journal3/template/common/simple_footer.twig");
    }
}
