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

/* reset_password/request.html.twig */
class __TwigTemplate_3a47e004895775df5255ff605ae1be43 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 2);
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

        yield "Réinitialiser Mot de Passe - TrottiCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        // line 8
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Minimal styles for example */
        .form-input { display: block; width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 0.5rem; }
        .button-primary { padding: 0.6rem 1rem; background-color: #3b82f6; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .button-primary:hover { background-color: #2563eb; }
        .text-danger { color: #dc2626; font-size: 0.8rem; margin-top: 0.2rem; }
        .text-sm { font-size: 0.875rem; }
        .text-gray-600 { color: #4b5563; }
        .mt-6 { margin-top: 1.5rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .text-center { text-align: center; }
        .font-medium { font-weight: 500; }
        .text-blue-600 { color: #2563eb; }
        .hover\\:underline:hover { text-decoration: underline; }
        .bi { display: inline-block; vertical-align: text-bottom; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        yield "    <div class=\"container mx-auto max-w-md px-4 py-12\">
        <div class=\"bg-white p-8 rounded-lg shadow-md border border-gray-200\">
            <h1 class=\"text-xl lg:text-2xl font-bold text-center text-gray-900 mb-2\">
                Réinitialiser votre mot de passe
            </h1>
            <p class=\"text-center text-sm text-gray-600 mb-6\">
                Entrez votre adresse e-mail et nous déclencherons l'envoi d'un lien pour réinitialiser votre mot de passe.
            </p>

            ";
        // line 37
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "reset_password/request.html.twig", 37);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 38
        yield "
            ";
        // line 40
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-5"]]);
        yield "
            <div>
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label');
        yield "
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                <div class=\"text-danger\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'errors');
        yield "</div>
            </div>

            ";
        // line 48
        yield "            <div class=\"flex justify-center\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_v2_site_key"]) || array_key_exists("recaptcha_v2_site_key", $context) ? $context["recaptcha_v2_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_v2_site_key" does not exist.', 49, $this->source); })()), "html", null, true);
        yield "\"></div>
                ";
        // line 51
        yield "                <div class=\"text-danger\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'errors');
        yield "</div> ";
        // line 52
        yield "            </div>
            ";
        // line 54
        yield "
            <div>
                <button class=\"button button-primary w-full\" type=\"submit\">
                    <i class=\"bi bi-envelope-fill me-2\"></i>Envoyer le lien
                </button>
            </div>
            ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 60, $this->source); })()), 'form_end');
        yield "

            <p class=\"mt-6 text-center text-sm text-gray-600\">
                ";
        // line 64
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_page");
        yield "\" class=\"font-medium text-blue-600 hover:underline\">
                    <i class=\"bi bi-arrow-left me-1\"></i>Retour à la connexion
                </a>
            </p>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 75
        yield "    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
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
        return "reset_password/request.html.twig";
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
        return array (  256 => 75,  251 => 73,  238 => 72,  219 => 64,  213 => 60,  205 => 54,  202 => 52,  198 => 51,  194 => 49,  191 => 48,  185 => 44,  181 => 43,  177 => 42,  171 => 40,  168 => 38,  158 => 37,  147 => 28,  134 => 27,  104 => 8,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reset_password/request.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Réinitialiser Mot de Passe - TrottiCare{% endblock %}

{% block stylesheets %}
    {# ... styles ... #}
    {{ parent() }}
    <style>
        /* Minimal styles for example */
        .form-input { display: block; width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 0.5rem; }
        .button-primary { padding: 0.6rem 1rem; background-color: #3b82f6; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .button-primary:hover { background-color: #2563eb; }
        .text-danger { color: #dc2626; font-size: 0.8rem; margin-top: 0.2rem; }
        .text-sm { font-size: 0.875rem; }
        .text-gray-600 { color: #4b5563; }
        .mt-6 { margin-top: 1.5rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .text-center { text-align: center; }
        .font-medium { font-weight: 500; }
        .text-blue-600 { color: #2563eb; }
        .hover\\:underline:hover { text-decoration: underline; }
        .bi { display: inline-block; vertical-align: text-bottom; }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mx-auto max-w-md px-4 py-12\">
        <div class=\"bg-white p-8 rounded-lg shadow-md border border-gray-200\">
            <h1 class=\"text-xl lg:text-2xl font-bold text-center text-gray-900 mb-2\">
                Réinitialiser votre mot de passe
            </h1>
            <p class=\"text-center text-sm text-gray-600 mb-6\">
                Entrez votre adresse e-mail et nous déclencherons l'envoi d'un lien pour réinitialiser votre mot de passe.
            </p>

            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# The action URL is correctly handled by form_start #}
            {{ form_start(requestForm, {'attr': {'class': 'space-y-5'}}) }}
            <div>
                {{ form_label(requestForm.email) }}
                {{ form_widget(requestForm.email, {'attr': {'class': 'form-input'}}) }}
                <div class=\"text-danger\">{{ form_errors(requestForm.email) }}</div>
            </div>

            {# --- Google reCAPTCHA Widget --- #}
            <div class=\"flex justify-center\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_v2_site_key }}\"></div>
                {# Errors often attached to the field with constraint #}
                <div class=\"text-danger\">{{ form_errors(requestForm.email) }}</div> {# Display errors potentially including reCAPTCHA #}
            </div>
            {# --- End reCAPTCHA --- #}

            <div>
                <button class=\"button button-primary w-full\" type=\"submit\">
                    <i class=\"bi bi-envelope-fill me-2\"></i>Envoyer le lien
                </button>
            </div>
            {{ form_end(requestForm) }}

            <p class=\"mt-6 text-center text-sm text-gray-600\">
                {# Ensure this link points to your login page route #}
                <a href=\"{{ path('app_login_page') }}\" class=\"font-medium text-blue-600 hover:underline\">
                    <i class=\"bi bi-arrow-left me-1\"></i>Retour à la connexion
                </a>
            </p>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Google reCAPTCHA API Script #}
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
{% endblock %}", "reset_password/request.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reset_password/request.html.twig");
    }
}
