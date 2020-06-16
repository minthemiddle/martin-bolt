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

/* @bolt/_partials/fields/_base.html.twig */
class __TwigTemplate_ca8ac408882f8a4addc5b9530da6c7182f0937130a5e53e99eca2abf13c54c8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/_base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/fields/_base.html.twig"));

        // line 1
        ob_start();
        // line 22
        echo "
";
        // line 24
        $context["type"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 24))) : (""));
        // line 25
        echo "
";
        // line 27
        if ( !(((isset($context["required"]) || array_key_exists("required", $context))) ? (_twig_default_filter((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 27, $this->source); })()))) : (""))) {
            // line 28
            echo "    ";
            $context["required"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 28), "required", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 28), "required", [], "any", false, false, false, 28))) : (""))) ? (true) : (false));
        }
        // line 30
        echo "
";
        // line 32
        $context["readonly"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 32), "readonly", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 32), "readonly", [], "any", false, false, false, 32))) : (""))) ? (true) : (false));
        // line 33
        echo "
";
        // line 35
        $context["errormessage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 35), "get", [0 => "error"], "method", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 35), "get", [0 => "error"], "method", false, false, false, 35), false)) : (false));
        // line 36
        echo "
";
        // line 38
        $context["pattern"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 38), "get", [0 => "pattern"], "method", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 38), "get", [0 => "pattern"], "method", false, false, false, 38), false)) : (false));
        // line 39
        echo "
";
        // line 40
        $context["type_collection"] = twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()), [0 => "collection"]);
        // line 41
        $context["type_set"] = twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 41, $this->source); })()), [0 => "imagelist", 1 => "filelist", 2 => "set"]);
        // line 42
        echo "
";
        // line 44
        $context["variant"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 44), "variant", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 44), "variant", [], "any", false, false, false, 44), "normal")) : ("normal"));
        // line 45
        echo "
";
        // line 47
        if ( !(((isset($context["name"]) || array_key_exists("name", $context))) ? (_twig_default_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 47, $this->source); })()))) : (""))) {
            // line 48
            echo "    ";
            $context["name"] = (("fields[" . ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 48), "unnamed")) : ("unnamed"))) . "]");
        }
        // line 50
        echo "
";
        // line 52
        if ( !(((isset($context["separator"]) || array_key_exists("separator", $context))) ? (_twig_default_filter((isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 52, $this->source); })()))) : (""))) {
            // line 53
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 53), "separator", [], "any", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 53), "separator", [], "any", false, false, false, 53))) : (""))) {
                // line 54
                echo "        ";
                $context["separator"] = "<hr>";
                // line 55
                echo "    ";
            } else {
                // line 56
                echo "        ";
                $context["separator"] = "";
                // line 57
                echo "    ";
            }
        }
        // line 59
        echo "
";
        // line 61
        if ( !(((isset($context["id"]) || array_key_exists("id", $context))) ? (_twig_default_filter((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 61, $this->source); })()))) : (""))) {
            // line 62
            echo "    ";
            $context["id"] = ("field-" . _twig_default_filter(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 62), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 62, $this->source); })()))) : ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 62, $this->source); })()))), "unnamed"));
        }
        // line 64
        echo "
";
        // line 66
        if ( !(((isset($context["form"]) || array_key_exists("form", $context))) ? (_twig_default_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()))) : (""))) {
            // line 67
            echo "    ";
            $context["form"] = "editcontent";
        }
        // line 69
        echo "
";
        // line 71
        if ( !(((isset($context["value"]) || array_key_exists("value", $context))) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 71, $this->source); })()))) : (""))) {
            // line 72
            echo "    ";
            $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 72), "")) : (""));
            // line 73
            echo "    ";
            if (((twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 73, $this->source); })())) && 0 !== twig_compare($this->extensions['Bolt\Twig\FieldExtension']->getType((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 73, $this->source); })())), "select")) && 0 !== twig_compare($this->extensions['Bolt\Twig\FieldExtension']->getType((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 73, $this->source); })())), "collection"))) {
                // line 74
                echo "        ";
                $context["value"] = twig_first($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 74, $this->source); })()));
                // line 75
                echo "    ";
            }
        }
        // line 77
        echo "
";
        // line 79
        if ( !(((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 79, $this->source); })()))) : (""))) {
            // line 80
            echo "    ";
            $context["class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 80), "class", [], "any", true, true, false, 80)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 80), "class", [], "any", false, false, false, 80))) : (""));
        }
        // line 82
        echo "
";
        // line 84
        if ( !(((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 84, $this->source); })()))) : (""))) {
            // line 85
            echo "    ";
            $context["label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 85), "label", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 85), "label", [], "any", false, false, false, 85), $this->extensions['Bolt\Twig\TextExtension']->ucwords(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 85), "unnamed")) : ("unnamed"))))) : ($this->extensions['Bolt\Twig\TextExtension']->ucwords(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 85), "unnamed")) : ("unnamed")))));
        }
        // line 87
        echo "
";
        // line 89
        if ( !(((isset($context["info"]) || array_key_exists("info", $context))) ? (_twig_default_filter((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 89, $this->source); })()))) : (""))) {
            // line 90
            echo "    ";
            $context["info"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 90), "info", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 90), "info", [], "any", false, false, false, 90))) : (""));
        }
        // line 92
        echo "
";
        // line 94
        if ( !(((isset($context["placeholder"]) || array_key_exists("placeholder", $context))) ? (_twig_default_filter((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 94, $this->source); })()))) : (""))) {
            // line 95
            echo "    ";
            $context["placeholder"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 95), "placeholder", [], "any", true, true, false, 95)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 95), "placeholder", [], "any", false, false, false, 95), "")) : (""));
        }
        // line 97
        echo "
";
        // line 99
        $context["localize"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 99), "localize", [], "any", true, true, false, 99)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 99), "localize", [], "any", false, false, false, 99))) : (""));
        // line 100
        echo "
";
        // line 102
        $context["prefix"] = (((isset($context["prefix"]) || array_key_exists("prefix", $context))) ? (_twig_default_filter((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 102, $this->source); })()), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 102), "prefix", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 102), "prefix", [], "any", false, false, false, 102))) : ("")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 102), "prefix", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 102), "prefix", [], "any", false, false, false, 102))) : (""))));
        // line 103
        if (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 103, $this->source); })()) &&  !((twig_in_filter("<p", (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 103, $this->source); })())) || twig_in_filter("<span", (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 103, $this->source); })()))) || twig_in_filter("<div", (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 103, $this->source); })()))))) {
            // line 104
            echo "    ";
            $context["prefix"] = (((("<span id=\"" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 104, $this->source); })())) . "_prefix\" class=\"form--helper\">") . (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 104, $this->source); })())) . "</span>");
        }
        // line 106
        echo "
";
        // line 107
        $context["postfix"] = (((isset($context["postfix"]) || array_key_exists("postfix", $context))) ? (_twig_default_filter((isset($context["postfix"]) || array_key_exists("postfix", $context) ? $context["postfix"] : (function () { throw new RuntimeError('Variable "postfix" does not exist.', 107, $this->source); })()), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 107), "postfix", [], "any", true, true, false, 107)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 107), "postfix", [], "any", false, false, false, 107))) : ("")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 107), "postfix", [], "any", true, true, false, 107)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "definition", [], "any", false, true, false, 107), "postfix", [], "any", false, false, false, 107))) : (""))));
        // line 108
        if (((isset($context["postfix"]) || array_key_exists("postfix", $context) ? $context["postfix"] : (function () { throw new RuntimeError('Variable "postfix" does not exist.', 108, $this->source); })()) &&  !((twig_in_filter("<p", (isset($context["postfix"]) || array_key_exists("postfix", $context) ? $context["postfix"] : (function () { throw new RuntimeError('Variable "postfix" does not exist.', 108, $this->source); })())) || twig_in_filter("<span", (isset($context["postfix"]) || array_key_exists("postfix", $context) ? $context["postfix"] : (function () { throw new RuntimeError('Variable "postfix" does not exist.', 108, $this->source); })()))) || twig_in_filter("<div", (isset($context["postfix"]) || array_key_exists("postfix", $context) ? $context["postfix"] : (function () { throw new RuntimeError('Variable "postfix" does not exist.', 108, $this->source); })()))))) {
            // line 109
            echo "    ";
            $context["postfix"] = (((("<span id=\"" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 109, $this->source); })())) . "_postfix\" class=\"form--helper\">") . (isset($context["postfix"]) || array_key_exists("postfix", $context) ? $context["postfix"] : (function () { throw new RuntimeError('Variable "postfix" does not exist.', 109, $this->source); })())) . "</span>");
        }
        $___internal_29953dd78af685e0447de2701ef84ccdce2a17ef2a49b16fb0262a3f5d07df71_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_29953dd78af685e0447de2701ef84ccdce2a17ef2a49b16fb0262a3f5d07df71_);
        // line 114
        echo "<!-- field \"";
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "\" (type: ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 114, $this->source); })()), "html", null, true);
        if (0 !== twig_compare((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 114, $this->source); })()), "normal")) {
            echo ", variant: ";
            echo twig_escape_filter($this->env, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 114, $this->source); })()), "html", null, true);
        }
        echo ") -->
<div
    class=\"form-group ";
        // line 116
        echo (((isset($context["type_set"]) || array_key_exists("type_set", $context) ? $context["type_set"] : (function () { throw new RuntimeError('Variable "type_set" does not exist.', 116, $this->source); })())) ? ("form-set") : (""));
        echo " ";
        echo (((isset($context["type_collection"]) || array_key_exists("type_collection", $context) ? $context["type_collection"] : (function () { throw new RuntimeError('Variable "type_collection" does not exist.', 116, $this->source); })())) ? ("form-collection") : (""));
        echo " is-";
        echo twig_escape_filter($this->env, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "\"
    id=\"field-";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", true, true, false, 117)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 117), "unnamed")) : ("unnamed")), "html", null, true);
        echo "\"
>

";
        // line 120
        echo (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 120, $this->source); })());
        echo "
";
        // line 121
        $this->displayBlock('label', $context, $blocks);
        // line 125
        $this->displayBlock('field', $context, $blocks);
        // line 128
        if ((isset($context["include_id"]) || array_key_exists("include_id", $context))) {
            // line 129
            echo "    ";
            $this->loadTemplate("@bolt/_partials/fields/_hidden_id_field.html.twig", "@bolt/_partials/fields/_base.html.twig", 129)->display($context);
        }
        // line 131
        echo (isset($context["postfix"]) || array_key_exists("postfix", $context) ? $context["postfix"] : (function () { throw new RuntimeError('Variable "postfix" does not exist.', 131, $this->source); })());
        echo "

";
        // line 133
        echo (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 133, $this->source); })());
        echo "
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 121
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 122
        echo "    ";
        $this->loadTemplate("@bolt/_partials/fields/_label.html.twig", "@bolt/_partials/fields/_base.html.twig", 122)->display($context);
        // line 123
        echo "    ";
        $this->loadTemplate("@bolt/_partials/fields/_collection_buttons.html.twig", "@bolt/_partials/fields/_base.html.twig", 123)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 126
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/fields/_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 126,  305 => 125,  294 => 123,  291 => 122,  281 => 121,  267 => 133,  262 => 131,  258 => 129,  256 => 128,  254 => 125,  252 => 121,  248 => 120,  240 => 117,  232 => 116,  220 => 114,  218 => 1,  213 => 109,  211 => 108,  209 => 107,  206 => 106,  202 => 104,  200 => 103,  198 => 102,  195 => 100,  193 => 99,  190 => 97,  186 => 95,  184 => 94,  181 => 92,  177 => 90,  175 => 89,  172 => 87,  168 => 85,  166 => 84,  163 => 82,  159 => 80,  157 => 79,  154 => 77,  150 => 75,  147 => 74,  144 => 73,  141 => 72,  139 => 71,  136 => 69,  132 => 67,  130 => 66,  127 => 64,  123 => 62,  121 => 61,  118 => 59,  114 => 57,  111 => 56,  108 => 55,  105 => 54,  102 => 53,  100 => 52,  97 => 50,  93 => 48,  91 => 47,  88 => 45,  86 => 44,  83 => 42,  81 => 41,  79 => 40,  76 => 39,  74 => 38,  71 => 36,  69 => 35,  66 => 33,  64 => 32,  61 => 30,  57 => 28,  55 => 27,  52 => 25,  50 => 24,  47 => 22,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- apply spaceless -%}

{# This template fragment is used to \"extend\" the different fields, used in
   Bolt's backend. Most of the values get passed in, either through a `Field`,
   or otherwise through parameters.

   The used variables are: (\"P\" is parameter, \"F\" comes from a `Field`)

   - type: P - The type of the field
   - variant: F - the \"variant\" of the field, if applicable
   - name: P+F - The `name` attribute of the <input> field
   - id: P+F - The `id` attribute of the <input> field
   - class: P+F - The `class` attribute of the <input> field
   - form: P - The `form` attribute of the <input>, defaults to 'editcontent'
   - value: P+F - The default value if the <input> field
   - label: P+F - Label used as visible anchor to the <input> field
   - placeholder: P+F - Placeholder text to use in the <input>
   - prefix: P+F - Short text to display as a prefix before a field
   - postfix: P+F - Short text to display as a postfix after a field

#}

{# Set type #}
{% set type = field.type|default %}

{# Set required #}
{% if not required|default %}
    {% set required = (field.definition.required|default) ? true : false %}
{% endif %}

{# Set readonly #}
{% set readonly = (field.definition.readonly|default) ? true : false %}

{# Set error validation message #}
{% set errormessage = field.definition.get('error')|default(false) %}

{# Set pattern #}
{% set pattern = field.definition.get('pattern')|default(false) %}

{% set type_collection = (type in ['collection']) %}
{% set type_set = (type in ['imagelist', 'filelist', 'set']) %}

{# Set variant #}
{% set variant = field.definition.variant|default('normal') %}

{# Set the name #}
{% if not name|default %}
    {%  set name = 'fields[' ~ field.name|default('unnamed') ~ ']' %}
{% endif %}

{# Set the separator #}
{% if not separator|default %}
    {% if field.definition.separator|default %}
        {% set separator = \"<hr>\" %}
    {% else %}
        {% set separator = \"\" %}
    {% endif %}
{% endif %}

{# Set the id #}
{% if not id|default %}
    {% set id = 'field-' ~ field.name|default(name)|default('unnamed') %}
{% endif %}

{# Set the form #}
{% if not form|default %}
    {% set form = 'editcontent' %}
{% endif %}

{# Set the value #}
{% if not value|default %}
    {% set value = field.value|default('') %}
    {% if value is iterable and field|type != \"select\" and field|type != \"collection\" %}
        {% set value = value|first %}
    {% endif %}
{% endif %}

{# Set the class #}
{% if not class|default %}
    {% set class = field.definition.class|default %}
{% endif %}

{# Set the label #}
{% if not label|default %}
    {% set label = field.definition.label|default(field.name|default('unnamed')|ucwords) %}
{% endif %}

{# Set the info #}
{% if not info|default %}
    {% set info = field.definition.info|default %}
{% endif %}

{# Set the placeholder #}
{% if not placeholder|default %}
    {% set placeholder = field.definition.placeholder|default('') %}
{% endif %}

{# Set the locale #}
{% set localize = field.definition.localize|default %}

{# Set the prefix and postfix attributes #}
{% set prefix = prefix|default(field.definition.prefix|default) %}
{% if prefix and not ('<p' in prefix or '<span' in prefix or '<div' in prefix) %}
    {% set prefix = '<span id=\"' ~ id ~ '_prefix\" class=\"form--helper\">' ~ prefix ~ '</span>' %}
{% endif %}

{% set postfix = postfix|default(field.definition.postfix|default) %}
{% if postfix and not ('<p' in postfix or '<span' in postfix or '<div' in postfix) %}
    {% set postfix = '<span id=\"' ~ id ~ '_postfix\" class=\"form--helper\">' ~ postfix ~ '</span>' %}
{% endif %}

{%- endapply -%}

<!-- field \"{{ label }}\" (type: {{ type }}{% if variant != 'normal' %}, variant: {{ variant }}{% endif %}) -->
<div
    class=\"form-group {{ type_set ? 'form-set' }} {{ type_collection ? 'form-collection' }} is-{{ variant }}\"
    id=\"field-{{ type }}-{{ field.name|default('unnamed') }}\"
>

{{ prefix|raw }}
{% block label %}
    {% include '@bolt/_partials/fields/_label.html.twig' %}
    {% include '@bolt/_partials/fields/_collection_buttons.html.twig' %}
{% endblock %}
{% block field %}

{% endblock %}
{% if include_id is defined %}
    {% include '@bolt/_partials/fields/_hidden_id_field.html.twig' %}
{% endif %}
{{ postfix|raw }}

{{ separator|raw }}
</div>

", "@bolt/_partials/fields/_base.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/fields/_base.html.twig");
    }
}
