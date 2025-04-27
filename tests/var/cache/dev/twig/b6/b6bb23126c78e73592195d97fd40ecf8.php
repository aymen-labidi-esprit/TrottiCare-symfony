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

/* event/participants.html.twig */
class __TwigTemplate_6fb9a312afe3e2cd792b332fb522dd70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/participants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/participants.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/participants.html.twig", 1);
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
        yield "    <div class=\"container mt-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"h3\">Participants pour : <span class=\"fw-normal\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        yield "</span></h1>
            ";
        // line 10
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) ? ("app_admin_events") : ("app_admin_events")));
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Retour aux événements
            </a>
        </div>

        <div class=\"card shadow-sm\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-people-fill me-2\"></i>Liste des Participants</span>
                <span class=\"badge bg-primary rounded-pill\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 18, $this->source); })())), "html", null, true);
        yield "</span>
            </div>
            <div class=\"card-body p-0\"> ";
        // line 21
        yield "                ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 21, $this->source); })()))) {
            // line 22
            yield "                    <div class=\"table-responsive\"> ";
            // line 23
            yield "                        <table class=\"table table-striped table-hover mb-0\"> ";
            // line 24
            yield "                            <thead class=\"table-light\">
                            <tr>
                                <th scope=\"col\">Nom Complet</th>
                                <th scope=\"col\">Email</th>
                                <th scope=\"col\">Téléphone</th>
                                <th scope=\"col\">Date d'Inscription</th>
                                <th scope=\"col\">Statut</th> ";
            // line 31
            yield "                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 35
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                // line 36
                yield "                                <tr>
                                    <td>
                                        ";
                // line 39
                yield "                                        ";
                // line 40
                yield "                                        ";
                // line 41
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 41)) {
                    // line 42
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 42), "fullName", [], "any", false, false, false, 42), "html", null, true);
                    yield " ";
                    // line 43
                    yield "                                            ";
                    // line 44
                    yield "                                        ";
                } else {
                    // line 45
                    yield "                                            <span class=\"text-muted fst-italic\">Utilisateur Supprimé</span>
                                        ";
                }
                // line 47
                yield "                                    </td>
                                    <td>
                                        ";
                // line 50
                yield "                                        ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, true, false, 50), "email", [], "any", true, true, false, 50) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 50), "email", [], "any", false, false, false, 50)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 50), "email", [], "any", false, false, false, 50), "html", null, true)) : ("-"));
                yield " ";
                // line 51
                yield "                                    </td>
                                    <td>
                                        ";
                // line 54
                yield "                                        ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, true, false, 54), "telephone", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 54), "telephone", [], "any", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 54), "telephone", [], "any", false, false, false, 54), "html", null, true)) : ("-"));
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 57
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "dateInscription", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "dateInscription", [], "any", false, false, false, 57), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 61
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 61) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::INSCRIT"))) {
                    yield " ";
                    // line 62
                    yield "                                            <span class=\"badge bg-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 62), "value", [], "any", false, false, false, 62), ["_" => " "])), "html", null, true);
                    yield "</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 63
$context["participation"], "statut", [], "any", false, false, false, 63) == Twig\Extension\CoreExtension::constant("App\\Enum\\ParticipationStatus::ANNULE"))) {
                    yield " ";
                    // line 64
                    yield "                                            <span class=\"badge bg-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), ["_" => " "])), "html", null, true);
                    yield "</span>
                                        ";
                } else {
                    // line 66
                    yield "                                            <span class=\"badge bg-secondary\">";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66), ["_" => " "])), "html", null, true)) : ("Inconnu"));
                    yield "</span>
                                        ";
                }
                // line 68
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['participation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 75
            yield "                    <div class=\"card-body\"> ";
            // line 76
            yield "                        <p class=\"text-center text-muted mb-0\">Aucun participant inscrit pour cet événement.</p>
                    </div>
                ";
        }
        // line 79
        yield "            </div>
            ";
        // line 81
        yield "            ";
        // line 84
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
        return "event/participants.html.twig";
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
        return array (  250 => 84,  248 => 81,  245 => 79,  240 => 76,  238 => 75,  232 => 71,  224 => 68,  218 => 66,  212 => 64,  209 => 63,  204 => 62,  200 => 61,  194 => 57,  187 => 54,  183 => 51,  179 => 50,  175 => 47,  171 => 45,  168 => 44,  166 => 43,  162 => 42,  159 => 41,  157 => 40,  155 => 39,  151 => 36,  146 => 35,  141 => 31,  133 => 24,  131 => 23,  129 => 22,  126 => 21,  121 => 18,  109 => 10,  105 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {# Or your admin base template if different #}

{% block title %}Participants - {{ event.titre }}{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"h3\">Participants pour : <span class=\"fw-normal\">{{ event.titre }}</span></h1>
            {# Adjust the back link if needed based on where admins/partners view events #}
            <a href=\"{{ path(app.user and is_granted('ROLE_ADMIN') ? 'app_admin_events' : 'app_admin_events') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Retour aux événements
            </a>
        </div>

        <div class=\"card shadow-sm\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-people-fill me-2\"></i>Liste des Participants</span>
                <span class=\"badge bg-primary rounded-pill\">{{ participants|length }}</span>
            </div>
            <div class=\"card-body p-0\"> {# Remove padding for full-width table #}
                {% if participants is not empty %}
                    <div class=\"table-responsive\"> {# Add responsiveness #}
                        <table class=\"table table-striped table-hover mb-0\"> {# Remove bottom margin #}
                            <thead class=\"table-light\">
                            <tr>
                                <th scope=\"col\">Nom Complet</th>
                                <th scope=\"col\">Email</th>
                                <th scope=\"col\">Téléphone</th>
                                <th scope=\"col\">Date d'Inscription</th>
                                <th scope=\"col\">Statut</th> {# Added Status Column #}
                            </tr>
                            </thead>
                            <tbody>
                            {# Use a more descriptive loop variable name like 'participation' #}
                            {% for participation in participants %}
                                <tr>
                                    <td>
                                        {# Access the user THROUGH the participation object #}
                                        {# Use null-safe operator (?.) in case utilisateur is null #}
                                        {# Or use an if check #}
                                        {% if participation.utilisateur %}
                                            {{ participation.utilisateur.fullName }} {# Use the helper method #}
                                            {# Or: {{ participation.utilisateur.prenom }} {{ participation.utilisateur.nom }} #}
                                        {% else %}
                                            <span class=\"text-muted fst-italic\">Utilisateur Supprimé</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {# Access the user's email #}
                                        {{ participation.utilisateur.email ?? '-' }} {# Null coalescing operator #}
                                    </td>
                                    <td>
                                        {# Access the user's telephone #}
                                        {{ participation.utilisateur.telephone ?? '-' }}
                                    </td>
                                    <td>
                                        {{ participation.dateInscription ? participation.dateInscription|date('d/m/Y H:i') : 'N/A' }}
                                    </td>
                                    <td>
                                        {# Display participation status #}
                                        {% if participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::INSCRIT') %} {# <--- CORRECTED HERE #}
                                            <span class=\"badge bg-success\">{{ participation.statut.value|replace({'_': ' '})|capitalize }}</span>
                                        {% elseif participation.statut == constant('App\\\\Enum\\\\ParticipationStatus::ANNULE') %} {# <--- CORRECTED HERE #}
                                            <span class=\"badge bg-danger\">{{ participation.statut.value|replace({'_': ' '})|capitalize }}</span>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">{{ participation.statut ? participation.statut.value|replace({'_': ' '})|capitalize : 'Inconnu' }}</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <div class=\"card-body\"> {# Add padding back if table is empty #}
                        <p class=\"text-center text-muted mb-0\">Aucun participant inscrit pour cet événement.</p>
                    </div>
                {% endif %}
            </div>
            {# Optional: Add Export to PDF/CSV button here later #}
            {# <div class=\"card-footer text-end\">
             <a href=\"#\" class=\"btn btn-sm btn-primary disabled\">Exporter PDF</a>
         </div> #}
        </div>
    </div>
{% endblock %}", "event/participants.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\event\\participants.html.twig");
    }
}
