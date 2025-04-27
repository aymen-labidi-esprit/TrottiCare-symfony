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

/* client/dashboard/index.html.twig */
class __TwigTemplate_f28fda1611bf1fe1370cf3b4596ff78a extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/dashboard/index.html.twig", 2);
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

        yield "Mon Tableau de Bord";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <h1>Bienvenue, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 5, $this->source); })()), "prenom", [], "any", false, false, false, 5), "html", null, true);
        yield "!</h1>
    <ul>
        <li><a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_qr_scan");
        yield "\">Scanner un QR Code</a></li>
        <li><a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_map_display");
        yield "\">Afficher la carte des trottinettes</a></li>


        ";
        // line 11
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 109
        yield "
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        yield "            <h2>Upcoming Events</h2>

            <div class=\"row\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 16
            yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 19), "html", null, true);
            yield "</h5>
                                <p class=\"card-text\">
                                    <i class=\"fas fa-calendar\"></i> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 21), "d M Y H:i"), "html", null, true);
            yield "<br>
                                    <i class=\"fas fa-map-marker\"></i> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 22), "label", [], "any", false, false, false, 22), "html", null, true);
            yield "
                                </p>

                                ";
            // line 25
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 25), (isset($context["participatingEventIds"]) || array_key_exists("participatingEventIds", $context) ? $context["participatingEventIds"] : (function () { throw new RuntimeError('Variable "participatingEventIds" does not exist.', 25, $this->source); })()))) {
                // line 26
                yield "                                    <button class=\"btn btn-success\" disabled>
                                        <i class=\"fas fa-check\"></i> Registered
                                    </button>
                                ";
            } else {
                // line 30
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\" method=\"POST\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("participate"), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-sign-in-alt\"></i> Participate
                                        </button>
                                    </form>
                                ";
            }
            // line 37
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">No upcoming events available</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </div>
        
            <h2>Available trottinette</h2>

            <div class=\"row\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trottinettes"]) || array_key_exists("trottinettes", $context) ? $context["trottinettes"] : (function () { throw new RuntimeError('Variable "trottinettes" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["trottinette"]) {
            // line 51
            yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "modele", [], "any", false, false, false, 54), "html", null, true);
            yield "</h5>
                                <p class=\"card-text\">
                                    <i class=\"fas fa-calendar\"></i> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "dateAjout", [], "any", false, false, false, 56), "d M Y H:i"), "html", null, true);
            yield "<br>
                                    <i class=\"fas fa-map-marker\"></i> ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "numeroSerie", [], "any", false, false, false, 57), "html", null, true);
            yield "
                                </p>
                                
                                ";
            // line 60
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 60), (isset($context["registerTrottIds"]) || array_key_exists("registerTrottIds", $context) ? $context["registerTrottIds"] : (function () { throw new RuntimeError('Variable "registerTrottIds" does not exist.', 60, $this->source); })()))) {
                // line 61
                yield "                                    <button class=\"btn btn-success\" disabled>
                                        <i class=\"fas fa-check\"></i> Registered
                                    </button>
                                ";
            } else {
                // line 65
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_create", ["trottinette_id" => CoreExtension::getAttribute($this->env, $this->source, $context["trottinette"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" method=\"POST\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("participate"), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-sign-in-alt\"></i> Réserver
                                        </button>
                                    </form>
                                ";
            }
            // line 72
            yield "
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">No trottinette available</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trottinette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "            </div>


        <h2>Available point relais</h2>

            <div class=\"row\">
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["pointRelais"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pointRelais"]) {
            // line 88
            yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pointRelais"], "nom", [], "any", false, false, false, 91), "html", null, true);
            yield "</h5>
                                <p class=\"card-text\">
                                    <i class=\"fas fa-calendar\"></i> ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pointRelais"], "horaireOuverture", [], "any", false, false, false, 93), "d M Y H:i"), "html", null, true);
            yield "<br>
                                    <i class=\"fas fa-map-marker\"></i> ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pointRelais"], "addresse", [], "any", false, false, false, 94), "html", null, true);
            yield "
                                </p>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 99
        if (!$context['_iterated']) {
            // line 100
            yield "                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">No trottinette available</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pointRelais'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "            </div>
        


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
        return "client/dashboard/index.html.twig";
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
        return array (  336 => 104,  327 => 100,  325 => 99,  315 => 94,  311 => 93,  306 => 91,  301 => 88,  296 => 87,  288 => 81,  279 => 77,  277 => 76,  269 => 72,  260 => 66,  255 => 65,  249 => 61,  247 => 60,  241 => 57,  237 => 56,  232 => 54,  227 => 51,  222 => 50,  215 => 45,  206 => 41,  204 => 40,  197 => 37,  188 => 31,  183 => 30,  177 => 26,  175 => 25,  169 => 22,  165 => 21,  160 => 19,  155 => 16,  150 => 15,  145 => 12,  132 => 11,  119 => 109,  117 => 11,  111 => 8,  107 => 7,  101 => 5,  88 => 4,  65 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/client/dashboard/index.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}Mon Tableau de Bord{% endblock %}
{% block body %}
    <h1>Bienvenue, {{ utilisateur.prenom }}!</h1>
    <ul>
        <li><a href=\"{{ path('client_qr_scan') }}\">Scanner un QR Code</a></li>
        <li><a href=\"{{ path('client_map_display') }}\">Afficher la carte des trottinettes</a></li>


        {% block content %}
            <h2>Upcoming Events</h2>

            <div class=\"row\">
                {% for event in events %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ event.titre }}</h5>
                                <p class=\"card-text\">
                                    <i class=\"fas fa-calendar\"></i> {{ event.dateDebut|date('d M Y H:i') }}<br>
                                    <i class=\"fas fa-map-marker\"></i> {{ event.lieu.label }}
                                </p>

                                {% if event.id in participatingEventIds %}
                                    <button class=\"btn btn-success\" disabled>
                                        <i class=\"fas fa-check\"></i> Registered
                                    </button>
                                {% else %}
                                    <form action=\"{{ path('app_event_participate', {'id': event.id}) }}\" method=\"POST\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('participate') }}\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-sign-in-alt\"></i> Participate
                                        </button>
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">No upcoming events available</div>
                    </div>
                {% endfor %}
            </div>
        
            <h2>Available trottinette</h2>

            <div class=\"row\">
                {% for trottinette in trottinettes %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ trottinette.modele }}</h5>
                                <p class=\"card-text\">
                                    <i class=\"fas fa-calendar\"></i> {{ trottinette.dateAjout|date('d M Y H:i') }}<br>
                                    <i class=\"fas fa-map-marker\"></i> {{ trottinette.numeroSerie }}
                                </p>
                                
                                {% if trottinette.id in registerTrottIds %}
                                    <button class=\"btn btn-success\" disabled>
                                        <i class=\"fas fa-check\"></i> Registered
                                    </button>
                                {% else %}
                                    <form action=\"{{ path('reservation_create', {'trottinette_id': trottinette.id}) }}\" method=\"POST\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('participate') }}\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-sign-in-alt\"></i> Réserver
                                        </button>
                                    </form>
                                {% endif %}

                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">No trottinette available</div>
                    </div>
                {% endfor %}
            </div>


        <h2>Available point relais</h2>

            <div class=\"row\">
                {% for pointRelais in pointRelais %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ pointRelais.nom }}</h5>
                                <p class=\"card-text\">
                                    <i class=\"fas fa-calendar\"></i> {{ pointRelais.horaireOuverture|date('d M Y H:i') }}<br>
                                    <i class=\"fas fa-map-marker\"></i> {{ pointRelais.addresse }}
                                </p>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">No trottinette available</div>
                    </div>
                {% endfor %}
            </div>
        


        {% endblock %}

    </ul>
{% endblock %}
", "client/dashboard/index.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\client\\dashboard\\index.html.twig");
    }
}
