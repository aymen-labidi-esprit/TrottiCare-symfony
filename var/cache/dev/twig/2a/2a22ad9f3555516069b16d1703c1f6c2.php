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
class __TwigTemplate_20da1d441335dbf59958290dea0eb81b extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/trottinette/new.html.twig", 2);
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

        yield "Nouvelle Trottinette";
        
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    <style>
        /* Reusable form input/select styles (from previous example) */
        .form-input, .form-select {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        .form-input:focus, .form-select:focus {
            outline: none; border-color: #3b82f6;
            box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */
        }
        /* Error state styling */
        .border-error { border-color: #ef4444 !important; /* red-500 */ }
        .ring-error { box-shadow: 0 0 0 1px #ef4444 !important; /* ring-red-500 */ }
        .form-error-message {
            display: block; /* Show when errors exist */
            margin-top: 0.25rem; /* mt-1 */
            font-size: 0.75rem; /* text-xs */
            color: #dc2626; /* red-600 */
        }

        /* Reusable Button Styles (from previous example) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* Ensure FontAwesome icons render */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-save:before { content: \"\\f0c7\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-info-circle:before { content: \"\\f05a\"; }
        .mr-2 { margin-right: 0.5rem; }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
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

        // line 53
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-3xl\">

        ";
        // line 57
        yield "        <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
            Créer une nouvelle Trottinette
        </h1>

        ";
        // line 62
        yield "        ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/trottinette/new.html.twig", 62);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 63
        yield "
        ";
        // line 65
        yield "        ";
        // line 66
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "submitted", [], "any", false, false, false, 66) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "valid", [], "any", false, false, false, 66)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "errors", [], "any", false, false, false, 66)) > 0))) {
            // line 67
            yield "            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4\" role=\"alert\">
                <strong class=\"font-bold\">Veuillez corriger les erreurs générales ci-dessous :</strong>
                <ul class=\"mt-2 list-disc list-inside text-sm\">
                    ";
            // line 70
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'errors');
            yield " ";
            // line 71
            yield "                </ul>
            </div>
        ";
        }
        // line 74
        yield "
        ";
        // line 76
        yield "        <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
            ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"], "method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_new")]);
        // line 84
        yield "

            ";
        // line 87
        yield "            <div class=\"space-y-5\"> ";
        // line 88
        yield "
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["modele", "numeroSerie", "etat", "batterie", "localisation", "autonomie", "pointRelais"]);
        foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
            // line 98
            yield "                ";
            $context["field"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), $context["field_name"], [], "any", false, false, false, 98);
            // line 99
            yield "                ";
            if (array_key_exists("field", $context)) {
                // line 100
                yield "                <div>
                    ";
                // line 102
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
                yield "

                    ";
                // line 105
                yield "                    ";
                $context["widget_class"] = "form-input";
                // line 106
                yield "                    ";
                if (CoreExtension::inFilter($context["field_name"], ["etat", "pointRelais"])) {
                    // line 107
                    yield "                    ";
                    $context["widget_class"] = "form-select";
                    // line 108
                    yield "                    ";
                }
                // line 109
                yield "                    ";
                $context["widget_attrs"] = ["class" => (isset($context["widget_class"]) || array_key_exists("widget_class", $context) ? $context["widget_class"] : (function () { throw new RuntimeError('Variable "widget_class" does not exist.', 109, $this->source); })())];
                // line 110
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "submitted", [], "any", false, false, false, 110) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "valid", [], "any", false, false, false, 110))) {
                    // line 111
                    yield "                    ";
                    $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 111, $this->source); })()), ["class" => ((isset($context["widget_class"]) || array_key_exists("widget_class", $context) ? $context["widget_class"] : (function () { throw new RuntimeError('Variable "widget_class" does not exist.', 111, $this->source); })()) . " border-error focus:ring-error focus:border-error")]);
                    // line 112
                    yield "                    ";
                }
                // line 113
                yield "
                    ";
                // line 114
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 114, $this->source); })()), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 114, $this->source); })())]);
                yield "

                    ";
                // line 117
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "vars", [], "any", false, false, false, 117), "submitted", [], "any", false, false, false, 117) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 117, $this->source); })()), "vars", [], "any", false, false, false, 117), "valid", [], "any", false, false, false, 117))) {
                    // line 118
                    yield "                    <p class=\"form-error-message\">
                        ";
                    // line 119
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 119, $this->source); })()), 'errors');
                    yield "
                    </p>
                    ";
                }
                // line 122
                yield "
                    ";
                // line 124
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, true, false, 124), "help", [], "any", true, true, false, 124) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 124, $this->source); })()), "vars", [], "any", false, false, false, 124), "help", [], "any", false, false, false, 124))) {
                    // line 125
                    yield "                    <p class=\"mt-1 text-xs text-gray-500\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "vars", [], "any", false, false, false, 125), "help", [], "any", false, false, false, 125), "html", null, true);
                    yield "</p>
                    ";
                }
                // line 127
                yield "                </div>
                ";
            }
            // line 129
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field_name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "            </div>

            ";
        // line 133
        yield "            <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-between items-center\">
                <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
        yield "\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-2\"></i>Retour à la liste
                </a>
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-save mr-2\"></i>Créer la Trottinette
                </button>
            </div>

            ";
        // line 142
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'form_end');
        yield "
        </div>


        ";
        // line 147
        yield "        <div class=\"bg-blue-50 border border-blue-200 text-blue-800 px-4 py-3 rounded-lg relative mt-6\" role=\"alert\">
            <div class=\"flex items-start\">
                <div class=\"flex-shrink-0\">
                    <svg class=\"h-5 w-5 text-blue-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\"> <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\" /> </svg>
                </div>
                <div class=\"ml-3 flex-1\">
                    <p class=\"text-sm font-medium mb-1\">Guide de saisie</p>
                    <ul class=\"list-disc list-inside text-sm space-y-1\">
                        <li>Modèle: min 2 caractères.</li>
                        <li>N° Série: min 4 caractères (lettres, chiffres, tirets).</li>
                        <li>Batterie: 0-100%.</li>
                        <li>État Disponible: batterie >= 10%.</li>
                        <li>Autonomie: format \"Nombre unité\" (Ex: 25 km, 2 heures).</li>
                    </ul>
                </div>
            </div>
        </div>

    </div> ";
        // line 166
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
        return array (  361 => 166,  341 => 147,  334 => 142,  323 => 134,  320 => 133,  316 => 130,  310 => 129,  306 => 127,  300 => 125,  297 => 124,  294 => 122,  288 => 119,  285 => 118,  282 => 117,  277 => 114,  274 => 113,  271 => 112,  268 => 111,  265 => 110,  262 => 109,  259 => 108,  256 => 107,  253 => 106,  250 => 105,  244 => 102,  241 => 100,  238 => 99,  235 => 98,  231 => 89,  228 => 88,  226 => 87,  222 => 84,  220 => 77,  217 => 76,  214 => 74,  209 => 71,  206 => 70,  201 => 67,  198 => 66,  196 => 65,  193 => 63,  182 => 62,  176 => 57,  171 => 53,  158 => 52,  106 => 9,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/trottinette/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouvelle Trottinette{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* Reusable form input/select styles (from previous example) */
        .form-input, .form-select {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        .form-input:focus, .form-select:focus {
            outline: none; border-color: #3b82f6;
            box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */
        }
        /* Error state styling */
        .border-error { border-color: #ef4444 !important; /* red-500 */ }
        .ring-error { box-shadow: 0 0 0 1px #ef4444 !important; /* ring-red-500 */ }
        .form-error-message {
            display: block; /* Show when errors exist */
            margin-top: 0.25rem; /* mt-1 */
            font-size: 0.75rem; /* text-xs */
            color: #dc2626; /* red-600 */
        }

        /* Reusable Button Styles (from previous example) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* Ensure FontAwesome icons render */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-save:before { content: \"\\f0c7\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-info-circle:before { content: \"\\f05a\"; }
        .mr-2 { margin-right: 0.5rem; }

    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-3xl\">

        {# 1. Header #}
        <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
            Créer une nouvelle Trottinette
        </h1>

        {# 2. Flash Messages (Assuming Tailwind styled) #}
        {% include 'partials/_flash_messages.html.twig' ignore missing %}

        {# 3. General Form Error Summary (Tailwind styled) #}
        {# Only show summary if form submitted and invalid AND there are global form errors #}
        {% if form.vars.submitted and not form.vars.valid and form.vars.errors|length > 0 %}
            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4\" role=\"alert\">
                <strong class=\"font-bold\">Veuillez corriger les erreurs générales ci-dessous :</strong>
                <ul class=\"mt-2 list-disc list-inside text-sm\">
                    {{ form_errors(form) }} {# Renders only top-level form errors #}
                </ul>
            </div>
        {% endif %}

        {# 4. Form Card #}
        <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
            {{ form_start(form, {
        'attr': {
            'novalidate': 'novalidate'
            # No 'needs-validation' or 'was-validated' needed
            },
            'method': 'POST',
            'action': path('admin_trottinette_new')
            }) }}

            {# Render form fields #}
            <div class=\"space-y-5\"> {# Vertical spacing between fields #}

                {% for field_name in [
                    'modele',
                    'numeroSerie',
                    'etat',
                    'batterie',
                    'localisation',
                    'autonomie',
                    'pointRelais'
                ] %}
                {% set field = attribute(form, field_name) %}
                {% if field is defined %}
                <div>
                    {# Label #}
                    {{ form_label(field, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}

                    {# Widget - Apply error classes conditionally #}
                    {% set widget_class = 'form-input' %}
                    {% if field_name in ['etat', 'pointRelais'] %}
                    {% set widget_class = 'form-select' %}
                    {% endif %}
                    {% set widget_attrs = {'class': widget_class} %}
                    {% if form.vars.submitted and not field.vars.valid %}
                    {% set widget_attrs = widget_attrs|merge({'class': widget_class ~ ' border-error focus:ring-error focus:border-error'}) %}
                    {% endif %}

                    {{ form_widget(field, {'attr': widget_attrs}) }}

                    {# Error Messages for individual field #}
                    {% if form.vars.submitted and not field.vars.valid %}
                    <p class=\"form-error-message\">
                        {{ form_errors(field) }}
                    </p>
                    {% endif %}

                    {# Optional: Help text #}
                    {% if field.vars.help is defined and field.vars.help %}
                    <p class=\"mt-1 text-xs text-gray-500\">{{ field.vars.help }}</p>
                    {% endif %}
                </div>
                {% endif %}
                {% endfor %}
            </div>

            {# Form Actions/Buttons #}
            <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-between items-center\">
                <a href=\"{{ path('admin_trottinette_index') }}\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-2\"></i>Retour à la liste
                </a>
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-save mr-2\"></i>Créer la Trottinette
                </button>
            </div>

            {{ form_end(form) }}
        </div>


        {# 5. Guidance Card (Tailwind styled) #}
        <div class=\"bg-blue-50 border border-blue-200 text-blue-800 px-4 py-3 rounded-lg relative mt-6\" role=\"alert\">
            <div class=\"flex items-start\">
                <div class=\"flex-shrink-0\">
                    <svg class=\"h-5 w-5 text-blue-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\"> <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\" /> </svg>
                </div>
                <div class=\"ml-3 flex-1\">
                    <p class=\"text-sm font-medium mb-1\">Guide de saisie</p>
                    <ul class=\"list-disc list-inside text-sm space-y-1\">
                        <li>Modèle: min 2 caractères.</li>
                        <li>N° Série: min 4 caractères (lettres, chiffres, tirets).</li>
                        <li>Batterie: 0-100%.</li>
                        <li>État Disponible: batterie >= 10%.</li>
                        <li>Autonomie: format \"Nombre unité\" (Ex: 25 km, 2 heures).</li>
                    </ul>
                </div>
            </div>
        </div>

    </div> {# End Container #}
</div> {# End Page Wrapper #}
{% endblock %}", "admin/trottinette/new.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/trottinette/new.html.twig");
    }
}
