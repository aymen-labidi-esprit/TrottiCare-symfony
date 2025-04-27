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

/* trottinette/new.html.twig */
class __TwigTemplate_4f034936dd0aaedc41e4b7445c2e6cbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trottinette/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trottinette/new.html.twig", 1);
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

        yield "Nouvelle Trottinette";
        
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
        yield "    <div class=\"container py-4\">
        <h1>Créer une nouvelle Trottinette</h1>

        ";
        // line 9
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "valid", [], "any", false, false, false, 9) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "submitted", [], "any", false, false, false, 9))) {
            // line 10
            yield "            <div class=\"alert alert-danger\">
                <h4 class=\"alert-heading\">Des erreurs ont été trouvées :</h4>
                <ul class=\"mb-0\">
                    ";
            // line 13
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "modele", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)) > 0)) {
                // line 14
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "modele", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 15
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 15), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                yield "                    ";
            }
            // line 18
            yield "                    
                    ";
            // line 19
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "numeroSerie", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19)) > 0)) {
                // line 20
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "numeroSerie", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 21
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 21), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                    ";
            }
            // line 24
            yield "                    
                    ";
            // line 25
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "errors", [], "any", false, false, false, 25)) > 0)) {
                // line 26
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "etat", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 27
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 27), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                yield "                    ";
            }
            // line 30
            yield "                    
                    ";
            // line 31
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "batterie", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) > 0)) {
                // line 32
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "batterie", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 33
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 33), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "                    ";
            }
            // line 36
            yield "                    
                    ";
            // line 37
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "autonomie", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "errors", [], "any", false, false, false, 37)) > 0)) {
                // line 38
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "autonomie", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 39
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 39), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "                    ";
            }
            // line 42
            yield "                    
                    ";
            // line 43
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) {
                // line 44
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "errors", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 45
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 45), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "                    ";
            }
            // line 48
            yield "                    
                    ";
            // line 50
            yield "                    ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50)) == 0) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "modele", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "valid", [], "any", false, false, false, 50))) {
                // line 51
                yield "                        <li>Le modèle ne peut pas être vide.</li>
                    ";
            }
            // line 53
            yield "                    
                    ";
            // line 54
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54)) == 0) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "numeroSerie", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "valid", [], "any", false, false, false, 54))) {
                // line 55
                yield "                        <li>Le numéro de série ne peut pas être vide.</li>
                    ";
            }
            // line 57
            yield "                    
                    ";
            // line 58
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "vars", [], "any", false, false, false, 58), "errors", [], "any", false, false, false, 58)) == 0) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "etat", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "valid", [], "any", false, false, false, 58))) {
                // line 59
                yield "                        <li>L'état ne peut pas être vide.</li>
                    ";
            }
            // line 61
            yield "                    
                    ";
            // line 62
            if ((((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "modele", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "numeroSerie", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) == 0)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "etat", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) == 0)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "batterie", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) == 0)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) == 0))) {
                // line 63
                yield "                        <li>Veuillez remplir tous les champs obligatoires.</li>
                    ";
            }
            // line 65
            yield "                </ul>
            </div>
        ";
        }
        // line 68
        yield "
        ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"], "method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_new")]);
        // line 76
        yield "
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "modele", [], "any", false, false, false, 77), 'label', ["label" => "Modèle"]);
        yield "
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "modele", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "modele", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "valid", [], "any", false, false, false, 78)) ? ("form-control") : ("form-control is-invalid")), "required" => "required"]]);
        yield "
            ";
        // line 79
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "modele", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "valid", [], "any", false, false, false, 79) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "modele", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "errors", [], "any", false, false, false, 79)) > 0))) {
            // line 80
            yield "                <div class=\"invalid-feedback d-block\">
                    <ul>
                        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "modele", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "errors", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 83
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 83), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "                    </ul>
                </div>
            ";
        }
        // line 88
        yield "            
            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "numeroSerie", [], "any", false, false, false, 89), 'label', ["label" => "Numéro de Série"]);
        yield "
            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "numeroSerie", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "numeroSerie", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "valid", [], "any", false, false, false, 90)) ? ("form-control") : ("form-control is-invalid")), "required" => "required"]]);
        yield "
            ";
        // line 91
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "numeroSerie", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "valid", [], "any", false, false, false, 91) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "numeroSerie", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91)) > 0))) {
            // line 92
            yield "                <div class=\"invalid-feedback d-block\">
                    <ul>
                        ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "numeroSerie", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 95
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 95), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                    </ul>
                </div>
            ";
        }
        // line 100
        yield "            
            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "etat", [], "any", false, false, false, 101), 'label', ["label" => "État"]);
        yield "
            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "etat", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "etat", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "valid", [], "any", false, false, false, 102)) ? ("form-select") : ("form-select is-invalid")), "required" => "required"]]);
        yield "
            ";
        // line 103
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "etat", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "valid", [], "any", false, false, false, 103) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "etat", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103)) > 0))) {
            // line 104
            yield "                <div class=\"invalid-feedback d-block\">
                    <ul>
                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "etat", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "errors", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 107
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 107), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "                    </ul>
                </div>
            ";
        }
        // line 112
        yield "            
            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "batterie", [], "any", false, false, false, 113), 'label', ["label" => "Batterie (%)"]);
        yield "
            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "batterie", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "batterie", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "valid", [], "any", false, false, false, 114)) ? ("form-control") : ("form-control is-invalid"))]]);
        yield "
            ";
        // line 115
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "batterie", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "valid", [], "any", false, false, false, 115) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "batterie", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "errors", [], "any", false, false, false, 115)) > 0))) {
            // line 116
            yield "                <div class=\"invalid-feedback d-block\">
                    <ul>
                        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "batterie", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "errors", [], "any", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 119
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 119), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "                    </ul>
                </div>
            ";
        }
        // line 124
        yield "            
            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "localisation", [], "any", false, false, false, 125), 'label', ["label" => "Localisation"]);
        yield "
            ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "localisation", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "localisation", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "valid", [], "any", false, false, false, 126)) ? ("form-control") : ("form-control is-invalid"))]]);
        yield "
            ";
        // line 127
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "localisation", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "valid", [], "any", false, false, false, 127) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "localisation", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "errors", [], "any", false, false, false, 127)) > 0))) {
            // line 128
            yield "                <div class=\"invalid-feedback d-block\">
                    <ul>
                        ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "localisation", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "errors", [], "any", false, false, false, 130));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 131
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 131), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            yield "                    </ul>
                </div>
            ";
        }
        // line 136
        yield "            
            ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "autonomie", [], "any", false, false, false, 137), 'label', ["label" => "Autonomie"]);
        yield "
            ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "autonomie", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "autonomie", [], "any", false, false, false, 138), "vars", [], "any", false, false, false, 138), "valid", [], "any", false, false, false, 138)) ? ("form-control") : ("form-control is-invalid"))]]);
        yield "
            ";
        // line 139
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "autonomie", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "valid", [], "any", false, false, false, 139) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "autonomie", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "errors", [], "any", false, false, false, 139)) > 0))) {
            // line 140
            yield "                <div class=\"invalid-feedback d-block\">
                    <ul>
                        ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "autonomie", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "errors", [], "any", false, false, false, 142));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 143
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 143), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "                    </ul>
                </div>
            ";
        }
        // line 148
        yield "            
            ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 149), 'label', ["label" => "Point Relais ID"]);
        yield "
            ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "valid", [], "any", false, false, false, 150)) ? ("form-control") : ("form-control is-invalid"))]]);
        yield "
            ";
        // line 151
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "valid", [], "any", false, false, false, 151) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "errors", [], "any", false, false, false, 151)) > 0))) {
            // line 152
            yield "                <div class=\"invalid-feedback d-block\">
                    <ul>
                        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "pointRelaisId", [], "any", false, false, false, 154), "vars", [], "any", false, false, false, 154), "errors", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 155
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 155), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                    </ul>
                </div>
            ";
        }
        // line 160
        yield "            
            <div class=\"mt-4\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save me-2\"></i>Créer
                </button>
                <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trottinette_index");
        yield "\" class=\"btn btn-secondary ms-2\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                </a>
            </div>
        
        ";
        // line 170
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), 'form_end');
        yield "

        <div class=\"card mt-4\">
            <div class=\"card-body\">
                <h5 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Guide de saisie</h5>
                <ul class=\"mb-0\">
                    <li>Le modèle doit contenir au moins 2 caractères</li>
                    <li>Le numéro de série doit contenir au moins 4 caractères (lettres, chiffres et tirets uniquement)</li>
                    <li>Le niveau de batterie doit être entre 0 et 100%</li>
                    <li>Une trottinette disponible doit avoir au moins 10% de batterie</li>
                    <li>Le format d'autonomie doit être comme \"25 km\" ou \"2 heures\"</li>
                </ul>
            </div>
        </div>
    </div>
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
        return "trottinette/new.html.twig";
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
        return array (  548 => 170,  540 => 165,  533 => 160,  528 => 157,  519 => 155,  515 => 154,  511 => 152,  509 => 151,  505 => 150,  501 => 149,  498 => 148,  493 => 145,  484 => 143,  480 => 142,  476 => 140,  474 => 139,  470 => 138,  466 => 137,  463 => 136,  458 => 133,  449 => 131,  445 => 130,  441 => 128,  439 => 127,  435 => 126,  431 => 125,  428 => 124,  423 => 121,  414 => 119,  410 => 118,  406 => 116,  404 => 115,  400 => 114,  396 => 113,  393 => 112,  388 => 109,  379 => 107,  375 => 106,  371 => 104,  369 => 103,  365 => 102,  361 => 101,  358 => 100,  353 => 97,  344 => 95,  340 => 94,  336 => 92,  334 => 91,  330 => 90,  326 => 89,  323 => 88,  318 => 85,  309 => 83,  305 => 82,  301 => 80,  299 => 79,  295 => 78,  291 => 77,  288 => 76,  286 => 69,  283 => 68,  278 => 65,  274 => 63,  272 => 62,  269 => 61,  265 => 59,  263 => 58,  260 => 57,  256 => 55,  254 => 54,  251 => 53,  247 => 51,  244 => 50,  241 => 48,  238 => 47,  229 => 45,  224 => 44,  222 => 43,  219 => 42,  216 => 41,  207 => 39,  202 => 38,  200 => 37,  197 => 36,  194 => 35,  185 => 33,  180 => 32,  178 => 31,  175 => 30,  172 => 29,  163 => 27,  158 => 26,  156 => 25,  153 => 24,  150 => 23,  141 => 21,  136 => 20,  134 => 19,  131 => 18,  128 => 17,  119 => 15,  114 => 14,  112 => 13,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Trottinette{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <h1>Créer une nouvelle Trottinette</h1>

        {% if not form.vars.valid and form.vars.submitted %}
            <div class=\"alert alert-danger\">
                <h4 class=\"alert-heading\">Des erreurs ont été trouvées :</h4>
                <ul class=\"mb-0\">
                    {% if form.modele.vars.errors|length > 0 %}
                        {% for error in form.modele.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    {% endif %}
                    
                    {% if form.numeroSerie.vars.errors|length > 0 %}
                        {% for error in form.numeroSerie.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    {% endif %}
                    
                    {% if form.etat.vars.errors|length > 0 %}
                        {% for error in form.etat.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    {% endif %}
                    
                    {% if form.batterie.vars.errors|length > 0 %}
                        {% for error in form.batterie.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    {% endif %}
                    
                    {% if form.autonomie.vars.errors|length > 0 %}
                        {% for error in form.autonomie.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    {% endif %}
                    
                    {% if form.vars.errors|length > 0 %}
                        {% for error in form.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    {% endif %}
                    
                    {# If no specific field errors were shown but the form is invalid, add a generic message #}
                    {% if form.vars.errors|length == 0 and not form.modele.vars.valid %}
                        <li>Le modèle ne peut pas être vide.</li>
                    {% endif %}
                    
                    {% if form.vars.errors|length == 0 and not form.numeroSerie.vars.valid %}
                        <li>Le numéro de série ne peut pas être vide.</li>
                    {% endif %}
                    
                    {% if form.vars.errors|length == 0 and not form.etat.vars.valid %}
                        <li>L'état ne peut pas être vide.</li>
                    {% endif %}
                    
                    {% if form.modele.vars.errors|length == 0 and form.numeroSerie.vars.errors|length == 0 and form.etat.vars.errors|length == 0 and form.batterie.vars.errors|length == 0 and form.vars.errors|length == 0 %}
                        <li>Veuillez remplir tous les champs obligatoires.</li>
                    {% endif %}
                </ul>
            </div>
        {% endif %}

        {{ form_start(form, {
            'attr': {
                'novalidate': 'novalidate',
                'class': 'needs-validation'
            },
            'method': 'POST',
            'action': path('app_trottinette_new')
        }) }}
            {{ form_label(form.modele, 'Modèle') }}
            {{ form_widget(form.modele, {'attr': {'class': form.modele.vars.valid ? 'form-control' : 'form-control is-invalid', 'required': 'required'}}) }}
            {% if not form.modele.vars.valid and form.modele.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    <ul>
                        {% for error in form.modele.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
            
            {{ form_label(form.numeroSerie, 'Numéro de Série') }}
            {{ form_widget(form.numeroSerie, {'attr': {'class': form.numeroSerie.vars.valid ? 'form-control' : 'form-control is-invalid', 'required': 'required'}}) }}
            {% if not form.numeroSerie.vars.valid and form.numeroSerie.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    <ul>
                        {% for error in form.numeroSerie.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
            
            {{ form_label(form.etat, 'État') }}
            {{ form_widget(form.etat, {'attr': {'class': form.etat.vars.valid ? 'form-select' : 'form-select is-invalid', 'required': 'required'}}) }}
            {% if not form.etat.vars.valid and form.etat.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    <ul>
                        {% for error in form.etat.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
            
            {{ form_label(form.batterie, 'Batterie (%)') }}
            {{ form_widget(form.batterie, {'attr': {'class': form.batterie.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
            {% if not form.batterie.vars.valid and form.batterie.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    <ul>
                        {% for error in form.batterie.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
            
            {{ form_label(form.localisation, 'Localisation') }}
            {{ form_widget(form.localisation, {'attr': {'class': form.localisation.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
            {% if not form.localisation.vars.valid and form.localisation.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    <ul>
                        {% for error in form.localisation.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
            
            {{ form_label(form.autonomie, 'Autonomie') }}
            {{ form_widget(form.autonomie, {'attr': {'class': form.autonomie.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
            {% if not form.autonomie.vars.valid and form.autonomie.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    <ul>
                        {% for error in form.autonomie.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
            
            {{ form_label(form.pointRelaisId, 'Point Relais ID') }}
            {{ form_widget(form.pointRelaisId, {'attr': {'class': form.pointRelaisId.vars.valid ? 'form-control' : 'form-control is-invalid'}}) }}
            {% if not form.pointRelaisId.vars.valid and form.pointRelaisId.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    <ul>
                        {% for error in form.pointRelaisId.vars.errors %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
            
            <div class=\"mt-4\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save me-2\"></i>Créer
                </button>
                <a href=\"{{ path('app_trottinette_index') }}\" class=\"btn btn-secondary ms-2\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                </a>
            </div>
        
        {{ form_end(form) }}

        <div class=\"card mt-4\">
            <div class=\"card-body\">
                <h5 class=\"card-title\"><i class=\"fas fa-info-circle me-2\"></i>Guide de saisie</h5>
                <ul class=\"mb-0\">
                    <li>Le modèle doit contenir au moins 2 caractères</li>
                    <li>Le numéro de série doit contenir au moins 4 caractères (lettres, chiffres et tirets uniquement)</li>
                    <li>Le niveau de batterie doit être entre 0 et 100%</li>
                    <li>Une trottinette disponible doit avoir au moins 10% de batterie</li>
                    <li>Le format d'autonomie doit être comme \"25 km\" ou \"2 heures\"</li>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}", "trottinette/new.html.twig", "C:\\Users\\Baha Ayadi\\Desktop\\Trotticare Events\\Trottinette\\templates\\trottinette\\new.html.twig");
    }
}
