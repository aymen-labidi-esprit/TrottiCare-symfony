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

/* reclamation/edit_reclamation.html.twig */
class __TwigTemplate_32855e8b89b01c2cc6d8e321d4d070b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit_reclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit_reclamation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/edit_reclamation.html.twig", 1);
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

        yield "Modifier la Réclamation";
        
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
    .button-secondary { background-color: #e5e7eb; color: #374151; }
    .button-secondary:hover { background-color: #d1d5db; }
    .form-input, .form-select, textarea {
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        color: #1f2937;
        background-color: #fff;
        transition: border-color .15s ease-in-out;
    }
    .form-input:focus, .form-select:focus, textarea:focus {
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

    // line 44
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

        // line 45
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-3xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                Modifier la Réclamation : <span class=\"text-blue-600\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 50, $this->source); })()), "titre", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
            </h1>

            ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "data-turbo" => "false"]]);
        yield "

            ";
        // line 55
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55)) > 0)) {
            // line 56
            yield "                <div class=\"alert alert-danger mb-4\">
                    ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'errors');
            yield "
                </div>
            ";
        }
        // line 60
        yield "
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">

                <div>
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "titre", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "titre", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "titre", [], "any", false, false, false, 66), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "user_email", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "user_email", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "user_email", [], "any", false, false, false, 72), 'errors');
        yield "
                </div>

                <div class=\"md:col-span-2\">
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-input", "rows" => 5]]);
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "type_reclamation", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "type_reclamation", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "type_reclamation", [], "any", false, false, false, 84), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "id_trottinette", [], "any", false, false, false, 88), 'label', ["label_attr" => ["class" => "font-medium text-gray-700 mb-1 block"]]);
        yield "
                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "id_trottinette", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "id_trottinette", [], "any", false, false, false, 90), 'errors');
        yield "
                </div>

            </div>

            <div class=\"flex justify-end gap-4 mt-8\">
                <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_list");
        yield "\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Annuler
                </a>
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-save mr-1\"></i> Enregistrer
                </button>
            </div>

            ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        yield "

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
        return "reclamation/edit_reclamation.html.twig";
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
        return array (  285 => 104,  274 => 96,  265 => 90,  261 => 89,  257 => 88,  250 => 84,  246 => 83,  242 => 82,  235 => 78,  231 => 77,  227 => 76,  220 => 72,  216 => 71,  212 => 70,  205 => 66,  201 => 65,  197 => 64,  191 => 60,  185 => 57,  182 => 56,  180 => 55,  175 => 53,  169 => 50,  162 => 45,  149 => 44,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier la Réclamation{% endblock %}

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
    .button-secondary { background-color: #e5e7eb; color: #374151; }
    .button-secondary:hover { background-color: #d1d5db; }
    .form-input, .form-select, textarea {
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        color: #1f2937;
        background-color: #fff;
        transition: border-color .15s ease-in-out;
    }
    .form-input:focus, .form-select:focus, textarea:focus {
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
                Modifier la Réclamation : <span class=\"text-blue-600\">{{ reclamation.titre }}</span>
            </h1>

            {{ form_start(form, { attr: { novalidate: 'novalidate', 'data-turbo': 'false' } }) }}

            {% if form.vars.errors|length > 0 %}
                <div class=\"alert alert-danger mb-4\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">

                <div>
                    {{ form_label(form.titre, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.titre, { attr: { class: 'form-input' } }) }}
                    {{ form_errors(form.titre) }}
                </div>

                <div>
                    {{ form_label(form.user_email, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.user_email, { attr: { class: 'form-input' } }) }}
                    {{ form_errors(form.user_email) }}
                </div>

                <div class=\"md:col-span-2\">
                    {{ form_label(form.description, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.description, { attr: { class: 'form-input', rows: 5 } }) }}
                    {{ form_errors(form.description) }}
                </div>

                <div>
                    {{ form_label(form.type_reclamation, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.type_reclamation, { attr: { class: 'form-select' } }) }}
                    {{ form_errors(form.type_reclamation) }}
                </div>

                <div>
                    {{ form_label(form.id_trottinette, null, { label_attr: { class: 'font-medium text-gray-700 mb-1 block' } }) }}
                    {{ form_widget(form.id_trottinette, { attr: { class: 'form-input' } }) }}
                    {{ form_errors(form.id_trottinette) }}
                </div>

            </div>

            <div class=\"flex justify-end gap-4 mt-8\">
                <a href=\"{{ path('reclamation_list') }}\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Annuler
                </a>
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-save mr-1\"></i> Enregistrer
                </button>
            </div>

            {{ form_end(form) }}

        </div>
    </div>
</div>
{% endblock %}
", "reclamation/edit_reclamation.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/edit_reclamation.html.twig");
    }
}
