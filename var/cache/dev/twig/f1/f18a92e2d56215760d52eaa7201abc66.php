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

/* admin/utilisateur/new.html.twig */
class __TwigTemplate_b18d12b214a27b25578a8068e4ec79a6 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/utilisateur/new.html.twig", 2);
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

        yield "Créer un Utilisateur";
        
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
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-3xl\"> ";
        // line 9
        yield "
            ";
        // line 11
        yield "            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
                Créer un Nouvel Utilisateur
            </h1>

            ";
        // line 16
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/utilisateur/new.html.twig", 16);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 17
        yield "
            ";
        // line 19
        yield "            <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
                ";
        // line 21
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/utilisateur/_form.html.twig", ["form" =>         // line 22
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "button_label" => "Créer Utilisateur"]);
        // line 24
        yield "
            </div>

            ";
        // line 28
        yield "            <div class=\"mt-6 text-center\">
                <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
        yield "\" class=\"text-sm text-blue-600 hover:underline\">
                    Retour à la liste des utilisateurs
                </a>
            </div>

        </div> ";
        // line 35
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/utilisateur/new.html.twig";
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
        return array (  149 => 35,  141 => 29,  138 => 28,  133 => 24,  131 => 22,  129 => 21,  126 => 19,  123 => 17,  112 => 16,  106 => 11,  103 => 9,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/utilisateur/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Créer un Utilisateur{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-3xl\"> {# Centered form container #}

            {# 1. Header #}
            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
                Créer un Nouvel Utilisateur
            </h1>

            {# 2. Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 3. Form Card - Include the form partial here #}
            <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
                {# Pass the form and button label to the partial #}
                {{ include('admin/utilisateur/_form.html.twig', {
                    'form': form,
                    'button_label': 'Créer Utilisateur'
                }) }}
            </div>

            {# Back button can be inside or outside the card, here it's outside #}
            <div class=\"mt-6 text-center\">
                <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"text-sm text-blue-600 hover:underline\">
                    Retour à la liste des utilisateurs
                </a>
            </div>

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}", "admin/utilisateur/new.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/utilisateur/new.html.twig");
    }
}
