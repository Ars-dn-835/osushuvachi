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

/* journal3/template/product/review.twig */
class __TwigTemplate_1f37fd72cbb69504b5347d77c04388e12f0f08ca262b317ee71e0e650e504ddd extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "    <div class=\"review\">
      <div class=\"review__header\">
        <div class=\"review__account account\">
          <div class=\"account__avatar\" id=\"user-avatar\">";
                // line 6
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 6), 0, 1);
                echo "</div>
          <div class=\"account__data\">
            <p class=\"account__name\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 8);
                echo "</p>
            <p class=\"account__rating\">";
                // line 9
                echo ($context["text__purchase_evaluation"] ?? null);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 9);
                echo " <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"11\" viewBox=\"0 0 12 11\" fill=\"none\">
                <path d=\"M11.9799 4.15892C11.942 4.05376 11.8732 3.9614 11.7817 3.89303C11.6903 3.82466 11.5801 3.78322 11.4646 3.77373L8.05521 3.29656L6.52729 0.324309C6.47823 0.22711 6.40162 0.145136 6.30625 0.0877784C6.21087 0.030421 6.10059 0 5.98803 0C5.87547 0 5.76518 0.030421 5.66981 0.0877784C5.57443 0.145136 5.49783 0.22711 5.44876 0.324309L3.92084 3.29081L0.511482 3.77373C0.400586 3.78886 0.296329 3.8335 0.210541 3.9026C0.124754 3.9717 0.060871 4.06249 0.0261423 4.16467C-0.00564746 4.26451 -0.00850021 4.37078 0.0178902 4.47207C0.0442806 4.57335 0.0989178 4.66583 0.175938 4.73957L2.65057 7.03919L2.05139 10.3046C2.02719 10.413 2.03614 10.5257 2.07714 10.6293C2.11814 10.7328 2.18946 10.8228 2.28251 10.8884C2.37556 10.954 2.48638 10.9924 2.60163 10.999C2.71689 11.0056 2.83168 10.9801 2.93219 10.9255L5.98803 9.39055L9.04387 10.9255C9.12796 10.9711 9.22294 10.9948 9.31949 10.9945C9.44642 10.995 9.5702 10.9567 9.67301 10.8853C9.76597 10.8214 9.83794 10.7333 9.88041 10.6314C9.92288 10.5296 9.93408 10.4182 9.91269 10.3104L9.3135 7.04494L11.7881 4.74532C11.8746 4.675 11.9386 4.58257 11.9725 4.47877C12.0065 4.37497 12.009 4.26406 11.9799 4.15892ZM8.29489 6.45854C8.22554 6.52316 8.17351 6.60292 8.14325 6.69102C8.11299 6.77912 8.1054 6.87293 8.12112 6.96445L8.55254 9.37905L6.2996 8.22924C6.21204 8.18768 6.11567 8.16606 6.01799 8.16606C5.9203 8.16606 5.82393 8.18768 5.73637 8.22924L3.48344 9.37905L3.91485 6.96445C3.93057 6.87293 3.92298 6.77912 3.89272 6.69102C3.86246 6.60292 3.81044 6.52316 3.74109 6.45854L1.94353 4.73382L4.4661 4.38313C4.56317 4.37018 4.65544 4.33458 4.73483 4.27945C4.81423 4.22432 4.87831 4.15135 4.92148 4.06694L5.98803 1.87655L7.11449 4.07268C7.15766 4.1571 7.22175 4.23007 7.30114 4.2852C7.38053 4.34033 7.47281 4.37593 7.56987 4.38888L10.0924 4.73957L8.29489 6.45854Z\" fill=\"#E6C622\"/>
              </svg></p>
          </div>
        </div>
        <p class=\"review__date\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 14);
                echo "</p>
      </div>
      <div class=\"review__body\">
        <div class=\"review__text\">
          <p>";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 18);
                echo "</p>
        </div>
        <p class=\"review__full\">";
                // line 20
                echo ($context["text__full_review"] ?? null);
                echo "</p>
        <div class=\"review__advantages advantages\">
          <p class=\"advantages__title\">";
                // line 22
                echo ($context["text_benefits"] ?? null);
                echo "</p>
          ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["review"], "advantages", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "            <p class=\"disadvantages__text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "advantages", [], "any", false, false, false, 24);
                    echo "</p>
          ";
                } else {
                    // line 26
                    echo "            <p class=\"disadvantages__text\">";
                    echo ($context["text_not_found"] ?? null);
                    echo "</p>
          ";
                }
                // line 28
                echo "        </div>
        <div class=\"review__disadvantages disadvantages\">
          <p class=\"disadvantages__title\">";
                // line 30
                echo ($context["text_disadvantages"] ?? null);
                echo "</p>
          ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["review"], "disadvantages", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "            <p class=\"disadvantages__text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "disadvantages", [], "any", false, false, false, 32);
                    echo "</p>
          ";
                } else {
                    // line 34
                    echo "            <p class=\"disadvantages__text\">";
                    echo ($context["text_not_found"] ?? null);
                    echo "</p>
          ";
                }
                // line 36
                echo "        </div>
      </div>
    </div>

  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "  <a href=\"";
            echo ($context["load_all_link"] ?? null);
            echo "\" class=\"reviews__all\">";
            echo ($context["text__download_more"] ?? null);
            echo "</a>
";
        } else {
            // line 43
            echo "  <p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
        // line 45
        echo "
<script>
  console.log('12345678912345689')


  let loadMoreButton = document.querySelector('.reviews__all');
  let hiddenReviews = document.querySelectorAll('.review.hidden');

  loadMoreButton.addEventListener('click', function(e) {
    e.preventDefault();

    hiddenReviews.forEach(function(review) {
      review.classList.toggle('hidden');
    });

    if (hiddenReviews.length === 0) {
      loadMoreButton.style.display = 'none';
    }
  });

  //========================

  let reviewFullButtons = document.querySelectorAll(\".review__full\");

  reviewFullButtons.forEach(function (button) {
    button.addEventListener(\"click\", function () {
      let reviewText = this.closest(\".review\").querySelector(\".review__text\");
      reviewText.classList.toggle(\"expanded\");
    });
  });


  //========================


  document.addEventListener(\"DOMContentLoaded\", function() {
    let loadAllButton = document.querySelector(\".load-all-reviews\");

    let reviewsContainer = document.querySelector(\".reviews-container\");

    loadAllButton.addEventListener(\"click\", function(event) {
      event.preventDefault();

      let xhr = new XMLHttpRequest();
      xhr.open(\"GET\", \"";
        // line 89
        echo ($context["load_all_reviews_url"] ?? null);
        echo "?load_all=1\", true);

      xhr.onload = function() {
        if (xhr.status === 200) {
          reviewsContainer.innerHTML = xhr.responseText;
        } else {
          alert(\"Произошла ошибка при загрузке отзывов.\");
        }
      };

      xhr.send();
    });
  });


</script>";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 89,  149 => 45,  143 => 43,  135 => 41,  125 => 36,  119 => 34,  113 => 32,  111 => 31,  107 => 30,  103 => 28,  97 => 26,  91 => 24,  89 => 23,  85 => 22,  80 => 20,  75 => 18,  68 => 14,  58 => 9,  54 => 8,  49 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if reviews %}
  {% for review in reviews %}
    <div class=\"review\">
      <div class=\"review__header\">
        <div class=\"review__account account\">
          <div class=\"account__avatar\" id=\"user-avatar\">{{ review.author|slice(0, 1) }}</div>
          <div class=\"account__data\">
            <p class=\"account__name\">{{ review.author }}</p>
            <p class=\"account__rating\">{{ text__purchase_evaluation }}  {{ review.rating }} <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"11\" viewBox=\"0 0 12 11\" fill=\"none\">
                <path d=\"M11.9799 4.15892C11.942 4.05376 11.8732 3.9614 11.7817 3.89303C11.6903 3.82466 11.5801 3.78322 11.4646 3.77373L8.05521 3.29656L6.52729 0.324309C6.47823 0.22711 6.40162 0.145136 6.30625 0.0877784C6.21087 0.030421 6.10059 0 5.98803 0C5.87547 0 5.76518 0.030421 5.66981 0.0877784C5.57443 0.145136 5.49783 0.22711 5.44876 0.324309L3.92084 3.29081L0.511482 3.77373C0.400586 3.78886 0.296329 3.8335 0.210541 3.9026C0.124754 3.9717 0.060871 4.06249 0.0261423 4.16467C-0.00564746 4.26451 -0.00850021 4.37078 0.0178902 4.47207C0.0442806 4.57335 0.0989178 4.66583 0.175938 4.73957L2.65057 7.03919L2.05139 10.3046C2.02719 10.413 2.03614 10.5257 2.07714 10.6293C2.11814 10.7328 2.18946 10.8228 2.28251 10.8884C2.37556 10.954 2.48638 10.9924 2.60163 10.999C2.71689 11.0056 2.83168 10.9801 2.93219 10.9255L5.98803 9.39055L9.04387 10.9255C9.12796 10.9711 9.22294 10.9948 9.31949 10.9945C9.44642 10.995 9.5702 10.9567 9.67301 10.8853C9.76597 10.8214 9.83794 10.7333 9.88041 10.6314C9.92288 10.5296 9.93408 10.4182 9.91269 10.3104L9.3135 7.04494L11.7881 4.74532C11.8746 4.675 11.9386 4.58257 11.9725 4.47877C12.0065 4.37497 12.009 4.26406 11.9799 4.15892ZM8.29489 6.45854C8.22554 6.52316 8.17351 6.60292 8.14325 6.69102C8.11299 6.77912 8.1054 6.87293 8.12112 6.96445L8.55254 9.37905L6.2996 8.22924C6.21204 8.18768 6.11567 8.16606 6.01799 8.16606C5.9203 8.16606 5.82393 8.18768 5.73637 8.22924L3.48344 9.37905L3.91485 6.96445C3.93057 6.87293 3.92298 6.77912 3.89272 6.69102C3.86246 6.60292 3.81044 6.52316 3.74109 6.45854L1.94353 4.73382L4.4661 4.38313C4.56317 4.37018 4.65544 4.33458 4.73483 4.27945C4.81423 4.22432 4.87831 4.15135 4.92148 4.06694L5.98803 1.87655L7.11449 4.07268C7.15766 4.1571 7.22175 4.23007 7.30114 4.2852C7.38053 4.34033 7.47281 4.37593 7.56987 4.38888L10.0924 4.73957L8.29489 6.45854Z\" fill=\"#E6C622\"/>
              </svg></p>
          </div>
        </div>
        <p class=\"review__date\">{{ review.date_added }}</p>
      </div>
      <div class=\"review__body\">
        <div class=\"review__text\">
          <p>{{ review.text }}</p>
        </div>
        <p class=\"review__full\">{{ text__full_review }}</p>
        <div class=\"review__advantages advantages\">
          <p class=\"advantages__title\">{{ text_benefits }}</p>
          {% if review.advantages %}
            <p class=\"disadvantages__text\">{{ review.advantages}}</p>
          {% else %}
            <p class=\"disadvantages__text\">{{ text_not_found }}</p>
          {% endif %}
        </div>
        <div class=\"review__disadvantages disadvantages\">
          <p class=\"disadvantages__title\">{{ text_disadvantages }}</p>
          {% if review.disadvantages %}
            <p class=\"disadvantages__text\">{{ review.disadvantages}}</p>
          {% else %}
            <p class=\"disadvantages__text\">{{ text_not_found }}</p>
          {% endif %}
        </div>
      </div>
    </div>

  {% endfor %}
  <a href=\"{{ load_all_link }}\" class=\"reviews__all\">{{ text__download_more }}</a>
{% else %}
  <p>{{ text_no_reviews }}</p>
{% endif %}

<script>
  console.log('12345678912345689')


  let loadMoreButton = document.querySelector('.reviews__all');
  let hiddenReviews = document.querySelectorAll('.review.hidden');

  loadMoreButton.addEventListener('click', function(e) {
    e.preventDefault();

    hiddenReviews.forEach(function(review) {
      review.classList.toggle('hidden');
    });

    if (hiddenReviews.length === 0) {
      loadMoreButton.style.display = 'none';
    }
  });

  //========================

  let reviewFullButtons = document.querySelectorAll(\".review__full\");

  reviewFullButtons.forEach(function (button) {
    button.addEventListener(\"click\", function () {
      let reviewText = this.closest(\".review\").querySelector(\".review__text\");
      reviewText.classList.toggle(\"expanded\");
    });
  });


  //========================


  document.addEventListener(\"DOMContentLoaded\", function() {
    let loadAllButton = document.querySelector(\".load-all-reviews\");

    let reviewsContainer = document.querySelector(\".reviews-container\");

    loadAllButton.addEventListener(\"click\", function(event) {
      event.preventDefault();

      let xhr = new XMLHttpRequest();
      xhr.open(\"GET\", \"{{ load_all_reviews_url }}?load_all=1\", true);

      xhr.onload = function() {
        if (xhr.status === 200) {
          reviewsContainer.innerHTML = xhr.responseText;
        } else {
          alert(\"Произошла ошибка при загрузке отзывов.\");
        }
      };

      xhr.send();
    });
  });


</script>", "journal3/template/product/review.twig", "");
    }
}
