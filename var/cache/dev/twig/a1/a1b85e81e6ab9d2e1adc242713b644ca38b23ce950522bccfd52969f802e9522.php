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

/* @bolt/_partials/fields/select.html.twig */
class __TwigTemplate_22e08769bbbdc8b1f8488e8deeedb1dcf0b7e847493db4a2e4a825cfe65916f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/select.html.twig"));

        // line 10
        if ( !(isset($context["options"]) || array_key_exists("options", $context))) {
            // line 11
            $context["options"] = $this->extensions['Bolt\Twig\ContentExtension']->selectOptions((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()));
        }
        // line 14
        $context["multiple"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 14), "get", [0 => "multiple"], "method", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 14), "get", [0 => "multiple"], "method", false, false, false, 14))) : (""))) ? ("true") : ("false"));
        // line 1
        $this->parent = $this->loadTemplate("@bolt/_partials/fields/_base.html.twig", "@bolt/_partials/fields/select.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 17
        echo "    <editor-select
        :classname=\"";
        // line 18
        echo twig_escape_filter($this->env, json_encode("wide-options"), "html", null, true);
        echo "\"
        :value=\"";
        // line 19
        echo twig_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "\"
        :name='";
        // line 20
        echo twig_escape_filter($this->env, json_encode((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 20, $this->source); })())), "html", null, true);
        echo "'
        :id='";
        // line 21
        echo twig_escape_filter($this->env, json_encode((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })())), "html", null, true);
        echo "'
        :options=\"";
        // line 22
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "\"
        :form='";
        // line 23
        echo twig_escape_filter($this->env, json_encode((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })())), "html", null, true);
        echo "'
        :multiple=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\"
        :readonly=\"";
        // line 25
        echo twig_escape_filter($this->env, json_encode((isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new RuntimeError('Variable "readonly" does not exist.', 25, $this->source); })())), "html", null, true);
        echo "\"
        :errormessage='";
        // line 26
        echo twig_escape_filter($this->env, json_encode((isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 26, $this->source); })())), "html", null, true);
        echo "'
        :allowempty=\"";
        // line 27
        echo (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 27, $this->source); })())) ? ("false") : ("true"));
        echo "\"
    ></editor-select>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/fields/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  76 => 17,  66 => 16,  55 => 1,  53 => 14,  50 => 11,  48 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@bolt/_partials/fields/_base.html.twig' %}

{# On top of the attributes that get set/defined in `_base.html.twig`,
   The Select fields has three additional attributes:

     - options: The actual options that are available in the select
     - multiple: A boolean to set whether or not we allow multiple selections
 #}

{% if options is not defined %}
    {% set options = select_options(field) %}
{% endif %}

{% set multiple = field.definition.get('multiple')|default ? 'true' : 'false' %}

{% block field %}
    <editor-select
        :classname=\"{{ \"wide-options\"|json_encode }}\"
        :value=\"{{ value|json_encode }}\"
        :name='{{ name|json_encode }}'
        :id='{{ id|json_encode }}'
        :options=\"{{ options|json_encode }}\"
        :form='{{ form|json_encode }}'
        :multiple=\"{{ multiple }}\"
        :readonly=\"{{ readonly|json_encode }}\"
        :errormessage='{{ errormessage|json_encode }}'
        :allowempty=\"{{ required ? 'false' : 'true' }}\"
    ></editor-select>
{% endblock %}
", "@bolt/_partials/fields/select.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/fields/select.html.twig");
    }
}
