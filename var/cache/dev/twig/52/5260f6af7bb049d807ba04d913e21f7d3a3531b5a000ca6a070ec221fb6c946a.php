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

/* partials/_recordfooter.twig */
class __TwigTemplate_68971ed90fd2628d49beccbce30365522917ca0cf93c75e72928c5715df8273b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_recordfooter.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_recordfooter.twig"));

        // line 1
        echo "<p class=\"mt-8\">
    ";
        // line 2
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "        <span class=\"inline-block bg-gray-200 px-2 py-1 text-sm\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\ContentExtension']->getEditLink((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })())), "html", null, true);
            echo "\"><strong>";
            echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("general.phrase.edit");
            echo "</strong></a></span> -
    ";
        }
        // line 5
        echo "    ";
        echo $this->extensions['Bolt\Twig\LocaleExtension']->translate("general.phrase.written-by-on", ["%name%" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["record"] ?? null), "author", [], "any", false, true, false, 6), "displayName", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "author", [], "any", false, true, false, 6), "displayName", [], "any", false, false, false, 6), $this->extensions['Bolt\Twig\LocaleExtension']->translate("Unknown"))) : ($this->extensions['Bolt\Twig\LocaleExtension']->translate("Unknown"))), "%date%" => $this->extensions['Bolt\Twig\LocaleExtension']->localedatetime(twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })()), "publishedAt", [], "any", false, false, false, 7), "%A %B %e, %Y")]);
        // line 8
        echo "
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  59 => 7,  58 => 6,  56 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"mt-8\">
    {% if user %}
        <span class=\"inline-block bg-gray-200 px-2 py-1 text-sm\"><a href=\"{{ record|edit_link }}\"><strong>{{ __('general.phrase.edit') }}</strong></a></span> -
    {% endif %}
    {{ __('general.phrase.written-by-on', {
        '%name%': record.author.displayName|default(__('Unknown')),
        '%date%': record.publishedAt|localedatetime(\"%A %B %e, %Y\")
    }) }}
</p>
", "partials/_recordfooter.twig", "/Users/martinbetz/Sites/martin-bolt/public/theme/martin2006/partials/_recordfooter.twig");
    }
}
