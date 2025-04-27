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

/* event/show.html.twig */
class __TwigTemplate_d9a480c64145fdc6de8405c3186aa931 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails de l'événement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mt-4\">
        ";
        // line 8
        yield "        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Événements</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), 0, 50) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11)) > 50)) ? ("...") : (""))), "html", null, true);
        yield "</li> ";
        // line 12
        yield "            </ol>
        </nav>

        <div class=\"row\">
            ";
        // line 17
        yield "            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"card-body\">
                        ";
        // line 21
        yield "                        <h1 class=\"card-title display-6 mb-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), "html", null, true);
        yield "</h1>

                        ";
        // line 24
        yield "                        <div class=\"event-meta mb-4 border-top border-bottom py-3\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        ";
        // line 29
        yield "                                        <i class=\"bi bi-calendar-event text-primary fs-3 me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1 text-muted\">Date de début</h6>
                                            <p class=\"mb-0 fw-bold\">";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "dateDebut", [], "any", false, false, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "dateDebut", [], "any", false, false, false, 32), "d M Y \\à H:i"), "html", null, true)) : ("Non définie"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-calendar-check text-primary fs-3 me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1 text-muted\">Date de fin</h6>
                                            <p class=\"mb-0 fw-bold\">";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 41, $this->source); })()), "dateFin", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 41, $this->source); })()), "dateFin", [], "any", false, false, false, 41), "d M Y \\à H:i"), "html", null, true)) : ("Non définie"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-geo-alt-fill text-primary fs-3 me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1 text-muted\">Lieu (Gouvernorat)</h6>
                                            ";
        // line 51
        yield "                                            <p class=\"mb-0 fw-bold\">";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "state", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "state", [], "any", false, false, false, 51), "label", [], "any", false, false, false, 51), "html", null, true)) : ("Non défini"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-battery-charging text-primary fs-3 me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1 text-muted\">Autonomie minimale requise</h6>
                                            <p class=\"mb-0 fw-bold\">
                                                ";
        // line 61
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 61, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 61)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 61, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 61) > 0))) {
            // line 62
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 62, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 62), "html", null, true);
            yield " km
                                                ";
        } else {
            // line 64
            yield "                                                    Aucune
                                                ";
        }
        // line 66
        yield "                                            </p>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 71
        yield "                            </div>
                        </div>

                        ";
        // line 75
        yield "                        <div class=\"description mb-4\">
                            <h5 class=\"mb-2\">Description</h5>
                            ";
        // line 78
        yield "                            <p class=\"mb-0\">";
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), "html", null, true));
        yield "</p>
                        </div>

                        ";
        // line 82
        yield "                        <div class=\"card-footer bg-transparent border-top pt-3 d-flex flex-wrap justify-content-between align-items-center gap-2\"> ";
        // line 83
        yield "                            ";
        // line 84
        yield "                            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"bi bi-arrow-left me-1\"></i>Retour à la liste
                            </a>

                            ";
        // line 89
        yield "                            <div>
                                ";
        // line 91
        yield "                                ";
        // line 92
        yield "                                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary me-2\">
                                    <i class=\"bi bi-pencil-fill me-1\"></i>Modifier
                                </a>
                                ";
        // line 96
        yield "
                                ";
        // line 98
        yield "                                ";
        // line 99
        yield "                                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-info\">
                                    <i class=\"bi bi-people-fill me-1\"></i>Voir les participants
                                </a>
                                ";
        // line 103
        yield "                            </div>

                            ";
        // line 106
        yield "                            <div>
                                ";
        // line 107
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107)) {
            yield " ";
            // line 108
            yield "                                    ";
            if (((isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 108, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 108, $this->source); })()), "statut", [], "any", false, false, false, 108) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT")))) {
                yield " ";
                // line 109
                yield "                                        ";
                // line 110
                yield "                                        ";
                // line 111
                yield "                                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\" method=\"post\" onsubmit=\"return confirm('Voulez-vous vraiment annuler votre participation ?');\" class=\"d-inline\">
                                            ";
                // line 112
                yield " ";
                // line 113
                yield "                                            <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                                <i class=\"bi bi-x-circle me-1\"></i> Annuler Participation
                                            </button>
                                            <span class=\"badge bg-success ms-1 align-middle\">Inscrit</span>
                                        </form>
                                    ";
            } else {
                // line 119
                yield "                                        ";
                // line 120
                yield "                                        ";
                // line 121
                yield "                                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                                            ";
                // line 122
                yield " ";
                // line 123
                yield "                                            <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                                ";
                // line 124
                if (((isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 124, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 124, $this->source); })()), "statut", [], "any", false, false, false, 124) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE")))) {
                    yield " ";
                    // line 125
                    yield "                                                    <i class=\"bi bi-arrow-clockwise me-1\"></i> Réactiver Participation
                                                ";
                } else {
                    // line 127
                    yield "                                                    <i class=\"bi bi-check-circle me-1\"></i> Participer
                                                ";
                }
                // line 129
                yield "                                            </button>
                                        </form>
                                        ";
                // line 131
                if (((isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 131, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_participation"]) || array_key_exists("user_participation", $context) ? $context["user_participation"] : (function () { throw new RuntimeError('Variable "user_participation" does not exist.', 131, $this->source); })()), "statut", [], "any", false, false, false, 131) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE")))) {
                    yield " ";
                    // line 132
                    yield "                                            <span class=\"badge bg-secondary ms-1 align-middle\">Annulé</span>
                                        ";
                }
                // line 134
                yield "                                    ";
            }
            // line 135
            yield "                                ";
        } else {
            // line 136
            yield "                                    ";
            // line 137
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-sm btn-outline-primary\">Connectez-vous pour participer</a>
                                ";
        }
        // line 139
        yield "                            </div>
                        </div> ";
        // line 141
        yield "                    </div> ";
        // line 142
        yield "                </div> ";
        // line 143
        yield "            </div> ";
        // line 144
        yield "
            ";
        // line 146
        yield "            <div class=\"col-lg-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\"><i class=\"bi bi-gear-fill me-2\"></i>Actions Administrateur</h5> ";
        // line 150
        yield "                    </div>
                    <div class=\"card-body text-center\">
                        ";
        // line 153
        yield "                        ";
        // line 154
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "id", [], "any", true, true, false, 154) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154))) {
            yield " ";
            // line 155
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "event/_delete_form.html.twig");
            yield "
                        ";
        } else {
            // line 157
            yield "                            <p class=\"text-muted\">Impossible de supprimer cet événement (ID manquant).</p>
                        ";
        }
        // line 159
        yield "                        ";
        // line 162
        yield "                    </div>
                </div>
                ";
        // line 165
        yield "            </div> ";
        // line 166
        yield "        </div> ";
        // line 167
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
        return "event/show.html.twig";
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
        return array (  381 => 167,  379 => 166,  377 => 165,  373 => 162,  371 => 159,  367 => 157,  361 => 155,  357 => 154,  355 => 153,  351 => 150,  346 => 146,  343 => 144,  341 => 143,  339 => 142,  337 => 141,  334 => 139,  328 => 137,  326 => 136,  323 => 135,  320 => 134,  316 => 132,  313 => 131,  309 => 129,  305 => 127,  301 => 125,  298 => 124,  295 => 123,  293 => 122,  288 => 121,  286 => 120,  284 => 119,  276 => 113,  274 => 112,  269 => 111,  267 => 110,  265 => 109,  261 => 108,  258 => 107,  255 => 106,  251 => 103,  244 => 99,  242 => 98,  239 => 96,  232 => 92,  230 => 91,  227 => 89,  219 => 84,  217 => 83,  215 => 82,  208 => 78,  204 => 75,  199 => 71,  193 => 66,  189 => 64,  183 => 62,  181 => 61,  167 => 51,  155 => 41,  143 => 32,  138 => 29,  132 => 24,  126 => 21,  121 => 17,  115 => 12,  112 => 11,  108 => 10,  104 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ event.titre }} - Détails de l'événement{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        {# Breadcrumb Navigation #}
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_event_index') }}\">Événements</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ event.titre|slice(0, 50) ~ (event.titre|length > 50 ? '...' : '') }}</li> {# Truncate long titles #}
            </ol>
        </nav>

        <div class=\"row\">
            {# Main Event Details Column #}
            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"card-body\">
                        {# Event Title #}
                        <h1 class=\"card-title display-6 mb-3\">{{ event.titre }}</h1>

                        {# Event Metadata #}
                        <div class=\"event-meta mb-4 border-top border-bottom py-3\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        {# Use Bootstrap Icons consistently #}
                                        <i class=\"bi bi-calendar-event text-primary fs-3 me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1 text-muted\">Date de début</h6>
                                            <p class=\"mb-0 fw-bold\">{{ event.dateDebut ? event.dateDebut|date('d M Y \\\\à H:i') : 'Non définie' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-calendar-check text-primary fs-3 me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1 text-muted\">Date de fin</h6>
                                            <p class=\"mb-0 fw-bold\">{{ event.dateFin ? event.dateFin|date('d M Y \\\\à H:i') : 'Non définie' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-geo-alt-fill text-primary fs-3 me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1 text-muted\">Lieu (Gouvernorat)</h6>
                                            {# Use the 'state' property which holds the GouvernoratEnum #}
                                            <p class=\"mb-0 fw-bold\">{{ event.state ? event.state.label : 'Non défini' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-battery-charging text-primary fs-3 me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1 text-muted\">Autonomie minimale requise</h6>
                                            <p class=\"mb-0 fw-bold\">
                                                {% if event.trottinetteMinAutonomie is not null and event.trottinetteMinAutonomie > 0 %}
                                                    {{ event.trottinetteMinAutonomie }} km
                                                {% else %}
                                                    Aucune
                                                {% endif %}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {# Removed redundant gouvernorat check as it's now the 'lieu' field #}
                            </div>
                        </div>

                        {# Event Description #}
                        <div class=\"description mb-4\">
                            <h5 class=\"mb-2\">Description</h5>
                            {# Use nl2br filter to render line breaks from the textarea input #}
                            <p class=\"mb-0\">{{ event.description|nl2br }}</p>
                        </div>

                        {# Action Buttons Footer #}
                        <div class=\"card-footer bg-transparent border-top pt-3 d-flex flex-wrap justify-content-between align-items-center gap-2\"> {# Added gap-2 #}
                            {# Back Button #}
                            <a href=\"{{ path('app_admin_events') }}\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"bi bi-arrow-left me-1\"></i>Retour à la liste
                            </a>

                            {# Admin/Partenaire Actions - Consider conditional display with is_granted if security is added back #}
                            <div>
                                {# Edit Button - Visible to relevant roles #}
                                {# {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_PARTENAIRE') and event.organisateur == app.user) %} #}
                                <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"btn btn-sm btn-primary me-2\">
                                    <i class=\"bi bi-pencil-fill me-1\"></i>Modifier
                                </a>
                                {# {% endif %} #}

                                {# Participants Button - Visible to relevant roles #}
                                {# {% if is_granted('ROLE_ADMIN') %} #}
                                <a href=\"{{ path('app_event_participants', {'id': event.id}) }}\" class=\"btn btn-sm btn-info\">
                                    <i class=\"bi bi-people-fill me-1\"></i>Voir les participants
                                </a>
                                {# {% endif %} #}
                            </div>

                            {# Client Participation Actions #}
                            <div>
                                {% if app.user %} {# Only show buttons if a user concept exists #}
                                    {% if user_participation and user_participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') %} {# <--- CORRECTED HERE #}
                                        {# User is participating - Show Cancel Button #}
                                        {# WARNING: No CSRF protection if removed! #}
                                        <form action=\"{{ path('app_event_cancel_participation', {'id': event.id}) }}\" method=\"post\" onsubmit=\"return confirm('Voulez-vous vraiment annuler votre participation ?');\" class=\"d-inline\">
                                            {# <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel'~event.id~app.user.id) }}\"> #} {# CSRF Removed/Optional #}
                                            <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                                <i class=\"bi bi-x-circle me-1\"></i> Annuler Participation
                                            </button>
                                            <span class=\"badge bg-success ms-1 align-middle\">Inscrit</span>
                                        </form>
                                    {% else %}
                                        {# User is NOT actively participating (might be cancelled or never joined) - Show Participate Button #}
                                        {# WARNING: No CSRF protection if removed! #}
                                        <form action=\"{{ path('app_event_participate', {'id': event.id}) }}\" method=\"post\" class=\"d-inline\">
                                            {# <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('participate'~event.id) }}\"> #} {# CSRF Removed/Optional #}
                                            <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                                {% if user_participation and user_participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') %} {# <--- CORRECTED HERE #}
                                                    <i class=\"bi bi-arrow-clockwise me-1\"></i> Réactiver Participation
                                                {% else %}
                                                    <i class=\"bi bi-check-circle me-1\"></i> Participer
                                                {% endif %}
                                            </button>
                                        </form>
                                        {% if user_participation and user_participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') %} {# <--- CORRECTED HERE #}
                                            <span class=\"badge bg-secondary ms-1 align-middle\">Annulé</span>
                                        {% endif %}
                                    {% endif %}
                                {% else %}
                                    {# Optionally show a message or login link for non-logged-in users #}
                                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-sm btn-outline-primary\">Connectez-vous pour participer</a>
                                {% endif %}
                            </div>
                        </div> {# End Card Footer #}
                    </div> {# End Card Body #}
                </div> {# End Card #}
            </div> {# End Main Column #}

            {# Sidebar Column #}
            <div class=\"col-lg-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\"><i class=\"bi bi-gear-fill me-2\"></i>Actions Administrateur</h5> {# Assuming delete is admin action #}
                    </div>
                    <div class=\"card-body text-center\">
                        {# Delete Form - Consider conditional display with is_granted if security is added back #}
                        {# {% if is_granted('ROLE_ADMIN') %} #}
                        {% if event.id is defined and event.id %} {# Ensure event.id exists before including delete form #}
                            {{ include('event/_delete_form.html.twig') }}
                        {% else %}
                            <p class=\"text-muted\">Impossible de supprimer cet événement (ID manquant).</p>
                        {% endif %}
                        {# {% else %}
                        <p class=\"text-muted\">Aucune action administrateur disponible.</p>
                    {% endif %} #}
                    </div>
                </div>
                {# You could add more sidebar cards here - e.g., map snippet, related events #}
            </div> {# End Sidebar Column #}
        </div> {# End Row #}
    </div> {# End Container #}
{% endblock %}", "event/show.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\event\\show.html.twig");
    }
}
