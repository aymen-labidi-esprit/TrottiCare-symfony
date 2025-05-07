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

/* maintenance/show.html.twig */
class __TwigTemplate_6d5e569df5b35774bf884bea2958d7c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/show.html.twig", 2);
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

        yield "Détails Maintenance #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        
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
        /* Reusable Status Badge Styles (reuse/adapt) */
        .status-badge {
            padding: 0.25em 0.6em; border-radius: 9999px; /* pill */
            font-size: 0.75rem; /* text-sm */ font-weight: 500; /* font-medium */
            text-transform: uppercase; letter-spacing: 0.05em;
            white-space: nowrap; line-height: 1;
        }
        /* Maintenance Statuses */
        .status-en_cours { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-terminee { background-color: #dcfce7; color: #166534; } /* green */
        .status-annulee { background-color: #fee2e2; color: #991b1b; } /* red */
        /* Trottinette Statuses */
        .status-disponible { background-color: #dcfce7; color: #166534; }
        .status-en_location { background-color: #fef9c3; color: #854d0e; }
        .status-en_maintenance { background-color: #fee2e2; color: #991b1b; }

        /* Basic Button Styles (reuse/adapt) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-info-circle:before { content: \"\\f05a\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-calendar-day:before { content: \"\\f783\"; }
        .fa-calendar-check:before { content: \"\\f274\"; }
        .fa-hashtag:before { content: \"\\23\"; }
        .fa-motorcycle:before { content: \"\\f21c\"; } /* Trottinette Icon */
        .fa-file-alt:before { content: \"\\f15c\"; } /* Description Icon */
        .fa-tag:before { content: \"\\f02b\"; } /* Status Icon */
        .fa-wrench:before { content: \"\\f0ad\"; } /* Type Icon */
        .me-1 { margin-right: 0.25rem; }
        .me-2 { margin-right: 0.5rem; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
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

        // line 50
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-5xl\">

            ";
        // line 54
        yield "            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                    Détails Maintenance #";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
        yield "
                </h1>
                <div class=\"flex-shrink-0 flex gap-2\">
                    <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"button button-warning button-sm\">
                        <i class=\"fas fa-edit me-1\"></i> Modifier
                    </a>
                    <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_index");
        yield "\" class=\"button button-secondary button-sm\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            ";
        // line 69
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "maintenance/show.html.twig", 69);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 70
        yield "
            ";
        // line 72
        yield "            <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8\">

                ";
        // line 75
        yield "                <div class=\"lg:col-span-2 space-y-6\">

                    ";
        // line 78
        yield "                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-lg font-medium text-gray-900 flex items-center\">
                                <i class=\"fas fa-info-circle me-2 text-blue-600\"></i>Informations Maintenance
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            <dl class=\"grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4\">
                                ";
        // line 87
        yield "                                <div class=\"sm:col-span-1\">
                                    <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-wrench fa-fw me-2\"></i>Type</dt>
                                    <dd class=\"mt-1 text-sm font-medium text-gray-800\">";
        // line 89
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 89, $this->source); })()), "type", [], "any", false, false, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 89, $this->source); })()), "type", [], "any", false, false, false, 89), ["_" => " "])), "html", null, true)) : ("N/A"));
        yield "</dd>
                                </div>
                                ";
        // line 92
        yield "                                <div class=\"sm:col-span-1\">
                                    <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-tag fa-fw me-2\"></i>Statut</dt>
                                    <dd class=\"mt-1 text-sm\">
                                     <span class=\"status-badge status-";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 95, $this->source); })()), "statut", [], "any", false, false, false, 95)), "html", null, true);
        yield "\">
                                         ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 96, $this->source); })()), "statut", [], "any", false, false, false, 96), ["_" => " "])), "html", null, true);
        yield "
                                    </span>
                                    </dd>
                                </div>
                                ";
        // line 101
        yield "                                <div class=\"sm:col-span-1\">
                                    <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-calendar-day fa-fw me-2\"></i>Début</dt>
                                    <dd class=\"mt-1 text-sm font-medium text-gray-800\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 103, $this->source); })()), "dateDebut", [], "any", false, false, false, 103), "d/m/Y H:i"), "html", null, true);
        yield "</dd>
                                </div>
                                ";
        // line 106
        yield "                                <div class=\"sm:col-span-1\">
                                    <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-calendar-check fa-fw me-2\"></i>Fin</dt>
                                    <dd class=\"mt-1 text-sm font-medium text-gray-800\">";
        // line 108
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 108, $this->source); })()), "dateFin", [], "any", false, false, false, 108)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 108, $this->source); })()), "dateFin", [], "any", false, false, false, 108), "d/m/Y H:i"), "html", null, true)) : ("En cours"));
        yield "</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    ";
        // line 115
        yield "                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-lg font-medium text-gray-900 flex items-center\">
                                <i class=\"fas fa-motorcycle me-2 text-blue-600\"></i>Informations Trottinette
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 122, $this->source); })()), "trottinette", [], "any", false, false, false, 122)) {
            // line 123
            yield "                                <dl class=\"grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4\">
                                    <div class=\"sm:col-span-1\">
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-hashtag fa-fw me-2\"></i>ID</dt>
                                        <dd class=\"mt-1 text-sm font-medium text-gray-800\">
                                            <a href=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 127, $this->source); })()), "trottinette", [], "any", false, false, false, 127), "id", [], "any", false, false, false, 127)]), "html", null, true);
            yield "\" class=\"text-blue-600 hover:underline\">
                                                #";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 128, $this->source); })()), "trottinette", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
            yield "
                                            </a>
                                        </dd>
                                    </div>
                                    <div class=\"sm:col-span-1\">
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-tag fa-fw me-2\"></i>Modèle</dt>
                                        <dd class=\"mt-1 text-sm font-medium text-gray-800\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 134, $this->source); })()), "trottinette", [], "any", false, false, false, 134), "modele", [], "any", false, false, false, 134), "html", null, true);
            yield "</dd>
                                    </div>
                                    <div class=\"sm:col-span-1\">
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-fingerprint fa-fw me-2\"></i>N° Série</dt>
                                        <dd class=\"mt-1 text-sm font-medium text-gray-800\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 138, $this->source); })()), "trottinette", [], "any", false, false, false, 138), "numeroSerie", [], "any", false, false, false, 138), "html", null, true);
            yield "</dd>
                                    </div>
                                    <div class=\"sm:col-span-1\">
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-traffic-light fa-fw me-2\"></i>État Actuel</dt>
                                        <dd class=\"mt-1 text-sm\">
                                         <span class=\"status-badge status-";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 143, $this->source); })()), "trottinette", [], "any", false, false, false, 143), "etat", [], "any", false, false, false, 143), "value", [], "any", false, false, false, 143)), "html", null, true);
            yield "\">
                                            ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 144, $this->source); })()), "trottinette", [], "any", false, false, false, 144), "etat", [], "any", false, false, false, 144), "value", [], "any", false, false, false, 144), ["_" => " "])), "html", null, true);
            yield "
                                        </span>
                                        </dd>
                                    </div>
                                </dl>
                            ";
        } else {
            // line 150
            yield "                                <p class=\"text-sm text-center text-gray-500 italic\">Information trottinette non disponible.</p>
                            ";
        }
        // line 152
        yield "                        </div>
                    </div>

                </div>

                ";
        // line 158
        yield "                <div class=\"lg:col-span-1\">
                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-lg font-medium text-gray-900 flex items-center\">
                                <i class=\"fas fa-file-alt me-2 text-blue-600\"></i>Description Maintenance
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            <p class=\"text-sm text-gray-700 leading-relaxed\">
                                ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 167, $this->source); })()), "description", [], "any", false, false, false, 167), "html", null, true)), "Aucune description fournie."), "html", null, true);
        yield "
                            </p>
                        </div>
                    </div>
                </div>

            </div> ";
        // line 174
        yield "
        </div> ";
        // line 176
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
        return "maintenance/show.html.twig";
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
        return array (  370 => 176,  367 => 174,  358 => 167,  347 => 158,  340 => 152,  336 => 150,  327 => 144,  323 => 143,  315 => 138,  308 => 134,  299 => 128,  295 => 127,  289 => 123,  287 => 122,  278 => 115,  269 => 108,  265 => 106,  260 => 103,  256 => 101,  249 => 96,  245 => 95,  240 => 92,  235 => 89,  231 => 87,  221 => 78,  217 => 75,  213 => 72,  210 => 70,  199 => 69,  190 => 62,  184 => 59,  178 => 56,  174 => 54,  169 => 50,  156 => 49,  107 => 9,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/maintenance/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails Maintenance #{{ maintenance.id }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* Reusable Status Badge Styles (reuse/adapt) */
        .status-badge {
            padding: 0.25em 0.6em; border-radius: 9999px; /* pill */
            font-size: 0.75rem; /* text-sm */ font-weight: 500; /* font-medium */
            text-transform: uppercase; letter-spacing: 0.05em;
            white-space: nowrap; line-height: 1;
        }
        /* Maintenance Statuses */
        .status-en_cours { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-terminee { background-color: #dcfce7; color: #166534; } /* green */
        .status-annulee { background-color: #fee2e2; color: #991b1b; } /* red */
        /* Trottinette Statuses */
        .status-disponible { background-color: #dcfce7; color: #166534; }
        .status-en_location { background-color: #fef9c3; color: #854d0e; }
        .status-en_maintenance { background-color: #fee2e2; color: #991b1b; }

        /* Basic Button Styles (reuse/adapt) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-info-circle:before { content: \"\\f05a\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-calendar-day:before { content: \"\\f783\"; }
        .fa-calendar-check:before { content: \"\\f274\"; }
        .fa-hashtag:before { content: \"\\23\"; }
        .fa-motorcycle:before { content: \"\\f21c\"; } /* Trottinette Icon */
        .fa-file-alt:before { content: \"\\f15c\"; } /* Description Icon */
        .fa-tag:before { content: \"\\f02b\"; } /* Status Icon */
        .fa-wrench:before { content: \"\\f0ad\"; } /* Type Icon */
        .me-1 { margin-right: 0.25rem; }
        .me-2 { margin-right: 0.5rem; }
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-5xl\">

            {# 1. Header & Main Actions #}
            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                    Détails Maintenance #{{ maintenance.id }}
                </h1>
                <div class=\"flex-shrink-0 flex gap-2\">
                    <a href=\"{{ path('admin_maintenance_edit', {'id': maintenance.id}) }}\" class=\"button button-warning button-sm\">
                        <i class=\"fas fa-edit me-1\"></i> Modifier
                    </a>
                    <a href=\"{{ path('admin_maintenance_index') }}\" class=\"button button-secondary button-sm\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>

            {# Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 2. Main Content Grid #}
            <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8\">

                {# Left Column: Maintenance & Trottinette Details #}
                <div class=\"lg:col-span-2 space-y-6\">

                    {# Maintenance Details Card #}
                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-lg font-medium text-gray-900 flex items-center\">
                                <i class=\"fas fa-info-circle me-2 text-blue-600\"></i>Informations Maintenance
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            <dl class=\"grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4\">
                                {# Maintenance Type #}
                                <div class=\"sm:col-span-1\">
                                    <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-wrench fa-fw me-2\"></i>Type</dt>
                                    <dd class=\"mt-1 text-sm font-medium text-gray-800\">{{ maintenance.type ? maintenance.type|replace({'_': ' '})|capitalize : 'N/A' }}</dd>
                                </div>
                                {# Maintenance Status #}
                                <div class=\"sm:col-span-1\">
                                    <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-tag fa-fw me-2\"></i>Statut</dt>
                                    <dd class=\"mt-1 text-sm\">
                                     <span class=\"status-badge status-{{ maintenance.statut|lower }}\">
                                         {{ maintenance.statut|replace({'_': ' '})|capitalize }}
                                    </span>
                                    </dd>
                                </div>
                                {# Start Date #}
                                <div class=\"sm:col-span-1\">
                                    <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-calendar-day fa-fw me-2\"></i>Début</dt>
                                    <dd class=\"mt-1 text-sm font-medium text-gray-800\">{{ maintenance.dateDebut|date('d/m/Y H:i') }}</dd>
                                </div>
                                {# End Date #}
                                <div class=\"sm:col-span-1\">
                                    <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-calendar-check fa-fw me-2\"></i>Fin</dt>
                                    <dd class=\"mt-1 text-sm font-medium text-gray-800\">{{ maintenance.dateFin ? maintenance.dateFin|date('d/m/Y H:i') : 'En cours' }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    {# Trottinette Details Card #}
                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-lg font-medium text-gray-900 flex items-center\">
                                <i class=\"fas fa-motorcycle me-2 text-blue-600\"></i>Informations Trottinette
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            {% if maintenance.trottinette %}
                                <dl class=\"grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4\">
                                    <div class=\"sm:col-span-1\">
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-hashtag fa-fw me-2\"></i>ID</dt>
                                        <dd class=\"mt-1 text-sm font-medium text-gray-800\">
                                            <a href=\"{{ path('admin_trottinette_show', {'id': maintenance.trottinette.id}) }}\" class=\"text-blue-600 hover:underline\">
                                                #{{ maintenance.trottinette.id }}
                                            </a>
                                        </dd>
                                    </div>
                                    <div class=\"sm:col-span-1\">
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-tag fa-fw me-2\"></i>Modèle</dt>
                                        <dd class=\"mt-1 text-sm font-medium text-gray-800\">{{ maintenance.trottinette.modele }}</dd>
                                    </div>
                                    <div class=\"sm:col-span-1\">
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-fingerprint fa-fw me-2\"></i>N° Série</dt>
                                        <dd class=\"mt-1 text-sm font-medium text-gray-800\">{{ maintenance.trottinette.numeroSerie }}</dd>
                                    </div>
                                    <div class=\"sm:col-span-1\">
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider flex items-center\"><i class=\"fas fa-traffic-light fa-fw me-2\"></i>État Actuel</dt>
                                        <dd class=\"mt-1 text-sm\">
                                         <span class=\"status-badge status-{{ maintenance.trottinette.etat.value|lower }}\">
                                            {{ maintenance.trottinette.etat.value|replace({'_': ' '})|capitalize }}
                                        </span>
                                        </dd>
                                    </div>
                                </dl>
                            {% else %}
                                <p class=\"text-sm text-center text-gray-500 italic\">Information trottinette non disponible.</p>
                            {% endif %}
                        </div>
                    </div>

                </div>

                {# Right Column: Description #}
                <div class=\"lg:col-span-1\">
                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-lg font-medium text-gray-900 flex items-center\">
                                <i class=\"fas fa-file-alt me-2 text-blue-600\"></i>Description Maintenance
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            <p class=\"text-sm text-gray-700 leading-relaxed\">
                                {{ maintenance.description|nl2br|default('Aucune description fournie.') }}
                            </p>
                        </div>
                    </div>
                </div>

            </div> {# End Main Grid #}

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}", "maintenance/show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/maintenance/show.html.twig");
    }
}
