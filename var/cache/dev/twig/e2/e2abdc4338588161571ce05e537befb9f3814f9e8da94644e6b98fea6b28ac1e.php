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

/* @bolt/_partials/fields/slug.html.twig */
class __TwigTemplate_24e44712e0056280766c5e02a087c0d67d63eebfc54a70b066c1738f6fc760a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/slug.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/slug.html.twig"));

        $this->parent = $this->loadTemplate("@bolt/_partials/fields/_base.html.twig", "@bolt/_partials/fields/slug.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 4
        $context["prefix"] = (("/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "definition", [], "any", false, false, false, 4), "singular_slug", [], "any", false, false, false, 4)) . "/");
        // line 5
        echo "    <editor-slug
        :value='";
        // line 6
        echo twig_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "'
        :name='";
        // line 7
        echo twig_escape_filter($this->env, json_encode((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 7, $this->source); })())), "html", null, true);
        echo "'
        :prefix='";
        // line 8
        echo twig_escape_filter($this->env, json_encode((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 8, $this->source); })())), "html", null, true);
        echo "'
        :field-class='";
        // line 9
        echo twig_escape_filter($this->env, json_encode((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 9, $this->source); })())), "html", null, true);
        echo "'
        :required='";
        // line 10
        echo twig_escape_filter($this->env, json_encode((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "'
        :readonly='";
        // line 11
        echo twig_escape_filter($this->env, json_encode((isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new RuntimeError('Variable "readonly" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "'
        :generate='";
        // line 12
        echo twig_escape_filter($this->env, json_encode(twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), "slugUseFields", [], "any", false, false, false, 12), ",")), "html", null, true);
        echo "'
        :errormessage='";
        // line 13
        echo twig_escape_filter($this->env, json_encode((isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 13, $this->source); })())), "html", null, true);
        echo "'
        :pattern='";
        // line 14
        echo twig_escape_filter($this->env, json_encode((isset($context["pattern"]) || array_key_exists("pattern", $context) ? $context["pattern"] : (function () { throw new RuntimeError('Variable "pattern" does not exist.', 14, $this->source); })())), "html", null, true);
        echo "'
        :labels='";
        // line 15
        echo twig_escape_filter($this->env, json_encode(["button_unlocked" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("slug.button_unlocked"), "button_locked" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("slug.button_locked"), "button_edit" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("slug.button_edit"), "generate_from" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("slug.generate_from")]), "html", null, true);
        // line 20
        echo "'
    ></editor-slug>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/fields/slug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  109 => 15,  105 => 14,  101 => 13,  97 => 12,  93 => 11,  89 => 10,  85 => 9,  81 => 8,  77 => 7,  73 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@bolt/_partials/fields/_base.html.twig' %}

{% block field %}
{% set prefix = '/' ~ record.definition.singular_slug ~ '/' %}
    <editor-slug
        :value='{{ value|json_encode }}'
        :name='{{ name|json_encode }}'
        :prefix='{{ prefix|json_encode }}'
        :field-class='{{ class|json_encode }}'
        :required='{{ required|json_encode }}'
        :readonly='{{ readonly|json_encode }}'
        :generate='{{ field.slugUseFields|join(',')|json_encode }}'
        :errormessage='{{ errormessage|json_encode }}'
        :pattern='{{ pattern|json_encode }}'
        :labels='{{ {
            'button_unlocked': 'slug.button_unlocked'|trans,
            'button_locked': 'slug.button_locked'|trans,
            'button_edit': 'slug.button_edit'|trans,
            'generate_from': 'slug.generate_from'|trans,
        }|json_encode }}'
    ></editor-slug>
{% endblock %}
", "@bolt/_partials/fields/slug.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/fields/slug.html.twig");
    }
}
