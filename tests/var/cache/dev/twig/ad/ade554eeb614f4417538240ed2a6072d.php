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

/* admin/events.html.twig */
class __TwigTemplate_21b667bfaa81788bcb10220ddb445536 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/events.html.twig", 1);
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

        yield "Admin - Events Management";
        
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
    <div class=\"row mb-4 align-items-center\">
        <div class=\"col\">
            <h1 class=\"display-4\"><i class=\"fas fa-calendar-alt me-3\"></i>Events Management</h1>
        </div>
        <div class=\"col-auto\">
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"btn btn-secondary me-2\">
                <i class=\"fas fa-arrow-left me-2\"></i>Back to Dashboard
            </a>
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-2\"></i>Create New Event
            </a>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header bg-primary text-white\">
            <i class=\"fas fa-list me-2\"></i>All Events
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 41
            yield "                            <tr>
                                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                <td>";
            // line 43
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 43), "Y-m-d H:i"), "html", null, true)) : ("Not set"));
            yield "</td>
                                <td>";
            // line 44
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 44), "Y-m-d H:i"), "html", null, true)) : ("Not set"));
            yield "</td>
                                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "state", [], "any", false, false, false, 45), "label", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "statut", [], "any", false, false, false, 47) == "A_VENIR")) {
                // line 48
                yield "                                        <span class=\"badge bg-info\">Upcoming</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 49
$context["event"], "statut", [], "any", false, false, false, 49) == "EN_COURS")) {
                // line 50
                yield "                                        <span class=\"badge bg-success\">In Progress</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["event"], "statut", [], "any", false, false, false, 51) == "TERMINE")) {
                // line 52
                yield "                                        <span class=\"badge bg-secondary\">Completed</span>
                                    ";
            } else {
                // line 54
                yield "                                        <span class=\"badge bg-danger\">Cancelled</span>
                                    ";
            }
            // line 56
            yield "                                </td>
                                <td>
                                    <span class=\"badge bg-primary\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participations", [], "any", false, false, false, 58), "count", [], "any", false, false, false, 58), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-info\" title=\"View\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"btn btn-warning\" title=\"Edit\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"btn btn-primary\" title=\"Participants\">
                                            <i class=\"fas fa-users\"></i>
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this event?');\" style=\"display: inline-block;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 72))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\" title=\"Delete\">
                                                <i class=\"fas fa-trash-alt\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 80
        if (!$context['_iterated']) {
            // line 81
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center py-4\">
                                    <p class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i>No events found</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return "admin/events.html.twig";
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
        return array (  246 => 87,  235 => 81,  233 => 80,  220 => 72,  216 => 71,  210 => 68,  204 => 65,  198 => 62,  191 => 58,  187 => 56,  183 => 54,  179 => 52,  177 => 51,  174 => 50,  172 => 49,  169 => 48,  167 => 47,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  147 => 41,  142 => 40,  114 => 15,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Events Management{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row mb-4 align-items-center\">
        <div class=\"col\">
            <h1 class=\"display-4\"><i class=\"fas fa-calendar-alt me-3\"></i>Events Management</h1>
        </div>
        <div class=\"col-auto\">
            <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-secondary me-2\">
                <i class=\"fas fa-arrow-left me-2\"></i>Back to Dashboard
            </a>
            <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-2\"></i>Create New Event
            </a>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header bg-primary text-white\">
            <i class=\"fas fa-list me-2\"></i>All Events
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for event in events %}
                            <tr>
                                <td>{{ event.titre }}</td>
                                <td>{{ event.dateDebut ? event.dateDebut|date('Y-m-d H:i') : 'Not set' }}</td>
                                <td>{{ event.dateFin ? event.dateFin|date('Y-m-d H:i') : 'Not set' }}</td>
                                <td>{{ event.state.label }}</td>
                                <td>
                                    {% if event.statut == 'A_VENIR' %}
                                        <span class=\"badge bg-info\">Upcoming</span>
                                    {% elseif event.statut == 'EN_COURS' %}
                                        <span class=\"badge bg-success\">In Progress</span>
                                    {% elseif event.statut == 'TERMINE' %}
                                        <span class=\"badge bg-secondary\">Completed</span>
                                    {% else %}
                                        <span class=\"badge bg-danger\">Cancelled</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"badge bg-primary\">{{ event.participations.count }}</span>
                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_event_show', {'id': event.id}) }}\" class=\"btn btn-info\" title=\"View\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"btn btn-warning\" title=\"Edit\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <a href=\"{{ path('app_event_participants', {'id': event.id}) }}\" class=\"btn btn-primary\" title=\"Participants\">
                                            <i class=\"fas fa-users\"></i>
                                        </a>
                                        <form method=\"post\" action=\"{{ path('app_event_delete', {'id': event.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this event?');\" style=\"display: inline-block;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\" title=\"Delete\">
                                                <i class=\"fas fa-trash-alt\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"8\" class=\"text-center py-4\">
                                    <p class=\"mb-0\"><i class=\"fas fa-info-circle me-2\"></i>No events found</p>
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
", "admin/events.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\admin\\events.html.twig");
    }
}
