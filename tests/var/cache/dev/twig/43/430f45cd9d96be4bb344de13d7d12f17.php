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

/* reservation/show.html.twig */
class __TwigTemplate_42451065fe36eb853b254b5a92530fc9 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/show.html.twig", 1);
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

        yield "Détails de la Réservation";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 fade-in\">
                <div class=\"card-header bg-primary text-white d-flex align-items-center\">
                    <i class=\"fas fa-calendar-check me-2\"></i>
                    <h3 class=\"mb-0\">Détails de la Réservation</h3>
                </div>

                <div class=\"card-body p-4\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>ID</strong>
                            <span>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Date de début</strong>
                            <span>";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true)) : (""));
        yield "</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Date de fin</strong>
                            <span>";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "dateFin", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "dateFin", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true)) : (""));
        yield "</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Montant</strong>
                            <span>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "montant", [], "any", false, false, false, 31), "html", null, true);
        yield " €</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Status</strong>
                            <span class=\"badge bg-info text-dark\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), "label", [], "method", false, false, false, 35), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Mode de Paiement</strong>
                            <span class=\"badge bg-secondary\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 39, $this->source); })()), "paiement", [], "any", false, false, false, 39), "label", [], "method", false, false, false, 39), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Date de fin</strong>
                            <span>";
        // line 43
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "dateCreation", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "dateCreation", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true)) : (""));
        yield "</span>
                        </li>
                        
                    </ul>
                </div>

                <div class=\"card-footer bg-light d-flex flex-column flex-md-row justify-content-between align-items-center gap-3\">
                    <div class=\"d-flex gap-2\">
                        <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>

                        <button
                            type=\"button\"
                            class=\"btn btn-danger\"
                            data-bs-toggle=\"modal\"
                            data-bs-target=\"#deleteModal\"
                            data-action=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\"
                            data-token=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61))), "html", null, true);
        yield "\"
                        >
                            <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                        </button>
                    </div>

                    <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 77
        yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" id=\"deleteForm\">
                <div class=\"modal-header bg-danger text-white\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer cette réservation ?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const action = button.getAttribute('data-action');
            const token = button.getAttribute('data-token');

            const form = deleteModal.querySelector('form');
            form.setAttribute('action', action);

            let tokenInput = form.querySelector('input[name=\"_token\"]');
            if (!tokenInput) {
                tokenInput = document.createElement('input');
                tokenInput.type = 'hidden';
                tokenInput.name = '_token';
                form.appendChild(tokenInput);
            }
            tokenInput.value = token;
        });
    </script>
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
        return "reservation/show.html.twig";
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
        return array (  249 => 99,  236 => 98,  206 => 77,  194 => 67,  185 => 61,  181 => 60,  169 => 51,  158 => 43,  151 => 39,  144 => 35,  137 => 31,  130 => 27,  123 => 23,  116 => 19,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Réservation{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 fade-in\">
                <div class=\"card-header bg-primary text-white d-flex align-items-center\">
                    <i class=\"fas fa-calendar-check me-2\"></i>
                    <h3 class=\"mb-0\">Détails de la Réservation</h3>
                </div>

                <div class=\"card-body p-4\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>ID</strong>
                            <span>{{ reservation.id }}</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Date de début</strong>
                            <span>{{ reservation.dateDebut ? reservation.dateDebut|date('Y-m-d') : '' }}</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Date de fin</strong>
                            <span>{{ reservation.dateFin ? reservation.dateFin|date('Y-m-d') : '' }}</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Montant</strong>
                            <span>{{ reservation.montant }} €</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Status</strong>
                            <span class=\"badge bg-info text-dark\">{{ reservation.status.label() }}</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Mode de Paiement</strong>
                            <span class=\"badge bg-secondary\">{{ reservation.paiement.label() }}</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Date de fin</strong>
                            <span>{{ reservation.dateCreation ? reservation.dateCreation|date('Y-m-d') : '' }}</span>
                        </li>
                        
                    </ul>
                </div>

                <div class=\"card-footer bg-light d-flex flex-column flex-md-row justify-content-between align-items-center gap-3\">
                    <div class=\"d-flex gap-2\">
                        <a href=\"{{ path('reservation_edit', {id: reservation.id}) }}\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>

                        <button
                            type=\"button\"
                            class=\"btn btn-danger\"
                            data-bs-toggle=\"modal\"
                            data-bs-target=\"#deleteModal\"
                            data-action=\"{{ path('reservation_delete', {id: reservation.id}) }}\"
                            data-token=\"{{ csrf_token('delete' ~ reservation.id) }}\"
                        >
                            <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                        </button>
                    </div>

                    <a href=\"{{ path('reservation_index') }}\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{# ✅ Delete Confirmation Modal #}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" id=\"deleteForm\">
                <div class=\"modal-header bg-danger text-white\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer cette réservation ?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const action = button.getAttribute('data-action');
            const token = button.getAttribute('data-token');

            const form = deleteModal.querySelector('form');
            form.setAttribute('action', action);

            let tokenInput = form.querySelector('input[name=\"_token\"]');
            if (!tokenInput) {
                tokenInput = document.createElement('input');
                tokenInput.type = 'hidden';
                tokenInput.name = '_token';
                form.appendChild(tokenInput);
            }
            tokenInput.value = token;
        });
    </script>
{% endblock %}
", "reservation/show.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\reservation\\show.html.twig");
    }
}
