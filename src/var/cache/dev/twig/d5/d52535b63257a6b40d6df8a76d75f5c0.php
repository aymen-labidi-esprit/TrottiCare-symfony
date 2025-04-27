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

/* admin/event_participants.html.twig */
class __TwigTemplate_3eb21b874a73d742341388b3f9d8ec57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_participants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_participants.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/event_participants.html.twig", 1);
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

        yield "Participants - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Participants de l'événement</li>
        </ol>
    </nav>

    <div class=\"card\">
        <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
            <h2 class=\"mb-0\"><i class=\"fas fa-users me-2\"></i>Participants pour : ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield "</h2>
            <span class=\"badge bg-light text-dark fs-5\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "participations", [], "any", false, false, false, 17)), "html", null, true);
        yield " Participants</span>
        </div>
        <div class=\"card-body\">
            ";
        // line 20
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "participations", [], "any", false, false, false, 20)) > 0)) {
            // line 21
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Date d'inscription</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 33, $this->source); })()), "participations", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 34
                yield "                                <tr>
                                    <td>
                                        ";
                // line 36
                if (CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 36)) {
                    // line 37
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 37), "prenom", [], "any", false, false, false, 37), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 39
                    yield "                                            <em>Inconnu</em>
                                        ";
                }
                // line 41
                yield "                                    </td>
                                    <td>
                                        ";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 44), "email", [], "any", false, false, false, 44), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 46
                    yield "                                            <em>Inconnu</em>
                                        ";
                }
                // line 48
                yield "                                    </td>
                                    <td>
                                        ";
                // line 50
                if (CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 50)) {
                    // line 51
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 51), "telephone", [], "any", false, false, false, 51), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 53
                    yield "                                            <em>Inconnu</em>
                                        ";
                }
                // line 55
                yield "                                    </td>
                                    <td>";
                // line 56
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "dateInscription", [], "any", false, false, false, 56)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "dateInscription", [], "any", false, false, false, 56), "Y-m-d H:i"), "html", null, true)) : ("Unknown"));
                yield "</td>
                                    <td>
                                        ";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "statut", [], "any", false, false, false, 58), "value", [], "any", false, false, false, 58) == "INSCRIT")) {
                    // line 59
                    yield "                                            <span class=\"badge bg-success\">Inscrit</span>
                                        ";
                } else {
                    // line 61
                    yield "                                            <span class=\"badge bg-danger\">Annulé</span>
                                        ";
                }
                // line 63
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 70
            yield "                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>Aucun participant pour cet événement.
                </div>
            ";
        }
        // line 74
        yield "        </div>
        <div class=\"card-footer\">
            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour au tableau de bord
            </a>
            <a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-eye me-2\"></i>Voir les détails de l'événement
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
        return "admin/event_participants.html.twig";
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
        return array (  244 => 79,  238 => 76,  234 => 74,  228 => 70,  222 => 66,  214 => 63,  210 => 61,  206 => 59,  204 => 58,  199 => 56,  196 => 55,  192 => 53,  186 => 51,  184 => 50,  180 => 48,  176 => 46,  170 => 44,  168 => 43,  164 => 41,  160 => 39,  152 => 37,  150 => 36,  146 => 34,  142 => 33,  128 => 21,  126 => 20,  120 => 17,  116 => 16,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Participants - {{ event.titre }}{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_dashboard') }}\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Participants de l'événement</li>
        </ol>
    </nav>

    <div class=\"card\">
        <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
            <h2 class=\"mb-0\"><i class=\"fas fa-users me-2\"></i>Participants pour : {{ event.titre }}</h2>
            <span class=\"badge bg-light text-dark fs-5\">{{ event.participations|length }} Participants</span>
        </div>
        <div class=\"card-body\">
            {% if event.participations|length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Date d'inscription</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for participant in event.participations %}
                                <tr>
                                    <td>
                                        {% if participant.utilisateur %}
                                            {{ participant.utilisateur.prenom }} {{ participant.utilisateur.nom }}
                                        {% else %}
                                            <em>Inconnu</em>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if participant.utilisateur %}
                                            {{ participant.utilisateur.email }}
                                        {% else %}
                                            <em>Inconnu</em>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if participant.utilisateur %}
                                            {{ participant.utilisateur.telephone }}
                                        {% else %}
                                            <em>Inconnu</em>
                                        {% endif %}
                                    </td>
                                    <td>{{ participant.dateInscription ? participant.dateInscription|date('Y-m-d H:i') : 'Unknown' }}</td>
                                    <td>
                                        {% if participant.statut.value == 'INSCRIT' %}
                                            <span class=\"badge bg-success\">Inscrit</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Annulé</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>Aucun participant pour cet événement.
                </div>
            {% endif %}
        </div>
        <div class=\"card-footer\">
            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour au tableau de bord
            </a>
            <a href=\"{{ path('app_event_show', {'id': event.id}) }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-eye me-2\"></i>Voir les détails de l'événement
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "admin/event_participants.html.twig", "C:\\Users\\Baha Ayadi\\Desktop\\Trotticare Events\\Events\\templates\\admin\\event_participants.html.twig");
    }
}
