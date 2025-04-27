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

/* admin/dashboard.html.twig */
class __TwigTemplate_a445faf78ce0387cbefac4a4850666ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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

        yield "Tableau de bord administrateur";
        
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
    <div class=\"row mb-4\">
        <div class=\"col\">
            <h1 class=\"display-4\"><i class=\"fas fa-tachometer-alt me-3\"></i>Tableau de bord administrateur</h1>
        </div>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card bg-primary text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"card-title mb-0\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 19, $this->source); })())), "html", null, true);
        yield "</h3>
                            <p class=\"card-text mb-0\">Total des événements</p>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-success text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            ";
        // line 36
        $context["totalParticipants"] = 0;
        // line 37
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            yield "                                ";
            $context["totalParticipants"] = ((isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 38, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participantCount", [], "any", false, false, false, 38));
            // line 39
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                            <h3 class=\"card-title mb-0\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "</h3>
                            <p class=\"card-text mb-0\">Total des participants</p>
                        </div>
                        <i class=\"fas fa-users fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-warning text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"card-title mb-0\">
                                ";
        // line 58
        $context["upcomingEvents"] = 0;
        // line 59
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 60
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 60), "statut", [], "any", false, false, false, 60) == "A_VENIR")) {
                // line 61
                yield "                                        ";
                $context["upcomingEvents"] = ((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 61, $this->source); })()) + 1);
                // line 62
                yield "                                    ";
            }
            // line 63
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "
                            </h3>
                            <p class=\"card-text mb-0\">Événements à venir</p>
                        </div>
                        <i class=\"fas fa-clock fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
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
        return "admin/dashboard.html.twig";
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
        return array (  213 => 72,  201 => 64,  195 => 63,  192 => 62,  189 => 61,  186 => 60,  181 => 59,  179 => 58,  165 => 47,  154 => 40,  148 => 39,  145 => 38,  140 => 37,  138 => 36,  125 => 26,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord administrateur{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row mb-4\">
        <div class=\"col\">
            <h1 class=\"display-4\"><i class=\"fas fa-tachometer-alt me-3\"></i>Tableau de bord administrateur</h1>
        </div>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card bg-primary text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"card-title mb-0\">{{ eventData|length }}</h3>
                            <p class=\"card-text mb-0\">Total des événements</p>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"{{ path('app_admin_events') }}\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-success text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            {% set totalParticipants = 0 %}
                            {% for item in eventData %}
                                {% set totalParticipants = totalParticipants + item.participantCount %}
                            {% endfor %}
                            <h3 class=\"card-title mb-0\">{{ totalParticipants }}</h3>
                            <p class=\"card-text mb-0\">Total des participants</p>
                        </div>
                        <i class=\"fas fa-users fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"{{ path('app_admin_events') }}\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-warning text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"card-title mb-0\">
                                {% set upcomingEvents = 0 %}
                                {% for item in eventData %}
                                    {% if item.event.statut == 'A_VENIR' %}
                                        {% set upcomingEvents = upcomingEvents + 1 %}
                                    {% endif %}
                                {% endfor %}
                                {{ upcomingEvents }}
                            </h3>
                            <p class=\"card-text mb-0\">Événements à venir</p>
                        </div>
                        <i class=\"fas fa-clock fa-3x\"></i>
                    </div>
                </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"small text-white stretched-link\" href=\"{{ path('app_admin_events') }}\">Voir les détails</a>
                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                </div>
            </div>
        </div>
    </div>

  
{% endblock %}
", "admin/dashboard.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\my_project_troti-vf\\templates\\admin\\dashboard.html.twig");
    }
}
