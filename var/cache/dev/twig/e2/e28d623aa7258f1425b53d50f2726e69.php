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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_a5c4af41f4b8298212438efaa833ea38 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard/index.html.twig", 2);
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

        yield "Tableau de Bord Admin - TrottiCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    <div class=\"container mx-auto px-4 py-8 md:py-12 page-content\"> ";
        // line 14
        yield "        <h1 class=\"text-3xl font-bold text-gray-900 mb-4\">
            <i class=\"fas fa-user-shield me-2\"></i> Tableau de Bord Administrateur
        </h1>
        <p class=\"text-lg text-gray-600 mb-6\">Vue d'ensemble et gestion de la plateforme.</p>

        ";
        // line 20
        yield "        ";
        yield from $this->loadTemplate("partials/_flash_messages.html.twig", "admin/dashboard/index.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "
        ";
        // line 23
        yield "        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8\">
            ";
        // line 25
        yield "            <div class=\"bg-white p-6 rounded-lg shadow-md border border-gray-200 flex items-center justify-between\">
                <div>
                    <div class=\"text-3xl font-bold text-primary\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("user_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["user_count"]) || array_key_exists("user_count", $context) ? $context["user_count"] : (function () { throw new RuntimeError('Variable "user_count" does not exist.', 27, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield "</div>
                    <div class=\"text-sm text-gray-500\">Utilisateurs Inscrits</div>
                </div>
                <i class=\"fas fa-users fa-2x text-primary opacity-50\"></i>
            </div>

            ";
        // line 34
        yield "            <div class=\"bg-white p-6 rounded-lg shadow-md border border-gray-200 flex items-center justify-between\">
                <div>
                    <div class=\"text-3xl font-bold text-green-500\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("trottinette_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["trottinette_count"]) || array_key_exists("trottinette_count", $context) ? $context["trottinette_count"] : (function () { throw new RuntimeError('Variable "trottinette_count" does not exist.', 36, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield "</div>
                    <div class=\"text-sm text-gray-500\">Trottinettes Total</div>
                </div>
                <i class=\"fas fa-motorcycle fa-2x text-green-500 opacity-50\"></i>
            </div>

            ";
        // line 43
        yield "            <div class=\"bg-white p-6 rounded-lg shadow-md border border-gray-200 flex items-center justify-between\">
                <div>
                    <div class=\"text-3xl font-bold text-blue-500\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("reservation_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["reservation_count"]) || array_key_exists("reservation_count", $context) ? $context["reservation_count"] : (function () { throw new RuntimeError('Variable "reservation_count" does not exist.', 45, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield "</div>
                    <div class=\"text-sm text-gray-500\">Réservations Total</div>
                </div>
                <i class=\"fas fa-receipt fa-2x text-blue-500 opacity-50\"></i>
            </div>

            ";
        // line 52
        yield "            <div class=\"bg-white p-6 rounded-lg shadow-md border border-gray-200 flex items-center justify-between\">
                <div>
                    <div class=\"text-3xl font-bold text-purple-600\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 54, $this->source); })())), "html", null, true);
        yield "</div> ";
        // line 55
        yield "                    <div class=\"text-sm text-gray-500\">Événements Total</div>
                </div>
                <i class=\"fas fa-calendar-alt fa-2x text-purple-600 opacity-50\"></i>
            </div>
        </div>

        ";
        // line 62
        yield "        <h2 class=\"text-2xl font-semibold text-gray-800 mb-4\">Gestion Rapide</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
            ";
        // line 65
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
        yield "\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\">
                <i class=\"fas fa-users-cog fa-fw me-3 text-lg\"></i> Gestion des Utilisateurs
            </a>
            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
        yield "\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\">
                <i class=\"fas fa-motorcycle fa-fw me-3 text-lg\"></i> Gestion des Trottinettes
            </a>
            <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_index");
        yield "\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> ";
        // line 72
        yield "                <i class=\"fas fa-map-pin fa-fw me-3 text-lg\"></i> Gestion des Points Relais
            </a>
            <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_index");
        yield "\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> ";
        // line 75
        yield "                <i class=\"fas fa-tools fa-fw me-3 text-lg\"></i> Gestion des Maintenances
            </a>
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> ";
        // line 78
        yield "                <i class=\"fas fa-file-invoice-dollar fa-fw me-3 text-lg\"></i> Gestion des Réservations
            </a>
            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        yield "\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> ";
        // line 81
        yield "                <i class=\"fas fa-bullhorn fa-fw me-3 text-lg\"></i> Gestion des Réclamations
            </a>
            <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> ";
        // line 84
        yield "                <i class=\"fas fa-calendar-check fa-fw me-3 text-lg\"></i> Gestion des Événements
            </a>
            ";
        // line 87
        yield "            ";
        // line 90
        yield "        </div>

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
        return "admin/dashboard/index.html.twig";
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
        return array (  257 => 90,  255 => 87,  251 => 84,  248 => 83,  244 => 81,  241 => 80,  237 => 78,  234 => 77,  230 => 75,  227 => 74,  223 => 72,  220 => 71,  214 => 68,  207 => 65,  203 => 62,  195 => 55,  192 => 54,  188 => 52,  179 => 45,  175 => 43,  166 => 36,  162 => 34,  153 => 27,  149 => 25,  146 => 23,  143 => 21,  140 => 20,  133 => 14,  131 => 13,  118 => 12,  106 => 9,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/dashboard.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord Admin - TrottiCare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Optional: Add FontAwesome if not globally included in base.html.twig #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8 md:py-12 page-content\"> {# Use container class and padding #}
        <h1 class=\"text-3xl font-bold text-gray-900 mb-4\">
            <i class=\"fas fa-user-shield me-2\"></i> Tableau de Bord Administrateur
        </h1>
        <p class=\"text-lg text-gray-600 mb-6\">Vue d'ensemble et gestion de la plateforme.</p>

        {# Display flash messages #}
        {% include 'partials/_flash_messages.html.twig' %}

        {# Key Statistics Cards #}
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8\">
            {# Users Card #}
            <div class=\"bg-white p-6 rounded-lg shadow-md border border-gray-200 flex items-center justify-between\">
                <div>
                    <div class=\"text-3xl font-bold text-primary\">{{ user_count|default('0') }}</div>
                    <div class=\"text-sm text-gray-500\">Utilisateurs Inscrits</div>
                </div>
                <i class=\"fas fa-users fa-2x text-primary opacity-50\"></i>
            </div>

            {# Scooters Card #}
            <div class=\"bg-white p-6 rounded-lg shadow-md border border-gray-200 flex items-center justify-between\">
                <div>
                    <div class=\"text-3xl font-bold text-green-500\">{{ trottinette_count|default('0') }}</div>
                    <div class=\"text-sm text-gray-500\">Trottinettes Total</div>
                </div>
                <i class=\"fas fa-motorcycle fa-2x text-green-500 opacity-50\"></i>
            </div>

            {# Reservations Card #}
            <div class=\"bg-white p-6 rounded-lg shadow-md border border-gray-200 flex items-center justify-between\">
                <div>
                    <div class=\"text-3xl font-bold text-blue-500\">{{ reservation_count|default('0') }}</div>
                    <div class=\"text-sm text-gray-500\">Réservations Total</div>
                </div>
                <i class=\"fas fa-receipt fa-2x text-blue-500 opacity-50\"></i>
            </div>

            {# Events Card #}
            <div class=\"bg-white p-6 rounded-lg shadow-md border border-gray-200 flex items-center justify-between\">
                <div>
                    <div class=\"text-3xl font-bold text-purple-600\">{{ eventData|length }}</div> {# Use eventData passed from controller #}
                    <div class=\"text-sm text-gray-500\">Événements Total</div>
                </div>
                <i class=\"fas fa-calendar-alt fa-2x text-purple-600 opacity-50\"></i>
            </div>
        </div>

        {# Management Links #}
        <h2 class=\"text-2xl font-semibold text-gray-800 mb-4\">Gestion Rapide</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
            {# Use list-group styling equivalent or simple links #}
            <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\">
                <i class=\"fas fa-users-cog fa-fw me-3 text-lg\"></i> Gestion des Utilisateurs
            </a>
            <a href=\"{{ path('admin_trottinette_index') }}\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\">
                <i class=\"fas fa-motorcycle fa-fw me-3 text-lg\"></i> Gestion des Trottinettes
            </a>
            <a href=\"{{ path('point_relais_index') }}\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> {# Corrected route name #}
                <i class=\"fas fa-map-pin fa-fw me-3 text-lg\"></i> Gestion des Points Relais
            </a>
            <a href=\"{{ path('admin_maintenance_index') }}\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> {# Corrected route name #}
                <i class=\"fas fa-tools fa-fw me-3 text-lg\"></i> Gestion des Maintenances
            </a>
            <a href=\"{{ path('reservation_index') }}\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> {# Corrected route name #}
                <i class=\"fas fa-file-invoice-dollar fa-fw me-3 text-lg\"></i> Gestion des Réservations
            </a>
            <a href=\"{{ path('reclamation_index') }}\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> {# Corrected route name #}
                <i class=\"fas fa-bullhorn fa-fw me-3 text-lg\"></i> Gestion des Réclamations
            </a>
            <a href=\"{{ path('app_admin_events') }}\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\"> {# Corrected route name #}
                <i class=\"fas fa-calendar-check fa-fw me-3 text-lg\"></i> Gestion des Événements
            </a>
            {# Add link for Participations if route exists #}
            {# <a href=\"{{ path('admin_participation_index') }}\" class=\"p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-center text-gray-700 hover:text-primary\">
            <i class=\"fas fa-user-check fa-fw me-3 text-lg\"></i> Gestion des Participations
        </a> #}
        </div>

    </div>
{% endblock %}", "admin/dashboard/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/dashboard/index.html.twig");
    }
}
