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

/* maintenance/new.html.twig */
class __TwigTemplate_d71f03a11e73f90ce2d59c302c6b38ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/new.html.twig", 2);
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

        yield "Nouvelle Maintenance";
        
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
        /* Reusable form input/select/textarea styles (adapt from previous) */
        .form-input, .form-select, .form-textarea {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-textarea { min-height: 80px; /* Adjust as needed */ }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        .form-input:focus, .form-select:focus, .form-textarea:focus {
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

        /* Reusable Button Styles (adapt from previous) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-save:before { content: \"\\f0c7\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .mr-2 { margin-right: 0.5rem; }
    </style>
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
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-3xl\">

            ";
        // line 56
        yield "            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
                Créer une nouvelle Maintenance
            </h1>

            ";
        // line 61
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "maintenance/new.html.twig", 61);
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
        yield "            <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
                ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                ";
        // line 68
        yield "                ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "vars", [], "any", false, false, false, 68), "submitted", [], "any", false, false, false, 68) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "vars", [], "any", false, false, false, 68), "valid", [], "any", false, false, false, 68)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "vars", [], "any", false, false, false, 68), "errors", [], "any", false, false, false, 68)) > 0))) {
            // line 69
            yield "                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5\" role=\"alert\">
                        <strong class=\"font-bold\">Erreurs détectées :</strong>
                        <ul class=\"mt-2 list-disc list-inside text-sm\">
                            ";
            // line 72
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'errors');
            yield "
                            ";
            // line 74
            yield "                        </ul>
                    </div>
                ";
        }
        // line 77
        yield "
                ";
        // line 79
        yield "                <div class=\"space-y-5\"> ";
        // line 80
        yield "
                    ";
        // line 82
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "trottinette", [], "any", true, true, false, 82)) {
            // line 83
            yield "                        <div>
                            ";
            // line 84
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "trottinette", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Trottinette Concernée *"]);
            yield "
                            ";
            // line 85
            $context["widget_attrs"] = ["class" => "form-select"];
            // line 86
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "submitted", [], "any", false, false, false, 86) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "trottinette", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "valid", [], "any", false, false, false, 86))) {
                // line 87
                yield "                                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 87, $this->source); })()), ["class" => "form-select border-error focus:ring-error focus:border-error"]);
                // line 88
                yield "                            ";
            }
            // line 89
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "trottinette", [], "any", false, false, false, 89), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 89, $this->source); })())]);
            yield "
                            ";
            // line 90
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "submitted", [], "any", false, false, false, 90) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "trottinette", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "valid", [], "any", false, false, false, 90))) {
                // line 91
                yield "                                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "trottinette", [], "any", false, false, false, 91), 'errors');
                yield "</p>
                            ";
            }
            // line 93
            yield "                            <p class=\"mt-1 text-xs text-gray-500\">Sélectionnez la trottinette qui nécessite une maintenance.</p>
                        </div>
                    ";
        }
        // line 96
        yield "
                    ";
        // line 98
        yield "                    <div>
                        ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "description", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Description *"]);
        yield "
                        ";
        // line 100
        $context["widget_attrs"] = ["class" => "form-textarea"];
        yield " ";
        // line 101
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "submitted", [], "any", false, false, false, 101) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "description", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "valid", [], "any", false, false, false, 101))) {
            // line 102
            yield "                            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 102, $this->source); })()), ["class" => "form-textarea border-error focus:ring-error focus:border-error"]);
            // line 103
            yield "                        ";
        }
        // line 104
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "description", [], "any", false, false, false, 104), 'widget', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 104, $this->source); })()), ["rows" => 4])]);
        yield "
                        ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "vars", [], "any", false, false, false, 105), "submitted", [], "any", false, false, false, 105) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "description", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "valid", [], "any", false, false, false, 105))) {
            // line 106
            yield "                            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "description", [], "any", false, false, false, 106), 'errors');
            yield "</p>
                        ";
        }
        // line 108
        yield "                    </div>

                    ";
        // line 111
        yield "                    <div>
                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "dateDebut", [], "any", false, false, false, 112), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Date et Heure de Début *"]);
        yield "
                        ";
        // line 113
        $context["widget_attrs"] = ["class" => "form-input"];
        // line 114
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "vars", [], "any", false, false, false, 114), "submitted", [], "any", false, false, false, 114) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "dateDebut", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "valid", [], "any", false, false, false, 114))) {
            // line 115
            yield "                            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 115, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
            // line 116
            yield "                        ";
        }
        // line 117
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "dateDebut", [], "any", false, false, false, 117), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 117, $this->source); })())]);
        yield "
                        ";
        // line 118
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "vars", [], "any", false, false, false, 118), "submitted", [], "any", false, false, false, 118) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "dateDebut", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "valid", [], "any", false, false, false, 118))) {
            // line 119
            yield "                            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "dateDebut", [], "any", false, false, false, 119), 'errors');
            yield "</p>
                        ";
        }
        // line 121
        yield "                    </div>

                    ";
        // line 124
        yield "                    <div>
                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "dateFin", [], "any", false, false, false, 125), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Date et Heure de Fin (Optionnel)"]);
        yield "
                        ";
        // line 126
        $context["widget_attrs"] = ["class" => "form-input"];
        // line 127
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "vars", [], "any", false, false, false, 127), "submitted", [], "any", false, false, false, 127) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "dateFin", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "valid", [], "any", false, false, false, 127))) {
            // line 128
            yield "                            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 128, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
            // line 129
            yield "                        ";
        }
        // line 130
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "dateFin", [], "any", false, false, false, 130), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 130, $this->source); })())]);
        yield "
                        ";
        // line 131
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "vars", [], "any", false, false, false, 131), "submitted", [], "any", false, false, false, 131) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "dateFin", [], "any", false, false, false, 131), "vars", [], "any", false, false, false, 131), "valid", [], "any", false, false, false, 131))) {
            // line 132
            yield "                            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "dateFin", [], "any", false, false, false, 132), 'errors');
            yield "</p>
                        ";
        }
        // line 134
        yield "                        <p class=\"mt-1 text-xs text-gray-500\">Laissez vide si la maintenance est toujours en cours.</p>
                    </div>

                    ";
        // line 138
        yield "                    <div>
                        ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "statut", [], "any", false, false, false, 139), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Statut *"]);
        yield "
                        ";
        // line 140
        $context["widget_attrs"] = ["class" => "form-select"];
        // line 141
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "vars", [], "any", false, false, false, 141), "submitted", [], "any", false, false, false, 141) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "statut", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "valid", [], "any", false, false, false, 141))) {
            // line 142
            yield "                            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 142, $this->source); })()), ["class" => "form-select border-error focus:ring-error focus:border-error"]);
            // line 143
            yield "                        ";
        }
        // line 144
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "statut", [], "any", false, false, false, 144), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 144, $this->source); })())]);
        yield "
                        ";
        // line 145
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "vars", [], "any", false, false, false, 145), "submitted", [], "any", false, false, false, 145) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "statut", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "valid", [], "any", false, false, false, 145))) {
            // line 146
            yield "                            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "statut", [], "any", false, false, false, 146), 'errors');
            yield "</p>
                        ";
        }
        // line 148
        yield "                    </div>

                    ";
        // line 151
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", true, true, false, 151)) {
            // line 152
            yield "                        <div>
                            ";
            // line 153
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "type", [], "any", false, false, false, 153), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Type de Maintenance"]);
            yield "
                            ";
            // line 154
            $context["widget_attrs"] = ["class" => "form-select"];
            // line 155
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "vars", [], "any", false, false, false, 155), "submitted", [], "any", false, false, false, 155) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "type", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "valid", [], "any", false, false, false, 155))) {
                // line 156
                yield "                                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 156, $this->source); })()), ["class" => "form-select border-error focus:ring-error focus:border-error"]);
                // line 157
                yield "                            ";
            }
            // line 158
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "type", [], "any", false, false, false, 158), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 158, $this->source); })())]);
            yield "
                            ";
            // line 159
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "vars", [], "any", false, false, false, 159), "submitted", [], "any", false, false, false, 159) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "type", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "valid", [], "any", false, false, false, 159))) {
                // line 160
                yield "                                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "type", [], "any", false, false, false, 160), 'errors');
                yield "</p>
                            ";
            }
            // line 162
            yield "                        </div>
                    ";
        }
        // line 164
        yield "
                    ";
        // line 166
        yield "                    ";
        // line 167
        yield "                    ";
        // line 168
        yield "
                </div>

                ";
        // line 172
        yield "                <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-between items-center\">
                    <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_index");
        yield "\" class=\"button button-secondary\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Retour à la liste
                    </a>
                    <button type=\"submit\" class=\"button button-primary\">
                        <i class=\"fas fa-save mr-2\"></i>";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 177, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                    </button>
                </div>

                ";
        // line 181
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), 'form_end');
        yield "
            </div>

        </div> ";
        // line 185
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
        return "maintenance/new.html.twig";
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
        return array (  485 => 185,  479 => 181,  472 => 177,  465 => 173,  462 => 172,  457 => 168,  455 => 167,  453 => 166,  450 => 164,  446 => 162,  440 => 160,  438 => 159,  433 => 158,  430 => 157,  427 => 156,  424 => 155,  422 => 154,  418 => 153,  415 => 152,  412 => 151,  408 => 148,  402 => 146,  400 => 145,  395 => 144,  392 => 143,  389 => 142,  386 => 141,  384 => 140,  380 => 139,  377 => 138,  372 => 134,  366 => 132,  364 => 131,  359 => 130,  356 => 129,  353 => 128,  350 => 127,  348 => 126,  344 => 125,  341 => 124,  337 => 121,  331 => 119,  329 => 118,  324 => 117,  321 => 116,  318 => 115,  315 => 114,  313 => 113,  309 => 112,  306 => 111,  302 => 108,  296 => 106,  294 => 105,  289 => 104,  286 => 103,  283 => 102,  280 => 101,  277 => 100,  273 => 99,  270 => 98,  267 => 96,  262 => 93,  256 => 91,  254 => 90,  249 => 89,  246 => 88,  243 => 87,  240 => 86,  238 => 85,  234 => 84,  231 => 83,  228 => 82,  225 => 80,  223 => 79,  220 => 77,  215 => 74,  211 => 72,  206 => 69,  203 => 68,  198 => 65,  195 => 64,  192 => 62,  181 => 61,  175 => 56,  170 => 52,  157 => 51,  106 => 9,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/maintenance/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouvelle Maintenance{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* Reusable form input/select/textarea styles (adapt from previous) */
        .form-input, .form-select, .form-textarea {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-textarea { min-height: 80px; /* Adjust as needed */ }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        .form-input:focus, .form-select:focus, .form-textarea:focus {
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

        /* Reusable Button Styles (adapt from previous) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-save:before { content: \"\\f0c7\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .mr-2 { margin-right: 0.5rem; }
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-3xl\">

            {# 1. Header #}
            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
                Créer une nouvelle Maintenance
            </h1>

            {# 2. Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 3. Form Card #}
            <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                {# General Form Error Summary #}
                {% if form.vars.submitted and not form.vars.valid and form.vars.errors|length > 0 %}
                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5\" role=\"alert\">
                        <strong class=\"font-bold\">Erreurs détectées :</strong>
                        <ul class=\"mt-2 list-disc list-inside text-sm\">
                            {{ form_errors(form) }}
                            {# Optionally list individual field errors here too if needed #}
                        </ul>
                    </div>
                {% endif %}

                {# Render form fields using Tailwind classes #}
                <div class=\"space-y-5\"> {# Vertical spacing between fields #}

                    {# Trottinette Field (ensure this is in your MaintenanceType) #}
                    {% if form.trottinette is defined %}
                        <div>
                            {{ form_label(form.trottinette, 'Trottinette Concernée *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {% set widget_attrs = {'class': 'form-select' } %}
                            {% if form.vars.submitted and not form.trottinette.vars.valid %}
                                {% set widget_attrs = widget_attrs|merge({'class': 'form-select border-error focus:ring-error focus:border-error'}) %}
                            {% endif %}
                            {{ form_widget(form.trottinette, {'attr': widget_attrs}) }}
                            {% if form.vars.submitted and not form.trottinette.vars.valid %}
                                <p class=\"form-error-message\">{{ form_errors(form.trottinette) }}</p>
                            {% endif %}
                            <p class=\"mt-1 text-xs text-gray-500\">Sélectionnez la trottinette qui nécessite une maintenance.</p>
                        </div>
                    {% endif %}

                    {# Description Field #}
                    <div>
                        {{ form_label(form.description, 'Description *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                        {% set widget_attrs = {'class': 'form-textarea' } %} {# Use form-textarea class #}
                        {% if form.vars.submitted and not form.description.vars.valid %}
                            {% set widget_attrs = widget_attrs|merge({'class': 'form-textarea border-error focus:ring-error focus:border-error'}) %}
                        {% endif %}
                        {{ form_widget(form.description, {'attr': widget_attrs|merge({'rows': 4}) }) }}
                        {% if form.vars.submitted and not form.description.vars.valid %}
                            <p class=\"form-error-message\">{{ form_errors(form.description) }}</p>
                        {% endif %}
                    </div>

                    {# Date Debut Field #}
                    <div>
                        {{ form_label(form.dateDebut, 'Date et Heure de Début *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                        {% set widget_attrs = {'class': 'form-input' } %}
                        {% if form.vars.submitted and not form.dateDebut.vars.valid %}
                            {% set widget_attrs = widget_attrs|merge({'class': 'form-input border-error focus:ring-error focus:border-error'}) %}
                        {% endif %}
                        {{ form_widget(form.dateDebut, {'attr': widget_attrs}) }}
                        {% if form.vars.submitted and not form.dateDebut.vars.valid %}
                            <p class=\"form-error-message\">{{ form_errors(form.dateDebut) }}</p>
                        {% endif %}
                    </div>

                    {# Date Fin Field (Optional) #}
                    <div>
                        {{ form_label(form.dateFin, 'Date et Heure de Fin (Optionnel)', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                        {% set widget_attrs = {'class': 'form-input' } %}
                        {% if form.vars.submitted and not form.dateFin.vars.valid %}
                            {% set widget_attrs = widget_attrs|merge({'class': 'form-input border-error focus:ring-error focus:border-error'}) %}
                        {% endif %}
                        {{ form_widget(form.dateFin, {'attr': widget_attrs}) }}
                        {% if form.vars.submitted and not form.dateFin.vars.valid %}
                            <p class=\"form-error-message\">{{ form_errors(form.dateFin) }}</p>
                        {% endif %}
                        <p class=\"mt-1 text-xs text-gray-500\">Laissez vide si la maintenance est toujours en cours.</p>
                    </div>

                    {# Statut Field #}
                    <div>
                        {{ form_label(form.statut, 'Statut *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                        {% set widget_attrs = {'class': 'form-select' } %}
                        {% if form.vars.submitted and not form.statut.vars.valid %}
                            {% set widget_attrs = widget_attrs|merge({'class': 'form-select border-error focus:ring-error focus:border-error'}) %}
                        {% endif %}
                        {{ form_widget(form.statut, {'attr': widget_attrs}) }}
                        {% if form.vars.submitted and not form.statut.vars.valid %}
                            <p class=\"form-error-message\">{{ form_errors(form.statut) }}</p>
                        {% endif %}
                    </div>

                    {# Type Field (Assuming it's added to MaintenanceType) #}
                    {% if form.type is defined %}
                        <div>
                            {{ form_label(form.type, 'Type de Maintenance', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {% set widget_attrs = {'class': 'form-select' } %}
                            {% if form.vars.submitted and not form.type.vars.valid %}
                                {% set widget_attrs = widget_attrs|merge({'class': 'form-select border-error focus:ring-error focus:border-error'}) %}
                            {% endif %}
                            {{ form_widget(form.type, {'attr': widget_attrs}) }}
                            {% if form.vars.submitted and not form.type.vars.valid %}
                                <p class=\"form-error-message\">{{ form_errors(form.type) }}</p>
                            {% endif %}
                        </div>
                    {% endif %}

                    {# Removed cout and technicien fields as they are not in the provided form type #}
                    {# {% if form.cout is defined %} ... {% endif %} #}
                    {# {% if form.technicien is defined %} ... {% endif %} #}

                </div>

                {# Form Actions/Buttons #}
                <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-between items-center\">
                    <a href=\"{{ path('admin_maintenance_index') }}\" class=\"button button-secondary\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Retour à la liste
                    </a>
                    <button type=\"submit\" class=\"button button-primary\">
                        <i class=\"fas fa-save mr-2\"></i>{{ button_label|default('Enregistrer') }}
                    </button>
                </div>

                {{ form_end(form) }}
            </div>

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}", "maintenance/new.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/maintenance/new.html.twig");
    }
}
