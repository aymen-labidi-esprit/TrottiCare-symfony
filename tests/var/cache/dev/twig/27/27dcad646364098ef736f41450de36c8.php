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

/* base.html.twig */
class __TwigTemplate_fe8d2f5e44ed6d549d5d483250350f68 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Bootstrap 5.3 CDN -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    <!-- Bootstrap Icons CDN -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
    
    <!-- Font Awesome CDN -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    
    <!-- Animate.css CDN -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        yield "\">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --gradient-angle: 45deg;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                    var(--gradient-angle),
                    rgba(0, 0, 0, 0.4) 0%,
                    rgba(0, 0, 0, 0.1) 100%
            );
        }

        .step-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .scroll-down {
            position: absolute;
            bottom: 20px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .section {
            padding: 5rem 0;
        }

        .gradient-icon {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>

    ";
        // line 85
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        // line 86
        yield "</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white fixed-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <i class=\"bi bi-lightning-charge-fill text-primary me-2\"></i>
                TrottiCare
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_trottinette_index");
        yield "\">Fonctionnement</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\">Evènement</a>
                    </li>
                    ";
        // line 109
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 110
            yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 111
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("point_relais_index");
            yield "\">Point Relais</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 114
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            yield "\">Réservations</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/reclamations/\">Mes Réclamations</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 120
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                        </li>
                    ";
        } else {
            // line 123
            yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 124
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"btn btn-primary ms-2\" href=\"";
            // line 127
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a>
                        </li>
                    ";
        }
        // line 130
        yield "                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=\"pt-5\">
        ";
        // line 137
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 138
        yield "    </main>

    <!-- Footer -->
    <footer class=\"footer bg-dark text-white py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-4 mb-md-0\">
                    <h5 class=\"mb-4\">TrottiCare</h5>
                    <p>Votre solution de mobilité urbaine électrique et écologique.</p>
                </div>
                <div class=\"col-md-4 mb-4 mb-md-0\">
                    <h5 class=\"mb-4\">Liens rapides</h5>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-white\">Accueil</a></li>
                        <li class=\"mb-2\"><a href=\"#how-it-works\" class=\"text-white\">Fonctionnement</a></li>
                        <li class=\"mb-2\"><a href=\"#features\" class=\"text-white\">Avantages</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h5 class=\"mb-4\">Contact</h5>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"bi bi-envelope me-2\"></i>contact@trotti.tn</li>
                        <li class=\"mb-2\"><i class=\"bi bi-phone me-2\"></i>+216 71 000 000</li>
                        <li class=\"mb-2\"><i class=\"bi bi-geo-alt me-2\"></i>Tunis, Tunisie</li>
                    </ul>
                </div>
            </div>
            <hr class=\"my-4\">
            <div class=\"text-center\">
                <p class=\"mb-0\">&copy; ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " TrottiCare. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
    
    ";
        // line 175
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 176
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "TrottiApp";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 175
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  362 => 175,  340 => 137,  318 => 85,  295 => 6,  282 => 176,  280 => 175,  269 => 167,  250 => 151,  235 => 138,  233 => 137,  224 => 130,  218 => 127,  212 => 124,  209 => 123,  203 => 120,  194 => 114,  188 => 111,  185 => 110,  183 => 109,  178 => 107,  172 => 104,  166 => 101,  153 => 91,  146 => 86,  144 => 85,  77 => 21,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}TrottiApp{% endblock %}</title>
    
    <!-- Bootstrap 5.3 CDN -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    <!-- Bootstrap Icons CDN -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
    
    <!-- Font Awesome CDN -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    
    <!-- Animate.css CDN -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --gradient-angle: 45deg;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                    var(--gradient-angle),
                    rgba(0, 0, 0, 0.4) 0%,
                    rgba(0, 0, 0, 0.1) 100%
            );
        }

        .step-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .scroll-down {
            position: absolute;
            bottom: 20px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .section {
            padding: 5rem 0;
        }

        .gradient-icon {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>

    {% block styles %}{% endblock %}
</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white fixed-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                <i class=\"bi bi-lightning-charge-fill text-primary me-2\"></i>
                TrottiCare
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_trottinette_index') }}\">Fonctionnement</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_admin_events') }}\">Evènement</a>
                    </li>
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('point_relais_index') }}\">Point Relais</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('reservation_index') }}\">Réservations</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/reclamations/\">Mes Réclamations</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"btn btn-primary ms-2\" href=\"{{ path('app_register') }}\">Inscription</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=\"pt-5\">
        {% block body %}{% endblock %}
    </main>

    <!-- Footer -->
    <footer class=\"footer bg-dark text-white py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-4 mb-md-0\">
                    <h5 class=\"mb-4\">TrottiCare</h5>
                    <p>Votre solution de mobilité urbaine électrique et écologique.</p>
                </div>
                <div class=\"col-md-4 mb-4 mb-md-0\">
                    <h5 class=\"mb-4\">Liens rapides</h5>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><a href=\"{{ path('app_home') }}\" class=\"text-white\">Accueil</a></li>
                        <li class=\"mb-2\"><a href=\"#how-it-works\" class=\"text-white\">Fonctionnement</a></li>
                        <li class=\"mb-2\"><a href=\"#features\" class=\"text-white\">Avantages</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h5 class=\"mb-4\">Contact</h5>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"bi bi-envelope me-2\"></i>contact@trotti.tn</li>
                        <li class=\"mb-2\"><i class=\"bi bi-phone me-2\"></i>+216 71 000 000</li>
                        <li class=\"mb-2\"><i class=\"bi bi-geo-alt me-2\"></i>Tunis, Tunisie</li>
                    </ul>
                </div>
            </div>
            <hr class=\"my-4\">
            <div class=\"text-center\">
                <p class=\"mb-0\">&copy; {{ \"now\"|date(\"Y\") }} TrottiCare. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
    
    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\base.html.twig");
    }
}
