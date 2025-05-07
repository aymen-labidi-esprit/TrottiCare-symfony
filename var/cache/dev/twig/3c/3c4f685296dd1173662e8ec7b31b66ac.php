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

/* admin/utilisateur/index.html.twig */
class __TwigTemplate_f3c7666ac7766d7742c52edfbb760467 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/utilisateur/index.html.twig", 2);
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

        yield "Gestion des Utilisateurs";
        
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
        /* Basic form input/select styles */
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
        .filter-form .form-input, .filter-form .form-select { height: 2.25rem; /* h-9 */ }

        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Reusable Status Badge Styles */
        .status-badge {
            padding: 0.2em 0.6em; border-radius: 9999px; /* pill */
            font-size: 0.75rem; /* text-xs adjusted */ font-weight: 500; /* font-medium */
            text-transform: uppercase; letter-spacing: 0.05em;
            white-space: nowrap; line-height: 1.2; display: inline-block;
        }
        .badge-green { background-color: #dcfce7; color: #15803d; } /* green */
        .badge-red { background-color: #fee2e2; color: #b91c1c; } /* red */
        .badge-yellow { background-color: #fef9c3; color: #a16207; } /* yellow */
        .badge-gray { background-color: #f3f4f6; color: #4b5563; } /* gray */
        .badge-blue { background-color: #dbeafe; color: #1d4ed8; } /* blue */
        .badge-indigo { background-color: #e0e7ff; color: #4338ca; } /* indigo */
        .badge-purple { background-color: #f3e8ff; color: #6b21a8; } /* purple */

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-users:before { content: \"\\f0c0\"; } .fa-plus:before { content: \"\\2b\"; }
        .fa-eye:before { content: \"\\f06e\"; } .fa-edit:before { content: \"\\f044\"; }
        .fa-trash:before { content: \"\\f1f8\"; } .fa-filter:before { content: \"\\f0b0\"; }
        .fa-sync-alt:before { content: \"\\f2f1\"; } .fa-sort:before { content: \"\\f0dc\"; }
        .fa-sort-up:before { content: \"\\f0de\"; } .fa-sort-down:before { content: \"\\f0dd\"; }
        .mr-1 { margin-right: 0.25rem; } .mr-1\\.5 { margin-right: 0.375rem; } .mr-2 { margin-right: 0.5rem; }

        /* KNP Sortable Link Styles */
        th a.sortable { color: #4b5563; text-decoration: none; display: inline-flex; align-items: center; gap: 0.25rem; white-space: nowrap; }
        th a.sortable:hover { color: #1f2937; }
        th a.sortable .fas { color: #9ca3af; font-size: 0.8em; }
        th a.sortable.asc .fa-sort-up, th a.sortable.desc .fa-sort-down { color: #3b82f6; }
        th a.sortable .fa-sort { color: #9ca3af; }

        /* Pagination Controls Styling */
        .pagination-controls nav ul { display: inline-flex; list-style: none; padding: 0; gap: 0.25rem; }
        .pagination-controls nav ul li a, .pagination-controls nav ul li span { display: block; padding: 0.5rem 0.75rem; border: 1px solid #e5e7eb; background-color: #ffffff; color: #3b82f6; text-decoration: none; border-radius: 0.25rem; font-size: 0.875rem; }
        .pagination-controls nav ul li a:hover { background-color: #eff6ff; }
        .pagination-controls nav ul li.active span { background-color: #3b82f6; color: #ffffff; border-color: #3b82f6; cursor: default; }
        .pagination-controls nav ul li.disabled span { background-color: #f3f4f6; color: #9ca3af; border-color: #e5e7eb; cursor: not-allowed; }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            ";
        // line 85
        yield "            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-6 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 flex items-center gap-2\">
                    <i class=\"fas fa-users text-blue-600\"></i>Gestion des Utilisateurs
                </h1>
                <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_new");
        yield "\" class=\"button button-primary\">
                    <i class=\"fas fa-plus mr-1.5\"></i> Créer un Utilisateur
                </a>
            </div>

            ";
        // line 95
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/utilisateur/index.html.twig", 95);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 99, $this->source); })()), 'form_start', ["attr" => ["class" => "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 items-end filter-form"]]);
        yield "
                <div class=\"sm:col-span-2 md:col-span-2\">
                    <label for=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 101, $this->source); })()), "search", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101), "html", null, true);
        yield "\" class=\"sr-only\">Rechercher</label>
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 102, $this->source); })()), "search", [], "any", false, false, false, 102), 'widget', ["attr" => ["placeholder" => "Rechercher (Nom, Prénom, Email)..."]]);
        yield "
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 103, $this->source); })()), "search", [], "any", false, false, false, 103), 'errors');
        yield "
                </div>
                <div>
                    <label for=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 106, $this->source); })()), "role", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
        yield "\" class=\"sr-only\">Rôle</label>
                    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 107, $this->source); })()), "role", [], "any", false, false, false, 107), 'widget');
        yield "
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 108, $this->source); })()), "role", [], "any", false, false, false, 108), 'errors');
        yield "
                </div>
                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"button button-primary button-sm flex-grow\">
                        <i class=\"fas fa-filter mr-1\"></i>Filtrer
                    </button>
                    <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
        yield "\" class=\"button button-secondary button-sm flex-grow\" title=\"Réinitialiser\">
                        <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser
                    </a>
                </div>
                ";
        // line 119
        yield "                ";
        // line 120
        yield "                <input type=\"hidden\" name=\"sort\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "request", [], "any", false, false, false, 120), "query", [], "any", false, false, false, 120), "get", ["sort", "nom"], "method", false, false, false, 120), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"direction\" value=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "query", [], "any", false, false, false, 121), "get", ["direction", "asc"], "method", false, false, false, 121), "html", null, true);
        yield "\">
                ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 122, $this->source); })()), 'form_end');
        yield "
            </div>


            ";
        // line 127
        yield "            <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            ";
        // line 133
        yield "                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 134
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()), "ID", "id");
        yield "
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 137
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()), "Nom", "nom");
        yield "
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 140
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 140, $this->source); })()), "Prénom", "prenom");
        yield "
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 143
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 143, $this->source); })()), "Email", "email");
        yield "
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Téléphone ";
        // line 147
        yield "                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 149
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 149, $this->source); })()), "Rôle", "role");
        yield "
                            </th>
                            <th class=\"px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 152
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 152, $this->source); })()), "Statut", "actif");
        yield "
                            </th>
                            <th class=\"px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ";
        // line 155
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 155, $this->source); })()), "Vérifié", "verifie");
        yield "
                            </th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 164
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 164, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 165
            yield "                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-500\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 166), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-800\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 168), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 169), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", true, true, false, 170)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", false, false, false, 170), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm\">
                                    ";
            // line 173
            yield "                                    ";
            $context["role_badge_class"] = "badge-gray";
            // line 174
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "roleInterne", [], "any", false, false, false, 174) == "admin")) {
                yield " ";
                $context["role_badge_class"] = "badge-purple";
                // line 175
                yield "                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "roleInterne", [], "any", false, false, false, 175) == "partenaire")) {
                yield " ";
                $context["role_badge_class"] = "badge-blue";
                // line 176
                yield "                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "roleInterne", [], "any", false, false, false, 176) == "client")) {
                yield " ";
                $context["role_badge_class"] = "badge-indigo";
                yield " ";
                // line 177
                yield "                                    ";
            }
            // line 178
            yield "                                    <span class=\"status-badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["role_badge_class"]) || array_key_exists("role_badge_class", $context) ? $context["role_badge_class"] : (function () { throw new RuntimeError('Variable "role_badge_class" does not exist.', 178, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "roleInterne", [], "any", false, false, false, 178), ["_" => " "])), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-center text-sm\">
                                    ";
            // line 182
            yield "                                    <span class=\"status-badge ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "isActive", [], "any", false, false, false, 182)) ? ("badge-green") : ("badge-red"));
            yield "\">
                                        ";
            // line 183
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "isActive", [], "any", false, false, false, 183)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-center text-sm\">
                                    ";
            // line 188
            yield "                                    <span class=\"status-badge ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "isVerified", [], "any", false, false, false, 188)) ? ("badge-green") : ("badge-yellow"));
            yield "\">
                                        ";
            // line 189
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "isVerified", [], "any", false, false, false, 189)) ? ("Oui") : ("Non"));
            yield "
                                    </span>
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            yield "\" class=\"button button-sm button-info text-white\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    ";
            // line 197
            yield "                                    ";
            if (($context["utilisateur"] != CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197))) {
                // line 198
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 198)]), "html", null, true);
                yield "\" class=\"button button-sm button-warning text-white\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        ";
                // line 202
                yield "                                        ";
                yield from $this->loadTemplate("admin/utilisateur/_delete_form.html.twig", "admin/utilisateur/index.html.twig", 202)->unwrap()->yield(CoreExtension::merge($context, ["utilisateur" => $context["utilisateur"]]));
                // line 203
                yield "                                    ";
            } else {
                // line 204
                yield "                                        ";
                // line 205
                yield "                                        <span class=\"inline-block\" title=\"Modification via Mon Profil\">
                                             <button class=\"button button-sm button-warning text-white\" disabled><i class=\"fas fa-edit\"></i></button>
                                         </span>
                                        <span class=\"inline-block\" title=\"Suppression impossible\">
                                              <button class=\"button button-sm button-danger text-white\" disabled><i class=\"fas fa-trash\"></i></button>
                                         </span>
                                    ";
            }
            // line 212
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
        // line 214
        if (!$context['_iterated']) {
            // line 215
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-12 px-6 text-gray-500\"> ";
            // line 217
            yield "                                    <svg class=\"mx-auto h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                    </svg>
                                    <h3 class=\"mt-2 text-sm font-medium text-gray-900\">Aucun utilisateur trouvé</h3>
                                    ";
            // line 222
            yield "                                    ";
            $context["filters_active"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 222, $this->source); })()), "vars", [], "any", false, false, false, 222), "value", [], "any", false, false, false, 222), "search", [], "any", false, false, false, 222) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 222, $this->source); })()), "vars", [], "any", false, false, false, 222), "value", [], "any", false, false, false, 222), "role", [], "any", false, false, false, 222));
            // line 223
            yield "                                    <p class=\"mt-1 text-sm text-gray-500\">
                                        ";
            // line 224
            if ((isset($context["filters_active"]) || array_key_exists("filters_active", $context) ? $context["filters_active"] : (function () { throw new RuntimeError('Variable "filters_active" does not exist.', 224, $this->source); })())) {
                // line 225
                yield "                                            Essayez de modifier vos filtres.
                                        ";
            } else {
                // line 227
                yield "                                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_new");
                yield "\" class=\"text-blue-600 hover:underline\">Créez un nouvel utilisateur</a> pour commencer.
                                        ";
            }
            // line 229
            yield "                                    </p>
                                    ";
            // line 230
            if ((isset($context["filters_active"]) || array_key_exists("filters_active", $context) ? $context["filters_active"] : (function () { throw new RuntimeError('Variable "filters_active" does not exist.', 230, $this->source); })())) {
                // line 231
                yield "                                        <div class=\"mt-6\">
                                            <a href=\"";
                // line 232
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
                yield "\" class=\"button button-sm button-secondary\">
                                                <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser les filtres
                                            </a>
                                        </div>
                                    ";
            }
            // line 237
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "                        </tbody>
                    </table>
                </div> ";
        // line 243
        yield "            </div> ";
        // line 244
        yield "
            <div class=\"w-full\">
                ";
        // line 247
        yield "                ";
        // line 248
        yield "                ";
        if ((array_key_exists("pagination", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 248, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 248) > 0))) {
            // line 249
            yield "                    <div class=\"flex flex-col md:flex-row justify-between items-center text-sm text-gray-600 mt-6 gap-4 \">
                        ";
            // line 251
            yield "                        <div>
                            ";
            // line 252
            $context["firstItem"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 252, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 252) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 252, $this->source); })()), "getItemNumberPerPage", [], "method", false, false, false, 252)) + 1);
            // line 253
            yield "                            ";
            // line 254
            yield "                            ";
            $context["lastItem"] = (((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 254, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 254, $this->source); })()), "count", [], "method", false, false, false, 254)) - 1);
            // line 255
            yield "                            Affichage de <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 255, $this->source); })()), "html", null, true);
            yield "</strong> à <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastItem"]) || array_key_exists("lastItem", $context) ? $context["lastItem"] : (function () { throw new RuntimeError('Variable "lastItem" does not exist.', 255, $this->source); })()), "html", null, true);
            yield "</strong> sur <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 255, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 255), "html", null, true);
            yield "</strong> utilisateur";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 255, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 255) > 1)) ? ("s") : (""));
            yield ".
                        </div>

                        ";
            // line 259
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 259, $this->source); })()), "pageCount", [], "any", false, false, false, 259) > 1)) {
                // line 260
                yield "                            <div class=\"pagination-controls w-full\">
                                ";
                // line 261
                yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 261, $this->source); })()));
                yield " ";
                // line 262
                yield "                            </div>
                        ";
            }
            // line 264
            yield "                    </div>
                ";
        }
        // line 266
        yield "            </div>



        </div> ";
        // line 271
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/utilisateur/index.html.twig";
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
        return array (  619 => 271,  613 => 266,  609 => 264,  605 => 262,  602 => 261,  599 => 260,  596 => 259,  583 => 255,  580 => 254,  578 => 253,  576 => 252,  573 => 251,  570 => 249,  567 => 248,  565 => 247,  561 => 244,  559 => 243,  555 => 240,  547 => 237,  539 => 232,  536 => 231,  534 => 230,  531 => 229,  525 => 227,  521 => 225,  519 => 224,  516 => 223,  513 => 222,  507 => 217,  504 => 215,  502 => 214,  488 => 212,  479 => 205,  477 => 204,  474 => 203,  471 => 202,  464 => 198,  461 => 197,  455 => 193,  448 => 189,  443 => 188,  436 => 183,  431 => 182,  422 => 178,  419 => 177,  413 => 176,  408 => 175,  403 => 174,  400 => 173,  395 => 170,  391 => 169,  387 => 168,  383 => 167,  379 => 166,  376 => 165,  357 => 164,  346 => 155,  340 => 152,  334 => 149,  330 => 147,  324 => 143,  318 => 140,  312 => 137,  306 => 134,  303 => 133,  296 => 127,  289 => 122,  285 => 121,  280 => 120,  278 => 119,  271 => 114,  262 => 108,  258 => 107,  254 => 106,  248 => 103,  244 => 102,  240 => 101,  235 => 99,  232 => 98,  229 => 96,  218 => 95,  210 => 89,  204 => 85,  199 => 81,  186 => 80,  106 => 9,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/utilisateur/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Utilisateurs{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* Basic form input/select styles */
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
        .filter-form .form-input, .filter-form .form-select { height: 2.25rem; /* h-9 */ }

        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Reusable Status Badge Styles */
        .status-badge {
            padding: 0.2em 0.6em; border-radius: 9999px; /* pill */
            font-size: 0.75rem; /* text-xs adjusted */ font-weight: 500; /* font-medium */
            text-transform: uppercase; letter-spacing: 0.05em;
            white-space: nowrap; line-height: 1.2; display: inline-block;
        }
        .badge-green { background-color: #dcfce7; color: #15803d; } /* green */
        .badge-red { background-color: #fee2e2; color: #b91c1c; } /* red */
        .badge-yellow { background-color: #fef9c3; color: #a16207; } /* yellow */
        .badge-gray { background-color: #f3f4f6; color: #4b5563; } /* gray */
        .badge-blue { background-color: #dbeafe; color: #1d4ed8; } /* blue */
        .badge-indigo { background-color: #e0e7ff; color: #4338ca; } /* indigo */
        .badge-purple { background-color: #f3e8ff; color: #6b21a8; } /* purple */

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-users:before { content: \"\\f0c0\"; } .fa-plus:before { content: \"\\2b\"; }
        .fa-eye:before { content: \"\\f06e\"; } .fa-edit:before { content: \"\\f044\"; }
        .fa-trash:before { content: \"\\f1f8\"; } .fa-filter:before { content: \"\\f0b0\"; }
        .fa-sync-alt:before { content: \"\\f2f1\"; } .fa-sort:before { content: \"\\f0dc\"; }
        .fa-sort-up:before { content: \"\\f0de\"; } .fa-sort-down:before { content: \"\\f0dd\"; }
        .mr-1 { margin-right: 0.25rem; } .mr-1\\.5 { margin-right: 0.375rem; } .mr-2 { margin-right: 0.5rem; }

        /* KNP Sortable Link Styles */
        th a.sortable { color: #4b5563; text-decoration: none; display: inline-flex; align-items: center; gap: 0.25rem; white-space: nowrap; }
        th a.sortable:hover { color: #1f2937; }
        th a.sortable .fas { color: #9ca3af; font-size: 0.8em; }
        th a.sortable.asc .fa-sort-up, th a.sortable.desc .fa-sort-down { color: #3b82f6; }
        th a.sortable .fa-sort { color: #9ca3af; }

        /* Pagination Controls Styling */
        .pagination-controls nav ul { display: inline-flex; list-style: none; padding: 0; gap: 0.25rem; }
        .pagination-controls nav ul li a, .pagination-controls nav ul li span { display: block; padding: 0.5rem 0.75rem; border: 1px solid #e5e7eb; background-color: #ffffff; color: #3b82f6; text-decoration: none; border-radius: 0.25rem; font-size: 0.875rem; }
        .pagination-controls nav ul li a:hover { background-color: #eff6ff; }
        .pagination-controls nav ul li.active span { background-color: #3b82f6; color: #ffffff; border-color: #3b82f6; cursor: default; }
        .pagination-controls nav ul li.disabled span { background-color: #f3f4f6; color: #9ca3af; border-color: #e5e7eb; cursor: not-allowed; }

    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            {# 1. Header Section #}
            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-6 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 flex items-center gap-2\">
                    <i class=\"fas fa-users text-blue-600\"></i>Gestion des Utilisateurs
                </h1>
                <a href=\"{{ path('admin_utilisateur_new') }}\" class=\"button button-primary\">
                    <i class=\"fas fa-plus mr-1.5\"></i> Créer un Utilisateur
                </a>
            </div>

            {# 2. Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 3. Filter Form Card #}
            <div class=\"bg-white rounded-lg shadow p-4 mb-6\">
                {{ form_start(filterForm, {'attr': {'class': 'grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 items-end filter-form'}}) }}
                <div class=\"sm:col-span-2 md:col-span-2\">
                    <label for=\"{{ filterForm.search.vars.id }}\" class=\"sr-only\">Rechercher</label>
                    {{ form_widget(filterForm.search, {'attr': {'placeholder': 'Rechercher (Nom, Prénom, Email)...'}}) }}
                    {{ form_errors(filterForm.search) }}
                </div>
                <div>
                    <label for=\"{{ filterForm.role.vars.id }}\" class=\"sr-only\">Rôle</label>
                    {{ form_widget(filterForm.role) }}
                    {{ form_errors(filterForm.role) }}
                </div>
                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"button button-primary button-sm flex-grow\">
                        <i class=\"fas fa-filter mr-1\"></i>Filtrer
                    </button>
                    <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"button button-secondary button-sm flex-grow\" title=\"Réinitialiser\">
                        <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser
                    </a>
                </div>
                {# Hidden fields to potentially preserve sorting during filtering #}
                {# Not strictly needed if KNP handles parameters well, but can be a safeguard #}
                <input type=\"hidden\" name=\"sort\" value=\"{{ app.request.query.get('sort', 'nom') }}\">
                <input type=\"hidden\" name=\"direction\" value=\"{{ app.request.query.get('direction', 'asc') }}\">
                {{ form_end(filterForm) }}
            </div>


            {# 4. Table Section Card #}
            <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            {# Use KNP Sortable links with correct keys #}
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'ID', 'id') }}
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Nom', 'nom') }}
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Prénom', 'prenom') }}
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Email', 'email') }}
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Téléphone {# Not sortable in this example #}
                            </th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Rôle', 'role') }}
                            </th>
                            <th class=\"px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Statut', 'actif') }}
                            </th>
                            <th class=\"px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                {{ knp_pagination_sortable(pagination, 'Vérifié', 'verifie') }}
                            </th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                        {# Loop directly over the KNP pagination object #}
                        {% for utilisateur in pagination %}
                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-500\">{{ utilisateur.id }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900\">{{ utilisateur.nom }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-800\">{{ utilisateur.prenom }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">{{ utilisateur.email }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm text-gray-600\">{{ utilisateur.telephone | default('N/A') }}</td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-sm\">
                                    {# Role Badge #}
                                    {% set role_badge_class = 'badge-gray' %}
                                    {% if utilisateur.roleInterne == 'admin' %} {% set role_badge_class = 'badge-purple' %}
                                    {% elseif utilisateur.roleInterne == 'partenaire' %} {% set role_badge_class = 'badge-blue' %}
                                    {% elseif utilisateur.roleInterne == 'client' %} {% set role_badge_class = 'badge-indigo' %} {# Client color example #}
                                    {% endif %}
                                    <span class=\"status-badge {{ role_badge_class }}\">{{ utilisateur.roleInterne | replace({'_': ' '}) | capitalize }}</span>
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-center text-sm\">
                                    {# Active Status Badge #}
                                    <span class=\"status-badge {{ utilisateur.isActive ? 'badge-green' : 'badge-red' }}\">
                                        {{ utilisateur.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-center text-sm\">
                                    {# Verified Status Badge #}
                                    <span class=\"status-badge {{ utilisateur.isVerified ? 'badge-green' : 'badge-yellow' }}\">
                                        {{ utilisateur.isVerified ? 'Oui' : 'Non' }}
                                    </span>
                                </td>
                                <td class=\"px-4 py-3 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"{{ path('admin_utilisateur_show', {'id': utilisateur.id}) }}\" class=\"button button-sm button-info text-white\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    {# Prevent self-edit button #}
                                    {% if utilisateur != app.user %}
                                        <a href=\"{{ path('admin_utilisateur_edit', {'id': utilisateur.id}) }}\" class=\"button button-sm button-warning text-white\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        {# Include delete form partial only for non-self users #}
                                        {% include 'admin/utilisateur/_delete_form.html.twig' with {'utilisateur': utilisateur} %}
                                    {% else %}
                                        {# Optionally show disabled buttons or nothing for self #}
                                        <span class=\"inline-block\" title=\"Modification via Mon Profil\">
                                             <button class=\"button button-sm button-warning text-white\" disabled><i class=\"fas fa-edit\"></i></button>
                                         </span>
                                        <span class=\"inline-block\" title=\"Suppression impossible\">
                                              <button class=\"button button-sm button-danger text-white\" disabled><i class=\"fas fa-trash\"></i></button>
                                         </span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center py-12 px-6 text-gray-500\"> {# Correct colspan = 9 #}
                                    <svg class=\"mx-auto h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                    </svg>
                                    <h3 class=\"mt-2 text-sm font-medium text-gray-900\">Aucun utilisateur trouvé</h3>
                                    {# Check if filters are active using form data #}
                                    {% set filters_active = filterForm.vars.value.search or filterForm.vars.value.role %}
                                    <p class=\"mt-1 text-sm text-gray-500\">
                                        {% if filters_active %}
                                            Essayez de modifier vos filtres.
                                        {% else %}
                                            <a href=\"{{ path('admin_utilisateur_new') }}\" class=\"text-blue-600 hover:underline\">Créez un nouvel utilisateur</a> pour commencer.
                                        {% endif %}
                                    </p>
                                    {% if filters_active %}
                                        <div class=\"mt-6\">
                                            <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"button button-sm button-secondary\">
                                                <i class=\"fas fa-sync-alt mr-1\"></i>Réinitialiser les filtres
                                            </a>
                                        </div>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div> {# End Overflow Wrapper #}
            </div> {# End Table Card #}

            <div class=\"w-full\">
                {# 5. Pagination Controls & Summary #}
                {# Check if pagination object exists and has items #}
                {% if pagination is defined and pagination.getTotalItemCount > 0 %}
                    <div class=\"flex flex-col md:flex-row justify-between items-center text-sm text-gray-600 mt-6 gap-4 \">
                        {# Summary Text #}
                        <div>
                            {% set firstItem = (pagination.getCurrentPageNumber() - 1) * pagination.getItemNumberPerPage() + 1 %}
                            {# Use pagination.count() for items on the current page #}
                            {% set lastItem = firstItem + pagination.count() - 1 %}
                            Affichage de <strong>{{ firstItem }}</strong> à <strong>{{ lastItem }}</strong> sur <strong>{{ pagination.getTotalItemCount }}</strong> utilisateur{{ pagination.getTotalItemCount > 1 ? 's' : '' }}.
                        </div>

                        {# Pagination Links - Only show if more than one page #}
                        {% if pagination.pageCount > 1 %}
                            <div class=\"pagination-controls w-full\">
                                {{ knp_pagination_render(pagination) }} {# Render KNP pagination links #}
                            </div>
                        {% endif %}
                    </div>
                {% endif %}
            </div>



        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}", "admin/utilisateur/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/utilisateur/index.html.twig");
    }
}
