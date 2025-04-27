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

/* trottinette/index.html.twig */
class __TwigTemplate_3df07c5d864f22b56e1c59d2a2a6c249 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trottinette/index.html.twig", 1);
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

        yield "Liste des Trottinettes";
        
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
            <h1 class=\"fw-bold text-primary mb-0\">Liste des Trottinettes</h1>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvelle trottinette
            </a>
        </div>
        
        <!-- Status cards -->
        <div class=\"row mb-4\">
            <div class=\"col-md-4 mb-3 mb-md-0\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-success p-3 me-3\">
                            <i class=\"fas fa-check text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">Disponibles</h6>
                            <h4 class=\"mb-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["trottinettes"]) || array_key_exists("trottinettes", $context) ? $context["trottinettes"] : (function () { throw new RuntimeError('Variable "trottinettes" does not exist.', 25, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25) == "DISPONIBLE"); })), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-3 mb-md-0\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-warning p-3 me-3\">
                            <i class=\"fas fa-bicycle text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">En location</h6>
                            <h4 class=\"mb-0\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["trottinettes"]) || array_key_exists("trottinettes", $context) ? $context["trottinettes"] : (function () { throw new RuntimeError('Variable "trottinettes" does not exist.', 38, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 38, $this->source); })()), "etat", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38) == "EN_LOCATION"); })), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-danger p-3 me-3\">
                            <i class=\"fas fa-tools text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">En maintenance</h6>
                            <h4 class=\"mb-0\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["trottinettes"]) || array_key_exists("trottinettes", $context) ? $context["trottinettes"] : (function () { throw new RuntimeError('Variable "trottinettes" does not exist.', 51, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 51, $this->source); })()), "etat", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51) == "EN_MAINTENANCE"); })), "html", null, true);
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
                            <option value=\"\">Tous les états</option>
                            <option value=\"DISPONIBLE\">Disponible</option>
                            <option value=\"EN_LOCATION\">En location</option>
                            <option value=\"EN_MAINTENANCE\">En maintenance</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Table -->
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\" id=\"trottinetteTable\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"border-0\">ID</th>
                                <th class=\"border-0\">Modèle</th>
                                <th class=\"border-0\">N° Série</th>
                                <th class=\"border-0\">Utilisateur</th>
                                <th class=\"border-0\">Point Relais</th>
                                <th class=\"border-0\">État</th>
                                <th class=\"border-0\">Batterie</th>
                                <th class=\"border-0\">Localisation</th>
                                <th class=\"border-0\">Autonomie</th>
                                <th class=\"border-0 text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trottinettes"]) || array_key_exists("trottinettes", $context) ? $context["trottinettes"] : (function () { throw new RuntimeError('Variable "trottinettes" does not exist.', 112, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["trottinette"]) {
            // line 113
            yield "                            <tr data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "etat", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113), "html", null, true);
            yield "\">
                                <td>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                                <td>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "modele", [], "any", false, false, false, 115), "html", null, true);
            yield "</td>
                                <td>";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "numeroSerie", [], "any", false, false, false, 116), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 118
            if (CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "utilisateur", [], "any", false, false, false, 118)) {
                // line 119
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "utilisateur", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "utilisateur", [], "any", false, false, false, 119), "prenom", [], "any", false, false, false, 119), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "utilisateur", [], "any", false, false, false, 119), "nom", [], "any", false, false, false, 119), "html", null, true);
                yield "
                                    ";
            } else {
                // line 121
                yield "                                        Non défini
                                    ";
            }
            // line 123
            yield "                                </td>
                                <td>";
            // line 124
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "pointRelaisId", [], "any", false, false, false, 124)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "pointRelaisId", [], "any", false, false, false, 124), "html", null, true)) : ("Non défini"));
            yield "</td>
                                <td>
                                    <span class=\"badge rounded-pill ";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "etat", [], "any", false, false, false, 126), "value", [], "any", false, false, false, 126) == "DISPONIBLE")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "etat", [], "any", false, false, false, 126), "value", [], "any", false, false, false, 126) == "EN_LOCATION")) {
                yield "bg-warning";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                        ";
            // line 127
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "etat", [], "any", false, false, false, 127), "value", [], "any", false, false, false, 127) == "DISPONIBLE")) {
                // line 128
                yield "                                            Disponible
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 129
$context["trottinette"], "etat", [], "any", false, false, false, 129), "value", [], "any", false, false, false, 129) == "EN_LOCATION")) {
                // line 130
                yield "                                            En Location
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 131
$context["trottinette"], "etat", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131) == "EN_MAINTENANCE")) {
                // line 132
                yield "                                            En Maintenance
                                        ";
            }
            // line 134
            yield "                                    </span>
                                </td>
                                <td>
                                    <div class=\"progress\" style=\"height: 8px; width: 80px;\">
                                        <div class=\"progress-bar 
                                            ";
            // line 139
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "batterie", [], "any", false, false, false, 139) > 70)) {
                yield "bg-success
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 140
$context["trottinette"], "batterie", [], "any", false, false, false, 140) > 30)) {
                yield "bg-warning
                                            ";
            } else {
                // line 141
                yield "bg-danger";
            }
            yield "\" 
                                            role=\"progressbar\" 
                                            style=\"width: ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "batterie", [], "any", false, false, false, 143), "html", null, true);
            yield "%\"
                                            aria-valuenow=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "batterie", [], "any", false, false, false, 144), "html", null, true);
            yield "\" 
                                            aria-valuemin=\"0\" 
                                            aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                    <small>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "batterie", [], "any", false, false, false, 149), "html", null, true);
            yield "%</small>
                                </td>
                                <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "localisation", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
                                <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "autonomie", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 161), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 167
        if (!$context['_iterated']) {
            // line 168
            yield "                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <div class=\"text-muted\">
                                        <i class=\"fas fa-bicycle fa-3x mb-3\"></i>
                                        <p>Aucune trottinette trouvée</p>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trottinette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modals (moved outside of the table) -->
    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trottinettes"]) || array_key_exists("trottinettes", $context) ? $context["trottinettes"] : (function () { throw new RuntimeError('Variable "trottinettes" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trottinette"]) {
            // line 186
            yield "        <div class=\"modal fade\" id=\"deleteModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 186), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 186), "html", null, true);
            yield "\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 190), "html", null, true);
            yield "\">Confirmation de suppression</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Êtes-vous sûr de vouloir supprimer la trottinette <strong>";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "modele", [], "any", false, false, false, 194), "html", null, true);
            yield "</strong> (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "numeroSerie", [], "any", false, false, false, 194), "html", null, true);
            yield ") ?</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <form method=\"post\" action=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 198)]), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 199))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trottinette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "
    <!-- JavaScript for search and filter functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const statusFilter = document.getElementById('statusFilter');
            const table = document.getElementById('trottinetteTable');
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
        return "trottinette/index.html.twig";
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
        return array (  463 => 207,  449 => 199,  445 => 198,  436 => 194,  429 => 190,  419 => 186,  415 => 185,  405 => 177,  391 => 168,  389 => 167,  378 => 161,  372 => 158,  366 => 155,  360 => 152,  356 => 151,  351 => 149,  343 => 144,  339 => 143,  333 => 141,  328 => 140,  324 => 139,  317 => 134,  313 => 132,  311 => 131,  308 => 130,  306 => 129,  303 => 128,  301 => 127,  291 => 126,  286 => 124,  283 => 123,  279 => 121,  269 => 119,  267 => 118,  262 => 116,  258 => 115,  254 => 114,  249 => 113,  244 => 112,  197 => 67,  191 => 66,  181 => 62,  176 => 61,  171 => 60,  167 => 59,  156 => 51,  140 => 38,  124 => 25,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Trottinettes{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <!-- Header section -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"fw-bold text-primary mb-0\">Liste des Trottinettes</h1>
            <a href=\"{{ path('app_trottinette_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvelle trottinette
            </a>
        </div>
        
        <!-- Status cards -->
        <div class=\"row mb-4\">
            <div class=\"col-md-4 mb-3 mb-md-0\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-success p-3 me-3\">
                            <i class=\"fas fa-check text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">Disponibles</h6>
                            <h4 class=\"mb-0\">{{ trottinettes|filter(t => t.etat.value == 'DISPONIBLE')|length }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-3 mb-md-0\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-warning p-3 me-3\">
                            <i class=\"fas fa-bicycle text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">En location</h6>
                            <h4 class=\"mb-0\">{{ trottinettes|filter(t => t.etat.value == 'EN_LOCATION')|length }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body d-flex align-items-center\">
                        <div class=\"rounded-circle bg-danger p-3 me-3\">
                            <i class=\"fas fa-tools text-white\"></i>
                        </div>
                        <div>
                            <h6 class=\"text-muted mb-0\">En maintenance</h6>
                            <h4 class=\"mb-0\">{{ trottinettes|filter(t => t.etat.value == 'EN_MAINTENANCE')|length }}</h4>
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
                            <option value=\"\">Tous les états</option>
                            <option value=\"DISPONIBLE\">Disponible</option>
                            <option value=\"EN_LOCATION\">En location</option>
                            <option value=\"EN_MAINTENANCE\">En maintenance</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Table -->
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\" id=\"trottinetteTable\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"border-0\">ID</th>
                                <th class=\"border-0\">Modèle</th>
                                <th class=\"border-0\">N° Série</th>
                                <th class=\"border-0\">Utilisateur</th>
                                <th class=\"border-0\">Point Relais</th>
                                <th class=\"border-0\">État</th>
                                <th class=\"border-0\">Batterie</th>
                                <th class=\"border-0\">Localisation</th>
                                <th class=\"border-0\">Autonomie</th>
                                <th class=\"border-0 text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for trottinette in trottinettes %}
                            <tr data-status=\"{{ trottinette.etat.value }}\">
                                <td>{{ trottinette.id }}</td>
                                <td>{{ trottinette.modele }}</td>
                                <td>{{ trottinette.numeroSerie }}</td>
                                <td>
                                    {% if trottinette.utilisateur %}
                                        {{ trottinette.utilisateur.id }} - {{ trottinette.utilisateur.prenom }} {{ trottinette.utilisateur.nom }}
                                    {% else %}
                                        Non défini
                                    {% endif %}
                                </td>
                                <td>{{ trottinette.pointRelaisId ?: 'Non défini' }}</td>
                                <td>
                                    <span class=\"badge rounded-pill {% if trottinette.etat.value == 'DISPONIBLE' %}bg-success{% elseif trottinette.etat.value == 'EN_LOCATION' %}bg-warning{% else %}bg-danger{% endif %}\">
                                        {% if trottinette.etat.value == 'DISPONIBLE' %}
                                            Disponible
                                        {% elseif trottinette.etat.value == 'EN_LOCATION' %}
                                            En Location
                                        {% elseif trottinette.etat.value == 'EN_MAINTENANCE' %}
                                            En Maintenance
                                        {% endif %}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"progress\" style=\"height: 8px; width: 80px;\">
                                        <div class=\"progress-bar 
                                            {% if trottinette.batterie > 70 %}bg-success
                                            {% elseif trottinette.batterie > 30 %}bg-warning
                                            {% else %}bg-danger{% endif %}\" 
                                            role=\"progressbar\" 
                                            style=\"width: {{ trottinette.batterie }}%\"
                                            aria-valuenow=\"{{ trottinette.batterie }}\" 
                                            aria-valuemin=\"0\" 
                                            aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                    <small>{{ trottinette.batterie }}%</small>
                                </td>
                                <td>{{ trottinette.localisation }}</td>
                                <td>{{ trottinette.autonomie }}</td>
                                <td class=\"text-end\">
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('app_trottinette_show', {'id': trottinette.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_trottinette_edit', {'id': trottinette.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ trottinette.id }}\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"10\" class=\"text-center py-5\">
                                    <div class=\"text-muted\">
                                        <i class=\"fas fa-bicycle fa-3x mb-3\"></i>
                                        <p>Aucune trottinette trouvée</p>
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

    <!-- Delete Modals (moved outside of the table) -->
    {% for trottinette in trottinettes %}
        <div class=\"modal fade\" id=\"deleteModal{{ trottinette.id }}\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel{{ trottinette.id }}\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"deleteModalLabel{{ trottinette.id }}\">Confirmation de suppression</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Êtes-vous sûr de vouloir supprimer la trottinette <strong>{{ trottinette.modele }}</strong> ({{ trottinette.numeroSerie }}) ?</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <form method=\"post\" action=\"{{ path('app_trottinette_delete', {'id': trottinette.id}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trottinette.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}

    <!-- JavaScript for search and filter functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const statusFilter = document.getElementById('statusFilter');
            const table = document.getElementById('trottinetteTable');
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
{% endblock %}", "trottinette/index.html.twig", "C:\\Trottinettenada\\templates\\trottinette\\index.html.twig");
    }
}
