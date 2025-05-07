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

/* point_relais/edit.html.twig */
class __TwigTemplate_5b7f276579eeb3d88ca28e9a5c70fd4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "point_relais/edit.html.twig", 1);
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

        yield "Modifier le Point Relais";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
    <style>
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; }
        .button-primary:hover { background-color: #2563eb; }
        .button-secondary { background-color: #e5e7eb; color: #374151; }
        .button-secondary:hover { background-color: #d1d5db; }
        .form-input {
            width: 100%; padding: 0.5rem 0.75rem; border: 1px solid #d1d5db; border-radius: 0.375rem;
            font-size: 0.875rem; color: #1f2937; background-color: #fff; transition: border-color .15s ease-in-out;
        }
        .form-input:focus {
            outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        // line 25
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6 flex items-center\">
                <i class=\"fas fa-edit text-yellow-500 mr-2\"></i> Modifier le Point Relais
            </h1>

            ";
        // line 34
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 35
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 36
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show mb-4\" role=\"alert\">
                        ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "
            ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "data-turbo" => "false"]]);
        yield "

            ";
        // line 45
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45)) > 0)) {
            // line 46
            yield "                <div class=\"alert alert-danger mb-4\">
                    ";
            // line 47
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'errors');
            yield "
                </div>
            ";
        }
        // line 50
        yield "
            <div class=\"mb-4\">
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "addresse", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "addresse", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-input", "id" => "addressInput"]]);
        yield "
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "addresse", [], "any", false, false, false, 60), 'errors');
        yield "
            </div>

            <div class=\"mb-6\">
                <h5 class=\"text-lg font-semibold mb-2 text-gray-800\">Emplacement sur la carte :</h5>
                <div id=\"map\" style=\"height: 400px; border-radius: 10px; border: 1px solid #ccc;\"></div>
            </div>

            <div class=\"mb-6\">
                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "HoraireOuverture", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "HoraireOuverture", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "HoraireOuverture", [], "any", false, false, false, 71), 'errors');
        yield "
            </div>

            <div class=\"flex justify-between items-center mt-6\">
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_index");
        yield "\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour
                </a>
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-save mr-1\"></i> Enregistrer
                </button>
            </div>

            ";
        // line 83
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        yield "

        </div>
    </div>
</div>

";
        // line 90
        $context["coords"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "data", [], "any", false, false, false, 90), "addresse", [], "any", false, false, false, 90))) ? (Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "data", [], "any", false, false, false, 90), "addresse", [], "any", false, false, false, 90), ",")) : ([36.8065, 10.1815]));
        // line 91
        yield "<div id=\"map-coords\" data-lat=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coords"]) || array_key_exists("coords", $context) ? $context["coords"] : (function () { throw new RuntimeError('Variable "coords" does not exist.', 91, $this->source); })()), 0, [], "array", false, false, false, 91), "html", null, true);
        yield "\" data-lng=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coords"]) || array_key_exists("coords", $context) ? $context["coords"] : (function () { throw new RuntimeError('Variable "coords" does not exist.', 91, $this->source); })()), 1, [], "array", false, false, false, 91), "html", null, true);
        yield "\"></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
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

        // line 96
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const coordsDiv = document.getElementById('map-coords');
    const lat = parseFloat(coordsDiv.dataset.lat);
    const lng = parseFloat(coordsDiv.dataset.lng);

    const map = L.map('map').setView([lat, lng], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    let marker = L.marker([lat, lng], { draggable: true }).addTo(map);

    // Update address field on marker move
    marker.on('moveend', function (e) {
        const { lat, lng } = e.target.getLatLng();
        document.getElementById('addressInput').value = lat + ',' + lng;
    });

    // Click on map to place new marker
    map.on('click', function (e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker([e.latlng.lat, e.latlng.lng], { draggable: true }).addTo(map);
        document.getElementById('addressInput').value = e.latlng.lat + ',' + e.latlng.lng;

        marker.on('moveend', function (e) {
            const { lat, lng } = e.target.getLatLng();
            document.getElementById('addressInput').value = lat + ',' + lng;
        });
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
        return "point_relais/edit.html.twig";
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
        return array (  310 => 96,  297 => 95,  280 => 91,  278 => 90,  269 => 83,  258 => 75,  251 => 71,  247 => 70,  243 => 69,  231 => 60,  227 => 59,  223 => 58,  216 => 54,  212 => 53,  208 => 52,  204 => 50,  198 => 47,  195 => 46,  193 => 45,  188 => 43,  185 => 42,  179 => 41,  169 => 37,  164 => 36,  159 => 35,  154 => 34,  144 => 25,  131 => 24,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Point Relais{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
    <style>
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; }
        .button-primary:hover { background-color: #2563eb; }
        .button-secondary { background-color: #e5e7eb; color: #374151; }
        .button-secondary:hover { background-color: #d1d5db; }
        .form-input {
            width: 100%; padding: 0.5rem 0.75rem; border: 1px solid #d1d5db; border-radius: 0.375rem;
            font-size: 0.875rem; color: #1f2937; background-color: #fff; transition: border-color .15s ease-in-out;
        }
        .form-input:focus {
            outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6 flex items-center\">
                <i class=\"fas fa-edit text-yellow-500 mr-2\"></i> Modifier le Point Relais
            </h1>

            {# ✅ Flash messages #}
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }} alert-dismissible fade show mb-4\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                    </div>
                {% endfor %}
            {% endfor %}

            {{ form_start(form, { attr: { novalidate: 'novalidate', 'data-turbo': 'false' } }) }}

            {% if form.vars.errors|length > 0 %}
                <div class=\"alert alert-danger mb-4\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            <div class=\"mb-4\">
                {{ form_label(form.nom, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                {{ form_widget(form.nom, { attr: { class: 'form-input' } }) }}
                {{ form_errors(form.nom) }}
            </div>

            <div class=\"mb-4\">
                {{ form_label(form.addresse, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                {{ form_widget(form.addresse, { attr: { class: 'form-input', id: 'addressInput' } }) }}
                {{ form_errors(form.addresse) }}
            </div>

            <div class=\"mb-6\">
                <h5 class=\"text-lg font-semibold mb-2 text-gray-800\">Emplacement sur la carte :</h5>
                <div id=\"map\" style=\"height: 400px; border-radius: 10px; border: 1px solid #ccc;\"></div>
            </div>

            <div class=\"mb-6\">
                {{ form_label(form.HoraireOuverture, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                {{ form_widget(form.HoraireOuverture, { attr: { class: 'form-input' } }) }}
                {{ form_errors(form.HoraireOuverture) }}
            </div>

            <div class=\"flex justify-between items-center mt-6\">
                <a href=\"{{ path('point_relais_index') }}\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour
                </a>
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-save mr-1\"></i> Enregistrer
                </button>
            </div>

            {{ form_end(form) }}

        </div>
    </div>
</div>

{# 🧠 Export coordinates to JS safely #}
{% set coords = form.vars.data.addresse is not empty ? form.vars.data.addresse|split(',') : [36.8065, 10.1815] %}
<div id=\"map-coords\" data-lat=\"{{ coords[0] }}\" data-lng=\"{{ coords[1] }}\"></div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const coordsDiv = document.getElementById('map-coords');
    const lat = parseFloat(coordsDiv.dataset.lat);
    const lng = parseFloat(coordsDiv.dataset.lng);

    const map = L.map('map').setView([lat, lng], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    let marker = L.marker([lat, lng], { draggable: true }).addTo(map);

    // Update address field on marker move
    marker.on('moveend', function (e) {
        const { lat, lng } = e.target.getLatLng();
        document.getElementById('addressInput').value = lat + ',' + lng;
    });

    // Click on map to place new marker
    map.on('click', function (e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker([e.latlng.lat, e.latlng.lng], { draggable: true }).addTo(map);
        document.getElementById('addressInput').value = e.latlng.lat + ',' + e.latlng.lng;

        marker.on('moveend', function (e) {
            const { lat, lng } = e.target.getLatLng();
            document.getElementById('addressInput').value = lat + ',' + lng;
        });
    });
});
</script>
{% endblock %}
", "point_relais/edit.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/point_relais/edit.html.twig");
    }
}
