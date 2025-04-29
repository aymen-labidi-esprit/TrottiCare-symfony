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

/* trottinette/show.html.twig */
class __TwigTemplate_ce48c1055d6b72d305b016f5bc4db1a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trottinette/show.html.twig", 1);
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

        yield "Détails de la Trottinette";
        
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
        <h1>Détails de la Trottinette</h1>
        
        <div class=\"row mb-4\">
            <div class=\"col\">
                
            </div>
            <div class=\"col-auto\">
                <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                    <i class=\"fas fa-edit me-2\"></i>Modifier
                </a>
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h3 class=\"card-title mb-0\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 28, $this->source); })()), "modele", [], "any", false, false, false, 28), "html", null, true);
        yield "</h3>
                            <span class=\"badge ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 29, $this->source); })()), "etat", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29) == "DISPONIBLE")) {
            yield "bg-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 29, $this->source); })()), "etat", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29) == "EN_LOCATION")) {
            yield "bg-warning";
        } else {
            yield "bg-danger";
        }
        yield " fs-6\">
                                ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 30, $this->source); })()), "etat", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30) == "DISPONIBLE")) {
            // line 31
            yield "                                    Disponible
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 32, $this->source); })()), "etat", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32) == "EN_LOCATION")) {
            // line 33
            yield "                                    En Location
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 34, $this->source); })()), "etat", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34) == "EN_MAINTENANCE")) {
            // line 35
            yield "                                    En Maintenance
                                ";
        }
        // line 37
        yield "                            </span>
                        </div>

                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-fingerprint me-2 text-primary\"></i>
                                        <strong>N° Série:</strong> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 45, $this->source); })()), "numeroSerie", [], "any", false, false, false, 45), "html", null, true);
        yield "
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-battery-three-quarters me-2 text-primary\"></i>
                                        <strong>Batterie:</strong> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 49, $this->source); })()), "batterie", [], "any", false, false, false, 49), "html", null, true);
        yield "%
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                        <strong>Localisation:</strong> ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 53, $this->source); })()), "localisation", [], "any", false, false, false, 53), "html", null, true);
        yield "
                                    </p>
                                    <p class=\"card-text\">
                                        <i class=\"fas fa-road me-2 text-primary\"></i>
                                        <strong>Autonomie:</strong> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 57, $this->source); })()), "autonomie", [], "any", false, false, false, 57), "html", null, true);
        yield "
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-calendar-plus me-2 text-primary\"></i>
                                        <strong>Date d'Ajout:</strong> ";
        // line 65
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 65, $this->source); })()), "dateAjout", [], "any", false, false, false, 65)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 65, $this->source); })()), "dateAjout", [], "any", false, false, false, 65), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-store me-2 text-primary\"></i>
                                        <strong>Point Relais ID:</strong> ";
        // line 69
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 69, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 69)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 69, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 69), "html", null, true)) : ("Non défini"));
        yield "
                                    </p>
                                    <p class=\"card-text\">
                                        <i class=\"fas fa-user me-2 text-primary\"></i>
                                        <strong>Utilisateur:</strong> 
                                        ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 74, $this->source); })()), "utilisateur", [], "any", false, false, false, 74)) {
            // line 75
            yield "                                            ID: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 75, $this->source); })()), "utilisateur", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 75, $this->source); })()), "utilisateur", [], "any", false, false, false, 75), "prenom", [], "any", false, false, false, 75), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 75, $this->source); })()), "utilisateur", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75), "html", null, true);
            yield "
                                        ";
        } else {
            // line 77
            yield "                                            Non défini
                                        ";
        }
        // line 79
        yield "                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 86, $this->source); })()), "etat", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86) != "EN_MAINTENANCE")) {
            // line 87
            yield "                    <div class=\"card mb-4\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-3\">Maintenance</h5>
                            <p class=\"card-text text-muted mb-3\">Cette trottinette n'est pas actuellement en maintenance.</p>
                            <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_new", ["trottinette" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-tools me-2\"></i>Planifier une Maintenance
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 97
        yield "            </div>

            <div class=\"col-lg-4\">
                <!-- User Information Card -->
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-user me-2\"></i>Informations Utilisateur
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 108, $this->source); })()), "utilisateur", [], "any", false, false, false, 108)) {
            // line 109
            yield "                            <div class=\"d-flex align-items-center mb-3\">
                                <div class=\"flex-shrink-0\">
                                    <div class=\"bg-primary rounded-circle text-white d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-user\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h6 class=\"mb-0\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 116, $this->source); })()), "utilisateur", [], "any", false, false, false, 116), "prenom", [], "any", false, false, false, 116), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 116, $this->source); })()), "utilisateur", [], "any", false, false, false, 116), "nom", [], "any", false, false, false, 116), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">ID: ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 117, $this->source); })()), "utilisateur", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117), "html", null, true);
            yield "</small>
                                </div>
                            </div>
                            <p class=\"card-text mb-2\">
                                <i class=\"fas fa-envelope me-2 text-primary\"></i>
                                <strong>Email:</strong> ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 122, $this->source); })()), "utilisateur", [], "any", false, false, false, 122), "email", [], "any", false, false, false, 122), "html", null, true);
            yield "
                            </p>
                            <p class=\"card-text mb-2\">
                                <i class=\"fas fa-phone me-2 text-primary\"></i>
                                <strong>Téléphone:</strong> ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 126, $this->source); })()), "utilisateur", [], "any", false, false, false, 126), "telephone", [], "any", false, false, false, 126), "html", null, true);
            yield "
                            </p>
                            <p class=\"card-text\">
                                <i class=\"fas fa-user-tag me-2 text-primary\"></i>
                                <strong>Rôle:</strong> ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 130, $this->source); })()), "utilisateur", [], "any", false, false, false, 130), "role", [], "any", false, false, false, 130)), "html", null, true);
            yield "
                            </p>
                        ";
        } else {
            // line 133
            yield "                            <p class=\"text-center text-muted my-3\">Aucun utilisateur associé</p>
                        ";
        }
        // line 135
        yield "                    </div>
                </div>

                <!-- Point Relais Card -->
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-store me-2\"></i>Point Relais
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 146
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 146, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 146)) {
            // line 147
            yield "                            <p class=\"card-text\">
                                <i class=\"fas fa-hashtag me-2 text-primary\"></i>
                                <strong>ID:</strong> ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 149, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 149), "html", null, true);
            yield "
                            </p>
                        ";
        } else {
            // line 152
            yield "                            <p class=\"text-center text-muted my-3\">Aucun point relais associé</p>
                        ";
        }
        // line 154
        yield "                    </div>
                </div>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title mb-3\">Actions Rapides</h5>
                        <div class=\"d-grid gap-2\">
                            <a href=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-2\"></i>Modifier la Trottinette
                            </a>
                            ";
        // line 164
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 164, $this->source); })()), "etat", [], "any", false, false, false, 164), "value", [], "any", false, false, false, 164) != "EN_MAINTENANCE")) {
            // line 165
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_new", ["trottinette" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">
                                    <i class=\"fas fa-tools me-2\"></i>Nouvelle Maintenance
                                </a>
                            ";
        }
        // line 169
        yield "                            <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette trottinette?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-danger w-100\">
                                    <i class=\"fas fa-trash-alt me-2\"></i>Supprimer la Trottinette
                                </button>
                            </form>
                        </div>
                    </div>
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
        return "trottinette/show.html.twig";
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
        return array (  380 => 170,  375 => 169,  367 => 165,  365 => 164,  359 => 161,  350 => 154,  346 => 152,  340 => 149,  336 => 147,  334 => 146,  321 => 135,  317 => 133,  311 => 130,  304 => 126,  297 => 122,  289 => 117,  283 => 116,  274 => 109,  272 => 108,  259 => 97,  250 => 91,  244 => 87,  242 => 86,  233 => 79,  229 => 77,  219 => 75,  217 => 74,  209 => 69,  202 => 65,  191 => 57,  184 => 53,  177 => 49,  170 => 45,  160 => 37,  156 => 35,  154 => 34,  151 => 33,  149 => 32,  146 => 31,  144 => 30,  134 => 29,  130 => 28,  116 => 17,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Trottinette{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Détails de la Trottinette</h1>
        
        <div class=\"row mb-4\">
            <div class=\"col\">
                
            </div>
            <div class=\"col-auto\">
                <a href=\"{{ path('app_trottinette_edit', {'id': trottinette.id}) }}\" class=\"btn btn-warning me-2\">
                    <i class=\"fas fa-edit me-2\"></i>Modifier
                </a>
                <a href=\"{{ path('app_trottinette_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h3 class=\"card-title mb-0\">{{ trottinette.modele }}</h3>
                            <span class=\"badge {% if trottinette.etat.value == 'DISPONIBLE' %}bg-success{% elseif trottinette.etat.value == 'EN_LOCATION' %}bg-warning{% else %}bg-danger{% endif %} fs-6\">
                                {% if trottinette.etat.value == 'DISPONIBLE' %}
                                    Disponible
                                {% elseif trottinette.etat.value == 'EN_LOCATION' %}
                                    En Location
                                {% elseif trottinette.etat.value == 'EN_MAINTENANCE' %}
                                    En Maintenance
                                {% endif %}
                            </span>
                        </div>

                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-fingerprint me-2 text-primary\"></i>
                                        <strong>N° Série:</strong> {{ trottinette.numeroSerie }}
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-battery-three-quarters me-2 text-primary\"></i>
                                        <strong>Batterie:</strong> {{ trottinette.batterie }}%
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                        <strong>Localisation:</strong> {{ trottinette.localisation }}
                                    </p>
                                    <p class=\"card-text\">
                                        <i class=\"fas fa-road me-2 text-primary\"></i>
                                        <strong>Autonomie:</strong> {{ trottinette.autonomie }}
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-calendar-plus me-2 text-primary\"></i>
                                        <strong>Date d'Ajout:</strong> {{ trottinette.dateAjout ? trottinette.dateAjout|date('d/m/Y H:i') : 'Non définie' }}
                                    </p>
                                    <p class=\"card-text mb-2\">
                                        <i class=\"fas fa-store me-2 text-primary\"></i>
                                        <strong>Point Relais ID:</strong> {{ trottinette.pointRelaisId ?: 'Non défini' }}
                                    </p>
                                    <p class=\"card-text\">
                                        <i class=\"fas fa-user me-2 text-primary\"></i>
                                        <strong>Utilisateur:</strong> 
                                        {% if trottinette.utilisateur %}
                                            ID: {{ trottinette.utilisateur.id }} - {{ trottinette.utilisateur.prenom }} {{ trottinette.utilisateur.nom }}
                                        {% else %}
                                            Non défini
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {% if trottinette.etat.value != 'EN_MAINTENANCE' %}
                    <div class=\"card mb-4\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title mb-3\">Maintenance</h5>
                            <p class=\"card-text text-muted mb-3\">Cette trottinette n'est pas actuellement en maintenance.</p>
                            <a href=\"{{ path('app_maintenance_new', {'trottinette': trottinette.id}) }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-tools me-2\"></i>Planifier une Maintenance
                            </a>
                        </div>
                    </div>
                {% endif %}
            </div>

            <div class=\"col-lg-4\">
                <!-- User Information Card -->
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-user me-2\"></i>Informations Utilisateur
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        {% if trottinette.utilisateur %}
                            <div class=\"d-flex align-items-center mb-3\">
                                <div class=\"flex-shrink-0\">
                                    <div class=\"bg-primary rounded-circle text-white d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-user\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h6 class=\"mb-0\">{{ trottinette.utilisateur.prenom }} {{ trottinette.utilisateur.nom }}</h6>
                                    <small class=\"text-muted\">ID: {{ trottinette.utilisateur.id }}</small>
                                </div>
                            </div>
                            <p class=\"card-text mb-2\">
                                <i class=\"fas fa-envelope me-2 text-primary\"></i>
                                <strong>Email:</strong> {{ trottinette.utilisateur.email }}
                            </p>
                            <p class=\"card-text mb-2\">
                                <i class=\"fas fa-phone me-2 text-primary\"></i>
                                <strong>Téléphone:</strong> {{ trottinette.utilisateur.telephone }}
                            </p>
                            <p class=\"card-text\">
                                <i class=\"fas fa-user-tag me-2 text-primary\"></i>
                                <strong>Rôle:</strong> {{ trottinette.utilisateur.role|capitalize }}
                            </p>
                        {% else %}
                            <p class=\"text-center text-muted my-3\">Aucun utilisateur associé</p>
                        {% endif %}
                    </div>
                </div>

                <!-- Point Relais Card -->
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"card-title mb-0\">
                            <i class=\"fas fa-store me-2\"></i>Point Relais
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        {% if trottinette.pointRelaisId %}
                            <p class=\"card-text\">
                                <i class=\"fas fa-hashtag me-2 text-primary\"></i>
                                <strong>ID:</strong> {{ trottinette.pointRelaisId }}
                            </p>
                        {% else %}
                            <p class=\"text-center text-muted my-3\">Aucun point relais associé</p>
                        {% endif %}
                    </div>
                </div>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title mb-3\">Actions Rapides</h5>
                        <div class=\"d-grid gap-2\">
                            <a href=\"{{ path('app_trottinette_edit', {'id': trottinette.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-2\"></i>Modifier la Trottinette
                            </a>
                            {% if trottinette.etat.value != 'EN_MAINTENANCE' %}
                                <a href=\"{{ path('app_maintenance_new', {'trottinette': trottinette.id}) }}\" class=\"btn btn-secondary\">
                                    <i class=\"fas fa-tools me-2\"></i>Nouvelle Maintenance
                                </a>
                            {% endif %}
                            <form method=\"post\" action=\"{{ path('app_trottinette_delete', {'id': trottinette.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette trottinette?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trottinette.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger w-100\">
                                    <i class=\"fas fa-trash-alt me-2\"></i>Supprimer la Trottinette
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "trottinette/show.html.twig", "C:\\Trottinettenada\\templates\\trottinette\\show.html.twig");
    }
}
