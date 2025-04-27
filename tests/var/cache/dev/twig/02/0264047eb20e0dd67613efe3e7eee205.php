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

/* event/index.html.twig */
class __TwigTemplate_a1f2116576529b8ed72dc80d9f5d5b39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
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

        yield "Event List";
        
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
        <div class=\"d-flex align-items-center mb-4\">
            <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo.png"), "html", null, true);
        yield "\" alt=\"Trotticare Events\" height=\"40\" class=\"me-3\">
            <h1>Liste des Événements</h1>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h1 class=\"display-4 mb-0\"><i class=\"fas fa-calendar-alt me-3\"></i>Event List</h1>
            </div>
            <div class=\"col-auto\">
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Create New Event
                </a>
            </div>
        </div>

        <div class=\"row g-4\">
            ";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "                <div class=\"col-12\">
                    <div class=\"card text-center py-5\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-calendar-times fa-4x mb-3 text-muted\"></i>
                            <h3 class=\"card-title\">No Events Found</h3>
                            <p class=\"card-text text-muted\">Start by creating your first event!</p>
                            <a href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
            yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus me-2\"></i>Create Event
                            </a>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 37
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 38
                yield "                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-3\">";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 41), "html", null, true);
                yield "</h5>
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-clock me-2 text-primary\"></i>
                                        <strong>Starts:</strong> ";
                // line 45
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 45), "M d, Y H:i"), "html", null, true)) : ("Not set"));
                yield "
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-hourglass-end me-2 text-primary\"></i>
                                        <strong>Ends:</strong> ";
                // line 49
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 49), "M d, Y H:i"), "html", null, true)) : ("Not set"));
                yield "
                                    </p>
                                    <p class=\"card-text\">
                                        <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                        <strong>Location:</strong> ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "state", [], "any", false, false, false, 53), "label", [], "any", false, false, false, 53), "html", null, true);
                yield "
                                    </p>
                                    ";
                // line 55
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", true, true, false, 55) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", false, false, false, 55))) {
                    // line 56
                    yield "                                        <p class=\"card-text\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                            <strong>Gouvernorat:</strong> ";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", false, false, false, 58), "value", [], "any", false, false, false, 58), "html", null, true);
                    yield "
                                        </p>
                                    ";
                }
                // line 61
                yield "                                </div>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-eye me-1\"></i>View
                                    </a>
                                    <div class=\"btn-group\">
                                        <a href=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                yield "\" class=\"btn btn-warning\">
                                            <i class=\"fas fa-edit me-1\"></i>Edit
                                        </a>
                                        <form method=\"post\" action=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 71))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure you want to delete this event?')\">
                                                <i class=\"fas fa-trash-alt me-1\"></i>Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "            ";
        }
        // line 83
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
        return "event/index.html.twig";
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
        return array (  234 => 83,  231 => 82,  214 => 71,  210 => 70,  204 => 67,  197 => 63,  193 => 61,  187 => 58,  183 => 56,  181 => 55,  176 => 53,  169 => 49,  162 => 45,  155 => 41,  150 => 38,  145 => 37,  135 => 30,  127 => 24,  125 => 23,  115 => 16,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event List{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"d-flex align-items-center mb-4\">
            <img src=\"{{ asset('images/Logo.png') }}\" alt=\"Trotticare Events\" height=\"40\" class=\"me-3\">
            <h1>Liste des Événements</h1>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h1 class=\"display-4 mb-0\"><i class=\"fas fa-calendar-alt me-3\"></i>Event List</h1>
            </div>
            <div class=\"col-auto\">
                <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Create New Event
                </a>
            </div>
        </div>

        <div class=\"row g-4\">
            {% if events is empty %}
                <div class=\"col-12\">
                    <div class=\"card text-center py-5\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-calendar-times fa-4x mb-3 text-muted\"></i>
                            <h3 class=\"card-title\">No Events Found</h3>
                            <p class=\"card-text text-muted\">Start by creating your first event!</p>
                            <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus me-2\"></i>Create Event
                            </a>
                        </div>
                    </div>
                </div>
            {% else %}
                {% for event in events %}
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-3\">{{ event.titre }}</h5>
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-clock me-2 text-primary\"></i>
                                        <strong>Starts:</strong> {{ event.dateDebut ? event.dateDebut|date('M d, Y H:i') : 'Not set' }}
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-hourglass-end me-2 text-primary\"></i>
                                        <strong>Ends:</strong> {{ event.dateFin ? event.dateFin|date('M d, Y H:i') : 'Not set' }}
                                    </p>
                                    <p class=\"card-text\">
                                        <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                        <strong>Location:</strong> {{ event.state.label }}
                                    </p>
                                    {% if event.gouvernorat is defined and event.gouvernorat %}
                                        <p class=\"card-text\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                            <strong>Gouvernorat:</strong> {{ event.gouvernorat.value }}
                                        </p>
                                    {% endif %}
                                </div>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <a href=\"{{ path('app_event_show', {'id': event.id}) }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-eye me-1\"></i>View
                                    </a>
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"btn btn-warning\">
                                            <i class=\"fas fa-edit me-1\"></i>Edit
                                        </a>
                                        <form method=\"post\" action=\"{{ path('app_event_delete', {'id': event.id}) }}\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure you want to delete this event?')\">
                                                <i class=\"fas fa-trash-alt me-1\"></i>Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
{% endblock %}", "event/index.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\event\\index.html.twig");
    }
}
