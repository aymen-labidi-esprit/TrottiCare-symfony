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

/* reclamation/view_responses.html.twig */
class __TwigTemplate_c4fee2280e4c4829dfc4916693bf06e2 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/view_responses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/view_responses.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/view_responses.html.twig", 1);
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

        yield "Réponses à la Réclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.4rem 0.75rem;
        border-radius: 0.375rem;
        font-weight: 500;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        font-size: 0.75rem;
        line-height: 1.25;
        white-space: nowrap;
        border: 1px solid transparent;
    }
    .button-primary { background-color: #3b82f6; color: white; }
    .button-primary:hover { background-color: #2563eb; }
    .button-danger { background-color: #ef4444; color: white; }
    .button-danger:hover { background-color: #dc2626; }
    .button-outline-primary { background-color: transparent; color: #3b82f6; border: 1px solid #3b82f6; }
    .button-outline-primary:hover { background-color: #e0f2fe; }
    .badge {
        display: inline-block;
        padding: 0.25em 0.6em;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 9999px;
        background-color: #e5e7eb;
        color: #374151;
        text-transform: uppercase;
    }
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
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-5xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                Réponses à la réclamation : <span class=\"text-blue-600\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 48, $this->source); })()), "titre", [], "any", false, false, false, 48), "html", null, true);
        yield "</span>
            </h1>

            ";
        // line 51
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["responses"]) || array_key_exists("responses", $context) ? $context["responses"] : (function () { throw new RuntimeError('Variable "responses" does not exist.', 51, $this->source); })()))) {
            // line 52
            yield "                <ul class=\"space-y-4 mb-6\">
                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["responses"]) || array_key_exists("responses", $context) ? $context["responses"] : (function () { throw new RuntimeError('Variable "responses" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 54
                yield "                        <li class=\"bg-gray-50 rounded-md p-4 shadow-sm flex justify-between items-start\">
                            <div>
                                <p class=\"text-gray-800 mb-2\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "message", [], "any", false, false, false, 56), "html", null, true);
                yield "</p>
                                <div class=\"text-sm text-gray-500 space-x-2\">
                                    <span>Envoyée le ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "dateReponse", [], "any", false, false, false, 58), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                    <span class=\"badge\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["response"], "userType", [], "any", false, false, false, 59)), "html", null, true);
                yield "</span>
                                </div>
                            </div>
                            <div class=\"flex flex-col gap-2 items-end\">
                                <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_response", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"button button-primary\">
                                    <i class=\"fas fa-edit mr-1\"></i> Modifier
                                </a>
                                <a href=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_response", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\" class=\"button button-danger\"
                                   onclick=\"return confirm('Voulez-vous vraiment supprimer cette réponse ?');\">
                                    <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                                </a>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['response'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                </ul>
            ";
        } else {
            // line 75
            yield "                <div class=\"text-center text-gray-500 py-10\">
                    <i class=\"fas fa-exclamation-circle text-4xl mb-2\"></i>
                    <p>Aucune réponse disponible pour cette réclamation.</p>
                </div>
            ";
        }
        // line 80
        yield "
            <div class=\"text-center mt-6\">
                <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations");
        yield "\" class=\"button button-outline-primary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste des réclamations
                </a>
            </div>

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
        return "reclamation/view_responses.html.twig";
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
        return array (  236 => 82,  232 => 80,  225 => 75,  221 => 73,  208 => 66,  202 => 63,  195 => 59,  191 => 58,  186 => 56,  182 => 54,  178 => 53,  175 => 52,  173 => 51,  167 => 48,  160 => 43,  147 => 42,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réponses à la Réclamation{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.4rem 0.75rem;
        border-radius: 0.375rem;
        font-weight: 500;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        font-size: 0.75rem;
        line-height: 1.25;
        white-space: nowrap;
        border: 1px solid transparent;
    }
    .button-primary { background-color: #3b82f6; color: white; }
    .button-primary:hover { background-color: #2563eb; }
    .button-danger { background-color: #ef4444; color: white; }
    .button-danger:hover { background-color: #dc2626; }
    .button-outline-primary { background-color: transparent; color: #3b82f6; border: 1px solid #3b82f6; }
    .button-outline-primary:hover { background-color: #e0f2fe; }
    .badge {
        display: inline-block;
        padding: 0.25em 0.6em;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 9999px;
        background-color: #e5e7eb;
        color: #374151;
        text-transform: uppercase;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto max-w-5xl\">
        <div class=\"bg-white rounded-lg shadow-md p-6\">

            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">
                Réponses à la réclamation : <span class=\"text-blue-600\">{{ reclamation.titre }}</span>
            </h1>

            {% if responses is not empty %}
                <ul class=\"space-y-4 mb-6\">
                    {% for response in responses %}
                        <li class=\"bg-gray-50 rounded-md p-4 shadow-sm flex justify-between items-start\">
                            <div>
                                <p class=\"text-gray-800 mb-2\">{{ response.message }}</p>
                                <div class=\"text-sm text-gray-500 space-x-2\">
                                    <span>Envoyée le {{ response.dateReponse|date('d/m/Y H:i') }}</span>
                                    <span class=\"badge\">{{ response.userType|capitalize }}</span>
                                </div>
                            </div>
                            <div class=\"flex flex-col gap-2 items-end\">
                                <a href=\"{{ path('edit_response', {'id': response.id}) }}\" class=\"button button-primary\">
                                    <i class=\"fas fa-edit mr-1\"></i> Modifier
                                </a>
                                <a href=\"{{ path('delete_response', {'id': response.id}) }}\" class=\"button button-danger\"
                                   onclick=\"return confirm('Voulez-vous vraiment supprimer cette réponse ?');\">
                                    <i class=\"fas fa-trash-alt mr-1\"></i> Supprimer
                                </a>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            {% else %}
                <div class=\"text-center text-gray-500 py-10\">
                    <i class=\"fas fa-exclamation-circle text-4xl mb-2\"></i>
                    <p>Aucune réponse disponible pour cette réclamation.</p>
                </div>
            {% endif %}

            <div class=\"text-center mt-6\">
                <a href=\"{{ path('admin_reclamations') }}\" class=\"button button-outline-primary\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste des réclamations
                </a>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "reclamation/view_responses.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/view_responses.html.twig");
    }
}
