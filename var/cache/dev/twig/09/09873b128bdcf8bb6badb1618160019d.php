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

/* chat/chat.html.twig */
class __TwigTemplate_82e8a1c1cbc23d0cb16a92af1346a11c extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/chat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/chat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat/chat.html.twig", 2);
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

        yield "Chatbot";
        
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
        yield "<style>
    .chat-container {
        max-width: 600px;
        margin: 50px auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        background: #f9f9f9;
    }
    .message {
        margin-bottom: 10px;
    }
    .user {
        text-align: right;
        color: blue;
    }
    .bot {
        text-align: left;
        color: green;
    }
    .input-group {
        margin-top: 20px;
    }
</style>

<div class=\"chat-container\">
    <h2>Chat with AI 🤖</h2>
    <div id=\"chat-box\"></div>

    <div class=\"input-group\">
        <input type=\"text\" id=\"message-input\" placeholder=\"Type your message...\" class=\"form-control\" autofocus>
        <button onclick=\"sendMessage()\" class=\"btn btn-primary mt-2\">Send</button>
    </div>
</div>

<script>
    async function sendMessage() {
        const input = document.getElementById('message-input');
        const chatBox = document.getElementById('chat-box');
        const message = input.value.trim();
        if (!message) return;

        // Display user message
        chatBox.innerHTML += `<div class=\"message user\"><strong>You:</strong> \${message}</div>`;
        chatBox.scrollTop = chatBox.scrollHeight;

        input.value = '';
        input.disabled = true;

        try {
            const response = await fetch(\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_message");
        yield "\", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ message }),
            });

            const data = await response.json();

            chatBox.innerHTML += `<div class=\"message bot\"><strong>Bot:</strong> \${data.reply}</div>`;
            chatBox.scrollTop = chatBox.scrollHeight;
        } catch (error) {
            chatBox.innerHTML += `<div class=\"message bot\"><strong>Bot:</strong> Sorry, error occurred.</div>`;
        } finally {
            input.disabled = false;
            input.focus();
        }
    }

    document.getElementById('message-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
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
        return "chat/chat.html.twig";
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
        return array (  152 => 57,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/chat/chat.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Chatbot{% endblock %}

{% block body %}
<style>
    .chat-container {
        max-width: 600px;
        margin: 50px auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        background: #f9f9f9;
    }
    .message {
        margin-bottom: 10px;
    }
    .user {
        text-align: right;
        color: blue;
    }
    .bot {
        text-align: left;
        color: green;
    }
    .input-group {
        margin-top: 20px;
    }
</style>

<div class=\"chat-container\">
    <h2>Chat with AI 🤖</h2>
    <div id=\"chat-box\"></div>

    <div class=\"input-group\">
        <input type=\"text\" id=\"message-input\" placeholder=\"Type your message...\" class=\"form-control\" autofocus>
        <button onclick=\"sendMessage()\" class=\"btn btn-primary mt-2\">Send</button>
    </div>
</div>

<script>
    async function sendMessage() {
        const input = document.getElementById('message-input');
        const chatBox = document.getElementById('chat-box');
        const message = input.value.trim();
        if (!message) return;

        // Display user message
        chatBox.innerHTML += `<div class=\"message user\"><strong>You:</strong> \${message}</div>`;
        chatBox.scrollTop = chatBox.scrollHeight;

        input.value = '';
        input.disabled = true;

        try {
            const response = await fetch(\"{{ path('chat_message') }}\", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ message }),
            });

            const data = await response.json();

            chatBox.innerHTML += `<div class=\"message bot\"><strong>Bot:</strong> \${data.reply}</div>`;
            chatBox.scrollTop = chatBox.scrollHeight;
        } catch (error) {
            chatBox.innerHTML += `<div class=\"message bot\"><strong>Bot:</strong> Sorry, error occurred.</div>`;
        } finally {
            input.disabled = false;
            input.focus();
        }
    }

    document.getElementById('message-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
</script>
{% endblock %}
", "chat/chat.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/chat/chat.html.twig");
    }
}
