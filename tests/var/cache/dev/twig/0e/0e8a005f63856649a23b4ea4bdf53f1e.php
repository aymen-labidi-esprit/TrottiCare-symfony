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

/* admin/trottinette/new.html.twig */
class __TwigTemplate_a90fe6036b94bb7906320c8eb695e1c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/trottinette/new.html.twig", 1);
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
            <h4 class=\"alert-heading\">Veuillez corriger les erreurs ci-dessous</h4>
        </div>
    ";
        }
        // line 15
        yield "
    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["class" => ("needs-validation" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "submitted", [], "any", false, false, false, 18)) ? (" was-validated") : (""))), "novalidate" => "novalidate"], "method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_new")]);
        // line 23
        yield "

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["modele", "numeroSerie", "etat", "batterie", "localisation", "autonomie", "pointRelais"]);
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 34
            yield "        <div class=\"mb-3\">
            ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), $context["field"], [], "any", false, false, false, 35), 'label');
            yield "
            ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), $context["field"], [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => (("form-control" . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 38
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "submitted", [], "any", false, false, false, 38) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), $context["field"], [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "valid", [], "any", false, false, false, 38))) ? (" is-valid") : (""))) . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 39
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "submitted", [], "any", false, false, false, 39) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), $context["field"], [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "valid", [], "any", false, false, false, 39))) ? (" is-invalid") : ("")))]]);
            // line 41
            yield "
            <div class=\"invalid-feedback\">
                ";
            // line 43
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), $context["field"], [], "any", false, false, false, 43), 'errors');
            yield "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>Créer
        </button>
        <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
        yield "\" class=\"btn btn-secondary ms-2\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>

    ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
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
        return "admin/trottinette/new.html.twig";
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
        return array (  168 => 57,  160 => 52,  153 => 47,  143 => 43,  139 => 41,  137 => 39,  136 => 38,  135 => 36,  131 => 35,  128 => 34,  124 => 25,  120 => 23,  118 => 18,  117 => 16,  114 => 15,  108 => 11,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Trottinette{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <h1>Créer une nouvelle Trottinette</h1>

    {# Display global error if form is not valid after submission #}
    {% if not form.vars.valid and form.vars.submitted %}
        <div class=\"alert alert-danger\">
            <h4 class=\"alert-heading\">Veuillez corriger les erreurs ci-dessous</h4>
        </div>
    {% endif %}

    {{ form_start(form, {
        'attr': {
            'class': 'needs-validation' ~ (form.vars.submitted ? ' was-validated' : ''),
            'novalidate': 'novalidate'
        },
        'method': 'POST',
        'action': path('admin_trottinette_new')
    }) }}

    {% for field in [
        'modele',
        'numeroSerie',
        'etat',
        'batterie',
        'localisation',
        'autonomie',
        'pointRelais'
    ] %}
        <div class=\"mb-3\">
            {{ form_label(attribute(form, field)) }}
            {{ form_widget(attribute(form, field), {
                'attr': {
                    'class': 'form-control' ~ (form.vars.submitted and attribute(form, field).vars.valid ? ' is-valid' : '') ~ 
                            (form.vars.submitted and not attribute(form, field).vars.valid ? ' is-invalid' : '')
                }
            }) }}
            <div class=\"invalid-feedback\">
                {{ form_errors(attribute(form, field)) }}
            </div>
        </div>
    {% endfor %}

    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>Créer
        </button>
        <a href=\"{{ path('admin_trottinette_index') }}\" class=\"btn btn-secondary ms-2\">
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
", "admin/trottinette/new.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\admin\\trottinette\\new.html.twig");
    }
}
