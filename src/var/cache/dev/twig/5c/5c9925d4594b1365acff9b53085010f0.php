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

/* public/events.html.twig */
class __TwigTemplate_1ec184ed6960ca6d50ed4e02a3876504 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/events.html.twig", 1);
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

        yield "Événements";
        
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
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h1 class=\"display-4\"><i class=\"fas fa-calendar-alt me-3\"></i>Événements à venir</h1>
                <p class=\"lead\">Rejoignez nos événements et aventures en trottinette électrique !</p>
            </div>
        </div>

        ";
        // line 14
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "            <div class=\"alert alert-info\">
                <i class=\"fas fa-info-circle me-2\"></i>Aucun événement à venir pour le moment. Revenez plus tard !
            </div>
        ";
        } else {
            // line 19
            yield "            <div class=\"row g-4 mb-5\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 21
                yield "                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-3\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 24), "html", null, true);
                yield "</h5>
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-clock me-2 text-primary\"></i>
                                        <strong>Début :</strong> ";
                // line 28
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 28), "d/m/Y H:i"), "html", null, true)) : ("Non défini"));
                yield "
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-hourglass-end me-2 text-primary\"></i>
                                        <strong>Fin :</strong> ";
                // line 32
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 32), "d/m/Y H:i"), "html", null, true)) : ("Non défini"));
                yield "
                                    </p>
                                    <p class=\"card-text\">
                                        <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                        <strong>Lieu :</strong> ";
                // line 36
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getEnumValue(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 36)), "html", null, true)) : (""));
                yield "
                                    </p>
                                    ";
                // line 38
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", true, true, false, 38) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", false, false, false, 38))) {
                    // line 39
                    yield "                                        <p class=\"card-text\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                            <strong>Gouvernorat:</strong> ";
                    // line 41
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getEnumValue(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gouvernorat", [], "any", false, false, false, 41)), "html", null, true);
                    yield "
                                        </p>
                                    ";
                }
                // line 44
                yield "                                </div>
                                <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"btn btn-primary w-100\">
                                    <i class=\"fas fa-info-circle me-2\"></i>Voir les détails
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "            </div>
        ";
        }
        // line 54
        yield "
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h2 class=\"display-6\"><i class=\"fas fa-list me-3\"></i>Tous les événements</h2>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allEvents"]) || array_key_exists("allEvents", $context) ? $context["allEvents"] : (function () { throw new RuntimeError('Variable "allEvents" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 76
            yield "                                <tr>
                                    <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                                    <td>";
            // line 78
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 78)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 78), "d/m/Y H:i"), "html", null, true)) : ("Non défini"));
            yield "</td>
                                    <td>";
            // line 79
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 79)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getEnumValue(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 79)), "html", null, true)) : (""));
            yield "</td>
                                    <td>
                                        ";
            // line 81
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "statut", [], "any", false, false, false, 81) == "A_VENIR")) {
                // line 82
                yield "                                            <span class=\"badge bg-info\">À venir</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 83
$context["event"], "statut", [], "any", false, false, false, 83) == "EN_COURS")) {
                // line 84
                yield "                                            <span class=\"badge bg-success\">En cours</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 85
$context["event"], "statut", [], "any", false, false, false, 85) == "TERMINE")) {
                // line 86
                yield "                                            <span class=\"badge bg-secondary\">Terminé</span>
                                        ";
            } else {
                // line 88
                yield "                                            <span class=\"badge bg-danger\">Annulé</span>
                                        ";
            }
            // line 90
            yield "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                                            <i class=\"fas fa-eye\"></i> Détails
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 97
        if (!$context['_iterated']) {
            // line 98
            yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Aucun événement trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                        </tbody>
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
        return "public/events.html.twig";
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
        return array (  277 => 102,  268 => 98,  266 => 97,  256 => 92,  252 => 90,  248 => 88,  244 => 86,  242 => 85,  239 => 84,  237 => 83,  234 => 82,  232 => 81,  227 => 79,  223 => 78,  219 => 77,  216 => 76,  211 => 75,  188 => 54,  184 => 52,  171 => 45,  168 => 44,  162 => 41,  158 => 39,  156 => 38,  151 => 36,  144 => 32,  137 => 28,  130 => 24,  125 => 21,  121 => 20,  118 => 19,  112 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Événements{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <h1 class=\"display-4\"><i class=\"fas fa-calendar-alt me-3\"></i>Événements à venir</h1>
                <p class=\"lead\">Rejoignez nos événements et aventures en trottinette électrique !</p>
            </div>
        </div>

        {% if upcomingEvents is empty %}
            <div class=\"alert alert-info\">
                <i class=\"fas fa-info-circle me-2\"></i>Aucun événement à venir pour le moment. Revenez plus tard !
            </div>
        {% else %}
            <div class=\"row g-4 mb-5\">
                {% for event in upcomingEvents %}
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title mb-3\">{{ event.titre }}</h5>
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-clock me-2 text-primary\"></i>
                                        <strong>Début :</strong> {{ event.dateDebut ? event.dateDebut|date('d/m/Y H:i') : 'Non défini' }}
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-hourglass-end me-2 text-primary\"></i>
                                        <strong>Fin :</strong> {{ event.dateFin ? event.dateFin|date('d/m/Y H:i') : 'Non défini' }}
                                    </p>
                                    <p class=\"card-text\">
                                        <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                        <strong>Lieu :</strong> {{ event.lieu ? event.lieu|enum_value : '' }}
                                    </p>
                                    {% if event.gouvernorat is defined and event.gouvernorat %}
                                        <p class=\"card-text\">
                                            <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                            <strong>Gouvernorat:</strong> {{ event.gouvernorat|enum_value }}
                                        </p>
                                    {% endif %}
                                </div>
                                <a href=\"{{ path('app_public_event_show', {'id': event.id}) }}\" class=\"btn btn-primary w-100\">
                                    <i class=\"fas fa-info-circle me-2\"></i>Voir les détails
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}

        <div class=\"row mb-4\">
            <div class=\"col\">
                <h2 class=\"display-6\"><i class=\"fas fa-list me-3\"></i>Tous les événements</h2>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for event in allEvents %}
                                <tr>
                                    <td>{{ event.titre }}</td>
                                    <td>{{ event.dateDebut ? event.dateDebut|date('d/m/Y H:i') : 'Non défini' }}</td>
                                    <td>{{ event.lieu ? event.lieu|enum_value : '' }}</td>
                                    <td>
                                        {% if event.statut == 'A_VENIR' %}
                                            <span class=\"badge bg-info\">À venir</span>
                                        {% elseif event.statut == 'EN_COURS' %}
                                            <span class=\"badge bg-success\">En cours</span>
                                        {% elseif event.statut == 'TERMINE' %}
                                            <span class=\"badge bg-secondary\">Terminé</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Annulé</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('app_public_event_show', {'id': event.id}) }}\" class=\"btn btn-sm btn-primary\">
                                            <i class=\"fas fa-eye\"></i> Détails
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Aucun événement trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "public/events.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\Events\\Events\\templates\\public\\events.html.twig");
    }
}
