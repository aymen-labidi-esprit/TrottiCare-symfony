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

/* reservation/index.html.twig */
class __TwigTemplate_66bc1106e1b9139fe14a677f7d3f957e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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

        yield "Liste des Réservations";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .status-badge {
            padding: 0.25em 0.6em;
            border-radius: 9999px;
            font-size: 0.7rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            white-space: nowrap;
            line-height: 1;
        }
        .status-confirmed { background-color: #dcfce7; color: #166534; }
        .status-pending { background-color: #fef9c3; color: #854d0e; }
        .status-cancelled { background-color: #fee2e2; color: #991b1b; }
        .form-input, .form-select {
            appearance: none; width: 100%; padding: 0.5rem 0.75rem;
            font-size: 0.875rem; line-height: 1.5; color: #1f2937;
            background-color: #fff; border: 1px solid #d1d5db;
            border-radius: 0.375rem; transition: border-color .15s ease-in-out;
        }
        .form-input:focus, .form-select:focus {
            outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6;
        }
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; }
        .button-primary { background-color: #3b82f6; color: white; }
        .button-primary:hover { background-color: #2563eb; }
        .button-outline-secondary { background-color: transparent; color: #6b7280; border: 1px solid #d1d5db; }
        .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { background-color: transparent; color: #dc2626; border: 1px solid #ef4444; }
        .button-outline-danger:hover { background-color: #fee2e2; }
        .button-sm { padding: 0.25rem 0.5rem; font-size: 0.75rem; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-7xl\">

        ";
        // line 46
        yield "        <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                <i class=\"fas fa-calendar-alt mr-2 text-blue-600\"></i>Liste des Réservations
            </h1>
            <div class=\"flex gap-2\">
                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
        yield "\" class=\"button button-primary\">
                    <i class=\"fas fa-plus mr-1.5\"></i> Nouvelle réservation
                </a>
                <button id=\"openStatsBtn\" class=\"button button-outline-secondary\">
                    <i class=\"fas fa-chart-pie mr-1.5\"></i> Statistiques
                </button>
            </div>
        </div>

        ";
        // line 61
        yield "        ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "reservation/index.html.twig", 61);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 62
        yield "
        ";
        // line 64
        yield "        <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"bg-white rounded-lg shadow p-4 mb-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 items-end\">
                <div>";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 66, $this->source); })()), "dateDebut", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-input"]]);
        yield "</div>
                <div>";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 67, $this->source); })()), "dateFin", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-input"]]);
        yield "</div>
                <div>";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 68, $this->source); })()), "status", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-select"]]);
        yield "</div>
                <div>
                    <button type=\"submit\" class=\"button button-primary w-full\">
                        <i class=\"fas fa-filter mr-1.5\"></i> Filtrer
                    </button>
                </div>
            </div>
        </form>

        ";
        // line 78
        yield "        <div class=\"bg-white rounded-lg shadow overflow-hidden\">
            <div class=\"overflow-x-auto\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Début</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Fin</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Montant</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Statut</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Paiement</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 94
            yield "                        <tr>
                            <td class=\"px-4 py-3\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                            <td class=\"px-4 py-3\">";
            // line 96
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 96)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                            <td class=\"px-4 py-3\">";
            // line 97
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 97)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 97), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                            <td class=\"px-4 py-3\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montant", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                            <td class=\"px-4 py-3\">
                                <span class=\"status-badge status-";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100)), "html", null, true);
            yield "\">
                                    ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 101), "label", [], "method", false, false, false, 101), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td class=\"px-4 py-3\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "paiement", [], "any", false, false, false, 104), "label", [], "method", false, false, false, 104), "html", null, true);
            yield "</td>
                            <td class=\"px-4 py-3 text-right space-x-1\">
                                <a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"button button-sm button-outline-secondary\" title=\"Voir\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\" class=\"button button-sm button-outline-secondary\" title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <button type=\"button\" 
                                    class=\"button button-sm button-outline-danger openDeleteModalBtn\"
                                    data-action=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\"
                                    data-token=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 115))), "html", null, true);
            yield "\"
                                    title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 121
        if (!$context['_iterated']) {
            // line 122
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center py-12 text-gray-500\">
                                Aucune réservation trouvée.
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "                    </tbody>
                </table>
            </div>
        </div>

        ";
        // line 134
        yield "        <div class=\"mt-6\">
            ";
        // line 135
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 135, $this->source); })()));
        yield "
        </div>

        ";
        // line 139
        yield "        <div id=\"statsModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-md\">
                <canvas id=\"statsChart\" width=\"400\" height=\"400\"></canvas>
                <button id=\"closeStatsBtn\" class=\"button button-outline-secondary mt-4 w-full\">Fermer</button>
            </div>
        </div>

        ";
        // line 147
        yield "        <div id=\"deleteModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-sm\">
                <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Confirmer la suppression</h2>
                <p class=\"text-sm text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer cette réservation ?</p>

                <form method=\"post\" id=\"deleteForm\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <div class=\"flex justify-end gap-2\">
                        <button type=\"button\" id=\"cancelDeleteBtn\" class=\"button button-outline-secondary\">Annuler</button>
                        <button type=\"submit\" class=\"button button-outline-danger\">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 166
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

        // line 167
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
// Chart Modal Logic
const openStatsBtn = document.getElementById('openStatsBtn');
const closeStatsBtn = document.getElementById('closeStatsBtn');
const statsModal = document.getElementById('statsModal');
let statsChart = null;

openStatsBtn.addEventListener('click', async () => {
    statsModal.classList.remove('hidden');
    const ctx = document.getElementById('statsChart').getContext('2d');

    if (statsChart) statsChart.destroy();

    try {
        const response = await fetch(\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_stats");
        yield "\");
        const data = await response.json();

        statsChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Object.keys(data),
                datasets: [{
                    data: Object.values(data),
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(255, 206, 86, 0.7)'
                    ]
                }]
            }
        });
    } catch (e) {
        console.error(e);
    }
});

closeStatsBtn.addEventListener('click', () => {
    statsModal.classList.add('hidden');
});

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
        return "reservation/index.html.twig";
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
        return array (  410 => 184,  390 => 167,  377 => 166,  349 => 147,  340 => 139,  334 => 135,  331 => 134,  324 => 128,  313 => 122,  311 => 121,  300 => 115,  296 => 114,  288 => 109,  282 => 106,  277 => 104,  271 => 101,  267 => 100,  262 => 98,  258 => 97,  254 => 96,  250 => 95,  247 => 94,  242 => 93,  225 => 78,  213 => 68,  209 => 67,  205 => 66,  199 => 64,  196 => 62,  185 => 61,  173 => 51,  166 => 46,  161 => 42,  148 => 41,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Réservations{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .status-badge {
            padding: 0.25em 0.6em;
            border-radius: 9999px;
            font-size: 0.7rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            white-space: nowrap;
            line-height: 1;
        }
        .status-confirmed { background-color: #dcfce7; color: #166534; }
        .status-pending { background-color: #fef9c3; color: #854d0e; }
        .status-cancelled { background-color: #fee2e2; color: #991b1b; }
        .form-input, .form-select {
            appearance: none; width: 100%; padding: 0.5rem 0.75rem;
            font-size: 0.875rem; line-height: 1.5; color: #1f2937;
            background-color: #fff; border: 1px solid #d1d5db;
            border-radius: 0.375rem; transition: border-color .15s ease-in-out;
        }
        .form-input:focus, .form-select:focus {
            outline: none; border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6;
        }
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; }
        .button-primary { background-color: #3b82f6; color: white; }
        .button-primary:hover { background-color: #2563eb; }
        .button-outline-secondary { background-color: transparent; color: #6b7280; border: 1px solid #d1d5db; }
        .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-danger { background-color: transparent; color: #dc2626; border: 1px solid #ef4444; }
        .button-outline-danger:hover { background-color: #fee2e2; }
        .button-sm { padding: 0.25rem 0.5rem; font-size: 0.75rem; }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-7xl\">

        {# Header #}
        <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                <i class=\"fas fa-calendar-alt mr-2 text-blue-600\"></i>Liste des Réservations
            </h1>
            <div class=\"flex gap-2\">
                <a href=\"{{ path('reservation_new') }}\" class=\"button button-primary\">
                    <i class=\"fas fa-plus mr-1.5\"></i> Nouvelle réservation
                </a>
                <button id=\"openStatsBtn\" class=\"button button-outline-secondary\">
                    <i class=\"fas fa-chart-pie mr-1.5\"></i> Statistiques
                </button>
            </div>
        </div>

        {# Flash Messages #}
        {% include 'partials/_flash_messages.html.twig' ignore missing %}

        {# Search Form #}
        <form method=\"get\" action=\"{{ path('reservation_index') }}\" class=\"bg-white rounded-lg shadow p-4 mb-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 items-end\">
                <div>{{ form_row(searchForm.dateDebut, { attr: { class: 'form-input' } }) }}</div>
                <div>{{ form_row(searchForm.dateFin, { attr: { class: 'form-input' } }) }}</div>
                <div>{{ form_row(searchForm.status, { attr: { class: 'form-select' } }) }}</div>
                <div>
                    <button type=\"submit\" class=\"button button-primary w-full\">
                        <i class=\"fas fa-filter mr-1.5\"></i> Filtrer
                    </button>
                </div>
            </div>
        </form>

        {# Table #}
        <div class=\"bg-white rounded-lg shadow overflow-hidden\">
            <div class=\"overflow-x-auto\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">ID</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Début</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Fin</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Montant</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Statut</th>
                            <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase\">Paiement</th>
                            <th class=\"px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        {% for reservation in pagination %}
                        <tr>
                            <td class=\"px-4 py-3\">{{ reservation.id }}</td>
                            <td class=\"px-4 py-3\">{{ reservation.dateDebut ? reservation.dateDebut|date('Y-m-d') : '' }}</td>
                            <td class=\"px-4 py-3\">{{ reservation.dateFin ? reservation.dateFin|date('Y-m-d') : '' }}</td>
                            <td class=\"px-4 py-3\">{{ reservation.montant }}</td>
                            <td class=\"px-4 py-3\">
                                <span class=\"status-badge status-{{ reservation.status.value|lower }}\">
                                    {{ reservation.status.label() }}
                                </span>
                            </td>
                            <td class=\"px-4 py-3\">{{ reservation.paiement.label() }}</td>
                            <td class=\"px-4 py-3 text-right space-x-1\">
                                <a href=\"{{ path('reservation_show', {id: reservation.id}) }}\" class=\"button button-sm button-outline-secondary\" title=\"Voir\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"{{ path('reservation_edit', {id: reservation.id}) }}\" class=\"button button-sm button-outline-secondary\" title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <button type=\"button\" 
                                    class=\"button button-sm button-outline-danger openDeleteModalBtn\"
                                    data-action=\"{{ path('reservation_delete', {id: reservation.id}) }}\"
                                    data-token=\"{{ csrf_token('delete' ~ reservation.id) }}\"
                                    title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"7\" class=\"text-center py-12 text-gray-500\">
                                Aucune réservation trouvée.
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        {# Pagination #}
        <div class=\"mt-6\">
            {{ knp_pagination_render(pagination) }}
        </div>

        {# Chart Modal #}
        <div id=\"statsModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-md\">
                <canvas id=\"statsChart\" width=\"400\" height=\"400\"></canvas>
                <button id=\"closeStatsBtn\" class=\"button button-outline-secondary mt-4 w-full\">Fermer</button>
            </div>
        </div>

        {# Delete Modal #}
        <div id=\"deleteModal\" class=\"fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50\">
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full max-w-sm\">
                <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Confirmer la suppression</h2>
                <p class=\"text-sm text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer cette réservation ?</p>

                <form method=\"post\" id=\"deleteForm\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <div class=\"flex justify-end gap-2\">
                        <button type=\"button\" id=\"cancelDeleteBtn\" class=\"button button-outline-secondary\">Annuler</button>
                        <button type=\"submit\" class=\"button button-outline-danger\">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
// Chart Modal Logic
const openStatsBtn = document.getElementById('openStatsBtn');
const closeStatsBtn = document.getElementById('closeStatsBtn');
const statsModal = document.getElementById('statsModal');
let statsChart = null;

openStatsBtn.addEventListener('click', async () => {
    statsModal.classList.remove('hidden');
    const ctx = document.getElementById('statsChart').getContext('2d');

    if (statsChart) statsChart.destroy();

    try {
        const response = await fetch(\"{{ path('reservation_stats') }}\");
        const data = await response.json();

        statsChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Object.keys(data),
                datasets: [{
                    data: Object.values(data),
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(255, 206, 86, 0.7)'
                    ]
                }]
            }
        });
    } catch (e) {
        console.error(e);
    }
});

closeStatsBtn.addEventListener('click', () => {
    statsModal.classList.add('hidden');
});

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
</script>
{% endblock %}
", "reservation/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reservation/index.html.twig");
    }
}
