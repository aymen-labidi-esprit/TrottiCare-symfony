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

/* maintenance/calendar.html.twig */
class __TwigTemplate_75d7fc17995b408d23bf48966f9016d3 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/calendar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/calendar.html.twig", 2);
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

        yield "Calendrier des Maintenances - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/main.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/main.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.11/main.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.11/main.min.css' rel='stylesheet' />
    ";
        // line 15
        yield "
    <style>
        /* Basic styling for the calendar container and modal */
        #maintenance-calendar-container {
            height: 85vh; /* Make calendar take most of the viewport height */
            width: 100%;
        }
        /* Adjust FullCalendar default styles if needed */
        .fc-event { cursor: pointer; border-width: 1px; } /* Make events clickable */
        .fc-daygrid-event { white-space: normal !important; /* Allow text wrapping */ }

        /* Simple Modal Styling (Tailwind Example) */
        #eventDetailModal { display: none; /* Hidden by default */ }
        #eventDetailModal.is-open { display: flex; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
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

        // line 33
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
        <div class=\"container mx-auto\">

            ";
        // line 37
        yield "            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-6 gap-3\">
                <h1 class=\"text-2xl md:text-3xl font-bold text-gray-800 flex items-center\">
                    <i class=\"fas fa-calendar-alt mr-2 text-blue-600\"></i>Calendrier des Maintenances
                </h1>
                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance_index");
        yield "\" class=\"button button-secondary button-sm\">
                    <i class=\"fas fa-arrow-left mr-1.5\"></i> Retour à la liste
                </a>
            </div>

            ";
        // line 47
        yield "            <div class=\"bg-white rounded-lg shadow-md p-4 border border-gray-200\">
                <div id=\"maintenance-calendar-container\">
                    <div id=\"maintenance-calendar\">
                        ";
        // line 51
        yield "                        <div class=\"text-center text-gray-500 p-10\">Chargement du calendrier...</div>
                    </div>
                </div>
            </div>

        </div> ";
        // line 57
        yield "    </div> ";
        // line 58
        yield "
    ";
        // line 60
        yield "    <div id=\"eventDetailModal\" class=\"fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full justify-center items-center z-50\">
        <div class=\"relative mx-auto p-5 border w-full max-w-md shadow-lg rounded-md bg-white\">
            <div class=\"mt-3 text-center\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\" id=\"modalTitle\">Détails Maintenance</h3>
                <div class=\"mt-2 px-7 py-3 text-left text-sm text-gray-700 space-y-2\">
                    <p><strong>Trottinette:</strong> <span id=\"modalTrottinette\"></span></p>
                    <p><strong>Description:</strong> <span id=\"modalDescription\"></span></p>
                    <p><strong>Début:</strong> <span id=\"modalStartDate\"></span></p>
                    <p><strong>Fin:</strong> <span id=\"modalEndDate\"></span></p>
                    <p><strong>Statut:</strong> <span id=\"modalStatus\"></span></p>
                </div>
                <div class=\"items-center px-4 py-3\">
                    <a href=\"#\" id=\"modalDetailsLink\" class=\"button button-primary button-sm mr-2\">Voir Détails</a>
                    <button id=\"closeModalButton\" class=\"button button-secondary button-sm\">
                        Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 81
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 87
        yield "    ";
        // line 88
        yield "    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.11/index.global.min.js'></script> ";
        // line 90
        yield "    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/locales/fr.global.min.js'></script> ";
        // line 94
        yield "    ";
        // line 95
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('maintenance-calendar');
            const modal = document.getElementById('eventDetailModal');
            const closeModalButton = document.getElementById('closeModalButton');
            const modalTitle = document.getElementById('modalTitle');
            const modalTrottinette = document.getElementById('modalTrottinette');
            const modalDescription = document.getElementById('modalDescription');
            const modalStartDate = document.getElementById('modalStartDate');
            const modalEndDate = document.getElementById('modalEndDate');
            const modalStatus = document.getElementById('modalStatus');
            const modalDetailsLink = document.getElementById('modalDetailsLink');

            // Hide modal initially
            modal.style.display = 'none';

            // Close modal functionality
            const closeModal = () => { modal.style.display = 'none'; };
            closeModalButton.addEventListener('click', closeModal);
            modal.addEventListener('click', function(event) {
                // Close if clicked outside the modal content
                if (event.target === modal) {
                    closeModal();
                }
            });

            // Get data passed from controller
            try {
                const maintenanceEvents = ";
        // line 124
        yield json_encode((isset($context["calendarEvents"]) || array_key_exists("calendarEvents", $context) ? $context["calendarEvents"] : (function () { throw new RuntimeError('Variable "calendarEvents" does not exist.', 124, $this->source); })()));
        yield ";

                const calendar = new FullCalendar.Calendar(calendarEl, {
                    locale: 'fr', // Set French locale
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek' // Different views
                    },
                    initialView: 'dayGridMonth', // Start with month view
                    editable: false, // Don't allow dragging/resizing in this view
                    selectable: false, // Don't allow selecting date ranges
                    navLinks: true, // Allow clicking day/week names to navigate views
                    dayMaxEvents: true, // Allow \"more\" link when too many events
                    events: maintenanceEvents, // Load events from controller data

                    eventClick: function(info) {
                        info.jsEvent.preventDefault(); // Don't follow the URL directly if one exists

                        const props = info.event.extendedProps;
                        const start = info.event.start ? info.event.start.toLocaleString('fr-FR', {dateStyle: 'short', timeStyle: 'short'}) : 'N/A';

                        // Populate modal
                        modalTitle.textContent = `Maintenance #\${info.event.id}`;
                        modalTrottinette.textContent = `\${props.trottinetteModele || '?'} (\${props.trottinetteNumeroSerie || 'N/A'})` ;
                        modalDescription.textContent = props.description || 'Aucune';
                        modalStartDate.textContent = start;
                        modalEndDate.textContent = props.dateFinFormatted || 'En cours';
                        modalStatus.textContent = props.statut ? props.statut.replace('_', ' ') : 'Inconnu';
                        modalDetailsLink.href = props.detailsUrl || '#'; // Set the details link URL

                        // Show modal
                        modal.style.display = 'flex';
                    },

                    // Optional: Customize event rendering further if needed
                    eventContent: function(arg) {
                        // Customize how event title appears in grid views
                        let italicEl = document.createElement('i');
                        italicEl.innerHTML = arg.event.title; // Title from controller

                        let arrayOfDomNodes = [ italicEl ];
                        // You could add more info here for timegrid views etc.
                        // Example: if (arg.view.type === 'timeGridWeek') { ... }
                        return { domNodes: arrayOfDomNodes }
                    }
                });

                calendar.render();
                // Handle window resize to reflow calendar
                window.addEventListener('resize', () => calendar.updateSize());

            } catch (e) {
                console.error(\"Error parsing maintenance events JSON or initializing calendar:\", e);
                calendarEl.innerHTML = '<p class=\"text-red-500 text-center p-10\">Erreur lors du chargement du calendrier.</p>';
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
        return "maintenance/calendar.html.twig";
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
        return array (  284 => 124,  253 => 95,  251 => 94,  246 => 90,  243 => 88,  241 => 87,  236 => 85,  223 => 84,  211 => 81,  189 => 60,  186 => 58,  184 => 57,  177 => 51,  172 => 47,  164 => 41,  158 => 37,  153 => 33,  140 => 32,  114 => 15,  107 => 9,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/maintenance/calendar.html.twig #}
{% extends 'base.html.twig' %} {# Use your admin base template #}

{% block title %}Calendrier des Maintenances - Admin{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# --- FullCalendar CSS (CDN Example) --- #}
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/main.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/main.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.11/main.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.11/main.min.css' rel='stylesheet' />
    {# --- End FullCalendar CSS --- #}

    <style>
        /* Basic styling for the calendar container and modal */
        #maintenance-calendar-container {
            height: 85vh; /* Make calendar take most of the viewport height */
            width: 100%;
        }
        /* Adjust FullCalendar default styles if needed */
        .fc-event { cursor: pointer; border-width: 1px; } /* Make events clickable */
        .fc-daygrid-event { white-space: normal !important; /* Allow text wrapping */ }

        /* Simple Modal Styling (Tailwind Example) */
        #eventDetailModal { display: none; /* Hidden by default */ }
        #eventDetailModal.is-open { display: flex; }
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
        <div class=\"container mx-auto\">

            {# Header with Title and Back Button #}
            <div class=\"flex flex-col sm:flex-row justify-between items-center mb-6 gap-3\">
                <h1 class=\"text-2xl md:text-3xl font-bold text-gray-800 flex items-center\">
                    <i class=\"fas fa-calendar-alt mr-2 text-blue-600\"></i>Calendrier des Maintenances
                </h1>
                <a href=\"{{ path('admin_maintenance_index') }}\" class=\"button button-secondary button-sm\">
                    <i class=\"fas fa-arrow-left mr-1.5\"></i> Retour à la liste
                </a>
            </div>

            {# Calendar Container #}
            <div class=\"bg-white rounded-lg shadow-md p-4 border border-gray-200\">
                <div id=\"maintenance-calendar-container\">
                    <div id=\"maintenance-calendar\">
                        {# Calendar will be rendered here by JS #}
                        <div class=\"text-center text-gray-500 p-10\">Chargement du calendrier...</div>
                    </div>
                </div>
            </div>

        </div> {# End Container #}
    </div> {# End Page Wrapper #}

    {# --- Modal for Event Details (Tailwind Example) --- #}
    <div id=\"eventDetailModal\" class=\"fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full justify-center items-center z-50\">
        <div class=\"relative mx-auto p-5 border w-full max-w-md shadow-lg rounded-md bg-white\">
            <div class=\"mt-3 text-center\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\" id=\"modalTitle\">Détails Maintenance</h3>
                <div class=\"mt-2 px-7 py-3 text-left text-sm text-gray-700 space-y-2\">
                    <p><strong>Trottinette:</strong> <span id=\"modalTrottinette\"></span></p>
                    <p><strong>Description:</strong> <span id=\"modalDescription\"></span></p>
                    <p><strong>Début:</strong> <span id=\"modalStartDate\"></span></p>
                    <p><strong>Fin:</strong> <span id=\"modalEndDate\"></span></p>
                    <p><strong>Statut:</strong> <span id=\"modalStatus\"></span></p>
                </div>
                <div class=\"items-center px-4 py-3\">
                    <a href=\"#\" id=\"modalDetailsLink\" class=\"button button-primary button-sm mr-2\">Voir Détails</a>
                    <button id=\"closeModalButton\" class=\"button button-secondary button-sm\">
                        Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>
    {# --- End Modal --- #}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# --- FullCalendar JS (CDN Example) --- #}
    {# Make sure Core is first #}
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.11/index.global.min.js'></script> {# Needed for clicking/selecting #}
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/locales/fr.global.min.js'></script> {# French locale #}
    {# --- End FullCalendar JS --- #}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('maintenance-calendar');
            const modal = document.getElementById('eventDetailModal');
            const closeModalButton = document.getElementById('closeModalButton');
            const modalTitle = document.getElementById('modalTitle');
            const modalTrottinette = document.getElementById('modalTrottinette');
            const modalDescription = document.getElementById('modalDescription');
            const modalStartDate = document.getElementById('modalStartDate');
            const modalEndDate = document.getElementById('modalEndDate');
            const modalStatus = document.getElementById('modalStatus');
            const modalDetailsLink = document.getElementById('modalDetailsLink');

            // Hide modal initially
            modal.style.display = 'none';

            // Close modal functionality
            const closeModal = () => { modal.style.display = 'none'; };
            closeModalButton.addEventListener('click', closeModal);
            modal.addEventListener('click', function(event) {
                // Close if clicked outside the modal content
                if (event.target === modal) {
                    closeModal();
                }
            });

            // Get data passed from controller
            try {
                const maintenanceEvents = {{ calendarEvents|json_encode|raw }};

                const calendar = new FullCalendar.Calendar(calendarEl, {
                    locale: 'fr', // Set French locale
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek' // Different views
                    },
                    initialView: 'dayGridMonth', // Start with month view
                    editable: false, // Don't allow dragging/resizing in this view
                    selectable: false, // Don't allow selecting date ranges
                    navLinks: true, // Allow clicking day/week names to navigate views
                    dayMaxEvents: true, // Allow \"more\" link when too many events
                    events: maintenanceEvents, // Load events from controller data

                    eventClick: function(info) {
                        info.jsEvent.preventDefault(); // Don't follow the URL directly if one exists

                        const props = info.event.extendedProps;
                        const start = info.event.start ? info.event.start.toLocaleString('fr-FR', {dateStyle: 'short', timeStyle: 'short'}) : 'N/A';

                        // Populate modal
                        modalTitle.textContent = `Maintenance #\${info.event.id}`;
                        modalTrottinette.textContent = `\${props.trottinetteModele || '?'} (\${props.trottinetteNumeroSerie || 'N/A'})` ;
                        modalDescription.textContent = props.description || 'Aucune';
                        modalStartDate.textContent = start;
                        modalEndDate.textContent = props.dateFinFormatted || 'En cours';
                        modalStatus.textContent = props.statut ? props.statut.replace('_', ' ') : 'Inconnu';
                        modalDetailsLink.href = props.detailsUrl || '#'; // Set the details link URL

                        // Show modal
                        modal.style.display = 'flex';
                    },

                    // Optional: Customize event rendering further if needed
                    eventContent: function(arg) {
                        // Customize how event title appears in grid views
                        let italicEl = document.createElement('i');
                        italicEl.innerHTML = arg.event.title; // Title from controller

                        let arrayOfDomNodes = [ italicEl ];
                        // You could add more info here for timegrid views etc.
                        // Example: if (arg.view.type === 'timeGridWeek') { ... }
                        return { domNodes: arrayOfDomNodes }
                    }
                });

                calendar.render();
                // Handle window resize to reflow calendar
                window.addEventListener('resize', () => calendar.updateSize());

            } catch (e) {
                console.error(\"Error parsing maintenance events JSON or initializing calendar:\", e);
                calendarEl.innerHTML = '<p class=\"text-red-500 text-center p-10\">Erreur lors du chargement du calendrier.</p>';
            }
        });
    </script>
{% endblock %}
", "maintenance/calendar.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/maintenance/calendar.html.twig");
    }
}
