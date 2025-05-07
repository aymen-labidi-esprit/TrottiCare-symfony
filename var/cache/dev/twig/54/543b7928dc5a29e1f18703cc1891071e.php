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

/* admin/event/_status_badge.html.twig */
class __TwigTemplate_be6cb38cad8578b08eab57152757d271 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event/_status_badge.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/event/_status_badge.html.twig"));

        // line 2
        $context["status_upper"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 2, $this->source); })()), "Unknown")) : ("Unknown")));
        // line 3
        $context["badge_class"] = "badge-default";
        // line 4
        $context["status_text"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace((isset($context["status_upper"]) || array_key_exists("status_upper", $context) ? $context["status_upper"] : (function () { throw new RuntimeError('Variable "status_upper" does not exist.', 4, $this->source); })()), ["_" => " "]));
        // line 5
        yield "
";
        // line 6
        if (((isset($context["status_upper"]) || array_key_exists("status_upper", $context) ? $context["status_upper"] : (function () { throw new RuntimeError('Variable "status_upper" does not exist.', 6, $this->source); })()) == "A_VENIR")) {
            // line 7
            yield "    ";
            $context["badge_class"] = "badge-blue";
            // line 8
            yield "    ";
            $context["status_text"] = "À venir";
            yield " ";
        } elseif ((        // line 9
(isset($context["status_upper"]) || array_key_exists("status_upper", $context) ? $context["status_upper"] : (function () { throw new RuntimeError('Variable "status_upper" does not exist.', 9, $this->source); })()) == "EN_COURS")) {
            // line 10
            yield "    ";
            $context["badge_class"] = "badge-green";
            // line 11
            yield "    ";
            $context["status_text"] = "En cours";
            yield " ";
        } elseif ((        // line 12
(isset($context["status_upper"]) || array_key_exists("status_upper", $context) ? $context["status_upper"] : (function () { throw new RuntimeError('Variable "status_upper" does not exist.', 12, $this->source); })()) == "TERMINE")) {
            // line 13
            yield "    ";
            $context["badge_class"] = "badge-gray";
            // line 14
            yield "    ";
            $context["status_text"] = "Terminé";
            yield " ";
        } elseif ((        // line 15
(isset($context["status_upper"]) || array_key_exists("status_upper", $context) ? $context["status_upper"] : (function () { throw new RuntimeError('Variable "status_upper" does not exist.', 15, $this->source); })()) == "ANNULE")) {
            // line 16
            yield "    ";
            $context["badge_class"] = "badge-red";
            // line 17
            yield "    ";
            $context["status_text"] = "Annulé";
            yield " ";
        }
        // line 19
        yield "
<span class=\"badge ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge_class"]) || array_key_exists("badge_class", $context) ? $context["badge_class"] : (function () { throw new RuntimeError('Variable "badge_class" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "
</span>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/event/_status_badge.html.twig";
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
        return array (  101 => 21,  97 => 20,  94 => 19,  89 => 17,  86 => 16,  84 => 15,  80 => 14,  77 => 13,  75 => 12,  71 => 11,  68 => 10,  66 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/event/_status_badge.html.twig #}
{% set status_upper = status|default('Unknown')|upper %}
{% set badge_class = 'badge-default' %}
{% set status_text = status_upper|replace({'_': ' '})|capitalize %}

{% if status_upper == 'A_VENIR' %}
    {% set badge_class = 'badge-blue' %}
    {% set status_text = 'À venir' %} {# Nicer Label #}
{% elseif status_upper == 'EN_COURS' %}
    {% set badge_class = 'badge-green' %}
    {% set status_text = 'En cours' %} {# Nicer Label #}
{% elseif status_upper == 'TERMINE' %}
    {% set badge_class = 'badge-gray' %}
    {% set status_text = 'Terminé' %} {# Nicer Label #}
{% elseif status_upper == 'ANNULE' %}
    {% set badge_class = 'badge-red' %}
    {% set status_text = 'Annulé' %} {# Nicer Label #}
{% endif %}

<span class=\"badge {{ badge_class }}\">
    {{ status_text }}
</span>", "admin/event/_status_badge.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/event/_status_badge.html.twig");
    }
}
