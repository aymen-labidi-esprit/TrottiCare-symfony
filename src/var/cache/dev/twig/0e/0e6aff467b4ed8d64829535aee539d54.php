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

/* admin/dashboard.html.twig */
class __TwigTemplate_9ea4d8fb52dc1b18f0fbc8a21779d23a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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

        yield "Tableau de bord administrateur";
        
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
        yield "<div class=\"container mt-4\">
    <h1 class=\"display-4 mb-4\"><i class=\"fas fa-tachometer-alt me-2\"></i>Tableau de bord administrateur</h1>

    <div class=\"row mb-4\">
        <!-- Total événements -->
        <div class=\"col-md-4\">
            <div class=\"card bg-primary text-white mb-4\" onclick=\"toggleSection('event-section')\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        <h3>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 15, $this->source); })())), "html", null, true);
        yield "</h3>
                        <p>Total des événements</p>
                    </div>
                    <i class=\"fas fa-calendar-alt fa-3x\"></i>
                </div>
                <div class=\"card-footer text-white d-flex justify-content-between\">
                    <span>Voir les détails</span>
                    <i class=\"fas fa-angle-right\"></i>
                </div>
            </div>
        </div>

        <!-- Total participants -->
        <div class=\"col-md-4\">
            <div class=\"card bg-success text-white mb-4\" onclick=\"toggleSection('participant-section')\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        ";
        // line 32
        $context["totalParticipants"] = 0;
        // line 33
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            yield "                            ";
            $context["totalParticipants"] = ((isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 34, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participantCount", [], "any", false, false, false, 34));
            // line 35
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                        <h3>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</h3>
                        <p>Total des participants</p>
                    </div>
                    <i class=\"fas fa-users fa-3x\"></i>
                </div>
                <div class=\"card-footer text-white d-flex justify-content-between\">
                    <span>Voir les détails</span>
                    <i class=\"fas fa-angle-right\"></i>
                </div>
            </div>
        </div>

        <!-- Événements à venir -->
        <div class=\"col-md-4\">
            <div class=\"card bg-warning text-white mb-4\" onclick=\"toggleSection('upcoming-section')\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        ";
        // line 53
        $context["upcomingCount"] = 0;
        // line 54
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 55), "statut", [], "any", false, false, false, 55) == "A_VENIR")) {
                // line 56
                yield "                                ";
                $context["upcomingCount"] = ((isset($context["upcomingCount"]) || array_key_exists("upcomingCount", $context) ? $context["upcomingCount"] : (function () { throw new RuntimeError('Variable "upcomingCount" does not exist.', 56, $this->source); })()) + 1);
                // line 57
                yield "                            ";
            }
            // line 58
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                        <h3>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upcomingCount"]) || array_key_exists("upcomingCount", $context) ? $context["upcomingCount"] : (function () { throw new RuntimeError('Variable "upcomingCount" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "</h3>
                        <p>Événements à venir</p>
                    </div>
                    <i class=\"fas fa-clock fa-3x\"></i>
                </div>
                <div class=\"card-footer text-white d-flex justify-content-between\">
                    <span>Voir les détails</span>
                    <i class=\"fas fa-angle-right\"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION ÉVÉNEMENTS -->
    <div id=\"event-section\" class=\"details-section\">
        <div class=\"card mb-4\">
            <div class=\"card-header\"><i class=\"fas fa-table me-1\"></i> Aperçu des événements</div>
            <div class=\"card-body\">
                <table class=\"table table-bordered table-hover\">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date de début</th>
                            <th>Lieu</th>
                            <th>Statut</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 89, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 90
            yield "                            <tr>
                                <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 91), "titre", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                                <td>";
            // line 92
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 92), "dateDebut", [], "any", false, false, false, 92)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 92), "dateDebut", [], "any", false, false, false, 92), "Y-m-d H:i"), "html", null, true)) : ("Non défini"));
            yield "</td>
                                <td>";
            // line 93
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 93), "lieu", [], "any", false, false, false, 93)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 93), "lieu", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "html", null, true)) : ("Non défini"));
            yield "</td>
                                <td>
                                    ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 95), "statut", [], "any", false, false, false, 95) == "A_VENIR")) {
                // line 96
                yield "                                        <span class=\"badge bg-info\">À venir</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 97
$context["item"], "event", [], "any", false, false, false, 97), "statut", [], "any", false, false, false, 97) == "EN_COURS")) {
                // line 98
                yield "                                        <span class=\"badge bg-success\">En cours</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 99
$context["item"], "event", [], "any", false, false, false, 99), "statut", [], "any", false, false, false, 99) == "TERMINE")) {
                // line 100
                yield "                                        <span class=\"badge bg-secondary\">Terminé</span>
                                    ";
            } else {
                // line 102
                yield "                                        <span class=\"badge bg-danger\">Annulé</span>
                                    ";
            }
            // line 104
            yield "                                </td>
                                <td><span class=\"badge bg-primary\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "participantCount", [], "any", false, false, false, 105), "html", null, true);
            yield "</span></td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\" class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" class=\"btn btn-primary\"><i class=\"fas fa-users\"></i></a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 114
        if (!$context['_iterated']) {
            // line 115
            yield "                            <tr><td colspan=\"6\" class=\"text-center\">Aucun événement trouvé.</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION PARTICIPANTS -->
    <div id=\"participant-section\" class=\"details-section\" style=\"display: none;\">
        <div class=\"card mb-4\">
            <div class=\"card-header\"><i class=\"fas fa-users me-1\"></i> Détails des participants</div>
            <div class=\"card-body\">
                <table class=\"table table-bordered table-hover\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Événement</th>
                            <th>Date d’inscription</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 140, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 141
            yield "                            <tr>
                                <td>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 142), "nom", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>
                                <td>";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 143), "prenom", [], "any", false, false, false, 143), "html", null, true);
            yield "</td>
                                <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 144), "email", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                                <td>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 145), "telephone", [], "any", false, false, false, 145), "html", null, true);
            yield "</td>
                                <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "event", [], "any", false, false, false, 146), "titre", [], "any", false, false, false, 146), "html", null, true);
            yield "</td>
                                <td>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "dateInscription", [], "any", false, false, false, 147), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 149
        if (!$context['_iterated']) {
            // line 150
            yield "                            <tr><td colspan=\"6\" class=\"text-center\">Aucun participant trouvé.</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['participation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION ÉVÉNEMENTS À VENIR -->
    <div id=\"upcoming-section\" class=\"details-section\" style=\"display: none;\">
        <div class=\"card mb-4\">
            <div class=\"card-header\"><i class=\"fas fa-clock me-1\"></i> Événements à venir</div>
            <div class=\"card-body\">
                <ul class=\"list-group\">
                    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 164, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 165
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 165), "statut", [], "any", false, false, false, 165) == "A_VENIR")) {
                // line 166
                yield "                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                ";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 167), "titre", [], "any", false, false, false, 167), "html", null, true);
                yield "
                                <span class=\"badge bg-primary\">";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 168), "dateDebut", [], "any", false, false, false, 168), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                            </li>
                        ";
            }
            // line 171
            yield "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 172
            yield "                        <li class=\"list-group-item text-center\">Aucun événement à venir.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        yield "                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleSection(id) {
        document.querySelectorAll('.details-section').forEach(section => section.style.display = 'none');
        const target = document.getElementById(id);
        if (target) target.style.display = 'block';
    }
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
        return "admin/dashboard.html.twig";
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
        return array (  416 => 174,  409 => 172,  404 => 171,  398 => 168,  394 => 167,  391 => 166,  388 => 165,  383 => 164,  369 => 152,  362 => 150,  360 => 149,  353 => 147,  349 => 146,  345 => 145,  341 => 144,  337 => 143,  333 => 142,  330 => 141,  325 => 140,  300 => 117,  293 => 115,  291 => 114,  282 => 110,  278 => 109,  274 => 108,  268 => 105,  265 => 104,  261 => 102,  257 => 100,  255 => 99,  252 => 98,  250 => 97,  247 => 96,  245 => 95,  240 => 93,  236 => 92,  232 => 91,  229 => 90,  224 => 89,  190 => 59,  184 => 58,  181 => 57,  178 => 56,  175 => 55,  170 => 54,  168 => 53,  147 => 36,  141 => 35,  138 => 34,  133 => 33,  131 => 32,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord administrateur{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"display-4 mb-4\"><i class=\"fas fa-tachometer-alt me-2\"></i>Tableau de bord administrateur</h1>

    <div class=\"row mb-4\">
        <!-- Total événements -->
        <div class=\"col-md-4\">
            <div class=\"card bg-primary text-white mb-4\" onclick=\"toggleSection('event-section')\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        <h3>{{ eventData|length }}</h3>
                        <p>Total des événements</p>
                    </div>
                    <i class=\"fas fa-calendar-alt fa-3x\"></i>
                </div>
                <div class=\"card-footer text-white d-flex justify-content-between\">
                    <span>Voir les détails</span>
                    <i class=\"fas fa-angle-right\"></i>
                </div>
            </div>
        </div>

        <!-- Total participants -->
        <div class=\"col-md-4\">
            <div class=\"card bg-success text-white mb-4\" onclick=\"toggleSection('participant-section')\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        {% set totalParticipants = 0 %}
                        {% for item in eventData %}
                            {% set totalParticipants = totalParticipants + item.participantCount %}
                        {% endfor %}
                        <h3>{{ totalParticipants }}</h3>
                        <p>Total des participants</p>
                    </div>
                    <i class=\"fas fa-users fa-3x\"></i>
                </div>
                <div class=\"card-footer text-white d-flex justify-content-between\">
                    <span>Voir les détails</span>
                    <i class=\"fas fa-angle-right\"></i>
                </div>
            </div>
        </div>

        <!-- Événements à venir -->
        <div class=\"col-md-4\">
            <div class=\"card bg-warning text-white mb-4\" onclick=\"toggleSection('upcoming-section')\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        {% set upcomingCount = 0 %}
                        {% for item in eventData %}
                            {% if item.event.statut == 'A_VENIR' %}
                                {% set upcomingCount = upcomingCount + 1 %}
                            {% endif %}
                        {% endfor %}
                        <h3>{{ upcomingCount }}</h3>
                        <p>Événements à venir</p>
                    </div>
                    <i class=\"fas fa-clock fa-3x\"></i>
                </div>
                <div class=\"card-footer text-white d-flex justify-content-between\">
                    <span>Voir les détails</span>
                    <i class=\"fas fa-angle-right\"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION ÉVÉNEMENTS -->
    <div id=\"event-section\" class=\"details-section\">
        <div class=\"card mb-4\">
            <div class=\"card-header\"><i class=\"fas fa-table me-1\"></i> Aperçu des événements</div>
            <div class=\"card-body\">
                <table class=\"table table-bordered table-hover\">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date de début</th>
                            <th>Lieu</th>
                            <th>Statut</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in eventData %}
                            <tr>
                                <td>{{ item.event.titre }}</td>
                                <td>{{ item.event.dateDebut ? item.event.dateDebut|date('Y-m-d H:i') : 'Non défini' }}</td>
                                <td>{{ item.event.lieu ? item.event.lieu.value : 'Non défini' }}</td>
                                <td>
                                    {% if item.event.statut == 'A_VENIR' %}
                                        <span class=\"badge bg-info\">À venir</span>
                                    {% elseif item.event.statut == 'EN_COURS' %}
                                        <span class=\"badge bg-success\">En cours</span>
                                    {% elseif item.event.statut == 'TERMINE' %}
                                        <span class=\"badge bg-secondary\">Terminé</span>
                                    {% else %}
                                        <span class=\"badge bg-danger\">Annulé</span>
                                    {% endif %}
                                </td>
                                <td><span class=\"badge bg-primary\">{{ item.participantCount }}</span></td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_event_show', {'id': item.event.id}) }}\" class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"{{ path('app_event_edit', {'id': item.event.id}) }}\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"{{ path('app_admin_event_participants', {'id': item.event.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-users\"></i></a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr><td colspan=\"6\" class=\"text-center\">Aucun événement trouvé.</td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION PARTICIPANTS -->
    <div id=\"participant-section\" class=\"details-section\" style=\"display: none;\">
        <div class=\"card mb-4\">
            <div class=\"card-header\"><i class=\"fas fa-users me-1\"></i> Détails des participants</div>
            <div class=\"card-body\">
                <table class=\"table table-bordered table-hover\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Événement</th>
                            <th>Date d’inscription</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for participation in participants %}
                            <tr>
                                <td>{{ participation.utilisateur.nom }}</td>
                                <td>{{ participation.utilisateur.prenom }}</td>
                                <td>{{ participation.utilisateur.email }}</td>
                                <td>{{ participation.utilisateur.telephone }}</td>
                                <td>{{ participation.event.titre }}</td>
                                <td>{{ participation.dateInscription|date('d/m/Y H:i') }}</td>
                            </tr>
                        {% else %}
                            <tr><td colspan=\"6\" class=\"text-center\">Aucun participant trouvé.</td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION ÉVÉNEMENTS À VENIR -->
    <div id=\"upcoming-section\" class=\"details-section\" style=\"display: none;\">
        <div class=\"card mb-4\">
            <div class=\"card-header\"><i class=\"fas fa-clock me-1\"></i> Événements à venir</div>
            <div class=\"card-body\">
                <ul class=\"list-group\">
                    {% for item in eventData %}
                        {% if item.event.statut == 'A_VENIR' %}
                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                {{ item.event.titre }}
                                <span class=\"badge bg-primary\">{{ item.event.dateDebut|date('d/m/Y H:i') }}</span>
                            </li>
                        {% endif %}
                    {% else %}
                        <li class=\"list-group-item text-center\">Aucun événement à venir.</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleSection(id) {
        document.querySelectorAll('.details-section').forEach(section => section.style.display = 'none');
        const target = document.getElementById(id);
        if (target) target.style.display = 'block';
    }
</script>
{% endblock %}

", "admin/dashboard.html.twig", "C:\\Users\\Jamila\\IdeaProjects\\Events\\Events\\templates\\admin\\dashboard.html.twig");
    }
}
