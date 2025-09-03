<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Md Lakibul Hasan - Backend Developer Portfolio. Experienced in PHP, Laravel, Node.js, and scalable web application development.')">
    <meta name="keywords" content="Backend Developer, PHP, Laravel, Node.js, API Development, Database Design, Dhaka, Bangladesh">
    <meta name="author" content="Md Lakibul Hasan">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#3b82f6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Lakibul Portfolio">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('meta_title', 'Md Lakibul Hasan - Backend Developer')">
    <meta property="og:description" content="@yield('meta_description', 'Experienced Backend Developer specializing in PHP, Laravel, and Node.js')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('meta_title', 'Md Lakibul Hasan - Backend Developer')">
    <meta name="twitter:description" content="@yield('meta_description', 'Experienced Backend Developer specializing in PHP, Laravel, and Node.js')">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}">

    <title>@yield('title', 'Md Lakibul Hasan - Backend Developer Portfolio')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icon-192x192.png') }}">

    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.tailwindcss.com">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        'primary': {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        },
                        'dark': {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Animation CSS -->
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Enhanced Animations */
        @keyframes slideUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-20px) rotate(2deg); }
            66% { transform: translateY(-10px) rotate(-2deg); }
        }

        @keyframes floatDelayed {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-15px) rotate(-1deg); }
            66% { transform: translateY(-25px) rotate(1deg); }
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(3deg); }
        }

        @keyframes floatFast {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-10px) rotate(1deg); }
            75% { transform: translateY(-5px) rotate(-1deg); }
        }

        @keyframes gradientX {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: .5; }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Animation Classes */
        .animate-slide-up {
            animation: slideUp 1s ease-out forwards;
        }

        .animate-slide-up-delay-1 {
            animation: slideUp 1s ease-out 0.2s forwards;
        }

        .animate-slide-up-delay-2 {
            animation: slideUp 1s ease-out 0.4s forwards;
        }

        .animate-slide-up-delay-3 {
            animation: slideUp 1s ease-out 0.6s forwards;
        }

        .animate-slide-up-delay-4 {
            animation: slideUp 1s ease-out 0.8s forwards;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: floatDelayed 8s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: floatSlow 10s ease-in-out infinite;
        }

        .animate-float-fast {
            animation: floatFast 4s ease-in-out infinite;
        }

        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradientX 3s ease infinite;
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .animate-fadeInLeft {
            animation: fadeInLeft 0.6s ease-out forwards;
        }

        .animate-fadeInRight {
            animation: fadeInRight 0.6s ease-out forwards;
        }

        .animate-delay-100 {
            animation-delay: 0.1s;
        }

        .animate-delay-200 {
            animation-delay: 0.2s;
        }

        .animate-delay-300 {
            animation-delay: 0.3s;
        }

        .animate-delay-400 {
            animation-delay: 0.4s;
        }

        /* Particle Positioning */
        .particle:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { top: 60%; left: 80%; animation-delay: 2s; }
        .particle:nth-child(3) { top: 30%; left: 70%; animation-delay: 4s; }
        .particle:nth-child(4) { top: 80%; left: 20%; animation-delay: 1s; }
        .particle:nth-child(5) { top: 50%; left: 50%; animation-delay: 3s; }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Glassmorphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .glass {
            background: rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Loading animation */
        .loading {
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Hidden by default for animations */
        .animate-slide-up,
        .animate-slide-up-delay-1,
        .animate-slide-up-delay-2,
        .animate-slide-up-delay-3,
        .animate-slide-up-delay-4 {
            opacity: 0;
        }
    </style>

    @stack('styles')
</head>
<body class="font-sans antialiased bg-white dark:bg-dark-900 text-gray-900 dark:text-white">
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 bg-white dark:bg-dark-900 z-50 flex items-center justify-center">
        <div class="animate-spin rounded-full h-32 w-32 border-b-2 border-primary-600"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-40 bg-white/80 dark:bg-dark-900/80 backdrop-blur-md border-b border-gray-200 dark:border-dark-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="#hero" class="text-xl font-bold gradient-text">Lakibul Hasan</a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#about" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">About</a>
                        <a href="#skills" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Skills</a>
                        <a href="#experience" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Experience</a>
                        <a href="#projects" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Projects</a>
                        <a href="#contact" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Contact</a>
                    </div>
                </div>

                <!-- Theme Toggle -->
                <div class="flex items-center space-x-4">
                    <button id="theme-toggle" class="p-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden bg-white dark:bg-dark-900 border-t border-gray-200 dark:border-dark-700">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">About</a>
                <a href="#skills" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Skills</a>
                <a href="#experience" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Experience</a>
                <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Projects</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 dark:bg-dark-800 border-t border-gray-200 dark:border-dark-700">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-600 dark:text-gray-400">
                    &copy; {{ date('Y') }} Md Lakibul Hasan. All rights reserved.
                </p>
                <p class="text-sm text-gray-500 dark:text-gray-500 mt-2">
                    Built with Laravel & Tailwind CSS
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
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
                this.setupScrollEffects();
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
                            const offsetTop = target.offsetTop - 80;
                            window.scrollTo({
                                top: offsetTop,
                                behavior: 'smooth'
                            });
                            if (mobileMenu) mobileMenu.classList.add('hidden');
                        }
                    });
                });

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
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('loading');
                        }
                    });
                }, observerOptions);

                document.querySelectorAll('.animate-fadeInUp, .animate-fadeInLeft, .animate-fadeInRight').forEach(el => {
                    observer.observe(el);
                });
            }

            setupScrollEffects() {
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

            setupPerformanceOptimizations() {
                if ('IntersectionObserver' in window) {
                    const imageObserver = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const img = entry.target;
                                if (img.dataset.src) {
                                    img.src = img.dataset.src;
                                    img.classList.remove('lazy');
                                    imageObserver.unobserve(img);
                                }
                            }
                        });
                    });

                    document.querySelectorAll('img[data-src]').forEach(img => {
                        imageObserver.observe(img);
                    });
                }
            }

            triggerInitialAnimations() {
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
    </script>
    <script>
        // Loading screen
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.style.opacity = '0';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 300);
        });

        // Theme toggle
        const themeToggle = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Check for saved theme preference or default to 'light'
        const theme = localStorage.getItem('theme') || 'light';

        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        themeToggle.addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');

            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                themeToggleDarkIcon.classList.add('hidden');
                themeToggleLightIcon.classList.remove('hidden');
            } else {
                localStorage.setItem('theme', 'light');
                themeToggleLightIcon.classList.add('hidden');
                themeToggleDarkIcon.classList.remove('hidden');
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');

                // Toggle icons
                if (menuIcon && closeIcon) {
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                }
            });
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuIcon = document.getElementById('menu-icon');
                    const closeIcon = document.getElementById('close-icon');

                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');

                        // Reset icons to menu state
                        if (menuIcon && closeIcon) {
                            menuIcon.classList.remove('hidden');
                            closeIcon.classList.add('hidden');
                        }
                    }
                }
            });
        });

        // Active navigation highlighting
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-primary-600', 'dark:text-primary-400');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('text-primary-600', 'dark:text-primary-400');
                }
            });
        });

        // Enhanced Portfolio functionality
        class EnhancedPortfolio {
            constructor() {
                this.initLoading();
                this.initEnhancedAnimations();
                this.initScrollEffects();
                this.initTheme();
                this.initNavigation();
                this.initProgressBar();
                this.setupPerformanceOptimizations();
            }

            initLoading() {
                window.addEventListener('load', () => {
                    const loadingScreen = document.getElementById('loading-screen');
                    if (loadingScreen) {
                        loadingScreen.style.opacity = '0';
                        setTimeout(() => {
                            loadingScreen.style.display = 'none';
                            this.triggerInitialAnimations();
                        }, 300);
                    }
                });
            }

            initEnhancedAnimations() {
                // Intersection Observer for slide-up animations
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.animation = entry.target.style.animation ||
                                'slideUp 1s ease-out forwards';
                        }
                    });
                }, observerOptions);

                // Observe elements with slide-up animations
                document.querySelectorAll('.animate-slide-up, .animate-slide-up-delay-1, .animate-slide-up-delay-2, .animate-slide-up-delay-3, .animate-slide-up-delay-4')
                    .forEach(el => observer.observe(el));

                // Parallax effect for floating particles
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    const parallax = document.querySelectorAll('.particle');
                    const speed = 0.5;

                    parallax.forEach((element, index) => {
                        const yPos = -(scrolled * (speed + index * 0.1));
                        element.style.transform = `translateY(${yPos}px)`;
                    });
                });

                // Enhanced hover effects for project cards
                document.querySelectorAll('.group').forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-8px) scale(1.02)';
                    });

                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0) scale(1)';
                    });
                });
            }

            initScrollEffects() {
                let ticking = false;

                window.addEventListener('scroll', () => {
                    if (!ticking) {
                        requestAnimationFrame(() => {
                            this.updateScrollEffects();
                            ticking = false;
                        });
                        ticking = true;
                    }
                });
            }

            updateScrollEffects() {
                const scrolled = window.pageYOffset;

                // Header background opacity with glassmorphism
                const header = document.querySelector('header');
                if (header) {
                    const opacity = Math.min(scrolled / 100, 0.95);
                    header.style.backgroundColor = `rgba(255, 255, 255, ${opacity})`;
                    header.style.backdropFilter = scrolled > 10 ? 'blur(10px)' : 'none';
                }

                // Parallax effect for hero section
                const hero = document.querySelector('#hero');
                if (hero && scrolled < window.innerHeight) {
                    hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            }

            initTheme() {
                const themeToggle = document.getElementById('theme-toggle');
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                const storedTheme = localStorage.getItem('theme');

                const theme = storedTheme || (prefersDark ? 'dark' : 'light');
                this.setTheme(theme);

                if (themeToggle) {
                    themeToggle.addEventListener('click', () => {
                        const currentTheme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
                        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                        this.setTheme(newTheme);
                        localStorage.setItem('theme', newTheme);
                    });
                }
            }

            setTheme(theme) {
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            }

            initNavigation() {
                const mobileMenuToggle = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                const menuIcon = document.getElementById('menu-icon');
                const closeIcon = document.getElementById('close-icon');

                if (mobileMenuToggle && mobileMenu) {
                    mobileMenuToggle.addEventListener('click', () => {
                        mobileMenu.classList.toggle('hidden');

                        // Toggle icons
                        if (menuIcon && closeIcon) {
                            menuIcon.classList.toggle('hidden');
                            closeIcon.classList.toggle('hidden');
                        }
                    });
                }

                // Smooth scroll for anchor links with offset
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            const offsetTop = target.offsetTop - 100;
                            window.scrollTo({
                                top: offsetTop,
                                behavior: 'smooth'
                            });

                            // Close mobile menu if open
                            const mobileMenu = document.getElementById('mobile-menu');
                            const menuIcon = document.getElementById('menu-icon');
                            const closeIcon = document.getElementById('close-icon');

                            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                                mobileMenu.classList.add('hidden');

                                // Reset icons to menu state
                                if (menuIcon && closeIcon) {
                                    menuIcon.classList.remove('hidden');
                                    closeIcon.classList.add('hidden');
                                }
                            }
                        }
                    });
                });
            }

            initProgressBar() {
                const progressBar = document.getElementById('scroll-progress');
                if (!progressBar) return;

                window.addEventListener('scroll', () => {
                    const scrollTop = window.pageYOffset;
                    const docHeight = document.body.scrollHeight - window.innerHeight;
                    const scrollPercent = (scrollTop / docHeight) * 100;
                    progressBar.style.width = scrollPercent + '%';
                });
            }

            setupPerformanceOptimizations() {
                // Intersection Observer for lazy loading
                if ('IntersectionObserver' in window) {
                    const imageObserver = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const img = entry.target;
                                if (img.dataset.src) {
                                    img.src = img.dataset.src;
                                    img.classList.remove('lazy');
                                    imageObserver.unobserve(img);
                                }
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
                const visibleElements = document.querySelectorAll('.animate-fadeInUp, .animate-fadeInLeft, .animate-fadeInRight');
                visibleElements.forEach((el, index) => {
                    if (this.isElementInViewport(el)) {
                        setTimeout(() => {
                            el.classList.add('loading');
                        }, index * 100);
                    }
                });

                // Trigger hero animations
                setTimeout(() => {
                    document.querySelectorAll('.animate-slide-up, .animate-slide-up-delay-1, .animate-slide-up-delay-2, .animate-slide-up-delay-3, .animate-slide-up-delay-4')
                        .forEach(el => {
                            el.style.opacity = '1';
                        });
                }, 500);
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

        // Initialize the enhanced portfolio
        new EnhancedPortfolio();

        // Add typing effect for specific elements
        function initTypingEffect() {
            const elements = document.querySelectorAll('.typing-effect');
            elements.forEach(element => {
                const text = element.textContent;
                element.textContent = '';
                element.style.opacity = '1';

                let i = 0;
                const timer = setInterval(() => {
                    if (i < text.length) {
                        element.textContent += text.charAt(i);
                        i++;
                    } else {
                        clearInterval(timer);
                    }
                }, 100);
            });
        }

        // Initialize after a delay
        setTimeout(initTypingEffect, 1000);

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('loading');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.querySelectorAll('.animate-fadeInUp, .animate-fadeInLeft, .animate-fadeInRight').forEach(el => {
            observer.observe(el);
        });
    </script>

    @stack('scripts')
</body>
</html>
