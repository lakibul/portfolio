<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Md Lakibul Hasan - Backend Developer Portfolio. Experienced in PHP, Laravel, Node.js, and scalable web application development.')">
    <meta name="keywords" content="Backend Developer, PHP, Laravel, Node.js, API Development, Database Design, Dhaka, Bangladesh">
    <meta name="author" content="Md Lakibul Hasan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        document.documentElement.classList.remove('dark');
        try { localStorage.setItem('theme', 'light'); } catch (e) {}
    </script>

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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                        'mono': ['"JetBrains Mono"', 'ui-monospace', 'monospace'],
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
<body class="font-sans antialiased bg-white text-slate-900">
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="w-10 h-10 rounded-full border-2 border-slate-200 border-t-indigo-600 animate-spin"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-40 bg-white/90 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="#hero" class="font-mono text-sm font-bold text-white tracking-tight">Md Lakibul<span class="text-indigo-400">.dev</span></a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#about" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">About</a>
                        <a href="#skills" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Skills</a>
                        <a href="#experience" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Experience</a>
                        <a href="#projects" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Projects</a>
                        <a href="#contact" class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Contact</a>
                    </div>
                </div>

                <!-- Theme Toggle -->
                <div class="flex items-center space-x-4">
                    <button id="theme-toggle" class="hidden p-2 rounded-md text-gray-700 hover:text-indigo-600 transition-colors" aria-hidden="true" tabindex="-1">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-slate-100">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">About</a>
                <a href="#skills" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Skills</a>
                <a href="#experience" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Experience</a>
                <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Projects</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-slate-500 text-sm">
                &copy; {{ date('Y') }} <span class="font-semibold text-slate-300">Md Lakibul Hasan</span>. All rights reserved.
            </p>
            <p class="font-mono text-xs text-slate-600">Built with Laravel &amp; Tailwind CSS</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        (function () {
            // Force white/light theme on every page load.
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');

            // ── Loading screen ─────────────────────────────────────────────────
            window.addEventListener('load', () => {
                const screen = document.getElementById('loading-screen');
                if (!screen) return;
                screen.style.transition = 'opacity 0.3s ease';
                screen.style.opacity = '0';
                setTimeout(() => screen.remove(), 350);
            });

            // ── Mobile menu ────────────────────────────────────────────────────
            document.getElementById('mobile-menu-button')?.addEventListener('click', () => {
                document.getElementById('mobile-menu')?.classList.toggle('hidden');
            });

            // ── Smooth scroll + close mobile menu ─────────────────────────────
            document.addEventListener('click', e => {
                const anchor = e.target.closest('a[href^="#"]');
                if (!anchor) return;
                const target = document.querySelector(anchor.getAttribute('href'));
                if (!target) return;
                e.preventDefault();
                window.scrollTo({ top: target.offsetTop - 64, behavior: 'smooth' });
                document.getElementById('mobile-menu')?.classList.add('hidden');
            });

            // ── Active nav highlighting ────────────────────────────────────────
            const navLinks = document.querySelectorAll('.nav-link');
            const sectionObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    const id = entry.target.id;
                    navLinks.forEach(link => {
                        link.classList.toggle('text-indigo-600', link.getAttribute('href') === `#${id}`);
                        link.classList.toggle('dark:text-indigo-400', link.getAttribute('href') === `#${id}`);
                    });
                });
            }, { threshold: 0.35, rootMargin: '-64px 0px -40% 0px' });
            document.querySelectorAll('section[id]').forEach(s => sectionObserver.observe(s));

            // ── Scroll progress bar ────────────────────────────────────────────
            const bar = document.createElement('div');
            bar.style.cssText = 'position:fixed;top:0;left:0;width:0;height:3px;background:linear-gradient(90deg,#6366f1,#06b6d4);z-index:9999;transition:width .2s ease;pointer-events:none';
            document.body.prepend(bar);
            window.addEventListener('scroll', () => {
                bar.style.width = (window.scrollY / (document.body.scrollHeight - innerHeight) * 100) + '%';
            }, { passive: true });
        })();
    </script>

    @stack('scripts')
</body>
</html>
