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

/* admin/trottinette/edit.html.twig */
class __TwigTemplate_721c9daff21b3fe695e27d00cd21de63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/trottinette/edit.html.twig", 2);
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

        yield "Modifier Trottinette : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 4, $this->source); })()), "modele", [], "any", false, false, false, 4), "html", null, true);
        
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
        /* Reusable form input/select styles */
        .form-input, .form-select {
            appearance: none;
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem; /* text-sm */
            line-height: 1.5;
            color: #1f2937; /* gray-800 */
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d1d5db; /* gray-300 */
            border-radius: 0.375rem; /* rounded-md */
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }
        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #3b82f6; /* blue-500 */
            box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */
        }
        /* Error state */
        .form-input.is-invalid, .form-select.is-invalid {
            border-color: #ef4444; /* red-500 */
        }
        .form-input.is-invalid:focus, .form-select.is-invalid:focus {
            border-color: #ef4444;
            box-shadow: 0 0 0 1px #ef4444; /* ring-red-500 */
        }
        .invalid-feedback {
            display: none; /* Hide by default */
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.75rem; /* text-xs */
            color: #dc2626; /* red-600 */
        }
        .is-invalid ~ .invalid-feedback {
            display: block; /* Show when input has error */
        }

        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* Ensure FontAwesome icons render */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-check-circle:before { content: \"\\f058\"; }
        .fa-exclamation-triangle:before { content: \"\\f071\"; }
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

    // line 73
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

        // line 74
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-3xl\"> ";
        // line 76
        yield "
        ";
        // line 78
        yield "        <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
            Modifier la Trottinette #";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79), "html", null, true);
        yield "
        </h1>

        ";
        // line 83
        yield "        ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/trottinette/edit.html.twig", 83);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 84
        yield "
        ";
        // line 86
        yield "        ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "valid", [], "any", false, false, false, 86) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "submitted", [], "any", false, false, false, 86))) {
            // line 87
            yield "            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4\" role=\"alert\">
                <strong class=\"font-bold\">Des erreurs ont été trouvées :</strong>
                <ul class=\"mt-2 list-disc list-inside text-sm\">
                    ";
            // line 90
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'errors');
            yield " ";
            // line 91
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 92
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 92), "errors", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 93
                    yield "                            <li>";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
                    yield ": ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 93), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                </ul>
            </div>
        ";
        }
        // line 99
        yield "
        ";
        // line 101
        yield "        <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
            ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"], "method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 108
(isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)])]);
        // line 109
        yield "

            ";
        // line 112
        yield "            <div class=\"space-y-5\"> ";
        // line 113
        yield "                ";
        $context["field_mapping"] = ["modele" => "Modèle", "numeroSerie" => "Numéro de Série", "etat" => "État", "batterie" => "Batterie (%)", "localisation" => "Localisation", "autonomie" => "Autonomie (Ex: 25 km)", "pointRelais" => "Point Relais Associé"];
        // line 122
        yield "
                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["field_mapping"]) || array_key_exists("field_mapping", $context) ? $context["field_mapping"] : (function () { throw new RuntimeError('Variable "field_mapping" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["field_name"] => $context["label_text"]) {
            // line 124
            yield "                ";
            $context["field"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), $context["field_name"], [], "any", false, false, false, 124);
            // line 125
            yield "                ";
            if (array_key_exists("field", $context)) {
                // line 126
                yield "                <div>
                    ";
                // line 128
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 128, $this->source); })()), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]] + (CoreExtension::testEmpty($_label_ = $context["label_text"]) ? [] : ["label" => $_label_]));
                yield "

                    ";
                // line 131
                yield "                    ";
                $context["widget_class"] = "form-input";
                // line 132
                yield "                    ";
                if (CoreExtension::inFilter($context["field_name"], ["etat", "pointRelais"])) {
                    // line 133
                    yield "                    ";
                    $context["widget_class"] = "form-select";
                    // line 134
                    yield "                    ";
                }
                // line 135
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "vars", [], "any", false, false, false, 135), "submitted", [], "any", false, false, false, 135) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 135, $this->source); })()), "vars", [], "any", false, false, false, 135), "valid", [], "any", false, false, false, 135))) {
                    // line 136
                    yield "                    ";
                    $context["widget_class"] = ((isset($context["widget_class"]) || array_key_exists("widget_class", $context) ? $context["widget_class"] : (function () { throw new RuntimeError('Variable "widget_class" does not exist.', 136, $this->source); })()) . " is-invalid");
                    // line 137
                    yield "                    ";
                }
                // line 138
                yield "
                    ";
                // line 139
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), 'widget', ["attr" => ["class" => (isset($context["widget_class"]) || array_key_exists("widget_class", $context) ? $context["widget_class"] : (function () { throw new RuntimeError('Variable "widget_class" does not exist.', 139, $this->source); })())]]);
                yield "

                    ";
                // line 142
                yield "                    <div class=\"invalid-feedback\">
                        ";
                // line 143
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 143, $this->source); })()), 'errors');
                yield "
                    </div>

                    ";
                // line 147
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, true, false, 147), "help", [], "any", true, true, false, 147) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 147, $this->source); })()), "vars", [], "any", false, false, false, 147), "help", [], "any", false, false, false, 147))) {
                    // line 148
                    yield "                    <p class=\"mt-1 text-xs text-gray-500\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 148, $this->source); })()), "vars", [], "any", false, false, false, 148), "help", [], "any", false, false, false, 148), "html", null, true);
                    yield "</p>
                    ";
                }
                // line 150
                yield "                </div>
                ";
            }
            // line 152
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field_name'], $context['label_text'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "            </div>

            ";
        // line 156
        yield "            <div class=\"mt-8 pt-5 border-t border-gray-200 flex justify-between items-center\">
                <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
        yield "\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-2\"></i>Retour à la liste
                </a>
                <button type=\"submit\" class=\"button button-primary\">
                    <i class=\"fas fa-save mr-2\"></i>Enregistrer les modifications
                </button>
            </div>

            ";
        // line 165
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'form_end');
        yield "
        </div>


        ";
        // line 170
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
        // line 189
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
        return "admin/trottinette/edit.html.twig";
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
        return array (  407 => 189,  387 => 170,  380 => 165,  369 => 157,  366 => 156,  362 => 153,  356 => 152,  352 => 150,  346 => 148,  343 => 147,  337 => 143,  334 => 142,  329 => 139,  326 => 138,  323 => 137,  320 => 136,  317 => 135,  314 => 134,  311 => 133,  308 => 132,  305 => 131,  299 => 128,  296 => 126,  293 => 125,  290 => 124,  286 => 123,  283 => 122,  280 => 113,  278 => 112,  274 => 109,  272 => 108,  271 => 102,  268 => 101,  265 => 99,  260 => 96,  254 => 95,  243 => 93,  238 => 92,  233 => 91,  230 => 90,  225 => 87,  222 => 86,  219 => 84,  208 => 83,  202 => 79,  199 => 78,  196 => 76,  193 => 74,  180 => 73,  107 => 9,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/trottinette/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier Trottinette : {{ trottinette.modele }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* Reusable form input/select styles */
        .form-input, .form-select {
            appearance: none;
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem; /* text-sm */
            line-height: 1.5;
            color: #1f2937; /* gray-800 */
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d1d5db; /* gray-300 */
            border-radius: 0.375rem; /* rounded-md */
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }
        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #3b82f6; /* blue-500 */
            box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */
        }
        /* Error state */
        .form-input.is-invalid, .form-select.is-invalid {
            border-color: #ef4444; /* red-500 */
        }
        .form-input.is-invalid:focus, .form-select.is-invalid:focus {
            border-color: #ef4444;
            box-shadow: 0 0 0 1px #ef4444; /* ring-red-500 */
        }
        .invalid-feedback {
            display: none; /* Hide by default */
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.75rem; /* text-xs */
            color: #dc2626; /* red-600 */
        }
        .is-invalid ~ .invalid-feedback {
            display: block; /* Show when input has error */
        }

        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}

        /* Ensure FontAwesome icons render */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-check-circle:before { content: \"\\f058\"; }
        .fa-exclamation-triangle:before { content: \"\\f071\"; }
        .fa-save:before { content: \"\\f0c7\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-info-circle:before { content: \"\\f05a\"; }
        .mr-2 { margin-right: 0.5rem; }

    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-3xl\"> {# Centered form container #}

        {# 1. Header #}
        <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">
            Modifier la Trottinette #{{ trottinette.id }}
        </h1>

        {# 2. Flash Messages (Assuming Tailwind styled) #}
        {% include 'partials/_flash_messages.html.twig' ignore missing %}

        {# 3. General Form Error Summary (Tailwind styled) #}
        {% if not form.vars.valid and form.vars.submitted %}
            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4\" role=\"alert\">
                <strong class=\"font-bold\">Des erreurs ont été trouvées :</strong>
                <ul class=\"mt-2 list-disc list-inside text-sm\">
                    {{ form_errors(form) }} {# Render top-level form errors #}
                    {% for child in form %}
                        {% for error in child.vars.errors %}
                            <li>{{ form_label(child) }}: {{ error.message }}</li>
                        {% endfor %}
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

        {# 4. Form #}
        <div class=\"bg-white rounded-lg shadow p-6 md:p-8\">
            {{ form_start(form, {
        'attr': {
            'novalidate': 'novalidate'
            # Removed 'class': 'needs-validation' as it's Bootstrap specific
            },
            'method': 'POST',
            'action': path('admin_trottinette_edit', { id: trottinette.id })
            }) }}

            {# Render form fields using Twig loop or manually #}
            <div class=\"space-y-5\"> {# Add vertical space between fields #}
                {% set field_mapping = {
                    'modele': 'Modèle',
                    'numeroSerie': 'Numéro de Série',
                    'etat': 'État',
                    'batterie': 'Batterie (%)',
                    'localisation': 'Localisation',
                    'autonomie': 'Autonomie (Ex: 25 km)',
                    'pointRelais': 'Point Relais Associé'
                } %}

                {% for field_name, label_text in field_mapping %}
                {% set field = attribute(form, field_name) %}
                {% if field is defined %}
                <div>
                    {# Label #}
                    {{ form_label(field, label_text, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}

                    {# Widget #}
                    {% set widget_class = 'form-input' %}
                    {% if field_name in ['etat', 'pointRelais'] %}
                    {% set widget_class = 'form-select' %}
                    {% endif %}
                    {% if form.vars.submitted and not field.vars.valid %}
                    {% set widget_class = widget_class ~ ' is-invalid' %}
                    {% endif %}

                    {{ form_widget(field, {'attr': {'class': widget_class }}) }}

                    {# Error #}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(field) }}
                    </div>

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
                    <i class=\"fas fa-save mr-2\"></i>Enregistrer les modifications
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
{% endblock %}", "admin/trottinette/edit.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/trottinette/edit.html.twig");
    }
}
