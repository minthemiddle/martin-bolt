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

/* @bolt/_macro/_macro.html.twig */
class __TwigTemplate_9c52b164edad28a82002e0900bf6d717332020b19b877d5b4be4309de48e5703 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_macro/_macro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_macro/_macro.html.twig"));

        // line 7
        echo "
";
        // line 23
        echo "
";
        // line 41
        echo "
";
        // line 77
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_icon($__icon__ = "question-circle", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "icon"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "icon"));

            ob_start();
            // line 3
            echo "    ";
            $context["icon"] = twig_replace_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()), ["fa-" => ""]);
            // line 4
            echo "
    <i class=\"fas fa-fw fa-";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\"></i>
";
            $___internal_92f655c8b48396b9e5da232cf57c703ca0f82eb097e2039686389a2d29b355bc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 2
            echo twig_spaceless($___internal_92f655c8b48396b9e5da232cf57c703ca0f82eb097e2039686389a2d29b355bc_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 8
    public function macro_button($__label__ = "Button", $__icon__ = "question-circle", $__class__ = "tertiary", $__attr__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "class" => $__class__,
            "attr" => $__attr__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button"));

            ob_start();
            // line 9
            echo "
    ";
            // line 10
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 10, $this->source); })()));
            // line 11
            echo "    ";
            $context["icon"] = twig_replace_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 11, $this->source); })()), ["fa-" => ""]);
            // line 12
            echo "    ";
            $context["class"] = twig_replace_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 12, $this->source); })()), ["btn-" => ""]);
            // line 13
            echo "    ";
            $context["mb"] = ((twig_in_filter("mb-", (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 13, $this->source); })()))) ? ("") : ("mb-3"));
            // line 14
            echo "    ";
            $context["attr"] = (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 14, $this->source); })());
            // line 15
            echo "
    <button class=\"btn btn-";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 16, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["mb"]) || array_key_exists("mb", $context) ? $context["mb"] : (function () { throw new RuntimeError('Variable "mb" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\"
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        <i class=\"fas fa-fw fa-";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 18, $this->source); })()), "html", null, true);
            echo " mr-2\"></i>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })()), "html", null, true);
            // line 20
            echo "</button>

";
            $___internal_1b5bc8084b4a116302e72b99cfe153cccb1d41040abd63f8b1cfddbd9b00c9f3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 8
            echo twig_spaceless($___internal_1b5bc8084b4a116302e72b99cfe153cccb1d41040abd63f8b1cfddbd9b00c9f3_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_buttonlink($__label__ = "Button", $__link__ = "", $__icon__ = "question-circle", $__class__ = "tertiary", $__attr__ = [], $__translate__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "link" => $__link__,
            "icon" => $__icon__,
            "class" => $__class__,
            "attr" => $__attr__,
            "translate" => $__translate__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "buttonlink"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "buttonlink"));

            ob_start();
            // line 25
            echo "
    ";
            // line 26
            if ((isset($context["translate"]) || array_key_exists("translate", $context) ? $context["translate"] : (function () { throw new RuntimeError('Variable "translate" does not exist.', 26, $this->source); })())) {
                // line 27
                echo "        ";
                $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 27, $this->source); })()));
                // line 28
                echo "    ";
            }
            // line 29
            echo "    ";
            $context["icon"] = twig_replace_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 29, $this->source); })()), ["fa-" => ""]);
            // line 30
            echo "    ";
            $context["class"] = twig_replace_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 30, $this->source); })()), ["btn-" => ""]);
            // line 31
            echo "    ";
            $context["mb"] = ((twig_in_filter("mb-", (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 31, $this->source); })()))) ? ("") : ("mb-3"));
            // line 32
            echo "    ";
            $context["attr"] = (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 32, $this->source); })());
            // line 33
            echo "
    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-";
            echo twig_escape_filter($this->env, twig_join_filter(twig_split_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 34, $this->source); })()), " "), " btn-"), "html", null, true);
            echo " text-nowrap ";
            echo twig_escape_filter($this->env, (isset($context["mb"]) || array_key_exists("mb", $context) ? $context["mb"] : (function () { throw new RuntimeError('Variable "mb" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\"
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        <i class=\"fas fa-fw fa-";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 36, $this->source); })()), "html", null, true);
            echo " mr-1\"></i>";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 37, $this->source); })()), "html", null, true);
            // line 38
            echo "</a>

";
            $___internal_0002c4be071a09aed5709abf440209c004c5d5bef5df314176dc6d46184d3361_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 24
            echo twig_spaceless($___internal_0002c4be071a09aed5709abf440209c004c5d5bef5df314176dc6d46184d3361_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_generate_collection_fields($__collectionField__ = null, $__fields__ = null, $__compileTemplates__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectionField" => $__collectionField__,
            "fields" => $__fields__,
            "compileTemplates" => $__compileTemplates__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "generate_collection_fields"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "generate_collection_fields"));

            ob_start();
            // line 43
            echo "    ";
            $context["fieldsHtml"] = [];
            // line 44
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 44, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item_field"]) {
                // line 45
                echo "        ";
                $context["collectionItemName"] = (((("collections[" . twig_get_attribute($this->env, $this->source, (isset($context["collectionField"]) || array_key_exists("collectionField", $context) ? $context["collectionField"] : (function () { throw new RuntimeError('Variable "collectionField" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45)) . "][") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item_field"], "definition", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45)) . "]");
                // line 46
                echo "        ";
                // line 47
                echo "        ";
                // line 48
                echo "        ";
                $context["hash"] = ((0 === twig_compare((isset($context["compileTemplates"]) || array_key_exists("compileTemplates", $context) ? $context["compileTemplates"] : (function () { throw new RuntimeError('Variable "compileTemplates" does not exist.', 48, $this->source); })()), true)) ? ("{{ hash }}") : (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48)));
                // line 49
                echo "
        ";
                // line 50
                $context["collectionItemName"] = ((((isset($context["collectionItemName"]) || array_key_exists("collectionItemName", $context) ? $context["collectionItemName"] : (function () { throw new RuntimeError('Variable "collectionItemName" does not exist.', 50, $this->source); })()) . "[") . (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 50, $this->source); })())) . "]");
                // line 51
                echo "        ";
                $context["id"] = ((((("field-" . ((twig_get_attribute($this->env, $this->source, ($context["collectionField"] ?? null), "name", [], "any", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collectionField"] ?? null), "name", [], "any", false, false, false, 51), "unnamed")) : ("unnamed"))) . "-") . ((twig_get_attribute($this->env, $this->source, $context["item_field"], "name", [], "any", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item_field"], "name", [], "any", false, false, false, 51), "unnamed")) : ("unnamed"))) . "-") . (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 51, $this->source); })()));
                // line 52
                echo "        ";
                ob_start();
                // line 53
                echo "            ";
                $context["context"] = ["field" =>                 // line 54
$context["item_field"], "id" =>                 // line 55
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 55, $this->source); })()), "in_collection" => true, "is_first" => 0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 57
$context["loop"], "index0", [], "any", false, false, false, 57), 0), "is_last" => 0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 58
$context["loop"], "index", [], "any", false, false, false, 58), twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 58, $this->source); })()))), "name" =>                 // line 59
(isset($context["collectionItemName"]) || array_key_exists("collectionItemName", $context) ? $context["collectionItemName"] : (function () { throw new RuntimeError('Variable "collectionItemName" does not exist.', 59, $this->source); })()), "collection_name" => twig_get_attribute($this->env, $this->source,                 // line 60
(isset($context["collectionField"]) || array_key_exists("collectionField", $context) ? $context["collectionField"] : (function () { throw new RuntimeError('Variable "collectionField" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), "collection_label" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 61
(isset($context["collectionField"]) || array_key_exists("collectionField", $context) ? $context["collectionField"] : (function () { throw new RuntimeError('Variable "collectionField" does not exist.', 61, $this->source); })()), "definition", [], "any", false, false, false, 61), "label", [], "any", false, false, false, 61), "hash" =>                 // line 62
(isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 62, $this->source); })())];
                // line 64
                echo "
            ";
                // line 65
                if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item_field"], "type", [], "any", false, false, false, 65), "set")) {
                    // line 66
                    echo "                ";
                    $context["context"] = twig_array_merge((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 66, $this->source); })()), ["include_id" => true]);
                    // line 67
                    echo "            ";
                }
                // line 68
                echo "
            ";
                // line 69
                $this->loadTemplate((("@bolt/_partials/fields/" . twig_get_attribute($this->env, $this->source, $context["item_field"], "type", [], "any", false, false, false, 69)) . ".html.twig"), "@bolt/_macro/_macro.html.twig", 69)->display(twig_to_array((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 69, $this->source); })())));
                // line 70
                echo "        ";
                $context["new_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 71
                echo "        ";
                // line 72
                echo "        ";
                $context["label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item_field"], "definition", [], "any", false, true, false, 72), "label", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item_field"], "definition", [], "any", false, true, false, 72), "label", [], "any", false, false, false, 72), $this->extensions['Bolt\Twig\TextExtension']->ucwords(((twig_get_attribute($this->env, $this->source, $context["item_field"], "name", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item_field"], "name", [], "any", false, false, false, 72), "unnamed")) : ("unnamed"))))) : ($this->extensions['Bolt\Twig\TextExtension']->ucwords(((twig_get_attribute($this->env, $this->source, $context["item_field"], "name", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item_field"], "name", [], "any", false, false, false, 72), "unnamed")) : ("unnamed")))));
                // line 73
                echo "        ";
                $context["fieldsHtml"] = twig_array_merge((isset($context["fieldsHtml"]) || array_key_exists("fieldsHtml", $context) ? $context["fieldsHtml"] : (function () { throw new RuntimeError('Variable "fieldsHtml" does not exist.', 73, $this->source); })()), [0 => ["html" => (isset($context["new_field"]) || array_key_exists("new_field", $context) ? $context["new_field"] : (function () { throw new RuntimeError('Variable "new_field" does not exist.', 73, $this->source); })()), "hash" => (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 73, $this->source); })()), "label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 73, $this->source); })())]]);
                // line 74
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "    ";
            echo twig_escape_filter($this->env, json_encode((isset($context["fieldsHtml"]) || array_key_exists("fieldsHtml", $context) ? $context["fieldsHtml"] : (function () { throw new RuntimeError('Variable "fieldsHtml" does not exist.', 75, $this->source); })())), "html", null, true);
            echo "
";
            $___internal_d9772f58bf79deb7fd87559c66721092231a4ddf444fe773c4f40c01be17ecba_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            echo twig_spaceless($___internal_d9772f58bf79deb7fd87559c66721092231a4ddf444fe773c4f40c01be17ecba_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 79
    public function macro_relative_datetime($__datetime__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "datetime" => $__datetime__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "relative_datetime"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "relative_datetime"));

            ob_start();
            // line 80
            echo "    <abbr class=\"datetime-relative\" title=\"";
            echo $this->extensions['Bolt\Twig\LocaleExtension']->localedatetime((isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 80, $this->source); })()), "%A %B %e, %Y - %k:%M%p");
            echo "\">";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 81, $this->source); })()), "c"), "html", null, true);
            // line 82
            echo "</abbr>
";
            $___internal_d0024345a628d0be9aeaedf9c37b52d86fed09ca61bac31216bef7e24cc0698f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            echo twig_spaceless($___internal_d0024345a628d0be9aeaedf9c37b52d86fed09ca61bac31216bef7e24cc0698f_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@bolt/_macro/_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 79,  461 => 82,  459 => 81,  455 => 80,  435 => 79,  420 => 42,  414 => 75,  400 => 74,  397 => 73,  394 => 72,  392 => 71,  389 => 70,  387 => 69,  384 => 68,  381 => 67,  378 => 66,  376 => 65,  373 => 64,  371 => 62,  370 => 61,  369 => 60,  368 => 59,  367 => 58,  366 => 57,  365 => 55,  364 => 54,  362 => 53,  359 => 52,  356 => 51,  354 => 50,  351 => 49,  348 => 48,  346 => 47,  344 => 46,  341 => 45,  323 => 44,  320 => 43,  298 => 42,  283 => 24,  278 => 38,  276 => 37,  273 => 36,  258 => 35,  250 => 34,  247 => 33,  244 => 32,  241 => 31,  238 => 30,  235 => 29,  232 => 28,  229 => 27,  227 => 26,  224 => 25,  199 => 24,  184 => 8,  179 => 20,  177 => 19,  174 => 18,  159 => 17,  153 => 16,  150 => 15,  147 => 14,  144 => 13,  141 => 12,  138 => 11,  136 => 10,  133 => 9,  110 => 8,  95 => 2,  90 => 5,  87 => 4,  84 => 3,  64 => 2,  52 => 77,  49 => 41,  46 => 23,  43 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{# Button Macro with defaults #}
{% macro icon(icon = 'question-circle') %}{% apply spaceless %}
    {% set icon = icon|replace({'fa-': ''}) %}

    <i class=\"fas fa-fw fa-{{ icon }}\"></i>
{% endapply %}{% endmacro %}

{% macro button(label = 'Button', icon = 'question-circle', class = 'tertiary', attr = []) %}{% apply spaceless %}

    {% set label = label|trans %}
    {% set icon = icon|replace({'fa-': ''}) %}
    {% set class = class|replace({'btn-': ''}) %}
    {% set mb = 'mb-' in class ? '' : 'mb-3' %}
    {% set attr = attr %}

    <button class=\"btn btn-{{ class }} {{ mb }}\"
        {% for key,value in attr %} {{ key }}=\"{{value}}\"{% endfor %}>
        <i class=\"fas fa-fw fa-{{ icon }} mr-2\"></i>
        {{- label -}}
    </button>

{% endapply %}{% endmacro %}

{% macro buttonlink(label = 'Button', link = '', icon = 'question-circle', class = 'tertiary', attr = [], translate = true) %}{% apply spaceless %}

    {% if translate %}
        {% set label = label|trans %}
    {% endif %}
    {% set icon = icon|replace({'fa-': ''}) %}
    {% set class = class|replace({'btn-': ''}) %}
    {% set mb = 'mb-' in class ? '' : 'mb-3' %}
    {% set attr = attr %}

    <a href=\"{{ link }}\" class=\"btn btn-{{ class|split(' ')|join(' btn-') }} text-nowrap {{ mb }}\"
        {% for key,value in attr %} {{ key }}=\"{{value}}\"{% endfor %}>
        <i class=\"fas fa-fw fa-{{ icon }} mr-1\"></i>
        {{- label -}}
    </a>

{% endapply %}{% endmacro %}

{% macro generate_collection_fields(collectionField, fields, compileTemplates) %}{% apply spaceless %}
    {% set fieldsHtml = [] %}
    {% for item_field in fields %}
        {% set collectionItemName = 'collections[' ~ collectionField.name ~ '][' ~ item_field.definition.name ~ ']' %}
        {# we create a 'dummy' hash from the current loop index, which is used to instantiate copies of collection item templates. #}
        {# The order is also submitted in an order field, so that collection items may be stored in the given order in the database. #}
        {% set hash = compileTemplates == true ? \"{{ hash }}\" : loop.index %}

        {% set collectionItemName = collectionItemName ~ '[' ~ hash ~ ']' %}
        {% set id = 'field-' ~ collectionField.name|default('unnamed') ~ '-' ~ item_field.name|default('unnamed') ~ '-' ~ hash %}
        {% set new_field %}
            {% set context = {
                'field': item_field,
                'id': id,
                'in_collection': true,
                'is_first': loop.index0 == 0,
                'is_last': loop.index == fields|length,
                'name': collectionItemName,
                'collection_name': collectionField.name,
                'collection_label': collectionField.definition.label,
                'hash': hash,
            } %}

            {% if item_field.type != 'set' %}
                {% set context = context|merge({'include_id': true}) %}
            {% endif %}

            {% include '@bolt/_partials/fields/' ~ item_field.type ~ '.html.twig' with context only %}
        {% endset %}
        {# set the label manually as set in _base.html.twig, to pass to Collection.vue for templates #}
        {% set label = item_field.definition.label|default(item_field.name|default('unnamed')|ucwords) %}
        {% set fieldsHtml = fieldsHtml|merge([{'html': new_field, 'hash': hash, 'label': label}]) %}
    {% endfor %}
    {{ fieldsHtml|json_encode }}
{% endapply %}{% endmacro %}


{% macro relative_datetime(datetime) %}{% apply spaceless %}
    <abbr class=\"datetime-relative\" title=\"{{ datetime|localedatetime('%A %B %e, %Y - %k:%M%p') }}\">
        {{- datetime|date('c') -}}
    </abbr>
{% endapply %}{% endmacro %}
", "@bolt/_macro/_macro.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_macro/_macro.html.twig");
    }
}
