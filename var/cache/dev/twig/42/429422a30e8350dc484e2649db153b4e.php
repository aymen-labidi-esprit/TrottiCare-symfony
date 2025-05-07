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

/* admin/event_show.html.twig */
class __TwigTemplate_fe83f25776e3df8916f5557767f96d57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/event_show.html.twig", 2);
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

        yield "Gestion des Événements - Admin";
        
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
        yield "    ";
        // line 10
        yield "    <style>
        /* --- Reusable Styles (adapt from other admin pages) --- */

        /* Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; display: inline-block;}
        .status-a_venir { background-color: #dbeafe; color: #1e40af; } /* blue-100 / blue-800 */
        .status-en_cours { background-color: #dcfce7; color: #166534; } /* green-100 / green-800 */
        .status-termine { background-color: #f3f4f6; color: #374151; } /* gray-100 / gray-700 */
        .status-annule { background-color: #fee2e2; color: #991b1b; } /* red-100 / red-800 */
        .status-unknown { background-color: #e5e7eb; color: #4b5563; } /* gray-200 / gray-600 */

        /* Form Input/Select Styles */
        .form-input, .form-select {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem; /* rounded-md */
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        .form-input:focus, .form-select:focus {
            outline: none; border-color: #3b82f6; /* focus:border-blue-500 */
            box-shadow: 0 0 0 1px #3b82f6; /* focus:ring-1 focus:ring-blue-500 */
        }
        .filter-form .form-input, .filter-form .form-select {
            height: 2.25rem; /* h-9 */ font-size: 0.875rem; /* text-sm */
            padding-top: 0.375rem; padding-bottom: 0.375rem;
        }

        /* Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-calendar-alt:before { content: \"\\f073\"; } .fa-plus:before { content: \"\\2b\"; }
        .fa-filter:before { content: \"\\f0b0\"; } .fa-sync-alt:before { content: \"\\f2f1\"; }
        .fa-eye:before { content: \"\\f06e\"; } .fa-edit:before { content: \"\\f044\"; }
        .fa-ban:before { content: \"\\f05e\"; } .fa-spinner:before { content: \"\\f110\"; }
        .fa-sort:before { content: \"\\f0dc\"; } .fa-sort-up:before { content: \"\\f0de\"; }
        .fa-sort-down:before { content: \"\\f0dd\"; } .fa-spin { animation: fa-spin 1s infinite linear; }
        @keyframes fa-spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        .mr-1 { margin-right: 0.25rem; } .mr-1\\.5 { margin-right: 0.375rem; } .mr-2 { margin-right: 0.5rem; }

        /* KNP Sortable Link Styles */
        th a.sortable { color: #4b5563; text-decoration: none; display: inline-flex; align-items: center; gap: 0.25rem; white-space: nowrap; }
        th a.sortable:hover { color: #1f2937; }
        th a.sortable .fas { color: #9ca3af; font-size: 0.8em; }
        th a.sortable.asc .fa-sort-up, th a.sortable.desc .fa-sort-down { color: #3b82f6; }
        th a.sortable .fa-sort { color: #9ca3af; }

        /* Pagination Container Styles */
        .pagination-container { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb; }
        .pagination-controls { display: flex; align-items: center; gap: 0.75rem; font-size: 0.875rem; color: #4b5563; margin-top: 0.5rem; }
        .pagination-controls label { margin-bottom: 0; white-space: nowrap; margin-right: 0.25rem; }
        .limit-select { padding: 0.25rem 1.75rem 0.25rem 0.5rem; font-size: 0.875rem; line-height: 1.25; height: auto; min-width: 4.5rem; background-size: 1.2em 1.2em; background-position: right 0.3rem center; border-radius: 0.375rem; border: 1px solid #d1d5db; }
        /* --- End Reusable Styles --- */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            ";
        // line 86
        yield "            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 flex items-center gap-2\">
                    <i class=\"fas fa-calendar-alt text-indigo-600\"></i> ";
        // line 89
        yield "                    Gestion des Événements
                </h1>
                <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_new");
        yield "\" class=\"button button-success\">
                    <i class=\"fas fa-plus mr-1.5\"></i> Nouvel Événement
                </a>
            </div>

            ";
        // line 97
        yield "            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8\">
                ";
        // line 99
        yield "                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-5 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-blue-100 text-blue-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">À Venir</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countAVenir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countAVenir"]) || array_key_exists("countAVenir", $context) ? $context["countAVenir"] : (function () { throw new RuntimeError('Variable "countAVenir" does not exist.', 103, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
                ";
        // line 107
        yield "                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-5 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-green-100 text-green-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z\" /><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">En Cours</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countEnCours", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countEnCours"]) || array_key_exists("countEnCours", $context) ? $context["countEnCours"] : (function () { throw new RuntimeError('Variable "countEnCours" does not exist.', 111, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
                ";
        // line 115
        yield "                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-5 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-gray-100 text-gray-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Terminés</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countTermine", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countTermine"]) || array_key_exists("countTermine", $context) ? $context["countTermine"] : (function () { throw new RuntimeError('Variable "countTermine" does not exist.', 119, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
                ";
        // line 123
        yield "                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-5 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-red-100 text-red-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Annulés</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countAnnule", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countAnnule"]) || array_key_exists("countAnnule", $context) ? $context["countAnnule"] : (function () { throw new RuntimeError('Variable "countAnnule" does not exist.', 127, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            ";
        // line 133
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/event_show.html.twig", 133);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 134
        yield "
            ";
        // line 136
        yield "            <div class=\"bg-white rounded-lg shadow p-4 mb-6\">
                ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 137, $this->source); })()), 'form_start', ["attr" => ["class" => "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 items-end filter-form"]]);
        yield "
                <div class=\"sm:col-span-2 md:col-span-2 lg:col-span-2\">
                    <label for=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 139, $this->source); })()), "search", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139), "html", null, true);
        yield "\" class=\"sr-only\">Rechercher</label>
                    ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 140, $this->source); })()), "search", [], "any", false, false, false, 140), 'widget');
        yield "
                    ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 141, $this->source); })()), "search", [], "any", false, false, false, 141), 'errors');
        yield "
                </div>
                <div>
                    <label for=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 144, $this->source); })()), "status", [], "any", false, false, false, 144), "vars", [], "any", false, false, false, 144), "id", [], "any", false, false, false, 144), "html", null, true);
        yield "\" class=\"sr-only\">Statut</label>
                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 145, $this->source); })()), "status", [], "any", false, false, false, 145), 'widget');
        yield "
                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 146, $this->source); })()), "status", [], "any", false, false, false, 146), 'errors');
        yield "
                </div>
                <div>
                    <label for=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 149, $this->source); })()), "date_filter", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), "html", null, true);
        yield "\" class=\"sr-only\">Période</label>
                    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 150, $this->source); })()), "date_filter", [], "any", false, false, false, 150), 'widget');
        yield "
                    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 151, $this->source); })()), "date_filter", [], "any", false, false, false, 151), 'errors');
        yield "
                </div>
                ";
        // line 160
        yield "                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"button button-primary button-sm flex-grow\">
                        <i class=\"fas fa-filter mr-1\"></i>Filtrer
                    </button>
                    <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"button button-secondary button-sm flex-grow\" title=\"Réinitialiser\">
                        <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser
                    </a>
                </div>
                ";
        // line 168
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 168, $this->source); })()), 'form_end');
        yield "
            </div>

            ";
        // line 172
        yield "            <div class=\"bg-white shadow-md overflow-hidden sm:rounded-lg border border-gray-200\">
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 178
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 178, $this->source); })()), "Titre", "e.titre");
        yield "
                            </th>
                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 181
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 181, $this->source); })()), "Date début", "e.dateDebut");
        yield "
                            </th>

                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 185
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 185, $this->source); })()), "trottinette Min Autonomie", "e.trottinetteMinAutonomie");
        yield "
                            </th>
                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 188
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 188, $this->source); })()), "Lieu (Gouvernorat)", "e.state");
        yield "
                            </th>
                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 191
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 191, $this->source); })()), "Statut", "e.statut");
        yield "
                            </th>
                            <th scope=\"col\" class=\"px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 195
        yield "                                Participants
                            </th>
                            <th scope=\"col\" class=\"relative px-4 py-3\"> <span class=\"sr-only\">Actions</span> </th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 202
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 202, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            yield " ";
            // line 203
            yield "                            <tr id=\"event-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 203), "html", null, true);
            yield "\" class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm font-medium text-gray-900\">";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 205), "html", null, true);
            yield "</div>
                                    ";
            // line 207
            yield "                                    ";
            // line 208
            yield "                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm text-gray-900\">";
            // line 210
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 210)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 210), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</div>
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm text-gray-700\">";
            // line 213
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "state", [], "any", false, false, false, 213)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "state", [], "any", false, false, false, 213), "label", [], "any", false, false, false, 213), "html", null, true)) : ("-"));
            yield "</div>
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap\">
                                    ";
            // line 216
            yield from $this->loadTemplate("admin/event/_status_badge.html.twig", "admin/event_show.html.twig", 216)->unwrap()->yield(CoreExtension::merge($context, ["status" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "statut", [], "any", false, false, false, 216)]));
            // line 217
            yield "                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-center\">
                                    <a href=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 219)]), "html", null, true);
            yield "\" class=\"text-blue-600 hover:text-blue-800 hover:underline font-medium\">
                                        ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participations", [], "any", false, false, false, 220), "count", [], "any", false, false, false, 220), "html", null, true);
            yield " ";
            // line 221
            yield "                                    </a>
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 224)]), "html", null, true);
            yield "\" class=\"button button-sm button-info text-white\" title=\"Voir\"> <i class=\"fas fa-eye\"></i> </a>
                                    <a href=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 225)]), "html", null, true);
            yield "\" class=\"button button-sm button-warning text-white\" title=\"Modifier\"> <i class=\"fas fa-edit\"></i> </a>
                                    ";
            // line 226
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "statut", [], "any", false, false, false, 226), ["TERMINE", "ANNULE"])) {
                // line 227
                yield "                                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 227)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline-block form-delete-event\" data-event-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 227), "html", null, true);
                yield "\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_admin_" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 228))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"button button-sm button-danger\" title=\"Annuler l'événement\"> <i class=\"fas fa-ban\"></i> </button>
                                        </form>
                                    ";
            }
            // line 232
            yield "                                </td>
                            </tr>
                        ";
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
        // line 234
        if (!$context['_iterated']) {
            // line 235
            yield "                            <tr>
                                <td colspan=\"6\" class=\"px-6 py-12 text-center text-sm text-gray-500\">
                                    ";
            // line 238
            yield "                                    Aucun événement trouvé ";
            if ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 238, $this->source); })()), "vars", [], "any", false, false, false, 238), "value", [], "any", false, false, false, 238), "search", [], "any", false, false, false, 238)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 238, $this->source); })()), "vars", [], "any", false, false, false, 238), "value", [], "any", false, false, false, 238), "status", [], "any", false, false, false, 238))) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 238, $this->source); })()), "vars", [], "any", false, false, false, 238), "value", [], "any", false, false, false, 238), "date_filter", [], "any", false, false, false, 238)))) {
                yield " correspondant aux critères actuels";
            }
            yield ".
                                    ";
            // line 239
            if ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 239, $this->source); })()), "vars", [], "any", false, false, false, 239), "value", [], "any", false, false, false, 239), "search", [], "any", false, false, false, 239)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 239, $this->source); })()), "vars", [], "any", false, false, false, 239), "value", [], "any", false, false, false, 239), "status", [], "any", false, false, false, 239))) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 239, $this->source); })()), "vars", [], "any", false, false, false, 239), "value", [], "any", false, false, false, 239), "date_filter", [], "any", false, false, false, 239)))) {
                // line 240
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
                yield "\" class=\"text-blue-600 hover:underline ml-2\">Voir tous</a>
                                    ";
            }
            // line 242
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        yield "                        ";
        // line 246
        yield "                        </tbody>
                    </table>
                </div> ";
        // line 249
        yield "            </div> ";
        // line 250
        yield "
            ";
        // line 252
        yield "            ";
        if ((array_key_exists("pagination", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 252, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 252) > 0))) {
            // line 253
            yield "                <div class=\"pagination-container\">
                    <div> ";
            // line 255
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 255, $this->source); })()), "pageCount", [], "any", false, false, false, 255) > 1)) {
                // line 256
                yield "                            ";
                yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 256, $this->source); })()));
                yield " ";
                // line 257
                yield "                        ";
            }
            // line 258
            yield "                    </div>
                    <div class=\"pagination-controls\"> ";
            // line 260
            yield "                        <span> ";
            // line 261
            yield "                            ";
            $context["totalItems"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "getTotalItemCount", [], "any", true, true, false, 261)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 261, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 261), 0)) : (0));
            // line 262
            yield "                            ";
            if (((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 262, $this->source); })()) > 0)) {
                // line 263
                yield "                                ";
                $context["firstItem"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 263, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 263) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 263, $this->source); })()), "getItemNumberPerPage", [], "method", false, false, false, 263)) + 1);
                // line 264
                yield "                                ";
                $context["lastItem"] = (((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 264, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 264, $this->source); })()), "count", [], "method", false, false, false, 264)) - 1);
                yield " ";
                // line 265
                yield "                                Affichage de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 265, $this->source); })()), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastItem"]) || array_key_exists("lastItem", $context) ? $context["lastItem"] : (function () { throw new RuntimeError('Variable "lastItem" does not exist.', 265, $this->source); })()), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 265, $this->source); })()), "html", null, true);
                yield "
                            ";
            }
            // line 267
            yield "                         </span>
                        <div class=\"inline-flex items-center\"> ";
            // line 269
            yield "                            <label for=\"itemsPerPageSelect\" class=\"whitespace-nowrap\">par page:</label>
                            <select id=\"itemsPerPageSelect\" class=\"form-select limit-select\">
                                ";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allowedLimits"]) || array_key_exists("allowedLimits", $context) ? $context["allowedLimits"] : (function () { throw new RuntimeError('Variable "allowedLimits" does not exist.', 271, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["limitOption"]) {
                // line 272
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitOption"], "html", null, true);
                yield "\" ";
                yield ((($context["limitOption"] == (isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 272, $this->source); })()))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitOption"], "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limitOption'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            yield "                            </select>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 280
        yield " ";
        // line 281
        yield "
        </div> ";
        // line 283
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 286
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

        // line 287
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 289
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('itemsPerPageSelect');
            if (selectElement) { /* ... Limit JS ... */ }

            // --- AJAX Form Submission for Cancel (Delete Button) ---
            const handleAdminFormSubmit = async (form, confirmMessage) => {
                if (confirmMessage && !confirm(confirmMessage)) return;
                const submitButton = form.querySelector('button[type=\"submit\"]');
                const originalButtonHtml = submitButton ? submitButton.innerHTML : '';
                if (submitButton) { submitButton.disabled = true; submitButton.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>'; }

                try {
                    const response = await fetch(form.action, {
                        method: form.method,
                        headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
                        body: new FormData(form)
                    });
                    const contentType = response.headers.get(\"content-type\");
                    if (contentType && contentType.includes(\"application/json\")) {
                        const result = await response.json();
                        if (response.ok && result.success) {
                            console.log('Action successful:', result.message);
                            // Option 1: Reload page (simplest)
                            // window.location.reload();

                            // Option 2: Update UI dynamically (more complex)
                            const eventRow = form.closest('tr');
                            if (eventRow) {
                                // Find the status badge cell and update it
                                const statusCell = eventRow.querySelector('.event-status-cell');
                                if (statusCell) {
                                    // Re-render the badge using the new status (crude example)
                                    statusCell.innerHTML = `<span class=\"status-badge status-\${result.newStatut|lower}\">\${result.newStatut.replace('_',' ')}</span>`;
                                }
                                // Remove the cancel button itself
                                form.remove();
                            }
                            // Show a success notification (e.g., using a toast library or simple alert)
                            alert(result.message); // Replace with better notification

                        } else {
                            console.error('Action failed:', result.error || result.message);
                            alert(`Erreur: \${result.error || result.message || 'Action échouée.'}`);
                        }
                    } else {
                        console.error('Non-JSON response:', await response.text());
                        alert('Une erreur inattendue est survenue.');
                    }
                } catch (error) {
                    console.error('Fetch error:', error);
                    alert('Une erreur réseau est survenue.');
                } finally {
                    if (submitButton) { // Re-enable button only on error if UI isn't reloaded
                        if (!response.ok || !result.success) {
                            submitButton.disabled = false;
                            submitButton.innerHTML = originalButtonHtml;
                        }
                    }
                }
            };

            document.body.addEventListener('submit', function(e) {
                if (e.target && e.target.classList.contains('form-delete-event')) {
                    e.preventDefault();
                    handleAdminFormSubmit(e.target, 'Êtes-vous sûr de vouloir annuler cet événement ?');
                }
            });
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
        return "admin/event_show.html.twig";
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
        return array (  661 => 289,  656 => 287,  643 => 286,  632 => 283,  629 => 281,  627 => 280,  620 => 276,  611 => 273,  604 => 272,  600 => 271,  596 => 269,  593 => 267,  583 => 265,  579 => 264,  576 => 263,  573 => 262,  570 => 261,  568 => 260,  565 => 258,  562 => 257,  558 => 256,  555 => 255,  552 => 253,  549 => 252,  546 => 250,  544 => 249,  540 => 246,  538 => 245,  530 => 242,  524 => 240,  522 => 239,  515 => 238,  511 => 235,  509 => 234,  495 => 232,  488 => 228,  481 => 227,  479 => 226,  475 => 225,  471 => 224,  466 => 221,  463 => 220,  459 => 219,  455 => 217,  453 => 216,  447 => 213,  441 => 210,  437 => 208,  435 => 207,  431 => 205,  425 => 203,  405 => 202,  397 => 195,  391 => 191,  385 => 188,  379 => 185,  372 => 181,  366 => 178,  358 => 172,  352 => 168,  345 => 164,  339 => 160,  334 => 151,  330 => 150,  326 => 149,  320 => 146,  316 => 145,  312 => 144,  306 => 141,  302 => 140,  298 => 139,  293 => 137,  290 => 136,  287 => 134,  276 => 133,  268 => 127,  262 => 123,  256 => 119,  250 => 115,  244 => 111,  238 => 107,  232 => 103,  226 => 99,  223 => 97,  215 => 91,  211 => 89,  207 => 86,  202 => 82,  189 => 81,  109 => 10,  107 => 9,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/events.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Événements - Admin{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    {# FontAwesome for icons (ensure it's loaded in base.html.twig or add CDN link) #}
    <style>
        /* --- Reusable Styles (adapt from other admin pages) --- */

        /* Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; display: inline-block;}
        .status-a_venir { background-color: #dbeafe; color: #1e40af; } /* blue-100 / blue-800 */
        .status-en_cours { background-color: #dcfce7; color: #166534; } /* green-100 / green-800 */
        .status-termine { background-color: #f3f4f6; color: #374151; } /* gray-100 / gray-700 */
        .status-annule { background-color: #fee2e2; color: #991b1b; } /* red-100 / red-800 */
        .status-unknown { background-color: #e5e7eb; color: #4b5563; } /* gray-200 / gray-600 */

        /* Form Input/Select Styles */
        .form-input, .form-select {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem; /* rounded-md */
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        .form-input:focus, .form-select:focus {
            outline: none; border-color: #3b82f6; /* focus:border-blue-500 */
            box-shadow: 0 0 0 1px #3b82f6; /* focus:ring-1 focus:ring-blue-500 */
        }
        .filter-form .form-input, .filter-form .form-select {
            height: 2.25rem; /* h-9 */ font-size: 0.875rem; /* text-sm */
            padding-top: 0.375rem; padding-bottom: 0.375rem;
        }

        /* Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-calendar-alt:before { content: \"\\f073\"; } .fa-plus:before { content: \"\\2b\"; }
        .fa-filter:before { content: \"\\f0b0\"; } .fa-sync-alt:before { content: \"\\f2f1\"; }
        .fa-eye:before { content: \"\\f06e\"; } .fa-edit:before { content: \"\\f044\"; }
        .fa-ban:before { content: \"\\f05e\"; } .fa-spinner:before { content: \"\\f110\"; }
        .fa-sort:before { content: \"\\f0dc\"; } .fa-sort-up:before { content: \"\\f0de\"; }
        .fa-sort-down:before { content: \"\\f0dd\"; } .fa-spin { animation: fa-spin 1s infinite linear; }
        @keyframes fa-spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        .mr-1 { margin-right: 0.25rem; } .mr-1\\.5 { margin-right: 0.375rem; } .mr-2 { margin-right: 0.5rem; }

        /* KNP Sortable Link Styles */
        th a.sortable { color: #4b5563; text-decoration: none; display: inline-flex; align-items: center; gap: 0.25rem; white-space: nowrap; }
        th a.sortable:hover { color: #1f2937; }
        th a.sortable .fas { color: #9ca3af; font-size: 0.8em; }
        th a.sortable.asc .fa-sort-up, th a.sortable.desc .fa-sort-down { color: #3b82f6; }
        th a.sortable .fa-sort { color: #9ca3af; }

        /* Pagination Container Styles */
        .pagination-container { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb; }
        .pagination-controls { display: flex; align-items: center; gap: 0.75rem; font-size: 0.875rem; color: #4b5563; margin-top: 0.5rem; }
        .pagination-controls label { margin-bottom: 0; white-space: nowrap; margin-right: 0.25rem; }
        .limit-select { padding: 0.25rem 1.75rem 0.25rem 0.5rem; font-size: 0.875rem; line-height: 1.25; height: auto; min-width: 4.5rem; background-size: 1.2em 1.2em; background-position: right 0.3rem center; border-radius: 0.375rem; border: 1px solid #d1d5db; }
        /* --- End Reusable Styles --- */
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            {# 1. Header Section #}
            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 flex items-center gap-2\">
                    <i class=\"fas fa-calendar-alt text-indigo-600\"></i> {# Example color #}
                    Gestion des Événements
                </h1>
                <a href=\"{{ path('app_admin_event_new') }}\" class=\"button button-success\">
                    <i class=\"fas fa-plus mr-1.5\"></i> Nouvel Événement
                </a>
            </div>

            {# 2. Status Cards #}
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8\">
                {# À venir Card #}
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-5 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-blue-100 text-blue-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">À Venir</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countAVenir|default(0) }}</div>
                    </div>
                </div>
                {# En cours Card #}
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-5 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-green-100 text-green-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z\" /><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">En Cours</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countEnCours|default(0) }}</div>
                    </div>
                </div>
                {# Terminé Card #}
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-5 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-gray-100 text-gray-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Terminés</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countTermine|default(0) }}</div>
                    </div>
                </div>
                {# Annulé Card #}
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-5 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-red-100 text-red-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Annulés</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countAnnule|default(0) }}</div>
                    </div>
                </div>
            </div>

            {# 3. Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 4. Filter Form Card #}
            <div class=\"bg-white rounded-lg shadow p-4 mb-6\">
                {{ form_start(filterForm, {'attr': {'class': 'grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 items-end filter-form'}}) }}
                <div class=\"sm:col-span-2 md:col-span-2 lg:col-span-2\">
                    <label for=\"{{ filterForm.search.vars.id }}\" class=\"sr-only\">Rechercher</label>
                    {{ form_widget(filterForm.search) }}
                    {{ form_errors(filterForm.search) }}
                </div>
                <div>
                    <label for=\"{{ filterForm.status.vars.id }}\" class=\"sr-only\">Statut</label>
                    {{ form_widget(filterForm.status) }}
                    {{ form_errors(filterForm.status) }}
                </div>
                <div>
                    <label for=\"{{ filterForm.date_filter.vars.id }}\" class=\"sr-only\">Période</label>
                    {{ form_widget(filterForm.date_filter) }}
                    {{ form_errors(filterForm.date_filter) }}
                </div>
                {# Optional Gouvernorat Filter
                    <div>
                        <label for=\"{{ filterForm.state.vars.id }}\" class=\"sr-only\">Gouvernorat</label>
                        {{ form_widget(filterForm.state) }}
                        {{ form_errors(filterForm.state) }}
                    </div>
                #}
                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"button button-primary button-sm flex-grow\">
                        <i class=\"fas fa-filter mr-1\"></i>Filtrer
                    </button>
                    <a href=\"{{ path('app_admin_events') }}\" class=\"button button-secondary button-sm flex-grow\" title=\"Réinitialiser\">
                        <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser
                    </a>
                </div>
                {{ form_end(filterForm) }}
            </div>

            {# 5. Events Table Card #}
            <div class=\"bg-white shadow-md overflow-hidden sm:rounded-lg border border-gray-200\">
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Titre', 'e.titre') }}
                            </th>
                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Date début', 'e.dateDebut') }}
                            </th>

                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'trottinette Min Autonomie', 'e.trottinetteMinAutonomie') }}
                            </th>
                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Lieu (Gouvernorat)', 'e.state') }}
                            </th>
                            <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Statut', 'e.statut') }}
                            </th>
                            <th scope=\"col\" class=\"px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {# Cannot easily sort by count with current setup #}
                                Participants
                            </th>
                            <th scope=\"col\" class=\"relative px-4 py-3\"> <span class=\"sr-only\">Actions</span> </th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                        {# --- CORRECTED LOOP & COUNT ACCESS --- #}
                        {% for event in pagination %} {# Loop directly over Event objects #}
                            <tr id=\"event-row-{{ event.id }}\" class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm font-medium text-gray-900\">{{ event.titre }}</div>
                                    {# Optional: Add truncated description #}
                                    {# <div class=\"text-xs text-gray-500 truncate w-64\" title=\"{{ event.description }}\">{{ event.description }}</div> #}
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm text-gray-900\">{{ event.dateDebut ? event.dateDebut|date('d/m/Y H:i') : '-' }}</div>
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm text-gray-700\">{{ event.state ? event.state.label : '-' }}</div>
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap\">
                                    {% include 'admin/event/_status_badge.html.twig' with {'status': event.statut} %}
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-center\">
                                    <a href=\"{{ path('app_admin_event_participants', {id: event.id}) }}\" class=\"text-blue-600 hover:text-blue-800 hover:underline font-medium\">
                                        {{ event.participations.count }} {# Get count from relation #}
                                    </a>
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"{{ path('app_admin_event_show', {id: event.id}) }}\" class=\"button button-sm button-info text-white\" title=\"Voir\"> <i class=\"fas fa-eye\"></i> </a>
                                    <a href=\"{{ path('app_admin_event_edit', {id: event.id}) }}\" class=\"button button-sm button-warning text-white\" title=\"Modifier\"> <i class=\"fas fa-edit\"></i> </a>
                                    {% if event.statut not in ['TERMINE', 'ANNULE'] %}
                                        <form action=\"{{ path('app_admin_event_delete', {id: event.id}) }}\" method=\"post\" class=\"inline-block form-delete-event\" data-event-id=\"{{ event.id }}\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_admin_' ~ event.id) }}\">
                                            <button type=\"submit\" class=\"button button-sm button-danger\" title=\"Annuler l'événement\"> <i class=\"fas fa-ban\"></i> </button>
                                        </form>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"px-6 py-12 text-center text-sm text-gray-500\">
                                    {# ... No results message ... #}
                                    Aucun événement trouvé {% if filterForm.vars.value.search is not empty or filterForm.vars.value.status is not empty or filterForm.vars.value.date_filter is not empty %} correspondant aux critères actuels{% endif %}.
                                    {% if filterForm.vars.value.search is not empty or filterForm.vars.value.status is not empty or filterForm.vars.value.date_filter is not empty %}
                                        <a href=\"{{ path('app_admin_events') }}\" class=\"text-blue-600 hover:underline ml-2\">Voir tous</a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        {# --- END CORRECTED LOOP --- #}
                        </tbody>
                    </table>
                </div> {# End Table Wrapper #}
            </div> {# End Table Card #}

            {# 6. Pagination Container #}
            {% if pagination is defined and pagination.getTotalItemCount > 0 %}
                <div class=\"pagination-container\">
                    <div> {# Links #}
                        {% if pagination.pageCount > 1 %}
                            {{ knp_pagination_render(pagination) }} {# Uses Tailwind template #}
                        {% endif %}
                    </div>
                    <div class=\"pagination-controls\"> {# Summary & Limit #}
                        <span> {# Item count #}
                            {% set totalItems = pagination.getTotalItemCount|default(0) %}
                            {% if totalItems > 0 %}
                                {% set firstItem = (pagination.getCurrentPageNumber() - 1) * pagination.getItemNumberPerPage() + 1 %}
                                {% set lastItem = firstItem + pagination.count() - 1 %} {# Use count() method #}
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
            {% endif %} {# End Pagination Section #}

        </div> {# End container #}
    </div> {# End page wrapper #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Limit Selector JS #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('itemsPerPageSelect');
            if (selectElement) { /* ... Limit JS ... */ }

            // --- AJAX Form Submission for Cancel (Delete Button) ---
            const handleAdminFormSubmit = async (form, confirmMessage) => {
                if (confirmMessage && !confirm(confirmMessage)) return;
                const submitButton = form.querySelector('button[type=\"submit\"]');
                const originalButtonHtml = submitButton ? submitButton.innerHTML : '';
                if (submitButton) { submitButton.disabled = true; submitButton.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>'; }

                try {
                    const response = await fetch(form.action, {
                        method: form.method,
                        headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
                        body: new FormData(form)
                    });
                    const contentType = response.headers.get(\"content-type\");
                    if (contentType && contentType.includes(\"application/json\")) {
                        const result = await response.json();
                        if (response.ok && result.success) {
                            console.log('Action successful:', result.message);
                            // Option 1: Reload page (simplest)
                            // window.location.reload();

                            // Option 2: Update UI dynamically (more complex)
                            const eventRow = form.closest('tr');
                            if (eventRow) {
                                // Find the status badge cell and update it
                                const statusCell = eventRow.querySelector('.event-status-cell');
                                if (statusCell) {
                                    // Re-render the badge using the new status (crude example)
                                    statusCell.innerHTML = `<span class=\"status-badge status-\${result.newStatut|lower}\">\${result.newStatut.replace('_',' ')}</span>`;
                                }
                                // Remove the cancel button itself
                                form.remove();
                            }
                            // Show a success notification (e.g., using a toast library or simple alert)
                            alert(result.message); // Replace with better notification

                        } else {
                            console.error('Action failed:', result.error || result.message);
                            alert(`Erreur: \${result.error || result.message || 'Action échouée.'}`);
                        }
                    } else {
                        console.error('Non-JSON response:', await response.text());
                        alert('Une erreur inattendue est survenue.');
                    }
                } catch (error) {
                    console.error('Fetch error:', error);
                    alert('Une erreur réseau est survenue.');
                } finally {
                    if (submitButton) { // Re-enable button only on error if UI isn't reloaded
                        if (!response.ok || !result.success) {
                            submitButton.disabled = false;
                            submitButton.innerHTML = originalButtonHtml;
                        }
                    }
                }
            };

            document.body.addEventListener('submit', function(e) {
                if (e.target && e.target.classList.contains('form-delete-event')) {
                    e.preventDefault();
                    handleAdminFormSubmit(e.target, 'Êtes-vous sûr de vouloir annuler cet événement ?');
                }
            });
        });
    </script>
{% endblock %}", "admin/event_show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/event_show.html.twig");
    }
}
