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

/* maintenance/index.html.twig */
class __TwigTemplate_84afe845b1820b2ad275b17601e9313e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/index.html.twig", 1);
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

        yield "Liste des Maintenances";
        
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
        <!-- Header section -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"fw-bold text-primary mb-0\">Liste des Maintenances</h1>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvelle maintenance
            </a>
        </div>
        
        <!-- Status cards -->
        <div class=\"row mb-4\">
            <div class=\"col-md-4 mb-3 mb-md-0\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-warning p-3 me-3\">
                            <i class=\"fas fa-wrench text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">En cours</h6>
                            <h4 class=\"mb-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 25, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 25, $this->source); })()), "statut", [], "any", false, false, false, 25) == "EN_COURS"); })), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-3 mb-md-0\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-success p-3 me-3\">
                            <i class=\"fas fa-check text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">Terminées</h6>
                            <h4 class=\"mb-0\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 38, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 38, $this->source); })()), "statut", [], "any", false, false, false, 38) == "TERMINEE"); })), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-danger p-3 me-3\">
                            <i class=\"fas fa-times text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">Annulées</h6>
                            <h4 class=\"mb-0\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 51, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51) == "ANNULEE"); })), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Flash messages -->
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "flashes", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 60
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 61
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show mb-4\">
                    ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "        
        <!-- Search and filter -->
        <div class=\"card border-0 shadow-sm mb-4\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control border-start-0\" placeholder=\"Rechercher...\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <select id=\"statusFilter\" class=\"form-select\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"EN_COURS\">En cours</option>
                            <option value=\"TERMINEE\">Terminée</option>
                            <option value=\"ANNULEE\">Annulée</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Table -->
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\" id=\"maintenanceTable\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"border-0\">ID</th>
                                <th class=\"border-0\">Trottinette ID</th>
                                <th class=\"border-0\">Description</th>
                                <th class=\"border-0\">Date début</th>
                                <th class=\"border-0\">Date fin</th>
                                <th class=\"border-0\">Statut</th>
                                <th class=\"border-0 text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 109, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["maintenance"]) {
            // line 110
            yield "                            <tr data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "statut", [], "any", false, false, false, 110), "html", null, true);
            yield "\">
                                <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                                <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "trottinetteId", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                <td>";
            // line 113
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 113)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 113), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 113), "html", null, true)));
            yield "</td>
                                <td>";
            // line 114
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "dateDebut", [], "any", false, false, false, 114)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "dateDebut", [], "any", false, false, false, 114), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
                                <td>";
            // line 115
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "dateFin", [], "any", false, false, false, 115)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "dateFin", [], "any", false, false, false, 115), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
                                <td>
                                    <span class=\"badge rounded-pill ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "statut", [], "any", false, false, false, 117) == "EN_COURS")) {
                yield "bg-warning";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "statut", [], "any", false, false, false, 117) == "TERMINEE")) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                        ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "statut", [], "any", false, false, false, 118), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"text-end\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 129), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                    
                                    <!-- Delete Modal -->
                                    <div class=\"modal fade\" id=\"deleteModal";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 135), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body text-start\">
                                                    Êtes-vous sûr de vouloir supprimer cette maintenance ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <form method=\"post\" action=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 148))), "html", null, true);
            yield "\">
                                                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 157
        if (!$context['_iterated']) {
            // line 158
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5\">
                                    <div class=\"text-muted\">
                                        <i class=\"fas fa-inbox fa-3x mb-3\"></i>
                                        <p>Aucune maintenance trouvée</p>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['maintenance'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for search and filter functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const statusFilter = document.getElementById('statusFilter');
            const table = document.getElementById('maintenanceTable');
            const rows = table.getElementsByTagName('tr');

            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedStatus = statusFilter.value;
                
                for (let i = 1; i < rows.length; i++) { // Skip header row
                    const row = rows[i];
                    if (row.cells) { // Check if it's a data row
                        const status = row.getAttribute('data-status');
                        const rowText = row.textContent.toLowerCase();
                        
                        const statusMatch = !selectedStatus || status === selectedStatus;
                        const textMatch = !searchTerm || rowText.includes(searchTerm);
                        
                        if (statusMatch && textMatch) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    }
                }
            }
            
            searchInput.addEventListener('input', filterTable);
            statusFilter.addEventListener('change', filterTable);
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
        return "maintenance/index.html.twig";
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
        return array (  360 => 167,  346 => 158,  344 => 157,  330 => 148,  326 => 147,  311 => 135,  302 => 129,  296 => 126,  290 => 123,  282 => 118,  272 => 117,  267 => 115,  263 => 114,  259 => 113,  255 => 112,  251 => 111,  246 => 110,  241 => 109,  197 => 67,  191 => 66,  181 => 62,  176 => 61,  171 => 60,  167 => 59,  156 => 51,  140 => 38,  124 => 25,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Maintenances{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <!-- Header section -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"fw-bold text-primary mb-0\">Liste des Maintenances</h1>
            <a href=\"{{ path('app_maintenance_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvelle maintenance
            </a>
        </div>
        
        <!-- Status cards -->
        <div class=\"row mb-4\">
            <div class=\"col-md-4 mb-3 mb-md-0\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-warning p-3 me-3\">
                            <i class=\"fas fa-wrench text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">En cours</h6>
                            <h4 class=\"mb-0\">{{ maintenances|filter(m => m.statut == 'EN_COURS')|length }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-3 mb-md-0\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-success p-3 me-3\">
                            <i class=\"fas fa-check text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">Terminées</h6>
                            <h4 class=\"mb-0\">{{ maintenances|filter(m => m.statut == 'TERMINEE')|length }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-danger p-3 me-3\">
                            <i class=\"fas fa-times text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">Annulées</h6>
                            <h4 class=\"mb-0\">{{ maintenances|filter(m => m.statut == 'ANNULEE')|length }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Flash messages -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show mb-4\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}
        
        <!-- Search and filter -->
        <div class=\"card border-0 shadow-sm mb-4\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control border-start-0\" placeholder=\"Rechercher...\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <select id=\"statusFilter\" class=\"form-select\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"EN_COURS\">En cours</option>
                            <option value=\"TERMINEE\">Terminée</option>
                            <option value=\"ANNULEE\">Annulée</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Table -->
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\" id=\"maintenanceTable\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"border-0\">ID</th>
                                <th class=\"border-0\">Trottinette ID</th>
                                <th class=\"border-0\">Description</th>
                                <th class=\"border-0\">Date début</th>
                                <th class=\"border-0\">Date fin</th>
                                <th class=\"border-0\">Statut</th>
                                <th class=\"border-0 text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for maintenance in maintenances %}
                            <tr data-status=\"{{ maintenance.statut }}\">
                                <td>{{ maintenance.id }}</td>
                                <td>{{ maintenance.trottinetteId }}</td>
                                <td>{{ maintenance.description|length > 50 ? maintenance.description|slice(0, 50) ~ '...' : maintenance.description }}</td>
                                <td>{{ maintenance.dateDebut ? maintenance.dateDebut|date('d/m/Y H:i') : '' }}</td>
                                <td>{{ maintenance.dateFin ? maintenance.dateFin|date('d/m/Y H:i') : '' }}</td>
                                <td>
                                    <span class=\"badge rounded-pill {% if maintenance.statut == 'EN_COURS' %}bg-warning{% elseif maintenance.statut == 'TERMINEE' %}bg-success{% else %}bg-danger{% endif %}\">
                                        {{ maintenance.statut }}
                                    </span>
                                </td>
                                <td class=\"text-end\">
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('app_maintenance_show', {'id': maintenance.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_maintenance_edit', {'id': maintenance.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ maintenance.id }}\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                    
                                    <!-- Delete Modal -->
                                    <div class=\"modal fade\" id=\"deleteModal{{ maintenance.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body text-start\">
                                                    Êtes-vous sûr de vouloir supprimer cette maintenance ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <form method=\"post\" action=\"{{ path('app_maintenance_delete', {'id': maintenance.id}) }}\" class=\"d-inline\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ maintenance.id) }}\">
                                                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5\">
                                    <div class=\"text-muted\">
                                        <i class=\"fas fa-inbox fa-3x mb-3\"></i>
                                        <p>Aucune maintenance trouvée</p>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for search and filter functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const statusFilter = document.getElementById('statusFilter');
            const table = document.getElementById('maintenanceTable');
            const rows = table.getElementsByTagName('tr');

            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedStatus = statusFilter.value;
                
                for (let i = 1; i < rows.length; i++) { // Skip header row
                    const row = rows[i];
                    if (row.cells) { // Check if it's a data row
                        const status = row.getAttribute('data-status');
                        const rowText = row.textContent.toLowerCase();
                        
                        const statusMatch = !selectedStatus || status === selectedStatus;
                        const textMatch = !searchTerm || rowText.includes(searchTerm);
                        
                        if (statusMatch && textMatch) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    }
                }
            }
            
            searchInput.addEventListener('input', filterTable);
            statusFilter.addEventListener('change', filterTable);
        });
    </script>
{% endblock %}", "maintenance/index.html.twig", "C:\\Trottinettenada\\templates\\maintenance\\index.html.twig");
    }
}
