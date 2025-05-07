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
class __TwigTemplate_94ee164731346b497f3acfa2191a5e96 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "_"), 0, [], "array", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "_"), 0, [], "array", false, false, false, 3), "en")) : ("en")), "html", null, true);
        yield "\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">


    ";
        // line 10
        yield "    ";
        // line 11
        yield "    <script src=\"https://cdn.tailwindcss.com\"></script>
    ";
        // line 13
        yield "
    ";
        // line 15
        yield "    ";
        // line 16
        yield "
    ";
        // line 18
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <link rel=\"icon\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\"> ";
        // line 21
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/face-api.min.js"), "html", null, true);
        yield "\"></script>


    ";
        // line 25
        yield "    <style>
        body { font-family: system-ui, sans-serif; }
        /* Hide elements meant to be shown by Tailwind initially to reduce FOUC */
        /* Example: .hidden { display: none !important; } */
        /* You might need more aggressive hiding depending on complexity */
    </style>

    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 34
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 37
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        yield "\">

    ";
        // line 40
        yield "    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
          integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
          crossorigin=\"\"/>
    ";
        // line 44
        yield "
    ";
        // line 46
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <script src=\"https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js\"></script> ";
        // line 48
        yield "
    <link rel=\"icon\" href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\">
    ";
        // line 50
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        yield " ";
        // line 51
        yield "
    ";
        // line 53
        yield "    <style>
        #map-container { height: 400px; background-color: #e5e7eb; } /* Default height and bg */
        /* Ensure Leaflet controls are visible */
        .leaflet-control-container .leaflet-control { background: white; box-shadow: 0 1px 5px rgba(0,0,0,0.4); border-radius: 4px; }
        .leaflet-control-zoom a { color: black; }
    </style>
</head>
<body style=\"display: flex; flex-direction: column; min-height: 100vh;\">

<div id=\"root\" style=\"display: flex; flex-direction: column; flex-grow: 1;\">
    ";
        // line 64
        yield "    ";
        yield from $this->loadTemplate("_header.html.twig", "base.html.twig", 64)->unwrap()->yield($context);
        // line 65
        yield "    <div class=\"page-content\" style=\"flex-grow: 1;\">
        ";
        // line 66
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 67
        yield "    </div>
    ";
        // line 68
        yield from $this->loadTemplate("_footer.html.twig", "base.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "</div>

";
        // line 72
        yield "
";
        // line 74
        yield "<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
        integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
        crossorigin=\"\"></script>
";
        // line 78
        yield "
";
        // line 81
        yield "
";
        // line 82
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield " ";
        // line 83
        yield "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 34
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

        yield "TrottiCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

    // line 82
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
        return array (  263 => 82,  241 => 66,  219 => 50,  196 => 34,  183 => 83,  180 => 82,  177 => 81,  174 => 78,  169 => 74,  166 => 72,  162 => 69,  160 => 68,  157 => 67,  155 => 66,  152 => 65,  149 => 64,  137 => 53,  134 => 51,  131 => 50,  127 => 49,  124 => 48,  121 => 46,  118 => 44,  113 => 40,  107 => 37,  102 => 34,  91 => 25,  84 => 21,  81 => 20,  77 => 18,  74 => 16,  72 => 15,  69 => 13,  66 => 11,  64 => 10,  55 => 3,  52 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')[0]|default('en') }}\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">


    {# === Tailwind Play CDN === #}
    {# IMPORTANT: This script enables Tailwind classes but is not for production #}
    <script src=\"https://cdn.tailwindcss.com\"></script>
    {# ----------------------- #}

    {# Optional: Link to a *small* custom CSS file AFTER Tailwind CDN if needed #}
    {# <link rel=\"stylesheet\" href=\"{{ asset('css/custom-overrides.css') }}\"> #}

    {# Optional: FontAwesome CDN Example #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\"> {# Ensure favicon is in public/ #}
    <script src=\"{{ asset('js/face-api.min.js') }}\"></script>


    {# Add basic styles needed *before* Tailwind JS runs, e.g., to prevent FOUC #}
    <style>
        body { font-family: system-ui, sans-serif; }
        /* Hide elements meant to be shown by Tailwind initially to reduce FOUC */
        /* Example: .hidden { display: none !important; } */
        /* You might need more aggressive hiding depending on complexity */
    </style>

    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}TrottiCare{% endblock %}</title>

    {# === Direct CSS Links === #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">

    {# --- LEAFLET CSS LINK --- #}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
          integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
          crossorigin=\"\"/>
    {# ------------------------ #}

    {# Optional: FontAwesome CDN Example #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <script src=\"https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js\"></script> {# Choose version/preset #}

    <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\">
    {% block stylesheets %}{% endblock %} {# For page-specific <style> tags #}

    {# Inline styles specifically for the map container to prevent layout shifts #}
    <style>
        #map-container { height: 400px; background-color: #e5e7eb; } /* Default height and bg */
        /* Ensure Leaflet controls are visible */
        .leaflet-control-container .leaflet-control { background: white; box-shadow: 0 1px 5px rgba(0,0,0,0.4); border-radius: 4px; }
        .leaflet-control-zoom a { color: black; }
    </style>
</head>
<body style=\"display: flex; flex-direction: column; min-height: 100vh;\">

<div id=\"root\" style=\"display: flex; flex-direction: column; flex-grow: 1;\">
    {# ... Toaster ... #}
    {% include '_header.html.twig' %}
    <div class=\"page-content\" style=\"flex-grow: 1;\">
        {% block body %}{% endblock %}
    </div>
    {% include '_footer.html.twig' %}
</div>

{# === JavaScript === #}

{# --- LEAFLET JS LINK (MUST be before your map init script) --- #}
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
        integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
        crossorigin=\"\"></script>
{# ------------------------------------------------------------- #}

{# Optional: Your global app JS #}
{# <script src=\"{{ asset('js/app.js') }}\"></script> #}

{% block javascripts %}{% endblock %} {# For page-specific JS #}

</body>
</html>", "base.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/base.html.twig");
    }
}
