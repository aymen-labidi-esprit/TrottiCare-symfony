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

/* public/home/index.html.twig */
class __TwigTemplate_55001c7b8380efd1f1555765d7bbbd98 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/home/index.html.twig", 1);
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

        yield "Accueil - TrottiCare Location";
        
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
        yield "        ";
        // line 7
        yield "        <section class=\"hero-section bg-gradient-to-r from-green-50 to-blue-50 py-16 lg:py-24\"> ";
        // line 8
        yield "            <div class=\"container\">
                <div class=\"hero-text-wrapper max-w-3xl mx-auto text-center\"> ";
        // line 10
        yield "                    <h1 class=\"hero-h1 text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6\">
                        ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("heroTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["heroTitle"]) || array_key_exists("heroTitle", $context) ? $context["heroTitle"] : (function () { throw new RuntimeError('Variable "heroTitle" does not exist.', 11, $this->source); })()), "Location de Trottinettes Électriques")) : ("Location de Trottinettes Électriques")), "html", null, true);
        yield "
                    </h1>
                    <p class=\"hero-p text-lg md:text-xl text-gray-600 mb-8\">
                        ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("heroSubtitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["heroSubtitle"]) || array_key_exists("heroSubtitle", $context) ? $context["heroSubtitle"] : (function () { throw new RuntimeError('Variable "heroSubtitle" does not exist.', 14, $this->source); })()), "Découvrez un moyen écologique et pratique de vous déplacer.")) : ("Découvrez un moyen écologique et pratique de vous déplacer.")), "html", null, true);
        yield "
                    </p>
                    ";
        // line 17
        yield "                    <a href=\"#scooters-nearby\" class=\"button button-hero inline-block\">Voir les trottinettes</a> ";
        // line 18
        yield "                </div>
            </div>
        </section>

        ";
        // line 23
        yield "        <main class=\"container main-content-area py-16 lg:py-24\"> ";
        // line 24
        yield "
            ";
        // line 26
        yield "            <section id=\"map-section\" class=\"map-wrapper mb-16 lg:mb-24\"> ";
        // line 27
        yield "                <h2 class=\"section-title text-center\">Carte des Trottinettes Disponibles</h2> ";
        // line 28
        yield "                <div id=\"leaflet-map-container\" class=\"map-container rounded-lg shadow-lg overflow-hidden\" style=\"height: 450px;\"> ";
        // line 29
        yield "                    <div class=\"flex items-center justify-center h-full bg-gray-100 text-gray-500\">
                        Chargement de la carte...
                    </div>
                </div>
                <p class=\"text-center text-sm text-gray-500 mt-4\">
                    <span class=\"inline-block w-3 h-3 rounded-full bg-green-500 mr-1\"></span> Disponible (Bonne charge)
                    <span class=\"inline-block w-3 h-3 rounded-full bg-yellow-500 mr-1 ml-3\"></span> Disponible (Charge moyenne)
                    ";
        // line 37
        yield "                </p>
                <p class=\"text-center text-xs text-gray-400 mt-2\">Note: Les emplacements peuvent être approximatifs.</p> ";
        // line 39
        yield "            </section>

            ";
        // line 42
        yield "            <section id=\"scooters-nearby\" class=\"mb-16 lg:mb-24\">
                <h2 class=\"section-title text-center\">Trottinettes à proximité</h2>
                <div class=\"scooter-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8\"> ";
        // line 45
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scooters"]) || array_key_exists("scooters", $context) ? $context["scooters"] : (function () { throw new RuntimeError('Variable "scooters" does not exist.', 45, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["scooter_data"]) {
            // line 46
            yield "                        ";
            yield from $this->loadTemplate("scooter/_scooter_card.html.twig", "public/home/index.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["scooter_data" =>             // line 47
$context["scooter_data"], "loop" =>             // line 48
$context["loop"]]));
            // line 50
            yield "                    ";
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
            // line 51
            yield "                        <p class=\"text-center text-gray-600 col-span-full\">Aucune trottinette disponible affichée pour le moment.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['scooter_data'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                </div>
            </section>

            ";
        // line 57
        yield "            <section id=\"upcoming-events\">
                 <div class=\"events-header flex justify-between items-center mb-8\"> ";
        // line 59
        yield "                    <h2 class=\"section-title-inline mb-0\">Événements à venir</h2> ";
        // line 60
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_event_index");
        yield "\"> ";
        // line 61
        yield "                        <button class=\"button button-secondary\">Voir tous les événements</button>
                    </a>
                </div>
                <div class=\"events-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8\"> ";
        // line 65
        yield "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcoming_events"]) || array_key_exists("upcoming_events", $context) ? $context["upcoming_events"] : (function () { throw new RuntimeError('Variable "upcoming_events" does not exist.', 65, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["event_data"]) {
            // line 66
            yield "                        ";
            yield from $this->loadTemplate("event/_event_card.html.twig", "public/home/index.html.twig", 66)->unwrap()->yield(CoreExtension::merge($context, ["event_data" =>             // line 67
$context["event_data"]]));
            // line 69
            yield "                     ";
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
            // line 70
            yield "                        <p class=\"text-center text-gray-600 col-span-full\">Aucun événement à venir programmé.</p>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event_data'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                </div>
            </section>

        </main> ";
        // line 76
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "        ";
        // line 81
        yield "        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const mapElement = document.getElementById('leaflet-map-container');
                // Check if Leaflet (L) is loaded (should be via Encore)
                if (mapElement && typeof L !== 'undefined') {
                     try {
                        // --- Initialize Map ---
                        const mapCenterLat = ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("mapCenterLat", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mapCenterLat"]) || array_key_exists("mapCenterLat", $context) ? $context["mapCenterLat"] : (function () { throw new RuntimeError('Variable "mapCenterLat" does not exist.', 88, $this->source); })()), 48.8566)) : (48.8566)), "html", null, true);
        yield "; // Default to Paris
                        const mapCenterLng = ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("mapCenterLng", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mapCenterLng"]) || array_key_exists("mapCenterLng", $context) ? $context["mapCenterLng"] : (function () { throw new RuntimeError('Variable "mapCenterLng" does not exist.', 89, $this->source); })()), 2.3522)) : (2.3522)), "html", null, true);
        yield ";
                        const mapZoom = ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("mapZoom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mapZoom"]) || array_key_exists("mapZoom", $context) ? $context["mapZoom"] : (function () { throw new RuntimeError('Variable "mapZoom" does not exist.', 90, $this->source); })()), 12)) : (12)), "html", null, true);
        yield ";
                        mapElement.innerHTML = ''; // Clear loading message
                        const map = L.map(mapElement).setView([mapCenterLat, mapCenterLng], mapZoom);

                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OSM</a>',
                            maxZoom: 18,
                        }).addTo(map);

                        // --- Add Markers ---
                        // Controller passes 'markersJson' with lat/lng data
                        const markersData = JSON.parse('";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((isset($context["markersJson"]) || array_key_exists("markersJson", $context) ? $context["markersJson"] : (function () { throw new RuntimeError('Variable "markersJson" does not exist.', 101, $this->source); })()), "[]"), "html", null, true);
        yield "');

                        // Function to create custom marker HTML (ensure styles are in CSS)
                        function createCustomIconHtml(colorClass = 'marker-green') {
                            let colorCode = '#22c55e'; // Default green
                            if (colorClass === 'marker-yellow') colorCode = '#eab308';
                            if (colorClass === 'marker-red') colorCode = '#ef4444'; // Example red

                             // More robust SVG icon
                             return `<div class=\"custom-marker-wrapper\">
                                        <svg viewBox=\"0 0 32 46\" width=\"32\" height=\"46\" style=\"overflow: visible;\">
                                          <path d=\"M16 0C7.163 0 0 7.163 0 16c0 8.837 16 30 16 30s16-21.163 16-30C32 7.163 24.837 0 16 0z\" fill=\"\${colorCode}\" stroke=\"#fff\" stroke-width=\"1\"/>
                                          <circle cx=\"16\" cy=\"16\" r=\"7\" fill=\"#fff\"/>
                                          <circle cx=\"16\" cy=\"16\" r=\"4\" fill=\"\${colorCode}\"/>
                                        </svg>
                                      </div>`;
                         }

                        if (Array.isArray(markersData)) {
                            const markers = [];
                            markersData.forEach(data => {
                                 // !!! Check: Only add if lat/lng are present !!!
                                 if (data && typeof data.lat === 'number' && typeof data.lng === 'number') {
                                     const customIcon = L.divIcon({
                                         className: 'custom-leaflet-div-icon', // Base class for potential styling
                                         html: createCustomIconHtml(data.color || 'marker-green'),
                                         iconSize: [32, 46], // Width/Height of the SVG container
                                         iconAnchor: [16, 46], // Point of the marker bottom-center
                                         popupAnchor: [0, -48] // Popup opening point relative to iconAnchor
                                     });

                                    const marker = L.marker([data.lat, data.lng], { icon: customIcon })
                                         .bindPopup(data.popup || 'Trottinette');
                                    markers.push(marker);
                                 }
                            });
                            // Add markers to the map
                             if (markers.length > 0) {
                                 L.layerGroup(markers).addTo(map);
                                 // Optional: Fit map bounds to markers if desired
                                 // map.fitBounds(L.featureGroup(markers).getBounds().pad(0.1));
                             } else {
                                 console.log(\"No valid markers to display.\");
                                 mapElement.innerHTML = '<p class=\"text-center text-gray-500 p-4\">Aucune trottinette trouvée sur la carte.</p>';
                             }
                         } else {
                            console.error(\"markersJson is not a valid array:\", markersData);
                             mapElement.innerHTML = '<p class=\"text-center text-red-500 p-4\">Erreur lors du chargement des données de la carte.</p>';
                        }

                     } catch (error) {
                        console.error(\"Failed to initialize Leaflet map:\", error);
                        mapElement.innerHTML = \"<p style='padding: 20px; text-align: center; color: red;'>Impossible de charger la carte.</p>\";
                     }
                } else {
                    if (!mapElement) console.warn(\"Leaflet map container '#leaflet-map-container' not found.\");
                    if (typeof L === 'undefined') console.error(\"Leaflet library (L) is not loaded. Check your JS imports/scripts in assets/app.js and run Encore.\");
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
        return "public/home/index.html.twig";
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
        return array (  330 => 101,  316 => 90,  312 => 89,  308 => 88,  299 => 81,  297 => 80,  284 => 79,  272 => 76,  267 => 72,  260 => 70,  247 => 69,  245 => 67,  243 => 66,  224 => 65,  219 => 61,  215 => 60,  213 => 59,  210 => 57,  205 => 53,  198 => 51,  185 => 50,  183 => 48,  182 => 47,  180 => 46,  161 => 45,  157 => 42,  153 => 39,  150 => 37,  141 => 29,  139 => 28,  137 => 27,  135 => 26,  132 => 24,  130 => 23,  124 => 18,  122 => 17,  117 => 14,  111 => 11,  108 => 10,  105 => 8,  103 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    {% extends 'base.html.twig' %}

    {% block title %}Accueil - TrottiCare Location{% endblock %}

    {% block body %}
        {# Hero Section #}
        <section class=\"hero-section bg-gradient-to-r from-green-50 to-blue-50 py-16 lg:py-24\"> {# Style .hero-section... #}
            <div class=\"container\">
                <div class=\"hero-text-wrapper max-w-3xl mx-auto text-center\"> {# Style .hero-text-wrapper... #}
                    <h1 class=\"hero-h1 text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6\">
                        {{ heroTitle|default('Location de Trottinettes Électriques') }}
                    </h1>
                    <p class=\"hero-p text-lg md:text-xl text-gray-600 mb-8\">
                        {{ heroSubtitle|default('Découvrez un moyen écologique et pratique de vous déplacer.') }}
                    </p>
                    {# Link to where users start renting or view scooters #}
                    <a href=\"#scooters-nearby\" class=\"button button-hero inline-block\">Voir les trottinettes</a> {# Style .button .button-hero #}
                </div>
            </div>
        </section>

        {# Main Content Area #}
        <main class=\"container main-content-area py-16 lg:py-24\"> {# Style .main-content-area... #}

            {# --- Map Section --- #}
            <section id=\"map-section\" class=\"map-wrapper mb-16 lg:mb-24\"> {# Style .map-wrapper... #}
                <h2 class=\"section-title text-center\">Carte des Trottinettes Disponibles</h2> {# Style .section-title... #}
                <div id=\"leaflet-map-container\" class=\"map-container rounded-lg shadow-lg overflow-hidden\" style=\"height: 450px;\"> {# Style .map-container... #}
                    <div class=\"flex items-center justify-center h-full bg-gray-100 text-gray-500\">
                        Chargement de la carte...
                    </div>
                </div>
                <p class=\"text-center text-sm text-gray-500 mt-4\">
                    <span class=\"inline-block w-3 h-3 rounded-full bg-green-500 mr-1\"></span> Disponible (Bonne charge)
                    <span class=\"inline-block w-3 h-3 rounded-full bg-yellow-500 mr-1 ml-3\"></span> Disponible (Charge moyenne)
                    {# <span class=\"inline-block w-3 h-3 rounded-full bg-red-500 mr-1 ml-3\"></span> Disponible (Charge faible) #}
                </p>
                <p class=\"text-center text-xs text-gray-400 mt-2\">Note: Les emplacements peuvent être approximatifs.</p> {# Add disclaimer due to geocoding #}
            </section>

            {# --- Nearby Scooters Section --- #}
            <section id=\"scooters-nearby\" class=\"mb-16 lg:mb-24\">
                <h2 class=\"section-title text-center\">Trottinettes à proximité</h2>
                <div class=\"scooter-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8\"> {# Style .scooter-grid... #}
                    {% for scooter_data in scooters %}
                        {% include 'scooter/_scooter_card.html.twig' with {
                            'scooter_data': scooter_data,
                            'loop': loop
                         } %}
                    {% else %}
                        <p class=\"text-center text-gray-600 col-span-full\">Aucune trottinette disponible affichée pour le moment.</p>
                    {% endfor %}
                </div>
            </section>

            {# --- Upcoming Events Section --- #}
            <section id=\"upcoming-events\">
                 <div class=\"events-header flex justify-between items-center mb-8\"> {# Style .events-header... #}
                    <h2 class=\"section-title-inline mb-0\">Événements à venir</h2> {# Style .section-title-inline... #}
                    <a href=\"{{ path('public_event_index') }}\"> {# Adjust route #}
                        <button class=\"button button-secondary\">Voir tous les événements</button>
                    </a>
                </div>
                <div class=\"events-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8\"> {# Style .events-grid... #}
                     {% for event_data in upcoming_events %}
                        {% include 'event/_event_card.html.twig' with {
                            'event_data': event_data
                        } %}
                     {% else %}
                        <p class=\"text-center text-gray-600 col-span-full\">Aucun événement à venir programmé.</p>
                     {% endfor %}
                </div>
            </section>

        </main> {# End Main Content Area #}

    {% endblock %}

    {% block javascripts %}
        {# JavaScript for initializing the Leaflet map on this page #}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const mapElement = document.getElementById('leaflet-map-container');
                // Check if Leaflet (L) is loaded (should be via Encore)
                if (mapElement && typeof L !== 'undefined') {
                     try {
                        // --- Initialize Map ---
                        const mapCenterLat = {{ mapCenterLat|default(48.8566) }}; // Default to Paris
                        const mapCenterLng = {{ mapCenterLng|default(2.3522) }};
                        const mapZoom = {{ mapZoom|default(12) }};
                        mapElement.innerHTML = ''; // Clear loading message
                        const map = L.map(mapElement).setView([mapCenterLat, mapCenterLng], mapZoom);

                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OSM</a>',
                            maxZoom: 18,
                        }).addTo(map);

                        // --- Add Markers ---
                        // Controller passes 'markersJson' with lat/lng data
                        const markersData = JSON.parse('{{ markersJson|raw|default(\"[]\") }}');

                        // Function to create custom marker HTML (ensure styles are in CSS)
                        function createCustomIconHtml(colorClass = 'marker-green') {
                            let colorCode = '#22c55e'; // Default green
                            if (colorClass === 'marker-yellow') colorCode = '#eab308';
                            if (colorClass === 'marker-red') colorCode = '#ef4444'; // Example red

                             // More robust SVG icon
                             return `<div class=\"custom-marker-wrapper\">
                                        <svg viewBox=\"0 0 32 46\" width=\"32\" height=\"46\" style=\"overflow: visible;\">
                                          <path d=\"M16 0C7.163 0 0 7.163 0 16c0 8.837 16 30 16 30s16-21.163 16-30C32 7.163 24.837 0 16 0z\" fill=\"\${colorCode}\" stroke=\"#fff\" stroke-width=\"1\"/>
                                          <circle cx=\"16\" cy=\"16\" r=\"7\" fill=\"#fff\"/>
                                          <circle cx=\"16\" cy=\"16\" r=\"4\" fill=\"\${colorCode}\"/>
                                        </svg>
                                      </div>`;
                         }

                        if (Array.isArray(markersData)) {
                            const markers = [];
                            markersData.forEach(data => {
                                 // !!! Check: Only add if lat/lng are present !!!
                                 if (data && typeof data.lat === 'number' && typeof data.lng === 'number') {
                                     const customIcon = L.divIcon({
                                         className: 'custom-leaflet-div-icon', // Base class for potential styling
                                         html: createCustomIconHtml(data.color || 'marker-green'),
                                         iconSize: [32, 46], // Width/Height of the SVG container
                                         iconAnchor: [16, 46], // Point of the marker bottom-center
                                         popupAnchor: [0, -48] // Popup opening point relative to iconAnchor
                                     });

                                    const marker = L.marker([data.lat, data.lng], { icon: customIcon })
                                         .bindPopup(data.popup || 'Trottinette');
                                    markers.push(marker);
                                 }
                            });
                            // Add markers to the map
                             if (markers.length > 0) {
                                 L.layerGroup(markers).addTo(map);
                                 // Optional: Fit map bounds to markers if desired
                                 // map.fitBounds(L.featureGroup(markers).getBounds().pad(0.1));
                             } else {
                                 console.log(\"No valid markers to display.\");
                                 mapElement.innerHTML = '<p class=\"text-center text-gray-500 p-4\">Aucune trottinette trouvée sur la carte.</p>';
                             }
                         } else {
                            console.error(\"markersJson is not a valid array:\", markersData);
                             mapElement.innerHTML = '<p class=\"text-center text-red-500 p-4\">Erreur lors du chargement des données de la carte.</p>';
                        }

                     } catch (error) {
                        console.error(\"Failed to initialize Leaflet map:\", error);
                        mapElement.innerHTML = \"<p style='padding: 20px; text-align: center; color: red;'>Impossible de charger la carte.</p>\";
                     }
                } else {
                    if (!mapElement) console.warn(\"Leaflet map container '#leaflet-map-container' not found.\");
                    if (typeof L === 'undefined') console.error(\"Leaflet library (L) is not loaded. Check your JS imports/scripts in assets/app.js and run Encore.\");
                }
            });
        </script>
    {% endblock %}
", "public/home/index.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/public/home/index.html.twig");
    }
}
