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

/* admin/trottinette/index.html.twig */
class __TwigTemplate_5689406e8aec763f88fbda3701622fd6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/trottinette/index.html.twig", 2);
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

        yield "Gestion des Trottinettes - Admin";
        
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
        yield "    <style>
        /* --- COPY/ADAPT Styles from maintenance/index.html.twig --- */
        /* Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; display: inline-block;}
        .status-disponible { background-color: #dcfce7; color: #166534; } /* green */
        .status-en_location { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-en_maintenance { background-color: #fee2e2; color: #991b1b; } /* red */

        /* Basic form input/select styles */
        .form-input, .form-select { appearance: none; display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        .form-input:focus, .form-select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; }
        .filter-form .form-input, .filter-form .form-select { height: 2.25rem; }

        /* Basic Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-motorcycle:before { content: \"\\f21c\"; }
        .fa-plus:before { content: \"\\2b\"; }
        .fa-filter:before { content: \"\\f0b0\"; }
        .fa-sync-alt:before { content: \"\\f2f1\"; }
        .fa-eye:before { content: \"\\f06e\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-trash:before { content: \"\\f1f8\"; }
        .mr-1 { margin-right: 0.25rem; }
        .mr-1\\.5 { margin-right: 0.375rem; }
        .mr-2 { margin-right: 0.5rem; }

        /* Pagination Container Styles */
        .pagination-container { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb; }
        .pagination-controls { display: flex; align-items: center; gap: 0.75rem; font-size: 0.875rem; color: #4b5563; margin-top: 0.5rem; }
        .pagination-controls label { margin-bottom: 0; white-space: nowrap; margin-right: 0.25rem; }
        .limit-select { padding: 0.25rem 1.75rem 0.25rem 0.5rem; font-size: 0.875rem; line-height: 1.25; height: auto; min-width: 4.5rem; background-size: 1.2em 1.2em; background-position: right 0.3rem center; border-radius: 0.375rem; border: 1px solid #d1d5db; }
        /* --- END COPY/ADAPT --- */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
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

        // line 56
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            ";
        // line 60
        yield "            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                    <i class=\"fas fa-motorcycle mr-2 text-blue-600\"></i>Gestion des Trottinettes
                </h1>
                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_new");
        yield "\" class=\"button button-primary\">
                    <i class=\"fas fa-plus mr-1.5\"></i> Nouvelle trottinette
                </a>
            </div>

            ";
        // line 70
        yield "            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-8\">
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-green-100 text-green-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Disponibles</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countDisponible", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countDisponible"]) || array_key_exists("countDisponible", $context) ? $context["countDisponible"] : (function () { throw new RuntimeError('Variable "countDisponible" does not exist.', 75, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-yellow-100 text-yellow-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">En location</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countEnLocation", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countEnLocation"]) || array_key_exists("countEnLocation", $context) ? $context["countEnLocation"] : (function () { throw new RuntimeError('Variable "countEnLocation" does not exist.', 82, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-red-100 text-red-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">En maintenance</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countEnMaintenance", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countEnMaintenance"]) || array_key_exists("countEnMaintenance", $context) ? $context["countEnMaintenance"] : (function () { throw new RuntimeError('Variable "countEnMaintenance" does not exist.', 89, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            ";
        // line 95
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/trottinette/index.html.twig", 95);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 96
        yield "
            ";
        // line 98
        yield "            <div class=\"bg-white rounded-lg shadow p-4 mb-6\">
                ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 99, $this->source); })()), 'form_start', ["attr" => ["class" => "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 items-end filter-form"]]);
        yield "
                ";
        // line 101
        yield "                <div class=\"sm:col-span-2 md:col-span-2 lg:col-span-2\">
                    <label for=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 102, $this->source); })()), "search", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102), "html", null, true);
        yield "\" class=\"sr-only\">Rechercher</label>
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 103, $this->source); })()), "search", [], "any", false, false, false, 103), 'widget');
        yield " ";
        // line 104
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 104, $this->source); })()), "search", [], "any", false, false, false, 104), 'errors');
        yield "
                </div>
                ";
        // line 107
        yield "                <div>
                    <label for=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 108, $this->source); })()), "etat", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "html", null, true);
        yield "\" class=\"sr-only\">État</label> ";
        // line 109
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 109, $this->source); })()), "etat", [], "any", false, false, false, 109), 'widget');
        yield " ";
        // line 110
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 110, $this->source); })()), "etat", [], "any", false, false, false, 110), 'errors');
        yield "
                </div>
                ";
        // line 113
        yield "                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"button button-primary button-sm flex-grow\">
                        <i class=\"fas fa-filter mr-1\"></i>Filtrer
                    </button>
                    <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
        yield "\" class=\"button button-secondary button-sm flex-grow\" title=\"Réinitialiser\">
                        <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser
                    </a>
                </div>
                ";
        // line 121
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 121, $this->source); })()), 'form_end');
        yield "
            </div>


            ";
        // line 126
        yield "            <div class=\"bg-white rounded-lg shadow overflow-hidden\">
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            ";
        // line 132
        yield "                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Modèle</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">N° Série</th>
                            ";
        // line 136
        yield "                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">État</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Batterie</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Localisation</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Autonomie</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 145
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 145, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["trottinette"]) {
            // line 146
            yield "                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-500\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 147), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "modele", [], "any", false, false, false, 148), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "numeroSerie", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                                ";
            // line 151
            yield "                                ";
            // line 152
            yield "                                ";
            // line 153
            yield "                                <td class=\"px-4 py-3 whitespace-nowrap text-sm\">
                                <span class=\"status-badge status-";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "etat", [], "any", false, false, false, 154), "value", [], "any", false, false, false, 154)), "html", null, true);
            yield "\">
                                    ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "etat", [], "any", false, false, false, 155), "value", [], "any", false, false, false, 155), ["_" => " "])), "html", null, true);
            yield "
                                </span>
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "batterie", [], "any", false, false, false, 158), "html", null, true);
            yield "%</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "localisation", [], "any", true, true, false, 159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "localisation", [], "any", false, false, false, 159), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "autonomie", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "autonomie", [], "any", false, false, false, 160), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 162)]), "html", null, true);
            yield "\" class=\"button button-sm button-info text-white\" title=\"Voir\"> <i class=\"fas fa-eye\"></i> </a>
                                    <a href=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 163)]), "html", null, true);
            yield "\" class=\"button button-sm button-warning text-white\" title=\"Modifier\"> <i class=\"fas fa-edit\"></i> </a>
                                    <form method=\"post\" action=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer la trottinette #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 164), "html", null, true);
            yield " ?');\" class=\"inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 165))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"button button-sm button-outline-danger\" title=\"Supprimer\"> <i class=\"fas fa-trash\"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 170
        if (!$context['_iterated']) {
            // line 171
            yield "                            <tr>
                                ";
            // line 173
            yield "                                <td colspan=\"8\" class=\"text-center py-12 px-6 text-gray-500\">
                                    <svg class=\"mx-auto h-12 w-12 text-gray-400\" ...> ... </svg>
                                    <h3 class=\"mt-2 text-sm font-medium text-gray-900\">Aucune trottinette trouvée</h3>
                                    <p class=\"mt-1 text-sm text-gray-500\">Essayez de modifier vos filtres ou ajoutez une nouvelle trottinette.</p>
                                    ";
            // line 177
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 177, $this->source); })()), "vars", [], "any", false, false, false, 177), "value", [], "any", false, false, false, 177), "search", [], "any", false, false, false, 177)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 177, $this->source); })()), "vars", [], "any", false, false, false, 177), "value", [], "any", false, false, false, 177), "etat", [], "any", false, false, false, 177)))) {
                // line 178
                yield "                                        <div class=\"mt-6\">
                                            <a href=\"";
                // line 179
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
                yield "\" class=\"button button-sm button-secondary\"> Réinitialiser les filtres </a>
                                        </div>
                                    ";
            }
            // line 182
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trottinette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "                        </tbody>
                    </table>
                </div>
            </div> ";
        // line 189
        yield "
            ";
        // line 191
        yield "            ";
        if ((array_key_exists("pagination", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 191, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 191) > 0))) {
            // line 192
            yield "                <div class=\"pagination-container\">
                    <div> ";
            // line 194
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 194, $this->source); })()), "pageCount", [], "any", false, false, false, 194) > 1)) {
                // line 195
                yield "                            ";
                yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 195, $this->source); })()));
                yield " ";
                // line 196
                yield "                        ";
            }
            // line 197
            yield "                    </div>
                    <div class=\"pagination-controls\"> ";
            // line 199
            yield "                        <span> ";
            // line 200
            yield "                            ";
            $context["firstItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "firstItemNumber", [], "any", true, true, false, 200)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 200, $this->source); })()), "firstItemNumber", [], "any", false, false, false, 200), 0)) : (0));
            // line 201
            yield "                            ";
            $context["lastItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "lastItemNumber", [], "any", true, true, false, 201)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 201, $this->source); })()), "lastItemNumber", [], "any", false, false, false, 201), 0)) : (0));
            // line 202
            yield "                            ";
            $context["totalItems"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "getTotalItemCount", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 202, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 202), 0)) : (0));
            // line 203
            yield "                            Affichage de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 203, $this->source); })()), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastItem"]) || array_key_exists("lastItem", $context) ? $context["lastItem"] : (function () { throw new RuntimeError('Variable "lastItem" does not exist.', 203, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 203, $this->source); })()), "html", null, true);
            yield "
                        </span>
                        <div class=\"inline-flex items-center\"> ";
            // line 206
            yield "                            <label for=\"itemsPerPageSelect\" class=\"whitespace-nowrap\">par page:</label>
                            <select id=\"itemsPerPageSelect\" class=\"form-select limit-select\">
                                ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allowedLimits"]) || array_key_exists("allowedLimits", $context) ? $context["allowedLimits"] : (function () { throw new RuntimeError('Variable "allowedLimits" does not exist.', 208, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["limitOption"]) {
                // line 209
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitOption"], "html", null, true);
                yield "\" ";
                yield ((($context["limitOption"] == (isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 209, $this->source); })()))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitOption"], "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limitOption'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "                            </select>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 217
        yield " ";
        // line 218
        yield "
        </div> ";
        // line 220
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 223
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

        // line 224
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 226
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('itemsPerPageSelect');
            if (selectElement) {
                selectElement.addEventListener('change', function() {
                    const newLimit = this.value;
                    const currentUrl = new URL(window.location.href);
                    const params = currentUrl.searchParams;
                    params.set('limit', newLimit);
                    params.set('page', '1'); // Reset page on limit change
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
        return "admin/trottinette/index.html.twig";
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
        return array (  542 => 226,  537 => 224,  524 => 223,  513 => 220,  510 => 218,  508 => 217,  501 => 213,  492 => 210,  485 => 209,  481 => 208,  477 => 206,  467 => 203,  464 => 202,  461 => 201,  458 => 200,  456 => 199,  453 => 197,  450 => 196,  446 => 195,  443 => 194,  440 => 192,  437 => 191,  434 => 189,  429 => 185,  421 => 182,  415 => 179,  412 => 178,  410 => 177,  404 => 173,  401 => 171,  399 => 170,  389 => 165,  383 => 164,  379 => 163,  375 => 162,  370 => 160,  366 => 159,  362 => 158,  356 => 155,  352 => 154,  349 => 153,  347 => 152,  345 => 151,  341 => 149,  337 => 148,  333 => 147,  330 => 146,  324 => 145,  314 => 136,  309 => 132,  302 => 126,  295 => 121,  288 => 117,  282 => 113,  276 => 110,  272 => 109,  269 => 108,  266 => 107,  260 => 104,  257 => 103,  253 => 102,  250 => 101,  246 => 99,  243 => 98,  240 => 96,  229 => 95,  221 => 89,  211 => 82,  201 => 75,  194 => 70,  186 => 64,  180 => 60,  175 => 56,  162 => 55,  107 => 9,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/trottinette/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Trottinettes - Admin{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* --- COPY/ADAPT Styles from maintenance/index.html.twig --- */
        /* Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; display: inline-block;}
        .status-disponible { background-color: #dcfce7; color: #166534; } /* green */
        .status-en_location { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-en_maintenance { background-color: #fee2e2; color: #991b1b; } /* red */

        /* Basic form input/select styles */
        .form-input, .form-select { appearance: none; display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        .form-input:focus, .form-select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; }
        .filter-form .form-input, .filter-form .form-select { height: 2.25rem; }

        /* Basic Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-motorcycle:before { content: \"\\f21c\"; }
        .fa-plus:before { content: \"\\2b\"; }
        .fa-filter:before { content: \"\\f0b0\"; }
        .fa-sync-alt:before { content: \"\\f2f1\"; }
        .fa-eye:before { content: \"\\f06e\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-trash:before { content: \"\\f1f8\"; }
        .mr-1 { margin-right: 0.25rem; }
        .mr-1\\.5 { margin-right: 0.375rem; }
        .mr-2 { margin-right: 0.5rem; }

        /* Pagination Container Styles */
        .pagination-container { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb; }
        .pagination-controls { display: flex; align-items: center; gap: 0.75rem; font-size: 0.875rem; color: #4b5563; margin-top: 0.5rem; }
        .pagination-controls label { margin-bottom: 0; white-space: nowrap; margin-right: 0.25rem; }
        .limit-select { padding: 0.25rem 1.75rem 0.25rem 0.5rem; font-size: 0.875rem; line-height: 1.25; height: auto; min-width: 4.5rem; background-size: 1.2em 1.2em; background-position: right 0.3rem center; border-radius: 0.375rem; border: 1px solid #d1d5db; }
        /* --- END COPY/ADAPT --- */
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            {# 1. Header Section #}
            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                    <i class=\"fas fa-motorcycle mr-2 text-blue-600\"></i>Gestion des Trottinettes
                </h1>
                <a href=\"{{ path('admin_trottinette_new') }}\" class=\"button button-primary\">
                    <i class=\"fas fa-plus mr-1.5\"></i> Nouvelle trottinette
                </a>
            </div>

            {# 2. Status Cards #}
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-8\">
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-green-100 text-green-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Disponibles</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countDisponible|default(0) }}</div>
                    </div>
                </div>
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-yellow-100 text-yellow-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">En location</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countEnLocation|default(0) }}</div>
                    </div>
                </div>
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-red-100 text-red-600\"> <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4\" /></svg> </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">En maintenance</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countEnMaintenance|default(0) }}</div>
                    </div>
                </div>
            </div>

            {# 3. Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 4. Filter Form #}
            <div class=\"bg-white rounded-lg shadow p-4 mb-6\">
                {{ form_start(filterForm, {'attr': {'class': 'grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 items-end filter-form'}}) }}
                {# Search Input (spanning more columns) #}
                <div class=\"sm:col-span-2 md:col-span-2 lg:col-span-2\">
                    <label for=\"{{ filterForm.search.vars.id }}\" class=\"sr-only\">Rechercher</label>
                    {{ form_widget(filterForm.search) }} {# Attributes set in FormType #}
                    {{ form_errors(filterForm.search) }}
                </div>
                {# Status Filter #}
                <div>
                    <label for=\"{{ filterForm.etat.vars.id }}\" class=\"sr-only\">État</label> {# Use 'etat' from FormType #}
                    {{ form_widget(filterForm.etat) }} {# Attributes set in FormType #}
                    {{ form_errors(filterForm.etat) }}
                </div>
                {# Buttons #}
                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"button button-primary button-sm flex-grow\">
                        <i class=\"fas fa-filter mr-1\"></i>Filtrer
                    </button>
                    <a href=\"{{ path('admin_trottinette_index') }}\" class=\"button button-secondary button-sm flex-grow\" title=\"Réinitialiser\">
                        <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser
                    </a>
                </div>
                {{ form_end(filterForm) }}
            </div>


            {# 5. Table Section #}
            <div class=\"bg-white rounded-lg shadow overflow-hidden\">
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            {# Adjust Headers based on Trottinette entity #}
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Modèle</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">N° Série</th>
                            {# Optional columns: <th...>Utilisateur</th> <th...>Pt Relais</th> #}
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">État</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Batterie</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Localisation</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Autonomie</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                        {# Iterate over the pagination object #}
                        {% for trottinette in pagination %}
                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-500\">{{ trottinette.id }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900\">{{ trottinette.modele }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">{{ trottinette.numeroSerie }}</td>
                                {# Optional columns #}
                                {# <td...>{{ trottinette.utilisateur ? trottinette.utilisateur.fullName : 'N/A' }}</td> #}
                                {# <td...>{{ trottinette.pointRelais ? trottinette.pointRelais.nom : 'N/A' }}</td> #}
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm\">
                                <span class=\"status-badge status-{{ trottinette.etat.value|lower }}\">
                                    {{ trottinette.etat.value|replace({'_': ' '})|capitalize }}
                                </span>
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">{{ trottinette.batterie }}%</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">{{ trottinette.localisation|default('N/A') }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">{{ trottinette.autonomie|default('N/A') }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"{{ path('admin_trottinette_show', {'id': trottinette.id}) }}\" class=\"button button-sm button-info text-white\" title=\"Voir\"> <i class=\"fas fa-eye\"></i> </a>
                                    <a href=\"{{ path('admin_trottinette_edit', {'id': trottinette.id}) }}\" class=\"button button-sm button-warning text-white\" title=\"Modifier\"> <i class=\"fas fa-edit\"></i> </a>
                                    <form method=\"post\" action=\"{{ path('admin_trottinette_delete', {'id': trottinette.id}) }}\" onsubmit=\"return confirm('Supprimer la trottinette #{{ trottinette.id }} ?');\" class=\"inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trottinette.id) }}\">
                                        <button type=\"submit\" class=\"button button-sm button-outline-danger\" title=\"Supprimer\"> <i class=\"fas fa-trash\"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                {# Adjust colspan based on visible columns #}
                                <td colspan=\"8\" class=\"text-center py-12 px-6 text-gray-500\">
                                    <svg class=\"mx-auto h-12 w-12 text-gray-400\" ...> ... </svg>
                                    <h3 class=\"mt-2 text-sm font-medium text-gray-900\">Aucune trottinette trouvée</h3>
                                    <p class=\"mt-1 text-sm text-gray-500\">Essayez de modifier vos filtres ou ajoutez une nouvelle trottinette.</p>
                                    {% if filterForm.vars.value.search is not empty or filterForm.vars.value.etat is not empty %}
                                        <div class=\"mt-6\">
                                            <a href=\"{{ path('admin_trottinette_index') }}\" class=\"button button-sm button-secondary\"> Réinitialiser les filtres </a>
                                        </div>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div> {# End Table Section #}

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
                            {% set firstItem = pagination.firstItemNumber|default(0) %}
                            {% set lastItem = pagination.lastItemNumber|default(0) %}
                            {% set totalItems = pagination.getTotalItemCount|default(0) %}
                            Affichage de {{ firstItem }}-{{ lastItem }} sur {{ totalItems }}
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
                    params.set('page', '1'); // Reset page on limit change
                    currentUrl.search = params.toString();
                    window.location.href = currentUrl.toString();
                });
            }
        });
    </script>
{% endblock %}", "admin/trottinette/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/trottinette/index.html.twig");
    }
}
