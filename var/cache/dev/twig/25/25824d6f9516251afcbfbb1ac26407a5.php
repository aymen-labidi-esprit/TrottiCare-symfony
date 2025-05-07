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

/* event/_event_card.html.twig */
class __TwigTemplate_72ed13f1e1cfaf05fbd17748bf9903b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_event_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_event_card.html.twig"));

        // line 3
        $context["event"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_data"]) || array_key_exists("event_data", $context) ? $context["event_data"] : (function () { throw new RuntimeError('Variable "event_data" does not exist.', 3, $this->source); })()), "entity", [], "any", false, false, false, 3);
        // line 4
        $context["user_status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["event_data"] ?? null), "user_participation_status", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_data"]) || array_key_exists("event_data", $context) ? $context["event_data"] : (function () { throw new RuntimeError('Variable "event_data" does not exist.', 4, $this->source); })()), "user_participation_status", [], "any", false, false, false, 4), null)) : (null));
        // line 5
        $context["location_display"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["event_data"] ?? null), "location", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_data"]) || array_key_exists("event_data", $context) ? $context["event_data"] : (function () { throw new RuntimeError('Variable "event_data" does not exist.', 5, $this->source); })()), "location", [], "any", false, false, false, 5), "-")) : ("-"));
        // line 6
        $context["duration_display"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["event_data"] ?? null), "duration", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_data"]) || array_key_exists("event_data", $context) ? $context["event_data"] : (function () { throw new RuntimeError('Variable "event_data" does not exist.', 6, $this->source); })()), "duration", [], "any", false, false, false, 6), null)) : (null));
        // line 7
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 33
        yield "
";
        // line 34
        if ((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 34, $this->source); })())) {
            yield " ";
            // line 35
            yield "    <div class=\"event-card flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-gray-200\">

        ";
            // line 38
            yield "        <div class=\"h-32 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center relative p-4\">
            ";
            // line 40
            yield "            ";
            // line 41
            yield "            <h3 class=\"text-xl font-bold text-white text-center line-clamp-2 relative z-10\">
                ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "titre", [], "any", false, false, false, 42), "html", null, true);
            yield "
            </h3>
        </div>

        ";
            // line 47
            yield "        <div class=\"p-5 flex flex-col flex-grow\"> ";
            // line 48
            yield "
            ";
            // line 50
            yield "            <p class=\"text-sm text-gray-600 mb-4 line-clamp-3 leading-relaxed flex-grow\"> ";
            // line 51
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51)), "Aucune description fournie."), "html", null, true);
            yield "
            </p>

            ";
            // line 55
            yield "            <div class=\"space-y-2 mb-5 text-xs text-gray-600\">
                ";
            // line 57
            yield "                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/></svg>
                    <span class=\"font-medium\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "dateDebut", [], "any", false, false, false, 59), "d M Y, H:i"), "html", null, true);
            yield "</span>
                </div>
                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/></svg>
                    <span class=\"font-medium\">Min Autonomie:";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 63, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 63), "html", null, true);
            yield "</span>
                </div>
                ";
            // line 66
            yield "                ";
            if ((isset($context["duration_display"]) || array_key_exists("duration_display", $context) ? $context["duration_display"] : (function () { throw new RuntimeError('Variable "duration_display" does not exist.', 66, $this->source); })())) {
                // line 67
                yield "                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/></svg>
                        <span>Durée: ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration_display"]) || array_key_exists("duration_display", $context) ? $context["duration_display"] : (function () { throw new RuntimeError('Variable "duration_display" does not exist.', 69, $this->source); })()), "html", null, true);
                yield "</span>
                    </div>
                ";
            }
            // line 72
            yield "
                ";
            // line 74
            yield "                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/></svg>
                    <span>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["location_display"]) || array_key_exists("location_display", $context) ? $context["location_display"] : (function () { throw new RuntimeError('Variable "location_display" does not exist.', 76, $this->source); })()), "html", null, true);
            yield "</span>
                </div>

                ";
            // line 80
            yield "                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\"/></svg>
                    <span>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 82, $this->source); })()), "participations", [], "any", false, false, false, 82)), "html", null, true);
            yield " participant";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 82, $this->source); })()), "participations", [], "any", false, false, false, 82)) > 1)) ? ("s") : (""));
            yield "</span>
                </div>
            </div>

            ";
            // line 87
            yield "            <div class=\"mt-auto pt-4 border-t border-gray-100 flex items-center justify-between gap-2\">
                ";
            // line 89
            yield "                <span class=\"status-badge status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 89, $this->source); })()), "statut", [], "any", false, false, false, 89)), "html", null, true);
            yield "\">
                ";
            // line 90
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 90, $this->source); })()), "statut", [], "any", false, false, false, 90) == "A_VENIR")) {
                yield "À venir
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 91, $this->source); })()), "statut", [], "any", false, false, false, 91) == "EN_COURS")) {
                yield "En cours
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 92
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 92, $this->source); })()), "statut", [], "any", false, false, false, 92) == "TERMINE")) {
                yield "Terminé
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 93
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 93, $this->source); })()), "statut", [], "any", false, false, false, 93) == "ANNULE")) {
                yield "Annulé
                ";
            } else {
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 94, $this->source); })()), "statut", [], "any", false, false, false, 94), "html", null, true);
            }
            // line 95
            yield "            </span>

                ";
            // line 98
            yield "                <div class=\"flex gap-2 flex-shrink-0\">
                    ";
            // line 100
            yield "                    ";
            // line 101
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\"
                       class=\"button button-secondary button-sm flex items-center gap-1 text-xs\" title=\"Voir les détails\">
                        ";
            // line 104
            yield "                        <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"></path><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z\"></path></svg>
                        Détails
                    </a>

                    ";
            // line 109
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 109, $this->source); })()), "statut", [], "any", false, false, false, 109) == "A_VENIR")) {
                // line 110
                yield "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 111
                    yield "                            ";
                    // line 112
                    yield "                            ";
                    if (((isset($context["user_status"]) || array_key_exists("user_status", $context) ? $context["user_status"] : (function () { throw new RuntimeError('Variable "user_status" does not exist.', 112, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) {
                        // line 113
                        yield "                                ";
                        // line 114
                        yield "                                ";
                        // line 115
                        yield "                                <form action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)]), "html", null, true);
                        yield "\" method=\"post\" class=\"inline-block\">
                                    ";
                        // line 117
                        yield "                                    ";
                        // line 118
                        yield "                                    <button type=\"submit\"
                                            class=\"button button-outline-danger button-sm flex items-center gap-1 text-xs\"
                                            onclick=\"return confirm('Annuler votre participation ?');\"
                                            title=\"Se désinscrire\">
                                        ";
                        // line 123
                        yield "                                        <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"></path></svg>
                                        <span>Annuler</span> ";
                        // line 125
                        yield "                                    </button>
                                </form>
                            ";
                    } else {
                        // line 127
                        yield " ";
                        // line 128
                        yield "                                ";
                        // line 129
                        yield "                                ";
                        // line 130
                        yield "                                <form action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
                        yield "\" method=\"post\" class=\"inline-block\">
                                    ";
                        // line 132
                        yield "                                    ";
                        // line 133
                        yield "                                    <button type=\"submit\"
                                            class=\"button button-primary button-sm flex items-center gap-1 text-xs\"
                                            title=\"";
                        // line 135
                        yield ((((isset($context["user_status"]) || array_key_exists("user_status", $context) ? $context["user_status"] : (function () { throw new RuntimeError('Variable "user_status" does not exist.', 135, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE"))) ? ("Se réinscrire") : ("Participer"));
                        yield "\">
                                        ";
                        // line 136
                        if (((isset($context["user_status"]) || array_key_exists("user_status", $context) ? $context["user_status"] : (function () { throw new RuntimeError('Variable "user_status" does not exist.', 136, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE"))) {
                            // line 137
                            yield "                                            ";
                            // line 138
                            yield "                                            <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m-15.357-2a8.001 8.001 0 0115.357-2m0 0H15\"></path></svg>
                                            <span>Réinscrire</span>
                                        ";
                        } else {
                            // line 141
                            yield "                                            ";
                            // line 142
                            yield "                                            <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"></path></svg>
                                            <span>Participer</span>
                                        ";
                        }
                        // line 145
                        yield "                                    </button>
                                </form>
                            ";
                    }
                    // line 148
                    yield "                        ";
                } else {
                    // line 149
                    yield "                            ";
                    // line 150
                    yield "                            <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    yield "\" ";
                    // line 151
                    yield "                               class=\"button button-secondary button-sm flex items-center gap-1 text-xs\"
                               title=\"Connectez-vous pour participer\">
                                ";
                    // line 154
                    yield "                                <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\"></path></svg>
                                <span>Connexion</span>
                            </a>
                        ";
                }
                // line 158
                yield "                    ";
            }
            yield " ";
            // line 159
            yield "                </div> ";
            // line 160
            yield "            </div> ";
            // line 161
            yield "        </div> ";
            // line 162
            yield "    </div> ";
        }
        // line 163
        yield " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    ";
        // line 12
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
        return "event/_event_card.html.twig";
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
        return array (  344 => 12,  342 => 11,  329 => 10,  318 => 163,  315 => 162,  313 => 161,  311 => 160,  309 => 159,  305 => 158,  299 => 154,  295 => 151,  291 => 150,  289 => 149,  286 => 148,  281 => 145,  276 => 142,  274 => 141,  269 => 138,  267 => 137,  265 => 136,  261 => 135,  257 => 133,  255 => 132,  250 => 130,  248 => 129,  246 => 128,  244 => 127,  239 => 125,  236 => 123,  230 => 118,  228 => 117,  223 => 115,  221 => 114,  219 => 113,  216 => 112,  214 => 111,  211 => 110,  208 => 109,  202 => 104,  196 => 101,  194 => 100,  191 => 98,  187 => 95,  184 => 94,  179 => 93,  175 => 92,  171 => 91,  167 => 90,  162 => 89,  159 => 87,  150 => 82,  146 => 80,  140 => 76,  136 => 74,  133 => 72,  127 => 69,  123 => 67,  120 => 66,  115 => 63,  108 => 59,  104 => 57,  101 => 55,  94 => 51,  92 => 50,  89 => 48,  87 => 47,  80 => 42,  77 => 41,  75 => 40,  72 => 38,  68 => 35,  65 => 34,  62 => 33,  60 => 10,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  49 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/public/event/_event_card.html.twig #}
{# Expects 'event_data' variable (array with 'entity', 'duration', 'location', 'user_participation_status') #}
{% set event = event_data.entity %}
{% set user_status = event_data.user_participation_status|default(null) %}
{% set location_display = event_data.location|default('-') %}
{% set duration_display = event_data.duration|default(null) %}

{# ---- STYLES NEEDED FOR THIS CARD --- #}
{# (These should ideally be in your global CSS or base template styles) #}
{% block stylesheets %}
    {# Only include if not already globally available #}
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

{% if event %} {# Only render card if event exists #}
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
                <div class=\"flex items-center gap-2\">
                    <svg class=\"w-3.5 h-3.5 flex-shrink-0 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/></svg>
                    <span class=\"font-medium\">Min Autonomie:{{ event.trottinetteMinAutonomie }}</span>
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
{% endif %} {# End check event exists #}", "event/_event_card.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/event/_event_card.html.twig");
    }
}
