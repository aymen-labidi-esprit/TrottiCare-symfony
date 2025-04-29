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
class __TwigTemplate_def6fdd8e7bb04068637b74a202cd452 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "New Maintenance";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mt-4\">
        <h1>Créer une nouvelle Maintenance</h1>

        ";
        // line 9
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "valid", [], "any", false, false, false, 9) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "submitted", [], "any", false, false, false, 9))) {
            // line 10
            yield "            <div class=\"alert alert-danger\">
                <h4 class=\"alert-heading\">Des erreurs ont été trouvées :</h4>
                <ul class=\"mb-0\">
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "children", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 14
                yield "                        ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 14), "valid", [], "any", false, false, false, 14)) {
                    // line 15
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 16
                        yield "                                <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 16), "html", null, true);
                        yield "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    yield "                        ";
                }
                // line 19
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                </ul>
            </div>
        ";
        }
        // line 23
        yield "
        ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "valid", [], "any", false, false, false, 25)) ? ("form-control") : ("form-control is-invalid"))]]);
        yield "
            ";
        // line 26
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "valid", [], "any", false, false, false, 26)) {
            // line 27
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'errors');
            yield "</div>
            ";
        }
        // line 29
        yield "            
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "dateDebut", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "dateDebut", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "valid", [], "any", false, false, false, 30)) ? ("form-control") : ("form-control is-invalid"))]]);
        yield "
            ";
        // line 31
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateDebut", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "valid", [], "any", false, false, false, 31)) {
            // line 32
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateDebut", [], "any", false, false, false, 32), 'errors');
            yield "</div>
            ";
        }
        // line 34
        yield "            
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dateFin", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dateFin", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "valid", [], "any", false, false, false, 35)) ? ("form-control") : ("form-control is-invalid"))]]);
        yield "
            ";
        // line 36
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "dateFin", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "valid", [], "any", false, false, false, 36)) {
            // line 37
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateFin", [], "any", false, false, false, 37), 'errors');
            yield "</div>
            ";
        }
        // line 39
        yield "            
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "statut", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "statut", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "valid", [], "any", false, false, false, 40)) ? ("form-select") : ("form-select is-invalid"))]]);
        yield "
            ";
        // line 41
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "statut", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41)) {
            // line 42
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "statut", [], "any", false, false, false, 42), 'errors');
            yield "</div>
            ";
        }
        // line 44
        yield "            
            ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cout", [], "any", true, true, false, 45)) {
            // line 46
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "cout", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "cout", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "valid", [], "any", false, false, false, 46)) ? ("form-control") : ("form-control is-invalid"))]]);
            yield "
                ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cout", [], "any", false, true, false, 47), "vars", [], "any", false, true, false, 47), "valid", [], "any", true, true, false, 47) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "cout", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "valid", [], "any", false, false, false, 47))) {
                // line 48
                yield "                    <div class=\"invalid-feedback d-block\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "cout", [], "any", false, false, false, 48), 'errors');
                yield "</div>
                ";
            }
            // line 50
            yield "            ";
        }
        // line 51
        yield "            
            ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "technicien", [], "any", true, true, false, 52)) {
            // line 53
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "technicien", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "technicien", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "valid", [], "any", false, false, false, 53)) ? ("form-control") : ("form-control is-invalid"))]]);
            yield "
                ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "technicien", [], "any", false, true, false, 54), "vars", [], "any", false, true, false, 54), "valid", [], "any", true, true, false, 54) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "technicien", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "valid", [], "any", false, false, false, 54))) {
                // line 55
                yield "                    <div class=\"invalid-feedback d-block\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "technicien", [], "any", false, false, false, 55), 'errors');
                yield "</div>
                ";
            }
            // line 57
            yield "            ";
        }
        // line 58
        yield "            
            <button class=\"btn btn-primary mt-3\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
        ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        yield "
    </div>
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
        return array (  260 => 60,  256 => 59,  253 => 58,  250 => 57,  244 => 55,  242 => 54,  237 => 53,  235 => 52,  232 => 51,  229 => 50,  223 => 48,  221 => 47,  216 => 46,  214 => 45,  211 => 44,  205 => 42,  203 => 41,  199 => 40,  196 => 39,  190 => 37,  188 => 36,  184 => 35,  181 => 34,  175 => 32,  173 => 31,  169 => 30,  166 => 29,  160 => 27,  158 => 26,  154 => 25,  150 => 24,  147 => 23,  142 => 20,  136 => 19,  133 => 18,  124 => 16,  119 => 15,  116 => 14,  112 => 13,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Maintenance{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Créer une nouvelle Maintenance</h1>

        {% if not form.vars.valid and form.vars.submitted %}
            <div class=\"alert alert-danger\">
                <h4 class=\"alert-heading\">Des erreurs ont été trouvées :</h4>
                <ul class=\"mb-0\">
                    {% for child in form.children %}
                        {% if not child.vars.valid %}
                            {% for error in child.vars.errors %}
                                <li>{{ error.message }}</li>
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
            {{ form_row(form.description, {'attr': {'class': form.description.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
            {% if not form.description.vars.valid %}
                <div class=\"invalid-feedback d-block\">{{ form_errors(form.description) }}</div>
            {% endif %}
            
            {{ form_row(form.dateDebut, {'attr': {'class': form.dateDebut.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
            {% if not form.dateDebut.vars.valid %}
                <div class=\"invalid-feedback d-block\">{{ form_errors(form.dateDebut) }}</div>
            {% endif %}
            
            {{ form_row(form.dateFin, {'attr': {'class': form.dateFin.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
            {% if not form.dateFin.vars.valid %}
                <div class=\"invalid-feedback d-block\">{{ form_errors(form.dateFin) }}</div>
            {% endif %}
            
            {{ form_row(form.statut, {'attr': {'class': form.statut.vars.valid ? 'form-select' : 'form-select is-invalid'}}) }}
            {% if not form.statut.vars.valid %}
                <div class=\"invalid-feedback d-block\">{{ form_errors(form.statut) }}</div>
            {% endif %}
            
            {% if form.cout is defined %}
                {{ form_row(form.cout, {'attr': {'class': form.cout.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
                {% if form.cout.vars.valid is defined and not form.cout.vars.valid %}
                    <div class=\"invalid-feedback d-block\">{{ form_errors(form.cout) }}</div>
                {% endif %}
            {% endif %}
            
            {% if form.technicien is defined %}
                {{ form_row(form.technicien, {'attr': {'class': form.technicien.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
                {% if form.technicien.vars.valid is defined and not form.technicien.vars.valid %}
                    <div class=\"invalid-feedback d-block\">{{ form_errors(form.technicien) }}</div>
                {% endif %}
            {% endif %}
            
            <button class=\"btn btn-primary mt-3\">{{ button_label|default('Enregistrer') }}</button>
        {{ form_end(form) }}
    </div>
{% endblock %}", "maintenance/new.html.twig", "C:\\Users\\Baha Ayadi\\Desktop\\Trotticare Events\\Trottinette\\templates\\maintenance\\new.html.twig");
    }
}
