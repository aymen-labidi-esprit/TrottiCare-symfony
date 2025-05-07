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

/* reclamation/signup.html.twig */
class __TwigTemplate_f808513aba426df20422ff5d60dc71bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/signup.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/signup.html.twig", 1);
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

        yield "Sign Up | Trotticare Events";
        
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

    <section class=\"login-container\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8 col-lg-6\">
                    <div class=\"card login-card shadow fade-in\">
                        <div class=\"login-header text-center text-white mb-4\">
                            <div>
                                <h2 class=\"mb-0 fw-bold\">Create An Account</h2>
                                <p class=\"mb-0\">Sign up to join Trotticare Events</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4\">
                            <form id=\"signupForm\" class=\"slide-up\" style=\"animation-delay: 0.2s;\">
                                <div class=\"form-floating mb-3\">
                                    <input type=\"text\" class=\"form-control\" id=\"nameInput\" placeholder=\"Full Name\" required>
                                    <label for=\"nameInput\"><i class=\"fas fa-user me-2\"></i>Full Name</label>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    <input type=\"email\" class=\"form-control\" id=\"emailInput\" placeholder=\"name@example.com\" required>
                                    <label for=\"emailInput\"><i class=\"fas fa-envelope me-2\"></i>Email Address</label>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    <input type=\"password\" class=\"form-control\" id=\"passwordInput\" placeholder=\"Password\" required>
                                    <label for=\"passwordInput\"><i class=\"fas fa-lock me-2\"></i>Password</label>
                                </div>
                                <div class=\"d-grid\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-login btn-ripple confetti-button\">
                                        Sign Up <i class=\"fas fa-user-plus ms-2\"></i>
                                    </button>
                                </div>
                            </form>

                            <div class=\"text-center slide-up\" style=\"animation-delay: 0.4s;\">
                                <p class=\"mb-0\">Already have an account? <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" class=\"text-primary fw-bold hover-underline\">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "reclamation/signup.html.twig";
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
        return array (  137 => 41,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sign Up | Trotticare Events{% endblock %}

{% block body %}
    <div class=\"progress-bar\"></div>

    <section class=\"login-container\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8 col-lg-6\">
                    <div class=\"card login-card shadow fade-in\">
                        <div class=\"login-header text-center text-white mb-4\">
                            <div>
                                <h2 class=\"mb-0 fw-bold\">Create An Account</h2>
                                <p class=\"mb-0\">Sign up to join Trotticare Events</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4\">
                            <form id=\"signupForm\" class=\"slide-up\" style=\"animation-delay: 0.2s;\">
                                <div class=\"form-floating mb-3\">
                                    <input type=\"text\" class=\"form-control\" id=\"nameInput\" placeholder=\"Full Name\" required>
                                    <label for=\"nameInput\"><i class=\"fas fa-user me-2\"></i>Full Name</label>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    <input type=\"email\" class=\"form-control\" id=\"emailInput\" placeholder=\"name@example.com\" required>
                                    <label for=\"emailInput\"><i class=\"fas fa-envelope me-2\"></i>Email Address</label>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    <input type=\"password\" class=\"form-control\" id=\"passwordInput\" placeholder=\"Password\" required>
                                    <label for=\"passwordInput\"><i class=\"fas fa-lock me-2\"></i>Password</label>
                                </div>
                                <div class=\"d-grid\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-login btn-ripple confetti-button\">
                                        Sign Up <i class=\"fas fa-user-plus ms-2\"></i>
                                    </button>
                                </div>
                            </form>

                            <div class=\"text-center slide-up\" style=\"animation-delay: 0.4s;\">
                                <p class=\"mb-0\">Already have an account? <a href=\"{{ path('login') }}\" class=\"text-primary fw-bold hover-underline\">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "reclamation/signup.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/signup.html.twig");
    }
}
