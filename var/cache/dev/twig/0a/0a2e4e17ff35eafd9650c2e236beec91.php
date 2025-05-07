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

/* client/event/participation_confirmation.html.twig */
class __TwigTemplate_8b4c1bb9755deb6e58f0531387f75fa8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event/participation_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event/participation_confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/event/participation_confirmation.html.twig", 2);
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

        yield "Inscription Confirmée - ";
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
        <div class=\"container mx-auto max-w-3xl bg-white rounded-lg shadow-xl p-6 md:p-10 border border-gray-200 text-center\">

            ";
        // line 11
        yield "            <div class=\"mb-8\">
                ";
        // line 12
        yield from $this->loadTemplate("partials/_flash_messages.html.twig", "client/event/participation_confirmation.html.twig", 12)->unwrap()->yield($context);
        yield " ";
        // line 13
        yield "                <h1 class=\"text-3xl font-bold text-green-600 mb-2\">
                    <i class=\"bi bi-check2-circle me-2\"></i> Inscription Réussie !
                </h1>
                <p class=\"text-lg text-gray-700\">Vous êtes bien inscrit(e) à l'événement :</p>
                <p class=\"text-xl font-semibold text-blue-700 mt-1\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
            </div>

            ";
        // line 21
        yield "            <div class=\"mb-8 border-t border-b border-gray-200 py-6\">
                <h2 class=\"text-xl font-semibold text-gray-800 mb-3\">Votre QR Code d'Accès</h2>
                <p class=\"text-sm text-gray-600 mb-4\">Scannez ce code pour afficher les détails de votre inscription et de l'événement.</p>
                ";
        // line 24
        if ((isset($context["qrCodeDataUri"]) || array_key_exists("qrCodeDataUri", $context) ? $context["qrCodeDataUri"] : (function () { throw new RuntimeError('Variable "qrCodeDataUri" does not exist.', 24, $this->source); })())) {
            // line 25
            yield "                    <div class=\"flex justify-center\">
                        <img src=\"";
            // line 26
            yield (isset($context["qrCodeDataUri"]) || array_key_exists("qrCodeDataUri", $context) ? $context["qrCodeDataUri"] : (function () { throw new RuntimeError('Variable "qrCodeDataUri" does not exist.', 26, $this->source); })());
            yield "\" alt=\"QR Code Participation\" class=\"border p-1 bg-white shadow-sm\">
                    </div>
                ";
        } else {
            // line 29
            yield "                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                        <strong class=\"font-bold\">Erreur:</strong>
                        <span class=\"block sm:inline\"> Impossible de générer le QR code.</span>
                    </div>
                ";
        }
        // line 34
        yield "            </div>

            ";
        // line 37
        yield "            <div class=\"mb-8 text-left\">
                <h3 class=\"text-lg font-semibold text-gray-700 mb-3\"><i class=\"bi bi-info-circle me-2\"></i>Rappel des Informations</h3>
                <dl class=\"text-sm space-y-2\">
                    <div class=\"flex\">
                        <dt class=\"w-24 font-medium text-gray-500 shrink-0\">Date:</dt>
                        <dd class=\"text-gray-800\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "dateDebut", [], "any", false, false, false, 42), "d/m/Y H:i"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "dateFin", [], "any", false, false, false, 42), "H:i"), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"flex\">
                        <dt class=\"w-24 font-medium text-gray-500 shrink-0\">Lieu:</dt>
                        <dd class=\"text-gray-800\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 46, $this->source); })()), "state", [], "any", false, false, false, 46), "label", [], "any", false, false, false, 46), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"flex\">
                        <dt class=\"w-24 font-medium text-gray-500 shrink-0\">N° Billet:</dt> ";
        // line 50
        yield "                        <dd class=\"text-gray-800 font-mono\">EVT-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "</dd>
                    </div>
                </dl>
            </div>

            ";
        // line 56
        yield "            <div class=\"flex flex-col sm:flex-row justify-center items-center gap-3\">
                <a href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_download_ticket", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\" target=\"_blank\" class=\"button button-primary\">
                    <i class=\"bi bi-download me-1\"></i> Télécharger le Billet PDF ";
        // line 59
        yield "                </a>
                <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\" class=\"button button-outline-secondary\">
                    <i class=\"bi bi-calendar-event me-1\"></i> Voir l'Événement
                </a>
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index");
        yield "\" class=\"button button-outline-secondary\">
                    <i class=\"bi bi-list-ul me-1\"></i> Tous les événements
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
        return "client/event/participation_confirmation.html.twig";
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
        return array (  200 => 63,  194 => 60,  191 => 59,  187 => 57,  184 => 56,  173 => 50,  167 => 46,  158 => 42,  151 => 37,  147 => 34,  140 => 29,  134 => 26,  131 => 25,  129 => 24,  124 => 21,  118 => 17,  112 => 13,  109 => 12,  106 => 11,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/client/event/participation_confirmation.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Inscription Confirmée - {{ event.titre }}{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-8\">
        <div class=\"container mx-auto max-w-3xl bg-white rounded-lg shadow-xl p-6 md:p-10 border border-gray-200 text-center\">

            {# Success Message #}
            <div class=\"mb-8\">
                {% include 'partials/_flash_messages.html.twig' %} {# Display flash messages from participate action #}
                <h1 class=\"text-3xl font-bold text-green-600 mb-2\">
                    <i class=\"bi bi-check2-circle me-2\"></i> Inscription Réussie !
                </h1>
                <p class=\"text-lg text-gray-700\">Vous êtes bien inscrit(e) à l'événement :</p>
                <p class=\"text-xl font-semibold text-blue-700 mt-1\">{{ event.titre }}</p>
            </div>

            {# QR Code Section #}
            <div class=\"mb-8 border-t border-b border-gray-200 py-6\">
                <h2 class=\"text-xl font-semibold text-gray-800 mb-3\">Votre QR Code d'Accès</h2>
                <p class=\"text-sm text-gray-600 mb-4\">Scannez ce code pour afficher les détails de votre inscription et de l'événement.</p>
                {% if qrCodeDataUri %}
                    <div class=\"flex justify-center\">
                        <img src=\"{{ qrCodeDataUri|raw }}\" alt=\"QR Code Participation\" class=\"border p-1 bg-white shadow-sm\">
                    </div>
                {% else %}
                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                        <strong class=\"font-bold\">Erreur:</strong>
                        <span class=\"block sm:inline\"> Impossible de générer le QR code.</span>
                    </div>
                {% endif %}
            </div>

            {# Event Details Summary #}
            <div class=\"mb-8 text-left\">
                <h3 class=\"text-lg font-semibold text-gray-700 mb-3\"><i class=\"bi bi-info-circle me-2\"></i>Rappel des Informations</h3>
                <dl class=\"text-sm space-y-2\">
                    <div class=\"flex\">
                        <dt class=\"w-24 font-medium text-gray-500 shrink-0\">Date:</dt>
                        <dd class=\"text-gray-800\">{{ event.dateDebut|date('d/m/Y H:i') }} - {{ event.dateFin|date('H:i') }}</dd>
                    </div>
                    <div class=\"flex\">
                        <dt class=\"w-24 font-medium text-gray-500 shrink-0\">Lieu:</dt>
                        <dd class=\"text-gray-800\">{{ event.state.label }}</dd>
                    </div>
                    <div class=\"flex\">
                        <dt class=\"w-24 font-medium text-gray-500 shrink-0\">N° Billet:</dt> {# Use participation ID #}
                        <dd class=\"text-gray-800 font-mono\">EVT-{{ event.id }}-{{ participation.id }}</dd>
                    </div>
                </dl>
            </div>

            {# Action Buttons #}
            <div class=\"flex flex-col sm:flex-row justify-center items-center gap-3\">
                <a href=\"{{ path('public_event_download_ticket', {'id': event.id}) }}\" target=\"_blank\" class=\"button button-primary\">
                    <i class=\"bi bi-download me-1\"></i> Télécharger le Billet PDF {# Link to existing PDF download #}
                </a>
                <a href=\"{{ path('client_event_show', {'id': event.id}) }}\" class=\"button button-outline-secondary\">
                    <i class=\"bi bi-calendar-event me-1\"></i> Voir l'Événement
                </a>
                <a href=\"{{ path('client_event_index') }}\" class=\"button button-outline-secondary\">
                    <i class=\"bi bi-list-ul me-1\"></i> Tous les événements
                </a>
            </div>

        </div>
    </div>
{% endblock %}", "client/event/participation_confirmation.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/client/event/participation_confirmation.html.twig");
    }
}
