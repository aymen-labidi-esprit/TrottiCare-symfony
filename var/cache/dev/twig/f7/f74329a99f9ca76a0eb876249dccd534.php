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
class __TwigTemplate_3711d7ecf9d5c135ce2214afdf752ffc extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 2);
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

        yield "Accueil - TrottiCare Location";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        // line 8
        yield "<section class=\"hero-section bg-gradient-to-r from-green-50 to-blue-50 py-16 lg:py-24\">
    <div class=\"container\">
        <div class=\"hero-text-wrapper max-w-3xl mx-auto text-center\">
            <h1 class=\"hero-h1 text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6\">
                ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("heroTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["heroTitle"]) || array_key_exists("heroTitle", $context) ? $context["heroTitle"] : (function () { throw new RuntimeError('Variable "heroTitle" does not exist.', 12, $this->source); })()), "Location de Trottinettes Électriques")) : ("Location de Trottinettes Électriques")), "html", null, true);
        yield "
            </h1>
            <p class=\"hero-p text-lg md:text-xl text-gray-600 mb-8\">
                ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("heroSubtitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["heroSubtitle"]) || array_key_exists("heroSubtitle", $context) ? $context["heroSubtitle"] : (function () { throw new RuntimeError('Variable "heroSubtitle" does not exist.', 15, $this->source); })()), "Découvrez un moyen écologique et pratique de vous déplacer.")) : ("Découvrez un moyen écologique et pratique de vous déplacer.")), "html", null, true);
        yield "
            </p>
            ";
        // line 18
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_trottinette_index");
        yield "\" class=\"button button-hero inline-block\">Voir les trottinettes</a>
        </div>
    </div>
</section>

";
        // line 24
        yield "<main class=\"container main-content-area py-16 lg:py-24\">

    ";
        // line 27
        yield "    <section id=\"map-section\" class=\"mb-16 lg:mb-24\">
        <h2 class=\"section-title text-center\">Carte des Zones Desservies</h2> ";
        // line 29
        yield "        ";
        // line 30
        yield "        <div id=\"map-container\" class=\"map-container rounded-lg shadow-lg overflow-hidden\">
            ";
        // line 32
        yield "            <div style=\"display: flex; align-items: center; justify-content: center; height: 100%; background-color: #f3f4f6; color: #6b7280;\">
                Chargement de la carte...
            </div>
        </div>
    </section>
    ";
        // line 38
        yield "
    ";
        // line 40
        yield "    <section id=\"scooters-nearby\" class=\"mb-16 lg:mb-24\">
        <div class=\"events-header flex justify-between items-center mb-8\">
            <h2 class=\"section-title-inline mb-0\">Quelques Trottinettes Disponibles</h2> ";
        // line 43
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_trottinette_index");
        yield "\">
                <button class=\"button button-secondary\">Voir toutes les trottinettes</button>
            </a>
        </div>
        <div class=\"scooter-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scooters"]) || array_key_exists("scooters", $context) ? $context["scooters"] : (function () { throw new RuntimeError('Variable "scooters" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["scooter_loop_item"]) {
            yield " ";
            // line 49
            yield "                ";
            yield from $this->loadTemplate("scooter/_scooter_card.html.twig", "home/index.html.twig", 49)->unwrap()->yield(CoreExtension::merge($context, ["scooter_data" =>             // line 50
$context["scooter_loop_item"], "loop" =>             // line 51
$context["loop"]]));
            // line 53
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 54
            yield "                <p class=\"text-center text-gray-600 col-span-full\">Aucune trottinette disponible affichée pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['scooter_loop_item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </div>
    </section>

    ";
        // line 60
        yield "    <section id=\"upcoming-events\">
        <div class=\"events-header flex justify-between items-center mb-8\">
            <h2 class=\"section-title-inline mb-0\">Événements à venir</h2>
            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_index");
        yield "\"> ";
        // line 64
        yield "                <button class=\"button button-secondary\">Voir tous les événements</button>
            </a>
        </div>
        <div class=\"events-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8\">
            ";
        // line 69
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcoming_events"]) || array_key_exists("upcoming_events", $context) ? $context["upcoming_events"] : (function () { throw new RuntimeError('Variable "upcoming_events" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["event_loop_item"]) {
            // line 70
            yield "            ";
            yield from $this->loadTemplate("public/event/_event_card.html.twig", "home/index.html.twig", 70)->unwrap()->yield(CoreExtension::merge($context, ["event_data" =>             // line 71
$context["event_loop_item"]]));
            // line 73
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 74
            yield "            <p class=\"text-center text-gray-600 col-span-full\">Aucun événement à venir programmé.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event_loop_item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "        </div>
    </section>

</main> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

        // line 84
        yield "
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const mapElement = document.getElementById('map-container');

            // Check if Leaflet (L) is loaded (linked in base.html.twig)
            if (mapElement && typeof L !== 'undefined') {
                try {
                    // --- Initialize Map ---
                    const mapCenterLat = 36.8065; // Tunis Latitude
                    const mapCenterLng = 10.1815; // Tunis Longitude
                    const mapZoom = 13;           // Zoom level for Tunis

                    mapElement.innerHTML = ''; // Clear the loading message

                    const map = L.map(mapElement).setView([mapCenterLat, mapCenterLng], mapZoom);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors',
                        maxZoom: 18, // Standard max zoom for OSM
                    }).addTo(map);

                    console.log('Empty Leaflet map initialized and centered on Tunis.');

                    // --- NO MARKERS ADDED HERE ---
                    // The markersJson variable is not used in this version.

                } catch (error) {
                    console.error(\"Failed to initialize Leaflet map:\", error);
                    if (mapElement) {
                        mapElement.innerHTML = \"<p style='padding: 20px; text-align: center; color: red;'>Impossible de charger la carte.</p>\";
                    }
                }
            } else {
                if (!mapElement) console.warn(\"Map container '#map-container' not found.\");
                if (typeof L === 'undefined') console.error(\"Leaflet library (L) not loaded. Check <script> tag in base.html.twig.\");
                if(mapElement) mapElement.innerHTML = \"<p style='padding: 20px; text-align: center; color: orange;'>Carte interactive indisponible.</p>\";
            }
        });
    </script>
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
        return array (  297 => 84,  284 => 83,  270 => 76,  263 => 74,  250 => 73,  248 => 71,  246 => 70,  227 => 69,  221 => 64,  218 => 63,  213 => 60,  208 => 56,  201 => 54,  188 => 53,  186 => 51,  185 => 50,  183 => 49,  164 => 48,  155 => 43,  151 => 40,  148 => 38,  141 => 32,  138 => 30,  136 => 29,  133 => 27,  129 => 24,  120 => 18,  115 => 15,  109 => 12,  103 => 8,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/home/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Accueil - TrottiCare Location{% endblock %}

{% block body %}
    {# Hero Section (Same as before) #}
<section class=\"hero-section bg-gradient-to-r from-green-50 to-blue-50 py-16 lg:py-24\">
    <div class=\"container\">
        <div class=\"hero-text-wrapper max-w-3xl mx-auto text-center\">
            <h1 class=\"hero-h1 text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6\">
                {{ heroTitle|default('Location de Trottinettes Électriques') }}
            </h1>
            <p class=\"hero-p text-lg md:text-xl text-gray-600 mb-8\">
                {{ heroSubtitle|default('Découvrez un moyen écologique et pratique de vous déplacer.') }}
            </p>
            {# Button linking to the scooter list page #}
            <a href=\"{{ path('public_trottinette_index') }}\" class=\"button button-hero inline-block\">Voir les trottinettes</a>
        </div>
    </div>
</section>

{# Main Content Area #}
<main class=\"container main-content-area py-16 lg:py-24\">

    {# --- MAP SECTION RE-ADDED --- #}
    <section id=\"map-section\" class=\"mb-16 lg:mb-24\">
        <h2 class=\"section-title text-center\">Carte des Zones Desservies</h2> {# Changed title slightly #}
        {# Container for the map - Apply styles from main.css or inline #}
        <div id=\"map-container\" class=\"map-container rounded-lg shadow-lg overflow-hidden\">
            {# Loading indicator or placeholder (will be replaced by map) #}
            <div style=\"display: flex; align-items: center; justify-content: center; height: 100%; background-color: #f3f4f6; color: #6b7280;\">
                Chargement de la carte...
            </div>
        </div>
    </section>
    {# --- END MAP SECTION --- #}

    {# --- Nearby Scooters Section --- #}
    <section id=\"scooters-nearby\" class=\"mb-16 lg:mb-24\">
        <div class=\"events-header flex justify-between items-center mb-8\">
            <h2 class=\"section-title-inline mb-0\">Quelques Trottinettes Disponibles</h2> {# Changed title #}
            <a href=\"{{ path('public_trottinette_index') }}\">
                <button class=\"button button-secondary\">Voir toutes les trottinettes</button>
            </a>
        </div>
        <div class=\"scooter-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8\">
            {% for scooter_loop_item in scooters %} {# Use scooters passed from controller #}
                {% include 'scooter/_scooter_card.html.twig' with {
                    'scooter_data': scooter_loop_item,
                    'loop': loop
                } %}
            {% else %}
                <p class=\"text-center text-gray-600 col-span-full\">Aucune trottinette disponible affichée pour le moment.</p>
            {% endfor %}
        </div>
    </section>

    {# --- Upcoming Events Section --- #}
    <section id=\"upcoming-events\">
        <div class=\"events-header flex justify-between items-center mb-8\">
            <h2 class=\"section-title-inline mb-0\">Événements à venir</h2>
            <a href=\"{{ path('public_event_index') }}\"> {# Ensure this route exists #}
                <button class=\"button button-secondary\">Voir tous les événements</button>
            </a>
        </div>
        <div class=\"events-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8\">
            {# Adjusted path #}
            {% for event_loop_item in upcoming_events %}
            {% include 'public/event/_event_card.html.twig' with {
            'event_data': event_loop_item
            } %}
            {% else %}
            <p class=\"text-center text-gray-600 col-span-full\">Aucun événement à venir programmé.</p>
            {% endfor %}
        </div>
    </section>

</main> {# End Main Content Area #}
{% endblock %}

{# --- JAVASCRIPT BLOCK FOR MAP INITIALIZATION --- #}
{% block javascripts %}

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const mapElement = document.getElementById('map-container');

            // Check if Leaflet (L) is loaded (linked in base.html.twig)
            if (mapElement && typeof L !== 'undefined') {
                try {
                    // --- Initialize Map ---
                    const mapCenterLat = 36.8065; // Tunis Latitude
                    const mapCenterLng = 10.1815; // Tunis Longitude
                    const mapZoom = 13;           // Zoom level for Tunis

                    mapElement.innerHTML = ''; // Clear the loading message

                    const map = L.map(mapElement).setView([mapCenterLat, mapCenterLng], mapZoom);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors',
                        maxZoom: 18, // Standard max zoom for OSM
                    }).addTo(map);

                    console.log('Empty Leaflet map initialized and centered on Tunis.');

                    // --- NO MARKERS ADDED HERE ---
                    // The markersJson variable is not used in this version.

                } catch (error) {
                    console.error(\"Failed to initialize Leaflet map:\", error);
                    if (mapElement) {
                        mapElement.innerHTML = \"<p style='padding: 20px; text-align: center; color: red;'>Impossible de charger la carte.</p>\";
                    }
                }
            } else {
                if (!mapElement) console.warn(\"Map container '#map-container' not found.\");
                if (typeof L === 'undefined') console.error(\"Leaflet library (L) not loaded. Check <script> tag in base.html.twig.\");
                if(mapElement) mapElement.innerHTML = \"<p style='padding: 20px; text-align: center; color: orange;'>Carte interactive indisponible.</p>\";
            }
        });
    </script>
{% endblock %}", "home/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/home/index.html.twig");
    }
}
