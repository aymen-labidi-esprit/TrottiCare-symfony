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

/* reclamation/show_reclamation.html.twig */
class __TwigTemplate_661f1f91e1c4c31a6581ab4866c47c33 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show_reclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show_reclamation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/show_reclamation.html.twig", 1);
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

        yield "Détails de la Réclamation";
        
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
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-4xl\">

        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "html", null, true);
        yield "
            </h1>

            <div class=\"space-y-4 mb-8\">
                <div>
                    <span class=\"font-semibold text-gray-700\">Description:</span>
                    <p class=\"text-gray-800\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                </div>
                <div>
                    <span class=\"font-semibold text-gray-700\">Type de Réclamation:</span>
                    <p class=\"text-gray-800\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 22, $this->source); })()), "getTypeReclamation", [], "method", false, false, false, 22), "html", null, true);
        yield "</p>
                </div>
                <div>
                    <span class=\"font-semibold text-gray-700\">Date de Création:</span>
                    <p class=\"text-gray-800\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 26, $this->source); })()), "getDateCreation", [], "method", false, false, false, 26), "Y-m-d"), "html", null, true);
        yield "</p>
                </div>
            </div>

            <h2 class=\"text-xl font-semibold text-gray-900 mb-4\">Réponses</h2>

            ";
        // line 32
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "                <ul class=\"space-y-4\">
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 35
                yield "                        <li class=\"bg-gray-50 p-4 rounded-md shadow-sm\">
                            <p class=\"text-gray-800 mb-2\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "message", [], "any", false, false, false, 36), "html", null, true);
                yield "</p>
                            <p class=\"text-xs text-gray-500\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "getDateReponse", [], "method", false, false, false, 37), "Y-m-d"), "html", null, true);
                yield "</p>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                </ul>
            ";
        } else {
            // line 42
            yield "                <p class=\"text-gray-500\">Aucune réponse pour cette réclamation.</p>
            ";
        }
        // line 44
        yield "
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
        return "reclamation/show_reclamation.html.twig";
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
        return array (  173 => 44,  169 => 42,  165 => 40,  156 => 37,  152 => 36,  149 => 35,  145 => 34,  142 => 33,  140 => 32,  131 => 26,  124 => 22,  117 => 18,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Réclamation{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-4xl\">

        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                {{ reclamation.titre }}
            </h1>

            <div class=\"space-y-4 mb-8\">
                <div>
                    <span class=\"font-semibold text-gray-700\">Description:</span>
                    <p class=\"text-gray-800\">{{ reclamation.description }}</p>
                </div>
                <div>
                    <span class=\"font-semibold text-gray-700\">Type de Réclamation:</span>
                    <p class=\"text-gray-800\">{{ reclamation.getTypeReclamation() }}</p>
                </div>
                <div>
                    <span class=\"font-semibold text-gray-700\">Date de Création:</span>
                    <p class=\"text-gray-800\">{{ reclamation.getDateCreation()|date('Y-m-d') }}</p>
                </div>
            </div>

            <h2 class=\"text-xl font-semibold text-gray-900 mb-4\">Réponses</h2>

            {% if reponses is not empty %}
                <ul class=\"space-y-4\">
                    {% for reponse in reponses %}
                        <li class=\"bg-gray-50 p-4 rounded-md shadow-sm\">
                            <p class=\"text-gray-800 mb-2\">{{ reponse.message }}</p>
                            <p class=\"text-xs text-gray-500\">{{ reponse.getDateReponse()|date('Y-m-d') }}</p>
                        </li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-gray-500\">Aucune réponse pour cette réclamation.</p>
            {% endif %}

        </div>

    </div>
</div>
{% endblock %}
", "reclamation/show_reclamation.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/show_reclamation.html.twig");
    }
}
