@extends('layouts.app')

@section('title', $data['name'] . ' - ' . $data['title'])
@section('meta_description', 'Portfolio of ' . $data['name'] . ', ' . $data['title'] . ' specializing in software development with PHP, Laravel, Node.js and more.')

@section('content')
<!-- Navigation Dots -->
<nav class="fixed right-8 top-1/2 transform -translate-y-1/2 z-50 hidden lg:block">
    <div class="flex flex-col space-y-4">
        <a href="#hero" class="nav-dot active" data-section="hero">
            <span class="tooltip">Home</span>
        </a>
        <a href="#about" class="nav-dot" data-section="about">
            <span class="tooltip">About</span>
        </a>
        <a href="#skills" class="nav-dot" data-section="skills">
            <span class="tooltip">Skills</span>
        </a>
        <a href="#experience" class="nav-dot" data-section="experience">
            <span class="tooltip">Experience</span>
        </a>
        <a href="#projects" class="nav-dot" data-section="projects">
            <span class="tooltip">Projects</span>
        </a>
        <a href="#contact" class="nav-dot" data-section="contact">
            <span class="tooltip">Contact</span>
        </a>
    </div>
</nav>

<!-- Enhanced Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Advanced Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
        <!-- Animated Mesh Gradient -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-yellow-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
        </div>

        <!-- Floating Code Elements -->
        {{-- <div class="absolute inset-0 overflow-hidden mt-20">
            <div class="floating-code code-1">&lt;/&gt;</div>
            <div class="floating-code code-2">{}</div>
            <div class="floating-code code-3">$</div>
            <div class="floating-code code-4">const</div>
            <div class="floating-code code-5">function</div>
            <div class="floating-code code-6">class</div>
            <div class="floating-code code-7">return</div>
            <div class="floating-code code-8">async</div>
        </div> --}}

        <!-- Matrix Rain Effect -->
        <div class="matrix-bg">
            <canvas id="matrix" class="absolute inset-0 opacity-10"></canvas>
        </div>

        <!-- Geometric Shapes -->
        <div class="absolute inset-0">
            <div class="geometric-shape shape-1"></div>
            <div class="geometric-shape shape-2"></div>
            <div class="geometric-shape shape-3"></div>
        </div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <!-- Typing Animation Header -->
            <div class="mb-8">
                <p class="text-cyan-400 text-sm font-mono mb-2 opacity-80">
                    <span class="typing-cursor">$</span> whoami
                </p>
                <div class="typing-container">
                    <span class="text-gray-300 font-mono text-lg" id="typing-text"></span>
                    <span class="typing-cursor animate-pulse">|</span>
                </div>
            </div>

            <!-- Enhanced Profile Image with 3D Effect -->
            <div class="mb-12 group perspective-1000">
                <div class="relative inline-block transform-gpu">
                    <!-- Rotating Ring -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-cyan-400 via-purple-500 to-pink-500 p-1 animate-spin-slow">
                        <div class="w-full h-full rounded-full bg-slate-900"></div>
                    </div>

                    <!-- Holographic Border -->
                    <div class="absolute -inset-2 bg-gradient-to-r from-cyan-400 via-purple-500 to-pink-500 rounded-full blur-md opacity-30 group-hover:opacity-60 transition-opacity duration-500 animate-pulse-glow"></div>

                    <!-- Profile Image -->
                    <div class="relative z-10 w-48 h-48 md:w-56 md:h-56 rounded-full overflow-hidden group-hover:scale-105 transition-transform duration-500 transform-gpu">
                        <img src="https://lh3.googleusercontent.com/a/ACg8ocLFK5vvN32fPzvUhu64r5jqHsPSoBxarGi0SZgVwm02iRmRqGSupNkQXj8VAlV95DLT77YtJNSkX4PaLJlQYV0s2CqRnpJB=s288-c-no"
                             alt="{{ $data['name'] }}"
                             class="w-full h-full object-cover filter brightness-110 contrast-110 saturate-110"
                             onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['name']) }}&size=224&background=3b82f6&color=ffffff'">

                        <!-- Scanning Line Effect -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-cyan-400/20 to-transparent h-8 animate-scan"></div>
                    </div>

                    <!-- Status Badge with Animation -->
                    <div class="absolute -bottom-2 -right-2 z-20">
                        <div class="relative">
                            <div class="absolute inset-0 bg-green-400 rounded-full animate-ping"></div>
                            <div class="relative w-8 h-8 bg-green-500 rounded-full border-4 border-slate-900 flex items-center justify-center">
                                <div class="w-3 h-3 bg-green-300 rounded-full animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advanced Text Animations -->
            <div class="space-y-5">
                <div class="overflow-hidden">
                    <h1 class="text-6xl md:text-5xl lg:text-6xl font-black mb-6">
                        <span class="block text-white text-stroke animate-slide-in-left">Hello,</span>
                        <span class="block text-white animate-slide-in-right">I'm</span>
                        <span class="block bg-gradient-to-r from-cyan-400 via-purple-500 to-pink-500 bg-clip-text text-transparent animate-gradient-xy text-glow">
                            {{ $data['name'] }}
                        </span>
                    </h1>
                </div>

                <!-- Glitch Effect Title -->
                <div class="overflow-hidden">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-300 glitch-text animate-slide-up-delay-1">
                        <span class="glitch-layer" data-text="{{ $data['title'] }}">{{ $data['title'] }}</span>
                    </h2>
                </div>

                <!-- Typewriter Description -->
                {{-- <div class="overflow-hidden">
                    <p class="text-xl md:text-2xl text-gray-400 max-w-4xl mx-auto mb-12 leading-relaxed animate-slide-up-delay-2">
                        <span class="typewriter" data-text="{{ $data['tagline'] }}"></span>
                    </p>
                </div> --}}

                <!-- Enhanced CTA Buttons with Morphing Effects -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center animate-slide-up-delay-3">
                    <a href="#contact" class="group relative px-10 py-5 bg-gradient-to-r from-cyan-500 to-purple-600 text-white rounded-2xl font-bold text-lg shadow-2xl hover:shadow-cyan-500/25 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center">
                            <span class="mr-2">Let's Build Something</span>
                            <svg class="w-5 h-5 transform group-hover:rotate-45 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute -inset-2 bg-gradient-to-r from-cyan-400 to-purple-600 blur-lg opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                    </a>

                    <a href="{{ route('portfolio.download-cv') }}" class="group relative px-10 py-5 border-2 border-gray-600 text-gray-300 rounded-2xl font-bold text-lg transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 backdrop-blur-sm bg-white/5 hover:bg-white/10 hover:border-cyan-400 hover:text-cyan-400 neo-border">
                        <span class="flex items-center justify-center">
                            <span class="mr-2">Download CV</span>
                            <svg class="w-5 h-5 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Social Links with Floating Effect -->
                <div class="flex justify-center space-x-8 mt-16 animate-slide-up-delay-4">
                    <a href="{{ $data['linkedin'] }}" target="_blank" class="group social-icon linkedin">
                        <div class="relative w-14 h-14 bg-white/10 backdrop-blur-md rounded-xl flex items-center justify-center text-gray-400 hover:text-blue-400 transition-all duration-300 transform hover:-translate-y-3 hover:shadow-2xl hover:shadow-blue-400/25 border border-white/20 hover:border-blue-400/50">
                            <svg class="w-7 h-7 transform group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            <div class="absolute inset-0 bg-blue-400 rounded-xl opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        </div>
                    </a>

                    <a href="{{ $data['github'] }}" target="_blank" class="group social-icon github">
                        <div class="relative w-14 h-14 bg-white/10 backdrop-blur-md rounded-xl flex items-center justify-center text-gray-400 hover:text-gray-200 transition-all duration-300 transform hover:-translate-y-3 hover:shadow-2xl hover:shadow-gray-400/25 border border-white/20 hover:border-gray-400/50">
                            <svg class="w-7 h-7 transform group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            <div class="absolute inset-0 bg-gray-400 rounded-xl opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        </div>
                    </a>

                    <a href="mailto:{{ $data['email'] }}" class="group social-icon email">
                        <div class="relative w-14 h-14 bg-white/10 backdrop-blur-md rounded-xl flex items-center justify-center text-gray-400 hover:text-red-400 transition-all duration-300 transform hover:-translate-y-3 hover:shadow-2xl hover:shadow-red-400/25 border border-white/20 hover:border-red-400/50">
                            <svg class="w-7 h-7 transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <div class="absolute inset-0 bg-red-400 rounded-xl opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Advanced Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="flex flex-col items-center space-y-2 animate-bounce">
                <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-gradient-to-b from-cyan-400 to-purple-500 rounded-full mt-2 animate-scroll-indicator"></div>
                </div>
                <p class="text-gray-400 text-sm font-mono">scroll</p>
            </div>
        </div>
    </div>
</section>

<!-- Revolutionary About Section -->
<section id="about" class="py-32 relative overflow-hidden">
    <!-- Dynamic Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900/50 to-slate-900">
        <!-- Animated Grid -->
        <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>

        <!-- Floating Tech Icons -->
        {{-- <div class="absolute inset-0 overflow-hidden">
            <div class="tech-float tech-1">⚛️</div>
            <div class="tech-float tech-2">🚀</div>
            <div class="tech-float tech-3">💻</div>
            <div class="tech-float tech-4">🔥</div>
            <div class="tech-float tech-5">⚡</div>
            <div class="tech-float tech-6">🎯</div>
        </div> --}}

        <!-- Gradient Orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-cyan-500/20 rounded-full blur-3xl animate-pulse-slow animation-delay-2000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Enhanced Section Header -->
        <div class="text-center mb-20">
            <div class="inline-block mb-8">
                <span class="px-6 py-3 bg-gradient-to-r from-cyan-500/20 to-purple-500/20 rounded-full text-cyan-400 text-sm font-mono border border-cyan-500/30 backdrop-blur-sm">
                    &lt; About Me /&gt;
                </span>
            </div>
            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 text-center">
                <span class="bg-gradient-to-r from-white via-cyan-200 to-purple-200 bg-clip-text text-transparent">
                    Who Am I?
                </span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mb-8"></div>
            <p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Passionate software architect crafting digital experiences that matter
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <!-- Left Column - Enhanced Content -->
            <div class="space-y-10">
                <!-- Main Info Card -->
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-cyan-400 to-purple-600 rounded-3xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-3xl p-8 border border-slate-700/50">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-bold text-white mb-2">Software Engineer</h3>
                                <p class="text-cyan-400 font-mono">Full-Stack Developer</p>
                            </div>
                        </div>

                        <p class="text-gray-300 mb-8 leading-relaxed text-lg">
                            {{ $data['summary'] }}
                        </p>

                        <!-- Enhanced Stats Grid -->
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="text-center group">
                                <div class="text-4xl font-black bg-gradient-to-r from-cyan-400 to-purple-500 bg-clip-text text-transparent mb-2 transform group-hover:scale-110 transition-transform duration-300">3+</div>
                                <div class="text-sm text-gray-400 font-medium">Years Coding</div>
                            </div>
                            <div class="text-center group">
                                <div class="text-4xl font-black bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent mb-2 transform group-hover:scale-110 transition-transform duration-300">50+</div>
                                <div class="text-sm text-gray-400 font-medium">Projects Built</div>
                            </div>
                            <div class="text-center group">
                                <div class="text-4xl font-black bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent mb-2 transform group-hover:scale-110 transition-transform duration-300">15+</div>
                                <div class="text-sm text-gray-400 font-medium">Technologies</div>
                            </div>
                            <div class="text-center group">
                                <div class="text-4xl font-black bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent mb-2 transform group-hover:scale-110 transition-transform duration-300">∞</div>
                                <div class="text-sm text-gray-400 font-medium">Learning</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Cards -->
                <div class="space-y-4">
                    <!-- Email Card -->
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl blur opacity-20 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-2xl p-6 border border-slate-700/50 flex items-center group-hover:transform group-hover:-translate-y-1 transition-all duration-300">
                            <div class="w-14 h-14 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-400 mb-1">Email Address</p>
                                <a href="mailto:{{ $data['email'] }}" class="text-lg font-semibold text-white hover:text-cyan-400 transition-colors">
                                    {{ $data['email'] }}
                                </a>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-green-400 to-teal-500 rounded-2xl blur opacity-20 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-2xl p-6 border border-slate-700/50 flex items-center group-hover:transform group-hover:-translate-y-1 transition-all duration-300">
                            <div class="w-14 h-14 bg-gradient-to-r from-green-500 to-teal-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-400 mb-1">Phone Number</p>
                                <a href="tel:{{ $data['phone'] }}" class="text-lg font-semibold text-white hover:text-green-400 transition-colors">
                                    {{ $data['phone'] }}
                                </a>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-400 to-pink-500 rounded-2xl blur opacity-20 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-2xl p-6 border border-slate-700/50 flex items-center group-hover:transform group-hover:-translate-y-1 transition-all duration-300">
                            <div class="w-14 h-14 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-400 mb-1">Location</p>
                                <p class="text-lg font-semibold text-white">{{ $data['location'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Interactive Tech Stack -->
            <div class="space-y-10">
                <!-- Skills Radar -->
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-purple-400 to-pink-600 rounded-3xl blur opacity-25 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-3xl p-8 border border-slate-700/50">
                        <h4 class="text-2xl font-bold text-white mb-8 text-center">Tech Arsenal</h4>
                        <div class="space-y-6">
                            <!-- PHP & Laravel -->
                            <div class="skill-item">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mr-3">
                                            <span class="text-white font-bold text-sm">PHP</span>
                                        </div>
                                        <span class="text-white font-medium">PHP & Laravel</span>
                                    </div>
                                    <span class="text-cyan-400 font-bold">95%</span>
                                </div>
                                <div class="relative h-3 bg-slate-700 rounded-full overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full skill-bar" style="width: 95%" data-width="95"></div>
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-indigo-500/20 rounded-full animate-pulse"></div>
                                </div>
                            </div>

                            <!-- JavaScript & Node.js -->
                            <div class="skill-item">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-lg flex items-center justify-center mr-3">
                                            <span class="text-white font-bold text-sm">JS</span>
                                        </div>
                                        <span class="text-white font-medium">JavaScript & Node.js</span>
                                    </div>
                                    <span class="text-green-400 font-bold">90%</span>
                                </div>
                                <div class="relative h-3 bg-slate-700 rounded-full overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full skill-bar" style="width: 90%" data-width="90"></div>
                                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-orange-400/20 rounded-full animate-pulse"></div>
                                </div>
                            </div>

                            <!-- Database Design -->
                            <div class="skill-item">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center mr-3">
                                            <span class="text-white font-bold text-sm">DB</span>
                                        </div>
                                        <span class="text-white font-medium">Database Design</span>
                                    </div>
                                    <span class="text-purple-400 font-bold">88%</span>
                                </div>
                                <div class="relative h-3 bg-slate-700 rounded-full overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-teal-600 rounded-full skill-bar" style="width: 88%" data-width="88"></div>
                                    <div class="absolute inset-0 bg-gradient-to-r from-green-400/20 to-teal-500/20 rounded-full animate-pulse"></div>
                                </div>
                            </div>

                            <!-- DevOps -->
                            <div class="skill-item">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-3">
                                            <span class="text-white font-bold text-sm">⚙️</span>
                                        </div>
                                        <span class="text-white font-medium">DevOps & Cloud</span>
                                    </div>
                                    <span class="text-orange-400 font-bold">85%</span>
                                </div>
                                <div class="relative h-3 bg-slate-700 rounded-full overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full skill-bar" style="width: 85%" data-width="85"></div>
                                    <div class="absolute inset-0 bg-gradient-to-r from-purple-400/20 to-pink-500/20 rounded-full animate-pulse"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Facts -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl blur opacity-20 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-2xl p-6 border border-slate-700/50 text-center group-hover:transform group-hover:-translate-y-2 transition-all duration-300">
                            <div class="text-3xl mb-2">🚀</div>
                            <div class="text-2xl font-bold text-cyan-400 mb-1">Fast</div>
                            <div class="text-sm text-gray-400">Development</div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-green-400 to-teal-500 rounded-2xl blur opacity-20 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-2xl p-6 border border-slate-700/50 text-center group-hover:transform group-hover:-translate-y-2 transition-all duration-300">
                            <div class="text-3xl mb-2">🎯</div>
                            <div class="text-2xl font-bold text-green-400 mb-1">Precise</div>
                            <div class="text-sm text-gray-400">Solutions</div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-400 to-pink-500 rounded-2xl blur opacity-20 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-2xl p-6 border border-slate-700/50 text-center group-hover:transform group-hover:-translate-y-2 transition-all duration-300">
                            <div class="text-3xl mb-2">💡</div>
                            <div class="text-2xl font-bold text-purple-400 mb-1">Creative</div>
                            <div class="text-sm text-gray-400">Thinking</div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-orange-400 to-red-500 rounded-2xl blur opacity-20 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-2xl p-6 border border-slate-700/50 text-center group-hover:transform group-hover:-translate-y-2 transition-all duration-300">
                            <div class="text-3xl mb-2">🔥</div>
                            <div class="text-2xl font-bold text-orange-400 mb-1">Passionate</div>
                            <div class="text-sm text-gray-400">Coder</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Revolutionary Skills Section -->
<section id="skills" class="py-32 relative overflow-hidden">
    <!-- Dynamic Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-purple-900/30 to-slate-800">
        <!-- Animated Circuit Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="circuit" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M10 10h80v80h-80z" fill="none" stroke="#06b6d4" stroke-width="0.5"/>
                        <circle cx="50" cy="50" r="2" fill="#06b6d4"/>
                        <path d="M50 10v40M10 50h40M50 60v30M60 50h30" stroke="#06b6d4" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#circuit)"/>
            </svg>
        </div>

        <!-- Floating Tech Icons -->
        {{-- <div class="absolute inset-0">
            <div class="skill-float skill-1">🐘</div>
            <div class="skill-float skill-2">🟨</div>
            <div class="skill-float skill-3">🐍</div>
            <div class="skill-float skill-4">⚛️</div>
            <div class="skill-float skill-5">🐳</div>
            <div class="skill-float skill-6">☁️</div>
        </div> --}}
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Enhanced Section Header -->
        <div class="text-center mb-20">
            <div class="inline-block mb-8">
                <span class="px-6 py-3 bg-gradient-to-r from-purple-500/20 to-cyan-500/20 rounded-full text-purple-400 text-sm font-mono border border-purple-500/30 backdrop-blur-sm">
                    &lt; Skills & Technologies /&gt;
                </span>
            </div>
            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 text-center">
                <span class="bg-gradient-to-r from-white via-purple-200 to-cyan-200 bg-clip-text text-transparent">
                    Tech Stack
                </span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-purple-400 to-cyan-500 mx-auto rounded-full mb-8"></div>
            <p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Mastering cutting-edge technologies to build scalable solutions
            </p>
        </div>

        <!-- Enhanced Skills Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($data['skills'] as $category => $skillList)
            <div class="group relative">
                <!-- Animated Border -->
                <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-400 to-cyan-500 rounded-3xl blur opacity-20 group-hover:opacity-60 transition duration-1000"></div>

                <!-- Card Content -->
                <div class="relative bg-slate-800/90 backdrop-blur-xl rounded-3xl p-8 border border-slate-700/50 h-full transform group-hover:-translate-y-2 transition-all duration-500">
                    <!-- Category Header -->
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-cyan-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                @if($category === 'Backend')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                @elseif($category === 'Frontend')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                @elseif($category === 'Database')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                                @elseif($category === 'Tools')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                @else
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                @endif
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">{{ $category }}</h3>
                    </div>

                    <!-- Skills List -->
                    <div class="space-y-3">
                        @foreach($skillList as $skill)
                        <div class="group/skill flex items-center p-3 rounded-xl bg-slate-700/50 hover:bg-slate-700/80 transition-all duration-300 hover:transform hover:translate-x-2">
                            <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-cyan-400 rounded-full mr-3 group-hover/skill:scale-150 transition-transform duration-300"></div>
                            <span class="text-gray-300 group-hover/skill:text-white transition-colors duration-300 font-medium">{{ $skill }}</span>
                            <div class="ml-auto opacity-0 group-hover/skill:opacity-100 transition-opacity duration-300">
                                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Skill Level Indicator -->
                    <div class="mt-6 pt-6 border-t border-slate-600/50">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-400">Proficiency</span>
                            <span class="text-cyan-400 font-bold">
                                @if($category === 'Backend') 95%
                                @elseif($category === 'Frontend') 88%
                                @elseif($category === 'Database') 92%
                                @elseif($category === 'Tools') 85%
                                @else 90%
                                @endif
                            </span>
                        </div>
                        <div class="mt-2 h-2 bg-slate-700 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-purple-500 to-cyan-500 rounded-full skill-progress"
                                 data-width="@if($category === 'Backend')95%@elseif($category === 'Frontend')88%@elseif($category === 'Database')92%@elseif($category === 'Tools')85%@else90%@endif"
                                 style="width: 0%; transition: width 2s ease-in-out;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Additional Tech Showcase -->
        <div class="mt-20">
            <h3 class="text-3xl font-bold text-center text-white mb-12">Currently Exploring</h3>
            <div class="flex flex-wrap justify-center gap-6">
                @php
                $exploringTech = ['AI/ML', 'Microservices', 'GraphQL', 'Kubernetes', 'Blockchain', 'WebAssembly'];
                @endphp
                @foreach($exploringTech as $tech)
                <div class="group relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-2xl blur opacity-30 group-hover:opacity-70 transition duration-300"></div>
                    <div class="relative bg-slate-800/80 backdrop-blur-sm rounded-2xl px-6 py-3 border border-slate-700/50 group-hover:transform group-hover:-translate-y-1 transition-all duration-300">
                        <span class="text-gray-300 group-hover:text-white font-medium">{{ $tech }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-20 bg-white dark:bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 animate-fadeInUp">Professional Experience</h2>
            <div class="w-20 h-1 bg-primary-600 mx-auto animate-fadeInUp animate-delay-100"></div>
        </div>

        <div class="relative">
            <!-- Timeline line -->
            <div class="absolute left-4 md:left-1/2 transform md:-translate-x-px h-full w-0.5 bg-primary-600"></div>

            @foreach($data['experience'] as $index => $job)
            <div class="relative mb-12 md:mb-8">
                <div class="flex items-center mb-4">
                    <div class="absolute left-2 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-primary-600 rounded-full border-4 border-white dark:border-dark-900"></div>
                    <div class="ml-12 md:ml-0 md:w-1/2 {{ $index % 2 == 0 ? 'md:pr-8' : 'md:ml-auto md:pl-8' }}">
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg shadow-lg animate-fadeInUp animate-delay-{{ $index * 200 + 100 }}">
                            <div class="mb-4">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $job['title'] }}</h3>
                                <p class="text-primary-600 font-medium">{{ $job['company'] }}</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $job['location'] }} • {{ $job['period'] }}</p>
                            </div>
                            <ul class="space-y-2">
                                @foreach($job['responsibilities'] as $responsibility)
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-primary-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm">{{ $responsibility }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Education -->
        <div class="mt-16">
            <h3 class="text-2xl font-bold mb-8 text-center text-gray-900 dark:text-white animate-fadeInUp">Education</h3>
            @foreach($data['education'] as $edu)
            <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg shadow-lg max-w-2xl mx-auto animate-fadeInUp animate-delay-100">
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $edu['degree'] }}</h4>
                <p class="text-primary-600 font-medium">{{ $edu['institution'] }}</p>
                <p class="text-gray-600 dark:text-gray-400">{{ $edu['location'] }} • {{ $edu['period'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- Certifications -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold mb-8 text-center text-gray-900 dark:text-white animate-fadeInUp">Certifications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto">
                @foreach($data['certifications'] as $cert)
                <div class="bg-primary-50 dark:bg-primary-900/20 border border-primary-200 dark:border-primary-800 p-4 rounded-lg text-center animate-fadeInUp animate-delay-{{ $loop->index * 100 + 100 }}">
                    <span class="text-primary-800 dark:text-primary-200 font-medium">{{ $cert }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Next-Gen Projects Section -->
<section id="projects" class="py-32 relative overflow-hidden">
    <!-- Dynamic Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900/50 to-slate-900">
        <!-- Code Grid Background -->
        <div class="absolute inset-0 opacity-5">
            <div class="grid grid-cols-12 gap-4 h-full">
                @for($i = 0; $i < 60; $i++)
                <div class="bg-cyan-400 h-2 rounded animate-pulse" style="animation-delay: {{ $i * 0.1 }}s;"></div>
                @endfor
            </div>
        </div>

        <!-- Floating Geometric Shapes -->
        <div class="absolute inset-0">
            <div class="project-shape shape-1"></div>
            <div class="project-shape shape-2"></div>
            <div class="project-shape shape-3"></div>
            <div class="project-shape shape-4"></div>
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Enhanced Section Header -->
        <div class="text-center mb-20">
            <div class="inline-block mb-8">
                <span class="px-6 py-3 bg-gradient-to-r from-cyan-500/20 to-purple-500/20 rounded-full text-cyan-400 text-sm font-mono border border-cyan-500/30 backdrop-blur-sm">
                    &lt; Featured Work /&gt;
                </span>
            </div>
            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 text-center">
                <span class="bg-gradient-to-r from-white via-cyan-200 to-purple-200 bg-clip-text text-transparent">
                    Projects
                </span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mb-8"></div>
            <p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Innovative solutions crafted with passion and precision
            </p>
        </div>

        <!-- Enhanced Projects Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach($data['projects'] as $index => $project)
            <div class="group relative">
                <!-- Animated Border -->
                <div class="absolute -inset-1 bg-gradient-to-r from-cyan-400 via-purple-500 to-pink-500 rounded-3xl blur opacity-20 group-hover:opacity-60 transition duration-1000"></div>

                <!-- Project Card -->
                <div class="relative bg-slate-800/90 backdrop-blur-xl rounded-3xl overflow-hidden border border-slate-700/50 transform group-hover:-translate-y-2 group-hover:scale-[1.02] transition-all duration-500">
                    <!-- Project Header -->
                    <div class="relative p-8 bg-gradient-to-br from-slate-800/50 to-slate-900/50">
                        <!-- Project Number -->
                        <div class="absolute top-6 right-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                        </div>

                        <!-- Project Title -->
                        <h3 class="text-3xl font-bold text-white mb-4 pr-16">{{ $project['name'] }}</h3>

                        <!-- Project Description -->
                        <p class="text-gray-300 text-lg leading-relaxed mb-6">{{ $project['description'] }}</p>

                        <!-- Tech Stack Pills -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach(array_slice($project['technologies'], 0, 4) as $tech)
                            <div class="group/tech relative">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full blur opacity-30 group-hover/tech:opacity-70 transition duration-300"></div>
                                <span class="relative bg-slate-700/80 backdrop-blur-sm text-cyan-300 px-4 py-2 rounded-full text-sm font-medium border border-slate-600/50 group-hover/tech:border-cyan-400/50 transition-all duration-300">
                                    {{ $tech }}
                                </span>
                            </div>
                            @endforeach
                            @if(count($project['technologies']) > 4)
                            <span class="bg-slate-700/50 text-gray-400 px-4 py-2 rounded-full text-sm font-medium">
                                +{{ count($project['technologies']) - 4 }} more
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Project Features -->
                    <div class="p-8 pt-0">
                        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Key Features
                        </h4>
                        <div class="space-y-3 mb-8">
                            @foreach(array_slice($project['features'], 0, 3) as $feature)
                            <div class="flex items-start group/feature">
                                <div class="w-2 h-2 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full mt-2 mr-3 group-hover/feature:scale-150 transition-transform duration-300"></div>
                                <span class="text-gray-300 group-hover/feature:text-white transition-colors duration-300">{{ $feature }}</span>
                            </div>
                            @endforeach
                            @if(count($project['features']) > 3)
                            <div class="text-gray-400 text-sm italic ml-5">
                                +{{ count($project['features']) - 3 }} more features
                            </div>
                            @endif
                        </div>

                        <!-- Project Actions -->
                        <div class="flex items-center justify-between">
                            <!-- View Code Button -->
                            <a href="{{ $project['github'] }}" target="_blank"
                               class="group/btn relative inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-purple-600 text-white rounded-xl font-semibold overflow-hidden transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/25 hover:-translate-y-0.5">
                                <span class="relative z-10 flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                    View Code
                                </span>
                                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                            </a>

                            <!-- Project Status -->
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse mr-2"></div>
                                <span class="text-green-400 font-medium text-sm">Active</span>
                            </div>
                        </div>
                    </div>

                    <!-- Hover Effect Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="mt-20 text-center">
            <div class="relative inline-block">
                <div class="absolute -inset-1 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-2xl blur opacity-30"></div>
                <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-2xl p-8 border border-slate-700/50">
                    <h3 class="text-2xl font-bold text-white mb-4">Want to see more?</h3>
                    <p class="text-gray-300 mb-6 max-w-md mx-auto">
                        Check out my GitHub for more projects and contributions to the open-source community.
                    </p>
                    <a href="{{ $data['github'] }}" target="_blank"
                       class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-purple-500 to-cyan-500 text-white rounded-xl font-semibold hover:shadow-lg hover:shadow-purple-500/25 transition-all duration-300 hover:-translate-y-1">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        View All Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Futuristic Contact Section -->
<section id="contact" class="py-32 relative overflow-hidden">
    <!-- Dynamic Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900/50 to-slate-900">
        <!-- Animated Network -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="network" x="0" y="0" width="200" height="200" patternUnits="userSpaceOnUse">
                        <circle cx="100" cy="100" r="2" fill="#06b6d4"/>
                        <line x1="100" y1="100" x2="150" y2="50" stroke="#06b6d4" stroke-width="0.5" opacity="0.5"/>
                        <line x1="100" y1="100" x2="50" y2="150" stroke="#06b6d4" stroke-width="0.5" opacity="0.5"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#network)"/>
            </svg>
        </div>

        <!-- Glowing Orbs -->
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-cyan-500/10 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/3 right-1/3 w-48 h-48 bg-purple-500/10 rounded-full blur-3xl animate-pulse-slow animation-delay-2000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Enhanced Section Header -->
        <div class="text-center mb-20">
            <div class="inline-block mb-8">
                <span class="px-6 py-3 bg-gradient-to-r from-cyan-500/20 to-purple-500/20 rounded-full text-cyan-400 text-sm font-mono border border-cyan-500/30 backdrop-blur-sm">
                    &lt; Get In Touch /&gt;
                </span>
            </div>
            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 text-center">
                <span class="bg-gradient-to-r from-white via-cyan-200 to-purple-200 bg-clip-text text-transparent">
                    Let's Connect
                </span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mb-8"></div>
            <p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Ready to bring your ideas to life? Let's collaborate and build something amazing together.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                    <div class="relative bg-slate-800/90 backdrop-blur-xl rounded-3xl p-8 border border-slate-700/50">
                        <h3 class="text-3xl font-bold text-white mb-8 flex items-center">
                            <svg class="w-8 h-8 text-cyan-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            Let's Talk
                        </h3>

                        <div class="space-y-6">
                            <!-- Email -->
                            <div class="group/contact relative">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl blur opacity-0 group-hover/contact:opacity-30 transition duration-300"></div>
                                <div class="relative flex items-center p-6 bg-slate-700/50 rounded-2xl border border-slate-600/50 group-hover/contact:border-cyan-400/50 transition-all duration-300 hover:transform hover:-translate-y-1">
                                    <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mr-6 group-hover/contact:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-semibold text-white mb-1">Email Address</h4>
                                        <a href="mailto:{{ $data['email'] }}" class="text-cyan-400 hover:text-cyan-300 transition-colors font-medium">
                                            {{ $data['email'] }}
                                        </a>
                                    </div>
                                    <div class="opacity-0 group-hover/contact:opacity-100 transition-opacity duration-300">
                                        <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="group/contact relative">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-green-400 to-teal-500 rounded-2xl blur opacity-0 group-hover/contact:opacity-30 transition duration-300"></div>
                                <div class="relative flex items-center p-6 bg-slate-700/50 rounded-2xl border border-slate-600/50 group-hover/contact:border-green-400/50 transition-all duration-300 hover:transform hover:-translate-y-1">
                                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-600 rounded-xl flex items-center justify-center mr-6 group-hover/contact:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-semibold text-white mb-1">Phone Number</h4>
                                        <a href="tel:{{ $data['phone'] }}" class="text-green-400 hover:text-green-300 transition-colors font-medium">
                                            {{ $data['phone'] }}
                                        </a>
                                    </div>
                                    <div class="opacity-0 group-hover/contact:opacity-100 transition-opacity duration-300">
                                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="group/contact relative">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-400 to-pink-500 rounded-2xl blur opacity-0 group-hover/contact:opacity-30 transition duration-300"></div>
                                <div class="relative flex items-center p-6 bg-slate-700/50 rounded-2xl border border-slate-600/50 group-hover/contact:border-purple-400/50 transition-all duration-300 hover:transform hover:-translate-y-1">
                                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mr-6 group-hover/contact:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-white mb-1">Location</h4>
                                        <p class="text-purple-400 font-medium">{{ $data['location'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="mt-8 pt-8 border-t border-slate-600/50">
                            <h4 class="text-xl font-semibold text-white mb-6">Connect With Me</h4>
                            <div class="flex space-x-4">
                                <a href="{{ $data['linkedin'] }}" target="_blank" class="group/social relative">
                                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded-xl blur opacity-30 group-hover/social:opacity-70 transition duration-300"></div>
                                    <div class="relative w-14 h-14 bg-slate-700/80 backdrop-blur-sm rounded-xl flex items-center justify-center text-blue-400 hover:text-white border border-slate-600/50 hover:border-blue-400/50 transition-all duration-300 transform hover:-translate-y-1">
                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </div>
                                </a>

                                <a href="{{ $data['github'] }}" target="_blank" class="group/social relative">
                                    <div class="absolute -inset-1 bg-gradient-to-r from-gray-400 to-gray-600 rounded-xl blur opacity-30 group-hover/social:opacity-70 transition duration-300"></div>
                                    <div class="relative w-14 h-14 bg-slate-700/80 backdrop-blur-sm rounded-xl flex items-center justify-center text-gray-400 hover:text-white border border-slate-600/50 hover:border-gray-400/50 transition-all duration-300 transform hover:-translate-y-1">
                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Contact Form -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-purple-400 to-cyan-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                <div class="relative bg-slate-800/90 backdrop-blur-xl rounded-3xl p-8 border border-slate-700/50">
                    <h3 class="text-3xl font-bold text-white mb-8 flex items-center">
                        <svg class="w-8 h-8 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Send Message
                    </h3>

                    <form id="contact-form" class="space-y-6">
                        @csrf
                        <!-- Name Field -->
                        <div class="group/field">
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-3">
                                Full Name *
                            </label>
                            <div class="relative">
                                <input type="text" id="name" name="name" required
                                       class="w-full px-4 py-4 bg-slate-700/50 border border-slate-600/50 rounded-xl focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300 group-hover/field:border-cyan-400/50"
                                       placeholder="Enter your full name">
                                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400/10 to-purple-400/10 rounded-xl opacity-0 group-focus-within/field:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="group/field">
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-3">
                                Email Address *
                            </label>
                            <div class="relative">
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-4 bg-slate-700/50 border border-slate-600/50 rounded-xl focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300 group-hover/field:border-cyan-400/50"
                                       placeholder="your.email@example.com">
                                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400/10 to-purple-400/10 rounded-xl opacity-0 group-focus-within/field:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </div>

                        <!-- Subject Field -->
                        <div class="group/field">
                            <label for="subject" class="block text-sm font-medium text-gray-300 mb-3">
                                Subject *
                            </label>
                            <div class="relative">
                                <input type="text" id="subject" name="subject" required
                                       class="w-full px-4 py-4 bg-slate-700/50 border border-slate-600/50 rounded-xl focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300 group-hover/field:border-cyan-400/50"
                                       placeholder="What's this about?">
                                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400/10 to-purple-400/10 rounded-xl opacity-0 group-focus-within/field:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div class="group/field">
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-3">
                                Message *
                            </label>
                            <div class="relative">
                                <textarea id="message" name="message" rows="5" required
                                          class="w-full px-4 py-4 bg-slate-700/50 border border-slate-600/50 rounded-xl focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300 resize-none group-hover/field:border-cyan-400/50"
                                          placeholder="Tell me about your project or idea..."></textarea>
                                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400/10 to-purple-400/10 rounded-xl opacity-0 group-focus-within/field:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                                class="group/btn relative w-full bg-gradient-to-r from-cyan-500 to-purple-600 text-white px-8 py-4 rounded-xl font-bold text-lg overflow-hidden transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/25 hover:-translate-y-1 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none">
                            <span id="submit-text" class="relative z-10 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                Send Message
                            </span>
                            <span id="submit-loading" class="hidden relative z-10 flex items-center justify-center">
                                <svg class="animate-spin w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Sending...
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                        </button>
                    </form>

                    <!-- Form Messages -->
                    <div id="form-message" class="mt-6 hidden"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Enhanced Portfolio JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all animations and interactions
    initTypewriterEffect();
    initMatrixRain();
    initNavigationDots();
    initSkillBars();
    initParallaxEffects();
    initContactForm();

    // Typewriter Effect
    function initTypewriterEffect() {
        const texts = [
            "Backend Developer",
            "PHP Enthusiast",
            "Laravel Expert",
            "Node.js Developer",
            "API Architect",
            "Database Designer",
            "System Designer",
            "Full-Stack Developer"
        ];

        let currentTextIndex = 0;
        let currentCharIndex = 0;
        let isDeleting = false;
        const typingElement = document.getElementById('typing-text');

        if (!typingElement) return;

        function typeWriter() {
            const currentText = texts[currentTextIndex];

            if (isDeleting) {
                typingElement.textContent = currentText.substring(0, currentCharIndex - 1);
                currentCharIndex--;
            } else {
                typingElement.textContent = currentText.substring(0, currentCharIndex + 1);
                currentCharIndex++;
            }

            let typeSpeed = isDeleting ? 50 : 100;

            if (!isDeleting && currentCharIndex === currentText.length) {
                typeSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && currentCharIndex === 0) {
                isDeleting = false;
                currentTextIndex = (currentTextIndex + 1) % texts.length;
                typeSpeed = 500;
            }

            setTimeout(typeWriter, typeSpeed);
        }

        setTimeout(typeWriter, 1000);
    }

    // Matrix Rain Effect
    function initMatrixRain() {
        const canvas = document.getElementById('matrix');
        if (!canvas) return;

        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const matrix = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%+-/~{[|`]}";
        const matrixArray = matrix.split("");

        const fontSize = 10;
        const columns = canvas.width / fontSize;
        const drops = [];

        for (let x = 0; x < columns; x++) {
            drops[x] = 1;
        }

        function draw() {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.04)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            ctx.fillStyle = '#06b6d4';
            ctx.font = fontSize + 'px monospace';

            for (let i = 0; i < drops.length; i++) {
                const text = matrixArray[Math.floor(Math.random() * matrixArray.length)];
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);

                if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }

        setInterval(draw, 35);

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    }

    // Navigation Dots
    function initNavigationDots() {
        const sections = document.querySelectorAll('section[id]');
        const navDots = document.querySelectorAll('.nav-dot');

        // Intersection Observer for active section detection
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const sectionId = entry.target.id;
                    navDots.forEach(dot => {
                        dot.classList.remove('active');
                        if (dot.dataset.section === sectionId) {
                            dot.classList.add('active');
                        }
                    });
                }
            });
        }, { threshold: 0.3 });

        sections.forEach(section => {
            observer.observe(section);
        });

        // Smooth scroll on click
        navDots.forEach(dot => {
            dot.addEventListener('click', (e) => {
                e.preventDefault();
                const targetSection = document.getElementById(dot.dataset.section);
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    }

    // Animated Skill Bars
    function initSkillBars() {
        const skillBars = document.querySelectorAll('.skill-bar');

        const skillObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const skillBar = entry.target;
                    const targetWidth = skillBar.dataset.width || skillBar.style.width;
                    skillBar.style.setProperty('--target-width', targetWidth);
                    skillBar.parentElement.classList.add('animate');

                    // Animate width
                    setTimeout(() => {
                        skillBar.style.width = targetWidth;
                    }, 100);
                }
            });
        }, { threshold: 0.5 });

        skillBars.forEach(bar => {
            skillObserver.observe(bar);
        });
    }

    // Parallax Effects
    function initParallaxEffects() {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;

            // Move floating elements
            const floatingElements = document.querySelectorAll('.tech-float, .floating-code, .geometric-shape');
            floatingElements.forEach((element, index) => {
                const speed = 0.2 + (index * 0.1);
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });

            // Parallax for gradient orbs
            const orbs = document.querySelectorAll('.absolute.blur-3xl');
            orbs.forEach((orb, index) => {
                const speed = 0.1 + (index * 0.05);
                orb.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    }

    // Enhanced Contact Form
    function initContactForm() {
        const form = document.getElementById('contact-form');
        if (!form) return;

        // Add real-time validation
        const inputs = form.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', validateField);
            input.addEventListener('input', clearErrors);
        });

        function validateField(e) {
            const field = e.target;
            const value = field.value.trim();

            // Remove existing error styling
            field.classList.remove('border-red-500');

            if (!value) {
                field.classList.add('border-red-500');
                return false;
            }

            if (field.type === 'email' && !isValidEmail(value)) {
                field.classList.add('border-red-500');
                return false;
            }

            field.classList.add('border-green-500');
            return true;
        }

        function clearErrors(e) {
            const field = e.target;
            field.classList.remove('border-red-500', 'border-green-500');
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Form submission with enhanced feedback
        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            const submitBtn = form.querySelector('button[type="submit"]');
            const submitText = document.getElementById('submit-text');
            const submitLoading = document.getElementById('submit-loading');
            const messageDiv = document.getElementById('form-message');

            // Validate all fields
            let isValid = true;
            inputs.forEach(input => {
                if (!validateField({ target: input })) {
                    isValid = false;
                }
            });

            if (!isValid) {
                showMessage('Please fill in all required fields correctly.', 'error');
                return;
            }

            // Show loading state with animation
            submitBtn.disabled = true;
            submitBtn.classList.add('animate-pulse');
            submitText.classList.add('hidden');
            submitLoading.classList.remove('hidden');

            try {
                const formData = new FormData(form);
                const response = await fetch('{{ route("portfolio.contact") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || form.querySelector('[name="_token"]').value
                    }
                });

                const data = await response.json();

                if (data.success) {
                    showMessage(data.message || 'Message sent successfully! I\'ll get back to you soon.', 'success');
                    form.reset();
                    // Clear field styling
                    inputs.forEach(input => {
                        input.classList.remove('border-green-500', 'border-red-500');
                    });
                } else {
                    throw new Error(data.message || 'Something went wrong');
                }
            } catch (error) {
                showMessage('Failed to send message. Please try again or contact me directly.', 'error');
            } finally {
                // Reset button state
                submitBtn.disabled = false;
                submitBtn.classList.remove('animate-pulse');
                submitText.classList.remove('hidden');
                submitLoading.classList.add('hidden');
            }
        });

        function showMessage(message, type) {
            const messageDiv = document.getElementById('form-message');
            const bgClass = type === 'success' ? 'bg-green-900 border-green-600 text-green-300' : 'bg-red-900 border-red-600 text-red-300';

            messageDiv.innerHTML = `
                <div class="${bgClass} border px-4 py-3 rounded-lg animate-fadeInUp">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            ${type === 'success'
                                ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>'
                                : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>'
                            }
                        </svg>
                        ${message}
                    </div>
                </div>
            `;
            messageDiv.classList.remove('hidden');

            // Hide message after 5 seconds
            setTimeout(() => {
                messageDiv.classList.add('hidden');
            }, 5000);
        }
    }

    // Cursor trail effect
    function initCursorTrail() {
        const cursor = document.createElement('div');
        cursor.className = 'fixed pointer-events-none z-50 w-4 h-4 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full opacity-0 transition-opacity duration-300';
        document.body.appendChild(cursor);

        let mouseX = 0, mouseY = 0;
        let cursorX = 0, cursorY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            cursor.style.opacity = '0.8';
        });

        document.addEventListener('mouseleave', () => {
            cursor.style.opacity = '0';
        });

        function updateCursor() {
            cursorX += (mouseX - cursorX) * 0.1;
            cursorY += (mouseY - cursorY) * 0.1;
            cursor.style.transform = `translate(${cursorX - 8}px, ${cursorY - 8}px)`;
            requestAnimationFrame(updateCursor);
        }
        updateCursor();
    }

    // Initialize cursor trail on larger screens
    if (window.innerWidth > 768) {
        initCursorTrail();
    }

    // Performance optimization: Throttle scroll events
    function throttle(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Apply throttling to scroll events
    window.addEventListener('scroll', throttle(() => {
        // Any scroll-based animations can be added here
    }, 16)); // ~60fps

    // Add loading state management
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');

        // Trigger entrance animations
        const animatedElements = document.querySelectorAll('[class*="animate-"]');
        animatedElements.forEach((element, index) => {
            setTimeout(() => {
                element.classList.add('animate-in');
            }, index * 100);
        });
    });
});

// Global utility functions
window.portfolioUtils = {
    // Smooth scroll to section
    scrollToSection: (sectionId) => {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    },

    // Copy text to clipboard
    copyToClipboard: async (text) => {
        try {
            await navigator.clipboard.writeText(text);
            return true;
        } catch (err) {
            return false;
        }
    },

    // Download CV function
    downloadCV: () => {
        window.open('{{ route("portfolio.download-cv") }}', '_blank');
    }
};
</script>
@endpush
