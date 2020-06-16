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

/* @news-widget/news.html.twig */
class __TwigTemplate_d1c4e169f21455e210009697c41e3a930c2c4b33eb7b0e4a7747b5a78547f9fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@news-widget/news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@news-widget/news.html.twig"));

        // line 1
        echo "<div class=\"card mb-4\">
    <div class=\"card-header\">
        <i class=\"far fa-newspaper\"></i> &nbsp; ";
        // line 3
        echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("general.latest_bolt_news");
        echo "
    </div>
    <div class=\"card-body\">
        <p><strong>";
        // line 6
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })());
        echo "</strong></p>
        ";
        // line 7
        echo (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 7, $this->source); })());
        echo "
        ";
        // line 8
        if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-tertiary btn-sm\">
                <i class=\"fas fa-external-link-square-alt\"></i> ";
            // line 10
            echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("general.phrase.read-more");
            echo "
            </a>
        ";
        }
        // line 13
        echo "    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@news-widget/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  68 => 10,  63 => 9,  61 => 8,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-4\">
    <div class=\"card-header\">
        <i class=\"far fa-newspaper\"></i> &nbsp; {{ __('general.latest_bolt_news') }}
    </div>
    <div class=\"card-body\">
        <p><strong>{{ title|raw }}</strong></p>
        {{ news|raw }}
        {% if link %}
            <a href=\"{{ link }}\" target=\"_blank\" class=\"btn btn-tertiary btn-sm\">
                <i class=\"fas fa-external-link-square-alt\"></i> {{ __('general.phrase.read-more') }}
            </a>
        {% endif %}
    </div>
</div>", "@news-widget/news.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/newswidget/templates/news.html.twig");
    }
}
