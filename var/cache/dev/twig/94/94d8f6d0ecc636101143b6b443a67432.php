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
class __TwigTemplate_c992449b49f489628dc9008c50c91ff8 extends Template
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
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
    .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; }
    .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; }
    .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">
            <h1 class=\"text-2xl font-bold text-gray-900 mb-6 flex items-center\">
                <i class=\"fas fa-calendar-check text-blue-600 mr-2\"></i> Détails de la Réservation
            </h1>

            <ul class=\"divide-y divide-gray-200 mb-6\">
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">ID</span><span>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Date de début</span><span>";
        // line 25
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "dateDebut", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "dateDebut", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true)) : (""));
        yield "</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Date de fin</span><span>";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "dateFin", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "dateFin", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true)) : (""));
        yield "</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Montant</span><span>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "montant", [], "any", false, false, false, 27), "html", null, true);
        yield " €</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Status</span><span class=\"px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28), "label", [], "method", false, false, false, 28), "html", null, true);
        yield "</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Mode de Paiement</span><span class=\"px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-xs\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "paiement", [], "any", false, false, false, 29), "label", [], "method", false, false, false, 29), "html", null, true);
        yield "</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Date de création</span><span>";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "dateCreation", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "dateCreation", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true)) : (""));
        yield "</span></li>
            </ul>

            <div class=\"flex flex-col md:flex-row justify-between items-center gap-4\">
                <div class=\"flex gap-2\">
                    <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"button button-primary\">
                        <i class=\"fas fa-edit mr-1\"></i> Modifier
                    </a>
                    <button type=\"button\" 
                        class=\"button button-danger openDeleteModalBtn\"
                        data-action=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\"
                        data-token=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41))), "html", null, true);
        yield "\">
                        <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                    </button>
                </div>
                <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
</div>

";
        // line 54
        yield "<div id=\"deleteModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
    <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-sm\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Confirmer la suppression</h2>
        <p class=\"text-sm text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer cette réservation ?</p>

        <form method=\"post\" id=\"deleteForm\">
            <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
            <div class=\"flex justify-end gap-2\">
                <button type=\"button\" id=\"cancelDeleteBtn\" class=\"button button-secondary\">Annuler</button>
                <button type=\"submit\" class=\"button button-danger\">Supprimer</button>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
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

        // line 71
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteModal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');
        const deleteTokenInput = document.getElementById('deleteToken');
        const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

        document.querySelectorAll('.openDeleteModalBtn').forEach(button => {
            button.addEventListener('click', () => {
                const action = button.getAttribute('data-action');
                const token = button.getAttribute('data-token');

                deleteForm.setAttribute('action', action);
                deleteTokenInput.value = token;

                deleteModal.classList.remove('hidden');
            });
        });

        cancelDeleteBtn.addEventListener('click', () => {
            deleteModal.classList.add('hidden');
        });
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
        return array (  244 => 71,  231 => 70,  206 => 54,  195 => 45,  188 => 41,  184 => 40,  176 => 35,  168 => 30,  164 => 29,  160 => 28,  156 => 27,  152 => 26,  148 => 25,  144 => 24,  134 => 16,  121 => 15,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Réservation{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
    .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; }
    .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; }
    .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; }
</style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">
            <h1 class=\"text-2xl font-bold text-gray-900 mb-6 flex items-center\">
                <i class=\"fas fa-calendar-check text-blue-600 mr-2\"></i> Détails de la Réservation
            </h1>

            <ul class=\"divide-y divide-gray-200 mb-6\">
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">ID</span><span>{{ reservation.id }}</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Date de début</span><span>{{ reservation.dateDebut ? reservation.dateDebut|date('Y-m-d') : '' }}</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Date de fin</span><span>{{ reservation.dateFin ? reservation.dateFin|date('Y-m-d') : '' }}</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Montant</span><span>{{ reservation.montant }} €</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Status</span><span class=\"px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs\">{{ reservation.status.label() }}</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Mode de Paiement</span><span class=\"px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-xs\">{{ reservation.paiement.label() }}</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Date de création</span><span>{{ reservation.dateCreation ? reservation.dateCreation|date('Y-m-d') : '' }}</span></li>
            </ul>

            <div class=\"flex flex-col md:flex-row justify-between items-center gap-4\">
                <div class=\"flex gap-2\">
                    <a href=\"{{ path('reservation_edit', {id: reservation.id}) }}\" class=\"button button-primary\">
                        <i class=\"fas fa-edit mr-1\"></i> Modifier
                    </a>
                    <button type=\"button\" 
                        class=\"button button-danger openDeleteModalBtn\"
                        data-action=\"{{ path('reservation_delete', {id: reservation.id}) }}\"
                        data-token=\"{{ csrf_token('delete' ~ reservation.id) }}\">
                        <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                    </button>
                </div>
                <a href=\"{{ path('reservation_index') }}\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
</div>

{# Delete Confirmation Modal (Tailwind Style) #}
<div id=\"deleteModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
    <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-sm\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Confirmer la suppression</h2>
        <p class=\"text-sm text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer cette réservation ?</p>

        <form method=\"post\" id=\"deleteForm\">
            <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
            <div class=\"flex justify-end gap-2\">
                <button type=\"button\" id=\"cancelDeleteBtn\" class=\"button button-secondary\">Annuler</button>
                <button type=\"submit\" class=\"button button-danger\">Supprimer</button>
            </div>
        </form>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteModal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');
        const deleteTokenInput = document.getElementById('deleteToken');
        const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

        document.querySelectorAll('.openDeleteModalBtn').forEach(button => {
            button.addEventListener('click', () => {
                const action = button.getAttribute('data-action');
                const token = button.getAttribute('data-token');

                deleteForm.setAttribute('action', action);
                deleteTokenInput.value = token;

                deleteModal.classList.remove('hidden');
            });
        });

        cancelDeleteBtn.addEventListener('click', () => {
            deleteModal.classList.add('hidden');
        });
    });
</script>
{% endblock %}
", "reservation/show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reservation/show.html.twig");
    }
}
