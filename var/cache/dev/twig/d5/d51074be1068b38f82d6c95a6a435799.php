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

/* point_relais/new.html.twig */
class __TwigTemplate_bb8481b654be41ed24aba6fe5cb79b76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "point_relais/new.html.twig", 1);
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

        yield "Nouveau Point Relais";
        
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
    .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; font-size: 0.875rem; white-space: nowrap; }
    .button-primary { background-color: #10b981; color: white; }
    .button-primary:hover { background-color: #059669; }
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
        <i class=\"fas fa-plus-circle text-blue-600 mr-2\"></i> Nouveau Point Relais
      </h1>

      ";
        // line 34
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 35
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 36
                yield "          <div class=\"alert alert-";
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
            yield "      ";
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
            yield "        <div class=\"alert alert-danger mb-4\">
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

      <div class=\"mb-6\">
        <label for=\"map\" class=\"font-medium text-gray-700 mb-2 block\">Sélectionner l'emplacement :</label>
        <div id=\"map\" style=\"height: 400px; border-radius: 10px; border: 1px solid #ccc;\"></div>
      </div>

      <div class=\"mb-4 hidden\">
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "addresse", [], "any", false, false, false, 63), 'widget', ["attr" => ["id" => "addressInput"]]);
        yield "
      </div>

      <div class=\"mb-4\">
        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "HoraireOuverture", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "HoraireOuverture", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "HoraireOuverture", [], "any", false, false, false, 69), 'errors');
        yield "
      </div>

      <div class=\"flex justify-between items-center mt-6\">
        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_index");
        yield "\" class=\"button button-secondary\">
          <i class=\"fas fa-arrow-left mr-1\"></i> Retour
        </a>
        <button type=\"submit\" class=\"button button-primary\">
          <i class=\"fas fa-check mr-1\"></i> Enregistrer
        </button>
      </div>

      ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        yield "

    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('map').setView([36.8065, 10.1815], 13); // Default: Tunis center

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    let marker;

    map.on('click', function(e) {
        const { lat, lng } = e.latlng;

        if (marker) {
            marker.setLatLng([lat, lng]);
        } else {
            marker = L.marker([lat, lng], { draggable: true }).addTo(map);
        }

        document.getElementById('addressInput').value = lat + ',' + lng;

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
        return "point_relais/new.html.twig";
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
        return array (  291 => 90,  278 => 89,  260 => 81,  249 => 73,  242 => 69,  238 => 68,  234 => 67,  227 => 63,  215 => 54,  211 => 53,  207 => 52,  203 => 50,  197 => 47,  194 => 46,  192 => 45,  187 => 43,  184 => 42,  178 => 41,  168 => 37,  163 => 36,  158 => 35,  153 => 34,  143 => 25,  130 => 24,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Point Relais{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
<style>
    .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; font-size: 0.875rem; white-space: nowrap; }
    .button-primary { background-color: #10b981; color: white; }
    .button-primary:hover { background-color: #059669; }
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
        <i class=\"fas fa-plus-circle text-blue-600 mr-2\"></i> Nouveau Point Relais
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

      <div class=\"mb-6\">
        <label for=\"map\" class=\"font-medium text-gray-700 mb-2 block\">Sélectionner l'emplacement :</label>
        <div id=\"map\" style=\"height: 400px; border-radius: 10px; border: 1px solid #ccc;\"></div>
      </div>

      <div class=\"mb-4 hidden\">
        {{ form_widget(form.addresse, { attr: { id: 'addressInput' } }) }}
      </div>

      <div class=\"mb-4\">
        {{ form_label(form.HoraireOuverture, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
        {{ form_widget(form.HoraireOuverture, { attr: { class: 'form-input' } }) }}
        {{ form_errors(form.HoraireOuverture) }}
      </div>

      <div class=\"flex justify-between items-center mt-6\">
        <a href=\"{{ path('point_relais_index') }}\" class=\"button button-secondary\">
          <i class=\"fas fa-arrow-left mr-1\"></i> Retour
        </a>
        <button type=\"submit\" class=\"button button-primary\">
          <i class=\"fas fa-check mr-1\"></i> Enregistrer
        </button>
      </div>

      {{ form_end(form) }}

    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('map').setView([36.8065, 10.1815], 13); // Default: Tunis center

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    let marker;

    map.on('click', function(e) {
        const { lat, lng } = e.latlng;

        if (marker) {
            marker.setLatLng([lat, lng]);
        } else {
            marker = L.marker([lat, lng], { draggable: true }).addTo(map);
        }

        document.getElementById('addressInput').value = lat + ',' + lng;

        marker.on('moveend', function (e) {
            const { lat, lng } = e.target.getLatLng();
            document.getElementById('addressInput').value = lat + ',' + lng;
        });
    });
});
</script>
{% endblock %}
", "point_relais/new.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/point_relais/new.html.twig");
    }
}
