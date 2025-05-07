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

/* reclamation/admin_reclamations.html.twig */
class __TwigTemplate_3a47568113cf992c64fd61b23bb6c8d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/admin_reclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/admin_reclamations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/admin_reclamations.html.twig", 1);
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

        yield "Gestion des Réclamations";
        
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
    .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.4rem 0.75rem;
        border-radius: 0.375rem;
        font-weight: 500;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        font-size: 0.75rem;
        line-height: 1.25;
        white-space: nowrap;
        border: 1px solid transparent;
    }
    .button-danger { background-color: #ef4444; color: white; }
    .button-danger:hover { background-color: #dc2626; }
    .button-info { background-color: #0ea5e9; color: white; }
    .button-info:hover { background-color: #0284c7; }
    .button-success { background-color: #10b981; color: white; }
    .button-success:hover { background-color: #059669; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
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

        // line 33
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-6xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                <i class=\"fas fa-exclamation-circle text-blue-600 mr-2\"></i> Gestion des Réclamations
            </h1>

            <div class=\"overflow-x-auto\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Titre</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Description</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Date de création</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase\">Actions</th>
                        </tr>
                    </thead>

                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 54
            yield "                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 text-sm text-gray-900\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date_creation", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 text-right flex flex-wrap justify-end gap-2\">
                                    <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_reclamation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" class=\"button button-danger\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                                    </a>
                                    <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_response", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"button button-info\" title=\"Ajouter une réponse\">
                                        <i class=\"fas fa-reply mr-1\"></i> Répondre
                                    </a>
                                    <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_responses", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"button button-success\" title=\"Voir les réponses\">
                                        <i class=\"fas fa-comments mr-1\"></i> Réponses
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 71
            yield "                            <tr>
                                <td colspan=\"4\" class=\"text-center py-12 text-gray-500\">
                                    Aucune réclamation trouvée.
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return "reclamation/admin_reclamations.html.twig";
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
        return array (  228 => 77,  217 => 71,  215 => 70,  205 => 65,  199 => 62,  193 => 59,  188 => 57,  184 => 56,  180 => 55,  177 => 54,  172 => 53,  150 => 33,  137 => 32,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Réclamations{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.4rem 0.75rem;
        border-radius: 0.375rem;
        font-weight: 500;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        font-size: 0.75rem;
        line-height: 1.25;
        white-space: nowrap;
        border: 1px solid transparent;
    }
    .button-danger { background-color: #ef4444; color: white; }
    .button-danger:hover { background-color: #dc2626; }
    .button-info { background-color: #0ea5e9; color: white; }
    .button-info:hover { background-color: #0284c7; }
    .button-success { background-color: #10b981; color: white; }
    .button-success:hover { background-color: #059669; }
</style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-6xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                <i class=\"fas fa-exclamation-circle text-blue-600 mr-2\"></i> Gestion des Réclamations
            </h1>

            <div class=\"overflow-x-auto\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Titre</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Description</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Date de création</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase\">Actions</th>
                        </tr>
                    </thead>

                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        {% for reclamation in reclamations %}
                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 text-sm text-gray-900\">{{ reclamation.titre }}</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">{{ reclamation.description }}</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">{{ reclamation.date_creation|date('Y-m-d') }}</td>
                                <td class=\"px-4 py-3 text-right flex flex-wrap justify-end gap-2\">
                                    <a href=\"{{ path('delete_reclamation', {'id': reclamation.id}) }}\" class=\"button button-danger\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                                    </a>
                                    <a href=\"{{ path('add_response', {'id': reclamation.id}) }}\" class=\"button button-info\" title=\"Ajouter une réponse\">
                                        <i class=\"fas fa-reply mr-1\"></i> Répondre
                                    </a>
                                    <a href=\"{{ path('view_responses', {'id': reclamation.id}) }}\" class=\"button button-success\" title=\"Voir les réponses\">
                                        <i class=\"fas fa-comments mr-1\"></i> Réponses
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"text-center py-12 text-gray-500\">
                                    Aucune réclamation trouvée.
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
", "reclamation/admin_reclamations.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/admin_reclamations.html.twig");
    }
}
