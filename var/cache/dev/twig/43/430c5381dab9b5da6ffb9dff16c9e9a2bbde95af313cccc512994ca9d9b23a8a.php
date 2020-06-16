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

/* @bolt/_partials/fields/text.html.twig */
class __TwigTemplate_a79c4edaf8abe8c24ec7ee687a7d058b879a8d88cead4287ff58adca92d47c18 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/text.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/text.html.twig"));

        // line 4
        if ( !(isset($context["disabled"]) || array_key_exists("disabled", $context))) {
            // line 5
            $context["disabled"] = false;
        }
        // line 9
        if ( !(isset($context["valueonly"]) || array_key_exists("valueonly", $context))) {
            // line 10
            $context["valueonly"] = false;
        }
        // line 14
        if ( !(isset($context["autofocus"]) || array_key_exists("autofocus", $context))) {
            // line 15
            $context["autofocus"] = false;
        }
        // line 1
        $this->parent = $this->loadTemplate("@bolt/_partials/fields/_base.html.twig", "@bolt/_partials/fields/text.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 19
        echo "    ";
        if ( !(isset($context["valueonly"]) || array_key_exists("valueonly", $context) ? $context["valueonly"] : (function () { throw new RuntimeError('Variable "valueonly" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "        <editor-text
            :id='";
            // line 21
            echo twig_escape_filter($this->env, json_encode((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })())), "html", null, true);
            echo "'
            :value=\"";
            // line 22
            echo twig_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })())), "html", null, true);
            echo "\"
            :name='";
            // line 23
            echo twig_escape_filter($this->env, json_encode((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 23, $this->source); })())), "html", null, true);
            echo "'
            :type='";
            // line 24
            echo twig_escape_filter($this->env, json_encode((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 24, $this->source); })())), "html", null, true);
            echo "'
            :disabled='";
            // line 25
            echo twig_escape_filter($this->env, json_encode((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 25, $this->source); })())), "html", null, true);
            echo "'
            :required='";
            // line 26
            echo twig_escape_filter($this->env, json_encode((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 26, $this->source); })())), "html", null, true);
            echo "'
            :readonly='";
            // line 27
            echo twig_escape_filter($this->env, json_encode((isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new RuntimeError('Variable "readonly" does not exist.', 27, $this->source); })())), "html", null, true);
            echo "'
            :errormessage='";
            // line 28
            echo twig_escape_filter($this->env, json_encode((isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 28, $this->source); })())), "html", null, true);
            echo "'
            :pattern='";
            // line 29
            echo twig_escape_filter($this->env, json_encode((isset($context["pattern"]) || array_key_exists("pattern", $context) ? $context["pattern"] : (function () { throw new RuntimeError('Variable "pattern" does not exist.', 29, $this->source); })())), "html", null, true);
            echo "'
            :placeholder='";
            // line 30
            echo twig_escape_filter($this->env, json_encode((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 30, $this->source); })())), "html", null, true);
            echo "'
            :autofocus='";
            // line 31
            echo twig_escape_filter($this->env, json_encode((isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new RuntimeError('Variable "autofocus" does not exist.', 31, $this->source); })())), "html", null, true);
            echo "'
        ></editor-text>
    ";
        } else {
            // line 34
            echo "        <span
            :id='";
            // line 35
            echo twig_escape_filter($this->env, json_encode((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })())), "html", null, true);
            echo "'
            :name='";
            // line 36
            echo twig_escape_filter($this->env, json_encode((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 36, $this->source); })())), "html", null, true);
            echo "'
            class=\"\"
            ";
            // line 38
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 38, $this->source); })())) {
                echo " required ";
            }
            // line 39
            echo "            ";
            if ((isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new RuntimeError('Variable "readonly" does not exist.', 39, $this->source); })())) {
                echo " readonly ";
            }
            // line 40
            echo "        >";
            echo twig_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 40, $this->source); })())), "html", null, true);
            echo "</span>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/fields/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 40,  152 => 39,  148 => 38,  143 => 36,  139 => 35,  136 => 34,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  87 => 20,  84 => 19,  74 => 18,  63 => 1,  60 => 15,  58 => 14,  55 => 10,  53 => 9,  50 => 5,  48 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@bolt/_partials/fields/_base.html.twig' %}

{# check disabled #}
{% if disabled is not defined %}
    {% set disabled = false %}
{% endif %}

{# check if we only want the value: valueonly #}
{% if valueonly is not defined %}
    {% set valueonly = false %}
{% endif %}

{# check autofocus #}
{% if autofocus is not defined %}
    {% set autofocus = false %}
{% endif %}

{% block field %}
    {% if not valueonly %}
        <editor-text
            :id='{{ id|json_encode }}'
            :value=\"{{ value|json_encode }}\"
            :name='{{ name|json_encode }}'
            :type='{{ class|json_encode }}'
            :disabled='{{ disabled|json_encode }}'
            :required='{{ required|json_encode }}'
            :readonly='{{ readonly|json_encode }}'
            :errormessage='{{ errormessage|json_encode }}'
            :pattern='{{ pattern|json_encode }}'
            :placeholder='{{ placeholder|json_encode }}'
            :autofocus='{{ autofocus|json_encode }}'
        ></editor-text>
    {% else %}
        <span
            :id='{{ id|json_encode }}'
            :name='{{ name|json_encode }}'
            class=\"\"
            {% if required %} required {% endif %}
            {% if readonly %} readonly {% endif %}
        >{{ value|json_encode }}</span>
    {% endif %}
{% endblock %}
", "@bolt/_partials/fields/text.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/fields/text.html.twig");
    }
}
