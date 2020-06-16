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

/* @bolt/_partials/fields/_collection_buttons.html.twig */
class __TwigTemplate_9de02ec31d6bb685fcbc6f8ed14bdb2dbcf09b43d5bd2ef819326c91717c35eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/_collection_buttons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/_collection_buttons.html.twig"));

        // line 1
        if ((isset($context["in_collection"]) || array_key_exists("in_collection", $context))) {
            // line 2
            echo "    <div class=\"float-right\" role=\"group\" aria-label=\"Collection buttons\" style=\"margin-top: -0.25rem\">
    <input type=\"hidden\" name=\"collections[";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["collection_name"]) || array_key_exists("collection_name", $context) ? $context["collection_name"] : (function () { throw new RuntimeError('Variable "collection_name" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "][order][]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\" />

    <button class='action-move-up-collection-item btn btn-secondary btn-sm' ";
            // line 5
            if (((isset($context["is_first"]) || array_key_exists("is_first", $context)) && (isset($context["is_first"]) || array_key_exists("is_first", $context) ? $context["is_first"] : (function () { throw new RuntimeError('Variable "is_first" does not exist.', 5, $this->source); })()))) {
                echo " disabled ";
            }
            echo ">
        <i class=\"fas fa-fw fa-chevron-up\"></i>
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("collection.move_item_up"), "html", null, true);
            echo "
    </button>
    <button class='action-move-down-collection-item btn btn-secondary btn-sm' ";
            // line 9
            if (((isset($context["is_last"]) || array_key_exists("is_last", $context)) && (isset($context["is_last"]) || array_key_exists("is_last", $context) ? $context["is_last"] : (function () { throw new RuntimeError('Variable "is_last" does not exist.', 9, $this->source); })()))) {
                echo " disabled ";
            }
            echo ">
        <i class=\"fas fa-fw fa-chevron-down\"></i>
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("collection.move_item_down"), "html", null, true);
            echo "
    </button>
    <button class='action-remove-collection-item btn btn-hidden-danger btn-sm' data-confirmation=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("collection.confirm_delete"), "html", null, true);
            echo "\">
        <i class=\"fas fa-fw fa-trash\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("collection.remove_item"), "html", null, true);
            echo "
    </button>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/fields/_collection_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  79 => 13,  74 => 11,  67 => 9,  62 => 7,  55 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if in_collection is defined %}
    <div class=\"float-right\" role=\"group\" aria-label=\"Collection buttons\" style=\"margin-top: -0.25rem\">
    <input type=\"hidden\" name=\"collections[{{ collection_name }}][order][]\" value=\"{{ hash }}\" />

    <button class='action-move-up-collection-item btn btn-secondary btn-sm' {% if is_first is defined and is_first %} disabled {% endif %}>
        <i class=\"fas fa-fw fa-chevron-up\"></i>
        {{ 'collection.move_item_up'|trans }}
    </button>
    <button class='action-move-down-collection-item btn btn-secondary btn-sm' {% if is_last is defined and is_last %} disabled {% endif %}>
        <i class=\"fas fa-fw fa-chevron-down\"></i>
        {{ 'collection.move_item_down'|trans }}
    </button>
    <button class='action-remove-collection-item btn btn-hidden-danger btn-sm' data-confirmation=\"{{ 'collection.confirm_delete'|trans }}\">
        <i class=\"fas fa-fw fa-trash\"></i>
        {{ 'collection.remove_item'|trans }}
    </button>
    </div>
{% endif %}
", "@bolt/_partials/fields/_collection_buttons.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/fields/_collection_buttons.html.twig");
    }
}
