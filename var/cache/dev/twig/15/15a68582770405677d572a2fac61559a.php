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

/* client/event/index.html.twig */
class __TwigTemplate_3c59599664f16a87fdd6cd6d1dd3f653 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/event/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 8
        yield "    ";
        // line 9
        yield "    <style>
        /* Basic form input/select styles (reuse/adapt) */
        .form-input, .form-select {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        .form-select-sm {
            padding-top: 0.375rem; padding-bottom: 0.375rem; font-size: 0.75rem;
        }
        .form-input:focus, .form-select:focus {
            outline: none; border-color: #3b82f6;
            box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */
        }
        .search-input { padding-left: 2.5rem; }

        /* Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* KNP Paginator Styles (Tailwind Adaption) */
        .pagination { display: flex; justify-content: center; padding-left: 0; list-style: none; }
        .page-item { margin: 0 0.125rem; }
        .page-item.disabled .page-link, .page-item.disabled span { color: #6b7280; pointer-events: none; background-color: #fff; border-color: #e5e7eb; cursor: not-allowed;}
        .page-item.active .page-link, .page-item.active span { z-index: 10; color: #fff; background-color: #3b82f6; border-color: #3b82f6; }
        .page-link, .page-item span { position: relative; display: block; padding: 0.5rem 0.75rem; line-height: 1.25; color: #3b82f6; background-color: #fff; border: 1px solid #e5e7eb; border-radius: 0.375rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .page-link:hover { z-index: 5; color: #2563eb; text-decoration: none; background-color: #f9fafb; border-color: #d1d5db; }

        /* KNP Sortable Link Styles (not used on client page, but keep for consistency if needed elsewhere) */
        th a.sortable { color: #4b5563; text-decoration: none; display: inline-flex; align-items: center; gap: 0.25rem; white-space: nowrap; }
        th a.sortable:hover { color: #1f2937; }
        th a.sortable .fas { color: #9ca3af; font-size: 0.8em; }
        th a.sortable.asc .fa-sort-up, th a.sortable.desc .fa-sort-down { color: #3b82f6; }
        th a.sortable .fa-sort { color: #9ca3af; }

        /* FontAwesome (if used) */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-search:before { content: \"\\f002\"; }
        .fa-info-circle:before { content: \"\\f05a\"; }
        .mr-2 { margin-right: 0.5rem; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
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

        // line 64
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            <h1 class=\"text-3xl font-bold text-gray-900 mb-6 text-center md:text-left\">
                Découvrez nos Événements
            </h1>

            ";
        // line 71
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "client/event/index.html.twig", 71);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 72
        yield "
            ";
        // line 74
        yield "            <div class=\"mb-8 p-4 bg-white rounded-lg shadow-md border border-gray-200\">
                <form method=\"get\" action=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index");
        yield "\" class=\"filter-form grid gap-4 items-end\">

                    ";
        // line 78
        yield "                    <div class=\"md:col-span-2 lg:col-span-2\"> ";
        // line 79
        yield "                        <label for=\"search_id\" class=\"block text-xs font-medium text-gray-600\">Rechercher</label>
                        <div class=\"relative\">
                            <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                <svg class=\"h-4 w-4 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\"> <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" /> </svg>
                            </div>
                            <input type=\"search\" id=\"search_id\" name=\"search\" class=\"form-input search-input w-full text-sm\" placeholder=\"Titre, description, lieu...\" value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_term", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 84, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                        </div>
                    </div>

                    ";
        // line 89
        yield "                    <div>
                        <label for=\"sort_field_id\" class=\"block text-xs font-medium text-gray-600\">Trier par</label>
                        <select name=\"sort\" id=\"sort_field_id\" class=\"form-select text-sm w-full\" onchange=\"this.form.submit()\">
                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allowed_sorts_map"]) || array_key_exists("allowed_sorts_map", $context) ? $context["allowed_sorts_map"] : (function () { throw new RuntimeError('Variable "allowed_sorts_map" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["dql_path"]) {
            // line 93
            yield "                                ";
            // line 94
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dql_path"], "html", null, true);
            yield "\" ";
            yield ((($context["dql_path"] == (isset($context["current_sort_field"]) || array_key_exists("current_sort_field", $context) ? $context["current_sort_field"] : (function () { throw new RuntimeError('Variable "current_sort_field" does not exist.', 94, $this->source); })()))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['dql_path'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "                        </select>
                    </div>

                    ";
        // line 102
        yield "                    <div>
                        <label for=\"sort_direction_id\" class=\"block text-xs font-medium text-gray-600\">Ordre</label>
                        <select name=\"direction\" id=\"sort_direction_id\" class=\"form-select text-sm w-full\" onchange=\"this.form.submit()\">
                            <option value=\"asc\" ";
        // line 105
        yield ((((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 105, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Croissant</option>
                            <option value=\"desc\" ";
        // line 106
        yield ((((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 106, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Décroissant</option>
                        </select>
                    </div>

                    ";
        // line 111
        yield "                    <div class=\"flex flex-col items-start md:self-end\">
                        <label class=\"block text-xs font-medium text-gray-600 mb-1\">Filtrer Dates</label>
                        <div class=\"flex gap-2 flex-wrap w-full\">
                            ";
        // line 114
        $context["filter_buttons"] = ["all" => "Tous", "upcoming" => "À venir", "past" => "Passés"];
        // line 115
        yield "                            ";
        $context["current_filter_param"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "query", [], "any", false, false, false, 115), "get", ["filter", "all"], "method", false, false, false, 115);
        // line 116
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_buttons"]) || array_key_exists("filter_buttons", $context) ? $context["filter_buttons"] : (function () { throw new RuntimeError('Variable "filter_buttons" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 117
            yield "                                ";
            // line 118
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "request", [], "any", false, false, false, 118), "query", [], "any", false, false, false, 118), "all", [], "any", false, false, false, 118), ["filter" => $context["key"], "page" => 1])), "html", null, true);
            yield "\"
                                   class=\"button button-sm ";
            // line 119
            yield ((((isset($context["current_filter_param"]) || array_key_exists("current_filter_param", $context) ? $context["current_filter_param"] : (function () { throw new RuntimeError('Variable "current_filter_param" does not exist.', 119, $this->source); })()) == $context["key"])) ? ("button-primary") : ("button-secondary"));
            yield " flex-grow sm:flex-grow-0\">
                                    ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                        </div>
                    </div>

                    ";
        // line 127
        yield "                    <input type=\"hidden\" name=\"filter\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("current_filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 127, $this->source); })()), "all")) : ("all")), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"limit\" value=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("currentLimit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 128, $this->source); })()), 12)) : (12)), "html", null, true);
        yield "\"> ";
        // line 129
        yield "
                </form>
            </div>


            ";
        // line 135
        yield "            ";
        if ((array_key_exists("pagination", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 135, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 135) > 0))) {
            // line 136
            yield "                <div class=\"text-sm text-gray-600 mb-4\">
                    ";
            // line 137
            $context["totalDbItems"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "getTotalItemCount", [], "any", true, true, false, 137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 137), 0)) : (0));
            // line 138
            yield "                    Environ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalDbItems"]) || array_key_exists("totalDbItems", $context) ? $context["totalDbItems"] : (function () { throw new RuntimeError('Variable "totalDbItems" does not exist.', 138, $this->source); })()), "html", null, true);
            yield " événement";
            yield ((((isset($context["totalDbItems"]) || array_key_exists("totalDbItems", $context) ? $context["totalDbItems"] : (function () { throw new RuntimeError('Variable "totalDbItems" does not exist.', 138, $this->source); })()) > 1)) ? ("s correspondent") : (" correspond"));
            yield " aux critères de base.
                    ";
            // line 140
            yield "                </div>
            ";
        }
        // line 142
        yield "
            ";
        // line 144
        yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 events-grid\">
                ";
        // line 146
        yield "                ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["events_data"]) || array_key_exists("events_data", $context) ? $context["events_data"] : (function () { throw new RuntimeError('Variable "events_data" does not exist.', 146, $this->source); })()))) {
            // line 147
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events_data"]) || array_key_exists("events_data", $context) ? $context["events_data"] : (function () { throw new RuntimeError('Variable "events_data" does not exist.', 147, $this->source); })()));
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
                // line 148
                yield "                        ";
                yield from $this->loadTemplate("event/_event_card.html.twig", "client/event/index.html.twig", 148)->unwrap()->yield(CoreExtension::merge($context, ["event_data" =>                 // line 149
$context["event_data"]]));
                // line 151
                yield "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "                ";
        } else {
            // line 153
            yield "                    ";
            // line 154
            yield "                    <div class=\"col-span-full text-center py-16 px-6 text-gray-500 bg-white rounded-lg shadow-md border border-gray-200\">
                        <svg class=\"mx-auto h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                        </svg>
                        <h3 class=\"mt-2 text-sm font-medium text-gray-900\">Aucun événement trouvé</h3>
                        <p class=\"mt-1 text-sm text-gray-500\">Essayez d'ajuster vos filtres ou revenez plus tard.</p>
                        ";
            // line 161
            yield "                        ";
            $context["is_filtered"] = ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "request", [], "any", false, false, false, 161), "query", [], "any", false, false, false, 161), "get", ["search"], "method", false, false, false, 161)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 162
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "request", [], "any", false, false, false, 162), "query", [], "any", false, false, false, 162), "get", ["filter", "all"], "method", false, false, false, 162) != "all")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 163
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "request", [], "any", false, false, false, 163), "query", [], "any", false, false, false, 163), "get", ["sort", "dateDebut"], "method", false, false, false, 163) != "dateDebut")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 164
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164), "query", [], "any", false, false, false, 164), "get", ["direction", "desc"], "method", false, false, false, 164) != "desc"));
            // line 166
            yield "                        ";
            if ((isset($context["is_filtered"]) || array_key_exists("is_filtered", $context) ? $context["is_filtered"] : (function () { throw new RuntimeError('Variable "is_filtered" does not exist.', 166, $this->source); })())) {
                // line 167
                yield "                            <div class=\"mt-6\">
                                <a href=\"";
                // line 168
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index");
                yield "\" class=\"button button-sm button-secondary\">
                                    Réinitialiser les filtres et tris
                                </a>
                            </div>
                        ";
            }
            // line 173
            yield "                    </div>
                ";
        }
        // line 175
        yield "            </div>

            ";
        // line 178
        yield "            ";
        if ((array_key_exists("pagination", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 178, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 178) > 0))) {
            // line 179
            yield "                <div class=\"pagination-container mt-8\">
                    <div> ";
            // line 181
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 181, $this->source); })()), "pageCount", [], "any", false, false, false, 181) > 1)) {
                // line 182
                yield "                            ";
                yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 182, $this->source); })()));
                yield " ";
                // line 183
                yield "                        ";
            }
            // line 184
            yield "                    </div>
                    <div class=\"pagination-controls\"> ";
            // line 186
            yield "                        <span> ";
            // line 187
            yield "                            ";
            $context["totalItems"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "getTotalItemCount", [], "any", true, true, false, 187)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 187, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 187), 0)) : (0));
            // line 188
            yield "                            ";
            if (((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 188, $this->source); })()) > 0)) {
                // line 189
                yield "                                ";
                $context["firstItem"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 189, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 189) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 189, $this->source); })()), "getItemNumberPerPage", [], "method", false, false, false, 189)) + 1);
                // line 190
                yield "                                ";
                // line 191
                yield "                                ";
                $context["lastItem"] = (((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 191, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events_data"]) || array_key_exists("events_data", $context) ? $context["events_data"] : (function () { throw new RuntimeError('Variable "events_data" does not exist.', 191, $this->source); })()))) - 1);
                // line 192
                yield "                                Affichage de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 192, $this->source); })()), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastItem"]) || array_key_exists("lastItem", $context) ? $context["lastItem"] : (function () { throw new RuntimeError('Variable "lastItem" does not exist.', 192, $this->source); })()), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 192, $this->source); })()), "html", null, true);
                yield "
                            ";
            }
            // line 194
            yield "                     </span>
                        <div class=\"inline-flex items-center\"> ";
            // line 196
            yield "                            <label for=\"itemsPerPageSelect\" class=\"whitespace-nowrap\">par page:</label>
                            <select id=\"itemsPerPageSelect\" class=\"form-select limit-select\">
                                ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allowedLimits"]) || array_key_exists("allowedLimits", $context) ? $context["allowedLimits"] : (function () { throw new RuntimeError('Variable "allowedLimits" does not exist.', 198, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["limitOption"]) {
                // line 199
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitOption"], "html", null, true);
                yield "\" ";
                yield ((($context["limitOption"] == (isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 199, $this->source); })()))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitOption"], "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limitOption'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            yield "                            </select>
                        </div>
                    </div>
                </div>
                ";
            // line 208
            yield "            ";
        }
        // line 209
        yield "

        </div> ";
        // line 212
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 214
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

        // line 215
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 217
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('itemsPerPageSelect');
            if (selectElement) {
                selectElement.addEventListener('change', function() {
                    const newLimit = this.value;
                    const currentUrl = new URL(window.location.href);
                    const params = currentUrl.searchParams;
                    params.set('limit', newLimit);
                    params.set('page', \"1\"); // <-- CORRECTED: Use string '1'
                    currentUrl.search = params.toString();
                    window.location.href = currentUrl.toString();
                });
            }
            // Optional: JS to submit filter form on select change
            // document.querySelectorAll('.filter-form .form-select').forEach(select => {
            //     select.addEventListener('change', () => {
            //         select.closest('form').submit();
            //     });
            // });
        });
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
        return "client/event/index.html.twig";
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
        return array (  552 => 217,  547 => 215,  534 => 214,  523 => 212,  519 => 209,  516 => 208,  510 => 203,  501 => 200,  494 => 199,  490 => 198,  486 => 196,  483 => 194,  473 => 192,  470 => 191,  468 => 190,  465 => 189,  462 => 188,  459 => 187,  457 => 186,  454 => 184,  451 => 183,  447 => 182,  444 => 181,  441 => 179,  438 => 178,  434 => 175,  430 => 173,  422 => 168,  419 => 167,  416 => 166,  414 => 164,  413 => 163,  412 => 162,  410 => 161,  402 => 154,  400 => 153,  397 => 152,  383 => 151,  381 => 149,  379 => 148,  361 => 147,  358 => 146,  355 => 144,  352 => 142,  348 => 140,  341 => 138,  339 => 137,  336 => 136,  333 => 135,  326 => 129,  323 => 128,  318 => 127,  313 => 123,  304 => 120,  300 => 119,  295 => 118,  293 => 117,  288 => 116,  285 => 115,  283 => 114,  278 => 111,  271 => 106,  267 => 105,  262 => 102,  257 => 98,  248 => 95,  241 => 94,  239 => 93,  235 => 92,  230 => 89,  223 => 84,  216 => 79,  214 => 78,  209 => 75,  206 => 74,  203 => 72,  193 => 71,  184 => 64,  171 => 63,  109 => 9,  107 => 8,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Événements - TrottiCare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    {# Add any page-specific styles or overrides here #}
    <style>
        /* Basic form input/select styles (reuse/adapt) */
        .form-input, .form-select {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        .form-select-sm {
            padding-top: 0.375rem; padding-bottom: 0.375rem; font-size: 0.75rem;
        }
        .form-input:focus, .form-select:focus {
            outline: none; border-color: #3b82f6;
            box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */
        }
        .search-input { padding-left: 2.5rem; }

        /* Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* KNP Paginator Styles (Tailwind Adaption) */
        .pagination { display: flex; justify-content: center; padding-left: 0; list-style: none; }
        .page-item { margin: 0 0.125rem; }
        .page-item.disabled .page-link, .page-item.disabled span { color: #6b7280; pointer-events: none; background-color: #fff; border-color: #e5e7eb; cursor: not-allowed;}
        .page-item.active .page-link, .page-item.active span { z-index: 10; color: #fff; background-color: #3b82f6; border-color: #3b82f6; }
        .page-link, .page-item span { position: relative; display: block; padding: 0.5rem 0.75rem; line-height: 1.25; color: #3b82f6; background-color: #fff; border: 1px solid #e5e7eb; border-radius: 0.375rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .page-link:hover { z-index: 5; color: #2563eb; text-decoration: none; background-color: #f9fafb; border-color: #d1d5db; }

        /* KNP Sortable Link Styles (not used on client page, but keep for consistency if needed elsewhere) */
        th a.sortable { color: #4b5563; text-decoration: none; display: inline-flex; align-items: center; gap: 0.25rem; white-space: nowrap; }
        th a.sortable:hover { color: #1f2937; }
        th a.sortable .fas { color: #9ca3af; font-size: 0.8em; }
        th a.sortable.asc .fa-sort-up, th a.sortable.desc .fa-sort-down { color: #3b82f6; }
        th a.sortable .fa-sort { color: #9ca3af; }

        /* FontAwesome (if used) */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-search:before { content: \"\\f002\"; }
        .fa-info-circle:before { content: \"\\f05a\"; }
        .mr-2 { margin-right: 0.5rem; }
    </style>
{% endblock %}


{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            <h1 class=\"text-3xl font-bold text-gray-900 mb-6 text-center md:text-left\">
                Découvrez nos Événements
            </h1>

            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# Filter and Sort Controls Card #}
            <div class=\"mb-8 p-4 bg-white rounded-lg shadow-md border border-gray-200\">
                <form method=\"get\" action=\"{{ path('client_event_index') }}\" class=\"filter-form grid gap-4 items-end\">

                    {# Search Input #}
                    <div class=\"md:col-span-2 lg:col-span-2\"> {# Adjust span based on final layout #}
                        <label for=\"search_id\" class=\"block text-xs font-medium text-gray-600\">Rechercher</label>
                        <div class=\"relative\">
                            <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                <svg class=\"h-4 w-4 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\"> <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" /> </svg>
                            </div>
                            <input type=\"search\" id=\"search_id\" name=\"search\" class=\"form-input search-input w-full text-sm\" placeholder=\"Titre, description, lieu...\" value=\"{{ search_term|default('') }}\">
                        </div>
                    </div>

                    {# Sort Field Dropdown #}
                    <div>
                        <label for=\"sort_field_id\" class=\"block text-xs font-medium text-gray-600\">Trier par</label>
                        <select name=\"sort\" id=\"sort_field_id\" class=\"form-select text-sm w-full\" onchange=\"this.form.submit()\">
                            {% for label, dql_path in allowed_sorts_map %}
                                {# VALUE is the DQL path, TEXT is the user-friendly label #}
                                <option value=\"{{ dql_path }}\" {{ dql_path == current_sort_field ? 'selected' : '' }}>
                                    {{ label }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>

                    {# Sort Direction Dropdown #}
                    <div>
                        <label for=\"sort_direction_id\" class=\"block text-xs font-medium text-gray-600\">Ordre</label>
                        <select name=\"direction\" id=\"sort_direction_id\" class=\"form-select text-sm w-full\" onchange=\"this.form.submit()\">
                            <option value=\"asc\" {{ current_direction == 'asc' ? 'selected' : '' }}>Croissant</option>
                            <option value=\"desc\" {{ current_direction == 'desc' ? 'selected' : '' }}>Décroissant</option>
                        </select>
                    </div>

                    {# Filter Buttons (Links) #}
                    <div class=\"flex flex-col items-start md:self-end\">
                        <label class=\"block text-xs font-medium text-gray-600 mb-1\">Filtrer Dates</label>
                        <div class=\"flex gap-2 flex-wrap w-full\">
                            {% set filter_buttons = {'all':'Tous', 'upcoming':'À venir', 'past':'Passés'} %}
                            {% set current_filter_param = app.request.query.get('filter', 'all') %}
                            {% for key, label in filter_buttons %}
                                {# Merge ALL current query parameters EXCEPT page, and then add the new filter #}
                                <a href=\"{{ path('client_event_index', app.request.query.all|merge({'filter': key, 'page': 1})) }}\"
                                   class=\"button button-sm {{ current_filter_param == key ? 'button-primary' : 'button-secondary' }} flex-grow sm:flex-grow-0\">
                                    {{ label }}
                                </a>
                            {% endfor %}
                        </div>
                    </div>

                    {# Hidden inputs to preserve state when changing sort/direction via form submit #}
                    <input type=\"hidden\" name=\"filter\" value=\"{{ current_filter|default('all') }}\">
                    <input type=\"hidden\" name=\"limit\" value=\"{{ currentLimit|default(12) }}\"> {# Keep current limit #}

                </form>
            </div>


            {# Results Count #}
            {% if pagination is defined and pagination.getTotalItemCount > 0 %}
                <div class=\"text-sm text-gray-600 mb-4\">
                    {% set totalDbItems = pagination.getTotalItemCount|default(0) %}
                    Environ {{ totalDbItems }} événement{{ totalDbItems > 1 ? 's correspondent' : ' correspond' }} aux critères de base.
                    {# Removed note about PHP filtering accuracy as it's not used here #}
                </div>
            {% endif %}

            {# Event Grid #}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 events-grid\">
                {# Check the PREPARED data array 'events_data' #}
                {% if events_data is not empty %}
                    {% for event_data in events_data %}
                        {% include 'event/_event_card.html.twig' with {
                            'event_data': event_data
                        } %}
                    {% endfor %}
                {% else %}
                    {# No results message #}
                    <div class=\"col-span-full text-center py-16 px-6 text-gray-500 bg-white rounded-lg shadow-md border border-gray-200\">
                        <svg class=\"mx-auto h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                        </svg>
                        <h3 class=\"mt-2 text-sm font-medium text-gray-900\">Aucun événement trouvé</h3>
                        <p class=\"mt-1 text-sm text-gray-500\">Essayez d'ajuster vos filtres ou revenez plus tard.</p>
                        {# Check form filter values or request params #}
                        {% set is_filtered = app.request.query.get('search') is not empty
                            or app.request.query.get('filter', 'all') != 'all'
                            or app.request.query.get('sort', 'dateDebut') != 'dateDebut'
                            or app.request.query.get('direction', 'desc') != 'desc'
                        %}
                        {% if is_filtered %}
                            <div class=\"mt-6\">
                                <a href=\"{{ path('client_event_index') }}\" class=\"button button-sm button-secondary\">
                                    Réinitialiser les filtres et tris
                                </a>
                            </div>
                        {% endif %}
                    </div>
                {% endif %}
            </div>

            {# Pagination Controls Container #}
            {% if pagination is defined and pagination.getTotalItemCount > 0 %}
                <div class=\"pagination-container mt-8\">
                    <div> {# Links div #}
                        {% if pagination.pageCount > 1 %}
                            {{ knp_pagination_render(pagination) }} {# Uses configured Tailwind template #}
                        {% endif %}
                    </div>
                    <div class=\"pagination-controls\"> {# Summary & Limit div #}
                        <span> {# Item count text #}
                            {% set totalItems = pagination.getTotalItemCount|default(0) %}
                            {% if totalItems > 0 %}
                                {% set firstItem = (pagination.getCurrentPageNumber() - 1) * pagination.getItemNumberPerPage() + 1 %}
                                {# Use the count of items prepared for the view for 'lastItem' #}
                                {% set lastItem = firstItem + events_data|length - 1 %}
                                Affichage de {{ firstItem }} à {{ lastItem }} sur {{ totalItems }}
                            {% endif %}
                     </span>
                        <div class=\"inline-flex items-center\"> {# Limit Selector #}
                            <label for=\"itemsPerPageSelect\" class=\"whitespace-nowrap\">par page:</label>
                            <select id=\"itemsPerPageSelect\" class=\"form-select limit-select\">
                                {% for limitOption in allowedLimits %}
                                    <option value=\"{{ limitOption }}\" {{ limitOption == currentLimit ? 'selected' : '' }}>
                                        {{ limitOption }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                </div>
                {# Removed note about pagination accuracy as PHP filter isn't used #}
            {% endif %}


        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {# --- JavaScript for Limit Selector --- #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('itemsPerPageSelect');
            if (selectElement) {
                selectElement.addEventListener('change', function() {
                    const newLimit = this.value;
                    const currentUrl = new URL(window.location.href);
                    const params = currentUrl.searchParams;
                    params.set('limit', newLimit);
                    params.set('page', \"1\"); // <-- CORRECTED: Use string '1'
                    currentUrl.search = params.toString();
                    window.location.href = currentUrl.toString();
                });
            }
            // Optional: JS to submit filter form on select change
            // document.querySelectorAll('.filter-form .form-select').forEach(select => {
            //     select.addEventListener('change', () => {
            //         select.closest('form').submit();
            //     });
            // });
        });
    </script>
{% endblock %}", "client/event/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/client/event/index.html.twig");
    }
}
