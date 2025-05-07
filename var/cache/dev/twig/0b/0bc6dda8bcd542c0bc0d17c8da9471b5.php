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

/* client/event/show.html.twig */
class __TwigTemplate_418ca85f9d31eacbdda5d450c2ff2753 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/event/show.html.twig", 2);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détails Événement";
        
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
        yield "     <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
    <style>
        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-lg { padding: 0.75rem 1.5rem; font-size: 1rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Reusable Status Badge Styles */
        .status-badge { padding: 0.35em 0.8em; border-radius: 9999px; font-size: 0.75rem; font-weight: 500; line-height: 1; text-transform: uppercase; white-space: nowrap; }
        .status-a_venir { background-color: #dbeafe; color: #1e40af; } /* blue */
        .status-en_cours { background-color: #dcfce7; color: #166534; } /* green */
        .status-termine { background-color: #f3f4f6; color: #374151; } /* gray */
        .status-annule { background-color: #fee2e2; color: #991b1b; } /* red */
        .badge-green { background-color: #dcfce7; color: #166534; } /* For 'Inscrit' confirmation */

        /* Ensure Bootstrap Icons Font is loaded if using classes below */
        /* .bi { ... } */ /* Basic setup if needed */
        .me-1 { margin-right: 0.25rem; }
        .me-2 { margin-right: 0.5rem; }
        .me-3 { margin-right: 0.75rem; }
        .ms-1 { margin-left: 0.25rem; }
        .ms-2 { margin-left: 0.5rem; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-6xl\">

            ";
        // line 46
        yield "            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-3\">
                <nav aria-label=\"Breadcrumb\">
                    <ol class=\"inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse text-sm\">
                        <li class=\"inline-flex items-center\">
                            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index");
        yield "\" class=\"inline-flex items-center font-medium text-gray-700 hover:text-blue-600\">
                                ";
        // line 52
        yield "                                <svg class=\"w-3 h-3 me-2.5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\"><path d=\"m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z\"/></svg>
                                Événements
                            </a>
                        </li>
                        <li aria-current=\"page\">
                            <div class=\"flex items-center\">
                                ";
        // line 59
        yield "                                <svg class=\"rtl:rotate-180 w-3 h-3 text-gray-400 mx-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\"><path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/></svg>
                                <span class=\"ms-1 font-medium text-gray-500 md:ms-2 truncate\" title=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "titre", [], "any", false, false, false, 60), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "titre", [], "any", false, false, false, 60), 0, 40) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "titre", [], "any", false, false, false, 60)) > 40)) ? ("...") : (""))), "html", null, true);
        yield "</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index");
        yield "\" class=\"button button-sm button-outline-secondary mt-2 md:mt-0\">
                    ";
        // line 67
        yield "                    <i class=\"bi bi-arrow-left me-1\"></i>Retour à la liste
                </a>
            </div>

            ";
        // line 72
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "client/event/show.html.twig", 72);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::merge($context, ["domain" => "participation"]));
        }
        // line 73
        yield "
            ";
        // line 75
        yield "            <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8\">

                ";
        // line 78
        yield "                <div class=\"lg:col-span-2\">
                    <div class=\"bg-white rounded-lg shadow-md overflow-hidden border border-gray-200\">
                        <div class=\"p-6 md:p-8\">
                            ";
        // line 82
        yield "                            <div class=\"flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5\">
                                <h1 class=\"text-2xl md:text-3xl font-bold text-gray-900 leading-tight\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 83, $this->source); })()), "titre", [], "any", false, false, false, 83), "html", null, true);
        yield "</h1>
                                ";
        // line 85
        yield "                                <span class=\"status-badge status-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 85, $this->source); })()), "statut", [], "any", false, false, false, 85)), "html", null, true);
        yield " shrink-0\">
                                 ";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 86, $this->source); })()), "statut", [], "any", false, false, false, 86) == "A_VENIR")) {
            yield "À venir
                                 ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 87, $this->source); })()), "statut", [], "any", false, false, false, 87) == "EN_COURS")) {
            yield "En cours
                                 ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 88
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "statut", [], "any", false, false, false, 88) == "TERMINE")) {
            yield "Terminé
                                 ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 89
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 89, $this->source); })()), "statut", [], "any", false, false, false, 89) == "ANNULE")) {
            yield "Annulé
                                 ";
        } else {
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "statut", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 90, $this->source); })()), "statut", [], "any", false, false, false, 90), "")) : ("")), "html", null, true);
        }
        // line 91
        yield "                            </span>
                            </div>

                            ";
        // line 95
        yield "                            <div class=\"mb-6 border-t border-b border-gray-200 py-4\">
                                <dl class=\"grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4\">
                                    ";
        // line 98
        yield "                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-calendar-event text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Début</dt>
                                            <dd class=\"text-sm text-gray-800 font-medium\">";
        // line 102
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "dateDebut", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "dateDebut", [], "any", false, false, false, 102), "d M Y \\à H:i"), "html", null, true)) : ("Non définie"));
        yield "</dd>
                                        </div>
                                    </div>
                                    ";
        // line 106
        yield "                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-calendar-check text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Fin</dt>
                                            <dd class=\"text-sm text-gray-800 font-medium\">";
        // line 110
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 110, $this->source); })()), "dateFin", [], "any", false, false, false, 110)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 110, $this->source); })()), "dateFin", [], "any", false, false, false, 110), "d M Y \\à H:i"), "html", null, true)) : ("Non définie"));
        yield "</dd>
                                        </div>
                                    </div>
                                    ";
        // line 114
        yield "                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-geo-alt-fill text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Lieu</dt>
                                            <dd class=\"text-sm text-gray-800 font-medium\">";
        // line 118
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 118, $this->source); })()), "state", [], "any", false, false, false, 118)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 118, $this->source); })()), "state", [], "any", false, false, false, 118), "label", [], "any", false, false, false, 118), "html", null, true)) : ("Non défini"));
        yield "</dd>
                                        </div>
                                    </div>
                                    ";
        // line 122
        yield "                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-battery-charging text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Autonomie Min.</dt>
                                            <dd class=\"text-sm text-gray-800 font-medium\">
                                                ";
        // line 127
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 127, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 127)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 127, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 127) > 0))) {
            // line 128
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 128, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 128), "html", null, true);
            yield " km
                                                ";
        } else {
            // line 130
            yield "                                                    Aucune
                                                ";
        }
        // line 132
        yield "                                            </dd>
                                        </div>
                                    </div>
                                    ";
        // line 136
        yield "                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-people-fill text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Participants</dt>
                                            ";
        // line 141
        yield "                                            <dd class=\"text-sm text-gray-800 font-medium\">
                                                ";
        // line 143
        yield "                                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 143, $this->source); })()), "participations", [], "any", false, false, false, 143), "count", [], "any", false, false, false, 143), "html", null, true);
        yield " inscrit(s)
                                                ";
        // line 145
        yield "                                            </dd>
                                        </div>
                                    </div>
                                </dl>
                            </div>

                            ";
        // line 152
        yield "                            <div class=\"prose prose-sm max-w-none text-gray-700\">
                                <h3 class=\"text-lg font-semibold text-gray-800 mb-2\">Description</h3>
                                <p class=\"leading-relaxed\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 154, $this->source); })()), "description", [], "any", false, false, false, 154), "html", null, true)), "Aucune description fournie."), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                </div> ";
        // line 159
        yield "
                ";
        // line 161
        yield "                <div class=\"lg:col-span-1 space-y-6\">
                    ";
        // line 163
        yield "                    <div class=\"bg-white rounded-lg shadow-md p-6 border border-gray-200 sticky top-6\"> ";
        // line 164
        yield "                        <h3 class=\"text-lg font-semibold text-gray-800 mb-4 border-b pb-2\">Participer à l'Événement</h3>

                        ";
        // line 167
        yield "                        ";
        // line 168
        yield "                        ";
        try {
            $_v1 = $this->loadTemplate("partials/_flash_messages.html.twig", "client/event/show.html.twig", 168);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v1 = null;
        }
        if ($_v1) {
            yield from $_v1->unwrap()->yield(CoreExtension::merge($context, ["domain" => "participation"]));
        }
        // line 169
        yield "
                        ";
        // line 171
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 171, $this->source); })()), "statut", [], "any", false, false, false, 171) == "A_VENIR")) {
            // line 172
            yield "
                            ";
            // line 174
            yield "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 175
                yield "
                                ";
                // line 177
                yield "                                ";
                if (((isset($context["user_participation_status"]) || array_key_exists("user_participation_status", $context) ? $context["user_participation_status"] : (function () { throw new RuntimeError('Variable "user_participation_status" does not exist.', 177, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) {
                    // line 178
                    yield "
                                    ";
                    // line 180
                    yield "                                    <div class=\"text-center border border-green-200 bg-green-50 p-4 rounded-md space-y-3\">
                                        <p class=\"text-sm font-medium text-green-800 flex items-center justify-center\">
                                            <i class=\"bi bi-check-circle me-2 text-lg\"></i> Vous êtes inscrit !
                                        </p>
                                        ";
                    // line 185
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_download_ticket", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 185, $this->source); })()), "id", [], "any", false, false, false, 185)]), "html", null, true);
                    yield "\"
                                           target=\"_blank\" ";
                    // line 187
                    yield "                                           class=\"button button-info w-full button-sm\"> ";
                    // line 188
                    yield "                                            <i class=\"bi bi-download me-1\"></i> Télécharger le Billet (PDF)
                                        </a>
                                        ";
                    // line 191
                    yield "                                        <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191)]), "html", null, true);
                    yield "\" method=\"post\" onsubmit=\"return confirm('Annuler votre participation ?');\">
                                            ";
                    // line 193
                    yield "                                            <button type=\"submit\" class=\"button button-outline-danger w-full button-sm\">
                                                <i class=\"bi bi-x-circle me-1\"></i> Annuler ma participation
                                            </button>
                                        </form>
                                    </div>
                                ";
                } else {
                    // line 199
                    yield "                                    ";
                    // line 200
                    yield "                                    <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200)]), "html", null, true);
                    yield "\" method=\"post\">
                                        ";
                    // line 202
                    yield "                                        <button type=\"submit\" class=\"button button-primary w-full button-lg\">
                                            ";
                    // line 203
                    if (((isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 203, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 203, $this->source); })()), "statut", [], "any", false, false, false, 203) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE")))) {
                        // line 204
                        yield "                                                <i class=\"bi bi-arrow-clockwise me-1\"></i> Me Réinscrire
                                            ";
                    } else {
                        // line 206
                        yield "                                                <i class=\"bi bi-check-circle me-1\"></i> Participer Maintenant
                                            ";
                    }
                    // line 208
                    yield "                                        </button>
                                    </form>
                                    ";
                    // line 210
                    if (((isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 210, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 210, $this->source); })()), "statut", [], "any", false, false, false, 210) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE")))) {
                        // line 211
                        yield "                                        <p class=\"text-xs text-center text-gray-500 mt-2 italic\">Vous aviez précédemment annulé votre inscription.</p>
                                    ";
                    }
                    // line 213
                    yield "                                ";
                }
                // line 214
                yield "
                            ";
            } else {
                // line 216
                yield "                                ";
                // line 217
                yield "                                <button class=\"button button-primary w-full button-lg\" disabled>
                                    Participer Maintenant
                                </button>
                                <p class=\"text-center text-sm text-gray-500 mt-3\">
                                    <a href=\"";
                // line 221
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_page");
                yield "\" class=\"text-blue-600 hover:underline font-medium\">Connectez-vous</a> ou <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                yield "\" class=\"text-blue-600 hover:underline font-medium\">inscrivez-vous</a> pour participer.
                                </p>
                            ";
            }
            // line 223
            yield " ";
            // line 224
            yield "
                        ";
        } else {
            // line 226
            yield "                            ";
            // line 227
            yield "                            <button class=\"button button-secondary w-full button-lg\" disabled>
                                ";
            // line 228
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 228, $this->source); })()), "statut", [], "any", false, false, false, 228) == "EN_COURS")) {
                yield " <i class=\"bi bi-info-circle me-1\"></i> Événement en cours ";
            }
            // line 229
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 229, $this->source); })()), "statut", [], "any", false, false, false, 229) == "TERMINE")) {
                yield " <i class=\"bi bi-info-circle me-1\"></i> Événement terminé ";
            }
            // line 230
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 230, $this->source); })()), "statut", [], "any", false, false, false, 230) == "ANNULE")) {
                yield " <i class=\"bi bi-exclamation-circle me-1\"></i> Événement annulé ";
            }
            // line 231
            yield "                            </button>
                            <p class=\"text-center text-sm text-gray-500 mt-3\">
                                ";
            // line 233
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 233, $this->source); })()), "statut", [], "any", false, false, false, 233) == "EN_COURS")) {
                yield "Les inscriptions sont maintenant fermées.
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 234
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 234, $this->source); })()), "statut", [], "any", false, false, false, 234) == "TERMINE")) {
                yield "Cet événement est malheureusement terminé.
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 235
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 235, $this->source); })()), "statut", [], "any", false, false, false, 235) == "ANNULE")) {
                yield "Cet événement a été annulé par l'organisateur.
                                ";
            } else {
                // line 236
                yield "La participation n'est pas disponible. ";
            }
            // line 237
            yield "                            </p>

                            ";
            // line 240
            yield "                            ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && (isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 240, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 240, $this->source); })()), "statut", [], "any", false, false, false, 240) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 240, $this->source); })()), "statut", [], "any", false, false, false, 240) != "ANNULE"))) {
                // line 241
                yield "                                <div class=\"mt-4 text-center\">
                                    <a href=\"";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_download_ticket", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 242, $this->source); })()), "id", [], "any", false, false, false, 242)]), "html", null, true);
                yield "\"
                                       target=\"_blank\"
                                       class=\"button button-info button-sm w-full\">
                                        <i class=\"bi bi-download me-1\"></i> Télécharger le Billet (PDF)
                                    </a>
                                    <p class=\"text-xs text-gray-500 mt-1 italic\">(Votre billet reste disponible)</p>
                                </div>
                            ";
            }
            // line 250
            yield "                            ";
            // line 251
            yield "
                        ";
        }
        // line 252
        yield " ";
        // line 253
        yield "

                    </div> ";
        // line 256
        yield "
                    ";
        // line 258
        yield "
                </div> ";
        // line 260
        yield "            </div> ";
        // line 261
        yield "
        </div> ";
        // line 263
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
        return "client/event/show.html.twig";
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
        return array (  583 => 263,  580 => 261,  578 => 260,  575 => 258,  572 => 256,  568 => 253,  566 => 252,  562 => 251,  560 => 250,  549 => 242,  546 => 241,  543 => 240,  539 => 237,  536 => 236,  531 => 235,  527 => 234,  523 => 233,  519 => 231,  514 => 230,  509 => 229,  505 => 228,  502 => 227,  500 => 226,  496 => 224,  494 => 223,  486 => 221,  480 => 217,  478 => 216,  474 => 214,  471 => 213,  467 => 211,  465 => 210,  461 => 208,  457 => 206,  453 => 204,  451 => 203,  448 => 202,  443 => 200,  441 => 199,  433 => 193,  428 => 191,  424 => 188,  422 => 187,  417 => 185,  411 => 180,  408 => 178,  405 => 177,  402 => 175,  399 => 174,  396 => 172,  393 => 171,  390 => 169,  379 => 168,  377 => 167,  373 => 164,  371 => 163,  368 => 161,  365 => 159,  358 => 154,  354 => 152,  346 => 145,  341 => 143,  338 => 141,  332 => 136,  327 => 132,  323 => 130,  317 => 128,  315 => 127,  308 => 122,  302 => 118,  296 => 114,  290 => 110,  284 => 106,  278 => 102,  272 => 98,  268 => 95,  263 => 91,  260 => 90,  255 => 89,  251 => 88,  247 => 87,  243 => 86,  238 => 85,  234 => 83,  231 => 82,  226 => 78,  222 => 75,  219 => 73,  208 => 72,  202 => 67,  198 => 65,  188 => 60,  185 => 59,  177 => 52,  173 => 50,  167 => 46,  162 => 42,  149 => 41,  109 => 10,  107 => 9,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/client/event/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ event.titre }} - Détails Événement{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    {# Add Bootstrap Icons CSS if not loaded globally #}
     <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
    <style>
        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-lg { padding: 0.75rem 1.5rem; font-size: 1rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Reusable Status Badge Styles */
        .status-badge { padding: 0.35em 0.8em; border-radius: 9999px; font-size: 0.75rem; font-weight: 500; line-height: 1; text-transform: uppercase; white-space: nowrap; }
        .status-a_venir { background-color: #dbeafe; color: #1e40af; } /* blue */
        .status-en_cours { background-color: #dcfce7; color: #166534; } /* green */
        .status-termine { background-color: #f3f4f6; color: #374151; } /* gray */
        .status-annule { background-color: #fee2e2; color: #991b1b; } /* red */
        .badge-green { background-color: #dcfce7; color: #166534; } /* For 'Inscrit' confirmation */

        /* Ensure Bootstrap Icons Font is loaded if using classes below */
        /* .bi { ... } */ /* Basic setup if needed */
        .me-1 { margin-right: 0.25rem; }
        .me-2 { margin-right: 0.5rem; }
        .me-3 { margin-right: 0.75rem; }
        .ms-1 { margin-left: 0.25rem; }
        .ms-2 { margin-left: 0.5rem; }
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-6xl\">

            {# 1. Breadcrumb & Back Link #}
            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-3\">
                <nav aria-label=\"Breadcrumb\">
                    <ol class=\"inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse text-sm\">
                        <li class=\"inline-flex items-center\">
                            <a href=\"{{ path('client_event_index') }}\" class=\"inline-flex items-center font-medium text-gray-700 hover:text-blue-600\">
                                {# Home Icon SVG #}
                                <svg class=\"w-3 h-3 me-2.5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\"><path d=\"m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z\"/></svg>
                                Événements
                            </a>
                        </li>
                        <li aria-current=\"page\">
                            <div class=\"flex items-center\">
                                {# Chevron Right SVG #}
                                <svg class=\"rtl:rotate-180 w-3 h-3 text-gray-400 mx-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\"><path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/></svg>
                                <span class=\"ms-1 font-medium text-gray-500 md:ms-2 truncate\" title=\"{{ event.titre }}\">{{ event.titre|slice(0, 40) ~ (event.titre|length > 40 ? '...' : '') }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <a href=\"{{ path('client_event_index') }}\" class=\"button button-sm button-outline-secondary mt-2 md:mt-0\">
                    {# Bootstrap Icon Arrow Left #}
                    <i class=\"bi bi-arrow-left me-1\"></i>Retour à la liste
                </a>
            </div>

            {# Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing with { domain: 'participation' } %}

            {# 2. Main Content Grid #}
            <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8\">

                {# Left Column: Event Details #}
                <div class=\"lg:col-span-2\">
                    <div class=\"bg-white rounded-lg shadow-md overflow-hidden border border-gray-200\">
                        <div class=\"p-6 md:p-8\">
                            {# Event Title & Status #}
                            <div class=\"flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5\">
                                <h1 class=\"text-2xl md:text-3xl font-bold text-gray-900 leading-tight\">{{ event.titre }}</h1>
                                {# Event Status Badge #}
                                <span class=\"status-badge status-{{ event.statut|lower }} shrink-0\">
                                 {% if event.statut == 'A_VENIR' %}À venir
                                 {% elseif event.statut == 'EN_COURS' %}En cours
                                 {% elseif event.statut == 'TERMINE' %}Terminé
                                 {% elseif event.statut == 'ANNULE' %}Annulé
                                 {% else %}{{ event.statut|default('') }}{% endif %}
                            </span>
                            </div>

                            {# Event Metadata - Refined Layout #}
                            <div class=\"mb-6 border-t border-b border-gray-200 py-4\">
                                <dl class=\"grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4\">
                                    {# Start Date #}
                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-calendar-event text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Début</dt>
                                            <dd class=\"text-sm text-gray-800 font-medium\">{{ event.dateDebut ? event.dateDebut|date('d M Y \\\\à H:i') : 'Non définie' }}</dd>
                                        </div>
                                    </div>
                                    {# End Date #}
                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-calendar-check text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Fin</dt>
                                            <dd class=\"text-sm text-gray-800 font-medium\">{{ event.dateFin ? event.dateFin|date('d M Y \\\\à H:i') : 'Non définie' }}</dd>
                                        </div>
                                    </div>
                                    {# Location #}
                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-geo-alt-fill text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Lieu</dt>
                                            <dd class=\"text-sm text-gray-800 font-medium\">{{ event.state ? event.state.label : 'Non défini' }}</dd>
                                        </div>
                                    </div>
                                    {# Min Autonomy #}
                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-battery-charging text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Autonomie Min.</dt>
                                            <dd class=\"text-sm text-gray-800 font-medium\">
                                                {% if event.trottinetteMinAutonomie is not null and event.trottinetteMinAutonomie > 0 %}
                                                    {{ event.trottinetteMinAutonomie }} km
                                                {% else %}
                                                    Aucune
                                                {% endif %}
                                            </dd>
                                        </div>
                                    </div>
                                    {# Participants Count - Direct count #}
                                    <div class=\"flex items-center\">
                                        <i class=\"bi bi-people-fill text-gray-500 text-xl me-3 w-6 text-center shrink-0\"></i>
                                        <div>
                                            <dt class=\"text-xs font-semibold text-gray-500 uppercase tracking-wider\">Participants</dt>
                                            {# Link to participant list IF it's public or user has rights #}
                                            <dd class=\"text-sm text-gray-800 font-medium\">
                                                {# <a href=\"{{ path('client_event_participants', {'id': event.id}) }}\" class=\"hover:underline\"> #}
                                                {{ event.participations.count }} inscrit(s)
                                                {# </a> #}
                                            </dd>
                                        </div>
                                    </div>
                                </dl>
                            </div>

                            {# Event Description #}
                            <div class=\"prose prose-sm max-w-none text-gray-700\">
                                <h3 class=\"text-lg font-semibold text-gray-800 mb-2\">Description</h3>
                                <p class=\"leading-relaxed\">{{ event.description|nl2br|default('Aucune description fournie.') }}</p>
                            </div>
                        </div>
                    </div>
                </div> {# End Left Column #}

                {# Right Column: Participation Actions & Sidebar Info #}
                <div class=\"lg:col-span-1 space-y-6\">
                    {# Participation Action Card #}
                    <div class=\"bg-white rounded-lg shadow-md p-6 border border-gray-200 sticky top-6\"> {# Sticky sidebar #}
                        <h3 class=\"text-lg font-semibold text-gray-800 mb-4 border-b pb-2\">Participer à l'Événement</h3>

                        {# Alert Messages specific to participation #}
                        {# Reuse flash message partial or custom styled alerts #}
                        {% include 'partials/_flash_messages.html.twig' ignore missing with { domain: 'participation' } %}

                        {# Participation Logic #}
                        {% if event.statut == 'A_VENIR' %}

                            {# Event is upcoming #}
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                                {# --- User is Logged In --- #}
                                {% if user_participation_status == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') %}

                                    {# --- Already Inscribed --- #}
                                    <div class=\"text-center border border-green-200 bg-green-50 p-4 rounded-md space-y-3\">
                                        <p class=\"text-sm font-medium text-green-800 flex items-center justify-center\">
                                            <i class=\"bi bi-check-circle me-2 text-lg\"></i> Vous êtes inscrit !
                                        </p>
                                        {# Download Ticket Button - ADDED HERE #}
                                        <a href=\"{{ path('public_event_download_ticket', {'id': event.id}) }}\"
                                           target=\"_blank\" {# Open PDF in new tab #}
                                           class=\"button button-info w-full button-sm\"> {# Use info color or primary #}
                                            <i class=\"bi bi-download me-1\"></i> Télécharger le Billet (PDF)
                                        </a>
                                        {# Cancel Button #}
                                        <form action=\"{{ path('client_event_cancel_participation', {'id': event.id}) }}\" method=\"post\" onsubmit=\"return confirm('Annuler votre participation ?');\">
                                            {# <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel_' ~ event.id ~ app.user.id) }}\"> #}
                                            <button type=\"submit\" class=\"button button-outline-danger w-full button-sm\">
                                                <i class=\"bi bi-x-circle me-1\"></i> Annuler ma participation
                                            </button>
                                        </form>
                                    </div>
                                {% else %}
                                    {# --- Not Inscribed (or Cancelled) --- #}
                                    <form action=\"{{ path('client_event_participate', {'id': event.id}) }}\" method=\"post\">
                                        {# <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('participate_' ~ event.id) }}\"> #}
                                        <button type=\"submit\" class=\"button button-primary w-full button-lg\">
                                            {% if user_participation and user_participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') %}
                                                <i class=\"bi bi-arrow-clockwise me-1\"></i> Me Réinscrire
                                            {% else %}
                                                <i class=\"bi bi-check-circle me-1\"></i> Participer Maintenant
                                            {% endif %}
                                        </button>
                                    </form>
                                    {% if user_participation and user_participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') %}
                                        <p class=\"text-xs text-center text-gray-500 mt-2 italic\">Vous aviez précédemment annulé votre inscription.</p>
                                    {% endif %}
                                {% endif %}

                            {% else %}
                                {# --- User Not Logged In --- #}
                                <button class=\"button button-primary w-full button-lg\" disabled>
                                    Participer Maintenant
                                </button>
                                <p class=\"text-center text-sm text-gray-500 mt-3\">
                                    <a href=\"{{ path('app_login_page') }}\" class=\"text-blue-600 hover:underline font-medium\">Connectez-vous</a> ou <a href=\"{{ path('app_register') }}\" class=\"text-blue-600 hover:underline font-medium\">inscrivez-vous</a> pour participer.
                                </p>
                            {% endif %} {# End logged-in check #}

                        {% else %}
                            {# --- Event Not Upcoming --- #}
                            <button class=\"button button-secondary w-full button-lg\" disabled>
                                {% if event.statut == 'EN_COURS' %} <i class=\"bi bi-info-circle me-1\"></i> Événement en cours {% endif %}
                                {% if event.statut == 'TERMINE' %} <i class=\"bi bi-info-circle me-1\"></i> Événement terminé {% endif %}
                                {% if event.statut == 'ANNULE' %} <i class=\"bi bi-exclamation-circle me-1\"></i> Événement annulé {% endif %}
                            </button>
                            <p class=\"text-center text-sm text-gray-500 mt-3\">
                                {% if event.statut == 'EN_COURS' %}Les inscriptions sont maintenant fermées.
                                {% elseif event.statut == 'TERMINE' %}Cet événement est malheureusement terminé.
                                {% elseif event.statut == 'ANNULE' %}Cet événement a été annulé par l'organisateur.
                                {% else %}La participation n'est pas disponible. {% endif %}
                            </p>

                            {# --- Allow download even if event is past/in progress IF user WAS inscribed --- #}
                            {% if is_granted('IS_AUTHENTICATED_FULLY') and user_participation and user_participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') and event.statut != 'ANNULE' %}
                                <div class=\"mt-4 text-center\">
                                    <a href=\"{{ path('public_event_download_ticket', {'id': event.id}) }}\"
                                       target=\"_blank\"
                                       class=\"button button-info button-sm w-full\">
                                        <i class=\"bi bi-download me-1\"></i> Télécharger le Billet (PDF)
                                    </a>
                                    <p class=\"text-xs text-gray-500 mt-1 italic\">(Votre billet reste disponible)</p>
                                </div>
                            {% endif %}
                            {# --- End download check for past/in progress --- #}

                        {% endif %} {# End event status check #}


                    </div> {# End Participation Action Card #}

                    {# Removed Admin Actions card as this is client view #}

                </div> {# End Right Column #}
            </div> {# End Main Grid #}

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}", "client/event/show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/client/event/show.html.twig");
    }
}
