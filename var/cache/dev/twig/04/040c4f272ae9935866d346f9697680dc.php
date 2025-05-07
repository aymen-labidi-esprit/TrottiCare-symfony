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

/* admin/events.html.twig */
class __TwigTemplate_f283d18037e4d9631acee0e5a7c5b3c5 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/events.html.twig", 2);
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

        yield "Gestion des Événements - Admin";
        
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
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
        <div class=\"container mx-auto\">

            ";
        // line 11
        yield "            <div class=\"flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3\">
                <h1 class=\"text-2xl md:text-3xl font-bold text-gray-800\">
                    Gestion des Événements
                </h1>
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_new");
        yield "\" class=\"button button-success inline-flex items-center whitespace-nowrap\">
                    <i class=\"fas fa-plus mr-2\"></i> Nouvel Événement
                </a>
            </div>

            ";
        // line 21
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/events.html.twig", 21);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 22
        yield "
            ";
        // line 24
        yield "            <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
        yield "\" id=\"event-controls-form\" class=\"mb-8 p-4 bg-white rounded-lg shadow space-y-4\">
                ";
        // line 26
        yield "                <div class=\"flex flex-col lg:flex-row gap-4 items-start lg:items-center\">
                    ";
        // line 28
        yield "                    <div class=\"flex-grow w-full lg:w-auto\">
                        <label for=\"search-input\" class=\"sr-only\">Rechercher</label>
                        <div class=\"relative\">
                            ";
        // line 32
        yield "                            <input type=\"search\" id=\"search-input\" name=\"search\" class=\"search-input w-full pr-10\" placeholder=\"Rechercher par titre, description, lieu...\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_term", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 32, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"absolute inset-y-0 right-0 px-3 flex items-center text-gray-400 hover:text-blue-600\" aria-label=\"Rechercher\"> <i class=\"fas fa-search\"></i> </button>
                        </div>
                    </div>
                    ";
        // line 37
        yield "                    <div class=\"flex gap-2 filter-buttons flex-wrap items-center\">
                        <span class=\"text-sm font-medium mr-2\">Filtrer:</span>
                        ";
        // line 40
        yield "                        <button type=\"submit\" name=\"filter\" value=\"all\" class=\"button ";
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 40, $this->source); })()) == "all")) ? ("button-primary") : ("button-secondary"));
        yield "\">Tous</button>
                        ";
        // line 42
        yield "                        <button type=\"submit\" name=\"filter\" value=\"upcoming\" class=\"button ";
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 42, $this->source); })()) == "upcoming")) ? ("button-primary") : ("button-secondary"));
        yield "\">À venir</button>
                        <button type=\"submit\" name=\"filter\" value=\"past\" class=\"button ";
        // line 43
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 43, $this->source); })()) == "past")) ? ("button-primary") : ("button-secondary"));
        yield "\">Passés</button>
                        ";
        // line 45
        yield "                        <button type=\"submit\" name=\"filter\" value=\"a_venir\" class=\"button ";
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 45, $this->source); })()) == "a_venir")) ? ("button-primary") : ("button-secondary"));
        yield "\">A Venir</button>
                        <button type=\"submit\" name=\"filter\" value=\"en_cours\" class=\"button ";
        // line 46
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 46, $this->source); })()) == "en_cours")) ? ("button-primary") : ("button-secondary"));
        yield "\">En Cours</button>
                        <button type=\"submit\" name=\"filter\" value=\"termine\" class=\"button ";
        // line 47
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 47, $this->source); })()) == "termine")) ? ("button-primary") : ("button-secondary"));
        yield "\">Terminé</button>
                        <button type=\"submit\" name=\"filter\" value=\"annule\" class=\"button ";
        // line 48
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 48, $this->source); })()) == "annule")) ? ("button-primary") : ("button-secondary"));
        yield "\">Annulé</button>

                        ";
        // line 51
        yield "                        ";
        // line 52
        yield "                        ";
        // line 53
        yield "                    </div>
                </div>
                ";
        // line 56
        yield "                <div class=\"flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-start\">
                    ";
        // line 58
        yield "                    <div class=\"flex items-center gap-2\">
                        <label for=\"limit-select\" class=\"text-sm font-medium text-gray-700 whitespace-nowrap\">Afficher:</label>
                        <select name=\"limit\" id=\"limit-select\" class=\"form-select rounded-md border-gray-300 shadow-sm\" onchange=\"this.form.submit();\">
                            ";
        // line 61
        $context["limits"] = [5, 10, 20, 50, 100];
        // line 62
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["limits"]) || array_key_exists("limits", $context) ? $context["limits"] : (function () { throw new RuntimeError('Variable "limits" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 63
            yield "                                ";
            // line 64
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["l"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 64, $this->source); })()) == $context["l"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["l"], "html", null, true);
            yield " par page</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                        </select>
                    </div>
                    ";
        // line 69
        yield "                    <div class=\"flex items-center gap-2\">
                        <label for=\"sort-select\" class=\"text-sm font-medium text-gray-700 whitespace-nowrap\">Trier par:</label>
                        <select name=\"sort\" id=\"sort-select\" …>
                            <option value=\"e.dateDebut\" ";
        // line 72
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 72, $this->source); })()) == "e.dateDebut")) ? ("selected") : (""));
        yield ">Date début</option>
                            <option value=\"e.titre\"     ";
        // line 73
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 73, $this->source); })()) == "e.titre")) ? ("selected") : (""));
        yield ">Titre</option>
                            …
                        </select>

                        <select name=\"direction\" id=\"direction-select\" …>
                            <option value=\"asc\"  ";
        // line 78
        yield ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 78, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Asc</option>
                            <option value=\"desc\" ";
        // line 79
        yield ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 79, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Desc</option>
                        </select>
                        ";
        // line 82
        yield "                    </div>
                </div>
            </form>

            ";
        // line 87
        yield "            <div class=\"bg-white shadow-md overflow-x-auto sm:rounded-lg\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                    <tr>
                        ";
        // line 92
        yield "                        ";
        // line 93
        yield "                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            ";
        // line 94
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()), "Titre", "e.titre");
        yield "
                        </th>
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            ";
        // line 97
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 97, $this->source); })()), "Date début", "e.dateDebut");
        yield "
                        </th>
                        ";
        // line 100
        yield "                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            ";
        // line 101
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 101, $this->source); })()), "Min. Autonomie (km)", "autonomie");
        yield " ";
        // line 102
        yield "                        </th>
                        ";
        // line 104
        yield "                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            ";
        // line 105
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 105, $this->source); })()), "Lieu (Gouvernorat)", "lieu");
        yield " ";
        // line 106
        yield "                        </th>
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            ";
        // line 108
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 108, $this->source); })()), "Lieu (Gouvernorat)", "state");
        yield "
                        </th>
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            ";
        // line 111
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 111, $this->source); })()), "Statut", "statut");
        yield "
                        </th>
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            Participants
                        </th>
                        <th scope=\"col\" class=\"relative px-4 py-3\"> <span class=\"sr-only\">Actions</span> </th>
                    </tr>
                    </thead>

                    <tbody class=\"bg-white divide-y divide-gray-200\">
                    ";
        // line 122
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 122, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["event_row"]) {
            yield " ";
            // line 123
            yield "                        ";
            $context["event"] = CoreExtension::getAttribute($this->env, $this->source, $context["event_row"], 0, [], "array", false, false, false, 123);
            yield " ";
            // line 124
            yield "                        ";
            $context["participantCount"] = CoreExtension::getAttribute($this->env, $this->source, $context["event_row"], "participantCount", [], "any", false, false, false, 124);
            yield " ";
            // line 125
            yield "
                        ";
            // line 127
            yield "                        <tr id=\"event-row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127), "html", null, true);
            yield "\" class=\"hover:bg-gray-50\">
                            <td class=\"px-4 py-4 whitespace-nowrap\">
                                <div class=\"text-sm font-medium text-gray-900\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 129, $this->source); })()), "titre", [], "any", false, false, false, 129), "html", null, true);
            yield "</div>
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap\">
                                <div class=\"text-sm text-gray-900\">";
            // line 132
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 132, $this->source); })()), "dateDebut", [], "any", false, false, false, 132)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 132, $this->source); })()), "dateDebut", [], "any", false, false, false, 132), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</div>
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap\">
                                <div class=\"text-sm text-gray-700\">";
            // line 135
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 135, $this->source); })()), "state", [], "any", false, false, false, 135)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 135, $this->source); })()), "state", [], "any", false, false, false, 135), "label", [], "any", false, false, false, 135), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 135, $this->source); })()), "state", [], "any", false, false, false, 135)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 135, $this->source); })()), "state", [], "any", false, false, false, 135), "value", [], "any", false, false, false, 135), "html", null, true)) : ("-"))));
            yield "</div>
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap event-status-cell\">
                                ";
            // line 138
            yield from $this->loadTemplate("admin/event/_status_badge.html.twig", "admin/events.html.twig", 138)->unwrap()->yield(CoreExtension::merge($context, ["status" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 138, $this->source); })()), "statut", [], "any", false, false, false, 138)]));
            // line 139
            yield "                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap text-sm text-center\">
                                ";
            // line 142
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" class=\"text-indigo-600 hover:text-indigo-900\">
                                    ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["participantCount"]) || array_key_exists("participantCount", $context) ? $context["participantCount"] : (function () { throw new RuntimeError('Variable "participantCount" does not exist.', 143, $this->source); })()), "html", null, true);
            yield "
                                </a>
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                ";
            // line 148
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\" class=\"button button-small button-info\" title=\"Voir\">
                                    <i class=\"fas fa-eye\"></i><span class=\"sr-only\"> Voir</span>
                                </a>
                                ";
            // line 152
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\" class=\"button button-small button-warning\" title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i><span class=\"sr-only\"> Modifier</span>
                                </a>
                                ";
            // line 156
            yield "                                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 156, $this->source); })()), "statut", [], "any", false, false, false, 156), ["TERMINE", "ANNULE"])) {
                // line 157
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline-block form-delete-event\" data-event-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157), "html", null, true);
                yield "\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_admin_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"button button-small button-danger\" title=\"Annuler l'événement\">
                                            <i class=\"fas fa-ban\"></i><span class=\"sr-only\"> Annuler</span>
                                        </button>
                                    </form>
                                ";
            }
            // line 164
            yield "                            </td>
                        </tr>
                    ";
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
        // line 166
        if (!$context['_iterated']) {
            // line 167
            yield "                        <tr>
                            <td colspan=\"6\" class=\"px-6 py-12 text-center text-sm text-gray-500\">
                                Aucun événement trouvé ";
            // line 169
            if (((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 169, $this->source); })()) || ((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 169, $this->source); })()) != "all"))) {
                yield " correspondant aux critères actuels";
            }
            yield ".
                                ";
            // line 170
            if (((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 170, $this->source); })()) || ((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 170, $this->source); })()) != "all"))) {
                // line 171
                yield "                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events");
                yield "\" class=\"text-blue-600 hover:underline ml-2\">Voir tous</a>
                                ";
            }
            // line 173
            yield "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event_row'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "                    </tbody>

                </table>
            </div>

            ";
        // line 182
        yield "            ";
        // line 183
        yield "            <div class=\"pagination-controls text-center mt-6\">
                ";
        // line 185
        yield "                ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 185, $this->source); })()));
        yield "

                ";
        // line 188
        yield "                <div class=\"text-sm text-gray-600 mt-2\">
                    ";
        // line 190
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 190, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 190) > 0)) {
            // line 191
            yield "                        ";
            // line 192
            yield "                        ";
            $context["firstItem"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 192, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 192) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 192, $this->source); })()), "getItemNumberPerPage", [], "method", false, false, false, 192)) + 1);
            // line 193
            yield "                        ";
            $context["lastItem"] = (((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 193, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 193, $this->source); })()), "count", [], "any", false, false, false, 193)) - 1);
            // line 194
            yield "
                        ";
            // line 196
            yield "                        Affichage de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstItem"]) || array_key_exists("firstItem", $context) ? $context["firstItem"] : (function () { throw new RuntimeError('Variable "firstItem" does not exist.', 196, $this->source); })()), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastItem"]) || array_key_exists("lastItem", $context) ? $context["lastItem"] : (function () { throw new RuntimeError('Variable "lastItem" does not exist.', 196, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 196, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 196), "html", null, true);
            yield " événement";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 196, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 196) > 1)) ? ("s") : (""));
            yield ".
                    ";
        } else {
            // line 198
            yield "                        ";
            // line 199
            yield "                        ";
            // line 200
            yield "                    ";
        }
        // line 201
        yield "                </div>
            </div>

        </div> ";
        // line 205
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 209
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

        // line 210
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 212
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const handleAdminFormSubmit = async (form, confirmMessage) => {
                if (confirmMessage && !confirm(confirmMessage)) return;

                const submitButton = form.querySelector('button[type=\"submit\"]');
                const originalButtonHtml = submitButton ? submitButton.innerHTML : '';

                if (submitButton) {
                    submitButton.disabled = true;
                    submitButton.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';
                }

                try {
                    const response = await fetch(form.action, {
                        method: form.method,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest', // Crucial for controller detection
                            'Accept': 'application/json', // Expect JSON response
                        },
                        body: new FormData(form)
                    });

                    const contentType = response.headers.get(\"content-type\");
                    if (contentType && contentType.indexOf(\"application/json\") !== -1) {
                        const result = await response.json();
                        if (response.ok && result.success) {
                            console.log('Action successful:', result.message);
                            // Reload the page (simplest)
                            location.reload();
                        } else {
                            console.error('Action failed:', result.error || result.message || `Status \${response.status}`);
                            alert(`Erreur: \${result.error || result.message || 'Action échouée.'}`);
                            if (submitButton) {
                                submitButton.disabled = false;
                                submitButton.innerHTML = originalButtonHtml;
                            }
                        }
                    } else {
                        console.error('Non-JSON response received:', await response.text());
                        alert('Une erreur inattendue est survenue (réponse serveur non JSON).');
                        if (submitButton) {
                            submitButton.disabled = false;
                            submitButton.innerHTML = originalButtonHtml;
                        }
                    }

                } catch (error) {
                    console.error('Fetch error:', error);
                    alert('Une erreur réseau est survenue lors de la tentative d\\'annulation.');
                    if (submitButton) {
                        submitButton.disabled = false;
                        submitButton.innerHTML = originalButtonHtml;
                    }
                }
            };

            document.body.addEventListener('submit', function(e) {
                // Target the form specifically for canceling/deleting
                if (e.target && e.target.classList.contains('form-delete-event')) {
                    e.preventDefault();
                    handleAdminFormSubmit(e.target, 'Êtes-vous sûr de vouloir annuler cet événement ? Cette action ne peut pas être annulée.'); // Updated confirmation message
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 281
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

        // line 282
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 284
        yield "    <style>
        /* Minimal required styles (adapt based on your actual base.css/tailwind config) */
        .search-input { padding: 0.5rem 0.75rem; border: 1px solid #d1d5db; border-radius: 0.375rem; width: 100%; box-shadow: inset 0 1px 2px 0 rgb(0 0 0 / 0.05); }
        .form-select { appearance: none; background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem; padding: 0.5rem 0.75rem; line-height: 1.5; }

        /* Basic Button Styles (Example - reuse from previous) */
        .button { display: inline-block; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; }
        .button-small { padding: 0.25rem 0.5rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Status Badge Styles (reuse from previous) */
        .badge { display: inline-block; padding: 0.25em 0.6em; font-size: 75%; font-weight: 700; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.375rem; }
        .badge-blue { color: #1e40af; background-color: #dbeafe; } /* A_VENIR */
        .badge-green { color: #065f46; background-color: #d1fae5; } /* EN_COURS */
        .badge-gray { color: #374151; background-color: #f3f4f6; } /* TERMINE */
        .badge-red { color: #991b1b; background-color: #fee2e2; } /* ANNULE */
        .badge-default { color: #1f2937; background-color: #e5e7eb; } /* Default/Unknown */

        /* KNP Paginator Styles (Example - reuse from previous) */
        .pagination { display: flex; justify-content: center; padding-left: 0; list-style: none; }
        .page-item { margin: 0 0.125rem; }
        .page-item.disabled .page-link, .page-item.disabled span { color: #6c757d; pointer-events: none; background-color: #fff; border-color: #dee2e6; cursor: not-allowed;}
        .page-item.active .page-link, .page-item.active span { z-index: 3; color: #fff; background-color: #3b82f6; border-color: #3b82f6; }
        .page-link, .page-item span { /* KNP uses spans for disabled/current */
            position: relative; display: block; padding: 0.5rem 0.75rem; line-height: 1.25; color: #3b82f6; background-color: #fff; border: 1px solid #dee2e6; border-radius: 0.25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .page-link:hover { z-index: 2; color: #2563eb; text-decoration: none; background-color: #e9ecef; border-color: #dee2e6; }

        /* KNP Sortable Link Styles (reuse from previous) */
        th a.sortable { color: #4b5563; text-decoration: none; display: inline-block; }
        th a.sortable:hover { color: #1f2937; }
        th a.sortable .fas { margin-left: 0.3em; color: #9ca3af; font-size: 0.8em; } /* Default sort arrow color & size */
        th a.sortable.asc .fa-sort-up, th a.sortable.desc .fa-sort-down { color: #3b82f6; } /* Active sort arrow color */
        th a.sortable .fa-sort { color: #9ca3af; } /* Default unsorted icon */

        /* Spinner (reuse from previous) */
        .fa-spin { animation: fa-spin 1s infinite linear; }
        @keyframes fa-spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

        /* Ensure FontAwesome icons render if used */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-plus:before { content: \"\\2b\"; }
        .fa-search:before { content: \"\\f002\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-ban:before { content: \"\\f05e\"; }
        .fa-eye:before { content: \"\\f06e\"; }
        .fa-spinner:before { content: \"\\f110\"; }
        .fa-sort:before { content: \"\\f0dc\"; }
        .fa-sort-up:before { content: \"\\f0de\"; }
        .fa-sort-down:before { content: \"\\f0dd\"; }

    </style>
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
        return "admin/events.html.twig";
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
        return array (  657 => 284,  652 => 282,  639 => 281,  562 => 212,  557 => 210,  544 => 209,  533 => 205,  528 => 201,  525 => 200,  523 => 199,  521 => 198,  509 => 196,  506 => 194,  503 => 193,  500 => 192,  498 => 191,  495 => 190,  492 => 188,  486 => 185,  483 => 183,  481 => 182,  474 => 176,  466 => 173,  460 => 171,  458 => 170,  452 => 169,  448 => 167,  446 => 166,  432 => 164,  423 => 158,  416 => 157,  413 => 156,  406 => 152,  399 => 148,  392 => 143,  387 => 142,  383 => 139,  381 => 138,  375 => 135,  369 => 132,  363 => 129,  357 => 127,  354 => 125,  350 => 124,  346 => 123,  326 => 122,  313 => 111,  307 => 108,  303 => 106,  300 => 105,  297 => 104,  294 => 102,  291 => 101,  288 => 100,  283 => 97,  277 => 94,  274 => 93,  272 => 92,  266 => 87,  260 => 82,  255 => 79,  251 => 78,  243 => 73,  239 => 72,  234 => 69,  230 => 66,  217 => 64,  215 => 63,  210 => 62,  208 => 61,  203 => 58,  200 => 56,  196 => 53,  194 => 52,  192 => 51,  187 => 48,  183 => 47,  179 => 46,  174 => 45,  170 => 43,  165 => 42,  160 => 40,  156 => 37,  148 => 32,  143 => 28,  140 => 26,  135 => 24,  132 => 22,  121 => 21,  113 => 15,  107 => 11,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/events.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Événements - Admin{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6\">
        <div class=\"container mx-auto\">

            {# Page Header & New Button #}
            <div class=\"flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3\">
                <h1 class=\"text-2xl md:text-3xl font-bold text-gray-800\">
                    Gestion des Événements
                </h1>
                <a href=\"{{ path('app_admin_event_new') }}\" class=\"button button-success inline-flex items-center whitespace-nowrap\">
                    <i class=\"fas fa-plus mr-2\"></i> Nouvel Événement
                </a>
            </div>

            {# Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# Controls Form - Passes ALL current parameters to retain state #}
            <form method=\"get\" action=\"{{ path('app_admin_events') }}\" id=\"event-controls-form\" class=\"mb-8 p-4 bg-white rounded-lg shadow space-y-4\">
                {# Row 1: Search and Filters #}
                <div class=\"flex flex-col lg:flex-row gap-4 items-start lg:items-center\">
                    {# Search Input #}
                    <div class=\"flex-grow w-full lg:w-auto\">
                        <label for=\"search-input\" class=\"sr-only\">Rechercher</label>
                        <div class=\"relative\">
                            {# Use search_term passed from controller #}
                            <input type=\"search\" id=\"search-input\" name=\"search\" class=\"search-input w-full pr-10\" placeholder=\"Rechercher par titre, description, lieu...\" value=\"{{ search_term|default('') }}\">
                            <button type=\"submit\" class=\"absolute inset-y-0 right-0 px-3 flex items-center text-gray-400 hover:text-blue-600\" aria-label=\"Rechercher\"> <i class=\"fas fa-search\"></i> </button>
                        </div>
                    </div>
                    {# Filter Buttons #}
                    <div class=\"flex gap-2 filter-buttons flex-wrap items-center\">
                        <span class=\"text-sm font-medium mr-2\">Filtrer:</span>
                        {# Use current_filter passed from controller to highlight active button #}
                        <button type=\"submit\" name=\"filter\" value=\"all\" class=\"button {{ current_filter == 'all' ? 'button-primary' : 'button-secondary' }}\">Tous</button>
                        {# Date Filters #}
                        <button type=\"submit\" name=\"filter\" value=\"upcoming\" class=\"button {{ current_filter == 'upcoming' ? 'button-primary' : 'button-secondary' }}\">À venir</button>
                        <button type=\"submit\" name=\"filter\" value=\"past\" class=\"button {{ current_filter == 'past' ? 'button-primary' : 'button-secondary' }}\">Passés</button>
                        {# Status Filters - ensure values match controller logic (lowercase) #}
                        <button type=\"submit\" name=\"filter\" value=\"a_venir\" class=\"button {{ current_filter == 'a_venir' ? 'button-primary' : 'button-secondary' }}\">A Venir</button>
                        <button type=\"submit\" name=\"filter\" value=\"en_cours\" class=\"button {{ current_filter == 'en_cours' ? 'button-primary' : 'button-secondary' }}\">En Cours</button>
                        <button type=\"submit\" name=\"filter\" value=\"termine\" class=\"button {{ current_filter == 'termine' ? 'button-primary' : 'button-secondary' }}\">Terminé</button>
                        <button type=\"submit\" name=\"filter\" value=\"annule\" class=\"button {{ current_filter == 'annule' ? 'button-primary' : 'button-secondary' }}\">Annulé</button>

                        {# Optional: Location (Gouvernorat) Filter Dropdown #}
                        {# You would need to pass 'gouvernorat_cases' from the controller #}
                        {# <select name=\"filter\" class=\"form-select rounded-md border-gray-300 shadow-sm ml-2\" onchange=\"this.form.submit();\"> ... </select> #}
                    </div>
                </div>
                {# Row 2: Sorting and Per Page #}
                <div class=\"flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-start\">
                    {# Per Page Dropdown #}
                    <div class=\"flex items-center gap-2\">
                        <label for=\"limit-select\" class=\"text-sm font-medium text-gray-700 whitespace-nowrap\">Afficher:</label>
                        <select name=\"limit\" id=\"limit-select\" class=\"form-select rounded-md border-gray-300 shadow-sm\" onchange=\"this.form.submit();\">
                            {% set limits = [5, 10, 20, 50, 100] %}
                            {% for l in limits %}
                                {# Use limit passed from controller #}
                                <option value=\"{{ l }}\" {{ limit == l ? 'selected' : '' }}>{{ l }} par page</option>
                            {% endfor %}
                        </select>
                    </div>
                    {# Sort Order Dropdown #}
                    <div class=\"flex items-center gap-2\">
                        <label for=\"sort-select\" class=\"text-sm font-medium text-gray-700 whitespace-nowrap\">Trier par:</label>
                        <select name=\"sort\" id=\"sort-select\" …>
                            <option value=\"e.dateDebut\" {{ sort == 'e.dateDebut' ? 'selected' }}>Date début</option>
                            <option value=\"e.titre\"     {{ sort == 'e.titre'     ? 'selected' }}>Titre</option>
                            …
                        </select>

                        <select name=\"direction\" id=\"direction-select\" …>
                            <option value=\"asc\"  {{ direction == 'asc'  ? 'selected' }}>Asc</option>
                            <option value=\"desc\" {{ direction == 'desc' ? 'selected' }}>Desc</option>
                        </select>
                        {# KNP handles direction via separate URL param, usually no user control needed #}
                    </div>
                </div>
            </form>

            {# Events Table #}
            <div class=\"bg-white shadow-md overflow-x-auto sm:rounded-lg\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                    <tr>
                        {# Use KNP Pagination sortable links #}
                        {# Third arg is the sort KEY used by KNP (matching controller's sortMapping keys) #}
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            {{ knp_pagination_sortable(pagination,'Titre','e.titre') }}
                        </th>
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            {{ knp_pagination_sortable(pagination,'Date début','e.dateDebut') }}
                        </th>
                        {# --- CORRECTED Autonomie Header --- #}
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            {{ knp_pagination_sortable(pagination, 'Min. Autonomie (km)', 'autonomie') }} {# Use key 'autonomie' #}
                        </th>
                        {# --- CORRECTED State Header (if sorting by label) --- #}
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            {{ knp_pagination_sortable(pagination, 'Lieu (Gouvernorat)', 'lieu') }} {# Use key 'lieu' #}
                        </th>
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            {{ knp_pagination_sortable(pagination, 'Lieu (Gouvernorat)', 'state') }}
                        </th>
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            {{ knp_pagination_sortable(pagination, 'Statut', 'statut') }}
                        </th>
                        <th scope=\"col\" class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                            Participants
                        </th>
                        <th scope=\"col\" class=\"relative px-4 py-3\"> <span class=\"sr-only\">Actions</span> </th>
                    </tr>
                    </thead>

                    <tbody class=\"bg-white divide-y divide-gray-200\">
                    {# Loop through paginated results (pagination object) #}
                    {% for event_row in pagination %} {# Changed loop variable name for clarity #}
                        {% set event = event_row[0] %} {# Extract the Event entity #}
                        {% set participantCount = event_row.participantCount %} {# Extract the count #}

                        {# Now use 'event' which holds the actual Event entity #}
                        <tr id=\"event-row-{{ event.id }}\" class=\"hover:bg-gray-50\">
                            <td class=\"px-4 py-4 whitespace-nowrap\">
                                <div class=\"text-sm font-medium text-gray-900\">{{ event.titre }}</div>
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap\">
                                <div class=\"text-sm text-gray-900\">{{ event.dateDebut ? event.dateDebut|date('d/m/Y H:i') : '-' }}</div>
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap\">
                                <div class=\"text-sm text-gray-700\">{{ event.state ? event.state.label : (event.state ? event.state.value : '-') }}</div>
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap event-status-cell\">
                                {% include 'admin/event/_status_badge.html.twig' with {'status': event.statut} %}
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap text-sm text-center\">
                                {# Use the pre-calculated participant count #}
                                <a href=\"{{ path('app_admin_event_participants', {id: event.id}) }}\" class=\"text-indigo-600 hover:text-indigo-900\">
                                    {{ participantCount }}
                                </a>
                            </td>
                            <td class=\"px-4 py-4 whitespace-nowrap text-right text-sm font-medium space-x-1\">
                                {# Show Button #}
                                <a href=\"{{ path('app_admin_event_show', {id: event.id}) }}\" class=\"button button-small button-info\" title=\"Voir\">
                                    <i class=\"fas fa-eye\"></i><span class=\"sr-only\"> Voir</span>
                                </a>
                                {# Edit Button #}
                                <a href=\"{{ path('app_admin_event_edit', {id: event.id}) }}\" class=\"button button-small button-warning\" title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i><span class=\"sr-only\"> Modifier</span>
                                </a>
                                {# Cancel Button #}
                                {% if event.statut not in ['TERMINE', 'ANNULE'] %}
                                    <form action=\"{{ path('app_admin_event_delete', {id: event.id}) }}\" method=\"post\" class=\"inline-block form-delete-event\" data-event-id=\"{{ event.id }}\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_admin_' ~ event.id) }}\">
                                        <button type=\"submit\" class=\"button button-small button-danger\" title=\"Annuler l'événement\">
                                            <i class=\"fas fa-ban\"></i><span class=\"sr-only\"> Annuler</span>
                                        </button>
                                    </form>
                                {% endif %}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"px-6 py-12 text-center text-sm text-gray-500\">
                                Aucun événement trouvé {% if search_term or current_filter != 'all' %} correspondant aux critères actuels{% endif %}.
                                {% if search_term or current_filter != 'all' %}
                                    <a href=\"{{ path('app_admin_events') }}\" class=\"text-blue-600 hover:underline ml-2\">Voir tous</a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>

                </table>
            </div>

            {# Pagination Controls - Render the KNP Paginator controls #}
            {# Pagination Controls - Render the KNP Paginator controls #}
            <div class=\"pagination-controls text-center mt-6\">
                {# Render the actual pagination links #}
                {{ knp_pagination_render(pagination) }}

                {# Display item counts from pagination object #}
                <div class=\"text-sm text-gray-600 mt-2\">
                    {# Check if there are any items to display #}
                    {% if pagination.getTotalItemCount > 0 %}
                        {# Calculate first and last item numbers for the current page #}
                        {% set firstItem = (pagination.getCurrentPageNumber() - 1) * pagination.getItemNumberPerPage() + 1 %}
                        {% set lastItem = firstItem + pagination.count - 1 %}

                        {# Display the calculated range and total count #}
                        Affichage de {{ firstItem }} à {{ lastItem }} sur {{ pagination.getTotalItemCount }} événement{{ pagination.getTotalItemCount > 1 ? 's' : '' }}.
                    {% else %}
                        {# Optional: Message when no items are found #}
                        {# Aucun événement à afficher. #}
                    {% endif %}
                </div>
            </div>

        </div> {# End container #}
    </div> {# End page wrapper #}
{% endblock %}


{% block javascripts %}
    {{ parent() }}
    {# Use the same AJAX JS as before for handling delete/cancel form #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const handleAdminFormSubmit = async (form, confirmMessage) => {
                if (confirmMessage && !confirm(confirmMessage)) return;

                const submitButton = form.querySelector('button[type=\"submit\"]');
                const originalButtonHtml = submitButton ? submitButton.innerHTML : '';

                if (submitButton) {
                    submitButton.disabled = true;
                    submitButton.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';
                }

                try {
                    const response = await fetch(form.action, {
                        method: form.method,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest', // Crucial for controller detection
                            'Accept': 'application/json', // Expect JSON response
                        },
                        body: new FormData(form)
                    });

                    const contentType = response.headers.get(\"content-type\");
                    if (contentType && contentType.indexOf(\"application/json\") !== -1) {
                        const result = await response.json();
                        if (response.ok && result.success) {
                            console.log('Action successful:', result.message);
                            // Reload the page (simplest)
                            location.reload();
                        } else {
                            console.error('Action failed:', result.error || result.message || `Status \${response.status}`);
                            alert(`Erreur: \${result.error || result.message || 'Action échouée.'}`);
                            if (submitButton) {
                                submitButton.disabled = false;
                                submitButton.innerHTML = originalButtonHtml;
                            }
                        }
                    } else {
                        console.error('Non-JSON response received:', await response.text());
                        alert('Une erreur inattendue est survenue (réponse serveur non JSON).');
                        if (submitButton) {
                            submitButton.disabled = false;
                            submitButton.innerHTML = originalButtonHtml;
                        }
                    }

                } catch (error) {
                    console.error('Fetch error:', error);
                    alert('Une erreur réseau est survenue lors de la tentative d\\'annulation.');
                    if (submitButton) {
                        submitButton.disabled = false;
                        submitButton.innerHTML = originalButtonHtml;
                    }
                }
            };

            document.body.addEventListener('submit', function(e) {
                // Target the form specifically for canceling/deleting
                if (e.target && e.target.classList.contains('form-delete-event')) {
                    e.preventDefault();
                    handleAdminFormSubmit(e.target, 'Êtes-vous sûr de vouloir annuler cet événement ? Cette action ne peut pas être annulée.'); // Updated confirmation message
                }
            });
        });
    </script>
{% endblock %}


{% block stylesheets %}
    {{ parent() }}
    {# Ensure required CSS is included or defined here #}
    <style>
        /* Minimal required styles (adapt based on your actual base.css/tailwind config) */
        .search-input { padding: 0.5rem 0.75rem; border: 1px solid #d1d5db; border-radius: 0.375rem; width: 100%; box-shadow: inset 0 1px 2px 0 rgb(0 0 0 / 0.05); }
        .form-select { appearance: none; background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\"); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem; padding: 0.5rem 0.75rem; line-height: 1.5; }

        /* Basic Button Styles (Example - reuse from previous) */
        .button { display: inline-block; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; }
        .button-small { padding: 0.25rem 0.5rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-danger { background-color: #ef4444; color: white; border-color: #ef4444; } .button-danger:hover { background-color: #dc2626; border-color: #b91c1c; }
        .button-info { background-color: #0ea5e9; color: white; border-color: #0ea5e9; } .button-info:hover { background-color: #0284c7; border-color: #0369a1; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* Status Badge Styles (reuse from previous) */
        .badge { display: inline-block; padding: 0.25em 0.6em; font-size: 75%; font-weight: 700; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.375rem; }
        .badge-blue { color: #1e40af; background-color: #dbeafe; } /* A_VENIR */
        .badge-green { color: #065f46; background-color: #d1fae5; } /* EN_COURS */
        .badge-gray { color: #374151; background-color: #f3f4f6; } /* TERMINE */
        .badge-red { color: #991b1b; background-color: #fee2e2; } /* ANNULE */
        .badge-default { color: #1f2937; background-color: #e5e7eb; } /* Default/Unknown */

        /* KNP Paginator Styles (Example - reuse from previous) */
        .pagination { display: flex; justify-content: center; padding-left: 0; list-style: none; }
        .page-item { margin: 0 0.125rem; }
        .page-item.disabled .page-link, .page-item.disabled span { color: #6c757d; pointer-events: none; background-color: #fff; border-color: #dee2e6; cursor: not-allowed;}
        .page-item.active .page-link, .page-item.active span { z-index: 3; color: #fff; background-color: #3b82f6; border-color: #3b82f6; }
        .page-link, .page-item span { /* KNP uses spans for disabled/current */
            position: relative; display: block; padding: 0.5rem 0.75rem; line-height: 1.25; color: #3b82f6; background-color: #fff; border: 1px solid #dee2e6; border-radius: 0.25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
        .page-link:hover { z-index: 2; color: #2563eb; text-decoration: none; background-color: #e9ecef; border-color: #dee2e6; }

        /* KNP Sortable Link Styles (reuse from previous) */
        th a.sortable { color: #4b5563; text-decoration: none; display: inline-block; }
        th a.sortable:hover { color: #1f2937; }
        th a.sortable .fas { margin-left: 0.3em; color: #9ca3af; font-size: 0.8em; } /* Default sort arrow color & size */
        th a.sortable.asc .fa-sort-up, th a.sortable.desc .fa-sort-down { color: #3b82f6; } /* Active sort arrow color */
        th a.sortable .fa-sort { color: #9ca3af; } /* Default unsorted icon */

        /* Spinner (reuse from previous) */
        .fa-spin { animation: fa-spin 1s infinite linear; }
        @keyframes fa-spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

        /* Ensure FontAwesome icons render if used */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-plus:before { content: \"\\2b\"; }
        .fa-search:before { content: \"\\f002\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-ban:before { content: \"\\f05e\"; }
        .fa-eye:before { content: \"\\f06e\"; }
        .fa-spinner:before { content: \"\\f110\"; }
        .fa-sort:before { content: \"\\f0dc\"; }
        .fa-sort-up:before { content: \"\\f0de\"; }
        .fa-sort-down:before { content: \"\\f0dd\"; }

    </style>
{% endblock %}", "admin/events.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/events.html.twig");
    }
}
