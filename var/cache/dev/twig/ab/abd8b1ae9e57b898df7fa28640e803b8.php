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

/* scooter/_scooter_card.html.twig */
class __TwigTemplate_a8aae8fea58328d6606d32095e6d5e57 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scooter/_scooter_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scooter/_scooter_card.html.twig"));

        // line 3
        $context["scooter"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter_data"]) || array_key_exists("scooter_data", $context) ? $context["scooter_data"] : (function () { throw new RuntimeError('Variable "scooter_data" does not exist.', 3, $this->source); })()), "entity", [], "any", false, false, false, 3);
        yield " ";
        // line 4
        yield "
<div class=\"scooter-card\">
    <div class=\"scooter-image-wrapper\">
        ";
        // line 8
        yield "        <img class=\"scooter-image\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["scooter_data"] ?? null), "image_url", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter_data"]) || array_key_exists("scooter_data", $context) ? $context["scooter_data"] : (function () { throw new RuntimeError('Variable "scooter_data" does not exist.', 8, $this->source); })()), "image_url", [], "any", false, false, false, 8), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/electric-scooter.jpg"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/electric-scooter.jpg"))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["scooter"] ?? null), "modele", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 8, $this->source); })()), "modele", [], "any", false, false, false, 8), "Trottinette")) : ("Trottinette")), "html", null, true);
        yield "\">
        <div class=\"battery-indicator\">🔋 ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["scooter"] ?? null), "batterie", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 9, $this->source); })()), "batterie", [], "any", false, false, false, 9), "N/A")) : ("N/A")), "html", null, true);
        yield "%</div>
    </div>
    <h3 class=\"scooter-title\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["scooter"] ?? null), "modele", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 11, $this->source); })()), "modele", [], "any", false, false, false, 11), "Trottinette Électrique")) : ("Trottinette Électrique")), "html", null, true);
        yield "</h3>
    <div class=\"scooter-info\">
        <p>📍 ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, ($context["scooter_data"] ?? null), "distanceString", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter_data"]) || array_key_exists("scooter_data", $context) ? $context["scooter_data"] : (function () { throw new RuntimeError('Variable "scooter_data" does not exist.', 13, $this->source); })()), "distanceString", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 13, $this->source); })()), "localisation", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 13, $this->source); })()), "localisation", [], "any", false, false, false, 13))), "Emplacement inconnu"), "html", null, true);
        yield "</p>
        ";
        // line 15
        yield "        <p class=\"text-sm text-gray-600 flex items-center gap-1 mb-1\">
            <i class=\"fas fa-road text-blue-500 text-xs w-4 text-center\"></i> ";
        // line 17
        yield "            <span>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["scooter"] ?? null), "autonomie", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 17, $this->source); })()), "autonomie", [], "any", false, false, false, 17), "N/A")) : ("N/A")), "html", null, true);
        yield "</span> ";
        // line 18
        yield "        </p>
        <p>💶 ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["scooter_data"] ?? null), "pricePerMinute", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter_data"]) || array_key_exists("scooter_data", $context) ? $context["scooter_data"] : (function () { throw new RuntimeError('Variable "scooter_data" does not exist.', 19, $this->source); })()), "pricePerMinute", [], "any", false, false, false, 19), "N/A")) : ("N/A")), "html", null, true);
        yield "</p> ";
        // line 20
        yield "    </div>

    ";
        // line 23
        yield "    ";
        $context["is_available"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["scooter"] ?? null), "etat", [], "any", true, true, false, 23) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 23, $this->source); })()), "etat", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23) == "DISPONIBLE"));
        yield " ";
        // line 24
        yield "    ";
        $context["can_rent"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER");
        yield " ";
        // line 25
        yield "    ";
        $context["is_logged_in"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY");
        // line 26
        yield "
    <div class=\"scooter-actions mt-auto space-y-2\"> ";
        // line 28
        yield "        ";
        if ((isset($context["is_available"]) || array_key_exists("is_available", $context) ? $context["is_available"] : (function () { throw new RuntimeError('Variable "is_available" does not exist.', 28, $this->source); })())) {
            // line 29
            yield "            ";
            // line 30
            yield "            ";
            if ((isset($context["can_rent"]) || array_key_exists("can_rent", $context) ? $context["can_rent"] : (function () { throw new RuntimeError('Variable "can_rent" does not exist.', 30, $this->source); })())) {
                // line 31
                yield "                ";
                // line 32
                yield "                ";
                // line 33
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new", ["trottinetteId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\" class=\"button button-reserve w-full\">
                    Réserver
                </a>
            ";
            } elseif (            // line 36
(isset($context["is_logged_in"]) || array_key_exists("is_logged_in", $context) ? $context["is_logged_in"] : (function () { throw new RuntimeError('Variable "is_logged_in" does not exist.', 36, $this->source); })())) {
                // line 37
                yield "                ";
                // line 38
                yield "                <button class=\"button button-reserve w-full\" disabled title=\"Seuls les clients peuvent réserver\">
                    Réserver
                </button>
            ";
            } else {
                // line 42
                yield "                ";
                // line 43
                yield "                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\" class=\"button button-reserve w-full\">
                    Se connecter pour Réserver
                </a>
            ";
            }
            // line 47
            yield "
            ";
            // line 49
            yield "            ";
            if ((isset($context["can_rent"]) || array_key_exists("can_rent", $context) ? $context["can_rent"] : (function () { throw new RuntimeError('Variable "can_rent" does not exist.', 49, $this->source); })())) {
                // line 50
                yield "                ";
                // line 51
                yield "                ";
                // line 52
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_qr_scan", ["scooterId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" ";
                // line 53
                yield "                   class=\"button button-qr w-full\">
                    <i class=\"fas fa-qrcode me-1\"></i> Louer via QR Code
                </a>
            ";
            } elseif (            // line 56
(isset($context["is_logged_in"]) || array_key_exists("is_logged_in", $context) ? $context["is_logged_in"] : (function () { throw new RuntimeError('Variable "is_logged_in" does not exist.', 56, $this->source); })())) {
                // line 57
                yield "                ";
                // line 58
                yield "                <button class=\"button button-qr w-full\" disabled title=\"Seuls les clients peuvent louer via QR\">
                    <i class=\"fas fa-qrcode me-1\"></i> Louer via QR Code
                </button>
            ";
            } else {
                // line 62
                yield "                ";
                // line 63
                yield "                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\" class=\"button button-qr w-full\">
                    <i class=\"fas fa-qrcode me-1\"></i> Se connecter pour Louer
                </a>
            ";
            }
            // line 67
            yield "
        ";
        } else {
            // line 69
            yield "            ";
            // line 70
            yield "            <button class=\"button button-unavailable w-full\" disabled>
                ";
            // line 71
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 71, $this->source); })()), "etat", [], "any", false, false, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["scooter"]) || array_key_exists("scooter", $context) ? $context["scooter"] : (function () { throw new RuntimeError('Variable "scooter" does not exist.', 71, $this->source); })()), "etat", [], "any", false, false, false, 71), "value", [], "any", false, false, false, 71), ["_" => " "])), "html", null, true)) : ("Indisponible"));
            yield "
            </button>
            ";
            // line 74
            yield "            <button class=\"button button-qr w-full\" disabled>
                <i class=\"fas fa-qrcode me-1\"></i> Louer via QR Code
            </button>
        ";
        }
        // line 78
        yield "    </div>
    ";
        // line 80
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scooter/_scooter_card.html.twig";
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
        return array (  209 => 80,  206 => 78,  200 => 74,  195 => 71,  192 => 70,  190 => 69,  186 => 67,  178 => 63,  176 => 62,  170 => 58,  168 => 57,  166 => 56,  161 => 53,  157 => 52,  155 => 51,  153 => 50,  150 => 49,  147 => 47,  139 => 43,  137 => 42,  131 => 38,  129 => 37,  127 => 36,  120 => 33,  118 => 32,  116 => 31,  113 => 30,  111 => 29,  108 => 28,  105 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 20,  87 => 19,  84 => 18,  80 => 17,  77 => 15,  73 => 13,  68 => 11,  63 => 9,  56 => 8,  51 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/scooter/_scooter_card.html.twig #}
{# Expects a 'scooter_data' variable (array with 'entity', 'distanceString', 'pricePerMinute', 'image_url') #}
{% set scooter = scooter_data.entity %} {# Extract the entity for easier access #}

<div class=\"scooter-card\">
    <div class=\"scooter-image-wrapper\">
        {# Use a consistent placeholder or implement logic for specific images #}
        <img class=\"scooter-image\" src=\"{{ scooter_data.image_url|default(asset('images/electric-scooter.jpg')) }}\" alt=\"{{ scooter.modele|default('Trottinette') }}\">
        <div class=\"battery-indicator\">🔋 {{ scooter.batterie|default('N/A') }}%</div>
    </div>
    <h3 class=\"scooter-title\">{{ scooter.modele|default('Trottinette Électrique') }}</h3>
    <div class=\"scooter-info\">
        <p>📍 {{ scooter_data.distanceString|default(scooter.localisation)|default('Emplacement inconnu') }}</p>
        {# Autonomy - ADDED HERE #}
        <p class=\"text-sm text-gray-600 flex items-center gap-1 mb-1\">
            <i class=\"fas fa-road text-blue-500 text-xs w-4 text-center\"></i> {# Example Icon #}
            <span>{{ scooter.autonomie|default('N/A') }}</span> {# Display autonomy #}
        </p>
        <p>💶 {{ scooter_data.pricePerMinute|default('N/A') }}</p> {# Ensure price format is correct, e.g., TND/min #}
    </div>

    {# --- Button Logic --- #}
    {% set is_available = scooter.etat is defined and scooter.etat.value == 'DISPONIBLE' %} {# Check Enum value #}
    {% set can_rent = is_granted('ROLE_USER') %} {# Check if user is logged in and has client role #}
    {% set is_logged_in = is_granted('IS_AUTHENTICATED_FULLY') %}

    <div class=\"scooter-actions mt-auto space-y-2\"> {# Use space-y-2 for spacing #}
        {% if is_available %}
            {# --- Reserve Button --- #}
            {% if can_rent %}
                {# User is logged in as client - Link to reservation page #}
                {# Ensure 'client_reservation_new' route exists and takes 'trottinetteId' #}
                <a href=\"{{ path('reservation_new', {'trottinetteId': scooter.id}) }}\" class=\"button button-reserve w-full\">
                    Réserver
                </a>
            {% elseif is_logged_in %}
                {# Logged in, but not a client (e.g., Admin, Partenaire) - Disable #}
                <button class=\"button button-reserve w-full\" disabled title=\"Seuls les clients peuvent réserver\">
                    Réserver
                </button>
            {% else %}
                {# Not logged in - Link to login page #}
                <a href=\"{{ path('app_login') }}\" class=\"button button-reserve w-full\">
                    Se connecter pour Réserver
                </a>
            {% endif %}

            {# --- QR Code Button --- #}
            {% if can_rent %}
                {# User is logged in as client - Link to QR scan page #}
                {# Ensure 'client_qr_scan' route exists #}
                <a href=\"{{ path('client_qr_scan', {'scooterId': scooter.id}) }}\" {# Pass ID if scanner needs it #}
                   class=\"button button-qr w-full\">
                    <i class=\"fas fa-qrcode me-1\"></i> Louer via QR Code
                </a>
            {% elseif is_logged_in %}
                {# Logged in, but not a client - Disable #}
                <button class=\"button button-qr w-full\" disabled title=\"Seuls les clients peuvent louer via QR\">
                    <i class=\"fas fa-qrcode me-1\"></i> Louer via QR Code
                </button>
            {% else %}
                {# Not logged in - Link to login page #}
                <a href=\"{{ path('app_login') }}\" class=\"button button-qr w-full\">
                    <i class=\"fas fa-qrcode me-1\"></i> Se connecter pour Louer
                </a>
            {% endif %}

        {% else %}
            {# Scooter not available - Show unavailable status #}
            <button class=\"button button-unavailable w-full\" disabled>
                {{ scooter.etat ? scooter.etat.value|replace({'_': ' '})|capitalize : 'Indisponible' }}
            </button>
            {# Optionally hide the QR code button entirely when unavailable #}
            <button class=\"button button-qr w-full\" disabled>
                <i class=\"fas fa-qrcode me-1\"></i> Louer via QR Code
            </button>
        {% endif %}
    </div>
    {# --- End Button Logic --- #}
</div>", "scooter/_scooter_card.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/scooter/_scooter_card.html.twig");
    }
}
