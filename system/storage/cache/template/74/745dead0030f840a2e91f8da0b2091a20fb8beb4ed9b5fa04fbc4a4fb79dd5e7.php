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

/* catalog/information_form.twig */
class __TwigTemplate_39aba6d4ea66f1e0c2c086d5152d3353431c108cbd6d784aa3874f2d0184d1dc extends \Twig\Template
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
        <button type=\"submit\" form=\"form-information\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 37);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 37);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 37);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 37);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 37);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"information_description[";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "][title]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["information_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["information_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null), "title", [], "any", false, false, false, 45)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" class=\"form-control\" />
                      ";
            // line 46
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46)] ?? null) : null)) {
                // line 47
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_title"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 48
            echo " </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "locale", [], "any", false, false, false, 53);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["information_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["information_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null), "description", [], "any", false, false, false, 53)) : (""));
            echo "</textarea>
                      ";
            // line 54
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) {
                // line 55
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 56
            echo " </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"information_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["information_description"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["information_description"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null), "meta_title", [], "any", false, false, false, 61)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" class=\"form-control\" />
                      ";
            // line 62
            if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_meta_title"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null)) {
                // line 63
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_meta_title"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 64
            echo " </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "][meta_description]\" rows=\"5\"  placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "\" class=\"form-control\">";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["information_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["information_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null), "meta_description", [], "any", false, false, false, 69)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "\" class=\"form-control\">";
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["information_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["information_description"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 75)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 83
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 86
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 87
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 87), ($context["information_store"] ?? null))) {
                // line 88
                echo "                        <input type=\"checkbox\" name=\"information_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 88);
                echo "\" checked=\"checked\" />
                        ";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 89);
                echo "
                        ";
            } else {
                // line 91
                echo "                        <input type=\"checkbox\" name=\"information_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 91);
                echo "\" />
                        ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 92);
                echo "
                        ";
            }
            // line 93
            echo "</label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-bottom\"><span data-toggle=\"tooltip\" title=\"";
        // line 99
        echo ($context["help_bottom"] ?? null);
        echo "\">";
        echo ($context["entry_bottom"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>";
        // line 102
        if (($context["bottom"] ?? null)) {
            // line 103
            echo "                      <input type=\"checkbox\" name=\"bottom\" value=\"1\" checked=\"checked\" id=\"input-bottom\" />
                      ";
        } else {
            // line 105
            echo "                      <input type=\"checkbox\" name=\"bottom\" value=\"1\" id=\"input-bottom\" />
                      ";
        }
        // line 107
        echo "                      &nbsp;</label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 112
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 115
        if (($context["status"] ?? null)) {
            // line 116
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 117
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 119
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 120
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 122
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 126
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 128
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 133
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 138
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 139
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 144
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 145);
            echo "</td>
                    <td class=\"text-left\">";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 147
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 147);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 147);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 147);
                echo "\" /></span>
                        <input type=\"text\" name=\"information_seo_url[";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                echo "]\" value=\"";
                if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["information_seo_url"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["information_seo_url"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148)] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" id=\"input-seo-url-";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                echo "\" data-seo-url-was=\"";
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["information_seo_url"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148)] ?? null) : null)) {
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["information_seo_url"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148)] ?? null) : null);
                }
                echo "\"/>";
                if (($context["information_id"] ?? null)) {
                    echo "<span class=\"input-group-btn\"><button id=\"generateUrlOnEdit-";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                    echo "\" class=\"generateUrlOnEdit btn btn-success\" data-store-id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 148);
                    echo "\" data-language-id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                    echo "\" data-source-language-id=\"";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["module_seo_url_generator_language"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148)] ?? null) : null);
                    echo "\"><i class=\"fa fa-refresh\"></i> ";
                    echo ($context["sug_button_generate"] ?? null);
                    echo "</button></span>";
                }
                // line 149
                echo "                      </div>
                      ";
                // line 150
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["error_keyword"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 150)] ?? null) : null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 150)] ?? null) : null)) {
                    // line 151
                    echo "                      <div class=\"text-danger\">";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_keyword"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 151)] ?? null) : null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 151)] ?? null) : null);
                    echo "</div>
                      ";
                }
                // line 152
                echo " 
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 165
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 166
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 172
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 173
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 173);
            echo "</td>
                    <td class=\"text-left\"><select name=\"information_layout[";
            // line 174
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 174);
            echo "]\" class=\"form-control\">
                        <option value=\"\"></option>
                        ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 177
                echo "                        ";
                if (((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["information_layout"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 177)] ?? null) : null) && ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["information_layout"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 177)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 177)))) {
                    // line 178
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 178);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 178);
                    echo "</option>
                        ";
                } else {
                    // line 180
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 180);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 180);
                    echo "</option>
                        ";
                }
                // line 182
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                      </select></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>

<!-- SEO URL Generator . Begin
============================================================================ -->
";
        // line 211
        if (($context["module_seo_url_generator_status"] ?? null)) {
            // line 212
            echo "<script type=\"text/javascript\">
  \$('#tab-seo .text-left .input-group').css('margin-bottom', '10px');

  \$.each(\$('#tab-seo .text-left'), function () {      
    \$(this).children('.input-group:last').css('margin-bottom', 'initial');
  });

  ";
            // line 219
            if ( !($context["information_id"] ?? null)) {
                // line 220
                echo "    
    ";
                // line 222
                echo "    ";
                // line 224
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 225
                    echo "    \$('#input-title' + ";
                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["module_seo_url_generator_language"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 225)] ?? null) : null);
                    echo ").change(function(){ generateUrlOnAdd(); });
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "
    function generateUrlOnAdd() {
      let a_lang_data = {
        name: {}
      };
      
      ";
                // line 233
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 234
                    echo "      a_lang_data['name'][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 234);
                    echo "] = \$('#input-title' + ";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["module_seo_url_generator_language"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 234)] ?? null) : null);
                    echo ").val();
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 236
                echo "            
      data = {
        a_lang_data     : a_lang_data,
        primary_key     : 'information_id',
        essence         : 'information',
        essence_id      : ''
      };

      // is different from edit
      \$.ajax({
        url: 'index.php?route=extension/module/seo_url_generator/generateSeoUrlByAjax4All&user_token=";
                // line 246
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
                    \$('input[name=\"information_seo_url[' + store_id +'][' + language_id + ']\"]').val(value);
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
                // line 273
                echo "   

    var storeId = false;      
    var languageId = false;
    
    // enque redirects .generateUrlOnEdit firstly
    var url_redirects_rows = {};
    
    ";
                // line 281
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 282
                    echo "    url_redirects_rows[";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 282);
                    echo "] = {};
    
    ";
                    // line 284
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 285
                        echo "    url_redirects_rows[";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 285);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 285);
                        echo "] = 0;
    
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 288
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 289
                echo "    
    ";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 291
                    echo "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 292
                        echo "   
      var html = '';
      html += '<div class=\"form-group\">';
      html += '<label class=\"col-sm-2 control-label\">";
                        // line 295
                        echo ($context["sug_text_redirects"] ?? null);
                        echo "</label>';
      html += '<!-- information-redirects . begin -->';
      html += '<div class=\"col-sm-10\">';
      html += '<div class=\"alert alert-info alert-sm\">";
                        // line 298
                        echo ($context["sug_help_redirects"] ?? null);
                        echo "</div>';
      html += '<div id=\"seo_url_generator_redirects-";
                        // line 299
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 299);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 299);
                        echo "\">';
      
      ";
                        // line 301
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["redirects"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[(($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["store"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[(($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["language"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["language_id"] ?? null) : null)] ?? null) : null));
                        foreach ($context['_seq'] as $context["key"] => $context["redirect"]) {
                            // line 302
                            echo "      ";
                            if ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["redirects"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[(($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["store"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[(($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["language"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[$context["key"]] ?? null) : null)) {
                                // line 303
                                echo "      html += '<div id=\"redirect-row-";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 303);
                                echo "-";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 303);
                                echo "-' + url_redirects_rows[";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 303);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 303);
                                echo "] + '\" class=\"row redirect-row\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 303);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 303);
                                echo "][";
                                echo $context["key"];
                                echo "]\" value=\"";
                                echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["redirects"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[(($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["store"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[(($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["language"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[$context["key"]] ?? null) : null);
                                echo "\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px); ";
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_seo_url_generator_redirects"] ?? null), (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["store"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["store_id"] ?? null) : null), [], "array", false, true, false, 303), (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["language"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["language_id"] ?? null) : null), [], "array", false, true, false, 303), $context["key"], [], "array", true, true, false, 303)) {
                                    echo "border-color: red;";
                                }
                                echo "\"/><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"";
                                echo ($context["sug_button_delete_redirect"] ?? null);
                                echo "\"></i></div></div>';
      url_redirects_rows[";
                                // line 304
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 304);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 304);
                                echo "]++;
      ";
                            }
                            // line 306
                            echo "      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['redirect'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\t
      html += '</div>';
      html += '<!-- /information-redirects . end -->';
      html += '<button id=\"addNewRedirect-";
                        // line 309
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 309);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 309);
                        echo "\" class=\"addNewRedirect btn btn-warning btn-sm\" data-store-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 309);
                        echo "\" data-language-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 309);
                        echo "\" data-source-language-id=\"";
                        echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["module_seo_url_generator_language"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 309)] ?? null) : null);
                        echo "\"><i class=\"fa fa-plus\"></i> ";
                        echo ($context["sug_button_add_redirect"] ?? null);
                        echo "</button>';
      html += '</div>';
      html += '</div>';
      
      <!-- Front works properly mark -->
      html += '<input type=\"hidden\" name=\"seo_url_generator_front_works\" />';
      
      //console.log('#generateUrlOnEdit-' + ";
                        // line 316
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 316);
                        echo " + '-' + ";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 316);
                        echo ");
      //console.debug(html);
      
      \$('#generateUrlOnEdit-' + ";
                        // line 319
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 319);
                        echo " + '-' + ";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 319);
                        echo ").parent().parent().after(html);
            
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 322
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "    
    \$('.addNewRedirect').click(function(e) {
      e.preventDefault();
      
      var store_id = \$(this).data('store-id');
      var language_id =  \$(this).data('language-id');
      
      console.log('\$(this).data(\"store-id\") : ' + \$(this).data('store-id'));
      console.log('\$(this).data(\"language-id\") : ' + \$(this).data('language-id'));
      console.log('#seo_url_generator_redirects-\" + store_id + \"-\" + language_id : #seo_url_generator_redirects-' + store_id + '-' + language_id);

      \$('#seo_url_generator_redirects-' + store_id + '-' + language_id).append('<div id=\"redirect-row-' + '-' + store_id + '-' + language_id + '-' + url_redirects_rows[store_id][language_id] + '\" class=\"row redirect-row recent\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[' + store_id + '][' + language_id + '][]\" value=\"\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px);\" /><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"";
                // line 334
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
        name            : \$('#input-title' + sourceLanguageId).val(),
        primary_key     : 'information_id',
        essence         : 'information',
        essence_id      : ";
                // line 370
                echo ($context["information_id"] ?? null);
                echo "
      };     

      getSeoUrl(data);
    });
    
    // is different from add
    function getSeoUrl(data) {
      \$.ajax({
        url: 'index.php?route=extension/module/seo_url_generator/generateSeoUrlByAjax4One&user_token=";
                // line 379
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
                // line 393
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
            // line 413
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
            // line 433
            echo ($context["sug_redirects_error_empty"] ?? null);
            echo "</b></p>');
\t\t}

\t\tif (\$(this).val().includes('/')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>";
            // line 438
            echo ($context["sug_redirects_error_slash"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (\$(this).val().includes('http')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>";
            // line 443
            echo ($context["sug_redirects_error_protocol"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (\$(this).val().includes('.html')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-warning\"><b>";
            // line 448
            echo ($context["sug_redirects_error_html"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (hasError) {
\t\t\t\$(this).css('border-color', 'red');
\t\t\t
\t\t\t\$('#sug-error-body').append('<p class=\"alert alert-info\"><i class=\"fa fa-info-circle\" style=\"font-size: 1.5em;\">&nbsp;</i>  ";
            // line 454
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
            // line 472
            echo ($context["sug_confirm_title"] ?? null);
            echo "</b></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
            // line 475
            echo ($context["sug_confirm_body"] ?? null);
            echo "
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-danger sug-btn-confirm\" id=\"sug-btn-confirm\" data-target=\"\"><i class=\"fa fa-trash\">&nbsp;</i> ";
            // line 478
            echo ($context["sug_confirm_btn_yes"] ?? null);
            echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 479
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
            // line 491
            echo ($context["sug_redirects_error_title"] ?? null);
            echo "</b></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"sug-error-body\"></div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 498
        echo "<!-- /SEO URL Generator . End
============================================================================ -->

";
        // line 501
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/information_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1125 => 501,  1120 => 498,  1110 => 491,  1095 => 479,  1091 => 478,  1085 => 475,  1079 => 472,  1058 => 454,  1049 => 448,  1041 => 443,  1033 => 438,  1025 => 433,  1003 => 413,  979 => 393,  962 => 379,  950 => 370,  911 => 334,  898 => 323,  892 => 322,  881 => 319,  873 => 316,  853 => 309,  843 => 306,  836 => 304,  811 => 303,  808 => 302,  804 => 301,  797 => 299,  793 => 298,  787 => 295,  782 => 292,  777 => 291,  773 => 290,  770 => 289,  764 => 288,  752 => 285,  748 => 284,  742 => 282,  738 => 281,  728 => 273,  697 => 246,  685 => 236,  674 => 234,  670 => 233,  662 => 227,  653 => 225,  648 => 224,  646 => 222,  643 => 220,  641 => 219,  632 => 212,  630 => 211,  603 => 186,  595 => 183,  589 => 182,  581 => 180,  573 => 178,  570 => 177,  566 => 176,  561 => 174,  557 => 173,  554 => 172,  550 => 171,  542 => 166,  538 => 165,  527 => 156,  519 => 153,  512 => 152,  506 => 151,  504 => 150,  501 => 149,  467 => 148,  458 => 147,  454 => 146,  450 => 145,  447 => 144,  443 => 143,  436 => 139,  432 => 138,  424 => 133,  414 => 128,  409 => 126,  403 => 122,  398 => 120,  393 => 119,  388 => 117,  383 => 116,  381 => 115,  375 => 112,  368 => 107,  364 => 105,  360 => 103,  358 => 102,  350 => 99,  344 => 95,  336 => 93,  331 => 92,  326 => 91,  321 => 89,  316 => 88,  314 => 87,  311 => 86,  307 => 85,  302 => 83,  296 => 79,  279 => 75,  272 => 73,  259 => 69,  252 => 67,  247 => 64,  241 => 63,  239 => 62,  229 => 61,  222 => 59,  217 => 56,  211 => 55,  209 => 54,  197 => 53,  190 => 51,  185 => 48,  179 => 47,  177 => 46,  167 => 45,  160 => 43,  154 => 41,  150 => 40,  147 => 39,  130 => 37,  126 => 36,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-information\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">{% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_form }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">{{ tab_general }}</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">{{ tab_data }}</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">{{ tab_seo }}</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">{{ tab_design }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                {% for language in languages %}
                <li><a href=\"#language{{ language.language_id }}\" data-toggle=\"tab\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /> {{ language.name }}</a></li>
                {% endfor %}
              </ul>
              <div class=\"tab-content\">{% for language in languages %}
                <div class=\"tab-pane\" id=\"language{{ language.language_id }}\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title{{ language.language_id }}\">{{ entry_title }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"information_description[{{ language.language_id }}][title]\" value=\"{{ information_description[language.language_id] ? information_description[language.language_id].title }}\" placeholder=\"{{ entry_title }}\" id=\"input-title{{ language.language_id }}\" class=\"form-control\" />
                      {% if error_title[language.language_id] %}
                      <div class=\"text-danger\">{{ error_title[language.language_id] }}</div>
                      {% endif %} </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description{{ language.language_id }}\">{{ entry_description }}</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description{{ language.language_id }}\" data-toggle=\"summernote\" data-lang=\"{{ language.locale }}\" class=\"form-control\">{{ information_description[language.language_id] ? information_description[language.language_id].description }}</textarea>
                      {% if error_description[language.language_id] %}
                      <div class=\"text-danger\">{{ error_description[language.language_id] }}</div>
                      {% endif %} </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title{{ language.language_id }}\">{{ entry_meta_title }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"information_description[{{ language.language_id }}][meta_title]\" value=\"{{ information_description[language.language_id] ? information_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title{{ language.language_id }}\" class=\"form-control\" />
                      {% if error_meta_title[language.language_id] %}
                      <div class=\"text-danger\">{{ error_meta_title[language.language_id] }}</div>
                      {% endif %} </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description{{ language.language_id }}\">{{ entry_meta_description }}</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[{{ language.language_id }}][meta_description]\" rows=\"5\"  placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description{{ language.language_id }}\" class=\"form-control\">{{ information_description[language.language_id] ? information_description[language.language_id].meta_description }}</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword{{ language.language_id }}\">{{ entry_meta_keyword }}</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword{{ language.language_id }}\" class=\"form-control\">{{ information_description[language.language_id] ? information_description[language.language_id].meta_keyword }}</textarea>
                    </div>
                  </div>
                </div>
                {% endfor %}</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for store in stores %}
                    <div class=\"checkbox\">
                      <label> {% if store.store_id in information_store %}
                        <input type=\"checkbox\" name=\"information_store[]\" value=\"{{ store.store_id }}\" checked=\"checked\" />
                        {{ store.name }}
                        {% else %}
                        <input type=\"checkbox\" name=\"information_store[]\" value=\"{{ store.store_id }}\" />
                        {{ store.name }}
                        {% endif %}</label>
                    </div>
                    {% endfor %}</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-bottom\"><span data-toggle=\"tooltip\" title=\"{{ help_bottom }}\">{{ entry_bottom }}</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>{% if bottom %}
                      <input type=\"checkbox\" name=\"bottom\" value=\"1\" checked=\"checked\" id=\"input-bottom\" />
                      {% else %}
                      <input type=\"checkbox\" name=\"bottom\" value=\"1\" id=\"input-bottom\" />
                      {% endif %}
                      &nbsp;</label>
                  </div>
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
                  <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
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
                    <td class=\"text-left\">{% for language in languages %}
                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /></span>
                        <input type=\"text\" name=\"information_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if information_seo_url[store.store_id][language.language_id] %}{{ information_seo_url[store.store_id][language.language_id] }}{% endif %}\" placeholder=\"{{ entry_keyword }}\" class=\"form-control\" id=\"input-seo-url-{{ store.store_id }}-{{ language.language_id }}\" data-seo-url-was=\"{% if information_seo_url[store.store_id][language.language_id] %}{{ information_seo_url[store.store_id][language.language_id] }}{% endif %}\"/>{% if information_id %}<span class=\"input-group-btn\"><button id=\"generateUrlOnEdit-{{ store.store_id }}-{{ language.language_id }}\" class=\"generateUrlOnEdit btn btn-success\" data-store-id=\"{{ store.store_id }}\" data-language-id=\"{{ language.language_id }}\" data-source-language-id=\"{{ module_seo_url_generator_language[language.language_id] }}\"><i class=\"fa fa-refresh\"></i> {{ sug_button_generate }}</button></span>{% endif %}
                      </div>
                      {% if error_keyword[store.store_id][language.language_id] %}
                      <div class=\"text-danger\">{{ error_keyword[store.store_id][language.language_id] }}</div>
                      {% endif %} 
                      {% endfor %}</td>
                  </tr>
                  {% endfor %}
                  </tbody>
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
                    <td class=\"text-left\"><select name=\"information_layout[{{ store.store_id }}]\" class=\"form-control\">
                        <option value=\"\"></option>
                        {% for layout in layouts %}
                        {% if information_layout[store.store_id] and information_layout[store.store_id] == layout.layout_id %}
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
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>

<!-- SEO URL Generator . Begin
============================================================================ -->
{% if (module_seo_url_generator_status) %}
<script type=\"text/javascript\">
  \$('#tab-seo .text-left .input-group').css('margin-bottom', '10px');

  \$.each(\$('#tab-seo .text-left'), function () {      
    \$(this).children('.input-group:last').css('margin-bottom', 'initial');
  });

  {% if (not information_id) %}
    
    {# Q?#}
    {# Надо разграничивать, если от одного языка или от разных. Вроде если даже от одного, все равно функция отрабатывает, если прописать 
ее 2 раза... #}
    {% for language in languages %}
    \$('#input-title' + {{ module_seo_url_generator_language[language.language_id] }}).change(function(){ generateUrlOnAdd(); });
    {% endfor %}

    function generateUrlOnAdd() {
      let a_lang_data = {
        name: {}
      };
      
      {% for language in languages %}
      a_lang_data['name'][{{ language.language_id }}] = \$('#input-title' + {{ module_seo_url_generator_language[language.language_id] }}).val();
      {% endfor %}
            
      data = {
        a_lang_data     : a_lang_data,
        primary_key     : 'information_id',
        essence         : 'information',
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
                    \$('input[name=\"information_seo_url[' + store_id +'][' + language_id + ']\"]').val(value);
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
      html += '<!-- information-redirects . begin -->';
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
      html += '<!-- /information-redirects . end -->';
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
        name            : \$('#input-title' + sourceLanguageId).val(),
        primary_key     : 'information_id',
        essence         : 'information',
        essence_id      : {{ information_id }}
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

{{ footer }} 
", "catalog/information_form.twig", "");
    }
}
