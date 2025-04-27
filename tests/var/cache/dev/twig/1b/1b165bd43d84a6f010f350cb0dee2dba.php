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

/* admin/event_show.html.twig */
class __TwigTemplate_27ab2b47e85c7e1a943be8b056bde2a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/event_show.html.twig", 1);
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

        yield "Détails de l'événement";
        
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
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h1 class=\"display-4\">
                    <i class=\"fas fa-calendar-alt me-3\"></i>
                    ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
        yield "
                </h1>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title mb-0\">Informations de l'événement</h3>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p><strong>Date de début:</strong> ";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23), "Y-m-d H:i"), "html", null, true)) : ("Non défini"));
        yield "</p>
                        <p><strong>Date de fin:</strong> ";
        // line 24
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "dateFin", [], "any", false, false, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "dateFin", [], "any", false, false, false, 24), "Y-m-d H:i"), "html", null, true)) : ("Non défini"));
        yield "</p>
                        <p><strong>Lieu:</strong> ";
        // line 25
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 25, $this->source); })()), "state", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 25, $this->source); })()), "state", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25), "html", null, true)) : ("Non défini"));
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <p><strong>Statut:</strong> 
                            ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "statut", [], "any", false, false, false, 29) == "A_VENIR")) {
            // line 30
            yield "                                <span class=\"badge bg-info\">À venir</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "statut", [], "any", false, false, false, 31) == "EN_COURS")) {
            // line 32
            yield "                                <span class=\"badge bg-success\">En cours</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 33, $this->source); })()), "statut", [], "any", false, false, false, 33) == "TERMINE")) {
            // line 34
            yield "                                <span class=\"badge bg-secondary\">Terminé</span>
                            ";
        } else {
            // line 36
            yield "                                <span class=\"badge bg-danger\">Annulé</span>
                            ";
        }
        // line 38
        yield "                        </p>
                        <p><strong>Nombre de participants:</strong> 
                            <span class=\"badge bg-primary\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 40, $this->source); })()), "participations", [], "any", false, false, false, 40)), "html", null, true);
        yield "</span>
                        </p>
                    </div>
                </div>

                ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45)) {
            // line 46
            yield "                    <div class=\"row mt-3\">
                        <div class=\"col\">
                            <h4>Description</h4>
                            <p>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                ";
        }
        // line 53
        yield "            </div>
            <div class=\"card-footer\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </a>
                    <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-edit me-1\"></i> Modifier
                    </a>
                    <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-users me-1\"></i> Participants
                    </a>
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
        return "admin/event_show.html.twig";
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
        return array (  200 => 62,  194 => 59,  188 => 56,  183 => 53,  176 => 49,  171 => 46,  169 => 45,  161 => 40,  157 => 38,  153 => 36,  149 => 34,  147 => 33,  144 => 32,  142 => 31,  139 => 30,  137 => 29,  130 => 25,  126 => 24,  122 => 23,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'événement{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h1 class=\"display-4\">
                    <i class=\"fas fa-calendar-alt me-3\"></i>
                    {{ event.titre }}
                </h1>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title mb-0\">Informations de l'événement</h3>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p><strong>Date de début:</strong> {{ event.dateDebut ? event.dateDebut|date('Y-m-d H:i') : 'Non défini' }}</p>
                        <p><strong>Date de fin:</strong> {{ event.dateFin ? event.dateFin|date('Y-m-d H:i') : 'Non défini' }}</p>
                        <p><strong>Lieu:</strong> {{ event.state ? event.state.value : 'Non défini' }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <p><strong>Statut:</strong> 
                            {% if event.statut == 'A_VENIR' %}
                                <span class=\"badge bg-info\">À venir</span>
                            {% elseif event.statut == 'EN_COURS' %}
                                <span class=\"badge bg-success\">En cours</span>
                            {% elseif event.statut == 'TERMINE' %}
                                <span class=\"badge bg-secondary\">Terminé</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Annulé</span>
                            {% endif %}
                        </p>
                        <p><strong>Nombre de participants:</strong> 
                            <span class=\"badge bg-primary\">{{ event.participations|length }}</span>
                        </p>
                    </div>
                </div>

                {% if event.description %}
                    <div class=\"row mt-3\">
                        <div class=\"col\">
                            <h4>Description</h4>
                            <p>{{ event.description }}</p>
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"card-footer\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('app_events') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </a>
                    <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-edit me-1\"></i> Modifier
                    </a>
                    <a href=\"{{ path('app_event_participants', {'id': event.id}) }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-users me-1\"></i> Participants
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "admin/event_show.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\admin\\event_show.html.twig");
    }
}
