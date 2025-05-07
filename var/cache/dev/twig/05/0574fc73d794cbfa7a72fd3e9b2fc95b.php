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

/* registration/register.html.twig */
class __TwigTemplate_e6fd6f730a696148f2803dc911680792 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Inscription - TrottiCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-7\">
                <div class=\"card shadow-lg\">
                    <div class=\"card-body p-4 p-md-5\">
                        <h1 class=\"h3 mb-4 fw-bold text-center\">Créer votre compte TrottiCare</h1>

                        ";
        // line 15
        yield "                        ";
        yield from $this->loadTemplate("partials/_flash_messages.html.twig", "registration/register.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "
                        ";
        // line 18
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'errors');
        yield "

                        ";
        // line 21
        yield "                        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["id" => "registration-form"]]);
        yield "

                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'row');
        yield "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'row');
        yield "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "telephone", [], "any", false, false, false, 34), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), "second", [], "any", false, false, false, 40), 'row');
        yield "
                            </div>
                        </div>

                        ";
        // line 45
        yield "                        ";
        // line 46
        yield "
                        ";
        // line 48
        yield "                        <div class=\"mt-3\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "agreeTerms", [], "any", false, false, false, 49), 'row');
        yield "
                            ";
        // line 51
        yield "                            ";
        // line 58
        yield "                        </div>

                        ";
        // line 61
        yield "                        ";
        // line 62
        yield "                        <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary w-100 mt-4\">
                            Créer mon compte
                        </button>
                        <p class=\"mt-3 text-center small\">
                            En créant un compte, vous acceptez nos <a href=\"#\">Conditions d'utilisation</a>.
                        </p>

                        ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), 'form_end');
        yield "

                        <p class=\"mt-4 text-center\">
                            Déjà un compte ? <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_page");
        yield "\">Connectez-vous</a> ";
        // line 73
        yield "                        </p>
                    </div> ";
        // line 75
        yield "                </div> ";
        // line 76
        yield "            </div> ";
        // line 77
        yield "        </div> ";
        // line 78
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield " ";
        // line 83
        yield "
    ";
        // line 85
        yield "    <script>
        // Optional: Add loading state to submit button on standard form submit
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('registration-form');
            const submitButton = document.getElementById('submitButton');
            if(form && submitButton) {
                form.addEventListener('submit', () => {
                    // Add a slight delay to show loading state before navigation
                    setTimeout(() => {
                        submitButton.disabled = true;
                        submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Création...';
                    }, 50); // Small delay
                });
            }
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
        return "registration/register.html.twig";
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
        return array (  245 => 85,  242 => 83,  238 => 82,  225 => 81,  214 => 78,  212 => 77,  210 => 76,  208 => 75,  205 => 73,  202 => 72,  196 => 69,  187 => 62,  185 => 61,  181 => 58,  179 => 51,  175 => 49,  172 => 48,  169 => 46,  167 => 45,  160 => 40,  154 => 37,  148 => 34,  142 => 31,  136 => 28,  130 => 25,  122 => 21,  116 => 18,  113 => 16,  110 => 15,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/registration/register.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Inscription - TrottiCare{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-7\">
                <div class=\"card shadow-lg\">
                    <div class=\"card-body p-4 p-md-5\">
                        <h1 class=\"h3 mb-4 fw-bold text-center\">Créer votre compte TrottiCare</h1>

                        {# Display flash messages if any #}
                        {% include 'partials/_flash_messages.html.twig' %}

                        {# Display general form errors #}
                        {{ form_errors(registrationForm) }}

                        {# Start the form #}
                        {{ form_start(registrationForm, {'attr': {'id': 'registration-form'}}) }}

                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                {{ form_row(registrationForm.nom) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(registrationForm.prenom) }}
                            </div>
                            <div class=\"col-12\">
                                {{ form_row(registrationForm.email) }}
                            </div>
                            <div class=\"col-12\">
                                {{ form_row(registrationForm.telephone) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(registrationForm.plainPassword.first) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(registrationForm.plainPassword.second) }}
                            </div>
                        </div>

                        {# --- REMOVED: Facial Recognition Section --- #}
                        {# <hr class=\"my-4\"> ... entire face setup UI ... #}

                        {# --- ADDED: Terms agreement --- #}
                        <div class=\"mt-3\">
                            {{ form_row(registrationForm.agreeTerms) }}
                            {# Note: form_row includes label, widget, errors, help #}
                            {# Manual rendering if more control needed:
                             <div class=\"form-check\">
                                 {{ form_widget(registrationForm.agreeTerms) }}
                                 {{ form_label(registrationForm.agreeTerms) }}
                                 {{ form_errors(registrationForm.agreeTerms) }}
                             </div>
                            #}
                        </div>

                        {# CSRF Token (rendered by form_end) #}
                        {# Submit Button - Now enabled by default #}
                        <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary w-100 mt-4\">
                            Créer mon compte
                        </button>
                        <p class=\"mt-3 text-center small\">
                            En créant un compte, vous acceptez nos <a href=\"#\">Conditions d'utilisation</a>.
                        </p>

                        {{ form_end(registrationForm) }}

                        <p class=\"mt-4 text-center\">
                            Déjà un compte ? <a href=\"{{ path('app_login_page') }}\">Connectez-vous</a> {# Point to login page route #}
                        </p>
                    </div> {# End card-body #}
                </div> {# End card #}
            </div> {# End col #}
        </div> {# End row #}
    </div> {# End container #}
{% endblock %}

{% block javascripts %}
    {{ parent() }} {# Includes base JS, NO face-api needed here anymore #}

    {# --- REMOVED: JavaScript for face capture on registration --- #}
    <script>
        // Optional: Add loading state to submit button on standard form submit
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('registration-form');
            const submitButton = document.getElementById('submitButton');
            if(form && submitButton) {
                form.addEventListener('submit', () => {
                    // Add a slight delay to show loading state before navigation
                    setTimeout(() => {
                        submitButton.disabled = true;
                        submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Création...';
                    }, 50); // Small delay
                });
            }
        });
    </script>
{% endblock %}", "registration/register.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/registration/register.html.twig");
    }
}
