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

/* default/template/extension/module/youtube_product_video.twig */
class __TwigTemplate_3ee95cea6619460398645845773a55711750c1d51411154044d90453b14d701b extends \Twig\Template
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
        if (($context["youtube_video_code"] ?? null)) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_output_type", [], "any", false, false, false, 2) == "button")) {
                // line 3
                echo "        <style>
            #youtube_product_video_container {
                position: relative;
                padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
                padding-top: 30px;
                height: 0;
                overflow: hidden;
            }
            #youtube_product_video_container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .btn-danger.video {
                background-image: url(\"https://osushuvachi.webfun.com.ua/image/cache/catalog/Rectangle%201186-80x80w.jpg\");
                width: 80px;
                height: 80px;
            }
        </style>
        <div class=\"modal fade\" tabindex=\"-1\" id=\"youtube_product_video_modal\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h3 class=\"modal-title\">";
                // line 29
                echo ($context["youtube_product_video_modal_title"] ?? null);
                echo "</h3>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"youtube_product_video_container\"><iframe src=\"https://www.youtube.com/embed/";
                // line 32
                echo ($context["youtube_video_code"] ?? null);
                echo "?enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"pull-right\">
                            <button class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-close\"></i> ";
                // line 36
                echo ($context["youtube_product_video_button_close_text"] ?? null);
                echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function(\$){\$(document).ready(function(){
                var youtube_video_button_html = '<div class=\"text-";
                // line 44
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_align", [], "any", false, false, false, 44);
                echo "\"><button class=\"btn btn-danger video\" data-toggle=\"modal\" data-target=\"#youtube_product_video_modal\"><i class=\"fa fa-play\"></i></button></div>';
                \$('";
                // line 45
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_selector", [], "any", false, false, false, 45);
                echo "').";
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_position", [], "any", false, false, false, 45);
                echo "(youtube_video_button_html);

                \$('#youtube_product_video_modal').on('hidden.bs.modal', function () {
                    var iframe = document.querySelector('#youtube_product_video_container iframe').contentWindow;
                    iframe.postMessage('{\"event\":\"command\",\"func\":\"pauseVideo\",\"args\":\"\"}', '*');
                });

            });})(jQuery);
        </script>
    ";
            }
            // line 55
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_output_type", [], "any", false, false, false, 55) == "tab")) {
                // line 56
                echo "        <style>
            #youtube_product_video_container {
                position: relative;
                padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
                padding-top: 30px;
                height: 0;
                overflow: hidden;
            }
            #youtube_product_video_container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        <script>
            (function(\$){\$(document).ready(function(){

                var youtube_video_tab_title = '<li><a href=\"#youtube_video_tab_content\" data-toggle=\"tab\">";
                // line 75
                echo ($context["youtube_product_video_tab_title"] ?? null);
                echo "</a></li>';

                var youtube_video_tab_content = '<div class=\"tab-pane\" id=\"youtube_video_tab_content\"><div id=\"youtube_product_video_container\"><iframe src=\"https://www.youtube.com/embed/";
                // line 77
                echo ($context["youtube_video_code"] ?? null);
                echo "?enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div></div>';

                \$('";
                // line 79
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_tab_selector", [], "any", false, false, false, 79);
                echo "').";
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_tab_position", [], "any", false, false, false, 79);
                echo "(youtube_video_tab_title);

                \$('";
                // line 81
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_tab_content_selector", [], "any", false, false, false, 81);
                echo "').after(youtube_video_tab_content);

            });})(jQuery);
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/youtube_product_video.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 81,  147 => 79,  142 => 77,  137 => 75,  116 => 56,  113 => 55,  98 => 45,  94 => 44,  83 => 36,  76 => 32,  70 => 29,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if youtube_video_code %}
    {% if youtube_product_video_setting.youtube_product_video_output_type == 'button' %}
        <style>
            #youtube_product_video_container {
                position: relative;
                padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
                padding-top: 30px;
                height: 0;
                overflow: hidden;
            }
            #youtube_product_video_container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .btn-danger.video {
                background-image: url(\"https://osushuvachi.webfun.com.ua/image/cache/catalog/Rectangle%201186-80x80w.jpg\");
                width: 80px;
                height: 80px;
            }
        </style>
        <div class=\"modal fade\" tabindex=\"-1\" id=\"youtube_product_video_modal\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h3 class=\"modal-title\">{{ youtube_product_video_modal_title }}</h3>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"youtube_product_video_container\"><iframe src=\"https://www.youtube.com/embed/{{ youtube_video_code }}?enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"pull-right\">
                            <button class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-close\"></i> {{ youtube_product_video_button_close_text }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function(\$){\$(document).ready(function(){
                var youtube_video_button_html = '<div class=\"text-{{ youtube_product_video_setting.youtube_product_video_align }}\"><button class=\"btn btn-danger video\" data-toggle=\"modal\" data-target=\"#youtube_product_video_modal\"><i class=\"fa fa-play\"></i></button></div>';
                \$('{{ youtube_product_video_setting.youtube_product_video_selector }}').{{ youtube_product_video_setting.youtube_product_video_position }}(youtube_video_button_html);

                \$('#youtube_product_video_modal').on('hidden.bs.modal', function () {
                    var iframe = document.querySelector('#youtube_product_video_container iframe').contentWindow;
                    iframe.postMessage('{\"event\":\"command\",\"func\":\"pauseVideo\",\"args\":\"\"}', '*');
                });

            });})(jQuery);
        </script>
    {% endif %}
    {% if youtube_product_video_setting.youtube_product_video_output_type == 'tab' %}
        <style>
            #youtube_product_video_container {
                position: relative;
                padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
                padding-top: 30px;
                height: 0;
                overflow: hidden;
            }
            #youtube_product_video_container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        <script>
            (function(\$){\$(document).ready(function(){

                var youtube_video_tab_title = '<li><a href=\"#youtube_video_tab_content\" data-toggle=\"tab\">{{ youtube_product_video_tab_title }}</a></li>';

                var youtube_video_tab_content = '<div class=\"tab-pane\" id=\"youtube_video_tab_content\"><div id=\"youtube_product_video_container\"><iframe src=\"https://www.youtube.com/embed/{{ youtube_video_code }}?enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div></div>';

                \$('{{ youtube_product_video_setting.youtube_product_video_tab_selector }}').{{ youtube_product_video_setting.youtube_product_video_tab_position }}(youtube_video_tab_title);

                \$('{{ youtube_product_video_setting.youtube_product_video_tab_content_selector }}').after(youtube_video_tab_content);

            });})(jQuery);
        </script>
    {% endif %}
{% endif %}", "default/template/extension/module/youtube_product_video.twig", "");
    }
}
