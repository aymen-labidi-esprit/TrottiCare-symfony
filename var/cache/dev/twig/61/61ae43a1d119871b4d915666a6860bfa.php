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

/* client/event/_event_card.html.twig */
class __TwigTemplate_7065d4b01281b8be84678061d3591deb extends Template
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

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event/_event_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event/_event_card.html.twig"));

        // line 4
        yield "
";
        // line 6
        $context["event"] = (((array_key_exists("event", $context) &&  !(null === $context["event"]))) ? ($context["event"]) : (null));
        // line 7
        $context["user_status"] = (((array_key_exists("user_participation_status", $context) &&  !(null === $context["user_participation_status"]))) ? ($context["user_participation_status"]) : (null));
        yield " ";
        // line 8
        $context["location_display"] = (((array_key_exists("location", $context) &&  !(null === $context["location"]))) ? ($context["location"]) : ((((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })())) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "state", [], "any", false, false, false, 8)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "state", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8)) : ("-"))) : ("N/A"))));
        // line 9
        $context["duration_display"] = (((array_key_exists("duration", $context) &&  !(null === $context["duration"]))) ? ($context["duration"]) : (null));
        // line 10
        yield "
";
        // line 12
        if (((((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()) &&  !(isset($context["duration_display"]) || array_key_exists("duration_display", $context) ? $context["duration_display"] : (function () { throw new RuntimeError('Variable "duration_display" does not exist.', 12, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "dateDebut", [], "any", false, false, false, 12)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "dateFin", [], "any", false, false, false, 12))) {
            // line 13
            yield "    ";
            $context["diff"] = ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "dateFin", [], "any", false, false, false, 13), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "dateDebut", [], "any", false, false, false, 13), "U"));
            // line 14
            yield "    ";
            $context["days"] = Twig\Extension\CoreExtension::round((int) floor(((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 14, $this->source); })()) / 86400)), 0, "floor");
            // line 15
            yield "    ";
            $context["hours"] = Twig\Extension\CoreExtension::round((int) floor((((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 15, $this->source); })()) % 86400) / 3600)), 0, "floor");
            // line 16
            yield "    ";
            $context["duration_display_parts"] = [];
            // line 17
            yield "    ";
            if (((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 17, $this->source); })()) > 0)) {
                // line 18
                yield "        ";
                $context["duration_display_parts"] = Twig\Extension\CoreExtension::merge((isset($context["duration_display_parts"]) || array_key_exists("duration_display_parts", $context) ? $context["duration_display_parts"] : (function () { throw new RuntimeError('Variable "duration_display_parts" does not exist.', 18, $this->source); })()), [(((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 18, $this->source); })()) . " jour") . ((((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 18, $this->source); })()) > 1)) ? ("s") : ("")))]);
                // line 19
                yield "    ";
            }
            // line 20
            yield "    ";
            if (((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 20, $this->source); })()) > 0)) {
                // line 21
                yield "        ";
                $context["duration_display_parts"] = Twig\Extension\CoreExtension::merge((isset($context["duration_display_parts"]) || array_key_exists("duration_display_parts", $context) ? $context["duration_display_parts"] : (function () { throw new RuntimeError('Variable "duration_display_parts" does not exist.', 21, $this->source); })()), [((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 21, $this->source); })()) . "h")]);
                // line 22
                yield "    ";
            }
            // line 23
            yield "    ";
            $context["duration_display"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["duration_display_parts"]) || array_key_exists("duration_display_parts", $context) ? $context["duration_display_parts"] : (function () { throw new RuntimeError('Variable "duration_display_parts" does not exist.', 23, $this->source); })()))) ? (Twig\Extension\CoreExtension::join((isset($context["duration_display_parts"]) || array_key_exists("duration_display_parts", $context) ? $context["duration_display_parts"] : (function () { throw new RuntimeError('Variable "duration_display_parts" does not exist.', 23, $this->source); })()), " ")) : (null));
        }
        // line 25
        yield "

";
        // line 28
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 51
        yield "
";
        // line 52
        if ((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 52, $this->source); })())) {
            yield " ";
            // line 53
            yield "    <div class=\"event-card flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-gray-200\">

        ";
            // line 56
            yield "        <div class=\"h-32 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center relative p-4\">
            ";
            // line 58
            yield "            ";
            // line 59
            yield "            <h3 class=\"text-xl font-bold text-white text-center line-clamp-2 relative z-10\">
                ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "titre", [], "any", false, false, false, 60), "html", null, true);
            yield "
            </h3>
        </div>

        ";
            // line 65
            yield "        <div class=\"p-5 flex flex-col flex-grow\"> ";
            // line 66
            yield "
            ";
            // line 68
            yield "            <p class=\"text-sm text-gray-600 mb-4 line-clamp-3 leading-relaxed flex-grow\"> ";
            // line 69
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69)), "Aucune description fournie."), "html", null, true);
            yield "
            </p>

            ";
            // line 73
            yield "            <div class=\"space-y-2 mb-5 text-xs text-gray-600\">
                ";
            // line 75
            yield "                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/></svg>
                    <span class=\"font-medium\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 77, $this->source); })()), "dateDebut", [], "any", false, false, false, 77), "d M Y, H:i"), "html", null, true);
            yield "</span>
                </div>

                ";
            // line 81
            yield "                ";
            if ((isset($context["duration_display"]) || array_key_exists("duration_display", $context) ? $context["duration_display"] : (function () { throw new RuntimeError('Variable "duration_display" does not exist.', 81, $this->source); })())) {
                // line 82
                yield "                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/></svg>
                        <span>Durée: ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration_display"]) || array_key_exists("duration_display", $context) ? $context["duration_display"] : (function () { throw new RuntimeError('Variable "duration_display" does not exist.', 84, $this->source); })()), "html", null, true);
                yield "</span>
                    </div>
                ";
            }
            // line 87
            yield "
                ";
            // line 89
            yield "                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/></svg>
                    <span>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["location_display"]) || array_key_exists("location_display", $context) ? $context["location_display"] : (function () { throw new RuntimeError('Variable "location_display" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "</span>
                </div>

                ";
            // line 95
            yield "                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\"/></svg>
                    <span>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 97, $this->source); })()), "participations", [], "any", false, false, false, 97)), "html", null, true);
            yield " participant";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 97, $this->source); })()), "participations", [], "any", false, false, false, 97)) > 1)) ? ("s") : (""));
            yield "</span>
                </div>
            </div>

            ";
            // line 102
            yield "            <div class=\"mt-auto pt-4 border-t border-gray-100 flex items-center justify-between gap-2\">
                ";
            // line 104
            yield "                <span class=\"status-badge status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 104, $this->source); })()), "statut", [], "any", false, false, false, 104)), "html", null, true);
            yield "\">
                ";
            // line 105
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 105, $this->source); })()), "statut", [], "any", false, false, false, 105) == "A_VENIR")) {
                yield "À venir
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 106
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 106, $this->source); })()), "statut", [], "any", false, false, false, 106) == "EN_COURS")) {
                yield "En cours
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 107
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 107, $this->source); })()), "statut", [], "any", false, false, false, 107) == "TERMINE")) {
                yield "Terminé
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 108
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "statut", [], "any", false, false, false, 108) == "ANNULE")) {
                yield "Annulé
                ";
            } else {
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 109, $this->source); })()), "statut", [], "any", false, false, false, 109), "html", null, true);
            }
            // line 110
            yield "            </span>

                ";
            // line 113
            yield "                <div class=\"flex gap-2 flex-shrink-0\">
                    ";
            // line 115
            yield "                    ";
            // line 116
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\"
                       class=\"button button-secondary button-sm flex items-center gap-1 text-xs\" title=\"Voir les détails\">
                        ";
            // line 119
            yield "                        <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"></path><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z\"></path></svg>
                        Détails
                    </a>

                    ";
            // line 124
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 124, $this->source); })()), "statut", [], "any", false, false, false, 124) == "A_VENIR")) {
                // line 125
                yield "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 126
                    yield "                            ";
                    // line 127
                    yield "                            ";
                    if (((isset($context["user_status"]) || array_key_exists("user_status", $context) ? $context["user_status"] : (function () { throw new RuntimeError('Variable "user_status" does not exist.', 127, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) {
                        // line 128
                        yield "                                ";
                        // line 129
                        yield "                                ";
                        // line 130
                        yield "                                <form action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
                        yield "\" method=\"post\" class=\"inline-block\">
                                    ";
                        // line 132
                        yield "                                    ";
                        // line 133
                        yield "                                    <button type=\"submit\"
                                            class=\"button button-outline-danger button-sm flex items-center gap-1 text-xs\"
                                            onclick=\"return confirm('Annuler votre participation ?');\"
                                            title=\"Se désinscrire\">
                                        ";
                        // line 138
                        yield "                                        <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"></path></svg>
                                        <span>Annuler</span> ";
                        // line 140
                        yield "                                    </button>
                                </form>
                            ";
                    } else {
                        // line 142
                        yield " ";
                        // line 143
                        yield "                                ";
                        // line 144
                        yield "                                ";
                        // line 145
                        yield "                                <form action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145)]), "html", null, true);
                        yield "\" method=\"post\" class=\"inline-block\">
                                    ";
                        // line 147
                        yield "                                    ";
                        // line 148
                        yield "                                    <button type=\"submit\"
                                            class=\"button button-primary button-sm flex items-center gap-1 text-xs\"
                                            title=\"";
                        // line 150
                        yield ((((isset($context["user_status"]) || array_key_exists("user_status", $context) ? $context["user_status"] : (function () { throw new RuntimeError('Variable "user_status" does not exist.', 150, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE"))) ? ("Se réinscrire") : ("Participer"));
                        yield "\">
                                        ";
                        // line 151
                        if (((isset($context["user_status"]) || array_key_exists("user_status", $context) ? $context["user_status"] : (function () { throw new RuntimeError('Variable "user_status" does not exist.', 151, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE"))) {
                            // line 152
                            yield "                                            ";
                            // line 153
                            yield "                                            <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m-15.357-2a8.001 8.001 0 0115.357-2m0 0H15\"></path></svg>
                                            <span>Réinscrire</span>
                                        ";
                        } else {
                            // line 156
                            yield "                                            ";
                            // line 157
                            yield "                                            <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"></path></svg>
                                            <span>Participer</span>
                                        ";
                        }
                        // line 160
                        yield "                                    </button>
                                </form>
                            ";
                    }
                    // line 163
                    yield "                        ";
                } else {
                    // line 164
                    yield "                            ";
                    // line 165
                    yield "                            <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    yield "\" ";
                    // line 166
                    yield "                               class=\"button button-secondary button-sm flex items-center gap-1 text-xs\"
                               title=\"Connectez-vous pour participer\">
                                ";
                    // line 169
                    yield "                                <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\"></path></svg>
                                <span>Connexion</span>
                            </a>
                        ";
                }
                // line 173
                yield "                    ";
            }
            yield " ";
            // line 174
            yield "                </div> ";
            // line 175
            yield "            </div> ";
            // line 176
            yield "        </div> ";
            // line 177
            yield "    </div> ";
        }
        // line 178
        yield " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
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

        // line 29
        yield "    ";
        // line 30
        yield "    <style>
        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }

        /* Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; }
        .status-a_venir { background-color: #dbeafe; color: #1e40af; } /* blue */
        .status-en_cours { background-color: #dcfce7; color: #166534; } /* green */
        .status-termine { background-color: #f3f4f6; color: #374151; } /* gray */
        .status-annule { background-color: #fee2e2; color: #991b1b; } /* red */
        .badge-green { background-color: #dcfce7; color: #166534; } /* For 'Inscrit' */

        /* Ensure SVGs render correctly */
        svg { display: inline-block; vertical-align: middle; }
    </style>
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
        return "client/event/_event_card.html.twig";
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
        return array (  382 => 30,  380 => 29,  367 => 28,  356 => 178,  353 => 177,  351 => 176,  349 => 175,  347 => 174,  343 => 173,  337 => 169,  333 => 166,  329 => 165,  327 => 164,  324 => 163,  319 => 160,  314 => 157,  312 => 156,  307 => 153,  305 => 152,  303 => 151,  299 => 150,  295 => 148,  293 => 147,  288 => 145,  286 => 144,  284 => 143,  282 => 142,  277 => 140,  274 => 138,  268 => 133,  266 => 132,  261 => 130,  259 => 129,  257 => 128,  254 => 127,  252 => 126,  249 => 125,  246 => 124,  240 => 119,  234 => 116,  232 => 115,  229 => 113,  225 => 110,  222 => 109,  217 => 108,  213 => 107,  209 => 106,  205 => 105,  200 => 104,  197 => 102,  188 => 97,  184 => 95,  178 => 91,  174 => 89,  171 => 87,  165 => 84,  161 => 82,  158 => 81,  152 => 77,  148 => 75,  145 => 73,  138 => 69,  136 => 68,  133 => 66,  131 => 65,  124 => 60,  121 => 59,  119 => 58,  116 => 56,  112 => 53,  109 => 52,  106 => 51,  104 => 28,  100 => 25,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  64 => 12,  61 => 10,  59 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/client/event/_event_card.html.twig #}
{# Expects 'event' (Event Entity) and 'user_participation_status' (ParticipationStatus Enum or null) #}
{# Also expects 'location' and 'duration' (strings or null) if calculated in controller #}

{# --- Use default values if variables are not passed (less ideal, better to ensure they are passed) --- #}
{% set event = event ?? null %}
{% set user_status = user_participation_status ?? null %} {# Renamed for clarity #}
{% set location_display = location ?? (event ? (event.state ? event.state.label : '-') : 'N/A') %}
{% set duration_display = duration ?? null %}

{# --- Calculate duration within the card if not passed --- #}
{% if event and not duration_display and event.dateDebut and event.dateFin %}
    {% set diff = event.dateFin|date('U') - event.dateDebut|date('U') %}
    {% set days  = (diff // 86400)|round(0, 'floor') %}
    {% set hours = ((diff % 86400) // 3600)|round(0, 'floor') %}
    {% set duration_display_parts = [] %}
    {% if days > 0 %}
        {% set duration_display_parts = duration_display_parts|merge([days ~ ' jour' ~ (days > 1 ? 's' : '')]) %}
    {% endif %}
    {% if hours > 0 %}
        {% set duration_display_parts = duration_display_parts|merge([hours ~ 'h']) %}
    {% endif %}
    {% set duration_display = duration_display_parts is not empty ? duration_display_parts|join(' ') : null %}
{% endif %}


{# --- Styles needed for this card --- #}
{% block stylesheets %}
    {# Only include if not already globally available in base.html.twig #}
    <style>
        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }

        /* Status Badge Styles */
        .status-badge { padding: 0.25em 0.6em; border-radius: 9999px; font-size: 0.7rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; white-space: nowrap; line-height: 1; }
        .status-a_venir { background-color: #dbeafe; color: #1e40af; } /* blue */
        .status-en_cours { background-color: #dcfce7; color: #166534; } /* green */
        .status-termine { background-color: #f3f4f6; color: #374151; } /* gray */
        .status-annule { background-color: #fee2e2; color: #991b1b; } /* red */
        .badge-green { background-color: #dcfce7; color: #166534; } /* For 'Inscrit' */

        /* Ensure SVGs render correctly */
        svg { display: inline-block; vertical-align: middle; }
    </style>
{% endblock %}

{% if event %} {# Only render the card if event data is present #}
    <div class=\"event-card flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-gray-200\">

        {# Card Header with Gradient and Title #}
        <div class=\"h-32 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center relative p-4\">
            {# Optional overlay for better text contrast #}
            {# <div class=\"absolute inset-0 bg-black/20\"></div> #}
            <h3 class=\"text-xl font-bold text-white text-center line-clamp-2 relative z-10\">
                {{ event.titre }}
            </h3>
        </div>

        {# Card Body #}
        <div class=\"p-5 flex flex-col flex-grow\"> {# Use flex-grow to push footer down #}

            {# Description (Truncated) #}
            <p class=\"text-sm text-gray-600 mb-4 line-clamp-3 leading-relaxed flex-grow\"> {# Use flex-grow to take available space #}
                {{ event.description|striptags|default('Aucune description fournie.') }}
            </p>

            {# Metadata Section #}
            <div class=\"space-y-2 mb-5 text-xs text-gray-600\">
                {# Date Début #}
                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/></svg>
                    <span class=\"font-medium\">{{ event.dateDebut|date('d M Y, H:i') }}</span>
                </div>

                {# Duration (if available) #}
                {% if duration_display %}
                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/></svg>
                        <span>Durée: {{ duration_display }}</span>
                    </div>
                {% endif %}

                {# Location #}
                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/></svg>
                    <span>{{ location_display }}</span>
                </div>

                {# Participants Count #}
                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\"/></svg>
                    <span>{{ event.participations|length }} participant{{ event.participations|length > 1 ? 's' : '' }}</span>
                </div>
            </div>

            {# Footer Section - Aligned to bottom #}
            <div class=\"mt-auto pt-4 border-t border-gray-100 flex items-center justify-between gap-2\">
                {# Status Badge #}
                <span class=\"status-badge status-{{ event.statut|lower }}\">
                {% if event.statut == 'A_VENIR' %}À venir
                {% elseif event.statut == 'EN_COURS' %}En cours
                {% elseif event.statut == 'TERMINE' %}Terminé
                {% elseif event.statut == 'ANNULE' %}Annulé
                {% else %}{{ event.statut }}{% endif %}
            </span>

                {# Action Buttons #}
                <div class=\"flex gap-2 flex-shrink-0\">
                    {# Details Button is always shown #}
                    {# Use appropriate route for client view #}
                    <a href=\"{{ path('client_event_show', {'id': event.id}) }}\"
                       class=\"button button-secondary button-sm flex items-center gap-1 text-xs\" title=\"Voir les détails\">
                        {# Eye Icon SVG #}
                        <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"></path><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z\"></path></svg>
                        Détails
                    </a>

                    {# Conditional Participation Buttons #}
                    {% if event.statut == 'A_VENIR' %}
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            {# Check against the ParticipationStatus Enum #}
                            {% if user_status == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') %}
                                {# --- Cancel Button --- #}
                                {# Use client route #}
                                <form action=\"{{ path('client_event_cancel_participation', {'id': event.id}) }}\" method=\"post\" class=\"inline-block\">
                                    {# Consider adding CSRF token here for security #}
                                    {# <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel_' ~ app.user.id ~ '_' ~ event.id) }}\"> #}
                                    <button type=\"submit\"
                                            class=\"button button-outline-danger button-sm flex items-center gap-1 text-xs\"
                                            onclick=\"return confirm('Annuler votre participation ?');\"
                                            title=\"Se désinscrire\">
                                        {# X Circle Icon SVG #}
                                        <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"></path></svg>
                                        <span>Annuler</span> {# Use span for potentially hiding text on small screens #}
                                    </button>
                                </form>
                            {% else %} {# Covers both NULL (not participated) and ANNULE status #}
                                {# --- Participate/Re-register Button --- #}
                                {# Use client route #}
                                <form action=\"{{ path('client_event_participate', {'id': event.id}) }}\" method=\"post\" class=\"inline-block\">
                                    {# Consider adding CSRF token #}
                                    {# <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('participate_' ~ event.id) }}\"> #}
                                    <button type=\"submit\"
                                            class=\"button button-primary button-sm flex items-center gap-1 text-xs\"
                                            title=\"{{ user_status == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') ? 'Se réinscrire' : 'Participer' }}\">
                                        {% if user_status == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') %}
                                            {# Refresh Icon SVG #}
                                            <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m-15.357-2a8.001 8.001 0 0115.357-2m0 0H15\"></path></svg>
                                            <span>Réinscrire</span>
                                        {% else %}
                                            {# User Plus Icon SVG #}
                                            <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"></path></svg>
                                            <span>Participer</span>
                                        {% endif %}
                                    </button>
                                </form>
                            {% endif %}
                        {% else %}
                            {# --- Login Button --- #}
                            <a href=\"{{ path('app_login') }}\" {# Or app_login_page #}
                               class=\"button button-secondary button-sm flex items-center gap-1 text-xs\"
                               title=\"Connectez-vous pour participer\">
                                {# Login Icon SVG #}
                                <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\"></path></svg>
                                <span>Connexion</span>
                            </a>
                        {% endif %}
                    {% endif %} {# End check for event.statut == 'A_VENIR' #}
                </div> {# End Actions flex container #}
            </div> {# End Footer #}
        </div> {# End Card Body #}
    </div> {# End Card #}
{% endif %} {# End check if event exists #}", "client/event/_event_card.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/client/event/_event_card.html.twig");
    }
}
