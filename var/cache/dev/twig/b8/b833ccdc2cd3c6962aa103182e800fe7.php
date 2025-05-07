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

/* admin/utilisateur/_form.html.twig */
class __TwigTemplate_e661e82d86851aa90793485053487f48 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur/_form.html.twig"));

        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 76
        yield "
";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    ";
        // line 81
        yield "<div class=\"space-y-5\"> ";
        // line 82
        yield "
    ";
        // line 84
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["nom", "prenom", "email", "telephone"]);
        foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
            // line 85
            yield "        ";
            $context["field"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), $context["field_name"], [], "any", false, false, false, 85);
            // line 86
            yield "        <div>
            ";
            // line 87
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
            yield "
            ";
            // line 88
            $context["widget_attrs"] = ["class" => "form-input"];
            // line 89
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "vars", [], "any", false, false, false, 89), "submitted", [], "any", false, false, false, 89) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 89, $this->source); })()), "vars", [], "any", false, false, false, 89), "valid", [], "any", false, false, false, 89))) {
                // line 90
                yield "                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 90, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
                // line 91
                yield "            ";
            }
            // line 92
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 92, $this->source); })())]);
            yield "
            ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "vars", [], "any", false, false, false, 93), "submitted", [], "any", false, false, false, 93) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "vars", [], "any", false, false, false, 93), "valid", [], "any", false, false, false, 93))) {
                // line 94
                yield "                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), 'errors');
                yield "</p>
            ";
            }
            // line 96
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field_name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "
    ";
        // line 100
        yield "    <div>
        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "roleInterne", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
        yield "
        ";
        // line 102
        $context["widget_attrs"] = ["class" => "form-select"];
        // line 103
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "vars", [], "any", false, false, false, 103), "submitted", [], "any", false, false, false, 103) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "roleInterne", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "valid", [], "any", false, false, false, 103))) {
            // line 104
            yield "            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 104, $this->source); })()), ["class" => "form-select border-error focus:ring-error focus:border-error"]);
            // line 105
            yield "        ";
        }
        // line 106
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "roleInterne", [], "any", false, false, false, 106), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 106, $this->source); })())]);
        yield "
        ";
        // line 107
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "submitted", [], "any", false, false, false, 107) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "roleInterne", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "valid", [], "any", false, false, false, 107))) {
            // line 108
            yield "            <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "roleInterne", [], "any", false, false, false, 108), 'errors');
            yield "</p>
        ";
        }
        // line 110
        yield "    </div>

    ";
        // line 113
        yield "    <div class=\"relative flex items-start\">
        <div class=\"flex items-center h-5\">
            ";
        // line 115
        $context["widget_attrs"] = ["class" => "form-checkbox"];
        // line 116
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "vars", [], "any", false, false, false, 116), "submitted", [], "any", false, false, false, 116) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "isVerified", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "valid", [], "any", false, false, false, 116))) {
            // line 117
            yield "                ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 117, $this->source); })()), ["class" => "form-checkbox border-error focus:ring-error"]);
            // line 118
            yield "            ";
        }
        // line 119
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "isVerified", [], "any", false, false, false, 119), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 119, $this->source); })())]);
        yield "
        </div>
        <div class=\"ml-3 text-sm\">
            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "isVerified", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "font-medium text-gray-700"]]);
        yield "
            ";
        // line 124
        yield "        </div>
        ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "vars", [], "any", false, false, false, 125), "submitted", [], "any", false, false, false, 125) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "isVerified", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "valid", [], "any", false, false, false, 125))) {
            // line 126
            yield "            ";
            // line 127
            yield "            <p class=\"form-error-message absolute -bottom-4 left-0 w-full\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "isVerified", [], "any", false, false, false, 127), 'errors');
            yield "</p>
        ";
        }
        // line 129
        yield "    </div>

    ";
        // line 132
        yield "    <div class=\"flex items-center justify-between\">
        ";
        // line 134
        yield "        <span class=\"flex-grow flex flex-col mr-4\">
                ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "isActive", [], "any", false, false, false, 135), 'label', ["label_attr" => ["class" => "text-sm font-medium text-gray-700"]]);
        yield "
            ";
        // line 136
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, true, false, 136), "vars", [], "any", false, true, false, 136), "help", [], "any", true, true, false, 136) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "isActive", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "help", [], "any", false, false, false, 136))) {
            // line 137
            yield "                <span class=\"text-xs text-gray-500\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "isActive", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "help", [], "any", false, false, false, 137), "html", null, true);
            yield "</span>
            ";
        }
        // line 139
        yield "             </span>
        ";
        // line 141
        yield "        ";
        $context["widget_attrs"] = ["class" => "form-switch"];
        // line 142
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "submitted", [], "any", false, false, false, 142) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "isActive", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "valid", [], "any", false, false, false, 142))) {
            // line 143
            yield "            ";
            $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 143, $this->source); })()), ["class" => "form-switch border-error focus:ring-error"]);
            // line 144
            yield "        ";
        }
        // line 145
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "isActive", [], "any", false, false, false, 145), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 145, $this->source); })())]);
        yield "
    </div>
    ";
        // line 148
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "vars", [], "any", false, false, false, 148), "submitted", [], "any", false, false, false, 148) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "isActive", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "valid", [], "any", false, false, false, 148))) {
            // line 149
            yield "        <p class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "isActive", [], "any", false, false, false, 149), 'errors');
            yield "</p>
    ";
        }
        // line 151
        yield "

    ";
        // line 154
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", true, true, false, 154)) {
            // line 155
            yield "        ";
            // line 156
            yield "        ";
            // line 157
            yield "        <div>
            ";
            // line 158
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "plainPassword", [], "any", false, false, false, 158), "first", [], "any", false, false, false, 158), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
            yield "
            ";
            // line 159
            $context["widget_attrs"] = ["class" => "form-input"];
            // line 160
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "vars", [], "any", false, false, false, 160), "submitted", [], "any", false, false, false, 160) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "plainPassword", [], "any", false, false, false, 160), "first", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "valid", [], "any", false, false, false, 160))) {
                // line 161
                yield "                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 161, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
                // line 162
                yield "            ";
            }
            // line 163
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "plainPassword", [], "any", false, false, false, 163), "first", [], "any", false, false, false, 163), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 163, $this->source); })())]);
            yield "
            ";
            // line 164
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "vars", [], "any", false, false, false, 164), "submitted", [], "any", false, false, false, 164) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "plainPassword", [], "any", false, false, false, 164), "first", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "valid", [], "any", false, false, false, 164))) {
                // line 165
                yield "                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "plainPassword", [], "any", false, false, false, 165), "first", [], "any", false, false, false, 165), 'errors');
                yield "</p>
            ";
            }
            // line 167
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, true, false, 167), "first", [], "any", false, true, false, 167), "vars", [], "any", false, true, false, 167), "help", [], "any", true, true, false, 167) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "plainPassword", [], "any", false, false, false, 167), "first", [], "any", false, false, false, 167), "vars", [], "any", false, false, false, 167), "help", [], "any", false, false, false, 167))) {
                // line 168
                yield "                <p class=\"mt-1 text-xs text-gray-500\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "plainPassword", [], "any", false, false, false, 168), "first", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "help", [], "any", false, false, false, 168), "html", null, true);
                yield "</p>
            ";
            }
            // line 170
            yield "        </div>
        <div>
            ";
            // line 172
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "plainPassword", [], "any", false, false, false, 172), "second", [], "any", false, false, false, 172), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
            yield "
            ";
            // line 173
            $context["widget_attrs"] = ["class" => "form-input"];
            // line 174
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "vars", [], "any", false, false, false, 174), "submitted", [], "any", false, false, false, 174) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "plainPassword", [], "any", false, false, false, 174), "second", [], "any", false, false, false, 174), "vars", [], "any", false, false, false, 174), "valid", [], "any", false, false, false, 174))) {
                // line 175
                yield "                ";
                // line 176
                yield "                ";
                $context["widget_attrs"] = Twig\Extension\CoreExtension::merge((isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 176, $this->source); })()), ["class" => "form-input border-error focus:ring-error focus:border-error"]);
                // line 177
                yield "            ";
            }
            // line 178
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "plainPassword", [], "any", false, false, false, 178), "second", [], "any", false, false, false, 178), 'widget', ["attr" => (isset($context["widget_attrs"]) || array_key_exists("widget_attrs", $context) ? $context["widget_attrs"] : (function () { throw new RuntimeError('Variable "widget_attrs" does not exist.', 178, $this->source); })())]);
            yield "
            ";
            // line 179
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "vars", [], "any", false, false, false, 179), "submitted", [], "any", false, false, false, 179) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "plainPassword", [], "any", false, false, false, 179), "second", [], "any", false, false, false, 179), "vars", [], "any", false, false, false, 179), "valid", [], "any", false, false, false, 179))) {
                // line 180
                yield "                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "plainPassword", [], "any", false, false, false, 180), "second", [], "any", false, false, false, 180), 'errors');
                yield "</p>
            ";
            }
            // line 182
            yield "            ";
            // line 183
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "vars", [], "any", false, false, false, 183), "submitted", [], "any", false, false, false, 183) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "plainPassword", [], "any", false, false, false, 183), "vars", [], "any", false, false, false, 183), "errors", [], "any", false, false, false, 183)) > 0))) {
                // line 184
                yield "                <p class=\"form-error-message\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "plainPassword", [], "any", false, false, false, 184), 'errors');
                yield "</p>
            ";
            }
            // line 186
            yield "        </div>
    ";
        }
        // line 188
        yield "
</div> ";
        // line 190
        yield "
    ";
        // line 192
        yield "<div class=\"mt-8 pt-5 border-t border-gray-200 text-right\">
    <button type=\"submit\" class=\"button button-success\">
        <i class=\"fas fa-save mr-2\"></i>";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 194, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
    </button>
</div>

";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    ";
        // line 6
        yield "    ";
        // line 7
        yield "    <style>
        /* Reusable form input/select/checkbox/textarea styles */
        .form-input, .form-select, .form-textarea {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-textarea { min-height: 80px; }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        /* Specific style for checkbox/switch - adjust size/color as needed */
        .form-checkbox, .form-switch {
            padding: 0; height: 1rem; width: 1rem; /* Size */
            color: #3b82f6; /* blue-600 */
            border: 1px solid #9ca3af; /* gray-400 */
            border-radius: 0.25rem; /* rounded */
            vertical-align: middle;
            margin-top: 0.125em; /* Align with label text */
            flex-shrink: 0;
            cursor: pointer;
        }
        .form-switch {
            width: 2rem; height: 1.125rem; /* Slightly different size for switch */
            border-radius: 9999px; /* rounded-full */
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e\");
            background-position: left center;
            background-repeat: no-repeat;
            background-size: contain;
            border-color: rgba(0,0,0,.25);
            transition: background-position .15s ease-in-out;
        }
        .form-checkbox:checked, .form-switch:checked {
            border-color: #2563eb; /* blue-600 */
            background-color: #2563eb;
        }
        .form-checkbox:checked {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e\");
        }
        .form-switch:checked {
            background-position: right center;
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e\");
        }

        .form-input:focus, .form-select:focus, .form-textarea:focus, .form-checkbox:focus, .form-switch:focus {
            outline: none; border-color: #3b82f6;
            box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */
        }
        /* Error state styling */
        .border-error { border-color: #ef4444 !important; }
        .ring-error { box-shadow: 0 0 0 1px #ef4444 !important; }
        .form-error-message {
            display: block; margin-top: 0.25rem; font-size: 0.75rem; color: #dc2626;
        }

        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-save:before { content: \"\\f0c7\"; }
        .mr-2 { margin-right: 0.5rem; }
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
        return "admin/utilisateur/_form.html.twig";
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
        return array (  389 => 7,  387 => 6,  385 => 5,  372 => 4,  359 => 198,  352 => 194,  348 => 192,  345 => 190,  342 => 188,  338 => 186,  332 => 184,  329 => 183,  327 => 182,  321 => 180,  319 => 179,  314 => 178,  311 => 177,  308 => 176,  306 => 175,  303 => 174,  301 => 173,  297 => 172,  293 => 170,  287 => 168,  284 => 167,  278 => 165,  276 => 164,  271 => 163,  268 => 162,  265 => 161,  262 => 160,  260 => 159,  256 => 158,  253 => 157,  251 => 156,  249 => 155,  246 => 154,  242 => 151,  236 => 149,  233 => 148,  227 => 145,  224 => 144,  221 => 143,  218 => 142,  215 => 141,  212 => 139,  206 => 137,  204 => 136,  200 => 135,  197 => 134,  194 => 132,  190 => 129,  184 => 127,  182 => 126,  180 => 125,  177 => 124,  173 => 122,  166 => 119,  163 => 118,  160 => 117,  157 => 116,  155 => 115,  151 => 113,  147 => 110,  141 => 108,  139 => 107,  134 => 106,  131 => 105,  128 => 104,  125 => 103,  123 => 102,  119 => 101,  116 => 100,  113 => 98,  106 => 96,  100 => 94,  98 => 93,  93 => 92,  90 => 91,  87 => 90,  84 => 89,  82 => 88,  78 => 87,  75 => 86,  72 => 85,  67 => 84,  64 => 82,  62 => 81,  57 => 78,  54 => 76,  52 => 4,  49 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/utilisateur/_form_tailwind.html.twig #}
{# Expects 'form' and optionally 'button_label' variables #}

{% block stylesheets %}
    {# Include styles here ONLY if this partial is used standalone OR #}
    {# if base.html.twig doesn't already have these styles defined globally #}
    <style>
        /* Reusable form input/select/checkbox/textarea styles */
        .form-input, .form-select, .form-textarea {
            appearance: none; display: block; width: 100%;
            padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.5;
            color: #1f2937; background-color: #fff; background-clip: padding-box;
            border: 1px solid #d1d5db; border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-textarea { min-height: 80px; }
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center; background-repeat: no-repeat;
            background-size: 1.5em 1.5em; padding-right: 2.5rem;
        }
        /* Specific style for checkbox/switch - adjust size/color as needed */
        .form-checkbox, .form-switch {
            padding: 0; height: 1rem; width: 1rem; /* Size */
            color: #3b82f6; /* blue-600 */
            border: 1px solid #9ca3af; /* gray-400 */
            border-radius: 0.25rem; /* rounded */
            vertical-align: middle;
            margin-top: 0.125em; /* Align with label text */
            flex-shrink: 0;
            cursor: pointer;
        }
        .form-switch {
            width: 2rem; height: 1.125rem; /* Slightly different size for switch */
            border-radius: 9999px; /* rounded-full */
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e\");
            background-position: left center;
            background-repeat: no-repeat;
            background-size: contain;
            border-color: rgba(0,0,0,.25);
            transition: background-position .15s ease-in-out;
        }
        .form-checkbox:checked, .form-switch:checked {
            border-color: #2563eb; /* blue-600 */
            background-color: #2563eb;
        }
        .form-checkbox:checked {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e\");
        }
        .form-switch:checked {
            background-position: right center;
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e\");
        }

        .form-input:focus, .form-select:focus, .form-textarea:focus, .form-checkbox:focus, .form-switch:focus {
            outline: none; border-color: #3b82f6;
            box-shadow: 0 0 0 1px #3b82f6; /* ring-1 ring-blue-500 */
        }
        /* Error state styling */
        .border-error { border-color: #ef4444 !important; }
        .ring-error { box-shadow: 0 0 0 1px #ef4444 !important; }
        .form-error-message {
            display: block; margin-top: 0.25rem; font-size: 0.75rem; color: #dc2626;
        }

        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.625rem 1.25rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-success { background-color: #10b981; color: white; border-color: #10b981; } .button-success:hover { background-color: #059669; border-color: #047857; }

        /* FontAwesome Icons */
        .fas { display: inline-block; font-style: normal; font-variant: normal; text-rendering: auto; -webkit-font-smoothing: antialiased; font-family: \"Font Awesome 6 Free\"; font-weight: 900; }
        .fa-save:before { content: \"\\f0c7\"; }
        .mr-2 { margin-right: 0.5rem; }
    </style>
{% endblock %}

{# --- FORM START --- #}
{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    {# Render form fields with Tailwind classes #}
<div class=\"space-y-5\"> {# Vertical spacing #}

    {# Loop through standard text/email/tel fields #}
    {% for field_name in ['nom', 'prenom', 'email', 'telephone'] %}
        {% set field = attribute(form, field_name) %}
        <div>
            {{ form_label(field, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
            {% set widget_attrs = {'class': 'form-input' } %}
            {% if form.vars.submitted and not field.vars.valid %}
                {% set widget_attrs = widget_attrs|merge({'class': 'form-input border-error focus:ring-error focus:border-error'}) %}
            {% endif %}
            {{ form_widget(field, {'attr': widget_attrs}) }}
            {% if form.vars.submitted and not field.vars.valid %}
                <p class=\"form-error-message\">{{ form_errors(field) }}</p>
            {% endif %}
        </div>
    {% endfor %}

    {# Role Select #}
    <div>
        {{ form_label(form.roleInterne, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
        {% set widget_attrs = {'class': 'form-select' } %}
        {% if form.vars.submitted and not form.roleInterne.vars.valid %}
            {% set widget_attrs = widget_attrs|merge({'class': 'form-select border-error focus:ring-error focus:border-error'}) %}
        {% endif %}
        {{ form_widget(form.roleInterne, {'attr': widget_attrs}) }}
        {% if form.vars.submitted and not form.roleInterne.vars.valid %}
            <p class=\"form-error-message\">{{ form_errors(form.roleInterne) }}</p>
        {% endif %}
    </div>

    {# Verified Checkbox #}
    <div class=\"relative flex items-start\">
        <div class=\"flex items-center h-5\">
            {% set widget_attrs = {'class': 'form-checkbox' } %}
            {% if form.vars.submitted and not form.isVerified.vars.valid %}
                {% set widget_attrs = widget_attrs|merge({'class': 'form-checkbox border-error focus:ring-error'}) %}
            {% endif %}
            {{ form_widget(form.isVerified, {'attr': widget_attrs}) }}
        </div>
        <div class=\"ml-3 text-sm\">
            {{ form_label(form.isVerified, null, {'label_attr': {'class': 'font-medium text-gray-700'}}) }}
            {# <p class=\"text-gray-500\">Help text if needed.</p> #}
        </div>
        {% if form.vars.submitted and not form.isVerified.vars.valid %}
            {# Error shown below checkbox block #}
            <p class=\"form-error-message absolute -bottom-4 left-0 w-full\">{{ form_errors(form.isVerified) }}</p>
        {% endif %}
    </div>

    {# Active Switch #}
    <div class=\"flex items-center justify-between\">
        {# Label on the left #}
        <span class=\"flex-grow flex flex-col mr-4\">
                {{ form_label(form.isActive, null, {'label_attr': {'class': 'text-sm font-medium text-gray-700'}}) }}
            {% if form.isActive.vars.help is defined and form.isActive.vars.help %}
                <span class=\"text-xs text-gray-500\">{{ form.isActive.vars.help }}</span>
            {% endif %}
             </span>
        {# Switch on the right #}
        {% set widget_attrs = {'class': 'form-switch' } %}
        {% if form.vars.submitted and not form.isActive.vars.valid %}
            {% set widget_attrs = widget_attrs|merge({'class': 'form-switch border-error focus:ring-error'}) %}
        {% endif %}
        {{ form_widget(form.isActive, {'attr': widget_attrs}) }}
    </div>
    {# Error message for Active Switch (if needed, typically below) #}
    {% if form.vars.submitted and not form.isActive.vars.valid %}
        <p class=\"form-error-message\">{{ form_errors(form.isActive) }}</p>
    {% endif %}


    {# Password Fields #}
    {% if form.plainPassword is defined %}
        {# Removed the info alert about leaving fields blank - not applicable for 'new' #}
        {# Add specific help text if needed #}
        <div>
            {{ form_label(form.plainPassword.first, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
            {% set widget_attrs = {'class': 'form-input' } %}
            {% if form.vars.submitted and not form.plainPassword.first.vars.valid %}
                {% set widget_attrs = widget_attrs|merge({'class': 'form-input border-error focus:ring-error focus:border-error'}) %}
            {% endif %}
            {{ form_widget(form.plainPassword.first, {'attr': widget_attrs}) }}
            {% if form.vars.submitted and not form.plainPassword.first.vars.valid %}
                <p class=\"form-error-message\">{{ form_errors(form.plainPassword.first) }}</p>
            {% endif %}
            {% if form.plainPassword.first.vars.help is defined and form.plainPassword.first.vars.help %}
                <p class=\"mt-1 text-xs text-gray-500\">{{ form.plainPassword.first.vars.help }}</p>
            {% endif %}
        </div>
        <div>
            {{ form_label(form.plainPassword.second, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
            {% set widget_attrs = {'class': 'form-input' } %}
            {% if form.vars.submitted and not form.plainPassword.second.vars.valid %}
                {# Check overall plainPassword validity for second field error #}
                {% set widget_attrs = widget_attrs|merge({'class': 'form-input border-error focus:ring-error focus:border-error'}) %}
            {% endif %}
            {{ form_widget(form.plainPassword.second, {'attr': widget_attrs}) }}
            {% if form.vars.submitted and not form.plainPassword.second.vars.valid %}
                <p class=\"form-error-message\">{{ form_errors(form.plainPassword.second) }}</p>
            {% endif %}
            {# Display the parent repeated field error (like 'passwords must match') #}
            {% if form.vars.submitted and form.plainPassword.vars.errors|length > 0 %}
                <p class=\"form-error-message\">{{ form_errors(form.plainPassword) }}</p>
            {% endif %}
        </div>
    {% endif %}

</div> {# End space-y container #}

    {# Submit Button #}
<div class=\"mt-8 pt-5 border-t border-gray-200 text-right\">
    <button type=\"submit\" class=\"button button-success\">
        <i class=\"fas fa-save mr-2\"></i>{{ button_label|default('Enregistrer') }}
    </button>
</div>

{{ form_end(form) }}
{# --- FORM END --- #}", "admin/utilisateur/_form.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/admin/utilisateur/_form.html.twig");
    }
}
