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

/* @bolt/_base/layout.html.twig */
class __TwigTemplate_cc557cc3363c16178e2d0487b3d71e82d969fc0274e00b6b1bd661942d57bd1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_id' => [$this, 'block_html_id'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'shoulder' => [$this, 'block_shoulder'],
            'topsection' => [$this, 'block_topsection'],
            'vue_id' => [$this, 'block_vue_id'],
            'main' => [$this, 'block_main'],
            'aside' => [$this, 'block_aside'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_base/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_base/layout.html.twig"));

        // line 2
        $context["hasAside"] = (( !twig_test_empty(twig_trim_filter(        $this->renderBlock("aside", $context, $blocks)))) ? (true) : (false));
        // line 3
        echo "<!DOCTYPE html>
<html ";
        // line 4
        if (        $this->renderBlock("html_id", $context, $blocks)) {
            echo "id=\"";
            $this->displayBlock('html_id', $context, $blocks);
            echo "\"";
        }
        echo ">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, strip_tags(        $this->renderBlock("title", $context, $blocks)), "html", null, true);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    ";
        echo twig_include($this->env, $context, "_partials/favicon.html.twig");
        echo "
</head>

<body>
<div class=\"admin\">

    ";
        // line 22
        $context["admin_menu_json"] = json_encode($this->extensions['Bolt\Twig\BackendMenuExtension']->getAdminMenuArray());
        // line 23
        echo "
    <!-- Admin Toolbar -->
    <nav class=\"admin__toolbar\" id=\"toolbar\">
        ";
        // line 26
        $context["user_display_name"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 26), "displayName", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 26), "displayName", [], "any", false, false, false, 26), "Unknown user")) : ("Unknown user"));
        // line 27
        echo "
        ";
        // line 29
        echo "        ";
        $context["labels"] = json_encode(["about.bolt_documentation" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.bolt_documentation"), "action.view_site" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.view") . " website"), "action.create_new" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create_new"), "general.greeting" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.greeting", ["%name%" =>         // line 33
(isset($context["user_display_name"]) || array_key_exists("user_display_name", $context) ? $context["user_display_name"] : (function () { throw new RuntimeError('Variable "user_display_name" does not exist.', 33, $this->source); })())]), "action.logout" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.logout"), "action.edit_profile" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit_profile"), "about.visit_bolt" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.visit_bolt")]);
        // line 38
        echo "
        <admin-toolbar
            site-name=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "get", [0 => "general/sitename"], "method", false, false, false, 40), "html", null, true);
        echo "\"
            :menu=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["admin_menu_json"]) || array_key_exists("admin_menu_json", $context) ? $context["admin_menu_json"] : (function () { throw new RuntimeError('Variable "admin_menu_json" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\"
            :labels=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\"
            :backend-prefix=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_dashboard");
        echo "\"
        ></admin-toolbar>
    </nav>
    <!-- End Admin Toolbar -->

    <!-- Admin Header -->
    <header class=\"admin__header\">
        <div class=\"admin__header--topbar\">

            <h1 class=\"admin__header--title\">
                ";
        // line 53
        if (        $this->renderBlock("shoulder", $context, $blocks)) {
            // line 54
            echo "                <span class=\"admin__header--title__prefix\">
                    ";
            // line 55
            $this->displayBlock('shoulder', $context, $blocks);
            echo " »
                </span>
                ";
        }
        // line 58
        echo "                ";
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h1>

            <button class=\"admin-sidebar-toggler btn btn-md\">
                <span class=\"admin-sidebar-toggler_icon\"></span>";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_sidebar_toggler.toggle");
        echo "
            </button>

        </div>
    </header>
    <!-- End Admin Header -->

    <!-- Admin Sidebar -->
    <div class=\"admin__sidebar\">
        <div class=\"sidebar sidebar--sticky\" id=\"sidebar\">
            <admin-sidebar
              :menu=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["admin_menu_json"]) || array_key_exists("admin_menu_json", $context) ? $context["admin_menu_json"] : (function () { throw new RuntimeError('Variable "admin_menu_json" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "\"
              :version=\"'";
        // line 74
        echo twig_escape_filter($this->env, twig_replace_filter(twig_constant("Bolt\\Version::VERSION"), ["alpha" => "α", "beta" => "β"]), "html", null, true);
        echo "'\"
              :about-link=\"";
        // line 75
        echo twig_escape_filter($this->env, json_encode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolt_about")), "html", null, true);
        echo "\"
              :labels=\"";
        // line 76
        echo twig_escape_filter($this->env, json_encode(["toggler" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_sidebar.toggler")]), "html", null, true);
        echo "\"
            ></admin-sidebar >
        </div>
    </div>
    <!-- End Admin Sidebar -->

    <!-- Admin Main -->
    <div class=\"admin__body\">

        ";
        // line 85
        $this->displayBlock('topsection', $context, $blocks);
        // line 89
        echo "
        <div class=\"admin__body--container";
        // line 90
        if ((isset($context["hasAside"]) || array_key_exists("hasAside", $context) ? $context["hasAside"] : (function () { throw new RuntimeError('Variable "hasAside" does not exist.', 90, $this->source); })())) {
            echo " admin__body--container--has-sidebar";
        }
        echo "\"
             id=\"";
        // line 91
        $this->displayBlock('vue_id', $context, $blocks);
        echo "\">
            <main class=\"admin__body--main\">
                ";
        // line 93
        $this->displayBlock('main', $context, $blocks);
        // line 95
        echo "            </main>

            ";
        // line 97
        if ((isset($context["hasAside"]) || array_key_exists("hasAside", $context) ? $context["hasAside"] : (function () { throw new RuntimeError('Variable "hasAside" does not exist.', 97, $this->source); })())) {
            // line 98
            echo "            <aside class=\"admin__body--aside\">
                ";
            // line 99
            $this->displayBlock('aside', $context, $blocks);
            // line 101
            echo "            </aside>
            ";
        }
        // line 103
        echo "        </div>

        <div class=\"admin__notifications\">
            ";
        // line 106
        echo twig_include($this->env, $context, "@bolt/_partials/_flash_messages.html.twig");
        echo "
        </div>
    </div>
    <!-- End Admin Main -->

</div>

";
        // line 113
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_html_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_id"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $context["theme"] = ("theme-" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 12), "backendTheme", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 12), "backendTheme", [], "any", false, false, false, 12), "default")) : ("default")));
        // line 13
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("bolt");
        echo "
    ";
        // line 14
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 14, $this->source); })()));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_shoulder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoulder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoulder"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_topsection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topsection"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topsection"));

        // line 86
        echo "            ";
        // line 88
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_vue_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue_id"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 94
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        // line 100
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "    <script>
        var admin = document.querySelector('.admin');
        var slim = JSON.parse(localStorage.getItem('slim-sidebar'));
        if (slim){
          admin.classList.add('is-slim');
        }
    </script>
    ";
        // line 121
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("bolt");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 121,  407 => 114,  397 => 113,  387 => 100,  377 => 99,  367 => 94,  357 => 93,  339 => 91,  329 => 88,  327 => 86,  317 => 85,  299 => 55,  287 => 14,  282 => 13,  279 => 12,  269 => 11,  251 => 4,  237 => 123,  235 => 113,  225 => 106,  220 => 103,  216 => 101,  214 => 99,  211 => 98,  209 => 97,  205 => 95,  203 => 93,  198 => 91,  192 => 90,  189 => 89,  187 => 85,  175 => 76,  171 => 75,  167 => 74,  163 => 73,  149 => 62,  141 => 58,  135 => 55,  132 => 54,  130 => 53,  117 => 43,  113 => 42,  109 => 41,  105 => 40,  101 => 38,  99 => 33,  97 => 29,  94 => 27,  92 => 26,  87 => 23,  85 => 22,  75 => 16,  73 => 11,  69 => 10,  56 => 4,  53 => 3,  51 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Check if aside has value and set hasAside variable #}
{% set hasAside = block('aside')|trim is not empty ? true : false %}
<!DOCTYPE html>
<html {% if block('html_id') %}id=\"{% block html_id %}{% endblock %}\"{% endif %}>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{{ block('title')|striptags }}</title>
    {% block stylesheets %}
    {% set theme = 'theme-' ~ app.user.backendTheme|default('default') %}
    {{ encore_entry_link_tags('bolt') }}
    {{ encore_entry_link_tags(theme) }}
    {% endblock %}
    {{ include('_partials/favicon.html.twig') }}
</head>

<body>
<div class=\"admin\">

    {% set admin_menu_json = admin_menu_array()|json_encode %}

    <!-- Admin Toolbar -->
    <nav class=\"admin__toolbar\" id=\"toolbar\">
        {% set user_display_name = app.user.displayName|default('Unknown user') %}

        {# Setting the labels and their localisations that are used in the sidebar-menu. #}
        {% set labels = {
            'about.bolt_documentation': 'about.bolt_documentation'|trans,
            'action.view_site': 'action.view'|trans ~ ' website',
            'action.create_new': 'action.create_new'|trans,
            'general.greeting': 'general.greeting'|trans({'%name%': user_display_name}),
            'action.logout': 'action.logout'|trans,
            'action.edit_profile': 'action.edit_profile'|trans,
            'about.visit_bolt': 'about.visit_bolt'|trans
        }|json_encode %}

        <admin-toolbar
            site-name=\"{{ config.get('general/sitename') }}\"
            :menu=\"{{ admin_menu_json }}\"
            :labels=\"{{ labels }}\"
            :backend-prefix=\"{{ path('bolt_dashboard') }}\"
        ></admin-toolbar>
    </nav>
    <!-- End Admin Toolbar -->

    <!-- Admin Header -->
    <header class=\"admin__header\">
        <div class=\"admin__header--topbar\">

            <h1 class=\"admin__header--title\">
                {% if block('shoulder') %}
                <span class=\"admin__header--title__prefix\">
                    {% block shoulder %}{% endblock shoulder %} »
                </span>
                {% endif %}
                {{ block('title') }}
            </h1>

            <button class=\"admin-sidebar-toggler btn btn-md\">
                <span class=\"admin-sidebar-toggler_icon\"></span>{{ 'admin_sidebar_toggler.toggle'|trans|raw }}
            </button>

        </div>
    </header>
    <!-- End Admin Header -->

    <!-- Admin Sidebar -->
    <div class=\"admin__sidebar\">
        <div class=\"sidebar sidebar--sticky\" id=\"sidebar\">
            <admin-sidebar
              :menu=\"{{ admin_menu_json }}\"
              :version=\"'{{ constant('Bolt\\\\Version::VERSION')|replace({'alpha': 'α', 'beta': 'β'}) }}'\"
              :about-link=\"{{ path('bolt_about')|json_encode }}\"
              :labels=\"{{ { 'toggler': 'admin_sidebar.toggler'|trans }|json_encode }}\"
            ></admin-sidebar >
        </div>
    </div>
    <!-- End Admin Sidebar -->

    <!-- Admin Main -->
    <div class=\"admin__body\">

        {% block topsection %}
            {# insert stuff here that should _not_ be part of the
                Vue components, like `{{ dump() }}` statements #}
        {% endblock %}

        <div class=\"admin__body--container{% if hasAside %} admin__body--container--has-sidebar{% endif%}\"
             id=\"{% block vue_id %}{% endblock %}\">
            <main class=\"admin__body--main\">
                {% block main %}
                {% endblock %}
            </main>

            {% if hasAside %}
            <aside class=\"admin__body--aside\">
                {% block aside %}
                {% endblock %}
            </aside>
            {% endif %}
        </div>

        <div class=\"admin__notifications\">
            {{ include('@bolt/_partials/_flash_messages.html.twig') }}
        </div>
    </div>
    <!-- End Admin Main -->

</div>

{% block javascripts %}
    <script>
        var admin = document.querySelector('.admin');
        var slim = JSON.parse(localStorage.getItem('slim-sidebar'));
        if (slim){
          admin.classList.add('is-slim');
        }
    </script>
    {{ encore_entry_script_tags('bolt') }}
{% endblock %}

</body>

</html>
", "@bolt/_base/layout.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_base/layout.html.twig");
    }
}
