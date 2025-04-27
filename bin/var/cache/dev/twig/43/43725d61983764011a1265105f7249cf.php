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

/* trottinette/new.html.twig */
class __TwigTemplate_2265cec2139292bde6d19e5ec7287913 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trottinette/new.html.twig", 1);
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

        yield "Nouvelle Trottinette";
        
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
        yield "<div class=\"container py-4\">
    <h1>Créer une nouvelle Trottinette</h1>

    ";
        // line 10
        yield "    ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "valid", [], "any", false, false, false, 10) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "submitted", [], "any", false, false, false, 10))) {
            // line 11
            yield "        <div class=\"alert alert-danger\">
            <h4 class=\"alert-heading\">Des erreurs ont été détectées :</h4>
            <ul class=\"mb-0\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 15), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 18
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 19
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "            </ul>
        </div>
    ";
        }
        // line 25
        yield "
    ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"], "method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_new")]);
        // line 33
        yield "

    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["modele", "numeroSerie", "etat", "batterie", "localisation", "autonomie", "pointRelaisId"]);
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 44
            yield "        <div class=\"mb-3\">
            ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), $context["field"], [], "any", false, false, false, 45), 'label');
            yield "
            ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), $context["field"], [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 48
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), $context["field"], [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "valid", [], "any", false, false, false, 48)) ? ("form-control") : ("form-control is-invalid"))]]);
            // line 50
            yield "
            ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), $context["field"], [], "any", false, false, false, 51), 'errors');
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>Créer
        </button>
        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_index");
        yield "\" class=\"btn btn-secondary ms-2\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>

    ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        yield "

    <div class=\"card mt-4\">
        <div class=\"card-body\">
            <h5 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Guide de saisie</h5>
            <ul class=\"mb-0\">
                <li>Le modèle doit contenir au moins 2 caractères</li>
                <li>Le numéro de série doit contenir au moins 4 caractères (lettres, chiffres et tirets uniquement)</li>
                <li>Le niveau de batterie doit être entre 0 et 100%</li>
                <li>Une trottinette disponible doit avoir au moins 10% de batterie</li>
                <li>Le format d'autonomie doit être comme \"25 km\" ou \"2 heures\"</li>
            </ul>
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
        return "trottinette/new.html.twig";
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
        return array (  206 => 64,  198 => 59,  191 => 54,  182 => 51,  179 => 50,  177 => 48,  176 => 46,  172 => 45,  169 => 44,  165 => 35,  161 => 33,  159 => 26,  156 => 25,  151 => 22,  145 => 21,  136 => 19,  131 => 18,  126 => 17,  117 => 15,  113 => 14,  108 => 11,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Trottinette{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <h1>Créer une nouvelle Trottinette</h1>

    {# Alerte globale d’erreurs #}
    {% if not form.vars.valid and form.vars.submitted %}
        <div class=\"alert alert-danger\">
            <h4 class=\"alert-heading\">Des erreurs ont été détectées :</h4>
            <ul class=\"mb-0\">
                {% for error in form.vars.errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
                {% for child in form %}
                    {% for error in child.vars.errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    {{ form_start(form, {
        'attr': {
            'novalidate': 'novalidate',
            'class': 'needs-validation'
        },
        'method': 'POST',
        'action': path('app_trottinette_new')
    }) }}

    {% for field in [
        'modele',
        'numeroSerie',
        'etat',
        'batterie',
        'localisation',
        'autonomie',
        'pointRelaisId'
    ] %}
        <div class=\"mb-3\">
            {{ form_label(attribute(form, field)) }}
            {{ form_widget(attribute(form, field), {
                'attr': {
                    'class': (attribute(form, field).vars.valid ? 'form-control' : 'form-control is-invalid')
                }
            }) }}
            {{ form_errors(attribute(form, field)) }}
        </div>
    {% endfor %}

    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>Créer
        </button>
        <a href=\"{{ path('app_trottinette_index') }}\" class=\"btn btn-secondary ms-2\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>

    {{ form_end(form) }}

    <div class=\"card mt-4\">
        <div class=\"card-body\">
            <h5 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Guide de saisie</h5>
            <ul class=\"mb-0\">
                <li>Le modèle doit contenir au moins 2 caractères</li>
                <li>Le numéro de série doit contenir au moins 4 caractères (lettres, chiffres et tirets uniquement)</li>
                <li>Le niveau de batterie doit être entre 0 et 100%</li>
                <li>Une trottinette disponible doit avoir au moins 10% de batterie</li>
                <li>Le format d'autonomie doit être comme \"25 km\" ou \"2 heures\"</li>
            </ul>
        </div>
    </div>
</div>
{% endblock %}
", "trottinette/new.html.twig", "C:\\Trottinettenada\\templates\\trottinette\\new.html.twig");
    }
}
