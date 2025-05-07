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

/* _header.html.twig */
class __TwigTemplate_08f638fe438f267270afbf3fcb53e60e extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 2
        yield "<header class=\"header\"> ";
        // line 3
        yield "    <div class=\"container header-container\"> ";
        // line 4
        yield "        <div class=\"logo-area\"> ";
        // line 5
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"> ";
        // line 6
        yield "                <span class=\"logo-text\">Trotti-Care</span> ";
        // line 7
        yield "            </a>
        </div>
        <nav class=\"navigation\"> ";
        // line 10
        yield "             <a class=\"nav-link\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a> ";
        // line 11
        yield "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
            yield "\" class=\"nav-link\">Événements</a> ";
            // line 13
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
            yield "\" class=\"nav-link\">Torttinette</a> ";
            // line 14
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_index");
            yield "\" class=\"nav-link\">Maintenance</a> ";
            // line 15
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
            yield "\" class=\"nav-link\">Utilisateurs</a> ";
            // line 16
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_index");
            yield "\" class=\"nav-link\">Point Relais</a> ";
            // line 17
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            yield "\" class=\"nav-link\">Reservation</a> ";
            // line 18
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat");
            yield "\" class=\"nav-link\">Chatbot</a> ";
            // line 19
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_list");
            yield "\" class=\"nav-link\">Reclamation</a> ";
            // line 20
            yield "
            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 22
            yield "                <a href=\"/voicetochat/\" class=\"nav-link\"> chat vocale help</a> ";
            // line 23
            yield "                <a href=\"/voicetochat/tt.html\" class=\"nav-link\"> 3d </a> ";
            // line 24
            yield "                <a href=\"http://127.0.0.1:60261/\" class=\"nav-link\"> 3d representation </a> ";
            // line 25
            yield "
                <a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_event_index");
            yield "\" class=\"nav-link\">Événements</a> ";
            // line 27
            yield "            ";
        }
        // line 28
        yield "
        </nav>
        <div class=\"header-actions\"> ";
        // line 31
        yield "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 32
            yield "                ";
            // line 33
            yield "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 34
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
                yield "\" class=\"button button-secondary\">Admin</a> ";
                // line 35
                yield "
                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
                // line 37
                yield "                     <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_dashboard");
                yield "\" class=\"button button-secondary\">Partenaire</a>
                ";
            } else {
                // line 38
                yield " ";
                // line 39
                yield "                     <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_dashboard");
                yield "\" class=\"button button-secondary\">Mon Espace</a>
                ";
            }
            // line 41
            yield "                 <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"button button-secondary-outline\">Déconnexion</a> ";
            // line 42
            yield "            ";
        } else {
            // line 43
            yield "                ";
            // line 44
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"button button-primary\">Se Connecter</a> ";
            // line 45
            yield "                ";
            // line 46
            yield "                ";
            // line 47
            yield "            ";
        }
        // line 48
        yield "        </div>
    </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_header.html.twig";
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
        return array (  176 => 48,  173 => 47,  171 => 46,  169 => 45,  165 => 44,  163 => 43,  160 => 42,  156 => 41,  150 => 39,  148 => 38,  142 => 37,  138 => 35,  134 => 34,  131 => 33,  129 => 32,  126 => 31,  122 => 28,  119 => 27,  116 => 26,  113 => 25,  111 => 24,  109 => 23,  107 => 22,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  68 => 11,  64 => 10,  60 => 7,  58 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/_header.html.twig #}
<header class=\"header\"> {# Ensure .header styles are in your app.css #}
    <div class=\"container header-container\"> {# Ensure .container, .header-container styles... #}
        <div class=\"logo-area\"> {# Ensure .logo-area styles... #}
            <a href=\"{{ path('app_home') }}\"> {# Adjust route name if needed #}
                <span class=\"logo-text\">Trotti-Care</span> {# Ensure .logo-text styles... #}
            </a>
        </div>
        <nav class=\"navigation\"> {# Ensure .navigation styles... #}
             <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a> {# Ensure .nav-link styles... #}
            {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('app_admin_events') }}\" class=\"nav-link\">Événements</a> {# Style .button, .button-secondary #}
            <a href=\"{{ path('admin_trottinette_index') }}\" class=\"nav-link\">Torttinette</a> {# Style .button, .button-secondary #}
            <a href=\"{{ path('admin_maintenance_index') }}\" class=\"nav-link\">Maintenance</a> {# Style .button, .button-secondary #}
            <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"nav-link\">Utilisateurs</a> {# Style .button, .button-secondary #}
            <a href=\"{{ path('point_relais_index') }}\" class=\"nav-link\">Point Relais</a> {# Style .button, .button-secondary #}
            <a href=\"{{ path('reservation_index') }}\" class=\"nav-link\">Reservation</a> {# Style .button, .button-secondary #}
                <a href=\"{{ path('chat') }}\" class=\"nav-link\">Chatbot</a> {# Style .button, .button-secondary #}
                <a href=\"{{ path('reclamation_list') }}\" class=\"nav-link\">Reclamation</a> {# Style .button, .button-secondary #}

            {% elseif is_granted('ROLE_USER') %}
                <a href=\"/voicetochat/\" class=\"nav-link\"> chat vocale help</a> {# Style .button, .button-secondary #}
                <a href=\"/voicetochat/tt.html\" class=\"nav-link\"> 3d </a> {# Style .button, .button-secondary #}
                <a href=\"http://127.0.0.1:60261/\" class=\"nav-link\"> 3d representation </a> {# Style .button, .button-secondary #}

                <a href=\"{{ path('client_event_index') }}\" class=\"nav-link\">Événements</a> {# Style .button, .button-secondary #}
            {% endif %}

        </nav>
        <div class=\"header-actions\"> {# Wrap buttons if needed for layout #}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {# User is logged in - Show appropriate links based on role #}
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('admin_dashboard') }}\" class=\"button button-secondary\">Admin</a> {# Style .button, .button-secondary #}

                {% elseif is_granted('ROLE_PARTENAIRE') %}
                     <a href=\"{{ path('partenaire_dashboard') }}\" class=\"button button-secondary\">Partenaire</a>
                {% else %} {# Assuming ROLE_USER is the default client role #}
                     <a href=\"{{ path('client_dashboard') }}\" class=\"button button-secondary\">Mon Espace</a>
                {% endif %}
                 <a href=\"{{ path('app_logout') }}\" class=\"button button-secondary-outline\">Déconnexion</a> {# Example style #}
            {% else %}
                {# User is not logged in #}
                <a href=\"{{ path('app_login') }}\" class=\"button button-primary\">Se Connecter</a> {# Style .button, .button-primary #}
                {# Optional registration link #}
                {# <a href=\"{{ path('app_register') }}\" class=\"button button-secondary\">S'inscrire</a> #}
            {% endif %}
        </div>
    </div>
</header>", "_header.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/_header.html.twig");
    }
}
