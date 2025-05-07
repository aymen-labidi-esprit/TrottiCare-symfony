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

/* public/trottinette/index.html.twig */
class __TwigTemplate_3cbcbc1cfec834d2638f00612bdf8048 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/trottinette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/trottinette/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/trottinette/index.html.twig", 2);
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

        yield "Nos Trottinettes - TrottiCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <style>
        /* --- COPY/ADAPT Styles from maintenance/admin trottinette index --- */
        /* Form Input/Select Styles */
        .form-input, .form-select { appearance: none; display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        .form-input:focus, .form-select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; }
        .form-input.text-sm, .form-select.text-sm { font-size: 0.75rem; padding-top: 0.375rem; padding-bottom: 0.375rem; } /* Smaller filter inputs */
        .search-input { padding-left: 2.5rem; /* Space for icon */ }

        /* Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        /* ... other button colors if needed ... */
        .button-reserve { background-color: #10b981; color: white; } .button-reserve:hover { background-color: #059669; }
        .button-qr { background-color: #6366f1; color: white; } .button-qr:hover { background-color: #4f46e5; }
        .button-unavailable { background-color: #9ca3af; color: white; cursor: not-allowed; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Scooter Card Styles (from _scooter_card.html.twig or define here) */
        .scooter-card { display: flex; flex-direction: column; background-color: #fff; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1); overflow: hidden; border: 1px solid #e5e7eb; height: 100%; }
        .scooter-image-wrapper { position: relative; }
        .scooter-image { width: 100%; height: 160px; object-fit: cover; }
        .battery-indicator { position: absolute; top: 0.5rem; right: 0.5rem; background-color: rgba(0, 0, 0, 0.6); color: white; padding: 0.25rem 0.5rem; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; }
        .scooter-card .p-4 { padding: 1rem; flex-grow: 1; display: flex; flex-direction: column; }
        .scooter-title { font-size: 1rem; font-semibold; color: #111827; margin-bottom: 0.5rem; }
        .scooter-info { font-size: 0.8rem; color: #4b5563; margin-bottom: 1rem; flex-grow: 1; }
        .scooter-info p { margin-bottom: 0.25rem; display: flex; align-items: center; gap: 0.25rem; }
        .scooter-actions { margin-top: auto; /* Pushes actions to bottom */ }

        /* Pagination Container Styles */
        .pagination-container { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb; }
        .pagination-controls { display: flex; align-items: center; gap: 0.75rem; font-size: 0.875rem; color: #4b5563; margin-top: 0.5rem; }
        .pagination-controls label { margin-bottom: 0; white-space: nowrap; margin-right: 0.25rem; }
        .limit-select { padding: 0.25rem 1.75rem 0.25rem 0.5rem; font-size: 0.875rem; line-height: 1.25; height: auto; min-width: 4.5rem; background-size: 1.2em 1.2em; background-position: right 0.3rem center; border-radius: 0.375rem; border: 1px solid #d1d5db; }

        /* Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-motorcycle:before { content: \"\\f21c\"; } .fa-qrcode:before { content: \"\\f029\"; }
        .fa-info-circle:before { content: \"\\f05a\"; } .fa-search:before { content: \"\\f002\"; }
        .fa-filter:before { content: \"\\f0b0\"; } .fa-sync-alt:before { content: \"\\f2f1\"; }
        .me-1 { margin-right: 0.25rem; } .me-2 { margin-right: 0.5rem; }
        .fa-road:before { content: \"\\f018\"; } /* Autonomy icon */
        /* --- END COPY/ADAPT --- */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
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

        // line 61
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            <h1 class=\"text-3xl font-bold text-gray-900 mb-6 text-center md:text-left\">
                Découvrez nos Événements
            </h1>

            ";
        // line 68
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "public/trottinette/index.html.twig", 68);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 69
        yield "
            ";
        // line 71
        yield "            <div class=\"mb-8 p-4 bg-white rounded-lg shadow-md border border-gray-200\">
                <form method=\"get\" action=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index");
        yield "\" class=\"filter-form grid gap-4 items-end\">

                    ";
        // line 75
        yield "                    <div class=\"md:col-span-2 lg:col-span-2\">
                        <label for=\"search_id\" class=\"block text-xs font-medium text-gray-600\">Rechercher</label>
                        <div class=\"relative\">
                            <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\"> <svg class=\"h-4 w-4 text-gray-400\" ...> </svg> </div>
                            <input type=\"search\" id=\"search_id\" name=\"search\" class=\"form-input search-input w-full text-sm\" placeholder=\"Titre, description, lieu...\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_term", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 79, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                        </div>
                    </div>

                    ";
        // line 84
        yield "                    <div>
                        <label for=\"sort_field_id\" class=\"block text-xs font-medium text-gray-600\">Trier par</label>
                        ";
        // line 87
        yield "                        <select name=\"sort\" id=\"sort_field_id\" class=\"form-select text-sm w-full\" onchange=\"this.form.submit()\">
                            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allowed_sorts_map"]) || array_key_exists("allowed_sorts_map", $context) ? $context["allowed_sorts_map"] : (function () { throw new RuntimeError('Variable "allowed_sorts_map" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["dql_path"]) {
            // line 89
            yield "                                ";
            // line 90
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dql_path"], "html", null, true);
            yield "\" ";
            yield ((($context["dql_path"] == (isset($context["current_sort_field"]) || array_key_exists("current_sort_field", $context) ? $context["current_sort_field"] : (function () { throw new RuntimeError('Variable "current_sort_field" does not exist.', 90, $this->source); })()))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['dql_path'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                        </select>
                    </div>
                    ";
        // line 97
        yield "
                    ";
        // line 99
        yield "                    <div>
                        <label for=\"sort_direction_id\" class=\"block text-xs font-medium text-gray-600\">Ordre</label>
                        <select name=\"direction\" id=\"sort_direction_id\" class=\"form-select text-sm w-full\" onchange=\"this.form.submit()\">
                            <option value=\"asc\" ";
        // line 102
        yield ((((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 102, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Croissant</option>
                            <option value=\"desc\" ";
        // line 103
        yield ((((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 103, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Décroissant</option>
                        </select>
                    </div>
                    ";
        // line 107
        yield "
                    ";
        // line 109
        yield "                    <div class=\"flex flex-col items-start md:self-end\"> ";
        // line 110
        yield "                        <label class=\"block text-xs font-medium text-gray-600 mb-1\">Filtrer Dates</label>
                        <div class=\"flex gap-2 flex-wrap w-full\">
                            ";
        // line 112
        $context["filter_buttons"] = ["all" => "Tous", "upcoming" => "À venir", "past" => "Passés"];
        // line 113
        yield "                            ";
        $context["current_filter_param"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "query", [], "any", false, false, false, 113), "get", ["filter", "all"], "method", false, false, false, 113);
        // line 114
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_buttons"]) || array_key_exists("filter_buttons", $context) ? $context["filter_buttons"] : (function () { throw new RuntimeError('Variable "filter_buttons" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 115
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "query", [], "any", false, false, false, 115), "all", [], "any", false, false, false, 115), ["filter" => $context["key"], "page" => 1])), "html", null, true);
            yield "\"
                                   class=\"button button-sm ";
            // line 116
            yield ((((isset($context["current_filter_param"]) || array_key_exists("current_filter_param", $context) ? $context["current_filter_param"] : (function () { throw new RuntimeError('Variable "current_filter_param" does not exist.', 116, $this->source); })()) == $context["key"])) ? ("button-primary") : ("button-secondary"));
            yield " flex-grow sm:flex-grow-0\">
                                    ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "                        </div>
                    </div>
                    ";
        // line 123
        yield "
                    ";
        // line 125
        yield "                    <input type=\"hidden\" name=\"filter\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("current_filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 125, $this->source); })()), "all")) : ("all")), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"search\" value=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_term", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 126, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"limit\" value=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("currentLimit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 127, $this->source); })()), 12)) : (12)), "html", null, true);
        yield "\">

                </form> ";
        // line 130
        yield "            </div>

            ";
        // line 133
        yield "            ";
        // line 134
        yield "            ";
        if ((array_key_exists("pagination", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 134) > 0))) {
            // line 135
            yield "                <div class=\"text-sm text-gray-600 mb-4\"> ... </div>
            ";
        }
        // line 137
        yield "
            ";
        // line 139
        yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 events-grid\">
                ";
        // line 140
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["events_data"]) || array_key_exists("events_data", $context) ? $context["events_data"] : (function () { throw new RuntimeError('Variable "events_data" does not exist.', 140, $this->source); })()))) {
            // line 141
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events_data"]) || array_key_exists("events_data", $context) ? $context["events_data"] : (function () { throw new RuntimeError('Variable "events_data" does not exist.', 141, $this->source); })()));
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
                // line 142
                yield "                        ";
                yield from $this->loadTemplate("client/event/_event_card.html.twig", "public/trottinette/index.html.twig", 142)->unwrap()->yield(CoreExtension::merge($context, $context["event_data"]));
                // line 143
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
            // line 144
            yield "                ";
        } else {
            // line 145
            yield "                    <div class=\"col-span-full text-center py-16 ...\"> ... Aucun événement ... </div>
                ";
        }
        // line 147
        yield "            </div>

            ";
        // line 150
        yield "            ";
        if ((array_key_exists("pagination", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 150, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 150) > 0))) {
            // line 151
            yield "                <div class=\"pagination-container mt-8\">
                    ";
            // line 153
            yield "                </div>
            ";
        }
        // line 155
        yield "
        </div> ";
        // line 157
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
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

        // line 161
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 163
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('itemsPerPageSelect');
            if (selectElement) {
                selectElement.addEventListener('change', function() {
                    const newLimit = this.value;
                    const currentUrl = new URL(window.location.href);
                    const params = currentUrl.searchParams;
                    params.set('limit', newLimit);
                    params.set('page', '1');
                    currentUrl.search = params.toString();
                    window.location.href = currentUrl.toString();
                });
            }
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
        return "public/trottinette/index.html.twig";
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
        return array (  439 => 163,  434 => 161,  421 => 160,  410 => 157,  407 => 155,  403 => 153,  400 => 151,  397 => 150,  393 => 147,  389 => 145,  386 => 144,  372 => 143,  369 => 142,  351 => 141,  349 => 140,  346 => 139,  343 => 137,  339 => 135,  336 => 134,  334 => 133,  330 => 130,  325 => 127,  321 => 126,  316 => 125,  313 => 123,  309 => 120,  300 => 117,  296 => 116,  291 => 115,  286 => 114,  283 => 113,  281 => 112,  277 => 110,  275 => 109,  272 => 107,  266 => 103,  262 => 102,  257 => 99,  254 => 97,  250 => 94,  241 => 91,  234 => 90,  232 => 89,  228 => 88,  225 => 87,  221 => 84,  214 => 79,  208 => 75,  203 => 72,  200 => 71,  197 => 69,  187 => 68,  178 => 61,  165 => 60,  107 => 9,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/public/trottinette/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nos Trottinettes - TrottiCare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# FontAwesome or Bootstrap Icons if used #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <style>
        /* --- COPY/ADAPT Styles from maintenance/admin trottinette index --- */
        /* Form Input/Select Styles */
        .form-input, .form-select { appearance: none; display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        .form-input:focus, .form-select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; }
        .form-input.text-sm, .form-select.text-sm { font-size: 0.75rem; padding-top: 0.375rem; padding-bottom: 0.375rem; } /* Smaller filter inputs */
        .search-input { padding-left: 2.5rem; /* Space for icon */ }

        /* Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        /* ... other button colors if needed ... */
        .button-reserve { background-color: #10b981; color: white; } .button-reserve:hover { background-color: #059669; }
        .button-qr { background-color: #6366f1; color: white; } .button-qr:hover { background-color: #4f46e5; }
        .button-unavailable { background-color: #9ca3af; color: white; cursor: not-allowed; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Scooter Card Styles (from _scooter_card.html.twig or define here) */
        .scooter-card { display: flex; flex-direction: column; background-color: #fff; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1); overflow: hidden; border: 1px solid #e5e7eb; height: 100%; }
        .scooter-image-wrapper { position: relative; }
        .scooter-image { width: 100%; height: 160px; object-fit: cover; }
        .battery-indicator { position: absolute; top: 0.5rem; right: 0.5rem; background-color: rgba(0, 0, 0, 0.6); color: white; padding: 0.25rem 0.5rem; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; }
        .scooter-card .p-4 { padding: 1rem; flex-grow: 1; display: flex; flex-direction: column; }
        .scooter-title { font-size: 1rem; font-semibold; color: #111827; margin-bottom: 0.5rem; }
        .scooter-info { font-size: 0.8rem; color: #4b5563; margin-bottom: 1rem; flex-grow: 1; }
        .scooter-info p { margin-bottom: 0.25rem; display: flex; align-items: center; gap: 0.25rem; }
        .scooter-actions { margin-top: auto; /* Pushes actions to bottom */ }

        /* Pagination Container Styles */
        .pagination-container { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb; }
        .pagination-controls { display: flex; align-items: center; gap: 0.75rem; font-size: 0.875rem; color: #4b5563; margin-top: 0.5rem; }
        .pagination-controls label { margin-bottom: 0; white-space: nowrap; margin-right: 0.25rem; }
        .limit-select { padding: 0.25rem 1.75rem 0.25rem 0.5rem; font-size: 0.875rem; line-height: 1.25; height: auto; min-width: 4.5rem; background-size: 1.2em 1.2em; background-position: right 0.3rem center; border-radius: 0.375rem; border: 1px solid #d1d5db; }

        /* Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-motorcycle:before { content: \"\\f21c\"; } .fa-qrcode:before { content: \"\\f029\"; }
        .fa-info-circle:before { content: \"\\f05a\"; } .fa-search:before { content: \"\\f002\"; }
        .fa-filter:before { content: \"\\f0b0\"; } .fa-sync-alt:before { content: \"\\f2f1\"; }
        .me-1 { margin-right: 0.25rem; } .me-2 { margin-right: 0.5rem; }
        .fa-road:before { content: \"\\f018\"; } /* Autonomy icon */
        /* --- END COPY/ADAPT --- */
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
                    <div class=\"md:col-span-2 lg:col-span-2\">
                        <label for=\"search_id\" class=\"block text-xs font-medium text-gray-600\">Rechercher</label>
                        <div class=\"relative\">
                            <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\"> <svg class=\"h-4 w-4 text-gray-400\" ...> </svg> </div>
                            <input type=\"search\" id=\"search_id\" name=\"search\" class=\"form-input search-input w-full text-sm\" placeholder=\"Titre, description, lieu...\" value=\"{{ search_term|default('') }}\">
                        </div>
                    </div>

                    {# --- Sort Field Dropdown --- #}
                    <div>
                        <label for=\"sort_field_id\" class=\"block text-xs font-medium text-gray-600\">Trier par</label>
                        {# Use the allowed_sorts_map passed from controller #}
                        <select name=\"sort\" id=\"sort_field_id\" class=\"form-select text-sm w-full\" onchange=\"this.form.submit()\">
                            {% for label, dql_path in allowed_sorts_map %}
                                {# The VALUE is now the DQL path, the text is the user-friendly label #}
                                <option value=\"{{ dql_path }}\" {{ dql_path == current_sort_field ? 'selected' : '' }}>
                                    {{ label }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    {# --- End Sort Field Dropdown --- #}

                    {# --- Sort Direction Dropdown --- #}
                    <div>
                        <label for=\"sort_direction_id\" class=\"block text-xs font-medium text-gray-600\">Ordre</label>
                        <select name=\"direction\" id=\"sort_direction_id\" class=\"form-select text-sm w-full\" onchange=\"this.form.submit()\">
                            <option value=\"asc\" {{ current_direction == 'asc' ? 'selected' : '' }}>Croissant</option>
                            <option value=\"desc\" {{ current_direction == 'desc' ? 'selected' : '' }}>Décroissant</option>
                        </select>
                    </div>
                    {# --- End Sort Direction Dropdown --- #}

                    {# --- Filter Buttons (Links) --- #}
                    <div class=\"flex flex-col items-start md:self-end\"> {# Align to bottom on larger screens #}
                        <label class=\"block text-xs font-medium text-gray-600 mb-1\">Filtrer Dates</label>
                        <div class=\"flex gap-2 flex-wrap w-full\">
                            {% set filter_buttons = {'all':'Tous', 'upcoming':'À venir', 'past':'Passés'} %}
                            {% set current_filter_param = app.request.query.get('filter', 'all') %}
                            {% for key, label in filter_buttons %}
                                <a href=\"{{ path('client_event_index', app.request.query.all|merge({'filter': key, 'page': 1})) }}\"
                                   class=\"button button-sm {{ current_filter_param == key ? 'button-primary' : 'button-secondary' }} flex-grow sm:flex-grow-0\">
                                    {{ label }}
                                </a>
                            {% endfor %}
                        </div>
                    </div>
                    {# --- End Filter Buttons --- #}

                    {# Hidden inputs to preserve state when changing sort/direction via form submit #}
                    <input type=\"hidden\" name=\"filter\" value=\"{{ current_filter|default('all') }}\">
                    <input type=\"hidden\" name=\"search\" value=\"{{ search_term|default('') }}\">
                    <input type=\"hidden\" name=\"limit\" value=\"{{ currentLimit|default(12) }}\">

                </form> {# End Filter/Sort Form #}
            </div>

            {# Event Grid & Pagination (No changes needed below this point) #}
            {# ... Results count ... #}
            {% if pagination is defined and pagination.getTotalItemCount > 0 %}
                <div class=\"text-sm text-gray-600 mb-4\"> ... </div>
            {% endif %}

            {# ... Event Grid Loop ... #}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 events-grid\">
                {% if events_data is not empty %}
                    {% for event_data in events_data %}
                        {% include 'client/event/_event_card.html.twig' with event_data %}
                    {% endfor %}
                {% else %}
                    <div class=\"col-span-full text-center py-16 ...\"> ... Aucun événement ... </div>
                {% endif %}
            </div>

            {# --- Pagination Controls Container (No changes needed) --- #}
            {% if pagination is defined and pagination.getTotalItemCount > 0 %}
                <div class=\"pagination-container mt-8\">
                    {# ... KNP Render & Limit Selector ... #}
                </div>
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
                    params.set('page', '1');
                    currentUrl.search = params.toString();
                    window.location.href = currentUrl.toString();
                });
            }
        });
    </script>
{% endblock %}", "public/trottinette/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/public/trottinette/index.html.twig");
    }
}
