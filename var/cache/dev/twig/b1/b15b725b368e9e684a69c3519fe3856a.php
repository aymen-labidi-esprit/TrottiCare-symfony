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

/* public/event/ticket_pdf.html.twig */
class __TwigTemplate_414430a7ea26bc08d19dd498546fcd71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event/ticket_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/event/ticket_pdf.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Billet pour ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif; /* Use a font supporting UTF-8 characters well in wkhtmltopdf */
            font-size: 12px;
            line-height: 1.4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .ticket-container {
            width: 90%;
            max-width: 600px; /* Adjust as needed */
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        .ticket-header {
            text-align: center;
            margin-bottom: 25px;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 15px;
        }
        .ticket-header h1 {
            margin: 0 0 5px 0;
            font-size: 20px;
            color: #0056b3; /* Example primary color */
        }
        .ticket-header p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        .ticket-section {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #eee;
        }
        .ticket-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .ticket-section h2 {
            font-size: 16px;
            color: #333;
            margin-top: 0;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }

        .details-list dt {
            font-weight: bold;
            color: #444;
            width: 120px; /* Adjust label width */
            float: left;
            clear: left;
            margin-bottom: 5px;
        }
        .details-list dd {
            margin-left: 130px; /* Should be > dt width */
            margin-bottom: 5px;
            color: #555;
        }
        /* Clearfix for the float */
        .details-list::after {
            content: \"\";
            display: table;
            clear: both;
        }

        .qr-code-section {
            text-align: center;
            margin-top: 20px;
        }
        .qr-code-section img {
            display: block;
            margin: 10px auto;
            max-width: 150px; /* Match size from controller */
            height: auto;
            border: 1px solid #eee; /* Optional border */
            padding: 5px;
        }

        .ticket-footer {
            margin-top: 25px;
            text-align: center;
            font-size: 11px;
            color: #888;
        }

    </style>
</head>
<body>
<div class=\"ticket-container\">

    <div class=\"ticket-header\">
        <h1>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 109, $this->source); })()), "titre", [], "any", false, false, false, 109), "html", null, true);
        yield "</h1>
        <p>Votre Billet Électronique</p>
    </div>

    <div class=\"ticket-section event-details\">
        <h2>Détails de l'Événement</h2>
        <dl class=\"details-list\">
            <dt>Date Début:</dt>
            <dd>";
        // line 117
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 117, $this->source); })()), "dateDebut", [], "any", false, false, false, 117)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 117, $this->source); })()), "dateDebut", [], "any", false, false, false, 117), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</dd>

            <dt>Date Fin:</dt>
            <dd>";
        // line 120
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 120, $this->source); })()), "dateFin", [], "any", false, false, false, 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 120, $this->source); })()), "dateFin", [], "any", false, false, false, 120), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</dd>

            <dt>Lieu:</dt>
            <dd>";
        // line 123
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 123, $this->source); })()), "state", [], "any", false, false, false, 123)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 123, $this->source); })()), "state", [], "any", false, false, false, 123), "label", [], "any", false, false, false, 123), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 123, $this->source); })()), "state", [], "any", false, false, false, 123)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 123, $this->source); })()), "state", [], "any", false, false, false, 123), "value", [], "any", false, false, false, 123), "html", null, true)) : ("Non défini"))));
        yield "</dd>
        </dl>
    </div>

    <div class=\"ticket-section participant-details\">
        <h2>Informations Participant</h2>
        <dl class=\"details-list\">
            <dt>Nom:</dt>
            <dd>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "fullName", [], "any", false, false, false, 131), "html", null, true);
        yield "</dd> ";
        // line 132
        yield "
            <dt>Email:</dt>
            <dd>";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 134, $this->source); })()), "email", [], "any", false, false, false, 134), "html", null, true);
        yield "</dd> ";
        // line 135
        yield "
            <dt>N° Billet:</dt>
            <dd><strong>EVT-";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137), "html", null, true);
        yield "</strong></dd> ";
        // line 138
        yield "        </dl>
    </div>

    <div class=\"ticket-section qr-code-section\">
        <h2>Votre Code QR</h2>
        <p style=\"font-size: 11px; color: #666;\">Présentez ce code à l'entrée de l'événement.</p>
        ";
        // line 145
        yield "        ";
        // line 146
        yield "        <img src=\"";
        yield (isset($context["qrCodeBase64"]) || array_key_exists("qrCodeBase64", $context) ? $context["qrCodeBase64"] : (function () { throw new RuntimeError('Variable "qrCodeBase64" does not exist.', 146, $this->source); })());
        yield "\" alt=\"QR Code Billet\">
    </div>

    <div class=\"ticket-footer\">
        Merci de votre participation ! - TrottiCare Events
    </div>

</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "public/event/ticket_pdf.html.twig";
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
        return array (  223 => 146,  221 => 145,  213 => 138,  208 => 137,  204 => 135,  201 => 134,  197 => 132,  194 => 131,  183 => 123,  177 => 120,  171 => 117,  160 => 109,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/public/event/ticket_pdf.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Billet pour {{ event.titre }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif; /* Use a font supporting UTF-8 characters well in wkhtmltopdf */
            font-size: 12px;
            line-height: 1.4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .ticket-container {
            width: 90%;
            max-width: 600px; /* Adjust as needed */
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        .ticket-header {
            text-align: center;
            margin-bottom: 25px;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 15px;
        }
        .ticket-header h1 {
            margin: 0 0 5px 0;
            font-size: 20px;
            color: #0056b3; /* Example primary color */
        }
        .ticket-header p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        .ticket-section {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #eee;
        }
        .ticket-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .ticket-section h2 {
            font-size: 16px;
            color: #333;
            margin-top: 0;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }

        .details-list dt {
            font-weight: bold;
            color: #444;
            width: 120px; /* Adjust label width */
            float: left;
            clear: left;
            margin-bottom: 5px;
        }
        .details-list dd {
            margin-left: 130px; /* Should be > dt width */
            margin-bottom: 5px;
            color: #555;
        }
        /* Clearfix for the float */
        .details-list::after {
            content: \"\";
            display: table;
            clear: both;
        }

        .qr-code-section {
            text-align: center;
            margin-top: 20px;
        }
        .qr-code-section img {
            display: block;
            margin: 10px auto;
            max-width: 150px; /* Match size from controller */
            height: auto;
            border: 1px solid #eee; /* Optional border */
            padding: 5px;
        }

        .ticket-footer {
            margin-top: 25px;
            text-align: center;
            font-size: 11px;
            color: #888;
        }

    </style>
</head>
<body>
<div class=\"ticket-container\">

    <div class=\"ticket-header\">
        <h1>{{ event.titre }}</h1>
        <p>Votre Billet Électronique</p>
    </div>

    <div class=\"ticket-section event-details\">
        <h2>Détails de l'Événement</h2>
        <dl class=\"details-list\">
            <dt>Date Début:</dt>
            <dd>{{ event.dateDebut ? event.dateDebut|date('d/m/Y H:i') : 'N/A' }}</dd>

            <dt>Date Fin:</dt>
            <dd>{{ event.dateFin ? event.dateFin|date('d/m/Y H:i') : 'N/A' }}</dd>

            <dt>Lieu:</dt>
            <dd>{{ event.state ? event.state.label : (event.state ? event.state.value : 'Non défini') }}</dd>
        </dl>
    </div>

    <div class=\"ticket-section participant-details\">
        <h2>Informations Participant</h2>
        <dl class=\"details-list\">
            <dt>Nom:</dt>
            <dd>{{ user.fullName }}</dd> {# Assuming fullName method exists #}

            <dt>Email:</dt>
            <dd>{{ user.email }}</dd> {# Use email or another identifier #}

            <dt>N° Billet:</dt>
            <dd><strong>EVT-{{ event.id }}-{{ participation.id }}</strong></dd> {# Unique ticket ID #}
        </dl>
    </div>

    <div class=\"ticket-section qr-code-section\">
        <h2>Votre Code QR</h2>
        <p style=\"font-size: 11px; color: #666;\">Présentez ce code à l'entrée de l'événement.</p>
        {# Embed the base64 encoded QR code image #}
        {# Use the 'raw' filter because the string contains special characters #}
        <img src=\"{{ qrCodeBase64 | raw }}\" alt=\"QR Code Billet\">
    </div>

    <div class=\"ticket-footer\">
        Merci de votre participation ! - TrottiCare Events
    </div>

</div>
</body>
</html>", "public/event/ticket_pdf.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/public/event/ticket_pdf.html.twig");
    }
}
