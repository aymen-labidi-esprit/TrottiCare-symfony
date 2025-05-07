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

/* admin/event_participants.html.twig */
class __TwigTemplate_c68525028c8e7de262466fc4e64db0de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_participants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event_participants.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/event_participants.html.twig", 2);
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

        yield "Participants - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield "    ";
        // line 10
        yield "    <style>
        /* Re-use status badge colors if needed */
        .status-badge {
            padding: 0.25em 0.6em; /* Smaller padding for table badges */
            border-radius: 9999px; /* pill shape */
            font-size: 0.7rem; /* Slightly smaller */
            font-weight: 500; /* font-medium */
            line-height: 1;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .status-inscrit { background-color: #dcfce7; color: #166534; } /* Tailwind green-100, green-800 */
        .status-annule { background-color: #fee2e2; color: #991b1b; } /* Tailwind red-100, red-800 */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

        // line 27
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-6xl\"> ";
        // line 29
        yield "
            ";
        // line 31
        yield "            <nav class=\"flex justify-between items-center mb-6\" aria-label=\"Breadcrumb\">
                <ol class=\"inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse\">
                    <li class=\"inline-flex items-center\">
                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600\">
                            <svg class=\"w-3 h-3 me-2.5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path d=\"m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z\"/>
                            </svg>
                            Tableau de bord
                        </a>
                    </li>
                    <li>
                        <div class=\"flex items-center\">
                            <svg class=\"rtl:rotate-180 w-3 h-3 text-gray-400 mx-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
                            </svg>
                            <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" class=\"ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2\">Gestion Événements</a>
                        </div>
                    </li>
                    <li aria-current=\"page\">
                        <div class=\"flex items-center\">
                            <svg class=\"rtl:rotate-180 w-3 h-3 text-gray-400 mx-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
                            </svg>
                            <span class=\"ms-1 text-sm font-medium text-gray-500 md:ms-2\">Participants</span>
                        </div>
                    </li>
                </ol>
                ";
        // line 59
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"inline-flex items-center px-3 py-1.5 border border-gray-300 text-xs font-medium rounded shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 19l-7-7 7-7\" />
                    </svg>
                    Retour aux Détails
                </a>
            </nav>


            ";
        // line 69
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/event_participants.html.twig", 69);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 70
        yield "
            ";
        // line 72
        yield "            <div class=\"bg-white rounded-lg shadow-md overflow-hidden border border-gray-200\">

                ";
        // line 75
        yield "                <div class=\"px-6 py-4 bg-gray-50 border-b border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2\">
                    <h2 class=\"text-lg font-semibold text-gray-800 mb-0 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-blue-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                        </svg>
                        Participants pour : <span class=\"text-blue-700 ml-1 font-bold\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 80, $this->source); })()), "titre", [], "any", false, false, false, 80), "html", null, true);
        yield "</span>
                    </h2>
                    ";
        // line 83
        yield "                    <span class=\"px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium\">
                    ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 84, $this->source); })())), "html", null, true);
        yield " Participant";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 84, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                </span>
                </div>

                ";
        // line 89
        yield "                <div> ";
        // line 90
        yield "                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 90, $this->source); })())) > 0)) {
            // line 91
            yield "                        <div class=\"overflow-x-auto\">
                            <table class=\"min-w-full divide-y divide-gray-200\">
                                <thead class=\"bg-gray-50\">
                                <tr>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Email</th>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Téléphone</th>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Inscrit le</th>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                                </tr>
                                </thead>
                                <tbody class=\"bg-white divide-y divide-gray-200\">
                                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                // line 104
                yield "                                    <tr class=\"hover:bg-gray-50\">
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                                            ";
                // line 106
                if (CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 106)) {
                    // line 107
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 107), "prenom", [], "any", false, false, false, 107), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 109
                    yield "                                                <em class=\"text-gray-500 italic\">Utilisateur Inconnu</em>
                                            ";
                }
                // line 111
                yield "                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-600\">
                                            ";
                // line 113
                if (CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 113)) {
                    // line 114
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 114), "email", [], "any", false, false, false, 114), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 116
                    yield "                                                <em class=\"text-gray-500 italic\">-</em>
                                            ";
                }
                // line 118
                yield "                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-600\">
                                            ";
                // line 120
                if (CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 120)) {
                    // line 121
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 121), "telephone", [], "any", false, false, false, 121), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 123
                    yield "                                                <em class=\"text-gray-500 italic\">-</em>
                                            ";
                }
                // line 125
                yield "                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-600\">
                                            ";
                // line 127
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "dateInscription", [], "any", false, false, false, 127)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "dateInscription", [], "any", false, false, false, 127), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm\">
                                            ";
                // line 131
                yield "                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131) == "INSCRIT")) {
                    // line 132
                    yield "                                                <span class=\"status-badge status-inscrit\">Inscrit</span>
                                            ";
                } else {
                    // line 134
                    yield "                                                <span class=\"status-badge status-annule\">Annulé</span>
                                            ";
                }
                // line 136
                yield "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['participation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 143
            yield "                        <div class=\"p-6 text-center text-gray-500\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"mx-auto h-10 w-10 text-gray-400 mb-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                            Aucun participant trouvé pour cet événement.
                        </div>
                    ";
        }
        // line 150
        yield "                </div>
                ";
        // line 152
        yield "                ";
        // line 153
        yield "            </div> ";
        // line 154
        yield "
        </div> ";
        // line 156
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
        return "admin/event_participants.html.twig";
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
        return array (  370 => 156,  367 => 154,  365 => 153,  363 => 152,  360 => 150,  351 => 143,  345 => 139,  337 => 136,  333 => 134,  329 => 132,  326 => 131,  320 => 127,  316 => 125,  312 => 123,  306 => 121,  304 => 120,  300 => 118,  296 => 116,  290 => 114,  288 => 113,  284 => 111,  280 => 109,  272 => 107,  270 => 106,  266 => 104,  262 => 103,  248 => 91,  245 => 90,  243 => 89,  234 => 84,  231 => 83,  226 => 80,  219 => 75,  215 => 72,  212 => 70,  201 => 69,  188 => 59,  173 => 46,  158 => 34,  153 => 31,  150 => 29,  147 => 27,  134 => 26,  109 => 10,  107 => 9,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/event_participants.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Participants - {{ event.titre }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Remove Bootstrap-specific styles if any were added here #}
    {# Ensure Tailwind is loaded via base.html.twig #}
    <style>
        /* Re-use status badge colors if needed */
        .status-badge {
            padding: 0.25em 0.6em; /* Smaller padding for table badges */
            border-radius: 9999px; /* pill shape */
            font-size: 0.7rem; /* Slightly smaller */
            font-weight: 500; /* font-medium */
            line-height: 1;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .status-inscrit { background-color: #dcfce7; color: #166534; } /* Tailwind green-100, green-800 */
        .status-annule { background-color: #fee2e2; color: #991b1b; } /* Tailwind red-100, red-800 */
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-6xl\"> {# Adjust max-width as needed #}

            {# 1. Breadcrumbs & Back Link - Tailwind styled #}
            <nav class=\"flex justify-between items-center mb-6\" aria-label=\"Breadcrumb\">
                <ol class=\"inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse\">
                    <li class=\"inline-flex items-center\">
                        <a href=\"{{ path('admin_dashboard') }}\" class=\"inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600\">
                            <svg class=\"w-3 h-3 me-2.5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path d=\"m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z\"/>
                            </svg>
                            Tableau de bord
                        </a>
                    </li>
                    <li>
                        <div class=\"flex items-center\">
                            <svg class=\"rtl:rotate-180 w-3 h-3 text-gray-400 mx-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
                            </svg>
                            <a href=\"{{ path('app_admin_events') }}\" class=\"ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2\">Gestion Événements</a>
                        </div>
                    </li>
                    <li aria-current=\"page\">
                        <div class=\"flex items-center\">
                            <svg class=\"rtl:rotate-180 w-3 h-3 text-gray-400 mx-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
                            </svg>
                            <span class=\"ms-1 text-sm font-medium text-gray-500 md:ms-2\">Participants</span>
                        </div>
                    </li>
                </ol>
                {# Back to Event Details Button #}
                <a href=\"{{ path('app_admin_event_show', {'id': event.id}) }}\" class=\"inline-flex items-center px-3 py-1.5 border border-gray-300 text-xs font-medium rounded shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 19l-7-7 7-7\" />
                    </svg>
                    Retour aux Détails
                </a>
            </nav>


            {# Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# 2. Main Card #}
            <div class=\"bg-white rounded-lg shadow-md overflow-hidden border border-gray-200\">

                {# Card Header #}
                <div class=\"px-6 py-4 bg-gray-50 border-b border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2\">
                    <h2 class=\"text-lg font-semibold text-gray-800 mb-0 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-blue-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                        </svg>
                        Participants pour : <span class=\"text-blue-700 ml-1 font-bold\">{{ event.titre }}</span>
                    </h2>
                    {# Count Badge #}
                    <span class=\"px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium\">
                    {{ participants|length }} Participant{{ participants|length > 1 ? 's' : '' }}
                </span>
                </div>

                {# Card Body containing the table or message #}
                <div> {# Removed card-body padding to let table span full width #}
                    {% if participants|length > 0 %}
                        <div class=\"overflow-x-auto\">
                            <table class=\"min-w-full divide-y divide-gray-200\">
                                <thead class=\"bg-gray-50\">
                                <tr>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Email</th>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Téléphone</th>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Inscrit le</th>
                                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                                </tr>
                                </thead>
                                <tbody class=\"bg-white divide-y divide-gray-200\">
                                {% for participation in participants %}
                                    <tr class=\"hover:bg-gray-50\">
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                                            {% if participation.utilisateur %}
                                                {{ participation.utilisateur.prenom }} {{ participation.utilisateur.nom }}
                                            {% else %}
                                                <em class=\"text-gray-500 italic\">Utilisateur Inconnu</em>
                                            {% endif %}
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-600\">
                                            {% if participation.utilisateur %}
                                                {{ participation.utilisateur.email }}
                                            {% else %}
                                                <em class=\"text-gray-500 italic\">-</em>
                                            {% endif %}
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-600\">
                                            {% if participation.utilisateur %}
                                                {{ participation.utilisateur.telephone }}
                                            {% else %}
                                                <em class=\"text-gray-500 italic\">-</em>
                                            {% endif %}
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-600\">
                                            {{ participation.dateInscription ? participation.dateInscription|date('d/m/Y H:i') : 'N/A' }}
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap text-sm\">
                                            {# Use custom status badge CSS #}
                                            {% if participation.statut.value == 'INSCRIT' %}
                                                <span class=\"status-badge status-inscrit\">Inscrit</span>
                                            {% else %}
                                                <span class=\"status-badge status-annule\">Annulé</span>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"p-6 text-center text-gray-500\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"mx-auto h-10 w-10 text-gray-400 mb-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                            Aucun participant trouvé pour cet événement.
                        </div>
                    {% endif %}
                </div>
                {# Card Footer (Optional, removed as buttons are now in header/nav) #}
                {# <div class=\"px-6 py-4 bg-gray-50 border-t border-gray-200\"> ... </div> #}
            </div> {# End Card #}

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}", "admin/event_participants.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/event_participants.html.twig");
    }
}
