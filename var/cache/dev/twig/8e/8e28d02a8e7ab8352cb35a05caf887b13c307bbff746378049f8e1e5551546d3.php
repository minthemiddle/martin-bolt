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

/* @bolt/_partials/fields/date.html.twig */
class __TwigTemplate_558097f8018b681b315b6010a27f34da8bf4310d30fd060f6fd6a69c894f6e9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@bolt/_partials/fields/_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/date.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/date.html.twig"));

        // line 2
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@bolt/_macro/_macro.html.twig", "@bolt/_partials/fields/date.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@bolt/_partials/fields/_base.html.twig", "@bolt/_partials/fields/date.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 5
        echo "  ";
        // line 6
        echo "  ";
        if ( !(isset($context["readonly"]) || array_key_exists("readonly", $context))) {
            // line 7
            echo "      ";
            $context["readonly"] = false;
            // line 8
            echo "  ";
        }
        // line 9
        echo "  ";
        // line 10
        echo "  ";
        if ( !(isset($context["form"]) || array_key_exists("form", $context))) {
            // line 11
            echo "      ";
            $context["form"] = "";
            // line 12
            echo "  ";
        }
        // line 13
        echo "  ";
        // line 14
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timestamp", [], "any", true, true, false, 14)) {
            // line 15
            echo "      ";
            $context["value"] = twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 15, $this->source); })()), "c");
            // line 16
            echo "  ";
        }
        // line 17
        echo "  ";
        // line 18
        echo "  ";
        if ( !(isset($context["mode"]) || array_key_exists("mode", $context))) {
            // line 19
            echo "      ";
            $context["mode"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 19), "mode", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 19), "mode", [], "any", false, false, false, 19), false)) : (false));
            // line 20
            echo "  ";
        }
        // line 21
        echo "  ";
        // line 22
        echo "  ";
        if ( !(isset($context["valueonly"]) || array_key_exists("valueonly", $context))) {
            // line 23
            echo "      ";
            $context["valueonly"] = false;
            // line 24
            echo "  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if ( !(isset($context["valueonly"]) || array_key_exists("valueonly", $context) ? $context["valueonly"] : (function () { throw new RuntimeError('Variable "valueonly" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "  <editor-date
    :value='";
            // line 28
            echo twig_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })())), "html", null, true);
            echo "'
    name='";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "'
    :readonly='";
            // line 30
            echo twig_escape_filter($this->env, json_encode((isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new RuntimeError('Variable "readonly" does not exist.', 30, $this->source); })())), "html", null, true);
            echo "'
    form='";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "'
    mode='";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "'
    locale='";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "locale", [], "any", false, false, false, 33), "html", null, true);
            echo "'
    labels='";
            // line 34
            echo twig_escape_filter($this->env, json_encode(["toggle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("editor_date.toggle")]), "html", null, true);
            echo "'
    :required='";
            // line 35
            echo twig_escape_filter($this->env, json_encode((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 35, $this->source); })())), "html", null, true);
            echo "'
    :errormessage='";
            // line 36
            echo twig_escape_filter($this->env, json_encode((isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 36, $this->source); })())), "html", null, true);
            echo "'
  ></editor-date>
  ";
        } else {
            // line 39
            echo "      <br>
    ";
            // line 40
            echo $this->extensions['Bolt\Twig\LocaleExtension']->localedatetime((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 40, $this->source); })()), "%B %e, %Y - %H:%M<small>%p</small>");
            echo "
      <small>(";
            // line 41
            echo twig_call_macro($macros["macro"], "macro_relative_datetime", [(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 41, $this->source); })())], 41, $context, $this->getSourceContext());
            echo ")</small>
  ";
        }
        // line 43
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/fields/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 43,  179 => 41,  175 => 40,  172 => 39,  166 => 36,  162 => 35,  158 => 34,  154 => 33,  150 => 32,  146 => 31,  142 => 30,  138 => 29,  134 => 28,  131 => 27,  129 => 26,  126 => 25,  123 => 24,  120 => 23,  117 => 22,  115 => 21,  112 => 20,  109 => 19,  106 => 18,  104 => 17,  101 => 16,  98 => 15,  95 => 14,  93 => 13,  90 => 12,  87 => 11,  84 => 10,  82 => 9,  79 => 8,  76 => 7,  73 => 6,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@bolt/_partials/fields/_base.html.twig' %}
{% import '@bolt/_macro/_macro.html.twig' as macro %}

{% block field %}
  {# check disabled #}
  {% if readonly is not defined %}
      {% set readonly = false %}
  {% endif %}
  {# Check form attribute #}
  {% if form is not defined %}
      {% set form = '' %}
  {% endif %}
  {# for timestamps, make sure it's formatted correctly #}
  {% if value.timestamp is defined %}
      {% set value = value|date(format='c') %}
  {% endif %}
  {# set mode #}
  {% if mode is not defined %}
      {% set mode = field.definition.mode|default(false) %}
  {% endif %}
  {# check if we only want the value: valueonly #}
  {% if valueonly is not defined %}
      {% set valueonly = false %}
  {% endif %}

  {% if not valueonly %}
  <editor-date
    :value='{{ value|json_encode }}'
    name='{{ name }}'
    :readonly='{{ readonly|json_encode }}'
    form='{{ form }}'
    mode='{{ mode }}'
    locale='{{user.locale}}'
    labels='{{ { 'toggle': 'editor_date.toggle'|trans }|json_encode }}'
    :required='{{ required|json_encode }}'
    :errormessage='{{ errormessage|json_encode }}'
  ></editor-date>
  {% else %}
      <br>
    {{ value|localedatetime('%B %e, %Y - %H:%M<small>%p</small>') }}
      <small>({{ macro.relative_datetime(value) }})</small>
  {% endif %}
  
{% endblock %}

", "@bolt/_partials/fields/date.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/fields/date.html.twig");
    }
}
