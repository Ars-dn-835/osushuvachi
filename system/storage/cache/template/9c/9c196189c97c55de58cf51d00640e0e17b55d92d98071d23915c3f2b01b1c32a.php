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

/* default/template/account/simpleregister.twig */
class __TwigTemplate_dd320cabd9eaea3f2dcbab18bcfbe7968d4ba3cad9c72372bf291bd705159cea extends \Twig\Template
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
        if ((( !($context["ajax"] ?? null) &&  !($context["popup"] ?? null)) &&  !($context["as_module"] ?? null))) {
            // line 2
            $context["simple_page"] = "simpleregister";
            // line 3
            $this->loadTemplate(($context["simple_header"] ?? null), "default/template/account/simpleregister.twig", 3)->display($context);
            // line 4
            echo "<div class=\"simple-content\">
";
        }
        // line 6
        echo "    ";
        if (( !($context["ajax"] ?? null) || (($context["ajax"] ?? null) && ($context["popup"] ?? null)))) {
            // line 7
            echo "    <script type=\"text/javascript\">
        ";
            // line 8
            if (($context["popup"] ?? null)) {
                echo " 
            var simpleScriptsInterval = window.setInterval(function(){
                if (typeof jQuery !== 'undefined' && jQuery.isReady) {
                    window.clearInterval(simpleScriptsInterval);

                    if (typeof Simplepage !== \"function\") {
                        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["simple_scripts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                    // line 15
                    echo "                            \$(\"head\").append('<script src=\"' + '";
                    echo $context["script"];
                    echo "' + '\"></' + 'script>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["simple_styles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                    // line 19
                    echo "                            \$(\"head\").append('<link href=\"' + '";
                    echo $context["style"];
                    echo "' + '\" rel=\"stylesheet\"/>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                         
                    }
                }
            },0);
        ";
            }
            // line 25
            echo "
        var startSimpleInterval = window.setInterval(function(){
            if (typeof jQuery !== 'undefined' && typeof Simplepage === \"function\" && jQuery.isReady) {
                window.clearInterval(startSimpleInterval);
                
                var simplepage = new Simplepage({
                    additionalParams: \"";
            // line 31
            echo ($context["additional_params"] ?? null);
            echo "\",
                    additionalPath: \"";
            // line 32
            echo ($context["additional_path"] ?? null);
            echo "\",
                    mainUrl: \"";
            // line 33
            echo ($context["action"] ?? null);
            echo "\",
                    mainContainer: \"#simplepage_form\",
                    useAutocomplete: ";
            // line 35
            echo ((($context["use_autocomplete"] ?? null)) ? (1) : (0));
            echo ",
                    scrollToError: ";
            // line 36
            echo ((($context["scroll_to_error"] ?? null)) ? (1) : (0));
            echo ",
                    notificationDefault: ";
            // line 37
            echo ((($context["notification_default"] ?? null)) ? (1) : (0));
            echo ",
                    notificationToasts: ";
            // line 38
            echo ((($context["notification_toasts"] ?? null)) ? (1) : (0));
            echo ",
                    notificationCheckForm: ";
            // line 39
            echo ((($context["notification_check_form"] ?? null)) ? (1) : (0));
            echo ",
                    notificationCheckFormText: \"";
            // line 40
            echo ($context["notification_check_form_text"] ?? null);
            echo "\",
                    languageCode: \"";
            // line 41
            echo ($context["language_code"] ?? null);
            echo "\",
                    javascriptCallback: function() { ";
            // line 42
            echo ($context["javascript_callback"] ?? null);
            echo " }
                });

                if (typeof toastr !== 'undefined') {
                    toastr.options.positionClass = \"";
            // line 46
            echo ((($context["notification_position"] ?? null)) ? (($context["notification_position"] ?? null)) : ("toast-top-right"));
            echo "\";
                    toastr.options.timeOut = \"";
            // line 47
            echo ((($context["notification_timeout"] ?? null)) ? (($context["notification_timeout"] ?? null)) : ("5000"));
            echo "\";
                    toastr.options.progressBar = true;
                }

                simplepage.init();
            }
        },0);
    </script>
    ";
        }
        // line 56
        echo "    <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"simplepage_form\">
        <div class=\"simpleregister\" id=\"simpleregister\">
            <p class=\"simpleregister-have-account\">";
        // line 58
        echo ($context["text_account_already"] ?? null);
        echo "</p>
            ";
        // line 59
        if (($context["error_warning"] ?? null)) {
            // line 60
            echo "            <div class=\"warning alert alert-danger\">";
            echo ($context["error_warning"] ?? null);
            echo "</div>
            ";
        }
        // line 62
        echo "            <div class=\"simpleregister-block-content\">
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 64
            echo "                  ";
            echo $context["row"];
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hidden_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 67
            echo "                  ";
            echo $context["row"];
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </div>

            ";
        // line 71
        if (($context["display_agreement_checkbox"] ?? null)) {
            // line 72
            echo "                <div class=\"alert alert-danger simpleregister-warning-block\" id=\"agreement_warning\" ";
            if (($context["error_agreement"] ?? null)) {
                echo "data-error=\"true\"";
            } else {
                echo "style=\"display:none;\"";
            }
            echo ">
                    <div class=\"agreement_all\">
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["error_warning_agreement"] ?? null));
            foreach ($context['_seq'] as $context["agreement_id"] => $context["warning_agreement"]) {
                // line 75
                echo "                            <div class=\"agreement_";
                echo $context["agreement_id"];
                echo "\">";
                echo $context["warning_agreement"];
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['warning_agreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    </div>                    
                </div>
            ";
        }
        // line 79
        echo "  

            <div class=\"simpleregister-button-block buttons\">
                <div class=\"simpleregister-button-right\">
                    ";
        // line 83
        if (($context["display_agreement_checkbox"] ?? null)) {
            // line 84
            echo "                        <span id=\"agreement_checkbox\">
                            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["text_agreements"] ?? null));
            foreach ($context['_seq'] as $context["agreement_id"] => $context["text_agreement"]) {
                // line 86
                echo "                                <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"";
                echo $context["agreement_id"];
                echo "\" ";
                echo ((twig_in_filter($context["agreement_id"], ($context["agreements"] ?? null))) ? ("checked=\"checked\"") : (""));
                echo " />";
                echo $context["text_agreement"];
                echo "</label></div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['text_agreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        </span>
                    ";
        }
        // line 90
        echo "
                    <a class=\"button btn-primary button_oc btn\" data-onclick=\"submit\" id=\"simpleregister_button_confirm\"><span>";
        // line 91
        echo ($context["button_continue"] ?? null);
        echo "</span></a>
                </div>
            </div>
        </div>
        ";
        // line 95
        if (($context["redirect"] ?? null)) {
            // line 96
            echo "            <input type=\"hidden\" id=\"simple_redirect_url\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\">
        ";
        }
        // line 98
        echo "    </form>
";
        // line 99
        if ((( !($context["ajax"] ?? null) &&  !($context["popup"] ?? null)) &&  !($context["as_module"] ?? null))) {
            // line 100
            echo "</div>
";
            // line 101
            $this->loadTemplate(($context["simple_footer"] ?? null), "default/template/account/simpleregister.twig", 101)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "default/template/account/simpleregister.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 101,  309 => 100,  307 => 99,  304 => 98,  298 => 96,  296 => 95,  289 => 91,  286 => 90,  282 => 88,  269 => 86,  265 => 85,  262 => 84,  260 => 83,  254 => 79,  249 => 77,  238 => 75,  234 => 74,  224 => 72,  222 => 71,  218 => 69,  209 => 67,  204 => 66,  195 => 64,  191 => 63,  188 => 62,  182 => 60,  180 => 59,  176 => 58,  170 => 56,  158 => 47,  154 => 46,  147 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 33,  110 => 32,  106 => 31,  98 => 25,  91 => 20,  82 => 19,  78 => 18,  75 => 17,  66 => 15,  62 => 14,  53 => 8,  50 => 7,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not ajax and not popup and not as_module %}
{% set simple_page = 'simpleregister' %}
{% include simple_header %}
<div class=\"simple-content\">
{% endif %}
    {% if not ajax or (ajax and popup) %}
    <script type=\"text/javascript\">
        {% if popup %} 
            var simpleScriptsInterval = window.setInterval(function(){
                if (typeof jQuery !== 'undefined' && jQuery.isReady) {
                    window.clearInterval(simpleScriptsInterval);

                    if (typeof Simplepage !== \"function\") {
                        {% for script in simple_scripts %}
                            \$(\"head\").append('<script src=\"' + '{{ script }}' + '\"></' + 'script>');
                        {% endfor %}

                        {% for style in simple_styles %}
                            \$(\"head\").append('<link href=\"' + '{{ style }}' + '\" rel=\"stylesheet\"/>');
                        {% endfor %}                         
                    }
                }
            },0);
        {% endif %}

        var startSimpleInterval = window.setInterval(function(){
            if (typeof jQuery !== 'undefined' && typeof Simplepage === \"function\" && jQuery.isReady) {
                window.clearInterval(startSimpleInterval);
                
                var simplepage = new Simplepage({
                    additionalParams: \"{{ additional_params }}\",
                    additionalPath: \"{{ additional_path }}\",
                    mainUrl: \"{{ action }}\",
                    mainContainer: \"#simplepage_form\",
                    useAutocomplete: {{ use_autocomplete ? 1 : 0 }},
                    scrollToError: {{ scroll_to_error ? 1 : 0 }},
                    notificationDefault: {{ notification_default ? 1 : 0 }},
                    notificationToasts: {{ notification_toasts ? 1 : 0 }},
                    notificationCheckForm: {{ notification_check_form ? 1 : 0 }},
                    notificationCheckFormText: \"{{ notification_check_form_text }}\",
                    languageCode: \"{{ language_code }}\",
                    javascriptCallback: function() { {{ javascript_callback }} }
                });

                if (typeof toastr !== 'undefined') {
                    toastr.options.positionClass = \"{{ notification_position ? notification_position : 'toast-top-right' }}\";
                    toastr.options.timeOut = \"{{ notification_timeout ? notification_timeout : '5000' }}\";
                    toastr.options.progressBar = true;
                }

                simplepage.init();
            }
        },0);
    </script>
    {% endif %}
    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"simplepage_form\">
        <div class=\"simpleregister\" id=\"simpleregister\">
            <p class=\"simpleregister-have-account\">{{ text_account_already }}</p>
            {% if error_warning %}
            <div class=\"warning alert alert-danger\">{{ error_warning }}</div>
            {% endif %}
            <div class=\"simpleregister-block-content\">
                {% for row in rows %}
                  {{ row }}
                {% endfor %}
                {% for row in hidden_rows %}
                  {{ row }}
                {% endfor %}
            </div>

            {% if display_agreement_checkbox %}
                <div class=\"alert alert-danger simpleregister-warning-block\" id=\"agreement_warning\" {% if error_agreement %}data-error=\"true\"{% else %}style=\"display:none;\"{% endif %}>
                    <div class=\"agreement_all\">
                        {% for agreement_id, warning_agreement in error_warning_agreement %}
                            <div class=\"agreement_{{ agreement_id }}\">{{ warning_agreement }}</div>
                        {% endfor %}
                    </div>                    
                </div>
            {% endif %}  

            <div class=\"simpleregister-button-block buttons\">
                <div class=\"simpleregister-button-right\">
                    {% if (display_agreement_checkbox) %}
                        <span id=\"agreement_checkbox\">
                            {% for agreement_id, text_agreement in text_agreements %}
                                <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"{{ agreement_id }}\" {{ agreement_id in agreements ? 'checked=\"checked\"' : '' }} />{{ text_agreement }}</label></div>
                            {% endfor %}
                        </span>
                    {% endif %}

                    <a class=\"button btn-primary button_oc btn\" data-onclick=\"submit\" id=\"simpleregister_button_confirm\"><span>{{ button_continue }}</span></a>
                </div>
            </div>
        </div>
        {% if redirect %}
            <input type=\"hidden\" id=\"simple_redirect_url\" value=\"{{ redirect }}\">
        {% endif %}
    </form>
{% if not ajax and not popup and not as_module %}
</div>
{% include simple_footer %}
{% endif %}", "default/template/account/simpleregister.twig", "");
    }
}
