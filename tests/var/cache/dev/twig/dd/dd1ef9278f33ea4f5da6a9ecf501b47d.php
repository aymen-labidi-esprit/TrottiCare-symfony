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

/* maintenance/show.html.twig */
class __TwigTemplate_9dc65fa46bdbfcb5c1373aadad2e47b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/show.html.twig", 1);
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

        yield "Détails de la Maintenance";
        
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
        <h1>Détails de la Maintenance</h1>
        
        <div class=\"container-fluid px-4\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <div>
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Informations de la Maintenance
                    </div>
                    <div>
                        <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5 class=\"mb-3\">Informations de la Maintenance</h5>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Type</th>
                                        <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Date de début</th>
                                        <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 37, $this->source); })()), "dateDebut", [], "any", false, false, false, 37), "Y-m-d H:i"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Date de fin</th>
                                        <td>";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 41, $this->source); })()), "dateFin", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 41, $this->source); })()), "dateFin", [], "any", false, false, false, 41), "Y-m-d H:i"), "html", null, true)) : ("-"));
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Statut</th>
                                        <td>
                                            ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46) == "EN_COURS")) {
            // line 47
            yield "                                                <span class=\"badge bg-warning\">En cours</span>
                                            ";
        } else {
            // line 49
            yield "                                                <span class=\"badge bg-success\">Terminé</span>
                                            ";
        }
        // line 51
        yield "                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Trottinette ID</th>
                                        <td>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 55, $this->source); })()), "trottinetteId", [], "any", false, false, false, 55), "html", null, true);
        yield "</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5 class=\"mb-3\">Informations de la Trottinette</h5>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Modèle</th>
                                        <td>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 66, $this->source); })()), "trottinette", [], "any", false, false, false, 66), "modele", [], "any", false, false, false, 66), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Numéro de Série</th>
                                        <td>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 70, $this->source); })()), "trottinette", [], "any", false, false, false, 70), "numeroSerie", [], "any", false, false, false, 70), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>État</th>
                                        <td>
                                            ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 75, $this->source); })()), "trottinette", [], "any", false, false, false, 75), "etat", [], "any", false, false, false, 75) == "DISPONIBLE")) {
            // line 76
            yield "                                                <span class=\"badge bg-success\">Disponible</span>
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 77, $this->source); })()), "trottinette", [], "any", false, false, false, 77), "etat", [], "any", false, false, false, 77) == "EN_LOCATION")) {
            // line 78
            yield "                                                <span class=\"badge bg-warning\">En Location</span>
                                            ";
        } else {
            // line 80
            yield "                                                <span class=\"badge bg-danger\">En Maintenance</span>
                                            ";
        }
        // line 82
        yield "                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <h5 class=\"mb-3\">Description de la Maintenance</h5>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
        // line 93
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 93, $this->source); })()), "description", [], "any", false, false, false, 93), "html", null, true));
        yield "
                            </div>
                        </div>
                    </div>
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
        return "maintenance/show.html.twig";
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
        return array (  230 => 93,  217 => 82,  213 => 80,  209 => 78,  207 => 77,  204 => 76,  202 => 75,  194 => 70,  187 => 66,  173 => 55,  167 => 51,  163 => 49,  159 => 47,  157 => 46,  149 => 41,  142 => 37,  135 => 33,  119 => 20,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Maintenance{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Détails de la Maintenance</h1>
        
        <div class=\"container-fluid px-4\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <div>
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Informations de la Maintenance
                    </div>
                    <div>
                        <a href=\"{{ path('app_maintenance_edit', {'id': maintenance.id}) }}\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        <a href=\"{{ path('app_maintenance_index') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5 class=\"mb-3\">Informations de la Maintenance</h5>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Type</th>
                                        <td>{{ maintenance.type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date de début</th>
                                        <td>{{ maintenance.dateDebut|date('Y-m-d H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date de fin</th>
                                        <td>{{ maintenance.dateFin ? maintenance.dateFin|date('Y-m-d H:i') : '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Statut</th>
                                        <td>
                                            {% if maintenance.statut == 'EN_COURS' %}
                                                <span class=\"badge bg-warning\">En cours</span>
                                            {% else %}
                                                <span class=\"badge bg-success\">Terminé</span>
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Trottinette ID</th>
                                        <td>{{ maintenance.trottinetteId }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5 class=\"mb-3\">Informations de la Trottinette</h5>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Modèle</th>
                                        <td>{{ maintenance.trottinette.modele }}</td>
                                    </tr>
                                    <tr>
                                        <th>Numéro de Série</th>
                                        <td>{{ maintenance.trottinette.numeroSerie }}</td>
                                    </tr>
                                    <tr>
                                        <th>État</th>
                                        <td>
                                            {% if maintenance.trottinette.etat == 'DISPONIBLE' %}
                                                <span class=\"badge bg-success\">Disponible</span>
                                            {% elseif maintenance.trottinette.etat == 'EN_LOCATION' %}
                                                <span class=\"badge bg-warning\">En Location</span>
                                            {% else %}
                                                <span class=\"badge bg-danger\">En Maintenance</span>
                                            {% endif %}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <h5 class=\"mb-3\">Description de la Maintenance</h5>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {{ maintenance.description|nl2br }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "maintenance/show.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\maintenance\\show.html.twig");
    }
}
