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

/* @bolt/content/_taxonomies.html.twig */
class __TwigTemplate_40c6820af5251f157601d555e5494142febf76aa6886b5059aadb5868819f93b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_taxonomies.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_taxonomies.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 1, $this->source); })()), "definition", [], "any", false, false, false, 1), "taxonomy", [], "any", false, false, false, 1));
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
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
            // line 2
            echo "
        ";
            // line 3
            $context["definition"] = twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 3, $this->source); })()), "get", [0 => ("taxonomies/" . $context["taxonomy"])], "method", false, false, false, 3);
            // line 4
            echo "        ";
            if ((isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 4, $this->source); })())) {
                // line 5
                echo "
            ";
                // line 6
                $context["options"] = $this->extensions['Bolt\Twig\ContentExtension']->taxonomyOptions((isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 6, $this->source); })()));
                // line 7
                echo "            ";
                $context["value"] = $this->extensions['Bolt\Twig\ContentExtension']->taxonomyValues(twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })()), "taxonomies", [], "any", false, false, false, 7), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 7, $this->source); })()));
                // line 8
                echo "
            <div class=\"form-group is-normal\">

                ";
                // line 11
                $this->loadTemplate("@bolt/_partials/fields/_label.html.twig", "@bolt/content/_taxonomies.html.twig", 11)->display(twig_array_merge($context, ["id" => ("taxonomy-" . twig_get_attribute($this->env, $this->source,                 // line 12
(isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 12, $this->source); })()), "slug", [], "any", false, false, false, 12)), "label" => twig_get_attribute($this->env, $this->source,                 // line 13
(isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "required" => twig_get_attribute($this->env, $this->source,                 // line 14
(isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 14, $this->source); })()), "required", [], "any", false, false, false, 14)]));
                // line 16
                echo "
                <div>
                    <editor-select
                            :value=\"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\"
                            :name=\"'taxonomy[";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20), "html", null, true);
                echo "]'\"
                            :id=\"'taxonomy-";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 21, $this->source); })()), "slug", [], "any", false, false, false, 21), "html", null, true);
                echo "'\"
                            :options=\"";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()), "html", null, true);
                echo "\"
                            :multiple=\"";
                // line 23
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 23, $this->source); })()), "multiple", [], "any", false, false, false, 23)) ? ("true") : ("false"));
                echo "\"
                            :taggable=\"";
                // line 24
                echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 24, $this->source); })()), "behaves_like", [], "any", false, false, false, 24), "tags")) ? ("true") : ("false"));
                echo "\"
                            :allowempty=\"";
                // line 25
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 25, $this->source); })()), "required", [], "any", false, false, false, 25)) ? ("false") : ("true"));
                echo "\"
                    ></editor-select>
                </div>

            </div>

        ";
            }
            // line 32
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/_taxonomies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  86 => 16,  84 => 14,  83 => 13,  82 => 12,  81 => 11,  76 => 8,  73 => 7,  71 => 6,  68 => 5,  65 => 4,  63 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for taxonomy in record.definition.taxonomy %}

        {% set definition = config.get('taxonomies/' ~ taxonomy) %}
        {% if definition %}

            {% set options = taxonomy_options(definition) %}
            {% set value = taxonomy_values(record.taxonomies, definition) %}

            <div class=\"form-group is-normal\">

                {% include '@bolt/_partials/fields/_label.html.twig' with {
                    'id': 'taxonomy-' ~ definition.slug,
                    'label': definition.name,
                    'required': definition.required
                } %}

                <div>
                    <editor-select
                            :value=\"{{ value }}\"
                            :name=\"'taxonomy[{{ definition.slug }}]'\"
                            :id=\"'taxonomy-{{ definition.slug }}'\"
                            :options=\"{{ options }}\"
                            :multiple=\"{{ definition.multiple ? 'true' : 'false' }}\"
                            :taggable=\"{{ (definition.behaves_like == 'tags') ? 'true' : 'false' }}\"
                            :allowempty=\"{{ definition.required ? 'false' : 'true' }}\"
                    ></editor-select>
                </div>

            </div>

        {% endif %}

{% endfor %}
", "@bolt/content/_taxonomies.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/_taxonomies.html.twig");
    }
}
