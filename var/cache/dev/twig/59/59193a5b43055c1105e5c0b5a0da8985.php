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

/* maintenance/edit.html.twig */
class __TwigTemplate_b3e34ea1c0d0b071c543bee04edb4235 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/edit.html.twig", 2);
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

        yield "Modifier Maintenance #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        
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
                Modifier la Maintenance #";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "
            </h1>

            ";
        // line 61
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "maintenance/edit.html.twig", 61);
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
        // line 66
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                ";
        // line 69
        yield "                ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "submitted", [], "any", false, false, false, 69) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "valid", [], "any", false, false, false, 69)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69)) > 0))) {
            // line 70
            yield "                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5\" role=\"alert\">
                        <strong class=\"font-bold\">Erreurs détectées :</strong>
                        <ul class=\"mt-2 list-disc list-inside text-sm\">
                            ";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'errors');
            yield "
                        </ul>
                    </div>
                ";
        }
        // line 77
        yield "
                ";
        // line 79
        yield "                <div class=\"space-y-5\">

                    ";
        // line 82
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "trottinette", [], "any", true, true, false, 82)) {
            // line 83
            yield "                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">Trottinette Concernée</label>
                            <input type=\"text\" class=\"form-input bg-gray-100 cursor-not-allowed\" value=\"";
            // line 85
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 85, $this->source); })()), "trottinette", [], "any", false, false, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 85, $this->source); })()), "trottinette", [], "any", false, false, false, 85), "modele", [], "any", false, false, false, 85) . " (") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 85, $this->source); })()), "trottinette", [], "any", false, false, false, 85), "numeroSerie", [], "any", false, false, false, 85)) . ")"), "html", null, true)) : ("N/A"));
            yield "\" disabled readonly>
                            ";
            // line 87
            yield "                            ";
            // line 88
            yield "                        </div>
                    ";
        }
        // line 90
        yield "
                    ";
        // line 92
        yield "                    <div>
                        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "description", [], "any", false, false, false, 93), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Description *"]);
        yield "
                        ";
        // line 94
        $context["widget_attrs"] = ["class" => "form-textarea"];
        // line 95
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "submitted", [], "any", false, false, false, 95) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "description", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "valid", [], "any", false, false, false, 95))) {
            // line 96
            yield "                            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 96, $this->source); })()), ["class" => "form-textarea border-error focus:ring-error focus:border-error"]);
            // line 97
            yield "                        ";
        }
        // line 98
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "description", [], "any", false, false, false, 98), 'widget', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 98, $this->source); })()), ["rows" => 4])]);
        yield "
                        ";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "vars", [], "any", false, false, false, 99), "submitted", [], "any", false, false, false, 99) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "description", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "valid", [], "any", false, false, false, 99))) {
            // line 100
            yield "                            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "description", [], "any", false, false, false, 100), 'errors');
            yield "</p>
                        ";
        }
        // line 102
        yield "                    </div>

                    ";
        // line 105
        yield "                    <div>
                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "dateDebut", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Date et Heure de Début *"]);
        yield "
                        ";
        // line 107
        $context["widget_attrs"] = ["class" => "form-input"];
        // line 108
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "submitted", [], "any", false, false, false, 108) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "dateDebut", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "valid", [], "any", false, false, false, 108))) {
            // line 109
            yield "                            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 109, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
            // line 110
            yield "                        ";
        }
        // line 111
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "dateDebut", [], "any", false, false, false, 111), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 111, $this->source); })())]);
        yield "
                        ";
        // line 112
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "vars", [], "any", false, false, false, 112), "submitted", [], "any", false, false, false, 112) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "dateDebut", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "valid", [], "any", false, false, false, 112))) {
            // line 113
            yield "                            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "dateDebut", [], "any", false, false, false, 113), 'errors');
            yield "</p>
                        ";
        }
        // line 115
        yield "                    </div>

                    ";
        // line 118
        yield "                    <div>
                        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "dateFin", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Date et Heure de Fin (Optionnel)"]);
        yield "
                        ";
        // line 120
        $context["widget_attrs"] = ["class" => "form-input"];
        // line 121
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "vars", [], "any", false, false, false, 121), "submitted", [], "any", false, false, false, 121) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "dateFin", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "valid", [], "any", false, false, false, 121))) {
            // line 122
            yield "                            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 122, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
            // line 123
            yield "                        ";
        }
        // line 124
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "dateFin", [], "any", false, false, false, 124), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 124, $this->source); })())]);
        yield "
                        ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "vars", [], "any", false, false, false, 125), "submitted", [], "any", false, false, false, 125) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "dateFin", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "valid", [], "any", false, false, false, 125))) {
            // line 126
            yield "                            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "dateFin", [], "any", false, false, false, 126), 'errors');
            yield "</p>
                        ";
        }
        // line 128
        yield "                        <p class=\"mt-1 text-xs text-gray-500\">Laissez vide si la maintenance est toujours en cours.</p>
                    </div>

                    ";
        // line 132
        yield "                    <div>
                        ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "statut", [], "any", false, false, false, 133), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Statut *"]);
        yield "
                        ";
        // line 134
        $context["widget_attrs"] = ["class" => "form-select"];
        // line 135
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "vars", [], "any", false, false, false, 135), "submitted", [], "any", false, false, false, 135) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "statut", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "valid", [], "any", false, false, false, 135))) {
            // line 136
            yield "                            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 136, $this->source); })()), ["class" => "form-select border-error focus:ring-error focus:border-error"]);
            // line 137
            yield "                        ";
        }
        // line 138
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "statut", [], "any", false, false, false, 138), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 138, $this->source); })())]);
        yield "
                        ";
        // line 139
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "submitted", [], "any", false, false, false, 139) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "statut", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "valid", [], "any", false, false, false, 139))) {
            // line 140
            yield "                            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "statut", [], "any", false, false, false, 140), 'errors');
            yield "</p>
                        ";
        }
        // line 142
        yield "                    </div>

                    ";
        // line 145
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", true, true, false, 145)) {
            // line 146
            yield "                        <div>
                            ";
            // line 147
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "type", [], "any", false, false, false, 147), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Type de Maintenance"]);
            yield "
                            ";
            // line 148
            $context["widget_attrs"] = ["class" => "form-select"];
            // line 149
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "vars", [], "any", false, false, false, 149), "submitted", [], "any", false, false, false, 149) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "type", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "valid", [], "any", false, false, false, 149))) {
                // line 150
                yield "                                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 150, $this->source); })()), ["class" => "form-select border-error focus:ring-error focus:border-error"]);
                // line 151
                yield "                            ";
            }
            // line 152
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "type", [], "any", false, false, false, 152), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 152, $this->source); })())]);
            yield "
                            ";
            // line 153
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "vars", [], "any", false, false, false, 153), "submitted", [], "any", false, false, false, 153) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "type", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "valid", [], "any", false, false, false, 153))) {
                // line 154
                yield "                                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "type", [], "any", false, false, false, 154), 'errors');
                yield "</p>
                            ";
            }
            // line 156
            yield "                        </div>
                    ";
        }
        // line 158
        yield "
                    ";
        // line 160
        yield "
                </div>

                ";
        // line 164
        yield "                <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-between items-center\">
                    <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_index");
        yield "\" class=\"button button-secondary\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Retour à la liste
                    </a>
                    <button type=\"submit\" class=\"button button-primary\">
                        <i class=\"fas fa-save mr-2\"></i>";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 169, $this->source); })()), "Enregistrer les modifications")) : ("Enregistrer les modifications")), "html", null, true);
        yield "
                    </button>
                </div>

                ";
        // line 173
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), 'form_end');
        yield "
            </div>

        </div> ";
        // line 177
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
        return "maintenance/edit.html.twig";
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
        return array (  460 => 177,  454 => 173,  447 => 169,  440 => 165,  437 => 164,  432 => 160,  429 => 158,  425 => 156,  419 => 154,  417 => 153,  412 => 152,  409 => 151,  406 => 150,  403 => 149,  401 => 148,  397 => 147,  394 => 146,  391 => 145,  387 => 142,  381 => 140,  379 => 139,  374 => 138,  371 => 137,  368 => 136,  365 => 135,  363 => 134,  359 => 133,  356 => 132,  351 => 128,  345 => 126,  343 => 125,  338 => 124,  335 => 123,  332 => 122,  329 => 121,  327 => 120,  323 => 119,  320 => 118,  316 => 115,  310 => 113,  308 => 112,  303 => 111,  300 => 110,  297 => 109,  294 => 108,  292 => 107,  288 => 106,  285 => 105,  281 => 102,  275 => 100,  273 => 99,  268 => 98,  265 => 97,  262 => 96,  259 => 95,  257 => 94,  253 => 93,  250 => 92,  247 => 90,  243 => 88,  241 => 87,  237 => 85,  233 => 83,  230 => 82,  226 => 79,  223 => 77,  216 => 73,  211 => 70,  208 => 69,  202 => 66,  199 => 64,  196 => 62,  185 => 61,  179 => 57,  176 => 56,  171 => 52,  158 => 51,  107 => 9,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/maintenance/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier Maintenance #{{ maintenance.id }}{% endblock %}

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
                Modifier la Maintenance #{{ maintenance.id }}
            </h1>

            {# 2. Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 3. Form Card #}
            <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
                {# Use the action from the form object itself #}
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                {# General Form Error Summary #}
                {% if form.vars.submitted and not form.vars.valid and form.vars.errors|length > 0 %}
                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5\" role=\"alert\">
                        <strong class=\"font-bold\">Erreurs détectées :</strong>
                        <ul class=\"mt-2 list-disc list-inside text-sm\">
                            {{ form_errors(form) }}
                        </ul>
                    </div>
                {% endif %}

                {# Render form fields using Tailwind classes #}
                <div class=\"space-y-5\">

                    {# Trottinette Field (Usually disabled on edit, but shown for context) #}
                    {% if form.trottinette is defined %}
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">Trottinette Concernée</label>
                            <input type=\"text\" class=\"form-input bg-gray-100 cursor-not-allowed\" value=\"{{ maintenance.trottinette ? maintenance.trottinette.modele ~ ' (' ~ maintenance.trottinette.numeroSerie ~ ')' : 'N/A' }}\" disabled readonly>
                            {# Hide the actual select field visually but keep it for submission if needed, or remove from edit form type #}
                            {# {{ form_widget(form.trottinette, {'attr': {'class': 'hidden'}}) }} #}
                        </div>
                    {% endif %}

                    {# Description Field #}
                    <div>
                        {{ form_label(form.description, 'Description *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                        {% set widget_attrs = {'class': 'form-textarea' } %}
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

                    {# Date Fin Field #}
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

                    {# Type Field #}
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

                    {# Removed cout and technicien rendering #}

                </div>

                {# Form Actions/Buttons #}
                <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-between items-center\">
                    <a href=\"{{ path('admin_maintenance_index') }}\" class=\"button button-secondary\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Retour à la liste
                    </a>
                    <button type=\"submit\" class=\"button button-primary\">
                        <i class=\"fas fa-save mr-2\"></i>{{ button_label|default('Enregistrer les modifications') }}
                    </button>
                </div>

                {{ form_end(form) }}
            </div>

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}", "maintenance/edit.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/maintenance/edit.html.twig");
    }
}
