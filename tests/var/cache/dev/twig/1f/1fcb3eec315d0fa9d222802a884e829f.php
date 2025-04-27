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

/* partials/_nav.html.twig */
class __TwigTemplate_9715e800a60ad85f08a173d3a44bfe52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        // line 2
        yield "<nav class=\"navbar navbar-expand-lg navbar-glass fixed-top py-3\" style=\"font-size: 15px\">

    <div class=\"container\" >
        <a class=\"navbar-brand\" href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <span class=\"brand-highlight\">Trotti</span>Care
        </a>

        <button class=\"navbar-toggler border-0\" type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#mainNav\"
                aria-controls=\"mainNav\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"mainNav\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 22
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22)) && is_string($_v1 = "point_relais") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_index");
            yield "\">
                            Points Relais
                        </a>
                    </li>
                ";
        }
        // line 28
        yield "
                ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 30
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 31
            yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "get", ["_route"], "method", false, false, false, 31)) && is_string($_v3 = "dashboard") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
            yield "\"
                           href=\"/client/dashboard\">
                            Home
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 37
            yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", ["_route"], "method", false, false, false, 37)) && is_string($_v5 = "reservation_") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            yield "\">
                            Mes Réservations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 43
            yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43)) && is_string($_v7 = "reclamation_") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
            yield "\">
                            Mes Réclamations
                        </a>
                    </li>

                ";
        }
        // line 50
        yield "
                ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
            // line 52
            yield "                    ";
            // line 53
            yield "                ";
        }
        // line 54
        yield "
                ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 56
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 57
            yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57)) && is_string($_v9 = "admin_utilisateur") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 58
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
            yield "\">
                            Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 63
            yield (((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "get", ["_route"], "method", false, false, false, 63)) && is_string($_v11 = "app_event") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 64
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
            yield "\">
                            Événements
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 69
            yield (((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "get", ["_route"], "method", false, false, false, 69)) && is_string($_v13 = "app_trottinette") && str_starts_with($_v12, $_v13))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_index");
            yield "\">
                            Trottinettes
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 75
            yield (((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "get", ["_route"], "method", false, false, false, 75)) && is_string($_v15 = "admin_") && str_starts_with($_v14, $_v15))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            yield "\">
                            Réservations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 81
            yield (((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "get", ["_route"], "method", false, false, false, 81)) && is_string($_v17 = "admin_reclamation") && str_starts_with($_v16, $_v17))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
            yield "\">
                            Réclamations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 87
            yield (((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87)) && is_string($_v19 = "app_admin_events") && str_starts_with($_v18, $_v19))) ? ("active") : (""));
            yield "\"
                           href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
            yield "\">
                            Gestion Événements
                        </a>
                    </li>
                ";
        }
        // line 93
        yield "            </ul>

            <ul class=\"navbar-nav ms-auto\">
                ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96)) {
            // line 97
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle d-flex align-items-center gap-2\"
                           href=\"#\"
                           role=\"button\"
                           data-bs-toggle=\"dropdown\"
                           aria-expanded=\"false\">
                            <i class=\"bi bi-person-circle fs-5\"></i>
                            ";
            // line 104
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "prenom", [], "any", false, false, false, 104)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "prenom", [], "any", false, false, false, 104), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "userIdentifier", [], "any", false, false, false, 104), "html", null, true)));
            yield "
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            ";
            // line 107
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 108
                yield "                                <li><a class=\"dropdown-item\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\" style=\"color: white\">Tableau de Bord Admin</a></li>
                            ";
            }
            // line 110
            yield "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
                // line 111
                yield "                                <li><a class=\"dropdown-item\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire_dashboard");
                yield "\" style=\"color: white\">Tableau de Bord Partenaire</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                            ";
            }
            // line 114
            yield "                            <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profile_view");
            yield "\" style=\"color: white\">Profil</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"color: white\">Déconnexion</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 120
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 121
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
                    </li>
                ";
        }
        // line 124
        yield "            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_nav.html.twig";
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
        return array (  282 => 124,  276 => 121,  273 => 120,  266 => 116,  260 => 114,  253 => 111,  250 => 110,  244 => 108,  242 => 107,  236 => 104,  227 => 97,  225 => 96,  220 => 93,  212 => 88,  208 => 87,  200 => 82,  196 => 81,  188 => 76,  184 => 75,  176 => 70,  172 => 69,  164 => 64,  160 => 63,  152 => 58,  148 => 57,  145 => 56,  143 => 55,  140 => 54,  137 => 53,  135 => 52,  133 => 51,  130 => 50,  121 => 44,  117 => 43,  109 => 38,  105 => 37,  96 => 31,  93 => 30,  91 => 29,  88 => 28,  80 => 23,  76 => 22,  73 => 21,  71 => 20,  53 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/partials/_nav.html.twig #}
<nav class=\"navbar navbar-expand-lg navbar-glass fixed-top py-3\" style=\"font-size: 15px\">

    <div class=\"container\" >
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
            <span class=\"brand-highlight\">Trotti</span>Care
        </a>

        <button class=\"navbar-toggler border-0\" type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#mainNav\"
                aria-controls=\"mainNav\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"mainNav\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'point_relais' ? 'active' : '' }}\"
                           href=\"{{ path('point_relais_index') }}\">
                            Points Relais
                        </a>
                    </li>
                {% endif %}

                {% if is_granted('ROLE_USER') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'dashboard' ? 'active' : '' }}\"
                           href=\"/client/dashboard\">
                            Home
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'reservation_' ? 'active' : '' }}\"
                           href=\"{{ path('reservation_index') }}\">
                            Mes Réservations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'reclamation_' ? 'active' : '' }}\"
                           href=\"{{ path('reclamation_index') }}\">
                            Mes Réclamations
                        </a>
                    </li>

                {% endif %}

                {% if is_granted('ROLE_PARTENAIRE') %}
                    {# Partner‐specific links here… #}
                {% endif %}

                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'admin_utilisateur' ? 'active' : '' }}\"
                           href=\"{{ path('admin_utilisateur_index') }}\">
                            Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'app_event' ? 'active' : '' }}\"
                           href=\"{{ path('app_event_index') }}\">
                            Événements
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'app_trottinette' ? 'active' : '' }}\"
                           href=\"{{ path('app_trottinette_index') }}\">
                            Trottinettes
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'admin_' ? 'active' : '' }}\"
                           href=\"{{ path('reservation_index') }}\">
                            Réservations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'admin_reclamation' ? 'active' : '' }}\"
                           href=\"{{ path('reclamation_index') }}\">
                            Réclamations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.get('_route') starts with 'app_admin_events' ? 'active' : '' }}\"
                           href=\"{{ path('app_admin_events') }}\">
                            Gestion Événements
                        </a>
                    </li>
                {% endif %}
            </ul>

            <ul class=\"navbar-nav ms-auto\">
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle d-flex align-items-center gap-2\"
                           href=\"#\"
                           role=\"button\"
                           data-bs-toggle=\"dropdown\"
                           aria-expanded=\"false\">
                            <i class=\"bi bi-person-circle fs-5\"></i>
                            {{ app.user.prenom ?: app.user.userIdentifier }}
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            {% if is_granted('ROLE_ADMIN') %}
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_dashboard') }}\" style=\"color: white\">Tableau de Bord Admin</a></li>
                            {% endif %}
                            {% if is_granted('ROLE_PARTENAIRE') %}
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_partenaire_dashboard') }}\" style=\"color: white\">Tableau de Bord Partenaire</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                            {% endif %}
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_client_profile_view') }}\" style=\"color: white\">Profil</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\" style=\"color: white\">Déconnexion</a></li>
                        </ul>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "partials/_nav.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\partials\\_nav.html.twig");
    }
}
