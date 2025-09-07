@extends('layouts.app')

@section('title', $data['name'] . ' - ' . $data['title'])
@section('meta_description',
    'Portfolio of ' .
    $data['name'] .
    ', ' .
    $data['title'] .
    ' specializing in software
    development with PHP, Laravel, Node.js and more.')

@section('content')
    <!-- Navigation Dots -->
    {{-- <nav class="fixed right-8 top-1/2 transform -translate-y-1/2 z-50 hidden lg:block">
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
    </nav> --}}

    <!-- Enhanced Hero Section -->
    <section id="" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Softer Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
            <!-- Subtle Animated Mesh Gradient -->
            <div class="absolute inset-0 opacity-20">
                <div
                    class="absolute top-0 -left-4 w-96 h-96 bg-cyan-400/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob">
                </div>
                <div
                    class="absolute top-0 -right-4 w-80 h-80 bg-blue-400/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000">
                </div>
                <div
                    class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-400/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000">
                </div>
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
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-r from-cyan-400 via-purple-500 to-pink-500 p-1 animate-spin-slow">
                            <div class="w-full h-full rounded-full bg-slate-900"></div>
                        </div>

                        <!-- Holographic Border -->
                        <div
                            class="absolute -inset-2 bg-gradient-to-r from-cyan-400 via-purple-500 to-pink-500 rounded-full blur-md opacity-30">
                        </div>

                        <!-- Profile Image -->
                        <div
                            class="relative z-10 w-48 h-48 md:w-56 md:h-56 rounded-full overflow-hidden">
                            <img src="https://i.ibb.co.com/6cBGxJss/profile2.jpg"
                                alt="{{ $data['name'] }}"
                                class="w-full h-full object-cover filter brightness-110 contrast-110 saturate-110"
                                onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['name']) }}&size=224&background=3b82f6&color=ffffff'">

                            <!-- Scanning Line Effect -->
                            <div
                                class="absolute inset-0 bg-gradient-to-b from-transparent via-cyan-400/20 to-transparent h-8 animate-scan">
                            </div>
                        </div>

                        <!-- Status Badge with Animation -->
                        <div class="absolute -bottom-2 -right-2 z-20">
                            <div class="relative">
                                <div class="absolute inset-0 bg-green-400 rounded-full animate-ping"></div>
                                <div
                                    class="relative w-8 h-8 bg-green-500 rounded-full border-4 border-slate-900 flex items-center justify-center">
                                    <div class="w-3 h-3 bg-green-300 rounded-full animate-pulse"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Text Animations -->
                <div class="space-y-6">
                    <div class="overflow-hidden">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                            <span class="block text-slate-100 animate-slide-in-left">Hello,</span>
                            <span class="block text-slate-100 animate-slide-in-right">I'm</span>
                            <span
                                class="block bg-gradient-to-r from-cyan-300 via-blue-400 to-purple-400 bg-clip-text text-transparent animate-gradient-xy">
                                {{ $data['name'] }}
                            </span>
                        </h1>
                    </div>

                    <!-- Professional Title -->
                    <div class="overflow-hidden">
                        <h2
                            class="text-xl md:text-2xl lg:text-3xl font-medium text-slate-300 mb-6 animate-slide-up-delay-1">
                            {{ $data['title'] }}
                        </h2>
                    </div>

                    <!-- Description -->
                    {{-- <div class="overflow-hidden">
                        <p
                            class="text-base md:text-lg text-slate-400 max-w-2xl mx-auto mb-8 leading-relaxed animate-slide-up-delay-2">
                            {{ $data['tagline'] }}
                        </p>
                    </div> --}}

                    <!-- Enhanced CTA Buttons with Softer Design -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up-delay-3">
                        <a href="#contact"
                            class="relative px-8 py-3 bg-gradient-to-r from-cyan-500/90 to-blue-600/90 text-white rounded-xl font-medium text-base shadow-lg backdrop-blur-sm hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span class="relative z-10 flex items-center justify-center">
                                <span class="mr-2">Let's Connect</span>
                                <svg class="w-4 h-4"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="https://drive.google.com/file/d/1RZGXfjBFMVIFD8BmJh9kH5Xh8FXUdWil/view?usp=sharing"
                            class="relative px-8 py-3 border border-slate-600/50 text-slate-300 rounded-xl font-medium text-base backdrop-blur-sm bg-slate-800/30 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
                            target="_blank">
                            <span class="flex items-center justify-center">
                                <span class="mr-2">Download CV</span>
                                <svg class="w-4 h-4"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>

                <!-- Social Links with Softer Design -->
                <div class="flex justify-center space-x-6 mt-12 animate-slide-up-delay-4">
                    <a href="{{ $data['linkedin'] }}" target="_blank">
                        <div
                            class="relative w-12 h-12 bg-slate-800/50 backdrop-blur-sm rounded-lg flex items-center justify-center text-slate-400 border border-slate-700/50 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </div>
                    </a>

                    <a href="{{ $data['github'] }}" target="_blank">
                        <div
                            class="relative w-12 h-12 bg-slate-800/50 backdrop-blur-sm rounded-lg flex items-center justify-center text-slate-400 border border-slate-700/50 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </div>
                    </a>

                    <a href="mailto:{{ $data['email'] }}">
                        <div
                            class="relative w-12 h-12 bg-slate-800/50 backdrop-blur-sm rounded-lg flex items-center justify-center text-slate-400 border border-slate-700/50 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Subtle Scroll Indicator -->
        <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2">
            <div class="flex flex-col items-center space-y-2 animate-bounce">
                <div class="w-5 h-8 border border-slate-500/50 rounded-full flex justify-center">
                    <div
                        class="w-0.5 h-2 bg-gradient-to-b from-cyan-400/80 to-blue-500/80 rounded-full mt-1.5 animate-scroll-indicator">
                    </div>
                </div>
                <p class="text-slate-500 text-xs font-medium">scroll</p>
            </div>
        </div>
        </div>
    </section>

    <!-- Compact About Section -->
    <section id="about" class="py-16 relative overflow-hidden">
        <!-- Minimal Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-900/50 to-slate-800">
            <!-- Subtle Grid Pattern -->
            <div class="absolute inset-0 opacity-3">
                <div class="w-full h-full"
                    style="background-image: radial-gradient(circle at 1px 1px, rgba(6, 182, 212, 0.15) 1px, transparent 0); background-size: 40px 40px;">
                </div>
            </div>
        </div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Minimalistic Header -->
            <div class="text-center mb-12">
                <div class="inline-block mb-8">
                    <span
                        class="px-6 py-3 bg-slate-to-r from-cyan-500/20 to-purple-500/20 rounded-full text-cyan-400 text-sm font-mono border border-cyan-500/30 backdrop-blur-sm">
                        &lt; About Me /&gt;
                    </span>
                </div>
                {{-- <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4 text-center">
                    <span class="bg-gradient-to-r from-slate-100 via-cyan-200 to-blue-200 bg-clip-text text-transparent">
                        Software Engineer
                    </span>
                </h2> --}}
                <div class="w-16 h-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 mx-auto rounded-full mb-4"></div>
            </div>

            <!-- Compact Content Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Summary Card -->
                <div class="lg:col-span-2 relative">
                    <div
                        class="relative bg-slate-800/80 backdrop-blur-sm rounded-xl p-6 border border-slate-700/40 card-soft">
                        <div class="flex items-start mb-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-cyan-500/80 to-blue-600/80 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-1">Full-Stack Developer</h3>
                                <p class="text-cyan-400 text-sm font-medium">Building Digital Solutions</p>
                            </div>
                        </div>

                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            {{ $data['summary'] }}
                        </p>

                        <!-- Compact Stats -->
                        <div class="grid grid-cols-4 gap-3">
                            <div class="text-center">
                                <div
                                    class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mb-1">
                                    3+</div>
                                <div class="text-xs text-slate-400">Years</div>
                            </div>
                            <div class="text-center">
                                <div
                                    class="text-2xl font-bold bg-gradient-to-r from-green-400 to-teal-500 bg-clip-text text-transparent mb-1">
                                    10+</div>
                                <div class="text-xs text-slate-400">Projects</div>
                            </div>
                            <div class="text-center">
                                <div
                                    class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent mb-1">
                                    5+</div>
                                <div class="text-xs text-slate-400">Technologies</div>
                            </div>
                            <div class="text-center">
                                <div
                                    class="text-2xl font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent mb-1">
                                    ∞</div>
                                <div class="text-xs text-slate-400">Learning</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Compact Skills Card -->
                <div class="relative">
                    <div
                        class="relative bg-slate-800/80 backdrop-blur-sm rounded-xl p-6 border border-slate-700/40 h-full card-soft">
                        <h4 class="text-lg font-bold text-white mb-4 text-center">Core Skills</h4>
                        <div class="space-y-3">
                            <!-- Compact Skill Items -->
                            <div class="skill-item">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-slate-300 text-sm font-medium">PHP & Laravel</span>
                                    <span class="text-cyan-400 text-xs font-semibold">95%</span>
                                </div>
                                <div class="h-1.5 bg-slate-700/50 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-blue-500/80 to-indigo-600/80 rounded-full skill-progress"
                                        style="width: 95%" data-width="95"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-slate-300 text-sm font-medium">JavaScript & Node.js</span>
                                    <span class="text-green-400 text-xs font-semibold">60%</span>
                                </div>
                                <div class="h-1.5 bg-slate-700/50 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-yellow-500/80 to-orange-500/80 rounded-full skill-progress"
                                        style="width: 60%" data-width="60"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-slate-300 text-sm font-medium">Database Design</span>
                                    <span class="text-purple-400 text-xs font-semibold">80%</span>
                                </div>
                                <div class="h-1.5 bg-slate-700/50 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-green-500/80 to-teal-600/80 rounded-full skill-progress"
                                        style="width: 80%" data-width="80"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-slate-300 text-sm font-medium">DevOps & Cloud</span>
                                    <span class="text-orange-400 text-xs font-semibold">20%</span>
                                </div>
                                <div class="h-1.5 bg-slate-700/50 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-purple-500/80 to-pink-600/80 rounded-full skill-progress"
                                        style="width: 20%" data-width="20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Revolutionary Skills Section -->
    <section id="skills" class="py-20 relative overflow-hidden">
        <!-- Softer Dynamic Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-900/30 to-slate-800">
            <!-- Subtle Animated Circuit Pattern -->
            <div class="absolute inset-0 opacity-5">
                <svg class="w-full h-full" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="circuit" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                            <path d="M10 10h80v80h-80z" fill="none" stroke="#06b6d4" stroke-width="0.3" />
                            <circle cx="50" cy="50" r="1" fill="#06b6d4" />
                            <path d="M50 10v40M10 50h40M50 60v30M60 50h30" stroke="#06b6d4" stroke-width="0.3" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#circuit)" />
                </svg>
            </div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Minimalistic Section Header -->
            <div class="text-center mb-12">
                <div class="inline-block mb-8">
                    <span
                        class="px-6 py-3 bg-slate-to-r from-cyan-500/20 to-purple-500/20 rounded-full text-cyan-400 text-sm font-mono border border-cyan-500/30 backdrop-blur-sm">
                        &lt; Skills & Technologies /&gt;
                    </span>
                </div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4 text-center">
                    <span class="bg-gradient-to-r from-slate-100 via-cyan-200 to-blue-200 bg-clip-text text-transparent">
                        Tech Stack
                    </span>
                </h2>
                <div class="w-20 h-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 mx-auto rounded-full mb-4"></div>
                <p class="text-sm text-slate-400 max-w-xl mx-auto leading-relaxed">
                    Mastering cutting-edge technologies to build scalable solutions
                </p>
            </div>

            <!-- Compact Skills Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4">
                @foreach ($data['skills'] as $category => $skillList)
                    <div class="relative">
                        <!-- Compact Card Content -->
                        <div
                            class="relative bg-slate-800/80 backdrop-blur-sm rounded-xl p-5 border border-slate-700/40 h-full card-soft">
                            <!-- Minimalistic Category Header -->
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-cyan-500/80 to-blue-600/80 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        @if ($category === 'Backend')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                                            </path>
                                        @elseif($category === 'Frontend')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        @elseif($category === 'Database')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                            </path>
                                        @elseif($category === 'Tools')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                            </path>
                                        @else
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        @endif
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-white">{{ $category }}</h3>
                            </div>

                            <!-- Compact Skills List -->
                            <div class="space-y-2 mb-4">
                                @foreach (array_slice($skillList, 0, 4) as $skill)
                                    <div
                                        class="flex items-center p-2 rounded-lg bg-slate-700/30">
                                        <div
                                            class="w-1.5 h-1.5 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full mr-2">
                                        </div>
                                        <span
                                            class="text-slate-300 text-sm font-medium">{{ $skill }}</span>
                                    </div>
                                @endforeach

                                <!-- Hidden Skills -->
                                @if (count($skillList) > 5)
                                    <div id="hidden-skills-{{ $loop->index }}" class="hidden space-y-2">
                                        @foreach (array_slice($skillList, 4) as $skill)
                                            <div
                                                class="flex items-center p-2 rounded-lg bg-slate-700/30">
                                                <div
                                                    class="w-1.5 h-1.5 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full mr-2">
                                                </div>
                                                <span
                                                    class="text-slate-300 text-sm font-medium">{{ $skill }}</span>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="text-center pt-1">
                                        <button
                                            onclick="toggleSkills({{ $loop->index }})"
                                            class="text-slate-400 hover:text-cyan-400 text-xs cursor-pointer transition-colors duration-200 focus:outline-none"
                                            id="toggle-btn-{{ $loop->index }}">
                                            +{{ count($skillList) - 4 }} more
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Compact Additional Tech Showcase -->
            <div class="mt-16">
                <h3 class="text-xl font-semibold text-center text-white mb-8">Currently Exploring</h3>
                <div class="flex flex-wrap justify-center gap-3">
                    @php
                        $exploringTech = [
                            'AI/ML',
                            'Microservices',
                            'GraphQL',
                            'Kubernetes',
                            'Blockchain',
                            'WebAssembly',
                        ];
                    @endphp
                    @foreach ($exploringTech as $tech)
                        <div class="relative">
                            <div
                                class="relative bg-slate-800/60 backdrop-blur-sm rounded-lg px-4 py-2 border border-slate-700/40 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                <span
                                    class="text-slate-300 text-sm font-medium">{{ $tech }}</span>
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

                @foreach ($data['experience'] as $index => $job)
                    <div class="relative mb-12 md:mb-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="absolute left-2 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-primary-600 rounded-full border-4 border-white dark:border-dark-900">
                            </div>
                            <div class="ml-12 md:ml-0 md:w-1/2 {{ $index % 2 == 0 ? 'md:pr-8' : 'md:ml-auto md:pl-8' }}">
                                <div
                                    class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg shadow-lg animate-fadeInUp animate-delay-{{ $index * 200 + 100 }}">
                                    <div class="mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            {{ $job['title'] }}</h3>
                                        <p class="text-primary-600 font-medium">{{ $job['company'] }}</p>
                                        <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $job['location'] }} •
                                            {{ $job['period'] }}</p>
                                    </div>
                                    <ul class="space-y-2">
                                        @foreach ($job['responsibilities'] as $responsibility)
                                            <li class="flex items-start">
                                                <svg class="w-4 h-4 text-primary-600 mr-2 mt-0.5 flex-shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <span
                                                    class="text-gray-700 dark:text-gray-300 text-sm">{{ $responsibility }}</span>
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
                <h3 class="text-xl font-bold mb-8 text-center text-gray-900 dark:text-white animate-fadeInUp">Education
                </h3>
                @foreach ($data['education'] as $edu)
                    <div
                        class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg shadow-lg max-w-2xl mx-auto animate-fadeInUp animate-delay-100">
                        <h4 class="text-1xl font-semibold text-gray-900 dark:text-white">{{ $edu['degree'] }}</h4>
                        <p class="text-primary-600 font-weight-normal">{{ $edu['institution'] }}</p>
                        <p class="text-gray-600 dark:text-gray-400">{{ $edu['location'] }} • {{ $edu['period'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Certifications -->
            <div class="mt-12">
                <h3 class="text-xl font-bold mb-8 text-center text-gray-900 dark:text-white animate-fadeInUp">
                    Certifications</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto">
                    @foreach ($data['certifications'] as $cert)
                        <div
                            class="bg-primary-50 dark:bg-primary-900/20 border border-primary-200 dark:border-primary-800 p-4 rounded-lg text-center animate-fadeInUp animate-delay-{{ $loop->index * 100 + 100 }}">
                            <span class="text-primary-800 dark:text-primary-200 font-medium">{{ $cert }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Next-Gen Projects Section -->
    <section id="projects" class="py-24 relative overflow-hidden">
        <!-- Softer Dynamic Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-900/40 to-slate-800">
            <!-- Subtle Code Grid Background -->
            <div class="absolute inset-0 opacity-3">
                <div class="grid grid-cols-12 gap-4 h-full">
                    @for ($i = 0; $i < 40; $i++)
                        <div class="bg-cyan-400/50 h-1 rounded animate-pulse"
                            style="animation-delay: {{ $i * 0.2 }}s;"></div>
                    @endfor
                </div>
            </div>

            <!-- Softer Floating Geometric Shapes -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-cyan-400/20 rounded-full blur-2xl animate-pulse-slow">
                </div>
                <div
                    class="absolute bottom-1/3 right-1/3 w-40 h-40 bg-purple-400/20 rounded-full blur-2xl animate-pulse-slow animation-delay-2000">
                </div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Enhanced Section Header -->
            <div class="text-center mb-16">
                <div class="inline-block mb-8">
                    <span
                        class="px-6 py-3 bg-gradient-to-r from-purple-500/20 to-cyan-500/20 rounded-full text-purple-400 text-sm font-mono border border-purple-500/30 backdrop-blur-sm">
                        &lt; Featured Work /&gt;
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-center">
                    <span class="bg-gradient-to-r from-slate-100 via-cyan-200 to-blue-200 bg-clip-text text-transparent">
                        Projects
                    </span>
                </h2>
                <div class="w-24 h-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 mx-auto rounded-full mb-6"></div>
                {{-- <p class="text-base text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    Innovative solutions crafted with passion and precision
                </p> --}}
            </div>

            <!-- Enhanced Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($data['projects'] as $index => $project)
                    <div class="relative">
                        <!-- Project Card -->
                        <div
                            class="relative bg-slate-800/90 backdrop-blur-xl rounded-2xl overflow-hidden border border-slate-700/50">
                            <!-- Project Header -->
                            <div class="relative p-6 bg-gradient-to-br from-slate-800/50 to-slate-900/50">
                                <!-- Project Number -->
                                <div class="absolute top-4 right-4">
                                    <div
                                        class="w-8 h-8 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full flex items-center justify-center">
                                        <span
                                            class="text-white font-bold text-sm">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                </div>

                                <!-- Project Title -->
                                <h3 class="text-1xl font-bold text-white mb-3 pr-12 leading-tight">{{ $project['name'] }}
                                </h3>

                                <!-- Project Description -->
                                <p class="text-gray-300 text-sm leading-relaxed mb-4">{{ $project['description'] }}</p>

                                <!-- Tech Stack Pills -->
                                <div class="flex flex-wrap gap-1 mb-4">
                                    @foreach (array_slice($project['technologies'], 0, 3) as $tech)
                                        <div class="relative">
                                            <span
                                                class="relative bg-slate-700/80 backdrop-blur-sm text-cyan-300 px-3 py-1 rounded-full text-xs font-medium border border-slate-600/50">
                                                {{ $tech }}
                                            </span>
                                        </div>
                                    @endforeach
                                    @if (count($project['technologies']) > 3)
                                        <span
                                            class="bg-slate-700/50 text-gray-400 px-3 py-1 rounded-full text-xs font-medium">
                                            +{{ count($project['technologies']) - 3 }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Project Features -->
                            <div class="p-6 pt-0">
                                <h4 class="text-lg font-bold text-white mb-3 flex items-center">
                                    <svg class="w-4 h-4 text-cyan-400 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Key Features
                                </h4>
                                <div class="space-y-2 mb-6">
                                    @foreach (array_slice($project['features'], 0, 2) as $feature)
                                        <div class="flex items-start">
                                            <div
                                                class="w-1.5 h-1.5 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full mt-1.5 mr-2">
                                            </div>
                                            <span
                                                class="text-gray-300 text-sm leading-relaxed">{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                    @if (count($project['features']) > 2)
                                        <div class="text-gray-400 text-xs italic ml-4">
                                            +{{ count($project['features']) - 2 }} more
                                        </div>
                                    @endif
                                </div>

                                <!-- Project Actions -->
                                <div class="flex items-center justify-between">
                                    <!-- View Code Button -->
                                    @if (!empty($project['link']))

                                        <a href="{{ $project['link'] }}" target="_blank"
                                            class="relative inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                            <span class="relative z-10 flex items-center">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                                </svg>
                                                Live Demo
                                            </span>
                                        </a>
                                    @elseif(!empty($project['github']))
                                        <a href="{{ $project['github'] }}" target="_blank"
                                            class="relative inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-purple-500 via-violet-500 to-indigo-500 text-white rounded-xl font-semibold text-sm hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                            <span class="relative z-10 flex items-center">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                                </svg>
                                                View Code
                                            </span>
                                        </a>
                                    @endif

                                    <!-- Enhanced Project Status -->
                                    <div class="flex items-center">
                                        @if (!empty($project['link']))
                                            <!-- Live Status -->
                                            <div class="w-2.5 h-2.5 bg-green-400 rounded-full mr-2"></div>
                                            <span class="text-green-400 font-semibold text-xs uppercase tracking-wide">Live</span>
                                        @elseif(!empty($project['github']))
                                            <!-- Development Status -->
                                            <div class="w-2.5 h-2.5 bg-blue-400 rounded-full mr-2"></div>
                                            <span class="text-blue-400 font-semibold text-xs uppercase tracking-wide">Open Source</span>
                                        @else
                                            <!-- Development Status -->
                                            <div class="w-2.5 h-2.5 bg-orange-400 rounded-full mr-2"></div>
                                            <span class="text-orange-400 font-semibold text-xs uppercase tracking-wide">In Progress</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Call to Action -->
            <div class="mt-16 text-center">
                <div class="relative inline-block">
                    <div class="absolute -inset-1 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-xl blur opacity-20">
                    </div>
                    <div class="relative bg-slate-800/80 backdrop-blur-xl rounded-xl p-6 border border-slate-700/50">
                        <h3 class="text-xl font-bold text-white mb-3">Want to see more?</h3>
                        <p class="text-slate-300 mb-4 max-w-sm mx-auto text-sm leading-relaxed">
                            Check out my GitHub for more projects and contributions.
                        </p>
                        <a href="{{ $data['github'] }}" target="_blank"
                            class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg font-medium text-sm hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                            <svg class="w-4 h-4 mr-1.5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            View All Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compact Contact Section -->
    <section id="contact" class="py-16 relative overflow-hidden">
        <!-- Minimal Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-900/50 to-slate-800">
            <!-- Subtle Dot Pattern -->
            <div class="absolute inset-0 opacity-3">
                <div class="w-full h-full"
                    style="background-image: radial-gradient(circle at 2px 2px, rgba(6, 182, 212, 0.15) 1px, transparent 0); background-size: 40px 40px;">
                </div>
            </div>
        </div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Minimalistic Header -->
            <div class="text-center mb-12">
                <div class="inline-block mb-8">
                    <span
                        class="px-6 py-3 bg-slate-800/60 from-cyan-500/20 to-cyan-300 rounded-full text-cyan-400 text-sm font-mono border border-cyan-500/30 backdrop-blur-sm">
                        &lt; Get In Touch /&gt;
                    </span>
                </div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4 text-center">
                    <span class="bg-gradient-to-r from-slate-100 via-cyan-200 to-blue-200 bg-clip-text text-transparent">
                        Let's Connect
                    </span>
                </h2>
                <div class="w-16 h-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 mx-auto rounded-full mb-4"></div>
                <p class="text-sm text-slate-400 max-w-xl mx-auto leading-relaxed">
                    Ready to bring your ideas to life? Let's collaborate and build something amazing together.
                </p>
            </div>

            <!-- Compact Contact Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Contact Information -->
                <div class="space-y-6">
                    <div class="relative">
                        <div
                            class="relative bg-slate-800/80 backdrop-blur-sm rounded-xl p-6 border border-slate-700/40 card-soft">
                            <h3 class="text-xl font-bold text-white mb-4 flex items-center">
                                <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                Contact Information
                            </h3>

                            <div class="space-y-4">
                                <!-- Email -->
                                <div
                                    class="flex items-center p-3 bg-slate-700/30 rounded-lg">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-cyan-500/80 to-blue-600/80 rounded-lg flex items-center justify-center mr-3 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-400 mb-1">Email</p>
                                        <a href="mailto:{{ $data['email'] }}"
                                            class="text-sm font-medium text-cyan-400">
                                            {{ $data['email'] }}
                                        </a>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div
                                    class="flex items-center p-3 bg-slate-700/30 rounded-lg">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-green-500/80 to-teal-600/80 rounded-lg flex items-center justify-center mr-3 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-400 mb-1">Phone</p>
                                        <a href="tel:{{ $data['phone'] }}"
                                            class="text-sm font-medium text-green-400">
                                            {{ $data['phone'] }}
                                        </a>
                                    </div>
                                </div>

                                <!-- Location -->
                                <div
                                    class="flex items-center p-3 bg-slate-700/30 rounded-lg">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-purple-500/80 to-pink-600/80 rounded-lg flex items-center justify-center mr-3 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-400 mb-1">Location</p>
                                        <p class="text-sm font-medium text-purple-400">{{ $data['location'] }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div class="mt-6 pt-4 border-t border-slate-600/30">
                                <h4 class="text-sm font-semibold text-slate-300 mb-3">Connect With Me</h4>
                                <div class="flex space-x-3">
                                    <a href="{{ $data['linkedin'] }}" target="_blank" class="relative">
                                        <div
                                            class="relative w-10 h-10 bg-slate-700/60 backdrop-blur-sm rounded-lg flex items-center justify-center text-blue-400 border border-slate-600/50 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                            </svg>
                                        </div>
                                    </a>

                                    <a href="{{ $data['github'] }}" target="_blank" class="relative">
                                        <div
                                            class="relative w-10 h-10 bg-slate-700/60 backdrop-blur-sm rounded-lg flex items-center justify-center text-slate-400 border border-slate-600/50 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Compact Contact Form -->
                <div class="relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-purple-400/20 to-cyan-500/20 rounded-xl">
                    </div>
                    <div
                        class="relative bg-slate-800/80 backdrop-blur-sm rounded-xl p-6 border border-slate-700/40 card-soft">
                        <h3 class="text-xl font-bold text-white mb-4 flex items-center">
                            <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            Send Message
                        </h3>

                        <form id="contact-form" class="space-y-4">
                            @csrf
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block text-xs font-medium text-slate-400 mb-2">Full Name
                                    *</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-3 py-2.5 bg-slate-700/50 border border-slate-600/50 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-slate-400 transition-all duration-300 text-sm"
                                    placeholder="Enter your full name">
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-xs font-medium text-slate-400 mb-2">Email Address
                                    *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-3 py-2.5 bg-slate-700/50 border border-slate-600/50 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-slate-400 transition-all duration-300 text-sm"
                                    placeholder="your.email@example.com">
                            </div>

                            <!-- Subject Field -->
                            <div>
                                <label for="subject" class="block text-xs font-medium text-slate-400 mb-2">Subject
                                    *</label>
                                <input type="text" id="subject" name="subject" required
                                    class="w-full px-3 py-2.5 bg-slate-700/50 border border-slate-600/50 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-slate-400 transition-all duration-300 text-sm"
                                    placeholder="What's this about?">
                            </div>

                            <!-- Message Field -->
                            <div>
                                <label for="message" class="block text-xs font-medium text-slate-400 mb-2">Message
                                    *</label>
                                <textarea id="message" name="message" rows="4" required
                                    class="w-full px-3 py-2.5 bg-slate-700/50 border border-slate-600/50 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white placeholder-slate-400 transition-all duration-300 resize-none text-sm"
                                    placeholder="Tell me about your project or idea..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-cyan-500/90 to-purple-600/90 text-white px-6 py-3 rounded-lg font-medium text-sm transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/20 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                                <span class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Send Message
                                </span>
                            </button>
                        </form>

                        <!-- Form Messages -->
                        <div id="form-message" class="mt-4 hidden"></div>
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
                    "Backend Development",
                    "PHP Enthusiast",
                    "Laravel",
                    "CodeIgniter",
                    "Node.js",
                    "Vue.js",
                    "React Basics",
                    "API Architecture",
                    "Third Party Integrations",
                    "Database Design",
                    "System Design"
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
            }, {
                threshold: 0.3
            });

            sections.forEach(section => {
                observer.observe(section);
            });

            // Smooth scroll on click
            navDots.forEach(dot => {
                dot.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetSection = document.getElementById(dot.dataset.section);
                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth'
                        });
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
            }, {
                threshold: 0.5
            });

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
                const floatingElements = document.querySelectorAll(
                    '.tech-float, .floating-code, .geometric-shape');
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
                    if (!validateField({
                            target: input
                        })) {
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
                    const response = await fetch('{{ route('portfolio.contact') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]')?.getAttribute('content') ||
                                form.querySelector('[name="_token"]').value
                        }
                    });

                    const data = await response.json();

                    if (data.success) {
                        showMessage(data.message ||
                            'Message sent successfully! I\'ll get back to you soon.', 'success');
                        form.reset();
                        // Clear field styling
                        inputs.forEach(input => {
                            input.classList.remove('border-green-500', 'border-red-500');
                        });
                    } else {
                        throw new Error(data.message || 'Something went wrong');
                    }
                } catch (error) {
                    showMessage('Failed to send message. Please try again or contact me directly.',
                        'error');
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
                const bgClass = type === 'success' ? 'bg-green-900 border-green-600 text-green-300' :
                    'bg-red-900 border-red-600 text-red-300';

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
            cursor.className =
                'fixed pointer-events-none z-50 w-4 h-4 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full opacity-0 transition-opacity duration-300';
            document.body.appendChild(cursor);

            let mouseX = 0,
                mouseY = 0;
            let cursorX = 0,
                cursorY = 0;

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
                    section.scrollIntoView({
                        behavior: 'smooth'
                    });
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
                window.open('{{ route('portfolio.download-cv') }}', '_blank');
            }
        };

        // Toggle skills visibility function
        window.toggleSkills = (categoryIndex) => {
            const hiddenSkills = document.getElementById(`hidden-skills-${categoryIndex}`);
            const toggleBtn = document.getElementById(`toggle-btn-${categoryIndex}`);

            if (hiddenSkills && toggleBtn) {
                if (hiddenSkills.classList.contains('hidden')) {
                    // Show hidden skills
                    hiddenSkills.classList.remove('hidden');
                    hiddenSkills.classList.add('animate-fadeIn');
                    toggleBtn.textContent = 'Show less';
                    toggleBtn.classList.add('text-cyan-400');
                    toggleBtn.classList.remove('text-slate-400');
                } else {
                    // Hide skills
                    hiddenSkills.classList.add('hidden');
                    hiddenSkills.classList.remove('animate-fadeIn');

                    // Get the original count from the data
                    const skillItems = hiddenSkills.querySelectorAll('.flex');
                    const count = skillItems.length;
                    toggleBtn.textContent = `+${count} more`;
                    toggleBtn.classList.remove('text-cyan-400');
                    toggleBtn.classList.add('text-slate-400');
                }
            }
        };
    </script>
@endpush
