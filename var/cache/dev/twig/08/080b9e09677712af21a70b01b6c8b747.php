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
class __TwigTemplate_94817dd0d993641a079fabcf6cf0d5aa extends Template
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
    <style>
        .dashboard-card { transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out; height: 100%; }
        .dashboard-card:hover { transform: translateY(-4px); box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.08); }
        .dashboard-card .card-body { display: flex; flex-direction: column; }
        .dashboard-card .mt-auto { margin-top: auto; } /* Push actions to bottom */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
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

        // line 20
        yield "    <div class=\"container mx-auto px-4 py-8 md:py-12 page-content\">

        ";
        // line 23
        yield "        <header class=\"mb-8\">
            <h1 class=\"text-3xl font-bold text-gray-900 mb-1\">Tableau de Bord Partenaire</h1>
            <p class=\"text-lg text-gray-600\">Bienvenue, ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["partenaire"] ?? null), "prenom", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "Partenaire")) : ("Partenaire")), "html", null, true);
        yield " ! Gérez vos ressources.</p>
            ";
        // line 26
        yield from $this->loadTemplate("partials/_flash_messages.html.twig", "partenaire/dashboard/index.html.twig", 26)->unwrap()->yield($context);
        // line 27
        yield "        </header>

        ";
        // line 30
        yield "        <div class=\"row g-4 mb-6\">
            <div class=\"col-md-4\">
                <div class=\"card shadow-sm border-start border-primary border-4 h-100\">
                    <div class=\"card-body d-flex align-items-center\">
                        <i class=\"fas fa-motorcycle fa-3x text-primary me-4\"></i>
                        <div>
                            <div class=\"text-muted text-xs text-uppercase mb-1\">Mes Trottinettes</div>
                            <div class=\"h4 mb-0 font-bold text-gray-800\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("trottinettes_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["trottinettes_count"]) || array_key_exists("trottinettes_count", $context) ? $context["trottinettes_count"] : (function () { throw new RuntimeError('Variable "trottinettes_count" does not exist.', 37, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 43
        yield "            ";
        // line 44
        yield "        </div>


        ";
        // line 48
        yield "        <h2 class=\"text-2xl font-semibold text-gray-800 mb-4\">Actions Rapides</h2>
        <div class=\"row g-4\">

            ";
        // line 52
        yield "            <div class=\"col-md-6 col-lg-4 d-flex\">
                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_trottinette_index");
        yield "\" class=\"dashboard-card-link w-100\"> ";
        // line 54
        yield "                    <div class=\"card shadow-sm dashboard-card\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-motorcycle fa-3x text-primary mb-3\"></i>
                            <h5 class=\"card-title\">Gérer mes Trottinettes</h5>
                            <p class=\"card-text text-sm text-gray-600\">Voir, ajouter ou modifier les trottinettes de votre flotte.</p>
                            <div class=\"mt-auto\">
                                <span class=\"button button-secondary button-small\">Gérer</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            ";
        // line 68
        yield "            <div class=\"col-md-6 col-lg-4 d-flex\">
                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_event_index");
        yield "\" class=\"dashboard-card-link w-100\"> ";
        // line 70
        yield "                    <div class=\"card shadow-sm dashboard-card\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-calendar-alt fa-3x text-info mb-3\"></i>
                            <h5 class=\"card-title\">Gérer mes Événements</h5>
                            <p class=\"card-text text-sm text-gray-600\">Créer de nouveaux événements ou voir les participations.</p>
                            <div class=\"mt-auto\">
                                <span class=\"button button-secondary button-small\">Gérer</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            ";
        // line 84
        yield "            <div class=\"col-md-6 col-lg-4 d-flex\">
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_maintenance_index");
        yield "\" class=\"dashboard-card-link w-100\"> ";
        // line 86
        yield "                    <div class=\"card shadow-sm dashboard-card\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-tools fa-3x text-warning mb-3\"></i>
                            <h5 class=\"card-title\">Suivi Maintenance</h5>
                            <p class=\"card-text text-sm text-gray-600\">Consulter l'état des maintenances pour vos trottinettes.</p>
                            <div class=\"mt-auto\">
                                <span class=\"button button-secondary button-small\">Consulter</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            ";
        // line 100
        yield "            <div class=\"col-md-6 col-lg-4 d-flex\">
                <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profile_view");
        yield "\" class=\"dashboard-card-link w-100\"> ";
        // line 102
        yield "                    <div class=\"card shadow-sm dashboard-card\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-user-edit fa-3x text-secondary mb-3\"></i>
                            <h5 class=\"card-title\">Mon Profil</h5>
                            <p class=\"card-text text-sm text-gray-600\">Modifier vos informations personnelles.</p>
                            <div class=\"mt-auto\">
                                <span class=\"button button-secondary button-small\">Modifier</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div> ";
        // line 116
        yield "    </div>
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
        return array (  268 => 116,  253 => 102,  250 => 101,  247 => 100,  232 => 86,  229 => 85,  226 => 84,  211 => 70,  208 => 69,  205 => 68,  190 => 54,  187 => 53,  184 => 52,  179 => 48,  174 => 44,  172 => 43,  164 => 37,  155 => 30,  151 => 27,  149 => 26,  145 => 25,  141 => 23,  137 => 20,  124 => 19,  106 => 9,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/partenaire/dashboard/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord Partenaire - TrottiCare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Optional: Add FontAwesome if not globally included #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <style>
        .dashboard-card { transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out; height: 100%; }
        .dashboard-card:hover { transform: translateY(-4px); box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.08); }
        .dashboard-card .card-body { display: flex; flex-direction: column; }
        .dashboard-card .mt-auto { margin-top: auto; } /* Push actions to bottom */
    </style>
{% endblock %}


{% block body %}
    <div class=\"container mx-auto px-4 py-8 md:py-12 page-content\">

        {# ==== HEADER ==== #}
        <header class=\"mb-8\">
            <h1 class=\"text-3xl font-bold text-gray-900 mb-1\">Tableau de Bord Partenaire</h1>
            <p class=\"text-lg text-gray-600\">Bienvenue, {{ partenaire.prenom|default('Partenaire') }} ! Gérez vos ressources.</p>
            {% include 'partials/_flash_messages.html.twig' %}
        </header>

        {# ==== STATS ==== #}
        <div class=\"row g-4 mb-6\">
            <div class=\"col-md-4\">
                <div class=\"card shadow-sm border-start border-primary border-4 h-100\">
                    <div class=\"card-body d-flex align-items-center\">
                        <i class=\"fas fa-motorcycle fa-3x text-primary me-4\"></i>
                        <div>
                            <div class=\"text-muted text-xs text-uppercase mb-1\">Mes Trottinettes</div>
                            <div class=\"h4 mb-0 font-bold text-gray-800\">{{ trottinettes_count|default('0') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            {# Add more relevant stats like 'Events Organized' or 'Active Maintenances' #}
            {# <div class=\"col-md-4\">...</div> #}
        </div>


        {# ==== QUICK ACTIONS ==== #}
        <h2 class=\"text-2xl font-semibold text-gray-800 mb-4\">Actions Rapides</h2>
        <div class=\"row g-4\">

            {# Manage Scooters Card #}
            <div class=\"col-md-6 col-lg-4 d-flex\">
                <a href=\"{{ path('partenaire_trottinette_index') }}\" class=\"dashboard-card-link w-100\"> {# Adjust route #}
                    <div class=\"card shadow-sm dashboard-card\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-motorcycle fa-3x text-primary mb-3\"></i>
                            <h5 class=\"card-title\">Gérer mes Trottinettes</h5>
                            <p class=\"card-text text-sm text-gray-600\">Voir, ajouter ou modifier les trottinettes de votre flotte.</p>
                            <div class=\"mt-auto\">
                                <span class=\"button button-secondary button-small\">Gérer</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {# Manage Events Card #}
            <div class=\"col-md-6 col-lg-4 d-flex\">
                <a href=\"{{ path('partenaire_event_index') }}\" class=\"dashboard-card-link w-100\"> {# Adjust route #}
                    <div class=\"card shadow-sm dashboard-card\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-calendar-alt fa-3x text-info mb-3\"></i>
                            <h5 class=\"card-title\">Gérer mes Événements</h5>
                            <p class=\"card-text text-sm text-gray-600\">Créer de nouveaux événements ou voir les participations.</p>
                            <div class=\"mt-auto\">
                                <span class=\"button button-secondary button-small\">Gérer</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {# Maintenance Card #}
            <div class=\"col-md-6 col-lg-4 d-flex\">
                <a href=\"{{ path('partenaire_maintenance_index') }}\" class=\"dashboard-card-link w-100\"> {# Adjust route #}
                    <div class=\"card shadow-sm dashboard-card\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-tools fa-3x text-warning mb-3\"></i>
                            <h5 class=\"card-title\">Suivi Maintenance</h5>
                            <p class=\"card-text text-sm text-gray-600\">Consulter l'état des maintenances pour vos trottinettes.</p>
                            <div class=\"mt-auto\">
                                <span class=\"button button-secondary button-small\">Consulter</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {# Link to Profile #}
            <div class=\"col-md-6 col-lg-4 d-flex\">
                <a href=\"{{ path('app_client_profile_view') }}\" class=\"dashboard-card-link w-100\"> {# Partners likely share client profile view #}
                    <div class=\"card shadow-sm dashboard-card\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-user-edit fa-3x text-secondary mb-3\"></i>
                            <h5 class=\"card-title\">Mon Profil</h5>
                            <p class=\"card-text text-sm text-gray-600\">Modifier vos informations personnelles.</p>
                            <div class=\"mt-auto\">
                                <span class=\"button button-secondary button-small\">Modifier</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div> {# End row #}
    </div>
{% endblock %}", "partenaire/dashboard/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/partenaire/dashboard/index.html.twig");
    }
}
