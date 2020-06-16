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

/* @bolt/finder/editfile.html.twig */
class __TwigTemplate_4a5bce9bbbebb4bb3db4b62eefb0514490f6694f53f5f866b91ac59a0488ddbc extends Template
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
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/finder/editfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/finder/editfile.html.twig"));

        // line 2
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@bolt/_macro/_macro.html.twig", "@bolt/finder/editfile.html.twig", 2)->unwrap();
        // line 4
        $context["extension"] = twig_last($this->env, twig_split_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 4, $this->source); })()), "."));
        // line 5
        $context["modes"] = ["md" => "markdown", "markdown" => "markdown", "htm" => "html", "html" => "html", "yml" => "yaml", "yaml" => "yaml", "twig" => "twig", "css" => "css", "js" => "javascript", "php" => "php"];
        // line 17
        $context["mode"] = ((twig_get_attribute($this->env, $this->source, ($context["modes"] ?? null), (isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 17, $this->source); })()), [], "array", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["modes"] ?? null), (isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 17, $this->source); })()), [], "array", false, false, false, 17), "")) : (""));
        // line 1
        $this->parent = $this->loadTemplate("@bolt/_base/layout.html.twig", "@bolt/finder/editfile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_shoulder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoulder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoulder"));

        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("caption.edit_file"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 25
        echo "    ";
        echo twig_call_macro($macros["macro"], "macro_icon", ["file-code"], 25, $context, $this->getSourceContext());
        echo "
    ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("caption.path"), "html", null, true);
        echo ": <code>";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "/<strong>";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 26, $this->source); })()), "/")), "html", null, true);
        echo "</strong></code>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 30
        echo "    <form method=\"post\">
        <input type=\"hidden\" name=\"file\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"location\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("editfile"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <textarea name=\"editfile\" id=\"editfile_textarea\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <button class=\"btn btn-primary\" name=\"save\" type=\"submit\" ";
        // line 38
        if ( !(isset($context["writable"]) || array_key_exists("writable", $context) ? $context["writable"] : (function () { throw new RuntimeError('Variable "writable" does not exist.', 38, $this->source); })())) {
            echo "disabled";
        }
        echo ">";
        echo twig_call_macro($macros["macro"], "macro_icon", ["save"], 38, $context, $this->getSourceContext());
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        echo "</button>
            ";
        // line 39
        if ( !(isset($context["writable"]) || array_key_exists("writable", $context) ? $context["writable"] : (function () { throw new RuntimeError('Variable "writable" does not exist.', 39, $this->source); })())) {
            echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("editfile.target_not_writable");
        }
        // line 40
        echo "        </div>
    </div>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    var editfile_textarea = document.getElementById('editfile_textarea');
    var myCodeMirror = CodeMirror.fromTextArea(editfile_textarea, {
        lineNumbers: true,
        mode: '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "'
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/finder/editfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 52,  193 => 47,  183 => 46,  169 => 40,  165 => 39,  156 => 38,  150 => 35,  145 => 33,  141 => 32,  137 => 31,  134 => 30,  124 => 29,  108 => 26,  103 => 25,  93 => 24,  80 => 21,  70 => 20,  59 => 1,  57 => 17,  55 => 5,  53 => 4,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@bolt/_base/layout.html.twig' %}
{% import '@bolt/_macro/_macro.html.twig' as macro %}

{% set extension = file|split('.')|last %}
{% set modes = {
    'md': 'markdown',
    'markdown': 'markdown',
    'htm': 'html',
    'html': 'html',
    'yml': 'yaml',
    'yaml': 'yaml',
    'twig': 'twig',
    'css': 'css',
    'js': 'javascript',
    'php': 'php'
} %}
{% set mode = modes[extension]|default('') %}

{# The 'title' and 'shoulder' blocks are the main heading of the page. #}
{% block shoulder %}
    {{ 'caption.edit_file'|trans }}
{% endblock shoulder %}

{% block title %}
    {{ macro.icon('file-code') }}
    {{ 'caption.path'|trans }}: <code>{{ location }}/<strong>{{ file|split('/')|last}}</strong></code>
{% endblock %}

{% block main %}
    <form method=\"post\">
        <input type=\"hidden\" name=\"file\" value=\"{{ file }}\">
        <input type=\"hidden\" name=\"location\" value=\"{{ location }}\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('editfile') }}\">
        <div class=\"form-group\">
            <textarea name=\"editfile\" id=\"editfile_textarea\">{{ contents }}</textarea>
        </div>
        <div class=\"form-group\">
            <button class=\"btn btn-primary\" name=\"save\" type=\"submit\" {% if not writable %}disabled{% endif %}>{{ macro.icon('save') }}{{ 'action.save'|trans }}</button>
            {% if not writable %}{{ __('editfile.target_not_writable') }}{% endif %}
        </div>
    </div>
    </form>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    var editfile_textarea = document.getElementById('editfile_textarea');
    var myCodeMirror = CodeMirror.fromTextArea(editfile_textarea, {
        lineNumbers: true,
        mode: '{{ mode }}'
    });
</script>
{% endblock %}
", "@bolt/finder/editfile.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/finder/editfile.html.twig");
    }
}
