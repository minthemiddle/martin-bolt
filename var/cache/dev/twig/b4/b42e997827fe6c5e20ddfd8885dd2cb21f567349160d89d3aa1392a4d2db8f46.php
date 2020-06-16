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

/* @bolt/content/_relationships.html.twig */
class __TwigTemplate_f679c76d242e8f098aad6c5832669a86ebbd0c980835d55880f2397e3e357a92 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_relationships.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_relationships.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 2, $this->source); })()), "definition", [], "any", false, false, false, 2), "relations", [], "any", false, false, false, 2));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["contentType"] => $context["relation"]) {
            // line 3
            echo "
    ";
            // line 4
            $context["options"] = $this->extensions['Bolt\Twig\RelatedExtension']->getRelatedOptions($context["contentType"], ((twig_get_attribute($this->env, $this->source, $context["relation"], "order", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["relation"], "order", [], "any", false, false, false, 4))) : ("")), ((twig_get_attribute($this->env, $this->source, $context["relation"], "format", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["relation"], "format", [], "any", false, false, false, 4))) : ("")), twig_get_attribute($this->env, $this->source, $context["relation"], "required", [], "any", false, false, false, 4));
            // line 5
            echo "    ";
            $context["value"] = $this->extensions['Bolt\Twig\RelatedExtension']->getRelatedValues((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 5, $this->source); })()), $context["contentType"]);
            // line 6
            echo "
    <div class=\"form-group is-normal\">

        ";
            // line 9
            $this->loadTemplate("@bolt/_partials/fields/_label.html.twig", "@bolt/content/_relationships.html.twig", 9)->display(twig_array_merge($context, ["id" => ("relationship-" .             // line 10
$context["contentType"]), "label" => twig_get_attribute($this->env, $this->source,             // line 11
$context["relation"], "label", [], "any", false, false, false, 11), "required" => twig_get_attribute($this->env, $this->source,             // line 12
$context["relation"], "required", [], "any", false, false, false, 12)]));
            // line 14
            echo "
        <div>
            <editor-select
                    :value=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\"
                    :name=\"'relationship[";
            // line 18
            echo twig_escape_filter($this->env, $context["contentType"], "html", null, true);
            echo "]'\"
                    :id=\"'relationship-";
            // line 19
            echo twig_escape_filter($this->env, $context["contentType"], "html", null, true);
            echo "'\"
                    :options=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\"
                    :multiple=\"";
            // line 21
            echo ((twig_get_attribute($this->env, $this->source, $context["relation"], "multiple", [], "any", false, false, false, 21)) ? ("true") : ("false"));
            echo "\"
                    :taggable=false
                    :allowempty=\"";
            // line 23
            echo ((twig_get_attribute($this->env, $this->source, $context["relation"], "required", [], "any", false, false, false, 23)) ? ("false") : ("true"));
            echo "\"
            ></editor-select>
        </div>

    </div>

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contentType'], $context['relation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/_relationships.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  107 => 23,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  81 => 14,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  71 => 6,  68 => 5,  66 => 4,  63 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for contentType, relation in record.definition.relations %}

    {% set options = related_options(contentType, relation.order|default(), relation.format|default(), relation.required) %}
    {% set value = record|related_values(contentType) %}

    <div class=\"form-group is-normal\">

        {% include '@bolt/_partials/fields/_label.html.twig' with {
            'id': 'relationship-' ~ contentType,
            'label': relation.label,
            'required': relation.required
        } %}

        <div>
            <editor-select
                    :value=\"{{ value }}\"
                    :name=\"'relationship[{{ contentType }}]'\"
                    :id=\"'relationship-{{ contentType }}'\"
                    :options=\"{{ options }}\"
                    :multiple=\"{{ relation.multiple ? 'true' : 'false' }}\"
                    :taggable=false
                    :allowempty=\"{{ relation.required ? 'false' : 'true' }}\"
            ></editor-select>
        </div>

    </div>

{% endfor %}

", "@bolt/content/_relationships.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/_relationships.html.twig");
    }
}
