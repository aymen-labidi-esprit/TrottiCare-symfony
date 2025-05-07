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

/* public/event/show.html.twig */
class __TwigTemplate_3c65b178cd2a9153aaa9f0fcafdbffe8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/event/show.html.twig", 2);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    ";
        // line 8
        yield "    <div data-lov-id=\"src/pages/EventDetails.tsx:76:4\" class=\"min-h-screen bg-gray-50 page-content\">
        ";
        // line 10
        yield "
        <div data-lov-id=\"src/pages/EventDetails.tsx:78:6\" class=\"container mx-auto px-4 py-16\"> ";
        // line 12
        yield "
            ";
        // line 14
        yield "            <div data-lov-id=\"src/pages/EventDetails.tsx:79:8\" class=\"mb-4\">
                ";
        // line 16
        yield "                <a data-lov-id=\"src/pages/EventDetails.tsx:80:10\" class=\"flex items-center text-blue-600 hover:text-blue-800 back-link\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_index");
        yield "\"> ";
        // line 17
        yield "                    ";
        // line 18
        yield "                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-chevron-left h-4 w-4\"><path d=\"m15 18-6-6 6-6\"></path></svg>
                    <span data-lov-id=\"src/pages/EventDetails.tsx:82:12\">Retour aux événements</span>
                </a>
            </div>

            ";
        // line 24
        yield "            <div data-lov-id=\"src/pages/EventDetails.tsx:86:8\" class=\"bg-white rounded-lg shadow-md overflow-hidden\">

                ";
        // line 27
        yield "                <div data-lov-id=\"src/pages/EventDetails.tsx:87:10\" class=\"h-48 bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center p-6 event-detail-header\"> ";
        // line 28
        yield "                    <h2 data-lov-id=\"src/pages/EventDetails.tsx:88:12\" class=\"text-4xl font-bold text-white text-center\">
                        ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), "html", null, true);
        yield "
                    </h2>
                </div>

                ";
        // line 34
        yield "                <div data-lov-id=\"src/pages/EventDetails.tsx:91:10\" class=\"p-8 event-detail-body\"> ";
        // line 35
        yield "
                    ";
        // line 37
        yield "                    <div data-lov-id=\"src/pages/EventDetails.tsx:92:12\" class=\"flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8\">
                        ";
        // line 39
        yield "                        <div data-lov-id=\"src/pages/EventDetails.tsx:93:14\" class=\"d-flex gap-3 \">
                            ";
        // line 41
        yield "                            <div data-lov-id=\"src/pages/EventDetails.tsx:94:16\" class=\"flex items-center gap-3 event-meta-item\"> ";
        // line 42
        yield "                                ";
        // line 43
        yield "                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"h-5 w-5 text-gray-500\"><path d=\"M8 2v4\"></path><path d=\"M16 2v4\"></path><rect width=\"18\" height=\"18\" x=\"3\" y=\"4\" rx=\"2\"></rect><path d=\"M3 10h18\"></path></svg>
                                <span data-lov-id=\"src/pages/EventDetails.tsx:96:18\" class=\"event-meta-text\">";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "dateDebut", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "dateDebut", [], "any", false, false, false, 44), "d M Y \\à H:i"), "html", null, true)) : ("N/A"));
        yield "</span> ";
        // line 45
        yield "                            </div>
                            ";
        // line 47
        yield "                            ";
        if ((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 47, $this->source); })())) {
            // line 48
            yield "                                <div data-lov-id=\"src/pages/EventDetails.tsx:99:16\" class=\"flex items-center gap-3 event-meta-item\">
                                    ";
            // line 50
            yield "                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"h-5 w-5 text-gray-500\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><polyline points=\"12 6 12 12 16 14\"></polyline></svg>
                                    <span data-lov-id=\"src/pages/EventDetails.tsx:101:18\" class=\"event-meta-text\">Durée: ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "</span>
                                </div>
                            ";
        }
        // line 54
        yield "                            ";
        // line 55
        yield "                            <div data-lov-id=\"src/pages/EventDetails.tsx:109:16\" class=\"flex items-center gap-2 event-meta-item\">
                                ";
        // line 57
        yield "                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"h-5 w-5 text-gray-500\"><path d=\"M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0\"></path><circle cx=\"12\" cy=\"10\" r=\"3\"></circle></svg>
                                ";
        // line 59
        yield "                                <span data-lov-id=\"src/pages/EventDetails.tsx:111:18\" class=\"event-meta-text\">";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "state", [], "any", false, false, false, 59)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "state", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59), "html", null, true)) : ("Non défini"));
        yield "</span>
                            </div>
                            ";
        // line 62
        yield "                            <div data-lov-id=\"src/pages/EventDetails.tsx:114:16\" class=\"flex items-center gap-2 event-meta-item\">
                                ";
        // line 64
        yield "                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"h-5 w-5 text-gray-500\"><path d=\"M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M22 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
                                <span data-lov-id=\"src/pages/EventDetails.tsx:116:18\" class=\"event-meta-text\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "participations", [], "any", false, false, false, 65)), "html", null, true);
        yield " participant(s)</span>
                            </div>
                        </div>
                    <br/>
                        ";
        // line 70
        yield "                        <div data-lov-id=\"src/pages/EventDetails.tsx:120:14\">
                        <span data-lov-id=\"src/pages/EventDetails.tsx:121:16\" class=\"status-badge status-";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 71, $this->source); })()), "statut", [], "any", false, false, false, 71)), "html", null, true);
        yield " mt-3 mb-3\"> ";
        // line 72
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 72, $this->source); })()), "statut", [], "any", false, false, false, 72) == "A_VENIR")) {
            yield "À venir
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 73
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 73, $this->source); })()), "statut", [], "any", false, false, false, 73) == "EN_COURS")) {
            yield "En cours
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 74, $this->source); })()), "statut", [], "any", false, false, false, 74) == "TERMINE")) {
            yield "Terminé
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 75
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 75, $this->source); })()), "statut", [], "any", false, false, false, 75) == "ANNULE")) {
            yield "Annulé
                            ";
        } else {
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "statut", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "statut", [], "any", false, false, false, 76), "")) : ("")), "html", null, true);
        }
        // line 77
        yield "                        </span>
                        </div>
                        <br/>

                    </div>

                    ";
        // line 84
        yield "                    <div data-lov-id=\"src/pages/EventDetails.tsx:132:12\" class=\"space-y-6\"> ";
        // line 85
        yield "                        ";
        // line 86
        yield "                        <div data-lov-id=\"src/pages/EventDetails.tsx:133:14\">
                            <h3 data-lov-id=\"src/pages/EventDetails.tsx:134:16\" class=\"text-xl font-semibold mb-3 mt-3\">Description</h3>
                            <p data-lov-id=\"src/pages/EventDetails.tsx:135:16\" class=\"text-gray-700 event-description-full\"> ";
        // line 89
        yield "                                ";
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 89, $this->source); })()), "description", [], "any", false, false, false, 89), "html", null, true));
        yield " ";
        // line 90
        yield "                            </p>
                        </div>

                        ";
        // line 94
        yield "                        <div data-lov-id=\"src/pages/EventDetails.tsx:138:14\">
                            <h3 data-lov-id=\"src/pages/EventDetails.tsx:139:16\" class=\"text-xl font-semibold mb-3\">Informations Supplémentaires</h3>
                            <ul data-lov-id=\"src/pages/EventDetails.tsx:140:16\" class=\"list-disc list-inside space-y-2 text-gray-700\">
                                ";
        // line 98
        yield "                                <li data-lov-id=\"src/pages/EventDetails.tsx:141:18\">
                                    Autonomie minimale requise:
                                    ";
        // line 100
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 100, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 100)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 100, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 100) > 0))) {
            // line 101
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 101, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 101), "html", null, true);
            yield " km
                                    ";
        } else {
            // line 103
            yield "                                        Aucune spécifiée
                                    ";
        }
        // line 105
        yield "                                </li>
                                ";
        // line 107
        yield "                                <li data-lov-id=\"src/pages/EventDetails.tsx:142:18\">Tarifs: 10 TND par personne (Exemple)</li>
                                <li data-lov-id=\"src/pages/EventDetails.tsx:143:18\">Équipement de sécurité fourni</li>
                                <li data-lov-id=\"src/pages/EventDetails.tsx:144:18\">Groupe limité à 20 participants maximum (Exemple)</li>
                            </ul>
                        </div>

                        ";
        // line 114
        yield "                        <div data-lov-id=\"src/pages/EventDetails.tsx:149:16\" class=\"pt-4\">
                            ";
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 116
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 116, $this->source); })()), "statut", [], "any", false, false, false, 116) == "A_VENIR")) {
                // line 117
                yield "
                                    ";
                // line 119
                yield "                                    ";
                if (((isset($context["user_participation_status"]) || array_key_exists("user_participation_status", $context) ? $context["user_participation_status"] : (function () { throw new RuntimeError('Variable "user_participation_status" does not exist.', 119, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) {
                    // line 120
                    yield "                                        ";
                    // line 121
                    yield "                                        <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md\" role=\"alert\">
                                            <p class=\"font-bold flex items-center\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\" />
                                                </svg>
                                                Vous participez déjà !
                                            </p>
                                            <p class=\"text-sm mt-1\">Vous êtes bien inscrit(e) à cet événement.</p>
                                        </div>
                                        <div class=\"mt-4\">
                                            ";
                    // line 132
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_download_ticket", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)]), "html", null, true);
                    yield "\"
                                               target=\"_blank\" ";
                    // line 134
                    yield "                                               class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                                                ";
                    // line 136
                    yield "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4\" />
                                                </svg>
                                                Télécharger votre billet (PDF)
                                            </a>
                                        </div>


                                    ";
                } elseif ((                // line 144
(isset($context["user_participation_status"]) || array_key_exists("user_participation_status", $context) ? $context["user_participation_status"] : (function () { throw new RuntimeError('Variable "user_participation_status" does not exist.', 144, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE"))) {
                    // line 145
                    yield "                                        ";
                    // line 146
                    yield "                                        <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146)]), "html", null, true);
                    yield "\" method=\"post\" class=\"d-inline-block me-2\">
                                            <button type=\"submit\" class=\"button button-primary\">Réinscrire</button>
                                            <span class=\"badge bg-secondary ms-2\">Participation annulée</span>
                                        </form>
                                    ";
                } else {
                    // line 151
                    yield "                                        ";
                    // line 152
                    yield "                                        <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152)]), "html", null, true);
                    yield "\" method=\"post\" class=\"d-inline-block me-2\">
                                            <button type=\"submit\" class=\"button button-primary button-large\"> ";
                    // line 154
                    yield "                                                Participer à cet événement
                                            </button>
                                        </form>
                                    ";
                }
                // line 158
                yield "                                ";
            } else {
                // line 159
                yield "                                    ";
                // line 160
                yield "                                    <button class=\"button button-primary button-large\" disabled>
                                        ";
                // line 161
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 161, $this->source); })()), "statut", [], "any", false, false, false, 161) == "EN_COURS")) {
                    yield "Événement en cours
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 162
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 162, $this->source); })()), "statut", [], "any", false, false, false, 162) == "TERMINE")) {
                    yield "Événement terminé
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 163
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 163, $this->source); })()), "statut", [], "any", false, false, false, 163) == "ANNULE")) {
                    yield "Événement annulé
                                        ";
                } else {
                    // line 164
                    yield "Participation non disponible";
                }
                // line 165
                yield "                                    </button>
                                ";
            }
            // line 167
            yield "                            ";
        } else {
            // line 168
            yield "                                ";
            // line 169
            yield "                                <button data-lov-id=\"src/pages/EventDetails.tsx:150:18\" class=\"button button-primary button-large\" disabled>
                                    Participer à cet événement
                                </button>
                                <p data-lov-id=\"src/pages/EventDetails.tsx:157:28\" class=\"text-sm text-gray-500 mt-2\">
                                    <a href=\"";
            // line 173
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-blue-600 hover:underline\">Connectez-vous</a> pour participer.
                                </p>
                            ";
        }
        // line 176
        yield "                        </div>
                    </div>

                    ";
        // line 180
        yield "                    <div data-lov-id=\"src/pages/EventDetails.tsx:162:12\" class=\"mt-12\">
                        <h3 data-lov-id=\"src/pages/EventDetails.tsx:163:14\" class=\"text-xl font-semibold mb-4\">
                            Liste des participants (";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 182, $this->source); })()), "participations", [], "any", false, false, false, 182), "count", [], "any", false, false, false, 182), "html", null, true);
        yield ")
                        </h3>
                        ";
        // line 184
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 184, $this->source); })()), "participations", [], "any", false, false, false, 184))) {
            // line 185
            yield "                            <ul class=\"list-group\"> ";
            // line 186
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 186, $this->source); })()), "participations", [], "any", false, false, false, 186));
            foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                // line 187
                yield "                                    ";
                // line 188
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 188) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) {
                    // line 189
                    yield "                                        <li class=\"list-group-item\">
                                            ";
                    // line 190
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 190)) {
                        // line 191
                        yield "                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 191), "prenom", [], "any", false, false, false, 191), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 191), "nom", [], "any", false, false, false, 191), 0, 1), "html", null, true);
                        yield ". ";
                        // line 192
                        yield "                                            ";
                    } else {
                        // line 193
                        yield "                                                Participant anonyme
                                            ";
                    }
                    // line 195
                    yield "                                        </li>
                                    ";
                }
                // line 197
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['participation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            yield "                            </ul>
                        ";
        } else {
            // line 200
            yield "                            <p data-lov-id=\"src/pages/EventDetails.tsx:184:16\" class=\"text-gray-500\">Aucun participant inscrit pour le moment.</p>
                        ";
        }
        // line 202
        yield "                    </div>

                </div> ";
        // line 205
        yield "            </div> ";
        // line 206
        yield "        </div> ";
        // line 207
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
        return "public/event/show.html.twig";
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
        return array (  483 => 207,  481 => 206,  479 => 205,  475 => 202,  471 => 200,  467 => 198,  461 => 197,  457 => 195,  453 => 193,  450 => 192,  444 => 191,  442 => 190,  439 => 189,  436 => 188,  434 => 187,  429 => 186,  427 => 185,  425 => 184,  420 => 182,  416 => 180,  411 => 176,  405 => 173,  399 => 169,  397 => 168,  394 => 167,  390 => 165,  387 => 164,  382 => 163,  378 => 162,  374 => 161,  371 => 160,  369 => 159,  366 => 158,  360 => 154,  355 => 152,  353 => 151,  344 => 146,  342 => 145,  340 => 144,  330 => 136,  327 => 134,  322 => 132,  310 => 121,  308 => 120,  305 => 119,  302 => 117,  299 => 116,  297 => 115,  294 => 114,  286 => 107,  283 => 105,  279 => 103,  273 => 101,  271 => 100,  267 => 98,  262 => 94,  257 => 90,  253 => 89,  249 => 86,  247 => 85,  245 => 84,  237 => 77,  234 => 76,  229 => 75,  225 => 74,  221 => 73,  216 => 72,  213 => 71,  210 => 70,  203 => 65,  200 => 64,  197 => 62,  191 => 59,  188 => 57,  185 => 55,  183 => 54,  177 => 51,  174 => 50,  171 => 48,  168 => 47,  165 => 45,  162 => 44,  159 => 43,  157 => 42,  155 => 41,  152 => 39,  149 => 37,  146 => 35,  144 => 34,  137 => 29,  134 => 28,  132 => 27,  128 => 24,  121 => 18,  119 => 17,  115 => 16,  112 => 14,  109 => 12,  106 => 10,  103 => 8,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/public/event/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ event.titre }} - Détails Événement{% endblock %}

{% block body %}
    {# Use same overall wrapper class if needed, or just rely on base layout #}
    <div data-lov-id=\"src/pages/EventDetails.tsx:76:4\" class=\"min-h-screen bg-gray-50 page-content\">
        {# Header is included in base.html.twig #}

        <div data-lov-id=\"src/pages/EventDetails.tsx:78:6\" class=\"container mx-auto px-4 py-16\"> {# Use container class from CSS #}

            {# Back Link #}
            <div data-lov-id=\"src/pages/EventDetails.tsx:79:8\" class=\"mb-4\">
                {# Ensure public_event_index route exists #}
                <a data-lov-id=\"src/pages/EventDetails.tsx:80:10\" class=\"flex items-center text-blue-600 hover:text-blue-800 back-link\" href=\"{{ path('public_event_index') }}\"> {# Added custom class #}
                    {# Chevron Left Icon SVG #}
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-chevron-left h-4 w-4\"><path d=\"m15 18-6-6 6-6\"></path></svg>
                    <span data-lov-id=\"src/pages/EventDetails.tsx:82:12\">Retour aux événements</span>
                </a>
            </div>

            {# Main Event Card #}
            <div data-lov-id=\"src/pages/EventDetails.tsx:86:8\" class=\"bg-white rounded-lg shadow-md overflow-hidden\">

                {# Card Header #}
                <div data-lov-id=\"src/pages/EventDetails.tsx:87:10\" class=\"h-48 bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center p-6 event-detail-header\"> {# Added custom class #}
                    <h2 data-lov-id=\"src/pages/EventDetails.tsx:88:12\" class=\"text-4xl font-bold text-white text-center\">
                        {{ event.titre }}
                    </h2>
                </div>

                {# Card Body #}
                <div data-lov-id=\"src/pages/EventDetails.tsx:91:10\" class=\"p-8 event-detail-body\"> {# Added custom class #}

                    {# Metadata Row #}
                    <div data-lov-id=\"src/pages/EventDetails.tsx:92:12\" class=\"flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8\">
                        {# Left Side Metadata #}
                        <div data-lov-id=\"src/pages/EventDetails.tsx:93:14\" class=\"d-flex gap-3 \">
                            {# Date #}
                            <div data-lov-id=\"src/pages/EventDetails.tsx:94:16\" class=\"flex items-center gap-3 event-meta-item\"> {# Use consistent classes #}
                                {# Calendar Icon SVG #}
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"h-5 w-5 text-gray-500\"><path d=\"M8 2v4\"></path><path d=\"M16 2v4\"></path><rect width=\"18\" height=\"18\" x=\"3\" y=\"4\" rx=\"2\"></rect><path d=\"M3 10h18\"></path></svg>
                                <span data-lov-id=\"src/pages/EventDetails.tsx:96:18\" class=\"event-meta-text\">{{ event.dateDebut ? event.dateDebut|date('d M Y \\\\à H:i') : 'N/A' }}</span> {# Use meta text class #}
                            </div>
                            {# Duration #}
                            {% if duration %}
                                <div data-lov-id=\"src/pages/EventDetails.tsx:99:16\" class=\"flex items-center gap-3 event-meta-item\">
                                    {# Clock Icon SVG #}
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"h-5 w-5 text-gray-500\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><polyline points=\"12 6 12 12 16 14\"></polyline></svg>
                                    <span data-lov-id=\"src/pages/EventDetails.tsx:101:18\" class=\"event-meta-text\">Durée: {{ duration }}</span>
                                </div>
                            {% endif %}
                            {# Location #}
                            <div data-lov-id=\"src/pages/EventDetails.tsx:109:16\" class=\"flex items-center gap-2 event-meta-item\">
                                {# MapPin Icon SVG #}
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"h-5 w-5 text-gray-500\"><path d=\"M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0\"></path><circle cx=\"12\" cy=\"10\" r=\"3\"></circle></svg>
                                {# Use the state (Gouvernorat) property #}
                                <span data-lov-id=\"src/pages/EventDetails.tsx:111:18\" class=\"event-meta-text\">{{ event.state ? event.state.label : 'Non défini' }}</span>
                            </div>
                            {# Participants #}
                            <div data-lov-id=\"src/pages/EventDetails.tsx:114:16\" class=\"flex items-center gap-2 event-meta-item\">
                                {# Users Icon SVG #}
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"h-5 w-5 text-gray-500\"><path d=\"M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M22 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
                                <span data-lov-id=\"src/pages/EventDetails.tsx:116:18\" class=\"event-meta-text\">{{ event.participations|length }} participant(s)</span>
                            </div>
                        </div>
                    <br/>
                        {# Right Side Status Badge #}
                        <div data-lov-id=\"src/pages/EventDetails.tsx:120:14\">
                        <span data-lov-id=\"src/pages/EventDetails.tsx:121:16\" class=\"status-badge status-{{ event.statut|lower }} mt-3 mb-3\"> {# Dynamic class #}
                            {% if event.statut == 'A_VENIR' %}À venir
                            {% elseif event.statut == 'EN_COURS' %}En cours
                            {% elseif event.statut == 'TERMINE' %}Terminé
                            {% elseif event.statut == 'ANNULE' %}Annulé
                            {% else %}{{ event.statut|default('') }}{% endif %}
                        </span>
                        </div>
                        <br/>

                    </div>

                    {# Content Sections #}
                    <div data-lov-id=\"src/pages/EventDetails.tsx:132:12\" class=\"space-y-6\"> {# Use space-y utility #}
                        {# Description #}
                        <div data-lov-id=\"src/pages/EventDetails.tsx:133:14\">
                            <h3 data-lov-id=\"src/pages/EventDetails.tsx:134:16\" class=\"text-xl font-semibold mb-3 mt-3\">Description</h3>
                            <p data-lov-id=\"src/pages/EventDetails.tsx:135:16\" class=\"text-gray-700 event-description-full\"> {# Added custom class #}
                                {{ event.description|nl2br }} {# Use nl2br filter for line breaks #}
                            </p>
                        </div>

                        {# Additional Info (Hardcoded based on example) #}
                        <div data-lov-id=\"src/pages/EventDetails.tsx:138:14\">
                            <h3 data-lov-id=\"src/pages/EventDetails.tsx:139:16\" class=\"text-xl font-semibold mb-3\">Informations Supplémentaires</h3>
                            <ul data-lov-id=\"src/pages/EventDetails.tsx:140:16\" class=\"list-disc list-inside space-y-2 text-gray-700\">
                                {# Display min autonomy from entity if available, else static text #}
                                <li data-lov-id=\"src/pages/EventDetails.tsx:141:18\">
                                    Autonomie minimale requise:
                                    {% if event.trottinetteMinAutonomie is not null and event.trottinetteMinAutonomie > 0 %}
                                        {{ event.trottinetteMinAutonomie }} km
                                    {% else %}
                                        Aucune spécifiée
                                    {% endif %}
                                </li>
                                {# Static info from example - these are not in the DB #}
                                <li data-lov-id=\"src/pages/EventDetails.tsx:142:18\">Tarifs: 10 TND par personne (Exemple)</li>
                                <li data-lov-id=\"src/pages/EventDetails.tsx:143:18\">Équipement de sécurité fourni</li>
                                <li data-lov-id=\"src/pages/EventDetails.tsx:144:18\">Groupe limité à 20 participants maximum (Exemple)</li>
                            </ul>
                        </div>

                        {# Participation Button Section #}
                        <div data-lov-id=\"src/pages/EventDetails.tsx:149:16\" class=\"pt-4\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                {% if event.statut == 'A_VENIR' %}

                                    {# ---> START OF CHANGE <--- #}
                                    {% if user_participation_status == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') %}
                                        {# User IS participating - Show \"Already Participating\" and Download Button #}
                                        <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md\" role=\"alert\">
                                            <p class=\"font-bold flex items-center\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\" />
                                                </svg>
                                                Vous participez déjà !
                                            </p>
                                            <p class=\"text-sm mt-1\">Vous êtes bien inscrit(e) à cet événement.</p>
                                        </div>
                                        <div class=\"mt-4\">
                                            {# Ensure the 'participation' variable is passed from the controller if needed for the route #}
                                            <a href=\"{{ path('public_event_download_ticket', {'id': event.id}) }}\"
                                               target=\"_blank\" {# Open PDF in new tab #}
                                               class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                                                {# Example Icon (Download) #}
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4\" />
                                                </svg>
                                                Télécharger votre billet (PDF)
                                            </a>
                                        </div>


                                    {% elseif user_participation_status == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') %}
                                        {# Cancelled - show Re-participate button #}
                                        <form action=\"{{ path('app_event_participate', {id: event.id}) }}\" method=\"post\" class=\"d-inline-block me-2\">
                                            <button type=\"submit\" class=\"button button-primary\">Réinscrire</button>
                                            <span class=\"badge bg-secondary ms-2\">Participation annulée</span>
                                        </form>
                                    {% else %}
                                        {# Not participated yet - show Participate button #}
                                        <form action=\"{{ path('app_event_participate', {id: event.id}) }}\" method=\"post\" class=\"d-inline-block me-2\">
                                            <button type=\"submit\" class=\"button button-primary button-large\"> {# Larger button #}
                                                Participer à cet événement
                                            </button>
                                        </form>
                                    {% endif %}
                                {% else %}
                                    {# Event not upcoming (in progress, past, cancelled) #}
                                    <button class=\"button button-primary button-large\" disabled>
                                        {% if event.statut == 'EN_COURS' %}Événement en cours
                                        {% elseif event.statut == 'TERMINE' %}Événement terminé
                                        {% elseif event.statut == 'ANNULE' %}Événement annulé
                                        {% else %}Participation non disponible{% endif %}
                                    </button>
                                {% endif %}
                            {% else %}
                                {# User not logged in #}
                                <button data-lov-id=\"src/pages/EventDetails.tsx:150:18\" class=\"button button-primary button-large\" disabled>
                                    Participer à cet événement
                                </button>
                                <p data-lov-id=\"src/pages/EventDetails.tsx:157:28\" class=\"text-sm text-gray-500 mt-2\">
                                    <a href=\"{{ path('app_login') }}\" class=\"text-blue-600 hover:underline\">Connectez-vous</a> pour participer.
                                </p>
                            {% endif %}
                        </div>
                    </div>

                    {# Participants List Section #}
                    <div data-lov-id=\"src/pages/EventDetails.tsx:162:12\" class=\"mt-12\">
                        <h3 data-lov-id=\"src/pages/EventDetails.tsx:163:14\" class=\"text-xl font-semibold mb-4\">
                            Liste des participants ({{ event.participations.count }})
                        </h3>
                        {% if event.participations is not empty %}
                            <ul class=\"list-group\"> {# Example list styling #}
                                {% for participation in event.participations %}
                                    {# Only show inscribed participants publicly? Or all? Decide here. #}
                                    {% if participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') %}
                                        <li class=\"list-group-item\">
                                            {% if participation.utilisateur %}
                                                {{ participation.utilisateur.prenom }} {{ participation.utilisateur.nom | slice(0, 1) }}. {# Show initial for privacy #}
                                            {% else %}
                                                Participant anonyme
                                            {% endif %}
                                        </li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% else %}
                            <p data-lov-id=\"src/pages/EventDetails.tsx:184:16\" class=\"text-gray-500\">Aucun participant inscrit pour le moment.</p>
                        {% endif %}
                    </div>

                </div> {# End Card Body #}
            </div> {# End Main Card #}
        </div> {# End Container #}
    </div> {# End page wrapper #}
{% endblock %}", "public/event/show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/public/event/show.html.twig");
    }
}
