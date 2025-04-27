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
class __TwigTemplate_3e9fbe3321948e5c8a3abeb3935a95b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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

        yield "Tableau de bord administrateur";
        
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
        yield "<div class=\"container mt-4\">
    <div class=\"row mb-4\">
        <div class=\"col\">
            <h1 class=\"display-4\"><i class=\"fas fa-tachometer-alt me-3\"></i>Tableau de bord administrateur</h1>
        </div>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card bg-primary text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"card-title mb-0\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 19, $this->source); })())), "html", null, true);
        yield "</h3>
                            <p class=\"card-text mb-0\">Total des événements</p>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-success text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            ";
        // line 36
        $context["totalParticipants"] = 0;
        // line 37
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            yield "                                ";
            $context["totalParticipants"] = ((isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 38, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participantCount", [], "any", false, false, false, 38));
            // line 39
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                            <h3 class=\"card-title mb-0\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "</h3>
                            <p class=\"card-text mb-0\">Total des participants</p>
                        </div>
                        <i class=\"fas fa-users fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"#\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-warning text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"card-title mb-0\">
                                ";
        // line 58
        $context["upcomingEvents"] = 0;
        // line 59
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 60
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 60), "statut", [], "any", false, false, false, 60) == "A_VENIR")) {
                // line 61
                yield "                                        ";
                $context["upcomingEvents"] = ((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 61, $this->source); })()) + 1);
                // line 62
                yield "                                    ";
            }
            // line 63
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "
                            </h3>
                            <p class=\"card-text mb-0\">Événements à venir</p>
                        </div>
                        <i class=\"fas fa-clock fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"#\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <i class=\"fas fa-table me-1\"></i>
            Aperçu des événements
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date de début</th>
                            <th>Lieu</th>
                            <th>Statut</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            yield "                            <tr>
                                <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 100), "titre", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                                <td>";
            // line 101
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 101), "dateDebut", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 101), "dateDebut", [], "any", false, false, false, 101), "Y-m-d H:i"), "html", null, true)) : ("Non défini"));
            yield "</td>
                                <td>";
            // line 102
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 102), "lieu", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 102), "lieu", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "html", null, true)) : ("Non défini"));
            yield "</td>
                                <td>
                                    ";
            // line 104
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 104), "statut", [], "any", false, false, false, 104) == "A_VENIR")) {
                // line 105
                yield "                                        <span class=\"badge bg-info\">À venir</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 106
$context["item"], "event", [], "any", false, false, false, 106), "statut", [], "any", false, false, false, 106) == "EN_COURS")) {
                // line 107
                yield "                                        <span class=\"badge bg-success\">En cours</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 108
$context["item"], "event", [], "any", false, false, false, 108), "statut", [], "any", false, false, false, 108) == "TERMINE")) {
                // line 109
                yield "                                        <span class=\"badge bg-secondary\">Terminé</span>
                                    ";
            } else {
                // line 111
                yield "                                        <span class=\"badge bg-danger\">Annulé</span>
                                    ";
            }
            // line 113
            yield "                                </td>
                                <td>
                                    <span class=\"badge bg-primary\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participantCount", [], "any", false, false, false, 115), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119)]), "html", null, true);
            yield "\" class=\"btn btn-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <a href=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-users\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                    </tbody>
                </table>
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
        return array (  312 => 132,  299 => 125,  293 => 122,  287 => 119,  280 => 115,  276 => 113,  272 => 111,  268 => 109,  266 => 108,  263 => 107,  261 => 106,  258 => 105,  256 => 104,  251 => 102,  247 => 101,  243 => 100,  240 => 99,  236 => 98,  198 => 64,  192 => 63,  189 => 62,  186 => 61,  183 => 60,  178 => 59,  176 => 58,  154 => 40,  148 => 39,  145 => 38,  140 => 37,  138 => 36,  125 => 26,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord administrateur{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row mb-4\">
        <div class=\"col\">
            <h1 class=\"display-4\"><i class=\"fas fa-tachometer-alt me-3\"></i>Tableau de bord administrateur</h1>
        </div>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card bg-primary text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"card-title mb-0\">{{ eventData|length }}</h3>
                            <p class=\"card-text mb-0\">Total des événements</p>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"{{ path('app_event_index') }}\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-success text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            {% set totalParticipants = 0 %}
                            {% for item in eventData %}
                                {% set totalParticipants = totalParticipants + item.participantCount %}
                            {% endfor %}
                            <h3 class=\"card-title mb-0\">{{ totalParticipants }}</h3>
                            <p class=\"card-text mb-0\">Total des participants</p>
                        </div>
                        <i class=\"fas fa-users fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"#\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-warning text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"card-title mb-0\">
                                {% set upcomingEvents = 0 %}
                                {% for item in eventData %}
                                    {% if item.event.statut == 'A_VENIR' %}
                                        {% set upcomingEvents = upcomingEvents + 1 %}
                                    {% endif %}
                                {% endfor %}
                                {{ upcomingEvents }}
                            </h3>
                            <p class=\"card-text mb-0\">Événements à venir</p>
                        </div>
                        <i class=\"fas fa-clock fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"#\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <i class=\"fas fa-table me-1\"></i>
            Aperçu des événements
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date de début</th>
                            <th>Lieu</th>
                            <th>Statut</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in eventData %}
                            <tr>
                                <td>{{ item.event.titre }}</td>
                                <td>{{ item.event.dateDebut ? item.event.dateDebut|date('Y-m-d H:i') : 'Non défini' }}</td>
                                <td>{{ item.event.lieu ? item.event.lieu.value : 'Non défini' }}</td>
                                <td>
                                    {% if item.event.statut == 'A_VENIR' %}
                                        <span class=\"badge bg-info\">À venir</span>
                                    {% elseif item.event.statut == 'EN_COURS' %}
                                        <span class=\"badge bg-success\">En cours</span>
                                    {% elseif item.event.statut == 'TERMINE' %}
                                        <span class=\"badge bg-secondary\">Terminé</span>
                                    {% else %}
                                        <span class=\"badge bg-danger\">Annulé</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"badge bg-primary\">{{ item.participantCount }}</span>
                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_event_show', {'id': item.event.id}) }}\" class=\"btn btn-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_event_edit', {'id': item.event.id}) }}\" class=\"btn btn-warning\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_event_participants', {'id': item.event.id}) }}\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-users\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\Users\\Baha Ayadi\\Desktop\\Trotticare Events\\Events\\templates\\admin\\dashboard.html.twig");
    }
}
