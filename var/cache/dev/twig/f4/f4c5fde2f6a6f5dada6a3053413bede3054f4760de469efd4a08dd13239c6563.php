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

/* @weather-widget/weather.html.twig */
class __TwigTemplate_95e589b144090b2ba8764d2a0f79962cd623642abfbdd9e70837cda8b4cda82f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@weather-widget/weather.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@weather-widget/weather.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 1, $this->source); })()), "get", [0 => "general/omit_backgrounds"], "method", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context["background"] = (("background-image: url(https://source.unsplash.com/400x240/?" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 2, $this->source); })()), 5, [], "any", false, false, false, 2))) . ");");
        } else {
            // line 4
            echo "    ";
            $context["background"] = "background: #255687;";
        }
        // line 6
        echo "<div class=\"card mb-4\">
    <div class=\"card-header\">
        <i class=\"fas fa-cloud-sun-rain\"></i> Current weather by Wttr.in
    </div>
    <div class=\"image card-img-top\"
         style=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["background"]) || array_key_exists("background", $context) ? $context["background"] : (function () { throw new RuntimeError('Variable "background" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " height: 200px; padding-top: 60px;\">
        <center style='text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6); color: #FFF;'>
            <span style=\"font-size: 175%; line-height: 1.75rem;\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 13, $this->source); })()), 0, [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 13, $this->source); })()), 1, [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 13, $this->source); })()), 3, [], "any", false, false, false, 13), "html", null, true);
        echo "</span><br>
            <span style=\"font-size: 100%;\">
                ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 15, $this->source); })()), 5, [], "any", false, false, false, 15), "html", null, true);
        echo "<br>
                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 16, $this->source); })()), 6, [], "any", false, false, false, 16), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 16, $this->source); })()), 8, [], "any", false, false, false, 16), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 16, $this->source); })()), 2, [], "any", false, false, false, 16), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 16, $this->source); })()), 9, [], "any", false, false, false, 16), "html", null, true);
        echo "
            </span>
        </center>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@weather-widget/weather.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  74 => 15,  65 => 13,  60 => 11,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not config.get('general/omit_backgrounds') %}
    {% set background = 'background-image: url(https://source.unsplash.com/400x240/?' ~ weather.5|url_encode ~ ');' %}
{% else %}
    {% set background = 'background: #255687;' %}
{% endif %}
<div class=\"card mb-4\">
    <div class=\"card-header\">
        <i class=\"fas fa-cloud-sun-rain\"></i> Current weather by Wttr.in
    </div>
    <div class=\"image card-img-top\"
         style=\"{{ background }} height: 200px; padding-top: 60px;\">
        <center style='text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6); color: #FFF;'>
            <span style=\"font-size: 175%; line-height: 1.75rem;\">{{ weather.0 }} {{ weather.1 }} {{ weather.3 }}</span><br>
            <span style=\"font-size: 100%;\">
                {{ weather.5 }}<br>
                {{ weather.6 }} / {{ weather.8 }} / {{ weather.2 }} / {{ weather.9 }}
            </span>
        </center>
    </div>
</div>
", "@weather-widget/weather.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bobdenotter/weatherwidget/templates/weather.html.twig");
    }
}
