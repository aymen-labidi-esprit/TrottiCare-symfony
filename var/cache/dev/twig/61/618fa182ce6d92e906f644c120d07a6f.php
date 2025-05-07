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

/* admin/event_form.html.twig */
class __TwigTemplate_ec2b5b4a1c76c8c84b92546e747694bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/event_form.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 5, $this->source); })()), "Gestion Événement")) : ("Gestion Événement")), "html", null, true);
        yield " - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 10
        yield "    <style>
        /* Reuse button styles from index page if needed */
        .button { display: inline-block; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: all 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }
        .button-ai { background-color: #8b5cf6; color: white; border-color: #8b5cf6; } /* Purple example */
        .button-ai:hover { background-color: #7c3aed; border-color: #6d28d9;}
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Basic form row styling */
        .form-control, .form-select, textarea { display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { appearance: none; background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        label { display: inline-block; margin-bottom: 0.5rem; font-weight: 500; }
        .mb-3 { margin-bottom: 1rem !important; }
        .mt-6 { margin-top: 1.5rem !important; }
        .mr-2 { margin-right: 0.5rem !important; }
        .flex { display: flex !important; }
        .justify-between { justify-content: space-between !important; }
        .items-center { align-items: center !important; }
        .gap-2 > *:not(:last-child) { margin-right: 0.5rem; }

        /* Add FontAwesome icons for buttons if not global */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-save:before { content: \"\\f0c7\"; }
        .fa-robot:before { content: \"\\f544\"; } /* AI icon */
        .fa-spin { animation: fa-spin 1s infinite linear; }
        @keyframes fa-spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
        <div class=\"container mx-auto max-w-3xl\"> ";
        // line 45
        yield "
            ";
        // line 47
        yield "            <h1 class=\"text-2xl md:text-3xl font-bold text-gray-800 mb-6\">
                ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 48, $this->source); })()), "Gérer l'Événement")) : ("Gérer l'Événement")), "html", null, true);
        yield "
            </h1>

            ";
        // line 52
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/event_form.html.twig", 52);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 53
        yield "
            ";
        // line 55
        yield "            <div class=\"bg-white p-6 rounded-lg shadow\">
                ";
        // line 57
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_start', ["attr" => ["id" => "event-form"]]);
        yield "

                ";
        // line 60
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'errors');
        yield "

                ";
        // line 63
        yield "                <div class=\"space-y-4\"> ";
        // line 64
        yield "                    ";
        // line 65
        yield "                    <div class=\"mb-3\">
                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "titre", [], "any", false, false, false, 66), 'label');
        yield "
                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "titre", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "titre", [], "any", false, false, false, 68), 'errors');
        yield "
                    </div>

                    ";
        // line 72
        yield "                    <div class=\"mb-3\">
                        <div class=\"flex justify-between items-center mb-1\">
                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), 'label');
        yield "
                            ";
        // line 76
        yield "                            ";
        if (((array_key_exists("show_ai_button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["show_ai_button"]) || array_key_exists("show_ai_button", $context) ? $context["show_ai_button"] : (function () { throw new RuntimeError('Variable "show_ai_button" does not exist.', 76, $this->source); })()), false)) : (false))) {
            // line 77
            yield "                                <button type=\"button\" id=\"generate-ai-btn\" class=\"button button-ai button-sm\">
                                    <i class=\"fas fa-robot mr-1\"></i> Générer avec IA
                                </button>
                            ";
        }
        // line 81
        yield "                        </div>
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "rows" => 5]]);
        yield "
                        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "description", [], "any", false, false, false, 83), 'errors');
        yield "
                        <div id=\"ai-status\" class=\"text-xs mt-1\"></div> ";
        // line 85
        yield "                    </div>

                    ";
        // line 88
        yield "                    <div class=\"mb-3\">
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "state", [], "any", false, false, false, 89), 'label');
        yield "
                        ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "state", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "state", [], "any", false, false, false, 91), 'errors');
        yield "
                    </div>

                    ";
        // line 95
        yield "                    <div class=\"mb-3\">
                        ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "dateDebut", [], "any", false, false, false, 96), 'label');
        yield "
                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "dateDebut", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "dateDebut", [], "any", false, false, false, 98), 'errors');
        yield "
                    </div>

                    ";
        // line 102
        yield "                    <div class=\"mb-3\">
                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "dateFin", [], "any", false, false, false, 103), 'label');
        yield "
                        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "dateFin", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "dateFin", [], "any", false, false, false, 105), 'errors');
        yield "
                    </div>

                    ";
        // line 109
        yield "                    <div class=\"mb-3\">
                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 110), 'label');
        yield "
                        ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 112), 'errors');
        yield "
                    </div>

                    ";
        // line 116
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", true, true, false, 116)) {
            // line 117
            yield "                        <div class=\"mb-3\">
                            ";
            // line 118
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "statut", [], "any", false, false, false, 118), 'label');
            yield "
                            ";
            // line 119
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "statut", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
                            ";
            // line 120
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "statut", [], "any", false, false, false, 120), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 123
        yield "                </div>
                ";
        // line 125
        yield "
                ";
        // line 127
        yield "                <div class=\"mt-6 flex justify-between items-center border-t pt-4\">
                    <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"button button-secondary\">
                        <i class=\"fas fa-arrow-left mr-2\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"button button-success\">
                        <i class=\"fas fa-save mr-2\"></i> ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 132, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                    </button>
                </div>

                ";
        // line 136
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
        yield "
            </div>

        </div> ";
        // line 140
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        // line 144
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const aiButton = document.getElementById('generate-ai-btn');
            const descriptionField = document.getElementById('";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "description", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
        yield "'); // Get ID dynamically
            const titreField = document.getElementById('";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "titre", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), "html", null, true);
        yield "');
            const stateField = document.getElementById('";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "state", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150), "html", null, true);
        yield "');
            const dateDebutField = document.getElementById('";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "dateDebut", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), "html", null, true);
        yield "');
            const dateFinField = document.getElementById('";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "dateFin", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152), "html", null, true);
        yield "');
            const autonomieField = document.getElementById('";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "trottinetteMinAutonomie", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153), "html", null, true);
        yield "');
            const aiStatusDiv = document.getElementById('ai-status');

            if (aiButton && descriptionField) {
                aiButton.addEventListener('click', async function() {
                    const description = descriptionField.value;
                    if (!description.trim()) {
                        aiStatusDiv.textContent = 'Veuillez entrer une description.';
                        aiStatusDiv.className = 'text-xs mt-1 text-red-600';
                        return;
                    }

                    // --- Show loading state ---
                    aiButton.disabled = true;
                    aiButton.innerHTML = '<i class=\"fas fa-spinner fa-spin mr-1\"></i> Génération...';
                    aiStatusDiv.textContent = 'Analyse en cours...';
                    aiStatusDiv.className = 'text-xs mt-1 text-blue-600';

                    try {
                        const response = await fetch(\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_generate_details");
        yield "\", {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest', // Optional: Helps backend identify AJAX
                                'Content-Type': 'application/x-www-form-urlencoded', // Required
                            },
                            body: `description=\${encodeURIComponent(description)}`
                        });

                        const result = await response.json();

                        if (response.ok && result.success && result.data) {
                            const data = result.data;
                            console.log(\"AI Data Received:\", data); // Debugging

                            // --- Populate fields ---
                            if (data.titre && titreField) titreField.value = data.titre;
                            if (data.state && stateField) {
                                // Important: Set the VALUE of the select element
                                // This assumes the backend correctly mapped the location name
                                // to the Enum *value* (e.g., 'SOUSSE')
                                stateField.value = data.state;
                                if (stateField.value !== data.state) { // Check if value was actually set (option exists)
                                    console.warn(`Could not set state field to '\${data.state}'. Option might be missing or mapping failed.`);
                                    aiStatusDiv.textContent += ` (Lieu '\${data.state}' non mappé)`; // Append warning
                                    aiStatusDiv.className = 'text-xs mt-1 text-yellow-600';
                                }
                            }
                            if (data.dateDebut && dateDebutField) dateDebutField.value = data.dateDebut;
                            if (data.dateFin && dateFinField) dateFinField.value = data.dateFin;
                            if (data.trottinetteMinAutonomie !== undefined && data.trottinetteMinAutonomie !== null && autonomieField) {
                                autonomieField.value = data.trottinetteMinAutonomie;
                            }

                            aiStatusDiv.textContent = 'Champs pré-remplis par l\\'IA.';
                            aiStatusDiv.className = 'text-xs mt-1 text-green-600';

                        } else {
                            // Handle errors reported by the backend
                            console.error(\"AI Generation Error:\", result.message);
                            aiStatusDiv.textContent = `Erreur: \${result.message || 'Impossible de générer les détails.'}`;
                            aiStatusDiv.className = 'text-xs mt-1 text-red-600';
                        }

                    } catch (error) {
                        // Handle network or other fetch errors
                        console.error(\"Fetch Error:\", error);
                        aiStatusDiv.textContent = 'Erreur de communication avec le serveur.';
                        aiStatusDiv.className = 'text-xs mt-1 text-red-600';
                    } finally {
                        // --- Reset button state ---
                        aiButton.disabled = false;
                        aiButton.innerHTML = '<i class=\"fas fa-robot mr-1\"></i> Générer avec IA';
                    }
                });
            } else {
                if (!aiButton) console.error(\"AI button not found\");
                if (!descriptionField) console.error(\"Description field not found\");
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
        return "admin/event_form.html.twig";
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
        return array (  450 => 172,  428 => 153,  424 => 152,  420 => 151,  416 => 150,  412 => 149,  408 => 148,  400 => 144,  387 => 143,  376 => 140,  370 => 136,  363 => 132,  356 => 128,  353 => 127,  350 => 125,  347 => 123,  341 => 120,  337 => 119,  333 => 118,  330 => 117,  327 => 116,  321 => 112,  317 => 111,  313 => 110,  310 => 109,  304 => 105,  300 => 104,  296 => 103,  293 => 102,  287 => 98,  283 => 97,  279 => 96,  276 => 95,  270 => 91,  266 => 90,  262 => 89,  259 => 88,  255 => 85,  251 => 83,  247 => 82,  244 => 81,  238 => 77,  235 => 76,  231 => 74,  227 => 72,  221 => 68,  217 => 67,  213 => 66,  210 => 65,  208 => 64,  206 => 63,  200 => 60,  194 => 57,  191 => 55,  188 => 53,  177 => 52,  171 => 48,  168 => 47,  165 => 45,  162 => 43,  149 => 42,  108 => 10,  103 => 8,  90 => 7,  66 => 5,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/event_form.html.twig #}
{% extends 'base.html.twig' %}

{# Use dynamic title passed from controller #}
{% block title %}{{ page_title|default('Gestion Événement') }} - Admin{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Add basic form styling if not covered by base or Tailwind #}
    <style>
        /* Reuse button styles from index page if needed */
        .button { display: inline-block; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: all 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }
        .button-ai { background-color: #8b5cf6; color: white; border-color: #8b5cf6; } /* Purple example */
        .button-ai:hover { background-color: #7c3aed; border-color: #6d28d9;}
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Basic form row styling */
        .form-control, .form-select, textarea { display: block; width: 100%; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5; color: #1f2937; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .form-select { appearance: none; background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; }
        label { display: inline-block; margin-bottom: 0.5rem; font-weight: 500; }
        .mb-3 { margin-bottom: 1rem !important; }
        .mt-6 { margin-top: 1.5rem !important; }
        .mr-2 { margin-right: 0.5rem !important; }
        .flex { display: flex !important; }
        .justify-between { justify-content: space-between !important; }
        .items-center { align-items: center !important; }
        .gap-2 > *:not(:last-child) { margin-right: 0.5rem; }

        /* Add FontAwesome icons for buttons if not global */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-save:before { content: \"\\f0c7\"; }
        .fa-robot:before { content: \"\\f544\"; } /* AI icon */
        .fa-spin { animation: fa-spin 1s infinite linear; }
        @keyframes fa-spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
        <div class=\"container mx-auto max-w-3xl\"> {# Limit width for forms #}

            {# Page Header #}
            <h1 class=\"text-2xl md:text-3xl font-bold text-gray-800 mb-6\">
                {{ page_title|default('Gérer l\\'Événement') }}
            </h1>

            {# Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# Form #}
            <div class=\"bg-white p-6 rounded-lg shadow\">
                {# Use method=\"POST\" explicitly if needed, though form_start defaults to it #}
                {{ form_start(form, {'attr': {'id': 'event-form'}}) }}

                {# Display general form errors #}
                {{ form_errors(form) }}

                {# --- RENDER FORM FIELDS MANUALLY FOR BUTTON PLACEMENT --- #}
                <div class=\"space-y-4\"> {# Add spacing between fields #}
                    {# Titre #}
                    <div class=\"mb-3\">
                        {{ form_label(form.titre) }}
                        {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.titre) }}
                    </div>

                    {# Description & AI Button #}
                    <div class=\"mb-3\">
                        <div class=\"flex justify-between items-center mb-1\">
                            {{ form_label(form.description) }}
                            {# Show AI button only on 'new' page if flag is set #}
                            {% if show_ai_button|default(false) %}
                                <button type=\"button\" id=\"generate-ai-btn\" class=\"button button-ai button-sm\">
                                    <i class=\"fas fa-robot mr-1\"></i> Générer avec IA
                                </button>
                            {% endif %}
                        </div>
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 5}}) }}
                        {{ form_errors(form.description) }}
                        <div id=\"ai-status\" class=\"text-xs mt-1\"></div> {# For loading/error messages #}
                    </div>

                    {# State (Gouvernorat) #}
                    <div class=\"mb-3\">
                        {{ form_label(form.state) }}
                        {{ form_widget(form.state, {'attr': {'class': 'form-select'}}) }}
                        {{ form_errors(form.state) }}
                    </div>

                    {# Date Debut #}
                    <div class=\"mb-3\">
                        {{ form_label(form.dateDebut) }}
                        {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.dateDebut) }}
                    </div>

                    {# Date Fin #}
                    <div class=\"mb-3\">
                        {{ form_label(form.dateFin) }}
                        {{ form_widget(form.dateFin, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.dateFin) }}
                    </div>

                    {# Min Autonomy #}
                    <div class=\"mb-3\">
                        {{ form_label(form.trottinetteMinAutonomie) }}
                        {{ form_widget(form.trottinetteMinAutonomie, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.trottinetteMinAutonomie) }}
                    </div>

                    {# Status (Only on Edit) #}
                    {% if form.statut is defined %}
                        <div class=\"mb-3\">
                            {{ form_label(form.statut) }}
                            {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
                            {{ form_errors(form.statut) }}
                        </div>
                    {% endif %}
                </div>
                {# --- END MANUAL FIELD RENDERING --- #}

                {# Buttons #}
                <div class=\"mt-6 flex justify-between items-center border-t pt-4\">
                    <a href=\"{{ path('app_admin_events') }}\" class=\"button button-secondary\">
                        <i class=\"fas fa-arrow-left mr-2\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"button button-success\">
                        <i class=\"fas fa-save mr-2\"></i> {{ button_label|default('Enregistrer') }}
                    </button>
                </div>

                {{ form_end(form) }}
            </div>

        </div> {# End container #}
    </div> {# End page wrapper #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const aiButton = document.getElementById('generate-ai-btn');
            const descriptionField = document.getElementById('{{ form.description.vars.id }}'); // Get ID dynamically
            const titreField = document.getElementById('{{ form.titre.vars.id }}');
            const stateField = document.getElementById('{{ form.state.vars.id }}');
            const dateDebutField = document.getElementById('{{ form.dateDebut.vars.id }}');
            const dateFinField = document.getElementById('{{ form.dateFin.vars.id }}');
            const autonomieField = document.getElementById('{{ form.trottinetteMinAutonomie.vars.id }}');
            const aiStatusDiv = document.getElementById('ai-status');

            if (aiButton && descriptionField) {
                aiButton.addEventListener('click', async function() {
                    const description = descriptionField.value;
                    if (!description.trim()) {
                        aiStatusDiv.textContent = 'Veuillez entrer une description.';
                        aiStatusDiv.className = 'text-xs mt-1 text-red-600';
                        return;
                    }

                    // --- Show loading state ---
                    aiButton.disabled = true;
                    aiButton.innerHTML = '<i class=\"fas fa-spinner fa-spin mr-1\"></i> Génération...';
                    aiStatusDiv.textContent = 'Analyse en cours...';
                    aiStatusDiv.className = 'text-xs mt-1 text-blue-600';

                    try {
                        const response = await fetch(\"{{ path('app_admin_event_generate_details') }}\", {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest', // Optional: Helps backend identify AJAX
                                'Content-Type': 'application/x-www-form-urlencoded', // Required
                            },
                            body: `description=\${encodeURIComponent(description)}`
                        });

                        const result = await response.json();

                        if (response.ok && result.success && result.data) {
                            const data = result.data;
                            console.log(\"AI Data Received:\", data); // Debugging

                            // --- Populate fields ---
                            if (data.titre && titreField) titreField.value = data.titre;
                            if (data.state && stateField) {
                                // Important: Set the VALUE of the select element
                                // This assumes the backend correctly mapped the location name
                                // to the Enum *value* (e.g., 'SOUSSE')
                                stateField.value = data.state;
                                if (stateField.value !== data.state) { // Check if value was actually set (option exists)
                                    console.warn(`Could not set state field to '\${data.state}'. Option might be missing or mapping failed.`);
                                    aiStatusDiv.textContent += ` (Lieu '\${data.state}' non mappé)`; // Append warning
                                    aiStatusDiv.className = 'text-xs mt-1 text-yellow-600';
                                }
                            }
                            if (data.dateDebut && dateDebutField) dateDebutField.value = data.dateDebut;
                            if (data.dateFin && dateFinField) dateFinField.value = data.dateFin;
                            if (data.trottinetteMinAutonomie !== undefined && data.trottinetteMinAutonomie !== null && autonomieField) {
                                autonomieField.value = data.trottinetteMinAutonomie;
                            }

                            aiStatusDiv.textContent = 'Champs pré-remplis par l\\'IA.';
                            aiStatusDiv.className = 'text-xs mt-1 text-green-600';

                        } else {
                            // Handle errors reported by the backend
                            console.error(\"AI Generation Error:\", result.message);
                            aiStatusDiv.textContent = `Erreur: \${result.message || 'Impossible de générer les détails.'}`;
                            aiStatusDiv.className = 'text-xs mt-1 text-red-600';
                        }

                    } catch (error) {
                        // Handle network or other fetch errors
                        console.error(\"Fetch Error:\", error);
                        aiStatusDiv.textContent = 'Erreur de communication avec le serveur.';
                        aiStatusDiv.className = 'text-xs mt-1 text-red-600';
                    } finally {
                        // --- Reset button state ---
                        aiButton.disabled = false;
                        aiButton.innerHTML = '<i class=\"fas fa-robot mr-1\"></i> Générer avec IA';
                    }
                });
            } else {
                if (!aiButton) console.error(\"AI button not found\");
                if (!descriptionField) console.error(\"Description field not found\");
            }
        });
    </script>
{% endblock %}", "admin/event_form.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/event_form.html.twig");
    }
}
