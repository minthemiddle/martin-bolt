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

/* @bolt/content/_fields_aside_summary.html.twig */
class __TwigTemplate_86adda38641578c64b191cf2439a922813291376c84ce5b766474128d875ae40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_fields_aside_summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_fields_aside_summary.html.twig"));

        // line 1
        echo "<hr>
<div class=\"form-fieldsgroup form-fieldsgroup__summary-fields\">
    <ul class=\"summary-fields\">
        <li>
        ";
        // line 5
        $this->loadTemplate("@bolt/_partials/fields/date.html.twig", "@bolt/content/_fields_aside_summary.html.twig", 5)->display(twig_array_merge($context, ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.createdAt"), "name" => "createdAt", "value" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 8, $this->source); })()), "createdAt", [], "any", false, false, false, 8), "valueonly" => true]));
        // line 11
        echo "        </li>

        <li>
        ";
        // line 14
        $this->loadTemplate("@bolt/_partials/fields/date.html.twig", "@bolt/content/_fields_aside_summary.html.twig", 14)->display(twig_array_merge($context, ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.modifiedAt"), "name" => "modifiedAt", "value" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 17, $this->source); })()), "modifiedAt", [], "any", false, false, false, 17), "valueonly" => true]));
        // line 20
        echo "        </li>

        <li>
        ";
        // line 23
        $this->loadTemplate("@bolt/_partials/fields/text.html.twig", "@bolt/content/_fields_aside_summary.html.twig", 23)->display(twig_array_merge($context, ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.id"), "name" => "id", "value" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "valueonly" => true]));
        // line 29
        echo "        </li>
    </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/_fields_aside_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  66 => 26,  65 => 23,  60 => 20,  58 => 17,  57 => 14,  52 => 11,  50 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<hr>
<div class=\"form-fieldsgroup form-fieldsgroup__summary-fields\">
    <ul class=\"summary-fields\">
        <li>
        {% include '@bolt/_partials/fields/date.html.twig' with {
            'label' : 'field.createdAt'|trans,
            'name' : 'createdAt',
            'value' : record.createdAt,
            'valueonly' : true
        } %}
        </li>

        <li>
        {% include '@bolt/_partials/fields/date.html.twig' with {
            'label' : 'field.modifiedAt'|trans,
            'name' : 'modifiedAt',
            'value' : record.modifiedAt,
            'valueonly' : true
        } %}
        </li>

        <li>
        {% include '@bolt/_partials/fields/text.html.twig' with {
            'label' : 'field.id'|trans,
            'name' : 'id',
            'value' : record.id,
            'valueonly' : true
        } %}
        </li>
    </ul>
</div>
", "@bolt/content/_fields_aside_summary.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/_fields_aside_summary.html.twig");
    }
}
