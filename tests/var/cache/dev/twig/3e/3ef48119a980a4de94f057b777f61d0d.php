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

/* home/index.html.twig */
class __TwigTemplate_f95405fe788e8c8317640f51d7f9cad4 extends Template
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
            'styles' => [$this, 'block_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "TrottiCare – Votre Mobilité Urbaine";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("styles", $context, $blocks);
        yield "
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
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

        // line 71
        yield "    ";
        // line 72
        yield "    <section class=\"position-relative text-white overflow-hidden\" style=\"background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); min-height: 90vh;\">
        <div class=\"hero-overlay\"></div>
        <div class=\"container d-flex flex-column justify-content-center align-items-center h-100 position-relative py-8\">
            <div class=\"mb-5 animate__animated animate__zoomIn\">
                <i class=\"bi bi-lightning-charge-fill gradient-icon display-1\"></i>
            </div>
            <h1 class=\"display-3 fw-extrabold mb-4 text-center animate__animated animate__fadeInUp\">
                Explorez votre ville<br>avec <span class=\"text-warning\">TrottiCare</span>
            </h1>
            <p class=\"lead fs-4 col-md-10 col-xl-8 text-center mb-5 animate__animated animate__fadeInUp animate__delay-1s\">
                Mobilité urbaine électrique, écologique et accessible. Réservez votre trottinette en quelques clics et profitez d'une expérience de déplacement unique.
            </p>
            <div class=\"d-flex gap-3 flex-wrap justify-content-center animate__animated animate__fadeInUp animate__delay-2s\">
                ";
        // line 85
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_dashboard");
            yield "\"
                       class=\"btn btn-lg btn-light px-5 rounded-pill fw-bold d-flex align-items-center gap-2\">
                        Tableau de bord <i class=\"bi bi-chevron-right\"></i>
                    </a>
                    <a href=\"#map-section\"
                       class=\"btn btn-lg btn-outline-light px-5 rounded-pill\">
                        <i class=\"bi bi-geo-alt me-2\"></i>Localiser
                    </a>
                ";
        } else {
            // line 95
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\"
                       class=\"btn btn-lg btn-light px-5 rounded-pill fw-bold\">
                        Commencer maintenant
                    </a>
                    <a href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"
                       class=\"btn btn-lg btn-outline-light px-5 rounded-pill\">
                        Connexion
                    </a>
                ";
        }
        // line 104
        yield "            </div>
            <div class=\"scroll-down text-white fs-2 mt-8\">
                <i class=\"bi bi-chevron-double-down\"></i>
            </div>
        </div>
    </section>

    ";
        // line 112
        yield "    <section class=\"section bg-white\">
        <div class=\"container\">
            <div class=\"text-center mb-8\">
                <span class=\"badge bg-primary bg-opacity-10 text-primary fs-6 mb-3\">Fonctionnement</span>
                <h2 class=\"display-5 fw-bold mb-4\">Comment ça marche ?</h2>
            </div>
            <div class=\"row g-4 g-lg-5 justify-content-center\">
                ";
        // line 119
        $context["steps"] = [["icon" => "person-check", "title" => "Inscription Express", "text" => "Créez votre compte en 1 minute avec vérification instantanée"], ["icon" => "map", "title" => "Localisation en temps réel", "text" => "Trouvez les trottinettes disponibles autour de vous"], ["icon" => "qr-code-scan", "title" => "Déverrouillage intelligent", "text" => "Scannez le QR code et roulez en 10 secondes"]];
        // line 124
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 124, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 125
            yield "                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"card step-card h-100 border-0 p-5 text-center bg-light\">
                            <div class=\"mb-4\">
                                <div class=\"d-inline-block bg-primary bg-opacity-10 rounded-circle p-4\">
                                    <i class=\"bi bi-";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "icon", [], "any", false, false, false, 129), "html", null, true);
            yield " fs-1 text-primary\"></i>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <span class=\"badge bg-dark text-white rounded-pill fs-6\">Étape ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 134), "html", null, true);
            yield "</span>
                                </div>
                                <h3 class=\"h4 fw-bold mb-3\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "title", [], "any", false, false, false, 136), "html", null, true);
            yield "</h3>
                                <p class=\"text-muted mb-0\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "text", [], "any", false, false, false, 137), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "            </div>
        </div>
    </section>

    ";
        // line 147
        yield "    <section class=\"section bg-dark text-white\">
        <div class=\"container\">
            <div class=\"text-center mb-8\">
                <span class=\"badge bg-white bg-opacity-10 fs-6 mb-3\">Avantages</span>
                <h2 class=\"display-5 fw-bold mb-4\">Pourquoi choisir TrottiCare ?</h2>
            </div>
            <div class=\"row g-4 g-lg-5\">
                ";
        // line 154
        $context["features"] = [["icon" => "speedometer2", "title" => "Performance", "text" => "Moteur 500W - Autonomie 40km - Vitesse max 25km/h"], ["icon" => "shield-check", "title" => "Sécurité", "text" => "Éclairage LED, freins à disque et casque inclus"], ["icon" => "leaf", "title" => "Écologie", "text" => "0 émission CO₂ - Batterie recyclable"], ["icon" => "currency-euro", "title" => "Tarification", "text" => "0,25TND/min - Forfaits jusqu'à -30%"], ["icon" => "headset", "title" => "Support 24/7", "text" => "Assistance technique et dépannage rapide"], ["icon" => "stars", "title" => "Premium", "text" => "Accès prioritaire aux nouvelles fonctionnalités"]];
        // line 162
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["feat"]) {
            // line 163
            yield "                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"card feature-card h-100 border-0 bg-dark-800 p-4\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feat"], "icon", [], "any", false, false, false, 166), "html", null, true);
            yield " fs-1 text-primary mb-4\"></i>
                                <h3 class=\"h5 fw-bold mb-3\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feat"], "title", [], "any", false, false, false, 167), "html", null, true);
            yield "</h3>
                                <p class=\"text-muted mb-0\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feat"], "text", [], "any", false, false, false, 168), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "            </div>
        </div>
    </section>

    ";
        // line 178
        yield "    ";
        // line 179
        yield "    <section id=\"map-section\" class=\"section bg-light\">
        <div class=\"container\">
            <div class=\"text-center mb-8\">
                <span class=\"badge bg-primary bg-opacity-10 text-primary fs-6 mb-3\">Localisation</span>
                <h2 class=\"display-5 fw-bold mb-4\">Notre réseau</h2>
            </div>
            <div class=\"card border-0 shadow-lg overflow-hidden\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-6 d-flex align-items-center bg-dark text-white p-5\">
                        <div>
                            <h3 class=\"fw-bold mb-4\">Disponibilité en temps réel</h3>
                            <ul class=\"list-unstyled\">
                                <li class=\"d-flex align-items-center mb-3\">
                                    <i class=\"bi bi-check2-circle text-success me-3 fs-5\"></i>
                                    <span>+200 trottinettes disponibles</span>
                                </li>
                                <li class=\"d-flex align-items-center mb-3\">
                                    <i class=\"bi bi-geo-alt text-primary me-3 fs-5\"></i>
                                    <span>15 points de service en ville</span>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-clock-history text-warning me-3 fs-5\"></i>
                                    <span>Mise à jour toutes les 30 secondes</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div id=\"map\" style=\"width:100%; height:400px;\"></div>
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
        return "home/index.html.twig";
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
        return array (  371 => 179,  369 => 178,  363 => 173,  352 => 168,  348 => 167,  344 => 166,  339 => 163,  334 => 162,  332 => 154,  323 => 147,  317 => 142,  298 => 137,  294 => 136,  289 => 134,  281 => 129,  275 => 125,  257 => 124,  255 => 119,  246 => 112,  237 => 104,  229 => 99,  221 => 95,  208 => 86,  206 => 85,  191 => 72,  189 => 71,  176 => 70,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}TrottiCare – Votre Mobilité Urbaine{% endblock %}

{% block styles %}
    {{ parent() }}
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
{% endblock %}

{% block body %}
    {# HERO #}
    <section class=\"position-relative text-white overflow-hidden\" style=\"background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); min-height: 90vh;\">
        <div class=\"hero-overlay\"></div>
        <div class=\"container d-flex flex-column justify-content-center align-items-center h-100 position-relative py-8\">
            <div class=\"mb-5 animate__animated animate__zoomIn\">
                <i class=\"bi bi-lightning-charge-fill gradient-icon display-1\"></i>
            </div>
            <h1 class=\"display-3 fw-extrabold mb-4 text-center animate__animated animate__fadeInUp\">
                Explorez votre ville<br>avec <span class=\"text-warning\">TrottiCare</span>
            </h1>
            <p class=\"lead fs-4 col-md-10 col-xl-8 text-center mb-5 animate__animated animate__fadeInUp animate__delay-1s\">
                Mobilité urbaine électrique, écologique et accessible. Réservez votre trottinette en quelques clics et profitez d'une expérience de déplacement unique.
            </p>
            <div class=\"d-flex gap-3 flex-wrap justify-content-center animate__animated animate__fadeInUp animate__delay-2s\">
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                    <a href=\"{{ path('client_dashboard') }}\"
                       class=\"btn btn-lg btn-light px-5 rounded-pill fw-bold d-flex align-items-center gap-2\">
                        Tableau de bord <i class=\"bi bi-chevron-right\"></i>
                    </a>
                    <a href=\"#map-section\"
                       class=\"btn btn-lg btn-outline-light px-5 rounded-pill\">
                        <i class=\"bi bi-geo-alt me-2\"></i>Localiser
                    </a>
                {% else %}
                    <a href=\"{{ path('app_register') }}\"
                       class=\"btn btn-lg btn-light px-5 rounded-pill fw-bold\">
                        Commencer maintenant
                    </a>
                    <a href=\"{{ path('app_login') }}\"
                       class=\"btn btn-lg btn-outline-light px-5 rounded-pill\">
                        Connexion
                    </a>
                {% endif %}
            </div>
            <div class=\"scroll-down text-white fs-2 mt-8\">
                <i class=\"bi bi-chevron-double-down\"></i>
            </div>
        </div>
    </section>

    {# HOW IT WORKS #}
    <section class=\"section bg-white\">
        <div class=\"container\">
            <div class=\"text-center mb-8\">
                <span class=\"badge bg-primary bg-opacity-10 text-primary fs-6 mb-3\">Fonctionnement</span>
                <h2 class=\"display-5 fw-bold mb-4\">Comment ça marche ?</h2>
            </div>
            <div class=\"row g-4 g-lg-5 justify-content-center\">
                {% set steps = [
                    {icon:'person-check', title:'Inscription Express', text:'Créez votre compte en 1 minute avec vérification instantanée'},
                    {icon:'map', title:'Localisation en temps réel', text:'Trouvez les trottinettes disponibles autour de vous'},
                    {icon:'qr-code-scan', title:'Déverrouillage intelligent', text:'Scannez le QR code et roulez en 10 secondes'}
                ] %}
                {% for step in steps %}
                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"card step-card h-100 border-0 p-5 text-center bg-light\">
                            <div class=\"mb-4\">
                                <div class=\"d-inline-block bg-primary bg-opacity-10 rounded-circle p-4\">
                                    <i class=\"bi bi-{{ step.icon }} fs-1 text-primary\"></i>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <span class=\"badge bg-dark text-white rounded-pill fs-6\">Étape {{ loop.index }}</span>
                                </div>
                                <h3 class=\"h4 fw-bold mb-3\">{{ step.title }}</h3>
                                <p class=\"text-muted mb-0\">{{ step.text }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    {# FEATURES #}
    <section class=\"section bg-dark text-white\">
        <div class=\"container\">
            <div class=\"text-center mb-8\">
                <span class=\"badge bg-white bg-opacity-10 fs-6 mb-3\">Avantages</span>
                <h2 class=\"display-5 fw-bold mb-4\">Pourquoi choisir TrottiCare ?</h2>
            </div>
            <div class=\"row g-4 g-lg-5\">
                {% set features = [
                    {icon:'speedometer2', title:'Performance', text:'Moteur 500W - Autonomie 40km - Vitesse max 25km/h'},
                    {icon:'shield-check', title:'Sécurité', text:'Éclairage LED, freins à disque et casque inclus'},
                    {icon:'leaf', title:'Écologie', text:'0 émission CO₂ - Batterie recyclable'},
                    {icon:'currency-euro', title:'Tarification', text:'0,25TND/min - Forfaits jusqu\\'à -30%'},
                    {icon:'headset', title:'Support 24/7', text:'Assistance technique et dépannage rapide'},
                    {icon:'stars', title:'Premium', text:'Accès prioritaire aux nouvelles fonctionnalités'}
                ] %}
                {% for feat in features %}
                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"card feature-card h-100 border-0 bg-dark-800 p-4\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-{{ feat.icon }} fs-1 text-primary mb-4\"></i>
                                <h3 class=\"h5 fw-bold mb-3\">{{ feat.title }}</h3>
                                <p class=\"text-muted mb-0\">{{ feat.text }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    {# MAP #}
    {# MAP #}
    <section id=\"map-section\" class=\"section bg-light\">
        <div class=\"container\">
            <div class=\"text-center mb-8\">
                <span class=\"badge bg-primary bg-opacity-10 text-primary fs-6 mb-3\">Localisation</span>
                <h2 class=\"display-5 fw-bold mb-4\">Notre réseau</h2>
            </div>
            <div class=\"card border-0 shadow-lg overflow-hidden\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-6 d-flex align-items-center bg-dark text-white p-5\">
                        <div>
                            <h3 class=\"fw-bold mb-4\">Disponibilité en temps réel</h3>
                            <ul class=\"list-unstyled\">
                                <li class=\"d-flex align-items-center mb-3\">
                                    <i class=\"bi bi-check2-circle text-success me-3 fs-5\"></i>
                                    <span>+200 trottinettes disponibles</span>
                                </li>
                                <li class=\"d-flex align-items-center mb-3\">
                                    <i class=\"bi bi-geo-alt text-primary me-3 fs-5\"></i>
                                    <span>15 points de service en ville</span>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-clock-history text-warning me-3 fs-5\"></i>
                                    <span>Mise à jour toutes les 30 secondes</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div id=\"map\" style=\"width:100%; height:400px;\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "home/index.html.twig", "C:\\Users\\PC\\Downloads\\inetgration symfony\\my_project_troti-vf\\my_project_troti-vf\\templates\\home\\index.html.twig");
    }
}
