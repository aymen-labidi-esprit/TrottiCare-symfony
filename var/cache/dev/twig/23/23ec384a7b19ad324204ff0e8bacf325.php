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

/* client/dashboard/index.html.twig */
class __TwigTemplate_c962b3f7d0b040eba1d96881c51b1d49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/dashboard/index.html.twig", 2);
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

        yield "Mon Tableau de Bord - TrottiCare";
        
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
        /* Reusable Button Styles (adapt from previous examples) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-outline-primary { color: #3b82f6; border-color: #3b82f6; background-color: transparent;} .button-outline-primary:hover { background-color: #eff6ff; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button-outline-info { color: #0ea5e9; border-color: #0ea5e9; background-color: transparent;} .button-outline-info:hover { background-color: #f0f9ff; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Reusable Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; }
        .badge-green { background-color: #dcfce7; color: #166534; }
        .badge-red { background-color: #fee2e2; color: #991b1b; }
        .badge-yellow { background-color: #fef9c3; color: #854d0e; }
        .badge-gray { background-color: #f3f4f6; color: #374151; }
        .badge-blue { background-color: #dbeafe; color: #1e40af; }
        .badge-teal { background-color: #ccfbf1; color: #0f766e; } /* Example for point relais */
        .badge-light-muted { background-color: #f3f4f6; color: #6b7280; font-weight: 400;}

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-qrcode:before { content: \"\\f029\"; } .fa-map-marked-alt:before { content: \"\\f5a0\"; }
        .fa-user-circle:before { content: \"\\f2bd\"; } .fa-motorcycle:before { content: \"\\f21c\"; }
        .fa-info-circle:before { content: \"\\f05a\"; } .fa-battery-three-quarters:before { content: \"\\f241\"; }
        .fa-store:before { content: \"\\f54e\"; } .fa-calendar-times:before { content: \"\\f273\"; }
        .fa-cog:before { content: \"\\f013\"; } .fa-calendar-alt:before { content: \"\\f073\"; }
        .fa-map-marker-alt:before { content: \"\\f3c5\"; } .fa-clock:before { content: \"\\f017\"; }
        .fa-check-circle:before { content: \"\\f058\"; }
        .me-1 { margin-right: 0.25rem; } .me-2 { margin-right: 0.5rem; }
        .mb-1 { margin-bottom: 0.25rem; } .mb-2 { margin-bottom: 0.5rem; }
        .fa-lg { font-size: 1.33333em; line-height: 0.75em; vertical-align: -.0667em; }
        .fa-2x { font-size: 2em; }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
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

        // line 48
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            ";
        // line 52
        yield "            <header class=\"mb-8\">
                <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center gap-4\">
                    <div>
                        <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-1\">Salut, ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55), "html", null, true);
        yield " ! 👋</h1>
                        <p class=\"text-base lg:text-lg text-gray-600\">Vos locations et événements en cours.</p>
                    </div>
                    ";
        // line 59
        yield "                    <div class=\"flex flex-wrap gap-2 mt-3 md:mt-0 flex-shrink-0\">
                        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_qr_scan");
        yield "\" class=\"button button-secondary button-sm\">
                            <i class=\"fas fa-qrcode me-1\"></i> Scanner QR
                        </a>
                        <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_map_display");
        yield "\" class=\"button button-secondary button-sm\">
                            <i class=\"fas fa-map-marked-alt me-1\"></i> Voir Carte
                        </a>
                        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profile_view");
        yield "\" class=\"button button-secondary button-sm\">
                            <i class=\"fas fa-user-circle me-1\"></i> Mon Profil
                        </a>
                    </div>
                </div>
                ";
        // line 71
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "client/dashboard/index.html.twig", 71);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 72
        yield "            </header>

            ";
        // line 75
        yield "            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8\">

                ";
        // line 78
        yield "                <section class=\"bg-white rounded-lg shadow-md border border-gray-200 flex flex-col\">
                    ";
        // line 80
        yield "                    <div class=\"px-5 py-3 border-b border-gray-200 bg-blue-50 text-blue-800 flex items-center gap-2\">
                        <i class=\"fas fa-motorcycle fa-lg\"></i>
                        <h2 class=\"text-base font-semibold mb-0\">Mes Locations Actives</h2>
                    </div>

                    ";
        // line 86
        yield "                    <div class=\"flex-grow\"> ";
        // line 87
        yield "                        ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["user_reservations"]) || array_key_exists("user_reservations", $context) ? $context["user_reservations"] : (function () { throw new RuntimeError('Variable "user_reservations" does not exist.', 87, $this->source); })()))) {
            // line 88
            yield "                            <div class=\"p-6 text-center text-gray-500 flex flex-col items-center justify-center h-full\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400 mb-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1\"> <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" /> </svg>
                                <p class=\"text-sm\">Vous n'avez aucune location en cours.</p>
                            </div>
                        ";
        } else {
            // line 93
            yield "                            <ul class=\"divide-y divide-gray-200\"> ";
            // line 94
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["user_reservations"]) || array_key_exists("user_reservations", $context) ? $context["user_reservations"] : (function () { throw new RuntimeError('Variable "user_reservations" does not exist.', 94, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 95
                yield "                                    ";
                $context["trottinette"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trottinette", [], "any", false, false, false, 95);
                // line 96
                yield "                                    <li class=\"p-4 flex gap-4 items-center hover:bg-gray-50 transition duration-150\">
                                        ";
                // line 98
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scooter-placeholder.png"), "html", null, true);
                yield "\" class=\"rounded w-20 h-16 object-cover flex-shrink-0 bg-gray-200\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 98, $this->source); })()), "modele", [], "any", false, false, false, 98), "html", null, true);
                yield "\">

                                        ";
                // line 101
                yield "                                        <div class=\"flex-grow\">
                                            <div class=\"flex justify-between items-start mb-1\">
                                                <h3 class=\"text-sm font-semibold text-gray-800 leading-tight\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["trottinette"] ?? null), "modele", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 103, $this->source); })()), "modele", [], "any", false, false, false, 103), "Trottinette")) : ("Trottinette")), "html", null, true);
                yield "</h3>
                                                <span class=\"status-badge badge-light-muted text-xs\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 104, $this->source); })()), "numeroSerie", [], "any", false, false, false, 104), "html", null, true);
                yield "</span>
                                            </div>
                                            ";
                // line 107
                yield "                                            <div class=\"text-xs text-gray-600 space-y-0.5 mb-2\">
                                                <div class=\"flex items-center gap-1.5\">
                                                    <i class=\"fas fa-battery-three-quarters text-green-500 fa-fw\"></i>
                                                    <span>";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["trottinette"] ?? null), "batterie", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 110, $this->source); })()), "batterie", [], "any", false, false, false, 110), "N/A")) : ("N/A")), "html", null, true);
                yield "%</span>
                                                    ";
                // line 111
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 111, $this->source); })()), "pointRelais", [], "any", false, false, false, 111)) {
                    // line 112
                    yield "                                                        <span class=\"mx-1 text-gray-300\">|</span>
                                                        <i class=\"fas fa-store text-teal-500 fa-fw\"></i>
                                                        <span>";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 114, $this->source); })()), "pointRelais", [], "any", false, false, false, 114), "nom", [], "any", false, false, false, 114), 0, 15) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 114, $this->source); })()), "pointRelais", [], "any", false, false, false, 114), "nom", [], "any", false, false, false, 114)) > 15)) ? ("...") : (""))), "html", null, true);
                    yield "</span>
                                                    ";
                }
                // line 116
                yield "                                                </div>
                                                <div class=\"flex items-center gap-1.5\">
                                                    <i class=\"fas fa-calendar-times text-red-500 fa-fw\"></i>
                                                    <span>Fin estimée: ";
                // line 119
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 119)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 119), "d/m H:i"), "html", null, true)) : ("Inconnue"));
                yield "</span>
                                                </div>
                                            </div>
                                            ";
                // line 123
                yield "                                            <a href=\"#\" class=\"button button-secondary button-sm w-full disabled text-xs\" title=\"Fonctionnalité à venir\">
                                                <i class=\"fas fa-cog me-1\"></i> Gérer / Terminer (Bientôt)
                                            </a>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "                            </ul>
                        ";
        }
        // line 131
        yield "                    </div>

                    ";
        // line 134
        yield "                    <div class=\"px-5 py-3 border-t border-gray-200 bg-gray-50 text-center\">
                        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_map_display");
        yield "\" class=\"button button-outline-primary button-sm mr-2\">Trouver une trottinette</a>
                        <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"button button-outline-secondary button-sm\">Historique</a>
                    </div>
                </section>

                ";
        // line 141
        yield "                <section class=\"bg-white rounded-lg shadow-md border border-gray-200 flex flex-col\">
                    ";
        // line 143
        yield "                    <div class=\"px-5 py-3 border-b border-gray-200 bg-indigo-50 text-indigo-800 flex items-center gap-2\">
                        <i class=\"fas fa-calendar-alt fa-lg\"></i>
                        <h2 class=\"text-base font-semibold mb-0\">Mes Événements à venir</h2>
                    </div>

                    ";
        // line 149
        yield "                    <div class=\"flex-grow\">
                        ";
        // line 150
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["upcoming_events"]) || array_key_exists("upcoming_events", $context) ? $context["upcoming_events"] : (function () { throw new RuntimeError('Variable "upcoming_events" does not exist.', 150, $this->source); })()))) {
            // line 151
            yield "                            <div class=\"p-6 text-center text-gray-500 flex flex-col items-center justify-center h-full\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400 mb-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1\"> <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" /> </svg>
                                <p class=\"text-sm\">Aucun événement à venir.</p>
                            </div>
                        ";
        } else {
            // line 156
            yield "                            <ul class=\"divide-y divide-gray-200\">
                                ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcoming_events"]) || array_key_exists("upcoming_events", $context) ? $context["upcoming_events"] : (function () { throw new RuntimeError('Variable "upcoming_events" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event_data"]) {
                // line 158
                yield "                                    ";
                $context["event"] = CoreExtension::getAttribute($this->env, $this->source, $context["event_data"], "entity", [], "any", false, false, false, 158);
                // line 159
                yield "                                    <li class=\"p-4 flex gap-4 items-center hover:bg-gray-50 transition duration-150\">
                                        ";
                // line 161
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/event-placeholder.jpg"), "html", null, true);
                yield "\" class=\"rounded w-20 h-16 object-cover flex-shrink-0 bg-gray-200\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 161, $this->source); })()), "titre", [], "any", false, false, false, 161), "html", null, true);
                yield "\">

                                        ";
                // line 164
                yield "                                        <div class=\"flex-grow\">
                                            <div class=\"flex justify-between items-start mb-1\">
                                                <h3 class=\"text-sm font-semibold text-gray-800 leading-tight\">";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 166, $this->source); })()), "titre", [], "any", false, false, false, 166), "html", null, true);
                yield "</h3>
                                                <span class=\"status-badge badge-light-muted text-xs\">";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 167, $this->source); })()), "dateDebut", [], "any", false, false, false, 167), "d M"), "html", null, true);
                yield "</span>
                                            </div>
                                            ";
                // line 170
                yield "                                            <div class=\"text-xs text-gray-600 space-y-0.5 mb-2\">
                                                <div class=\"flex items-center gap-1.5\">
                                                    <i class=\"fas fa-map-marker-alt text-red-500 fa-fw\"></i>
                                                    <span>";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event_data"], "location", [], "any", true, true, false, 173)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event_data"], "location", [], "any", false, false, false, 173), "Lieu à définir")) : ("Lieu à définir")), "html", null, true);
                yield "</span>
                                                </div>
                                                <div class=\"flex items-center gap-1.5\">
                                                    <i class=\"fas fa-clock text-gray-400 fa-fw\"></i>
                                                    <span>";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 177, $this->source); })()), "dateDebut", [], "any", false, false, false, 177), "H:i"), "html", null, true);
                yield " ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["event_data"], "duration", [], "any", false, false, false, 177)) {
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event_data"], "duration", [], "any", false, false, false, 177), "html", null, true);
                    yield ") ";
                }
                yield "</span>
                                                </div>
                                            </div>

                                            ";
                // line 182
                yield "                                            ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 182, $this->source); })()), "id", [], "any", false, false, false, 182), (isset($context["participatingEventIds"]) || array_key_exists("participatingEventIds", $context) ? $context["participatingEventIds"] : (function () { throw new RuntimeError('Variable "participatingEventIds" does not exist.', 182, $this->source); })()))) {
                    // line 183
                    yield "                                                <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183)]), "html", null, true);
                    yield "\" method=\"POST\" class=\"m-0 flex justify-between items-center\">
                                                    <span class=\"status-badge badge-green text-xs\"><i class=\"fas fa-check-circle me-1\"></i>Inscrit</span>
                                                    <button type=\"submit\" class=\"button button-outline-danger button-sm text-xs\" onclick=\"return confirm('Annuler votre participation ?');\">Annuler</button>
                                                </form>
                                            ";
                } else {
                    // line 188
                    yield "                                                ";
                    // line 189
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189)]), "html", null, true);
                    yield "\" class=\"button button-outline-info button-sm w-full text-xs\">
                                                    <i class=\"fas fa-info-circle me-1\"></i> Voir Détails
                                                </a>
                                            ";
                }
                // line 193
                yield "                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event_data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            yield "                            </ul>
                        ";
        }
        // line 198
        yield "                    </div>

                    ";
        // line 201
        yield "                    <div class=\"px-5 py-3 border-t border-gray-200 bg-gray-50 text-center\">
                        <a href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index");
        yield "\" class=\"button button-outline-secondary button-sm\">Voir tous les événements</a>
                    </div>
                </section>

            </div> ";
        // line 207
        yield "
        </div> ";
        // line 209
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
        return "client/dashboard/index.html.twig";
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
        return array (  475 => 209,  472 => 207,  465 => 202,  462 => 201,  458 => 198,  454 => 196,  446 => 193,  438 => 189,  436 => 188,  427 => 183,  424 => 182,  411 => 177,  404 => 173,  399 => 170,  394 => 167,  390 => 166,  386 => 164,  378 => 161,  375 => 159,  372 => 158,  368 => 157,  365 => 156,  358 => 151,  356 => 150,  353 => 149,  346 => 143,  343 => 141,  336 => 136,  332 => 135,  329 => 134,  325 => 131,  321 => 129,  310 => 123,  304 => 119,  299 => 116,  294 => 114,  290 => 112,  288 => 111,  284 => 110,  279 => 107,  274 => 104,  270 => 103,  266 => 101,  258 => 98,  255 => 96,  252 => 95,  247 => 94,  245 => 93,  238 => 88,  235 => 87,  233 => 86,  226 => 80,  223 => 78,  219 => 75,  215 => 72,  205 => 71,  197 => 66,  191 => 63,  185 => 60,  182 => 59,  176 => 55,  171 => 52,  166 => 48,  153 => 47,  106 => 9,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/client/dashboard/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mon Tableau de Bord - TrottiCare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind is loaded via base.html.twig #}
    <style>
        /* Reusable Button Styles (adapt from previous examples) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-outline-primary { color: #3b82f6; border-color: #3b82f6; background-color: transparent;} .button-outline-primary:hover { background-color: #eff6ff; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button-outline-info { color: #0ea5e9; border-color: #0ea5e9; background-color: transparent;} .button-outline-info:hover { background-color: #f0f9ff; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Reusable Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; }
        .badge-green { background-color: #dcfce7; color: #166534; }
        .badge-red { background-color: #fee2e2; color: #991b1b; }
        .badge-yellow { background-color: #fef9c3; color: #854d0e; }
        .badge-gray { background-color: #f3f4f6; color: #374151; }
        .badge-blue { background-color: #dbeafe; color: #1e40af; }
        .badge-teal { background-color: #ccfbf1; color: #0f766e; } /* Example for point relais */
        .badge-light-muted { background-color: #f3f4f6; color: #6b7280; font-weight: 400;}

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-qrcode:before { content: \"\\f029\"; } .fa-map-marked-alt:before { content: \"\\f5a0\"; }
        .fa-user-circle:before { content: \"\\f2bd\"; } .fa-motorcycle:before { content: \"\\f21c\"; }
        .fa-info-circle:before { content: \"\\f05a\"; } .fa-battery-three-quarters:before { content: \"\\f241\"; }
        .fa-store:before { content: \"\\f54e\"; } .fa-calendar-times:before { content: \"\\f273\"; }
        .fa-cog:before { content: \"\\f013\"; } .fa-calendar-alt:before { content: \"\\f073\"; }
        .fa-map-marker-alt:before { content: \"\\f3c5\"; } .fa-clock:before { content: \"\\f017\"; }
        .fa-check-circle:before { content: \"\\f058\"; }
        .me-1 { margin-right: 0.25rem; } .me-2 { margin-right: 0.5rem; }
        .mb-1 { margin-bottom: 0.25rem; } .mb-2 { margin-bottom: 0.5rem; }
        .fa-lg { font-size: 1.33333em; line-height: 0.75em; vertical-align: -.0667em; }
        .fa-2x { font-size: 2em; }

    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-7xl\">

            {# ==== HEADER ==== #}
            <header class=\"mb-8\">
                <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center gap-4\">
                    <div>
                        <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-1\">Salut, {{ utilisateur.prenom }} ! 👋</h1>
                        <p class=\"text-base lg:text-lg text-gray-600\">Vos locations et événements en cours.</p>
                    </div>
                    {# Action Buttons - styled consistently #}
                    <div class=\"flex flex-wrap gap-2 mt-3 md:mt-0 flex-shrink-0\">
                        <a href=\"{{ path('client_qr_scan') }}\" class=\"button button-secondary button-sm\">
                            <i class=\"fas fa-qrcode me-1\"></i> Scanner QR
                        </a>
                        <a href=\"{{ path('client_map_display') }}\" class=\"button button-secondary button-sm\">
                            <i class=\"fas fa-map-marked-alt me-1\"></i> Voir Carte
                        </a>
                        <a href=\"{{ path('app_client_profile_view') }}\" class=\"button button-secondary button-sm\">
                            <i class=\"fas fa-user-circle me-1\"></i> Mon Profil
                        </a>
                    </div>
                </div>
                {% include 'partials/_flash_messages.html.twig' ignore missing %}
            </header>

            {# ==== MAIN GRID ==== #}
            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8\">

                {# ---- RENTED SCOOTERS CARD ---- #}
                <section class=\"bg-white rounded-lg shadow-md border border-gray-200 flex flex-col\">
                    {# Card Header #}
                    <div class=\"px-5 py-3 border-b border-gray-200 bg-blue-50 text-blue-800 flex items-center gap-2\">
                        <i class=\"fas fa-motorcycle fa-lg\"></i>
                        <h2 class=\"text-base font-semibold mb-0\">Mes Locations Actives</h2>
                    </div>

                    {# Card Body (List or Message) #}
                    <div class=\"flex-grow\"> {# Allows list to take space or message to center #}
                        {% if user_reservations is empty %}
                            <div class=\"p-6 text-center text-gray-500 flex flex-col items-center justify-center h-full\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400 mb-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1\"> <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" /> </svg>
                                <p class=\"text-sm\">Vous n'avez aucune location en cours.</p>
                            </div>
                        {% else %}
                            <ul class=\"divide-y divide-gray-200\"> {# Use ul/li for list semantics #}
                                {% for reservation in user_reservations %}
                                    {% set trottinette = reservation.trottinette %}
                                    <li class=\"p-4 flex gap-4 items-center hover:bg-gray-50 transition duration-150\">
                                        {# Image Placeholder #}
                                        <img src=\"{{ asset('images/scooter-placeholder.png') }}\" class=\"rounded w-20 h-16 object-cover flex-shrink-0 bg-gray-200\" alt=\"{{ trottinette.modele }}\">

                                        {# Info Section #}
                                        <div class=\"flex-grow\">
                                            <div class=\"flex justify-between items-start mb-1\">
                                                <h3 class=\"text-sm font-semibold text-gray-800 leading-tight\">{{ trottinette.modele|default('Trottinette') }}</h3>
                                                <span class=\"status-badge badge-light-muted text-xs\">{{ trottinette.numeroSerie }}</span>
                                            </div>
                                            {# Metadata #}
                                            <div class=\"text-xs text-gray-600 space-y-0.5 mb-2\">
                                                <div class=\"flex items-center gap-1.5\">
                                                    <i class=\"fas fa-battery-three-quarters text-green-500 fa-fw\"></i>
                                                    <span>{{ trottinette.batterie|default('N/A') }}%</span>
                                                    {% if trottinette.pointRelais %}
                                                        <span class=\"mx-1 text-gray-300\">|</span>
                                                        <i class=\"fas fa-store text-teal-500 fa-fw\"></i>
                                                        <span>{{ trottinette.pointRelais.nom|slice(0, 15) ~ (trottinette.pointRelais.nom|length > 15 ? '...' : '') }}</span>
                                                    {% endif %}
                                                </div>
                                                <div class=\"flex items-center gap-1.5\">
                                                    <i class=\"fas fa-calendar-times text-red-500 fa-fw\"></i>
                                                    <span>Fin estimée: {{ reservation.dateFin ? reservation.dateFin|date('d/m H:i') : 'Inconnue' }}</span>
                                                </div>
                                            </div>
                                            {# Action Button #}
                                            <a href=\"#\" class=\"button button-secondary button-sm w-full disabled text-xs\" title=\"Fonctionnalité à venir\">
                                                <i class=\"fas fa-cog me-1\"></i> Gérer / Terminer (Bientôt)
                                            </a>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>

                    {# Card Footer Links #}
                    <div class=\"px-5 py-3 border-t border-gray-200 bg-gray-50 text-center\">
                        <a href=\"{{ path('client_map_display') }}\" class=\"button button-outline-primary button-sm mr-2\">Trouver une trottinette</a>
                        <a href=\"{{ path('reservation_index') }}\" class=\"button button-outline-secondary button-sm\">Historique</a>
                    </div>
                </section>

                {# ---- UPCOMING EVENTS CARD ---- #}
                <section class=\"bg-white rounded-lg shadow-md border border-gray-200 flex flex-col\">
                    {# Card Header #}
                    <div class=\"px-5 py-3 border-b border-gray-200 bg-indigo-50 text-indigo-800 flex items-center gap-2\">
                        <i class=\"fas fa-calendar-alt fa-lg\"></i>
                        <h2 class=\"text-base font-semibold mb-0\">Mes Événements à venir</h2>
                    </div>

                    {# Card Body (List or Message) #}
                    <div class=\"flex-grow\">
                        {% if upcoming_events is empty %}
                            <div class=\"p-6 text-center text-gray-500 flex flex-col items-center justify-center h-full\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400 mb-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1\"> <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" /> </svg>
                                <p class=\"text-sm\">Aucun événement à venir.</p>
                            </div>
                        {% else %}
                            <ul class=\"divide-y divide-gray-200\">
                                {% for event_data in upcoming_events %}
                                    {% set event = event_data.entity %}
                                    <li class=\"p-4 flex gap-4 items-center hover:bg-gray-50 transition duration-150\">
                                        {# Image Placeholder #}
                                        <img src=\"{{ asset('images/event-placeholder.jpg') }}\" class=\"rounded w-20 h-16 object-cover flex-shrink-0 bg-gray-200\" alt=\"{{ event.titre }}\">

                                        {# Info Section #}
                                        <div class=\"flex-grow\">
                                            <div class=\"flex justify-between items-start mb-1\">
                                                <h3 class=\"text-sm font-semibold text-gray-800 leading-tight\">{{ event.titre }}</h3>
                                                <span class=\"status-badge badge-light-muted text-xs\">{{ event.dateDebut|date('d M') }}</span>
                                            </div>
                                            {# Metadata #}
                                            <div class=\"text-xs text-gray-600 space-y-0.5 mb-2\">
                                                <div class=\"flex items-center gap-1.5\">
                                                    <i class=\"fas fa-map-marker-alt text-red-500 fa-fw\"></i>
                                                    <span>{{ event_data.location|default('Lieu à définir') }}</span>
                                                </div>
                                                <div class=\"flex items-center gap-1.5\">
                                                    <i class=\"fas fa-clock text-gray-400 fa-fw\"></i>
                                                    <span>{{ event.dateDebut|date('H:i') }} {% if event_data.duration %} ({{ event_data.duration }}) {% endif %}</span>
                                                </div>
                                            </div>

                                            {# Participation Status/Action #}
                                            {% if event.id in participatingEventIds %}
                                                <form action=\"{{ path('app_event_cancel_participation', {'id': event.id}) }}\" method=\"POST\" class=\"m-0 flex justify-between items-center\">
                                                    <span class=\"status-badge badge-green text-xs\"><i class=\"fas fa-check-circle me-1\"></i>Inscrit</span>
                                                    <button type=\"submit\" class=\"button button-outline-danger button-sm text-xs\" onclick=\"return confirm('Annuler votre participation ?');\">Annuler</button>
                                                </form>
                                            {% else %}
                                                {# Button to view details if not participating #}
                                                <a href=\"{{ path('public_event_show', {'id': event.id }) }}\" class=\"button button-outline-info button-sm w-full text-xs\">
                                                    <i class=\"fas fa-info-circle me-1\"></i> Voir Détails
                                                </a>
                                            {% endif %}
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>

                    {# Card Footer Link #}
                    <div class=\"px-5 py-3 border-t border-gray-200 bg-gray-50 text-center\">
                        <a href=\"{{ path('client_event_index') }}\" class=\"button button-outline-secondary button-sm\">Voir tous les événements</a>
                    </div>
                </section>

            </div> {# End Main Grid #}

        </div> {# End container #}
    </div> {# End page-content wrapper #}
{% endblock %}", "client/dashboard/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/client/dashboard/index.html.twig");
    }
}
