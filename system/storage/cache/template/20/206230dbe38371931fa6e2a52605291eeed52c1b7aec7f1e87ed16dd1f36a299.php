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

/* journal3/journal3.twig */
class __TwigTemplate_67f859c6c23ae032ffbe45c95bec31b5751f838d68e301fb628d5788ffa6e863 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page\">
    <div class=\"j-header\">
      <div class=\"j-logo\"><span>";
        // line 5
        echo (((isset($context["j3"]) || array_key_exists("j3", $context))) ? (twig_constant("JOURNAL3_VERSION")) : (""));
        echo "</span></div>
      <div class=\"j-title\"></div>
      <div class=\"j-buttons\"><a class=\"button fs-button\"><i class=\"icon icon-fullscreen\"></i></a></div>
    </div>
    <div class=\"j-content\">
      <div class=\"loading\">
        <i class=\"fa fa-spin icon-uniE92F\"></i>
        <span>Loading...</span>
      </div>
    </div>
  </div>
</div>
";
        // line 17
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/journal3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page\">
    <div class=\"j-header\">
      <div class=\"j-logo\"><span>{{ j3 is defined ? constant('JOURNAL3_VERSION') : '' }}</span></div>
      <div class=\"j-title\"></div>
      <div class=\"j-buttons\"><a class=\"button fs-button\"><i class=\"icon icon-fullscreen\"></i></a></div>
    </div>
    <div class=\"j-content\">
      <div class=\"loading\">
        <i class=\"fa fa-spin icon-uniE92F\"></i>
        <span>Loading...</span>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "journal3/journal3.twig", "");
    }
}
