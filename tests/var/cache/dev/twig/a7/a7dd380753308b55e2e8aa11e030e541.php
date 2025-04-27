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
class __TwigTemplate_03746f6fbce54784abd4de094223fd9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/trottinette/edit.html.twig", 1);
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

        yield "Modifier Trottinette";
        
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
        yield "<div class=\"container py-4\">
    <h1>Modifier la Trottinette</h1>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 12
                if (($context["label"] == "success")) {
                    // line 13
                    yield "                    <i class=\"fas fa-check-circle me-2\"></i>
                ";
                } else {
                    // line 15
                    yield "                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                ";
                }
                // line 17
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
    ";
        // line 23
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "valid", [], "any", false, false, false, 23) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "submitted", [], "any", false, false, false, 23))) {
            // line 24
            yield "        <div class=\"alert alert-danger\">
            <h4 class=\"alert-heading\">Des erreurs ont été trouvées :</h4>
            <ul class=\"mb-0\">
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable([CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "modele", [], "any", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "numeroSerie", [], "any", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "etat", [], "any", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "batterie", [], "any", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "autonomie", [], "any", false, false, false, 27)]);
            foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
                // line 28
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["champ"], "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 29
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 29), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['champ'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "                ";
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32))) {
                // line 33
                yield "                    <li>Veuillez remplir tous les champs obligatoires.</li>
                ";
            }
            // line 35
            yield "            </ul>
        </div>
    ";
        }
        // line 38
        yield "
    ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"], "method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 45
(isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)])]);
        // line 46
        yield "

    ";
        // line 48
        $context["champs"] = ["Modèle" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "modele", [], "any", false, false, false, 49), "Numéro de Série" => CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "numeroSerie", [], "any", false, false, false, 50), "État" => CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "etat", [], "any", false, false, false, 51), "Batterie (%)" => CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "batterie", [], "any", false, false, false, 52), "Localisation" => CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "localisation", [], "any", false, false, false, 53), "Autonomie" => CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "autonomie", [], "any", false, false, false, 54), "Point Relais ID" => CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "pointRelais", [], "any", false, false, false, 55)];
        // line 57
        yield "
    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["champs"]) || array_key_exists("champs", $context) ? $context["champs"] : (function () { throw new RuntimeError('Variable "champs" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["champ"]) {
            // line 59
            yield "        <div class=\"mb-3\">
            ";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["champ"], 'label', (CoreExtension::testEmpty($_label_ = $context["label"]) ? [] : ["label" => $_label_]));
            yield "
            ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["champ"], 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["champ"], "vars", [], "any", false, false, false, 63), "valid", [], "any", false, false, false, 63)) ? (((($context["label"] == "État")) ? ("form-select") : ("form-control"))) : (((($context["label"] == "État")) ? ("form-select is-invalid") : ("form-control is-invalid")))), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["champ"], "vars", [], "any", false, false, false, 64), "required", [], "any", false, false, false, 64)) ? ("required") : (null))]]);
            // line 66
            yield "
            ";
            // line 67
            if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["champ"], "vars", [], "any", false, false, false, 67), "valid", [], "any", false, false, false, 67) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["champ"], "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67)) > 0))) {
                // line 68
                yield "                <div class=\"invalid-feedback d-block\">
                    <ul class=\"mb-0\">
                        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["champ"], "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 71
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 71), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "                    </ul>
                </div>
            ";
            }
            // line 76
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['champ'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>Enregistrer
        </button>
        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
        yield "\" class=\"btn btn-secondary ms-2\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>

    ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        yield "

    <div class=\"card mt-4\">
        <div class=\"card-body\">
            <h5 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Guide de saisie</h5>
            <ul class=\"mb-0\">
                <li>Le modèle doit contenir au moins 2 caractères</li>
                <li>Le numéro de série doit contenir au moins 4 caractères (lettres, chiffres et tirets uniquement)</li>
                <li>Le niveau de batterie doit être entre 0 et 100%</li>
                <li>Une trottinette disponible doit avoir au moins 10% de batterie</li>
                <li>Le format d'autonomie doit être comme \"25 km\" ou \"2 heures\"</li>
            </ul>
        </div>
    </div>
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
        return array (  278 => 88,  270 => 83,  263 => 78,  256 => 76,  251 => 73,  242 => 71,  238 => 70,  234 => 68,  232 => 67,  229 => 66,  227 => 64,  226 => 63,  225 => 61,  221 => 60,  218 => 59,  214 => 58,  211 => 57,  209 => 55,  208 => 54,  207 => 53,  206 => 52,  205 => 51,  204 => 50,  203 => 49,  202 => 48,  198 => 46,  196 => 45,  195 => 39,  192 => 38,  187 => 35,  183 => 33,  180 => 32,  174 => 31,  165 => 29,  160 => 28,  156 => 27,  151 => 24,  149 => 23,  146 => 22,  140 => 21,  129 => 17,  125 => 15,  121 => 13,  119 => 12,  114 => 11,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Trottinette{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <h1>Modifier la Trottinette</h1>

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {% if label == 'success' %}
                    <i class=\"fas fa-check-circle me-2\"></i>
                {% else %}
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                {% endif %}
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {% if not form.vars.valid and form.vars.submitted %}
        <div class=\"alert alert-danger\">
            <h4 class=\"alert-heading\">Des erreurs ont été trouvées :</h4>
            <ul class=\"mb-0\">
                {% for champ in [form.modele, form.numeroSerie, form.etat, form.batterie, form.autonomie] %}
                    {% for error in champ.vars.errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                {% endfor %}
                {% if form.vars.errors is empty %}
                    <li>Veuillez remplir tous les champs obligatoires.</li>
                {% endif %}
            </ul>
        </div>
    {% endif %}

    {{ form_start(form, {
        'attr': {
            'novalidate': 'novalidate',
            'class': 'needs-validation'
        },
        'method': 'POST',
        'action': path('admin_trottinette_edit', { id: trottinette.id })
    }) }}

    {% set champs = {
        'Modèle': form.modele,
        'Numéro de Série': form.numeroSerie,
        'État': form.etat,
        'Batterie (%)': form.batterie,
        'Localisation': form.localisation,
        'Autonomie': form.autonomie,
        'Point Relais ID': form.pointRelais
    } %}

    {% for label, champ in champs %}
        <div class=\"mb-3\">
            {{ form_label(champ, label) }}
            {{ form_widget(champ, {
                'attr': {
                    'class': champ.vars.valid ? (label == 'État' ? 'form-select' : 'form-control') : (label == 'État' ? 'form-select is-invalid' : 'form-control is-invalid'),
                    'required': champ.vars.required ? 'required' : null
                }
            }) }}
            {% if not champ.vars.valid and champ.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    <ul class=\"mb-0\">
                        {% for error in champ.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
        </div>
    {% endfor %}

    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>Enregistrer
        </button>
        <a href=\"{{ path('admin_trottinette_index') }}\" class=\"btn btn-secondary ms-2\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>

    {{ form_end(form) }}

    <div class=\"card mt-4\">
        <div class=\"card-body\">
            <h5 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Guide de saisie</h5>
            <ul class=\"mb-0\">
                <li>Le modèle doit contenir au moins 2 caractères</li>
                <li>Le numéro de série doit contenir au moins 4 caractères (lettres, chiffres et tirets uniquement)</li>
                <li>Le niveau de batterie doit être entre 0 et 100%</li>
                <li>Une trottinette disponible doit avoir au moins 10% de batterie</li>
                <li>Le format d'autonomie doit être comme \"25 km\" ou \"2 heures\"</li>
            </ul>
        </div>
    </div>
</div>
{% endblock %}
", "admin/trottinette/edit.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\admin\\trottinette\\edit.html.twig");
    }
}
