// Main JavaScript file for Trotticare Events Template

document.addEventListener('DOMContentLoaded', () => {
    console.log('Trotticare Events Template - Initialized');
    
    // Initialize all components
    initNavbar();
    initAnimations();
    initParallax();
    initProgressBar();
    initCounters();
    initParticles();
    initTooltips();
    initCarousels();

    // Add smooth loading effect
    document.body.classList.add('loaded');
});

// Navbar effects
function initNavbar() {
    const navbar = document.querySelector('.navbar');
    
    if (!navbar) return;
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

// Initialize animations based on scroll position
function initAnimations() {
    const elements = document.querySelectorAll('.fade-in, .slide-up, .slide-in-left, .slide-in-right');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationDelay = entry.target.dataset.delay || '0s';
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    elements.forEach(element => {
        element.style.animationPlayState = 'paused';
        observer.observe(element);
    });
}

// Parallax effect
function initParallax() {
    const parallaxElements = document.querySelectorAll('.parallax');
    
    window.addEventListener('scroll', () => {
        const scrollY = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const speed = element.dataset.speed || 0.5;
            element.style.transform = `translateY(${scrollY * speed}px)`;
        });
    });
}

// Progress bar that shows scroll progress
function initProgressBar() {
    const progressBar = document.querySelector('.progress-bar');
    
    if (!progressBar) return;
    
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        progressBar.style.width = scrolled + '%';
    });
}

// Number counter animation
function initCounters() {
    const counterElements = document.querySelectorAll('.counter-value');
    
    if (counterElements.length === 0) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.dataset.target);
                const duration = 2000; // ms
                const start = 0;
                const increment = target / (duration / 16);
                let currentCount = 0;
                
                const updateCount = () => {
                    currentCount += increment;
                    if (currentCount < target) {
                        entry.target.textContent = Math.ceil(currentCount);
                        requestAnimationFrame(updateCount);
                    } else {
                        entry.target.textContent = target;
                    }
                };
                
                updateCount();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counterElements.forEach(el => {
        observer.observe(el);
    });
}

// Create animated particles in the background
function initParticles() {
    const particleContainer = document.querySelector('.particle-container');
    
    if (!particleContainer) return;
    
    const numberOfParticles = 20;
    const colors = ['#4a90e2', '#50c878', '#ff6b6b'];
    
    for (let i = 0; i < numberOfParticles; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        
        // Random properties
        const size = Math.random() * 15 + 5;
        const color = colors[Math.floor(Math.random() * colors.length)];
        const left = Math.random() * 100;
        const top = Math.random() * 100;
        const animationDuration = (Math.random() * 20 + 10) + 's';
        
        // Apply styles
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.backgroundColor = color;
        particle.style.left = `${left}%`;
        particle.style.top = `${top}%`;
        particle.style.animation = `float ${animationDuration} infinite ease-in-out`;
        
        particleContainer.appendChild(particle);
    }
}

// Initialize Bootstrap tooltips
function initTooltips() {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

// Initialize carousels
function initCarousels() {
    const carousels = document.querySelectorAll('.carousel');
    
    carousels.forEach(carousel => {
        new bootstrap.Carousel(carousel, {
            interval: 5000,
            wrap: true
        });
    });
}

// Form validation
function validateForm(formId) {
    const form = document.getElementById(formId);
    
    if (!form) return false;
    
    let isValid = true;
    const inputs = form.querySelectorAll('input, textarea, select');
    
    inputs.forEach(input => {
        if (input.required && !input.value) {
            input.classList.add('is-invalid');
            isValid = false;
        } else {
            input.classList.remove('is-invalid');
        }
        
        // Email validation
        if (input.type === 'email' && input.value) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(input.value)) {
                input.classList.add('is-invalid');
                isValid = false;
            }
        }
    });
    
    return isValid;
}

// Show success message
function showSuccessMessage(message, targetId) {
    const target = document.getElementById(targetId);
    
    if (!target) return;
    
    const alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', 'alert-success', 'alert-dismissible', 'fade', 'show');
    alertDiv.setAttribute('role', 'alert');
    
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    target.prepend(alertDiv);
    
    // Automatically dismiss after 5 seconds
    setTimeout(() => {
        const bsAlert = new bootstrap.Alert(alertDiv);
        bsAlert.close();
    }, 5000);
}

// Show error message
function showErrorMessage(message, targetId) {
    const target = document.getElementById(targetId);
    
    if (!target) return;
    
    const alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', 'alert-danger', 'alert-dismissible', 'fade', 'show');
    alertDiv.setAttribute('role', 'alert');
    
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    target.prepend(alertDiv);
    
    // Automatically dismiss after 5 seconds
    setTimeout(() => {
        const bsAlert = new bootstrap.Alert(alertDiv);
        bsAlert.close();
    }, 5000);
}

// Toggle animation class
function toggleAnimation(elementId, animationClass) {
    const element = document.getElementById(elementId);
    
    if (!element) return;
    
    element.classList.add(animationClass);
    
    element.addEventListener('animationend', () => {
        element.classList.remove(animationClass);
    });
}

// Show modal with dynamic content
function showModal(title, content) {
    const modalEl = document.getElementById('dynamicModal');
    let modal;
    
    if (!modalEl) {
        // Create modal if it doesn't exist
        const modalDiv = document.createElement('div');
        modalDiv.classList.add('modal', 'fade');
        modalDiv.id = 'dynamicModal';
        modalDiv.setAttribute('tabindex', '-1');
        modalDiv.setAttribute('aria-hidden', 'true');
        
        modalDiv.innerHTML = `
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">${title}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ${content}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        `;
        
        document.body.appendChild(modalDiv);
        modal = new bootstrap.Modal(modalDiv);
    } else {
        // Update existing modal
        modalEl.querySelector('.modal-title').textContent = title;
        modalEl.querySelector('.modal-body').innerHTML = content;
        modal = new bootstrap.Modal(modalEl);
    }
    
    modal.show();
}
