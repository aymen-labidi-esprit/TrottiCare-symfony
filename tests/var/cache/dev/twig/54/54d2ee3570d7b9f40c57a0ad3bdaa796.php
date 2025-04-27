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

/* point_relais/index.html.twig */
class __TwigTemplate_69d46c8fee5a48d85559a61ea3bfc645 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_relais/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "point_relais/index.html.twig", 1);
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

        yield "Liste des Points Relais";
        
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
        yield "<div class=\"container mt-4\">
    <h1>Points Relais</h1>

    ";
        // line 10
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_new");
        yield "\" class=\"btn btn-primary mb-3\" data-turbo=\"false\">
        Nouveau point relais
    </a>

    ";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "        <div class=\"alert alert-info\">Aucun point relais trouvé.</div>
    ";
        } else {
            // line 26
            yield "        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Horaire d'ouverture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["relais"]) {
                // line 38
                yield "                    <tr>
                        <td>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                        <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "nom", [], "any", false, false, false, 40), "html", null, true);
                yield "</td>
                        <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "addresse", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
                        <td>";
                // line 42
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "horaireOuverture", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "horaireOuverture", [], "any", false, false, false, 42), "H:i \\l\\e d/m/Y"), "html", null, true)) : (""));
                yield "</td>
                        <td>
                            <a href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-secondary\">Modifier</a>

                            <button 
                                type=\"button\"
                                class=\"btn btn-sm btn-danger\"
                                data-bs-toggle=\"modal\"
                                data-bs-target=\"#deleteModal\"
                                data-action=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\"
                                data-token=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 53))), "html", null, true);
                yield "\"
                            >
                                Supprimer
                            </button>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['relais'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "            </tbody>
        </table>
    ";
        }
        // line 63
        yield "</div>

";
        // line 66
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

    // line 88
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

        // line 89
        yield "    ";
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
        return "point_relais/index.html.twig";
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
        return array (  274 => 89,  261 => 88,  230 => 66,  226 => 63,  221 => 60,  208 => 53,  204 => 52,  194 => 45,  190 => 44,  185 => 42,  181 => 41,  177 => 40,  173 => 39,  170 => 38,  166 => 37,  153 => 26,  149 => 24,  147 => 23,  140 => 19,  137 => 18,  131 => 17,  121 => 13,  116 => 12,  111 => 11,  106 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Points Relais{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1>Points Relais</h1>

    {# ✅ Flash messages #}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <a href=\"{{ path('point_relais_new') }}\" class=\"btn btn-primary mb-3\" data-turbo=\"false\">
        Nouveau point relais
    </a>

    {% if point_relais is empty %}
        <div class=\"alert alert-info\">Aucun point relais trouvé.</div>
    {% else %}
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Horaire d'ouverture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for relais in point_relais %}
                    <tr>
                        <td>{{ relais.id }}</td>
                        <td>{{ relais.nom }}</td>
                        <td>{{ relais.addresse }}</td>
                        <td>{{ relais.horaireOuverture ? relais.horaireOuverture|date('H:i \\\\l\\\\e d/m/Y') : '' }}</td>
                        <td>
                            <a href=\"{{ path('point_relais_show', {id: relais.id}) }}\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"{{ path('point_relais_edit', {id: relais.id}) }}\" class=\"btn btn-sm btn-secondary\">Modifier</a>

                            <button 
                                type=\"button\"
                                class=\"btn btn-sm btn-danger\"
                                data-bs-toggle=\"modal\"
                                data-bs-target=\"#deleteModal\"
                                data-action=\"{{ path('point_relais_delete', {id: relais.id}) }}\"
                                data-token=\"{{ csrf_token('delete' ~ relais.id) }}\"
                            >
                                Supprimer
                            </button>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
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
", "point_relais/index.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\point_relais\\index.html.twig");
    }
}
