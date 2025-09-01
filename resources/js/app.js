import './bootstrap';

// Portfolio JavaScript - Enhanced Interactivity
class Portfolio {
    constructor() {
        this.init();
    }

    init() {
        this.setupLoading();
        this.setupNavigation();
        this.setupTheme();
        this.setupAnimations();
        this.setupTypewriter();
        this.setupParticles();
        this.setupScrollEffects();
        this.setupContactForm();
        this.setupPerformanceOptimizations();
    }

    setupLoading() {
        window.addEventListener('load', () => {
            const loadingScreen = document.getElementById('loading-screen');
            if (loadingScreen) {
                setTimeout(() => {
                    loadingScreen.style.opacity = '0';
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                        this.triggerInitialAnimations();
                    }, 300);
                }, 500);
            }
        });
    }

    setupNavigation() {
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(anchor.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Account for fixed header
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                    // Close mobile menu if open
                    if (mobileMenu) mobileMenu.classList.add('hidden');
                }
            });
        });

        // Active navigation highlighting
        this.setupActiveNavigation();
    }

    setupActiveNavigation() {
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('text-primary-600', 'dark:text-primary-400');
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('text-primary-600', 'dark:text-primary-400');
                        }
                    });
                }
            });
        }, {
            threshold: 0.3,
            rootMargin: '-80px 0px -50% 0px'
        });

        sections.forEach(section => observer.observe(section));
    }

    setupTheme() {
        const themeToggle = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Check for saved theme preference or default to 'light'
        const theme = localStorage.getItem('theme') ||
                    (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

        this.setTheme(theme);

        if (themeToggle) {
            themeToggle.addEventListener('click', () => {
                const currentTheme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                this.setTheme(newTheme);
            });
        }
    }

    setTheme(theme) {
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            if (themeToggleDarkIcon) themeToggleDarkIcon.classList.add('hidden');
            if (themeToggleLightIcon) themeToggleLightIcon.classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            if (themeToggleLightIcon) themeToggleLightIcon.classList.add('hidden');
            if (themeToggleDarkIcon) themeToggleDarkIcon.classList.remove('hidden');
        }
    }

    setupAnimations() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('loading');
                    // Add stagger effect for child elements
                    const children = entry.target.querySelectorAll('.animate-fadeInUp, .animate-fadeInLeft, .animate-fadeInRight');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('loading');
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.querySelectorAll('.animate-fadeInUp, .animate-fadeInLeft, .animate-fadeInRight').forEach(el => {
            observer.observe(el);
        });
    }

    setupTypewriter() {
        const typewriterElement = document.querySelector('.typewriter-text');
        if (typewriterElement) {
            const texts = [
                'Backend Developer',
                'API Architect',
                'Database Designer',
                'Problem Solver'
            ];
            let currentTextIndex = 0;
            let currentCharIndex = 0;
            let isDeleting = false;

            const typeSpeed = 100;
            const deleteSpeed = 50;
            const pauseTime = 2000;

            const typeWriter = () => {
                const currentText = texts[currentTextIndex];

                if (isDeleting) {
                    typewriterElement.textContent = currentText.substring(0, currentCharIndex - 1);
                    currentCharIndex--;
                } else {
                    typewriterElement.textContent = currentText.substring(0, currentCharIndex + 1);
                    currentCharIndex++;
                }

                let nextDelay = isDeleting ? deleteSpeed : typeSpeed;

                if (!isDeleting && currentCharIndex === currentText.length) {
                    nextDelay = pauseTime;
                    isDeleting = true;
                } else if (isDeleting && currentCharIndex === 0) {
                    isDeleting = false;
                    currentTextIndex = (currentTextIndex + 1) % texts.length;
                }

                setTimeout(typeWriter, nextDelay);
            };

            // Start typewriter effect after a delay
            setTimeout(typeWriter, 1000);
        }
    }

    setupParticles() {
        // Simple particle system for hero section
        const canvas = document.createElement('canvas');
        const heroSection = document.getElementById('hero');

        if (heroSection) {
            canvas.style.position = 'absolute';
            canvas.style.top = '0';
            canvas.style.left = '0';
            canvas.style.width = '100%';
            canvas.style.height = '100%';
            canvas.style.pointerEvents = 'none';
            canvas.style.zIndex = '1';

            heroSection.style.position = 'relative';
            heroSection.appendChild(canvas);

            const ctx = canvas.getContext('2d');
            let particles = [];

            const resizeCanvas = () => {
                canvas.width = heroSection.offsetWidth;
                canvas.height = heroSection.offsetHeight;
            };

            const createParticles = () => {
                particles = [];
                const particleCount = Math.min(50, Math.floor(canvas.width / 20));

                for (let i = 0; i < particleCount; i++) {
                    particles.push({
                        x: Math.random() * canvas.width,
                        y: Math.random() * canvas.height,
                        vx: (Math.random() - 0.5) * 0.5,
                        vy: (Math.random() - 0.5) * 0.5,
                        radius: Math.random() * 2 + 1,
                        opacity: Math.random() * 0.5 + 0.2
                    });
                }
            };

            const animateParticles = () => {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                particles.forEach(particle => {
                    particle.x += particle.vx;
                    particle.y += particle.vy;

                    if (particle.x < 0 || particle.x > canvas.width) particle.vx *= -1;
                    if (particle.y < 0 || particle.y > canvas.height) particle.vy *= -1;

                    ctx.beginPath();
                    ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(59, 130, 246, ${particle.opacity})`;
                    ctx.fill();
                });

                requestAnimationFrame(animateParticles);
            };

            resizeCanvas();
            createParticles();
            animateParticles();

            window.addEventListener('resize', () => {
                resizeCanvas();
                createParticles();
            });
        }
    }

    setupScrollEffects() {
        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSection = document.getElementById('hero');

            if (heroSection) {
                const rate = scrolled * -0.5;
                heroSection.style.transform = `translateY(${rate}px)`;
            }
        });

        // Progress indicator
        const progressBar = document.createElement('div');
        progressBar.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #1d4ed8);
            z-index: 9999;
            transition: width 0.3s ease;
        `;
        document.body.appendChild(progressBar);

        window.addEventListener('scroll', () => {
            const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
            progressBar.style.width = scrollPercent + '%';
        });
    }

    setupContactForm() {
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                await this.handleContactFormSubmission(contactForm);
            });
        }
    }

    async handleContactFormSubmission(form) {
        const submitBtn = form.querySelector('button[type="submit"]');
        const submitText = document.getElementById('submit-text');
        const submitLoading = document.getElementById('submit-loading');
        const messageDiv = document.getElementById('form-message');

        // Show loading state
        submitBtn.disabled = true;
        submitText.classList.add('hidden');
        submitLoading.classList.remove('hidden');

        try {
            const formData = new FormData(form);
            const response = await fetch(form.action || '/contact', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ||
                                   form.querySelector('[name="_token"]')?.value
                }
            });

            const data = await response.json();

            if (data.success) {
                this.showMessage(messageDiv, data.message, 'success');
                form.reset();
            } else {
                throw new Error(data.message || 'Something went wrong');
            }
        } catch (error) {
            this.showMessage(messageDiv, 'Failed to send message. Please try again or contact me directly.', 'error');
        } finally {
            // Reset button state
            submitBtn.disabled = false;
            submitText.classList.remove('hidden');
            submitLoading.classList.add('hidden');
        }
    }

    showMessage(container, message, type) {
        const bgColor = type === 'success' ? 'bg-green-100 dark:bg-green-900' : 'bg-red-100 dark:bg-red-900';
        const borderColor = type === 'success' ? 'border-green-400 dark:border-green-600' : 'border-red-400 dark:border-red-600';
        const textColor = type === 'success' ? 'text-green-700 dark:text-green-300' : 'text-red-700 dark:text-red-300';

        container.innerHTML = `
            <div class="${bgColor} border ${borderColor} ${textColor} px-4 py-3 rounded">
                ${message}
            </div>
        `;
        container.classList.remove('hidden');

        // Hide message after 5 seconds
        setTimeout(() => {
            container.classList.add('hidden');
        }, 5000);
    }

    setupPerformanceOptimizations() {
        // Lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Preload critical resources
        const preloadLinks = [
            'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap'
        ];

        preloadLinks.forEach(href => {
            const link = document.createElement('link');
            link.rel = 'preload';
            link.as = 'style';
            link.href = href;
            document.head.appendChild(link);
        });
    }

    triggerInitialAnimations() {
        // Trigger animations for visible elements
        const visibleElements = document.querySelectorAll('.animate-fadeInUp, .animate-fadeInLeft, .animate-fadeInRight');
        visibleElements.forEach((el, index) => {
            if (this.isElementInViewport(el)) {
                setTimeout(() => {
                    el.classList.add('loading');
                }, index * 100);
            }
        });
    }

    isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
}

// Initialize portfolio when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new Portfolio();
});

// Service Worker for PWA functionality (optional)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}
