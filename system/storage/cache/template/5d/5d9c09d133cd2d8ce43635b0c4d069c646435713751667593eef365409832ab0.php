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

/* journal3/template/journal3/module/master_slider.twig */
class __TwigTemplate_6b3fe730506600bda708311ba906fdc7f5b315d27fac8998fa9cdfdc3c116191 extends \Twig\Template
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
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 1);
        echo "\" style=\"background-image:url('";
        echo ($context["first_image"] ?? null);
        echo "')\">
  <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
  ";
        // line 3
        if ((($context["staticText"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["staticTextLink"] ?? null), "href", [], "any", false, false, false, 3))) {
            // line 4
            echo "    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["staticTextLink"] ?? null), "href", [], "any", false, false, false, 4);
            echo "\" class=\"slider-static-text static-text-1\"><span>";
            echo ($context["staticText"] ?? null);
            echo "</span></a>
  ";
        } elseif (        // line 5
($context["staticText"] ?? null)) {
            // line 6
            echo "    <div class=\"slider-static-text static-text-1\"><span>";
            echo ($context["staticText"] ?? null);
            echo "</span></div>
  ";
        }
        // line 8
        echo "  ";
        if ((($context["static2Text"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["static2TextLink"] ?? null), "href", [], "any", false, false, false, 8))) {
            // line 9
            echo "    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["static2TextLink"] ?? null), "href", [], "any", false, false, false, 9);
            echo "\" class=\"slider-static-text static-text-2\"><span>";
            echo ($context["static2Text"] ?? null);
            echo "</span></a>
  ";
        } elseif (        // line 10
($context["static2Text"] ?? null)) {
            // line 11
            echo "    <div class=\"slider-static-text static-text-2\"><span>";
            echo ($context["static2Text"] ?? null);
            echo "</span></div>
  ";
        }
        // line 13
        echo "  <img src=\"";
        echo ($context["first_image"] ?? null);
        echo "\" ";
        if (($context["first_image2x"] ?? null)) {
            echo "srcset=\"";
            echo ($context["first_image"] ?? null);
            echo " 1x, ";
            echo ($context["first_image2x"] ?? null);
            echo " 2x\"";
        }
        echo " alt=\"";
        echo ($context["first_alt"] ?? null);
        echo "\" width=\"";
        echo ($context["width"] ?? null);
        echo "\" height=\"";
        echo ($context["height"] ?? null);
        echo "\" />
  ";
        // line 15
        echo "  <div class=\"master-slider ms-skin-minimal\" data-options='";
        echo json_encode(($context["options"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
        echo "' ";
        if (($context["parallaxMode"] ?? null)) {
            echo "data-parallax=\"";
            echo ($context["parallax"] ?? null);
            echo "\"";
        }
        echo ">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "      <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 17)], "method", false, false, false, 17);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "delay", [], "any", false, false, false, 17)) {
                echo "data-delay=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "delay", [], "any", false, false, false, 17);
                echo "\"";
            }
            echo ">
        ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 18) && ($context["lazyLoad"] ?? null))) {
                // line 19
                echo "          <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 19)) {
                    echo " data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 19);
                    echo " 2x\" ";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 19);
                echo "\" width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\" class=\"lazyload\"/>
        ";
            } else {
                // line 21
                echo "          <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 21)) {
                    echo " srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 21);
                    echo " 2x\" ";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 21);
                echo "\" width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\"/>
        ";
            }
            // line 23
            echo "
        ";
            // line 24
            if ((($context["thumbnails"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 24))) {
                // line 25
                echo "          <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 25);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 25)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 25);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 25);
                    echo " 2x\"";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 25);
                echo "\" class=\"ms-thumb\"/>
        ";
            }
            // line 27
            echo "
        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 28), "href", [], "any", false, false, false, 28)) {
                // line 29
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 29), "href", [], "any", false, false, false, 29);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 29)], "method", false, false, false, 29);
                echo "></a>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 32) == "video")) {
                // line 33
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "videoType", [], "any", false, false, false, 33) == "html5")) {
                    // line 34
                    echo "            <video autoplay playsinline muted data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 34);
                    echo "\" class=\"lazyload\"></video>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 35
$context["item"], "videoType", [], "any", false, false, false, 35) == "youtube")) {
                    // line 36
                    echo "            <a href=\"https://www.youtube.com/embed/";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 36);
                    echo "?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1\" data-type=\"video\"></a>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 37
$context["item"], "videoType", [], "any", false, false, false, 37) == "vimeo")) {
                    // line 38
                    echo "            <a href=\"https://player.vimeo.com/video/";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 38);
                    echo "\" data-type=\"video\"></a>
          ";
                }
                // line 40
                echo "        ";
            }
            // line 41
            echo "
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 43
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 43) == "text")) {
                    // line 44
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 44), " ");
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 44);
                    echo "</div>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 45
$context["subitem"], "type", [], "any", false, false, false, 45) == "hotspot")) {
                    // line 46
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 46)], "method", false, false, false, 46);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 46), " ");
                    echo "><div class=\"product-tt\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 46);
                    echo "</div></div>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 47
$context["subitem"], "type", [], "any", false, false, false, 47) == "shape")) {
                    // line 48
                    echo "            <img class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 48), " ");
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 48);
                    echo "\"/>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 49
$context["subitem"], "type", [], "any", false, false, false, 49) == "button")) {
                    // line 50
                    echo "            <a class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 50)], "method", false, false, false, 50);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 50), " ");
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 50), "href", [], "any", false, false, false, 50)) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 50), "href", [], "any", false, false, false, 50);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 50)], "method", false, false, false, 50);
                        echo " ";
                    }
                    echo "><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 50);
                    echo "</span></a>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 51
$context["subitem"], "type", [], "any", false, false, false, 51) == "image")) {
                    // line 52
                    echo "            <img class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 52)], "method", false, false, false, 52);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 52), " ");
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 52);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 52);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "width", [], "any", false, false, false, 52);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "height", [], "any", false, false, false, 52);
                    echo "\"/>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 53
$context["subitem"], "type", [], "any", false, false, false, 53) == "video")) {
                    // line 54
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 54), " ");
                    echo ">
              ";
                    // line 55
                    if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "videoType", [], "any", false, false, false, 55) == "html5")) {
                        // line 56
                        echo "                <video autoplay playsinline muted controls data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 56);
                        echo "\"></video>
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 57
$context["subitem"], "videoType", [], "any", false, false, false, 57) == "youtube")) {
                        // line 58
                        echo "                <iframe src=\"https://www.youtube.com/embed/";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 58);
                        echo "?hd=1&wmode=opaque&controls=1&showinfo=0\"></iframe>
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 59
$context["subitem"], "videoType", [], "any", false, false, false, 59) == "vimeo")) {
                        // line 60
                        echo "                <iframe src=\"https://player.vimeo.com/video/";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 60);
                        echo "\"></iframe>
              ";
                    }
                    // line 62
                    echo "            </div>
          ";
                }
                // line 64
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/master_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 67,  352 => 65,  346 => 64,  342 => 62,  336 => 60,  334 => 59,  329 => 58,  327 => 57,  322 => 56,  320 => 55,  313 => 54,  311 => 53,  296 => 52,  294 => 51,  277 => 50,  275 => 49,  266 => 48,  264 => 47,  255 => 46,  253 => 45,  244 => 44,  241 => 43,  237 => 42,  234 => 41,  231 => 40,  225 => 38,  223 => 37,  218 => 36,  216 => 35,  211 => 34,  208 => 33,  206 => 32,  203 => 31,  195 => 29,  193 => 28,  190 => 27,  174 => 25,  172 => 24,  169 => 23,  149 => 21,  127 => 19,  125 => 18,  114 => 17,  110 => 16,  99 => 15,  80 => 13,  74 => 11,  72 => 10,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  47 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ j3.classes(classes) }}\" style=\"background-image:url('{{ first_image }}')\">
  <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
  {% if staticText and staticTextLink.href %}
    <a href=\"{{ staticTextLink.href }}\" class=\"slider-static-text static-text-1\"><span>{{ staticText }}</span></a>
  {% elseif staticText %}
    <div class=\"slider-static-text static-text-1\"><span>{{ staticText }}</span></div>
  {% endif %}
  {% if static2Text and static2TextLink.href %}
    <a href=\"{{ static2TextLink.href }}\" class=\"slider-static-text static-text-2\"><span>{{ static2Text }}</span></a>
  {% elseif static2Text %}
    <div class=\"slider-static-text static-text-2\"><span>{{ static2Text }}</span></div>
  {% endif %}
  <img src=\"{{ first_image }}\" {% if first_image2x %}srcset=\"{{ first_image }} 1x, {{ first_image2x }} 2x\"{% endif %} alt=\"{{ first_alt }}\" width=\"{{ width }}\" height=\"{{ height }}\" />
  {#<img src=\"{{ first_image }}\" alt=\"{{ first_alt }}\" class=\"img-2\">#}
  <div class=\"master-slider ms-skin-minimal\" data-options='{{ options|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if parallaxMode %}data-parallax=\"{{ parallax }}\"{% endif %}>
    {% for item in items %}
      <div class=\"{{ j3.classes(item.classes) }}\" {% if item.delay %}data-delay=\"{{ item.delay }}\"{% endif %}>
        {% if j3.settings.get('performanceLazyLoadImagesStatus') and lazyLoad %}
          <img src=\"{{ dummy_image }}\" data-src=\"{{ item.image }}\" {% if item.image2x %} data-srcset=\"{{ item.image }} 1x, {{ item.image2x }} 2x\" {% endif %} alt=\"{{ item.alt }}\" width=\"{{ width }}\" height=\"{{ height }}\" class=\"lazyload\"/>
        {% else %}
          <img src=\"{{ item.image }}\" {% if item.image2x %} srcset=\"{{ item.image }} 1x, {{ item.image2x }} 2x\" {% endif %} alt=\"{{ item.alt }}\" width=\"{{ width }}\" height=\"{{ height }}\"/>
        {% endif %}

        {% if thumbnails and item.thumb %}
          <img src=\"{{ item.thumb }}\" {% if item.thumb2x %}srcset=\"{{ item.thumb }} 1x, {{ item.thumb2x }} 2x\"{% endif %} alt=\"{{ item.alt }}\" class=\"ms-thumb\"/>
        {% endif %}

        {% if item.link.href %}
          <a href=\"{{ item.link.href }}\" {{ j3.linkAttrs(item.link) }}></a>
        {% endif %}

        {% if item.type == 'video' %}
          {% if item.videoType == 'html5' %}
            <video autoplay playsinline muted data-src=\"{{ item.videoSrc }}\" class=\"lazyload\"></video>
          {% elseif item.videoType == 'youtube' %}
            <a href=\"https://www.youtube.com/embed/{{ item.videoSrc }}?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1\" data-type=\"video\"></a>
          {% elseif item.videoType == 'vimeo' %}
            <a href=\"https://player.vimeo.com/video/{{ item.videoSrc }}\" data-type=\"video\"></a>
          {% endif %}
        {% endif %}

        {% for subitem in item.items %}
          {% if subitem.type == 'text' %}
            <div class=\"{{ j3.classes(subitem.classes) }}\" {{ subitem.data|join(' ') }}>{{ subitem.text }}</div>
          {% elseif subitem.type == 'hotspot' %}
            <div class=\"{{ j3.classes(subitem.classes) }}\" {{ subitem.data|join(' ') }}><div class=\"product-tt\">{{ subitem.text }}</div></div>
          {% elseif subitem.type == 'shape' %}
            <img class=\"{{ j3.classes(subitem.classes) }}\" {{ subitem.data|join(' ') }} src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" alt=\"{{ subitem.alt }}\"/>
          {% elseif subitem.type == 'button' %}
            <a class=\"{{ j3.classes(subitem.classes) }}\" {{ subitem.data|join(' ') }} {% if subitem.link.href %}href=\"{{ subitem.link.href }}\" {{ j3.linkAttrs(subitem.link) }} {% endif %}><span>{{ subitem.text }}</span></a>
          {% elseif subitem.type == 'image' %}
            <img class=\"{{ j3.classes(subitem.classes) }}\" {{ subitem.data|join(' ') }} src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"{{ subitem.image }}\" alt=\"{{ subitem.alt }}\" width=\"{{ subitem.width }}\" height=\"{{ subitem.height }}\"/>
          {% elseif subitem.type == 'video' %}
            <div class=\"{{ j3.classes(subitem.classes) }}\" {{ subitem.data|join(' ') }}>
              {% if subitem.videoType == 'html5' %}
                <video autoplay playsinline muted controls data-src=\"{{ subitem.videoSrc }}\"></video>
              {% elseif subitem.videoType == 'youtube' %}
                <iframe src=\"https://www.youtube.com/embed/{{ subitem.videoSrc }}?hd=1&wmode=opaque&controls=1&showinfo=0\"></iframe>
              {% elseif subitem.videoType == 'vimeo' %}
                <iframe src=\"https://player.vimeo.com/video/{{ subitem.videoSrc }}\"></iframe>
              {% endif %}
            </div>
          {% endif %}
        {% endfor %}
      </div>
    {% endfor %}
  </div>
</div>
", "journal3/template/journal3/module/master_slider.twig", "");
    }
}
