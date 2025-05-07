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

/* reclamation/login.html.twig */
class __TwigTemplate_83eb157a9ec6d0bbfedcfddb485d4d6d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/login.html.twig", 1);
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

        yield "Login | Trotticare Events";
        
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
                                <h2 class=\"mb-0 fw-bold\">Welcome Back</h2>
                                <p class=\"mb-0\">Sign in to continue to Trotticare Events</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4\">
                            <!-- Alert for demo purposes -->
                            <div class=\"alert alert-info alert-dismissible fade show mb-4\" role=\"alert\">
                                <strong>Demo Account:</strong> user@example.com / password123
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>

                            <form id=\"loginForm\" class=\"slide-up\" style=\"animation-delay: 0.2s;\">
                                <div class=\"form-floating mb-3\">
                                    <input type=\"email\" class=\"form-control\" id=\"emailInput\" placeholder=\"name@example.com\" required>
                                    <label for=\"emailInput\"><i class=\"fas fa-envelope me-2\"></i>Email Address</label>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    <input type=\"password\" class=\"form-control\" id=\"passwordInput\" placeholder=\"Password\" required>
                                    <label for=\"passwordInput\"><i class=\"fas fa-lock me-2\"></i>Password</label>
                                </div>
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"rememberMe\">
                                        <label class=\"form-check-label\" for=\"rememberMe\">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"font-medium text-blue-600 hover:text-blue-500 hover:underline\">Mot de passe oublié ?</a>
                                </div>
                                <div class=\"d-grid\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-login btn-ripple confetti-button\">
                                        Sign In <i class=\"fas fa-sign-in-alt ms-2\"></i>
                                    </button>
                                </div>
                            </form>

                            <div class=\"text-center my-4 position-relative\">
                                <hr class=\"my-0\">
                                <span class=\"position-absolute top-50 start-50 translate-middle px-3 bg-white text-muted\">or sign in with</span>
                            </div>

                            <!-- Social Login -->
                            <div class=\"social-login mb-4 slide-up\" style=\"animation-delay: 0.4s;\">
                                <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"google\"><i class=\"fab fa-google\"></i></a>
                                <a href=\"#\" class=\"apple\"><i class=\"fab fa-apple\"></i></a>
                            </div>

                            <div class=\"text-center slide-up\" style=\"animation-delay: 0.6s;\">
                                <p class=\"mb-0\">Don't have an account? <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        yield "\" class=\"text-primary fw-bold hover-underline\">Sign up</a></p>
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
        return "reclamation/login.html.twig";
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
        return array (  163 => 64,  138 => 42,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login | Trotticare Events{% endblock %}

{% block body %}
    <div class=\"progress-bar\"></div>

    <section class=\"login-container\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8 col-lg-6\">
                    <div class=\"card login-card shadow fade-in\">
                        <div class=\"login-header text-center text-white mb-4\">
                            <div>
                                <h2 class=\"mb-0 fw-bold\">Welcome Back</h2>
                                <p class=\"mb-0\">Sign in to continue to Trotticare Events</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4\">
                            <!-- Alert for demo purposes -->
                            <div class=\"alert alert-info alert-dismissible fade show mb-4\" role=\"alert\">
                                <strong>Demo Account:</strong> user@example.com / password123
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>

                            <form id=\"loginForm\" class=\"slide-up\" style=\"animation-delay: 0.2s;\">
                                <div class=\"form-floating mb-3\">
                                    <input type=\"email\" class=\"form-control\" id=\"emailInput\" placeholder=\"name@example.com\" required>
                                    <label for=\"emailInput\"><i class=\"fas fa-envelope me-2\"></i>Email Address</label>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    <input type=\"password\" class=\"form-control\" id=\"passwordInput\" placeholder=\"Password\" required>
                                    <label for=\"passwordInput\"><i class=\"fas fa-lock me-2\"></i>Password</label>
                                </div>
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"rememberMe\">
                                        <label class=\"form-check-label\" for=\"rememberMe\">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href=\"{{ path('app_forgot_password_request') }}\" class=\"font-medium text-blue-600 hover:text-blue-500 hover:underline\">Mot de passe oublié ?</a>
                                </div>
                                <div class=\"d-grid\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-login btn-ripple confetti-button\">
                                        Sign In <i class=\"fas fa-sign-in-alt ms-2\"></i>
                                    </button>
                                </div>
                            </form>

                            <div class=\"text-center my-4 position-relative\">
                                <hr class=\"my-0\">
                                <span class=\"position-absolute top-50 start-50 translate-middle px-3 bg-white text-muted\">or sign in with</span>
                            </div>

                            <!-- Social Login -->
                            <div class=\"social-login mb-4 slide-up\" style=\"animation-delay: 0.4s;\">
                                <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"google\"><i class=\"fab fa-google\"></i></a>
                                <a href=\"#\" class=\"apple\"><i class=\"fab fa-apple\"></i></a>
                            </div>

                            <div class=\"text-center slide-up\" style=\"animation-delay: 0.6s;\">
                                <p class=\"mb-0\">Don't have an account? <a href=\"{{ path('signup') }}\" class=\"text-primary fw-bold hover-underline\">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "reclamation/login.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/reclamation/login.html.twig");
    }
}
