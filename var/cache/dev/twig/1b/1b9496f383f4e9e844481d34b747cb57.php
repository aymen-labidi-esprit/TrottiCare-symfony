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

/* partials/_flash_messages.html.twig */
class __TwigTemplate_7084909f2bce4f37888b86d420054fcc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_flash_messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_flash_messages.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "flashes", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
            ";
                // line 6
                yield "            ";
                if (($context["label"] == "success")) {
                    // line 7
                    yield "                <i class=\"bi bi-check-circle-fill me-2\"></i>
            ";
                } elseif (((                // line 8
$context["label"] == "danger") || ($context["label"] == "error"))) {
                    // line 9
                    yield "                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            ";
                } elseif ((                // line 10
$context["label"] == "warning")) {
                    // line 11
                    yield "                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            ";
                } elseif ((                // line 12
$context["label"] == "info")) {
                    // line 13
                    yield "                <i class=\"bi bi-info-circle-fill me-2\"></i>
            ";
                }
                // line 15
                yield "
            ";
                // line 16
                yield $context["message"];
                yield " ";
                // line 17
                yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_flash_messages.html.twig";
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
        return array (  90 => 17,  87 => 16,  84 => 15,  80 => 13,  78 => 12,  75 => 11,  73 => 10,  70 => 9,  68 => 8,  65 => 7,  62 => 6,  57 => 4,  52 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/partials/_flash_messages.html.twig #}
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
            {# Add appropriate icons based on label #}
            {% if label == 'success' %}
                <i class=\"bi bi-check-circle-fill me-2\"></i>
            {% elseif label == 'danger' or label == 'error' %}
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            {% elseif label == 'warning' %}
                <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            {% elseif label == 'info' %}
                <i class=\"bi bi-info-circle-fill me-2\"></i>
            {% endif %}

            {{ message|raw }} {# Use raw filter if messages might contain HTML #}

            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
{% endfor %}", "partials/_flash_messages.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/partials/_flash_messages.html.twig");
    }
}
