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

/* catalog/product_form.twig */
class __TwigTemplate_c28aaa708b8ed08b65645ec5a659960f2022da1f97838fc44a30f49a4fb68149 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
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
            echo "          <li><a href=\"";
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
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_special"] ?? null);
        echo "</a></li>

                    <!-- YouTube Product Video -- Start -->
                    <li><a href=\"#tab_youtube_product_video\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_youtube_product_video"] ?? null);
        echo "</a></li>
                    <!-- YouTube Product Video -- End -->
                
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 50
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 50);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 50);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 50);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 50);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null), "name", [], "any", false, false, false, 58)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\" class=\"form-control\"/>
                        ";
            // line 59
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59)] ?? null) : null)) {
                // line 60
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 61
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "locale", [], "any", false, false, false, 66);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null), "description", [], "any", false, false, false, 66)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["product_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["product_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null), "meta_title", [], "any", false, false, false, 72)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "\" class=\"form-control\"/>
                        ";
            // line 73
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_meta_title"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null)) {
                // line 74
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_meta_title"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 75
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["product_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["product_description"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null), "meta_description", [], "any", false, false, false, 80)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 86
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            echo "\" class=\"form-control\">";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["product_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["product_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 86)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
            echo "][tag]\" value=\"";
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["product_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["product_description"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null), "tag", [], "any", false, false, false, 92)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
            echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 100
        echo ($context["entry_model"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 102
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                  ";
        // line 103
        if (($context["error_model"] ?? null)) {
            // line 104
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 105
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 108
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 110
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 116
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 120
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 122
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 126
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 128
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 132
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 134
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 138
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 140
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 144
        echo ($context["entry_location"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 146
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 150
        echo ($context["entry_price"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 152
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>




";
        // line 160
        echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-labels\">Мітки:</label>
                <div class=\"col-sm-10\">
                  <a href=\"\">Налаштування міток для кожного товару в Journal -> Product Extras -> Product Label </a>
";
        // line 171
        echo "                  
                </div>
              </div>
";
        // line 175
        echo "

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 178
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 181
        echo ($context["text_none"] ?? null);
        echo "</option>


                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 185
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 185) == ($context["tax_class_id"] ?? null))) {
                // line 186
                echo "

                        <option value=\"";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 188);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 188);
                echo "</option>


                      ";
            } else {
                // line 192
                echo "

                        <option value=\"";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 194);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 194);
                echo "</option>


                      ";
            }
            // line 198
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 205
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 207
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 211
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 213
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 217
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 222
        if (($context["subtract"] ?? null)) {
            // line 223
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 225
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 226
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 230
            echo "

                      <option value=\"1\">";
            // line 232
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 233
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        }
        // line 237
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 243
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 249
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 249) == ($context["stock_status_id"] ?? null))) {
                // line 250
                echo "

                        <option value=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 252);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 252);
                echo "</option>


                      ";
            } else {
                // line 256
                echo "

                        <option value=\"";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 258);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 258);
                echo "</option>


                      ";
            }
            // line 262
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 269
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 271
        if (($context["shipping"] ?? null)) {
            // line 272
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 273
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 275
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 276
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 277
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 278
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 279
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 281
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 282
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 283
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 287
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 290
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 296
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 300
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 303
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 306
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 312
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 318
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 318) == ($context["length_class_id"] ?? null))) {
                // line 319
                echo "

                        <option value=\"";
                // line 321
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 321);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 321);
                echo "</option>


                      ";
            } else {
                // line 325
                echo "

                        <option value=\"";
                // line 327
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 327);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 327);
                echo "</option>


                      ";
            }
            // line 331
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 338
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 340
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 344
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 350
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 350) == ($context["weight_class_id"] ?? null))) {
                // line 351
                echo "

                        <option value=\"";
                // line 353
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 353);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 353);
                echo "</option>


                      ";
            } else {
                // line 357
                echo "

                        <option value=\"";
                // line 359
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 359);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 359);
                echo "</option>


                      ";
            }
            // line 363
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 370
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 375
        if (($context["status"] ?? null)) {
            // line 376
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 378
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 379
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 383
            echo "

                      <option value=\"1\">";
            // line 385
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 386
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 390
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 396
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 398
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>




";
        // line 406
        echo "              ";
        // line 415
        echo "\t\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Оплата частями</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 418
        if (($context["payment_pb_chastyami"] ?? null)) {
            // line 419
            echo "                      <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 420
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 422
            echo "                      <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"1\"/>
                      ";
            // line 423
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 424
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["payment_pb_chastyami"] ?? null)) {
            // line 425
            echo "                      <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 426
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 428
            echo "                      <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"0\"/>
                      ";
            // line 429
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 430
        echo " </label>
                </div>
              </div>
\t\t\t\t
";
        // line 435
        echo "              ";
        // line 444
        echo "\t\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Мгновенная рассрочка</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 447
        if (($context["payment_pb_rassrochka"] ?? null)) {
            // line 448
            echo "                      <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 449
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 451
            echo "                      <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"1\"/>
                      ";
            // line 452
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 453
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["payment_pb_rassrochka"] ?? null)) {
            // line 454
            echo "                      <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 455
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 457
            echo "                      <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"0\"/>
                      ";
            // line 458
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 459
        echo " </label>
                </div>
              </div>

";
        // line 464
        echo "              ";
        // line 473
        echo "\t\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Монобанк</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 476
        if (($context["payment_mono_chastyami"] ?? null)) {
            // line 477
            echo "                      <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 478
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 480
            echo "                      <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"1\"/>
                      ";
            // line 481
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 482
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["payment_mono_chastyami"] ?? null)) {
            // line 483
            echo "                      <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 484
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 486
            echo "                      <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"0\"/>
                      ";
            // line 487
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 488
        echo " </label>
                </div>
              </div>




            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 498
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 500
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 504
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 506
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 508
            echo "                      <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 508);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 508);
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 509
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 509);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 515
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 517
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 519
            echo "                      <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 519);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 519);
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 520
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 520);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 526
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 529
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 530
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 530), ($context["product_store"] ?? null))) {
                // line 531
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 531);
                echo "\" checked=\"checked\"/>
                            ";
                // line 532
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 532);
                echo "
                          ";
            } else {
                // line 534
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 534);
                echo "\"/>
                            ";
                // line 535
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 535);
                echo "
                          ";
            }
            // line 536
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 542
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 544
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 546
            echo "                      <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 546);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 546);
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 547
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 547);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 553
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 555
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 556
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 557
            echo "                      <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 557);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 557);
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 558
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 558);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-buywith\"><span data-toggle=\"tooltip\" title=\"";
        // line 564
        echo ($context["help_buywith"] ?? null);
        echo "\">";
        echo ($context["entry_buywith"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"buywith\" value=\"\" placeholder=\"";
        // line 566
        echo ($context["entry_buywith"] ?? null);
        echo "\" id=\"input-buywith\" class=\"form-control\"/>
                  <div id=\"product-buywith\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 567
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_buywiths"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_buywith"]) {
            // line 568
            echo "                      <div id=\"product-buywith";
            echo twig_get_attribute($this->env, $this->source, $context["product_buywith"], "product_id", [], "any", false, false, false, 568);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_buywith"], "name", [], "any", false, false, false, 568);
            echo "
                        <input type=\"hidden\" name=\"product_buywith[]\" value=\"";
            // line 569
            echo twig_get_attribute($this->env, $this->source, $context["product_buywith"], "product_id", [], "any", false, false, false, 569);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_buywith'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 571
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 580
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 581
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 582
        echo ($context["entry_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 587
        $context["attribute_row"] = 0;
        // line 588
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 589
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 590
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 590);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 590);
            echo "\"/></td>
                        <td class=\"text-left\">";
            // line 591
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 592
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 592);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 592);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 592);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 592);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 592)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 592)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 592)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 592)] ?? null) : null), "text", [], "any", false, false, false, 592)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 594
            echo "</td>
                        <td class=\"text_right\">
                          <select name=\"product_attribute[";
            // line 596
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_top]\"  class=\"form-control\">
                            ";
            // line 597
            if (twig_get_attribute($this->env, $this->source, $context["product_attribute"], "top", [], "any", false, false, false, 597)) {
                // line 598
                echo "                              <option value=\"0\">";
                echo ($context["text_no"] ?? null);
                echo "</option>
                              <option value=\"1\" selected=\"selected\" >";
                // line 599
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            ";
            } else {
                // line 601
                echo "                              <option value=\"0\" selected=\"selected\">";
                echo ($context["text_no"] ?? null);
                echo "</option>
                              <option value=\"1\" >";
                // line 602
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            ";
            }
            // line 604
            echo "                          </select>
                        </td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 606
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 608
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 609
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 610
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 615
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 625
        $context["option_row"] = 0;
        // line 626
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 627
            echo "                      <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 627);
            echo "</a></li>
                      ";
            // line 628
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 629
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 630
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 631
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 636
        $context["option_row"] = 0;
        // line 637
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 638
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 639
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 640
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 640);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 640);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 640);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 640);
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 642
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 644
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                              ";
            // line 647
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 647)) {
                // line 648
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 650
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\">";
                // line 651
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            } else {
                // line 655
                echo "

                                <option value=\"1\">";
                // line 657
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 658
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            }
            // line 662
            echo "

                            </select>
                          </div>
                        </div>
                        ";
            // line 667
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 667) == "text")) {
                // line 668
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 669
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 671
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 671);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 675
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 675) == "textarea")) {
                // line 676
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 677
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 679
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 679);
                echo "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 683
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 683) == "file")) {
                // line 684
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 685
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 687
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 687);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 691
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 691) == "date")) {
                // line 692
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 693
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 696
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 696);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 702
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 702) == "time")) {
                // line 703
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 704
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 707
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 707);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 713
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 713) == "datetime")) {
                // line 714
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 715
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 718
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 718);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 724
            echo "                        ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 724) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 724) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 724) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 724) == "image"))) {
                // line 725
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 726
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 729
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 730
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 731
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 732
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 733
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 734
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 740
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 740));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 741
                    echo "                                  <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 742
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 745
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 745)] ?? null) : null)) {
                        // line 746
                        echo "
                                          ";
                        // line 747
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 747)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 748
                            echo "
                                            ";
                            // line 749
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 749) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 749))) {
                                // line 750
                                echo "

                                              <option value=\"";
                                // line 752
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 752);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 752);
                                echo "</option>


                                            ";
                            } else {
                                // line 756
                                echo "

                                              <option value=\"";
                                // line 758
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 758);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 758);
                                echo "</option>


                                            ";
                            }
                            // line 762
                            echo "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 763
                        echo "                                        ";
                    }
                    // line 764
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 766
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 766);
                    echo "\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 767
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 767);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 768
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                        ";
                    // line 771
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 771)) {
                        // line 772
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 774
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 775
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    } else {
                        // line 779
                        echo "

                                          <option value=\"1\">";
                        // line 781
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 782
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    }
                    // line 786
                    echo "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 789
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control\">


                                        ";
                    // line 792
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 792) == "+")) {
                        // line 793
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 799
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 805
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 805) == "-")) {
                        // line 806
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 812
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 818
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 820
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 820);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 821
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 824
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 824) == "+")) {
                        // line 825
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 831
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 837
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 837) == "-")) {
                        // line 838
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 844
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 850
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 852
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 852);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 853
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 856
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 856) == "+")) {
                        // line 857
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 863
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 869
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 869) == "-")) {
                        // line 870
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 876
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 882
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 884
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 884);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 885
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  ";
                    // line 887
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 888
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 889
                echo "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"6\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 894
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 899
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                            ";
                // line 902
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["option_values"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 902)] ?? null) : null)) {
                    // line 903
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["option_values"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 903)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 904
                        echo "

                                <option value=\"";
                        // line 906
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 906);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 906);
                        echo "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 910
                    echo "                            ";
                }
                // line 911
                echo "

                          </select>
                        ";
            }
            // line 914
            echo " </div>
                      ";
            // line 915
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 916
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 925
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 926
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 932
        $context["recurring_row"] = 0;
        // line 933
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 934
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 935
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                            ";
            // line 938
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 939
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 939) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 939))) {
                    // line 940
                    echo "

                                <option value=\"";
                    // line 942
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 942);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 942);
                    echo "</option>


                              ";
                } else {
                    // line 946
                    echo "

                                <option value=\"";
                    // line 948
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 948);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 948);
                    echo "</option>


                              ";
                }
                // line 952
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 953
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 956
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 959
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 960
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 960) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 960))) {
                    // line 961
                    echo "

                                <option value=\"";
                    // line 963
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 963);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 963);
                    echo "</option>


                              ";
                } else {
                    // line 967
                    echo "

                                <option value=\"";
                    // line 969
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 969);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 969);
                    echo "</option>


                              ";
                }
                // line 973
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 974
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 977
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 979
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 980
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 981
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 986
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 997
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 998
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 999
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1000
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1001
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1002
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1008
        $context["discount_row"] = 0;
        // line 1009
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1010
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 1011
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1012
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1013
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1013) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1013))) {
                    // line 1014
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1014);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1014);
                    echo "</option>
                              ";
                } else {
                    // line 1016
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1016);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1016);
                    echo "</option>
                              ";
                }
                // line 1018
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1019
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1020
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1020);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1021
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1021);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1022
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1022);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1025
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1025);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1031
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1031);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 1035
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1037
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1038
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1039
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 1044
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1055
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1056
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1057
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1058
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1059
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1065
        $context["special_row"] = 0;
        // line 1066
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1067
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 1068
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 1071
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1072
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1072) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1072))) {
                    // line 1073
                    echo "

                                <option value=\"";
                    // line 1075
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1075);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1075);
                    echo "</option>


                              ";
                } else {
                    // line 1079
                    echo "

                                <option value=\"";
                    // line 1081
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1081);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1081);
                    echo "</option>


                              ";
                }
                // line 1085
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1086
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1089
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1089);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1090
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1090);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1093
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1093);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1099
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1099);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1103
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1105
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1106
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1107
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1112
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

                    <!-- YouTube Product Video -- Start -->
                    <div class=\"tab-pane\" id=\"tab_youtube_product_video\">
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-youtube_product_video\">";
        // line 1122
        echo ($context["youtube_product_video_link_text"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input name=\"youtube_product_video\" value=\"";
        // line 1124
        echo ($context["youtube_product_video"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["youtube_product_video_link_text"] ?? null);
        echo "\" id=\"input-youtube_product_video\" class=\"form-control\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 1128
        echo ($context["youtube_product_video_button_preview"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <span class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#youtube_product_video_modal\"><i class=\"fa fa-play\"> ";
        // line 1130
        echo ($context["youtube_product_video_modal_title"] ?? null);
        echo "</i></span>
                        </div>
                      </div>
                    </div>
                    <!-- YouTube Product Video -- End -->
                
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1141
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1146
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1155
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1156
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1162
        $context["image_row"] = 0;
        // line 1163
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1164
            echo "                      <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1165
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1165);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1165);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1166
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1166);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1167
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1169
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1170
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1171
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1176
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1184
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1186
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1193
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1194
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1200
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1201
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1201);
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1202
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1202);
            echo "][points]\" value=\"";
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_reward"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1202)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_reward"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1202)] ?? null) : null), "points", [], "any", false, false, false, 1202)) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1205
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1211
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1216
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1217
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 1221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1222
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1223
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1223);
            echo "</td>
                      <td class=\"text-left\">
                        ";
            // line 1225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1226
                echo "                          <div class=\"input-group\">
                          <span class=\"input-group-addon\">
                            <img src=\"language/";
                // line 1228
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1228);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1228);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1228);
                echo "\"/>
                          </span>
                          <input type=\"text\" name=\"product_seo_url[";
                // line 1230
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1230);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1230);
                echo "]\"
                                 value=\"";
                // line 1231
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["product_seo_url"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1231)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1231)] ?? null) : null);
                echo "\"
                                 placeholder=\"";
                // line 1232
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                          </div>
                          <div class=\"text-danger\">";
                // line 1234
                echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_keyword"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1234)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1234)] ?? null) : null);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1236
            echo "                      </td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1239
        echo "                  </tbody>

                  ";
        // line 1255
        echo "
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1264
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1265
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1270
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1271
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1271);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1272
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1272);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 1276
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1277
                echo "                              ";
                if (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["product_layout"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1277)] ?? null) : null) && ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["product_layout"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1277)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1277)))) {
                    // line 1278
                    echo "

                                <option value=\"";
                    // line 1280
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1280);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1280);
                    echo "</option>


                              ";
                } else {
                    // line 1284
                    echo "

                                <option value=\"";
                    // line 1286
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1286);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1286);
                    echo "</option>


                              ";
                }
                // line 1290
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1291
            echo "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1296
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1319
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1324
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1346
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1375
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1404
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1433
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

    // Buywith
  \$('input[name=\\'buywith\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1462
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'buywith\\']').val('');

\t\t  \$('#product-buywith' + item['value']).remove();

\t\t  \$('#product-buywith').append('<div id=\"product-buywith' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_buywith[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-buywith').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 1488
        echo ($context["attribute_row"] ?? null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1492
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1494
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1495
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1495);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1495);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1495);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1495);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1497
        echo "\t  html += '  </td>';
    html += '  <td class=\"text_right\">';
    html +=  '<select name=\"product_attribute[";
        // line 1499
        echo ($context["attribute_row"] ?? null);
        echo "][attribute_top]\"  class=\"form-control\">';
    ";
        // line 1500
        if (twig_get_attribute($this->env, $this->source, ($context["product_attribute"] ?? null), "top", [], "any", false, false, false, 1500)) {
            // line 1501
            echo "    html +=   ' <option value=\"0\">";
            echo ($context["text_no"] ?? null);
            echo "</option>';
    html +=    ' <option value=\"1\" selected=\"selected\" >";
            // line 1502
            echo ($context["text_yes"] ?? null);
            echo "</option>';
    ";
        } else {
            // line 1504
            echo "    html +=  '  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_no"] ?? null);
            echo "</option>';
    html +=   ' <option value=\"1\" >";
            // line 1505
            echo ($context["text_yes"] ?? null);
            echo "</option>';
    ";
        }
        // line 1507
        echo "    html += '</select>';
    html += '</td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1509
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1523
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1548
        echo ($context["option_row"] ?? null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1553
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1576
        echo ($context["entry_required"] ?? null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1578
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1579
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1585
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1586
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1592
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1593
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1599
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1600
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1606
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1607
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1613
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1614
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1620
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1621
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1630
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1631
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1632
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1633
        echo ($context["entry_price"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1634
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1635
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1644
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 1672
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1677
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1682
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 1692
        echo ($context["option_value_row"] ?? null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1699
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1701
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 1702
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1708
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1713
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1718
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1719
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 1730
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1735
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1736
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1736);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1736), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1738
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1739
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1740
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1741
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1742
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1743
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1744
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 1758
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1764
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1764);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1764), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1766
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1767
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1768
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1769
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1770
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1771
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1777
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 1786
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1790
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1791
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1792
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 1802
        echo ($context["recurring_row"] ?? null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 1808
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1809
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1809);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1809);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1811
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 1815
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1816
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1816);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1816);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1818
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1821
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 1833
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1838
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1843
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>

<!-- SEO URL Generator . Begin
============================================================================ -->
";
        // line 1856
        if (($context["module_seo_url_generator_status"] ?? null)) {
            // line 1857
            echo "<script type=\"text/javascript\">
  \$('#tab-seo .text-left .input-group').css('margin-bottom', '10px');

  \$.each(\$('#tab-seo .text-left'), function () {      
    \$(this).children('.input-group:last').css('margin-bottom', 'initial');
  });

  ";
            // line 1864
            if ( !($context["product_id"] ?? null)) {
                // line 1865
                echo "    
    ";
                // line 1866
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1867
                    echo "    \$('#input-name' + ";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["module_seo_url_generator_language"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1867)] ?? null) : null);
                    echo ").change(function(){ generateUrlOnAdd(); });
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1869
                echo "    \$('#input-model').change(function(){ generateUrlOnAdd(); });
    \$('#input-sku').change(function(){ generateUrlOnAdd(); });
    \$('#input-manufacturer').change(function(){ generateUrlOnAdd(); });

    function generateUrlOnAdd() {
      let a_lang_data = {
        name: {}
      };
      
      ";
                // line 1878
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1879
                    echo "      a_lang_data['name'][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1879);
                    echo "] = \$('#input-name' + ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1879);
                    echo ").val();
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1881
                echo "            
      data = {
        a_lang_data     : a_lang_data,
        model           : \$('#input-model').val(),
        sku             : \$('#input-sku').val(),
        manufacturer_id : \$('input[name=\"manufacturer_id\"]').val(),
        primary_key     : 'product_id',
        essence         : 'product',
        essence_id      : ''
      };

      // is different from edit
      \$.ajax({
        url: 'index.php?route=extension/module/seo_url_generator/generateSeoUrlByAjax4All&user_token=";
                // line 1894
                echo ($context["user_token"] ?? null);
                echo "',
        dataType: 'json',
        data: data,
        method : 'POST',
        beforeSend: function() {},
        success: function(response, textStatus, jqXHR) {
          // success ajax query
          if(response.result != 'error') {
            setTimeout(function() {      
              \$.each(response.result, function (store_id, store) {
                \$.each(store, function (language_id, value) {
                  if ('' !== value) {
                    \$('input[name=\"product_seo_url[' + store_id +'][' + language_id + ']\"]').val(value);
                  }
                });
              });
            }, 100);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Error ajax query
          console.log('AJAX query Error: ' + textStatus);
        },
        complete: function() {},
      });
    }

  ";
            } else {
                // line 1921
                echo "   

    var storeId = false;      
    var languageId = false;
    
    // enque redirects .generateUrlOnEdit firstly
    var url_redirects_rows = {};
    
    ";
                // line 1929
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 1930
                    echo "    url_redirects_rows[";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1930);
                    echo "] = {};
    
    ";
                    // line 1932
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 1933
                        echo "    url_redirects_rows[";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1933);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1933);
                        echo "] = 0;
    
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1936
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1937
                echo "    
    ";
                // line 1938
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 1939
                    echo "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 1940
                        echo "   
      var html = '';
      html += '<div class=\"form-group\">';
      html += '<label class=\"col-sm-2 control-label\">";
                        // line 1943
                        echo ($context["sug_text_redirects"] ?? null);
                        echo "</label>';
      html += '<!-- product-redirects . begin -->';
      html += '<div class=\"col-sm-10\">';
      html += '<div class=\"alert alert-info alert-sm\">";
                        // line 1946
                        echo ($context["sug_help_redirects"] ?? null);
                        echo "</div>';
      html += '<div id=\"seo_url_generator_redirects-";
                        // line 1947
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1947);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1947);
                        echo "\">';
      
      ";
                        // line 1949
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["redirects"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[(($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["store"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[(($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["language"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["language_id"] ?? null) : null)] ?? null) : null));
                        foreach ($context['_seq'] as $context["key"] => $context["redirect"]) {
                            // line 1950
                            echo "      ";
                            if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["redirects"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[(($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["store"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[(($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["language"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[$context["key"]] ?? null) : null)) {
                                // line 1951
                                echo "      html += '<div id=\"redirect-row-";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1951);
                                echo "-";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1951);
                                echo "-' + url_redirects_rows[";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1951);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1951);
                                echo "] + '\" class=\"row redirect-row\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1951);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1951);
                                echo "][";
                                echo $context["key"];
                                echo "]\" value=\"";
                                echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["redirects"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[(($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["store"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[(($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["language"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[$context["key"]] ?? null) : null);
                                echo "\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px); ";
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_seo_url_generator_redirects"] ?? null), (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["store"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["store_id"] ?? null) : null), [], "array", false, true, false, 1951), (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["language"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["language_id"] ?? null) : null), [], "array", false, true, false, 1951), $context["key"], [], "array", true, true, false, 1951)) {
                                    echo "border-color: red;";
                                }
                                echo "\"/><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"";
                                echo ($context["sug_button_delete_redirect"] ?? null);
                                echo "\"></i></div></div>';
      url_redirects_rows[";
                                // line 1952
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1952);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1952);
                                echo "]++;
      ";
                            }
                            // line 1954
                            echo "      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['redirect'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\t
      html += '</div>';
      html += '<!-- /product-redirects . end -->';
      html += '<button id=\"addNewRedirect-";
                        // line 1957
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1957);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1957);
                        echo "\" class=\"addNewRedirect btn btn-warning btn-sm\" data-store-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1957);
                        echo "\" data-language-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1957);
                        echo "\" data-source-language-id=\"";
                        echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["module_seo_url_generator_language"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1957)] ?? null) : null);
                        echo "\"><i class=\"fa fa-plus\"></i> ";
                        echo ($context["sug_button_add_redirect"] ?? null);
                        echo "</button>';
      html += '</div>';
      html += '</div>';
      
      <!-- Front works properly mark -->
      html += '<input type=\"hidden\" name=\"seo_url_generator_front_works\" />';
      
      //console.log('#generateUrlOnEdit-' + ";
                        // line 1964
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1964);
                        echo " + '-' + ";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1964);
                        echo ");
      //console.debug(html);
      
      \$('#generateUrlOnEdit-' + ";
                        // line 1967
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1967);
                        echo " + '-' + ";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1967);
                        echo ").parent().parent().after(html);
            
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1970
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1971
                echo "    
    \$('.addNewRedirect').click(function(e) {
      e.preventDefault();
      
      var store_id = \$(this).data('store-id');
      var language_id =  \$(this).data('language-id');
      
      console.log('\$(this).data(\"store-id\") : ' + \$(this).data('store-id'));
      console.log('\$(this).data(\"language-id\") : ' + \$(this).data('language-id'));
      console.log('#seo_url_generator_redirects-\" + store_id + \"-\" + language_id : #seo_url_generator_redirects-' + store_id + '-' + language_id);

      \$('#seo_url_generator_redirects-' + store_id + '-' + language_id).append('<div id=\"redirect-row-' + '-' + store_id + '-' + language_id + '-' + url_redirects_rows[store_id][language_id] + '\" class=\"row redirect-row recent\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[' + store_id + '][' + language_id + '][]\" value=\"\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px);\" /><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"";
                // line 1982
                echo ($context["sug_button_delete_redirect"] ?? null);
                echo "\"></i></div></div>');

      url_redirects_rows[store_id][language_id]++;
    });

    \$('body').on('click', '.deleteRedirect', function(e) {
      e.preventDefault();
      \$('#sug-btn-confirm').attr('data-target', '#' + \$(this).parent().parent('.redirect-row').attr('id'));\t\t
      \$('#sug-confirm').modal('toggle');    
    });

    \$('body').on('click', '#sug-btn-confirm', function(e) {
      e.preventDefault();\t\t
      \$(\$(this).attr('data-target')).remove();\t\t
      \$('#sug-confirm').modal('toggle');
    });
    
    
    // SEO URL Generation by button click
  
    thisButton = false;
    
    \$('.generateUrlOnEdit').click(function(e) {
      e.preventDefault();
      
      storeId = \$(this).data('store-id');      
      languageId = \$(this).data('language-id');
      sourceLanguageId = \$(this).data('source-language-id'); 
      thisButton = \$(this);
            
      data = {
        store_id        : storeId,
        language_id     : languageId,
        name            : \$('#input-name' + sourceLanguageId).val(),
        model           : \$('#input-model').val(),
        sku             : \$('#input-sku').val(),
        manufacturer_id : \$('input[name=\"manufacturer_id\"]').val(),
        primary_key     : 'product_id',
        essence         : 'product',
        essence_id      : ";
                // line 2021
                echo ($context["product_id"] ?? null);
                echo "
      };     

      getSeoUrl(data);
    });
    
    // is different from add
    function getSeoUrl(data) {
      \$.ajax({
        url: 'index.php?route=extension/module/seo_url_generator/generateSeoUrlByAjax4One&user_token=";
                // line 2030
                echo ($context["user_token"] ?? null);
                echo "',
        dataType: 'json',
        data: data,
        method : 'POST',
        beforeSend: function() {
          thisButton.css('opacity', '0.5');
        },
        success: function(response, textStatus, jqXHR) {
          // success ajax query
          if('' != response.result && 'error' != response.result) {            
            console.log('\$(\"#input-seo-url-\" + storeId + \"-\" + languageId).val() : ' + \$('#input-seo-url-' + storeId + '-' + languageId).val());
            console.log('response.result : ' + response.result);
            
            if ('' != \$('#input-seo-url-' + storeId + '-' + languageId).val().trim() && \$('#input-seo-url-' + storeId + '-' + languageId).val() != response.result) {    
              \$('#seo_url_generator_redirects-' + storeId + '-' + languageId).append('<div id=\"redirect-row-' + '-' + storeId + '-' + languageId + '-' + url_redirects_rows[storeId][languageId] + '\" class=\"row redirect-row recent\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[' + storeId + '][' + languageId + '][]\" value=\"' + \$('#input-seo-url-' + storeId + '-' + languageId).data('seo-url-was') + '\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px);\" /><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"";
                // line 2044
                echo ($context["sug_button_delete_redirect"] ?? null);
                echo "\"></i></div></div>');

              url_redirects_rows[storeId][languageId]++;
            }
            
            setTimeout(function() {
              \$('#input-seo-url-' + storeId + '-' + languageId).val(response.result);
            }, 100);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Error ajax query
          console.log('AJAX query Error: ' + textStatus);
        },
        complete: function() {
          thisButton.css('opacity', '1');
        },
      });
    }

  ";
            }
            // line 2064
            echo "  

  // Prevent incorrect SEO URL!
\tvar inputBorderColorInitial = false;
\t
\t\$('body').on('change', '.redirect-row input', function(e) {
\t\tif (!inputBorderColorInitial) {
\t\t\tinputBorderColorInitial = \$(this).css('border-color');
\t\t}
\t\t
\t\t// reset previous errors
\t\t\$(this).css('border-color', inputBorderColorInitial);
\t\t
\t\t\$('#sug-error-body').html('');
\t\t
\t\tlet hasError = false;
\t\t
\t\t// Check inputed data\t\t
\t\tif (\$(this).val().trim() == '') {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>";
            // line 2084
            echo ($context["sug_redirects_error_empty"] ?? null);
            echo "</b></p>');
\t\t}

\t\tif (\$(this).val().includes('/')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>";
            // line 2089
            echo ($context["sug_redirects_error_slash"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (\$(this).val().includes('http')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>";
            // line 2094
            echo ($context["sug_redirects_error_protocol"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (\$(this).val().includes('.html')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-warning\"><b>";
            // line 2099
            echo ($context["sug_redirects_error_html"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (hasError) {
\t\t\t\$(this).css('border-color', 'red');
\t\t\t
\t\t\t\$('#sug-error-body').append('<p class=\"alert alert-info\"><i class=\"fa fa-info-circle\" style=\"font-size: 1.5em;\">&nbsp;</i>  ";
            // line 2105
            echo ($context["sug_redirects_error_common"] ?? null);
            echo "</p>');
\t\t\t
\t\t\t\$('#sug-error').modal('toggle');
\t\t}
\t\t
    console.log('hasError : ' + hasError);
    console.log(\$(this).val());
\t\t
  });
\t
</script>

<!-- Confirm Modal -->
<div class=\"modal fade\" id=\"sug-confirm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sug-confirm\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title text-warning\" id=\"sug-confirm-title\"><i class=\"fa fa-exclamation-triangle\">&nbsp;</i> <b>";
            // line 2123
            echo ($context["sug_confirm_title"] ?? null);
            echo "</b></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
            // line 2126
            echo ($context["sug_confirm_body"] ?? null);
            echo "
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-danger sug-btn-confirm\" id=\"sug-btn-confirm\" data-target=\"\"><i class=\"fa fa-trash\">&nbsp;</i> ";
            // line 2129
            echo ($context["sug_confirm_btn_yes"] ?? null);
            echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 2130
            echo ($context["sug_confirm_btn_no"] ?? null);
            echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Error Modal -->
<div class=\"modal fade\" id=\"sug-error\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sug-error\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title text-danger\" id=\"sug-error-title\"><i class=\"fa fa-exclamation-triangle\">&nbsp;</i> <b>";
            // line 2142
            echo ($context["sug_redirects_error_title"] ?? null);
            echo "</b></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"sug-error-body\"></div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 2149
        echo "<!-- /SEO URL Generator . End
============================================================================ -->


    <!-- YouTube Product Video -- Start -->
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
    <div class=\"modal fade\" tabindex=\"-1\" id=\"youtube_product_video_modal\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h3 class=\"modal-title\">";
        // line 2175
        echo ($context["youtube_product_video_modal_title"] ?? null);
        echo "</h3>
                </div>
                <div class=\"modal-body\">
                    <div id=\"youtube_product_video_container\">
                        <iframe src=\"\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"pull-right\">
                        <button class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-close\"></i> ";
        // line 2184
        echo ($context["youtube_product_video_button_close_text"] ?? null);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function(\$){\$(document).ready(function(){
            \$('#youtube_product_video_modal').on('hidden.bs.modal', function () {
                var iframe = document.querySelector('#youtube_product_video_container iframe').contentWindow;
                iframe.postMessage('{\"event\":\"command\",\"func\":\"pauseVideo\",\"args\":\"\"}', '*');
            });
            var setSrc = function(){
                var val = \$('#input-youtube_product_video').val();
                var code = '';
                if (val.split('?').length > 1) {
                    val.split('?')[1].split('&').forEach(function(item){
                        if ( item.split('=').length > 1 && item.split('=')[0] == 'v' ) {
                            code = item.split('=')[1];
                        }
                    });
                }
                var link = 'https://www.youtube.com/embed/'+code+'?enablejsapi=1'
                \$('#youtube_product_video_container iframe').attr('src', link);
            }
            setSrc();
            \$('#input-youtube_product_video').on('change', setSrc);
        });})(jQuery);
    </script>
    <!-- YouTube Product Video -- End -->
                
";
        // line 2215
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4576 => 2215,  4542 => 2184,  4530 => 2175,  4502 => 2149,  4492 => 2142,  4477 => 2130,  4473 => 2129,  4467 => 2126,  4461 => 2123,  4440 => 2105,  4431 => 2099,  4423 => 2094,  4415 => 2089,  4407 => 2084,  4385 => 2064,  4361 => 2044,  4344 => 2030,  4332 => 2021,  4290 => 1982,  4277 => 1971,  4271 => 1970,  4260 => 1967,  4252 => 1964,  4232 => 1957,  4222 => 1954,  4215 => 1952,  4190 => 1951,  4187 => 1950,  4183 => 1949,  4176 => 1947,  4172 => 1946,  4166 => 1943,  4161 => 1940,  4156 => 1939,  4152 => 1938,  4149 => 1937,  4143 => 1936,  4131 => 1933,  4127 => 1932,  4121 => 1930,  4117 => 1929,  4107 => 1921,  4076 => 1894,  4061 => 1881,  4050 => 1879,  4046 => 1878,  4035 => 1869,  4026 => 1867,  4022 => 1866,  4019 => 1865,  4017 => 1864,  4008 => 1857,  4006 => 1856,  3990 => 1843,  3982 => 1838,  3974 => 1833,  3959 => 1821,  3954 => 1818,  3943 => 1816,  3939 => 1815,  3933 => 1811,  3922 => 1809,  3918 => 1808,  3909 => 1802,  3896 => 1792,  3892 => 1791,  3886 => 1790,  3879 => 1786,  3867 => 1777,  3858 => 1771,  3854 => 1770,  3850 => 1769,  3846 => 1768,  3842 => 1767,  3839 => 1766,  3828 => 1764,  3824 => 1763,  3816 => 1758,  3799 => 1744,  3795 => 1743,  3791 => 1742,  3787 => 1741,  3783 => 1740,  3779 => 1739,  3776 => 1738,  3765 => 1736,  3761 => 1735,  3753 => 1730,  3739 => 1719,  3735 => 1718,  3727 => 1713,  3719 => 1708,  3710 => 1702,  3706 => 1701,  3701 => 1699,  3691 => 1692,  3678 => 1682,  3670 => 1677,  3662 => 1672,  3631 => 1644,  3619 => 1635,  3615 => 1634,  3611 => 1633,  3607 => 1632,  3603 => 1631,  3599 => 1630,  3587 => 1621,  3583 => 1620,  3574 => 1614,  3570 => 1613,  3561 => 1607,  3557 => 1606,  3548 => 1600,  3544 => 1599,  3535 => 1593,  3531 => 1592,  3522 => 1586,  3518 => 1585,  3509 => 1579,  3505 => 1578,  3500 => 1576,  3474 => 1553,  3466 => 1548,  3438 => 1523,  3421 => 1509,  3417 => 1507,  3412 => 1505,  3407 => 1504,  3402 => 1502,  3397 => 1501,  3395 => 1500,  3391 => 1499,  3387 => 1497,  3370 => 1495,  3366 => 1494,  3361 => 1492,  3354 => 1488,  3325 => 1462,  3293 => 1433,  3261 => 1404,  3229 => 1375,  3197 => 1346,  3172 => 1324,  3164 => 1319,  3139 => 1296,  3129 => 1291,  3123 => 1290,  3114 => 1286,  3110 => 1284,  3101 => 1280,  3097 => 1278,  3094 => 1277,  3090 => 1276,  3083 => 1272,  3079 => 1271,  3076 => 1270,  3072 => 1269,  3065 => 1265,  3061 => 1264,  3050 => 1255,  3046 => 1239,  3038 => 1236,  3030 => 1234,  3025 => 1232,  3021 => 1231,  3015 => 1230,  3006 => 1228,  3002 => 1226,  2998 => 1225,  2993 => 1223,  2990 => 1222,  2986 => 1221,  2979 => 1217,  2975 => 1216,  2967 => 1211,  2959 => 1205,  2948 => 1202,  2944 => 1201,  2941 => 1200,  2937 => 1199,  2929 => 1194,  2925 => 1193,  2913 => 1186,  2906 => 1184,  2895 => 1176,  2888 => 1171,  2882 => 1170,  2880 => 1169,  2873 => 1167,  2865 => 1166,  2851 => 1165,  2846 => 1164,  2841 => 1163,  2839 => 1162,  2830 => 1156,  2826 => 1155,  2810 => 1146,  2802 => 1141,  2788 => 1130,  2783 => 1128,  2774 => 1124,  2769 => 1122,  2756 => 1112,  2749 => 1107,  2743 => 1106,  2741 => 1105,  2734 => 1103,  2723 => 1099,  2710 => 1093,  2700 => 1090,  2692 => 1089,  2687 => 1086,  2681 => 1085,  2672 => 1081,  2668 => 1079,  2659 => 1075,  2655 => 1073,  2652 => 1072,  2648 => 1071,  2642 => 1068,  2637 => 1067,  2632 => 1066,  2630 => 1065,  2621 => 1059,  2617 => 1058,  2613 => 1057,  2609 => 1056,  2605 => 1055,  2591 => 1044,  2584 => 1039,  2578 => 1038,  2576 => 1037,  2569 => 1035,  2558 => 1031,  2545 => 1025,  2535 => 1022,  2527 => 1021,  2519 => 1020,  2516 => 1019,  2510 => 1018,  2502 => 1016,  2494 => 1014,  2491 => 1013,  2487 => 1012,  2483 => 1011,  2478 => 1010,  2473 => 1009,  2471 => 1008,  2462 => 1002,  2458 => 1001,  2454 => 1000,  2450 => 999,  2446 => 998,  2442 => 997,  2428 => 986,  2421 => 981,  2415 => 980,  2413 => 979,  2406 => 977,  2401 => 974,  2395 => 973,  2386 => 969,  2382 => 967,  2373 => 963,  2369 => 961,  2366 => 960,  2362 => 959,  2356 => 956,  2351 => 953,  2345 => 952,  2336 => 948,  2332 => 946,  2323 => 942,  2319 => 940,  2316 => 939,  2312 => 938,  2306 => 935,  2301 => 934,  2296 => 933,  2294 => 932,  2285 => 926,  2281 => 925,  2265 => 916,  2263 => 915,  2260 => 914,  2254 => 911,  2251 => 910,  2239 => 906,  2235 => 904,  2230 => 903,  2228 => 902,  2222 => 899,  2212 => 894,  2205 => 889,  2199 => 888,  2197 => 887,  2190 => 885,  2180 => 884,  2176 => 882,  2168 => 876,  2160 => 870,  2157 => 869,  2149 => 863,  2141 => 857,  2139 => 856,  2131 => 853,  2121 => 852,  2117 => 850,  2109 => 844,  2101 => 838,  2098 => 837,  2090 => 831,  2082 => 825,  2080 => 824,  2072 => 821,  2062 => 820,  2058 => 818,  2050 => 812,  2042 => 806,  2039 => 805,  2031 => 799,  2023 => 793,  2021 => 792,  2013 => 789,  2008 => 786,  2001 => 782,  1997 => 781,  1993 => 779,  1986 => 775,  1982 => 774,  1978 => 772,  1976 => 771,  1968 => 768,  1958 => 767,  1950 => 766,  1946 => 764,  1943 => 763,  1937 => 762,  1928 => 758,  1924 => 756,  1915 => 752,  1911 => 750,  1909 => 749,  1906 => 748,  1902 => 747,  1899 => 746,  1897 => 745,  1889 => 742,  1884 => 741,  1880 => 740,  1871 => 734,  1867 => 733,  1863 => 732,  1859 => 731,  1855 => 730,  1851 => 729,  1845 => 726,  1842 => 725,  1839 => 724,  1824 => 718,  1816 => 715,  1813 => 714,  1810 => 713,  1795 => 707,  1787 => 704,  1784 => 703,  1781 => 702,  1766 => 696,  1758 => 693,  1755 => 692,  1752 => 691,  1739 => 687,  1732 => 685,  1729 => 684,  1726 => 683,  1713 => 679,  1706 => 677,  1703 => 676,  1700 => 675,  1687 => 671,  1680 => 669,  1677 => 668,  1675 => 667,  1668 => 662,  1661 => 658,  1657 => 657,  1653 => 655,  1646 => 651,  1642 => 650,  1638 => 648,  1636 => 647,  1628 => 644,  1621 => 642,  1602 => 640,  1597 => 639,  1592 => 638,  1589 => 637,  1587 => 636,  1579 => 631,  1576 => 630,  1570 => 629,  1568 => 628,  1557 => 627,  1552 => 626,  1550 => 625,  1537 => 615,  1530 => 610,  1524 => 609,  1522 => 608,  1515 => 606,  1511 => 604,  1506 => 602,  1501 => 601,  1496 => 599,  1491 => 598,  1489 => 597,  1485 => 596,  1481 => 594,  1459 => 592,  1455 => 591,  1443 => 590,  1438 => 589,  1433 => 588,  1431 => 587,  1423 => 582,  1419 => 581,  1415 => 580,  1404 => 571,  1395 => 569,  1388 => 568,  1384 => 567,  1380 => 566,  1373 => 564,  1367 => 560,  1358 => 558,  1351 => 557,  1347 => 556,  1343 => 555,  1336 => 553,  1330 => 549,  1321 => 547,  1314 => 546,  1310 => 545,  1306 => 544,  1299 => 542,  1293 => 538,  1285 => 536,  1280 => 535,  1275 => 534,  1270 => 532,  1265 => 531,  1263 => 530,  1260 => 529,  1256 => 528,  1251 => 526,  1245 => 522,  1236 => 520,  1229 => 519,  1225 => 518,  1221 => 517,  1214 => 515,  1208 => 511,  1199 => 509,  1192 => 508,  1188 => 507,  1184 => 506,  1177 => 504,  1166 => 500,  1159 => 498,  1147 => 488,  1142 => 487,  1139 => 486,  1134 => 484,  1131 => 483,  1128 => 482,  1123 => 481,  1120 => 480,  1115 => 478,  1112 => 477,  1110 => 476,  1105 => 473,  1103 => 464,  1097 => 459,  1092 => 458,  1089 => 457,  1084 => 455,  1081 => 454,  1078 => 453,  1073 => 452,  1070 => 451,  1065 => 449,  1062 => 448,  1060 => 447,  1055 => 444,  1053 => 435,  1047 => 430,  1042 => 429,  1039 => 428,  1034 => 426,  1031 => 425,  1028 => 424,  1023 => 423,  1020 => 422,  1015 => 420,  1012 => 419,  1010 => 418,  1005 => 415,  1003 => 406,  991 => 398,  986 => 396,  978 => 390,  971 => 386,  967 => 385,  963 => 383,  956 => 379,  952 => 378,  948 => 376,  946 => 375,  938 => 370,  930 => 364,  924 => 363,  915 => 359,  911 => 357,  902 => 353,  898 => 351,  895 => 350,  891 => 349,  883 => 344,  874 => 340,  869 => 338,  861 => 332,  855 => 331,  846 => 327,  842 => 325,  833 => 321,  829 => 319,  826 => 318,  822 => 317,  814 => 312,  803 => 306,  795 => 303,  787 => 300,  780 => 296,  769 => 290,  763 => 287,  757 => 283,  752 => 282,  749 => 281,  744 => 279,  741 => 278,  738 => 277,  733 => 276,  730 => 275,  725 => 273,  722 => 272,  720 => 271,  715 => 269,  707 => 263,  701 => 262,  692 => 258,  688 => 256,  679 => 252,  675 => 250,  672 => 249,  668 => 248,  658 => 243,  650 => 237,  643 => 233,  639 => 232,  635 => 230,  628 => 226,  624 => 225,  620 => 223,  618 => 222,  610 => 217,  601 => 213,  594 => 211,  585 => 207,  580 => 205,  572 => 199,  566 => 198,  557 => 194,  553 => 192,  544 => 188,  540 => 186,  537 => 185,  533 => 184,  527 => 181,  521 => 178,  516 => 175,  511 => 171,  505 => 160,  493 => 152,  488 => 150,  479 => 146,  474 => 144,  465 => 140,  458 => 138,  449 => 134,  442 => 132,  433 => 128,  426 => 126,  417 => 122,  410 => 120,  401 => 116,  394 => 114,  385 => 110,  378 => 108,  373 => 105,  367 => 104,  365 => 103,  359 => 102,  354 => 100,  348 => 96,  331 => 92,  322 => 90,  309 => 86,  302 => 84,  289 => 80,  282 => 78,  277 => 75,  271 => 74,  269 => 73,  259 => 72,  252 => 70,  237 => 66,  230 => 64,  225 => 61,  219 => 60,  217 => 59,  207 => 58,  200 => 56,  194 => 54,  190 => 53,  187 => 52,  170 => 50,  166 => 49,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  140 => 38,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">{{ tab_general }}</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">{{ tab_data }}</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">{{ tab_links }}</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">{{ tab_attribute }}</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">{{ tab_option }}</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">{{ tab_recurring }}</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">{{ tab_discount }}</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">{{ tab_special }}</a></li>

                    <!-- YouTube Product Video -- Start -->
                    <li><a href=\"#tab_youtube_product_video\" data-toggle=\"tab\">{{ tab_youtube_product_video }}</a></li>
                    <!-- YouTube Product Video -- End -->
                
            <li><a href=\"#tab-image\" data-toggle=\"tab\">{{ tab_image }}</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">{{ tab_reward }}</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">{{ tab_seo }}</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">{{ tab_design }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                {% for language in languages %}
                  <li><a href=\"#language{{ language.language_id }}\" data-toggle=\"tab\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                {% endfor %}
              </ul>
              <div class=\"tab-content\">{% for language in languages %}
                  <div class=\"tab-pane\" id=\"language{{ language.language_id }}\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name{{ language.language_id }}\">{{ entry_name }}</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[{{ language.language_id }}][name]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name{{ language.language_id }}\" class=\"form-control\"/>
                        {% if error_name[language.language_id] %}
                          <div class=\"text-danger\">{{ error_name[language.language_id] }}</div>
                        {% endif %} </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description{{ language.language_id }}\">{{ entry_description }}</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description{{ language.language_id }}\" data-toggle=\"summernote\" data-lang=\"{{ language.locale }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title{{ language.language_id }}\">{{ entry_meta_title }}</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[{{ language.language_id }}][meta_title]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title{{ language.language_id }}\" class=\"form-control\"/>
                        {% if error_meta_title[language.language_id] %}
                          <div class=\"text-danger\">{{ error_meta_title[language.language_id] }}</div>
                        {% endif %} </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description{{ language.language_id }}\">{{ entry_meta_description }}</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword{{ language.language_id }}\">{{ entry_meta_keyword }}</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag{{ language.language_id }}\"><span data-toggle=\"tooltip\" title=\"{{ help_tag }}\">{{ entry_tag }}</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[{{ language.language_id }}][tag]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].tag }}\" placeholder=\"{{ entry_tag }}\" id=\"input-tag{{ language.language_id }}\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                {% endfor %}</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">{{ entry_model }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
                  {% if error_model %}
                    <div class=\"text-danger\">{{ error_model }}</div>
                  {% endif %}</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"{{ help_sku }}\">{{ entry_sku }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"{{ sku }}\" placeholder=\"{{ entry_sku }}\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"{{ help_upc }}\">{{ entry_upc }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"{{ upc }}\" placeholder=\"{{ entry_upc }}\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"{{ help_ean }}\">{{ entry_ean }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"{{ ean }}\" placeholder=\"{{ entry_ean }}\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"{{ help_jan }}\">{{ entry_jan }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"{{ jan }}\" placeholder=\"{{ entry_jan }}\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"{{ help_isbn }}\">{{ entry_isbn }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"{{ isbn }}\" placeholder=\"{{ entry_isbn }}\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"{{ help_mpn }}\">{{ entry_mpn }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"{{ mpn }}\" placeholder=\"{{ entry_mpn }}\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">{{ entry_location }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"{{ location }}\" placeholder=\"{{ entry_location }}\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">{{ entry_price }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"{{ price }}\" placeholder=\"{{ entry_price }}\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>




{#       ==============================МІТКИ==============================       #}
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-labels\">Мітки:</label>
                <div class=\"col-sm-10\">
                  <a href=\"\">Налаштування міток для кожного товару в Journal -> Product Extras -> Product Label </a>
{#                  <select name=\"labels\" id=\"labels\" class=\"form-control\">#}
{#                    {{ dump(labels) }}#}
{#                    <option {{ labels == 1 ? 'selected' : ''}} value=\"1\">Акція</option>#}
{#                    <option {{ labels == 2 ? 'selected' : '' }} value=\"2\">Топ продаж</option>#}
{#                    <option {{ labels == 3 ? 'selected' : '' }} value=\"3\">Новинка</option>#}
{#                    <option {{ labels == 4 ? 'selected' : '' }} value=\"4\">Знижка</option>#}
{#                  </select>#}
                  
                </div>
              </div>
{#       ==============================МІТКИ==============================       #}


              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">{{ entry_tax_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">{{ text_none }}</option>


                    {% for tax_class in tax_classes %}
                      {% if tax_class.tax_class_id == tax_class_id %}


                        <option value=\"{{ tax_class.tax_class_id }}\" selected=\"selected\">{{ tax_class.title }}</option>


                      {% else %}


                        <option value=\"{{ tax_class.tax_class_id }}\">{{ tax_class.title }}</option>


                      {% endif %}
                    {% endfor %}


                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">{{ entry_quantity }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"{{ help_minimum }}\">{{ entry_minimum }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"{{ minimum }}\" placeholder=\"{{ entry_minimum }}\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">{{ entry_subtract }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    {% if subtract %}


                      <option value=\"1\" selected=\"selected\">{{ text_yes }}</option>
                      <option value=\"0\">{{ text_no }}</option>


                    {% else %}


                      <option value=\"1\">{{ text_yes }}</option>
                      <option value=\"0\" selected=\"selected\">{{ text_no }}</option>


                    {% endif %}


                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_status }}\">{{ entry_stock_status }}</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    {% for stock_status in stock_statuses %}
                      {% if stock_status.stock_status_id == stock_status_id %}


                        <option value=\"{{ stock_status.stock_status_id }}\" selected=\"selected\">{{ stock_status.name }}</option>


                      {% else %}


                        <option value=\"{{ stock_status.stock_status_id }}\">{{ stock_status.name }}</option>


                      {% endif %}
                    {% endfor %}


                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">{{ entry_shipping }}</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> {% if shipping %}
                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      {{ text_yes }}
                    {% else %}
                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      {{ text_yes }}
                    {% endif %} </label> <label class=\"radio-inline\"> {% if not shipping %}
                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      {{ text_no }}
                    {% else %}
                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      {{ text_no }}
                    {% endif %} </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">{{ entry_date_available }}</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"{{ date_available }}\" placeholder=\"{{ entry_date_available }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">{{ entry_dimension }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"{{ length }}\" placeholder=\"{{ entry_length }}\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">{{ entry_length_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    {% for length_class in length_classes %}
                      {% if length_class.length_class_id == length_class_id %}


                        <option value=\"{{ length_class.length_class_id }}\" selected=\"selected\">{{ length_class.title }}</option>


                      {% else %}


                        <option value=\"{{ length_class.length_class_id }}\">{{ length_class.title }}</option>


                      {% endif %}
                    {% endfor %}


                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">{{ entry_weight }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"{{ weight }}\" placeholder=\"{{ entry_weight }}\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">{{ entry_weight_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    {% for weight_class in weight_classes %}
                      {% if weight_class.weight_class_id == weight_class_id %}


                        <option value=\"{{ weight_class.weight_class_id }}\" selected=\"selected\">{{ weight_class.title }}</option>


                      {% else %}


                        <option value=\"{{ weight_class.weight_class_id }}\">{{ weight_class.title }}</option>


                      {% endif %}
                    {% endfor %}


                  </select>
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
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">{{ entry_sort_order }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>




{# payment_pb_chastyami #}
              {# <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"payment_pb_chastyami\">Оплата частями</label>
\t\t\t\t\t <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"Да\" {% if payment_pb_chastyami == 'Да' %}checked=\"checked\"{% endif %}> Да
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"Нет\" {% if payment_pb_chastyami == 'Нет' %}checked=\"checked\"{% endif %}> Нет
                  </label>
              </div> #}
\t\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Оплата частями</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> {% if payment_pb_chastyami %}
                      <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"1\" checked=\"checked\"/>
                      {{ text_yes }}
                    {% else %}
                      <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"1\"/>
                      {{ text_yes }}
                    {% endif %} </label> <label class=\"radio-inline\"> {% if not payment_pb_chastyami %}
                      <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"0\" checked=\"checked\"/>
                      {{ text_no }}
                    {% else %}
                      <input type=\"radio\" name=\"payment_pb_chastyami\" value=\"0\"/>
                      {{ text_no }}
                    {% endif %} </label>
                </div>
              </div>
\t\t\t\t
{# payment_pb_rassrochka #}
              {# <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"payment_pb_rassrochka\">Мгновенная рассрочка</label>
\t\t\t\t\t <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"Да\" {% if payment_pb_rassrochka == 'Да' %}checked=\"checked\"{% endif %}> Да
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"Нет\" {% if payment_pb_rassrochka == 'Нет' %}checked=\"checked\"{% endif %}> Нет
                  </label>
              </div> #}
\t\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Мгновенная рассрочка</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> {% if payment_pb_rassrochka %}
                      <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"1\" checked=\"checked\"/>
                      {{ text_yes }}
                    {% else %}
                      <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"1\"/>
                      {{ text_yes }}
                    {% endif %} </label> <label class=\"radio-inline\"> {% if not payment_pb_rassrochka %}
                      <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"0\" checked=\"checked\"/>
                      {{ text_no }}
                    {% else %}
                      <input type=\"radio\" name=\"payment_pb_rassrochka\" value=\"0\"/>
                      {{ text_no }}
                    {% endif %} </label>
                </div>
              </div>

{# payment_mono_chastyami #}
              {# <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"payment_mono_chastyami\">Монобанк</label>
\t\t\t\t\t <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"Да\" {% if payment_mono_chastyami == 'Да' %}checked=\"checked\"{% endif %}> Да
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"Нет\" {% if payment_mono_chastyami == 'Нет' %}checked=\"checked\"{% endif %}> Нет
                  </label>
              </div> #}
\t\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Монобанк</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> {% if payment_mono_chastyami %}
                      <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"1\" checked=\"checked\"/>
                      {{ text_yes }}
                    {% else %}
                      <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"1\"/>
                      {{ text_yes }}
                    {% endif %} </label> <label class=\"radio-inline\"> {% if not payment_mono_chastyami %}
                      <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"0\" checked=\"checked\"/>
                      {{ text_no }}
                    {% else %}
                      <input type=\"radio\" name=\"payment_mono_chastyami\" value=\"0\"/>
                      {{ text_no }}
                    {% endif %} </label>
                </div>
              </div>




            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"{{ help_manufacturer }}\">{{ entry_manufacturer }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"{{ manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"{{ manufacturer_id }}\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"{{ help_category }}\">{{ entry_category }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for product_category in product_categories %}
                      <div id=\"product-category{{ product_category.category_id }}\"><i class=\"fa fa-minus-circle\"></i> {{ product_category.name }}
                        <input type=\"hidden\" name=\"product_category[]\" value=\"{{ product_category.category_id }}\"/>
                      </div>
                    {% endfor %}</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"{{ help_filter }}\">{{ entry_filter }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"{{ entry_filter }}\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for product_filter in product_filters %}
                      <div id=\"product-filter{{ product_filter.filter_id }}\"><i class=\"fa fa-minus-circle\"></i> {{ product_filter.name }}
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"{{ product_filter.filter_id }}\"/>
                      </div>
                    {% endfor %}</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for store in stores %}
                      <div class=\"checkbox\">
                        <label> {% if store.store_id in product_store %}
                            <input type=\"checkbox\" name=\"product_store[]\" value=\"{{ store.store_id }}\" checked=\"checked\"/>
                            {{ store.name }}
                          {% else %}
                            <input type=\"checkbox\" name=\"product_store[]\" value=\"{{ store.store_id }}\"/>
                            {{ store.name }}
                          {% endif %} </label>
                      </div>
                    {% endfor %}</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"{{ help_download }}\">{{ entry_download }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"{{ entry_download }}\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for product_download in product_downloads %}
                      <div id=\"product-download{{ product_download.download_id }}\"><i class=\"fa fa-minus-circle\"></i> {{ product_download.name }}
                        <input type=\"hidden\" name=\"product_download[]\" value=\"{{ product_download.download_id }}\"/>
                      </div>
                    {% endfor %}</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"{{ help_related }}\">{{ entry_related }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"{{ entry_related }}\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for product_related in product_relateds %}
                      <div id=\"product-related{{ product_related.product_id }}\"><i class=\"fa fa-minus-circle\"></i> {{ product_related.name }}
                        <input type=\"hidden\" name=\"product_related[]\" value=\"{{ product_related.product_id }}\"/>
                      </div>
                    {% endfor %}</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-buywith\"><span data-toggle=\"tooltip\" title=\"{{ help_buywith }}\">{{ entry_buywith }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"buywith\" value=\"\" placeholder=\"{{ entry_buywith }}\" id=\"input-buywith\" class=\"form-control\"/>
                  <div id=\"product-buywith\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for product_buywith in product_buywiths %}
                      <div id=\"product-buywith{{ product_buywith.product_id }}\"><i class=\"fa fa-minus-circle\"></i> {{ product_buywith.name }}
                        <input type=\"hidden\" name=\"product_buywith[]\" value=\"{{ product_buywith.product_id }}\"/>
                      </div>
                    {% endfor %}</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_attribute }}</td>
                      <td class=\"text-left\">{{ entry_text }}</td>
                      <td class=\"text-left\">{{ entry_top }}</td>
                    </tr>
                  </thead>
                  <tbody>

                    {% set attribute_row = 0 %}
                    {% for product_attribute in product_attributes %}
                      <tr id=\"attribute-row{{ attribute_row }}\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[{{ attribute_row }}][name]\" value=\"{{ product_attribute.name }}\" placeholder=\"{{ entry_attribute }}\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[{{ attribute_row }}][attribute_id]\" value=\"{{ product_attribute.attribute_id }}\"/></td>
                        <td class=\"text-left\">{% for language in languages %}
                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\"/></span> <textarea name=\"product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text }}\" class=\"form-control\">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>
                            </div>
                          {% endfor %}</td>
                        <td class=\"text_right\">
                          <select name=\"product_attribute[{{ attribute_row }}][attribute_top]\"  class=\"form-control\">
                            {% if product_attribute.top %}
                              <option value=\"0\">{{ text_no }}</option>
                              <option value=\"1\" selected=\"selected\" >{{ text_yes }}</option>
                            {% else %}
                              <option value=\"0\" selected=\"selected\">{{ text_no }}</option>
                              <option value=\"1\" >{{ text_yes }}</option>
                            {% endif %}
                          </select>
                        </td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row{{ attribute_row }}').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set attribute_row = attribute_row + 1 %}
                    {% endfor %}
                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"{{ button_attribute_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    {% set option_row = 0 %}
                    {% for product_option in product_options %}
                      <li><a href=\"#tab-option{{ option_row }}\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option{{ option_row }}\\']').parent().remove(); \$('#tab-option{{ option_row }}').remove(); \$('#option a:first').tab('show');\"></i> {{ product_option.name }}</a></li>
                      {% set option_row = option_row + 1 %}
                    {% endfor %}
                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"{{ entry_option }}\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> {% set option_row = 0 %}
                    {% set option_value_row = 0 %}
                    {% for product_option in product_options %}
                      <div class=\"tab-pane\" id=\"tab-option{{ option_row }}\">
                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_id]\" value=\"{{ product_option.product_option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][name]\" value=\"{{ product_option.name }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][option_id]\" value=\"{{ product_option.option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][type]\" value=\"{{ product_option.type }}\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required{{ option_row }}\">{{ entry_required }}</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[{{ option_row }}][required]\" id=\"input-required{{ option_row }}\" class=\"form-control\">


                              {% if product_option.required %}


                                <option value=\"1\" selected=\"selected\">{{ text_yes }}</option>
                                <option value=\"0\">{{ text_no }}</option>


                              {% else %}


                                <option value=\"1\">{{ text_yes }}</option>
                                <option value=\"0\" selected=\"selected\">{{ text_no }}</option>


                              {% endif %}


                            </select>
                          </div>
                        </div>
                        {% if product_option.type == 'text' %}
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value{{ option_row }}\">{{ entry_option_value }}</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-value{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          </div>
                        {% endif %}
                        {% if product_option.type == 'textarea' %}
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value{{ option_row }}\">{{ entry_option_value }}</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[{{ option_row }}][value]\" rows=\"5\" placeholder=\"{{ entry_option_value }}\" id=\"input-value{{ option_row }}\" class=\"form-control\">{{ product_option.value }}</textarea>
                            </div>
                          </div>
                        {% endif %}
                        {% if product_option.type == 'file' %}
                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value{{ option_row }}\">{{ entry_option_value }}</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-value{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          </div>
                        {% endif %}
                        {% if product_option.type == 'date' %}
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value{{ option_row }}\">{{ entry_option_value }}</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-value{{ option_row }}\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        {% endif %}
                        {% if product_option.type == 'time' %}
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value{{ option_row }}\">{{ entry_option_value }}</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" data-date-format=\"HH:mm\" id=\"input-value{{ option_row }}\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        {% endif %}
                        {% if product_option.type == 'datetime' %}
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value{{ option_row }}\">{{ entry_option_value }}</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value{{ option_row }}\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        {% endif %}
                        {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}
                          <div class=\"table-responsive\">
                            <table id=\"option-value{{ option_row }}\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">{{ entry_option_value }}</td>
                                  <td class=\"text-right\">{{ entry_quantity }}</td>
                                  <td class=\"text-left\">{{ entry_subtract }}</td>
                                  <td class=\"text-right\">{{ entry_price }}</td>
                                  <td class=\"text-right\">{{ entry_option_points }}</td>
                                  <td class=\"text-right\">{{ entry_weight }}</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                {% for product_option_value in product_option.product_option_value %}
                                  <tr id=\"option-value-row{{ option_value_row }}\">
                                    <td class=\"text-left\"><select name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]\" class=\"form-control\">


                                        {% if option_values[product_option.option_id] %}

                                          {% for option_value in option_values[product_option.option_id] %}

                                            {% if option_value.option_value_id == product_option_value.option_value_id %}


                                              <option value=\"{{ option_value.option_value_id }}\" selected=\"selected\">{{ option_value.name }}</option>


                                            {% else %}


                                              <option value=\"{{ option_value.option_value_id }}\">{{ option_value.name }}</option>


                                            {% endif %}
                                          {% endfor %}
                                        {% endif %}


                                      </select> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]\" value=\"{{ product_option_value.product_option_value_id }}\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]\" value=\"{{ product_option_value.quantity }}\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]\" class=\"form-control\">


                                        {% if product_option_value.subtract %}


                                          <option value=\"1\" selected=\"selected\">{{ text_yes }}</option>
                                          <option value=\"0\">{{ text_no }}</option>


                                        {% else %}


                                          <option value=\"1\">{{ text_yes }}</option>
                                          <option value=\"0\" selected=\"selected\">{{ text_no }}</option>


                                        {% endif %}


                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]\" class=\"form-control\">


                                        {% if product_option_value.price_prefix == '+' %}


                                          <option value=\"+\" selected=\"selected\">+</option>


                                        {% else %}


                                          <option value=\"+\">+</option>


                                        {% endif %}
                                        {% if product_option_value.price_prefix == '-' %}


                                          <option value=\"-\" selected=\"selected\">-</option>


                                        {% else %}


                                          <option value=\"-\">-</option>


                                        {% endif %}


                                      </select> <input type=\"text\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]\" value=\"{{ product_option_value.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]\" class=\"form-control\">


                                        {% if product_option_value.points_prefix == '+' %}


                                          <option value=\"+\" selected=\"selected\">+</option>


                                        {% else %}


                                          <option value=\"+\">+</option>


                                        {% endif %}
                                        {% if product_option_value.points_prefix == '-' %}


                                          <option value=\"-\" selected=\"selected\">-</option>


                                        {% else %}


                                          <option value=\"-\">-</option>


                                        {% endif %}


                                      </select> <input type=\"text\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]\" value=\"{{ product_option_value.points }}\" placeholder=\"{{ entry_points }}\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]\" class=\"form-control\">


                                        {% if product_option_value.weight_prefix == '+' %}


                                          <option value=\"+\" selected=\"selected\">+</option>


                                        {% else %}


                                          <option value=\"+\">+</option>


                                        {% endif %}
                                        {% if product_option_value.weight_prefix == '-' %}


                                          <option value=\"-\" selected=\"selected\">-</option>


                                        {% else %}


                                          <option value=\"-\">-</option>


                                        {% endif %}


                                      </select> <input type=\"text\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]\" value=\"{{ product_option_value.weight }}\" placeholder=\"{{ entry_weight }}\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row{{ option_value_row }}').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  {% set option_value_row = option_value_row + 1 %}
                                {% endfor %}
                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"6\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('{{ option_row }}');\" data-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values{{ option_row }}\" style=\"display: none;\">


                            {% if option_values[product_option.option_id] %}
                              {% for option_value in option_values[product_option.option_id] %}


                                <option value=\"{{ option_value.option_value_id }}\">{{ option_value.name }}</option>


                              {% endfor %}
                            {% endif %}


                          </select>
                        {% endif %} </div>
                      {% set option_row = option_row + 1 %}
                    {% endfor %} </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_recurring }}</td>
                      <td class=\"text-left\">{{ entry_customer_group }}</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    {% set recurring_row = 0 %}
                    {% for product_recurring in product_recurrings %}
                      <tr id=\"recurring-row{{ recurring_row }}\">
                        <td class=\"text-left\"><select name=\"product_recurring[{{ recurring_row }}][recurring_id]\" class=\"form-control\">


                            {% for recurring in recurrings %}
                              {% if recurring.recurring_id == product_recurring.recurring_id %}


                                <option value=\"{{ recurring.recurring_id }}\" selected=\"selected\">{{ recurring.name }}</option>


                              {% else %}


                                <option value=\"{{ recurring.recurring_id }}\">{{ recurring.name }}</option>


                              {% endif %}
                            {% endfor %}


                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[{{ recurring_row }}][customer_group_id]\" class=\"form-control\">


                            {% for customer_group in customer_groups %}
                              {% if customer_group.customer_group_id == product_recurring.customer_group_id %}


                                <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>


                              {% else %}


                                <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>


                              {% endif %}
                            {% endfor %}


                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row{{ recurring_row }}').remove()\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set recurring_row = recurring_row + 1 %}
                    {% endfor %}
                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"{{ button_recurring_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_customer_group }}</td>
                      <td class=\"text-right\">{{ entry_quantity }}</td>
                      <td class=\"text-right\">{{ entry_priority }}</td>
                      <td class=\"text-right\">{{ entry_price }}</td>
                      <td class=\"text-left\">{{ entry_date_start }}</td>
                      <td class=\"text-left\">{{ entry_date_end }}</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    {% set discount_row = 0 %}
                    {% for product_discount in product_discounts %}
                      <tr id=\"discount-row{{ discount_row }}\">
                        <td class=\"text-left\"><select name=\"product_discount[{{ discount_row }}][customer_group_id]\" class=\"form-control\">
                            {% for customer_group in customer_groups %}
                              {% if customer_group.customer_group_id == product_discount.customer_group_id %}
                                <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>
                              {% else %}
                                <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>
                              {% endif %}
                            {% endfor %}
                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][quantity]\" value=\"{{ product_discount.quantity }}\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][priority]\" value=\"{{ product_discount.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][price]\" value=\"{{ product_discount.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[{{ discount_row }}][date_start]\" value=\"{{ product_discount.date_start }}\" placeholder=\"{{ entry_date_start }}\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[{{ discount_row }}][date_end]\" value=\"{{ product_discount.date_end }}\" placeholder=\"{{ entry_date_end }}\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row{{ discount_row }}').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set discount_row = discount_row + 1 %}
                    {% endfor %}
                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"{{ button_discount_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_customer_group }}</td>
                      <td class=\"text-right\">{{ entry_priority }}</td>
                      <td class=\"text-right\">{{ entry_price }}</td>
                      <td class=\"text-left\">{{ entry_date_start }}</td>
                      <td class=\"text-left\">{{ entry_date_end }}</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    {% set special_row = 0 %}
                    {% for product_special in product_specials %}
                      <tr id=\"special-row{{ special_row }}\">
                        <td class=\"text-left\"><select name=\"product_special[{{ special_row }}][customer_group_id]\" class=\"form-control\">


                            {% for customer_group in customer_groups %}
                              {% if customer_group.customer_group_id == product_special.customer_group_id %}


                                <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>


                              {% else %}


                                <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>


                              {% endif %}
                            {% endfor %}


                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[{{ special_row }}][priority]\" value=\"{{ product_special.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[{{ special_row }}][price]\" value=\"{{ product_special.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[{{ special_row }}][date_start]\" value=\"{{ product_special.date_start }}\" placeholder=\"{{ entry_date_start }}\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[{{ special_row }}][date_end]\" value=\"{{ product_special.date_end }}\" placeholder=\"{{ entry_date_end }}\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row{{ special_row }}').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set special_row = special_row + 1 %}
                    {% endfor %}
                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"{{ button_special_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

                    <!-- YouTube Product Video -- Start -->
                    <div class=\"tab-pane\" id=\"tab_youtube_product_video\">
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-youtube_product_video\">{{ youtube_product_video_link_text }}</label>
                        <div class=\"col-sm-10\">
                          <input name=\"youtube_product_video\" value=\"{{ youtube_product_video }}\" placeholder=\"{{ youtube_product_video_link_text }}\" id=\"input-youtube_product_video\" class=\"form-control\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">{{ youtube_product_video_button_preview }}</label>
                        <div class=\"col-sm-10\">
                          <span class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#youtube_product_video_modal\"><i class=\"fa fa-play\"> {{ youtube_product_video_modal_title }}</i></span>
                        </div>
                      </div>
                    </div>
                    <!-- YouTube Product Video -- End -->
                
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_image }}</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ thumb }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\"/></a> <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_additional_image }}</td>
                      <td class=\"text-right\">{{ entry_sort_order }}</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    {% set image_row = 0 %}
                    {% for product_image in product_images %}
                      <tr id=\"image-row{{ image_row }}\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image{{ image_row }}\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ product_image.thumb }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\"/></a> <input type=\"hidden\" name=\"product_image[{{ image_row }}][image]\" value=\"{{ product_image.image }}\" id=\"input-image{{ image_row }}\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[{{ image_row }}][sort_order]\" value=\"{{ product_image.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row{{ image_row }}').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set image_row = image_row + 1 %}
                    {% endfor %}
                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"{{ button_image_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"{{ help_points }}\">{{ entry_points }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"{{ points }}\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_customer_group }}</td>
                      <td class=\"text-right\">{{ entry_reward }}</td>
                    </tr>
                  </thead>
                  <tbody>

                    {% for customer_group in customer_groups %}
                      <tr>
                        <td class=\"text-left\">{{ customer_group.name }}</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[{{ customer_group.customer_group_id }}][points]\" value=\"{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}\" class=\"form-control\"/></td>
                      </tr>
                    {% endfor %}
                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ text_keyword }}</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_store }}</td>
                      <td class=\"text-left\">{{ entry_keyword }}</td>
                    </tr>
                  </thead>
                  <tbody>
                  {% for store in stores %}
                    <tr>
                      <td class=\"text-left\">{{ store.name }}</td>
                      <td class=\"text-left\">
                        {% for language in languages %}
                          <div class=\"input-group\">
                          <span class=\"input-group-addon\">
                            <img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\"/>
                          </span>
                          <input type=\"text\" name=\"product_seo_url[{{ store.store_id }}][{{ language.language_id }}]\"
                                 value=\"{{ product_seo_url[store.store_id][language.language_id] }}\"
                                 placeholder=\"{{ entry_keyword }}\" class=\"form-control\"/>
                          </div>
                          <div class=\"text-danger\">{{ error_keyword[store.store_id][language.language_id] }}</div>
                        {% endfor %}
                      </td>
                    </tr>
                  {% endfor %}
                  </tbody>

                  {#                  <tbody>#}
{#                    {% for store in stores %}#}
{#                      <tr>#}
{#                        <td class=\"text-left\">{{ store.name }}</td>#}
{#                        <td class=\"text-left\">{% for language in languages %}#}
{#                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\"/></span> <input type=\"text\" name=\"product_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}\" placeholder=\"{{ entry_keyword }}\" class=\"form-control\" id=\"input-seo-url-{{ store.store_id }}-{{ language.language_id }}\" data-seo-url-was=\"{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}\"/>{% if product_id %}<span class=\"input-group-btn\"><button id=\"generateUrlOnEdit-{{ store.store_id }}-{{ language.language_id }}\" class=\"generateUrlOnEdit btn btn-success\" data-store-id=\"{{ store.store_id }}\" data-language-id=\"{{ language.language_id }}\" data-source-language-id=\"{{ module_seo_url_generator_language[language.language_id] }}\"><i class=\"fa fa-refresh\"></i> {{ sug_button_generate }}</button></span>{% endif %}#}
{#                            </div>#}
{#                            {% if error_keyword[store.store_id][language.language_id] %}#}
{#                              <div class=\"text-danger\">{{ error_keyword[store.store_id][language.language_id] }}</div>#}
{#                            {% endif %}#}
{#                          {% endfor %}</td>#}
{#                      </tr>#}
{#                    {% endfor %}#}
{#                  </tbody>#}

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">{{ entry_store }}</td>
                      <td class=\"text-left\">{{ entry_layout }}</td>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td class=\"text-left\">{{ store.name }}</td>
                        <td class=\"text-left\"><select name=\"product_layout[{{ store.store_id }}]\" class=\"form-control\">
                            <option value=\"\"></option>


                            {% for layout in layouts %}
                              {% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %}


                                <option value=\"{{ layout.layout_id }}\" selected=\"selected\">{{ layout.name }}</option>


                              {% else %}


                                <option value=\"{{ layout.layout_id }}\">{{ layout.name }}</option>


                              {% endif %}
                            {% endfor %}


                          </select></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '{{ text_none }}'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

    // Buywith
  \$('input[name=\\'buywith\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'buywith\\']').val('');

\t\t  \$('#product-buywith' + item['value']).remove();

\t\t  \$('#product-buywith').append('<div id=\"product-buywith' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_buywith[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-buywith').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var attribute_row = {{ attribute_row }};

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"{{ entry_attribute }}\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    {% for language in languages %}
\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text }}\" class=\"form-control\"></textarea></div>';
    {% endfor %}
\t  html += '  </td>';
    html += '  <td class=\"text_right\">';
    html +=  '<select name=\"product_attribute[{{ attribute_row }}][attribute_top]\"  class=\"form-control\">';
    {% if product_attribute.top %}
    html +=   ' <option value=\"0\">{{ text_no }}</option>';
    html +=    ' <option value=\"1\" selected=\"selected\" >{{ text_yes }}</option>';
    {% else %}
    html +=  '  <option value=\"0\" selected=\"selected\">{{ text_no }}</option>';
    html +=   ' <option value=\"1\" >{{ text_yes }}</option>';
    {% endif %}
    html += '</select>';
    html += '</td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = {{ option_row }};

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">{{ entry_required }}</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">{{ text_yes }}</option>';
\t\t  html += '\t      <option value=\"0\">{{ text_no }}</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">{{ entry_option_value }}</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value }}\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">{{ entry_option_value }}</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"{{ entry_option_value }}\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">{{ entry_option_value }}</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value }}\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">{{ entry_option_value }}</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">{{ entry_option_value }}</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value }}\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">{{ entry_option_value }}</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">{{ entry_option_value }}</td>';
\t\t\t  html += '        <td class=\"text-right\">{{ entry_quantity }}</td>';
\t\t\t  html += '        <td class=\"text-left\">{{ entry_subtract }}</td>';
\t\t\t  html += '        <td class=\"text-right\">{{ entry_price }}</td>';
\t\t\t  html += '        <td class=\"text-right\">{{ entry_option_points }}</td>';
\t\t\t  html += '        <td class=\"text-right\">{{ entry_weight }}</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '{{ datepicker }}',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '{{ datepicker }}',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '{{ datepicker }}',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = {{ option_value_row }};

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">{{ text_yes }}</option>';
\t  html += '    <option value=\"0\">{{ text_no }}</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"{{ entry_price }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"{{ entry_points }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"{{ entry_weight }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = {{ discount_row }};

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    {% for customer_group in customer_groups %}
\t  html += '    <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
    {% endfor %}
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"{{ entry_price }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"{{ entry_date_start }}\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"{{ entry_date_end }}\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = {{ special_row }};

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    {% for customer_group in customer_groups %}
\t  html += '      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
    {% endfor %}
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"{{ entry_price }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"{{ entry_date_start }}\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"{{ entry_date_end }}\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '{{ datepicker }}',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = {{ image_row }};

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ placeholder }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = {{ recurring_row }};

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    {% for recurring in recurrings %}
\t  html += '      <option value=\"{{ recurring.recurring_id }}\">{{ recurring.name }}</option>';
    {% endfor %}
\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    {% for customer_group in customer_groups %}
\t  html += '      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>';
    {% endfor %}
\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '{{ datepicker }}',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '{{ datepicker }}',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '{{ datepicker }}',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>

<!-- SEO URL Generator . Begin
============================================================================ -->
{% if (module_seo_url_generator_status) %}
<script type=\"text/javascript\">
  \$('#tab-seo .text-left .input-group').css('margin-bottom', '10px');

  \$.each(\$('#tab-seo .text-left'), function () {      
    \$(this).children('.input-group:last').css('margin-bottom', 'initial');
  });

  {% if (not product_id) %}
    
    {% for language in languages %}
    \$('#input-name' + {{ module_seo_url_generator_language[language.language_id] }}).change(function(){ generateUrlOnAdd(); });
    {% endfor %}
    \$('#input-model').change(function(){ generateUrlOnAdd(); });
    \$('#input-sku').change(function(){ generateUrlOnAdd(); });
    \$('#input-manufacturer').change(function(){ generateUrlOnAdd(); });

    function generateUrlOnAdd() {
      let a_lang_data = {
        name: {}
      };
      
      {% for language in languages %}
      a_lang_data['name'][{{ language.language_id }}] = \$('#input-name' + {{ language.language_id }}).val();
      {% endfor %}
            
      data = {
        a_lang_data     : a_lang_data,
        model           : \$('#input-model').val(),
        sku             : \$('#input-sku').val(),
        manufacturer_id : \$('input[name=\"manufacturer_id\"]').val(),
        primary_key     : 'product_id',
        essence         : 'product',
        essence_id      : ''
      };

      // is different from edit
      \$.ajax({
        url: 'index.php?route=extension/module/seo_url_generator/generateSeoUrlByAjax4All&user_token={{ user_token }}',
        dataType: 'json',
        data: data,
        method : 'POST',
        beforeSend: function() {},
        success: function(response, textStatus, jqXHR) {
          // success ajax query
          if(response.result != 'error') {
            setTimeout(function() {      
              \$.each(response.result, function (store_id, store) {
                \$.each(store, function (language_id, value) {
                  if ('' !== value) {
                    \$('input[name=\"product_seo_url[' + store_id +'][' + language_id + ']\"]').val(value);
                  }
                });
              });
            }, 100);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Error ajax query
          console.log('AJAX query Error: ' + textStatus);
        },
        complete: function() {},
      });
    }

  {% else %}   

    var storeId = false;      
    var languageId = false;
    
    // enque redirects .generateUrlOnEdit firstly
    var url_redirects_rows = {};
    
    {% for store in stores %}
    url_redirects_rows[{{ store.store_id }}] = {};
    
    {% for language in languages %}
    url_redirects_rows[{{ store.store_id }}][{{ language.language_id }}] = 0;
    
    {% endfor %}
    {% endfor %}
    
    {% for store in stores %}
    {% for language in languages %}
   
      var html = '';
      html += '<div class=\"form-group\">';
      html += '<label class=\"col-sm-2 control-label\">{{ sug_text_redirects }}</label>';
      html += '<!-- product-redirects . begin -->';
      html += '<div class=\"col-sm-10\">';
      html += '<div class=\"alert alert-info alert-sm\">{{ sug_help_redirects }}</div>';
      html += '<div id=\"seo_url_generator_redirects-{{ store.store_id }}-{{ language.language_id }}\">';
      
      {% for key, redirect in redirects[store['store_id']][language['language_id']] %}
      {% if redirects[store['store_id']][language['language_id']][key] %}
      html += '<div id=\"redirect-row-{{ store.store_id }}-{{ language.language_id }}-' + url_redirects_rows[{{ store.store_id }}][{{ language.language_id }}] + '\" class=\"row redirect-row\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[{{ store.store_id }}][{{ language.language_id }}][{{ key }}]\" value=\"{{ redirects[store['store_id']][language['language_id']][key] }}\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px); {% if error_seo_url_generator_redirects[store['store_id']][language['language_id']][key] is defined %}border-color: red;{% endif %}\"/><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"{{ sug_button_delete_redirect }}\"></i></div></div>';
      url_redirects_rows[{{ store.store_id }}][{{ language.language_id }}]++;
      {% endif %}
      {% endfor %}\t
      html += '</div>';
      html += '<!-- /product-redirects . end -->';
      html += '<button id=\"addNewRedirect-{{ store.store_id }}-{{ language.language_id }}\" class=\"addNewRedirect btn btn-warning btn-sm\" data-store-id=\"{{ store.store_id }}\" data-language-id=\"{{ language.language_id }}\" data-source-language-id=\"{{ module_seo_url_generator_language[language.language_id] }}\"><i class=\"fa fa-plus\"></i> {{ sug_button_add_redirect }}</button>';
      html += '</div>';
      html += '</div>';
      
      <!-- Front works properly mark -->
      html += '<input type=\"hidden\" name=\"seo_url_generator_front_works\" />';
      
      //console.log('#generateUrlOnEdit-' + {{ store.store_id }} + '-' + {{ language.language_id }});
      //console.debug(html);
      
      \$('#generateUrlOnEdit-' + {{ store.store_id }} + '-' + {{ language.language_id }}).parent().parent().after(html);
            
    {% endfor %}
    {% endfor %}
    
    \$('.addNewRedirect').click(function(e) {
      e.preventDefault();
      
      var store_id = \$(this).data('store-id');
      var language_id =  \$(this).data('language-id');
      
      console.log('\$(this).data(\"store-id\") : ' + \$(this).data('store-id'));
      console.log('\$(this).data(\"language-id\") : ' + \$(this).data('language-id'));
      console.log('#seo_url_generator_redirects-\" + store_id + \"-\" + language_id : #seo_url_generator_redirects-' + store_id + '-' + language_id);

      \$('#seo_url_generator_redirects-' + store_id + '-' + language_id).append('<div id=\"redirect-row-' + '-' + store_id + '-' + language_id + '-' + url_redirects_rows[store_id][language_id] + '\" class=\"row redirect-row recent\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[' + store_id + '][' + language_id + '][]\" value=\"\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px);\" /><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"{{ sug_button_delete_redirect }}\"></i></div></div>');

      url_redirects_rows[store_id][language_id]++;
    });

    \$('body').on('click', '.deleteRedirect', function(e) {
      e.preventDefault();
      \$('#sug-btn-confirm').attr('data-target', '#' + \$(this).parent().parent('.redirect-row').attr('id'));\t\t
      \$('#sug-confirm').modal('toggle');    
    });

    \$('body').on('click', '#sug-btn-confirm', function(e) {
      e.preventDefault();\t\t
      \$(\$(this).attr('data-target')).remove();\t\t
      \$('#sug-confirm').modal('toggle');
    });
    
    
    // SEO URL Generation by button click
  
    thisButton = false;
    
    \$('.generateUrlOnEdit').click(function(e) {
      e.preventDefault();
      
      storeId = \$(this).data('store-id');      
      languageId = \$(this).data('language-id');
      sourceLanguageId = \$(this).data('source-language-id'); 
      thisButton = \$(this);
            
      data = {
        store_id        : storeId,
        language_id     : languageId,
        name            : \$('#input-name' + sourceLanguageId).val(),
        model           : \$('#input-model').val(),
        sku             : \$('#input-sku').val(),
        manufacturer_id : \$('input[name=\"manufacturer_id\"]').val(),
        primary_key     : 'product_id',
        essence         : 'product',
        essence_id      : {{ product_id }}
      };     

      getSeoUrl(data);
    });
    
    // is different from add
    function getSeoUrl(data) {
      \$.ajax({
        url: 'index.php?route=extension/module/seo_url_generator/generateSeoUrlByAjax4One&user_token={{ user_token }}',
        dataType: 'json',
        data: data,
        method : 'POST',
        beforeSend: function() {
          thisButton.css('opacity', '0.5');
        },
        success: function(response, textStatus, jqXHR) {
          // success ajax query
          if('' != response.result && 'error' != response.result) {            
            console.log('\$(\"#input-seo-url-\" + storeId + \"-\" + languageId).val() : ' + \$('#input-seo-url-' + storeId + '-' + languageId).val());
            console.log('response.result : ' + response.result);
            
            if ('' != \$('#input-seo-url-' + storeId + '-' + languageId).val().trim() && \$('#input-seo-url-' + storeId + '-' + languageId).val() != response.result) {    
              \$('#seo_url_generator_redirects-' + storeId + '-' + languageId).append('<div id=\"redirect-row-' + '-' + storeId + '-' + languageId + '-' + url_redirects_rows[storeId][languageId] + '\" class=\"row redirect-row recent\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[' + storeId + '][' + languageId + '][]\" value=\"' + \$('#input-seo-url-' + storeId + '-' + languageId).data('seo-url-was') + '\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px);\" /><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"{{ sug_button_delete_redirect }}\"></i></div></div>');

              url_redirects_rows[storeId][languageId]++;
            }
            
            setTimeout(function() {
              \$('#input-seo-url-' + storeId + '-' + languageId).val(response.result);
            }, 100);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Error ajax query
          console.log('AJAX query Error: ' + textStatus);
        },
        complete: function() {
          thisButton.css('opacity', '1');
        },
      });
    }

  {% endif %}  

  // Prevent incorrect SEO URL!
\tvar inputBorderColorInitial = false;
\t
\t\$('body').on('change', '.redirect-row input', function(e) {
\t\tif (!inputBorderColorInitial) {
\t\t\tinputBorderColorInitial = \$(this).css('border-color');
\t\t}
\t\t
\t\t// reset previous errors
\t\t\$(this).css('border-color', inputBorderColorInitial);
\t\t
\t\t\$('#sug-error-body').html('');
\t\t
\t\tlet hasError = false;
\t\t
\t\t// Check inputed data\t\t
\t\tif (\$(this).val().trim() == '') {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>{{ sug_redirects_error_empty }}</b></p>');
\t\t}

\t\tif (\$(this).val().includes('/')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>{{ sug_redirects_error_slash }}</b></p>');
\t\t}
\t\t
\t\tif (\$(this).val().includes('http')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>{{ sug_redirects_error_protocol }}</b></p>');
\t\t}
\t\t
\t\tif (\$(this).val().includes('.html')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-warning\"><b>{{ sug_redirects_error_html }}</b></p>');
\t\t}
\t\t
\t\tif (hasError) {
\t\t\t\$(this).css('border-color', 'red');
\t\t\t
\t\t\t\$('#sug-error-body').append('<p class=\"alert alert-info\"><i class=\"fa fa-info-circle\" style=\"font-size: 1.5em;\">&nbsp;</i>  {{ sug_redirects_error_common }}</p>');
\t\t\t
\t\t\t\$('#sug-error').modal('toggle');
\t\t}
\t\t
    console.log('hasError : ' + hasError);
    console.log(\$(this).val());
\t\t
  });
\t
</script>

<!-- Confirm Modal -->
<div class=\"modal fade\" id=\"sug-confirm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sug-confirm\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title text-warning\" id=\"sug-confirm-title\"><i class=\"fa fa-exclamation-triangle\">&nbsp;</i> <b>{{ sug_confirm_title }}</b></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t{{ sug_confirm_body }}
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-danger sug-btn-confirm\" id=\"sug-btn-confirm\" data-target=\"\"><i class=\"fa fa-trash\">&nbsp;</i> {{ sug_confirm_btn_yes }}</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ sug_confirm_btn_no }}</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Error Modal -->
<div class=\"modal fade\" id=\"sug-error\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sug-error\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title text-danger\" id=\"sug-error-title\"><i class=\"fa fa-exclamation-triangle\">&nbsp;</i> <b>{{ sug_redirects_error_title }}</b></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"sug-error-body\"></div>
\t\t</div>
\t</div>
</div>
{% endif %}
<!-- /SEO URL Generator . End
============================================================================ -->


    <!-- YouTube Product Video -- Start -->
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
    <div class=\"modal fade\" tabindex=\"-1\" id=\"youtube_product_video_modal\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h3 class=\"modal-title\">{{ youtube_product_video_modal_title }}</h3>
                </div>
                <div class=\"modal-body\">
                    <div id=\"youtube_product_video_container\">
                        <iframe src=\"\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                    </div>
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
            \$('#youtube_product_video_modal').on('hidden.bs.modal', function () {
                var iframe = document.querySelector('#youtube_product_video_container iframe').contentWindow;
                iframe.postMessage('{\"event\":\"command\",\"func\":\"pauseVideo\",\"args\":\"\"}', '*');
            });
            var setSrc = function(){
                var val = \$('#input-youtube_product_video').val();
                var code = '';
                if (val.split('?').length > 1) {
                    val.split('?')[1].split('&').forEach(function(item){
                        if ( item.split('=').length > 1 && item.split('=')[0] == 'v' ) {
                            code = item.split('=')[1];
                        }
                    });
                }
                var link = 'https://www.youtube.com/embed/'+code+'?enablejsapi=1'
                \$('#youtube_product_video_container iframe').attr('src', link);
            }
            setSrc();
            \$('#input-youtube_product_video').on('change', setSrc);
        });})(jQuery);
    </script>
    <!-- YouTube Product Video -- End -->
                
{{ footer }} 
", "catalog/product_form.twig", "");
    }
}
