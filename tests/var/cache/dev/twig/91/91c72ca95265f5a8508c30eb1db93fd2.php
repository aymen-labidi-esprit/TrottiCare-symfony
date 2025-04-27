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

/* partenaire/dashboard/index.html.twig */
class __TwigTemplate_e17c3db835674553f2ea33c5b4461072 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partenaire/dashboard/index.html.twig", 2);
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

        yield "Tableau de Bord Partenaire - TrottiCare";
        
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
        yield "    <div class=\"container mt-4\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h1 class=\"display-6\">Tableau de Bord Partenaire</h1>
                ";
        // line 12
        yield "                <p class=\"lead\">Bienvenue, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["partenaire"] ?? null), "prenom", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), "Partenaire")) : ("Partenaire")), "html", null, true);
        yield " ! Gérez vos trottinettes et événements.</p>
            </div>
        </div>

        ";
        // line 17
        yield "        <div class=\"row gy-3\"> ";
        // line 18
        yield "            ";
        // line 19
        yield "            <div class=\"col-md-6\">
                <div class=\"card h-100\"> ";
        // line 21
        yield "                    <div class=\"card-body d-flex flex-column\"> ";
        // line 22
        yield "                        <h5 class=\"card-title\"><i class=\"bi bi-scooter me-2\"></i>Gestion des Trottinettes</h5>
                        <p class=\"card-text\">Ajoutez de nouvelles trottinettes à votre flotte ou consultez votre inventaire.</p>
                        <div class=\"mt-auto\"> ";
        // line 25
        yield "                            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_new");
        yield "\" class=\"btn btn-primary\">
                                <i class=\"bi bi-plus-circle-fill me-1\"></i> Ajouter une Trottinette
                            </a>
                            ";
        // line 29
        yield "                            ";
        // line 32
        yield "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 38
        yield "            <div class=\"col-md-6\">
                <div class=\"card h-100\">
                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\"><i class=\"bi bi-calendar-event me-2\"></i>Gestion des Événements</h5>
                        <p class=\"card-text\">Créez et gérez les événements que vous organisez ou auxquels vous participez.</p>
                        <div class=\"mt-auto\">
                            <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        yield "\" class=\"btn btn-success\">
                                <i class=\"bi bi-calendar-plus-fill me-1\"></i> Créer un Événement
                            </a>
                            ";
        // line 48
        yield "                            ";
        // line 51
        yield "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 57
        yield "            ";
        // line 65
        yield "            <i class=\"bi bi-list-check me-1\"></i> Voir la Maintenance
            </a>
        </div>
    </div>



    </div>
    </div>
    </div>

    </div> ";
        // line 77
        yield "
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
        return "partenaire/dashboard/index.html.twig";
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
        return array (  181 => 77,  168 => 65,  166 => 57,  159 => 51,  157 => 48,  151 => 44,  143 => 38,  136 => 32,  134 => 29,  127 => 25,  123 => 22,  121 => 21,  118 => 19,  116 => 18,  114 => 17,  106 => 12,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/partenaire/dashboard/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord Partenaire - TrottiCare{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h1 class=\"display-6\">Tableau de Bord Partenaire</h1>
                {# Use partner's name if available #}
                <p class=\"lead\">Bienvenue, {{ partenaire.prenom|default('Partenaire') }} ! Gérez vos trottinettes et événements.</p>
            </div>
        </div>

        {# Quick Actions Section #}
        <div class=\"row gy-3\"> {# gy-3 adds vertical gap between columns on small screens #}
            {# Trottinette Management Card #}
            <div class=\"col-md-6\">
                <div class=\"card h-100\"> {# h-100 makes cards in the same row equal height #}
                    <div class=\"card-body d-flex flex-column\"> {# flex-column + mt-auto on button container #}
                        <h5 class=\"card-title\"><i class=\"bi bi-scooter me-2\"></i>Gestion des Trottinettes</h5>
                        <p class=\"card-text\">Ajoutez de nouvelles trottinettes à votre flotte ou consultez votre inventaire.</p>
                        <div class=\"mt-auto\"> {# Pushes buttons to the bottom #}
                            <a href=\"{{ path('app_trottinette_new') }}\" class=\"btn btn-primary\">
                                <i class=\"bi bi-plus-circle-fill me-1\"></i> Ajouter une Trottinette
                            </a>
                            {# Optional: Add link to view partner's trottinettes when the route exists #}
                            {# <a href=\"{{ path('partenaire_trottinette_index') }}\" class=\"btn btn-outline-secondary ms-2\">
                            <i class=\"bi bi-list-ul me-1\"></i> Voir mes Trottinettes
                        </a> #}
                        </div>
                    </div>
                </div>
            </div>

            {# Event Management Card #}
            <div class=\"col-md-6\">
                <div class=\"card h-100\">
                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\"><i class=\"bi bi-calendar-event me-2\"></i>Gestion des Événements</h5>
                        <p class=\"card-text\">Créez et gérez les événements que vous organisez ou auxquels vous participez.</p>
                        <div class=\"mt-auto\">
                            <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-success\">
                                <i class=\"bi bi-calendar-plus-fill me-1\"></i> Créer un Événement
                            </a>
                            {# Optional: Add link to view partner's events when the route exists #}
                            {# <a href=\"{{ path('partenaire_event_index') }}\" class=\"btn btn-outline-secondary ms-2\">
                            <i class=\"bi bi-calendar-event me-1\"></i> Voir mes Événements
                         </a> #}
                        </div>
                    </div>
                </div>
            </div>

            {# Add more cards/sections as needed - e.g., Maintenance Overview #}
            {#
            <div class=\"col-md-6 mt-3\">
                <div class=\"card h-100\">
                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\"><i class=\"bi bi-tools me-2\"></i>Maintenance</h5>
                        <p class=\"card-text\">Consultez les demandes de maintenance pour vos trottinettes.</p>
                         <div class=\"mt-auto\">
                             <a href=\"{{ path('partenaire_maintenance_index') }}\" class=\"btn btn-warning\"> {# Assuming this route exists #}
            <i class=\"bi bi-list-check me-1\"></i> Voir la Maintenance
            </a>
        </div>
    </div>



    </div>
    </div>
    </div>

    </div> {# End Quick Actions Row #}

    </div>
{% endblock %}", "partenaire/dashboard/index.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\partenaire\\dashboard\\index.html.twig");
    }
}
