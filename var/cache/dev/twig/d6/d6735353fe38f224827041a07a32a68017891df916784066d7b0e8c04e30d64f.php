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

/* @bolt/content/_fields_aside.html.twig */
class __TwigTemplate_0d4912e8f3b1cec9884f50f40fae7deee26acba347993499ebf994620a3afbae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_fields_aside.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_fields_aside.html.twig"));

        // line 1
        echo "<div class=\"form-fieldsgroup form-fieldsgroup__editable-fields\">

    ";
        // line 3
        $this->loadTemplate("@bolt/_partials/fields/select.html.twig", "@bolt/content/_fields_aside.html.twig", 3)->display(twig_array_merge($context, ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.status"), "name" => "status", "value" => [0 => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 6, $this->source); })()), "status", [], "any", false, false, false, 6)], "options" => $this->extensions['Bolt\Twig\ContentExtension']->statusOptions(        // line 7
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })())), "form" => "editcontent", "required" => true]));
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@bolt/_partials/fields/date.html.twig", "@bolt/content/_fields_aside.html.twig", 12)->display(twig_array_merge($context, ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.publishedAt"), "name" => "publishedAt", "value" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 15, $this->source); })()), "publishedAt", [], "any", false, false, false, 15), "mode" => "datetime", "form" => "editcontent"]));
        // line 19
        echo "
    ";
        // line 20
        $this->loadTemplate("@bolt/_partials/fields/date.html.twig", "@bolt/content/_fields_aside.html.twig", 20)->display(twig_array_merge($context, ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.depublishedAt"), "name" => "depublishedAt", "value" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 23, $this->source); })()), "depublishedAt", [], "any", false, false, false, 23), "mode" => "datetime", "form" => "editcontent"]));
        // line 27
        echo "
    ";
        // line 28
        $this->loadTemplate("@bolt/_partials/fields/text.html.twig", "@bolt/content/_fields_aside.html.twig", 28)->display(twig_array_merge($context, ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.author"), "name" => "author", "value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["record"] ?? null), "author", [], "any", false, true, false, 31), "displayName", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "author", [], "any", false, true, false, 31), "displayName", [], "any", false, false, false, 31), "undefined")) : ("undefined")), "disabled" => true]));
        // line 34
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/_fields_aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  67 => 31,  66 => 28,  63 => 27,  61 => 23,  60 => 20,  57 => 19,  55 => 15,  54 => 12,  51 => 11,  49 => 7,  48 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-fieldsgroup form-fieldsgroup__editable-fields\">

    {% include '@bolt/_partials/fields/select.html.twig' with {
        'label' : 'field.status'|trans,
        'name' : 'status',
        'value' : [record.status],
        'options' : record|status_options,
        'form' : 'editcontent',
        'required' : true
    } %}

    {% include '@bolt/_partials/fields/date.html.twig' with {
        'label' : 'field.publishedAt'|trans,
        'name' : 'publishedAt',
        'value' : record.publishedAt,
        'mode' : 'datetime',
        'form' : 'editcontent'
    } %}

    {% include '@bolt/_partials/fields/date.html.twig' with {
        'label' : 'field.depublishedAt'|trans,
        'name' : 'depublishedAt',
        'value' : record.depublishedAt,
        'mode' : 'datetime',
        'form' : 'editcontent'
    } %}

    {% include '@bolt/_partials/fields/text.html.twig' with {
        'label' : 'field.author'|trans,
        'name' : 'author',
        'value' : record.author.displayName|default('undefined'),
        'disabled' : true
    } %}

</div>
", "@bolt/content/_fields_aside.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/_fields_aside.html.twig");
    }
}
