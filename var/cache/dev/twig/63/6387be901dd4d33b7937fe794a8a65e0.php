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

/* event/index.html.twig */
class __TwigTemplate_0455f94c03dae0159fb4173adfc5fdb2 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Événements - TrottiCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <div data-lov-id=\"src/pages/Events.tsx:76:4\" class=\"min-h-screen bg-gray-50 page-content\"> ";
        // line 8
        yield "        ";
        // line 9
        yield "
        <div data-lov-id=\"src/pages/Events.tsx:78:6\" class=\"container mx-auto px-4 py-16\"> ";
        // line 11
        yield "            <h2 data-lov-id=\"src/pages/Events.tsx:79:8\" class=\"text-3xl font-bold text-gray-900 mb-8 section-title\"> ";
        // line 12
        yield "                Événements
            </h2>

            ";
        // line 16
        yield "            <div data-lov-id=\"src/pages/Events.tsx:81:8\" class=\"mb-6 flex flex-col md:flex-row gap-4 items-start md:items-center event-filters\"> ";
        // line 17
        yield "                ";
        // line 18
        yield "                <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_index");
        yield "\" class=\"flex-grow max-w-md\"> ";
        // line 19
        yield "                    <input type=\"hidden\" name=\"filter\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\"> ";
        // line 20
        yield "                    <input data-lov-id=\"src/pages/Events.tsx:82:10\"
                           type=\"search\" ";
        // line 22
        yield "                           name=\"search\" ";
        // line 23
        yield "                           class=\"search-input\" ";
        // line 24
        yield "                           placeholder=\"Rechercher des événements...\"
                           value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_term", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 25, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                    ";
        // line 27
        yield "                    ";
        // line 28
        yield "                </form>

                ";
        // line 31
        yield "                <div data-lov-id=\"src/pages/Events.tsx:89:10\" class=\"flex gap-2 filter-buttons\"> ";
        // line 32
        yield "                    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_index", ["filter" => "all", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 32, $this->source); })())]), "html", null, true);
        yield "\"
                       class=\"button ";
        // line 33
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 33, $this->source); })()) == "all")) ? ("button-primary") : ("button-secondary"));
        yield "\"> ";
        // line 34
        yield "                        Tous
                    </a>
                    <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_index", ["filter" => "upcoming", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 36, $this->source); })())]), "html", null, true);
        yield "\"
                       class=\"button ";
        // line 37
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 37, $this->source); })()) == "upcoming")) ? ("button-primary") : ("button-secondary"));
        yield "\">
                        À venir
                    </a>
                    <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_index", ["filter" => "past", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 40, $this->source); })())]), "html", null, true);
        yield "\"
                       class=\"button ";
        // line 41
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 41, $this->source); })()) == "past")) ? ("button-primary") : ("button-secondary"));
        yield "\">
                        Passés
                    </a>
                </div>
            </div>

            ";
        // line 48
        yield "            <div data-lov-id=\"src/pages/Events.tsx:111:8\" class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 events-grid\"> ";
        // line 49
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events_data"]) || array_key_exists("events_data", $context) ? $context["events_data"] : (function () { throw new RuntimeError('Variable "events_data" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["event_data"]) {
            // line 50
            yield "                    ";
            // line 51
            yield "                    ";
            yield from $this->loadTemplate("public/event/_event_card.html.twig", "event/index.html.twig", 51)->unwrap()->yield(CoreExtension::merge($context, ["event_data" => $context["event_data"]]));
            // line 52
            yield "                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 53
            yield "                    <div class=\"col-span-full text-center py-10 text-gray-500\"> ";
            // line 54
            yield "                        <p><i class=\"fas fa-info-circle fa-2x mb-3\"></i></p> ";
            // line 55
            yield "                        <p>Aucun événement trouvé correspondant à vos critères.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event_data'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "            </div>

        </div> ";
        // line 61
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 67
        yield "    <script>
        // Example: Basic active state toggling for filter buttons (if not using page reload)
        /*
        document.querySelectorAll('.filter-buttons .button').forEach(button => {
            button.addEventListener('click', function(e) {
                 // Remove active class from all
                 document.querySelectorAll('.filter-buttons .button').forEach(btn => {
                     btn.classList.remove('button-primary');
                     btn.classList.add('button-secondary');
                 });
                 // Add active class to clicked button
                 this.classList.remove('button-secondary');
                 this.classList.add('button-primary');
                 // Add AJAX call or form submission logic here
                 // e.preventDefault(); // Prevent link navigation if using AJAX
            });
        });
        */
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event/index.html.twig";
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
        return array (  268 => 67,  263 => 65,  250 => 64,  239 => 61,  235 => 58,  227 => 55,  225 => 54,  223 => 53,  210 => 52,  207 => 51,  205 => 50,  186 => 49,  184 => 48,  175 => 41,  171 => 40,  165 => 37,  161 => 36,  157 => 34,  154 => 33,  149 => 32,  147 => 31,  143 => 28,  141 => 27,  137 => 25,  134 => 24,  132 => 23,  130 => 22,  127 => 20,  123 => 19,  119 => 18,  117 => 17,  115 => 16,  110 => 12,  108 => 11,  105 => 9,  103 => 8,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/public/event/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Événements - TrottiCare{% endblock %}

{% block body %}
    <div data-lov-id=\"src/pages/Events.tsx:76:4\" class=\"min-h-screen bg-gray-50 page-content\"> {# Added page-content for flex layout #}
        {# Header is included in base.html.twig #}

        <div data-lov-id=\"src/pages/Events.tsx:78:6\" class=\"container mx-auto px-4 py-16\"> {# Use container class from CSS #}
            <h2 data-lov-id=\"src/pages/Events.tsx:79:8\" class=\"text-3xl font-bold text-gray-900 mb-8 section-title\"> {# Use classes from CSS #}
                Événements
            </h2>

            {# Filter and Search Controls #}
            <div data-lov-id=\"src/pages/Events.tsx:81:8\" class=\"mb-6 flex flex-col md:flex-row gap-4 items-start md:items-center event-filters\"> {# Added custom class #}
                {# Search Form #}
                <form method=\"get\" action=\"{{ path('public_event_index') }}\" class=\"flex-grow max-w-md\"> {# Use flex-grow #}
                    <input type=\"hidden\" name=\"filter\" value=\"{{ current_filter }}\"> {# Keep current filter when searching #}
                    <input data-lov-id=\"src/pages/Events.tsx:82:10\"
                           type=\"search\" {# Use search type #}
                           name=\"search\" {# Add name attribute #}
                           class=\"search-input\" {# Use custom class for styling #}
                           placeholder=\"Rechercher des événements...\"
                           value=\"{{ search_term|default('') }}\">
                    {# Consider adding a submit button or trigger search on input change via JS #}
                    {# <button type=\"submit\" class=\"button button-secondary\">Rechercher</button> #}
                </form>

                {# Filter Buttons (Links that reload the page with query params) #}
                <div data-lov-id=\"src/pages/Events.tsx:89:10\" class=\"flex gap-2 filter-buttons\"> {# Added custom class #}
                    <a href=\"{{ path('public_event_index', {'filter': 'all', 'search': search_term}) }}\"
                       class=\"button {{ current_filter == 'all' ? 'button-primary' : 'button-secondary' }}\"> {# Active state styling #}
                        Tous
                    </a>
                    <a href=\"{{ path('public_event_index', {'filter': 'upcoming', 'search': search_term}) }}\"
                       class=\"button {{ current_filter == 'upcoming' ? 'button-primary' : 'button-secondary' }}\">
                        À venir
                    </a>
                    <a href=\"{{ path('public_event_index', {'filter': 'past', 'search': search_term}) }}\"
                       class=\"button {{ current_filter == 'past' ? 'button-primary' : 'button-secondary' }}\">
                        Passés
                    </a>
                </div>
            </div>

            {# Event Grid #}
            <div data-lov-id=\"src/pages/Events.tsx:111:8\" class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 events-grid\"> {# Use classes from CSS #}
                {% for event_data in events_data %}
                    {# Pass the whole event_data array to the partial #}
                    {% include 'public/event/_event_card.html.twig' with { 'event_data': event_data } %}
                {% else %}
                    <div class=\"col-span-full text-center py-10 text-gray-500\"> {# Use col-span-full #}
                        <p><i class=\"fas fa-info-circle fa-2x mb-3\"></i></p> {# Example icon #}
                        <p>Aucun événement trouvé correspondant à vos critères.</p>
                    </div>
                {% endfor %}
            </div>

        </div> {# End container #}
    </div> {# End page-content wrapper #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Optional JS for live search/filter without page reload (more complex) #}
    <script>
        // Example: Basic active state toggling for filter buttons (if not using page reload)
        /*
        document.querySelectorAll('.filter-buttons .button').forEach(button => {
            button.addEventListener('click', function(e) {
                 // Remove active class from all
                 document.querySelectorAll('.filter-buttons .button').forEach(btn => {
                     btn.classList.remove('button-primary');
                     btn.classList.add('button-secondary');
                 });
                 // Add active class to clicked button
                 this.classList.remove('button-secondary');
                 this.classList.add('button-primary');
                 // Add AJAX call or form submission logic here
                 // e.preventDefault(); // Prevent link navigation if using AJAX
            });
        });
        */
    </script>
{% endblock %}", "event/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/event/index.html.twig");
    }
}
