<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pagination/tailwindcss_pagination.html.twig */
class __TwigTemplate_107a1604f284b228af28beaf691a634d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/tailwindcss_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/tailwindcss_pagination.html.twig"));

        // line 2
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            yield "    <nav class=\"flex items-center justify-between border-t border-gray-200 px-4 sm:px-0\">
        ";
            // line 5
            yield "        <div class=\"-mt-px flex w-0 flex-1\">
            ";
            // line 6
            if (array_key_exists("previous", $context)) {
                // line 7
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 7, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 7, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 7, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 7, $this->source); })())])), "html", null, true);
                yield "\"
                   class=\"inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700\">
                    <svg class=\"mr-3 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z\" clip-rule=\"evenodd\" />
                    </svg>
                    Précédent
                </a>
            ";
            } else {
                // line 15
                yield "                <span class=\"inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-400 cursor-not-allowed\">
                     <svg class=\"mr-3 h-5 w-5 text-gray-300\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z\" clip-rule=\"evenodd\" />
                    </svg>
                    Précédent
                </span>
            ";
            }
            // line 22
            yield "        </div>

        ";
            // line 25
            yield "        <div class=\"hidden md:-mt-px md:flex\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 27
                yield "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 27, $this->source); })()))) {
                    // line 28
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 28, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 28, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 28, $this->source); })()) => $context["page"]])), "html", null, true);
                    yield "\"
                       class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700\">
                        ";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                    </a>
                ";
                } else {
                    // line 33
                    yield "                    <span class=\"inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-indigo-600\" aria-current=\"page\">
                        ";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                    </span>
                ";
                }
                // line 37
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "        </div>

        ";
            // line 41
            yield "        <div class=\"-mt-px flex w-0 flex-1 justify-end\">
            ";
            // line 42
            if (array_key_exists("next", $context)) {
                // line 43
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 43, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 43, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 43, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 43, $this->source); })())])), "html", null, true);
                yield "\"
                   class=\"inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700\">
                    Suivant
                    <svg class=\"ml-3 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z\" clip-rule=\"evenodd\" />
                    </svg>
                </a>
            ";
            } else {
                // line 51
                yield "                <span class=\"inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-400 cursor-not-allowed\">
                    Suivant
                    <svg class=\"ml-3 h-5 w-5 text-gray-300\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z\" clip-rule=\"evenodd\" />
                    </svg>
                </span>
            ";
            }
            // line 58
            yield "        </div>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pagination/tailwindcss_pagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  150 => 58,  141 => 51,  129 => 43,  127 => 42,  124 => 41,  120 => 38,  114 => 37,  108 => 34,  105 => 33,  99 => 30,  93 => 28,  90 => 27,  86 => 26,  83 => 25,  79 => 22,  70 => 15,  58 => 7,  56 => 6,  53 => 5,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/pagination/tailwindcss_pagination.html.twig #}
{% if pageCount > 1 %}
    <nav class=\"flex items-center justify-between border-t border-gray-200 px-4 sm:px-0\">
        {# Previous Page Link #}
        <div class=\"-mt-px flex w-0 flex-1\">
            {% if previous is defined %}
                <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\"
                   class=\"inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700\">
                    <svg class=\"mr-3 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z\" clip-rule=\"evenodd\" />
                    </svg>
                    Précédent
                </a>
            {% else %}
                <span class=\"inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-400 cursor-not-allowed\">
                     <svg class=\"mr-3 h-5 w-5 text-gray-300\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z\" clip-rule=\"evenodd\" />
                    </svg>
                    Précédent
                </span>
            {% endif %}
        </div>

        {# Page Number Links #}
        <div class=\"hidden md:-mt-px md:flex\">
            {% for page in pagesInRange %}
                {% if page != current %}
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\"
                       class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700\">
                        {{ page }}
                    </a>
                {% else %}
                    <span class=\"inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-indigo-600\" aria-current=\"page\">
                        {{ page }}
                    </span>
                {% endif %}
            {% endfor %}
        </div>

        {# Next Page Link #}
        <div class=\"-mt-px flex w-0 flex-1 justify-end\">
            {% if next is defined %}
                <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\"
                   class=\"inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700\">
                    Suivant
                    <svg class=\"ml-3 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z\" clip-rule=\"evenodd\" />
                    </svg>
                </a>
            {% else %}
                <span class=\"inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-400 cursor-not-allowed\">
                    Suivant
                    <svg class=\"ml-3 h-5 w-5 text-gray-300\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z\" clip-rule=\"evenodd\" />
                    </svg>
                </span>
            {% endif %}
        </div>
    </nav>
{% endif %}", "pagination/tailwindcss_pagination.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/pagination/tailwindcss_pagination.html.twig");
    }
}
