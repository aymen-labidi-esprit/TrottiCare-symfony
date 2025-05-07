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

/* point_relais/show.html.twig */
class __TwigTemplate_7fc99e37b41fa7c707e789f003e2a9c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "point_relais/show.html.twig", 1);
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

        yield "Détails du Point Relais";
        
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
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
<style>
    .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
    .button-primary { background-color: #3b82f6; color: white; }
    .button-primary:hover { background-color: #2563eb; }
    .button-secondary { background-color: #e5e7eb; color: #374151; }
    .button-secondary:hover { background-color: #d1d5db; }
    .button-danger { background-color: #ef4444; color: white; }
    .button-danger:hover { background-color: #dc2626; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
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

        // line 20
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">
            <h1 class=\"text-2xl font-bold text-gray-900 mb-6 flex items-center\">
                <i class=\"fas fa-store-alt text-blue-600 mr-2\"></i> Détails du Point Relais
            </h1>

            <ul class=\"divide-y divide-gray-200 mb-6\">
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">ID</span><span>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        yield "</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Nom</span><span>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Adresse</span><span>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 30, $this->source); })()), "addresse", [], "any", false, false, false, 30), "html", null, true);
        yield "</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Horaire d'ouverture</span><span>";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 31, $this->source); })()), "HoraireOuverture", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 31, $this->source); })()), "HoraireOuverture", [], "any", false, false, false, 31), "H:i \\l\\e d/m/Y"), "html", null, true)) : (""));
        yield "</span></li>
            </ul>

            <div class=\"mt-4\">
                <h5 class=\"text-lg font-semibold mb-2 text-gray-800\">Emplacement sur la carte :</h5>
                <div id=\"map\" style=\"height: 400px; border-radius: 10px; border: 1px solid #ccc;\"></div>
            </div>

            <div class=\"flex flex-col md:flex-row justify-between items-center gap-4 mt-6\">
                <div class=\"flex gap-2\">
                    <a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\" class=\"button button-primary\">
                        <i class=\"fas fa-edit mr-1\"></i> Modifier
                    </a>
                    <button type=\"button\"
                        class=\"button button-danger openDeleteModalBtn\"
                        data-action=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\"
                        data-token=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47))), "html", null, true);
        yield "\">
                        <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                    </button>
                </div>
                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_index");
        yield "\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
</div>

";
        // line 60
        $context["coords"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 60, $this->source); })()), "addresse", [], "any", false, false, false, 60))) ? (Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 60, $this->source); })()), "addresse", [], "any", false, false, false, 60), ",")) : ([null, null]));
        // line 61
        yield "<div id=\"map-coords\" data-lat=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["coords"] ?? null), 0, [], "array", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coords"]) || array_key_exists("coords", $context) ? $context["coords"] : (function () { throw new RuntimeError('Variable "coords" does not exist.', 61, $this->source); })()), 0, [], "array", false, false, false, 61), null)) : (null)), "html", null, true);
        yield "\" data-lng=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["coords"] ?? null), 1, [], "array", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coords"]) || array_key_exists("coords", $context) ? $context["coords"] : (function () { throw new RuntimeError('Variable "coords" does not exist.', 61, $this->source); })()), 1, [], "array", false, false, false, 61), null)) : (null)), "html", null, true);
        yield "\"></div>

";
        // line 64
        yield "<div id=\"deleteModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
    <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-sm\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Confirmer la suppression</h2>
        <p class=\"text-sm text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer ce point relais ?</p>

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

    // line 80
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

        // line 81
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Map logic
    const map = L.map('map').setView([36.8065, 10.1815], 5); // Default Tunisia

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const coordsDiv = document.getElementById('map-coords');
    const lat = parseFloat(coordsDiv.dataset.lat);
    const lng = parseFloat(coordsDiv.dataset.lng);

    if (!isNaN(lat) && !isNaN(lng)) {
        const marker = L.marker([lat, lng]).addTo(map);
        map.setView([lat, lng], 15);
    }

    // Delete modal logic
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
        return "point_relais/show.html.twig";
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
        return array (  251 => 81,  238 => 80,  213 => 64,  205 => 61,  203 => 60,  192 => 51,  185 => 47,  181 => 46,  173 => 41,  160 => 31,  156 => 30,  152 => 29,  148 => 28,  138 => 20,  125 => 19,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Point Relais{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
<style>
    .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
    .button-primary { background-color: #3b82f6; color: white; }
    .button-primary:hover { background-color: #2563eb; }
    .button-secondary { background-color: #e5e7eb; color: #374151; }
    .button-secondary:hover { background-color: #d1d5db; }
    .button-danger { background-color: #ef4444; color: white; }
    .button-danger:hover { background-color: #dc2626; }
</style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">
            <h1 class=\"text-2xl font-bold text-gray-900 mb-6 flex items-center\">
                <i class=\"fas fa-store-alt text-blue-600 mr-2\"></i> Détails du Point Relais
            </h1>

            <ul class=\"divide-y divide-gray-200 mb-6\">
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">ID</span><span>{{ point_relais.id }}</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Nom</span><span>{{ point_relais.nom }}</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Adresse</span><span>{{ point_relais.addresse }}</span></li>
                <li class=\"py-4 flex justify-between\"><span class=\"font-medium text-gray-700\">Horaire d'ouverture</span><span>{{ point_relais.HoraireOuverture ? point_relais.HoraireOuverture|date('H:i \\\\l\\\\e d/m/Y') : '' }}</span></li>
            </ul>

            <div class=\"mt-4\">
                <h5 class=\"text-lg font-semibold mb-2 text-gray-800\">Emplacement sur la carte :</h5>
                <div id=\"map\" style=\"height: 400px; border-radius: 10px; border: 1px solid #ccc;\"></div>
            </div>

            <div class=\"flex flex-col md:flex-row justify-between items-center gap-4 mt-6\">
                <div class=\"flex gap-2\">
                    <a href=\"{{ path('point_relais_edit', {id: point_relais.id}) }}\" class=\"button button-primary\">
                        <i class=\"fas fa-edit mr-1\"></i> Modifier
                    </a>
                    <button type=\"button\"
                        class=\"button button-danger openDeleteModalBtn\"
                        data-action=\"{{ path('point_relais_delete', {id: point_relais.id}) }}\"
                        data-token=\"{{ csrf_token('delete' ~ point_relais.id) }}\">
                        <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                    </button>
                </div>
                <a href=\"{{ path('point_relais_index') }}\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
</div>

{# 🧠 Export lat/lng inside a hidden div #}
{% set coords = point_relais.addresse is not empty ? point_relais.addresse|split(',') : [null, null] %}
<div id=\"map-coords\" data-lat=\"{{ coords[0]|default(null) }}\" data-lng=\"{{ coords[1]|default(null) }}\"></div>

{# Delete Confirmation Modal (fixed Tailwind version) #}
<div id=\"deleteModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
    <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-sm\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Confirmer la suppression</h2>
        <p class=\"text-sm text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer ce point relais ?</p>

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
<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Map logic
    const map = L.map('map').setView([36.8065, 10.1815], 5); // Default Tunisia

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const coordsDiv = document.getElementById('map-coords');
    const lat = parseFloat(coordsDiv.dataset.lat);
    const lng = parseFloat(coordsDiv.dataset.lng);

    if (!isNaN(lat) && !isNaN(lng)) {
        const marker = L.marker([lat, lng]).addTo(map);
        map.setView([lat, lng], 15);
    }

    // Delete modal logic
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
", "point_relais/show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/point_relais/show.html.twig");
    }
}
