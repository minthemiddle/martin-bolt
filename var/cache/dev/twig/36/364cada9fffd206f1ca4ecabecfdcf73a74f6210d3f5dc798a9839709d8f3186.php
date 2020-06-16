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

/* @bolt/_partials/_flash_messages.html.twig */
class __TwigTemplate_d753b1e6d6ad1b718f7891d5224a12ae49524d08357deab997999831f4dab947 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/_flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/_partials/_flash_messages.html.twig"));

        // line 1
        $context["labels"] = ["action.close_alert" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close_alert")];
        // line 2
        echo "
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "            <!-- Then put toasts within -->
            <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"6000\">
                <div class=\"alert-";
                // line 7
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " toast-header\">
                    <strong class=\"mr-auto\">";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("flash_messages.notification"), "html", null, true);
                echo "</strong>
                    <small>";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["type"]), "html", null, true);
                echo "</small>
                    <button class=\"ml-2 mb-1 close\" aria-label=\"Close\" data-dismiss=\"toast\" type=\"button\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"toast-body\">";
                // line 14
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]);
                echo "</div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_partials/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  77 => 14,  69 => 9,  65 => 8,  61 => 7,  57 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  set labels = {'action.close_alert': 'action.close_alert'|trans } %}

    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <!-- Then put toasts within -->
            <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"6000\">
                <div class=\"alert-{{ type }} toast-header\">
                    <strong class=\"mr-auto\">{{ 'flash_messages.notification'|trans }}</strong>
                    <small>{{ type|trans }}</small>
                    <button class=\"ml-2 mb-1 close\" aria-label=\"Close\" data-dismiss=\"toast\" type=\"button\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"toast-body\">{{ message|trans|raw }}</div>
            </div>
        {% endfor %}
    {% endfor %}
", "@bolt/_partials/_flash_messages.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/_partials/_flash_messages.html.twig");
    }
}
