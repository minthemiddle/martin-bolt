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

/* @bolt/_partials/_content_listing.html.twig */
class __TwigTemplate_6d1fbfa62e431690b59e5b4f4d2282be259269ec6a5afab4a2d69bda4ec12099 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/_content_listing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/_content_listing.html.twig"));

        // line 1
        if (twig_length_filter($this->env, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "
    <!-- listing records -->
    <listing-records
      type=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\"
      :data=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\JsonExtension']->jsonRecords((isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 6, $this->source); })()), true, 0, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "getLocale", [], "method", false, false, false, 6)), "html", null, true);
            echo "\"
    >
    </listing-records>
    <!-- end listing records -->

    <!-- listing filter -->
    <listing-filter :labels=\"";
            // line 12
            echo twig_escape_filter($this->env, json_encode(["button_compact" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_filter.button_compact"), "button_expanded" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_filter.button_expanded")]), "html", null, true);
            // line 15
            echo "\"></listing-filter>
    <!-- end listing filter -->

    <listing-table
    :labels=\"";
            // line 19
            echo twig_escape_filter($this->env, json_encode(["actions" => ["view_on_site" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.view_on_site"), "status_to_publish" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.status_to_publish"), "status_to_held" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.status_to_held"), "status_to_draft" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.status_to_draft"), "status_to_publish" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.status_to_publish"), "duplicate" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.duplicate"), "delete" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.delete"), "slug" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.slug"), "created_on" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.created_on"), "published_on" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.published_on"), "last_modified_on" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.last_modified_on"), "button_edit" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.button_edit")]]), "html", null, true);
            // line 35
            echo "\"
    ></listing-table>

    ";
            // line 38
            echo $this->extensions['Bolt\Twig\ContentExtension']->pager($this->env, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 38, $this->source); })()), "@bolt/helpers/_pager_bootstrap.html.twig", "justify-content-center");
            echo "

";
        } else {
            // line 41
            echo "
    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 43
            echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("listing_table.no_results");
            echo "
    </div>


";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/_content_listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 43,  84 => 41,  78 => 38,  73 => 35,  71 => 19,  65 => 15,  63 => 12,  54 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if records|length %}

    <!-- listing records -->
    <listing-records
      type=\"{{ type }}\"
      :data=\"{{ records|json_records(true, 0, app.request.getLocale()) }}\"
    >
    </listing-records>
    <!-- end listing records -->

    <!-- listing filter -->
    <listing-filter :labels=\"{{ {
        'button_compact': 'listing_filter.button_compact'|trans,
        'button_expanded': 'listing_filter.button_expanded'|trans,
    }|json_encode }}\"></listing-filter>
    <!-- end listing filter -->

    <listing-table
    :labels=\"{{
    { 'actions':
        {
            'view_on_site': 'listing_table.actions.view_on_site'|trans,
            'status_to_publish': 'listing_table.actions.status_to_publish'|trans,
            'status_to_held': 'listing_table.actions.status_to_held'|trans,
            'status_to_draft': 'listing_table.actions.status_to_draft'|trans,
            'status_to_publish': 'listing_table.actions.status_to_publish'|trans,
            'duplicate': 'listing_table.actions.duplicate'|trans,
            'delete': 'listing_table.actions.delete'|trans,
            'slug': 'listing_table.actions.slug'|trans,
            'created_on': 'listing_table.actions.created_on'|trans,
            'published_on': 'listing_table.actions.published_on'|trans,
            'last_modified_on': 'listing_table.actions.last_modified_on'|trans,
            'button_edit': 'listing_table.actions.button_edit'|trans,
        }
    }|json_encode }}\"
    ></listing-table>

    {{ pager(records, template = '@bolt/helpers/_pager_bootstrap.html.twig', class=\"justify-content-center\") }}

{% else %}

    <div class=\"alert alert-warning\" role=\"alert\">
        {{ __('listing_table.no_results') }}
    </div>


{% endif %}
", "@bolt/_partials/_content_listing.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/_content_listing.html.twig");
    }
}
