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

/* admin/utilisateur/show.html.twig */
class __TwigTemplate_5f08f0d864d9db9ac6155d7a4a8e9df8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/utilisateur/show.html.twig", 2);
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

        // line 5
        yield "    Utilisateur : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 5, $this->source); })()), "prenom", [], "any", false, false, false, 5), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .status-badge {
            padding: 0.25em 0.6em; border-radius: 9999px; /* pill */
            font-size: 0.75rem; /* text-sm */ font-weight: 500; /* font-medium */
            text-transform: uppercase; letter-spacing: 0.05em;
            white-space: nowrap; line-height: 1;
        }
        .badge-green { background-color: #dcfce7; color: #166534; } /* green */
        .badge-red { background-color: #fee2e2; color: #991b1b; } /* red */
        .badge-yellow { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .badge-gray { background-color: #f3f4f6; color: #374151; } /* gray */
        .badge-blue { background-color: #dbeafe; color: #1e40af; } /* blue */
        .badge-indigo { background-color: #e0e7ff; color: #3730a3; } /* indigo */
        .badge-purple { background-color: #f3e8ff; color: #581c87; } /* purple */

        /* Reusable Button Styles (from index page) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-user:before { content: \"\\f007\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-trash:before { content: \"\\f1f8\"; } /* Corrected icon */
        .mr-1\\.5 { margin-right: 0.375rem; }
        .mr-2 { margin-right: 0.5rem; }

        /* Basic prose styles if Tailwind Typography plugin isn't used */
        .prose p { margin-bottom: 1em; }
        .prose ul { list-style: disc; margin-left: 1.5em; margin-bottom: 1em; }
        .prose strong { font-weight: 600; }
        .prose a { color: #2563eb; text-decoration: underline; }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
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

        // line 50
        yield "<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-4xl\"> ";
        // line 52
        yield "
        ";
        // line 54
        yield "        <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                <i class=\"fas fa-user mr-2 text-blue-600\"></i>Utilisateur : ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), "html", null, true);
        yield "
            </h1>
            <div class=\"flex-shrink-0 flex gap-2\">
                ";
        // line 60
        yield "                ";
        if (((isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 60, $this->source); })()) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60))) {
            // line 61
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"button button-warning text-white\"> ";
            // line 62
            yield "                        <i class=\"fas fa-edit mr-1.5\"></i>Modifier
                    </a>
                ";
        }
        // line 65
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur_index");
        yield "\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1.5\"></i>Retour à la liste
                </a>
            </div>
        </div>

        ";
        // line 72
        yield "        ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "admin/utilisateur/show.html.twig", 72);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 73
        yield "
        ";
        // line 75
        yield "        <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
            <div class=\"px-6 py-4 border-b border-gray-200\">
                <h3 class=\"text-lg font-medium text-gray-900\">Détails du Compte</h3>
            </div>
            <div class=\"p-6\">
                ";
        // line 81
        yield "                <dl class=\"grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-4\">
                    ";
        // line 83
        yield "                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">ID Utilisateur</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Nom</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 89, $this->source); })()), "nom", [], "any", false, false, false, 89), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Prénom</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 93, $this->source); })()), "prenom", [], "any", false, false, false, 93), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"md:col-span-2\">
                        <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Téléphone</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "telephone", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 101, $this->source); })()), "telephone", [], "any", false, false, false, 101), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Rôle Interne</dt>
                        <dd class=\"mt-1 text-sm\">
                            ";
        // line 106
        $context["role_badge_class"] = "badge-gray";
        // line 107
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 107, $this->source); })()), "roleInterne", [], "any", false, false, false, 107) == "admin")) {
            yield " ";
            $context["role_badge_class"] = "badge-purple";
            // line 108
            yield "                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 108, $this->source); })()), "roleInterne", [], "any", false, false, false, 108) == "partenaire")) {
            yield " ";
            $context["role_badge_class"] = "badge-blue";
            // line 109
            yield "                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 109, $this->source); })()), "roleInterne", [], "any", false, false, false, 109) == "client")) {
            yield " ";
            $context["role_badge_class"] = "badge-indigo";
            // line 110
            yield "                            ";
        }
        // line 111
        yield "                            <span class=\"status-badge ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["role_badge_class"]) || array_key_exists("role_badge_class", $context) ? $context["role_badge_class"] : (function () { throw new RuntimeError('Variable "role_badge_class" does not exist.', 111, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 111, $this->source); })()), "roleInterne", [], "any", false, false, false, 111), ["_" => " "])), "html", null, true);
        yield "</span>
                        </dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Statut Compte</dt>
                        <dd class=\"mt-1 text-sm\">
                                <span class=\"status-badge ";
        // line 117
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 117, $this->source); })()), "isActive", [], "any", false, false, false, 117)) ? ("badge-green") : ("badge-red"));
        yield "\">
                                    ";
        // line 118
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 118, $this->source); })()), "isActive", [], "any", false, false, false, 118)) ? ("Actif") : ("Inactif"));
        yield "
                                </span>
                        </dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Email Vérifié</dt>
                        <dd class=\"mt-1 text-sm\">
                                <span class=\"status-badge ";
        // line 125
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 125, $this->source); })()), "isVerified", [], "any", false, false, false, 125)) ? ("badge-green") : ("badge-yellow"));
        yield "\">
                                    ";
        // line 126
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 126, $this->source); })()), "isVerified", [], "any", false, false, false, 126)) ? ("Oui") : ("Non"));
        yield "
                                </span>
                        </dd>
                    </div>
                    <div class=\"md:col-span-3\"> ";
        // line 131
        yield "                        <dt class=\"text-sm font-medium text-gray-500\">Rôles Symfony</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">
                            ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 133, $this->source); })()), "roles", [], "any", false, false, false, 133)) {
            // line 134
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 134, $this->source); })()), "roles", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 135
                yield "                                    <span class=\"inline-block bg-gray-200 rounded px-2 py-0.5 text-xs font-semibold text-gray-700 mr-1 mb-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "                            ";
        } else {
            // line 138
            yield "                                Aucun
                            ";
        }
        // line 140
        yield "                        </dd>
                    </div>

                    ";
        // line 144
        yield "                    <div class=\"md:col-span-3 mt-4 pt-4 border-t border-gray-200\"> ";
        // line 145
        yield "                        <dt class=\"text-sm font-medium text-gray-500 mb-1\">Détails / Bio</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">
                            ";
        // line 147
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 147, $this->source); })()), "details", [], "any", false, false, false, 147))) {
            // line 148
            yield "                                ";
            // line 149
            yield "                                ";
            // line 150
            yield "                                <div class=\"prose prose-sm max-w-none\">
                                    ";
            // line 151
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 151, $this->source); })()), "details", [], "any", false, false, false, 151);
            yield "
                                </div>
                            ";
        } else {
            // line 154
            yield "                                <span class=\"text-gray-500 italic\">Aucun détail fourni.</span>
                            ";
        }
        // line 156
        yield "                        </dd>
                    </div>
                    ";
        // line 159
        yield "                </dl>
            </div>
        </div>

        ";
        // line 164
        yield "        ";
        // line 165
        yield "        ";
        if (((isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 165, $this->source); })()) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165))) {
            // line 166
            yield "        <div class=\"bg-white rounded-lg shadow overflow-hidden border border-red-300 mt-6\">
            <div class=\"px-6 py-4 border-b border-red-200 bg-red-50\">
                <h3 class=\"text-base font-medium text-red-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\"> <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-4a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z\" clip-rule=\"evenodd\" /> </svg>
                    Action Dangereuse
                </h3>
            </div>
            <div class=\"p-6 flex justify-between items-center\">
                <p class=\"text-sm text-gray-600\">Supprimer cet utilisateur définitivement ?</p>
                ";
            // line 176
            yield "                ";
            // line 177
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/utilisateur/_delete_form.html.twig", ["utilisateur" =>             // line 178
(isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 178, $this->source); })()), "button_class" => "button button-sm button-outline-danger"]);
            // line 180
            yield "
            </div>
        </div>
        ";
        }
        // line 184
        yield "
    </div> ";
        // line 186
        yield "</div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/utilisateur/show.html.twig";
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
        return array (  430 => 186,  427 => 184,  421 => 180,  419 => 178,  417 => 177,  415 => 176,  404 => 166,  401 => 165,  399 => 164,  393 => 159,  389 => 156,  385 => 154,  379 => 151,  376 => 150,  374 => 149,  372 => 148,  370 => 147,  366 => 145,  364 => 144,  359 => 140,  355 => 138,  352 => 137,  343 => 135,  338 => 134,  336 => 133,  332 => 131,  325 => 126,  321 => 125,  311 => 118,  307 => 117,  295 => 111,  292 => 110,  287 => 109,  282 => 108,  277 => 107,  275 => 106,  267 => 101,  260 => 97,  253 => 93,  246 => 89,  239 => 85,  235 => 83,  232 => 81,  225 => 75,  222 => 73,  211 => 72,  201 => 65,  196 => 62,  192 => 61,  189 => 60,  181 => 56,  177 => 54,  174 => 52,  171 => 50,  158 => 49,  107 => 9,  94 => 8,  78 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/utilisateur/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}
    Utilisateur : {{ utilisateur.prenom }} {{ utilisateur.nom }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .status-badge {
            padding: 0.25em 0.6em; border-radius: 9999px; /* pill */
            font-size: 0.75rem; /* text-sm */ font-weight: 500; /* font-medium */
            text-transform: uppercase; letter-spacing: 0.05em;
            white-space: nowrap; line-height: 1;
        }
        .badge-green { background-color: #dcfce7; color: #166534; } /* green */
        .badge-red { background-color: #fee2e2; color: #991b1b; } /* red */
        .badge-yellow { background-color: #fef9c3; color: #854d0e; } /* yellow */
        .badge-gray { background-color: #f3f4f6; color: #374151; } /* gray */
        .badge-blue { background-color: #dbeafe; color: #1e40af; } /* blue */
        .badge-indigo { background-color: #e0e7ff; color: #3730a3; } /* indigo */
        .badge-purple { background-color: #f3e8ff; color: #581c87; } /* purple */

        /* Reusable Button Styles (from index page) */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-outline-danger { color: #dc2626; border-color: #ef4444; background-color: transparent;} .button-outline-danger:hover { background-color: #fee2e2; }

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-user:before { content: \"\\f007\"; }
        .fa-edit:before { content: \"\\f044\"; }
        .fa-arrow-left:before { content: \"\\f060\"; }
        .fa-trash:before { content: \"\\f1f8\"; } /* Corrected icon */
        .mr-1\\.5 { margin-right: 0.375rem; }
        .mr-2 { margin-right: 0.5rem; }

        /* Basic prose styles if Tailwind Typography plugin isn't used */
        .prose p { margin-bottom: 1em; }
        .prose ul { list-style: disc; margin-left: 1.5em; margin-bottom: 1em; }
        .prose strong { font-weight: 600; }
        .prose a { color: #2563eb; text-decoration: underline; }

    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
    <div class=\"container mx-auto max-w-4xl\"> {# Adjusted max-width #}

        {# 1. Header & Main Actions #}
        <div class=\"flex flex-col sm:flex-row justify-between items-center mb-8 gap-4\">
            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900\">
                <i class=\"fas fa-user mr-2 text-blue-600\"></i>Utilisateur : {{ utilisateur.prenom }} {{ utilisateur.nom }}
            </h1>
            <div class=\"flex-shrink-0 flex gap-2\">
                {# Prevent self-edit link #}
                {% if utilisateur != app.user %}
                    <a href=\"{{ path('admin_utilisateur_edit', {'id': utilisateur.id}) }}\" class=\"button button-warning text-white\"> {# Ensure text color is white #}
                        <i class=\"fas fa-edit mr-1.5\"></i>Modifier
                    </a>
                {% endif %}
                <a href=\"{{ path('admin_utilisateur_index') }}\" class=\"button button-secondary\">
                    <i class=\"fas fa-arrow-left mr-1.5\"></i>Retour à la liste
                </a>
            </div>
        </div>

        {# Flash Messages #}
        {% include 'partials/_flash_messages.html.twig' ignore missing %}

        {# 2. Details Card #}
        <div class=\"bg-white rounded-lg shadow overflow-hidden border border-gray-200\">
            <div class=\"px-6 py-4 border-b border-gray-200\">
                <h3 class=\"text-lg font-medium text-gray-900\">Détails du Compte</h3>
            </div>
            <div class=\"p-6\">
                {# Definition list for user details #}
                <dl class=\"grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-4\">
                    {# ... (ID, Nom, Prénom, Email, Tel, Role, Statut, Verifie - copied from index page) ... #}
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">ID Utilisateur</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ utilisateur.id }}</dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Nom</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ utilisateur.nom }}</dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Prénom</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ utilisateur.prenom }}</dd>
                    </div>
                    <div class=\"md:col-span-2\">
                        <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ utilisateur.email }}</dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Téléphone</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ utilisateur.telephone | default('Non renseigné') }}</dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Rôle Interne</dt>
                        <dd class=\"mt-1 text-sm\">
                            {% set role_badge_class = 'badge-gray' %}
                            {% if utilisateur.roleInterne == 'admin' %} {% set role_badge_class = 'badge-purple' %}
                            {% elseif utilisateur.roleInterne == 'partenaire' %} {% set role_badge_class = 'badge-blue' %}
                            {% elseif utilisateur.roleInterne == 'client' %} {% set role_badge_class = 'badge-indigo' %}
                            {% endif %}
                            <span class=\"status-badge {{ role_badge_class }}\">{{ utilisateur.roleInterne | replace({'_': ' '}) | capitalize }}</span>
                        </dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Statut Compte</dt>
                        <dd class=\"mt-1 text-sm\">
                                <span class=\"status-badge {{ utilisateur.isActive ? 'badge-green' : 'badge-red' }}\">
                                    {{ utilisateur.isActive ? 'Actif' : 'Inactif' }}
                                </span>
                        </dd>
                    </div>
                    <div class=\"md:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Email Vérifié</dt>
                        <dd class=\"mt-1 text-sm\">
                                <span class=\"status-badge {{ utilisateur.isVerified ? 'badge-green' : 'badge-yellow' }}\">
                                    {{ utilisateur.isVerified ? 'Oui' : 'Non' }}
                                </span>
                        </dd>
                    </div>
                    <div class=\"md:col-span-3\"> {# Span full width #}
                        <dt class=\"text-sm font-medium text-gray-500\">Rôles Symfony</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">
                            {% if utilisateur.roles %}
                                {% for role in utilisateur.roles %}
                                    <span class=\"inline-block bg-gray-200 rounded px-2 py-0.5 text-xs font-semibold text-gray-700 mr-1 mb-1\">{{ role }}</span>
                                {% endfor %}
                            {% else %}
                                Aucun
                            {% endif %}
                        </dd>
                    </div>

                    {# --- ADDED: Display Details/Bio --- #}
                    <div class=\"md:col-span-3 mt-4 pt-4 border-t border-gray-200\"> {# Full width, add separator #}
                        <dt class=\"text-sm font-medium text-gray-500 mb-1\">Détails / Bio</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">
                            {% if utilisateur.details is not empty %}
                                {# Use the 'raw' filter to render HTML #}
                                {# Optional: Add 'prose' class if using Tailwind Typography plugin #}
                                <div class=\"prose prose-sm max-w-none\">
                                    {{ utilisateur.details|raw }}
                                </div>
                            {% else %}
                                <span class=\"text-gray-500 italic\">Aucun détail fourni.</span>
                            {% endif %}
                        </dd>
                    </div>
                    {# --- END ADDED --- #}
                </dl>
            </div>
        </div>

        {# 3. Delete Action Card (Include the delete form) #}
        {# Prevent self-deletion #}
        {% if utilisateur != app.user %}
        <div class=\"bg-white rounded-lg shadow overflow-hidden border border-red-300 mt-6\">
            <div class=\"px-6 py-4 border-b border-red-200 bg-red-50\">
                <h3 class=\"text-base font-medium text-red-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\"> <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-4a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z\" clip-rule=\"evenodd\" /> </svg>
                    Action Dangereuse
                </h3>
            </div>
            <div class=\"p-6 flex justify-between items-center\">
                <p class=\"text-sm text-gray-600\">Supprimer cet utilisateur définitivement ?</p>
                {# Include the Tailwind delete form partial #}
                {# Pass the button_class if your partial supports it #}
                {{ include('admin/utilisateur/_delete_form.html.twig', {
                'utilisateur': utilisateur,
                'button_class': 'button button-sm button-outline-danger'
                }) }}
            </div>
        </div>
        {% endif %}

    </div> {# End Container #}
</div> {# End Page Wrapper #}
{% endblock %}", "admin/utilisateur/show.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/utilisateur/show.html.twig");
    }
}
