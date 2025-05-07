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

/* client/profile/view.html.twig */
class __TwigTemplate_5792b20173ee54763e84bb6b1fc9d217 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/profile/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/profile/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/profile/view.html.twig", 2);
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

        yield "Mon Profil - TrottiCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 9
        yield "    <style>
        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-primary { color: #3b82f6; border-color: #3b82f6; background-color: transparent;} .button-outline-primary:hover { background-color: #eff6ff; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons */

        /* Additional helper classes */
        .ms-2 { margin-left: 0.5rem; }
        .mb-1 { margin-bottom: 0.25rem; }
        .mt-3 { margin-top: 1rem; }
        .p-3 { padding: 0.75rem; }

        /* Webcam styles */
        #webcamFeed { background-color: #f3f4f6; /* gray-100 */ }
        #videoOverlay { background-color: rgba(0, 0, 0, 0.5); /* black opacity 50 */ }
        #videoOverlay .spinner-border { width: 3rem; height: 3rem; border-width: .3em; } /* Adjust spinner */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
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

        // line 36
        yield "    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-4xl\">

            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">Mon Profil</h1>

            ";
        // line 42
        yield "            ";
        try {
            $_v0 = $this->loadTemplate("partials/_flash_messages.html.twig", "client/profile/view.html.twig", 42);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 43
        yield "
            ";
        // line 45
        yield "            <div class=\"bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 mb-6\">
                <div class=\"px-6 py-4 border-b border-gray-200 flex justify-between items-center\">
                    <h2 class=\"text-lg font-medium text-gray-900 flex items-center\">
                        <i class=\"bi bi-person-badge me-2\"></i>Informations Personnelles
                    </h2>
                    <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profile_edit");
        yield "\" class=\"button button-outline-primary button-sm\">
                        <i class=\"bi bi-pencil-square me-1\"></i> Modifier
                    </a>
                </div>
                <div class=\"p-6\">
                    <dl class=\"grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-4\">
                        <div class=\"md:col-span-1\">
                            <dt class=\"text-sm font-medium text-gray-500\">Nom Complet</dt>
                            <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 58, $this->source); })()), "fullName", [], "any", false, false, false, 58), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"md:col-span-2\">
                            <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                            <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), "html", null, true);
        yield "</dd>
                        </div>
                        <div class=\"md:col-span-1\">
                            <dt class=\"text-sm font-medium text-gray-500\">Téléphone</dt>
                            <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "telephone", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 66, $this->source); })()), "telephone", [], "any", false, false, false, 66), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        yield "</dd>
                        </div>
                    </dl>
                </div>
            </div>

            ";
        // line 73
        yield "            <div class=\"bg-white rounded-lg shadow-md overflow-hidden border border-gray-200\">
                <div class=\"px-6 py-4 border-b border-gray-200\">
                    <h2 class=\"text-lg font-medium text-gray-900 flex items-center\">
                        <i class=\"bi bi-camera-video-fill me-2\"></i>Configuration Faciale
                    </h2>
                </div>
                <div class=\"p-6\">
                    <div id=\"face-setup-area\">
                        ";
        // line 82
        yield "                        ";
        if ((isset($context["has_face_setup"]) || array_key_exists("has_face_setup", $context) ? $context["has_face_setup"] : (function () { throw new RuntimeError('Variable "has_face_setup" does not exist.', 82, $this->source); })())) {
            // line 83
            yield "                            <div id=\"face-configured-alert\" class=\"bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex justify-between items-center\" role=\"alert\">
                                <span class=\"flex items-center\"><i class=\"bi bi-check-circle-fill me-2\"></i>Reconnaissance faciale configurée.</span>
                                <button id=\"recaptureFaceButton\" class=\"button button-outline-secondary button-sm\">
                                    <i class=\"bi bi-arrow-repeat me-1\"></i>Reconfigurer
                                </button>
                            </div>
                        ";
        } else {
            // line 90
            yield "                            <div id=\"face-not-configured-alert\" class=\"bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative flex justify-between items-center\" role=\"alert\">
                                <span class=\"flex items-center\"><i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Non configurée.</span>
                                <button id=\"setupFaceButton\" class=\"button button-warning button-sm text-white\"> ";
            // line 93
            yield "                                    <i class=\"bi bi-camera-fill me-1\"></i> Configurer maintenant
                                </button>
                            </div>
                        ";
        }
        // line 97
        yield "
                        ";
        // line 99
        yield "                        <div id=\"face-capture-ui\" style=\"display: none;\" class=\"mt-4 border border-gray-300 p-4 rounded bg-gray-50\">
                            <p class=\"text-center text-sm text-gray-600 mb-4\">Placez votre visage clairement dans le cadre et cliquez sur \"Capturer\". Assurez un bon éclairage.</p>
                            <div class=\"flex justify-center mb-4\">
                                ";
        // line 103
        yield "                                <div class=\"relative inline-block w-[320px] h-[240px]\"> ";
        // line 104
        yield "                                    <video id=\"webcamFeed\" width=\"320\" height=\"240\" autoplay playsinline muted class=\"border border-gray-300 rounded shadow-sm bg-gray-200 block\"></video>
                                    ";
        // line 106
        yield "                                    <div id=\"videoOverlay\" class=\"absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded\" style=\"display: none; pointer-events: none;\">
                                        ";
        // line 108
        yield "                                        <svg class=\"animate-spin h-8 w-8 text-white\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                            <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path>
                                        </svg>
                                    </div>
                                </div>
                                ";
        // line 115
        yield "                                <canvas id=\"captureCanvas\" width=\"320\" height=\"240\" class=\"hidden\"></canvas>
                            </div>
                            <div class=\"flex justify-center flex-wrap gap-2 mb-3\">
                                <button id=\"startCaptureButton\" class=\"button button-secondary button-sm\">
                                    <i class=\"bi bi-camera-video-fill me-1\"></i> Activer Webcam
                                </button>
                                <button id=\"captureFaceButton\" class=\"button button-primary button-sm\" disabled> ";
        // line 122
        yield "                                    <i class=\"bi bi-camera-fill me-1\"></i> Capturer mon visage
                                </button>
                                <button id=\"cancelCaptureButton\" class=\"button button-outline-secondary button-sm\">
                                    <i class=\"bi bi-x-lg me-1\"></i> Annuler
                                </button>
                            </div>
                            <div id=\"faceSetupStatus\" class=\"mt-2 text-center text-sm text-gray-600\"></div> ";
        // line 129
        yield "                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 134
        yield "
        </div> ";
        // line 136
        yield "    </div> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 139
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

        // line 140
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 142
        yield "    ";
        // line 143
        yield "    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            // --- DOM Elements ---
            const webcamFeed = document.getElementById('webcamFeed');
            const captureCanvas = document.getElementById('captureCanvas');
            const startCaptureButton = document.getElementById('startCaptureButton');
            const captureButton = document.getElementById('captureFaceButton');
            const recaptureButton = document.getElementById('recaptureFaceButton');
            const setupFaceButton = document.getElementById('setupFaceButton'); // Button in the 'not configured' alert
            const cancelCaptureButton = document.getElementById('cancelCaptureButton');
            const statusDiv = document.getElementById('faceSetupStatus');
            const captureUI = document.getElementById('face-capture-ui');
            const videoOverlay = document.getElementById('videoOverlay');
            const faceConfiguredAlert = document.getElementById('face-configured-alert');
            const faceNotConfiguredAlert = document.getElementById('face-not-configured-alert');
            // Context retrieval moved inside capture function where needed

            let stream = null;
            let modelsLoaded = false;
            const MODEL_URL = '/models'; // Path where you placed the face-api models
            const setupUrl = \"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profile_setup_face");
        yield "\"; // Use the correct route name

            // --- Load FaceAPI Models ---
            async function loadModels() {
                if (modelsLoaded) return true;
                statusDiv.textContent = 'Chargement des modèles IA...';
                statusDiv.className = 'mt-2 text-center text-sm text-blue-600'; // Use Tailwind color
                if(videoOverlay) videoOverlay.style.display = 'flex';
                if(startCaptureButton) startCaptureButton.disabled = true;
                if(captureButton) captureButton.disabled = true;

                try {
                    await Promise.all([
                        faceapi.nets.ssdMobilenetv1.loadFromUri(MODEL_URL),
                        faceapi.nets.faceLandmark68Net.loadFromUri(MODEL_URL),
                        faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL)
                    ]);
                    console.log(\"FaceAPI models loaded successfully for profile setup\");
                    modelsLoaded = true;
                    statusDiv.textContent = 'Modèles chargés. Activez la webcam.';
                    statusDiv.className = 'mt-2 text-center text-sm text-gray-600'; // Tailwind color
                    if(startCaptureButton) startCaptureButton.disabled = false; // Enable webcam start button
                    return true;
                } catch (error) {
                    console.error(\"Error loading FaceAPI models:\", error);
                    statusDiv.textContent = 'Erreur chargement modèles IA.';
                    statusDiv.className = 'mt-2 text-center text-sm text-red-600'; // Tailwind color
                    if(startCaptureButton) startCaptureButton.disabled = true;
                    if(captureButton) captureButton.disabled = true;
                    return false;
                } finally {
                    if(videoOverlay) videoOverlay.style.display = 'none';
                }
            }

            // --- Start Webcam ---
            async function startWebcam() {
                stopWebcam(); // Stop previous stream if any
                statusDiv.textContent = 'Activation webcam...';
                statusDiv.className = 'mt-2 text-center text-sm text-blue-600'; // Tailwind color
                if(videoOverlay) videoOverlay.style.display = 'flex';
                if(captureButton) captureButton.disabled = true; // Disable capture until ready
                if(startCaptureButton) startCaptureButton.disabled = true; // Disable start button while starting

                try {
                    if (!modelsLoaded) {
                        const loaded = await loadModels(); // Ensure models are loaded first
                        if (!loaded) return; // Stop if models failed to load
                    }

                    stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: 'user' }, audio: false });
                    if(webcamFeed) webcamFeed.srcObject = stream;
                    // Use a promise to wait for video playing
                    await new Promise((resolve) => {
                        if (webcamFeed) webcamFeed.onloadedmetadata = () => {
                            webcamFeed.play(); // Ensure video plays
                            resolve(true);
                        };
                    });
                    statusDiv.textContent = 'Webcam active. Centrez votre visage et capturez.';
                    statusDiv.className = 'mt-2 text-center text-sm text-gray-600'; // Tailwind color
                    if(videoOverlay) videoOverlay.style.display = 'none';
                    if(captureButton) captureButton.disabled = false; // Enable the actual capture button
                    if(startCaptureButton) startCaptureButton.textContent = 'Webcam Active'; // Change text
                    console.log(\"Webcam started for profile setup.\");

                } catch (err) {
                    console.error(\"Webcam Error:\", err);
                    let message = \"Erreur webcam.\";
                    if (err.name === \"NotAllowedError\") message = \"Permission webcam refusée.\";
                    else if (err.name === \"NotFoundError\") message = \"Webcam non trouvée.\";
                    statusDiv.textContent = message;
                    statusDiv.className = 'mt-2 text-center text-sm text-red-600'; // Tailwind color
                    if(videoOverlay) videoOverlay.style.display = 'none';
                    if(startCaptureButton) {
                        startCaptureButton.disabled = false; // Re-enable start button on error
                        startCaptureButton.textContent = 'Activer Webcam';
                    }
                    if(captureButton) captureButton.disabled = true;
                }
            }

            // --- Stop Webcam ---
            function stopWebcam() {
                if (stream) {
                    stream.getTracks().forEach(track => track.stop());
                    console.log(\"Webcam stopped for profile setup.\");
                }
                stream = null;
                if(webcamFeed) webcamFeed.srcObject = null;
                if(startCaptureButton) {
                    startCaptureButton.disabled = false;
                    startCaptureButton.textContent = 'Activer Webcam';
                }
                if(captureButton) captureButton.disabled = true;
            }

            // --- Show/Hide Capture UI ---
            function showCaptureUI(show) {
                if (!captureUI) return;
                captureUI.style.display = show ? 'block' : 'none';
                if (show) {
                    loadModels(); // Start loading models immediately when shown
                } else {
                    stopWebcam();
                    statusDiv.textContent = '';
                    statusDiv.className = 'mt-2 text-center text-sm text-gray-600'; // Reset class
                }
                // Toggle visibility of the alert messages
                if(faceConfiguredAlert) faceConfiguredAlert.style.display = show ? 'none' : 'flex';
                if(faceNotConfiguredAlert) faceNotConfiguredAlert.style.display = show ? 'none' : 'flex';
            }

            // --- Capture Face and Send Data ---
            async function captureAndSendData() {
                if (!modelsLoaded) { statusDiv.textContent = 'Modèles non chargés.'; statusDiv.className = 'mt-2 text-center text-sm text-yellow-600'; return; }
                if (!stream || !webcamFeed || webcamFeed.readyState < 3) { statusDiv.textContent = 'Webcam non active.'; statusDiv.className = 'mt-2 text-center text-sm text-yellow-600'; return; }

                statusDiv.textContent = 'Détection du visage...';
                statusDiv.className = 'mt-2 text-center text-sm text-blue-600'; // Tailwind color
                if(captureButton) captureButton.disabled = true;
                if(cancelCaptureButton) cancelCaptureButton.disabled = true;
                if(videoOverlay) videoOverlay.style.display = 'flex';

                try {
                    const detection = await faceapi.detectSingleFace(webcamFeed)
                        .withFaceLandmarks()
                        .withFaceDescriptor();

                    if (detection) {
                        const descriptorString = Array.from(detection.descriptor).join(',');
                        statusDiv.textContent = \"Visage détecté. Envoi des données...\";
                        statusDiv.className = 'mt-2 text-center text-sm text-blue-600';

                        const response = await fetch(setupUrl, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                                'Accept': 'application/json',
                            },
                            body: `face_embedding_data=\${encodeURIComponent(descriptorString)}`
                        });
                        const result = await response.json();

                        if (response.ok && result.success) {
                            statusDiv.textContent = result.message || 'Configuration réussie!';
                            statusDiv.className = 'mt-2 text-center text-sm p-2 rounded bg-green-100 text-green-700'; // Tailwind alert style
                            setTimeout(() => window.location.reload(), 2000);
                        } else {
                            statusDiv.textContent = `Erreur: \${result.message || 'Échec.'}`;
                            statusDiv.className = 'mt-2 text-center text-sm p-2 rounded bg-red-100 text-red-700'; // Tailwind alert style
                            if(captureButton) captureButton.disabled = false;
                            if(cancelCaptureButton) cancelCaptureButton.disabled = false;
                        }
                    } else {
                        statusDiv.textContent = 'Aucun visage détecté. Réessayez.';
                        statusDiv.className = 'mt-2 text-center text-sm text-yellow-600';
                        if(captureButton) captureButton.disabled = false;
                        if(cancelCaptureButton) cancelCaptureButton.disabled = false;
                    }
                } catch (error) {
                    console.error(\"Error during face detection/sending:\", error);
                    statusDiv.textContent = 'Erreur technique lors du traitement.';
                    statusDiv.className = 'mt-2 text-center text-sm text-red-600';
                    if(captureButton) captureButton.disabled = false;
                    if(cancelCaptureButton) cancelCaptureButton.disabled = false;
                } finally {
                    if(videoOverlay) videoOverlay.style.display = 'none';
                }
            }

            // --- Event Listeners ---
            if (startCaptureButton) startCaptureButton.addEventListener('click', startWebcam);
            if (captureButton) captureButton.addEventListener('click', captureAndSendData);
            if (cancelCaptureButton) cancelCaptureButton.addEventListener('click', () => showCaptureUI(false));
            if (recaptureButton) recaptureButton.addEventListener('click', () => showCaptureUI(true));
            if (setupFaceButton) setupFaceButton.addEventListener('click', () => showCaptureUI(true));

            // --- Initial State ---
            // By default, hide the capture UI
            if(captureUI) captureUI.style.display = 'none';


            // --- Cleanup ---
            window.addEventListener('beforeunload', stopWebcam);
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
        return "client/profile/view.html.twig";
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
        return array (  351 => 163,  329 => 143,  327 => 142,  322 => 140,  309 => 139,  298 => 136,  295 => 134,  289 => 129,  281 => 122,  273 => 115,  265 => 108,  262 => 106,  259 => 104,  257 => 103,  252 => 99,  249 => 97,  243 => 93,  239 => 90,  230 => 83,  227 => 82,  217 => 73,  208 => 66,  201 => 62,  194 => 58,  183 => 50,  176 => 45,  173 => 43,  162 => 42,  155 => 36,  142 => 35,  107 => 9,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/client/profile/view.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mon Profil - TrottiCare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Ensure Tailwind is loaded via base.html.twig #}
    <style>
        /* Reusable Button Styles */
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: 500; text-align: center; cursor: pointer; transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out; border: 1px solid transparent; line-height: 1.25; font-size: 0.875rem; white-space: nowrap; }
        .button-sm { padding: 0.375rem 0.75rem; font-size: 0.75rem; }
        .button-primary { background-color: #3b82f6; color: white; border-color: #3b82f6; } .button-primary:hover { background-color: #2563eb; border-color: #1d4ed8;}
        .button-secondary { background-color: #e5e7eb; color: #374151; border-color: #d1d5db; } .button-secondary:hover { background-color: #d1d5db; border-color: #9ca3af;}
        .button-warning { background-color: #f59e0b; color: white; border-color: #f59e0b; } .button-warning:hover { background-color: #d97706; border-color: #b45309; }
        .button-outline-secondary { color: #6b7280; border-color: #d1d5db; background-color: transparent;} .button-outline-secondary:hover { background-color: #f3f4f6; }
        .button-outline-primary { color: #3b82f6; border-color: #3b82f6; background-color: transparent;} .button-outline-primary:hover { background-color: #eff6ff; }
        .button:disabled { opacity: 0.6; cursor: not-allowed; }

        /* FontAwesome Icons */

        /* Additional helper classes */
        .ms-2 { margin-left: 0.5rem; }
        .mb-1 { margin-bottom: 0.25rem; }
        .mt-3 { margin-top: 1rem; }
        .p-3 { padding: 0.75rem; }

        /* Webcam styles */
        #webcamFeed { background-color: #f3f4f6; /* gray-100 */ }
        #videoOverlay { background-color: rgba(0, 0, 0, 0.5); /* black opacity 50 */ }
        #videoOverlay .spinner-border { width: 3rem; height: 3rem; border-width: .3em; } /* Adjust spinner */
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-100 p-4 md:p-6 lg:p-8\">
        <div class=\"container mx-auto max-w-4xl\">

            <h1 class=\"text-2xl lg:text-3xl font-bold text-gray-900 mb-6\">Mon Profil</h1>

            {# Flash Messages #}
            {% include 'partials/_flash_messages.html.twig' ignore missing %}

            {# Standard profile info card - Tailwind styled #}
            <div class=\"bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 mb-6\">
                <div class=\"px-6 py-4 border-b border-gray-200 flex justify-between items-center\">
                    <h2 class=\"text-lg font-medium text-gray-900 flex items-center\">
                        <i class=\"bi bi-person-badge me-2\"></i>Informations Personnelles
                    </h2>
                    <a href=\"{{ path('app_client_profile_edit') }}\" class=\"button button-outline-primary button-sm\">
                        <i class=\"bi bi-pencil-square me-1\"></i> Modifier
                    </a>
                </div>
                <div class=\"p-6\">
                    <dl class=\"grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-4\">
                        <div class=\"md:col-span-1\">
                            <dt class=\"text-sm font-medium text-gray-500\">Nom Complet</dt>
                            <dd class=\"mt-1 text-sm text-gray-900\">{{ utilisateur.fullName }}</dd>
                        </div>
                        <div class=\"md:col-span-2\">
                            <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                            <dd class=\"mt-1 text-sm text-gray-900\">{{ utilisateur.email }}</dd>
                        </div>
                        <div class=\"md:col-span-1\">
                            <dt class=\"text-sm font-medium text-gray-500\">Téléphone</dt>
                            <dd class=\"mt-1 text-sm text-gray-900\">{{ utilisateur.telephone | default('Non renseigné') }}</dd>
                        </div>
                    </dl>
                </div>
            </div>

            {# --- Facial Recognition Setup Section - Tailwind styled --- #}
            <div class=\"bg-white rounded-lg shadow-md overflow-hidden border border-gray-200\">
                <div class=\"px-6 py-4 border-b border-gray-200\">
                    <h2 class=\"text-lg font-medium text-gray-900 flex items-center\">
                        <i class=\"bi bi-camera-video-fill me-2\"></i>Configuration Faciale
                    </h2>
                </div>
                <div class=\"p-6\">
                    <div id=\"face-setup-area\">
                        {# Status message based on whether embedding exists #}
                        {% if has_face_setup %}
                            <div id=\"face-configured-alert\" class=\"bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex justify-between items-center\" role=\"alert\">
                                <span class=\"flex items-center\"><i class=\"bi bi-check-circle-fill me-2\"></i>Reconnaissance faciale configurée.</span>
                                <button id=\"recaptureFaceButton\" class=\"button button-outline-secondary button-sm\">
                                    <i class=\"bi bi-arrow-repeat me-1\"></i>Reconfigurer
                                </button>
                            </div>
                        {% else %}
                            <div id=\"face-not-configured-alert\" class=\"bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative flex justify-between items-center\" role=\"alert\">
                                <span class=\"flex items-center\"><i class=\"bi bi-exclamation-triangle-fill me-2\"></i>Non configurée.</span>
                                <button id=\"setupFaceButton\" class=\"button button-warning button-sm text-white\"> {# Added text-white #}
                                    <i class=\"bi bi-camera-fill me-1\"></i> Configurer maintenant
                                </button>
                            </div>
                        {% endif %}

                        {# Capture UI: Hidden by default - Tailwind styled #}
                        <div id=\"face-capture-ui\" style=\"display: none;\" class=\"mt-4 border border-gray-300 p-4 rounded bg-gray-50\">
                            <p class=\"text-center text-sm text-gray-600 mb-4\">Placez votre visage clairement dans le cadre et cliquez sur \"Capturer\". Assurez un bon éclairage.</p>
                            <div class=\"flex justify-center mb-4\">
                                {# Container for the video feed #}
                                <div class=\"relative inline-block w-[320px] h-[240px]\"> {# Fixed size container #}
                                    <video id=\"webcamFeed\" width=\"320\" height=\"240\" autoplay playsinline muted class=\"border border-gray-300 rounded shadow-sm bg-gray-200 block\"></video>
                                    {# Overlay for loading/status #}
                                    <div id=\"videoOverlay\" class=\"absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded\" style=\"display: none; pointer-events: none;\">
                                        {# Tailwind Spinner #}
                                        <svg class=\"animate-spin h-8 w-8 text-white\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                            <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path>
                                        </svg>
                                    </div>
                                </div>
                                {# Hidden canvas for capturing frames #}
                                <canvas id=\"captureCanvas\" width=\"320\" height=\"240\" class=\"hidden\"></canvas>
                            </div>
                            <div class=\"flex justify-center flex-wrap gap-2 mb-3\">
                                <button id=\"startCaptureButton\" class=\"button button-secondary button-sm\">
                                    <i class=\"bi bi-camera-video-fill me-1\"></i> Activer Webcam
                                </button>
                                <button id=\"captureFaceButton\" class=\"button button-primary button-sm\" disabled> {# Disabled initially #}
                                    <i class=\"bi bi-camera-fill me-1\"></i> Capturer mon visage
                                </button>
                                <button id=\"cancelCaptureButton\" class=\"button button-outline-secondary button-sm\">
                                    <i class=\"bi bi-x-lg me-1\"></i> Annuler
                                </button>
                            </div>
                            <div id=\"faceSetupStatus\" class=\"mt-2 text-center text-sm text-gray-600\"></div> {# Status messages appear here #}
                        </div>
                    </div>
                </div>
            </div>
            {# --- END Facial Recognition Setup Section --- #}

        </div> {# End Container #}
    </div> {# End Page Wrapper #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Make sure face-api.min.js is included #}
    {# --- JavaScript for Face Capture (No changes needed from previous version) --- #}
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            // --- DOM Elements ---
            const webcamFeed = document.getElementById('webcamFeed');
            const captureCanvas = document.getElementById('captureCanvas');
            const startCaptureButton = document.getElementById('startCaptureButton');
            const captureButton = document.getElementById('captureFaceButton');
            const recaptureButton = document.getElementById('recaptureFaceButton');
            const setupFaceButton = document.getElementById('setupFaceButton'); // Button in the 'not configured' alert
            const cancelCaptureButton = document.getElementById('cancelCaptureButton');
            const statusDiv = document.getElementById('faceSetupStatus');
            const captureUI = document.getElementById('face-capture-ui');
            const videoOverlay = document.getElementById('videoOverlay');
            const faceConfiguredAlert = document.getElementById('face-configured-alert');
            const faceNotConfiguredAlert = document.getElementById('face-not-configured-alert');
            // Context retrieval moved inside capture function where needed

            let stream = null;
            let modelsLoaded = false;
            const MODEL_URL = '/models'; // Path where you placed the face-api models
            const setupUrl = \"{{ path('app_client_profile_setup_face') }}\"; // Use the correct route name

            // --- Load FaceAPI Models ---
            async function loadModels() {
                if (modelsLoaded) return true;
                statusDiv.textContent = 'Chargement des modèles IA...';
                statusDiv.className = 'mt-2 text-center text-sm text-blue-600'; // Use Tailwind color
                if(videoOverlay) videoOverlay.style.display = 'flex';
                if(startCaptureButton) startCaptureButton.disabled = true;
                if(captureButton) captureButton.disabled = true;

                try {
                    await Promise.all([
                        faceapi.nets.ssdMobilenetv1.loadFromUri(MODEL_URL),
                        faceapi.nets.faceLandmark68Net.loadFromUri(MODEL_URL),
                        faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL)
                    ]);
                    console.log(\"FaceAPI models loaded successfully for profile setup\");
                    modelsLoaded = true;
                    statusDiv.textContent = 'Modèles chargés. Activez la webcam.';
                    statusDiv.className = 'mt-2 text-center text-sm text-gray-600'; // Tailwind color
                    if(startCaptureButton) startCaptureButton.disabled = false; // Enable webcam start button
                    return true;
                } catch (error) {
                    console.error(\"Error loading FaceAPI models:\", error);
                    statusDiv.textContent = 'Erreur chargement modèles IA.';
                    statusDiv.className = 'mt-2 text-center text-sm text-red-600'; // Tailwind color
                    if(startCaptureButton) startCaptureButton.disabled = true;
                    if(captureButton) captureButton.disabled = true;
                    return false;
                } finally {
                    if(videoOverlay) videoOverlay.style.display = 'none';
                }
            }

            // --- Start Webcam ---
            async function startWebcam() {
                stopWebcam(); // Stop previous stream if any
                statusDiv.textContent = 'Activation webcam...';
                statusDiv.className = 'mt-2 text-center text-sm text-blue-600'; // Tailwind color
                if(videoOverlay) videoOverlay.style.display = 'flex';
                if(captureButton) captureButton.disabled = true; // Disable capture until ready
                if(startCaptureButton) startCaptureButton.disabled = true; // Disable start button while starting

                try {
                    if (!modelsLoaded) {
                        const loaded = await loadModels(); // Ensure models are loaded first
                        if (!loaded) return; // Stop if models failed to load
                    }

                    stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: 'user' }, audio: false });
                    if(webcamFeed) webcamFeed.srcObject = stream;
                    // Use a promise to wait for video playing
                    await new Promise((resolve) => {
                        if (webcamFeed) webcamFeed.onloadedmetadata = () => {
                            webcamFeed.play(); // Ensure video plays
                            resolve(true);
                        };
                    });
                    statusDiv.textContent = 'Webcam active. Centrez votre visage et capturez.';
                    statusDiv.className = 'mt-2 text-center text-sm text-gray-600'; // Tailwind color
                    if(videoOverlay) videoOverlay.style.display = 'none';
                    if(captureButton) captureButton.disabled = false; // Enable the actual capture button
                    if(startCaptureButton) startCaptureButton.textContent = 'Webcam Active'; // Change text
                    console.log(\"Webcam started for profile setup.\");

                } catch (err) {
                    console.error(\"Webcam Error:\", err);
                    let message = \"Erreur webcam.\";
                    if (err.name === \"NotAllowedError\") message = \"Permission webcam refusée.\";
                    else if (err.name === \"NotFoundError\") message = \"Webcam non trouvée.\";
                    statusDiv.textContent = message;
                    statusDiv.className = 'mt-2 text-center text-sm text-red-600'; // Tailwind color
                    if(videoOverlay) videoOverlay.style.display = 'none';
                    if(startCaptureButton) {
                        startCaptureButton.disabled = false; // Re-enable start button on error
                        startCaptureButton.textContent = 'Activer Webcam';
                    }
                    if(captureButton) captureButton.disabled = true;
                }
            }

            // --- Stop Webcam ---
            function stopWebcam() {
                if (stream) {
                    stream.getTracks().forEach(track => track.stop());
                    console.log(\"Webcam stopped for profile setup.\");
                }
                stream = null;
                if(webcamFeed) webcamFeed.srcObject = null;
                if(startCaptureButton) {
                    startCaptureButton.disabled = false;
                    startCaptureButton.textContent = 'Activer Webcam';
                }
                if(captureButton) captureButton.disabled = true;
            }

            // --- Show/Hide Capture UI ---
            function showCaptureUI(show) {
                if (!captureUI) return;
                captureUI.style.display = show ? 'block' : 'none';
                if (show) {
                    loadModels(); // Start loading models immediately when shown
                } else {
                    stopWebcam();
                    statusDiv.textContent = '';
                    statusDiv.className = 'mt-2 text-center text-sm text-gray-600'; // Reset class
                }
                // Toggle visibility of the alert messages
                if(faceConfiguredAlert) faceConfiguredAlert.style.display = show ? 'none' : 'flex';
                if(faceNotConfiguredAlert) faceNotConfiguredAlert.style.display = show ? 'none' : 'flex';
            }

            // --- Capture Face and Send Data ---
            async function captureAndSendData() {
                if (!modelsLoaded) { statusDiv.textContent = 'Modèles non chargés.'; statusDiv.className = 'mt-2 text-center text-sm text-yellow-600'; return; }
                if (!stream || !webcamFeed || webcamFeed.readyState < 3) { statusDiv.textContent = 'Webcam non active.'; statusDiv.className = 'mt-2 text-center text-sm text-yellow-600'; return; }

                statusDiv.textContent = 'Détection du visage...';
                statusDiv.className = 'mt-2 text-center text-sm text-blue-600'; // Tailwind color
                if(captureButton) captureButton.disabled = true;
                if(cancelCaptureButton) cancelCaptureButton.disabled = true;
                if(videoOverlay) videoOverlay.style.display = 'flex';

                try {
                    const detection = await faceapi.detectSingleFace(webcamFeed)
                        .withFaceLandmarks()
                        .withFaceDescriptor();

                    if (detection) {
                        const descriptorString = Array.from(detection.descriptor).join(',');
                        statusDiv.textContent = \"Visage détecté. Envoi des données...\";
                        statusDiv.className = 'mt-2 text-center text-sm text-blue-600';

                        const response = await fetch(setupUrl, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                                'Accept': 'application/json',
                            },
                            body: `face_embedding_data=\${encodeURIComponent(descriptorString)}`
                        });
                        const result = await response.json();

                        if (response.ok && result.success) {
                            statusDiv.textContent = result.message || 'Configuration réussie!';
                            statusDiv.className = 'mt-2 text-center text-sm p-2 rounded bg-green-100 text-green-700'; // Tailwind alert style
                            setTimeout(() => window.location.reload(), 2000);
                        } else {
                            statusDiv.textContent = `Erreur: \${result.message || 'Échec.'}`;
                            statusDiv.className = 'mt-2 text-center text-sm p-2 rounded bg-red-100 text-red-700'; // Tailwind alert style
                            if(captureButton) captureButton.disabled = false;
                            if(cancelCaptureButton) cancelCaptureButton.disabled = false;
                        }
                    } else {
                        statusDiv.textContent = 'Aucun visage détecté. Réessayez.';
                        statusDiv.className = 'mt-2 text-center text-sm text-yellow-600';
                        if(captureButton) captureButton.disabled = false;
                        if(cancelCaptureButton) cancelCaptureButton.disabled = false;
                    }
                } catch (error) {
                    console.error(\"Error during face detection/sending:\", error);
                    statusDiv.textContent = 'Erreur technique lors du traitement.';
                    statusDiv.className = 'mt-2 text-center text-sm text-red-600';
                    if(captureButton) captureButton.disabled = false;
                    if(cancelCaptureButton) cancelCaptureButton.disabled = false;
                } finally {
                    if(videoOverlay) videoOverlay.style.display = 'none';
                }
            }

            // --- Event Listeners ---
            if (startCaptureButton) startCaptureButton.addEventListener('click', startWebcam);
            if (captureButton) captureButton.addEventListener('click', captureAndSendData);
            if (cancelCaptureButton) cancelCaptureButton.addEventListener('click', () => showCaptureUI(false));
            if (recaptureButton) recaptureButton.addEventListener('click', () => showCaptureUI(true));
            if (setupFaceButton) setupFaceButton.addEventListener('click', () => showCaptureUI(true));

            // --- Initial State ---
            // By default, hide the capture UI
            if(captureUI) captureUI.style.display = 'none';


            // --- Cleanup ---
            window.addEventListener('beforeunload', stopWebcam);
        });
    </script>
    {# --- END JavaScript for Face Capture --- #}
{% endblock %}", "client/profile/view.html.twig", "/Users/mac/Downloads/my_project_troti-vf/templates/client/profile/view.html.twig");
    }
}
