
// JavaScript Implementation (save as phone-call.js)
class TunisianSupportCall {
    constructor() {
        this.isCallActive = false;
        this.isRecording = false;
        this.mediaRecorder = null;
        this.audioChunks = [];
        this.callTimer = null;
        this.callDuration = 0;
        this.conversationHistory = [];

        // Tunisian support phrases for electric scooter rental
        this.phrases = {
            greeting: "السلام عليكم، مرحبا بيك في خدمة كراء التروتينات الكهربائية. كيفاش نجم نعاونك اليوم؟",
            waiting: "ستنى لحظة نشوفلك...",
            found: "هاني لقيتلك",
            thinking: "خليني نفكر شوية...",
            notUnderstood: "سامحني، ما فهمتش عليك. نجرب نعاود؟",
            callEnding: "شكرا على الاتصال. نتمنالك رحلة زينة مع التروتينات متاعنا!"
        };

        // For demo purposes, we'll simulate API responses about electric scooter rental
        this.responses = [
            "باش تكري تروتينات (trotinette) عندنا، نزل التطبيقة من المتجر متاع الهاتف، سجل و دخل البطاقة البنكية متاعك، و مبعد تنجم تسكاني الكود QR اللي على التروتينات و تبدا رحلتك.",
            "التسعيرة متاع كراء التروتينات الكهربائية هي: 900 مليم باش تبدا و بعدها 300 مليم للدقيقة. العرض اليومي بـ 15 دينار نجم تستعمل فيه التروتينات نهار كامل بلا حدود.",
            "إذا لقيت مشكلة في التروتينات، اضغط على زر 'مشكلة' في التطبيقة و اختار نوع المشكلة. و إذا عندك حالة طارئة، تنجم تتصل بالرقم 9090 بصفة مباشرة.",
            "وين تلقى التروتينات؟ كاينة في وسط المدينة، قدام الجامعات، و في العديد من المناطق السياحية. فتح التطبيقة باش تشوف أقرب تروتينات ليك.",
            "باش تخلص على الخدمة، تنجم تستعمل البطاقة البنكية والا تستعمل التطبيقة متاع البنك. كل شيء يتسجل أوتوماتيكيا بعد ما تكمل الرحلة متاعك و تقفل التروتينات."
        ];

        this.initElements();
        this.initEventListeners();
    }

    initElements() {
        this.callButton = document.getElementById('callButton');
        this.endCallButton = document.getElementById('endCallButton');
        this.micButton = document.getElementById('micButton');
        this.callStatus = document.getElementById('callStatus');
        this.callTimer = document.getElementById('callTimer');
        this.conversationDisplay = document.getElementById('conversationDisplay');
        this.callAnimation = document.getElementById('callAnimation');
    }

    initEventListeners() {
        this.callButton.addEventListener('click', () => this.startCall());
        this.endCallButton.addEventListener('click', () => this.endCall());
        this.micButton.addEventListener('click', () => this.toggleMic());
    }

    startCall() {
        this.isCallActive = true;
        this.callButton.classList.add('hidden');
        this.endCallButton.classList.remove('hidden');

        // Show connecting animation
        this.callStatus.textContent = "جاري الاتصال...";

        const connectingDiv = document.createElement('div');
        connectingDiv.className = 'call-connecting';
        connectingDiv.textContent = "جاري الاتصال بخدمة الدعم...";
        this.conversationDisplay.appendChild(connectingDiv);

        // Simulate connection delay
        setTimeout(() => {
            this.conversationDisplay.innerHTML = '';
            this.callStatus.textContent = "متصل";
            this.micButton.classList.remove('hidden');

            // Start call timer
            this.startCallTimer();

            // Add agent greeting
            this.addMessage(this.phrases.greeting, 'agent');

            // Simulate the agent's voice (in a real implementation, you'd use text-to-speech API)
            this.playDemoAudio('greeting');
        }, 3000);
    }

    endCall() {
        if (!this.isCallActive) return;

        this.isCallActive = false;
        this.stopCallTimer();

        // Update UI
        this.callStatus.textContent = "انتهت المكالمة";
        this.endCallButton.classList.add('hidden');
        this.micButton.classList.add('hidden');

        // Add ending message
        this.addMessage(this.phrases.callEnding, 'agent');

        // Simulate the agent's voice for goodbye
        this.playDemoAudio('goodbye');

        // Reset after a delay
        setTimeout(() => {
            this.callButton.classList.remove('hidden');
            this.callStatus.textContent = "خدمة الدعم";
            this.callTimer.textContent = "00:00";
            this.conversationDisplay.innerHTML = '';
            this.conversationHistory = [];
            this.callDuration = 0;
        }, 3000);
    }

    toggleMic() {
        if (!this.isCallActive) return;

        if (!this.isRecording) {
            this.startRecording();
        } else {
            this.stopRecording();
        }
    }

    async startRecording() {
        try {
            // In a real implementation, you'd use the browser's MediaRecorder API
            // For demo, we'll simulate recording
            this.isRecording = true;
            this.micButton.classList.add('active');

            // Show recording indicator
            this.addMessage("جاري التسجيل...", 'user');

            // In a real implementation, this would be the microphone recording code:
            /*
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            this.audioChunks = [];
            this.mediaRecorder = new MediaRecorder(stream);

            this.mediaRecorder.addEventListener('dataavailable', event => {
              if (event.data.size > 0) {
                this.audioChunks.push(event.data);
              }
            });

            this.mediaRecorder.start();
            */

            // Simulate a 3-second recording for the demo
            setTimeout(() => {
                if (this.isRecording) {
                    this.stopRecording();
                }
            }, 3000);

        } catch (error) {
            console.error('Error starting recording:', error);
        }
    }

    async stopRecording() {
        this.isRecording = false;
        this.micButton.classList.remove('active');

        // In a real implementation, you would stop the MediaRecorder and process the audio
        // For this demo, we'll simulate a random user query

        // Simulate user queries about electric scooter rental for the demo
        const demoQueries = [
            "كيفاش نكري تروتينات عندكم؟",
            "قداش يكلف كراء التروتينات؟",
            "عندي مشكلة في التروتينات، شنوة نعمل؟",
            "وين نلقى التروتينات متاعكم؟",
            "كيفاش نخلص على الخدمة؟"
        ];

        // Pick a random query
        const randomIndex = Math.floor(Math.random() * demoQueries.length);
        const userQuery = demoQueries[randomIndex];

        // Update UI with the "transcribed" query
        const userMessages = this.conversationDisplay.querySelectorAll('.user-message');
        const lastUserMessage = userMessages[userMessages.length - 1];
        lastUserMessage.textContent = userQuery;

        // Add timestamp to message
        const timeElement = document.createElement('span');
        timeElement.className = 'message-time';
        const now = new Date();
        timeElement.textContent = `${now.getHours()}:${String(now.getMinutes()).padStart(2, '0')}`;
        lastUserMessage.appendChild(timeElement);

        // Add to conversation history
        this.conversationHistory.push({
            role: 'user',
            content: userQuery
        });

        // Show waiting message
        const waitingDiv = document.createElement('div');
        waitingDiv.className = 'waiting-message';
        waitingDiv.textContent = this.phrases.waiting;
        this.conversationDisplay.appendChild(waitingDiv);

        // Scroll to bottom
        this.conversationDisplay.scrollTop = this.conversationDisplay.scrollHeight;

        // Simulate agent thinking (in a real implementation, this would be API request time)
        setTimeout(() => {
            // Remove waiting message
            this.conversationDisplay.removeChild(waitingDiv);

            // Show "found" message briefly
            const foundDiv = document.createElement('div');
            foundDiv.className = 'waiting-message';
            foundDiv.textContent = this.phrases.found;
            this.conversationDisplay.appendChild(foundDiv);

            setTimeout(() => {
                // Remove "found" message
                this.conversationDisplay.removeChild(foundDiv);

                // Get response that matches the query
                const response = this.responses[randomIndex];

                // Add agent response
                this.addMessage(response, 'agent');

                // Simulate the agent's voice (in a real implementation, you'd use text-to-speech API)
                this.playDemoAudio('response');

            }, 1000);
        }, 3000);
    }

    addMessage(text, sender) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        messageElement.classList.add(sender === 'user' ? 'user-message' : 'agent-message');
        messageElement.textContent = text;

        if (text !== "جاري التسجيل...") {
            const timeElement = document.createElement('span');
            timeElement.classList.add('message-time');
            const now = new Date();
            timeElement.textContent = `${now.getHours()}:${String(now.getMinutes()).padStart(2, '0')}`;
            messageElement.appendChild(timeElement);
        }

        this.conversationDisplay.appendChild(messageElement);
        this.conversationDisplay.scrollTop = this.conversationDisplay.scrollHeight;
    }

    startCallTimer() {
        this.callTimerInterval = setInterval(() => {
            this.callDuration++;
            const minutes = Math.floor(this.callDuration / 60);
            const seconds = this.callDuration % 60;
            this.callTimer.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }, 1000);
    }

    stopCallTimer() {
        clearInterval(this.callTimerInterval);
    }

    // In a real implementation, this would use the Web Audio API or audio elements
    // For this demo, we'll simulate audio playback
    playDemoAudio(type) {
        console.log(`Playing ${type} audio...`);
        // Show sound waves animation
        const soundWaves = document.querySelector('.sound-waves');
        soundWaves.style.display = 'flex';

        // In a real implementation, you would create and play an audio element
        // setTimeout is just for demo purposes
        setTimeout(() => {
            soundWaves.style.display = 'none';
        }, type === 'greeting' ? 3000 : (type === 'goodbye' ? 2000 : 4000));
    }
}

// Initialize when the page loads
document.addEventListener('DOMContentLoaded', () => {
    window.supportCall = new TunisianSupportCall();
});