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
class __TwigTemplate_19f41485a8720f8fd0ad7ad0f1f4d6b3 extends Template
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

        yield "Gestion des Points Relais";
        
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
    <div class=\"container mx-auto\">

        ";
        // line 10
        yield "        <div class=\"flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3\">
            <h1 class=\"text-2xl md:text-3xl font-bold text-gray-800\">
                Gestion des Points Relais
            </h1>
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_new");
        yield "\" class=\"button button-success inline-flex items-center whitespace-nowrap\">
                <i class=\"fas fa-plus mr-2\"></i> Nouveau Point Relais
            </a>
        </div>

        ";
        // line 20
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 21
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
        ";
        // line 30
        yield "        <div class=\"bg-white shadow-md overflow-x-auto sm:rounded-lg\">
            ";
        // line 31
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 31, $this->source); })()))) {
            // line 32
            yield "                <div class=\"px-6 py-12 text-center text-sm text-gray-500\">
                    Aucun point relais trouvé.
                </div>
            ";
        } else {
            // line 36
            yield "                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Adresse</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Horaire d'ouverture</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["point_relais"]) || array_key_exists("point_relais", $context) ? $context["point_relais"] : (function () { throw new RuntimeError('Variable "point_relais" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["relais"]) {
                // line 48
                yield "                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-900\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 49), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-900\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "nom", [], "any", false, false, false, 50), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-900\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "addresse", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-900\">
                                    ";
                // line 53
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "horaireOuverture", [], "any", false, false, false, 53)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "horaireOuverture", [], "any", false, false, false, 53), "H:i \\l\\e d/m/Y"), "html", null, true)) : ("-"));
                yield "
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"button button-small button-info\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" class=\"button button-small button-warning\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <button
                                        type=\"button\"
                                        class=\"button button-small button-danger openDeleteModalBtn\"
                                        data-action=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\"
                                        data-token=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["relais"], "id", [], "any", false, false, false, 66))), "html", null, true);
                yield "\"
                                        title=\"Supprimer\"
                                    >
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['relais'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                    </tbody>
                </table>
            ";
        }
        // line 77
        yield "        </div>

    </div>
</div>

";
        // line 83
        yield "<div id=\"deleteModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
    <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-sm\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Confirmer la suppression</h2>
        <p class=\"text-sm text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer ce point relais ?</p>

        <form method=\"post\" id=\"deleteForm\">
            <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
            <div class=\"flex justify-end gap-2\">
                <button type=\"button\" id=\"cancelDeleteBtn\" class=\"button button-secondary\">Annuler</button>
                <button type=\"submit\" class=\"button button-danger\">Supprimer</button>
            </div>
        </form>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 101
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Delete Modal Logic
            const deleteModal = document.getElementById('deleteModal');
            const deleteForm = document.getElementById('deleteForm');
            const deleteTokenInput = document.getElementById('deleteToken');
            const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

            document.querySelectorAll('.openDeleteModalBtn').forEach(button => {
                button.addEventListener('click', () => {
                    const action = button.getAttribute('data-action');
                    const token = button.getAttribute('data-token');

                    deleteForm.setAttribute('action', action);
                    deleteTokenInput.value = token;

                    deleteModal.classList.remove('hidden');
                });
            });

            cancelDeleteBtn.addEventListener('click', () => {
                deleteModal.classList.add('hidden');
            });
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
        return array (  288 => 101,  275 => 100,  249 => 83,  242 => 77,  237 => 74,  223 => 66,  219 => 65,  210 => 59,  204 => 56,  198 => 53,  193 => 51,  189 => 50,  185 => 49,  182 => 48,  178 => 47,  165 => 36,  159 => 32,  157 => 31,  154 => 30,  151 => 28,  145 => 27,  135 => 23,  130 => 22,  125 => 21,  120 => 20,  112 => 14,  106 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Points Relais{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
    <div class=\"container mx-auto\">

        {# Page Header & New Button #}
        <div class=\"flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3\">
            <h1 class=\"text-2xl md:text-3xl font-bold text-gray-800\">
                Gestion des Points Relais
            </h1>
            <a href=\"{{ path('point_relais_new') }}\" class=\"button button-success inline-flex items-center whitespace-nowrap\">
                <i class=\"fas fa-plus mr-2\"></i> Nouveau Point Relais
            </a>
        </div>

        {# Flash Messages #}
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        {# Table #}
        <div class=\"bg-white shadow-md overflow-x-auto sm:rounded-lg\">
            {% if point_relais is empty %}
                <div class=\"px-6 py-12 text-center text-sm text-gray-500\">
                    Aucun point relais trouvé.
                </div>
            {% else %}
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Adresse</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Horaire d'ouverture</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        {% for relais in point_relais %}
                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-900\">{{ relais.id }}</td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-900\">{{ relais.nom }}</td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-900\">{{ relais.addresse }}</td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-900\">
                                    {{ relais.horaireOuverture ? relais.horaireOuverture|date('H:i \\\\l\\\\e d/m/Y') : '-' }}
                                </td>
                                <td class=\"px-4 py-4 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                    <a href=\"{{ path('point_relais_show', {id: relais.id}) }}\" class=\"button button-small button-info\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('point_relais_edit', {id: relais.id}) }}\" class=\"button button-small button-warning\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <button
                                        type=\"button\"
                                        class=\"button button-small button-danger openDeleteModalBtn\"
                                        data-action=\"{{ path('point_relais_delete', {id: relais.id}) }}\"
                                        data-token=\"{{ csrf_token('delete' ~ relais.id) }}\"
                                        title=\"Supprimer\"
                                    >
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>

    </div>
</div>

{# Delete Confirmation Modal #}
<div id=\"deleteModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
    <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-sm\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Confirmer la suppression</h2>
        <p class=\"text-sm text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer ce point relais ?</p>

        <form method=\"post\" id=\"deleteForm\">
            <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
            <div class=\"flex justify-end gap-2\">
                <button type=\"button\" id=\"cancelDeleteBtn\" class=\"button button-secondary\">Annuler</button>
                <button type=\"submit\" class=\"button button-danger\">Supprimer</button>
            </div>
        </form>
    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Delete Modal Logic
            const deleteModal = document.getElementById('deleteModal');
            const deleteForm = document.getElementById('deleteForm');
            const deleteTokenInput = document.getElementById('deleteToken');
            const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

            document.querySelectorAll('.openDeleteModalBtn').forEach(button => {
                button.addEventListener('click', () => {
                    const action = button.getAttribute('data-action');
                    const token = button.getAttribute('data-token');

                    deleteForm.setAttribute('action', action);
                    deleteTokenInput.value = token;

                    deleteModal.classList.remove('hidden');
                });
            });

            cancelDeleteBtn.addEventListener('click', () => {
                deleteModal.classList.add('hidden');
            });
        });
    </script>
{% endblock %}
", "point_relais/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/point_relais/index.html.twig");
    }
}
