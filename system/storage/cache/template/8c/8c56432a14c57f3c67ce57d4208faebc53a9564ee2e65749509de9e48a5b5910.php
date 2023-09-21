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

/* journal3/template/information/contact.twig */
class __TwigTemplate_f46c70f18135e9068113e74192b53d15b62f036f856af0f4a7e084b1fb3a8f31 extends \Twig\Template
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
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 5
        echo "<ul class=\"breadcrumb\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "pageTitlePosition"], "method", false, false, false, 21) == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 24
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"title location-title\">";
        // line 25
        echo ($context["text_location"] ?? null);
        echo "</h2>
      <div class=\"panel panel-default our-location\">
        <div class=\"panel-body\">
          <div class=\"row store-data\">
            ";
        // line 29
        if (($context["image"] ?? null)) {
            // line 30
            echo "            <div class=\"col-sm-3 store-image\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 32
        echo "            <div class=\"col-sm-3 store-address\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 34
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 36
        if (($context["geocode"] ?? null)) {
            // line 37
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 39
        echo "            </div>
            <div class=\"col-sm-3 store-tel\"><strong>";
        // line 40
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 41
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 43
        if (($context["fax"] ?? null)) {
            // line 44
            echo "                <div class=\"store-fax\">
                  <strong>";
            // line 45
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
                  ";
            // line 46
            echo ($context["fax"] ?? null);
            echo "
                </div>
              ";
        }
        // line 49
        echo "            </div>
            <div class=\"col-sm-3 store-info\">
              ";
        // line 51
        if (($context["open"] ?? null)) {
            // line 52
            echo "                <div class=\"store-hours\">
                  <strong>";
            // line 53
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
                  ";
            // line 54
            echo ($context["open"] ?? null);
            echo "<br />
                </div>
              <br />
              ";
        }
        // line 58
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 59
            echo "                <div class=\"store-comment\">
                  <strong>";
            // line 60
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
                  ";
            // line 61
            echo ($context["comment"] ?? null);
            echo "
                </div>
              ";
        }
        // line 64
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 68
        if (($context["locations"] ?? null)) {
            // line 69
            echo "      <h2 class=\"title stores-title\">";
            echo ($context["text_store"] ?? null);
            echo "</h2>
      <div class=\"panel-group other-stores\" id=\"accordion\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 72
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 74);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 74);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 76);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row store-data\">
                ";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "                <div class=\"col-sm-3 store-image\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 80);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 80);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 80);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 82
                echo "                <div class=\"col-sm-3 store-address\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 82);
                echo "</strong><br />
                  <address>
                  ";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 84);
                echo "
                  </address>
                  ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 87));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 89
                echo "                </div>
                <div class=\"col-sm-3 store-tel\"> <strong>";
                // line 90
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
                  ";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 91);
                echo "<br />
                  <br />
                  <div class=\"store-fax\">
                  ";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
                  ";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 96);
                    echo "
                  ";
                }
                // line 98
                echo "                  </div>
                </div>
                <div class=\"col-sm-3 store-info\">
                  ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 101)) {
                    // line 102
                    echo "                  <div class=\"store-hours\">
                  <strong>";
                    // line 103
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 104);
                    echo "<br />
                  </div>
                  <br />
                  ";
                }
                // line 108
                echo "                  <div class=\"store-comment\">
                  ";
                // line 109
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 111);
                    echo "
                  ";
                }
                // line 113
                echo "                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "      </div>
      ";
        }
        // line 122
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 122), "get", [0 => "contactFormStatus"], "method", false, false, false, 122)) {
            // line 123
            echo "      <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
            // line 125
            echo ($context["text_contact"] ?? null);
            echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 127
            echo ($context["entry_name"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
            // line 129
            echo ($context["name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
              ";
            // line 130
            if (($context["error_name"] ?? null)) {
                // line 131
                echo "              <div class=\"text-danger\">";
                echo ($context["error_name"] ?? null);
                echo "</div>
              ";
            }
            // line 133
            echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
            // line 136
            echo ($context["entry_email"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
            // line 138
            echo ($context["email"] ?? null);
            echo "\" id=\"input-email\" class=\"form-control\" />
              ";
            // line 139
            if (($context["error_email"] ?? null)) {
                // line 140
                echo "              <div class=\"text-danger\">";
                echo ($context["error_email"] ?? null);
                echo "</div>
              ";
            }
            // line 142
            echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
            // line 145
            echo ($context["entry_enquiry"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
            // line 147
            echo ($context["enquiry"] ?? null);
            echo "</textarea>
              ";
            // line 148
            if (($context["error_enquiry"] ?? null)) {
                // line 149
                echo "              <div class=\"text-danger\">";
                echo ($context["error_enquiry"] ?? null);
                echo "</div>
              ";
            }
            // line 151
            echo "            </div>
          </div>
          ";
            // line 153
            echo ($context["captcha"] ?? null);
            echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <button class=\"btn btn-primary\" type=\"submit\"><span>";
            // line 157
            echo ($context["button_submit"] ?? null);
            echo "</span></button>
          </div>
        </div>
      </form>
      ";
        }
        // line 162
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 163
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 165
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 165,  468 => 163,  463 => 162,  455 => 157,  448 => 153,  444 => 151,  438 => 149,  436 => 148,  432 => 147,  427 => 145,  422 => 142,  416 => 140,  414 => 139,  410 => 138,  405 => 136,  400 => 133,  394 => 131,  392 => 130,  388 => 129,  383 => 127,  378 => 125,  372 => 123,  369 => 122,  365 => 120,  353 => 113,  348 => 111,  343 => 110,  341 => 109,  338 => 108,  331 => 104,  327 => 103,  324 => 102,  322 => 101,  317 => 98,  312 => 96,  307 => 95,  305 => 94,  299 => 91,  295 => 90,  292 => 89,  282 => 87,  280 => 86,  275 => 84,  269 => 82,  259 => 80,  257 => 79,  251 => 76,  244 => 74,  240 => 72,  236 => 71,  230 => 69,  228 => 68,  222 => 64,  216 => 61,  212 => 60,  209 => 59,  206 => 58,  199 => 54,  195 => 53,  192 => 52,  190 => 51,  186 => 49,  180 => 46,  176 => 45,  173 => 44,  171 => 43,  166 => 41,  162 => 40,  159 => 39,  149 => 37,  147 => 36,  142 => 34,  136 => 32,  126 => 30,  124 => 29,  117 => 25,  112 => 24,  106 => 22,  104 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  79 => 13,  75 => 12,  70 => 10,  67 => 9,  56 => 7,  52 => 6,  49 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{% if j3.settings.get('pageTitlePosition') == 'top' %}
  <h1 class=\"title page-title\"><span>{{ heading_title }}</span></h1>
{% endif %}
<ul class=\"breadcrumb\">
  {% for breadcrumb in breadcrumbs %}
  <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
  {% endfor %}
</ul>
{{ j3.loadController('journal3/layout', 'top') }}
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">
      {% if j3.settings.get('pageTitlePosition') == 'default' %}
        <h1 class=\"title page-title\">{{ heading_title }}</h1>
      {% endif %}
      {{ content_top }}
      <h2 class=\"title location-title\">{{ text_location }}</h2>
      <div class=\"panel panel-default our-location\">
        <div class=\"panel-body\">
          <div class=\"row store-data\">
            {% if image %}
            <div class=\"col-sm-3 store-image\"><img src=\"{{ image }}\" alt=\"{{ store }}\" title=\"{{ store }}\" class=\"img-thumbnail\" /></div>
            {% endif %}
            <div class=\"col-sm-3 store-address\"><strong>{{ store }}</strong><br />
              <address>
              {{ address }}
              </address>
              {% if geocode %}
              <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
              {% endif %}
            </div>
            <div class=\"col-sm-3 store-tel\"><strong>{{ text_telephone }}</strong><br>
              {{ telephone }}<br />
              <br />
              {% if fax %}
                <div class=\"store-fax\">
                  <strong>{{ text_fax }}</strong><br>
                  {{ fax }}
                </div>
              {% endif %}
            </div>
            <div class=\"col-sm-3 store-info\">
              {% if open %}
                <div class=\"store-hours\">
                  <strong>{{ text_open }}</strong><br />
                  {{ open }}<br />
                </div>
              <br />
              {% endif %}
              {% if comment %}
                <div class=\"store-comment\">
                  <strong>{{ text_comment }}</strong><br />
                  {{ comment }}
                </div>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
      {% if locations %}
      <h2 class=\"title stores-title\">{{ text_store }}</h2>
      <div class=\"panel-group other-stores\" id=\"accordion\">
        {% for location in locations %}
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location{{ location.location_id }}\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">{{ location.name }} <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location{{ location.location_id }}\">
            <div class=\"panel-body\">
              <div class=\"row store-data\">
                {% if location.image %}
                <div class=\"col-sm-3 store-image\"><img src=\"{{ location.image }}\" alt=\"{{ location.name }}\" title=\"{{ location.name }}\" class=\"img-thumbnail\" /></div>
                {% endif %}
                <div class=\"col-sm-3 store-address\"><strong>{{ location.name }}</strong><br />
                  <address>
                  {{ location.address }}
                  </address>
                  {% if location.geocode %}
                  <a href=\"https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
                  {% endif %}
                </div>
                <div class=\"col-sm-3 store-tel\"> <strong>{{ text_telephone }}</strong><br>
                  {{ location.telephone }}<br />
                  <br />
                  <div class=\"store-fax\">
                  {% if location.fax %}
                  <strong>{{ text_fax }}</strong><br>
                  {{ location.fax }}
                  {% endif %}
                  </div>
                </div>
                <div class=\"col-sm-3 store-info\">
                  {% if location.open %}
                  <div class=\"store-hours\">
                  <strong>{{ text_open }}</strong><br />
                  {{ location.open }}<br />
                  </div>
                  <br />
                  {% endif %}
                  <div class=\"store-comment\">
                  {% if location.comment %}
                  <strong>{{ text_comment }}</strong><br />
                  {{ location.comment }}
                  {% endif %}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {% endfor %}
      </div>
      {% endif %}
      {% if j3.settings.get('contactFormStatus') %}
      <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>{{ text_contact }}</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" class=\"form-control\" />
              {% if error_name %}
              <div class=\"text-danger\">{{ error_name }}</div>
              {% endif %}
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" class=\"form-control\" />
              {% if error_email %}
              <div class=\"text-danger\">{{ error_email }}</div>
              {% endif %}
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">{{ entry_enquiry }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">{{ enquiry }}</textarea>
              {% if error_enquiry %}
              <div class=\"text-danger\">{{ error_enquiry }}</div>
              {% endif %}
            </div>
          </div>
          {{ captcha }}
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <button class=\"btn btn-primary\" type=\"submit\"><span>{{ button_submit }}</span></button>
          </div>
        </div>
      </form>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "journal3/template/information/contact.twig", "");
    }
}
