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

/* journal3/template/common/footer.twig */
class __TwigTemplate_508ffe5e46578738c487c03235041dd45e824714a3021f8788beb8a025546c01 extends \Twig\Template
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
        if ( !(isset($context["j3"]) || array_key_exists("j3", $context))) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom"], "method", false, false, false, 11);
        echo "

";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 13), "isPopup", [], "method", false, false, false, 13)) {
            // line 14
            echo "
<footer>
  ";
            // line 16
            echo ($context["footer_menu"] ?? null);
            echo "
</footer>

";
        }
        // line 20
        echo "</div><!-- .site-wrapper -->

";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 22);
        echo "

";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 24);
        echo "

";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 26);
        echo "

";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 28), "getScripts", [0 => "footer"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 29
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 29), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 29);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "performanceJSDefer"], "method", false, false, false, 29)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "canLiveReload", [], "method", false, false, false, 32)) {
            // line 33
            echo "<script src=\"http://";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "getHost", [], "method", false, false, false, 33);
            echo ":35729/livereload.js?snipver=1\" async></script>
";
        }
        // line 35
        echo "
";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "customJS"], "method", false, false, false, 36)) {
            // line 37
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 37), "get", [0 => "customJS"], "method", false, false, false, 37);
            echo "</script>
";
        }
        // line 39
        echo "
";
        // line 40
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 40), "isPopup", [], "method", false, false, false, 40) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 40), "get", [0 => "customCodeFooter"], "method", false, false, false, 40))) {
            // line 41
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "customCodeFooter"], "method", false, false, false, 41);
            echo "
";
        }
        // line 43
        echo "
";
        // line 44
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 44), "isPopup", [], "method", false, false, false, 44) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "scrollTop"], "method", false, false, false, 44))) {
            // line 45
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 49
        echo "
";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 50), "hasFonts", [], "method", false, false, false, 50) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "performanceAsyncFontsStatus"], "method", false, false, false, 50))) {
            // line 51
            echo "  <script>
    (function () {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
";
        }
        // line 62
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 62,  152 => 51,  150 => 50,  147 => 49,  141 => 45,  139 => 44,  136 => 43,  131 => 41,  129 => 40,  126 => 39,  120 => 37,  118 => 36,  115 => 35,  109 => 33,  107 => 32,  104 => 31,  91 => 29,  87 => 28,  82 => 26,  77 => 24,  72 => 22,  68 => 20,  61 => 16,  57 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if j3 is not defined %}
  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
{% endif %}
{{ j3.loadController('journal3/layout', 'bottom') }}

{% if not j3.document.isPopup() %}

<footer>
  {{ footer_menu }}
</footer>

{% endif %}
</div><!-- .site-wrapper -->

{{ j3.loadController('journal3/layout', 'bottom_menu') }}

{{ j3.loadController('journal3/layout', 'side_menu') }}

{{ j3.loadController('journal3/layout', 'notification') }}

{% for script in j3.document.getScripts('footer') %}
<script src=\"{{ j3.document.staticUrl(script, false) }}\" {% if j3.settings.get('performanceJSDefer') %} defer {% endif %}></script>
{% endfor %}

{% if j3.canLiveReload() %}
<script src=\"http://{{ j3.getHost() }}:35729/livereload.js?snipver=1\" async></script>
{% endif %}

{% if j3.settings.get('customJS') %}
<script type=\"text/javascript\">{{ j3.settings.get('customJS') }}</script>
{% endif %}

{% if not j3.document.isPopup() and j3.settings.get('customCodeFooter') %}
{{ j3.settings.get('customCodeFooter') }}
{% endif %}

{% if not j3.document.isPopup() and j3.settings.get('scrollTop') %}
<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
{% endif %}

{% if j3.document.hasFonts() and j3.settings.get('performanceAsyncFontsStatus') %}
  <script>
    (function () {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
{% endif %}

</body>
</html>
", "journal3/template/common/footer.twig", "");
    }
}
