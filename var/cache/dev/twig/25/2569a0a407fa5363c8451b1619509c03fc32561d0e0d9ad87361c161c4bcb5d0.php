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

/* partials/_header.twig */
class __TwigTemplate_d81ff949f59c905221af47dbe3e83a452c88e7d4e3c6676d4c900c7bb501ed55 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.twig"));

        // line 1
        echo "<!-- Header bar -->
<header>
    <nav class=\"mb-8 p-4 md:flex justify-between items-center bg-gray-200\">
    <p class=\"text-xl text-indigo-800 font-semibold tracking-widest\"><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"  class=\"no-underline\">Martin Betz</a></p>
    
    <ul class=\"md:space-x-4 text-gray-800\">
        <li class=\"md:inline\">Articles</li>
        <li class=\"md:inline\">Products</li>
        <li class=\"md:inline\">Services</li>
        <li class=\"md:inline\">Contact</li>
    </ul>
    
  </nav>

</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header bar -->
<header>
    <nav class=\"mb-8 p-4 md:flex justify-between items-center bg-gray-200\">
    <p class=\"text-xl text-indigo-800 font-semibold tracking-widest\"><a href=\"{{ path('homepage') }}\"  class=\"no-underline\">Martin Betz</a></p>
    
    <ul class=\"md:space-x-4 text-gray-800\">
        <li class=\"md:inline\">Articles</li>
        <li class=\"md:inline\">Products</li>
        <li class=\"md:inline\">Services</li>
        <li class=\"md:inline\">Contact</li>
    </ul>
    
  </nav>

</header>
", "partials/_header.twig", "/Users/martinbetz/Sites/martin-bolt/public/theme/martin2006/partials/_header.twig");
    }
}
