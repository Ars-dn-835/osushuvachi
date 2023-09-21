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
class __TwigTemplate_53d33c38bebf90d649683336283ab5bcb0aa1d59ad395c55c3950ef780c24af0 extends \Twig\Template
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
            if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 56)) {
                // line 57
                echo "            <div style=\"position: relative; display: flex; justify-content: space-between; padding: 0 20px 0 0;\">
                    <div style=\"position: relative;\">
                        <div style=\"position: unset; display: flex; justify-content: center;\" class=\"product-labels\">
                            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 60));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 61
                    echo "                                <span style=\"position: unset; margin: 0;\"
                                      class=\"product-label product-label-";
                    // line 62
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 62);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 62);
                    echo "</b></span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                        </div>
                    </div>
                <div style=\"position: relative; display: flex; \">
                    ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                        <div style=\"position: unset; height: 40px;\"
                             class=\"rating ";
                    // line 69
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 69) == "hover")) {
                        echo "rating-hover";
                    }
                    echo "\">
                            <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                 class=\"rating-stars\">
                                ";
                    // line 72
                    $context["counterRating"] = 0;
                    // line 73
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 74
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 74) < $context["i"])) {
                            // line 75
                            echo "                                    ";
                        } else {
                            // line 76
                            echo "                                        ";
                            $context["counterRating"] = (($context["counterRating"] ?? null) + 1);
                            // line 77
                            echo "                                    ";
                        }
                        // line 78
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                ";
                    echo ($context["counterRating"] ?? null);
                    echo ".0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                           class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            </div>
                        </div>
                    ";
                } else {
                    // line 84
                    echo "                        <div style=\"position: unset; height: 40px;\"
                             class=\"rating ";
                    // line 85
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 85), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 85) == "hover")) {
                        echo "rating-hover";
                    }
                    echo "\">
                            <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                 class=\"rating-stars\">
                                ";
                    // line 88
                    $context["counterRating"] = 0;
                    // line 89
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 90
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 90) < $context["i"])) {
                            // line 91
                            echo "                                    ";
                        } else {
                            // line 92
                            echo "                                        ";
                            $context["counterRating"] = (($context["counterRating"] ?? null) + 1);
                            // line 93
                            echo "                                    ";
                        }
                        // line 94
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "                                ";
                    echo ($context["counterRating"] ?? null);
                    echo ".0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                           class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            </div>
                        </div>
                    ";
                }
                // line 100
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 100), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 100) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 100), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 100))) {
                    // line 101
                    echo "                        <div style=\"position: unset !important; margin-left: 20px; display: flex; align-items: start;\" class=\"wish-group\">
                            ";
                    // line 102
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 102)) {
                        // line 103
                        echo "                                <a style=\"border: none;\"
                                   class=\"btn btn-wishlist\" ";
                        // line 104
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 104), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistDisplay"), 1 => $context], "method", false, false, false, 104) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 104), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipStatus"), 1 => $context], "method", false, false, false, 104))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                            echo " wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 104), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipPosition"), 1 => $context], "method", false, false, false, 104);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        // line 105
                        echo "                                   onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 105);
                        echo "')\"><span
                                            class=\"btn-text\">";
                        // line 106
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></a>
                            ";
                    }
                    // line 108
                    echo "
                            ";
                    // line 109
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 109), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 109)) {
                        // line 110
                        echo "                                <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 110), "getIn", [0 => (($context["prefix"] ?? null) . "CompareDisplay"), 1 => $context], "method", false, false, false, 110) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 110), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipStatus"), 1 => $context], "method", false, false, false, 110))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                            echo " compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 110), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipPosition"), 1 => $context], "method", false, false, false, 110);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        // line 111
                        echo "                                   onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
                        echo "')\"><span
                                            class=\"btn-text\">";
                        // line 112
                        echo ($context["button_compare"] ?? null);
                        echo "</span></a>
                            ";
                    }
                    // line 114
                    echo "                        </div>
                    ";
                }
                // line 116
                echo "                </div>
            </div>
            ";
            } else {
                // line 119
                echo "                <div style=\"position: relative; display: flex; justify-content: end; padding: 0 20px 0 0;\">
                    <div style=\"position: relative; display: flex; \">
                        ";
                // line 121
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "                            <div style=\"position: unset; height: 40px;\"
                                 class=\"rating ";
                    // line 123
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 123), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 123) == "hover")) {
                        echo "rating-hover";
                    }
                    echo "\">
                                <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                     class=\"rating-stars\">
                                    ";
                    // line 126
                    $context["counterRating"] = 0;
                    // line 127
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 128
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 128) < $context["i"])) {
                            // line 129
                            echo "                                        ";
                        } else {
                            // line 130
                            echo "                                            ";
                            $context["counterRating"] = (($context["counterRating"] ?? null) + 1);
                            // line 131
                            echo "                                        ";
                        }
                        // line 132
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "                                    ";
                    echo ($context["counterRating"] ?? null);
                    echo ".0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                               class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                </div>
                            </div>
                        ";
                } else {
                    // line 138
                    echo "                            <div style=\"position: unset; height: 40px;\"
                                 class=\"rating ";
                    // line 139
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 139), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 139) == "hover")) {
                        echo "rating-hover";
                    }
                    echo "\">
                                <div style=\"display: flex; justify-content: center; align-items: center; transform: none; position: unset;\"
                                     class=\"rating-stars\">
                                    ";
                    // line 142
                    $context["counterRating"] = 0;
                    // line 143
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 144
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 144) < $context["i"])) {
                            // line 145
                            echo "                                        ";
                        } else {
                            // line 146
                            echo "                                            ";
                            $context["counterRating"] = (($context["counterRating"] ?? null) + 1);
                            // line 147
                            echo "                                        ";
                        }
                        // line 148
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo "                                    ";
                    echo ($context["counterRating"] ?? null);
                    echo ".0<span style=\"color: #E5C622; font-size: 16px; margin-left: 2px;\"
                                                               class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                </div>
                            </div>
                        ";
                }
                // line 154
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 154) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 154))) {
                    // line 155
                    echo "                            <div style=\"position: unset !important; margin-left: 20px; display: flex; align-items: start;\" class=\"wish-group\">
                                ";
                    // line 156
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 156), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 156)) {
                        // line 157
                        echo "                                    <a style=\"border: none;\"
                                       class=\"btn btn-wishlist\" ";
                        // line 158
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 158), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistDisplay"), 1 => $context], "method", false, false, false, 158) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 158), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipStatus"), 1 => $context], "method", false, false, false, 158))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                            echo " wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 158), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipPosition"), 1 => $context], "method", false, false, false, 158);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        // line 159
                        echo "                                       onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 159);
                        echo "')\"><span
                                                class=\"btn-text\">";
                        // line 160
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></a>
                                ";
                    }
                    // line 162
                    echo "
                                ";
                    // line 163
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 163), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 163)) {
                        // line 164
                        echo "                                    <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 164), "getIn", [0 => (($context["prefix"] ?? null) . "CompareDisplay"), 1 => $context], "method", false, false, false, 164) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 164), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipStatus"), 1 => $context], "method", false, false, false, 164))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                            echo " compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 164), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipPosition"), 1 => $context], "method", false, false, false, 164);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        // line 165
                        echo "                                       onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 165);
                        echo "')\"><span
                                                class=\"btn-text\">";
                        // line 166
                        echo ($context["button_compare"] ?? null);
                        echo "</span></a>
                                ";
                    }
                    // line 168
                    echo "                            </div>
                        ";
                }
                // line 170
                echo "                    </div>
                </div>
            ";
            }
            // line 173
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 173), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 173) == "image")) {
                // line 174
                echo "                <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 174);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 174);
                echo "</a></div>
            ";
            }
            // line 176
            echo "
            <div class=\"image\">
                ";
            // line 178
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 178), "get", [0 => "quickviewStatus"], "method", false, false, false, 178)) {
                // line 179
                echo "                    <div class=\"quickview-button\">
                        <a class=\"btn btn-quickview\"
                           ";
                // line 181
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 181), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewDisplay"), 1 => $context], "method", false, false, false, 181) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 181), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipStatus"), 1 => $context], "method", false, false, false, 181))) {
                    echo "data-toggle=\"tooltip\"
                           data-tooltip-class=\"";
                    // line 182
                    echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    echo " quickview-tooltip\"
                           data-placement=\"";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 183), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipPosition"), 1 => $context], "method", false, false, false, 183);
                    echo "\"
                           title=\"";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 184), "get", [0 => "quickviewText"], "method", false, false, false, 184);
                    echo "\"";
                }
                // line 185
                echo "                           onclick=\"quickview('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 185);
                echo "')\"><span
                                    class=\"btn-text\">";
                // line 186
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 186), "get", [0 => "quickviewText"], "method", false, false, false, 186);
                echo "</span></a>
                    </div>
                ";
            }
            // line 189
            echo "
                <a href=\"";
            // line 190
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 190);
            echo "\"
                   class=\"product-img ";
            // line 191
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 191)) {
                echo "has-second-image";
            }
            echo "\">
                    <div>
                        ";
            // line 193
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 193), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 193)) {
                // line 194
                echo "                            <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 194);
                echo "\"
                                 ";
                // line 195
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 195)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 195);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 195);
                    echo " 2x\" ";
                }
                // line 196
                echo "                                 width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 196);
                echo "\"
                                 title=\"";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 197);
                echo "\" class=\"img-responsive img-first lazyload\"/>
                        ";
            } else {
                // line 199
                echo "                            <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 199);
                echo "\"
                                 ";
                // line 200
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 200)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 200);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 200);
                    echo " 2x\" ";
                }
                // line 201
                echo "                                 width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 201);
                echo "\"
                                 title=\"";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
                echo "\" class=\"img-responsive img-first\"/>
                        ";
            }
            // line 204
            echo "
                        ";
            // line 205
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 205)) {
                // line 206
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 206), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 206)) {
                    // line 207
                    echo "                                <img src=\"";
                    echo ($context["dummy_image"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 207);
                    echo "\"
                                     ";
                    // line 208
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 208)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 208);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 208);
                        echo " 2x\" ";
                    }
                    // line 209
                    echo "                                     width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 209);
                    echo "\"
                                     title=\"";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 210);
                    echo "\" class=\"img-responsive img-second lazyload\"/>
                            ";
                } else {
                    // line 212
                    echo "                                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 212);
                    echo "\"
                                     ";
                    // line 213
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 213)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 213);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 213);
                        echo " 2x\" ";
                    }
                    // line 214
                    echo "                                     width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 214);
                    echo "\"
                                     title=\"";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 215);
                    echo "\" class=\"img-responsive img-second\"/>
                            ";
                }
                // line 217
                echo "                        ";
            }
            // line 218
            echo "
                    </div>
                </a>

                ";
            // line 222
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 222), "get", [0 => "countdownStatus"], "method", false, false, false, 222) && twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 222))) {
                // line 223
                echo "                    <div class=\"countdown\" data-date=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 223);
                echo "\"></div>
                ";
            }
            // line 225
            echo "
            </div>

            <div class=\"caption\">
                ";
            // line 229
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 229) || twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 229))) {
                // line 230
                echo "                    <div class=\"stats\">
                        ";
                // line 231
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 231)) {
                    // line 232
                    echo "                            <span class=\"stat-1\"><span
                                        class=\"stats-label\">";
                    // line 233
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 233), "label", [], "any", false, false, false, 233);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 233), "text", [], "any", false, false, false, 233);
                    echo "</span></span>
                        ";
                }
                // line 235
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 235)) {
                    // line 236
                    echo "                            <span class=\"stat-2\"><span
                                        class=\"stats-label\">";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 237), "label", [], "any", false, false, false, 237);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 237), "text", [], "any", false, false, false, 237);
                    echo "</span></span>
                        ";
                }
                // line 239
                echo "                    </div>
                ";
            }
            // line 241
            echo "
                ";
            // line 242
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 242), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 242) == "default")) {
                // line 243
                echo "                    <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 243);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 243);
                echo "</a></div>
                ";
            }
            // line 245
            echo "
                ";
            // line 247
            echo "                    ";
            if ((($context["module_id"] ?? null) != 343)) {
                // line 248
                echo "                        <div class=\"attributes\">
                         ";
                // line 249
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_one", [], "any", false, false, false, 249));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_one"]) {
                    // line 250
                    echo "                                <p style=\"display: flex; justify-content: space-between; margin-bottom: 0;\">
                                     ";
                    // line 251
                    if (((twig_get_attribute($this->env, $this->source, $context["attribute_one"], "attribute_id", [], "any", false, false, false, 251) == 54) || (twig_get_attribute($this->env, $this->source, $context["attribute_one"], "attribute_id", [], "any", false, false, false, 251) == 59))) {
                        // line 252
                        echo "                                        <span style=\"max-width: 75%;\" class=\"first__name__cust\">
                                          ";
                        // line 253
                        echo twig_get_attribute($this->env, $this->source, $context["attribute_one"], "name", [], "any", false, false, false, 253);
                        echo "
                                        </span>
                                         <span class=\"first__text__cust\">
                                          ";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source, $context["attribute_one"], "text", [], "any", false, false, false, 256);
                        echo "
                                        </span>
                                    ";
                    }
                    // line 259
                    echo "                                </p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_one'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "                        </div>
                    ";
            }
            // line 263
            echo "                ";
            // line 264
            echo "






                <div class=\"description\">";
            // line 271
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 271);
            echo "</div>

                ";
            // line 273
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 273)) {
                // line 274
                echo "                    <div style=\"    display: flex; justify-content: space-between; width: 100%;\" class=\"price\">
                        <div>
                            <div>
                                ";
                // line 277
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 277)) {
                    // line 278
                    echo "                                    <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 278);
                    echo "</span> <span
                                        class=\"price-old\">";
                    // line 279
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 279);
                    echo "</span>
                                ";
                } else {
                    // line 281
                    echo "                                    <span class=\"price-normal\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 281);
                    echo "</span>
                                ";
                }
                // line 283
                echo "                            </div>
                            ";
                // line 284
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 284)) {
                    // line 285
                    echo "                                <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 285);
                    echo "</span>
                            ";
                }
                // line 287
                echo "                        </div>
                        <div>
                            ";
                // line 289
                if ((($context["module_id"] ?? null) != 343)) {
                    // line 290
                    echo "                            ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "payment_pb_chastyami", [], "any", false, false, false, 290), "payment_pb_chastyami", [], "any", false, false, false, 290) == 1) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "payment_pb_rassrochka", [], "any", false, false, false, 290), "payment_pb_rassrochka", [], "any", false, false, false, 290) == 1))) {
                        // line 291
                        echo "                                <img src=\"https://osushuvachi.webfun.com.ua/image/catalog/icons/privat.png\"
                                     alt=\"privat\" title=\"privat\">
                            ";
                    }
                    // line 294
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "payment_mono_chastyami", [], "any", false, false, false, 294), "payment_mono_chastyami", [], "any", false, false, false, 294) == 1)) {
                        // line 295
                        echo "                                <img style=\"margin-left: 12px;\" src=\"https://osushuvachi.webfun.com.ua/image/catalog/icons/mono.png\" alt=\"mono\"
                                     title=\"mono\">
                            ";
                    }
                    // line 298
                    echo "                            ";
                }
                // line 299
                echo "                        </div>
                    </div>
                ";
            }
            // line 302
            echo "
                ";
            // line 303
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 303), "get", [0 => "catalogCartStatus"], "method", false, false, false, 303) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 303), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 303)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 303), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 303))) {
                // line 304
                echo "                    <div class=\"buttons-wrapper\">
                        <div class=\"button-group\">
                            ";
                // line 306
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 306), "get", [0 => "catalogCartStatus"], "method", false, false, false, 306)) {
                    // line 307
                    echo "                                <div class=\"cart-group\">
                                    <div class=\"stepper\">
                                        <span class=\"stepper-arrow stepper__minus\"
                                              v-on:click=\"updateCartItemQuantity(index, -1)\"><svg height=\"1em\"
                                                                                                  viewBox=\"0 0 320 512\"><path
                                                        d=\"M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></span>
                                        <input type=\"text\" name=\"quantity\" value=\"";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 313);
                    echo "\"
                                               data-minimum=\"";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 314);
                    echo "\" class=\"form-control\"/>
                                        <input type=\"hidden\" name=\"product_id\" value=\"";
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 315);
                    echo "\"/>
                                        <span class=\"stepper-arrow stepper__plus\"
                                              v-on:click=\"updateCartItemQuantity(index, 1)\"><svg height=\"1em\"
                                                                                                 viewBox=\"0 0 320 512\"><path
                                                        d=\"M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\"/></svg></span>
                                    </div>
";
                    // line 322
                    echo "                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 322);
                    echo "\" class=\"btn btn-mobview\">
                                        <span class=\"btn-view\">";
                    // line 323
                    echo ($context["button_view"] ?? null);
                    echo "</span>
                                    </a>
";
                    // line 326
                    echo "                                    <a class=\"btn btn-cart\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 326), "getIn", [0 => (($context["prefix"] ?? null) . "CartDisplay"), 1 => $context], "method", false, false, false, 326) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 326), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipStatus"), 1 => $context], "method", false, false, false, 326))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " cart-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 326), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipPosition"), 1 => $context], "method", false, false, false, 326);
                        echo "\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" ";
                    }
                    // line 327
                    echo "                                       onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 327);
                    echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\"
                                       data-loading-text=\"<span class='btn-text'>";
                    // line 328
                    echo ($context["button_cart"] ?? null);
                    echo "</span>\"><span
                                                class=\"btn-text\">";
                    // line 329
                    echo ($context["button_cart"] ?? null);
                    echo "</span></a>
                                </div>

                            ";
                }
                // line 333
                echo "

                        </div>
                    </div>

                ";
            }
            // line 339
            echo "

                ";
            // line 341
            if (twig_get_attribute($this->env, $this->source, $context["product"], "extra_buttons", [], "any", false, false, false, 341)) {
                // line 342
                echo "                    <div class=\"extra-group\">
                        <div>
                            ";
                // line 344
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "extra_buttons", [], "any", false, false, false, 344));
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
                    // line 345
                    echo "                                <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo "\"
                                        ";
                    // line 346
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 346), "getIn", [0 => ((($context["prefix"] ?? null) . "ExtraButtonDisplay") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 346)), 1 => $context], "method", false, false, false, 346) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 346), "getIn", [0 => (($context["prefix"] ?? null) . "ExtraButtonTooltipStatus"), 1 => $context], "method", false, false, false, 346))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 346), "getIn", [0 => (($context["prefix"] ?? null) . "ExtraButtonTooltipPosition"), 1 => $context], "method", false, false, false, 346);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 346);
                        echo "\" ";
                    }
                    // line 347
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 347) == "quickbuy")) {
                        echo "onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 347);
                        echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\"";
                    }
                    // line 348
                    echo "                                        ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 348) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 348), "href", [], "any", false, false, false, 348))) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 348), "href", [], "any", false, false, false, 348);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 348)], "method", false, false, false, 348);
                        echo " data-product_id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 348);
                        echo "\" data-product_url=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 348);
                        echo "\"";
                    }
                    // line 349
                    echo "                                   data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 349);
                    echo "</span>\">
                                    <span class=\"btn-text\">";
                    // line 350
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 350);
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
                // line 353
                echo "                        </div>
                    </div>
                ";
            }
            // line 356
            echo "            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
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
        return array (  1018 => 360,  1009 => 356,  1004 => 353,  987 => 350,  982 => 349,  969 => 348,  962 => 347,  952 => 346,  947 => 345,  930 => 344,  926 => 342,  924 => 341,  920 => 339,  912 => 333,  905 => 329,  901 => 328,  896 => 327,  885 => 326,  880 => 323,  875 => 322,  866 => 315,  862 => 314,  858 => 313,  850 => 307,  848 => 306,  844 => 304,  842 => 303,  839 => 302,  834 => 299,  831 => 298,  826 => 295,  823 => 294,  818 => 291,  815 => 290,  813 => 289,  809 => 287,  802 => 285,  800 => 284,  797 => 283,  791 => 281,  786 => 279,  781 => 278,  779 => 277,  774 => 274,  772 => 273,  767 => 271,  758 => 264,  756 => 263,  752 => 261,  745 => 259,  739 => 256,  733 => 253,  730 => 252,  728 => 251,  725 => 250,  721 => 249,  718 => 248,  715 => 247,  712 => 245,  704 => 243,  702 => 242,  699 => 241,  695 => 239,  688 => 237,  685 => 236,  682 => 235,  675 => 233,  672 => 232,  670 => 231,  667 => 230,  665 => 229,  659 => 225,  653 => 223,  651 => 222,  645 => 218,  642 => 217,  637 => 215,  628 => 214,  620 => 213,  615 => 212,  610 => 210,  601 => 209,  593 => 208,  586 => 207,  583 => 206,  581 => 205,  578 => 204,  573 => 202,  564 => 201,  556 => 200,  551 => 199,  546 => 197,  537 => 196,  529 => 195,  522 => 194,  520 => 193,  513 => 191,  509 => 190,  506 => 189,  500 => 186,  495 => 185,  491 => 184,  487 => 183,  483 => 182,  479 => 181,  475 => 179,  473 => 178,  469 => 176,  461 => 174,  458 => 173,  453 => 170,  449 => 168,  444 => 166,  439 => 165,  428 => 164,  426 => 163,  423 => 162,  418 => 160,  413 => 159,  403 => 158,  400 => 157,  398 => 156,  395 => 155,  392 => 154,  383 => 149,  377 => 148,  374 => 147,  371 => 146,  368 => 145,  365 => 144,  360 => 143,  358 => 142,  350 => 139,  347 => 138,  338 => 133,  332 => 132,  329 => 131,  326 => 130,  323 => 129,  320 => 128,  315 => 127,  313 => 126,  305 => 123,  302 => 122,  300 => 121,  296 => 119,  291 => 116,  287 => 114,  282 => 112,  277 => 111,  266 => 110,  264 => 109,  261 => 108,  256 => 106,  251 => 105,  241 => 104,  238 => 103,  236 => 102,  233 => 101,  230 => 100,  221 => 95,  215 => 94,  212 => 93,  209 => 92,  206 => 91,  203 => 90,  198 => 89,  196 => 88,  188 => 85,  185 => 84,  176 => 79,  170 => 78,  167 => 77,  164 => 76,  161 => 75,  158 => 74,  153 => 73,  151 => 72,  143 => 69,  140 => 68,  138 => 67,  133 => 64,  121 => 62,  118 => 61,  114 => 60,  109 => 57,  106 => 56,  60 => 12,  58 => 11,  50 => 9,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/product_card.twig", "/home/goodin01/webfun.com.ua/osushuvachi/catalog/view/theme/journal3/template/journal3/product_card.twig");
    }
}
