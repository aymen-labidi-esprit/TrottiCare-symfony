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

/* participation/details.html.twig */
class __TwigTemplate_c38afbc1942a94a42b0272c564bf3861 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "participation/details.html.twig", 2);
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

        yield "Détails Participation - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-8\">
        <div class=\"container mx-auto max-w-2xl bg-white rounded-lg shadow-md p-6 md:p-8 border border-gray-200\">

            <h1 class=\"text-2xl font-bold text-gray-800 mb-4 text-center border-b pb-3\">
                Confirmation d'Inscription
            </h1>

            <div class=\"text-center mb-6\">
                <p class=\"text-lg text-green-700 font-semibold\">
                    <i class=\"bi bi-check-circle-fill me-2\"></i>Inscription Confirmée!
                </p>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6\">
                ";
        // line 22
        yield "                <div class=\"bg-gray-50 p-4 rounded-lg border\">
                    <h2 class=\"text-lg font-semibold text-gray-700 mb-3 border-b pb-2\"><i class=\"bi bi-person-fill me-2\"></i>Participant</h2>
                    <dl class=\"text-sm space-y-1\">
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Nom:</dt>
                            <dd class=\"font-medium text-gray-800\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "fullName", [], "any", false, false, false, 27), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Email:</dt>
                            <dd class=\"font-medium text-gray-800\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">N° Participation:</dt>
                            <dd class=\"font-medium text-gray-800\">#";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Date d'inscription:</dt>
                            <dd class=\"font-medium text-gray-800\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 39, $this->source); })()), "dateInscription", [], "any", false, false, false, 39), "d/m/Y H:i"), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Statut:</dt>
                            <dd>
                                ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 44, $this->source); })()), "statut", [], "any", false, false, false, 44) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) {
            // line 45
            yield "                                    <span class=\"px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Inscrit</span>
                                ";
        } else {
            // line 47
            yield "                                    <span class=\"px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">Annulé</span>
                                ";
        }
        // line 49
        yield "                            </dd>
                        </div>
                    </dl>
                </div>

                ";
        // line 55
        yield "                <div class=\"bg-gray-50 p-4 rounded-lg border\">
                    <h2 class=\"text-lg font-semibold text-gray-700 mb-3 border-b pb-2\"><i class=\"bi bi-calendar-event me-2\"></i>Événement</h2>
                    <dl class=\"text-sm space-y-1\">
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Titre:</dt>
                            <dd class=\"font-medium text-gray-800\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "titre", [], "any", false, false, false, 60), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Début:</dt>
                            <dd class=\"font-medium text-gray-800\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 64, $this->source); })()), "dateDebut", [], "any", false, false, false, 64), "d/m/Y H:i"), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Fin:</dt>
                            <dd class=\"font-medium text-gray-800\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 68, $this->source); })()), "dateFin", [], "any", false, false, false, 68), "d/m/Y H:i"), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Lieu:</dt>
                            <dd class=\"font-medium text-gray-800\">";
        // line 72
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 72, $this->source); })()), "state", [], "any", false, false, false, 72)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 72, $this->source); })()), "state", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72), "html", null, true)) : ("-"));
        yield "</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class=\"text-center mt-6\">
                <a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\" class=\"button button-outline-secondary\">
                    <i class=\"bi bi-arrow-left me-1\"></i> Retour à l'événement
                </a>
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
        return "participation/details.html.twig";
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
        return array (  208 => 79,  198 => 72,  191 => 68,  184 => 64,  177 => 60,  170 => 55,  163 => 49,  159 => 47,  155 => 45,  153 => 44,  145 => 39,  138 => 35,  131 => 31,  124 => 27,  117 => 22,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/participation/details.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails Participation - {{ event.titre }}{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-8\">
        <div class=\"container mx-auto max-w-2xl bg-white rounded-lg shadow-md p-6 md:p-8 border border-gray-200\">

            <h1 class=\"text-2xl font-bold text-gray-800 mb-4 text-center border-b pb-3\">
                Confirmation d'Inscription
            </h1>

            <div class=\"text-center mb-6\">
                <p class=\"text-lg text-green-700 font-semibold\">
                    <i class=\"bi bi-check-circle-fill me-2\"></i>Inscription Confirmée!
                </p>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6\">
                {# Participant Details #}
                <div class=\"bg-gray-50 p-4 rounded-lg border\">
                    <h2 class=\"text-lg font-semibold text-gray-700 mb-3 border-b pb-2\"><i class=\"bi bi-person-fill me-2\"></i>Participant</h2>
                    <dl class=\"text-sm space-y-1\">
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Nom:</dt>
                            <dd class=\"font-medium text-gray-800\">{{ user.fullName }}</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Email:</dt>
                            <dd class=\"font-medium text-gray-800\">{{ user.email }}</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">N° Participation:</dt>
                            <dd class=\"font-medium text-gray-800\">#{{ participation.id }}</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Date d'inscription:</dt>
                            <dd class=\"font-medium text-gray-800\">{{ participation.dateInscription|date('d/m/Y H:i') }}</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Statut:</dt>
                            <dd>
                                {% if participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') %}
                                    <span class=\"px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Inscrit</span>
                                {% else %}
                                    <span class=\"px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">Annulé</span>
                                {% endif %}
                            </dd>
                        </div>
                    </dl>
                </div>

                {# Event Details #}
                <div class=\"bg-gray-50 p-4 rounded-lg border\">
                    <h2 class=\"text-lg font-semibold text-gray-700 mb-3 border-b pb-2\"><i class=\"bi bi-calendar-event me-2\"></i>Événement</h2>
                    <dl class=\"text-sm space-y-1\">
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Titre:</dt>
                            <dd class=\"font-medium text-gray-800\">{{ event.titre }}</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Début:</dt>
                            <dd class=\"font-medium text-gray-800\">{{ event.dateDebut|date('d/m/Y H:i') }}</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Fin:</dt>
                            <dd class=\"font-medium text-gray-800\">{{ event.dateFin|date('d/m/Y H:i') }}</dd>
                        </div>
                        <div class=\"flex justify-between\">
                            <dt class=\"text-gray-500\">Lieu:</dt>
                            <dd class=\"font-medium text-gray-800\">{{ event.state ? event.state.label : '-' }}</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class=\"text-center mt-6\">
                <a href=\"{{ path('client_event_show', {'id': event.id}) }}\" class=\"button button-outline-secondary\">
                    <i class=\"bi bi-arrow-left me-1\"></i> Retour à l'événement
                </a>
            </div>

        </div>
    </div>
{% endblock %}", "participation/details.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/participation/details.html.twig");
    }
}
