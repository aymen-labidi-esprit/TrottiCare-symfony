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

/* trottinette/edit.html.twig */
class __TwigTemplate_48c3c855c5a6e21a0d10ccd9a864e7ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trottinette/edit.html.twig", 1);
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

        yield "Modifier Trottinette";
        
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
        yield "    <div class=\"container py-4\">
        <h1>Modifier la Trottinette</h1>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 12
                if (($context["label"] == "success")) {
                    // line 13
                    yield "                        <i class=\"fas fa-check-circle me-2\"></i>
                    ";
                } else {
                    // line 15
                    yield "                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    ";
                }
                // line 17
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
        ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'errors');
        yield "

        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "modele", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => ("form-control" . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["form"] ?? null), "modele", [], "any", false, true, false, 29), "vars", [], "any", false, true, false, 29), "valid", [], "any", true, true, false, 29) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "modele", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "valid", [], "any", false, false, false, 29))) ? (" is-invalid") : ("")))], "label_attr" => ["class" => "form-label required"]]);
        // line 31
        yield "
            </div>

            <div class=\"col-md-6\">
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "numeroSerie", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => ("form-control" . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["form"] ?? null), "numeroSerie", [], "any", false, true, false, 36), "vars", [], "any", false, true, false, 36), "valid", [], "any", true, true, false, 36) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "numeroSerie", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "valid", [], "any", false, false, false, 36))) ? (" is-invalid") : ("")))], "label_attr" => ["class" => "form-label required"]]);
        // line 38
        yield "
            </div>

            <div class=\"col-md-6\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "etat", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => ("form-select" . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["form"] ?? null), "etat", [], "any", false, true, false, 43), "vars", [], "any", false, true, false, 43), "valid", [], "any", true, true, false, 43) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "etat", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "valid", [], "any", false, false, false, 43))) ? (" is-invalid") : ("")))], "label_attr" => ["class" => "form-label required"]]);
        // line 45
        yield "
            </div>

            <div class=\"col-md-6\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "batterie", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => ("form-control" . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["form"] ?? null), "batterie", [], "any", false, true, false, 50), "vars", [], "any", false, true, false, 50), "valid", [], "any", true, true, false, 50) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "batterie", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "valid", [], "any", false, false, false, 50))) ? (" is-invalid") : ("")))], "label_attr" => ["class" => "form-label"]]);
        // line 52
        yield "
            </div>

            <div class=\"col-md-6\">
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "localisation", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => ("form-control" . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["form"] ?? null), "localisation", [], "any", false, true, false, 57), "vars", [], "any", false, true, false, 57), "valid", [], "any", true, true, false, 57) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "localisation", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "valid", [], "any", false, false, false, 57))) ? (" is-invalid") : ("")))], "label_attr" => ["class" => "form-label"]]);
        // line 59
        yield "
            </div>

            <div class=\"col-md-6\">
                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "autonomie", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => ("form-control" . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["form"] ?? null), "autonomie", [], "any", false, true, false, 64), "vars", [], "any", false, true, false, 64), "valid", [], "any", true, true, false, 64) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "autonomie", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "valid", [], "any", false, false, false, 64))) ? (" is-invalid") : ("")))], "label_attr" => ["class" => "form-label"]]);
        // line 66
        yield "
            </div>

            <div class=\"col-md-6\">
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 70), 'row', ["attr" => ["class" => ("form-control" . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["form"] ?? null), "pointRelaisId", [], "any", false, true, false, 71), "vars", [], "any", false, true, false, 71), "valid", [], "any", true, true, false, 71) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "valid", [], "any", false, false, false, 71))) ? (" is-invalid") : ("")))], "label_attr" => ["class" => "form-label"]]);
        // line 73
        yield "
            </div>
        </div>

        <div class=\"mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save me-2\"></i>Enregistrer
            </button>
            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_index");
        yield "\" class=\"btn btn-secondary ms-2\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
            </a>
        </div>

        ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
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
        return "trottinette/edit.html.twig";
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
        return array (  235 => 86,  227 => 81,  217 => 73,  215 => 71,  214 => 70,  208 => 66,  206 => 64,  205 => 63,  199 => 59,  197 => 57,  196 => 56,  190 => 52,  188 => 50,  187 => 49,  181 => 45,  179 => 43,  178 => 42,  172 => 38,  170 => 36,  169 => 35,  163 => 31,  161 => 29,  160 => 28,  153 => 24,  149 => 23,  146 => 22,  140 => 21,  129 => 17,  125 => 15,  121 => 13,  119 => 12,  114 => 11,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Trottinette{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <h1>Modifier la Trottinette</h1>

        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {% if label == 'success' %}
                        <i class=\"fas fa-check-circle me-2\"></i>
                    {% else %}
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    {% endif %}
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        {{ form_errors(form) }}

        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                {{ form_row(form.modele, {
                    'attr': {'class': 'form-control' ~ (form.modele.vars.valid is defined and not form.modele.vars.valid ? ' is-invalid' : '')},
                    'label_attr': {'class': 'form-label required'}
                }) }}
            </div>

            <div class=\"col-md-6\">
                {{ form_row(form.numeroSerie, {
                    'attr': {'class': 'form-control' ~ (form.numeroSerie.vars.valid is defined and not form.numeroSerie.vars.valid ? ' is-invalid' : '')},
                    'label_attr': {'class': 'form-label required'}
                }) }}
            </div>

            <div class=\"col-md-6\">
                {{ form_row(form.etat, {
                    'attr': {'class': 'form-select' ~ (form.etat.vars.valid is defined and not form.etat.vars.valid ? ' is-invalid' : '')},
                    'label_attr': {'class': 'form-label required'}
                }) }}
            </div>

            <div class=\"col-md-6\">
                {{ form_row(form.batterie, {
                    'attr': {'class': 'form-control' ~ (form.batterie.vars.valid is defined and not form.batterie.vars.valid ? ' is-invalid' : '')},
                    'label_attr': {'class': 'form-label'}
                }) }}
            </div>

            <div class=\"col-md-6\">
                {{ form_row(form.localisation, {
                    'attr': {'class': 'form-control' ~ (form.localisation.vars.valid is defined and not form.localisation.vars.valid ? ' is-invalid' : '')},
                    'label_attr': {'class': 'form-label'}
                }) }}
            </div>

            <div class=\"col-md-6\">
                {{ form_row(form.autonomie, {
                    'attr': {'class': 'form-control' ~ (form.autonomie.vars.valid is defined and not form.autonomie.vars.valid ? ' is-invalid' : '')},
                    'label_attr': {'class': 'form-label'}
                }) }}
            </div>

            <div class=\"col-md-6\">
                {{ form_row(form.pointRelaisId, {
                    'attr': {'class': 'form-control' ~ (form.pointRelaisId.vars.valid is defined and not form.pointRelaisId.vars.valid ? ' is-invalid' : '')},
                    'label_attr': {'class': 'form-label'}
                }) }}
            </div>
        </div>

        <div class=\"mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save me-2\"></i>Enregistrer
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
{% endblock %}", "trottinette/edit.html.twig", "C:\\Users\\Baha Ayadi\\Desktop\\Trotticare Events\\Trottinette\\templates\\trottinette\\edit.html.twig");
    }
}
