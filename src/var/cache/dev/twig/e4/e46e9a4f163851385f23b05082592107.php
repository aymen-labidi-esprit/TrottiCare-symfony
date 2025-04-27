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
class __TwigTemplate_8df6c913c2dc36d3de9ecf256b4ed6e8 extends Template
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
                <h1 class=\"display-4 mb-0\">
                    <i class=\"fas fa-calendar-alt me-3\"></i>Event List
                </h1>
            </div>
            <div class=\"col-auto\">
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Create New Event
                </a>
            </div>
        </div>

        <div class=\"row g-4\">
            ";
        // line 26
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 26, $this->source); })()))) {
            // line 27
            yield "                <div class=\"col-12\">
                    <div class=\"card text-center py-5\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-calendar-times fa-4x mb-3 text-muted\"></i>
                            <h3 class=\"card-title\">No Events Found</h3>
                            <p class=\"card-text text-muted\">Start by creating your first event!</p>
                            <a href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
            yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus me-2\"></i>Create Event
                            </a>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 40
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 41
                yield "                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-3\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 44), "html", null, true);
                yield "</h5>
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-clock me-2 text-primary\"></i>
                                        <strong>Starts:</strong>
                                        ";
                // line 49
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 49), "M d, Y H:i"), "html", null, true)) : ("Not set"));
                yield "
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-hourglass-end me-2 text-primary\"></i>
                                        <strong>Ends:</strong>
                                        ";
                // line 54
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 54)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 54), "M d, Y H:i"), "html", null, true)) : ("Not set"));
                yield "
                                    </p>

                                    ";
                // line 57
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", true, true, false, 57) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 57))) {
                    // line 58
                    yield "                                        <p class=\"card-text\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                            <strong>Location:</strong> ";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 60), "value", [], "any", false, false, false, 60), "html", null, true);
                    yield "
                                        </p>
                                    ";
                } else {
                    // line 63
                    yield "                                        <p class=\"card-text text-muted\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-muted\"></i>
                                            <strong>Location:</strong> Non défini
                                        </p>
                                    ";
                }
                // line 68
                yield "
                                    ";
                // line 69
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", true, true, false, 69) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", false, false, false, 69))) {
                    // line 70
                    yield "                                        <p class=\"card-text\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                            <strong>Gouvernorat:</strong> ";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "html", null, true);
                    yield "
                                        </p>
                                    ";
                }
                // line 75
                yield "                                </div>

                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <a href=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-eye me-1\"></i>View
                                    </a>
                                    <div class=\"btn-group\">
                                        <a href=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\" class=\"btn btn-warning\">
                                            <i class=\"fas fa-edit me-1\"></i>Edit
                                        </a>
                                        <form method=\"post\" action=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 86))), "html", null, true);
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
            // line 97
            yield "            ";
        }
        // line 98
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
        return array (  256 => 98,  253 => 97,  236 => 86,  232 => 85,  226 => 82,  219 => 78,  214 => 75,  208 => 72,  204 => 70,  202 => 69,  199 => 68,  192 => 63,  186 => 60,  182 => 58,  180 => 57,  174 => 54,  166 => 49,  158 => 44,  153 => 41,  148 => 40,  138 => 33,  130 => 27,  128 => 26,  118 => 19,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <h1 class=\"display-4 mb-0\">
                    <i class=\"fas fa-calendar-alt me-3\"></i>Event List
                </h1>
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
                                        <strong>Starts:</strong>
                                        {{ event.dateDebut ? event.dateDebut|date('M d, Y H:i') : 'Not set' }}
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-hourglass-end me-2 text-primary\"></i>
                                        <strong>Ends:</strong>
                                        {{ event.dateFin ? event.dateFin|date('M d, Y H:i') : 'Not set' }}
                                    </p>

                                    {% if event.lieu is defined and event.lieu %}
                                        <p class=\"card-text\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                            <strong>Location:</strong> {{ event.lieu.value }}
                                        </p>
                                    {% else %}
                                        <p class=\"card-text text-muted\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-muted\"></i>
                                            <strong>Location:</strong> Non défini
                                        </p>
                                    {% endif %}

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
{% endblock %}


", "event/index.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\Events\\templates\\event\\index.html.twig");
    }
}
