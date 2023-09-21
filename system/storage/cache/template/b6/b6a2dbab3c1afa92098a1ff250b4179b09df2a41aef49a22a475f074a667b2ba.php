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

/* journal3/template/product/product.twig */
class __TwigTemplate_8cd13cc3828ff1a8f930c4642545a1262ea1f759cd592e9a9bec9f99d6daf108 extends \Twig\Template
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
        $context["stylePrefix"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1), "isPopup", [0 => "quickview"], "method", false, false, false, 1)) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["optionPrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionPrice")], "method", false, false, false, 2);
        // line 3
        $context["direction"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 3) == "left") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 3) == "right"))) ? ("vertical") : ("horizontal"));
        // line 4
        $context["carousel"] = ((($context["direction"] ?? null) == "vertical") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesCarousel")], "method", false, false, false, 4));
        // line 5
        $context["carouselOptions"] = ["slidesPerView" => "auto", "spaceBetween" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["j3"] ?? null), "settings", [], "any", false, true, false, 7), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, true, false, 7), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", false, false, false, 7), 0)) : (0)), "direction" =>         // line 8
($context["direction"] ?? null)];
        // line 10
        $context["galleryOptions"] = ["thumbWidth" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "image_dimensions_popup_thumb.width"], "method", false, false, false, 11), "thumbConHeight" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["j3"] ?? null), "settings", [], "any", false, false, false, 12), "get", [0 => "image_dimensions_popup_thumb.height"], "method", false, false, false, 12), "addClass" => "lg-product-images", "mode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryMode")], "method", false, false, false, 14), "download" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryDownload")], "method", false, false, false, 15), "fullScreen" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["j3"] ?? null), "settings", [], "any", false, false, false, 16), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryFullScreen")], "method", false, false, false, 16)];
        // line 18
        $context["quickviewExpand"] = ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 18) || (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 18) > 0) && ($context["description"] ?? null)) && (twig_length_filter($this->env, ($context["description"] ?? null)) <= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 18))))) ? ("no-expand") : (""));
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isDescriptionEmpty", [0 => ($context["description"] ?? null)], "method", false, false, false, 19)) {
            // line 20
            echo "\t";
            $context["description"] = "";
        }
        // line 22
        echo ($context["header"] ?? null);
        echo "
";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 23), "isPopup", [], "method", false, false, false, 23)) {
            // line 24
            echo "\t<ul class=\"breadcrumb\">
\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 26
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
                echo "</a>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t</ul>
\t";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "pageTitlePosition"], "method", false, false, false, 31) == "top")) {
                // line 32
                echo "\t\t<h1 class=\"title page-title\">
\t\t\t<span>";
                // line 33
                echo ($context["heading_title"] ?? null);
                echo "</span>
\t\t</h1>
\t";
            }
            // line 36
            echo "\t";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 36);
            echo "
\t<style>
\t\t.content-checket {
\t\t\tpadding: 0 !important;
\t\t}
\t</style>
<div id=\"product-product\" class=\"container\">
\t<div class=\"row\">";
            // line 43
            echo ($context["column_left"] ?? null);
            echo "
\t\t<div id=\"content\" class=\"content-checket ";
            // line 44
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t";
        }
        // line 46
        echo "\t\t\t";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t";
        // line 47
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 47), "isPopup", [0 => "options"], "method", false, false, false, 47)) {
            // line 48
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "pageTitlePosition"], "method", false, false, false, 48) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 48), "isPopup", [0 => "quickview"], "method", false, false, false, 48))) {
                // line 49
                echo "\t\t\t\t\t<h1 class=\"title page-title\">";
                echo ($context["heading_title"] ?? null);
                echo "</h1>
\t\t\t\t";
            }
            // line 51
            echo "\t\t\t";
        }
        // line 52
        echo "\t\t\t";
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (        // line 53
($context["product_quantity"] ?? null) <= 0), "has-countdown" =>         // line 54
($context["date_end"] ?? null), "has-zero-price" =>  !        // line 55
($context["product_price_value"] ?? null), "has-extra-button" =>         // line 56
($context["product_extra_buttons"] ?? null)]], "method", false, false, false, 52) . " ") .         // line 57
($context["product_exclude_classes"] ?? null));
        // line 58
        echo "\t\t\t<div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
\t\t\t\t";
        // line 59
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 59), "isPopup", [0 => "options"], "method", false, false, false, 59)) {
            // line 60
            echo "\t\t\t\t\t<div class=\"product-left\">
\t\t\t\t\t\t<div class=\"product-image direction-";
            // line 61
            echo ($context["direction"] ?? null);
            echo " position-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 61), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 61);
            echo "\">
\t\t\t\t\t\t\t<div class=\"product-image_wishlist\">
\t\t\t\t\t\t\t<a href=\"\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\">
\t\t\t\t\t\t\t\t<path d=\"M15.4501 1.69499C14.5489 0.736312 13.3542 0.151192 12.0819 0.0453197C10.8095 -0.0605522 9.54347 0.319805 8.51236 1.11769C7.43059 0.264034 6.08414 -0.123053 4.74413 0.0343756C3.40413 0.191804 2.17012 0.882054 1.2906 1.96613C0.41108 3.0502 -0.0486183 4.44756 0.00407713 5.87683C0.0567725 7.3061 0.617948 8.6611 1.5746 9.66897L6.85444 15.2796C7.29657 15.7413 7.89203 16 8.51236 16C9.13269 16 9.72815 15.7413 10.1703 15.2796L15.4501 9.66897C16.4428 8.60932 17 7.17599 17 5.68198C17 4.18796 16.4428 2.75464 15.4501 1.69499ZM14.2513 8.42416L8.97148 14.0258C8.9114 14.0902 8.83989 14.1413 8.76108 14.1761C8.68228 14.211 8.59774 14.2289 8.51236 14.2289C8.42698 14.2289 8.34244 14.211 8.26364 14.1761C8.18483 14.1413 8.11332 14.0902 8.05324 14.0258L2.7734 8.3971C2.10663 7.67398 1.73325 6.7026 1.73325 5.691C1.73325 4.6794 2.10663 3.70802 2.7734 2.9849C3.45286 2.27318 4.36923 1.8741 5.32405 1.8741C6.27886 1.8741 7.19524 2.27318 7.8747 2.9849C7.95374 3.06944 8.04777 3.13655 8.15138 3.18234C8.25498 3.22814 8.36611 3.25172 8.47835 3.25172C8.59059 3.25172 8.70172 3.22814 8.80532 3.18234C8.90893 3.13655 9.00297 3.06944 9.082 2.9849C9.76146 2.27318 10.6778 1.8741 11.6327 1.8741C12.5875 1.8741 13.5038 2.27318 14.1833 2.9849C14.8592 3.69854 15.2449 4.66466 15.2576 5.67628C15.2703 6.68791 14.9091 7.66459 14.2513 8.3971V8.42416Z\"/>
\t\t\t\t\t\t\t\t</svg> </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"swiper main-image\" data-options='";
            // line 67
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 67), "getJs", [], "method", false, false, false, 67), 1 => (($context["stylePrefix"] ?? null) . "ImageCarouselStyle")], "method", false, false, false, 67), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 67), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 67)) && ($context["carousel"] ?? null)) && (($context["direction"] ?? null) == "vertical"))) {
                echo " style=\"width: calc(100% - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 67), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 67);
                echo "px)\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<div class=\"swiper-container\" ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 68)) {
                echo " dir=\"rtl\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t";
            // line 70
            $context["gallery"] = [];
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["gallery"] = twig_array_merge(($context["gallery"] ?? null), [0 => ["src" => twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 72), "thumb" => twig_get_attribute($this->env, $this->source, $context["image"], "galleryThumb", [], "any", false, false, false, 72), "subHtml" => ($context["heading_title"] ?? null)]]);
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\" ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 73), "isPopup", [], "method", false, false, false, 73) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 73), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 73))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73);
                    echo "\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 74);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 74)) {
                    echo " srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 74);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 74);
                    echo " 2x\" ";
                }
                echo " data-largeimg=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 74);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "image_dimensions_thumb.width"], "method", false, false, false, 74);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "image_dimensions_thumb.height"], "method", false, false, false, 74);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-controls\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-buttons\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-next\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"swiper-pagination\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 86
            if (($context["product_labels"] ?? null)) {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-labels\">
\t\t\t\t\t\t\t\t\t\t";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_labels"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 89);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<b>";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 90);
                    echo "</b>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 96
            if (((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 96), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 96))) {
                // line 97
                echo "\t\t\t\t\t\t\t\t";
                if (($context["carousel"] ?? null)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper additional-images\" data-options='";
                    echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if ((($context["direction"] ?? null) == "vertical")) {
                        echo " style=\"width: ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 98), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 98);
                        echo "px\" ";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-container\" ";
                    // line 99
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 99)) {
                        echo " dir=\"rtl\" ";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide-video\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 103);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "video", [], "any", false, false, false, 104);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 104)) {
                            echo " srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 104);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 104);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-buttons\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-next\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-pagination\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"additional-images\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 118
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 118);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 119);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t";
            }
            // line 125
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 126
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 126), "isPopup", [], "method", false, false, false, 126) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 126), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 126))) {
                // line 127
                echo "\t\t\t\t\t\t\t<div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["gallery"] ?? null)));
                echo "' data-options='";
                echo json_encode(($context["galleryOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
\t\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 129), "isPopup", [0 => "options"], "method", false, false, false, 129)) {
                // line 130
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 130)) {
                    // line 131
                    echo "\t\t\t\t\t\t\t\t<div class=\"product-blocks blocks-image\">
\t\t\t\t\t\t\t\t\t";
                    // line 132
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 132));
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t\t\t";
            if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 136), "isPopup", [0 => "quickview"], "method", false, false, false, 136)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 136), "get", [0 => "quickviewDescription"], "method", false, false, false, 136)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 136), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 136) == "image"))) {
                // line 137
                echo "\t\t\t\t\t\t\t<div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"expand-block\">
\t\t\t\t\t\t\t\t\t<div class=\"expand-content\">
\t\t\t\t\t\t\t\t\t\t";
                // line 140
                echo ($context["description"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 142
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 142), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 142)) {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"block-expand-overlay\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"block-expand btn\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t\t";
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 150), "isPopup", [], "method", false, false, false, 150)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 150), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 150) == "image"))) {
                // line 151
                echo "\t\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t\t<span class=\"tags-title\">";
                // line 152
                echo ($context["text_tags"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 154);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 154);
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                    // line 155
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 155)) {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t<b>,</b>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 158
                    echo "\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 163
        echo "\t\t\t\t<div class=\"product-right right-row\">
\t\t\t\t\t<div class=\"right-first\">
\t\t\t\t\t\t<!--//test-->

\t\t\t\t\t\t<div id=\"product\" class=\"product-details\">

\t\t\t\t\t\t\t";
        // line 169
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 169), "get", [0 => "catalogCartStatus"], "method", false, false, false, 169) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 169), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 169)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 169), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 169)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 169), "isPopup", [], "method", false, false, false, 169)))) {
            // line 170
            echo "\t\t\t\t\t\t\t\t<div class=\"button-group-page\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"stepper-group cart-group\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 173
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 173), "get", [0 => "catalogCartStatus"], "method", false, false, false, 173)) {
                // line 174
                echo "

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stepper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stepper-arrow stepper__minus\" v-on:click=\"updateCartItemQuantity(index, -1)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg height=\"1em\" viewbox=\"0 0 320 512\"><path d=\"M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"product-quantity\">";
                // line 180
                echo ($context["entry_qty"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 181
                echo ($context["minimum"] ?? null);
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 182
                echo ($context["product_id"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stepper-arrow stepper__plus\" v-on:click=\"updateCartItemQuantity(index, 1)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg height=\"1em\" viewbox=\"0 0 320 512\"><path d=\"M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 188
                echo ($context["button_cart"] ?? null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 188), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 188) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 188), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 188))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 188), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 188);
                    echo "\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-text\">";
                // line 189
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 192
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 192), "isPopup", [], "method", false, false, false, 192))) {
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"extra-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 194
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_extra_buttons"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 195);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 195), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 195)) . "ButtonDisplay")], "method", false, false, false, 195) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 195), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 195))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 195), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 195);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 195);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 195) == "quickbuy")) {
                        echo " data-quick-buy ";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 195) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 195), "href", [], "any", false, false, false, 195))) {
                        echo " href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 195), "href", [], "any", false, false, false, 195);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 195)], "method", false, false, false, 195);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\" ";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 195);
                    echo "</span>\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-text\">";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 196);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 206
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--//test-->
\t\t\t\t\t\t<div id=\"product\" class=\"product-details\">
\t\t\t\t\t\t\t<div class=\"product-details__top\">
\t\t\t\t\t\t\t\t";
        // line 212
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 212), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 212)) {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-stock ";
            if ((($context["product_quantity"] ?? null) > 0)) {
                echo "in-stock";
            } else {
                echo "out-of-stock";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t<span>";
            echo ($context["stock"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 218
        echo "\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 218), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 218) && ($context["product_sku"] ?? null))) {
            // line 219
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-sku\">
\t\t\t\t\t\t\t\t\t\t<p>Код товару:
\t\t\t\t\t\t\t\t\t\t\t";
            // line 221
            echo ($context["product_sku"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 224
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title page-title\">";
        // line 225
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<p class=\"product-details__text\">Створіть ідеальний мікроклімат в приміщенні завдяки сучасним технологіям та поліпшеній функції очищення повітря.</p>
\t\t\t\t\t\t\t<p class=\"product-details__characteristics-title\">Характеристики</p>
\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_one"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 230
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["attribute"], "top", [], "any", false, false, false, 230) == 1)) {
                // line 231
                echo "\t\t\t\t\t\t\t\t\t\t<span style=\"max-width: 75%;\" class=\"first__name__cust\">
                                          ";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 232);
                echo "
                                        </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"first__text__cust\">
                                          ";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 235);
                echo "
                                        </span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 238
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right-second second\">
\t\t\t\t\t\t<div class=\"second__bg\">
\t\t\t\t\t\t\t";
        // line 244
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 244), "isPopup", [0 => "options"], "method", false, false, false, 244))) {
            // line 245
            echo "\t\t\t\t\t\t\t\t<div class=\"second__price\">
\t\t\t\t\t\t\t\t\t";
            // line 246
            if ( !($context["special"] ?? null)) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t<p class=\"second__current-price\">";
                echo ($context["price"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t<p class=\"second__current-price\">";
                echo ($context["price"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"second__old-price\">";
                // line 250
                echo ($context["special"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t\t\t";
            }
            // line 252
            echo "


\t\t\t\t\t\t\t\t\t<div class=\"product-price-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 257
            if (($context["points"] ?? null)) {
                // line 258
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-points\">";
                echo ($context["text_points"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 259
                echo ($context["points"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 261
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 262
            if (($context["discounts"] ?? null)) {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"discounts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 264
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 265
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 265);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 265);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 267
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 273
            if ( !(null === ($context["difference"] ?? null))) {
                // line 274
                echo "\t\t\t\t\t\t\t\t\t<p class=\"price-difference second__saving\">економія ";
                echo ($context["difference"] ?? null);
                echo " ₴</p>
\t\t\t\t\t\t\t\t";
            }
            // line 276
            echo "\t\t\t\t\t\t\t";
        }
        // line 277
        echo "
\t\t\t\t\t\t\t<div class=\"stepper-group cart-group\">
\t\t\t\t\t\t\t\t<a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
        // line 279
        echo ($context["button_cart"] ?? null);
        echo "</span>\" class=\"second__cart btn btn-cart\"  data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\"  title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<p class=\"second__cart-text\">";
        // line 280
        echo ($context["button_cart"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t<svg width=\"16\" height=\"16\" viewbox=\"0 0 16 16\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M9.59802 12.8104C9.81096 12.8104 10.0152 12.7264 10.1657 12.5769C10.3163 12.4273 10.4009 12.2245 10.4009 12.0131V10.4183C10.4009 10.2068 10.3163 10.004 10.1657 9.85445C10.0152 9.70491 9.81096 9.6209 9.59802 9.6209C9.38508 9.6209 9.18086 9.70491 9.03029 9.85445C8.87972 10.004 8.79513 10.2068 8.79513 10.4183V12.0131C8.79513 12.2245 8.87972 12.4273 9.03029 12.5769C9.18086 12.7264 9.38508 12.8104 9.59802 12.8104ZM6.38647 12.8104C6.59941 12.8104 6.80363 12.7264 6.9542 12.5769C7.10477 12.4273 7.18936 12.2245 7.18936 12.0131V10.4183C7.18936 10.2068 7.10477 10.004 6.9542 9.85445C6.80363 9.70491 6.59941 9.6209 6.38647 9.6209C6.17353 9.6209 5.96931 9.70491 5.81874 9.85445C5.66817 10.004 5.58358 10.2068 5.58358 10.4183V12.0131C5.58358 12.2245 5.66817 12.4273 5.81874 12.5769C5.96931 12.7264 6.17353 12.8104 6.38647 12.8104ZM13.6125 3.24183H12.5045L11.1155 0.490853C11.073 0.389627 11.01 0.298184 10.9304 0.222236C10.8508 0.146289 10.7562 0.0874696 10.6526 0.0494545C10.5491 0.0114394 10.4387 -0.00495455 10.3285 0.0012971C10.2183 0.00754876 10.1105 0.0363118 10.012 0.0857885C9.91348 0.135265 9.82628 0.204392 9.75587 0.28885C9.68546 0.373308 9.63334 0.471281 9.60277 0.576646C9.57221 0.682012 9.56386 0.792506 9.57823 0.901223C9.59261 1.00994 9.62941 1.11454 9.68634 1.2085L10.706 3.24183H5.27849L6.29815 1.2085C6.37609 1.02263 6.38034 0.814369 6.31005 0.62552C6.23977 0.436671 6.10016 0.281218 5.91924 0.190371C5.73833 0.0995242 5.5295 0.0800096 5.3347 0.135745C5.1399 0.19148 4.97353 0.318339 4.86901 0.490853L3.48002 3.24183H2.37204C1.80455 3.2504 1.25833 3.45772 0.829729 3.82721C0.401126 4.19671 0.117668 4.70465 0.029348 5.26145C-0.0589722 5.81825 0.0535193 6.38813 0.346982 6.8706C0.640445 7.35307 1.09603 7.71712 1.63338 7.89855L2.22752 13.847C2.28743 14.4391 2.56741 14.9878 3.0128 15.3859C3.45818 15.784 4.03698 16.003 4.63618 16H11.3644C11.9636 16.003 12.5424 15.784 12.9878 15.3859C13.4331 14.9878 13.7131 14.4391 13.773 13.847L14.3672 7.89855C14.9057 7.71658 15.362 7.3512 15.6552 6.86712C15.9485 6.38304 16.0598 5.8115 15.9694 5.25374C15.879 4.69598 15.5927 4.18799 15.1614 3.81975C14.73 3.45151 14.1813 3.24678 13.6125 3.24183ZM12.1592 13.6876C12.1393 13.8849 12.0459 14.0678 11.8975 14.2005C11.749 14.3332 11.5561 14.4062 11.3563 14.4052H4.62815C4.42842 14.4062 4.23548 14.3332 4.08702 14.2005C3.93856 14.0678 3.84523 13.8849 3.82526 13.6876L3.25521 8.02613H12.7293L12.1592 13.6876ZM13.6125 6.43136H2.37204C2.1591 6.43136 1.95488 6.34735 1.80431 6.19781C1.65374 6.04828 1.56915 5.84546 1.56915 5.63398C1.56915 5.4225 1.65374 5.21968 1.80431 5.07014C1.95488 4.92061 2.1591 4.8366 2.37204 4.8366H13.6125C13.8254 4.8366 14.0296 4.92061 14.1802 5.07014C14.3308 5.21968 14.4153 5.4225 14.4153 5.63398C14.4153 5.84546 14.3308 6.04828 14.1802 6.19781C14.0296 6.34735 13.8254 6.43136 13.6125 6.43136Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
";
        // line 291
        echo "
                            <!--//-->
\t\t\t\t\t\t\t<div id=\"oneclick\" >
\t\t\t\t\t\t\t\t<p class=\"second__pay-one-click\">";
        // line 294
        echo ($context["text__pay_one_click"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t<input class=\"second__form-input\" style=\"height: 57px;\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"+38 093 000-00-00\" id=\"input-payment-telephone\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 296
        echo ($context["product_id"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t    <button type=\"submit\" id=\"button-oneclick\" class=\"second__form-submut\" >";
        // line 297
        echo ($context["text__buy"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--//-->

\t\t\t\t\t\t\t<div class=\"second__delivery\">
\t\t\t\t\t\t\t\t<p class=\"second__delivery-text\">";
        // line 302
        echo ($context["text__delivery"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 303
        echo ($context["base"] ?? null);
        echo "delivery-information\" class=\"second__details\">";
        echo ($context["text__details"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"second__buy-on-credit\">
\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_title\">";
        // line 307
        echo ($context["text__buy_on_credit"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t<div class=\"second__buy-on-credit_row\">

\t\t\t\t\t\t\t\t<button type=\"button\" class=\"second__buy-on-credit_button\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">
\t\t\t\t\t\t\t\t\t";
        // line 311
        echo ($context["text__buy_on_credit"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"second__buy-on-credit_text\">
\t\t\t\t\t\t\t\t\t";
        // line 314
        if ( !($context["special"] ?? null)) {
            // line 315
            echo "\t\t\t\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_price\">";
            echo ($context["price"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 317
            echo "\t\t\t\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_price\">";
            echo ($context["special"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"second__old-price\">";
            // line 318
            echo ($context["price"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 321
        echo "\t\t\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_payments\">";
        echo ($context["credit_x_six_payments"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<button type=\"button\" class=\"second__form-submut popup_productpage_chastyami_close\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 384 512\"><path d=\"M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z\"/></svg></button>
\t\t\t\t\t\t\t<form id=\"popup_productpage_chastyami\" class=\"popup_productpage_chastyami fancybox-content\" action=\"\" method=\"post\" style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"popup_title\">
\t\t\t\t\t\t\t\t\t";
        // line 337
        echo ($context["credit_pay_in_installments"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead\">
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead_th popup_productpage_chastyami_type_credit\">";
        // line 340
        echo ($context["credit_type_of_loan"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead_th popup_productpage_chastyami_period_month\">";
        // line 341
        echo ($context["credit_term"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead_th popup_productpage_chastyami_month_payment\">";
        // line 342
        echo ($context["credit_monthly_payment"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead_th popup_productpage_chastyami_btn_wrapper\"></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_item\" data-type=\"payment_pb_chastyami\">
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_type_credit\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_privat\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/icon_pb_logo.png\" class=\"popup_productpage_chastyami_privat_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_privat_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"popup_productpage_chastyami_privat_bank\">";
        // line 351
        echo ($context["credit_privat_bank"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"popup_productpage_chastyami_privat_type\">";
        // line 352
        echo ($context["credit_instant_installment"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/pp_logo.png\" class=\"popup_productpage_chastyami_privat_method_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_conditions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_period_month\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-hide-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"selectric-input\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 370
        echo ($context["credit_months"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_month_payment\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 374
        echo "\t\t\t\t\t\t\t\t\t\t\t<span data-month=\"2\">5 262.05 ₴</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 378
        echo ($context["credit_continue"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.9975 16.013C12.2637 16.013 12.519 15.908 12.7072 15.7211C12.8954 15.5342 13.0011 15.2807 13.0011 15.0163V13.0229C13.0011 12.7585 12.8954 12.505 12.7072 12.3181C12.519 12.1311 12.2637 12.0261 11.9975 12.0261C11.7313 12.0261 11.4761 12.1311 11.2879 12.3181C11.0997 12.505 10.9939 12.7585 10.9939 13.0229V15.0163C10.9939 15.2807 11.0997 15.5342 11.2879 15.7211C11.4761 15.908 11.7313 16.013 11.9975 16.013ZM7.98309 16.013C8.24926 16.013 8.50453 15.908 8.69275 15.7211C8.88096 15.5342 8.9867 15.2807 8.9867 15.0163V13.0229C8.9867 12.7585 8.88096 12.505 8.69275 12.3181C8.50453 12.1311 8.24926 12.0261 7.98309 12.0261C7.71691 12.0261 7.46164 12.1311 7.27343 12.3181C7.08522 12.505 6.97948 12.7585 6.97948 13.0229V15.0163C6.97948 15.2807 7.08522 15.5342 7.27343 15.7211C7.46164 15.908 7.71691 16.013 7.98309 16.013ZM17.0156 4.05228H15.6306L13.8943 0.613566C13.8413 0.487034 13.7625 0.37273 13.663 0.277795C13.5634 0.182861 13.4452 0.109337 13.3158 0.0618182C13.1863 0.0142993 13.0484 -0.00619319 12.9106 0.00162138C12.7728 0.00943595 12.6382 0.0453897 12.515 0.107236C12.3918 0.169081 12.2829 0.25549 12.1948 0.361062C12.1068 0.466635 12.0417 0.589101 12.0035 0.720808C11.9653 0.852515 11.9548 0.990633 11.9728 1.12653C11.9908 1.26243 12.0368 1.39318 12.1079 1.51062L13.3825 4.05228H6.59811L7.87269 1.51062C7.97011 1.27829 7.97542 1.01796 7.88757 0.7819C7.79971 0.545839 7.62519 0.351522 7.39905 0.237964C7.17291 0.124405 6.91188 0.100012 6.66838 0.169681C6.42487 0.23935 6.21692 0.397924 6.08627 0.613566L4.35002 4.05228H2.96504C2.25568 4.063 1.57291 4.32214 1.03716 4.78402C0.501408 5.24589 0.147085 5.88081 0.036685 6.57681C-0.0737153 7.27281 0.0668992 7.98517 0.433728 8.58825C0.800557 9.19133 1.37004 9.6464 2.04172 9.87319L2.78439 17.3088C2.85929 18.0489 3.20927 18.7348 3.766 19.2324C4.32273 19.73 5.04623 20.0037 5.79522 20H14.2055C14.9545 20.0037 15.678 19.73 16.2347 19.2324C16.7914 18.7348 17.1414 18.0489 17.2163 17.3088L17.959 9.87319C18.6321 9.64573 19.2025 9.189 19.5691 8.5839C19.9356 7.9788 20.0747 7.26438 19.9617 6.56718C19.8487 5.86998 19.4909 5.23499 18.9517 4.77469C18.4125 4.31439 17.7266 4.05848 17.0156 4.05228ZM15.199 17.1094C15.1741 17.3562 15.0574 17.5848 14.8718 17.7506C14.6863 17.9165 14.4451 18.0077 14.1954 18.0065H5.78518C5.53552 18.0077 5.29435 17.9165 5.10878 17.7506C4.9232 17.5848 4.80654 17.3562 4.78158 17.1094L4.06901 10.0327H15.9116L15.199 17.1094ZM17.0156 8.0392H2.96504C2.69887 8.0392 2.4436 7.93419 2.25539 7.74727C2.06717 7.56035 1.96144 7.30682 1.96144 7.04247C1.96144 6.77812 2.06717 6.5246 2.25539 6.33768C2.4436 6.15076 2.69887 6.04574 2.96504 6.04574H17.0156C17.2817 6.04574 17.537 6.15076 17.7252 6.33768C17.9134 6.5246 18.0192 6.77812 18.0192 7.04247C18.0192 7.30682 17.9134 7.56035 17.7252 7.74727C17.537 7.93419 17.2817 8.0392 17.0156 8.0392Z\" fill=\"white\"></path></svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_item\" data-type=\"payment_pb_rassrochka\">
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_type_credit\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_privat popup_productpage_chastyami_privat_rassrochka\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/icon_pb_logo.png\" class=\"popup_productpage_chastyami_privat_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_privat_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"popup_productpage_chastyami_privat_bank\">";
        // line 390
        echo ($context["credit_privat_bank"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"popup_productpage_chastyami_privat_type\">";
        // line 391
        echo ($context["credit_payment_in_installments"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/ip_logo.png\" class=\"popup_productpage_chastyami_privat_method_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_conditions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_period_month\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-wrapper\"><div class=\"selectric-hide-select\"><select tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"selectric-input\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 407
        echo ($context["credit_months"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_month_payment\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 411
        echo "\t\t\t\t\t\t\t\t\t\t\t<span data-month=\"2\">5 566.14 ₴</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 415
        echo ($context["credit_continue"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.9975 16.013C12.2637 16.013 12.519 15.908 12.7072 15.7211C12.8954 15.5342 13.0011 15.2807 13.0011 15.0163V13.0229C13.0011 12.7585 12.8954 12.505 12.7072 12.3181C12.519 12.1311 12.2637 12.0261 11.9975 12.0261C11.7313 12.0261 11.4761 12.1311 11.2879 12.3181C11.0997 12.505 10.9939 12.7585 10.9939 13.0229V15.0163C10.9939 15.2807 11.0997 15.5342 11.2879 15.7211C11.4761 15.908 11.7313 16.013 11.9975 16.013ZM7.98309 16.013C8.24926 16.013 8.50453 15.908 8.69275 15.7211C8.88096 15.5342 8.9867 15.2807 8.9867 15.0163V13.0229C8.9867 12.7585 8.88096 12.505 8.69275 12.3181C8.50453 12.1311 8.24926 12.0261 7.98309 12.0261C7.71691 12.0261 7.46164 12.1311 7.27343 12.3181C7.08522 12.505 6.97948 12.7585 6.97948 13.0229V15.0163C6.97948 15.2807 7.08522 15.5342 7.27343 15.7211C7.46164 15.908 7.71691 16.013 7.98309 16.013ZM17.0156 4.05228H15.6306L13.8943 0.613566C13.8413 0.487034 13.7625 0.37273 13.663 0.277795C13.5634 0.182861 13.4452 0.109337 13.3158 0.0618182C13.1863 0.0142993 13.0484 -0.00619319 12.9106 0.00162138C12.7728 0.00943595 12.6382 0.0453897 12.515 0.107236C12.3918 0.169081 12.2829 0.25549 12.1948 0.361062C12.1068 0.466635 12.0417 0.589101 12.0035 0.720808C11.9653 0.852515 11.9548 0.990633 11.9728 1.12653C11.9908 1.26243 12.0368 1.39318 12.1079 1.51062L13.3825 4.05228H6.59811L7.87269 1.51062C7.97011 1.27829 7.97542 1.01796 7.88757 0.7819C7.79971 0.545839 7.62519 0.351522 7.39905 0.237964C7.17291 0.124405 6.91188 0.100012 6.66838 0.169681C6.42487 0.23935 6.21692 0.397924 6.08627 0.613566L4.35002 4.05228H2.96504C2.25568 4.063 1.57291 4.32214 1.03716 4.78402C0.501408 5.24589 0.147085 5.88081 0.036685 6.57681C-0.0737153 7.27281 0.0668992 7.98517 0.433728 8.58825C0.800557 9.19133 1.37004 9.6464 2.04172 9.87319L2.78439 17.3088C2.85929 18.0489 3.20927 18.7348 3.766 19.2324C4.32273 19.73 5.04623 20.0037 5.79522 20H14.2055C14.9545 20.0037 15.678 19.73 16.2347 19.2324C16.7914 18.7348 17.1414 18.0489 17.2163 17.3088L17.959 9.87319C18.6321 9.64573 19.2025 9.189 19.5691 8.5839C19.9356 7.9788 20.0747 7.26438 19.9617 6.56718C19.8487 5.86998 19.4909 5.23499 18.9517 4.77469C18.4125 4.31439 17.7266 4.05848 17.0156 4.05228ZM15.199 17.1094C15.1741 17.3562 15.0574 17.5848 14.8718 17.7506C14.6863 17.9165 14.4451 18.0077 14.1954 18.0065H5.78518C5.53552 18.0077 5.29435 17.9165 5.10878 17.7506C4.9232 17.5848 4.80654 17.3562 4.78158 17.1094L4.06901 10.0327H15.9116L15.199 17.1094ZM17.0156 8.0392H2.96504C2.69887 8.0392 2.4436 7.93419 2.25539 7.74727C2.06717 7.56035 1.96144 7.30682 1.96144 7.04247C1.96144 6.77812 2.06717 6.5246 2.25539 6.33768C2.4436 6.15076 2.69887 6.04574 2.96504 6.04574H17.0156C17.2817 6.04574 17.537 6.15076 17.7252 6.33768C17.9134 6.5246 18.0192 6.77812 18.0192 7.04247C18.0192 7.30682 17.9134 7.56035 17.7252 7.74727C17.537 7.93419 17.2817 8.0392 17.0156 8.0392Z\" fill=\"white\"></path></svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_item\" data-type=\"payment_mono_chastyami\">
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_type_credit\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_mono\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/monobank-logo.png\" class=\"popup_productpage_chastyami_mono_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_conditions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_period_month\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-hide-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"selectric-input\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 440
        echo ($context["credit_months"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_month_payment\">
\t\t\t\t\t\t\t\t\t\t\t<span data-month=\"3\">3 508.39 ₴</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 447
        echo ($context["credit_continue"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.9975 16.013C12.2637 16.013 12.519 15.908 12.7072 15.7211C12.8954 15.5342 13.0011 15.2807 13.0011 15.0163V13.0229C13.0011 12.7585 12.8954 12.505 12.7072 12.3181C12.519 12.1311 12.2637 12.0261 11.9975 12.0261C11.7313 12.0261 11.4761 12.1311 11.2879 12.3181C11.0997 12.505 10.9939 12.7585 10.9939 13.0229V15.0163C10.9939 15.2807 11.0997 15.5342 11.2879 15.7211C11.4761 15.908 11.7313 16.013 11.9975 16.013ZM7.98309 16.013C8.24926 16.013 8.50453 15.908 8.69275 15.7211C8.88096 15.5342 8.9867 15.2807 8.9867 15.0163V13.0229C8.9867 12.7585 8.88096 12.505 8.69275 12.3181C8.50453 12.1311 8.24926 12.0261 7.98309 12.0261C7.71691 12.0261 7.46164 12.1311 7.27343 12.3181C7.08522 12.505 6.97948 12.7585 6.97948 13.0229V15.0163C6.97948 15.2807 7.08522 15.5342 7.27343 15.7211C7.46164 15.908 7.71691 16.013 7.98309 16.013ZM17.0156 4.05228H15.6306L13.8943 0.613566C13.8413 0.487034 13.7625 0.37273 13.663 0.277795C13.5634 0.182861 13.4452 0.109337 13.3158 0.0618182C13.1863 0.0142993 13.0484 -0.00619319 12.9106 0.00162138C12.7728 0.00943595 12.6382 0.0453897 12.515 0.107236C12.3918 0.169081 12.2829 0.25549 12.1948 0.361062C12.1068 0.466635 12.0417 0.589101 12.0035 0.720808C11.9653 0.852515 11.9548 0.990633 11.9728 1.12653C11.9908 1.26243 12.0368 1.39318 12.1079 1.51062L13.3825 4.05228H6.59811L7.87269 1.51062C7.97011 1.27829 7.97542 1.01796 7.88757 0.7819C7.79971 0.545839 7.62519 0.351522 7.39905 0.237964C7.17291 0.124405 6.91188 0.100012 6.66838 0.169681C6.42487 0.23935 6.21692 0.397924 6.08627 0.613566L4.35002 4.05228H2.96504C2.25568 4.063 1.57291 4.32214 1.03716 4.78402C0.501408 5.24589 0.147085 5.88081 0.036685 6.57681C-0.0737153 7.27281 0.0668992 7.98517 0.433728 8.58825C0.800557 9.19133 1.37004 9.6464 2.04172 9.87319L2.78439 17.3088C2.85929 18.0489 3.20927 18.7348 3.766 19.2324C4.32273 19.73 5.04623 20.0037 5.79522 20H14.2055C14.9545 20.0037 15.678 19.73 16.2347 19.2324C16.7914 18.7348 17.1414 18.0489 17.2163 17.3088L17.959 9.87319C18.6321 9.64573 19.2025 9.189 19.5691 8.5839C19.9356 7.9788 20.0747 7.26438 19.9617 6.56718C19.8487 5.86998 19.4909 5.23499 18.9517 4.77469C18.4125 4.31439 17.7266 4.05848 17.0156 4.05228ZM15.199 17.1094C15.1741 17.3562 15.0574 17.5848 14.8718 17.7506C14.6863 17.9165 14.4451 18.0077 14.1954 18.0065H5.78518C5.53552 18.0077 5.29435 17.9165 5.10878 17.7506C4.9232 17.5848 4.80654 17.3562 4.78158 17.1094L4.06901 10.0327H15.9116L15.199 17.1094ZM17.0156 8.0392H2.96504C2.69887 8.0392 2.4436 7.93419 2.25539 7.74727C2.06717 7.56035 1.96144 7.30682 1.96144 7.04247C1.96144 6.77812 2.06717 6.5246 2.25539 6.33768C2.4436 6.15076 2.69887 6.04574 2.96504 6.04574H17.0156C17.2817 6.04574 17.537 6.15076 17.7252 6.33768C17.9134 6.5246 18.0192 6.77812 18.0192 7.04247C18.0192 7.30682 17.9134 7.56035 17.7252 7.74727C17.537 7.93419 17.2817 8.0392 17.0156 8.0392Z\" fill=\"white\"></path></svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Modal -->
\t\t\t";
        // line 462
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 462), "isPopup", [0 => "quickview"], "method", false, false, false, 462)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 462), "get", [0 => "quickviewDescription"], "method", false, false, false, 462)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 462), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 462) == "default"))) {
            // line 463
            echo "\t\t\t\t<div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
\t\t\t\t\t<div class=\"expand-block\">
\t\t\t\t\t\t<div class=\"expand-content\">
\t\t\t\t\t\t\t";
            // line 466
            echo ($context["description"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 468
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 468), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 468)) {
                // line 469
                echo "\t\t\t\t\t\t\t<div class=\"block-expand-overlay\">
\t\t\t\t\t\t\t\t<a class=\"block-expand btn\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 473
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 476
        echo "\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 476), "isPopup", [0 => "options"], "method", false, false, false, 476)) {
            // line 477
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 477)) {
                // line 478
                echo "\t\t\t\t\t<div class=\"product-blocks blocks-default\">
\t\t\t\t\t\t";
                // line 479
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 479));
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 482
            echo "\t\t\t";
        }
        // line 483
        echo "\t\t\t";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 483), "isPopup", [], "method", false, false, false, 483)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 483), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 483) == "default"))) {
            // line 484
            echo "\t\t\t\t<div class=\"tags\">
\t\t\t\t\t<span class=\"tags-title\">";
            // line 485
            echo ($context["text_tags"] ?? null);
            echo "</span>
\t\t\t\t\t";
            // line 486
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 487
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 487);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 487);
                echo "</a>
\t\t\t\t\t\t";
                // line 488
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 488)) {
                    // line 489
                    echo "\t\t\t\t\t\t\t<b>,</b>
\t\t\t\t\t\t";
                }
                // line 491
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 492
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 494
        echo "\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 494), "isPopup", [], "method", false, false, false, 494)) {
            // line 495
            echo "\t\t\t";
            echo ($context["content_bottom"] ?? null);
            echo "</div>
\t\t";
            // line 496
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 499
        echo "
<div class=\"reviews\">
\t<div class=\"reviews__container\">
\t\t<div class=\"reviews__title\">
\t\t\t<h3 class=\"reviews__title_text\">";
        // line 503
        echo ($context["tab_review"] ?? null);
        echo "</h3>
\t\t</div>
\t\t<div class=\"reviews__row\">
\t\t\t<div class=\"reviews__body\">
\t\t\t</div>
\t\t\t<div class=\"reviews__general\">
\t\t\t\t<div class=\"reviews__overall overall\">
\t\t\t\t\t<div class=\"overall__assessment\">
\t\t\t\t\t\t<p>4.9</p><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"23\" viewBox=\"0 0 25 23\" fill=\"none\">
\t\t\t\t\t\t\t<path d=\"M24.9581 8.69592C24.8792 8.47605 24.7358 8.28292 24.5453 8.13997C24.3547 7.99701 24.1252 7.91036 23.8845 7.89053L16.7817 6.89281L13.5985 0.678101C13.4963 0.474865 13.3367 0.303466 13.138 0.183537C12.9393 0.0636076 12.7096 0 12.4751 0C12.2406 0 12.0108 0.0636076 11.8121 0.183537C11.6134 0.303466 11.4538 0.474865 11.3516 0.678101L8.16842 6.88079L1.06559 7.89053C0.834554 7.92216 0.617352 8.0155 0.438628 8.15999C0.259904 8.30447 0.126815 8.4943 0.0544631 8.70794C-0.0117655 8.91671 -0.0177088 9.13891 0.0372712 9.35068C0.0922512 9.56246 0.206079 9.75582 0.366538 9.91002L5.52202 14.7183L4.27372 21.5461C4.22332 21.7726 4.24196 22.0083 4.32738 22.2248C4.4128 22.4413 4.56137 22.6295 4.75523 22.7667C4.94908 22.9038 5.17995 22.9841 5.42007 22.9979C5.66019 23.0117 5.89933 22.9583 6.10872 22.8443L12.4751 19.6348L18.8414 22.8443C19.0166 22.9395 19.2145 22.9892 19.4156 22.9886C19.68 22.9895 19.9379 22.9095 20.1521 22.7602C20.3458 22.6266 20.4957 22.4424 20.5842 22.2294C20.6727 22.0164 20.696 21.7835 20.6514 21.5581L19.4031 14.7303L24.5586 9.92204C24.7388 9.775 24.872 9.58173 24.9428 9.36469C25.0135 9.14766 25.0188 8.91575 24.9581 8.69592ZM17.281 13.5042C17.1365 13.6393 17.0281 13.8061 16.9651 13.9903C16.9021 14.1745 16.8863 14.3707 16.919 14.562L17.8178 19.6107L13.1242 17.2066C12.9418 17.1197 12.741 17.0745 12.5375 17.0745C12.334 17.0745 12.1332 17.1197 11.9508 17.2066L7.25716 19.6107L8.15594 14.562C8.18869 14.3707 8.17287 14.1745 8.10983 13.9903C8.0468 13.8061 7.93841 13.6393 7.79393 13.5042L4.04903 9.89799L9.30437 9.16473C9.5066 9.13764 9.69883 9.0632 9.86423 8.94794C10.0296 8.83267 10.1632 8.6801 10.2531 8.50359L12.4751 3.9237L14.8219 8.51561C14.9118 8.69212 15.0453 8.8447 15.2107 8.95996C15.3761 9.07523 15.5683 9.14966 15.7706 9.17675L21.0259 9.91002L17.281 13.5042Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"overall__title\">";
        // line 515
        echo ($context["text__overall"] ?? null);
        echo "</p>
\t\t\t\t\t<p class=\"overall__quantity\">";
        // line 516
        echo ($context["text__reviews"] ?? null);
        echo "</p>
\t\t\t\t\t<div class=\"overall__body\">
\t\t\t\t\t\t<div class=\"overall__one overall__row\">
\t\t\t\t\t\t\t<p>1</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"overall__two overall__row\">
\t\t\t\t\t\t\t<p>2</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"overall__three overall__row\">
\t\t\t\t\t\t\t<p>3</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"overall__four overall__row\">
\t\t\t\t\t\t\t<p>4</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"overall__five overall__row\">
\t\t\t\t\t\t\t<p>5</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Sofii rewiew_cust  -->

\t\t\t\t";
        // line 577
        if (($context["review_status"] ?? null)) {
            // line 578
            echo "\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t";
            // line 580
            echo "\t\t\t\t\t\t<form class=\"form-horizontal rewiew_cust form-review \" id=\"form-review\">
\t\t\t\t\t\t\t<div class=\"rewiew_right_cust\">
\t\t\t\t\t\t\t\t";
            // line 583
            echo "\t\t\t\t\t\t\t\t<div class=\"reviews__overall overall\">
\t\t\t\t\t\t\t\t";
            // line 585
            echo "\t\t\t\t\t\t\t\t<p class=\"reviews-form__title\">";
            echo ($context["text__leave_a_review"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t";
            // line 586
            if (($context["review_guest"] ?? null)) {
                // line 587
                echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 588
                echo ($context["text__name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 589
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\"
\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-email\">";
                // line 593
                echo ($context["text__email"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
                // line 594
                echo ($context["customer_email"] ?? null);
                echo "\" id=\"input-email\"
\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 598
                echo ($context["text__review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\"
\t\t\t\t\t\t\t\t\t\t\t\t\t  class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\t   for=\"input-advantages\">";
                // line 604
                echo ($context["entry_advantages"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"advantages\" value=\"";
                // line 605
                echo ($context["customer_advantages"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t   id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\t   for=\"input-disadvantages\">";
                // line 610
                echo ($context["entry_disadvantages"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"disadvantages\" value=\"";
                // line 611
                echo ($context["customer_disadvantages"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t   id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 615
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating1\" name=\"rating\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating2\" name=\"rating\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating3\" name=\"rating\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating4\" name=\"rating\" value=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating5\" name=\"rating\" value=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 649
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 651
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"\">";
                echo ($context["text__leave_a_review"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 654
                echo "\t\t\t\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 656
            echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 661
            echo "\t\t\t\t";
        }
        // line 662
        echo "


\t\t\t\t<!-- Sofii rewiew_cust  -->

";
        // line 673
        echo "
";
        // line 676
        echo "
";
        // line 679
        echo "
";
        // line 682
        echo "
";
        // line 685
        echo "
";
        // line 723
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 728
        echo "<script src=\"catalog/view/javascript/jquery.maskedinput.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\"#input-payment-telephone\").mask(\"";
        // line 731
        echo ($context["text_one_click_mask"] ?? null);
        echo "\",{placeholder:\" \"});
\t});
</script>

<script type=\"text/javascript\"><!--
\t\$('#button-oneclick').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/one_click/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#oneclick input[type=\\'text\\'], #oneclick input[type=\\'hidden\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-oneclick').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-oneclick').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['telephone']) {
\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['telephone'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t}
\t\t\t\t\tif (json['error']['product']) {
\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['product'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t}
\t\t\t\t\tif (json['error']['order']) {
\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['order'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t//--></script>
";
        // line 779
        echo "
";
        // line 781
        echo "<script>
\tconst ratingInputs = document.querySelectorAll('.star-rating input[type=\"radio\"]');
\tconst starLabels = document.querySelectorAll('.star-rating label');

\tratingInputs.forEach((input, index) => {
\t\tinput.addEventListener('change', () => {
\t\t\tconst selectedRating = parseInt(input.value);

\t\t\tstarLabels.forEach((label, i) => {
\t\t\t\tconst svgPath = label.querySelector('svg path');

\t\t\t\tif (i < selectedRating) {
\t\t\t\t\tsvgPath.style.fill = '#EFBE11';
\t\t\t\t} else {
\t\t\t\t\tsvgPath.style.fill = '#BDC2D3';
\t\t\t\t}
\t\t\t});
\t\t});
\t});
</script>

<script
\t\ttype=\"text/javascript\">
\t<!--
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t//
\t-->
</script>
<script
\t\ttype=\"text/javascript\">
\t<!--
\t\$('#button-cart, [data-quick-buy]').on('click', function () {
\t\tvar \$btn = \$(this);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' + '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' + '#product select[name=\"recurring_id\"]'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-cart').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-cart').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t}

// Highlight any found errors
\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');

\t\t\t\t\ttry {
\t\t\t\t\t\t\$('html, body').animate({
\t\t\t\t\t\t\tscrollTop: \$('.form-group.has-error').offset().top - 50
\t\t\t\t\t\t}, 'slow');
\t\t\t\t\t} catch (e) {}
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tif (\$('html').hasClass('popup-options')) {
\t\t\t\t\t\tparent.\$(\".popup-options .popup-close\").trigger('click');
\t\t\t\t\t}

\t\t\t\t\tif (json['notification']) {
\t\t\t\t\t\tparent.show_notification(json['notification']);
\t\t\t\t\t} else {
\t\t\t\t\t\tparent.\$('#content').parent().before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}

\t\t\t\t\tparent.\$('#cart-total').html(json['total']);
\t\t\t\t\tparent.\$('#cart-items,.cart-badge').html(json['items_count']);

\t\t\t\t\tif (json['items_count']) {
\t\t\t\t\t\tparent.\$('#cart-items,.cart-badge').removeClass('count-zero');
\t\t\t\t\t} else {
\t\t\t\t\t\tparent.\$('#cart-items,.cart-badge').addClass('count-zero');
\t\t\t\t\t}

\t\t\t\t\tif (Journal['scrollToTop']) {
\t\t\t\t\t\tparent.\$('html, body').animate({
\t\t\t\t\t\t\tscrollTop: 0
\t\t\t\t\t\t}, 'slow');
\t\t\t\t\t}

\t\t\t\t\tparent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

\t\t\t\t\tif (window.location.href.indexOf('quick_buy=true') !== -1) {
\t\t\t\t\t\tparent.location.href = Journal['checkoutUrl'];
\t\t\t\t\t}

\t\t\t\t\tif (\$btn.data('quick-buy') !== undefined) {
\t\t\t\t\t\tlocation = Journal['checkoutUrl'];
\t\t\t\t\t}

\t\t\t\t\tif (parent.window['_QuickCheckout']) {
\t\t\t\t\t\tparent.window['_QuickCheckout'].save();
\t\t\t\t\t}

\t\t\t\t\tif (json['redirect']) {
\t\t\t\t\t\tparent.location.href = json['redirect'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t//
\t-->
</script>
<script
\t\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '";
        // line 929
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\t\$('.datetime').datetimepicker({language: '";
        // line 931
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\t\$('.time').datetimepicker({language: '";
        // line 933
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});

\t\$('button[id^=\\'button-upload\\']').on('click', function () {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function () {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
\t//
\t-->
</script>
<script
\t\ttype=\"text/javascript\">
\t<!--
\t\$(function () {
\t\t\$('#review').delegate('.pagination a', 'click', function (e) {
\t\t\te.preventDefault();

\t\t\t\$('#review').fadeOut('slow');

\t\t\t\$('#review').load(this.href);

\t\t\t\$('#review').fadeIn('slow');
\t\t});

\t\t\$('.reviews__body').load('index.php?route=product/product/review&product_id=";
        // line 1003
        echo ($context["product_id"] ?? null);
        echo "');


\t\t\$('#button-review').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 1008
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\$('#button-review').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function () {
\t\t\t\t\t\$('#button-review').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'email\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'advantages\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'disadvantages\\']').val('');
\t\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t});


\t\$(document).ready(function () {
\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype: 'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t\tenabled: true
\t\t\t}
\t\t});
\t});

\t\$(document).ready(function () {
\t\t\$('.review-links a').on('click', function () {
\t\t\tvar \$review = \$('#review');
\t\t\tif (\$review.length) {
\t\t\t\t\$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
\t\t\t\t\$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
\t\t\t\t\$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');

\t\t\t\t\$([document.documentElement, document.body]).animate({
\t\t\t\t\tscrollTop: \$review.offset().top - 100
\t\t\t\t}, 200);
\t\t\t}
\t\t});
\t});

\t//
\t-->
</script>
";
        // line 1069
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1069), "isPopup", [], "method", false, false, false, 1069)) {
            // line 1070
            echo "\t";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 1070);
            echo "
";
        }
        // line 1072
        echo "
                    <!-- YouTube Product Video -- Start -->
                    ";
        // line 1074
        echo ($context["youtube_product_video"] ?? null);
        echo "
                    <!-- YouTube Product Video -- End -->
                
";
        // line 1077
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1904 => 1077,  1898 => 1074,  1894 => 1072,  1888 => 1070,  1886 => 1069,  1822 => 1008,  1814 => 1003,  1741 => 933,  1736 => 931,  1731 => 929,  1581 => 781,  1578 => 779,  1528 => 731,  1523 => 728,  1517 => 723,  1514 => 685,  1511 => 682,  1508 => 679,  1505 => 676,  1502 => 673,  1495 => 662,  1492 => 661,  1486 => 656,  1480 => 654,  1472 => 651,  1467 => 649,  1430 => 615,  1423 => 611,  1419 => 610,  1411 => 605,  1407 => 604,  1398 => 598,  1391 => 594,  1387 => 593,  1380 => 589,  1376 => 588,  1373 => 587,  1371 => 586,  1366 => 585,  1363 => 583,  1359 => 580,  1356 => 578,  1354 => 577,  1290 => 516,  1286 => 515,  1271 => 503,  1265 => 499,  1259 => 496,  1254 => 495,  1251 => 494,  1247 => 492,  1233 => 491,  1229 => 489,  1227 => 488,  1220 => 487,  1203 => 486,  1199 => 485,  1196 => 484,  1193 => 483,  1190 => 482,  1184 => 479,  1181 => 478,  1178 => 477,  1175 => 476,  1170 => 473,  1164 => 469,  1162 => 468,  1157 => 466,  1150 => 463,  1148 => 462,  1130 => 447,  1120 => 440,  1092 => 415,  1086 => 411,  1080 => 407,  1061 => 391,  1057 => 390,  1042 => 378,  1036 => 374,  1030 => 370,  1009 => 352,  1005 => 351,  993 => 342,  989 => 341,  985 => 340,  979 => 337,  959 => 321,  954 => 318,  949 => 317,  943 => 315,  941 => 314,  935 => 311,  928 => 307,  919 => 303,  915 => 302,  907 => 297,  903 => 296,  898 => 294,  893 => 291,  884 => 280,  878 => 279,  874 => 277,  871 => 276,  865 => 274,  863 => 273,  857 => 269,  853 => 267,  842 => 265,  838 => 264,  835 => 263,  833 => 262,  830 => 261,  825 => 259,  820 => 258,  818 => 257,  811 => 252,  806 => 250,  801 => 249,  795 => 247,  793 => 246,  790 => 245,  788 => 244,  781 => 239,  775 => 238,  769 => 235,  763 => 232,  760 => 231,  757 => 230,  753 => 229,  746 => 225,  743 => 224,  737 => 221,  733 => 219,  730 => 218,  723 => 215,  714 => 213,  712 => 212,  704 => 206,  697 => 201,  693 => 199,  676 => 196,  645 => 195,  628 => 194,  625 => 193,  622 => 192,  616 => 189,  604 => 188,  595 => 182,  589 => 181,  585 => 180,  577 => 174,  575 => 173,  570 => 170,  568 => 169,  560 => 163,  556 => 161,  552 => 159,  538 => 158,  534 => 156,  532 => 155,  525 => 154,  508 => 153,  504 => 152,  501 => 151,  498 => 150,  493 => 147,  487 => 143,  485 => 142,  480 => 140,  473 => 137,  470 => 136,  467 => 135,  461 => 132,  458 => 131,  455 => 130,  452 => 129,  444 => 127,  442 => 126,  439 => 125,  436 => 124,  432 => 122,  411 => 119,  406 => 118,  389 => 117,  386 => 116,  375 => 107,  346 => 104,  341 => 103,  324 => 102,  316 => 99,  305 => 98,  302 => 97,  300 => 96,  297 => 95,  293 => 93,  284 => 90,  277 => 89,  273 => 88,  270 => 87,  268 => 86,  257 => 77,  222 => 74,  213 => 73,  210 => 72,  192 => 71,  190 => 70,  183 => 68,  173 => 67,  162 => 61,  159 => 60,  157 => 59,  152 => 58,  150 => 57,  149 => 56,  148 => 55,  147 => 54,  146 => 53,  144 => 52,  141 => 51,  135 => 49,  132 => 48,  130 => 47,  125 => 46,  120 => 44,  116 => 43,  105 => 36,  99 => 33,  96 => 32,  94 => 31,  91 => 30,  80 => 27,  77 => 26,  73 => 25,  70 => 24,  68 => 23,  64 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  53 => 15,  52 => 14,  51 => 12,  50 => 11,  49 => 10,  47 => 8,  46 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set stylePrefix = j3.document.isPopup('quickview') ? 'quickviewPageStyle' : 'productPageStyle' %}
{% set optionPrice = j3.settings.get(stylePrefix ~ 'OptionPrice') %}
{% set direction = j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'left' or j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'right' ? 'vertical' : 'horizontal' %}
{% set carousel = direction == 'vertical' or j3.settings.get(stylePrefix ~ 'AdditionalImagesCarousel') %}
{% set carouselOptions = {
\tslidesPerView: 'auto',
\tspaceBetween: j3.settings.get(stylePrefix ~ 'AdditionalImagesSpacing')|default(0),
\tdirection: direction
} %}
{% set galleryOptions = {
\tthumbWidth: j3.settings.get('image_dimensions_popup_thumb.width'),
\tthumbConHeight: j3.settings.get('image_dimensions_popup_thumb.height'),
\taddClass: 'lg-product-images',
\tmode: j3.settings.get(stylePrefix ~ 'GalleryMode'),
\tdownload: j3.settings.get(stylePrefix ~ 'GalleryDownload'),
\tfullScreen: j3.settings.get(stylePrefix ~ 'GalleryFullScreen')
} %}
{% set quickviewExpand = not j3.settings.get('quickviewExpandButton') or (j3.settings.get('globalExpandCharactersLimit') > 0 and description and description|length <= j3.settings.get('globalExpandCharactersLimit')) ? 'no-expand': '' %}
{% if j3.isDescriptionEmpty(description) %}
\t{% set description = '' %}
{% endif %}
{{ header }}
{% if not j3.document.isPopup() %}
\t<ul class=\"breadcrumb\">
\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ul>
\t{% if j3.settings.get('pageTitlePosition') == 'top' %}
\t\t<h1 class=\"title page-title\">
\t\t\t<span>{{ heading_title }}</span>
\t\t</h1>
\t{% endif %}
\t{{ j3.loadController('journal3/layout', 'top') }}
\t<style>
\t\t.content-checket {
\t\t\tpadding: 0 !important;
\t\t}
\t</style>
<div id=\"product-product\" class=\"container\">
\t<div class=\"row\">{{ column_left }}
\t\t<div id=\"content\" class=\"content-checket {{ class }}\">
\t\t\t{% endif %}
\t\t\t{{ content_top }}
\t\t\t{% if not j3.document.isPopup('options') %}
\t\t\t\t{% if j3.settings.get('pageTitlePosition') == 'default' or j3.document.isPopup('quickview') %}
\t\t\t\t\t<h1 class=\"title page-title\">{{ heading_title }}</h1>
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t\t{% set classes = j3.classes({
\t\t\t\t'out-of-stock': product_quantity <= 0,
\t\t\t\t'has-countdown': date_end,
\t\t\t\t'has-zero-price': not product_price_value,
\t\t\t\t'has-extra-button': product_extra_buttons,
\t\t\t}) ~ ' ' ~ product_exclude_classes %}
\t\t\t<div class=\"product-info {{ classes }}\">
\t\t\t\t{% if not j3.document.isPopup('options') %}
\t\t\t\t\t<div class=\"product-left\">
\t\t\t\t\t\t<div class=\"product-image direction-{{ direction }} position-{{ j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') }}\">
\t\t\t\t\t\t\t<div class=\"product-image_wishlist\">
\t\t\t\t\t\t\t<a href=\"\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\">
\t\t\t\t\t\t\t\t<path d=\"M15.4501 1.69499C14.5489 0.736312 13.3542 0.151192 12.0819 0.0453197C10.8095 -0.0605522 9.54347 0.319805 8.51236 1.11769C7.43059 0.264034 6.08414 -0.123053 4.74413 0.0343756C3.40413 0.191804 2.17012 0.882054 1.2906 1.96613C0.41108 3.0502 -0.0486183 4.44756 0.00407713 5.87683C0.0567725 7.3061 0.617948 8.6611 1.5746 9.66897L6.85444 15.2796C7.29657 15.7413 7.89203 16 8.51236 16C9.13269 16 9.72815 15.7413 10.1703 15.2796L15.4501 9.66897C16.4428 8.60932 17 7.17599 17 5.68198C17 4.18796 16.4428 2.75464 15.4501 1.69499ZM14.2513 8.42416L8.97148 14.0258C8.9114 14.0902 8.83989 14.1413 8.76108 14.1761C8.68228 14.211 8.59774 14.2289 8.51236 14.2289C8.42698 14.2289 8.34244 14.211 8.26364 14.1761C8.18483 14.1413 8.11332 14.0902 8.05324 14.0258L2.7734 8.3971C2.10663 7.67398 1.73325 6.7026 1.73325 5.691C1.73325 4.6794 2.10663 3.70802 2.7734 2.9849C3.45286 2.27318 4.36923 1.8741 5.32405 1.8741C6.27886 1.8741 7.19524 2.27318 7.8747 2.9849C7.95374 3.06944 8.04777 3.13655 8.15138 3.18234C8.25498 3.22814 8.36611 3.25172 8.47835 3.25172C8.59059 3.25172 8.70172 3.22814 8.80532 3.18234C8.90893 3.13655 9.00297 3.06944 9.082 2.9849C9.76146 2.27318 10.6778 1.8741 11.6327 1.8741C12.5875 1.8741 13.5038 2.27318 14.1833 2.9849C14.8592 3.69854 15.2449 4.66466 15.2576 5.67628C15.2703 6.68791 14.9091 7.66459 14.2513 8.3971V8.42416Z\"/>
\t\t\t\t\t\t\t\t</svg> </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"swiper main-image\" data-options='{{ j3.carousel(j3.document.getJs(), stylePrefix ~ 'ImageCarouselStyle')|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') and carousel and direction == 'vertical' %} style=\"width: calc(100% - {{ j3.settings.get('image_dimensions_additional.width') }}px)\" {% endif %}>
\t\t\t\t\t\t\t\t<div class=\"swiper-container\" {% if j3.isRTL() %} dir=\"rtl\" {% endif %}>
\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t{% set gallery = [] %}
\t\t\t\t\t\t\t\t\t\t{% for image in images %}
\t\t\t\t\t\t\t\t\t\t\t{% set gallery = gallery|merge([{src: image.popup, thumb: image.galleryThumb, subHtml: heading_title}]) %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\" {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %} data-gallery=\".lightgallery-product-images\" data-index=\"{{ loop.index0 }}\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ image.image }}\" {% if image.image2x %} srcset=\"{{ image.image }} 1x, {{ image.image2x }} 2x\" {% endif %} data-largeimg=\"{{ image.popup }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" width=\"{{ j3.settings.get('image_dimensions_thumb.width') }}\" height=\"{{ j3.settings.get('image_dimensions_thumb.height') }}\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-controls\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-buttons\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-next\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"swiper-pagination\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if product_labels %}
\t\t\t\t\t\t\t\t\t<div class=\"product-labels\">
\t\t\t\t\t\t\t\t\t\t{% for id, label in product_labels %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-label product-label-{{ id }} product-label-{{ label.display }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<b>{{ label.label }}</b>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') %}
\t\t\t\t\t\t\t\t{% if carousel %}
\t\t\t\t\t\t\t\t\t<div class=\"swiper additional-images\" data-options='{{ carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if direction == 'vertical' %} style=\"width: {{ j3.settings.get('image_dimensions_additional.width') }}px\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-container\" {% if j3.isRTL() %} dir=\"rtl\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide-video\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t{% for image in images %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide additional-image\" data-index=\"{{ loop.index0 }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ image.video }}\" {% if image.thumb2x %} srcset=\"{{ image.thumb }} 1x, {{ image.thumb2x }} 2x\" {% endif %} alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-buttons\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-next\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-pagination\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"additional-images\">
\t\t\t\t\t\t\t\t\t\t{% for image in images %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"additional-image\" data-index=\"{{ loop.index0 }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ image.thumb }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %}
\t\t\t\t\t\t\t<div class=\"lightgallery lightgallery-product-images\" data-images='{{ gallery|json_encode|e }}' data-options='{{ galleryOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'></div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if not j3.document.isPopup('options') %}
\t\t\t\t\t\t\t{% if product_blocks.image %}
\t\t\t\t\t\t\t\t<div class=\"product-blocks blocks-image\">
\t\t\t\t\t\t\t\t\t{{ product_blocks.image|join }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if description and j3.document.isPopup('quickview') and j3.settings.get('quickviewDescription') and (j3.settings.get('quickviewDescriptionPosition') == 'image') %}
\t\t\t\t\t\t\t<div class=\"description {{ quickviewExpand }}\">
\t\t\t\t\t\t\t\t<div class=\"expand-block\">
\t\t\t\t\t\t\t\t\t<div class=\"expand-content\">
\t\t\t\t\t\t\t\t\t\t{{ description }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if j3.settings.get('quickviewExpandButton') %}
\t\t\t\t\t\t\t\t\t\t<div class=\"block-expand-overlay\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"block-expand btn\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'image') %}
\t\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t\t<span class=\"tags-title\">{{ text_tags }}</span>
\t\t\t\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ tag.href }}\">{{ tag.tag }}</a>
\t\t\t\t\t\t\t\t\t{% if not loop.last %}
\t\t\t\t\t\t\t\t\t\t<b>,</b>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"product-right right-row\">
\t\t\t\t\t<div class=\"right-first\">
\t\t\t\t\t\t<!--//test-->

\t\t\t\t\t\t<div id=\"product\" class=\"product-details\">

\t\t\t\t\t\t\t{% if j3.settings.get('catalogCartStatus') or j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') or (product_extra_buttons and not j3.document.isPopup()) %}
\t\t\t\t\t\t\t\t<div class=\"button-group-page\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"stepper-group cart-group\">
\t\t\t\t\t\t\t\t\t\t\t{% if j3.settings.get('catalogCartStatus') %}


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stepper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stepper-arrow stepper__minus\" v-on:click=\"updateCartItemQuantity(index, -1)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg height=\"1em\" viewbox=\"0 0 320 512\"><path d=\"M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"product-quantity\">{{ entry_qty }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"{{ minimum }}\" data-minimum=\"{{ minimum }}\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stepper-arrow stepper__plus\" v-on:click=\"updateCartItemQuantity(index, 1)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg height=\"1em\" viewbox=\"0 0 320 512\"><path d=\"M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>{{ button_cart }}</span>\" class=\"btn btn-cart\" {% if (j3.settings.get(stylePrefix ~ 'CartDisplay') == \"icon\") and (j3.settings.get(stylePrefix ~ 'CartTooltipStatus')) %} data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"{{ j3.settings.get(stylePrefix ~ 'CartTooltipPosition') }}\" title=\"{{ button_cart }}\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-text\">{{ button_cart }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if product_extra_buttons and not j3.document.isPopup() %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"extra-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for id, extra_button in product_extra_buttons %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-extra btn-extra-{{ id }} btn-{{ loop.index }}-extra\" {% if (j3.settings.get(stylePrefix ~ 'Extra' ~ loop.index ~ 'ButtonDisplay') == \"icon\") and (j3.settings.get(stylePrefix ~ 'ExtraTooltipStatus')) %} data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"{{ j3.settings.get(stylePrefix ~ 'ExtraTooltipPosition') }}\" title=\"{{ extra_button.label }}\" {% endif %} {% if extra_button.action == 'quickbuy' %} data-quick-buy {% endif %} {% if extra_button.action == 'link' and extra_button.link.href %} href=\"{{ extra_button.link.href }}\" {{ j3.linkAttrs(extra_button.link) }} data-product_id=\"{{ product_id }}\" {% endif %} data-loading-text=\"<span class='btn-text'>{{ extra_button.label }}</span>\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-text\">{{ extra_button.label }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--//test-->
\t\t\t\t\t\t<div id=\"product\" class=\"product-details\">
\t\t\t\t\t\t\t<div class=\"product-details__top\">
\t\t\t\t\t\t\t\t{% if j3.settings.get(stylePrefix ~ 'ProductStock')%}
\t\t\t\t\t\t\t\t\t<div class=\"product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}\">
\t\t\t\t\t\t\t\t\t\t{# <b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}</b> #}
\t\t\t\t\t\t\t\t\t\t<span>{{ stock }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}
\t\t\t\t\t\t\t\t\t<div class=\"product-sku\">
\t\t\t\t\t\t\t\t\t\t<p>Код товару:
\t\t\t\t\t\t\t\t\t\t\t{{ product_sku }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title page-title\">{{ heading_title }}</div>
\t\t\t\t\t\t\t<p class=\"product-details__text\">Створіть ідеальний мікроклімат в приміщенні завдяки сучасним технологіям та поліпшеній функції очищення повітря.</p>
\t\t\t\t\t\t\t<p class=\"product-details__characteristics-title\">Характеристики</p>
\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t{% for attribute in attribute_one %}
\t\t\t\t\t\t\t\t\t{% if attribute.top == 1  %}
\t\t\t\t\t\t\t\t\t\t<span style=\"max-width: 75%;\" class=\"first__name__cust\">
                                          {{ attribute.name }}
                                        </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"first__text__cust\">
                                          {{ attribute.text }}
                                        </span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right-second second\">
\t\t\t\t\t\t<div class=\"second__bg\">
\t\t\t\t\t\t\t{% if price and not j3.document.isPopup('options') %}
\t\t\t\t\t\t\t\t<div class=\"second__price\">
\t\t\t\t\t\t\t\t\t{% if not special %}
\t\t\t\t\t\t\t\t\t\t<p class=\"second__current-price\">{{ price }}</p>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<p class=\"second__current-price\">{{ price }}</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"second__old-price\">{{ special }}</p>
\t\t\t\t\t\t\t\t\t{% endif %}



\t\t\t\t\t\t\t\t\t<div class=\"product-price-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t{% if points %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-points\">{{ text_points }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ points }}</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t{% if discounts %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"discounts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for discount in discounts %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-discount\">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if difference is not null %}
\t\t\t\t\t\t\t\t\t<p class=\"price-difference second__saving\">економія {{ difference }} ₴</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"stepper-group cart-group\">
\t\t\t\t\t\t\t\t<a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>{{ button_cart }}</span>\" class=\"second__cart btn btn-cart\"  data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\"  title=\"{{ button_cart }}\">
\t\t\t\t\t\t\t\t\t<p class=\"second__cart-text\">{{ button_cart }}</p>
\t\t\t\t\t\t\t\t\t<svg width=\"16\" height=\"16\" viewbox=\"0 0 16 16\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M9.59802 12.8104C9.81096 12.8104 10.0152 12.7264 10.1657 12.5769C10.3163 12.4273 10.4009 12.2245 10.4009 12.0131V10.4183C10.4009 10.2068 10.3163 10.004 10.1657 9.85445C10.0152 9.70491 9.81096 9.6209 9.59802 9.6209C9.38508 9.6209 9.18086 9.70491 9.03029 9.85445C8.87972 10.004 8.79513 10.2068 8.79513 10.4183V12.0131C8.79513 12.2245 8.87972 12.4273 9.03029 12.5769C9.18086 12.7264 9.38508 12.8104 9.59802 12.8104ZM6.38647 12.8104C6.59941 12.8104 6.80363 12.7264 6.9542 12.5769C7.10477 12.4273 7.18936 12.2245 7.18936 12.0131V10.4183C7.18936 10.2068 7.10477 10.004 6.9542 9.85445C6.80363 9.70491 6.59941 9.6209 6.38647 9.6209C6.17353 9.6209 5.96931 9.70491 5.81874 9.85445C5.66817 10.004 5.58358 10.2068 5.58358 10.4183V12.0131C5.58358 12.2245 5.66817 12.4273 5.81874 12.5769C5.96931 12.7264 6.17353 12.8104 6.38647 12.8104ZM13.6125 3.24183H12.5045L11.1155 0.490853C11.073 0.389627 11.01 0.298184 10.9304 0.222236C10.8508 0.146289 10.7562 0.0874696 10.6526 0.0494545C10.5491 0.0114394 10.4387 -0.00495455 10.3285 0.0012971C10.2183 0.00754876 10.1105 0.0363118 10.012 0.0857885C9.91348 0.135265 9.82628 0.204392 9.75587 0.28885C9.68546 0.373308 9.63334 0.471281 9.60277 0.576646C9.57221 0.682012 9.56386 0.792506 9.57823 0.901223C9.59261 1.00994 9.62941 1.11454 9.68634 1.2085L10.706 3.24183H5.27849L6.29815 1.2085C6.37609 1.02263 6.38034 0.814369 6.31005 0.62552C6.23977 0.436671 6.10016 0.281218 5.91924 0.190371C5.73833 0.0995242 5.5295 0.0800096 5.3347 0.135745C5.1399 0.19148 4.97353 0.318339 4.86901 0.490853L3.48002 3.24183H2.37204C1.80455 3.2504 1.25833 3.45772 0.829729 3.82721C0.401126 4.19671 0.117668 4.70465 0.029348 5.26145C-0.0589722 5.81825 0.0535193 6.38813 0.346982 6.8706C0.640445 7.35307 1.09603 7.71712 1.63338 7.89855L2.22752 13.847C2.28743 14.4391 2.56741 14.9878 3.0128 15.3859C3.45818 15.784 4.03698 16.003 4.63618 16H11.3644C11.9636 16.003 12.5424 15.784 12.9878 15.3859C13.4331 14.9878 13.7131 14.4391 13.773 13.847L14.3672 7.89855C14.9057 7.71658 15.362 7.3512 15.6552 6.86712C15.9485 6.38304 16.0598 5.8115 15.9694 5.25374C15.879 4.69598 15.5927 4.18799 15.1614 3.81975C14.73 3.45151 14.1813 3.24678 13.6125 3.24183ZM12.1592 13.6876C12.1393 13.8849 12.0459 14.0678 11.8975 14.2005C11.749 14.3332 11.5561 14.4062 11.3563 14.4052H4.62815C4.42842 14.4062 4.23548 14.3332 4.08702 14.2005C3.93856 14.0678 3.84523 13.8849 3.82526 13.6876L3.25521 8.02613H12.7293L12.1592 13.6876ZM13.6125 6.43136H2.37204C2.1591 6.43136 1.95488 6.34735 1.80431 6.19781C1.65374 6.04828 1.56915 5.84546 1.56915 5.63398C1.56915 5.4225 1.65374 5.21968 1.80431 5.07014C1.95488 4.92061 2.1591 4.8366 2.37204 4.8366H13.6125C13.8254 4.8366 14.0296 4.92061 14.1802 5.07014C14.3308 5.21968 14.4153 5.4225 14.4153 5.63398C14.4153 5.84546 14.3308 6.04828 14.1802 6.19781C14.0296 6.34735 13.8254 6.43136 13.6125 6.43136Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
{#\t\t\t\t\t\t\t<p class=\"second__pay-one-click\">{{ text__pay_one_click }}</p>#}
{#\t\t\t\t\t\t\t<form action=\"#\" method=\"POST\" class=\"second__form\">#}
{#\t\t\t\t\t\t\t\t<input class=\"second__form-input\" type=\"tel\" id=\"phone\" name=\"phone\" placeholder=\"+38 093 000-00-00\" required>#}
{#\t\t\t\t\t\t\t\t<button class=\"second__form-submut\" type=\"submit\">{{ text__buy }}</button>#}
{#\t\t\t\t\t\t\t</form>#}

                            <!--//-->
\t\t\t\t\t\t\t<div id=\"oneclick\" >
\t\t\t\t\t\t\t\t<p class=\"second__pay-one-click\">{{ text__pay_one_click }}</p>
\t\t\t\t\t\t\t\t\t<input class=\"second__form-input\" style=\"height: 57px;\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"+38 093 000-00-00\" id=\"input-payment-telephone\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\">
\t\t\t\t\t\t\t\t    <button type=\"submit\" id=\"button-oneclick\" class=\"second__form-submut\" >{{ text__buy }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--//-->

\t\t\t\t\t\t\t<div class=\"second__delivery\">
\t\t\t\t\t\t\t\t<p class=\"second__delivery-text\">{{ text__delivery }}</p>
\t\t\t\t\t\t\t\t<a href=\"{{ base }}delivery-information\" class=\"second__details\">{{ text__details }}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"second__buy-on-credit\">
\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_title\">{{ text__buy_on_credit }}</p>
\t\t\t\t\t\t\t<div class=\"second__buy-on-credit_row\">

\t\t\t\t\t\t\t\t<button type=\"button\" class=\"second__buy-on-credit_button\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">
\t\t\t\t\t\t\t\t\t{{ text__buy_on_credit }}
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"second__buy-on-credit_text\">
\t\t\t\t\t\t\t\t\t{% if not special %}
\t\t\t\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_price\">{{ price }}</p>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_price\">{{ special }}</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"second__old-price\">{{ price }}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
{#\t\t\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_price\">{{ price }}</p>#}
\t\t\t\t\t\t\t\t\t<p class=\"second__buy-on-credit_payments\">{{ credit_x_six_payments }}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<button type=\"button\" class=\"second__form-submut popup_productpage_chastyami_close\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 384 512\"><path d=\"M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z\"/></svg></button>
\t\t\t\t\t\t\t<form id=\"popup_productpage_chastyami\" class=\"popup_productpage_chastyami fancybox-content\" action=\"\" method=\"post\" style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"popup_title\">
\t\t\t\t\t\t\t\t\t{{ credit_pay_in_installments }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead\">
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead_th popup_productpage_chastyami_type_credit\">{{ credit_type_of_loan }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead_th popup_productpage_chastyami_period_month\">{{ credit_term }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead_th popup_productpage_chastyami_month_payment\">{{ credit_monthly_payment }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_table_thead_th popup_productpage_chastyami_btn_wrapper\"></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_item\" data-type=\"payment_pb_chastyami\">
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_type_credit\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_privat\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/icon_pb_logo.png\" class=\"popup_productpage_chastyami_privat_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_privat_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"popup_productpage_chastyami_privat_bank\">{{ credit_privat_bank }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"popup_productpage_chastyami_privat_type\">{{ credit_instant_installment }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/pp_logo.png\" class=\"popup_productpage_chastyami_privat_method_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_conditions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_period_month\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-hide-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"selectric-input\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ credit_months }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_month_payment\">
\t\t\t\t\t\t\t\t\t\t\t{# <span data-month=\"3\">3 508.39 ₴</span> #}
\t\t\t\t\t\t\t\t\t\t\t<span data-month=\"2\">5 262.05 ₴</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ credit_continue }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.9975 16.013C12.2637 16.013 12.519 15.908 12.7072 15.7211C12.8954 15.5342 13.0011 15.2807 13.0011 15.0163V13.0229C13.0011 12.7585 12.8954 12.505 12.7072 12.3181C12.519 12.1311 12.2637 12.0261 11.9975 12.0261C11.7313 12.0261 11.4761 12.1311 11.2879 12.3181C11.0997 12.505 10.9939 12.7585 10.9939 13.0229V15.0163C10.9939 15.2807 11.0997 15.5342 11.2879 15.7211C11.4761 15.908 11.7313 16.013 11.9975 16.013ZM7.98309 16.013C8.24926 16.013 8.50453 15.908 8.69275 15.7211C8.88096 15.5342 8.9867 15.2807 8.9867 15.0163V13.0229C8.9867 12.7585 8.88096 12.505 8.69275 12.3181C8.50453 12.1311 8.24926 12.0261 7.98309 12.0261C7.71691 12.0261 7.46164 12.1311 7.27343 12.3181C7.08522 12.505 6.97948 12.7585 6.97948 13.0229V15.0163C6.97948 15.2807 7.08522 15.5342 7.27343 15.7211C7.46164 15.908 7.71691 16.013 7.98309 16.013ZM17.0156 4.05228H15.6306L13.8943 0.613566C13.8413 0.487034 13.7625 0.37273 13.663 0.277795C13.5634 0.182861 13.4452 0.109337 13.3158 0.0618182C13.1863 0.0142993 13.0484 -0.00619319 12.9106 0.00162138C12.7728 0.00943595 12.6382 0.0453897 12.515 0.107236C12.3918 0.169081 12.2829 0.25549 12.1948 0.361062C12.1068 0.466635 12.0417 0.589101 12.0035 0.720808C11.9653 0.852515 11.9548 0.990633 11.9728 1.12653C11.9908 1.26243 12.0368 1.39318 12.1079 1.51062L13.3825 4.05228H6.59811L7.87269 1.51062C7.97011 1.27829 7.97542 1.01796 7.88757 0.7819C7.79971 0.545839 7.62519 0.351522 7.39905 0.237964C7.17291 0.124405 6.91188 0.100012 6.66838 0.169681C6.42487 0.23935 6.21692 0.397924 6.08627 0.613566L4.35002 4.05228H2.96504C2.25568 4.063 1.57291 4.32214 1.03716 4.78402C0.501408 5.24589 0.147085 5.88081 0.036685 6.57681C-0.0737153 7.27281 0.0668992 7.98517 0.433728 8.58825C0.800557 9.19133 1.37004 9.6464 2.04172 9.87319L2.78439 17.3088C2.85929 18.0489 3.20927 18.7348 3.766 19.2324C4.32273 19.73 5.04623 20.0037 5.79522 20H14.2055C14.9545 20.0037 15.678 19.73 16.2347 19.2324C16.7914 18.7348 17.1414 18.0489 17.2163 17.3088L17.959 9.87319C18.6321 9.64573 19.2025 9.189 19.5691 8.5839C19.9356 7.9788 20.0747 7.26438 19.9617 6.56718C19.8487 5.86998 19.4909 5.23499 18.9517 4.77469C18.4125 4.31439 17.7266 4.05848 17.0156 4.05228ZM15.199 17.1094C15.1741 17.3562 15.0574 17.5848 14.8718 17.7506C14.6863 17.9165 14.4451 18.0077 14.1954 18.0065H5.78518C5.53552 18.0077 5.29435 17.9165 5.10878 17.7506C4.9232 17.5848 4.80654 17.3562 4.78158 17.1094L4.06901 10.0327H15.9116L15.199 17.1094ZM17.0156 8.0392H2.96504C2.69887 8.0392 2.4436 7.93419 2.25539 7.74727C2.06717 7.56035 1.96144 7.30682 1.96144 7.04247C1.96144 6.77812 2.06717 6.5246 2.25539 6.33768C2.4436 6.15076 2.69887 6.04574 2.96504 6.04574H17.0156C17.2817 6.04574 17.537 6.15076 17.7252 6.33768C17.9134 6.5246 18.0192 6.77812 18.0192 7.04247C18.0192 7.30682 17.9134 7.56035 17.7252 7.74727C17.537 7.93419 17.2817 8.0392 17.0156 8.0392Z\" fill=\"white\"></path></svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_item\" data-type=\"payment_pb_rassrochka\">
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_type_credit\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_privat popup_productpage_chastyami_privat_rassrochka\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/icon_pb_logo.png\" class=\"popup_productpage_chastyami_privat_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_privat_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"popup_productpage_chastyami_privat_bank\">{{ credit_privat_bank }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"popup_productpage_chastyami_privat_type\">{{ credit_payment_in_installments }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/ip_logo.png\" class=\"popup_productpage_chastyami_privat_method_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_conditions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_period_month\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-wrapper\"><div class=\"selectric-hide-select\"><select tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"selectric-input\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ credit_months }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_month_payment\">
\t\t\t\t\t\t\t\t\t\t\t{# <span data-month=\"3\">3 812.47 ₴</span> #}
\t\t\t\t\t\t\t\t\t\t\t<span data-month=\"2\">5 566.14 ₴</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ credit_continue }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.9975 16.013C12.2637 16.013 12.519 15.908 12.7072 15.7211C12.8954 15.5342 13.0011 15.2807 13.0011 15.0163V13.0229C13.0011 12.7585 12.8954 12.505 12.7072 12.3181C12.519 12.1311 12.2637 12.0261 11.9975 12.0261C11.7313 12.0261 11.4761 12.1311 11.2879 12.3181C11.0997 12.505 10.9939 12.7585 10.9939 13.0229V15.0163C10.9939 15.2807 11.0997 15.5342 11.2879 15.7211C11.4761 15.908 11.7313 16.013 11.9975 16.013ZM7.98309 16.013C8.24926 16.013 8.50453 15.908 8.69275 15.7211C8.88096 15.5342 8.9867 15.2807 8.9867 15.0163V13.0229C8.9867 12.7585 8.88096 12.505 8.69275 12.3181C8.50453 12.1311 8.24926 12.0261 7.98309 12.0261C7.71691 12.0261 7.46164 12.1311 7.27343 12.3181C7.08522 12.505 6.97948 12.7585 6.97948 13.0229V15.0163C6.97948 15.2807 7.08522 15.5342 7.27343 15.7211C7.46164 15.908 7.71691 16.013 7.98309 16.013ZM17.0156 4.05228H15.6306L13.8943 0.613566C13.8413 0.487034 13.7625 0.37273 13.663 0.277795C13.5634 0.182861 13.4452 0.109337 13.3158 0.0618182C13.1863 0.0142993 13.0484 -0.00619319 12.9106 0.00162138C12.7728 0.00943595 12.6382 0.0453897 12.515 0.107236C12.3918 0.169081 12.2829 0.25549 12.1948 0.361062C12.1068 0.466635 12.0417 0.589101 12.0035 0.720808C11.9653 0.852515 11.9548 0.990633 11.9728 1.12653C11.9908 1.26243 12.0368 1.39318 12.1079 1.51062L13.3825 4.05228H6.59811L7.87269 1.51062C7.97011 1.27829 7.97542 1.01796 7.88757 0.7819C7.79971 0.545839 7.62519 0.351522 7.39905 0.237964C7.17291 0.124405 6.91188 0.100012 6.66838 0.169681C6.42487 0.23935 6.21692 0.397924 6.08627 0.613566L4.35002 4.05228H2.96504C2.25568 4.063 1.57291 4.32214 1.03716 4.78402C0.501408 5.24589 0.147085 5.88081 0.036685 6.57681C-0.0737153 7.27281 0.0668992 7.98517 0.433728 8.58825C0.800557 9.19133 1.37004 9.6464 2.04172 9.87319L2.78439 17.3088C2.85929 18.0489 3.20927 18.7348 3.766 19.2324C4.32273 19.73 5.04623 20.0037 5.79522 20H14.2055C14.9545 20.0037 15.678 19.73 16.2347 19.2324C16.7914 18.7348 17.1414 18.0489 17.2163 17.3088L17.959 9.87319C18.6321 9.64573 19.2025 9.189 19.5691 8.5839C19.9356 7.9788 20.0747 7.26438 19.9617 6.56718C19.8487 5.86998 19.4909 5.23499 18.9517 4.77469C18.4125 4.31439 17.7266 4.05848 17.0156 4.05228ZM15.199 17.1094C15.1741 17.3562 15.0574 17.5848 14.8718 17.7506C14.6863 17.9165 14.4451 18.0077 14.1954 18.0065H5.78518C5.53552 18.0077 5.29435 17.9165 5.10878 17.7506C4.9232 17.5848 4.80654 17.3562 4.78158 17.1094L4.06901 10.0327H15.9116L15.199 17.1094ZM17.0156 8.0392H2.96504C2.69887 8.0392 2.4436 7.93419 2.25539 7.74727C2.06717 7.56035 1.96144 7.30682 1.96144 7.04247C1.96144 6.77812 2.06717 6.5246 2.25539 6.33768C2.4436 6.15076 2.69887 6.04574 2.96504 6.04574H17.0156C17.2817 6.04574 17.537 6.15076 17.7252 6.33768C17.9134 6.5246 18.0192 6.77812 18.0192 7.04247C18.0192 7.30682 17.9134 7.56035 17.7252 7.74727C17.537 7.93419 17.2817 8.0392 17.0156 8.0392Z\" fill=\"white\"></path></svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_item\" data-type=\"payment_mono_chastyami\">
\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_type_credit\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_mono\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/image/monobank-logo.png\" class=\"popup_productpage_chastyami_mono_logo\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_conditions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_period_month\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"selectric-hide-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"selectric-input\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ credit_months }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_month_payment\">
\t\t\t\t\t\t\t\t\t\t\t<span data-month=\"3\">3 508.39 ₴</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"popup_productpage_chastyami_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ credit_continue }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.9975 16.013C12.2637 16.013 12.519 15.908 12.7072 15.7211C12.8954 15.5342 13.0011 15.2807 13.0011 15.0163V13.0229C13.0011 12.7585 12.8954 12.505 12.7072 12.3181C12.519 12.1311 12.2637 12.0261 11.9975 12.0261C11.7313 12.0261 11.4761 12.1311 11.2879 12.3181C11.0997 12.505 10.9939 12.7585 10.9939 13.0229V15.0163C10.9939 15.2807 11.0997 15.5342 11.2879 15.7211C11.4761 15.908 11.7313 16.013 11.9975 16.013ZM7.98309 16.013C8.24926 16.013 8.50453 15.908 8.69275 15.7211C8.88096 15.5342 8.9867 15.2807 8.9867 15.0163V13.0229C8.9867 12.7585 8.88096 12.505 8.69275 12.3181C8.50453 12.1311 8.24926 12.0261 7.98309 12.0261C7.71691 12.0261 7.46164 12.1311 7.27343 12.3181C7.08522 12.505 6.97948 12.7585 6.97948 13.0229V15.0163C6.97948 15.2807 7.08522 15.5342 7.27343 15.7211C7.46164 15.908 7.71691 16.013 7.98309 16.013ZM17.0156 4.05228H15.6306L13.8943 0.613566C13.8413 0.487034 13.7625 0.37273 13.663 0.277795C13.5634 0.182861 13.4452 0.109337 13.3158 0.0618182C13.1863 0.0142993 13.0484 -0.00619319 12.9106 0.00162138C12.7728 0.00943595 12.6382 0.0453897 12.515 0.107236C12.3918 0.169081 12.2829 0.25549 12.1948 0.361062C12.1068 0.466635 12.0417 0.589101 12.0035 0.720808C11.9653 0.852515 11.9548 0.990633 11.9728 1.12653C11.9908 1.26243 12.0368 1.39318 12.1079 1.51062L13.3825 4.05228H6.59811L7.87269 1.51062C7.97011 1.27829 7.97542 1.01796 7.88757 0.7819C7.79971 0.545839 7.62519 0.351522 7.39905 0.237964C7.17291 0.124405 6.91188 0.100012 6.66838 0.169681C6.42487 0.23935 6.21692 0.397924 6.08627 0.613566L4.35002 4.05228H2.96504C2.25568 4.063 1.57291 4.32214 1.03716 4.78402C0.501408 5.24589 0.147085 5.88081 0.036685 6.57681C-0.0737153 7.27281 0.0668992 7.98517 0.433728 8.58825C0.800557 9.19133 1.37004 9.6464 2.04172 9.87319L2.78439 17.3088C2.85929 18.0489 3.20927 18.7348 3.766 19.2324C4.32273 19.73 5.04623 20.0037 5.79522 20H14.2055C14.9545 20.0037 15.678 19.73 16.2347 19.2324C16.7914 18.7348 17.1414 18.0489 17.2163 17.3088L17.959 9.87319C18.6321 9.64573 19.2025 9.189 19.5691 8.5839C19.9356 7.9788 20.0747 7.26438 19.9617 6.56718C19.8487 5.86998 19.4909 5.23499 18.9517 4.77469C18.4125 4.31439 17.7266 4.05848 17.0156 4.05228ZM15.199 17.1094C15.1741 17.3562 15.0574 17.5848 14.8718 17.7506C14.6863 17.9165 14.4451 18.0077 14.1954 18.0065H5.78518C5.53552 18.0077 5.29435 17.9165 5.10878 17.7506C4.9232 17.5848 4.80654 17.3562 4.78158 17.1094L4.06901 10.0327H15.9116L15.199 17.1094ZM17.0156 8.0392H2.96504C2.69887 8.0392 2.4436 7.93419 2.25539 7.74727C2.06717 7.56035 1.96144 7.30682 1.96144 7.04247C1.96144 6.77812 2.06717 6.5246 2.25539 6.33768C2.4436 6.15076 2.69887 6.04574 2.96504 6.04574H17.0156C17.2817 6.04574 17.537 6.15076 17.7252 6.33768C17.9134 6.5246 18.0192 6.77812 18.0192 7.04247C18.0192 7.30682 17.9134 7.56035 17.7252 7.74727C17.537 7.93419 17.2817 8.0392 17.0156 8.0392Z\" fill=\"white\"></path></svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Modal -->
\t\t\t{% if description and j3.document.isPopup('quickview') and j3.settings.get('quickviewDescription') and (j3.settings.get('quickviewDescriptionPosition') == 'default') %}
\t\t\t\t<div class=\"description {{ quickviewExpand }}\">
\t\t\t\t\t<div class=\"expand-block\">
\t\t\t\t\t\t<div class=\"expand-content\">
\t\t\t\t\t\t\t{{ description }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if j3.settings.get('quickviewExpandButton') %}
\t\t\t\t\t\t\t<div class=\"block-expand-overlay\">
\t\t\t\t\t\t\t\t<a class=\"block-expand btn\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if not j3.document.isPopup('options') %}
\t\t\t\t{% if product_blocks.default %}
\t\t\t\t\t<div class=\"product-blocks blocks-default\">
\t\t\t\t\t\t{{ product_blocks.default|join }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t\t{% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'default') %}
\t\t\t\t<div class=\"tags\">
\t\t\t\t\t<span class=\"tags-title\">{{ text_tags }}</span>
\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t<a href=\"{{ tag.href }}\">{{ tag.tag }}</a>
\t\t\t\t\t\t{% if not loop.last %}
\t\t\t\t\t\t\t<b>,</b>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if not j3.document.isPopup() %}
\t\t\t{{ content_bottom }}</div>
\t\t{{ column_right }}</div>
</div>
{% endif %}

<div class=\"reviews\">
\t<div class=\"reviews__container\">
\t\t<div class=\"reviews__title\">
\t\t\t<h3 class=\"reviews__title_text\">{{ tab_review }}</h3>
\t\t</div>
\t\t<div class=\"reviews__row\">
\t\t\t<div class=\"reviews__body\">
\t\t\t</div>
\t\t\t<div class=\"reviews__general\">
\t\t\t\t<div class=\"reviews__overall overall\">
\t\t\t\t\t<div class=\"overall__assessment\">
\t\t\t\t\t\t<p>4.9</p><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"23\" viewBox=\"0 0 25 23\" fill=\"none\">
\t\t\t\t\t\t\t<path d=\"M24.9581 8.69592C24.8792 8.47605 24.7358 8.28292 24.5453 8.13997C24.3547 7.99701 24.1252 7.91036 23.8845 7.89053L16.7817 6.89281L13.5985 0.678101C13.4963 0.474865 13.3367 0.303466 13.138 0.183537C12.9393 0.0636076 12.7096 0 12.4751 0C12.2406 0 12.0108 0.0636076 11.8121 0.183537C11.6134 0.303466 11.4538 0.474865 11.3516 0.678101L8.16842 6.88079L1.06559 7.89053C0.834554 7.92216 0.617352 8.0155 0.438628 8.15999C0.259904 8.30447 0.126815 8.4943 0.0544631 8.70794C-0.0117655 8.91671 -0.0177088 9.13891 0.0372712 9.35068C0.0922512 9.56246 0.206079 9.75582 0.366538 9.91002L5.52202 14.7183L4.27372 21.5461C4.22332 21.7726 4.24196 22.0083 4.32738 22.2248C4.4128 22.4413 4.56137 22.6295 4.75523 22.7667C4.94908 22.9038 5.17995 22.9841 5.42007 22.9979C5.66019 23.0117 5.89933 22.9583 6.10872 22.8443L12.4751 19.6348L18.8414 22.8443C19.0166 22.9395 19.2145 22.9892 19.4156 22.9886C19.68 22.9895 19.9379 22.9095 20.1521 22.7602C20.3458 22.6266 20.4957 22.4424 20.5842 22.2294C20.6727 22.0164 20.696 21.7835 20.6514 21.5581L19.4031 14.7303L24.5586 9.92204C24.7388 9.775 24.872 9.58173 24.9428 9.36469C25.0135 9.14766 25.0188 8.91575 24.9581 8.69592ZM17.281 13.5042C17.1365 13.6393 17.0281 13.8061 16.9651 13.9903C16.9021 14.1745 16.8863 14.3707 16.919 14.562L17.8178 19.6107L13.1242 17.2066C12.9418 17.1197 12.741 17.0745 12.5375 17.0745C12.334 17.0745 12.1332 17.1197 11.9508 17.2066L7.25716 19.6107L8.15594 14.562C8.18869 14.3707 8.17287 14.1745 8.10983 13.9903C8.0468 13.8061 7.93841 13.6393 7.79393 13.5042L4.04903 9.89799L9.30437 9.16473C9.5066 9.13764 9.69883 9.0632 9.86423 8.94794C10.0296 8.83267 10.1632 8.6801 10.2531 8.50359L12.4751 3.9237L14.8219 8.51561C14.9118 8.69212 15.0453 8.8447 15.2107 8.95996C15.3761 9.07523 15.5683 9.14966 15.7706 9.17675L21.0259 9.91002L17.281 13.5042Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"overall__title\">{{ text__overall }}</p>
\t\t\t\t\t<p class=\"overall__quantity\">{{ text__reviews }}</p>
\t\t\t\t\t<div class=\"overall__body\">
\t\t\t\t\t\t<div class=\"overall__one overall__row\">
\t\t\t\t\t\t\t<p>1</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"overall__two overall__row\">
\t\t\t\t\t\t\t<p>2</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"overall__three overall__row\">
\t\t\t\t\t\t\t<p>3</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"overall__four overall__row\">
\t\t\t\t\t\t\t<p>4</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"overall__five overall__row\">
\t\t\t\t\t\t\t<p>5</p>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M14.9748 5.29317C14.9275 5.15933 14.8415 5.04178 14.7272 4.95476C14.6128 4.86775 14.4751 4.815 14.3307 4.80293L10.069 4.19563L8.15912 0.412757C8.09779 0.289049 8.00203 0.184718 7.88281 0.111718C7.76359 0.0387177 7.62574 0 7.48503 0C7.34433 0 7.20648 0.0387177 7.08726 0.111718C6.96804 0.184718 6.87228 0.289049 6.81095 0.412757L4.90105 4.18831L0.639352 4.80293C0.500733 4.82218 0.370411 4.879 0.263177 4.96695C0.155942 5.0549 0.0760887 5.17045 0.0326779 5.30049C-0.00705933 5.42756 -0.0106253 5.56281 0.0223627 5.69172C0.0553507 5.82063 0.123647 5.93833 0.219923 6.03218L3.31321 8.95897L2.56423 13.115C2.53399 13.2529 2.54517 13.3963 2.59643 13.5281C2.64768 13.66 2.73682 13.7745 2.85314 13.858C2.96945 13.9414 3.10797 13.9903 3.25204 13.9987C3.39611 14.0071 3.5396 13.9746 3.66523 13.9052L7.48503 11.9516L11.3048 13.9052C11.41 13.9632 11.5287 13.9934 11.6494 13.993C11.808 13.9936 11.9628 13.9449 12.0913 13.854C12.2075 13.7727 12.2974 13.6606 12.3505 13.5309C12.4036 13.4013 12.4176 13.2595 12.3909 13.1223L11.6419 8.96628L14.7352 6.0395C14.8433 5.95 14.9232 5.83236 14.9657 5.70025C15.0081 5.56814 15.0113 5.42698 14.9748 5.29317ZM10.3686 8.21996C10.2819 8.3022 10.2169 8.40372 10.1791 8.51584C10.1412 8.62797 10.1318 8.74736 10.1514 8.86385L10.6907 11.937L7.8745 10.4736C7.76506 10.4207 7.64459 10.3932 7.52248 10.3932C7.40037 10.3932 7.27991 10.4207 7.17046 10.4736L4.3543 11.937L4.89356 8.86385C4.91321 8.74736 4.90372 8.62797 4.8659 8.51584C4.82808 8.40372 4.76305 8.3022 4.67636 8.21996L2.42942 6.02487L5.58262 5.57853C5.70396 5.56204 5.8193 5.51673 5.91854 5.44657C6.01778 5.37641 6.09789 5.28354 6.15185 5.1761L7.48503 2.38834L8.89312 5.18342C8.94708 5.29086 9.02719 5.38373 9.12643 5.45389C9.22567 5.52405 9.34101 5.56936 9.46234 5.58585L12.6156 6.03218L10.3686 8.21996Z\" fill=\"#E6C622\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"overall__progressbar\">
\t\t\t\t\t\t\t\t<div class=\"overall__progress\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Sofii rewiew_cust  -->

\t\t\t\t{% if review_status %}
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t{# andrii ostrovskij #}
\t\t\t\t\t\t<form class=\"form-horizontal rewiew_cust form-review \" id=\"form-review\">
\t\t\t\t\t\t\t<div class=\"rewiew_right_cust\">
\t\t\t\t\t\t\t\t{# скопійовано з попереднього сайту #}
\t\t\t\t\t\t\t\t<div class=\"reviews__overall overall\">
\t\t\t\t\t\t\t\t{# /скопійовано з попереднього сайту #}
\t\t\t\t\t\t\t\t<p class=\"reviews-form__title\">{{ text__leave_a_review }}</p>
\t\t\t\t\t\t\t\t{% if review_guest %}
\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">{{ text__name }}</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"{{ customer_name }}\" id=\"input-name\"
\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-email\">{{ text__email }}</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ customer_email }}\" id=\"input-email\"
\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">{{ text__review }}</label>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\"
\t\t\t\t\t\t\t\t\t\t\t\t\t  class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\t   for=\"input-advantages\">{{ entry_advantages }}</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"advantages\" value=\"{{ customer_advantages }}\"
\t\t\t\t\t\t\t\t\t\t\t\t   id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\t   for=\"input-disadvantages\">{{ entry_disadvantages }}</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"disadvantages\" value=\"{{ customer_disadvantages }}\"
\t\t\t\t\t\t\t\t\t\t\t\t   id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ entry_rating }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating1\" name=\"rating\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating2\" name=\"rating\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating3\" name=\"rating\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating4\" name=\"rating\" value=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating5\" name=\"rating\" value=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ captcha }}
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"{{ text_loading }}\" class=\"\">{{ text__leave_a_review }}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ text_login }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t{# andrii ostrovskij #}
\t\t\t\t{% endif %}



\t\t\t\t<!-- Sofii rewiew_cust  -->

{#\t\t\t\t<div class=\"reviews__form reviews-form\">#}
{#\t\t\t\t\t<p class=\"reviews-form__title\">{{ text__leave_a_review }}</p>#}
{#\t\t\t\t\t<form id=\"form-review\">#}
{#\t\t\t\t\t\t{% if review_status %}#}
{#\t\t\t\t\t\t\t<label for=\"name\">{{ text__name }}</label>#}
{#\t\t\t\t\t\t\t<input name=\"name\" value=\"{{ customer_name }}\" id=\"input-name\" type=\"text\" required>#}

{#\t\t\t\t\t\t\t<label for=\"email\">{{ text__email }}</label>#}
{#\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" required>#}

{#\t\t\t\t\t\t\t<label for=\"text\">{{ text__review }}</label>#}
{#\t\t\t\t\t\t\t<textarea id=\"input-review\" name=\"text\" rows=\"4\" required></textarea>#}

{#\t\t\t\t\t\t\t<label for=\"advantages\">{{ text_benefits }}</label>#}
{#\t\t\t\t\t\t\t<input type=\"text\" id=\"advantages\" name=\"advantages\" required>#}

{#\t\t\t\t\t\t\t<label for=\"disadvantages\">{{ text_disadvantages }}</label>#}
{#\t\t\t\t\t\t\t<input type=\"text\" id=\"disadvantages\" name=\"disadvantages\" required>#}

{#\t\t\t\t\t\t\t<label>{{ text__rate_the_product }}</label>#}
{#\t\t\t\t\t\t\t<div class=\"star-rating\">#}
{#\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating1\" name=\"rating\" value=\"1\">#}
{#\t\t\t\t\t\t\t\t<label for=\"rating1\">#}
{#\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">#}
{#\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>#}
{#\t\t\t\t\t\t\t\t\t</svg>#}
{#\t\t\t\t\t\t\t\t</label>#}
{#\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating2\" name=\"rating\" value=\"2\">#}
{#\t\t\t\t\t\t\t\t<label for=\"rating2\">#}
{#\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">#}
{#\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>#}
{#\t\t\t\t\t\t\t\t\t</svg>#}
{#\t\t\t\t\t\t\t\t</label>#}
{#\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating3\" name=\"rating\" value=\"3\">#}
{#\t\t\t\t\t\t\t\t<label for=\"rating3\">#}
{#\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">#}
{#\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>#}
{#\t\t\t\t\t\t\t\t\t</svg>#}
{#\t\t\t\t\t\t\t\t</label>#}
{#\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating4\" name=\"rating\" value=\"4\">#}
{#\t\t\t\t\t\t\t\t<label for=\"rating4\">#}
{#\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">#}
{#\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>#}
{#\t\t\t\t\t\t\t\t\t</svg>#}
{#\t\t\t\t\t\t\t\t</label>#}
{#\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating5\" name=\"rating\" value=\"5\">#}
{#\t\t\t\t\t\t\t\t<label for=\"rating5\">#}
{#\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\">#}
{#\t\t\t\t\t\t\t\t\t\t<path d=\"M15.9732 5.67125C15.9227 5.52786 15.8309 5.40191 15.709 5.30867C15.587 5.21544 15.4401 5.15893 15.2861 5.146L10.7403 4.49531L8.70306 0.44224C8.63764 0.309695 8.5355 0.197912 8.40833 0.119698C8.28116 0.0414832 8.13412 0 7.98404 0C7.83396 0 7.68691 0.0414832 7.55974 0.119698C7.43258 0.197912 7.33043 0.309695 7.26502 0.44224L5.22779 4.48747L0.681976 5.146C0.534115 5.16662 0.395105 5.2275 0.280722 5.32173C0.166338 5.41596 0.0811613 5.53976 0.0348564 5.67909C-0.00752995 5.81525 -0.0113336 5.96016 0.0238536 6.09827C0.0590407 6.23639 0.13189 6.36249 0.234585 6.46305L3.53409 9.59889L2.73518 14.0518C2.70293 14.1995 2.71485 14.3532 2.76952 14.4944C2.82419 14.6357 2.91928 14.7584 3.04334 14.8478C3.16741 14.9373 3.31517 14.9896 3.46885 14.9986C3.62252 15.0076 3.77557 14.9728 3.90958 14.8985L7.98404 12.8053L12.0585 14.8985C12.1706 14.9605 12.2973 14.993 12.426 14.9925C12.5952 14.9931 12.7603 14.941 12.8973 14.8436C13.0213 14.7565 13.1172 14.6363 13.1739 14.4974C13.2305 14.3585 13.2454 14.2066 13.2169 14.0596L12.418 9.60673L15.7175 6.47089C15.8329 6.375 15.9181 6.24896 15.9634 6.10741C16.0086 5.96586 16.012 5.81462 15.9732 5.67125ZM11.0598 8.80709C10.9674 8.89522 10.898 9.00399 10.8577 9.12412C10.8173 9.24425 10.8072 9.37218 10.8282 9.49698L11.4034 12.7896L8.39947 11.2217C8.28273 11.165 8.15423 11.1355 8.02398 11.1355C7.89373 11.1355 7.76524 11.165 7.64849 11.2217L4.64458 12.7896L5.2198 9.49698C5.24076 9.37218 5.23064 9.24425 5.19029 9.12412C5.14995 9.00399 5.08058 8.89522 4.98811 8.80709L2.59138 6.45521L5.9548 5.977C6.08422 5.95933 6.20725 5.91079 6.31311 5.83561C6.41897 5.76044 6.50442 5.66094 6.56197 5.54582L7.98404 2.55893L9.48599 5.55366C9.54355 5.66878 9.629 5.76828 9.73485 5.84345C9.84071 5.91863 9.96374 5.96717 10.0932 5.98484L13.4566 6.46305L11.0598 8.80709Z\"/>#}
{#\t\t\t\t\t\t\t\t\t</svg>#}
{#\t\t\t\t\t\t\t\t</label>#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"{{ text_loading }}\" type=\"submit\">{{ text__leave_a_review }}</button>#}
{#\t\t\t\t\t\t{% endif %}#}
{#\t\t\t\t\t</form>#}
{#\t\t\t\t</div>#}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{# on click #}
<script src=\"catalog/view/javascript/jquery.maskedinput.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\"#input-payment-telephone\").mask(\"{{ text_one_click_mask }}\",{placeholder:\" \"});
\t});
</script>

<script type=\"text/javascript\"><!--
\t\$('#button-oneclick').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/one_click/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#oneclick input[type=\\'text\\'], #oneclick input[type=\\'hidden\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-oneclick').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-oneclick').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['telephone']) {
\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['telephone'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t}
\t\t\t\t\tif (json['error']['product']) {
\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['product'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t}
\t\t\t\t\tif (json['error']['order']) {
\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger text-danger\">' + json['error']['order'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t//--></script>
{# on click #}

{# Магія зірок #}
<script>
\tconst ratingInputs = document.querySelectorAll('.star-rating input[type=\"radio\"]');
\tconst starLabels = document.querySelectorAll('.star-rating label');

\tratingInputs.forEach((input, index) => {
\t\tinput.addEventListener('change', () => {
\t\t\tconst selectedRating = parseInt(input.value);

\t\t\tstarLabels.forEach((label, i) => {
\t\t\t\tconst svgPath = label.querySelector('svg path');

\t\t\t\tif (i < selectedRating) {
\t\t\t\t\tsvgPath.style.fill = '#EFBE11';
\t\t\t\t} else {
\t\t\t\t\tsvgPath.style.fill = '#BDC2D3';
\t\t\t\t}
\t\t\t});
\t\t});
\t});
</script>

<script
\t\ttype=\"text/javascript\">
\t<!--
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t//
\t-->
</script>
<script
\t\ttype=\"text/javascript\">
\t<!--
\t\$('#button-cart, [data-quick-buy]').on('click', function () {
\t\tvar \$btn = \$(this);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' + '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' + '#product select[name=\"recurring_id\"]'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-cart').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-cart').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t}

// Highlight any found errors
\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');

\t\t\t\t\ttry {
\t\t\t\t\t\t\$('html, body').animate({
\t\t\t\t\t\t\tscrollTop: \$('.form-group.has-error').offset().top - 50
\t\t\t\t\t\t}, 'slow');
\t\t\t\t\t} catch (e) {}
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tif (\$('html').hasClass('popup-options')) {
\t\t\t\t\t\tparent.\$(\".popup-options .popup-close\").trigger('click');
\t\t\t\t\t}

\t\t\t\t\tif (json['notification']) {
\t\t\t\t\t\tparent.show_notification(json['notification']);
\t\t\t\t\t} else {
\t\t\t\t\t\tparent.\$('#content').parent().before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}

\t\t\t\t\tparent.\$('#cart-total').html(json['total']);
\t\t\t\t\tparent.\$('#cart-items,.cart-badge').html(json['items_count']);

\t\t\t\t\tif (json['items_count']) {
\t\t\t\t\t\tparent.\$('#cart-items,.cart-badge').removeClass('count-zero');
\t\t\t\t\t} else {
\t\t\t\t\t\tparent.\$('#cart-items,.cart-badge').addClass('count-zero');
\t\t\t\t\t}

\t\t\t\t\tif (Journal['scrollToTop']) {
\t\t\t\t\t\tparent.\$('html, body').animate({
\t\t\t\t\t\t\tscrollTop: 0
\t\t\t\t\t\t}, 'slow');
\t\t\t\t\t}

\t\t\t\t\tparent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

\t\t\t\t\tif (window.location.href.indexOf('quick_buy=true') !== -1) {
\t\t\t\t\t\tparent.location.href = Journal['checkoutUrl'];
\t\t\t\t\t}

\t\t\t\t\tif (\$btn.data('quick-buy') !== undefined) {
\t\t\t\t\t\tlocation = Journal['checkoutUrl'];
\t\t\t\t\t}

\t\t\t\t\tif (parent.window['_QuickCheckout']) {
\t\t\t\t\t\tparent.window['_QuickCheckout'].save();
\t\t\t\t\t}

\t\t\t\t\tif (json['redirect']) {
\t\t\t\t\t\tparent.location.href = json['redirect'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t//
\t-->
</script>
<script
\t\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '{{ datepicker }}', pickTime: false});

\t\$('.datetime').datetimepicker({language: '{{ datepicker }}', pickDate: true, pickTime: true});

\t\$('.time').datetimepicker({language: '{{ datepicker }}', pickDate: false});

\t\$('button[id^=\\'button-upload\\']').on('click', function () {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function () {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
\t//
\t-->
</script>
<script
\t\ttype=\"text/javascript\">
\t<!--
\t\$(function () {
\t\t\$('#review').delegate('.pagination a', 'click', function (e) {
\t\t\te.preventDefault();

\t\t\t\$('#review').fadeOut('slow');

\t\t\t\$('#review').load(this.href);

\t\t\t\$('#review').fadeIn('slow');
\t\t});

\t\t\$('.reviews__body').load('index.php?route=product/product/review&product_id={{ product_id }}');


\t\t\$('#button-review').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=product/product/write&product_id={{ product_id }}',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\$('#button-review').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function () {
\t\t\t\t\t\$('#button-review').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'email\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'advantages\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'disadvantages\\']').val('');
\t\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t});


\t\$(document).ready(function () {
\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype: 'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t\tenabled: true
\t\t\t}
\t\t});
\t});

\t\$(document).ready(function () {
\t\t\$('.review-links a').on('click', function () {
\t\t\tvar \$review = \$('#review');
\t\t\tif (\$review.length) {
\t\t\t\t\$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
\t\t\t\t\$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
\t\t\t\t\$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');

\t\t\t\t\$([document.documentElement, document.body]).animate({
\t\t\t\t\tscrollTop: \$review.offset().top - 100
\t\t\t\t}, 200);
\t\t\t}
\t\t});
\t});

\t//
\t-->
</script>
{% if not j3.document.isPopup() %}
\t{{ j3.loadController('journal3/seo/rich_snippets', breadcrumbs) }}
{% endif %}

                    <!-- YouTube Product Video -- Start -->
                    {{ youtube_product_video }}
                    <!-- YouTube Product Video -- End -->
                
{{ footer }}
", "journal3/template/product/product.twig", "");
    }
}
