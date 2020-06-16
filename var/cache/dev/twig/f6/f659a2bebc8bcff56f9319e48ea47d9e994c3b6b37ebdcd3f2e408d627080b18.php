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

/* @bolt/content/_fields.html.twig */
class __TwigTemplate_db8060bb62046624488ced5de96cd324bef0a9ca675cbd8ec4d7c090883c136a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_fields.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 1, $this->source); })()), function ($__group__) use ($context, $macros) { $context["group"] = $__group__; return 0 !== twig_compare($context["group"], "Relations"); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 2
            echo "
    <div class=\"tab-pane ";
            // line 3
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 3)) {
                echo "show active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\TextExtension']->slug($context["group"]), "html", null, true);
            echo "\" role=\"tabpanel\"
         aria-labelledby=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\TextExtension']->slug($context["group"]), "html", null, true);
            echo "-tab\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 5, $this->source); })()), "definition", [], "any", false, false, false, 5), "fields", [], "any", false, false, false, 5), function ($__fielddefinition__) use ($context, $macros) { $context["fielddefinition"] = $__fielddefinition__; return 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["fielddefinition"], "group", [], "any", false, false, false, 5), $context["group"]); }));
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
            foreach ($context['_seq'] as $context["key"] => $context["fielddefinition"]) {
                // line 6
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 6, $this->source); })()), "hasField", [0 => $context["key"]], "method", false, false, false, 6)) {
                    // line 7
                    echo "                ";
                    $context["field"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })()), "getField", [0 => $context["key"]], "method", false, false, false, 7);
                    // line 8
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "isTranslatable", [], "any", false, false, false, 8)) {
                        // line 9
                        echo "                    ";
                        // line 10
                        echo "                    ";
                        $context["field"] = $this->extensions['Bolt\Twig\TranslatableExtension']->findTranslated((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), (isset($context["currentlocale"]) || array_key_exists("currentlocale", $context) ? $context["currentlocale"] : (function () { throw new RuntimeError('Variable "currentlocale" does not exist.', 10, $this->source); })()));
                        // line 11
                        echo "                ";
                    } else {
                        // line 12
                        echo "                    ";
                        // line 13
                        echo "                    ";
                        $context["field"] = $this->extensions['Bolt\Twig\TranslatableExtension']->findTranslated((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 13, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 13, $this->source); })()), "defaultLocale", [], "any", false, false, false, 13));
                        // line 14
                        echo "                ";
                    }
                    // line 15
                    echo "            ";
                } else {
                    // line 16
                    echo "                ";
                    $context["field"] = $this->extensions['Bolt\Twig\FieldExtension']->fieldFactory($context["key"], $context["fielddefinition"]);
                    // line 17
                    echo "            ";
                }
                // line 18
                echo "
            ";
                // line 19
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 19, $this->source); })()), "definition", [], "any", false, false, false, 19), "hidden", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                ";
                    $this->loadTemplate([0 => (("@bolt/_partials/fields/" . twig_get_attribute($this->env, $this->source,                     // line 21
$context["fielddefinition"], "type", [], "any", false, false, false, 21)) . ".html.twig"), 1 => "@bolt/_partials/fields/generic.html.twig"], "@bolt/content/_fields.html.twig", 20)->display(twig_array_merge($context, ["field" =>                     // line 23
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 23, $this->source); })())]));
                    // line 24
                    echo "            ";
                }
                // line 25
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['fielddefinition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 27,  139 => 25,  136 => 24,  134 => 23,  133 => 21,  131 => 20,  129 => 19,  126 => 18,  123 => 17,  120 => 16,  117 => 15,  114 => 14,  111 => 13,  109 => 12,  106 => 11,  103 => 10,  101 => 9,  98 => 8,  95 => 7,  92 => 6,  75 => 5,  71 => 4,  63 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for group in groups|filter(group => group != 'Relations') %}

    <div class=\"tab-pane {% if loop.first %}show active{% endif %}\" id=\"{{ group|slug }}\" role=\"tabpanel\"
         aria-labelledby=\"{{ group|slug }}-tab\">
        {% for key, fielddefinition in record.definition.fields|filter(fielddefinition => fielddefinition.group == group) %}
            {% if record.hasField(key) %}
                {% set field = record.getField(key) %}
                {% if field.isTranslatable %}
                    {# If the field is translatable, we want the translated value in the current locale #}
                    {% set field = field|translated(currentlocale) %}
                {% else %}
                    {# Otherwise, we want the value in the default locale, explicitly in case it is something else #}
                    {% set field = field|translated(field.defaultLocale) %}
                {% endif %}
            {% else %}
                {% set field = field_factory(key, fielddefinition) %}
            {% endif %}

            {% if not field.definition.hidden %}
                {% include [
                    '@bolt/_partials/fields/' ~ fielddefinition.type ~ '.html.twig',
                    '@bolt/_partials/fields/generic.html.twig'
                    ] with { 'field' : field } %}
            {% endif %}

        {% endfor %}
    </div>
{% endfor %}
", "@bolt/content/_fields.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/_fields.html.twig");
    }
}
