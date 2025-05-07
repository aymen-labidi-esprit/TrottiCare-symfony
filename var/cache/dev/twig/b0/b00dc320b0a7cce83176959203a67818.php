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

/* client/profile/edit.html.twig */
class __TwigTemplate_7551010ee37a5f39f172f8c57e9b6945 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/profile/edit.html.twig", 2);
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

        yield "Modifier Mon Profil";
        
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
        /* Reusable form input/select styles (adapt from previous) */
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

        /* Reusable Button Styles (adapt from previous) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* Bootstrap Icons */

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
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

        // line 48
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-2xl\"> ";
        // line 50
        yield "
            ";
        // line 52
        yield "            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
                Modifier Mon Profil
            </h1>

            ";
        // line 57
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "client/profile/edit.html.twig", 57);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 58
        yield "
            ";
        // line 60
        yield "            <div class=\"bg-white rounded-lg shadow p-6 md:p-8 border border-gray-200\">
                ";
        // line 62
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 62, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                ";
        // line 65
        yield "                ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "submitted", [], "any", false, false, false, 65) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "valid", [], "any", false, false, false, 65)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65)) > 0))) {
            // line 66
            yield "                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5\" role=\"alert\">
                        <strong class=\"font-bold\">Veuillez corriger les erreurs :</strong>
                        <ul class=\"mt-2 list-disc list-inside text-sm\">
                            ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 69, $this->source); })()), 'errors');
            yield "
                        </ul>
                    </div>
                ";
        }
        // line 73
        yield "
                ";
        // line 75
        yield "                <div class=\"space-y-5\">

                    ";
        // line 78
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["nom", "prenom", "email", "telephone"]);
        foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
            // line 79
            yield "                        ";
            $context["field"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 79, $this->source); })()), $context["field_name"], [], "any", false, false, false, 79);
            // line 80
            yield "                        <div>
                            ";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
            yield "
                            ";
            // line 82
            $context["input_type"] = ((($context["field_name"] == "email")) ? ("email") : (((($context["field_name"] == "telephone")) ? ("tel") : ("text"))));
            // line 83
            yield "                            ";
            $context["widget_attrs"] = ["class" => "form-input", "type" => (isset($context["input_type"]) || array_key_exists("input_type", $context) ? $context["input_type"] : (function () { throw new RuntimeError('Variable "input_type" does not exist.', 83, $this->source); })())];
            // line 84
            yield "                            ";
            // line 85
            yield "                            ";
            // line 86
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "submitted", [], "any", false, false, false, 86) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "valid", [], "any", false, false, false, 86))) {
                // line 87
                yield "                                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 87, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
                // line 88
                yield "                            ";
            }
            // line 89
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 89, $this->source); })()), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 89, $this->source); })())]);
            yield "
                            ";
            // line 90
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "submitted", [], "any", false, false, false, 90) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "valid", [], "any", false, false, false, 90))) {
                // line 91
                yield "                                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 91, $this->source); })()), 'errors');
                yield "</p>
                            ";
            }
            // line 93
            yield "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field_name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                    ";
        // line 96
        yield "                    <div>
                        ";
        // line 98
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 98, $this->source); })()), "details", [], "any", false, false, false, 98), 'row');
        yield "
                    </div>
                    ";
        // line 101
        yield "                    ";
        // line 102
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "plainPassword", [], "any", true, true, false, 102)) {
            // line 103
            yield "                        <div class=\"bg-blue-50 border-l-4 border-blue-400 p-3 my-5 text-sm text-blue-700\">
                            Laissez les champs de mot de passe vides si vous ne souhaitez pas le modifier.
                        </div>
                        <div>
                            ";
            // line 107
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 107, $this->source); })()), "plainPassword", [], "any", false, false, false, 107), "first", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
            yield "
                            ";
            // line 108
            $context["widget_attrs"] = ["class" => "form-input"];
            // line 109
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 109, $this->source); })()), "vars", [], "any", false, false, false, 109), "submitted", [], "any", false, false, false, 109) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 109, $this->source); })()), "plainPassword", [], "any", false, false, false, 109), "first", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "valid", [], "any", false, false, false, 109))) {
                // line 110
                yield "                                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 110, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
                // line 111
                yield "                            ";
            }
            // line 112
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 112, $this->source); })()), "plainPassword", [], "any", false, false, false, 112), "first", [], "any", false, false, false, 112), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 112, $this->source); })()), "required" => false]);
            yield "
                            ";
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 113, $this->source); })()), "vars", [], "any", false, false, false, 113), "submitted", [], "any", false, false, false, 113) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 113, $this->source); })()), "plainPassword", [], "any", false, false, false, 113), "first", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "valid", [], "any", false, false, false, 113))) {
                // line 114
                yield "                                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 114, $this->source); })()), "plainPassword", [], "any", false, false, false, 114), "first", [], "any", false, false, false, 114), 'errors');
                yield "</p>
                            ";
            }
            // line 116
            yield "                        </div>
                        <div>
                            ";
            // line 118
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 118, $this->source); })()), "plainPassword", [], "any", false, false, false, 118), "second", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
            yield "
                            ";
            // line 119
            $context["widget_attrs"] = ["class" => "form-input"];
            // line 120
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 120, $this->source); })()), "vars", [], "any", false, false, false, 120), "submitted", [], "any", false, false, false, 120) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 120, $this->source); })()), "plainPassword", [], "any", false, false, false, 120), "second", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "valid", [], "any", false, false, false, 120))) {
                // line 121
                yield "                                ";
                // line 122
                yield "                                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 122, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
                // line 123
                yield "                            ";
            }
            // line 124
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 124, $this->source); })()), "plainPassword", [], "any", false, false, false, 124), "second", [], "any", false, false, false, 124), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 124, $this->source); })()), "required" => false]);
            yield "
                            ";
            // line 125
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 125, $this->source); })()), "vars", [], "any", false, false, false, 125), "submitted", [], "any", false, false, false, 125) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 125, $this->source); })()), "plainPassword", [], "any", false, false, false, 125), "second", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "valid", [], "any", false, false, false, 125))) {
                // line 126
                yield "                                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 126, $this->source); })()), "plainPassword", [], "any", false, false, false, 126), "second", [], "any", false, false, false, 126), 'errors');
                yield "</p>
                            ";
            }
            // line 128
            yield "                            ";
            // line 129
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 129, $this->source); })()), "vars", [], "any", false, false, false, 129), "submitted", [], "any", false, false, false, 129) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 129, $this->source); })()), "plainPassword", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "errors", [], "any", false, false, false, 129)) > 0))) {
                // line 130
                yield "                                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 130, $this->source); })()), "plainPassword", [], "any", false, false, false, 130), 'errors');
                yield "</p>
                            ";
            }
            // line 132
            yield "                        </div>
                    ";
        }
        // line 134
        yield "
                </div>

                ";
        // line 138
        yield "                <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-end items-center gap-3\">
                    <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profile_view");
        yield "\" class=\"button button-secondary\">
                        <i class=\"bi bi-x-lg me-1\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"button button-primary\">
                        <i class=\"bi bi-save-fill me-1\"></i> Enregistrer
                    </button>
                </div>

                ";
        // line 147
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 147, $this->source); })()), 'form_end');
        yield "
            </div>

        </div> ";
        // line 151
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 156
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

        // line 157
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield " ";
        // line 158
        yield "
    ";
        // line 160
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // *** USE THE UNIQUE ID FOR THE CLIENT PROFILE EDITOR ***
            const editorId = 'profile_details';
            const textareaElement = document.getElementById(editorId);

            // Check if the CKEDITOR library object exists and the textarea element is found
            if (typeof CKEDITOR !== 'undefined' && textareaElement) {
                console.log('Initializing CKEditor for Client Profile ID:', editorId);
                try {
                    CKEDITOR.replace(editorId, {
                        // Add any specific client-side configurations if needed
                        // height: 250, // Example smaller height
                    });
                } catch (error) {
                    console.error('Error initializing CKEditor on client profile:', error);
                    const errorDiv = document.createElement('div');
                    errorDiv.textContent = 'Erreur: Impossible d\\'initialiser l\\'éditeur.';
                    errorDiv.style.color = 'red';
                    textareaElement.parentNode.insertBefore(errorDiv, textareaElement.nextSibling);
                }
            } else {
                if (typeof CKEDITOR === 'undefined') {
                    console.error('CKEditor library not loaded. Check base.html.twig.');
                }
                if (!textareaElement) {
                    console.error('Textarea element with ID \"' + editorId + '\" not found in client profile edit form.');
                }
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
        return "client/profile/edit.html.twig";
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
        return array (  432 => 160,  429 => 158,  425 => 157,  412 => 156,  401 => 151,  395 => 147,  384 => 139,  381 => 138,  376 => 134,  372 => 132,  366 => 130,  363 => 129,  361 => 128,  355 => 126,  353 => 125,  348 => 124,  345 => 123,  342 => 122,  340 => 121,  337 => 120,  335 => 119,  331 => 118,  327 => 116,  321 => 114,  319 => 113,  314 => 112,  311 => 111,  308 => 110,  305 => 109,  303 => 108,  299 => 107,  293 => 103,  290 => 102,  288 => 101,  282 => 98,  279 => 96,  277 => 95,  270 => 93,  264 => 91,  262 => 90,  257 => 89,  254 => 88,  251 => 87,  248 => 86,  246 => 85,  244 => 84,  241 => 83,  239 => 82,  235 => 81,  232 => 80,  229 => 79,  224 => 78,  220 => 75,  217 => 73,  210 => 69,  205 => 66,  202 => 65,  196 => 62,  193 => 60,  190 => 58,  179 => 57,  173 => 52,  170 => 50,  167 => 48,  154 => 47,  107 => 9,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/client/profile/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier Mon Profil{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* Reusable form input/select styles (adapt from previous) */
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

        /* Reusable Button Styles (adapt from previous) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* Bootstrap Icons */

    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-2xl\"> {# Slightly narrower container for profile edit #}

            {# 1. Header #}
            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
                Modifier Mon Profil
            </h1>

            {# 2. Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 3. Form Card #}
            <div class=\"bg-white rounded-lg shadow p-6 md:p-8 border border-gray-200\">
                {# Use the action from the form object #}
                {{ form_start(profileForm, {'attr': {'novalidate': 'novalidate'}}) }}

                {# General Form Error Summary (Optional) #}
                {% if profileForm.vars.submitted and not profileForm.vars.valid and profileForm.vars.errors|length > 0 %}
                    <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5\" role=\"alert\">
                        <strong class=\"font-bold\">Veuillez corriger les erreurs :</strong>
                        <ul class=\"mt-2 list-disc list-inside text-sm\">
                            {{ form_errors(profileForm) }}
                        </ul>
                    </div>
                {% endif %}

                {# Render form fields with Tailwind classes #}
                <div class=\"space-y-5\">

                    {# Standard Fields #}
                    {% for field_name in ['nom', 'prenom', 'email', 'telephone'] %}
                        {% set field = attribute(profileForm, field_name) %}
                        <div>
                            {{ form_label(field, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {% set input_type = (field_name == 'email') ? 'email' : ((field_name == 'telephone') ? 'tel' : 'text') %}
                            {% set widget_attrs = {'class': 'form-input', 'type': input_type } %}
                            {# Optionally disable email editing #}
                            {# {% if field_name == 'email' %}{% set widget_attrs = widget_attrs|merge({'disabled': true, 'readonly': true, 'class': 'form-input bg-gray-100 cursor-not-allowed'}) %}{% endif %} #}
                            {% if profileForm.vars.submitted and not field.vars.valid %}
                                {% set widget_attrs = widget_attrs|merge({'class': 'form-input border-error focus:ring-error focus:border-error'}) %}
                            {% endif %}
                            {{ form_widget(field, {'attr': widget_attrs}) }}
                            {% if profileForm.vars.submitted and not field.vars.valid %}
                                <p class=\"form-error-message\">{{ form_errors(field) }}</p>
                            {% endif %}
                        </div>
                    {% endfor %}
                    {# --- ADDED: Details Field --- #}
                    <div>
                        {# Render the row - it will have the id='client_profile_details_editor' #}
                        {{ form_row(profileForm.details) }}
                    </div>
                    {# --- END ADDED --- #}
                    {# Optional Password Fields #}
                    {% if profileForm.plainPassword is defined %}
                        <div class=\"bg-blue-50 border-l-4 border-blue-400 p-3 my-5 text-sm text-blue-700\">
                            Laissez les champs de mot de passe vides si vous ne souhaitez pas le modifier.
                        </div>
                        <div>
                            {{ form_label(profileForm.plainPassword.first, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {% set widget_attrs = {'class': 'form-input' } %}
                            {% if profileForm.vars.submitted and not profileForm.plainPassword.first.vars.valid %}
                                {% set widget_attrs = widget_attrs|merge({'class': 'form-input border-error focus:ring-error focus:border-error'}) %}
                            {% endif %}
                            {{ form_widget(profileForm.plainPassword.first, {'attr': widget_attrs, 'required': false}) }}
                            {% if profileForm.vars.submitted and not profileForm.plainPassword.first.vars.valid %}
                                <p class=\"form-error-message\">{{ form_errors(profileForm.plainPassword.first) }}</p>
                            {% endif %}
                        </div>
                        <div>
                            {{ form_label(profileForm.plainPassword.second, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {% set widget_attrs = {'class': 'form-input' } %}
                            {% if profileForm.vars.submitted and not profileForm.plainPassword.second.vars.valid %}
                                {# Check overall plainPassword validity for second field error #}
                                {% set widget_attrs = widget_attrs|merge({'class': 'form-input border-error focus:ring-error focus:border-error'}) %}
                            {% endif %}
                            {{ form_widget(profileForm.plainPassword.second, {'attr': widget_attrs, 'required': false}) }}
                            {% if profileForm.vars.submitted and not profileForm.plainPassword.second.vars.valid %}
                                <p class=\"form-error-message\">{{ form_errors(profileForm.plainPassword.second) }}</p>
                            {% endif %}
                            {# Display the parent repeated field error (like 'passwords must match') #}
                            {% if profileForm.vars.submitted and profileForm.plainPassword.vars.errors|length > 0 %}
                                <p class=\"form-error-message\">{{ form_errors(profileForm.plainPassword) }}</p>
                            {% endif %}
                        </div>
                    {% endif %}

                </div>

                {# Form Actions/Buttons #}
                <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-end items-center gap-3\">
                    <a href=\"{{ path('app_client_profile_view') }}\" class=\"button button-secondary\">
                        <i class=\"bi bi-x-lg me-1\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"button button-primary\">
                        <i class=\"bi bi-save-fill me-1\"></i> Enregistrer
                    </button>
                </div>

                {{ form_end(profileForm) }}
            </div>

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}


{# ----- ADD JAVASCRIPT BLOCK ----- #}
{% block javascripts %}
    {{ parent() }} {# Include base javascripts (INCLUDING CKEDITOR LIBRARY) #}

    {# --- CKEditor Manual Initialization for Client Profile --- #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // *** USE THE UNIQUE ID FOR THE CLIENT PROFILE EDITOR ***
            const editorId = 'profile_details';
            const textareaElement = document.getElementById(editorId);

            // Check if the CKEDITOR library object exists and the textarea element is found
            if (typeof CKEDITOR !== 'undefined' && textareaElement) {
                console.log('Initializing CKEditor for Client Profile ID:', editorId);
                try {
                    CKEDITOR.replace(editorId, {
                        // Add any specific client-side configurations if needed
                        // height: 250, // Example smaller height
                    });
                } catch (error) {
                    console.error('Error initializing CKEditor on client profile:', error);
                    const errorDiv = document.createElement('div');
                    errorDiv.textContent = 'Erreur: Impossible d\\'initialiser l\\'éditeur.';
                    errorDiv.style.color = 'red';
                    textareaElement.parentNode.insertBefore(errorDiv, textareaElement.nextSibling);
                }
            } else {
                if (typeof CKEDITOR === 'undefined') {
                    console.error('CKEditor library not loaded. Check base.html.twig.');
                }
                if (!textareaElement) {
                    console.error('Textarea element with ID \"' + editorId + '\" not found in client profile edit form.');
                }
            }
        });
    </script>
    {# --- End CKEditor Manual Initialization --- #}
{% endblock %}", "client/profile/edit.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/client/profile/edit.html.twig");
    }
}
