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

/* @bolt/content/listing.html.twig */
class __TwigTemplate_fe21d542520ffef350da39dfea389ebf46f3cbf8165392f879b1aab5860d1f75 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/listing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/listing.html.twig"));

        // line 2
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@bolt/_macro/_macro.html.twig", "@bolt/content/listing.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@bolt/_base/layout.html.twig", "@bolt/content/listing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_shoulder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoulder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoulder"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.title_overview"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    ";
        echo twig_call_macro($macros["macro"], "macro_icon", [twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 10, $this->source); })()), "icon_one", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_vue_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue_id"));

        echo "listing";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_topsection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topsection"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topsection"));

        // line 18
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "    <div>
        ";
        // line 23
        $this->loadTemplate("@bolt/_partials/_content_listing.html.twig", "@bolt/content/listing.html.twig", 23)->display(twig_array_merge($context, ["records" => (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 23, $this->source); })()), "type" => twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 23, $this->source); })()), "slug", [], "any", false, false, false, 23)]));
        // line 24
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        // line 28
        echo "
    <listing-select-box
      plural=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
      singular=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 31, $this->source); })()), "singular_name", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
      :labels=\"";
        // line 32
        echo twig_escape_filter($this->env, json_encode(["selected" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_select_box.card_header.selected"), "status_to_draft" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.status_to_draft"), "status_to_held" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.status_to_held"), "status_to_published" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing_table.actions.status_to_publish"), "delete" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "update_all" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.update_all")]), "html", null, true);
        // line 40
        echo "\"
      :csrftoken=\"";
        // line 41
        echo twig_escape_filter($this->env, json_encode($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("batch")), "html", null, true);
        echo "\"
    ></listing-select-box>

    ";
        // line 44
        $context["filterOptions"] = ["id" => "Id", "title" => "Title", "author" => "Author", "status" => "Status", "createdAt" => "Created date", "modifiedAt" => "Modified date", "publishedAt" => "Published date", "depublishedAt" => "Depublished date"];
        // line 48
        echo "
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            ";
        // line 51
        echo twig_call_macro($macros["macro"], "macro_icon", ["star"], 51, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.contentlisting"), "html", null, true);
        echo " » ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "
        </div>
        <div class=\"card-body\">
            <p>
                <a class=\"btn btn-primary\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_content_new", ["contentType" => twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 55, $this->source); })()), "slug", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\" data-patience=\"virtue\">
                    ";
        // line 56
        echo twig_call_macro($macros["macro"], "macro_icon", ["magic"], 56, $context, $this->getSourceContext());
        echo " ";
        echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("action.create_new");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 56, $this->source); })()), "singular_name", [], "any", false, false, false, 56), "html", null, true);
        echo "
                </a>
            </p>
            <form>
                <div class=\"form-group\">
                    <p>
                        <strong>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.title_sortby"), "html", null, true);
        echo "</strong>:
                        <select class=\"form-control\" name=\"sortBy\">
                                <option value=\"\" ";
        // line 64
        if (twig_test_empty((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 64, $this->source); })()))) {
            echo "selected";
        }
        echo ">
                                    ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.option_select_sortby"), "html", null, true);
        echo "
                                </option>
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filterOptions"]) || array_key_exists("filterOptions", $context) ? $context["filterOptions"] : (function () { throw new RuntimeError('Variable "filterOptions" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["filterOption"]) {
            // line 68
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (0 === twig_compare((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 68, $this->source); })()), $context["key"])) {
                echo "selected";
            }
            echo ">
                                    ";
            // line 69
            echo twig_escape_filter($this->env, $context["filterOption"], "html", null, true);
            echo "
                                </option>
                                <option value=\"-";
            // line 71
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (0 === twig_compare((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 71, $this->source); })()), ("-" . $context["key"]))) {
                echo "selected";
            }
            echo ">
                                    -";
            // line 72
            echo twig_escape_filter($this->env, $context["filterOption"], "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['filterOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                        </select>
                    </p>
                    ";
        // line 101
        echo "                    <p>
                        <strong>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.title_filterby"), "html", null, true);
        echo "</strong>:
                        <input class=\"form-control\" type=\"text\" name=\"filter\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["filterValue"]) || array_key_exists("filterValue", $context) ? $context["filterValue"] : (function () { throw new RuntimeError('Variable "filterValue" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "\"
                               placeholder=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.placeholder_filter"), "html", null, true);
        echo "\"/>
                    </p>
                </div>

                    ";
        // line 108
        echo twig_call_macro($macros["macro"], "macro_button", ["listing.button_filter", "filter", "tertiary mb-0", ["type" => "submit"]], 108, $context, $this->getSourceContext());
        echo "

                    ";
        // line 110
        if (( !twig_test_empty((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 110, $this->source); })())) ||  !twig_test_empty((isset($context["filterValue"]) || array_key_exists("filterValue", $context) ? $context["filterValue"] : (function () { throw new RuntimeError('Variable "filterValue" does not exist.', 110, $this->source); })())))) {
            // line 111
            echo "                        ";
            echo twig_call_macro($macros["macro"], "macro_buttonlink", ["listing.button_clear", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_content_overview", ["contentType" => twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 111, $this->source); })()), "slug", [], "any", false, false, false, 111)]), "times", "tertiary mb-0"], 111, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 113
        echo "            </form>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\">
            ";
        // line 119
        echo twig_call_macro($macros["macro"], "macro_icon", [twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 119, $this->source); })()), "icon_one", [], "any", false, false, false, 119)], 119, $context, $this->getSourceContext());
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.contentType"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 119, $this->source); })()), "name", [], "any", false, false, false, 119), "html", null, true);
        echo "
        </div>
        <div class=\"card-body\">

        ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 123, $this->source); })()), "description", [], "any", false, false, false, 123)) {
            // line 124
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 124, $this->source); })()), "description", [], "any", false, false, false, 124), "html", null, true);
            echo "</p>
        ";
        }
        // line 126
        echo "
        <ul class=\"px-2\">
            <li>Name: <code>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 128, $this->source); })()), "name", [], "any", false, false, false, 128), "html", null, true);
        echo "</code> (singular: <code>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 128, $this->source); })()), "singular_name", [], "any", false, false, false, 128), "html", null, true);
        echo "</code>)</li>
            <li>Slug: <code>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 129, $this->source); })()), "slug", [], "any", false, false, false, 129), "html", null, true);
        echo "</code> (singular: <code>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 129, $this->source); })()), "singular_slug", [], "any", false, false, false, 129), "html", null, true);
        echo "</code>)</li>
            <li>Record template: <code>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 130, $this->source); })()), "record_template", [], "any", false, false, false, 130), "html", null, true);
        echo "</code></li>
            <li>Listing template: <code>";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 131, $this->source); })()), "listing_template", [], "any", false, false, false, 131), "html", null, true);
        echo "</code> (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 131, $this->source); })()), "listing_records", [], "any", false, false, false, 131), "html", null, true);
        echo " records)</li>
            ";
        // line 132
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 132, $this->source); })()), "locales", [], "any", false, false, false, 132))) {
            // line 133
            echo "                <li>Locales:
                    ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contentType"]) || array_key_exists("contentType", $context) ? $context["contentType"] : (function () { throw new RuntimeError('Variable "contentType" does not exist.', 134, $this->source); })()), "locales", [], "any", false, false, false, 134));
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
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 135
                echo "                        ";
                echo $this->extensions['Bolt\Twig\LocaleExtension']->flag($context["locale"]);
                // line 136
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 136)) {
                    echo ", ";
                }
                // line 137
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                </li>
            ";
        }
        // line 140
        echo "        </ul>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 140,  432 => 138,  418 => 137,  414 => 136,  411 => 135,  394 => 134,  391 => 133,  389 => 132,  383 => 131,  379 => 130,  373 => 129,  367 => 128,  363 => 126,  357 => 124,  355 => 123,  344 => 119,  336 => 113,  330 => 111,  328 => 110,  323 => 108,  316 => 104,  312 => 103,  308 => 102,  305 => 101,  301 => 75,  292 => 72,  284 => 71,  279 => 69,  270 => 68,  266 => 67,  261 => 65,  255 => 64,  250 => 62,  237 => 56,  233 => 55,  222 => 51,  217 => 48,  215 => 44,  209 => 41,  206 => 40,  204 => 32,  200 => 31,  196 => 30,  192 => 28,  182 => 27,  171 => 24,  169 => 23,  166 => 22,  156 => 21,  145 => 18,  135 => 17,  116 => 14,  104 => 11,  99 => 10,  89 => 9,  76 => 6,  66 => 5,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@bolt/_base/layout.html.twig' %}
{% import '@bolt/_macro/_macro.html.twig' as macro %}

{# The 'title' and 'shoulder' blocks are the main heading of the page. #}
{% block shoulder %}
    {{ 'listing.title_overview'|trans }}
{% endblock shoulder %}

{% block title %}
    {{ macro.icon(contentType.icon_one) }}
    {{ contentType.name }}
{% endblock %}

{% block vue_id 'listing' %}

{# This 'topsection' gets output _before_ the main form, allowing `dump()`, without breaking Vue #}
{% block topsection %}

{% endblock %}

{% block main %}
    <div>
        {% include '@bolt/_partials/_content_listing.html.twig' with {'records': records, 'type': contentType.slug } %}
    </div>
{% endblock %}

{% block aside %}

    <listing-select-box
      plural=\"{{ contentType.name }}\"
      singular=\"{{ contentType.singular_name }}\"
      :labels=\"{{
        {
            'selected': 'listing_select_box.card_header.selected'|trans,
            'status_to_draft': 'listing_table.actions.status_to_draft'|trans,
            'status_to_held': 'listing_table.actions.status_to_held'|trans,
            'status_to_published': 'listing_table.actions.status_to_publish'|trans,
            'delete': 'action.delete'|trans,
            'update_all': 'action.update_all'|trans,
        }|json_encode }}\"
      :csrftoken=\"{{ csrf_token('batch')|json_encode }}\"
    ></listing-select-box>

    {% set filterOptions = {
        'id': \"Id\", 'title': 'Title', 'author': 'Author', 'status': 'Status', 'createdAt': 'Created date',
        'modifiedAt': 'Modified date', 'publishedAt': 'Published date', 'depublishedAt': 'Depublished date'
    } %}

    <div class=\"card mb-3\">
        <div class=\"card-header\">
            {{ macro.icon('star') }} {{ 'title.contentlisting'|trans }} » {{ contentType.name }}
        </div>
        <div class=\"card-body\">
            <p>
                <a class=\"btn btn-primary\" href=\"{{ path('bolt_content_new', { contentType: contentType.slug }) }}\" data-patience=\"virtue\">
                    {{ macro.icon('magic') }} {{ __('action.create_new') }} {{ contentType.singular_name }}
                </a>
            </p>
            <form>
                <div class=\"form-group\">
                    <p>
                        <strong>{{ 'listing.title_sortby'|trans }}</strong>:
                        <select class=\"form-control\" name=\"sortBy\">
                                <option value=\"\" {% if sortBy is empty %}selected{% endif %}>
                                    {{ 'listing.option_select_sortby'|trans }}
                                </option>
                            {% for key, filterOption in filterOptions %}
                                <option value=\"{{ key }}\" {% if sortBy == key %}selected{% endif %}>
                                    {{ filterOption }}
                                </option>
                                <option value=\"-{{ key }}\" {% if sortBy == '-' ~ key %}selected{% endif %}>
                                    -{{ filterOption }}
                                </option>
                            {% endfor %}
                        </select>
                    </p>
                    {#
                    {% if contentType.get('taxonomy') %}
                        <p>
                            <strong>{{ 'listing.title_taxonomy'|trans }}</strong>:
                            <select class=\"form-control\" name=\"taxonomy\">
                                <option value=\"\" {% if sortBy is empty %}selected{% endif %}>
                                    {{ 'listing.option_select_item'|trans }}
                                </option>
                                {% for taxonomy in contentType.get('taxonomy') %}
                                    {% set taxonomyDefinition = config.get('taxonomies/' ~ taxonomy) %}
                                    {% if taxonomyDefinition.behaves_like != 'tags' %}
                                        <optgroup label=\"{{ taxonomyDefinition.singular_name }}\">
                                        {% for key, taxonomyValue in taxonomyDefinition.options %}
                                            <option value=\"{{ taxonomyDefinition.slug }}={{ key }}\" {% if taxonomy == key %}selected{% endif %}>
                                                {{ taxonomyValue }}
                                            </option>
                                        {% endfor %}
                                        </optgroup>
                                    {% endif %}
                                {% endfor %}
                            </select>
                        </p>
                    {% endif %}
                    #}
                    <p>
                        <strong>{{ 'listing.title_filterby'|trans }}</strong>:
                        <input class=\"form-control\" type=\"text\" name=\"filter\" value=\"{{ filterValue }}\"
                               placeholder=\"{{ 'listing.placeholder_filter'|trans }}\"/>
                    </p>
                </div>

                    {{ macro.button('listing.button_filter', 'filter', 'tertiary mb-0', {'type': 'submit'}) }}

                    {% if sortBy is not empty or filterValue is not empty %}
                        {{ macro.buttonlink('listing.button_clear', path('bolt_content_overview', {'contentType': contentType.slug}),  'times', 'tertiary mb-0') }}
                    {% endif %}
            </form>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\">
            {{ macro.icon(contentType.icon_one) }}  {{ 'title.contentType'|trans }} {{ contentType.name }}
        </div>
        <div class=\"card-body\">

        {% if contentType.description %}
            <p>{{ contentType.description }}</p>
        {% endif %}

        <ul class=\"px-2\">
            <li>Name: <code>{{ contentType.name }}</code> (singular: <code>{{ contentType.singular_name }}</code>)</li>
            <li>Slug: <code>{{ contentType.slug }}</code> (singular: <code>{{ contentType.singular_slug }}</code>)</li>
            <li>Record template: <code>{{ contentType.record_template }}</code></li>
            <li>Listing template: <code>{{ contentType.listing_template }}</code> ({{ contentType.listing_records }} records)</li>
            {% if contentType.locales is not empty %}
                <li>Locales:
                    {% for locale in contentType.locales %}
                        {{ flag(locale) }}
                        {%- if not loop.last %}, {% endif %}
                    {% endfor %}
                </li>
            {% endif %}
        </ul>

        </div>
    </div>

{% endblock %}
", "@bolt/content/listing.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/listing.html.twig");
    }
}
