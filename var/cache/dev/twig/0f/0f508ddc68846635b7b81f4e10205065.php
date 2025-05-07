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

/* reclamation/create_reclamation.html.twig */
class __TwigTemplate_02256d9db529b3da43fcc66208c350f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/create_reclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/create_reclamation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/create_reclamation.html.twig", 1);
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

        yield "Créer une Réclamation";
        
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
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-weight: 500;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        border: 1px solid transparent;
        font-size: 0.875rem;
        white-space: nowrap;
    }
    .button-primary { background-color: #3b82f6; color: white; }
    .button-primary:hover { background-color: #2563eb; }
    .form-input, .form-select {
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        color: #1f2937;
        background-color: #fff;
        transition: border-color .15s ease-in-out;
    }
    .form-input:focus, .form-select:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 1px #3b82f6;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                <i class=\"fas fa-plus-circle text-blue-600 mr-2\"></i> Créer une nouvelle réclamation
            </h1>

            ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "data-turbo" => "false"]]);
        yield "

            ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "                <div class=\"alert alert-danger mb-4\">
                    ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'errors');
            yield "
                </div>
            ";
        }
        // line 58
        yield "
            <div class=\"space-y-4\">

                <div>
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "titre", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "titre", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Entrez le titre de la réclamation"]]);
        yield "
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "titre", [], "any", false, false, false, 64), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Décrivez votre réclamation"]]);
        yield "
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "type_reclamation", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "type_reclamation", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "type_reclamation", [], "any", false, false, false, 76), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "user_email", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "user_email", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Votre email"]]);
        yield "
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "user_email", [], "any", false, false, false, 82), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "id_trottinette", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "id_trottinette", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "ID de la trottinette"]]);
        yield "
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "id_trottinette", [], "any", false, false, false, 88), 'errors');
        yield "
                </div>

            </div>

            <div class=\"flex justify-end mt-8\">
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-paper-plane mr-1\"></i> Envoyer
                </button>
            </div>

            ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        yield "

        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
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

        // line 107
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        let isValid = true;

        const title = document.querySelector('#reclamation_titre');
        const description = document.querySelector('#reclamation_description');
        const email = document.querySelector('#reclamation_user_email');

        if (!title.value || title.value.length < 5) {
            isValid = false;
            alert(\"Le titre doit contenir au moins 5 caractères.\");
        }
        if (!description.value) {
            isValid = false;
            alert(\"La description ne peut pas être vide.\");
        }
        if (!email.value || !email.value.includes('@')) {
            isValid = false;
            alert(\"L'email est invalide.\");
        }

        if (!isValid) {
            e.preventDefault();
        }
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
        return "reclamation/create_reclamation.html.twig";
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
        return array (  305 => 107,  292 => 106,  275 => 99,  261 => 88,  257 => 87,  253 => 86,  246 => 82,  242 => 81,  238 => 80,  231 => 76,  227 => 75,  223 => 74,  216 => 70,  212 => 69,  208 => 68,  201 => 64,  197 => 63,  193 => 62,  187 => 58,  181 => 55,  178 => 54,  176 => 53,  171 => 51,  161 => 43,  148 => 42,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer une Réclamation{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-weight: 500;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        border: 1px solid transparent;
        font-size: 0.875rem;
        white-space: nowrap;
    }
    .button-primary { background-color: #3b82f6; color: white; }
    .button-primary:hover { background-color: #2563eb; }
    .form-input, .form-select {
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        color: #1f2937;
        background-color: #fff;
        transition: border-color .15s ease-in-out;
    }
    .form-input:focus, .form-select:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 1px #3b82f6;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                <i class=\"fas fa-plus-circle text-blue-600 mr-2\"></i> Créer une nouvelle réclamation
            </h1>

            {{ form_start(form, { attr: { novalidate: 'novalidate', 'data-turbo': 'false' } }) }}

            {% if form.vars.errors|length > 0 %}
                <div class=\"alert alert-danger mb-4\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            <div class=\"space-y-4\">

                <div>
                    {{ form_label(form.titre, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.titre, { attr: { class: 'form-input', placeholder: 'Entrez le titre de la réclamation' } }) }}
                    {{ form_errors(form.titre) }}
                </div>

                <div>
                    {{ form_label(form.description, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.description, { attr: { class: 'form-input', placeholder: 'Décrivez votre réclamation' } }) }}
                    {{ form_errors(form.description) }}
                </div>

                <div>
                    {{ form_label(form.type_reclamation, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.type_reclamation, { attr: { class: 'form-select' } }) }}
                    {{ form_errors(form.type_reclamation) }}
                </div>

                <div>
                    {{ form_label(form.user_email, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.user_email, { attr: { class: 'form-input', placeholder: 'Votre email' } }) }}
                    {{ form_errors(form.user_email) }}
                </div>

                <div>
                    {{ form_label(form.id_trottinette, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.id_trottinette, { attr: { class: 'form-input', placeholder: 'ID de la trottinette' } }) }}
                    {{ form_errors(form.id_trottinette) }}
                </div>

            </div>

            <div class=\"flex justify-end mt-8\">
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-paper-plane mr-1\"></i> Envoyer
                </button>
            </div>

            {{ form_end(form) }}

        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        let isValid = true;

        const title = document.querySelector('#reclamation_titre');
        const description = document.querySelector('#reclamation_description');
        const email = document.querySelector('#reclamation_user_email');

        if (!title.value || title.value.length < 5) {
            isValid = false;
            alert(\"Le titre doit contenir au moins 5 caractères.\");
        }
        if (!description.value) {
            isValid = false;
            alert(\"La description ne peut pas être vide.\");
        }
        if (!email.value || !email.value.includes('@')) {
            isValid = false;
            alert(\"L'email est invalide.\");
        }

        if (!isValid) {
            e.preventDefault();
        }
    });
});
</script>
{% endblock %}
", "reclamation/create_reclamation.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/create_reclamation.html.twig");
    }
}
