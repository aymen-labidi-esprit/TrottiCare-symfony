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

/* admin/utilisateur/index.html.twig */
class __TwigTemplate_6216d46f367bdec1b157eac436acbc10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/utilisateur/index.html.twig", 1);
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

        yield "Gestion des Utilisateurs";
        
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
        yield "    <h1>Gestion des Utilisateurs</h1>

    ";
        // line 9
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3 align-items-center mb-4 filter-form"]]);
        yield "
    <div class=\"col-auto\">
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 11, $this->source); })()), "search", [], "any", false, false, false, 11), 'widget', ["attr" => ["placeholder" => "Rechercher..."]]);
        yield "
    </div>
    <div class=\"col-auto\">
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 14, $this->source); })()), "role", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-select form-select-sm"]]);
        yield "
    </div>
    <div class=\"col-auto\">
        <button type=\"submit\" class=\"btn btn-sm btn-primary\">Filtrer</button>
        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
        yield "\" class=\"btn btn-sm btn-secondary ms-2\">Réinitialiser</a>
    </div>
    ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filterForm"]) || array_key_exists("filterForm", $context) ? $context["filterForm"] : (function () { throw new RuntimeError('Variable "filterForm" does not exist.', 20, $this->source); })()), 'form_end');
        yield "


    <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_new");
        yield "\" class=\"btn btn-primary mb-3\">Créer un Utilisateur</a>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Rôle</th>
            <th>Vérifié</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            yield " ";
            // line 40
            yield "            <tr>
                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "isActive", [], "any", false, false, false, 46)) {
                // line 47
                yield "                        <span class=\"badge bg-success\">Actif</span>
                    ";
            } else {
                // line 49
                yield "                        <span class=\"badge bg-danger\">Désactivé</span>
                    ";
            }
            // line 51
            yield "                </td>

                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", false, false, false, 53), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                <td><span class=\"badge bg-secondary\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "roleInterne", [], "any", false, false, false, 54)), "html", null, true);
            yield "</span></td>
                <td>";
            // line 55
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "isVerified", [], "any", false, false, false, 55)) ? ("<span class=\"badge bg-success\">Oui</span>") : ("<span class=\"badge bg-warning\">Non</span>"));
            yield "</td>
                <td>
                    <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                    ";
            // line 60
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/utilisateur/_delete_form.html.twig", ["utilisateur" => $context["utilisateur"]]);
            yield "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "            <tr>
                <td colspan=\"8\">Aucun utilisateur trouvé.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "        </tbody>
    </table>

    ";
        // line 72
        yield "    ";
        // line 73
        yield "    ";
        // line 78
        yield "
    ";
        // line 80
        yield "    ";
        if (array_key_exists("pagination", $context)) {
            // line 81
            yield "        <p>Total : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 81, $this->source); })()), "count", [], "any", false, false, false, 81), "html", null, true);
            yield " utilisateurs.</p>
        ";
            // line 83
            yield "    ";
        }
        // line 84
        yield "
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
        return "admin/utilisateur/index.html.twig";
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
        return array (  278 => 84,  275 => 83,  270 => 81,  267 => 80,  264 => 78,  262 => 73,  260 => 72,  255 => 68,  246 => 64,  244 => 63,  227 => 60,  223 => 58,  219 => 57,  214 => 55,  210 => 54,  206 => 53,  202 => 51,  198 => 49,  194 => 47,  192 => 46,  187 => 44,  183 => 43,  179 => 42,  175 => 41,  172 => 40,  153 => 39,  134 => 23,  128 => 20,  123 => 18,  116 => 14,  110 => 11,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Utilisateurs{% endblock %}

{% block body %}
    <h1>Gestion des Utilisateurs</h1>

    {# Filter Form #}
    {{ form_start(filterForm, {'attr': {'class': 'row g-3 align-items-center mb-4 filter-form'}}) }}
    <div class=\"col-auto\">
        {{ form_widget(filterForm.search, {'attr': {'placeholder': 'Rechercher...'}}) }}
    </div>
    <div class=\"col-auto\">
        {{ form_widget(filterForm.role, {'attr': {'class': 'form-select form-select-sm'}}) }}
    </div>
    <div class=\"col-auto\">
        <button type=\"submit\" class=\"btn btn-sm btn-primary\">Filtrer</button>
        <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"btn btn-sm btn-secondary ms-2\">Réinitialiser</a>
    </div>
    {{ form_end(filterForm) }}


    <a href=\"{{ path('admin_utilisateur_new') }}\" class=\"btn btn-primary mb-3\">Créer un Utilisateur</a>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Rôle</th>
            <th>Vérifié</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for utilisateur in pagination %} {# Iterate over Paginator object #}
            <tr>
                <td>{{ utilisateur.id }}</td>
                <td>{{ utilisateur.nom }}</td>
                <td>{{ utilisateur.prenom }}</td>
                <td>{{ utilisateur.email }}</td>
                <td>
                    {% if utilisateur.isActive %}
                        <span class=\"badge bg-success\">Actif</span>
                    {% else %}
                        <span class=\"badge bg-danger\">Désactivé</span>
                    {% endif %}
                </td>

                <td>{{ utilisateur.telephone | default('N/A') }}</td>
                <td><span class=\"badge bg-secondary\">{{ utilisateur.roleInterne | capitalize }}</span></td>
                <td>{{ utilisateur.isVerified ? '<span class=\"badge bg-success\">Oui</span>' : '<span class=\"badge bg-warning\">Non</span>' | raw }}</td>
                <td>
                    <a href=\"{{ path('admin_utilisateur_show', {'id': utilisateur.id}) }}\" class=\"btn btn-sm btn-info\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"{{ path('admin_utilisateur_edit', {'id': utilisateur.id}) }}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                    {# Include delete form #}
                    {{ include('admin/utilisateur/_delete_form.html.twig', {'utilisateur': utilisateur}) }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">Aucun utilisateur trouvé.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {# Pagination Controls (Example using KnpPaginatorBundle syntax) #}
    {# Adjust if using native Doctrine Paginator or another bundle #}
    {# {% if pagination is defined and pagination.getTotalItemCount > 0 %}
       <div class=\"navigation d-flex justify-content-center\">
           {{ knp_pagination_render(pagination) }}
       </div>
    {% endif %} #}

    {# Manual Pagination Info (if not using a bundle) #}
    {% if pagination is defined %}
        <p>Total : {{ pagination.count }} utilisateurs.</p>
        {# Add basic next/previous links if needed based on your Paginator setup #}
    {% endif %}

{% endblock %}", "admin/utilisateur/index.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\admin\\utilisateur\\index.html.twig");
    }
}
