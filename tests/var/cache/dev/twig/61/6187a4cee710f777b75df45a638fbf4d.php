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

/* point_relais/show.html.twig */
class __TwigTemplate_437533d249c85a1dc763e727c4ff1f4b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "point_relais/show.html.twig", 1);
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

        yield "Détails du Point Relais";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 fade-in\">
                <div class=\"card-header bg-primary text-white d-flex align-items-center\">
                    <i class=\"fas fa-store-alt me-2\"></i>
                    <h3 class=\"mb-0\">Détails du Point Relais</h3>
                </div>

                <div class=\"card-body p-4\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>ID</strong>
                            <span>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Nom</strong>
                            <span>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Adresse</strong>
                            <span>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 27, $this->source); })()), "adresse", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Horaire d'ouverture</strong>
                            <span>
                                ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 32, $this->source); })()), "horairesOuverture", [], "any", false, false, false, 32)) {
            // line 33
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 33, $this->source); })()), "horairesOuverture", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["day"] => $context["time"]) {
                // line 34
                yield "                                        <div><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["day"]), "html", null, true);
                yield ":</strong> 
                                            ";
                // line 35
                yield (($context["time"]) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($context["time"], "H:i \\l\\e d/m/Y"), "html", null, true)) : ("Non défini"));
                yield "
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['day'], $context['time'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                                ";
        } else {
            // line 39
            yield "                                    Aucune horaire défini
                                ";
        }
        // line 41
        yield "                            </span>
                        </li>
                    </ul>
                </div>

                <div class=\"card-footer bg-light d-flex flex-column flex-md-row justify-content-between align-items-center gap-3\">
                    <div class=\"d-flex gap-2\">
                        <a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>

                        <button
                            type=\"button\"
                            class=\"btn btn-danger\"
                            data-bs-toggle=\"modal\"
                            data-bs-target=\"#deleteModal\"
                            data-action=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\"
                            data-token=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58))), "html", null, true);
        yield "\"
                        >
                            <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                        </button>
                    </div>

                    <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_index");
        yield "\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 74
        yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" id=\"deleteForm\">
                <div class=\"modal-header bg-danger text-white\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer ce point relais ?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
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

        // line 96
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    const deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const action = button.getAttribute('data-action');
        const token = button.getAttribute('data-token');

        const form = deleteModal.querySelector('form');
        form.setAttribute('action', action);

        let tokenInput = form.querySelector('input[name=\"_token\"]');
        if (!tokenInput) {
            tokenInput = document.createElement('input');
            tokenInput.type = 'hidden';
            tokenInput.name = '_token';
            form.appendChild(tokenInput);
        }
        tokenInput.value = token;
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
        return "point_relais/show.html.twig";
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
        return array (  255 => 96,  242 => 95,  212 => 74,  200 => 64,  191 => 58,  187 => 57,  175 => 48,  166 => 41,  162 => 39,  159 => 38,  150 => 35,  145 => 34,  140 => 33,  138 => 32,  130 => 27,  123 => 23,  116 => 19,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Point Relais{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg border-0 fade-in\">
                <div class=\"card-header bg-primary text-white d-flex align-items-center\">
                    <i class=\"fas fa-store-alt me-2\"></i>
                    <h3 class=\"mb-0\">Détails du Point Relais</h3>
                </div>

                <div class=\"card-body p-4\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>ID</strong>
                            <span>{{ point_relais.id }}</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Nom</strong>
                            <span>{{ point_relais.nom }}</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Adresse</strong>
                            <span>{{ point_relais.adresse }}</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <strong>Horaire d'ouverture</strong>
                            <span>
                                {% if point_relais.horairesOuverture %}
                                    {% for day, time in point_relais.horairesOuverture %}
                                        <div><strong>{{ day|capitalize }}:</strong> 
                                            {{ time ? time|date('H:i \\\\l\\\\e d/m/Y') : 'Non défini' }}
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    Aucune horaire défini
                                {% endif %}
                            </span>
                        </li>
                    </ul>
                </div>

                <div class=\"card-footer bg-light d-flex flex-column flex-md-row justify-content-between align-items-center gap-3\">
                    <div class=\"d-flex gap-2\">
                        <a href=\"{{ path('point_relais_edit', {id: point_relais.id}) }}\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>

                        <button
                            type=\"button\"
                            class=\"btn btn-danger\"
                            data-bs-toggle=\"modal\"
                            data-bs-target=\"#deleteModal\"
                            data-action=\"{{ path('point_relais_delete', {id: point_relais.id}) }}\"
                            data-token=\"{{ csrf_token('delete' ~ point_relais.id) }}\"
                        >
                            <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                        </button>
                    </div>

                    <a href=\"{{ path('point_relais_index') }}\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{# ✅ Delete Confirmation Modal #}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" id=\"deleteForm\">
                <div class=\"modal-header bg-danger text-white\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer ce point relais ?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    const deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const action = button.getAttribute('data-action');
        const token = button.getAttribute('data-token');

        const form = deleteModal.querySelector('form');
        form.setAttribute('action', action);

        let tokenInput = form.querySelector('input[name=\"_token\"]');
        if (!tokenInput) {
            tokenInput = document.createElement('input');
            tokenInput.type = 'hidden';
            tokenInput.name = '_token';
            form.appendChild(tokenInput);
        }
        tokenInput.value = token;
    });
</script>
{% endblock %}
", "point_relais/show.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\point_relais\\show.html.twig");
    }
}
