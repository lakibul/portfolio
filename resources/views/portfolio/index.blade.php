@extends('layouts.app')

@section('title', $data['name'] . ' — Backend Software Engineer')
@section('meta_description', 'Portfolio of ' . $data['name'] . ', Backend Software Engineer specializing in PHP, Laravel, Node.js, and scalable API development. Based in Dhaka, Bangladesh.')

@push('styles')
<style>
    .reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }
    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
    .reveal-delay-4 { transition-delay: 0.4s; }

    /* Subtle dot-grid background */
    .dot-grid {
        background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px);
        background-size: 28px 28px;
    }
    .dark .dot-grid {
        background-image: radial-gradient(circle, #1e293b 1px, transparent 1px);
    }

    /* Typewriter cursor blink */
    @keyframes blink { 0%,100%{opacity:1} 50%{opacity:0} }
    .cursor-blink { animation: blink 1s step-end infinite; }

    /* Hero circle image */
    .hero-circle-wrap { transition: box-shadow 0.4s ease; }
    .hero-circle-wrap:hover { box-shadow: 0 0 0 6px rgba(139,92,246,0.15), 0 20px 60px rgba(99,102,241,0.2); }
    .hero-photo { transition: transform 0.5s ease; }
    .hero-photo:hover { transform: scale(1.04); }

    /* Floating badge pulse */
    @keyframes float-y { 0%,100%{ transform:translateY(0); } 50%{ transform:translateY(-6px); } }
    .float-badge { animation: float-y 3s ease-in-out infinite; }
</style>
@endpush

@section('content')

{{-- ═══════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════ --}}
<section id="hero" class="relative min-h-screen flex items-center overflow-hidden bg-white dark:bg-slate-950">

    <div class="absolute inset-0 dot-grid opacity-60 dark:opacity-100"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-white via-transparent to-indigo-50/40 dark:from-slate-950 dark:via-transparent dark:to-indigo-950/20 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20 items-center w-full">

            {{-- ── Left: Content ──────────────────────────────────── --}}
            <div class="order-2 lg:order-1 space-y-7">

                <div class="reveal flex items-center gap-3">
                    <span class="w-8 h-px bg-indigo-500"></span>
                    <span class="font-mono text-indigo-500 dark:text-indigo-400 text-sm tracking-wide">// Hello, World!</span>
                </div>

                <div class="reveal reveal-delay-1">
                    <h1 class="text-5xl md:text-6xl xl:text-7xl font-black leading-tight tracking-tight text-slate-900 dark:text-white">
                        Md Lakibul<br>
                        <span class="text-indigo-500 dark:text-indigo-400">Hasan</span>
                    </h1>
                </div>

                <div class="reveal reveal-delay-2 flex items-center gap-2 text-xl md:text-2xl font-semibold text-slate-600 dark:text-slate-400 h-9 overflow-hidden">
                    <span id="typing-text" class="text-indigo-600 dark:text-indigo-300"></span><span class="cursor-blink text-indigo-500 dark:text-indigo-400 font-light">|</span>
                </div>

                <p class="reveal reveal-delay-2 text-slate-600 dark:text-slate-400 text-lg leading-relaxed max-w-lg">
                    {{ $data['tagline'] }}
                </p>

                <div class="reveal reveal-delay-3 flex flex-wrap gap-4">
                    <a href="#projects"
                       class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 transition-all duration-200 hover:-translate-y-0.5">
                        View My Work
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('portfolio.download-cv') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 rounded-xl font-semibold text-sm hover:border-indigo-500 dark:hover:border-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-200 hover:-translate-y-0.5">
                        Download CV
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    </a>
                </div>

                <div class="reveal reveal-delay-4 flex items-center gap-5">
                    <a href="{{ $data['github'] }}" target="_blank" rel="noopener"
                       class="text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors duration-200" aria-label="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="{{ $data['linkedin'] }}" target="_blank" rel="noopener"
                       class="text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="mailto:{{ $data['email'] }}"
                       class="text-slate-400 hover:text-red-500 dark:hover:text-red-400 transition-colors duration-200" aria-label="Email">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </a>
                    <div class="flex-1 h-px bg-slate-200 dark:bg-slate-800 max-w-[80px]"></div>
                    <span class="font-mono text-xs text-slate-400 dark:text-slate-600 flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse inline-block"></span>
                        Available for work
                    </span>
                </div>
            </div>

            {{-- ── Right: Hero Profile Image ───────────────────────── --}}
            <div class="order-1 lg:order-2 reveal reveal-delay-2 flex justify-center lg:justify-end">
                <div class="relative">

                    {{-- Circle border + image --}}
                    <div class="hero-circle-wrap relative p-[3px] rounded-full bg-gradient-to-br from-indigo-500 via-violet-500 to-purple-500 shadow-xl shadow-indigo-500/20">
                        <div class="rounded-full overflow-hidden bg-slate-100 dark:bg-slate-900">
                            <img src="{{ asset('assets/images/profile.png') }}"
                                 alt="{{ $data['name'] }}"
                                 class="hero-photo w-64 h-64 md:w-72 md:h-72 xl:w-80 xl:h-80 object-cover object-top block rounded-full"
                                 onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['name']) }}&size=320&background=6366f1&color=ffffff&bold=true&format=svg'">
                        </div>
                    </div>

                    {{-- Available badge below --}}
                    <div class="absolute -bottom-7 left-1/2 -translate-x-1/2 flex items-center gap-2 bg-white dark:bg-slate-800 rounded-2xl px-4 py-2.5 shadow-xl border border-slate-100 dark:border-slate-700 whitespace-nowrap">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse flex-shrink-0"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Open to work</span>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:flex flex-col items-center gap-1.5 text-slate-400 dark:text-slate-600">
        <span class="font-mono text-xs">scroll</span>
        <div class="w-5 h-8 border border-slate-300 dark:border-slate-700 rounded-full flex justify-center pt-1.5">
            <div class="w-1 h-2 rounded-full bg-indigo-500 animate-bounce"></div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════
     ABOUT
═══════════════════════════════════════════════════════ --}}
<section id="about" class="py-28 bg-slate-50 dark:bg-slate-900 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-24 items-center">

            {{-- LEFT: Content --}}
            <div class="space-y-8 reveal">

                {{-- Section label + heading --}}
                <div>
                    <div class="flex items-center gap-2 text-indigo-500 dark:text-indigo-400 font-mono text-sm mb-4">
                        <span class="w-8 h-px bg-current"></span>
                        01. About Me
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white leading-tight">
                        Who I <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-cyan-500">Am</span>
                    </h2>
                </div>

                {{-- Bio --}}
                <div class="space-y-4">
                    <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">{{ $data['summary'] }}</p>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Passionate about clean architecture, system design, and robust backend infrastructure that scales. Always learning, always shipping.
                    </p>
                    <div class="typing-container">
                        <span class="text-gray-300 font-mono text-lg" id="typing-text"></span>
                        <span class="typing-cursor animate-pulse">|</span>
                    </div>
                </div>

                {{-- Contact info rows --}}
                <div class="space-y-3">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-indigo-50 dark:bg-indigo-900/30 border border-indigo-100 dark:border-indigo-800/40 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-mono text-slate-400 dark:text-slate-500 leading-none mb-1">Email</p>
                            <a href="mailto:{{ $data['email'] }}" class="text-slate-800 dark:text-slate-200 font-medium text-sm hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">{{ $data['email'] }}</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-violet-50 dark:bg-violet-900/30 border border-violet-100 dark:border-violet-800/40 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-mono text-slate-400 dark:text-slate-500 leading-none mb-1">Phone</p>
                            <a href="tel:{{ $data['phone'] }}" class="text-slate-800 dark:text-slate-200 font-medium text-sm hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">{{ $data['phone'] }}</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-cyan-50 dark:bg-cyan-900/30 border border-cyan-100 dark:border-cyan-800/40 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-mono text-slate-400 dark:text-slate-500 leading-none mb-1">Location</p>
                            <p class="text-slate-800 dark:text-slate-200 font-medium text-sm">{{ $data['location'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-green-50 dark:bg-green-900/30 border border-green-100 dark:border-green-800/40 flex items-center justify-center flex-shrink-0">
                            <span class="w-2.5 h-2.5 rounded-full bg-green-500 animate-pulse"></span>
                        </div>
                        <div>
                            <p class="text-xs font-mono text-slate-400 dark:text-slate-500 leading-none mb-1">Status</p>
                            <p class="text-green-600 dark:text-green-400 font-semibold text-sm">Open to Opportunities</p>
                        </div>
                    </div>
                </div>

                {{-- Stats strip --}}
                <div class="grid grid-cols-3 gap-4 pt-4 border-t border-slate-200 dark:border-slate-700">
                    <div class="text-center">
                        <div class="text-3xl font-black text-indigo-500 dark:text-indigo-400 leading-none">3+</div>
                        <div class="text-xs text-slate-500 dark:text-slate-400 mt-1 font-medium">Years Exp.</div>
                    </div>
                    <div class="text-center border-x border-slate-200 dark:border-slate-700">
                        <div class="text-3xl font-black text-cyan-500 dark:text-cyan-400 leading-none">8+</div>
                        <div class="text-xs text-slate-500 dark:text-slate-400 mt-1 font-medium">Projects</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-black text-violet-500 dark:text-violet-400 leading-none">15+</div>
                        <div class="text-xs text-slate-500 dark:text-slate-400 mt-1 font-medium">Technologies</div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: Stats grid --}}
            <div class="grid grid-cols-2 gap-5">
                @php
                $stats = [
                    ['value' => '3+',  'label' => 'Years Experience',   'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                                      'color' => 'text-indigo-500 dark:text-indigo-400',   'bg' => 'bg-indigo-50 dark:bg-indigo-900/30',   'delay' => '1'],
                    ['value' => '8+',  'label' => 'Projects Delivered', 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'color' => 'text-cyan-500 dark:text-cyan-400',      'bg' => 'bg-cyan-50 dark:bg-cyan-900/30',       'delay' => '2'],
                    ['value' => '15+', 'label' => 'Technologies',       'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',                                                                            'color' => 'text-emerald-500 dark:text-emerald-400', 'bg' => 'bg-emerald-50 dark:bg-emerald-900/30', 'delay' => '3'],
                    ['value' => '25%', 'label' => 'DB Query Speedup',   'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',                                                                                       'color' => 'text-violet-500 dark:text-violet-400',  'bg' => 'bg-violet-50 dark:bg-violet-900/30',   'delay' => '4'],
                ];
                @endphp
                @foreach($stats as $stat)
                <div class="reveal reveal-delay-{{ $stat['delay'] }} group bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl p-7 text-center hover:border-indigo-300 dark:hover:border-indigo-700 hover:shadow-lg hover:shadow-indigo-500/10 transition-all duration-300 cursor-default">
                    <div class="w-10 h-10 rounded-xl {{ $stat['bg'] }} flex items-center justify-center mx-auto mb-4">
                        <svg class="w-5 h-5 {{ $stat['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"/></svg>
                    </div>
                    <div class="text-4xl xl:text-5xl font-black {{ $stat['color'] }} mb-2 leading-none">{{ $stat['value'] }}</div>
                    <div class="text-slate-500 dark:text-slate-400 text-sm font-medium">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════
     SKILLS
═══════════════════════════════════════════════════════ --}}
<section id="skills" class="py-28 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 text-indigo-500 dark:text-indigo-400 font-mono text-sm mb-4">
                <span class="w-8 h-px bg-current"></span>
                02. Skills
                <span class="w-8 h-px bg-current"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white">Technical Arsenal</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-4 max-w-xl mx-auto">Technologies I work with daily to build scalable backend systems</p>
        </div>

        @php
        $catStyles = [
            'Languages'      => ['badge' => 'bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 ring-1 ring-blue-200 dark:ring-blue-800/40',    'head' => 'text-blue-600 dark:text-blue-400'],
            'Frameworks'     => ['badge' => 'bg-violet-50 dark:bg-violet-900/30 text-violet-700 dark:text-violet-300 ring-1 ring-violet-200 dark:ring-violet-800/40','head' => 'text-violet-600 dark:text-violet-400'],
            'Frontend'       => ['badge' => 'bg-cyan-50 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 ring-1 ring-cyan-200 dark:ring-cyan-800/40',      'head' => 'text-cyan-600 dark:text-cyan-400'],
            'Database'       => ['badge' => 'bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 ring-1 ring-emerald-200 dark:ring-emerald-800/40','head' => 'text-emerald-600 dark:text-emerald-400'],
            'Tools & DevOps' => ['badge' => 'bg-orange-50 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 ring-1 ring-orange-200 dark:ring-orange-800/40','head' => 'text-orange-600 dark:text-orange-400'],
            'Concepts'       => ['badge' => 'bg-pink-50 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 ring-1 ring-pink-200 dark:ring-pink-800/40',       'head' => 'text-pink-600 dark:text-pink-400'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($data['skills'] as $category => $skillList)
            @php $s = $catStyles[$category] ?? $catStyles['Concepts']; @endphp
            <div class="reveal bg-slate-50 dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 p-6 hover:shadow-lg hover:shadow-slate-100 dark:hover:shadow-none transition-shadow duration-300">
                <h3 class="font-mono text-xs font-semibold {{ $s['head'] }} uppercase tracking-widest mb-4">{{ $category }}</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($skillList as $skill)
                    <span class="px-3 py-1 rounded-lg text-sm font-medium {{ $s['badge'] }}">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>


{{-- ═══════════════════════════════════════════════════════
     EXPERIENCE
═══════════════════════════════════════════════════════ --}}
<section id="experience" class="py-28 bg-slate-50 dark:bg-slate-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 text-indigo-500 dark:text-indigo-400 font-mono text-sm mb-4">
                <span class="w-8 h-px bg-current"></span>
                03. Experience
                <span class="w-8 h-px bg-current"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white">Career Timeline</h2>
        </div>

        {{-- Experience timeline --}}
        <div class="relative pl-8 md:pl-10 border-l-2 border-slate-200 dark:border-slate-800 space-y-10 mb-20">
            @foreach($data['experience'] as $job)
            <div class="reveal relative">
                <div class="absolute -left-[2.65rem] md:-left-[2.9rem] top-6 w-5 h-5 rounded-full bg-indigo-500 dark:bg-indigo-400 border-4 border-slate-50 dark:border-slate-900 shadow-md shadow-indigo-300 dark:shadow-indigo-900"></div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 p-6 md:p-8 hover:border-indigo-200 dark:hover:border-indigo-800 transition-colors duration-300">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-3 mb-5">
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">{{ $job['title'] }}</h3>
                            <p class="text-indigo-600 dark:text-indigo-400 font-semibold mt-0.5">{{ $job['company'] }}</p>
                        </div>
                        <div class="flex flex-col items-start sm:items-end gap-1.5 flex-shrink-0">
                            <span class="font-mono text-xs bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 px-3 py-1 rounded-full border border-indigo-200 dark:border-indigo-800">{{ $job['period'] }}</span>
                            <span class="text-slate-400 dark:text-slate-500 text-xs flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                {{ $job['location'] }}
                            </span>
                        </div>
                    </div>
                    <ul class="space-y-2.5">
                        @foreach($job['responsibilities'] as $item)
                        <li class="flex items-start gap-3 text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            <svg class="w-4 h-4 text-indigo-500 dark:text-indigo-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Education --}}
        <div class="reveal mb-10">
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                </div>
                Education
            </h3>
            <div class="space-y-4">
                @foreach($data['education'] as $edu)
                <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h4 class="font-bold text-slate-900 dark:text-white">{{ $edu['degree'] }}</h4>
                        <p class="text-indigo-600 dark:text-indigo-400 font-semibold text-sm mt-0.5">{{ $edu['institution'] }}</p>
                        <p class="text-slate-400 dark:text-slate-500 text-xs mt-0.5">{{ $edu['location'] ?? 'Bangladesh' }}</p>
                    </div>
                    <div class="flex flex-col items-start sm:items-end gap-1.5 flex-shrink-0">
                        <span class="font-mono text-xs bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 px-3 py-1 rounded-full">{{ $edu['period'] }}</span>
                        @if(isset($edu['cgpa']))
                        <span class="text-xs text-emerald-600 dark:text-emerald-400 font-semibold">CGPA {{ $edu['cgpa'] }}</span>
                        @elseif(isset($edu['gpa']))
                        <span class="text-xs text-emerald-600 dark:text-emerald-400 font-semibold">GPA {{ $edu['gpa'] }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Certifications --}}
        <div class="reveal">
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                </div>
                Certifications
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach($data['certifications'] as $cert)
                <div class="flex items-center gap-3 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-4">
                    <div class="w-8 h-8 rounded-lg bg-emerald-100 dark:bg-emerald-900/40 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <span class="text-slate-700 dark:text-slate-300 text-sm font-medium">{{ $cert }}</span>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>


{{-- ═══════════════════════════════════════════════════════
     PROJECTS
═══════════════════════════════════════════════════════ --}}
<section id="projects" class="py-28 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 text-indigo-500 dark:text-indigo-400 font-mono text-sm mb-4">
                <span class="w-8 h-px bg-current"></span>
                04. Projects
                <span class="w-8 h-px bg-current"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white">Featured Work</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-4 max-w-xl mx-auto">From social platforms to ERP systems — a cross-section of backend projects I've built</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach($data['projects'] as $project)
            <div class="reveal group flex flex-col bg-slate-50 dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden hover:border-indigo-300 dark:hover:border-indigo-700 hover:shadow-xl hover:shadow-indigo-500/5 transition-all duration-300">

                <div class="h-1 w-full bg-gradient-to-r from-indigo-500 via-violet-500 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <div class="flex flex-col flex-1 p-6">

                    {{-- Project icon + title row --}}
                    <div class="flex items-start gap-3 mb-3">
                        <div class="w-9 h-9 rounded-xl bg-indigo-100 dark:bg-indigo-900/40 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors leading-snug pt-1">{{ $project['name'] }}</h3>
                    </div>

                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed flex-1 mb-4">{{ $project['description'] }}</p>

                    {{-- Tech badges --}}
                    <div class="flex flex-wrap gap-1.5 mb-5">
                        @foreach(array_slice($project['technologies'], 0, 4) as $tech)
                        <span class="px-2.5 py-1 font-mono text-xs bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-md">{{ $tech }}</span>
                        @endforeach
                        @if(count($project['technologies']) > 4)
                        <span class="px-2.5 py-1 font-mono text-xs bg-slate-200 dark:bg-slate-800 text-slate-500 rounded-md">+{{ count($project['technologies']) - 4 }}</span>
                        @endif
                    </div>

                    {{-- Action buttons --}}
                    <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center gap-2">
                        @if(isset($project['github']) && $project['github'] !== '#')
                        <a href="{{ $project['github'] }}" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-900 dark:bg-slate-700 text-white hover:bg-slate-700 dark:hover:bg-slate-600 transition-colors duration-200">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            Source Code
                        </a>
                        @endif
                        @if(isset($project['link']) && $project['link'] !== '#')
                        <a href="{{ $project['link'] }}" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold bg-indigo-600 hover:bg-indigo-700 text-white transition-colors duration-200 shadow-sm shadow-indigo-500/30">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Live Demo
                        </a>
                        @endif
                        @if((!isset($project['github']) || $project['github'] === '#') && (!isset($project['link']) || $project['link'] === '#'))
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-400 dark:text-slate-500">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            Private / NDA
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>


{{-- ═══════════════════════════════════════════════════════
     CONTACT
═══════════════════════════════════════════════════════ --}}
<section id="contact" class="py-28 bg-slate-50 dark:bg-slate-900">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 text-indigo-500 dark:text-indigo-400 font-mono text-sm mb-4">
                <span class="w-8 h-px bg-current"></span>
                05. Contact
                <span class="w-8 h-px bg-current"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white">Get In Touch</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-4 max-w-lg mx-auto">Open to new projects, collaborations, or just a conversation about tech. I typically respond within 24 hours.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10">

            <div class="lg:col-span-2 space-y-4 reveal">
                <a href="mailto:{{ $data['email'] }}" class="flex items-center gap-4 p-4 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-indigo-200 dark:hover:border-indigo-800 transition-colors group">
                    <div class="w-10 h-10 rounded-xl bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-mono text-slate-400 dark:text-slate-500">Email</p>
                        <p class="text-slate-800 dark:text-slate-200 font-medium text-sm truncate group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">{{ $data['email'] }}</p>
                    </div>
                </a>
                <a href="tel:{{ $data['phone'] }}" class="flex items-center gap-4 p-4 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-indigo-200 dark:hover:border-indigo-800 transition-colors group">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <div>
                        <p class="text-xs font-mono text-slate-400 dark:text-slate-500">Phone</p>
                        <p class="text-slate-800 dark:text-slate-200 font-medium text-sm group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">{{ $data['phone'] }}</p>
                    </div>
                </a>
                <div class="flex items-center gap-4 p-4 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700">
                    <div class="w-10 h-10 rounded-xl bg-sky-100 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div>
                        <p class="text-xs font-mono text-slate-400 dark:text-slate-500">Location</p>
                        <p class="text-slate-800 dark:text-slate-200 font-medium text-sm">{{ $data['location'] }}</p>
                    </div>
                </div>

                <div class="pt-2">
                    <p class="text-xs font-mono text-slate-400 dark:text-slate-500 mb-3">Find me on</p>
                    <div class="flex gap-3">
                        <a href="{{ $data['github'] }}" target="_blank" rel="noopener"
                           class="w-10 h-10 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl flex items-center justify-center text-slate-500 hover:text-slate-900 dark:hover:text-white hover:border-slate-400 dark:hover:border-slate-500 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="{{ $data['linkedin'] }}" target="_blank" rel="noopener"
                           class="w-10 h-10 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl flex items-center justify-center text-slate-500 hover:text-indigo-600 dark:hover:text-indigo-400 hover:border-indigo-300 dark:hover:border-indigo-700 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 reveal reveal-delay-1">
                <form id="contact-form" class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 p-7 space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-xs font-mono font-medium text-slate-500 dark:text-slate-400 mb-2 uppercase tracking-wide">Full Name</label>
                            <input type="text" id="name" name="name" required placeholder="John Doe"
                                   class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl text-slate-900 dark:text-white placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-mono font-medium text-slate-500 dark:text-slate-400 mb-2 uppercase tracking-wide">Email</label>
                            <input type="email" id="email" name="email" required placeholder="you@example.com"
                                   class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl text-slate-900 dark:text-white placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-xs font-mono font-medium text-slate-500 dark:text-slate-400 mb-2 uppercase tracking-wide">Subject</label>
                        <input type="text" id="subject" name="subject" required placeholder="Project Collaboration"
                               class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl text-slate-900 dark:text-white placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors">
                    </div>
                    <div>
                        <label for="message" class="block text-xs font-mono font-medium text-slate-500 dark:text-slate-400 mb-2 uppercase tracking-wide">Message</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Tell me about your project or idea..."
                                  class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl text-slate-900 dark:text-white placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit"
                            class="w-full flex items-center justify-center gap-2 px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm shadow-lg shadow-indigo-500/25 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed hover:-translate-y-0.5">
                        <span id="submit-text">Send Message</span>
                        <span id="submit-loading" class="hidden items-center gap-2">
                            <svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                            </svg>
                            Sending…
                        </span>
                    </button>
                    <div id="form-message" class="hidden"></div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
// ── Reveal on scroll ──────────────────────────────────────────────────────
const revealObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

window.addEventListener('load', () => {
    document.querySelectorAll('#hero .reveal').forEach((el, i) => {
        setTimeout(() => el.classList.add('visible'), i * 100);
    });
});

// ── Typewriter ────────────────────────────────────────────────────────────
(function () {
    const words = ['Backend Engineer', 'Laravel Developer', 'API Architect', 'Node.js Developer', 'Microservices Dev'];
    let wi = 0, ci = 0, deleting = false;
    const el = document.getElementById('typing-text');
    if (!el) return;
    function tick() {
        const word = words[wi];
        el.textContent = deleting ? word.slice(0, ci--) : word.slice(0, ci++);
        if (!deleting && ci > word.length)  { deleting = true; return setTimeout(tick, 1800); }
        if (deleting  && ci < 0)            { deleting = false; wi = (wi + 1) % words.length; }
        setTimeout(tick, deleting ? 55 : 95);
    }
    setTimeout(tick, 900);
})();

// ── Contact form ──────────────────────────────────────────────────────────
document.getElementById('contact-form')?.addEventListener('submit', async function (e) {
    e.preventDefault();
    const btn    = this.querySelector('button[type="submit"]');
    const txtEl  = document.getElementById('submit-text');
    const loadEl = document.getElementById('submit-loading');
    const msgDiv = document.getElementById('form-message');

    btn.disabled = true;
    txtEl.classList.add('hidden');
    loadEl.classList.remove('hidden');
    loadEl.classList.add('inline-flex');

    try {
        const res = await fetch('{{ route("portfolio.contact") }}', {
            method: 'POST',
            body: new FormData(this),
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content
                              ?? this.querySelector('[name="_token"]').value
            }
        });
        const data = await res.json();
        if (!data.success) throw new Error(data.message);
        msgDiv.innerHTML = '<div class="p-4 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-200 dark:border-emerald-800 text-emerald-700 dark:text-emerald-400 rounded-xl text-sm">Message sent successfully!</div>';
        this.reset();
    } catch {
        msgDiv.innerHTML = '<div class="p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 text-red-700 dark:text-red-400 rounded-xl text-sm">Failed to send. Please email directly.</div>';
    } finally {
        btn.disabled = false;
        txtEl.classList.remove('hidden');
        loadEl.classList.add('hidden');
        loadEl.classList.remove('inline-flex');
        msgDiv.classList.remove('hidden');
        setTimeout(() => msgDiv.classList.add('hidden'), 7000);
    }
});
</script>
@endpush
