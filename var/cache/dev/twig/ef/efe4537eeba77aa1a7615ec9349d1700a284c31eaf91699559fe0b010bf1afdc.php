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

/* @bolt/_partials/fields/_label.html.twig */
class __TwigTemplate_08f5fed37bad8dc4e502f81592c97c5f2008f928cbf49020959ca76be128188f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/_label.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/_label.html.twig"));

        // line 1
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@bolt/_macro/_macro.html.twig", "@bolt/_partials/fields/_label.html.twig", 1)->unwrap();
        // line 3
        if (0 !== twig_compare((((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })()))) : ("")), "checkbox")) {
            // line 5
            if ((((isset($context["localize"]) || array_key_exists("localize", $context))) ? (_twig_default_filter((isset($context["localize"]) || array_key_exists("localize", $context) ? $context["localize"] : (function () { throw new RuntimeError('Variable "localize" does not exist.', 5, $this->source); })()))) : (""))) {
                // line 6
                echo "<span style=\"color: #999; font-size: 140%; line-height: 0;\" class=\"float-right\" title=\"";
                echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("label.translatable");
                echo "\">";
                echo twig_call_macro($macros["macro"], "macro_icon", ["language"], 6, $context, $this->getSourceContext());
                echo "</span>";
            }
            // line 9
            echo "<label for=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\" class=\"editor--label";
            if (0 === twig_compare((((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 9, $this->source); })()))) : ("")), "collection")) {
                echo " sr-only";
            }
            echo "\">

        ";
            // line 11
            if ((isset($context["in_collection"]) || array_key_exists("in_collection", $context))) {
                // line 12
                echo "            <span style=\"font-weight: normal;\">";
                echo twig_escape_filter($this->env, (isset($context["collection_label"]) || array_key_exists("collection_label", $context) ? $context["collection_label"] : (function () { throw new RuntimeError('Variable "collection_label" does not exist.', 12, $this->source); })()), "html", null, true);
                echo " &raquo;</span>
        ";
            }
            // line 15
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 15, $this->source); })()), "html", null, true);
            echo ":
        ";
            // line 16
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 16, $this->source); })())) {
                echo " <span class=\"required-label\"></span> ";
            }
            // line 17
            echo "
        ";
            // line 18
            if ((((isset($context["info"]) || array_key_exists("info", $context))) ? (_twig_default_filter((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 18, $this->source); })()))) : (""))) {
                // line 19
                echo "            <i class=\"fa fa-info-circle\" data-toggle=\"popover\" data-trigger=\"hover\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\" data-html=\"true\" data-content=\"";
                echo twig_escape_filter($this->env, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 21
            echo "    </label>";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/fields/_label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  87 => 19,  85 => 18,  82 => 17,  78 => 16,  74 => 15,  68 => 12,  66 => 11,  56 => 9,  49 => 6,  47 => 5,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@bolt/_macro/_macro.html.twig' as macro %}

{%- if type|default() != 'checkbox' -%}

    {%- if localize|default() -%}
        <span style=\"color: #999; font-size: 140%; line-height: 0;\" class=\"float-right\" title=\"{{ __('label.translatable') }}\">{{ macro.icon('language') }}</span>
    {%- endif -%}

    <label for=\"{{ id }}\" class=\"editor--label{% if type|default() == 'collection' %} sr-only{% endif %}\">

        {% if in_collection is defined %}
            <span style=\"font-weight: normal;\">{{ collection_label }} &raquo;</span>
        {% endif %}

        {{- label -}}:
        {% if required %} <span class=\"required-label\"></span> {% endif %}

        {% if info|default() %}
            <i class=\"fa fa-info-circle\" data-toggle=\"popover\" data-trigger=\"hover\" title=\"{{ label }}\" data-html=\"true\" data-content=\"{{ info }}\"></i>
        {% endif %}
    </label>
{%- endif -%}
", "@bolt/_partials/fields/_label.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/fields/_label.html.twig");
    }
}
