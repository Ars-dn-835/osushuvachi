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

/* catalog/review_form.twig */
class __TwigTemplate_a0bc46736ade302fabf96af95b645b3c2986d5a2f77a085d4b5c41724fb34d6a extends \Twig\Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 28
        echo ($context["entry_author"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"";
        // line 30
        echo ($context["author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
              ";
        // line 31
        if (($context["error_author"] ?? null)) {
            // line 32
            echo "              <div class=\"text-danger\">";
            echo ($context["error_author"] ?? null);
            echo "</div>
              ";
        }
        // line 33
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 36
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 38
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 39
        if (($context["error_email"] ?? null)) {
            // line 40
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 41
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 44
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 46
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 47
        echo ($context["product_id"] ?? null);
        echo "\" />
              ";
        // line 48
        if (($context["error_product"] ?? null)) {
            // line 49
            echo "              <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 50
        echo " </div>
          </div>
\t\t\t <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-advantages\">";
        // line 53
        echo ($context["entry_advantages"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"advantages\" value=\"";
        // line 55
        echo ($context["advantages"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_advantages"] ?? null);
        echo "\" id=\"input-advantages\" class=\"form-control\" />
              ";
        // line 56
        if (($context["error_advantages"] ?? null)) {
            // line 57
            echo "              <div class=\"text-danger\">";
            echo ($context["error_advantages"] ?? null);
            echo "</div>
              ";
        }
        // line 58
        echo " </div>
          </div>
\t\t\t <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-disadvantages\">";
        // line 61
        echo ($context["entry_disadvantages"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"disadvantages\" value=\"";
        // line 63
        echo ($context["disadvantages"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_disadvantages"] ?? null);
        echo "\" id=\"input-disadvantages\" class=\"form-control\" />
              ";
        // line 64
        if (($context["error_disadvantages"] ?? null)) {
            // line 65
            echo "              <div class=\"text-danger\">";
            echo ($context["error_disadvantages"] ?? null);
            echo "</div>
              ";
        }
        // line 66
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 69
        echo ($context["entry_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 71
        echo ($context["entry_text"] ?? null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo ($context["text"] ?? null);
        echo "</textarea>
              ";
        // line 72
        if (($context["error_text"] ?? null)) {
            // line 73
            echo "              <div class=\"text-danger\">";
            echo ($context["error_text"] ?? null);
            echo "</div>
              ";
        }
        // line 74
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 77
        echo ($context["entry_rating"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 79
        if ((($context["rating"] ?? null) == 1)) {
            // line 80
            echo "                <input type=\"radio\" name=\"rating\" value=\"1\" checked=\"checked\" />
                1
                ";
        } else {
            // line 83
            echo "                <input type=\"radio\" name=\"rating\" value=\"1\" />
                1
                ";
        }
        // line 85
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 86
        if ((($context["rating"] ?? null) == 2)) {
            // line 87
            echo "                <input type=\"radio\" name=\"rating\" value=\"2\" checked=\"checked\" />
                2
                ";
        } else {
            // line 90
            echo "                <input type=\"radio\" name=\"rating\" value=\"2\" />
                2
                ";
        }
        // line 92
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 93
        if ((($context["rating"] ?? null) == 3)) {
            // line 94
            echo "                <input type=\"radio\" name=\"rating\" value=\"3\" checked=\"checked\" />
                3
                ";
        } else {
            // line 97
            echo "                <input type=\"radio\" name=\"rating\" value=\"3\" />
                3
                ";
        }
        // line 99
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 100
        if ((($context["rating"] ?? null) == 4)) {
            // line 101
            echo "                <input type=\"radio\" name=\"rating\" value=\"4\" checked=\"checked\" />
                4
                ";
        } else {
            // line 104
            echo "                <input type=\"radio\" name=\"rating\" value=\"4\" />
                4
                ";
        }
        // line 106
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 107
        if ((($context["rating"] ?? null) == 5)) {
            // line 108
            echo "                <input type=\"radio\" name=\"rating\" value=\"5\" checked=\"checked\" />
                5
                ";
        } else {
            // line 111
            echo "                <input type=\"radio\" name=\"rating\" value=\"5\" />
                5
                ";
        }
        // line 113
        echo " </label>
              ";
        // line 114
        if (($context["error_rating"] ?? null)) {
            // line 115
            echo "              <div class=\"text-danger\">";
            echo ($context["error_rating"] ?? null);
            echo "</div>
              ";
        }
        // line 116
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-added\">";
        // line 119
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"date_added\" value=\"";
        // line 122
        echo ($context["date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span> </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 129
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">                
                ";
        // line 132
        if (($context["status"] ?? null)) {
            echo "                
                <option value=\"1\" selected=\"selected\">";
            // line 133
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 134
            echo ($context["text_disabled"] ?? null);
            echo "</option>                
                ";
        } else {
            // line 135
            echo "                
                <option value=\"1\">";
            // line 136
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 137
            echo ($context["text_disabled"] ?? null);
            echo "</option>                
                ";
        }
        // line 139
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 148
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 157
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('input[name=\\'product_id\\']').val(item['value']);\t\t
\t}\t
});
//--></script></div>
";
        // line 175
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/review_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 175,  421 => 157,  409 => 148,  398 => 139,  393 => 137,  389 => 136,  386 => 135,  381 => 134,  377 => 133,  373 => 132,  367 => 129,  355 => 122,  349 => 119,  344 => 116,  338 => 115,  336 => 114,  333 => 113,  328 => 111,  323 => 108,  321 => 107,  318 => 106,  313 => 104,  308 => 101,  306 => 100,  303 => 99,  298 => 97,  293 => 94,  291 => 93,  288 => 92,  283 => 90,  278 => 87,  276 => 86,  273 => 85,  268 => 83,  263 => 80,  261 => 79,  256 => 77,  251 => 74,  245 => 73,  243 => 72,  237 => 71,  232 => 69,  227 => 66,  221 => 65,  219 => 64,  213 => 63,  208 => 61,  203 => 58,  197 => 57,  195 => 56,  189 => 55,  184 => 53,  179 => 50,  173 => 49,  171 => 48,  167 => 47,  161 => 46,  154 => 44,  149 => 41,  143 => 40,  141 => 39,  135 => 38,  130 => 36,  125 => 33,  119 => 32,  117 => 31,  111 => 30,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_form }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-author\">{{ entry_author }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"{{ author }}\" placeholder=\"{{ entry_author }}\" id=\"input-author\" class=\"form-control\" />
              {% if error_author %}
              <div class=\"text-danger\">{{ error_author }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
              {% if error_email %}
              <div class=\"text-danger\">{{ error_email }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"{{ help_product }}\">{{ entry_product }}</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"{{ product }}\" placeholder=\"{{ entry_product }}\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" />
              {% if error_product %}
              <div class=\"text-danger\">{{ error_product }}</div>
              {% endif %} </div>
          </div>
\t\t\t <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-advantages\">{{ entry_advantages }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"advantages\" value=\"{{ advantages }}\" placeholder=\"{{ entry_advantages }}\" id=\"input-advantages\" class=\"form-control\" />
              {% if error_advantages %}
              <div class=\"text-danger\">{{ error_advantages }}</div>
              {% endif %} </div>
          </div>
\t\t\t <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-disadvantages\">{{ entry_disadvantages }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"disadvantages\" value=\"{{ disadvantages }}\" placeholder=\"{{ entry_disadvantages }}\" id=\"input-disadvantages\" class=\"form-control\" />
              {% if error_disadvantages %}
              <div class=\"text-danger\">{{ error_disadvantages }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">{{ entry_text }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"{{ entry_text }}\" id=\"input-text\" class=\"form-control\">{{ text }}</textarea>
              {% if error_text %}
              <div class=\"text-danger\">{{ error_text }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_rating }}</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> {% if rating == 1 %}
                <input type=\"radio\" name=\"rating\" value=\"1\" checked=\"checked\" />
                1
                {% else %}
                <input type=\"radio\" name=\"rating\" value=\"1\" />
                1
                {% endif %} </label>
              <label class=\"radio-inline\"> {% if rating == 2 %}
                <input type=\"radio\" name=\"rating\" value=\"2\" checked=\"checked\" />
                2
                {% else %}
                <input type=\"radio\" name=\"rating\" value=\"2\" />
                2
                {% endif %} </label>
              <label class=\"radio-inline\"> {% if rating == 3 %}
                <input type=\"radio\" name=\"rating\" value=\"3\" checked=\"checked\" />
                3
                {% else %}
                <input type=\"radio\" name=\"rating\" value=\"3\" />
                3
                {% endif %} </label>
              <label class=\"radio-inline\"> {% if rating == 4 %}
                <input type=\"radio\" name=\"rating\" value=\"4\" checked=\"checked\" />
                4
                {% else %}
                <input type=\"radio\" name=\"rating\" value=\"4\" />
                4
                {% endif %} </label>
              <label class=\"radio-inline\"> {% if rating == 5 %}
                <input type=\"radio\" name=\"rating\" value=\"5\" checked=\"checked\" />
                5
                {% else %}
                <input type=\"radio\" name=\"rating\" value=\"5\" />
                5
                {% endif %} </label>
              {% if error_rating %}
              <div class=\"text-danger\">{{ error_rating }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-added\">{{ entry_date_added }}</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"date_added\" value=\"{{ date_added }}\" placeholder=\"{{ entry_date_added }}\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span> </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">                
                {% if status %}                
                <option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
                <option value=\"0\">{{ text_disabled }}</option>                
                {% else %}                
                <option value=\"1\">{{ text_enabled }}</option>
                <option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>                
                {% endif %}
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('.datetime').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('input[name=\\'product_id\\']').val(item['value']);\t\t
\t}\t
});
//--></script></div>
{{ footer }}
", "catalog/review_form.twig", "");
    }
}
