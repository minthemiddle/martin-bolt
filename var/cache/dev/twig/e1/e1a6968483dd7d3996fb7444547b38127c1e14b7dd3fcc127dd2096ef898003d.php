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

/* @bolt/helpers/_pager_bootstrap.html.twig */
class __TwigTemplate_f8aa481d632dc14bbce79161df8353ecf5eec0fcb03c4e39fa0d33b3ff14e503 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'item' => [$this, 'block_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/helpers/_pager_bootstrap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bolt/helpers/_pager_bootstrap.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["start"] = max((twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 12, $this->source); })()), "currentPage", [], "any", false, false, false, 12) - (isset($context["surround"]) || array_key_exists("surround", $context) ? $context["surround"] : (function () { throw new RuntimeError('Variable "surround" does not exist.', 12, $this->source); })())), 1);
        // line 13
        $context["end"] = min((twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 13, $this->source); })()), "currentPage", [], "any", false, false, false, 13) + (isset($context["surround"]) || array_key_exists("surround", $context) ? $context["surround"] : (function () { throw new RuntimeError('Variable "surround" does not exist.', 13, $this->source); })())), twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 13, $this->source); })()), "nbPages", [], "any", false, false, false, 13));
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('item', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        if (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "haveToPaginate", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "haveToPaginate", [], "any", false, false, false, 29))) : (""))) {
            // line 30
            echo "    <ul class=\"pagination ";
            ((0 !== twig_compare((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 30, $this->source); })()), "pagination")) ? (print (twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 30, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\" >
        ";
            // line 32
            echo "        ";
            $context["p"] = twig_array_merge((isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 32, $this->source); })()), ["page" => ((twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 32, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 32)) ? (twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 32, $this->source); })()), "previousPage", [], "any", false, false, false, 32)) : (1))]);
            // line 33
            echo "        ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 33, $this->source); })()), (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 33, $this->source); })())), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pager.previous"), "enabled" => twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 33, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 33), "rel" => "previous"];
            if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 33, $this->getSourceContext());
            }
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
            // line 34
            echo "            ";
            $this->displayBlock("item", $context, $blocks);
            echo "
        ";
            $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
            // line 36
            echo "
        ";
            // line 38
            echo "        ";
            if (1 === twig_compare((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 38, $this->source); })()), 1)) {
                // line 39
                echo "            ";
                $context["p"] = twig_array_merge((isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 39, $this->source); })()), ["page" => 1]);
                // line 40
                echo "            ";
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 40, $this->source); })()), (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 40, $this->source); })())), "label" => 1];
                if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 40, $this->getSourceContext());
                }
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
                // line 41
                echo "                ";
                $this->displayBlock("item", $context, $blocks);
                echo "
            ";
                $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
                // line 43
                echo "        ";
            }
            // line 44
            echo "        ";
            if (1 === twig_compare((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 44, $this->source); })()), 2)) {
                // line 45
                echo "            ";
                $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context;
                $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ["label" => "…", "enabled" => false];
                if (!twig_test_iterable($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 45, $this->getSourceContext());
                }
                $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_to_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666));
                // line 46
                echo "                ";
                $this->displayBlock("item", $context, $blocks);
                echo "
            ";
                $context = $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4;
                // line 48
                echo "        ";
            }
            // line 49
            echo "
        ";
            // line 51
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 51, $this->source); })()), (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 51, $this->source); })())));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                echo "            ";
                $context["p"] = twig_array_merge((isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 52, $this->source); })()), ["page" => $context["i"]]);
                // line 53
                echo "            ";
                $context["class"] = ((0 === twig_compare($context["i"], twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 53, $this->source); })()), "currentPage", [], "any", false, false, false, 53))) ? (" active") : (""));
                // line 54
                echo "            ";
                $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context;
                $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 54, $this->source); })()), (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 54, $this->source); })())), "label" => $context["i"], "class" => (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 54, $this->source); })())];
                if (!twig_test_iterable($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 54, $this->getSourceContext());
                }
                $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_to_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52));
                // line 55
                echo "                ";
                $this->displayBlock("item", $context, $blocks);
                echo "
            ";
                $context = $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e;
                // line 57
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
        ";
            // line 60
            echo "        ";
            if (-1 === twig_compare(((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 60, $this->source); })()) + 1), twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 60, $this->source); })()), "nbPages", [], "any", false, false, false, 60))) {
                // line 61
                echo "            ";
                $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context;
                $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ["label" => "…", "enabled" => false];
                if (!twig_test_iterable($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 61, $this->getSourceContext());
                }
                $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_to_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386));
                // line 62
                echo "                ";
                $this->displayBlock("item", $context, $blocks);
                echo "
            ";
                $context = $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136;
                // line 64
                echo "        ";
            }
            // line 65
            echo "        ";
            if (-1 === twig_compare((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 65, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 65, $this->source); })()), "nbPages", [], "any", false, false, false, 65))) {
                // line 66
                echo "            ";
                $context["p"] = twig_array_merge((isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 66, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 66, $this->source); })()), "nbPages", [], "any", false, false, false, 66)]);
                // line 67
                echo "            ";
                $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context;
                $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 67, $this->source); })()), (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 67, $this->source); })())), "label" => twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 67, $this->source); })()), "nbPages", [], "any", false, false, false, 67)];
                if (!twig_test_iterable($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 67, $this->getSourceContext());
                }
                $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_to_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae));
                // line 68
                echo "                ";
                $this->displayBlock("item", $context, $blocks);
                echo "
            ";
                $context = $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9;
                // line 70
                echo "        ";
            }
            // line 71
            echo "
        ";
            // line 73
            echo "        ";
            $context["p"] = twig_array_merge((isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 73, $this->source); })()), ["page" => ((twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 73, $this->source); })()), "hasNextPage", [], "any", false, false, false, 73)) ? (twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 73, $this->source); })()), "nextPage", [], "any", false, false, false, 73)) : (twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 73, $this->source); })()), "nbPages", [], "any", false, false, false, 73)))]);
            // line 74
            echo "        ";
            $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context;
            $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 74, $this->source); })()), (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 74, $this->source); })())), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pager.next"), "enabled" => twig_get_attribute($this->env, $this->source, (isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 74, $this->source); })()), "hasNextPage", [], "any", false, false, false, 74), "rel" => "next"];
            if (!twig_test_iterable($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 74, $this->getSourceContext());
            }
            $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_to_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40));
            // line 75
            echo "            ";
            $this->displayBlock("item", $context, $blocks);
            echo "
        ";
            $context = $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f;
            // line 77
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 16
        echo "    ";
        if (((isset($context["path"]) || array_key_exists("path", $context)) && ( !(isset($context["enabled"]) || array_key_exists("enabled", $context)) || 0 !== twig_compare((isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new RuntimeError('Variable "enabled" does not exist.', 16, $this->source); })()), false)))) {
            // line 17
            echo "        <li class=\"page-item ";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\">
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 18, $this->source); })()), (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 18, $this->source); })())), "html", null, true);
            echo "\" class=\"page-link\"";
            if ((((isset($context["rel"]) || array_key_exists("rel", $context))) ? (_twig_default_filter((isset($context["rel"]) || array_key_exists("rel", $context) ? $context["rel"] : (function () { throw new RuntimeError('Variable "rel" does not exist.', 18, $this->source); })()))) : (""))) {
                echo " rel=\"";
                echo twig_escape_filter($this->env, (isset($context["rel"]) || array_key_exists("rel", $context) ? $context["rel"] : (function () { throw new RuntimeError('Variable "rel" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
                ";
            // line 19
            echo twig_escape_filter($this->env, (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })()), "…")) : ("…")), "html", null, true);
            echo "
            </a>
        </li>
    ";
        } elseif (        // line 22
(isset($context["label"]) || array_key_exists("label", $context))) {
            // line 23
            echo "        <li class=\"page-item disabled\">
            <a class=\"page-link ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" disabled>";
            echo twig_escape_filter($this->env, (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 24, $this->source); })()), "…")) : ("…")), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/helpers/_pager_bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 24,  305 => 23,  303 => 22,  297 => 19,  287 => 18,  282 => 17,  279 => 16,  269 => 15,  257 => 77,  251 => 75,  242 => 74,  239 => 73,  236 => 71,  233 => 70,  227 => 68,  218 => 67,  215 => 66,  212 => 65,  209 => 64,  203 => 62,  194 => 61,  191 => 60,  188 => 58,  174 => 57,  168 => 55,  159 => 54,  156 => 53,  153 => 52,  135 => 51,  132 => 49,  129 => 48,  123 => 46,  114 => 45,  111 => 44,  108 => 43,  102 => 41,  93 => 40,  90 => 39,  87 => 38,  84 => 36,  78 => 34,  69 => 33,  66 => 32,  61 => 30,  59 => 29,  56 => 28,  54 => 15,  51 => 14,  49 => 13,  47 => 12,  44 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Predefined variables:

 - `records`: The records to iterate over
 - `route`: The name of the route, to use in `{{ path() }}`
 - `routeParams`: Parameters to pass in to `{{ path() }}` to create the correct url
 - `surround`: The amount of items to show around the 'current' one. \"3\" by default.
 - `class`: The main CSS class to apply to the pager. \"pagination\" by default

#}

{% set start = max(records.currentPage - surround, 1) %}
{% set end = min(records.currentPage + surround, records.nbPages) %}

{% block item %}
    {% if path is defined and (enabled is not defined or enabled != false) %}
        <li class=\"page-item {{ class }}\">
            <a href=\"{{ path(route, p) }}\" class=\"page-link\" {%- if rel|default() %} rel=\"{{ rel }}\"{% endif -%}>
                {{ label|default('…') }}
            </a>
        </li>
    {% elseif label is defined %}
        <li class=\"page-item disabled\">
            <a class=\"page-link {{ class }}\" disabled>{{ label|default('…') }}</a>
        </li>
    {% endif %}
{% endblock item %}

{% if records.haveToPaginate|default() %}
    <ul class=\"pagination {{ class != 'pagination' ? class }}\" >
        {# Previous Button #}
        {% set p = routeParams|merge({page: records.hasPreviousPage ? records.previousPage : 1 }) %}
        {% with {'path': path(route, p), 'label': 'pager.previous'|trans, 'enabled': records.hasPreviousPage, 'rel': 'previous' } %}
            {{ block('item') }}
        {% endwith %}

        {# If we didn't start at the beginning, add a link to the first. #}
        {% if start > 1 %}
            {% set p = routeParams|merge({page: 1}) %}
            {% with {'path': path(route, p), 'label': 1 } %}
                {{ block('item') }}
            {% endwith %}
        {% endif %}
        {% if start > 2 %}
            {% with { 'label': '…', 'enabled': false } %}
                {{ block('item') }}
            {% endwith %}
        {% endif %}

        {# Iterate over the items. #}
        {% for i in start .. end %}
            {% set p = routeParams|merge({page: i}) %}
            {% set class = (i == records.currentPage ? ' active') %}
            {% with {'path': path(route, p), 'label': i, 'class': class } %}
                {{ block('item') }}
            {% endwith %}
        {% endfor %}

        {# If we didn't finish with the last, add a link to the end #}
        {% if (end + 1) < records.nbPages %}
            {% with { 'label': '…', 'enabled': false  } %}
                {{ block('item') }}
            {% endwith %}
        {% endif %}
        {% if end < records.nbPages %}
            {% set p = routeParams|merge({page: records.nbPages}) %}
            {% with {'path': path(route, p), 'label': records.nbPages } %}
                {{ block('item') }}
            {% endwith %}
        {% endif %}

        {# Next Button #}
        {% set p = routeParams|merge({page: records.hasNextPage ? records.nextPage : records.nbPages }) %}
        {% with {'path': path(route, p), 'label': 'pager.next'|trans, 'enabled': records.hasNextPage, 'rel': 'next' } %}
            {{ block('item') }}
        {% endwith %}
    </ul>
{#</div>#}
{% endif %}
", "@bolt/helpers/_pager_bootstrap.html.twig", "/Users/martinbetz/Sites/martin-bolt/vendor/bolt/core/templates/helpers/_pager_bootstrap.html.twig");
    }
}
