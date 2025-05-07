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

/* reclamation/list_reclamations.html.twig */
class __TwigTemplate_141145f2a8edafd7efcc7c1a208128bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list_reclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list_reclamations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/list_reclamations.html.twig", 1);
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

        yield "Liste des Réclamations";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.css\" rel=\"stylesheet\">
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
    .button-warning { background-color: #f59e0b; color: white; }
    .button-warning:hover { background-color: #d97706; }
    .button-danger { background-color: #ef4444; color: white; }
    .button-danger:hover { background-color: #dc2626; }
    .button-info { background-color: #0ea5e9; color: white; }
    .button-info:hover { background-color: #0284c7; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
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

        // line 34
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-6xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <div class=\"flex justify-between items-center mb-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">
                    <i class=\"fas fa-clipboard-list text-blue-600 mr-2\"></i> Liste des Réclamations
                </h1>
                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_reclamation");
        yield "\" class=\"button button-info\">
                    <i class=\"fas fa-plus mr-1\"></i> Créer une Réclamation
                </a>
            </div>

            <form method=\"get\" action=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_list");
        yield "\" class=\"bg-white rounded-lg shadow p-4 mb-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 items-end\">
                    <div>";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 49, $this->source); })()), "dateDebut", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-input"]]);
        yield "</div>
                    <div>";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 50, $this->source); })()), "dateFin", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-input"]]);
        yield "</div>
                    <div>";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 51, $this->source); })()), "typeReclamation", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-input"]]);
        yield "</div>
                    <div>";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 52, $this->source); })()), "userEmail", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-input"]]);
        yield "</div>
                    <div>
                        <button type=\"submit\" class=\"button button-primary w-full\">
                            <i class=\"fas fa-filter mr-1.5\"></i> Filtrer
                        </button>
                    </div>
                </div>
            </form>

            <div class=\"overflow-x-auto\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Titre</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Description</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Type de réclamation</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Date de création</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 73, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 74
            yield "                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 text-sm text-gray-900\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getTypeReclamation", [], "method", false, false, false, 77), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getDateCreation", [], "method", false, false, false, 78), "Y-m-d"), "html", null, true);
            yield "</td>
                                <td class=\"px-4 py-3 text-right flex flex-wrap justify-end gap-2\">
                                    <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_reclamation_front", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" class=\"button button-warning\" title=\"Modifier\">
                                        <i class=\"fas fa-edit mr-1\"></i> Modifier
                                    </a>
                                    <a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_reclamation_front", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\"
                                       class=\"button button-danger\"
                                       onclick=\"return confirm('Voulez-vous vraiment supprimer cette réclamation ?');\"
                                       title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                                    </a>
                                    <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_reclamation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" class=\"button button-info\" title=\"Voir\">
                                        <i class=\"fas fa-eye mr-1\"></i> Voir
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 94
        if (!$context['_iterated']) {
            // line 95
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-12 text-gray-500\">
                                    Aucune réclamation trouvée.
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                    </tbody>
                </table>
            </div>

            <div id=\"reclamation-calendar\" class=\"mt-10 bg-white rounded-lg shadow-md p-6\"></div>

        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
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

        // line 113
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js\"></script>

";
        // line 117
        $context["calendarEvents"] = [];
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 119
            yield "    ";
            $context["calendarEvents"] = Twig\Extension\CoreExtension::merge((isset($context["calendarEvents"]) || array_key_exists("calendarEvents", $context) ? $context["calendarEvents"] : (function () { throw new RuntimeError('Variable "calendarEvents" does not exist.', 119, $this->source); })()), [["title" => CoreExtension::getAttribute($this->env, $this->source,             // line 120
$context["reclamation"], "titre", [], "any", false, false, false, 120), "start" => $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,             // line 121
$context["reclamation"], "dateCreation", [], "any", false, false, false, 121), "Y-m-d"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_reclamation", ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 122
$context["reclamation"], "id", [], "any", false, false, false, 122)])]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('reclamation-calendar');

        // ✅ Safe JSON injection from Twig
        const eventData = JSON.parse(\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["calendarEvents"]) || array_key_exists("calendarEvents", $context) ? $context["calendarEvents"] : (function () { throw new RuntimeError('Variable "calendarEvents" does not exist.', 131, $this->source); })())), "js"), "html", null, true);
        yield "\");

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'fr',
            firstDay: 1,
            height: 'auto',
            events: eventData,
            eventClick: function(info) {
                info.jsEvent.preventDefault();
                if (info.event.url) {
                    window.open(info.event.url, '_blank');
                }
            }
        });

        calendar.render();
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
        return "reclamation/list_reclamations.html.twig";
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
        return array (  337 => 131,  329 => 125,  323 => 122,  322 => 121,  321 => 120,  319 => 119,  315 => 118,  313 => 117,  307 => 113,  294 => 112,  274 => 101,  263 => 95,  261 => 94,  251 => 89,  242 => 83,  236 => 80,  231 => 78,  227 => 77,  223 => 76,  219 => 75,  216 => 74,  211 => 73,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  170 => 47,  162 => 42,  152 => 34,  139 => 33,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Réclamations{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.css\" rel=\"stylesheet\">
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
    .button-warning { background-color: #f59e0b; color: white; }
    .button-warning:hover { background-color: #d97706; }
    .button-danger { background-color: #ef4444; color: white; }
    .button-danger:hover { background-color: #dc2626; }
    .button-info { background-color: #0ea5e9; color: white; }
    .button-info:hover { background-color: #0284c7; }
</style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-6xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <div class=\"flex justify-between items-center mb-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">
                    <i class=\"fas fa-clipboard-list text-blue-600 mr-2\"></i> Liste des Réclamations
                </h1>
                <a href=\"{{ path('create_reclamation') }}\" class=\"button button-info\">
                    <i class=\"fas fa-plus mr-1\"></i> Créer une Réclamation
                </a>
            </div>

            <form method=\"get\" action=\"{{ path('reclamation_list') }}\" class=\"bg-white rounded-lg shadow p-4 mb-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 items-end\">
                    <div>{{ form_row(searchForm.dateDebut, { attr: { class: 'form-input' } }) }}</div>
                    <div>{{ form_row(searchForm.dateFin, { attr: { class: 'form-input' } }) }}</div>
                    <div>{{ form_row(searchForm.typeReclamation, { attr: { class: 'form-input' } }) }}</div>
                    <div>{{ form_row(searchForm.userEmail, { attr: { class: 'form-input' } }) }}</div>
                    <div>
                        <button type=\"submit\" class=\"button button-primary w-full\">
                            <i class=\"fas fa-filter mr-1.5\"></i> Filtrer
                        </button>
                    </div>
                </div>
            </form>

            <div class=\"overflow-x-auto\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Titre</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Description</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Type de réclamation</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Date de création</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        {% for reclamation in reclamations %}
                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-3 text-sm text-gray-900\">{{ reclamation.titre }}</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">{{ reclamation.description }}</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">{{ reclamation.getTypeReclamation() }}</td>
                                <td class=\"px-4 py-3 text-sm text-gray-700\">{{ reclamation.getDateCreation()|date('Y-m-d') }}</td>
                                <td class=\"px-4 py-3 text-right flex flex-wrap justify-end gap-2\">
                                    <a href=\"{{ path('edit_reclamation_front', {'id': reclamation.id}) }}\" class=\"button button-warning\" title=\"Modifier\">
                                        <i class=\"fas fa-edit mr-1\"></i> Modifier
                                    </a>
                                    <a href=\"{{ path('delete_reclamation_front', {'id': reclamation.id}) }}\"
                                       class=\"button button-danger\"
                                       onclick=\"return confirm('Voulez-vous vraiment supprimer cette réclamation ?');\"
                                       title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                                    </a>
                                    <a href=\"{{ path('show_reclamation', {'id': reclamation.id}) }}\" class=\"button button-info\" title=\"Voir\">
                                        <i class=\"fas fa-eye mr-1\"></i> Voir
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-12 text-gray-500\">
                                    Aucune réclamation trouvée.
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <div id=\"reclamation-calendar\" class=\"mt-10 bg-white rounded-lg shadow-md p-6\"></div>

        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js\"></script>

{# ✅ Twig-safe preparation of calendar events #}
{% set calendarEvents = [] %}
{% for reclamation in reclamations %}
    {% set calendarEvents = calendarEvents|merge([{
        title: reclamation.titre,
        start: reclamation.dateCreation|date('Y-m-d'),
        url: path('show_reclamation', { id: reclamation.id })
    }]) %}
{% endfor %}

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('reclamation-calendar');

        // ✅ Safe JSON injection from Twig
        const eventData = JSON.parse(\"{{ calendarEvents|json_encode|e('js') }}\");

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'fr',
            firstDay: 1,
            height: 'auto',
            events: eventData,
            eventClick: function(info) {
                info.jsEvent.preventDefault();
                if (info.event.url) {
                    window.open(info.event.url, '_blank');
                }
            }
        });

        calendar.render();
    });
</script>
{% endblock %}
", "reclamation/list_reclamations.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/list_reclamations.html.twig");
    }
}
