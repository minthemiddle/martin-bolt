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

/* @bolt/_partials/fields/image.html.twig */
class __TwigTemplate_21a2b8d47a449d498b45c74330215ae86c1b44f1f03b4ede1a7854eea73cff3d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/image.html.twig"));

        // line 3
        $context["extensions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 3), "get", [0 => "extensions"], "method", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 3), "get", [0 => "extensions"], "method", false, false, false, 3), "")) : (""));
        // line 4
        ob_start();
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("upload.allow_file_types"), "html", null, true);
        echo ": <code>";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["extensions"]) || array_key_exists("extensions", $context) ? $context["extensions"] : (function () { throw new RuntimeError('Variable "extensions" does not exist.', 5, $this->source); })()), "</code>, <code>"), "html", null, true);
        echo "</code><br>
";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("upload.max_size"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\TextExtension']->formatBytes(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "maxupload", [], "any", false, false, false, 6)), "html", null, true);
        echo "
";
        $context["info"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@bolt/_partials/fields/_base.html.twig", "@bolt/_partials/fields/image.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 10
        echo "
    ";
        // line 11
        $context["setPath"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 11), "get", [0 => "upload"], "method", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 11), "get", [0 => "upload"], "method", false, false, false, 11), "")) : (""));
        // line 12
        echo "    ";
        $context["directory"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_async_upload", ["location" => (((isset($context["location"]) || array_key_exists("location", $context))) ? (_twig_default_filter((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 12, $this->source); })()), "files")) : ("files")), "path" => (isset($context["setPath"]) || array_key_exists("setPath", $context) ? $context["setPath"] : (function () { throw new RuntimeError('Variable "setPath" does not exist.', 12, $this->source); })())]);
        // line 13
        echo "    ";
        $context["filelist"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_async_filelisting", ["location" => (((isset($context["location"]) || array_key_exists("location", $context))) ? (_twig_default_filter((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 13, $this->source); })()), "files")) : ("files")), "type" => "images"]);
        // line 14
        echo "    ";
        $context["labels"] = json_encode(["button_upload" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("image.button_upload"), "button_from_library" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("image.button_from_library"), "button_remove" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("image.button_remove"), "placeholder_filename" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("image.placeholder_filename"), "placeholder_alt_text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("image.placeholder_alt_text"), "button_edit_attributes" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("image.button_edit_attributes")]);
        // line 22
        echo "
    <editor-image
        :name='";
        // line 24
        echo twig_escape_filter($this->env, json_encode((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "'
        :filename='";
        // line 25
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "get", [0 => "filename"], "method", false, false, false, 25)), "html", null, true);
        echo "'
        :media='";
        // line 26
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 26, $this->source); })()), "get", [0 => "media"], "method", false, false, false, 26)), "html", null, true);
        echo "'
        :directory='";
        // line 27
        echo twig_escape_filter($this->env, json_encode((isset($context["directory"]) || array_key_exists("directory", $context) ? $context["directory"] : (function () { throw new RuntimeError('Variable "directory" does not exist.', 27, $this->source); })())), "html", null, true);
        echo "'
        :filelist='";
        // line 28
        echo twig_escape_filter($this->env, json_encode((isset($context["filelist"]) || array_key_exists("filelist", $context) ? $context["filelist"] : (function () { throw new RuntimeError('Variable "filelist" does not exist.', 28, $this->source); })())), "html", null, true);
        echo "'
        :csrf-token='";
        // line 29
        echo twig_escape_filter($this->env, json_encode($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("upload")), "html", null, true);
        echo "'
        :labels='";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "'
        :extensions='";
        // line 31
        echo twig_escape_filter($this->env, json_encode((isset($context["extensions"]) || array_key_exists("extensions", $context) ? $context["extensions"] : (function () { throw new RuntimeError('Variable "extensions" does not exist.', 31, $this->source); })())), "html", null, true);
        echo "'
        :attributes-link='";
        // line 32
        echo twig_escape_filter($this->env, json_encode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_media_new")), "html", null, true);
        echo "'
        :required='";
        // line 33
        echo twig_escape_filter($this->env, json_encode((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 33, $this->source); })())), "html", null, true);
        echo "'
        :readonly='";
        // line 34
        echo twig_escape_filter($this->env, json_encode((isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new RuntimeError('Variable "readonly" does not exist.', 34, $this->source); })())), "html", null, true);
        echo "'
        :errormessage='";
        // line 35
        echo twig_escape_filter($this->env, json_encode((isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 35, $this->source); })())), "html", null, true);
        echo "'
        :pattern='";
        // line 36
        echo twig_escape_filter($this->env, json_encode((isset($context["pattern"]) || array_key_exists("pattern", $context) ? $context["pattern"] : (function () { throw new RuntimeError('Variable "pattern" does not exist.', 36, $this->source); })())), "html", null, true);
        echo "'
        :placeholder='";
        // line 37
        echo twig_escape_filter($this->env, json_encode((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 37, $this->source); })())), "html", null, true);
        echo "'
        ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 38, $this->source); })()), "includeAlt", [], "any", false, false, false, 38)) {
            echo " :alt='";
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 38, $this->source); })()), "get", [0 => "alt"], "method", false, false, false, 38)), "html", null, true);
            echo "' ";
        }
        // line 39
        echo "    ></editor-image>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/fields/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 39,  160 => 38,  156 => 37,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 22,  97 => 14,  94 => 13,  91 => 12,  89 => 11,  86 => 10,  76 => 9,  65 => 1,  58 => 6,  52 => 5,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@bolt/_partials/fields/_base.html.twig' %}

{% set extensions = field.definition.get('extensions')|default('') %}
{% set info %}
{{ 'upload.allow_file_types'|trans }}: <code>{{ extensions|join('</code>, <code>') }}</code><br>
{{ 'upload.max_size'|trans }}: {{ config.maxupload|format_bytes }}
{% endset %}

{% block field %}

    {% set setPath = field.definition.get('upload')|default('') %}
    {% set directory = path('bolt_async_upload', {'location': location|default('files'), 'path': setPath}) %}
    {% set filelist = path('bolt_async_filelisting', {'location': location|default('files'), 'type': 'images' }) %}
    {% set labels = {
        'button_upload': 'image.button_upload'|trans,
        'button_from_library': 'image.button_from_library'|trans,
        'button_remove': 'image.button_remove'|trans,
        'placeholder_filename': 'image.placeholder_filename'|trans,
        'placeholder_alt_text': 'image.placeholder_alt_text'|trans,
        'button_edit_attributes': 'image.button_edit_attributes'|trans,
    }|json_encode %}

    <editor-image
        :name='{{ name|json_encode }}'
        :filename='{{ field.get('filename')|json_encode }}'
        :media='{{ field.get('media')|json_encode }}'
        :directory='{{ directory|json_encode }}'
        :filelist='{{ filelist|json_encode }}'
        :csrf-token='{{ csrf_token('upload')|json_encode }}'
        :labels='{{ labels }}'
        :extensions='{{ extensions|json_encode }}'
        :attributes-link='{{ path('bolt_media_new')|json_encode }}'
        :required='{{ required|json_encode }}'
        :readonly='{{ readonly|json_encode }}'
        :errormessage='{{ errormessage|json_encode }}'
        :pattern='{{ pattern|json_encode }}'
        :placeholder='{{ placeholder|json_encode }}'
        {% if field.includeAlt %} :alt='{{ field.get('alt')|json_encode }}' {% endif %}
    ></editor-image>
{% endblock %}
", "@bolt/_partials/fields/image.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/fields/image.html.twig");
    }
}
