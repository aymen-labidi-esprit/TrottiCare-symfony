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

/* public/event/new.html.twig */
class __TwigTemplate_9448a67be83fc665977e6db742083f62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/event/new.html.twig", 1);
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

        yield "Créer un nouvel événement";
        
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
        yield "    <div class=\"container mt-4\">
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Événements</a></li>
                <li class=\"breadcrumb-item active\">Créer un nouvel événement</li>
            </ol>
        </nav>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-body p-4\">
                        <h1 class=\"card-title display-5 mb-4\">
                            <i class=\"fas fa-plus-circle me-3 text-primary\"></i>Créer un nouvel événement
                        </h1>

                        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"row g-4\">
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de l'événement"]]);
        yield "
                                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), 'label');
        yield "
                                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "titre", [], "any", false, false, false, 28), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description de l'événement", "style" => "height: 100px"]]);
        yield "
                                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'label');
        yield "
                                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateDebut", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de début"]]);
        yield "
                                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dateDebut", [], "any", false, false, false, 43), 'label');
        yield "
                                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "dateDebut", [], "any", false, false, false, 44), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "dateFin", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de fin"]]);
        yield "
                                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dateFin", [], "any", false, false, false, 51), 'label');
        yield "
                                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "dateFin", [], "any", false, false, false, 52), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "state", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "State"]]);
        yield "
                                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "state", [], "any", false, false, false, 59), 'label');
        yield "
                                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "state", [], "any", false, false, false, 60), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Autonomie minimale de la trottinette"]]);
        yield "
                                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 67), 'label');
        yield "
                                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 68), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-12 d-flex justify-content-between align-items-center mt-4\">
                                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"btn btn-secondary btn-lg\">
                                        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                        <i class=\"fas fa-plus me-2\"></i>Créer l'événement
                                    </button>
                                </div>
                            </div>
                        ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        yield "
                    </div>
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
        return "public/event/new.html.twig";
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
        return array (  240 => 81,  229 => 73,  221 => 68,  217 => 67,  213 => 66,  204 => 60,  200 => 59,  196 => 58,  187 => 52,  183 => 51,  179 => 50,  170 => 44,  166 => 43,  162 => 42,  153 => 36,  149 => 35,  145 => 34,  136 => 28,  132 => 27,  128 => 26,  121 => 22,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un nouvel événement{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_event_index') }}\">Événements</a></li>
                <li class=\"breadcrumb-item active\">Créer un nouvel événement</li>
            </ol>
        </nav>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-body p-4\">
                        <h1 class=\"card-title display-5 mb-4\">
                            <i class=\"fas fa-plus-circle me-3 text-primary\"></i>Créer un nouvel événement
                        </h1>

                        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                            <div class=\"row g-4\">
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'placeholder': 'Titre de l\\'événement'}}) }}
                                        {{ form_label(form.titre) }}
                                        {{ form_errors(form.titre) }}
                                    </div>
                                </div>

                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description de l\\'événement', 'style': 'height: 100px'}}) }}
                                        {{ form_label(form.description) }}
                                        {{ form_errors(form.description) }}
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control', 'placeholder': 'Date de début'}}) }}
                                        {{ form_label(form.dateDebut) }}
                                        {{ form_errors(form.dateDebut) }}
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(form.dateFin, {'attr': {'class': 'form-control', 'placeholder': 'Date de fin'}}) }}
                                        {{ form_label(form.dateFin) }}
                                        {{ form_errors(form.dateFin) }}
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(form.state, {'attr': {'class': 'form-control', 'placeholder': 'State'}}) }}
                                        {{ form_label(form.state) }}
                                        {{ form_errors(form.state) }}
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(form.trottinetteMinAutonomie, {'attr': {'class': 'form-control', 'placeholder': 'Autonomie minimale de la trottinette'}}) }}
                                        {{ form_label(form.trottinetteMinAutonomie) }}
                                        {{ form_errors(form.trottinetteMinAutonomie) }}
                                    </div>
                                </div>

                                <div class=\"col-12 d-flex justify-content-between align-items-center mt-4\">
                                    <a href=\"{{ path('app_admin_events') }}\" class=\"btn btn-secondary btn-lg\">
                                        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                        <i class=\"fas fa-plus me-2\"></i>Créer l'événement
                                    </button>
                                </div>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "public/event/new.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/public/event/new.html.twig");
    }
}
