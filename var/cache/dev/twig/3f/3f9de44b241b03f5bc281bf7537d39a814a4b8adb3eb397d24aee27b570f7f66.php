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

/* @bolt/content/_localeswitcher.html.twig */
class __TwigTemplate_317fb4e4b458237790a1d67ccb02cef9f84dff3f2a665ea8f1c5cf488cd95e5b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_localeswitcher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_localeswitcher.html.twig"));

        // line 1
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@bolt/_macro/_macro.html.twig", "@bolt/content/_localeswitcher.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3) && (isset($context["currentlocale"]) || array_key_exists("currentlocale", $context) ? $context["currentlocale"] : (function () { throw new RuntimeError('Variable "currentlocale" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <div class=\"card mb-3\">
        <div class=\"card-header\">
            ";
            // line 6
            echo twig_call_macro($macros["macro"], "macro_icon", ["language"], 6, $context, $this->getSourceContext());
            echo "
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.current_locale"), "html", null, true);
            echo ":
            ";
            // line 8
            echo $this->extensions['Bolt\Twig\LocaleExtension']->flag((isset($context["currentlocale"]) || array_key_exists("currentlocale", $context) ? $context["currentlocale"] : (function () { throw new RuntimeError('Variable "currentlocale" does not exist.', 8, $this->source); })()));
            echo "<b>";
            echo twig_escape_filter($this->env, (isset($context["currentlocale"]) || array_key_exists("currentlocale", $context) ? $context["currentlocale"] : (function () { throw new RuntimeError('Variable "currentlocale" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</b>
        </div>
        <div class=\"card-body\">

            <general-language
                    label=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.switch_to_locale"), "html", null, true);
            echo ":\"
                    current=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["currentlocale"]) || array_key_exists("currentlocale", $context) ? $context["currentlocale"] : (function () { throw new RuntimeError('Variable "currentlocale" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\"
                    :locales=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\LocaleExtension']->getLocales($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 15, $this->source); })())), "html", null, true);
            echo "\"
            ></general-language>

            ";
            // line 18
            echo twig_call_macro($macros["macro"], "macro_buttonlink", ["localeswitcher.button_info", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_content_edit_locales", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "info-circle", "tertiary btn-sm"], 18, $context, $this->getSourceContext());
            echo "

        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/_localeswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  80 => 15,  76 => 14,  72 => 13,  62 => 8,  58 => 7,  54 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@bolt/_macro/_macro.html.twig' as macro %}

{% if record.id and currentlocale %}
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            {{ macro.icon('language') }}
            {{ 'field.current_locale'|trans }}:
            {{ flag(currentlocale) }}<b>{{ currentlocale }}</b>
        </div>
        <div class=\"card-body\">

            <general-language
                    label=\"{{ 'field.switch_to_locale'|trans }}:\"
                    current=\"{{ currentlocale }}\"
                    :locales=\"{{ locales(locales) }}\"
            ></general-language>

            {{ macro.buttonlink('localeswitcher.button_info', path('bolt_content_edit_locales', {'id': record.id}),  'info-circle', 'tertiary btn-sm') }}

        </div>
    </div>
{% endif %}
", "@bolt/content/_localeswitcher.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/_localeswitcher.html.twig");
    }
}
