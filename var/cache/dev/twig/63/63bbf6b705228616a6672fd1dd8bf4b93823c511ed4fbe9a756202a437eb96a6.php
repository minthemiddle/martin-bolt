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

/* @bolt/content/_buttons.html.twig */
class __TwigTemplate_08a66732bcc29a83c45cd91266bfa7fec05e42a60a9eaf8a44e8ad4bfb1d67d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_buttons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_buttons.html.twig"));

        // line 1
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@bolt/_macro/_macro.html.twig", "@bolt/content/_buttons.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"record-actions\">

    ";
        // line 5
        echo twig_call_macro($macros["macro"], "macro_button", ["action.save", "fa-save", "success", ["type" => "submit", "form" => "editcontent", "data-patience" => "virtue"]], 5, $context, $this->getSourceContext());
        echo "

    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <div class=\"btn-group\">
            ";
            // line 9
            echo twig_call_macro($macros["macro"], "macro_button", ["action.preview", "fa-external-link-square-alt", "primary", ["type" => "submit", "form" => "editcontent", "formtarget" => "_blank", "formaction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_content_edit_preview", ["id" => twig_get_attribute($this->env, $this->source,             // line 16
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)])]], 9, $context, $this->getSourceContext());
            // line 17
            echo "
        </div>

        ";
            // line 20
            if ((((isset($context["status"]) || array_key_exists("status", $context))) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 20, $this->source); })()))) : (""))) {
                // line 21
                echo "        <p>
            <strong>";
                // line 22
                echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("label.current_status");
                echo ":</strong>
            <span class=\"status mx-1 is-";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), "html", null, true);
                echo "\"></span>";
                echo $this->extensions['Bolt\Twig\LocaleExtension']->translate(("status." . twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23)));
                echo "<br>
            ";
                // line 24
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), "published")) {
                    // line 25
                    echo "                <small>
                    (";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.modifiedAt"), "html", null, true);
                    echo ": ";
                    echo twig_call_macro($macros["macro"], "macro_relative_datetime", [twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 26, $this->source); })()), "modifiedAt", [], "any", false, false, false, 26)], 26, $context, $this->getSourceContext());
                    echo "                    )
                </small>
            ";
                }
                // line 29
                echo "        </p>

        <hr>
        <div class=\"form-fieldsgroup__summary-fields\">
        ";
                // line 33
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), "published") && $this->extensions['Bolt\Twig\ContentExtension']->getLink((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 33, $this->source); })()), true))) {
                    // line 34
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\ContentExtension']->getLink((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 34, $this->source); })()), true, (isset($context["currentlocale"]) || array_key_exists("currentlocale", $context) ? $context["currentlocale"] : (function () { throw new RuntimeError('Variable "currentlocale" does not exist.', 34, $this->source); })())), "html", null, true);
                    echo "\" class=\"btn btn-tertiary btn-sm\" target=\"_blank\">";
                    echo twig_call_macro($macros["macro"], "macro_icon", ["fa-sign-out-alt"], 34, $context, $this->getSourceContext());
                    echo " ";
                    echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("action.view_saved");
                    echo "</a>
        ";
                }
                // line 36
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 36, $this->source); })()), "extras", [], "any", false, false, false, 36), "deleteLink", [], "any", false, false, false, 36), "html", null, true);
                echo "\" class='action-remove-collection-item btn btn-sm btn-hidden-danger' data-confirmation=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.confirm_delete"), "html", null, true);
                echo "\">
                ";
                // line 37
                echo twig_call_macro($macros["macro"], "macro_icon", ["trash"], 37, $context, $this->getSourceContext());
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
                echo "
            </a>
        </div>
        ";
            }
            // line 41
            echo "
    ";
        }
        // line 43
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  129 => 41,  121 => 37,  114 => 36,  104 => 34,  102 => 33,  96 => 29,  88 => 26,  85 => 25,  83 => 24,  77 => 23,  73 => 22,  70 => 21,  68 => 20,  63 => 17,  61 => 16,  60 => 9,  57 => 8,  55 => 7,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@bolt/_macro/_macro.html.twig' as macro %}

<div class=\"record-actions\">

    {{ macro.button('action.save', 'fa-save', 'success', {'type': 'submit', 'form': 'editcontent', 'data-patience': 'virtue'}) }}

    {% if record.id %}
        <div class=\"btn-group\">
            {{ macro.button(
                'action.preview',
                'fa-external-link-square-alt',
                'primary',
                {   'type': 'submit',
                    'form': 'editcontent',
                    'formtarget': '_blank',
                    'formaction': path('bolt_content_edit_preview', {'id': record.id })
                }) }}
        </div>

        {% if status|default() %}
        <p>
            <strong>{{ __('label.current_status') }}:</strong>
            <span class=\"status mx-1 is-{{ record.status}}\"></span>{{ __('status.' ~ record.status) }}<br>
            {% if record.status == 'published' %}
                <small>
                    ({{ 'field.modifiedAt'|trans }}: {{ macro.relative_datetime(record.modifiedAt) }}                    )
                </small>
            {% endif %}
        </p>

        <hr>
        <div class=\"form-fieldsgroup__summary-fields\">
        {% if record.status == \"published\" and record|link(true) %}
            <a href=\"{{ record|link(true, currentlocale) }}\" class=\"btn btn-tertiary btn-sm\" target=\"_blank\">{{ macro.icon('fa-sign-out-alt') }} {{ __('action.view_saved') }}</a>
        {% endif %}
            <a href=\"{{ record.extras.deleteLink }}\" class='action-remove-collection-item btn btn-sm btn-hidden-danger' data-confirmation=\"{{ 'action.confirm_delete'|trans }}\">
                {{ macro.icon('trash') }}{{ 'action.delete'|trans }}
            </a>
        </div>
        {% endif %}

    {% endif %}

</div>
", "@bolt/content/_buttons.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/_buttons.html.twig");
    }
}
