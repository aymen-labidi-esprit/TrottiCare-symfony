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

/* _footer.html.twig */
class __TwigTemplate_320ce2cba3f75854352a617dee3c301d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 2
        yield "<footer class=\"footer\"> ";
        // line 3
        yield "    <div class=\"container\"> ";
        // line 4
        yield "        <div class=\"footer-content\"> ";
        // line 5
        yield "            <p class=\"copyright\">© ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " TrottiCare. Tous droits réservés.</p> ";
        // line 6
        yield "            <div class=\"footer-links\"> ";
        // line 7
        yield "                ";
        // line 8
        yield "                <a href=\"#\" class=\"footer-link\">Mentions légales</a> ";
        // line 9
        yield "                <a href=\"#\" class=\"footer-link\">CGU</a>
                <a href=\"#\" class=\"footer-link\">Confidentialité</a>
            </div>
        </div>
    </div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_footer.html.twig";
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
        return array (  64 => 9,  62 => 8,  60 => 7,  58 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/_footer.html.twig #}
<footer class=\"footer\"> {# Ensure .footer styles are in app.css #}
    <div class=\"container\"> {# Ensure .container styles... #}
        <div class=\"footer-content\"> {# Ensure .footer-content styles... #}
            <p class=\"copyright\">© {{ \"now\"|date(\"Y\") }} TrottiCare. Tous droits réservés.</p> {# Ensure .copyright styles... #}
            <div class=\"footer-links\"> {# Ensure .footer-links styles... #}
                {# Add actual routes or static links #}
                <a href=\"#\" class=\"footer-link\">Mentions légales</a> {# Ensure .footer-link styles... #}
                <a href=\"#\" class=\"footer-link\">CGU</a>
                <a href=\"#\" class=\"footer-link\">Confidentialité</a>
            </div>
        </div>
    </div>
</footer>
", "_footer.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/_footer.html.twig");
    }
}
