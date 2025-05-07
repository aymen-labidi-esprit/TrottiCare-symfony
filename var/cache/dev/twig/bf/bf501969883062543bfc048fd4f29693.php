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

/* admin/dashboard.html.twig */
class __TwigTemplate_3c5b2c209dcaeb7183359b3a1877d481 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 2);
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
        yield "    ";
        // line 10
        yield "    ";
        // line 11
        yield "    <style>
        /* Ensure FontAwesome icons render */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-tachometer-alt:before { content: \"\\f3fd\"; }
        .fa-calendar-alt:before { content: \"\\f073\"; }
        .fa-users:before { content: \"\\f0c0\"; }
        .fa-clock:before { content: \"\\f017\"; }
        .fa-angle-right:before { content: \"\\f105\"; }
        .fa-user-shield:before { content: \"\\f505\"; } /* Admin icon */
        .fa-motorcycle:before { content: \"\\f21c\"; } /* Scooter icon */
        .fa-receipt:before { content: \"\\f543\"; } /* Reservation icon */
        .fa-users-cog:before { content: \"\\f509\"; } /* Manage users */
        .fa-map-pin:before { content: \"\\f276\"; } /* Point relais */
        .fa-tools:before { content: \"\\f7d9\"; } /* Maintenance */
        .fa-file-invoice-dollar:before { content: \"\\f571\"; } /* Reservations */
        .fa-bullhorn:before { content: \"\\f0a1\"; } /* Reclamations */
        .fa-calendar-check:before { content: \"\\f274\"; } /* Events */

        .mr-2 { margin-right: 0.5rem; }
        .mr-3 { margin-right: 0.75rem; }
        .ml-1 { margin-left: 0.25rem; }

        /* Optional: Add a hover effect to quick links */
        .quick-link-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-color: #cbd5e1; /* Example shadow color on hover */
            --tw-shadow: var(--tw-shadow-colored);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        // line 44
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-7xl\">

        ";
        // line 48
        yield "        <header class=\"mb-10\">
            <h1 class=\"text-3xl lg:text-4xl font-bold text-gray-900 mb-2 flex items-center\">
                <i class=\"fas fa-user-shield mr-3 text-blue-600\"></i> Tableau de Bord Administrateur
            </h1>
            <p class=\"text-lg text-gray-600\">Vue d'ensemble et accès rapides aux modules de gestion.</p>
        </header>

        ";
        // line 56
        yield "        ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/dashboard.html.twig", 56);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 57
        yield "
        ";
        // line 59
        yield "        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10\">

            ";
        // line 62
        yield "            <div class=\"bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden\">
                <div class=\"p-5 flex justify-between items-start\">
                    <div>
                        <div class=\"text-sm font-medium text-gray-500 uppercase tracking-wider\">Événements (Total)</div>
                        <div class=\"mt-1 text-3xl font-semibold text-gray-900\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 66, $this->source); })())), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"flex-shrink-0 rounded-md p-3 bg-blue-100 text-blue-600\">
                        <i class=\"fas fa-calendar-alt fa-lg\"></i> ";
        // line 70
        yield "                    </div>
                </div>
                <div class=\"bg-gray-50 px-5 py-3\">
                    <div class=\"text-sm\">
                        <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"font-medium text-blue-700 hover:text-blue-900 flex justify-between items-center\">
                            <span>Voir les détails</span>
                            <i class=\"fas fa-angle-right ml-1\"></i>
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 83
        yield "            <div class=\"bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden\">
                <div class=\"p-5 flex justify-between items-start\">
                    <div>
                        <div class=\"text-sm font-medium text-gray-500 uppercase tracking-wider\">Participants (Total)</div>
                        ";
        // line 87
        $context["totalParticipants"] = 0;
        // line 88
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            yield "                            ";
            $context["totalParticipants"] = ((isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 89, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participantCount", [], "any", false, false, false, 89));
            // line 90
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                        <div class=\"mt-1 text-3xl font-semibold text-gray-900\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 91, $this->source); })()), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"flex-shrink-0 rounded-md p-3 bg-green-100 text-green-600\">
                        <i class=\"fas fa-users fa-lg\"></i>
                    </div>
                </div>
                <div class=\"bg-gray-50 px-5 py-3\">
                    <div class=\"text-sm\">
                        ";
        // line 100
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"font-medium text-green-700 hover:text-green-900 flex justify-between items-center\">
                            <span>Voir les détails</span>
                            <i class=\"fas fa-angle-right ml-1\"></i>
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 109
        yield "            <div class=\"bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden\">
                <div class=\"p-5 flex justify-between items-start\">
                    <div>
                        <div class=\"text-sm font-medium text-gray-500 uppercase tracking-wider\">Événements à venir</div>
                        ";
        // line 113
        $context["upcomingEvents"] = 0;
        // line 114
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 115
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 115), "statut", [], "any", false, false, false, 115) == "A_VENIR")) {
                // line 116
                yield "                                ";
                $context["upcomingEvents"] = ((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 116, $this->source); })()) + 1);
                // line 117
                yield "                            ";
            }
            // line 118
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "                        <div class=\"mt-1 text-3xl font-semibold text-gray-900\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 119, $this->source); })()), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"flex-shrink-0 rounded-md p-3 bg-yellow-100 text-yellow-600\">
                        <i class=\"fas fa-clock fa-lg\"></i>
                    </div>
                </div>
                <div class=\"bg-gray-50 px-5 py-3\">
                    <div class=\"text-sm\">
                        <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events", ["filter" => "upcoming"]);
        yield "\" class=\"font-medium text-yellow-700 hover:text-yellow-900 flex justify-between items-center\">
                            <span>Voir les détails</span>
                            <i class=\"fas fa-angle-right ml-1\"></i>
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 136
        yield "            ";
        // line 137
        yield "            ";
        if (array_key_exists("user_count", $context)) {
            // line 138
            yield "                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden\">
                    <div class=\"p-5 flex justify-between items-start\">
                        <div>
                            <div class=\"text-sm font-medium text-gray-500 uppercase tracking-wider\">Utilisateurs</div>
                            <div class=\"mt-1 text-3xl font-semibold text-gray-900\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_count"]) || array_key_exists("user_count", $context) ? $context["user_count"] : (function () { throw new RuntimeError('Variable "user_count" does not exist.', 142, $this->source); })()), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"flex-shrink-0 rounded-md p-3 bg-indigo-100 text-indigo-600\">
                            <i class=\"fas fa-users fa-lg\"></i>
                        </div>
                    </div>
                    <div class=\"bg-gray-50 px-5 py-3\">
                        <div class=\"text-sm\">
                            <a href=\"";
            // line 150
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
            yield "\" class=\"font-medium text-indigo-700 hover:text-indigo-900 flex justify-between items-center\">
                                <span>Gérer les utilisateurs</span>
                                <i class=\"fas fa-angle-right ml-1\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 158
        yield "
        </div>

        ";
        // line 162
        yield "        <section>
            <h2 class=\"text-2xl font-semibold text-gray-800 mb-6\">Gestion Rapide</h2>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5\">
                ";
        // line 166
        yield "                ";
        $context["management_links"] = [["route" => "admin_utilisateur_index", "label" => "Utilisateurs", "icon" => "fa-users-cog", "color" => "blue"], ["route" => "admin_trottinette_index", "label" => "Trottinettes", "icon" => "fa-motorcycle", "color" => "green"], ["route" => "point_relais_index", "label" => "Points Relais", "icon" => "fa-map-pin", "color" => "teal"], ["route" => "admin_maintenance_index", "label" => "Maintenances", "icon" => "fa-tools", "color" => "orange"], ["route" => "reservation_index", "label" => "Réservations", "icon" => "fa-file-invoice-dollar", "color" => "cyan"], ["route" => "reclamation_index", "label" => "Réclamations", "icon" => "fa-bullhorn", "color" => "pink"], ["route" => "app_admin_events", "label" => "Événements", "icon" => "fa-calendar-check", "color" => "indigo"]];
        // line 175
        yield "
                ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["management_links"]) || array_key_exists("management_links", $context) ? $context["management_links"] : (function () { throw new RuntimeError('Variable "management_links" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 177
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 177));
            yield "\"
                   class=\"quick-link-card group flex items-center p-5 bg-white rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-200 border border-gray-200 text-gray-700 hover:border-";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "color", [], "any", false, false, false, 178), "html", null, true);
            yield "-300\">
                    <div class=\"flex-shrink-0 mr-4\">
                        ";
            // line 181
            yield "                        <div class=\"rounded-full p-2.5 bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "color", [], "any", false, false, false, 181), "html", null, true);
            yield "-100 text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "color", [], "any", false, false, false, 181), "html", null, true);
            yield "-600\">
                            <i class=\"fas ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 182), "html", null, true);
            yield " fa-lg\"></i>
                        </div>
                    </div>
                    <span class=\"font-medium group-hover:text-";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "color", [], "any", false, false, false, 185), "html", null, true);
            yield "-700 transition-colors text-base\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "label", [], "any", false, false, false, 185), "html", null, true);
            yield "</span>
                    ";
            // line 187
            yield "                    <i class=\"fas fa-angle-right ml-auto text-gray-400 group-hover:text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "color", [], "any", false, false, false, 187), "html", null, true);
            yield "-500 opacity-0 group-hover:opacity-100 transition-opacity\"></i>
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        yield "            </div>
        </section>

        ";
        // line 194
        yield "
    </div> ";
        // line 196
        yield "</div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard.html.twig";
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
        return array (  422 => 196,  419 => 194,  414 => 190,  404 => 187,  398 => 185,  392 => 182,  385 => 181,  380 => 178,  375 => 177,  371 => 176,  368 => 175,  365 => 166,  360 => 162,  355 => 158,  344 => 150,  333 => 142,  327 => 138,  324 => 137,  322 => 136,  311 => 127,  299 => 119,  293 => 118,  290 => 117,  287 => 116,  284 => 115,  279 => 114,  277 => 113,  271 => 109,  259 => 100,  247 => 91,  241 => 90,  238 => 89,  233 => 88,  231 => 87,  225 => 83,  214 => 74,  208 => 70,  202 => 66,  196 => 62,  192 => 59,  189 => 57,  178 => 56,  169 => 48,  164 => 44,  151 => 43,  110 => 11,  108 => 10,  106 => 9,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/dashboard.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord Admin - TrottiCare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind is loaded via base.html.twig #}
    {# FontAwesome for icons (or replace with SVGs) #}
    {# <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.x.x/css/all.min.css\"> #}
    <style>
        /* Ensure FontAwesome icons render */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-tachometer-alt:before { content: \"\\f3fd\"; }
        .fa-calendar-alt:before { content: \"\\f073\"; }
        .fa-users:before { content: \"\\f0c0\"; }
        .fa-clock:before { content: \"\\f017\"; }
        .fa-angle-right:before { content: \"\\f105\"; }
        .fa-user-shield:before { content: \"\\f505\"; } /* Admin icon */
        .fa-motorcycle:before { content: \"\\f21c\"; } /* Scooter icon */
        .fa-receipt:before { content: \"\\f543\"; } /* Reservation icon */
        .fa-users-cog:before { content: \"\\f509\"; } /* Manage users */
        .fa-map-pin:before { content: \"\\f276\"; } /* Point relais */
        .fa-tools:before { content: \"\\f7d9\"; } /* Maintenance */
        .fa-file-invoice-dollar:before { content: \"\\f571\"; } /* Reservations */
        .fa-bullhorn:before { content: \"\\f0a1\"; } /* Reclamations */
        .fa-calendar-check:before { content: \"\\f274\"; } /* Events */

        .mr-2 { margin-right: 0.5rem; }
        .mr-3 { margin-right: 0.75rem; }
        .ml-1 { margin-left: 0.25rem; }

        /* Optional: Add a hover effect to quick links */
        .quick-link-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-color: #cbd5e1; /* Example shadow color on hover */
            --tw-shadow: var(--tw-shadow-colored);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-7xl\">

        {# 1. Header #}
        <header class=\"mb-10\">
            <h1 class=\"text-3xl lg:text-4xl font-bold text-gray-900 mb-2 flex items-center\">
                <i class=\"fas fa-user-shield mr-3 text-blue-600\"></i> Tableau de Bord Administrateur
            </h1>
            <p class=\"text-lg text-gray-600\">Vue d'ensemble et accès rapides aux modules de gestion.</p>
        </header>

        {# Flash Messages #}
        {% include 'partials/_flash_messages.html.twig' ignore missing %}

        {# 2. Key Statistics Cards - Updated Styling #}
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10\">

            {# Total Events Card #}
            <div class=\"bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden\">
                <div class=\"p-5 flex justify-between items-start\">
                    <div>
                        <div class=\"text-sm font-medium text-gray-500 uppercase tracking-wider\">Événements (Total)</div>
                        <div class=\"mt-1 text-3xl font-semibold text-gray-900\">{{ eventData|length }}</div>
                    </div>
                    <div class=\"flex-shrink-0 rounded-md p-3 bg-blue-100 text-blue-600\">
                        <i class=\"fas fa-calendar-alt fa-lg\"></i> {# Adjusted icon size #}
                    </div>
                </div>
                <div class=\"bg-gray-50 px-5 py-3\">
                    <div class=\"text-sm\">
                        <a href=\"{{ path('app_admin_events') }}\" class=\"font-medium text-blue-700 hover:text-blue-900 flex justify-between items-center\">
                            <span>Voir les détails</span>
                            <i class=\"fas fa-angle-right ml-1\"></i>
                        </a>
                    </div>
                </div>
            </div>

            {# Total Participants Card #}
            <div class=\"bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden\">
                <div class=\"p-5 flex justify-between items-start\">
                    <div>
                        <div class=\"text-sm font-medium text-gray-500 uppercase tracking-wider\">Participants (Total)</div>
                        {% set totalParticipants = 0 %}
                        {% for item in eventData %}
                            {% set totalParticipants = totalParticipants + item.participantCount %}
                        {% endfor %}
                        <div class=\"mt-1 text-3xl font-semibold text-gray-900\">{{ totalParticipants }}</div>
                    </div>
                    <div class=\"flex-shrink-0 rounded-md p-3 bg-green-100 text-green-600\">
                        <i class=\"fas fa-users fa-lg\"></i>
                    </div>
                </div>
                <div class=\"bg-gray-50 px-5 py-3\">
                    <div class=\"text-sm\">
                        {# Link might go to events list or a dedicated participants overview if exists #}
                        <a href=\"{{ path('app_admin_events') }}\" class=\"font-medium text-green-700 hover:text-green-900 flex justify-between items-center\">
                            <span>Voir les détails</span>
                            <i class=\"fas fa-angle-right ml-1\"></i>
                        </a>
                    </div>
                </div>
            </div>

            {# Upcoming Events Card #}
            <div class=\"bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden\">
                <div class=\"p-5 flex justify-between items-start\">
                    <div>
                        <div class=\"text-sm font-medium text-gray-500 uppercase tracking-wider\">Événements à venir</div>
                        {% set upcomingEvents = 0 %}
                        {% for item in eventData %}
                            {% if item.event.statut == 'A_VENIR' %}
                                {% set upcomingEvents = upcomingEvents + 1 %}
                            {% endif %}
                        {% endfor %}
                        <div class=\"mt-1 text-3xl font-semibold text-gray-900\">{{ upcomingEvents }}</div>
                    </div>
                    <div class=\"flex-shrink-0 rounded-md p-3 bg-yellow-100 text-yellow-600\">
                        <i class=\"fas fa-clock fa-lg\"></i>
                    </div>
                </div>
                <div class=\"bg-gray-50 px-5 py-3\">
                    <div class=\"text-sm\">
                        <a href=\"{{ path('app_admin_events', {'filter': 'upcoming'}) }}\" class=\"font-medium text-yellow-700 hover:text-yellow-900 flex justify-between items-center\">
                            <span>Voir les détails</span>
                            <i class=\"fas fa-angle-right ml-1\"></i>
                        </a>
                    </div>
                </div>
            </div>

            {# Placeholder for another key metric - e.g., Total Users #}
            {# Make sure user_count is passed from controller if using this #}
            {% if user_count is defined %}
                <div class=\"bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden\">
                    <div class=\"p-5 flex justify-between items-start\">
                        <div>
                            <div class=\"text-sm font-medium text-gray-500 uppercase tracking-wider\">Utilisateurs</div>
                            <div class=\"mt-1 text-3xl font-semibold text-gray-900\">{{ user_count }}</div>
                        </div>
                        <div class=\"flex-shrink-0 rounded-md p-3 bg-indigo-100 text-indigo-600\">
                            <i class=\"fas fa-users fa-lg\"></i>
                        </div>
                    </div>
                    <div class=\"bg-gray-50 px-5 py-3\">
                        <div class=\"text-sm\">
                            <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"font-medium text-indigo-700 hover:text-indigo-900 flex justify-between items-center\">
                                <span>Gérer les utilisateurs</span>
                                <i class=\"fas fa-angle-right ml-1\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            {% endif %}

        </div>

        {# 3. Management Links Section - Updated Styling #}
        <section>
            <h2 class=\"text-2xl font-semibold text-gray-800 mb-6\">Gestion Rapide</h2>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5\">
                {# Define links array for cleaner iteration #}
                {% set management_links = [
                {'route': 'admin_utilisateur_index', 'label': 'Utilisateurs', 'icon': 'fa-users-cog', 'color': 'blue'},
                {'route': 'admin_trottinette_index', 'label': 'Trottinettes', 'icon': 'fa-motorcycle', 'color': 'green'},
                {'route': 'point_relais_index', 'label': 'Points Relais', 'icon': 'fa-map-pin', 'color': 'teal'},
                {'route': 'admin_maintenance_index', 'label': 'Maintenances', 'icon': 'fa-tools', 'color': 'orange'},
                {'route': 'reservation_index', 'label': 'Réservations', 'icon': 'fa-file-invoice-dollar', 'color': 'cyan'},
                {'route': 'reclamation_index', 'label': 'Réclamations', 'icon': 'fa-bullhorn', 'color': 'pink'},
                {'route': 'app_admin_events', 'label': 'Événements', 'icon': 'fa-calendar-check', 'color': 'indigo'},
                ] %}

                {% for link in management_links %}
                <a href=\"{{ path(link.route) }}\"
                   class=\"quick-link-card group flex items-center p-5 bg-white rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-200 border border-gray-200 text-gray-700 hover:border-{{link.color}}-300\">
                    <div class=\"flex-shrink-0 mr-4\">
                        {# Dynamic icon background color #}
                        <div class=\"rounded-full p-2.5 bg-{{link.color}}-100 text-{{link.color}}-600\">
                            <i class=\"fas {{ link.icon }} fa-lg\"></i>
                        </div>
                    </div>
                    <span class=\"font-medium group-hover:text-{{link.color}}-700 transition-colors text-base\">{{ link.label }}</span>
                    {# Optional: Arrow on hover #}
                    <i class=\"fas fa-angle-right ml-auto text-gray-400 group-hover:text-{{link.color}}-500 opacity-0 group-hover:opacity-100 transition-opacity\"></i>
                </a>
                {% endfor %}
            </div>
        </section>

        {# Add more sections as needed - e.g., Recent Activity, Charts, etc. #}

    </div> {# End Container #}
</div> {# End Page Wrapper #}
{% endblock %}", "admin/dashboard.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/dashboard.html.twig");
    }
}
