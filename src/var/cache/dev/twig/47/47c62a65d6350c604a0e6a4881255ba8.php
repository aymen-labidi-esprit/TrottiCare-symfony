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
class __TwigTemplate_d22ed028b833c802a574645435f3c897 extends Template
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
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de début"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "dateDebut", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "dateDebut", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true)) : ("Non défini"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-hourglass-end text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date de fin"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 35
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "dateFin", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "dateFin", [], "any", false, false, false, 35), "d/m/Y H:i"), "html", null, true)) : ("Non défini"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-map-marker-alt text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lieu"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "lieu", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getEnumValue(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "lieu", [], "any", false, false, false, 44)), "html", null, true)) : ("Non défini"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-battery-three-quarters text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Autonomie minimale de la trottinette"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 53
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "trottinetteMinAutonomie", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 53, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 53)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 53, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 53), "html", null, true)) : ("Not specified"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-users text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Participants"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 62, $this->source); })()), "participations", [], "any", false, false, false, 62)), "html", null, true);
        yield " inscrits</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-tag text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statut"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0\">
                                                ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 72, $this->source); })()), "statut", [], "any", false, false, false, 72) == "A_VENIR")) {
            // line 73
            yield "                                                    <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("À venir"), "html", null, true);
            yield "</span>
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 74, $this->source); })()), "statut", [], "any", false, false, false, 74) == "EN_COURS")) {
            // line 75
            yield "                                                    <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("En cours"), "html", null, true);
            yield "</span>
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 76
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "statut", [], "any", false, false, false, 76) == "TERMINE")) {
            // line 77
            yield "                                                    <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Terminé"), "html", null, true);
            yield "</span>
                                                ";
        } else {
            // line 79
            yield "                                                    <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annulé"), "html", null, true);
            yield "</span>
                                                ";
        }
        // line 81
        yield "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"event-description\">
                            <h4 class=\"mb-3\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description de l'événement"), "html", null, true);
        yield "</h4>
                            <p class=\"lead\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 90, $this->source); })()), "description", [], "any", false, false, false, 90), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"card sticky-top\" style=\"top: 2rem;\">
                    <div class=\"card-body\">
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "flashes", ["success"], "method", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 100
            yield "                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", ["error"], "method", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 106
            yield "                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "
                        <h5 class=\"card-title mb-4\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Join This Event"), "html", null, true);
        yield "</h5>

                        ";
        // line 114
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 114, $this->source); })()), "statut", [], "any", false, false, false, 114) == "A_VENIR")) {
            // line 115
            yield "                            ";
            $context["isInscrit"] = false;
            // line 116
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 116, $this->source); })()), "participations", [], "any", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 117
                yield "                                ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "utilisateur", [], "any", false, false, false, 117), "email", [], "any", false, false, false, 117) == "test@example.com") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117) == "INSCRIT"))) {
                    // line 118
                    yield "                                    ";
                    $context["isInscrit"] = true;
                    // line 119
                    yield "                                ";
                }
                // line 120
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "
                            <form method=\"post\" action=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("participate" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg w-100 mb-2\">
                                    <i class=\"fas fa-user-plus me-2\"></i> Join This Event
                                </button>
                            </form>

                            ";
            // line 129
            if ((isset($context["isInscrit"]) || array_key_exists("isInscrit", $context) ? $context["isInscrit"] : (function () { throw new RuntimeError('Variable "isInscrit" does not exist.', 129, $this->source); })())) {
                // line 130
                yield "                                <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-outline-danger btn-lg w-100 mb-3\">
                                        <i class=\"fas fa-user-minus me-2\"></i> Annuler la participation
                                    </button>
                                </form>
                            ";
            }
            // line 137
            yield "                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 137, $this->source); })()), "statut", [], "any", false, false, false, 137) == "EN_COURS")) {
            // line 138
            yield "                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-info-circle me-2\"></i>";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This event is currently in progress!"), "html", null, true);
            yield "
                            </div>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 141
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 141, $this->source); })()), "statut", [], "any", false, false, false, 141) == "TERMINE")) {
            // line 142
            yield "                            <div class=\"alert alert-secondary\">
                                <i class=\"fas fa-info-circle me-2\"></i>";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This event has already ended."), "html", null, true);
            yield "
                            </div>
                        ";
        } else {
            // line 146
            yield "                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This event has been cancelled."), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 150
        yield "
                        <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_events");
        yield "\" class=\"btn btn-outline-secondary w-100\">
                            <i class=\"fas fa-arrow-left me-2\"></i>";
        // line 152
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
        return array (  404 => 152,  400 => 151,  397 => 150,  391 => 147,  388 => 146,  382 => 143,  379 => 142,  377 => 141,  372 => 139,  369 => 138,  366 => 137,  357 => 131,  352 => 130,  350 => 129,  341 => 123,  337 => 122,  334 => 121,  328 => 120,  325 => 119,  322 => 118,  319 => 117,  314 => 116,  311 => 115,  309 => 114,  304 => 112,  301 => 111,  291 => 107,  288 => 106,  283 => 105,  273 => 101,  270 => 100,  266 => 99,  254 => 90,  250 => 89,  240 => 81,  234 => 79,  228 => 77,  226 => 76,  221 => 75,  219 => 74,  214 => 73,  212 => 72,  207 => 70,  196 => 62,  192 => 61,  181 => 53,  177 => 52,  166 => 44,  162 => 43,  151 => 35,  147 => 34,  136 => 26,  132 => 25,  122 => 18,  111 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                            {% set isInscrit = false %}
                            {% for p in event.participations %}
                                {% if p.utilisateur.email == 'test@example.com' and p.statut.value == 'INSCRIT' %}
                                    {% set isInscrit = true %}
                                {% endif %}
                            {% endfor %}

                            <form method=\"post\" action=\"{{ path('app_event_participate', {'id': event.id}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('participate' ~ event.id) }}\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg w-100 mb-2\">
                                    <i class=\"fas fa-user-plus me-2\"></i> Join This Event
                                </button>
                            </form>

                            {% if isInscrit %}
                                <form method=\"post\" action=\"{{ path('app_event_cancel', {'id': event.id}) }}\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ event.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-outline-danger btn-lg w-100 mb-3\">
                                        <i class=\"fas fa-user-minus me-2\"></i> Annuler la participation
                                    </button>
                                </form>
                            {% endif %}
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

", "public/event_show.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\Events\\Events\\templates\\public\\event_show.html.twig");
    }
}
