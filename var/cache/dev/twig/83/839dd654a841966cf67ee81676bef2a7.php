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

/* maintenance/index.html.twig */
class __TwigTemplate_a9c20038a7e441f07632e587dd0be553 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/index.html.twig", 2);
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

        yield "Gestion des Maintenances - Admin";
        
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
        /* Reusable Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; display: inline-block; } /* Added display inline-block */
        .status-en_cours { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-terminee { background-color: #dcfce7; color: #166534; } /* green */
        .status-annulee { background-color: #fee2e2; color: #991b1b; } /* red */

        /* Basic form input/select styles (reuse/adapt from user template) */
        .form-input, .form-select { appearance: none; display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        .form-input:focus, .form-select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */ }
        /* Specific height for form elements in filter bar if needed */
        .filter-form .form-input, .filter-form .form-select { height: 2.25rem; /* h-9 */ }

        /* Reusable Button Styles (reuse/adapt from user template) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button-outline-primary { color: #3b82f6; border-color: #3b82f6; background-color: transparent;} .button-outline-primary:hover { background-color: #eff6ff; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons (reuse/adapt from user template) */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-tools:before { content: \"\\f7d9\"; }
        .fa-plus:before { content: \"\\2b\"; }
        .fa-calendar-alt:before { content: \"\\f073\"; }
        .fa-filter:before { content: \"\\f0b0\"; }
        .fa-sync-alt:before { content: \"\\f2f1\"; } /* Reset icon */
        .fa-eye:before { content: \"\\f06e\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-trash:before { content: \"\\f1f8\"; }
        .mr-1 { margin-right: 0.25rem; }
        .mr-1\\.5 { margin-right: 0.375rem; }
        .mr-2 { margin-right: 0.5rem; }

        /* --- Pagination Styles --- */
        .pagination-container {
            display: flex;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            justify-content: space-between; /* Space out links and controls */
            align-items: center;
            margin-top: 1.5rem; /* mt-6 */
            padding-top: 1rem; /* pt-4 */
            border-top: 1px solid #e5e7eb; /* border-t border-gray-200 */
        }

        /* KNP Paginator default classes (adapt if using a different template) */
        .pagination { display: flex; padding-left: 0; list-style: none; border-radius: .25rem; margin: 0; /* Remove default margin */ }
        .page-item .page-link { position: relative; display: block; padding: .5rem .75rem; margin-left: -1px; line-height: 1.25; color: #3b82f6; background-color: #fff; border: 1px solid #dee2e6; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out; }
        .page-item:first-child .page-link { margin-left: 0; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; }
        .page-item:last-child .page-link { border-top-right-radius: .25rem; border-bottom-right-radius: .25rem; }
        .page-item.disabled .page-link { color: #6c757d; pointer-events: none; cursor: auto; background-color: #fff; border-color: #dee2e6; }
        .page-item.active .page-link { z-index: 3; color: #fff; background-color: #3b82f6; border-color: #3b82f6; }
        .page-link:hover { z-index: 2; color: #2563eb; text-decoration: none; background-color: #e9ecef; border-color: #dee2e6; }

        /* Pagination summary and limit selector styles */
        .pagination-controls {
            display: flex;
            align-items: center;
            gap: 0.75rem; /* space-x-3 */
            font-size: 0.875rem; /* text-sm */
            color: #4b5563; /* text-gray-600 */
            margin-top: 0.5rem; /* Add some space when wrapped */
        }
        .pagination-controls label {
            margin-bottom: 0; /* Override default label margin */
            white-space: nowrap;
            margin-right: 0.25rem; /* mr-1 */
        }
        /* Make the select smaller */
        .limit-select {
            padding: 0.25rem 1.75rem 0.25rem 0.5rem; /* Adjust padding for size and arrow */
            font-size: 0.875rem; /* text-sm */
            line-height: 1.25;
            height: auto; /* Override filter-form height if needed */
            min-width: 4.5rem; /* Give it some minimum width */
            background-size: 1.2em 1.2em; /* Adjust arrow size */
            background-position: right 0.3rem center;
            border-radius: 0.375rem; /* Match other inputs */
            border: 1px solid #d1d5db; /* Match other inputs */
        }
        /* Reusable Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; display: inline-block; }
        .status-en_cours { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-terminee { background-color: #dcfce7; color: #166534; } /* green */
        .status-annulee { background-color: #fee2e2; color: #991b1b; } /* red */

        /* Basic form input/select styles (KEEP THESE) */
        .form-input, .form-select { appearance: none; display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        .form-input:focus, .form-select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */ }
        .filter-form .form-input, .filter-form .form-select { height: 2.25rem; /* h-9 */ }

        /* Reusable Button Styles (KEEP THESE) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button-outline-primary { color: #3b82f6; border-color: #3b82f6; background-color: transparent;} .button-outline-primary:hover { background-color: #eff6ff; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons (KEEP THESE) */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-tools:before { content: \"\\f7d9\"; }
        .fa-plus:before { content: \"\\2b\"; }
        .fa-calendar-alt:before { content: \"\\f073\"; }
        .fa-filter:before { content: \"\\f0b0\"; }
        .fa-sync-alt:before { content: \"\\f2f1\"; } /* Reset icon */
        .fa-eye:before { content: \"\\f06e\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-trash:before { content: \"\\f1f8\"; }
        .mr-1 { margin-right: 0.25rem; }
        .mr-1\\.5 { margin-right: 0.375rem; }
        .mr-2 { margin-right: 0.5rem; }

        /* --- REMOVE Pagination specific styles --- */
        /* .pagination { ... } */
        /* .page-item .page-link { ... } */
        /* .page-item.disabled .page-link { ... } */
        /* .page-item.active .page-link { ... } */
        /* .page-link:hover { ... } */
        /* --- END REMOVE --- */

        /* Styles for limit selector container (KEEP THESE) */
        .pagination-container {
            display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;
            margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb;
        }
        .pagination-controls { display: flex; align-items: center; gap: 0.75rem; font-size: 0.875rem; color: #4b5563; margin-top: 0.5rem; }
        .pagination-controls label { margin-bottom: 0; white-space: nowrap; margin-right: 0.25rem; }
        .limit-select { padding: 0.25rem 1.75rem 0.25rem 0.5rem; font-size: 0.875rem; line-height: 1.25; height: auto; min-width: 4.5rem; background-size: 1.2em 1.2em; background-position: right 0.3rem center; border-radius: 0.375rem; border: 1px solid #d1d5db; }
        /* END KEEP */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 155
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

        // line 156
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            ";
        // line 160
        yield "            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                    <i class=\"fas fa-tools mr-2 text-blue-600\"></i>Gestion des Maintenances
                </h1>
                <div>
                    <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_new");
        yield "\" class=\"button button-primary mr-2\">
                        <i class=\"fas fa-plus mr-1.5\"></i> Nouvelle maintenance
                    </a>
                    <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_calendar");
        yield "\" class=\"button button-info\">
                        <i class=\"fas fa-calendar-alt mr-1.5\"></i> Planning
                    </a>
                </div>
            </div>

            ";
        // line 175
        yield "            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-8\">
                ";
        // line 177
        yield "                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-yellow-100 text-yellow-600\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg>
                    </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">En cours</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countEnCours", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countEnCours"]) || array_key_exists("countEnCours", $context) ? $context["countEnCours"] : (function () { throw new RuntimeError('Variable "countEnCours" does not exist.', 183, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
                ";
        // line 187
        yield "                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-green-100 text-green-600\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg>
                    </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Terminées</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countTerminee", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countTerminee"]) || array_key_exists("countTerminee", $context) ? $context["countTerminee"] : (function () { throw new RuntimeError('Variable "countTerminee" does not exist.', 193, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
                ";
        // line 197
        yield "                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-red-100 text-red-600\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" /></svg>
                    </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Annulées</div>
                        <div class=\"text-2xl font-bold text-gray-900\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countAnnulee", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countAnnulee"]) || array_key_exists("countAnnulee", $context) ? $context["countAnnulee"] : (function () { throw new RuntimeError('Variable "countAnnulee" does not exist.', 203, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            ";
        // line 209
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "maintenance/index.html.twig", 209);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 210
        yield "
            ";
        // line 212
        yield "            <div class=\"bg-white rounded-lg shadow p-4 mb-6\">
                ";
        // line 213
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 213, $this->source); })()), 'form_start', ["attr" => ["class" => "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 items-end filter-form"]]);
        yield "
                <div class=\"sm:col-span-2 md:col-span-2 lg:col-span-2\">
                    <label for=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 215, $this->source); })()), "search", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "id", [], "any", false, false, false, 215), "html", null, true);
        yield "\" class=\"sr-only\">Rechercher</label>
                    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 216, $this->source); })()), "search", [], "any", false, false, false, 216), 'widget');
        yield "
                    ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 217, $this->source); })()), "search", [], "any", false, false, false, 217), 'errors');
        yield "
                </div>
                <div>
                    <label for=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 220, $this->source); })()), "statut", [], "any", false, false, false, 220), "vars", [], "any", false, false, false, 220), "id", [], "any", false, false, false, 220), "html", null, true);
        yield "\" class=\"sr-only\">État</label>
                    ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 221, $this->source); })()), "statut", [], "any", false, false, false, 221), 'widget');
        yield "
                    ";
        // line 222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 222, $this->source); })()), "statut", [], "any", false, false, false, 222), 'errors');
        yield "
                </div>
                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"button button-primary button-sm flex-grow\">
                        <i class=\"fas fa-filter mr-1\"></i>Filtrer
                    </button>
                    <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_index");
        yield "\" class=\"button button-secondary button-sm flex-grow\" title=\"Réinitialiser\">
                        <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser
                    </a>
                </div>
                ";
        // line 232
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 232, $this->source); })()), 'form_end');
        yield "
            </div>


            ";
        // line 237
        yield "            <div class=\"bg-white rounded-lg shadow overflow-hidden\">
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Trottinette ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Description</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Début</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Fin</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 252, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["maintenance"]) {
            // line 253
            yield "                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-500\">";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 254), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">
                                    ";
            // line 256
            if (CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "trottinetteId", [], "any", false, false, false, 256)) {
                // line 257
                yield "                                        ";
                // line 258
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "trottinetteId", [], "any", false, false, false, 258)]), "html", null, true);
                yield "\" class=\"text-blue-600 hover:underline\" title=\"Voir trottinette ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "trottinetteId", [], "any", false, false, false, 258), "html", null, true);
                yield "\">
                                            ";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "trottinetteId", [], "any", false, false, false, 259), "html", null, true);
                yield "
                                        </a>
                                    ";
            } else {
                // line 262
                yield "                                        N/A
                                    ";
            }
            // line 264
            yield "                                </td>
                                <td class=\"px-4 py-3 text-sm text-gray-600 max-w-xs truncate\" title=\"";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 265), "html", null, true);
            yield "\">
                                    ";
            // line 266
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 266)) > 60)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 266), 0, 60) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", true, true, false, 266)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 266), "N/A")) : ("N/A")), "html", null, true)));
            yield "
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">";
            // line 268
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "dateDebut", [], "any", false, false, false, 268)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "dateDebut", [], "any", false, false, false, 268), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">";
            // line 269
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "dateFin", [], "any", false, false, false, 269)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "dateFin", [], "any", false, false, false, 269), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm\">
                                    ";
            // line 272
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "statut", [], "any", false, false, false, 272)) {
                // line 273
                yield "                                        ";
                $context["status_class"] = ("status-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "statut", [], "any", false, false, false, 273)), ["_" => "-"]));
                // line 274
                yield "                                        <span class=\"status-badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_class"]) || array_key_exists("status_class", $context) ? $context["status_class"] : (function () { throw new RuntimeError('Variable "status_class" does not exist.', 274, $this->source); })()), "html", null, true);
                yield "\">
                                             ";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "statut", [], "any", false, false, false, 275), ["_" => " "])), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 278
                yield "                                        <span class=\"status-badge status-unknown\">Inconnu</span> ";
                // line 279
                yield "                                    ";
            }
            // line 280
            yield "                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 282)]), "html", null, true);
            yield "\" class=\"button button-sm button-info text-white\" title=\"Voir\"> <i class=\"fas fa-eye\"></i> </a>
                                    <a href=\"";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 283)]), "html", null, true);
            yield "\" class=\"button button-sm button-warning text-white\" title=\"Modifier\"> <i class=\"fas fa-edit\"></i> </a>
                                    <form method=\"post\" action=\"";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 284)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer la maintenance #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 284), "html", null, true);
            yield " ?');\" class=\"inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 285))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"button button-sm button-outline-danger\" title=\"Supprimer\"> <i class=\"fas fa-trash\"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 290
        if (!$context['_iterated']) {
            // line 291
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-12 px-6 text-gray-500\"> ";
            // line 293
            yield "                                    <svg class=\"mx-auto h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                                        <path vector-effect=\"non-scaling-stroke\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z\" />
                                    </svg>
                                    <h3 class=\"mt-2 text-sm font-medium text-gray-900\">Aucune maintenance trouvée</h3>
                                    <p class=\"mt-1 text-sm text-gray-500\">Essayez de modifier vos filtres ou créez une nouvelle maintenance.</p>
                                    ";
            // line 298
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 298, $this->source); })()), "vars", [], "any", false, false, false, 298), "value", [], "any", false, false, false, 298), "search", [], "any", false, false, false, 298)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 298, $this->source); })()), "vars", [], "any", false, false, false, 298), "value", [], "any", false, false, false, 298), "statut", [], "any", false, false, false, 298)))) {
                // line 299
                yield "                                        <div class=\"mt-6\">
                                            <a href=\"";
                // line 300
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_index");
                yield "\" class=\"button button-sm button-secondary\">
                                                Réinitialiser les filtres
                                            </a>
                                        </div>
                                    ";
            }
            // line 305
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['maintenance'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        yield "                        </tbody>
                    </table>
                </div>
            </div> ";
        // line 312
        yield "
            ";
        // line 314
        yield "            ";
        if ((array_key_exists("pagination", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 314, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 314) > 0))) {
            // line 315
            yield "                <div class=\"pagination-container\"> ";
            // line 316
            yield "                    <div> ";
            // line 317
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 317, $this->source); })()), "pageCount", [], "any", false, false, false, 317) > 1)) {
                // line 318
                yield "                            ";
                yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 318, $this->source); })()));
                yield " ";
                // line 319
                yield "                        ";
            }
            // line 320
            yield "                    </div>
                    <div class=\"pagination-controls\"> ";
            // line 322
            yield "                        <span> ";
            // line 323
            yield "                            ";
            $context["firstItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "firstItemNumber", [], "any", true, true, false, 323)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 323, $this->source); })()), "firstItemNumber", [], "any", false, false, false, 323), 0)) : (0));
            // line 324
            yield "                            ";
            $context["lastItem"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "lastItemNumber", [], "any", true, true, false, 324)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 324, $this->source); })()), "lastItemNumber", [], "any", false, false, false, 324), 0)) : (0));
            // line 325
            yield "                            ";
            $context["totalItems"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "getTotalItemCount", [], "any", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 325, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 325), 0)) : (0));
            // line 326
            yield "                            Affichage de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 326, $this->source); })()), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastItem"]) || array_key_exists("lastItem", $context) ? $context["lastItem"] : (function () { throw new RuntimeError('Variable "lastItem" does not exist.', 326, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 326, $this->source); })()), "html", null, true);
            yield "
                         </span>
                        <div class=\"inline-flex items-center\"> ";
            // line 329
            yield "                            <label for=\"itemsPerPageSelect\" class=\"whitespace-nowrap\">par page:</label>
                            <select id=\"itemsPerPageSelect\" class=\"form-select limit-select\">
                                ";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allowedLimits"]) || array_key_exists("allowedLimits", $context) ? $context["allowedLimits"] : (function () { throw new RuntimeError('Variable "allowedLimits" does not exist.', 331, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["limitOption"]) {
                // line 332
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitOption"], "html", null, true);
                yield "\" ";
                yield ((($context["limitOption"] == (isset($context["currentLimit"]) || array_key_exists("currentLimit", $context) ? $context["currentLimit"] : (function () { throw new RuntimeError('Variable "currentLimit" does not exist.', 332, $this->source); })()))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 333
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitOption"], "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limitOption'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            yield "                            </select>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 341
        yield "
        </div> ";
        // line 343
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 346
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

        // line 347
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield " ";
        // line 348
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('itemsPerPageSelect');
            if (selectElement) {
                selectElement.addEventListener('change', function() {
                    const newLimit = this.value;
                    const currentUrl = new URL(window.location.href);
                    const params = currentUrl.searchParams;

                    // Set the new limit parameter
                    params.set('limit', newLimit);
                    // IMPORTANT: Reset to page 1 when changing the number of items per page
                    params.set('page', '1');

                    // Reconstruct the URL and navigate
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
        return "maintenance/index.html.twig";
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
        return array (  682 => 348,  678 => 347,  665 => 346,  654 => 343,  651 => 341,  644 => 336,  635 => 333,  628 => 332,  624 => 331,  620 => 329,  610 => 326,  607 => 325,  604 => 324,  601 => 323,  599 => 322,  596 => 320,  593 => 319,  589 => 318,  586 => 317,  584 => 316,  582 => 315,  579 => 314,  576 => 312,  571 => 308,  563 => 305,  555 => 300,  552 => 299,  550 => 298,  543 => 293,  540 => 291,  538 => 290,  528 => 285,  522 => 284,  518 => 283,  514 => 282,  510 => 280,  507 => 279,  505 => 278,  499 => 275,  494 => 274,  491 => 273,  488 => 272,  483 => 269,  479 => 268,  474 => 266,  470 => 265,  467 => 264,  463 => 262,  457 => 259,  450 => 258,  448 => 257,  446 => 256,  441 => 254,  438 => 253,  433 => 252,  416 => 237,  409 => 232,  402 => 228,  393 => 222,  389 => 221,  385 => 220,  379 => 217,  375 => 216,  371 => 215,  366 => 213,  363 => 212,  360 => 210,  349 => 209,  341 => 203,  333 => 197,  327 => 193,  319 => 187,  313 => 183,  305 => 177,  302 => 175,  293 => 168,  287 => 165,  280 => 160,  275 => 156,  262 => 155,  107 => 9,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/maintenance/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Maintenances - Admin{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* Reusable Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; display: inline-block; } /* Added display inline-block */
        .status-en_cours { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-terminee { background-color: #dcfce7; color: #166534; } /* green */
        .status-annulee { background-color: #fee2e2; color: #991b1b; } /* red */

        /* Basic form input/select styles (reuse/adapt from user template) */
        .form-input, .form-select { appearance: none; display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        .form-input:focus, .form-select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */ }
        /* Specific height for form elements in filter bar if needed */
        .filter-form .form-input, .filter-form .form-select { height: 2.25rem; /* h-9 */ }

        /* Reusable Button Styles (reuse/adapt from user template) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button-outline-primary { color: #3b82f6; border-color: #3b82f6; background-color: transparent;} .button-outline-primary:hover { background-color: #eff6ff; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons (reuse/adapt from user template) */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-tools:before { content: \"\\f7d9\"; }
        .fa-plus:before { content: \"\\2b\"; }
        .fa-calendar-alt:before { content: \"\\f073\"; }
        .fa-filter:before { content: \"\\f0b0\"; }
        .fa-sync-alt:before { content: \"\\f2f1\"; } /* Reset icon */
        .fa-eye:before { content: \"\\f06e\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-trash:before { content: \"\\f1f8\"; }
        .mr-1 { margin-right: 0.25rem; }
        .mr-1\\.5 { margin-right: 0.375rem; }
        .mr-2 { margin-right: 0.5rem; }

        /* --- Pagination Styles --- */
        .pagination-container {
            display: flex;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            justify-content: space-between; /* Space out links and controls */
            align-items: center;
            margin-top: 1.5rem; /* mt-6 */
            padding-top: 1rem; /* pt-4 */
            border-top: 1px solid #e5e7eb; /* border-t border-gray-200 */
        }

        /* KNP Paginator default classes (adapt if using a different template) */
        .pagination { display: flex; padding-left: 0; list-style: none; border-radius: .25rem; margin: 0; /* Remove default margin */ }
        .page-item .page-link { position: relative; display: block; padding: .5rem .75rem; margin-left: -1px; line-height: 1.25; color: #3b82f6; background-color: #fff; border: 1px solid #dee2e6; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out; }
        .page-item:first-child .page-link { margin-left: 0; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; }
        .page-item:last-child .page-link { border-top-right-radius: .25rem; border-bottom-right-radius: .25rem; }
        .page-item.disabled .page-link { color: #6c757d; pointer-events: none; cursor: auto; background-color: #fff; border-color: #dee2e6; }
        .page-item.active .page-link { z-index: 3; color: #fff; background-color: #3b82f6; border-color: #3b82f6; }
        .page-link:hover { z-index: 2; color: #2563eb; text-decoration: none; background-color: #e9ecef; border-color: #dee2e6; }

        /* Pagination summary and limit selector styles */
        .pagination-controls {
            display: flex;
            align-items: center;
            gap: 0.75rem; /* space-x-3 */
            font-size: 0.875rem; /* text-sm */
            color: #4b5563; /* text-gray-600 */
            margin-top: 0.5rem; /* Add some space when wrapped */
        }
        .pagination-controls label {
            margin-bottom: 0; /* Override default label margin */
            white-space: nowrap;
            margin-right: 0.25rem; /* mr-1 */
        }
        /* Make the select smaller */
        .limit-select {
            padding: 0.25rem 1.75rem 0.25rem 0.5rem; /* Adjust padding for size and arrow */
            font-size: 0.875rem; /* text-sm */
            line-height: 1.25;
            height: auto; /* Override filter-form height if needed */
            min-width: 4.5rem; /* Give it some minimum width */
            background-size: 1.2em 1.2em; /* Adjust arrow size */
            background-position: right 0.3rem center;
            border-radius: 0.375rem; /* Match other inputs */
            border: 1px solid #d1d5db; /* Match other inputs */
        }
        /* Reusable Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; display: inline-block; }
        .status-en_cours { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-terminee { background-color: #dcfce7; color: #166534; } /* green */
        .status-annulee { background-color: #fee2e2; color: #991b1b; } /* red */

        /* Basic form input/select styles (KEEP THESE) */
        .form-input, .form-select { appearance: none; display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        .form-input:focus, .form-select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */ }
        .filter-form .form-input, .filter-form .form-select { height: 2.25rem; /* h-9 */ }

        /* Reusable Button Styles (KEEP THESE) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button-outline-primary { color: #3b82f6; border-color: #3b82f6; background-color: transparent;} .button-outline-primary:hover { background-color: #eff6ff; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons (KEEP THESE) */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-tools:before { content: \"\\f7d9\"; }
        .fa-plus:before { content: \"\\2b\"; }
        .fa-calendar-alt:before { content: \"\\f073\"; }
        .fa-filter:before { content: \"\\f0b0\"; }
        .fa-sync-alt:before { content: \"\\f2f1\"; } /* Reset icon */
        .fa-eye:before { content: \"\\f06e\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-trash:before { content: \"\\f1f8\"; }
        .mr-1 { margin-right: 0.25rem; }
        .mr-1\\.5 { margin-right: 0.375rem; }
        .mr-2 { margin-right: 0.5rem; }

        /* --- REMOVE Pagination specific styles --- */
        /* .pagination { ... } */
        /* .page-item .page-link { ... } */
        /* .page-item.disabled .page-link { ... } */
        /* .page-item.active .page-link { ... } */
        /* .page-link:hover { ... } */
        /* --- END REMOVE --- */

        /* Styles for limit selector container (KEEP THESE) */
        .pagination-container {
            display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;
            margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e5e7eb;
        }
        .pagination-controls { display: flex; align-items: center; gap: 0.75rem; font-size: 0.875rem; color: #4b5563; margin-top: 0.5rem; }
        .pagination-controls label { margin-bottom: 0; white-space: nowrap; margin-right: 0.25rem; }
        .limit-select { padding: 0.25rem 1.75rem 0.25rem 0.5rem; font-size: 0.875rem; line-height: 1.25; height: auto; min-width: 4.5rem; background-size: 1.2em 1.2em; background-position: right 0.3rem center; border-radius: 0.375rem; border: 1px solid #d1d5db; }
        /* END KEEP */
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            {# 1. Header Section #}
            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                    <i class=\"fas fa-tools mr-2 text-blue-600\"></i>Gestion des Maintenances
                </h1>
                <div>
                    <a href=\"{{ path('admin_maintenance_new') }}\" class=\"button button-primary mr-2\">
                        <i class=\"fas fa-plus mr-1.5\"></i> Nouvelle maintenance
                    </a>
                    <a href=\"{{ path('admin_maintenance_calendar') }}\" class=\"button button-info\">
                        <i class=\"fas fa-calendar-alt mr-1.5\"></i> Planning
                    </a>
                </div>
            </div>

            {# 2. Status Cards #}
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-8\">
                {# In Progress Card #}
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-yellow-100 text-yellow-600\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg>
                    </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">En cours</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countEnCours|default(0) }}</div>
                    </div>
                </div>
                {# Completed Card #}
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-green-100 text-green-600\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg>
                    </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Terminées</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countTerminee|default(0) }}</div>
                    </div>
                </div>
                {# Cancelled Card #}
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 p-6 flex items-center gap-4\">
                    <div class=\"flex-shrink-0 rounded-full p-3 bg-red-100 text-red-600\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" /></svg>
                    </div>
                    <div>
                        <div class=\"text-sm text-gray-500 uppercase tracking-wider\">Annulées</div>
                        <div class=\"text-2xl font-bold text-gray-900\">{{ countAnnulee|default(0) }}</div>
                    </div>
                </div>
            </div>

            {# 3. Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 4. Filter Form #}
            <div class=\"bg-white rounded-lg shadow p-4 mb-6\">
                {{ form_start(filterForm, {'attr': {'class': 'grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 items-end filter-form'}}) }}
                <div class=\"sm:col-span-2 md:col-span-2 lg:col-span-2\">
                    <label for=\"{{ filterForm.search.vars.id }}\" class=\"sr-only\">Rechercher</label>
                    {{ form_widget(filterForm.search) }}
                    {{ form_errors(filterForm.search) }}
                </div>
                <div>
                    <label for=\"{{ filterForm.statut.vars.id }}\" class=\"sr-only\">État</label>
                    {{ form_widget(filterForm.statut) }}
                    {{ form_errors(filterForm.statut) }}
                </div>
                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"button button-primary button-sm flex-grow\">
                        <i class=\"fas fa-filter mr-1\"></i>Filtrer
                    </button>
                    <a href=\"{{ path('admin_maintenance_index') }}\" class=\"button button-secondary button-sm flex-grow\" title=\"Réinitialiser\">
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
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Trottinette ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Description</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Début</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Fin</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                        {% for maintenance in pagination %}
                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-500\">{{ maintenance.id }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">
                                    {% if maintenance.trottinetteId %}
                                        {# Assuming admin_trottinette_show route exists #}
                                        <a href=\"{{ path('admin_trottinette_show', {'id': maintenance.trottinetteId}) }}\" class=\"text-blue-600 hover:underline\" title=\"Voir trottinette {{ maintenance.trottinetteId }}\">
                                            {{ maintenance.trottinetteId }}
                                        </a>
                                    {% else %}
                                        N/A
                                    {% endif %}
                                </td>
                                <td class=\"px-4 py-3 text-sm text-gray-600 max-w-xs truncate\" title=\"{{ maintenance.description }}\">
                                    {{ maintenance.description|length > 60 ? maintenance.description|slice(0, 60) ~ '...' : maintenance.description|default('N/A') }}
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">{{ maintenance.dateDebut ? maintenance.dateDebut|date('d/m/Y H:i') : '' }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">{{ maintenance.dateFin ? maintenance.dateFin|date('d/m/Y H:i') : 'N/A' }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm\">
                                    {# Ensure status is not null before processing #}
                                    {% if maintenance.statut %}
                                        {% set status_class = 'status-' ~ (maintenance.statut|lower|replace({'_': '-'})) %}
                                        <span class=\"status-badge {{ status_class }}\">
                                             {{ maintenance.statut|replace({'_': ' '})|capitalize }}
                                        </span>
                                    {% else %}
                                        <span class=\"status-badge status-unknown\">Inconnu</span> {# Fallback style #}
                                    {% endif %}
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"{{ path('admin_maintenance_show', {'id': maintenance.id}) }}\" class=\"button button-sm button-info text-white\" title=\"Voir\"> <i class=\"fas fa-eye\"></i> </a>
                                    <a href=\"{{ path('admin_maintenance_edit', {'id': maintenance.id}) }}\" class=\"button button-sm button-warning text-white\" title=\"Modifier\"> <i class=\"fas fa-edit\"></i> </a>
                                    <form method=\"post\" action=\"{{ path('admin_maintenance_delete', {'id': maintenance.id}) }}\" onsubmit=\"return confirm('Supprimer la maintenance #{{ maintenance.id }} ?');\" class=\"inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ maintenance.id) }}\">
                                        <button type=\"submit\" class=\"button button-sm button-outline-danger\" title=\"Supprimer\"> <i class=\"fas fa-trash\"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-12 px-6 text-gray-500\"> {# Adjusted colspan #}
                                    <svg class=\"mx-auto h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                                        <path vector-effect=\"non-scaling-stroke\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z\" />
                                    </svg>
                                    <h3 class=\"mt-2 text-sm font-medium text-gray-900\">Aucune maintenance trouvée</h3>
                                    <p class=\"mt-1 text-sm text-gray-500\">Essayez de modifier vos filtres ou créez une nouvelle maintenance.</p>
                                    {% if filterForm.vars.value.search is not empty or filterForm.vars.value.statut is not empty %}
                                        <div class=\"mt-6\">
                                            <a href=\"{{ path('admin_maintenance_index') }}\" class=\"button button-sm button-secondary\">
                                                Réinitialiser les filtres
                                            </a>
                                        </div>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div> {# End Table Section #}

            {# 6. Pagination Container (as before, but without the old CSS) #}
            {% if pagination is defined and pagination.getTotalItemCount > 0 %}
                <div class=\"pagination-container\"> {# Wrapper for links and controls #}
                    <div> {# Div to keep links together #}
                        {% if pagination.pageCount > 1 %}
                            {{ knp_pagination_render(pagination) }} {# This will now use the Tailwind template #}
                        {% endif %}
                    </div>
                    <div class=\"pagination-controls\"> {# Controls group #}
                        <span> {# Item count text #}
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
            {% endif %}

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}

{% block javascripts %}
    {{ parent() }} {# Include scripts from base template if any #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('itemsPerPageSelect');
            if (selectElement) {
                selectElement.addEventListener('change', function() {
                    const newLimit = this.value;
                    const currentUrl = new URL(window.location.href);
                    const params = currentUrl.searchParams;

                    // Set the new limit parameter
                    params.set('limit', newLimit);
                    // IMPORTANT: Reset to page 1 when changing the number of items per page
                    params.set('page', '1');

                    // Reconstruct the URL and navigate
                    currentUrl.search = params.toString();
                    window.location.href = currentUrl.toString();
                });
            }
        });
    </script>
{% endblock %}", "maintenance/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/maintenance/index.html.twig");
    }
}
