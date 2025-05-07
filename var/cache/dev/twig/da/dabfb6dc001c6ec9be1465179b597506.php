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

/* reclamation/index.html.twig */
class __TwigTemplate_ce49a697990482ca158964b7a4d2951d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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

        yield "Trotticare Events - Home";
        
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
        yield "    <div class=\"progress-bar\"></div>

    <section class=\"hero-section\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 fade-in\" style=\"animation-delay: 0.2s;\">
                    <h1 class=\"hero-title text-gradient\">Trotticare Events</h1>
                    <p class=\"hero-subtitle typing-animation\"
                       data-text='[\"Join Our Scooter Adventures!\", \"Explore The City Together!\", \"Experience The Freedom!\"]'
                       data-speed=\"100\" data-loop=\"true\"></p>
                    <p class=\"mb-4 slide-up\" style=\"animation-delay: 0.4s;\">
                        Join our electric scooter community and participate in exciting events around the city.
                        Discover new routes, meet fellow enthusiasts, and enjoy the ride together!
                    </p>
                    <div class=\"d-flex flex-wrap gap-3 slide-up\" style=\"animation-delay: 0.6s;\">
                        <a href=\"#\" class=\"btn btn-primary btn-lg btn-ripple\">View Events</a>
                        <a href=\"#\" class=\"btn btn-outline-primary btn-lg\">Sign Up</a>
                        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_reclamation");
        yield "\" class=\"btn btn-warning btn-lg\">Créer une réclamation</a>
                    </div>
                </div>
                <div class=\"col-lg-6 mt-5 mt-lg-0 slide-in-right\" style=\"animation-delay: 0.4s;\">
                    <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hero-scooter.png"), "html", null, true);
        yield "\" alt=\"Electric Scooter\" class=\"img-fluid float\">
                </div>
            </div>
        </div>
        <div class=\"particle-container\"></div>
    </section>
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
        return "reclamation/index.html.twig";
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
        return array (  126 => 27,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trotticare Events - Home{% endblock %}

{% block body %}
    <div class=\"progress-bar\"></div>

    <section class=\"hero-section\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 fade-in\" style=\"animation-delay: 0.2s;\">
                    <h1 class=\"hero-title text-gradient\">Trotticare Events</h1>
                    <p class=\"hero-subtitle typing-animation\"
                       data-text='[\"Join Our Scooter Adventures!\", \"Explore The City Together!\", \"Experience The Freedom!\"]'
                       data-speed=\"100\" data-loop=\"true\"></p>
                    <p class=\"mb-4 slide-up\" style=\"animation-delay: 0.4s;\">
                        Join our electric scooter community and participate in exciting events around the city.
                        Discover new routes, meet fellow enthusiasts, and enjoy the ride together!
                    </p>
                    <div class=\"d-flex flex-wrap gap-3 slide-up\" style=\"animation-delay: 0.6s;\">
                        <a href=\"#\" class=\"btn btn-primary btn-lg btn-ripple\">View Events</a>
                        <a href=\"#\" class=\"btn btn-outline-primary btn-lg\">Sign Up</a>
                        <a href=\"{{ path('create_reclamation') }}\" class=\"btn btn-warning btn-lg\">Créer une réclamation</a>
                    </div>
                </div>
                <div class=\"col-lg-6 mt-5 mt-lg-0 slide-in-right\" style=\"animation-delay: 0.4s;\">
                    <img src=\"{{ asset('images/hero-scooter.png') }}\" alt=\"Electric Scooter\" class=\"img-fluid float\">
                </div>
            </div>
        </div>
        <div class=\"particle-container\"></div>
    </section>
{% endblock %}
", "reclamation/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/index.html.twig");
    }
}
