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

/* event/edit.html.twig */
class __TwigTemplate_fe8970e8e35a7b6e1168728185d08ce5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/edit.html.twig", 1);
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

        yield "Modifier l'événement";
        
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
                <li class=\"breadcrumb-item active\">Modifier l'événement</li>
            </ol>
        </nav>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-body p-4\">
                        <h1 class=\"card-title display-5 mb-4\"><i class=\"fas fa-edit me-3\"></i>Modifier l'événement</h1>

                        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"row g-4\">
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de l'événement"]]);
        yield "
                                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "titre", [], "any", false, false, false, 25), 'label');
        yield "
                                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description de l'événement", "style" => "height: 100px"]]);
        yield "
                                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'label');
        yield "
                                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "dateDebut", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de début"]]);
        yield "
                                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateDebut", [], "any", false, false, false, 41), 'label');
        yield "
                                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateDebut", [], "any", false, false, false, 42), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "dateFin", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de fin"]]);
        yield "
                                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "dateFin", [], "any", false, false, false, 49), 'label');
        yield "
                                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "dateFin", [], "any", false, false, false, 50), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "statut", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "statut"]]);
        yield "
                                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "statut", [], "any", false, false, false, 56), 'label');
        yield "
                                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "statut", [], "any", false, false, false, 57), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "state", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "State"], "choice_value" => "value", "choice_label" => "value"]);
        yield "
                                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "state", [], "any", false, false, false, 63), 'label');
        yield "
                                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "state", [], "any", false, false, false, 64), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Autonomie minimale de la trottinette"]]);
        yield "
                                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 71), 'label');
        yield "
                                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 72), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"col-12 d-flex justify-content-between align-items-center mt-4\">
                                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"btn btn-secondary btn-lg\">
                                        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                        <i class=\"fas fa-save me-2\"></i>Enregistrer
                                    </button>
                                </div>
                            </div>
                        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
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
        return "event/edit.html.twig";
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
        return array (  253 => 85,  242 => 77,  234 => 72,  230 => 71,  226 => 70,  217 => 64,  213 => 63,  209 => 62,  201 => 57,  197 => 56,  193 => 55,  185 => 50,  181 => 49,  177 => 48,  168 => 42,  164 => 41,  160 => 40,  151 => 34,  147 => 33,  143 => 32,  134 => 26,  130 => 25,  126 => 24,  119 => 20,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier l'événement{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_event_index') }}\">Événements</a></li>
                <li class=\"breadcrumb-item active\">Modifier l'événement</li>
            </ol>
        </nav>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-body p-4\">
                        <h1 class=\"card-title display-5 mb-4\"><i class=\"fas fa-edit me-3\"></i>Modifier l'événement</h1>

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
                                        {{ form_widget(form.statut, {'attr': {'class': 'form-control', 'placeholder': 'statut'}}) }}
                                        {{ form_label(form.statut) }}
                                        {{ form_errors(form.statut) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(form.state, {'attr': {'class': 'form-control', 'placeholder': 'State'}, 'choice_value': 'value', 'choice_label': 'value'}) }}
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
                                        <i class=\"fas fa-save me-2\"></i>Enregistrer
                                    </button>
                                </div>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "event/edit.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\event\\edit.html.twig");
    }
}
