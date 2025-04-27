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
class __TwigTemplate_5cd659c9046484bbdadfe5752de0f2d5 extends Template
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
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Événements</a></li>
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
                                            <h6 class=\"mb-1\">Date de début</h6>
                                            <p class=\"mb-0\">";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "dateDebut", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "dateDebut", [], "any", false, false, false, 26), "d M Y à H:i"), "html", null, true)) : ("Non définie"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-clock text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">Date de fin</h6>
                                            <p class=\"mb-0\">";
        // line 35
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "dateFin", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "dateFin", [], "any", false, false, false, 35), "d M Y à H:i"), "html", null, true)) : ("Non définie"));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-map-marker-alt text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">Lieu</h6>
                                            <p class=\"mb-0\">";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "lieu", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "lieu", [], "any", false, false, false, 44), "getValue", [], "method", false, false, false, 44), "html", null, true)) : (""));
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-battery-full text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">Autonomie minimale requise</h6>
                                            <p class=\"mb-0\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 53, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 53), "html", null, true);
        yield " km</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"description mb-4\">
                            <h5 class=\"mb-3\">Description</h5>
                            <p class=\"mb-0\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), "html", null, true);
        yield "</p>
                        </div>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                            </a>
                            <div>
                                <a href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        yield "\" class=\"btn btn-primary me-2\">
                                    <i class=\"fas fa-edit me-2\"></i>Modifier
                                </a>
                                <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"btn btn-info\">
                                    <i class=\"fas fa-users me-2\"></i>Voir les participants
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title mb-4\">Actions rapides</h5>
                        ";
        // line 86
        yield Twig\Extension\CoreExtension::include($this->env, $context, "event/_delete_form.html.twig");
        yield "
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
        return array (  216 => 86,  200 => 73,  194 => 70,  187 => 66,  180 => 62,  168 => 53,  156 => 44,  144 => 35,  132 => 26,  121 => 18,  110 => 10,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ event.titre }} - Détails de l'événement{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_event_index') }}\">Événements</a></li>
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
                                            <h6 class=\"mb-1\">Date de début</h6>
                                            <p class=\"mb-0\">{{ event.dateDebut ? event.dateDebut|date('d M Y \\à H:i') : 'Non définie' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-clock text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">Date de fin</h6>
                                            <p class=\"mb-0\">{{ event.dateFin ? event.dateFin|date('d M Y \\à H:i') : 'Non définie' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-map-marker-alt text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">Lieu</h6>
                                            <p class=\"mb-0\">{{ event.lieu ? event.lieu.getValue() : '' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-battery-full text-primary fa-2x me-3\"></i>
                                        <div>
                                            <h6 class=\"mb-1\">Autonomie minimale requise</h6>
                                            <p class=\"mb-0\">{{ event.trottinetteMinAutonomie }} km</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"description mb-4\">
                            <h5 class=\"mb-3\">Description</h5>
                            <p class=\"mb-0\">{{ event.description }}</p>
                        </div>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                            </a>
                            <div>
                                <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"btn btn-primary me-2\">
                                    <i class=\"fas fa-edit me-2\"></i>Modifier
                                </a>
                                <a href=\"{{ path('app_event_participants', {'id': event.id}) }}\" class=\"btn btn-info\">
                                    <i class=\"fas fa-users me-2\"></i>Voir les participants
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title mb-4\">Actions rapides</h5>
                        {{ include('event/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "event/show.html.twig", "C:\\Users\\Baha Ayadi\\Desktop\\Trotticare Events\\Events\\templates\\event\\show.html.twig");
    }
}
