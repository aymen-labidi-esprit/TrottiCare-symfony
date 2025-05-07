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

/* public/event/_event_card.html.twig */
class __TwigTemplate_fe1cb76c9993518a005068f45ffed68c extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event/_event_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event/_event_card.html.twig"));

        // line 1
        yield "
";
        // line 3
        $context["event"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_data"]) || array_key_exists("event_data", $context) ? $context["event_data"] : (function () { throw new RuntimeError('Variable "event_data" does not exist.', 3, $this->source); })()), "entity", [], "any", false, false, false, 3);
        // line 4
        $context["user_status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["event_data"] ?? null), "user_participation_status", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_data"]) || array_key_exists("event_data", $context) ? $context["event_data"] : (function () { throw new RuntimeError('Variable "event_data" does not exist.', 4, $this->source); })()), "user_participation_status", [], "any", false, false, false, 4), null)) : (null));
        // line 5
        yield "
<div class=\"event-card bg-white rounded-lg shadow-md overflow-hidden transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1\">
    ";
        // line 8
        yield "    <div class=\"event-card-header h-32 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center relative\">
        <div class=\"absolute inset-0 bg-black/10\"></div>
        <h3 class=\"event-card-title text-2xl md:text-3xl font-bold text-white text-center px-4 relative z-10\">
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
        yield "
        </h3>
    </div>

    ";
        // line 16
        yield "    <div class=\"p-6 event-card-body\">
        ";
        // line 18
        yield "        <p class=\"event-card-description text-gray-700 mb-4 line-clamp-3 leading-relaxed\">
            ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19)), "html", null, true);
        yield "
        </p>

        ";
        // line 23
        yield "        <div class=\"event-card-meta space-y-2 mb-6\">
            ";
        // line 25
        yield "            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                </svg>
                <span class=\"event-meta-text text-sm\">
                    ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "dateDebut", [], "any", false, false, false, 32), "d M Y H:i"), "html", null, true);
        yield "
                </span>
            </div>

            ";
        // line 37
        yield "            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M17 7V3m-4 4V3m-1 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                </svg>
                <span class=\"event-meta-text text-sm\">
                    ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "dateFin", [], "any", false, false, false, 44), "d M Y H:i"), "html", null, true);
        yield "
                </span>
            </div>


            ";
        // line 50
        yield "            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                </svg>
                ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 56, $this->source); })()), "dateDebut", [], "any", false, false, false, 56) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 56, $this->source); })()), "dateFin", [], "any", false, false, false, 56))) {
            // line 57
            yield "                    ";
            // line 58
            yield "                    ";
            $context["diff"] = ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "dateFin", [], "any", false, false, false, 58), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "dateDebut", [], "any", false, false, false, 58), "U"));
            // line 59
            yield "                    ";
            $context["days"] = (int) floor(((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 59, $this->source); })()) / 86400));
            // line 60
            yield "                    ";
            $context["hours"] = (int) floor((((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 60, $this->source); })()) % 86400) / 3600));
            // line 61
            yield "                    <span class=\"event-meta-text text-sm\">
                        Durée: ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 62, $this->source); })()), "html", null, true);
            yield " jour";
            yield ((((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 62, $this->source); })()) > 1)) ? ("s") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 62, $this->source); })()), "html", null, true);
            yield " heure";
            yield ((((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 62, $this->source); })()) > 1)) ? ("s") : (""));
            yield "
                    </span>
                ";
        } else {
            // line 65
            yield "                    <span class=\"event-meta-text text-sm\">Durée: N/A</span>
                ";
        }
        // line 67
        yield "            </div>

            ";
        // line 70
        yield "            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\"/>
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                </svg>
                <span class=\"event-meta-text text-sm\">
                    ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "state", [], "any", false, true, false, 79), "label", [], "any", true, true, false, 79)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 79, $this->source); })()), "state", [], "any", false, false, false, 79), "label", [], "any", false, false, false, 79), "Non défini")) : ("Non défini")), "html", null, true);
        yield "
                </span>
            </div>

            ";
        // line 84
        yield "            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\"/>
                </svg>
                <span class=\"event-meta-text text-sm\">
                    ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 91, $this->source); })()), "participations", [], "any", false, false, false, 91)), "html", null, true);
        yield " participant(s)
                </span>
            </div>
        </div>

        ";
        // line 97
        yield "        <div class=\"flex items-center justify-between\">
            ";
        // line 99
        yield "            <span class=\"status-badge status-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 99, $this->source); })()), "statut", [], "any", false, false, false, 99)), "html", null, true);
        yield " px-3 py-1 text-xs font-medium uppercase tracking-wide mt-2 mb-2\">
                ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 100, $this->source); })()), "statut", [], "any", false, false, false, 100) == "A_VENIR")) {
            yield "À venir
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 101
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 101, $this->source); })()), "statut", [], "any", false, false, false, 101) == "EN_COURS")) {
            yield "En cours
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 102
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "statut", [], "any", false, false, false, 102) == "TERMINE")) {
            yield "Terminé
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 103
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 103, $this->source); })()), "statut", [], "any", false, false, false, 103) == "ANNULE")) {
            yield "Annulé
                ";
        }
        // line 105
        yield "            </span>

            ";
        // line 108
        yield "            <div class=\"flex gap-2 mt-2\">
                <a href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
        yield "\"
                   class=\"button button-secondary button-small flex items-center gap-1\">
                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                         xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                              d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                              d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z\"/>
                    </svg>
                    Détails
                </a>

                ";
        // line 121
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 121, $this->source); })()), "statut", [], "any", false, false, false, 121) == "A_VENIR")) {
            // line 122
            yield "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 123
                yield "                        ";
                if (((isset($context["user_status"]) || array_key_exists("user_status", $context) ? $context["user_status"] : (function () { throw new RuntimeError('Variable "user_status" does not exist.', 123, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) {
                    // line 124
                    yield "                            <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124)]), "html", null, true);
                    yield "\"
                                  method=\"post\" class=\"d-inline-block\">
                                <button type=\"submit\"
                                        class=\"button button-secondary-outline button-small flex items-center gap-1\"
                                        onclick=\"return confirm('Annuler votre participation ?');\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                                         xmlns=\"http://www.w3.org/2000/svg\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                              d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                                    </svg>
                                    Annuler
                                </button>
                            </form>
                        ";
                } elseif ((                // line 137
(isset($context["user_status"]) || array_key_exists("user_status", $context) ? $context["user_status"] : (function () { throw new RuntimeError('Variable "user_status" does not exist.', 137, $this->source); })()) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE"))) {
                    // line 138
                    yield "                            <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
                    yield "\"
                                  method=\"post\" class=\"d-inline-block\">
                                <button type=\"submit\"
                                        class=\"button button-primary button-small flex items-center gap-1\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                                         xmlns=\"http://www.w3.org/2000/svg\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                              d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m-15.357-2a8.001 8.001 0 0115.357-2m0 0H15\"/>
                                    </svg>
                                    Réinscrire
                                </button>
                            </form>
                        ";
                } else {
                    // line 151
                    yield "                            <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)]), "html", null, true);
                    yield "\"
                                  method=\"post\" class=\"d-inline-block\">
                                <button type=\"submit\"
                                        class=\"button button-primary button-small flex items-center gap-1\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                                         xmlns=\"http://www.w3.org/2000/svg\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                              d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"/>
                                    </svg>
                                    Participer
                                </button>
                            </form>
                        ";
                }
                // line 164
                yield "                    ";
            } else {
                // line 165
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\"
                           class=\"button button-secondary button-small flex items-center gap-1\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                      d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\"/>
                            </svg>
                            Connexion
                        </a>
                    ";
            }
            // line 175
            yield "                ";
        }
        // line 176
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "public/event/_event_card.html.twig";
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
        return array (  326 => 176,  323 => 175,  309 => 165,  306 => 164,  289 => 151,  272 => 138,  270 => 137,  253 => 124,  250 => 123,  247 => 122,  245 => 121,  230 => 109,  227 => 108,  223 => 105,  218 => 103,  214 => 102,  210 => 101,  206 => 100,  201 => 99,  198 => 97,  190 => 91,  181 => 84,  174 => 79,  163 => 70,  159 => 67,  155 => 65,  143 => 62,  140 => 61,  137 => 60,  134 => 59,  131 => 58,  129 => 57,  127 => 56,  119 => 50,  111 => 44,  102 => 37,  95 => 32,  86 => 25,  83 => 23,  77 => 19,  74 => 18,  71 => 16,  64 => 11,  59 => 8,  55 => 5,  53 => 4,  51 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{# templates/public/event/_event_card.html.twig #}
{% set event = event_data.entity %}
{% set user_status = event_data.user_participation_status|default(null) %}

<div class=\"event-card bg-white rounded-lg shadow-md overflow-hidden transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1\">
    {# Card Header with Enhanced Gradient #}
    <div class=\"event-card-header h-32 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center relative\">
        <div class=\"absolute inset-0 bg-black/10\"></div>
        <h3 class=\"event-card-title text-2xl md:text-3xl font-bold text-white text-center px-4 relative z-10\">
            {{ event.titre }}
        </h3>
    </div>

    {# Card Body #}
    <div class=\"p-6 event-card-body\">
        {# Description with Improved Truncation #}
        <p class=\"event-card-description text-gray-700 mb-4 line-clamp-3 leading-relaxed\">
            {{ event.description|striptags }}
        </p>

        {# Metadata Section with Consistent Icons #}
        <div class=\"event-card-meta space-y-2 mb-6\">
            {# Date Début #}
            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                </svg>
                <span class=\"event-meta-text text-sm\">
                    {{ event.dateDebut|date('d M Y H:i') }}
                </span>
            </div>

            {# Date Fin #}
            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M17 7V3m-4 4V3m-1 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                </svg>
                <span class=\"event-meta-text text-sm\">
                    {{ event.dateFin|date('d M Y H:i') }}
                </span>
            </div>


            {# Durée calculée en jours et heures #}
            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                </svg>
                {% if event.dateDebut and event.dateFin %}
                    {# Calculate difference in seconds #}
                    {% set diff = event.dateFin|date('U') - event.dateDebut|date('U') %}
                    {% set days  = diff // 86400 %}
                    {% set hours = (diff % 86400) // 3600 %}
                    <span class=\"event-meta-text text-sm\">
                        Durée: {{ days }} jour{{ days > 1 ? 's' }} {{ hours }} heure{{ hours > 1 ? 's' }}
                    </span>
                {% else %}
                    <span class=\"event-meta-text text-sm\">Durée: N/A</span>
                {% endif %}
            </div>

            {# Location #}
            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\"/>
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                </svg>
                <span class=\"event-meta-text text-sm\">
                    {{ event.state.label|default('Non défini') }}
                </span>
            </div>

            {# Participants #}
            <div class=\"event-meta-item flex items-center gap-2 text-gray-600\">
                <svg class=\"w-4 h-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                          d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\"/>
                </svg>
                <span class=\"event-meta-text text-sm\">
                    {{ event.participations|length }} participant(s)
                </span>
            </div>
        </div>

        {# Footer Section #}
        <div class=\"flex items-center justify-between\">
            {# Status Badge with Improved Styling #}
            <span class=\"status-badge status-{{ event.statut|lower }} px-3 py-1 text-xs font-medium uppercase tracking-wide mt-2 mb-2\">
                {% if event.statut == 'A_VENIR' %}À venir
                {% elseif event.statut == 'EN_COURS' %}En cours
                {% elseif event.statut == 'TERMINE' %}Terminé
                {% elseif event.statut == 'ANNULE' %}Annulé
                {% endif %}
            </span>

            {# Action Buttons with Consistent Spacing #}
            <div class=\"flex gap-2 mt-2\">
                <a href=\"{{ path('public_event_show', {'id': event.id}) }}\"
                   class=\"button button-secondary button-small flex items-center gap-1\">
                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                         xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                              d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                              d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z\"/>
                    </svg>
                    Détails
                </a>

                {% if event.statut == 'A_VENIR' %}
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        {% if user_status == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') %}
                            <form action=\"{{ path('app_event_cancel_participation', {'id': event.id}) }}\"
                                  method=\"post\" class=\"d-inline-block\">
                                <button type=\"submit\"
                                        class=\"button button-secondary-outline button-small flex items-center gap-1\"
                                        onclick=\"return confirm('Annuler votre participation ?');\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                                         xmlns=\"http://www.w3.org/2000/svg\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                              d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                                    </svg>
                                    Annuler
                                </button>
                            </form>
                        {% elseif user_status == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') %}
                            <form action=\"{{ path('app_event_participate', {'id': event.id}) }}\"
                                  method=\"post\" class=\"d-inline-block\">
                                <button type=\"submit\"
                                        class=\"button button-primary button-small flex items-center gap-1\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                                         xmlns=\"http://www.w3.org/2000/svg\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                              d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m-15.357-2a8.001 8.001 0 0115.357-2m0 0H15\"/>
                                    </svg>
                                    Réinscrire
                                </button>
                            </form>
                        {% else %}
                            <form action=\"{{ path('client_event_participate', {'id': event.id}) }}\"
                                  method=\"post\" class=\"d-inline-block\">
                                <button type=\"submit\"
                                        class=\"button button-primary button-small flex items-center gap-1\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                                         xmlns=\"http://www.w3.org/2000/svg\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                              d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"/>
                                    </svg>
                                    Participer
                                </button>
                            </form>
                        {% endif %}
                    {% else %}
                        <a href=\"{{ path('app_login') }}\"
                           class=\"button button-secondary button-small flex items-center gap-1\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                      d=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\"/>
                            </svg>
                            Connexion
                        </a>
                    {% endif %}
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "public/event/_event_card.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/public/event/_event_card.html.twig");
    }
}
