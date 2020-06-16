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

/* @bolt/content/_tabs.html.twig */
class __TwigTemplate_f06e4afde19d72c0e827496e20e511fa43af2e66bcfee43907895cec8098a584 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_tabs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/content/_tabs.html.twig"));

        // line 1
        echo "<nav>
    <ul class=\"nav editor__tabbar\" role=\"tablist\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 3, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) {
                echo "active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\TextExtension']->slug($context["group"]), "html", null, true);
            echo "-tab\" data-toggle=\"pill\"
                   href=\"#";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\TextExtension']->slug($context["group"]), "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"";
            echo twig_escape_filter($this->env, $this->extensions['Bolt\Twig\TextExtension']->slug($context["group"]), "html", null, true);
            echo "\"
                   aria-selected=\"";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 7)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\">
                    <span>";
            // line 8
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["group"]), "html", null, true);
            echo "</span>
                </a>
            </li>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/content/_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 12,  89 => 8,  81 => 7,  75 => 6,  67 => 5,  64 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    <ul class=\"nav editor__tabbar\" role=\"tablist\">
        {% for group in groups %}
            <li class=\"nav-item\">
                <a class=\"nav-link {% if loop.first %}active{% endif %}\" id=\"{{group|slug}}-tab\" data-toggle=\"pill\"
                   href=\"#{{group|slug}}\" role=\"tab\" aria-controls=\"{{group|slug}}\"
                   aria-selected=\"{% if loop.first %}true{%else%}false{% endif %}\">
                    <span>{{group|capitalize}}</span>
                </a>
            </li>
        {% endfor %}
    </ul>
</nav>
", "@bolt/content/_tabs.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/content/_tabs.html.twig");
    }
}
