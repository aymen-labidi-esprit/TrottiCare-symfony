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

/* admin/utilisateur/edit.html.twig */
class __TwigTemplate_4278b2b8a48d6f09a9ee960f6532498e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/utilisateur/edit.html.twig", 2);
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

        yield "Modifier Utilisateur : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 4, $this->source); })()), "prenom", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield " ";
        // line 8
        yield "
    ";
        // line 10
        yield "    <script>

        document.addEventListener('DOMContentLoaded', function() {

            const editorId = 'admin_user_details'; // *** Use the SAME ID you set in the form type ***
            const textareaElement = document.getElementById(editorId);
            console.log(\"Looking for element with ID:\", editorId);
            console.log(\"Found element:\", textareaElement); // Check console output

            // Check if the CKEDITOR library object exists and the textarea element is found
            if (typeof CKEDITOR !== 'undefined' && textareaElement) {
                console.log('Initializing CKEditor for ID:', editorId);
                try {
                    CKEDITOR.replace(editorId, {
                        // You can add CKEditor configuration options here if needed
                        // Example: height: 300,
                        // Example: uiColor: '#f0f0f0',
                        // Example: toolbarGroups: [ ... ] // Define specific toolbar groups
                        // See CKEditor 4 documentation for configuration options
                    });
                } catch (error) {
                    console.error('Error initializing CKEditor:', error);
                    // Optionally display a user-friendly message
                    const errorDiv = document.createElement('div');
                    errorDiv.textContent = 'Erreur: Impossible d\\'initialiser l\\'éditeur de texte.';
                    errorDiv.style.color = 'red';
                    errorDiv.style.marginTop = '5px';
                    textareaElement.parentNode.insertBefore(errorDiv, textareaElement.nextSibling);
                }
            } else {
                if (typeof CKEDITOR === 'undefined') {
                    console.error('CKEditor library not loaded. Make sure ckeditor.js is included.');
                }
                if (!textareaElement) {
                    console.error('Textarea element with ID \"' + editorId + '\" not found.');
                }
            }
        });
    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
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

        // line 52
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-3xl\"> ";
        // line 54
        yield "
        ";
        // line 56
        yield "        <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
            Modifier l'Utilisateur #";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        yield " - <span class=\"font-normal text-lg text-gray-600\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 57, $this->source); })()), "nom", [], "any", false, false, false, 57), "html", null, true);
        yield "</span>
        </h1>

        ";
        // line 61
        yield "        ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/utilisateur/edit.html.twig", 61);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 62
        yield "
        ";
        // line 64
        yield "        <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
            ";
        // line 66
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/utilisateur/_form.html.twig", ["form" =>         // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "button_label" => "Mettre à jour", "is_edit" => true]);
        // line 70
        yield "
        </div>


        <div class=\"mt-6 flex flex-col sm:flex-row justify-center items-center gap-4\">
            <a href=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        yield "\" class=\"text-sm text-blue-600 hover:underline\">
                Voir le profil
             </a>
             <span class=\"hidden sm:inline text-gray-400\">|</span>
             <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
        yield "\" class=\"text-sm text-blue-600 hover:underline\">
                Retour à la liste des utilisateurs
             </a>
             ";
        // line 83
        yield "
             <span class=\"hidden sm:inline text-gray-400\">|</span>
             <form method=\"post\" action=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\" class=\"inline\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86))), "html", null, true);
        yield "\"/>
                <button type=\"submit\" class=\"text-sm text-red-600 hover:underline hover:text-red-800 font-medium\">Supprimer cet utilisateur</button>
                </form>

        </div>

    </div> ";
        // line 93
        yield "</div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/utilisateur/edit.html.twig";
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
        return array (  251 => 93,  242 => 86,  238 => 85,  234 => 83,  228 => 79,  221 => 75,  214 => 70,  212 => 67,  210 => 66,  207 => 64,  204 => 62,  193 => 61,  183 => 57,  180 => 56,  177 => 54,  174 => 52,  161 => 51,  111 => 10,  108 => 8,  104 => 7,  91 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# /Users/mac/Downloads/my_project_troti-vf/templates/admin/utilisateur/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier Utilisateur : {{ utilisateur.prenom }} {{ utilisateur.nom }}{% endblock %}

{% block javascripts %}
    {{ parent() }} {# Include base javascripts #}

    {# --- CKEditor Manual Initialization --- #}
    <script>

        document.addEventListener('DOMContentLoaded', function() {

            const editorId = 'admin_user_details'; // *** Use the SAME ID you set in the form type ***
            const textareaElement = document.getElementById(editorId);
            console.log(\"Looking for element with ID:\", editorId);
            console.log(\"Found element:\", textareaElement); // Check console output

            // Check if the CKEDITOR library object exists and the textarea element is found
            if (typeof CKEDITOR !== 'undefined' && textareaElement) {
                console.log('Initializing CKEditor for ID:', editorId);
                try {
                    CKEDITOR.replace(editorId, {
                        // You can add CKEditor configuration options here if needed
                        // Example: height: 300,
                        // Example: uiColor: '#f0f0f0',
                        // Example: toolbarGroups: [ ... ] // Define specific toolbar groups
                        // See CKEditor 4 documentation for configuration options
                    });
                } catch (error) {
                    console.error('Error initializing CKEditor:', error);
                    // Optionally display a user-friendly message
                    const errorDiv = document.createElement('div');
                    errorDiv.textContent = 'Erreur: Impossible d\\'initialiser l\\'éditeur de texte.';
                    errorDiv.style.color = 'red';
                    errorDiv.style.marginTop = '5px';
                    textareaElement.parentNode.insertBefore(errorDiv, textareaElement.nextSibling);
                }
            } else {
                if (typeof CKEDITOR === 'undefined') {
                    console.error('CKEditor library not loaded. Make sure ckeditor.js is included.');
                }
                if (!textareaElement) {
                    console.error('Textarea element with ID \"' + editorId + '\" not found.');
                }
            }
        });
    </script>
    {# --- End CKEditor Manual Initialization --- #}
{% endblock %}
{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-3xl\"> {# Centered form container #}

        {# 1. Header #}
        <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
            Modifier l'Utilisateur #{{ utilisateur.id }} - <span class=\"font-normal text-lg text-gray-600\">{{ utilisateur.prenom }} {{ utilisateur.nom }}</span>
        </h1>

        {# 2. Flash Messages #}
        {% include 'partials/_flash_messages.html.twig' ignore missing %}

        {# 3. Form Card - Include the Tailwind form partial #}
        <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
            {# Pass the form, button label, and edit flag to the partial #}
            {{ include('admin/utilisateur/_form.html.twig', {
            'form': form,
            'button_label': 'Mettre à jour',
            'is_edit': true
            }) }}
        </div>


        <div class=\"mt-6 flex flex-col sm:flex-row justify-center items-center gap-4\">
            <a href=\"{{ path('admin_utilisateur_show', {'id': utilisateur.id}) }}\" class=\"text-sm text-blue-600 hover:underline\">
                Voir le profil
             </a>
             <span class=\"hidden sm:inline text-gray-400\">|</span>
             <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"text-sm text-blue-600 hover:underline\">
                Retour à la liste des utilisateurs
             </a>
             {# Optional: Include delete form trigger here if preferred over show page #}

             <span class=\"hidden sm:inline text-gray-400\">|</span>
             <form method=\"post\" action=\"{{ path('admin_utilisateur_delete', {'id': utilisateur.id}) }}\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\" class=\"inline\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ utilisateur.id) }}\"/>
                <button type=\"submit\" class=\"text-sm text-red-600 hover:underline hover:text-red-800 font-medium\">Supprimer cet utilisateur</button>
                </form>

        </div>

    </div> {# End Container #}
</div> {# End Page Wrapper #}
{% endblock %}

{# Note: No separate stylesheets block needed here as the styles are in the included _form_tailwind partial or base.html.twig #}", "admin/utilisateur/edit.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/utilisateur/edit.html.twig");
    }
}
