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

/* public/event_show.html.twig */
class __TwigTemplate_14d284858ce03affc9ce2d9c147d2cf6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/event_show.html.twig", 1);
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
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_events");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Événements"), "html", null, true);
        yield "</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</li>
            </ol>
        </nav>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title display-5 mb-4\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield "</h1>
                        
                        <div class=\"event-meta mb-4\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-clock text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de début"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "dateDebut", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "dateDebut", [], "any", false, false, false, 27), "d/m/Y H:i"), "html", null, true)) : ("Non défini"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-hourglass-end text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de fin"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 36
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 36, $this->source); })()), "dateFin", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 36, $this->source); })()), "dateFin", [], "any", false, false, false, 36), "d/m/Y H:i"), "html", null, true)) : ("Non défini"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-map-marker-alt text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lieu"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "lieu", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getEnumValue(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "lieu", [], "any", false, false, false, 45)), "html", null, true)) : ("Non défini"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-battery-three-quarters text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Autonomie minimale de la trottinette"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "trottinetteMinAutonomie", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 54, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 54, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 54), "html", null, true)) : ("Not specified"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-users text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Participants"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 63, $this->source); })()), "participations", [], "any", false, false, false, 63)), "html", null, true);
        yield " inscrits</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-tag text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statut"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">
                                                ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 73, $this->source); })()), "statut", [], "any", false, false, false, 73) == "A_VENIR")) {
            // line 74
            yield "                                                    <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("À venir"), "html", null, true);
            yield "</span>
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 75
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 75, $this->source); })()), "statut", [], "any", false, false, false, 75) == "EN_COURS")) {
            // line 76
            yield "                                                    <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("En cours"), "html", null, true);
            yield "</span>
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 77, $this->source); })()), "statut", [], "any", false, false, false, 77) == "TERMINE")) {
            // line 78
            yield "                                                    <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Terminé"), "html", null, true);
            yield "</span>
                                                ";
        } else {
            // line 80
            yield "                                                    <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annulé"), "html", null, true);
            yield "</span>
                                                ";
        }
        // line 82
        yield "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"event-description\">
                            <h4 class=\"mb-3\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description de l'événement"), "html", null, true);
        yield "</h4>
                            <p class=\"lead\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 91, $this->source); })()), "description", [], "any", false, false, false, 91), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-lg-4\">
                <div class=\"card sticky-top\" style=\"top: 2rem;\">
                    <div class=\"card-body\">
                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "flashes", ["success"], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 101
            yield "                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "flashes", ["error"], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 107
            yield "                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                        
                        <h5 class=\"card-title mb-4\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Join This Event"), "html", null, true);
        yield "</h5>
                        
                        ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 115, $this->source); })()), "statut", [], "any", false, false, false, 115) == "A_VENIR")) {
            // line 116
            yield "                            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg w-100 mb-3\">
                                    <i class=\"fas fa-user-plus me-2\"></i>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register Now"), "html", null, true);
            yield "
                                </button>
                            </form>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 121
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 121, $this->source); })()), "statut", [], "any", false, false, false, 121) == "EN_COURS")) {
            // line 122
            yield "                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-info-circle me-2\"></i>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This event is currently in progress!"), "html", null, true);
            yield "
                            </div>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 125
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 125, $this->source); })()), "statut", [], "any", false, false, false, 125) == "TERMINE")) {
            // line 126
            yield "                            <div class=\"alert alert-secondary\">
                                <i class=\"fas fa-info-circle me-2\"></i>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This event has already ended."), "html", null, true);
            yield "
                            </div>
                        ";
        } else {
            // line 130
            yield "                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This event has been cancelled."), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 134
        yield "                        
                        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_events");
        yield "\" class=\"btn btn-outline-secondary w-100\">
                            <i class=\"fas fa-arrow-left me-2\"></i>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Events"), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "public/event_show.html.twig";
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
        return array (  361 => 136,  357 => 135,  354 => 134,  348 => 131,  345 => 130,  339 => 127,  336 => 126,  334 => 125,  329 => 123,  326 => 122,  324 => 121,  318 => 118,  312 => 116,  310 => 115,  305 => 113,  302 => 112,  292 => 108,  289 => 107,  284 => 106,  274 => 102,  271 => 101,  267 => 100,  255 => 91,  251 => 90,  241 => 82,  235 => 80,  229 => 78,  227 => 77,  222 => 76,  220 => 75,  215 => 74,  213 => 73,  208 => 71,  197 => 63,  193 => 62,  182 => 54,  178 => 53,  167 => 45,  163 => 44,  152 => 36,  148 => 35,  137 => 27,  133 => 26,  122 => 18,  111 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ event.titre }}{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_public_events') }}\">{{ 'Événements'|trans }}</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ event.titre }}</li>
            </ol>
        </nav>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title display-5 mb-4\">{{ event.titre }}</h1>
                        
                        <div class=\"event-meta mb-4\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-clock text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">{{ 'Date de début'|trans }}</h6>
                                            <p class=\"mb-0\">{{ event.dateDebut ? event.dateDebut|date('d/m/Y H:i') : 'Non défini' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-hourglass-end text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">{{ 'Date de fin'|trans }}</h6>
                                            <p class=\"mb-0\">{{ event.dateFin ? event.dateFin|date('d/m/Y H:i') : 'Non défini' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-map-marker-alt text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">{{ 'Lieu'|trans }}</h6>
                                            <p class=\"mb-0\">{{ event.lieu ? event.lieu|enum_value : 'Non défini' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-battery-three-quarters text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">{{ 'Autonomie minimale de la trottinette'|trans }}</h6>
                                            <p class=\"mb-0\">{{ event.trottinetteMinAutonomie ?? 'Not specified' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-users text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">{{ 'Participants'|trans }}</h6>
                                            <p class=\"mb-0\">{{ event.participations|length }} inscrits</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-tag text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">{{ 'Statut'|trans }}</h6>
                                            <p class=\"mb-0\">
                                                {% if event.statut == 'A_VENIR' %}
                                                    <span class=\"badge bg-info\">{{ 'À venir'|trans }}</span>
                                                {% elseif event.statut == 'EN_COURS' %}
                                                    <span class=\"badge bg-success\">{{ 'En cours'|trans }}</span>
                                                {% elseif event.statut == 'TERMINE' %}
                                                    <span class=\"badge bg-secondary\">{{ 'Terminé'|trans }}</span>
                                                {% else %}
                                                    <span class=\"badge bg-danger\">{{ 'Annulé'|trans }}</span>
                                                {% endif %}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"event-description\">
                            <h4 class=\"mb-3\">{{ 'Description de l\\'événement'|trans }}</h4>
                            <p class=\"lead\">{{ event.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-lg-4\">
                <div class=\"card sticky-top\" style=\"top: 2rem;\">
                    <div class=\"card-body\">
                        {% for message in app.flashes('success') %}
                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                        {% for message in app.flashes('error') %}
                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                        
                        <h5 class=\"card-title mb-4\">{{ 'Join This Event'|trans }}</h5>
                        
                        {% if event.statut == 'A_VENIR' %}
                            <form method=\"post\" action=\"{{ path('app_public_event_participate', {'id': event.id}) }}\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg w-100 mb-3\">
                                    <i class=\"fas fa-user-plus me-2\"></i>{{ 'Register Now'|trans }}
                                </button>
                            </form>
                        {% elseif event.statut == 'EN_COURS' %}
                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-info-circle me-2\"></i>{{ 'This event is currently in progress!'|trans }}
                            </div>
                        {% elseif event.statut == 'TERMINE' %}
                            <div class=\"alert alert-secondary\">
                                <i class=\"fas fa-info-circle me-2\"></i>{{ 'This event has already ended.'|trans }}
                            </div>
                        {% else %}
                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>{{ 'This event has been cancelled.'|trans }}
                            </div>
                        {% endif %}
                        
                        <a href=\"{{ path('app_public_events') }}\" class=\"btn btn-outline-secondary w-100\">
                            <i class=\"fas fa-arrow-left me-2\"></i>{{ 'Back to Events'|trans }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "public/event_show.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\public\\event_show.html.twig");
    }
}
