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

/* reclamation/show.html.twig */
class __TwigTemplate_b813cc40d6dbc300c1d605b7a7f98b50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Détails Réclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <div class=\"container py-4\">
        <h1>Détails de la Réclamation</h1>
        <ul class=\"list-group my-4\">
            <li class=\"list-group-item\"><strong>ID :</strong> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "</li>
            <li class=\"list-group-item\"><strong>Titre :</strong> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</li>
            <li class=\"list-group-item\"><strong>Description :</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), "html", null, true);
        yield "</li>
            <li class=\"list-group-item\"><strong>Type :</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 11, $this->source); })()), "typeReclamation", [], "any", false, false, false, 11), "html", null, true);
        yield "</li>
            <li class=\"list-group-item\"><strong>Email :</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 12, $this->source); })()), "userEmail", [], "any", false, false, false, 12), "html", null, true);
        yield "</li>
            <li class=\"list-group-item\"><strong>Trottinette :</strong> 
                ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 14, $this->source); })()), "trottinette", [], "any", false, false, false, 14)) {
            // line 15
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 15, $this->source); })()), "trottinette", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
            yield "
                ";
        } else {
            // line 17
            yield "                    Non spécifiée
                ";
        }
        // line 19
        yield "            </li>
            <li class=\"list-group-item\"><strong>Date :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 20, $this->source); })()), "dateCreation", [], "any", false, false, false, 20), "d/m/Y H:i"), "html", null, true);
        yield "</li>
        </ul>

        <div class=\"mt-4\">
            <h2>Réponses</h2>
            ";
        // line 25
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 25, $this->source); })()), "reponses", [], "any", false, false, false, 25)) > 0)) {
            // line 26
            yield "                <div class=\"list-group\">
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 27, $this->source); })()), "reponses", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 28
                yield "                        <div class=\"list-group-item\">
                            <div class=\"d-flex w-100 justify-content-between\">
                                <h5 class=\"mb-1\">
                                    ";
                // line 31
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "auteur", [], "any", false, false, false, 31)) {
                    // line 32
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "auteur", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "auteur", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 34
                    yield "                                        Support Technique
                                    ";
                }
                // line 36
                yield "                                </h5>
                                <small class=\"text-muted\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 37), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                            </div>
                            <p class=\"mb-1\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "message", [], "any", false, false, false, 39), "html", null, true);
                yield "</p>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                </div>
            ";
        } else {
            // line 44
            yield "                <div class=\"alert alert-info\">
                    Aucune réponse n'a été donnée pour le moment.
                </div>
            ";
        }
        // line 48
        yield "        </div>

        <div class=\"mt-4\">
            <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
            <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
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
        return "reclamation/show.html.twig";
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
        return array (  213 => 52,  209 => 51,  204 => 48,  198 => 44,  194 => 42,  185 => 39,  180 => 37,  177 => 36,  173 => 34,  165 => 32,  163 => 31,  158 => 28,  154 => 27,  151 => 26,  149 => 25,  141 => 20,  138 => 19,  134 => 17,  128 => 15,  126 => 14,  121 => 12,  117 => 11,  113 => 10,  109 => 9,  105 => 8,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Détails Réclamation{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <h1>Détails de la Réclamation</h1>
        <ul class=\"list-group my-4\">
            <li class=\"list-group-item\"><strong>ID :</strong> {{ reclamation.id }}</li>
            <li class=\"list-group-item\"><strong>Titre :</strong> {{ reclamation.titre }}</li>
            <li class=\"list-group-item\"><strong>Description :</strong> {{ reclamation.description }}</li>
            <li class=\"list-group-item\"><strong>Type :</strong> {{ reclamation.typeReclamation }}</li>
            <li class=\"list-group-item\"><strong>Email :</strong> {{ reclamation.userEmail }}</li>
            <li class=\"list-group-item\"><strong>Trottinette :</strong> 
                {% if reclamation.trottinette %}
                    {{ reclamation.trottinette.id }}
                {% else %}
                    Non spécifiée
                {% endif %}
            </li>
            <li class=\"list-group-item\"><strong>Date :</strong> {{ reclamation.dateCreation|date('d/m/Y H:i') }}</li>
        </ul>

        <div class=\"mt-4\">
            <h2>Réponses</h2>
            {% if reclamation.reponses|length > 0 %}
                <div class=\"list-group\">
                    {% for reponse in reclamation.reponses %}
                        <div class=\"list-group-item\">
                            <div class=\"d-flex w-100 justify-content-between\">
                                <h5 class=\"mb-1\">
                                    {% if reponse.auteur %}
                                        {{ reponse.auteur.nom }} {{ reponse.auteur.prenom }}
                                    {% else %}
                                        Support Technique
                                    {% endif %}
                                </h5>
                                <small class=\"text-muted\">{{ reponse.dateReponse|date('d/m/Y H:i') }}</small>
                            </div>
                            <p class=\"mb-1\">{{ reponse.message }}</p>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"alert alert-info\">
                    Aucune réponse n'a été donnée pour le moment.
                </div>
            {% endif %}
        </div>

        <div class=\"mt-4\">
            <a href=\"{{ path('reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-warning\">Modifier</a>
            <a href=\"{{ path('reclamation_index') }}\" class=\"btn btn-secondary\">Retour</a>
        </div>
    </div>
{% endblock %}
", "reclamation/show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/show.html.twig");
    }
}
