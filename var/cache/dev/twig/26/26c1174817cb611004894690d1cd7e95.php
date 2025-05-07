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

/* admin/trottinette/show.html.twig */
class __TwigTemplate_41a0570736a4875fa2e667559e25c63e extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trottinette/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/trottinette/show.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Détails Trottinette : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 4, $this->source); })()), "modele", [], "any", false, false, false, 4), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 4, $this->source); })()), "numeroSerie", [], "any", false, false, false, 4), "html", null, true);
        yield ")";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    <style>
        /* Status Badge Styles (reuse/adapt from index) */
        .status-badge {
            padding: 0.25em 0.6em;
            border-radius: 9999px; /* pill */
            font-size: 0.75rem; /* text-sm */
            font-weight: 500; /* font-medium */
            text-transform: uppercase;
            letter-spacing: 0.05em;
            white-space: nowrap;
            line-height: 1;
        }
        .status-disponible { background-color: #dcfce7; color: #166534; } /* green */
        .status-en_location { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-en_maintenance { background-color: #fee2e2; color: #991b1b; } /* red */

        /* Basic Button Styles (reuse/adapt from previous) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; } /* Smaller button */
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }

        /* Utility for vertical list items with icon */
        .detail-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem; /* space-x-3 */
            margin-bottom: 0.75rem; /* mb-3 */
        }
        .detail-item i {
            margin-top: 0.1rem;
            width: 1em; /* Adjust as needed */
            text-align: center;
            color: #6b7280; /* gray-500 */
        }
        .detail-item strong {
            font-weight: 500; /* font-medium */
            color: #374151; /* gray-700 */
        }
        .detail-item span {
            color: #4b5563; /* gray-600 */
        }
        .w-full { width: 100%; }

        /* Ensure FontAwesome icons render */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-fingerprint:before { content: \"\\f577\"; }
        .fa-battery-three-quarters:before { content: \"\\f241\"; }
        .fa-map-marker-alt:before { content: \"\\f3c5\"; }
        .fa-road:before { content: \"\\f018\"; }
        .fa-calendar-plus:before { content: \"\\f271\"; }
        .fa-store:before { content: \"\\f54e\"; }
        .fa-user:before { content: \"\\f007\"; }
        .fa-tools:before { content: \"\\f7d9\"; }
        .fa-envelope:before { content: \"\\f0e0\"; }
        .fa-phone:before { content: \"\\f095\"; }
        .fa-hashtag:before { content: \"\\23\"; } /* Use hash icon for ID */
        .fa-trash-alt:before { content: \"\\f2ed\"; }
        .mr-2 { margin-right: 0.5rem; }
        .mb-0 { margin-bottom: 0 !important; }
        .mb-2 { margin-bottom: 0.5rem !important; }
        .mb-3 { margin-bottom: 1rem !important; }
        .mb-4 { margin-bottom: 1.5rem !important; }
        .mt-4 { margin-top: 1.5rem !important; }


    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
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

        // line 83
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-6xl\"> ";
        // line 85
        yield "
            ";
        // line 87
        yield "            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                    Détails : ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 89, $this->source); })()), "modele", [], "any", false, false, false, 89), "html", null, true);
        yield "
                </h1>
                <div class=\"flex-shrink-0 flex gap-2\">
                    <a href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        yield "\" class=\"button button-warning button-sm\">
                        <i class=\"fas fa-edit mr-1.5\"></i>Modifier
                    </a>
                    <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
        yield "\" class=\"button button-secondary button-sm\">
                        <i class=\"fas fa-arrow-left mr-1.5\"></i>Retour à la liste
                    </a>
                </div>
            </div>

            ";
        // line 102
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/trottinette/show.html.twig", 102);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 103
        yield "
            ";
        // line 105
        yield "            <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8\">

                ";
        // line 108
        yield "                <div class=\"lg:col-span-2 space-y-6\">
                    ";
        // line 110
        yield "                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-5 border-b border-gray-200 flex justify-between items-center\">
                            <h3 class=\"text-lg font-medium text-gray-900\">
                                Informations Générales
                            </h3>
                            <span class=\"status-badge status-";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 115, $this->source); })()), "etat", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115)), "html", null, true);
        yield "\">
                             ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 116, $this->source); })()), "etat", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), ["_" => " "])), "html", null, true);
        yield "
                        </span>
                        </div>
                        <div class=\"p-6\">
                            <dl class=\"grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4\">
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-fingerprint fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">N° Série</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 125, $this->source); })()), "numeroSerie", [], "any", false, false, false, 125), "html", null, true);
        yield "</dd>
                                    </div>
                                </div>
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-battery-three-quarters fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Batterie</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 132, $this->source); })()), "batterie", [], "any", false, false, false, 132), "html", null, true);
        yield "%</dd>
                                    </div>
                                </div>
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-map-marker-alt fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Localisation</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["trottinette"] ?? null), "localisation", [], "any", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 139, $this->source); })()), "localisation", [], "any", false, false, false, 139), "N/A")) : ("N/A")), "html", null, true);
        yield "</dd>
                                    </div>
                                </div>
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-road fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Autonomie</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["trottinette"] ?? null), "autonomie", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 146, $this->source); })()), "autonomie", [], "any", false, false, false, 146), "N/A")) : ("N/A")), "html", null, true);
        yield "</dd>
                                    </div>
                                </div>
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-calendar-plus fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Ajoutée le</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">";
        // line 153
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 153, $this->source); })()), "dateAjout", [], "any", false, false, false, 153)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 153, $this->source); })()), "dateAjout", [], "any", false, false, false, 153), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</dd>
                                    </div>
                                </div>
                                ";
        // line 157
        yield "                                <div class=\"detail-item sm:col-span-1\">
                                    ";
        // line 159
        yield "                                    <i class=\"fas fa-hashtag fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Modèle</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 162, $this->source); })()), "modele", [], "any", false, false, false, 162), "html", null, true);
        yield "</dd>
                                    </div>
                                </div>
                            </dl>
                        </div>
                    </div>

                    ";
        // line 170
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 170, $this->source); })()), "etat", [], "any", false, false, false, 170), "value", [], "any", false, false, false, 170) != "EN_MAINTENANCE")) {
            // line 171
            yield "                        <div class=\"bg-white rounded-lg shadow p-6 border border-gray-200 text-center\">
                            <h4 class=\"text-lg font-medium text-gray-900 mb-2\">Maintenance</h4>
                            <p class=\"text-sm text-gray-500 mb-4\">Cette trottinette n'est pas actuellement en maintenance.</p>
                            ";
            // line 175
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_new", ["trottinette" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)]), "html", null, true);
            yield "\" class=\"button button-primary button-sm\">
                                <i class=\"fas fa-tools mr-1.5\"></i>Planifier une Maintenance
                            </a>
                        </div>
                    ";
        } else {
            // line 180
            yield "                        <div class=\"bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-lg relative\" role=\"alert\">
                            <div class=\"flex items-start\">
                                <div class=\"flex-shrink-0\">
                                    <svg class=\"h-5 w-5 text-yellow-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\"> <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-4a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z\" clip-rule=\"evenodd\" /> </svg>
                                </div>
                                <div class=\"ml-3 flex-1 md:flex md:justify-between\">
                                    <p class=\"text-sm\">Cette trottinette est actuellement en maintenance.</p>
                                    ";
            // line 188
            yield "                                    ";
            // line 189
            yield "                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 193
        yield "                </div>

                ";
        // line 196
        yield "                <div class=\"lg:col-span-1 space-y-6\">
                    ";
        // line 198
        yield "                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-base font-medium text-gray-900 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" /></svg>
                                Utilisateur Associé
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            ";
        // line 206
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 206, $this->source); })()), "utilisateur", [], "any", false, false, false, 206)) {
            // line 207
            yield "                                <div class=\"flex items-center mb-3\">
                                <span class=\"inline-flex items-center justify-center h-10 w-10 rounded-full bg-blue-100 mr-3 flex-shrink-0\">
                                    <span class=\"font-medium text-blue-700\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 209, $this->source); })()), "utilisateur", [], "any", false, false, false, 209), "prenom", [], "any", false, false, false, 209), 0, 1), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 209, $this->source); })()), "utilisateur", [], "any", false, false, false, 209), "nom", [], "any", false, false, false, 209), 0, 1), "html", null, true);
            yield "</span>
                                </span>
                                    <div>
                                        <p class=\"text-sm font-medium text-gray-900 mb-0\">";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 212, $this->source); })()), "utilisateur", [], "any", false, false, false, 212), "prenom", [], "any", false, false, false, 212), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 212, $this->source); })()), "utilisateur", [], "any", false, false, false, 212), "nom", [], "any", false, false, false, 212), "html", null, true);
            yield "</p>
                                        <p class=\"text-xs text-gray-500\">ID: ";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 213, $this->source); })()), "utilisateur", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213), "html", null, true);
            yield "</p>
                                    </div>
                                </div>
                                <div class=\"space-y-2 text-sm\">
                                    <p><i class=\"fas fa-envelope fa-fw mr-2 text-gray-400\"></i>";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 217, $this->source); })()), "utilisateur", [], "any", false, false, false, 217), "email", [], "any", false, false, false, 217), "html", null, true);
            yield "</p>
                                    <p><i class=\"fas fa-phone fa-fw mr-2 text-gray-400\"></i>";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["trottinette"] ?? null), "utilisateur", [], "any", false, true, false, 218), "telephone", [], "any", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 218, $this->source); })()), "utilisateur", [], "any", false, false, false, 218), "telephone", [], "any", false, false, false, 218), "Non fourni")) : ("Non fourni")), "html", null, true);
            yield "</p>
                                </div>
                            ";
        } else {
            // line 221
            yield "                                <p class=\"text-sm text-center text-gray-500 italic my-3\">Aucun utilisateur n'est actuellement associé.</p>
                            ";
        }
        // line 223
        yield "                        </div>
                    </div>

                    ";
        // line 227
        yield "                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-base font-medium text-gray-900 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\"> <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\" /> <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" /> </svg>
                                Point Relais Actuel
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            ";
        // line 235
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 235, $this->source); })()), "pointRelais", [], "any", false, false, false, 235)) {
            // line 236
            yield "                                <div class=\"space-y-2 text-sm\">
                                    <p><strong class=\"text-gray-700\">Nom:</strong> ";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 237, $this->source); })()), "pointRelais", [], "any", false, false, false, 237), "nom", [], "any", false, false, false, 237), "html", null, true);
            yield "</p>
                                    <p><strong class=\"text-gray-700\">Adresse:</strong> ";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 238, $this->source); })()), "pointRelais", [], "any", false, false, false, 238), "addresse", [], "any", false, false, false, 238), "html", null, true);
            yield "</p>
                                    ";
            // line 240
            yield "                                    ";
            // line 241
            yield "                                </div>
                            ";
        } else {
            // line 243
            yield "                                <p class=\"text-sm text-center text-gray-500 italic my-3\">Actuellement hors d'un point relais.</p>
                            ";
        }
        // line 245
        yield "                        </div>
                    </div>

                    ";
        // line 249
        yield "                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-red-200 bg-red-50\">
                            <h3 class=\"text-base font-medium text-red-800 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\"> <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-4a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z\" clip-rule=\"evenodd\" /> </svg>
                                Action Dangereuse
                            </h3>
                        </div>
                        <div class=\"p-6 text-center\">
                            <p class=\"text-sm text-gray-600 mb-3\">Supprimer définitivement cette trottinette ?</p>
                            <form method=\"post\" action=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 258, $this->source); })()), "id", [], "any", false, false, false, 258)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer DÉFINITIVEMENT cette trottinette? Cette action est irréversible.');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trottinette"]) || array_key_exists("trottinette", $context) ? $context["trottinette"] : (function () { throw new RuntimeError('Variable "trottinette" does not exist.', 259, $this->source); })()), "id", [], "any", false, false, false, 259))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"button button-danger button-sm w-full\">
                                    <i class=\"fas fa-trash-alt mr-1.5\"></i>Supprimer la Trottinette
                                </button>
                            </form>
                        </div>
                    </div>

                </div> ";
        // line 268
        yield "
            </div> ";
        // line 270
        yield "        </div> ";
        // line 271
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/trottinette/show.html.twig";
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
        return array (  509 => 271,  507 => 270,  504 => 268,  493 => 259,  489 => 258,  478 => 249,  473 => 245,  469 => 243,  465 => 241,  463 => 240,  459 => 238,  455 => 237,  452 => 236,  450 => 235,  440 => 227,  435 => 223,  431 => 221,  425 => 218,  421 => 217,  414 => 213,  408 => 212,  401 => 209,  397 => 207,  395 => 206,  385 => 198,  382 => 196,  378 => 193,  372 => 189,  370 => 188,  361 => 180,  352 => 175,  347 => 171,  344 => 170,  334 => 162,  329 => 159,  326 => 157,  320 => 153,  310 => 146,  300 => 139,  290 => 132,  280 => 125,  268 => 116,  264 => 115,  257 => 110,  254 => 108,  250 => 105,  247 => 103,  236 => 102,  227 => 95,  221 => 92,  215 => 89,  211 => 87,  208 => 85,  205 => 83,  192 => 82,  110 => 9,  105 => 7,  92 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/trottinette/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails Trottinette : {{ trottinette.modele }} ({{ trottinette.numeroSerie }}){% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind base styles are loaded via base.html.twig #}
    <style>
        /* Status Badge Styles (reuse/adapt from index) */
        .status-badge {
            padding: 0.25em 0.6em;
            border-radius: 9999px; /* pill */
            font-size: 0.75rem; /* text-sm */
            font-weight: 500; /* font-medium */
            text-transform: uppercase;
            letter-spacing: 0.05em;
            white-space: nowrap;
            line-height: 1;
        }
        .status-disponible { background-color: #dcfce7; color: #166534; } /* green */
        .status-en_location { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .status-en_maintenance { background-color: #fee2e2; color: #991b1b; } /* red */

        /* Basic Button Styles (reuse/adapt from previous) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; } /* Smaller button */
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }

        /* Utility for vertical list items with icon */
        .detail-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem; /* space-x-3 */
            margin-bottom: 0.75rem; /* mb-3 */
        }
        .detail-item i {
            margin-top: 0.1rem;
            width: 1em; /* Adjust as needed */
            text-align: center;
            color: #6b7280; /* gray-500 */
        }
        .detail-item strong {
            font-weight: 500; /* font-medium */
            color: #374151; /* gray-700 */
        }
        .detail-item span {
            color: #4b5563; /* gray-600 */
        }
        .w-full { width: 100%; }

        /* Ensure FontAwesome icons render */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-fingerprint:before { content: \"\\f577\"; }
        .fa-battery-three-quarters:before { content: \"\\f241\"; }
        .fa-map-marker-alt:before { content: \"\\f3c5\"; }
        .fa-road:before { content: \"\\f018\"; }
        .fa-calendar-plus:before { content: \"\\f271\"; }
        .fa-store:before { content: \"\\f54e\"; }
        .fa-user:before { content: \"\\f007\"; }
        .fa-tools:before { content: \"\\f7d9\"; }
        .fa-envelope:before { content: \"\\f0e0\"; }
        .fa-phone:before { content: \"\\f095\"; }
        .fa-hashtag:before { content: \"\\23\"; } /* Use hash icon for ID */
        .fa-trash-alt:before { content: \"\\f2ed\"; }
        .mr-2 { margin-right: 0.5rem; }
        .mb-0 { margin-bottom: 0 !important; }
        .mb-2 { margin-bottom: 0.5rem !important; }
        .mb-3 { margin-bottom: 1rem !important; }
        .mb-4 { margin-bottom: 1.5rem !important; }
        .mt-4 { margin-top: 1.5rem !important; }


    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-6xl\"> {# Wider container for 2-col layout #}

            {# 1. Header & Main Actions #}
            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
                <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                    Détails : {{ trottinette.modele }}
                </h1>
                <div class=\"flex-shrink-0 flex gap-2\">
                    <a href=\"{{ path('admin_trottinette_edit', {'id': trottinette.id}) }}\" class=\"button button-warning button-sm\">
                        <i class=\"fas fa-edit mr-1.5\"></i>Modifier
                    </a>
                    <a href=\"{{ path('admin_trottinette_index') }}\" class=\"button button-secondary button-sm\">
                        <i class=\"fas fa-arrow-left mr-1.5\"></i>Retour à la liste
                    </a>
                </div>
            </div>

            {# Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 2. Main Content Grid #}
            <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8\">

                {# Left Column: Core Details & Maintenance Card #}
                <div class=\"lg:col-span-2 space-y-6\">
                    {# Core Details Card #}
                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-5 border-b border-gray-200 flex justify-between items-center\">
                            <h3 class=\"text-lg font-medium text-gray-900\">
                                Informations Générales
                            </h3>
                            <span class=\"status-badge status-{{ trottinette.etat.value|lower }}\">
                             {{ trottinette.etat.value|replace({'_': ' '})|capitalize }}
                        </span>
                        </div>
                        <div class=\"p-6\">
                            <dl class=\"grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4\">
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-fingerprint fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">N° Série</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">{{ trottinette.numeroSerie }}</dd>
                                    </div>
                                </div>
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-battery-three-quarters fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Batterie</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">{{ trottinette.batterie }}%</dd>
                                    </div>
                                </div>
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-map-marker-alt fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Localisation</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">{{ trottinette.localisation|default('N/A') }}</dd>
                                    </div>
                                </div>
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-road fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Autonomie</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">{{ trottinette.autonomie|default('N/A') }}</dd>
                                    </div>
                                </div>
                                <div class=\"detail-item sm:col-span-1\">
                                    <i class=\"fas fa-calendar-plus fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Ajoutée le</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">{{ trottinette.dateAjout ? trottinette.dateAjout|date('d/m/Y H:i') : 'N/A' }}</dd>
                                    </div>
                                </div>
                                {# Add other relevant fields like Modele if needed #}
                                <div class=\"detail-item sm:col-span-1\">
                                    {# Example - replace icon #}
                                    <i class=\"fas fa-hashtag fa-fw\"></i>
                                    <div>
                                        <dt class=\"text-xs uppercase text-gray-500 tracking-wider\">Modèle</dt>
                                        <dd class=\"text-sm font-medium text-gray-800\">{{ trottinette.modele }}</dd>
                                    </div>
                                </div>
                            </dl>
                        </div>
                    </div>

                    {# Maintenance Card (Conditional) #}
                    {% if trottinette.etat.value != 'EN_MAINTENANCE' %}
                        <div class=\"bg-white rounded-lg shadow p-6 border border-gray-200 text-center\">
                            <h4 class=\"text-lg font-medium text-gray-900 mb-2\">Maintenance</h4>
                            <p class=\"text-sm text-gray-500 mb-4\">Cette trottinette n'est pas actuellement en maintenance.</p>
                            {# Ensure correct route name for creating maintenance #}
                            <a href=\"{{ path('admin_maintenance_new', {'trottinette': trottinette.id}) }}\" class=\"button button-primary button-sm\">
                                <i class=\"fas fa-tools mr-1.5\"></i>Planifier une Maintenance
                            </a>
                        </div>
                    {% else %}
                        <div class=\"bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-lg relative\" role=\"alert\">
                            <div class=\"flex items-start\">
                                <div class=\"flex-shrink-0\">
                                    <svg class=\"h-5 w-5 text-yellow-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\"> <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-4a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z\" clip-rule=\"evenodd\" /> </svg>
                                </div>
                                <div class=\"ml-3 flex-1 md:flex md:justify-between\">
                                    <p class=\"text-sm\">Cette trottinette est actuellement en maintenance.</p>
                                    {# Optionally link to the specific maintenance record if available #}
                                    {# <p class=\"mt-3 text-sm md:mt-0 md:ml-6\"> <a href=\"#\" class=\"whitespace-nowrap font-medium text-yellow-700 hover:text-yellow-600\">Voir détails <span aria-hidden=\"true\">→</span></a> </p> #}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>

                {# Right Column: Related Info & Actions #}
                <div class=\"lg:col-span-1 space-y-6\">
                    {# User Card #}
                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-base font-medium text-gray-900 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" /></svg>
                                Utilisateur Associé
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            {% if trottinette.utilisateur %}
                                <div class=\"flex items-center mb-3\">
                                <span class=\"inline-flex items-center justify-center h-10 w-10 rounded-full bg-blue-100 mr-3 flex-shrink-0\">
                                    <span class=\"font-medium text-blue-700\">{{ trottinette.utilisateur.prenom|slice(0,1) }}{{ trottinette.utilisateur.nom|slice(0,1) }}</span>
                                </span>
                                    <div>
                                        <p class=\"text-sm font-medium text-gray-900 mb-0\">{{ trottinette.utilisateur.prenom }} {{ trottinette.utilisateur.nom }}</p>
                                        <p class=\"text-xs text-gray-500\">ID: {{ trottinette.utilisateur.id }}</p>
                                    </div>
                                </div>
                                <div class=\"space-y-2 text-sm\">
                                    <p><i class=\"fas fa-envelope fa-fw mr-2 text-gray-400\"></i>{{ trottinette.utilisateur.email }}</p>
                                    <p><i class=\"fas fa-phone fa-fw mr-2 text-gray-400\"></i>{{ trottinette.utilisateur.telephone|default('Non fourni') }}</p>
                                </div>
                            {% else %}
                                <p class=\"text-sm text-center text-gray-500 italic my-3\">Aucun utilisateur n'est actuellement associé.</p>
                            {% endif %}
                        </div>
                    </div>

                    {# Point Relais Card #}
                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-gray-200\">
                            <h3 class=\"text-base font-medium text-gray-900 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\"> <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z\" /> <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" /> </svg>
                                Point Relais Actuel
                            </h3>
                        </div>
                        <div class=\"p-6\">
                            {% if trottinette.pointRelais %}
                                <div class=\"space-y-2 text-sm\">
                                    <p><strong class=\"text-gray-700\">Nom:</strong> {{ trottinette.pointRelais.nom }}</p>
                                    <p><strong class=\"text-gray-700\">Adresse:</strong> {{ trottinette.pointRelais.addresse }}</p>
                                    {# Optionally link to the point relais details page #}
                                    {# <a href=\"{{ path('point_relais_show', {id: trottinette.pointRelais.id}) }}\" class=\"text-xs text-blue-600 hover:underline\">Voir détails</a> #}
                                </div>
                            {% else %}
                                <p class=\"text-sm text-center text-gray-500 italic my-3\">Actuellement hors d'un point relais.</p>
                            {% endif %}
                        </div>
                    </div>

                    {# Quick Actions Card (Delete) #}
                    <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
                        <div class=\"px-6 py-4 border-b border-red-200 bg-red-50\">
                            <h3 class=\"text-base font-medium text-red-800 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\"> <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-4a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z\" clip-rule=\"evenodd\" /> </svg>
                                Action Dangereuse
                            </h3>
                        </div>
                        <div class=\"p-6 text-center\">
                            <p class=\"text-sm text-gray-600 mb-3\">Supprimer définitivement cette trottinette ?</p>
                            <form method=\"post\" action=\"{{ path('admin_trottinette_delete', {'id': trottinette.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer DÉFINITIVEMENT cette trottinette? Cette action est irréversible.');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trottinette.id) }}\">
                                <button type=\"submit\" class=\"button button-danger button-sm w-full\">
                                    <i class=\"fas fa-trash-alt mr-1.5\"></i>Supprimer la Trottinette
                                </button>
                            </form>
                        </div>
                    </div>

                </div> {# End Right Column #}

            </div> {# End Main Grid #}
        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}", "admin/trottinette/show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/trottinette/show.html.twig");
    }
}
