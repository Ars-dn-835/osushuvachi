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

/* journal3/template/journal3/blog/post.twig */
class __TwigTemplate_57664efa12b0a3ee8a72e86f3ec683b15ace15abebffdf904c8f69e2703c3706 extends \Twig\Template
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
            echo "  <h1 class=\"title page-title\"><span style=\"margin: 0 0;\">";
            echo ($context["post_name"] ?? null);
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
            echo "    <li><a href=\"";
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
<div class=\"container blog-post\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => "pageTitlePosition"], "method", false, false, false, 14) == "default")) {
            // line 15
            echo "        <h1 class=\"title page-title\">";
            echo ($context["post_name"] ?? null);
            echo "</h1>
      ";
        }
        // line 17
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"post-details\">
        <div class=\"post-image\">
          ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "datePosition"], "method", false, false, false, 20) == "image")) {
            // line 21
            echo "            <span class=\"p-date p-date-image\">";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "blog_date", [0 => ($context["post_date"] ?? null)], "method", false, false, false, 21);
            echo "</span>
          ";
        }
        // line 23
        echo "          <img src=\"";
        echo ($context["post_image"] ?? null);
        echo "\" ";
        if (($context["post_image2x"] ?? null)) {
            echo " srcset=\"";
            echo ($context["post_image"] ?? null);
            echo " 1x, ";
            echo ($context["post_image2x"] ?? null);
            echo " 2x\" ";
        }
        echo " width=\"";
        echo ($context["image_width"] ?? null);
        echo "\" height=\"";
        echo ($context["image_height"] ?? null);
        echo "\" alt=\"";
        echo ($context["post_name"] ?? null);
        echo "\" title=\"";
        echo ($context["post_name"] ?? null);
        echo "\"/>
        </div>
        <div class=\"post-stats\">
          ";
        // line 26
        if (($context["post_author"] ?? null)) {
            // line 27
            echo "            <span class=\"p-posted\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "blogPostedByText"], "method", false, false, false, 27);
            echo "</span>
            <span class=\"p-author\">";
            // line 28
            echo ($context["post_author"] ?? null);
            echo "</span>
          ";
        }
        // line 30
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "datePosition"], "method", false, false, false, 30) == "default")) {
            // line 31
            echo "            <span class=\"p-date p-date-default\">";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "blog_date", [0 => ($context["post_date"] ?? null)], "method", false, false, false, 31);
            echo "</span>
          ";
        }
        // line 33
        echo "          <span class=\"p-comment\">";
        echo twig_length_filter($this->env, ($context["comments"] ?? null));
        echo " ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "blogCommentsText"], "method", false, false, false, 33);
        echo "</span>
          <span class=\"p-view\">";
        // line 34
        echo ($context["post_views"] ?? null);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "blogViewsText"], "method", false, false, false, 34);
        echo "</span>
          ";
        // line 35
        if (($context["post_categories"] ?? null)) {
            // line 36
            echo "            <span class=\"p-category\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38);
                echo "</a>
            ";
                // line 39
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "            <span>, </span>
          ";
                }
                // line 42
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "          </span>
          ";
        }
        // line 45
        echo "        </div>
        <div class=\"post-content\">
          ";
        // line 47
        echo ($context["post_content"] ?? null);
        echo "
        </div>
        ";
        // line 49
        if (($context["post_tags"] ?? null)) {
            // line 50
            echo "          <div class=\"tags\">
            <span class=\"tags-title\">";
            // line 51
            echo ($context["text_tags"] ?? null);
            echo "</span>
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 53
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 53);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 53);
                echo "</a><b>,</b>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          </div>
        ";
        }
        // line 57
        echo "      </div>

      ";
        // line 59
        echo ($context["content_bottom"] ?? null);
        echo "

      ";
        // line 61
        if (($context["allow_comments"] ?? null)) {
            // line 62
            echo "        <div class=\"post-comments\">
          ";
            // line 63
            if ((twig_length_filter($this->env, ($context["comments"] ?? null)) > 0)) {
                // line 64
                echo "            <h3 class=\"title\">";
                echo twig_length_filter($this->env, ($context["comments"] ?? null));
                echo " ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "blogCommentsText"], "method", false, false, false, 64);
                echo "</h3>
          ";
            }
            // line 66
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 67
                echo "            <div class=\"post-comment\" data-comment-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment_id", [], "any", false, false, false, 67);
                echo "\" data-has-form=\"false\">
              <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "avatar", [], "any", false, false, false, 68);
                echo "?s=";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "postCommentImageSize"], "method", false, false, false, 68);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "postCommentImageSize"], "method", false, false, false, 68);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "postCommentImageSize"], "method", false, false, false, 68);
                echo "\" alt=\"\">
              <div class=\"comment\">
                <div class=\"user-name\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 70);
                echo ":</div>
                <div class=\"user-data\">
                  <div>
                    <span class=\"user-date p-date\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "blog_date", [0 => twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 73)], "method", false, false, false, 73);
                echo "</span>
                    <span class=\"user-time p-time\">";
                // line 74
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 74), ($context["time_format"] ?? null));
                echo "</span>
                  </div>
                  ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                    <span class=\"user-site p-site\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 77);
                    echo "\" target=\"_blank\">";
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 77);
                    echo "</a></span>
                  ";
                }
                // line 79
                echo "                </div>
                <a class=\"btn reply-btn\">";
                // line 80
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 80), "get", [0 => "blogReplyText"], "method", false, false, false, 80);
                echo "</a>
                <p>";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 81);
                echo "</p>
                ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "replies", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 83
                    echo "                  <div class=\"post-reply\">
                    <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "avatar", [], "any", false, false, false, 84);
                    echo "?s=";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 84), "get", [0 => "postCommentImageSize"], "method", false, false, false, 84);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 84), "get", [0 => "postCommentImageSize"], "method", false, false, false, 84);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 84), "get", [0 => "postCommentImageSize"], "method", false, false, false, 84);
                    echo "\" alt=\"\">
                    <div class=\"comment\">
                      <div class=\"user-name\">";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "name", [], "any", false, false, false, 86);
                    echo ":</div>
                      <div class=\"user-data\">
                        <div>
                          <span class=\"user-date p-date\">";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "blog_date", [0 => twig_get_attribute($this->env, $this->source, $context["reply"], "date", [], "any", false, false, false, 89)], "method", false, false, false, 89);
                    echo "</span>
                          <span class=\"user-time p-time\">";
                    // line 90
                    echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "date", [], "any", false, false, false, 90), ($context["time_format"] ?? null));
                    echo "</span>
                        </div>
                        ";
                    // line 92
                    if (twig_get_attribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 92)) {
                        // line 93
                        echo "                          <span class=\"user-site p-site\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 93);
                        echo "\" target=\"_blank\">";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 93);
                        echo "</a></span>
                        ";
                    }
                    // line 95
                    echo "                      </div>
                      <p>";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "comment", [], "any", false, false, false, 96);
                    echo "</p>
                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "          <div class=\"comment-form\">
            <h3 class=\"title\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 104), "get", [0 => "blogLeaveCommentText"], "method", false, false, false, 104);
            echo "</h3>
            <form method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 108
            echo ($context["entry_name"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" value=\"";
            // line 110
            echo ($context["default_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-email\">";
            // line 115
            echo ($context["entry_email"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
            // line 117
            echo ($context["default_email"] ?? null);
            echo "\" id=\"input-email\" class=\"form-control\"/>

                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
            // line 123
            echo ($context["entry_website"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
            // line 125
            echo ($context["default_website"] ?? null);
            echo "\" id=\"input-website\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 130
            echo ($context["text_comment"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\">";
            // line 132
            echo ($context["default_comment"] ?? null);
            echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"buttons\">
                <div class=\"pull-right\">
                  <button type=\"button\" class=\"btn comment-submit\">";
            // line 138
            echo ($context["button_submit"] ?? null);
            echo "</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      ";
        }
        // line 145
        echo "
    </div>
    ";
        // line 147
        echo ($context["column_right"] ?? null);
        echo "
  </div>
  ";
        // line 149
        if (($context["allow_comments"] ?? null)) {
            // line 150
            echo "    <script type=\"text/javascript\">
      function generateComment(\$form, cls, \$appendTo, callback) {
        \$form.find('.has-error').removeClass('has-error');

        \$.post('index.php?route=journal3/blog/comment&post_id=";
            // line 154
            echo ($context["post_id"] ?? null);
            echo "', \$form.serializeArray(), function (response) {
          if (response.status === 'success') {
            if (response.response.data) {
              var html = '';

              html += '<div class=\"' + cls + '\" data-comment-id=\"' + response.response.data.comment_id + '\" data-has-form=\"false\">';
              html += ' <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/' + response.response.data.avatar + '?s=";
            // line 160
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "postCommentImageSize"], "method", false, false, false, 160);
            echo "\" width=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "postCommentImageSize"], "method", false, false, false, 160);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "postCommentImageSize"], "method", false, false, false, 160);
            echo "\" alt=\"\">';
              html += ' <div class=\"comment\">';
              html += '   <div class=\"user-name\">' + response.response.data.name + ':</div>';
              html += '   <div class=\"user-data\">';
              html += '     <div>';
              html += '       <span class=\"user-date p-date\">' + response.response.data.date + '</span>';
              html += '       <span class=\"user-time p-time\">' + response.response.data.time + '</span>';
              html += '     </div>';
              html += '     <span class=\"user-site p-site\"><a href=\"' + response.response.data.website + '\" target=\"_blank\">' + response.response.data.website + '</a></span>';
              html += '   </div>';

              if (cls === 'post-comment') {
                html += ' <a class=\"btn reply-btn\">";
            // line 172
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 172), "get", [0 => "blogReplyText"], "method", false, false, false, 172);
            echo "</a>';
              }

              html += ' <p>' + response.response.data.comment + '</p>';
              html += '</div>';

              \$appendTo.before(html);
            }

            callback && callback(response.response.message);
          }

          if (response.status === 'error') {
            \$.each(response.response.errors, function (field) {
              \$form.find('[name=\"' + field + '\"]').closest('.form-group').addClass('has-error');
            });
          }
        }, 'json');
      }

      \$(document).delegate('.reply-btn', 'click', function () {
        var \$comment = \$(this).closest('.post-comment');

        if (\$comment.attr('data-has-form') === 'false') {
          var \$form = \$('.post-comments form').clone();
          \$form.find('.has-error').removeClass('has-error');
          \$form.append('<input type=\"hidden\" name=\"parent_id\" value=\"' + \$comment.attr('data-comment-id') + '\" />');
          \$form.find('button').removeClass('comment-submit').addClass('reply-submit');
          \$comment.find('> .comment').append('<div class=\"reply-form\"><h3 class=\"title\">' + '";
            // line 200
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 200), "get", [0 => "blogLeaveReplyText"], "method", false, false, false, 200);
            echo "' + '</h3><div class=\"comment-form\"><div><form class=\"form-horizontal\">' + \$form.html() + '</form></div></div></div>');
          \$comment.attr('data-has-form', 'true');
        } else {
          \$comment.find('.reply-form').remove();
          \$comment.attr('data-has-form', 'false');
        }
      });

      \$(document).delegate('form .comment-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$comment_form = \$('.comment-form');

        generateComment(\$form, 'post-comment', \$comment_form, function (message) {
          \$comment_form.before('<div class=\"success\">' + message + '</div>');
          setTimeout(function () {
            \$('.post-comments .success').slideUp(400, function () {
              \$(this).remove();
            });
          }, 1500);
          \$form[0].reset();
        });
      });

      \$(document).delegate('form .reply-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$reply_form = \$(this).closest('.post-comment').find('.reply-form');

        generateComment(\$form, 'post-reply', \$reply_form, function (message) {
          \$reply_form.before('<div class=\"success\">' + message + '</div>');
          setTimeout(function () {
            \$('.post-comments .success').slideUp(400, function () {
              \$(this).remove();
            });
          }, 1500);
          \$form.closest('.post-comment').attr('data-has-form', 'false');
          \$reply_form.remove();
        });
      });
    </script>
  ";
        }
        // line 240
        echo "</div>
";
        // line 241
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/blog/post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 241,  588 => 240,  545 => 200,  514 => 172,  495 => 160,  486 => 154,  480 => 150,  478 => 149,  473 => 147,  469 => 145,  459 => 138,  450 => 132,  445 => 130,  437 => 125,  432 => 123,  423 => 117,  418 => 115,  410 => 110,  405 => 108,  398 => 104,  395 => 103,  387 => 100,  377 => 96,  374 => 95,  366 => 93,  364 => 92,  359 => 90,  355 => 89,  349 => 86,  338 => 84,  335 => 83,  331 => 82,  327 => 81,  323 => 80,  320 => 79,  312 => 77,  310 => 76,  305 => 74,  301 => 73,  295 => 70,  284 => 68,  279 => 67,  274 => 66,  266 => 64,  264 => 63,  261 => 62,  259 => 61,  254 => 59,  250 => 57,  246 => 55,  235 => 53,  231 => 52,  227 => 51,  224 => 50,  222 => 49,  217 => 47,  213 => 45,  209 => 43,  195 => 42,  191 => 40,  189 => 39,  182 => 38,  165 => 37,  162 => 36,  160 => 35,  154 => 34,  147 => 33,  141 => 31,  138 => 30,  133 => 28,  128 => 27,  126 => 26,  103 => 23,  97 => 21,  95 => 20,  88 => 17,  82 => 15,  80 => 14,  75 => 12,  70 => 10,  67 => 9,  56 => 7,  52 => 6,  49 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{% if j3.settings.get('pageTitlePosition') == 'top' %}
  <h1 class=\"title page-title\"><span style=\"margin: 0 0;\">{{ post_name }}</span></h1>
{% endif %}
<ul class=\"breadcrumb\">
  {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
  {% endfor %}
</ul>
{{ j3.loadController('journal3/layout', 'top') }}
<div class=\"container blog-post\">
  <div class=\"row\">{{ column_left }}
    <div id=\"content\">
      {% if j3.settings.get('pageTitlePosition') == 'default' %}
        <h1 class=\"title page-title\">{{ post_name }}</h1>
      {% endif %}
      {{ content_top }}
      <div class=\"post-details\">
        <div class=\"post-image\">
          {% if j3.settings.get('datePosition') == 'image' %}
            <span class=\"p-date p-date-image\">{{ j3.blog_date(post_date) }}</span>
          {% endif %}
          <img src=\"{{ post_image }}\" {% if post_image2x %} srcset=\"{{ post_image }} 1x, {{ post_image2x }} 2x\" {% endif %} width=\"{{ image_width }}\" height=\"{{ image_height }}\" alt=\"{{ post_name }}\" title=\"{{ post_name }}\"/>
        </div>
        <div class=\"post-stats\">
          {% if post_author %}
            <span class=\"p-posted\">{{ j3.settings.get('blogPostedByText') }}</span>
            <span class=\"p-author\">{{ post_author }}</span>
          {% endif %}
          {% if j3.settings.get('datePosition') == 'default' %}
            <span class=\"p-date p-date-default\">{{ j3.blog_date(post_date) }}</span>
          {% endif %}
          <span class=\"p-comment\">{{ comments|length }} {{ j3.settings.get('blogCommentsText') }}</span>
          <span class=\"p-view\">{{ post_views }} {{ j3.settings.get('blogViewsText') }}</span>
          {% if post_categories %}
            <span class=\"p-category\">
          {% for category in post_categories %}
            <a href=\"{{ category.href }}\">{{ category.name }}</a>
            {% if not loop.last %}
            <span>, </span>
          {% endif %}
          {% endfor %}
          </span>
          {% endif %}
        </div>
        <div class=\"post-content\">
          {{ post_content }}
        </div>
        {% if post_tags %}
          <div class=\"tags\">
            <span class=\"tags-title\">{{ text_tags }}</span>
            {% for tag in post_tags %}
              <a href=\"{{ tag.href }}\">{{ tag.name }}</a><b>,</b>
            {% endfor %}
          </div>
        {% endif %}
      </div>

      {{ content_bottom }}

      {% if allow_comments %}
        <div class=\"post-comments\">
          {% if comments | length > 0 %}
            <h3 class=\"title\">{{ comments | length }} {{ j3.settings.get('blogCommentsText') }}</h3>
          {% endif %}
          {% for comment in comments %}
            <div class=\"post-comment\" data-comment-id=\"{{ comment.comment_id }}\" data-has-form=\"false\">
              <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/{{ comment.avatar }}?s={{ j3.settings.get('postCommentImageSize') }}\" width=\"{{ j3.settings.get('postCommentImageSize') }}\" height=\"{{ j3.settings.get('postCommentImageSize') }}\" alt=\"\">
              <div class=\"comment\">
                <div class=\"user-name\">{{ comment.name }}:</div>
                <div class=\"user-data\">
                  <div>
                    <span class=\"user-date p-date\">{{ j3.blog_date(comment.date) }}</span>
                    <span class=\"user-time p-time\">{{ comment.date | date(time_format) }}</span>
                  </div>
                  {% if comment.website %}
                    <span class=\"user-site p-site\"><a href=\"{{ comment.website }}\" target=\"_blank\">{{ comment.website }}</a></span>
                  {% endif %}
                </div>
                <a class=\"btn reply-btn\">{{ j3.settings.get('blogReplyText') }}</a>
                <p>{{ comment.comment }}</p>
                {% for reply in comment.replies %}
                  <div class=\"post-reply\">
                    <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/{{ comment.avatar }}?s={{ j3.settings.get('postCommentImageSize') }}\" width=\"{{ j3.settings.get('postCommentImageSize') }}\" height=\"{{ j3.settings.get('postCommentImageSize') }}\" alt=\"\">
                    <div class=\"comment\">
                      <div class=\"user-name\">{{ reply.name }}:</div>
                      <div class=\"user-data\">
                        <div>
                          <span class=\"user-date p-date\">{{ j3.blog_date(reply.date) }}</span>
                          <span class=\"user-time p-time\">{{ reply.date | date(time_format) }}</span>
                        </div>
                        {% if reply.website %}
                          <span class=\"user-site p-site\"><a href=\"{{ reply.website }}\" target=\"_blank\">{{ reply.website }}</a></span>
                        {% endif %}
                      </div>
                      <p>{{ reply.comment }}</p>
                    </div>
                  </div>
                {% endfor %}
              </div>
            </div>
          {% endfor %}
          <div class=\"comment-form\">
            <h3 class=\"title\">{{ j3.settings.get('blogLeaveCommentText') }}</h3>
            <form method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" value=\"{{ default_name }}\" id=\"input-name\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"{{ default_email }}\" id=\"input-email\" class=\"form-control\"/>

                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">{{ entry_website }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"{{ default_website }}\" id=\"input-website\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">{{ text_comment }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\">{{ default_comment }}</textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"buttons\">
                <div class=\"pull-right\">
                  <button type=\"button\" class=\"btn comment-submit\">{{ button_submit }}</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      {% endif %}

    </div>
    {{ column_right }}
  </div>
  {% if allow_comments %}
    <script type=\"text/javascript\">
      function generateComment(\$form, cls, \$appendTo, callback) {
        \$form.find('.has-error').removeClass('has-error');

        \$.post('index.php?route=journal3/blog/comment&post_id={{ post_id }}', \$form.serializeArray(), function (response) {
          if (response.status === 'success') {
            if (response.response.data) {
              var html = '';

              html += '<div class=\"' + cls + '\" data-comment-id=\"' + response.response.data.comment_id + '\" data-has-form=\"false\">';
              html += ' <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/' + response.response.data.avatar + '?s={{ j3.settings.get('postCommentImageSize') }}\" width=\"{{ j3.settings.get('postCommentImageSize') }}\" height=\"{{ j3.settings.get('postCommentImageSize') }}\" alt=\"\">';
              html += ' <div class=\"comment\">';
              html += '   <div class=\"user-name\">' + response.response.data.name + ':</div>';
              html += '   <div class=\"user-data\">';
              html += '     <div>';
              html += '       <span class=\"user-date p-date\">' + response.response.data.date + '</span>';
              html += '       <span class=\"user-time p-time\">' + response.response.data.time + '</span>';
              html += '     </div>';
              html += '     <span class=\"user-site p-site\"><a href=\"' + response.response.data.website + '\" target=\"_blank\">' + response.response.data.website + '</a></span>';
              html += '   </div>';

              if (cls === 'post-comment') {
                html += ' <a class=\"btn reply-btn\">{{ j3.settings.get('blogReplyText') }}</a>';
              }

              html += ' <p>' + response.response.data.comment + '</p>';
              html += '</div>';

              \$appendTo.before(html);
            }

            callback && callback(response.response.message);
          }

          if (response.status === 'error') {
            \$.each(response.response.errors, function (field) {
              \$form.find('[name=\"' + field + '\"]').closest('.form-group').addClass('has-error');
            });
          }
        }, 'json');
      }

      \$(document).delegate('.reply-btn', 'click', function () {
        var \$comment = \$(this).closest('.post-comment');

        if (\$comment.attr('data-has-form') === 'false') {
          var \$form = \$('.post-comments form').clone();
          \$form.find('.has-error').removeClass('has-error');
          \$form.append('<input type=\"hidden\" name=\"parent_id\" value=\"' + \$comment.attr('data-comment-id') + '\" />');
          \$form.find('button').removeClass('comment-submit').addClass('reply-submit');
          \$comment.find('> .comment').append('<div class=\"reply-form\"><h3 class=\"title\">' + '{{ j3.settings.get('blogLeaveReplyText') }}' + '</h3><div class=\"comment-form\"><div><form class=\"form-horizontal\">' + \$form.html() + '</form></div></div></div>');
          \$comment.attr('data-has-form', 'true');
        } else {
          \$comment.find('.reply-form').remove();
          \$comment.attr('data-has-form', 'false');
        }
      });

      \$(document).delegate('form .comment-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$comment_form = \$('.comment-form');

        generateComment(\$form, 'post-comment', \$comment_form, function (message) {
          \$comment_form.before('<div class=\"success\">' + message + '</div>');
          setTimeout(function () {
            \$('.post-comments .success').slideUp(400, function () {
              \$(this).remove();
            });
          }, 1500);
          \$form[0].reset();
        });
      });

      \$(document).delegate('form .reply-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$reply_form = \$(this).closest('.post-comment').find('.reply-form');

        generateComment(\$form, 'post-reply', \$reply_form, function (message) {
          \$reply_form.before('<div class=\"success\">' + message + '</div>');
          setTimeout(function () {
            \$('.post-comments .success').slideUp(400, function () {
              \$(this).remove();
            });
          }, 1500);
          \$form.closest('.post-comment').attr('data-has-form', 'false');
          \$reply_form.remove();
        });
      });
    </script>
  {% endif %}
</div>
{{ footer }}
", "journal3/template/journal3/blog/post.twig", "");
    }
}
