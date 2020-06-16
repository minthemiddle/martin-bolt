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

/* @bolt/content/edit.html.twig */
class __TwigTemplate_345ff3743a37e58098ae20c398835906792a059713df1c75a2b8c89583c4e7de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'shoulder' => [$this, 'block_shoulder'],
            'title' => [$this, 'block_title'],
            'vue_id' => [$this, 'block_vue_id'],
            'topsection' => [$this, 'block_topsection'],
            'main' => [$this, 'block_main'],
            'aside' => [$this, 'block_aside'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@bolt/_base/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/edit.html.twig"));

        // line 2
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@bolt/_macro/_macro.html.twig", "@bolt/content/edit.html.twig", 2)->unwrap();
        // line 4
        $context["alltypes"] = [0 => "select"];
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 5, $this->source); })()), "definition", [], "any", false, false, false, 5), "fields", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["key"] => $context["fielddefinition"]) {
            // line 6
            $context["alltypes"] = twig_array_merge((isset($context["alltypes"]) || array_key_exists("alltypes", $context) ? $context["alltypes"] : (function () { throw new RuntimeError('Variable "alltypes" does not exist.', 6, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["fielddefinition"], "type", [], "any", false, false, false, 6)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['fielddefinition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        $context["displayTitle"] = _twig_default_filter($this->extensions['Bolt\Twig\ContentExtension']->getTitle((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 8, $this->source); })()), (isset($context["currentlocale"]) || array_key_exists("currentlocale", $context) ? $context["currentlocale"] : (function () { throw new RuntimeError('Variable "currentlocale" does not exist.', 8, $this->source); })())), ((twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)) ? ($this->extensions['Bolt\Twig\LocaleExtension']->translate("caption.untitled_contenttype", ["%contenttype%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 9, $this->source); })()), "definition", [], "any", false, false, false, 9), "singular_name", [], "any", false, false, false, 9)])) : ($this->extensions['Bolt\Twig\LocaleExtension']->translate("caption.new_contenttype", ["%contenttype%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 10, $this->source); })()), "definition", [], "any", false, false, false, 10), "singular_name", [], "any", false, false, false, 10)]))));
        // line 1
        $this->parent = $this->loadTemplate("@bolt/_base/layout.html.twig", "@bolt/content/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_shoulder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoulder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoulder"));

        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14), "bolt_content_duplicate")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("caption.duplicate")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("caption.edit"))), "html", null, true);
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 15, $this->source); })()), "definition", [], "any", false, false, false, 15), "singular_name", [], "any", false, false, false, 15), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 19
        echo "    ";
        echo $this->extensions['Bolt\Twig\ContentExtension']->icon((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 19, $this->source); })()));
        echo "
    ";
        // line 20
        echo $this->extensions['Bolt\Twig\ContentExtension']->getExcerpt((isset($context["displayTitle"]) || array_key_exists("displayTitle", $context) ? $context["displayTitle"] : (function () { throw new RuntimeError('Variable "displayTitle" does not exist.', 20, $this->source); })()), 50);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_vue_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue_id"));

        echo "editor";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_topsection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topsection"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topsection"));

        // line 27
        echo "
";
        // line 29
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 33
        echo "
    <form method=\"post\" id=\"editcontent\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("editrecord"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_edit_locale\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["currentlocale"]) || array_key_exists("currentlocale", $context) ? $context["currentlocale"] : (function () { throw new RuntimeError('Variable "currentlocale" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 40
        echo "        <input type=\"submit\" form=\"editcontent\" style=\"display: none;\" value=\"__('action.save')\">

        ";
        // line 42
        $context["groups"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 42, $this->source); })()), "definition", [], "any", false, false, false, 42), "groups", [], "any", false, false, false, 42);
        // line 43
        echo "
        ";
        // line 44
        $this->loadTemplate("@bolt/content/_tabs.html.twig", "@bolt/content/edit.html.twig", 44)->display($context);
        // line 45
        echo "
        <div class=\"tab-content\" id=\"nav-tabContent\">

        ";
        // line 48
        $this->loadTemplate("@bolt/content/_fields.html.twig", "@bolt/content/edit.html.twig", 48)->display($context);
        // line 49
        echo "
            <div class=\"tab-pane\" id=\"relations\" role=\"tabpanel\" aria-labelledby=\"relations-tab\">

                ";
        // line 52
        $this->loadTemplate("@bolt/content/_relationships.html.twig", "@bolt/content/edit.html.twig", 52)->display($context);
        // line 53
        echo "
                ";
        // line 54
        $this->loadTemplate("@bolt/content/_taxonomies.html.twig", "@bolt/content/edit.html.twig", 54)->display($context);
        // line 55
        echo "            </div>

        </div>

        <hr>
        ";
        // line 60
        $this->loadTemplate("@bolt/content/_buttons.html.twig", "@bolt/content/edit.html.twig", 60)->display($context);
        // line 61
        echo "
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        // line 67
        echo "
    <div id=\"metadata\">
        <form class=\"ui form\">

            <div class=\"card mb-3\">
                <div class=\"card-header\">
                    ";
        // line 73
        echo twig_call_macro($macros["macro"], "macro_icon", ["star"], 73, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.primary_actions"), "html", null, true);
        echo "
                </div>
                <div class=\"card-body\">
                  ";
        // line 76
        $this->loadTemplate("@bolt/content/_buttons.html.twig", "@bolt/content/edit.html.twig", 76)->display(twig_array_merge($context, ["status" => true]));
        // line 77
        echo "                </div>
            </div>

            ";
        // line 80
        $this->loadTemplate("@bolt/content/_localeswitcher.html.twig", "@bolt/content/edit.html.twig", 80)->display($context);
        // line 81
        echo "
            <div class=\"card\">
                <div class=\"card-header\">
                    ";
        // line 84
        echo twig_call_macro($macros["macro"], "macro_icon", ["sliders-h"], 84, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.options"), "html", null, true);
        echo "
                </div>
                <div class=\"card-body\">
                    ";
        // line 87
        $this->loadTemplate("@bolt/content/_fields_aside.html.twig", "@bolt/content/edit.html.twig", 87)->display($context);
        // line 88
        echo "                    ";
        $this->loadTemplate("@bolt/content/_fields_aside_summary.html.twig", "@bolt/content/edit.html.twig", 88)->display($context);
        // line 89
        echo "                </div>
            </div>

        </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 89,  304 => 88,  302 => 87,  294 => 84,  289 => 81,  287 => 80,  282 => 77,  280 => 76,  272 => 73,  264 => 67,  254 => 66,  241 => 61,  239 => 60,  232 => 55,  230 => 54,  227 => 53,  225 => 52,  220 => 49,  218 => 48,  213 => 45,  211 => 44,  208 => 43,  206 => 42,  202 => 40,  198 => 37,  194 => 36,  189 => 33,  179 => 32,  168 => 29,  165 => 27,  155 => 26,  136 => 23,  124 => 20,  119 => 19,  109 => 18,  97 => 15,  92 => 14,  82 => 13,  71 => 1,  69 => 10,  68 => 9,  67 => 8,  61 => 6,  57 => 5,  55 => 4,  53 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@bolt/_base/layout.html.twig' %}
{% import '@bolt/_macro/_macro.html.twig' as macro %}

{% set alltypes = ['select'] %}
{% for key, fielddefinition in record.definition.fields %}
    {% set alltypes = alltypes|merge([fielddefinition.type]) %}
{% endfor %}
{% set displayTitle = record|title(currentlocale)|default(record.id ?
    __('caption.untitled_contenttype', {'%contenttype%': record.definition.singular_name}) :
    __('caption.new_contenttype', {'%contenttype%': record.definition.singular_name}) ) %}

{# The 'title' and 'shoulder' blocks are the main heading of the page. #}
{% block shoulder %}
    {{ (app.request.get('_route') == 'bolt_content_duplicate') ? 'caption.duplicate'|trans : 'caption.edit'|trans }}
    {{ record.definition.singular_name }}
{% endblock shoulder %}

{% block title %}
    {{ icon(record) }}
    {{ displayTitle|excerpt(50) }}
{% endblock %}

{% block vue_id 'editor' %}

{# This 'topsection' gets output _before_ the main form, allowing `dump()`, without breaking Vue #}
{% block topsection %}

{#    {{ dump(record) }}#}

{% endblock %}

{% block main %}

    <form method=\"post\" id=\"editcontent\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('editrecord') }}\">
        <input type=\"hidden\" name=\"_edit_locale\" value=\"{{ currentlocale }}\">
        {# To prevent confusion in browsers about which submit to use when pressing 'enter', we
        provide this _input_ here. All browsers will use this as a default. See #454 on Github. #}
        <input type=\"submit\" form=\"editcontent\" style=\"display: none;\" value=\"__('action.save')\">

        {% set groups = record.definition.groups %}

        {% include '@bolt/content/_tabs.html.twig' %}

        <div class=\"tab-content\" id=\"nav-tabContent\">

        {% include '@bolt/content/_fields.html.twig' %}

            <div class=\"tab-pane\" id=\"relations\" role=\"tabpanel\" aria-labelledby=\"relations-tab\">

                {% include '@bolt/content/_relationships.html.twig' %}

                {% include '@bolt/content/_taxonomies.html.twig' %}
            </div>

        </div>

        <hr>
        {% include '@bolt/content/_buttons.html.twig' %}

    </form>

{% endblock %}

{% block aside %}

    <div id=\"metadata\">
        <form class=\"ui form\">

            <div class=\"card mb-3\">
                <div class=\"card-header\">
                    {{ macro.icon('star') }} {{ 'title.primary_actions'|trans }}
                </div>
                <div class=\"card-body\">
                  {% include '@bolt/content/_buttons.html.twig' with {'status': true}  %}
                </div>
            </div>

            {% include '@bolt/content/_localeswitcher.html.twig' %}

            <div class=\"card\">
                <div class=\"card-header\">
                    {{ macro.icon('sliders-h') }} {{ 'title.options'|trans }}
                </div>
                <div class=\"card-body\">
                    {% include '@bolt/content/_fields_aside.html.twig' %}
                    {% include '@bolt/content/_fields_aside_summary.html.twig' %}
                </div>
            </div>

        </form>
    </div>

{% endblock aside %}
", "@bolt/content/edit.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/edit.html.twig");
    }
}
