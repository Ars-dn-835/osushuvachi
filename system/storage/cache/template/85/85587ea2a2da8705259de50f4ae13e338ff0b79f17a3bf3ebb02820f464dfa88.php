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

/* journal3/template/journal3/product_card.twig */
class __TwigTemplate_cba917dcecfeda281e974eebcfe409a908274d830bf89ac93f7f89dbd2fa07b7 extends \Twig\Template
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
        $context["prefix"] = (((($context["display"] ?? null) == "grid")) ? ("ProductGrid") : ("ProductList"));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "    ";
            $context["classes"] = twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (twig_get_attribute($this->env, $this->source,             // line 4
$context["product"], "quantity", [], "any", false, false, false, 4) <= 0), "has-countdown" => twig_get_attribute($this->env, $this->source,             // line 5
$context["product"], "date_end", [], "any", false, false, false, 5), "has-zero-price" =>  !twig_get_attribute($this->env, $this->source,             // line 6
$context["product"], "price_value", [], "any", false, false, false, 6), "has-extra-button" => twig_get_attribute($this->env, $this->source,             // line 7
$context["product"], "extra_buttons", [], "any", false, false, false, 7)]], "method", false, false, false, 3);
            // line 9
            echo "    <div class=\"product-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 9)], "method", false, false, false, 9);
            echo " ";
            echo ($context["classes"] ?? null);
            echo "\">
        <div class=\"product-thumb\">
            ";
            // line 11
            if ((($context["module_id"] ?? null) == 343)) {
                // line 12
                echo "                <style>
                    .right
                    {
                        position: absolute;
                        right: 20px;
                        bottom: 20px;
                    }
                </style>
                <div class=\"slide__attribute attribute right\">
                    <div style=\"display: flex; flex-direction: column; align-items: center; margin-bottom: 10px;\" class=\"attribute__wifi\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"43\" height=\"28\"
                                                                                                                                               viewBox=\"0 0 43 28\" fill=\"none\">
                            <path
                                    d=\"M21.5003 21.9438C19.7617 21.9438 18.3464 23.0938 18.3464 24.5066C18.3464 25.9193 19.7617 27.0693 21.5003 27.0693C23.2389 27.0693 24.6541 25.9193 24.6541 24.5066C24.6541 23.0938 23.2389 21.9438 21.5003 21.9438ZM21.5018 25.7879C21.5003 25.7879 21.5003 25.7867 21.5003 25.7854L23.0772 25.7879H21.5018Z\"
                                    fill=\"#010101\" stroke=\"black\" />
                            <path
                                    d=\"M14.0777 18.4756C13.4633 18.9749 13.4633 19.7807 14.0762 20.2825C14.6845 20.7818 15.6839 20.7867 16.303 20.2912C16.8373 19.8633 21.6836 16.2207 26.693 20.2875C27.001 20.5378 27.4045 20.6629 27.808 20.6629C28.2115 20.6629 28.6149 20.5377 28.9229 20.2875C29.5389 19.787 29.5389 18.9761 28.9229 18.4756C23.0526 13.7043 16.6433 16.3896 14.0777 18.4756Z\"
                                    fill=\"#010101\" stroke=\"black\" />
                            <path
                                    d=\"M7.77035 13.3499C7.15591 13.8492 7.15591 14.6588 7.76882 15.1593C8.38479 15.6623 9.3827 15.6611 9.99867 15.1631C10.4699 14.7839 21.6746 5.96209 33.001 15.1618C33.309 15.4121 33.7125 15.5372 34.1159 15.5372C34.5194 15.5372 34.9229 15.4121 35.2309 15.1618C35.8469 14.6613 35.8469 13.8504 35.2309 13.3499C21.6638 2.32323 7.90586 13.2385 7.77035 13.3499Z\"
                                    fill=\"#010101\" stroke=\"black\" />
                            <path
                                    d=\"M41.538 8.22526C21.7311 -7.87176 1.66081 8.06008 1.46217 8.22526C0.846198 8.72454 0.846198 9.5354 1.46064 10.0359C2.07661 10.5365 3.07452 10.5365 3.69049 10.0384C4.42044 9.44905 21.748 -4.23167 39.3082 10.0372C39.6162 10.2874 40.0196 10.4126 40.4231 10.4126C40.8266 10.4126 41.23 10.2874 41.538 10.0372C42.154 9.53665 42.154 8.72579 41.538 8.22526Z\"
                                    fill=\"#010101\" stroke=\"black\" />
                        </svg></div>
                    <div style=\"display: flex; flex-direction: column; align-items: center;\" class=\"attribute__water water\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"34\" viewBox=\"0 0 26 34\"
                             fill=\"none\">
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                  d=\"M13 0.787109C9.6987 5.68705 6.42097 10.4686 3.05074 15.2921C1.43769 17.5998 0 20.1309 0 22.8151C0 25.8504 1.45524 28.5986 3.80781 30.5884C6.16038 32.5777 9.41029 33.8084 13 33.8084C16.5897 33.8084 19.8395 32.5777 22.1922 30.5884C24.5449 28.5987 26 25.8504 26 22.8151C26 20.1309 24.5622 17.5998 22.9493 15.292C19.579 10.4686 16.3012 5.68705 13 0.787109Z\"
                                  fill=\"#231F20\" />
                        </svg>
                        <div class=\"water__text\">20 л</div>
                    </div>
                    <div style=\"display: flex; flex-direction: column; align-items: center;\" class=\"attribute__home home\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"27\" viewBox=\"0 0 32 27\"
                             fill=\"none\">
                            <path
                                    d=\"M31.7297 12.8213L16.6525 0.572541C16.2924 0.279856 15.708 0.279856 15.3477 0.572541L0.270158 12.8213C0.00650343 13.0357 -0.0725097 13.3583 0.0701298 13.6384C0.213116 13.9184 0.549615 14.1011 0.922917 14.1011H2.7128V24.9379C2.7128 25.9499 3.72275 26.77 4.96843 26.77H12.1014V20.6681C12.1014 20.6681 12.5146 19.9185 13.0244 19.9185H18.9759C19.4853 19.9185 19.8985 20.2542 19.8985 20.6681V26.77H27.0319C28.2772 26.77 29.2871 25.9496 29.2871 24.9379V14.1011H31.0773C31.4505 14.1011 31.7868 13.9184 31.9298 13.6384C32.0725 13.3583 31.9937 13.0357 31.7297 12.8213Z\"
                                    fill=\"black\" />
                        </svg>
                        <div class=\"home__text\">25 м2</div>
                    </div>
                </div>
            ";
            }
            // line 56
            echo "            ";
            if ((($context["module_id"] ?? null) != 343)) {
                // line 57
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "            <div style=\"position: relative; display: flex; justify-content: space-between; padding: 0 20px 0 0;\">
                    <div style=\"position: relative;\">
                        <div style=\"position: unset; display: flex; justify-content: center;\" class=\"product-labels\">
                            ";
                    // line 61
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 61));
                    foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                        // line 62
                        echo "                                <span style=\"position: unset; margin: 0;\"
                                      class=\"product-label product-label-";
                        // line 63
                        echo $context["id"];
                        echo " product-label-";
                        echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 63);
                        echo "\"><b>";
                        echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 63);
                        echo "</b></span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                        </div>
                    </div>
                <div style=\"position: relative; display: flex; \">
                    ";
                    // line 68
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 68)) {
                        // line 69
                        echo "                        <div style=\"position: unset; height: 40px;\"
                             class=\"rating ";
                        // line 70
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 70) == "hover")) {
                            echo "rating-hover";
                        }
                        echo "\">
                            <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                 class=\"rating-stars\">
                                ";
                        // line 73
                        $context["counterRating"] = 0;
                        // line 74
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 75
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 75) < $context["i"])) {
                                // line 76
                                echo "                                    ";
                            } else {
                                // line 77
                                echo "                                        ";
                                $context["counterRating"] = (($context["counterRating"] ?? null) + 1);
                                // line 78
                                echo "                                    ";
                            }
                            // line 79
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        echo "                                ";
                        echo ($context["counterRating"] ?? null);
                        echo ".0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                           class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            </div>
                        </div>
                    ";
                    } else {
                        // line 85
                        echo "                        <div style=\"position: unset; height: 40px;\"
                             class=\"rating ";
                        // line 86
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 86), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 86) == "hover")) {
                            echo "rating-hover";
                        }
                        echo "\">
                            <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                 class=\"rating-stars\">
                                ";
                        // line 89
                        $context["counterRating"] = 0;
                        // line 90
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 91
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 91) < $context["i"])) {
                                // line 92
                                echo "                                    ";
                            } else {
                                // line 93
                                echo "                                        ";
                                $context["counterRating"] = (($context["counterRating"] ?? null) + 1);
                                // line 94
                                echo "                                    ";
                            }
                            // line 95
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 96
                        echo "                                ";
                        echo ($context["counterRating"] ?? null);
                        echo ".0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                           class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            </div>
                        </div>
                    ";
                    }
                    // line 101
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 101), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 101) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 101), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 101))) {
                        // line 102
                        echo "                        <div style=\"position: unset !important; margin-left: 20px; display: flex; align-items: start;\" class=\"wish-group\">
                            ";
                        // line 103
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 103), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 103)) {
                            // line 104
                            echo "                                <a style=\"border: none;\"
                                   class=\"btn btn-wishlist\" ";
                            // line 105
                            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 105), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistDisplay"), 1 => $context], "method", false, false, false, 105) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 105), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipStatus"), 1 => $context], "method", false, false, false, 105))) {
                                echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                                echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                                echo " wishlist-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 105), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipPosition"), 1 => $context], "method", false, false, false, 105);
                                echo "\" title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" ";
                            }
                            // line 106
                            echo "                                   onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 106);
                            echo "')\"><span
                                            class=\"btn-text\">";
                            // line 107
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></a>
                            ";
                        }
                        // line 109
                        echo "
                            ";
                        // line 110
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 110), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 110)) {
                            // line 111
                            echo "                                <a class=\"btn btn-compare\" ";
                            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 111), "getIn", [0 => (($context["prefix"] ?? null) . "CompareDisplay"), 1 => $context], "method", false, false, false, 111) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 111), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipStatus"), 1 => $context], "method", false, false, false, 111))) {
                                echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                                echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                                echo " compare-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 111), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipPosition"), 1 => $context], "method", false, false, false, 111);
                                echo "\" title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" ";
                            }
                            // line 112
                            echo "                                   onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 112);
                            echo "')\"><span
                                            class=\"btn-text\">";
                            // line 113
                            echo ($context["button_compare"] ?? null);
                            echo "</span></a>
                            ";
                        }
                        // line 115
                        echo "                        </div>
                    ";
                    }
                    // line 117
                    echo "                </div>
            </div>
            ";
                } else {
                    // line 120
                    echo "                <div style=\"position: relative; display: flex; justify-content: end; padding: 0 20px 0 0;\">
                    <div style=\"position: relative; display: flex; \">
                        ";
                    // line 122
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 122)) {
                        // line 123
                        echo "                            <div style=\"position: unset; height: 40px;\"
                                 class=\"rating ";
                        // line 124
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 124), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 124) == "hover")) {
                            echo "rating-hover";
                        }
                        echo "\">
                                <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                     class=\"rating-stars\">
                                    ";
                        // line 127
                        $context["counterRating"] = 0;
                        // line 128
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 129
                            echo "                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 129) < $context["i"])) {
                                // line 130
                                echo "                                        ";
                            } else {
                                // line 131
                                echo "                                            ";
                                $context["counterRating"] = (($context["counterRating"] ?? null) + 1);
                                // line 132
                                echo "                                        ";
                            }
                            // line 133
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        echo "                                    ";
                        echo ($context["counterRating"] ?? null);
                        echo ".0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                               class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                </div>
                            </div>
                        ";
                    } else {
                        // line 139
                        echo "                            <div style=\"position: unset; height: 40px;\"
                                 class=\"rating ";
                        // line 140
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 140), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 140) == "hover")) {
                            echo "rating-hover";
                        }
                        echo "\">
                                <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                     class=\"rating-stars\">
                                    ";
                        // line 143
                        $context["counterRating"] = 0;
                        // line 144
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 145
                            echo "                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 145) < $context["i"])) {
                                // line 146
                                echo "                                        ";
                            } else {
                                // line 147
                                echo "                                            ";
                                $context["counterRating"] = (($context["counterRating"] ?? null) + 1);
                                // line 148
                                echo "                                        ";
                            }
                            // line 149
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 150
                        echo "                                    ";
                        echo ($context["counterRating"] ?? null);
                        echo ".0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                               class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                </div>
                            </div>
                        ";
                    }
                    // line 155
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 155), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 155) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 155), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 155))) {
                        // line 156
                        echo "                            <div style=\"position: unset !important; margin-left: 20px; display: flex; align-items: start;\" class=\"wish-group\">
                                ";
                        // line 157
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 157), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 157)) {
                            // line 158
                            echo "                                    <a style=\"border: none;\"
                                       class=\"btn btn-wishlist\" ";
                            // line 159
                            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 159), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistDisplay"), 1 => $context], "method", false, false, false, 159) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 159), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipStatus"), 1 => $context], "method", false, false, false, 159))) {
                                echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                                echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                                echo " wishlist-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 159), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipPosition"), 1 => $context], "method", false, false, false, 159);
                                echo "\" title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" ";
                            }
                            // line 160
                            echo "                                       onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
                            echo "')\"><span
                                                class=\"btn-text\">";
                            // line 161
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></a>
                                ";
                        }
                        // line 163
                        echo "
                                ";
                        // line 164
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 164), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 164)) {
                            // line 165
                            echo "                                    <a class=\"btn btn-compare\" ";
                            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 165), "getIn", [0 => (($context["prefix"] ?? null) . "CompareDisplay"), 1 => $context], "method", false, false, false, 165) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 165), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipStatus"), 1 => $context], "method", false, false, false, 165))) {
                                echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                                echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                                echo " compare-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 165), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipPosition"), 1 => $context], "method", false, false, false, 165);
                                echo "\" title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" ";
                            }
                            // line 166
                            echo "                                       onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 166);
                            echo "')\"><span
                                                class=\"btn-text\">";
                            // line 167
                            echo ($context["button_compare"] ?? null);
                            echo "</span></a>
                                ";
                        }
                        // line 169
                        echo "                            </div>
                        ";
                    }
                    // line 171
                    echo "                    </div>
                </div>
            ";
                }
                // line 174
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 174), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 174) == "image")) {
                    // line 175
                    echo "                <div class=\"name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 175);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 175);
                    echo "</a></div>
            ";
                }
                // line 177
                echo "            ";
            }
            // line 178
            echo "
            <div class=\"image\">
                ";
            // line 180
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "get", [0 => "quickviewStatus"], "method", false, false, false, 180)) {
                // line 181
                echo "                    <div class=\"quickview-button\">
                        <a class=\"btn btn-quickview\"
                           ";
                // line 183
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 183), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewDisplay"), 1 => $context], "method", false, false, false, 183) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 183), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipStatus"), 1 => $context], "method", false, false, false, 183))) {
                    echo "data-toggle=\"tooltip\"
                           data-tooltip-class=\"";
                    // line 184
                    echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    echo " quickview-tooltip\"
                           data-placement=\"";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 185), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipPosition"), 1 => $context], "method", false, false, false, 185);
                    echo "\"
                           title=\"";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 186), "get", [0 => "quickviewText"], "method", false, false, false, 186);
                    echo "\"";
                }
                // line 187
                echo "                           onclick=\"quickview('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 187);
                echo "')\"><span
                                    class=\"btn-text\">";
                // line 188
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 188), "get", [0 => "quickviewText"], "method", false, false, false, 188);
                echo "</span></a>
                    </div>
                ";
            }
            // line 191
            echo "
                <a href=\"";
            // line 192
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 192);
            echo "\"
                   class=\"product-img ";
            // line 193
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 193)) {
                echo "has-second-image";
            }
            echo "\">
                    <div>
                        ";
            // line 195
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 195), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 195)) {
                // line 196
                echo "                            <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 196);
                echo "\"
                                 ";
                // line 197
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 197)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 197);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 197);
                    echo " 2x\" ";
                }
                // line 198
                echo "                                 width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 198);
                echo "\"
                                 title=\"";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 199);
                echo "\" class=\"img-responsive img-first lazyload\"/>
                        ";
            } else {
                // line 201
                echo "                            <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 201);
                echo "\"
                                 ";
                // line 202
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 202)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 202);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 202);
                    echo " 2x\" ";
                }
                // line 203
                echo "                                 width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 203);
                echo "\"
                                 title=\"";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 204);
                echo "\" class=\"img-responsive img-first\"/>
                        ";
            }
            // line 206
            echo "
                        ";
            // line 207
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 207)) {
                // line 208
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 208), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 208)) {
                    // line 209
                    echo "                                <img src=\"";
                    echo ($context["dummy_image"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 209);
                    echo "\"
                                     ";
                    // line 210
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 210)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 210);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 210);
                        echo " 2x\" ";
                    }
                    // line 211
                    echo "                                     width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 211);
                    echo "\"
                                     title=\"";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 212);
                    echo "\" class=\"img-responsive img-second lazyload\"/>
                            ";
                } else {
                    // line 214
                    echo "                                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 214);
                    echo "\"
                                     ";
                    // line 215
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 215)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 215);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 215);
                        echo " 2x\" ";
                    }
                    // line 216
                    echo "                                     width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 216);
                    echo "\"
                                     title=\"";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 217);
                    echo "\" class=\"img-responsive img-second\"/>
                            ";
                }
                // line 219
                echo "                        ";
            }
            // line 220
            echo "
                    </div>
                </a>

                ";
            // line 224
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 224), "get", [0 => "countdownStatus"], "method", false, false, false, 224) && twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 224))) {
                // line 225
                echo "                    <div class=\"countdown\" data-date=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 225);
                echo "\"></div>
                ";
            }
            // line 227
            echo "
            </div>

            <div class=\"caption\">
                ";
            // line 231
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 231) || twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 231))) {
                // line 232
                echo "                    <div class=\"stats\">
                        ";
                // line 233
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 233)) {
                    // line 234
                    echo "                            <span class=\"stat-1\"><span
                                        class=\"stats-label\">";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 235), "label", [], "any", false, false, false, 235);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 235), "text", [], "any", false, false, false, 235);
                    echo "</span></span>
                        ";
                }
                // line 237
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 237)) {
                    // line 238
                    echo "                            <span class=\"stat-2\"><span
                                        class=\"stats-label\">";
                    // line 239
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 239), "label", [], "any", false, false, false, 239);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 239), "text", [], "any", false, false, false, 239);
                    echo "</span></span>
                        ";
                }
                // line 241
                echo "                    </div>
                ";
            }
            // line 243
            echo "
                ";
            // line 244
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 244), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 244) == "default")) {
                // line 245
                echo "                    <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 245);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 245);
                echo "</a></div>
                ";
            }
            // line 247
            echo "
                ";
            // line 249
            echo "                    ";
            if ((($context["module_id"] ?? null) != 343)) {
                // line 250
                echo "                        <div class=\"attributes\">
                         ";
                // line 251
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_one", [], "any", false, false, false, 251));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_one"]) {
                    // line 252
                    echo "                                <p style=\"display: flex; justify-content: space-between; margin-bottom: 0;\">
                                     ";
                    // line 253
                    if (((twig_get_attribute($this->env, $this->source, $context["attribute_one"], "attribute_id", [], "any", false, false, false, 253) == 54) || (twig_get_attribute($this->env, $this->source, $context["attribute_one"], "attribute_id", [], "any", false, false, false, 253) == 59))) {
                        // line 254
                        echo "                                        <span style=\"max-width: 75%;\" class=\"first__name__cust\">
                                          ";
                        // line 255
                        echo twig_get_attribute($this->env, $this->source, $context["attribute_one"], "name", [], "any", false, false, false, 255);
                        echo "
                                        </span>
                                         <span class=\"first__text__cust\">
                                          ";
                        // line 258
                        echo twig_get_attribute($this->env, $this->source, $context["attribute_one"], "text", [], "any", false, false, false, 258);
                        echo "
                                        </span>
                                    ";
                    }
                    // line 261
                    echo "                                </p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_one'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                echo "                        </div>
                    ";
            }
            // line 265
            echo "                ";
            // line 266
            echo "






                <div class=\"description\">";
            // line 273
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 273);
            echo "</div>

                ";
            // line 275
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 275)) {
                // line 276
                echo "                    <div style=\"    display: flex; justify-content: space-between; width: 100%;\" class=\"price\">
                        <div>
                            ";
                // line 278
                if ((($context["module_id"] ?? null) == 343)) {
                    // line 279
                    echo "                                <div class=\"hit-price\">
                                    ";
                    // line 280
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 280)) {
                        // line 281
                        echo "                                        <span class=\"price-new hit-price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 281);
                        echo "</span>
                                        <span class=\"price-old hit-price-old\">";
                        // line 282
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 282);
                        echo "</span>
                                    ";
                    } else {
                        // line 284
                        echo "                                        <span class=\"price-normal hit-price-normal\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 284);
                        echo "</span>
                                    ";
                    }
                    // line 286
                    echo "                                </div>
                            ";
                } else {
                    // line 288
                    echo "                            <div>
                                ";
                    // line 289
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 289)) {
                        // line 290
                        echo "                                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 290);
                        echo "</span> <span
                                        class=\"price-old\">";
                        // line 291
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 291);
                        echo "</span>
                                ";
                    } else {
                        // line 293
                        echo "                                    <span class=\"price-normal\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 293);
                        echo "</span>
                                ";
                    }
                    // line 295
                    echo "                            </div>
                            ";
                    // line 296
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 296)) {
                        // line 297
                        echo "                                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 297);
                        echo "</span>
                            ";
                    }
                    // line 299
                    echo "                            ";
                }
                // line 300
                echo "                        </div>
                        <div>
                            ";
                // line 302
                if ((($context["module_id"] ?? null) != 343)) {
                    // line 303
                    echo "                            ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "payment_pb_chastyami", [], "any", false, false, false, 303), "payment_pb_chastyami", [], "any", false, false, false, 303) == 1) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "payment_pb_rassrochka", [], "any", false, false, false, 303), "payment_pb_rassrochka", [], "any", false, false, false, 303) == 1))) {
                        // line 304
                        echo "                                <img src=\"https://osushuvachi.webfun.com.ua/image/catalog/icons/privat.png\"
                                     alt=\"privat\" title=\"privat\">
                            ";
                    }
                    // line 307
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "payment_mono_chastyami", [], "any", false, false, false, 307), "payment_mono_chastyami", [], "any", false, false, false, 307) == 1)) {
                        // line 308
                        echo "                                <img style=\"margin-left: 12px;\" src=\"https://osushuvachi.webfun.com.ua/image/catalog/icons/mono.png\" alt=\"mono\"
                                     title=\"mono\">
                            ";
                    }
                    // line 311
                    echo "                            ";
                }
                // line 312
                echo "                        </div>
                    </div>
                ";
            }
            // line 315
            echo "
                ";
            // line 316
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 316), "get", [0 => "catalogCartStatus"], "method", false, false, false, 316) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 316), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 316)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 316), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 316))) {
                // line 317
                echo "                    <div class=\"buttons-wrapper\">
                        <div class=\"button-group\">
                            ";
                // line 319
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 319), "get", [0 => "catalogCartStatus"], "method", false, false, false, 319)) {
                    // line 320
                    echo "                                <div class=\"cart-group\">
                                    <div class=\"stepper\">
                                        <span class=\"stepper-arrow stepper__minus\"
                                              v-on:click=\"updateCartItemQuantity(index, -1)\"><svg height=\"1em\"
                                                                                                  viewBox=\"0 0 320 512\"><path
                                                        d=\"M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></span>
                                        <input type=\"text\" name=\"quantity\" value=\"";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 326);
                    echo "\"
                                               data-minimum=\"";
                    // line 327
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 327);
                    echo "\" class=\"form-control\"/>
                                        <input type=\"hidden\" name=\"product_id\" value=\"";
                    // line 328
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 328);
                    echo "\"/>
                                        <span class=\"stepper-arrow stepper__plus\"
                                              v-on:click=\"updateCartItemQuantity(index, 1)\"><svg height=\"1em\"
                                                                                                 viewBox=\"0 0 320 512\"><path
                                                        d=\"M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\"/></svg></span>
                                    </div>
";
                    // line 335
                    echo "                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 335);
                    echo "\" class=\"btn btn-mobview\">
                                        <span class=\"btn-view\">";
                    // line 336
                    echo ($context["button_view"] ?? null);
                    echo "</span>
                                    </a>
";
                    // line 339
                    echo "                                    <a class=\"btn btn-cart\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 339), "getIn", [0 => (($context["prefix"] ?? null) . "CartDisplay"), 1 => $context], "method", false, false, false, 339) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 339), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipStatus"), 1 => $context], "method", false, false, false, 339))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " cart-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 339), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipPosition"), 1 => $context], "method", false, false, false, 339);
                        echo "\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" ";
                    }
                    // line 340
                    echo "                                       onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 340);
                    echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\"
                                       data-loading-text=\"<span class='btn-text'>";
                    // line 341
                    echo ($context["button_cart"] ?? null);
                    echo "</span>\"><span
                                                class=\"btn-text\">";
                    // line 342
                    echo ($context["button_cart"] ?? null);
                    echo "</span></a>
                                </div>

                            ";
                }
                // line 346
                echo "

                        </div>
                    </div>

                ";
            }
            // line 352
            echo "

                ";
            // line 354
            if (twig_get_attribute($this->env, $this->source, $context["product"], "extra_buttons", [], "any", false, false, false, 354)) {
                // line 355
                echo "                    <div class=\"extra-group\">
                        <div>
                            ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "extra_buttons", [], "any", false, false, false, 357));
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
                    // line 358
                    echo "                                <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo "\"
                                        ";
                    // line 359
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 359), "getIn", [0 => ((($context["prefix"] ?? null) . "ExtraButtonDisplay") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 359)), 1 => $context], "method", false, false, false, 359) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 359), "getIn", [0 => (($context["prefix"] ?? null) . "ExtraButtonTooltipStatus"), 1 => $context], "method", false, false, false, 359))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 359), "getIn", [0 => (($context["prefix"] ?? null) . "ExtraButtonTooltipPosition"), 1 => $context], "method", false, false, false, 359);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 359);
                        echo "\" ";
                    }
                    // line 360
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 360) == "quickbuy")) {
                        echo "onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 360);
                        echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\"";
                    }
                    // line 361
                    echo "                                        ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 361) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 361), "href", [], "any", false, false, false, 361))) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 361), "href", [], "any", false, false, false, 361);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 361)], "method", false, false, false, 361);
                        echo " data-product_id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 361);
                        echo "\" data-product_url=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 361);
                        echo "\"";
                    }
                    // line 362
                    echo "                                   data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 362);
                    echo "</span>\">
                                    <span class=\"btn-text\">";
                    // line 363
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 363);
                    echo "</span>
                                </a>
                            ";
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
                // line 366
                echo "                        </div>
                    </div>
                ";
            }
            // line 369
            echo "            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "<style>
    .product-grid .product-thumb .btn-cart::before {
        position: unset;
    }

    .product-grid .product-thumb .btn-cart .btn-text {
        padding: 0 !important;
    }

    .product-grid .product-thumb .btn-cart.btn {
        display: flex;
        padding: 0 20px !important;
        justify-content: space-between;
    }

</style>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/product_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1056 => 373,  1047 => 369,  1042 => 366,  1025 => 363,  1020 => 362,  1007 => 361,  1000 => 360,  990 => 359,  985 => 358,  968 => 357,  964 => 355,  962 => 354,  958 => 352,  950 => 346,  943 => 342,  939 => 341,  934 => 340,  923 => 339,  918 => 336,  913 => 335,  904 => 328,  900 => 327,  896 => 326,  888 => 320,  886 => 319,  882 => 317,  880 => 316,  877 => 315,  872 => 312,  869 => 311,  864 => 308,  861 => 307,  856 => 304,  853 => 303,  851 => 302,  847 => 300,  844 => 299,  837 => 297,  835 => 296,  832 => 295,  826 => 293,  821 => 291,  816 => 290,  814 => 289,  811 => 288,  807 => 286,  801 => 284,  796 => 282,  791 => 281,  789 => 280,  786 => 279,  784 => 278,  780 => 276,  778 => 275,  773 => 273,  764 => 266,  762 => 265,  758 => 263,  751 => 261,  745 => 258,  739 => 255,  736 => 254,  734 => 253,  731 => 252,  727 => 251,  724 => 250,  721 => 249,  718 => 247,  710 => 245,  708 => 244,  705 => 243,  701 => 241,  694 => 239,  691 => 238,  688 => 237,  681 => 235,  678 => 234,  676 => 233,  673 => 232,  671 => 231,  665 => 227,  659 => 225,  657 => 224,  651 => 220,  648 => 219,  643 => 217,  634 => 216,  626 => 215,  621 => 214,  616 => 212,  607 => 211,  599 => 210,  592 => 209,  589 => 208,  587 => 207,  584 => 206,  579 => 204,  570 => 203,  562 => 202,  557 => 201,  552 => 199,  543 => 198,  535 => 197,  528 => 196,  526 => 195,  519 => 193,  515 => 192,  512 => 191,  506 => 188,  501 => 187,  497 => 186,  493 => 185,  489 => 184,  485 => 183,  481 => 181,  479 => 180,  475 => 178,  472 => 177,  464 => 175,  461 => 174,  456 => 171,  452 => 169,  447 => 167,  442 => 166,  431 => 165,  429 => 164,  426 => 163,  421 => 161,  416 => 160,  406 => 159,  403 => 158,  401 => 157,  398 => 156,  395 => 155,  386 => 150,  380 => 149,  377 => 148,  374 => 147,  371 => 146,  368 => 145,  363 => 144,  361 => 143,  353 => 140,  350 => 139,  341 => 134,  335 => 133,  332 => 132,  329 => 131,  326 => 130,  323 => 129,  318 => 128,  316 => 127,  308 => 124,  305 => 123,  303 => 122,  299 => 120,  294 => 117,  290 => 115,  285 => 113,  280 => 112,  269 => 111,  267 => 110,  264 => 109,  259 => 107,  254 => 106,  244 => 105,  241 => 104,  239 => 103,  236 => 102,  233 => 101,  224 => 96,  218 => 95,  215 => 94,  212 => 93,  209 => 92,  206 => 91,  201 => 90,  199 => 89,  191 => 86,  188 => 85,  179 => 80,  173 => 79,  170 => 78,  167 => 77,  164 => 76,  161 => 75,  156 => 74,  154 => 73,  146 => 70,  143 => 69,  141 => 68,  136 => 65,  124 => 63,  121 => 62,  117 => 61,  112 => 58,  109 => 57,  106 => 56,  60 => 12,  58 => 11,  50 => 9,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set prefix = display == 'grid' ? 'ProductGrid' : 'ProductList' %}
{% for product in products %}
    {% set classes = j3.classes({
        'out-of-stock': product.quantity <= 0,
        'has-countdown': product.date_end,
        'has-zero-price': not product.price_value,
        'has-extra-button': product.extra_buttons,
    }) %}
    <div class=\"product-layout {{ j3.classes(product.classes) }} {{ classes }}\">
        <div class=\"product-thumb\">
            {% if module_id == 343 %}
                <style>
                    .right
                    {
                        position: absolute;
                        right: 20px;
                        bottom: 20px;
                    }
                </style>
                <div class=\"slide__attribute attribute right\">
                    <div style=\"display: flex; flex-direction: column; align-items: center; margin-bottom: 10px;\" class=\"attribute__wifi\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"43\" height=\"28\"
                                                                                                                                               viewBox=\"0 0 43 28\" fill=\"none\">
                            <path
                                    d=\"M21.5003 21.9438C19.7617 21.9438 18.3464 23.0938 18.3464 24.5066C18.3464 25.9193 19.7617 27.0693 21.5003 27.0693C23.2389 27.0693 24.6541 25.9193 24.6541 24.5066C24.6541 23.0938 23.2389 21.9438 21.5003 21.9438ZM21.5018 25.7879C21.5003 25.7879 21.5003 25.7867 21.5003 25.7854L23.0772 25.7879H21.5018Z\"
                                    fill=\"#010101\" stroke=\"black\" />
                            <path
                                    d=\"M14.0777 18.4756C13.4633 18.9749 13.4633 19.7807 14.0762 20.2825C14.6845 20.7818 15.6839 20.7867 16.303 20.2912C16.8373 19.8633 21.6836 16.2207 26.693 20.2875C27.001 20.5378 27.4045 20.6629 27.808 20.6629C28.2115 20.6629 28.6149 20.5377 28.9229 20.2875C29.5389 19.787 29.5389 18.9761 28.9229 18.4756C23.0526 13.7043 16.6433 16.3896 14.0777 18.4756Z\"
                                    fill=\"#010101\" stroke=\"black\" />
                            <path
                                    d=\"M7.77035 13.3499C7.15591 13.8492 7.15591 14.6588 7.76882 15.1593C8.38479 15.6623 9.3827 15.6611 9.99867 15.1631C10.4699 14.7839 21.6746 5.96209 33.001 15.1618C33.309 15.4121 33.7125 15.5372 34.1159 15.5372C34.5194 15.5372 34.9229 15.4121 35.2309 15.1618C35.8469 14.6613 35.8469 13.8504 35.2309 13.3499C21.6638 2.32323 7.90586 13.2385 7.77035 13.3499Z\"
                                    fill=\"#010101\" stroke=\"black\" />
                            <path
                                    d=\"M41.538 8.22526C21.7311 -7.87176 1.66081 8.06008 1.46217 8.22526C0.846198 8.72454 0.846198 9.5354 1.46064 10.0359C2.07661 10.5365 3.07452 10.5365 3.69049 10.0384C4.42044 9.44905 21.748 -4.23167 39.3082 10.0372C39.6162 10.2874 40.0196 10.4126 40.4231 10.4126C40.8266 10.4126 41.23 10.2874 41.538 10.0372C42.154 9.53665 42.154 8.72579 41.538 8.22526Z\"
                                    fill=\"#010101\" stroke=\"black\" />
                        </svg></div>
                    <div style=\"display: flex; flex-direction: column; align-items: center;\" class=\"attribute__water water\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"34\" viewBox=\"0 0 26 34\"
                             fill=\"none\">
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                  d=\"M13 0.787109C9.6987 5.68705 6.42097 10.4686 3.05074 15.2921C1.43769 17.5998 0 20.1309 0 22.8151C0 25.8504 1.45524 28.5986 3.80781 30.5884C6.16038 32.5777 9.41029 33.8084 13 33.8084C16.5897 33.8084 19.8395 32.5777 22.1922 30.5884C24.5449 28.5987 26 25.8504 26 22.8151C26 20.1309 24.5622 17.5998 22.9493 15.292C19.579 10.4686 16.3012 5.68705 13 0.787109Z\"
                                  fill=\"#231F20\" />
                        </svg>
                        <div class=\"water__text\">20 л</div>
                    </div>
                    <div style=\"display: flex; flex-direction: column; align-items: center;\" class=\"attribute__home home\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"27\" viewBox=\"0 0 32 27\"
                             fill=\"none\">
                            <path
                                    d=\"M31.7297 12.8213L16.6525 0.572541C16.2924 0.279856 15.708 0.279856 15.3477 0.572541L0.270158 12.8213C0.00650343 13.0357 -0.0725097 13.3583 0.0701298 13.6384C0.213116 13.9184 0.549615 14.1011 0.922917 14.1011H2.7128V24.9379C2.7128 25.9499 3.72275 26.77 4.96843 26.77H12.1014V20.6681C12.1014 20.6681 12.5146 19.9185 13.0244 19.9185H18.9759C19.4853 19.9185 19.8985 20.2542 19.8985 20.6681V26.77H27.0319C28.2772 26.77 29.2871 25.9496 29.2871 24.9379V14.1011H31.0773C31.4505 14.1011 31.7868 13.9184 31.9298 13.6384C32.0725 13.3583 31.9937 13.0357 31.7297 12.8213Z\"
                                    fill=\"black\" />
                        </svg>
                        <div class=\"home__text\">25 м2</div>
                    </div>
                </div>
            {% endif %}
            {% if  module_id != 343 %}
            {% if product.labels %}
            <div style=\"position: relative; display: flex; justify-content: space-between; padding: 0 20px 0 0;\">
                    <div style=\"position: relative;\">
                        <div style=\"position: unset; display: flex; justify-content: center;\" class=\"product-labels\">
                            {% for id, label in product.labels %}
                                <span style=\"position: unset; margin: 0;\"
                                      class=\"product-label product-label-{{ id }} product-label-{{ label.display }}\"><b>{{ label.label }}</b></span>
                            {% endfor %}
                        </div>
                    </div>
                <div style=\"position: relative; display: flex; \">
                    {% if product.rating %}
                        <div style=\"position: unset; height: 40px;\"
                             class=\"rating {% if j3.settings.getIn(prefix ~ 'RatingPosition', _context) == \"hover\" %}rating-hover{% endif %}\">
                            <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                 class=\"rating-stars\">
                                {% set counterRating = 0 %}
                                {% for i in 1..5 %}
                                    {% if product.rating < i %}
                                    {% else %}
                                        {% set counterRating = counterRating + 1 %}
                                    {% endif %}
                                {% endfor %}
                                {{ counterRating }}.0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                           class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            </div>
                        </div>
                    {% else %}
                        <div style=\"position: unset; height: 40px;\"
                             class=\"rating {% if j3.settings.getIn(prefix ~ 'RatingPosition', _context) == \"hover\" %}rating-hover{% endif %}\">
                            <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                 class=\"rating-stars\">
                                {% set counterRating = 0 %}
                                {% for i in 1..5 %}
                                    {% if product.rating < i %}
                                    {% else %}
                                        {% set counterRating = counterRating + 1 %}
                                    {% endif %}
                                {% endfor %}
                                {{ counterRating }}.0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                           class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            </div>
                        </div>
                    {% endif %}
                    {% if j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}
                        <div style=\"position: unset !important; margin-left: 20px; display: flex; align-items: start;\" class=\"wish-group\">
                            {% if j3.settings.get('catalogWishlistStatus') %}
                                <a style=\"border: none;\"
                                   class=\"btn btn-wishlist\" {% if (j3.settings.getIn(prefix ~ 'WishlistDisplay', _context) == \"icon\") and (j3.settings.getIn(prefix ~ 'WishlistTooltipStatus', _context)) %} data-toggle=\"tooltip\" data-tooltip-class=\"{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} wishlist-tooltip\" data-placement=\"{{ j3.settings.getIn(prefix ~ 'WishlistTooltipPosition', _context) }}\" title=\"{{ button_wishlist }}\" {% endif %}
                                   onclick=\"wishlist.add('{{ product.product_id }}')\"><span
                                            class=\"btn-text\">{{ button_wishlist }}</span></a>
                            {% endif %}

                            {% if j3.settings.get('catalogCompareStatus') %}
                                <a class=\"btn btn-compare\" {% if (j3.settings.getIn(prefix ~ 'CompareDisplay', _context) == \"icon\") and (j3.settings.getIn(prefix ~ 'CompareTooltipStatus', _context)) %} data-toggle=\"tooltip\" data-tooltip-class=\"{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} compare-tooltip\" data-placement=\"{{ j3.settings.getIn(prefix ~ 'CompareTooltipPosition', _context) }}\" title=\"{{ button_compare }}\" {% endif %}
                                   onclick=\"compare.add('{{ product.product_id }}')\"><span
                                            class=\"btn-text\">{{ button_compare }}</span></a>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
            </div>
            {% else %}
                <div style=\"position: relative; display: flex; justify-content: end; padding: 0 20px 0 0;\">
                    <div style=\"position: relative; display: flex; \">
                        {% if product.rating %}
                            <div style=\"position: unset; height: 40px;\"
                                 class=\"rating {% if j3.settings.getIn(prefix ~ 'RatingPosition', _context) == \"hover\" %}rating-hover{% endif %}\">
                                <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                     class=\"rating-stars\">
                                    {% set counterRating = 0 %}
                                    {% for i in 1..5 %}
                                        {% if product.rating < i %}
                                        {% else %}
                                            {% set counterRating = counterRating + 1 %}
                                        {% endif %}
                                    {% endfor %}
                                    {{ counterRating }}.0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                               class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                </div>
                            </div>
                        {% else %}
                            <div style=\"position: unset; height: 40px;\"
                                 class=\"rating {% if j3.settings.getIn(prefix ~ 'RatingPosition', _context) == \"hover\" %}rating-hover{% endif %}\">
                                <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                     class=\"rating-stars\">
                                    {% set counterRating = 0 %}
                                    {% for i in 1..5 %}
                                        {% if product.rating < i %}
                                        {% else %}
                                            {% set counterRating = counterRating + 1 %}
                                        {% endif %}
                                    {% endfor %}
                                    {{ counterRating }}.0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                               class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                </div>
                            </div>
                        {% endif %}
                        {% if j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}
                            <div style=\"position: unset !important; margin-left: 20px; display: flex; align-items: start;\" class=\"wish-group\">
                                {% if j3.settings.get('catalogWishlistStatus') %}
                                    <a style=\"border: none;\"
                                       class=\"btn btn-wishlist\" {% if (j3.settings.getIn(prefix ~ 'WishlistDisplay', _context) == \"icon\") and (j3.settings.getIn(prefix ~ 'WishlistTooltipStatus', _context)) %} data-toggle=\"tooltip\" data-tooltip-class=\"{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} wishlist-tooltip\" data-placement=\"{{ j3.settings.getIn(prefix ~ 'WishlistTooltipPosition', _context) }}\" title=\"{{ button_wishlist }}\" {% endif %}
                                       onclick=\"wishlist.add('{{ product.product_id }}')\"><span
                                                class=\"btn-text\">{{ button_wishlist }}</span></a>
                                {% endif %}

                                {% if j3.settings.get('catalogCompareStatus') %}
                                    <a class=\"btn btn-compare\" {% if (j3.settings.getIn(prefix ~ 'CompareDisplay', _context) == \"icon\") and (j3.settings.getIn(prefix ~ 'CompareTooltipStatus', _context)) %} data-toggle=\"tooltip\" data-tooltip-class=\"{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} compare-tooltip\" data-placement=\"{{ j3.settings.getIn(prefix ~ 'CompareTooltipPosition', _context) }}\" title=\"{{ button_compare }}\" {% endif %}
                                       onclick=\"compare.add('{{ product.product_id }}')\"><span
                                                class=\"btn-text\">{{ button_compare }}</span></a>
                                {% endif %}
                            </div>
                        {% endif %}
                    </div>
                </div>
            {% endif %}
            {% if (j3.settings.getIn(prefix ~ 'NamePosition', _context) == \"image\") %}
                <div class=\"name\"><a href=\"{{ product.href }}\">{{ product.name }}</a></div>
            {% endif %}
            {% endif %}

            <div class=\"image\">
                {% if j3.settings.get('quickviewStatus') %}
                    <div class=\"quickview-button\">
                        <a class=\"btn btn-quickview\"
                           {% if j3.settings.getIn(prefix ~ 'QuickviewDisplay', _context) == 'icon' and j3.settings.getIn(prefix ~ 'QuickviewTooltipStatus', _context) %}data-toggle=\"tooltip\"
                           data-tooltip-class=\"{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} quickview-tooltip\"
                           data-placement=\"{{ j3.settings.getIn(prefix ~ 'QuickviewTooltipPosition', _context) }}\"
                           title=\"{{ j3.settings.get('quickviewText') }}\"{% endif %}
                           onclick=\"quickview('{{ product.product_id }}')\"><span
                                    class=\"btn-text\">{{ j3.settings.get('quickviewText') }}</span></a>
                    </div>
                {% endif %}

                <a href=\"{{ product.href }}\"
                   class=\"product-img {% if product.second_thumb %}has-second-image{% endif %}\">
                    <div>
                        {% if j3.settings.get('performanceLazyLoadImagesStatus') %}
                            <img src=\"{{ dummy_image }}\" data-src=\"{{ product.thumb }}\"
                                 {% if product.thumb2x %}data-srcset=\"{{ product.thumb }} 1x, {{ product.thumb2x }} 2x\" {% endif %}
                                 width=\"{{ image_width }}\" height=\"{{ image_height }}\" alt=\"{{ product.name }}\"
                                 title=\"{{ product.name }}\" class=\"img-responsive img-first lazyload\"/>
                        {% else %}
                            <img src=\"{{ product.thumb }}\"
                                 {% if product.thumb2x %}srcset=\"{{ product.thumb }} 1x, {{ product.thumb2x }} 2x\" {% endif %}
                                 width=\"{{ image_width }}\" height=\"{{ image_height }}\" alt=\"{{ product.name }}\"
                                 title=\"{{ product.name }}\" class=\"img-responsive img-first\"/>
                        {% endif %}

                        {% if product.second_thumb %}
                            {% if j3.settings.get('performanceLazyLoadImagesStatus') %}
                                <img src=\"{{ dummy_image }}\" data-src=\"{{ product.second_thumb }}\"
                                     {% if product.second_thumb2x %}data-srcset=\"{{ product.second_thumb }} 1x, {{ product.second_thumb2x }} 2x\" {% endif %}
                                     width=\"{{ image_width }}\" height=\"{{ image_height }}\" alt=\"{{ product.name }}\"
                                     title=\"{{ product.name }}\" class=\"img-responsive img-second lazyload\"/>
                            {% else %}
                                <img src=\"{{ product.second_thumb }}\"
                                     {% if product.second_thumb2x %}srcset=\"{{ product.second_thumb }} 1x, {{ product.second_thumb2x }} 2x\" {% endif %}
                                     width=\"{{ image_width }}\" height=\"{{ image_height }}\" alt=\"{{ product.name }}\"
                                     title=\"{{ product.name }}\" class=\"img-responsive img-second\"/>
                            {% endif %}
                        {% endif %}

                    </div>
                </a>

                {% if j3.settings.get('countdownStatus') and product.date_end %}
                    <div class=\"countdown\" data-date=\"{{ product.date_end }}\"></div>
                {% endif %}

            </div>

            <div class=\"caption\">
                {% if product.stat1 or product.stat2 %}
                    <div class=\"stats\">
                        {% if product.stat1 %}
                            <span class=\"stat-1\"><span
                                        class=\"stats-label\">{{ product.stat1.label }}:</span> <span>{{ product.stat1.text }}</span></span>
                        {% endif %}
                        {% if product.stat2 %}
                            <span class=\"stat-2\"><span
                                        class=\"stats-label\">{{ product.stat2.label }}:</span> <span>{{ product.stat2.text }}</span></span>
                        {% endif %}
                    </div>
                {% endif %}

                {% if (j3.settings.getIn(prefix ~ 'NamePosition', _context) == \"default\") %}
                    <div class=\"name\"><a href=\"{{ product.href }}\">{{ product.name }}</a></div>
                {% endif %}

                {#  attributes #}
                    {% if  module_id != 343 %}
                        <div class=\"attributes\">
                         {% for attribute_one in product.attribute_one %}
                                <p style=\"display: flex; justify-content: space-between; margin-bottom: 0;\">
                                     {% if attribute_one.attribute_id == 54 or attribute_one.attribute_id == 59 %}
                                        <span style=\"max-width: 75%;\" class=\"first__name__cust\">
                                          {{ attribute_one.name }}
                                        </span>
                                         <span class=\"first__text__cust\">
                                          {{ attribute_one.text }}
                                        </span>
                                    {% endif %}
                                </p>
                            {% endfor %}
                        </div>
                    {% endif %}
                {# attributes #}







                <div class=\"description\">{{ product.description }}</div>

                {% if product.price %}
                    <div style=\"    display: flex; justify-content: space-between; width: 100%;\" class=\"price\">
                        <div>
                            {% if module_id == 343 %}
                                <div class=\"hit-price\">
                                    {% if product.special %}
                                        <span class=\"price-new hit-price-new\">{{ product.special }}</span>
                                        <span class=\"price-old hit-price-old\">{{ product.price }}</span>
                                    {% else %}
                                        <span class=\"price-normal hit-price-normal\">{{ product.price }}</span>
                                    {% endif %}
                                </div>
                            {% else %}
                            <div>
                                {% if product.special %}
                                    <span class=\"price-new\">{{ product.special }}</span> <span
                                        class=\"price-old\">{{ product.price }}</span>
                                {% else %}
                                    <span class=\"price-normal\">{{ product.price }}</span>
                                {% endif %}
                            </div>
                            {% if product.tax %}
                                <span class=\"price-tax\">{{ text_tax }}{{ product.tax }}</span>
                            {% endif %}
                            {% endif %}
                        </div>
                        <div>
                            {% if module_id != 343 %}
                            {% if product.payment_pb_chastyami.payment_pb_chastyami == 1 or product.payment_pb_rassrochka.payment_pb_rassrochka == 1 %}
                                <img src=\"https://osushuvachi.webfun.com.ua/image/catalog/icons/privat.png\"
                                     alt=\"privat\" title=\"privat\">
                            {% endif %}
                            {% if product.payment_mono_chastyami.payment_mono_chastyami == 1 %}
                                <img style=\"margin-left: 12px;\" src=\"https://osushuvachi.webfun.com.ua/image/catalog/icons/mono.png\" alt=\"mono\"
                                     title=\"mono\">
                            {% endif %}
                            {% endif %}
                        </div>
                    </div>
                {% endif %}

                {% if j3.settings.get('catalogCartStatus') or j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}
                    <div class=\"buttons-wrapper\">
                        <div class=\"button-group\">
                            {% if j3.settings.get('catalogCartStatus') %}
                                <div class=\"cart-group\">
                                    <div class=\"stepper\">
                                        <span class=\"stepper-arrow stepper__minus\"
                                              v-on:click=\"updateCartItemQuantity(index, -1)\"><svg height=\"1em\"
                                                                                                  viewBox=\"0 0 320 512\"><path
                                                        d=\"M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></span>
                                        <input type=\"text\" name=\"quantity\" value=\"{{ product.minimum }}\"
                                               data-minimum=\"{{ product.minimum }}\" class=\"form-control\"/>
                                        <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
                                        <span class=\"stepper-arrow stepper__plus\"
                                              v-on:click=\"updateCartItemQuantity(index, 1)\"><svg height=\"1em\"
                                                                                                 viewBox=\"0 0 320 512\"><path
                                                        d=\"M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\"/></svg></span>
                                    </div>
{#                                    Додавання кнопки Переглянути в моб меню#}
                                    <a href=\"{{ product.href }}\" class=\"btn btn-mobview\">
                                        <span class=\"btn-view\">{{ button_view }}</span>
                                    </a>
{#                                    Додавання кнопки Переглянути в моб меню#}
                                    <a class=\"btn btn-cart\" {% if (j3.settings.getIn(prefix ~ 'CartDisplay', _context) == \"icon\") and (j3.settings.getIn(prefix ~ 'CartTooltipStatus', _context)) %} data-toggle=\"tooltip\" data-tooltip-class=\"{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} cart-tooltip\" data-placement=\"{{ j3.settings.getIn(prefix ~ 'CartTooltipPosition', _context) }}\" title=\"{{ button_cart }}\" {% endif %}
                                       onclick=\"cart.add('{{ product.product_id }}', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\"
                                       data-loading-text=\"<span class='btn-text'>{{ button_cart }}</span>\"><span
                                                class=\"btn-text\">{{ button_cart }}</span></a>
                                </div>

                            {% endif %}


                        </div>
                    </div>

                {% endif %}


                {% if product.extra_buttons %}
                    <div class=\"extra-group\">
                        <div>
                            {% for id, extra_button in product.extra_buttons %}
                                <a class=\"btn btn-extra btn-extra-{{ id }}\"
                                        {% if (j3.settings.getIn(prefix ~ 'ExtraButtonDisplay' ~ loop.index, _context) == \"icon\") and (j3.settings.getIn(prefix ~ 'ExtraButtonTooltipStatus', _context)) %} data-toggle=\"tooltip\" data-tooltip-class=\"{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} extra-tooltip\" data-placement=\"{{ j3.settings.getIn(prefix ~ 'ExtraButtonTooltipPosition', _context) }}\" title=\"{{ extra_button.label }}\" {% endif %}
                                        {% if extra_button.action == 'quickbuy' %}onclick=\"cart.add('{{ product.product_id }}', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\"{% endif %}
                                        {% if extra_button.action == 'link' and extra_button.link.href %}href=\"{{ extra_button.link.href }}\" {{ j3.linkAttrs(extra_button.link) }} data-product_id=\"{{ product.product_id }}\" data-product_url=\"{{ product.href }}\"{% endif %}
                                   data-loading-text=\"<span class='btn-text'>{{ extra_button.label }}</span>\">
                                    <span class=\"btn-text\">{{ extra_button.label }}</span>
                                </a>
                            {% endfor %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endfor %}
<style>
    .product-grid .product-thumb .btn-cart::before {
        position: unset;
    }

    .product-grid .product-thumb .btn-cart .btn-text {
        padding: 0 !important;
    }

    .product-grid .product-thumb .btn-cart.btn {
        display: flex;
        padding: 0 20px !important;
        justify-content: space-between;
    }

</style>
", "journal3/template/journal3/product_card.twig", "/home/goodin01/webfun.com.ua/osushuvachi/catalog/view/theme/journal3/template/journal3/product_card.twig");
    }
}
