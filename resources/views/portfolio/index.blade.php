@extends('layouts.app')

@section('title', $data['name'] . ' — Backend Software Engineer')
@section('meta_description', 'Portfolio of ' . $data['name'] . ', Backend Software Engineer specializing in PHP, Laravel, Node.js, and scalable API development. Based in Dhaka, Bangladesh.')

@push('styles')
<style>
    /* ── Reveal ──────────────────────────────────────── */
    .reveal{opacity:0;transform:translateY(26px);transition:opacity .6s ease,transform .6s ease;}
    .reveal.visible{opacity:1;transform:translateY(0);}
    .rd1{transition-delay:.08s;} .rd2{transition-delay:.16s;} .rd3{transition-delay:.26s;} .rd4{transition-delay:.36s;}

    /* ── Dot grid ────────────────────────────────────── */
    .dot-grid{background-image:radial-gradient(#e0e7ff 1.5px,transparent 1.5px);background-size:30px 30px;}

    /* ── Typewriter ──────────────────────────────────── */
    @keyframes blink{0%,100%{opacity:1}50%{opacity:0}}
    .cur{animation:blink 1s step-end infinite;}

    /* ── Photo frame ─────────────────────────────────── */
    @keyframes float-y{0%,100%{transform:translateY(0);}50%{transform:translateY(-9px);}}
    .float{animation:float-y 4s ease-in-out infinite;}

    /* ── Lift card ───────────────────────────────────── */
    .lift{transition:transform .28s ease,box-shadow .28s ease;}
    .lift:hover{transform:translateY(-6px);box-shadow:0 20px 50px -10px rgba(99,102,241,.18);}

    /* ── Skill pill hover ────────────────────────────── */
    .sp{transition:background .2s,color .2s,transform .2s,border-color .2s;}
    .sp:hover{transform:translateY(-2px);}

    /* ── Section number decoration ───────────────────── */
    .sec-deco{position:absolute;font-size:7rem;font-weight:900;line-height:1;color:rgba(99,102,241,.05);right:0;top:-1rem;font-family:'JetBrains Mono',monospace;pointer-events:none;user-select:none;}

    /* ── Tag strip ───────────────────────────────────── */
    @keyframes marquee{0%{transform:translateX(0);}100%{transform:translateX(-50%);}}
    .marquee-inner{display:flex;animation:marquee 28s linear infinite;}
    .marquee-inner:hover{animation-play-state:paused;}

    /* ── Input ───────────────────────────────────────── */
    .inp{width:100%;background:#f8fafc;border:1.5px solid #e2e8f0;border-radius:.75rem;padding:.75rem 1rem;font-size:.875rem;color:#1e293b;outline:none;transition:border-color .2s,box-shadow .2s;}
    .inp::placeholder{color:#94a3b8;}
    .inp:focus{border-color:#6366f1;box-shadow:0 0 0 3px rgba(99,102,241,.1);}

    /* ── Timeline ────────────────────────────────────── */
    .tl{position:relative;padding-left:1.75rem;}
    .tl::before{content:'';position:absolute;left:0;top:8px;bottom:-1.5rem;width:2px;background:linear-gradient(180deg,#6366f1 0%,rgba(99,102,241,.06) 100%);}
    .tl:last-child::before{bottom:0;}
    .tl-dot{position:absolute;left:-7px;top:6px;width:16px;height:16px;border-radius:9999px;background:#fff;border:2.5px solid #6366f1;box-shadow:0 0 0 4px rgba(99,102,241,.12);}

    /* ── Scrollbar ───────────────────────────────────── */
    ::-webkit-scrollbar{width:4px;}
    ::-webkit-scrollbar-track{background:#f8fafc;}
    ::-webkit-scrollbar-thumb{background:linear-gradient(180deg,#6366f1,#06b6d4);border-radius:9999px;}

    /* ── Highlight bar behind heading ────────────────── */
    .hl{position:relative;display:inline-block;}
    .hl::after{content:'';position:absolute;bottom:4px;left:-2px;right:-2px;height:40%;background:linear-gradient(90deg,rgba(99,102,241,.18),rgba(6,182,212,.18));border-radius:2px;z-index:-1;}

    /* ── Nav link active ─────────────────────────────── */
    .nav-link.active{color:#6366f1;}

    /* ── Project cards + modal ───────────────────────── */
    .project-thumb{aspect-ratio:16/10;}
    .line-clamp-2{-webkit-line-clamp:2;-webkit-box-orient:vertical;display:-webkit-box;overflow:hidden;}
    .modal-backdrop{backdrop-filter:blur(8px);}
    .modal-enter{opacity:0;transform:translateY(16px) scale(.98);}
    .modal-enter-active{opacity:1;transform:translateY(0) scale(1);transition:all .22s ease;}
    .project-card{transition:transform .22s ease,box-shadow .22s ease,border-color .22s ease;}
    .project-card:hover{transform:translateY(-4px);box-shadow:0 14px 35px -16px rgba(79,70,229,.35);border-color:#c7d2fe;}
    .project-hover-badge{opacity:0;transform:translateY(-4px);transition:opacity .2s ease,transform .2s ease;}
    .project-card:hover .project-hover-badge{opacity:1;transform:translateY(0);}
    .open-link-btn{transition:background .2s ease,transform .2s ease,box-shadow .2s ease;}
    .open-link-btn:hover{transform:translateY(-1px);box-shadow:0 10px 24px -12px rgba(79,70,229,.55);}

    /* ── WhatsApp floating button ───────────────────── */
    @keyframes wa-float{0%,100%{transform:translateY(0)}50%{transform:translateY(-7px)}}
    @keyframes wa-pulse{0%{box-shadow:0 0 0 0 rgba(37,211,102,.38)}70%{box-shadow:0 0 0 16px rgba(37,211,102,0)}100%{box-shadow:0 0 0 0 rgba(37,211,102,0)}}
    .wa-fab{position:fixed;right:1.35rem;bottom:1.35rem;z-index:80;width:4.1rem;height:4.1rem;border-radius:9999px;background:linear-gradient(145deg,#2ad56f 0%,#20be5d 100%);color:#fff;display:flex;align-items:center;justify-content:center;border:2px solid rgba(255,255,255,.95);box-shadow:0 18px 38px -14px rgba(22,163,74,.7),0 4px 12px rgba(15,23,42,.16);animation:wa-float 3s ease-in-out infinite,wa-pulse 2.5s infinite;transition:transform .22s ease,filter .22s ease,box-shadow .22s ease;}
    .wa-fab::after{content:'';position:absolute;inset:5px;border-radius:9999px;border:1px solid rgba(255,255,255,.35);pointer-events:none;}
    .wa-fab:hover{transform:translateY(-3px) scale(1.05);filter:saturate(1.06) brightness(1.02);box-shadow:0 24px 48px -16px rgba(22,163,74,.75),0 8px 18px rgba(15,23,42,.2);}
    @media (max-width:640px){.wa-fab{right:1rem;bottom:1rem;width:3.65rem;height:3.65rem;}}
</style>
@endpush

@section('content')

{{-- ══════════════════════ HERO ══════════════════════ --}}
<section id="hero" class="relative min-h-screen flex items-center bg-white overflow-hidden">

    <div class="absolute inset-0 dot-grid opacity-70"></div>
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-indigo-50 via-violet-50/60 to-transparent rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-cyan-50 via-transparent to-transparent rounded-full blur-2xl pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 items-center">

            {{-- Left --}}
            <div class="order-2 lg:order-1 space-y-8">

                <div class="reveal">
                    <div class="inline-flex items-center gap-2 bg-indigo-50 border border-indigo-200/60 rounded-full px-4 py-1.5 mb-6">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse flex-shrink-0"></span>
                        <span class="font-mono text-xs text-indigo-600 font-medium">Available for opportunities</span>
                    </div>
                    <h1 class="text-5xl sm:text-6xl xl:text-[4.5rem] font-black leading-[1.06] tracking-tight text-slate-900">
                        Md Lakibul<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">Hasan</span>
                    </h1>
                </div>

                <div class="reveal rd1 flex items-center gap-3 h-8">
                    <span class="font-mono text-lg font-semibold text-slate-500" id="typing-text"></span>
                    <span class="cur text-indigo-500 text-xl font-light">|</span>
                </div>

                <p class="reveal rd2 text-slate-500 text-lg leading-relaxed max-w-lg">{{ $data['tagline'] }}</p>

                <div class="reveal rd3 flex flex-wrap gap-3">
                    <a href="#projects"
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-600/40 transition-all duration-200 hover:-translate-y-0.5">
                        View My Work
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('portfolio.download-cv') }}"
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl border-2 border-slate-200 hover:border-indigo-400 text-slate-600 hover:text-indigo-600 text-sm font-semibold bg-white transition-all duration-200 hover:-translate-y-0.5">
                        Download CV
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    </a>
                </div>

                <div class="reveal rd4 flex items-center gap-5 pt-1">
                    <a href="{{ $data['github'] }}" target="_blank" rel="noopener"
                       class="flex items-center gap-2 text-slate-400 hover:text-slate-900 transition-colors text-sm font-medium">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        GitHub
                    </a>
                    <a href="{{ $data['linkedin'] }}" target="_blank" rel="noopener"
                       class="flex items-center gap-2 text-slate-400 hover:text-indigo-600 transition-colors text-sm font-medium">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                    <a href="mailto:{{ $data['email'] }}"
                       class="flex items-center gap-2 text-slate-400 hover:text-cyan-600 transition-colors text-sm font-medium">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Email
                    </a>
                </div>
            </div>

            {{-- Right: Photo --}}
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                <div class="relative w-72 h-72 md:w-80 md:h-80 xl:w-96 xl:h-96">
                    {{-- Colored offset block --}}
                    <div class="absolute -bottom-4 -right-4 w-full h-full rounded-3xl bg-gradient-to-br from-indigo-500 to-violet-600 opacity-15 rotate-3"></div>
                    <div class="absolute -bottom-2 -right-2 w-full h-full rounded-3xl border-2 border-indigo-200 rotate-1"></div>

                    {{-- Photo --}}
                    <div class="relative w-full h-full rounded-3xl overflow-hidden shadow-2xl shadow-indigo-200/60 border border-slate-100">
                        <img src="https://i.ibb.co.com/9mwsLCYm/1768554565016-1.png"
                             alt="{{ $data['name'] }}"
                             class="w-full h-full object-cover object-top"
                             onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['name']) }}&size=400&background=4f46e5&color=ffffff&bold=true&format=svg'">
                    </div>

                    {{-- Open to work badge --}}
                    <div class="float absolute -bottom-5 left-6 flex items-center gap-2 bg-white border border-slate-200 rounded-2xl px-4 py-2.5 shadow-xl whitespace-nowrap">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse flex-shrink-0"></span>
                        <span class="text-xs font-bold text-slate-700">Open to work</span>
                    </div>

                    {{-- Experience badge --}}
                    <div class="float absolute -top-4 -right-4 bg-indigo-600 text-white rounded-2xl px-4 py-2.5 shadow-xl text-center" style="animation-delay:.8s">
                        <div class="text-xl font-black leading-none">4+</div>
                        <div class="text-[10px] font-medium opacity-90 mt-0.5">Years Exp.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:flex flex-col items-center gap-2 text-slate-400">
        <span class="font-mono text-[10px] tracking-widest uppercase">scroll</span>
        <div class="w-5 h-8 border-2 border-slate-200 rounded-full flex justify-center pt-1.5">
            <div class="w-1 h-2 bg-indigo-500 rounded-full animate-bounce"></div>
        </div>
    </div>

</section>


{{-- ══════════════════════ MARQUEE ══════════════════════ --}}
<div class="py-5 bg-indigo-600 overflow-hidden">
    <div class="marquee-inner">
        @php $tags = ['PHP', 'Laravel', 'Node.js', 'MySQL', 'PostgreSQL', 'Redis', 'Docker', 'REST API', 'Microservices', 'OpenAI', 'Vue.js', 'CodeIgniter', 'MongoDB', 'Git', 'Queue Processing', 'API Architecture', 'PHP', 'Laravel', 'Node.js', 'MySQL', 'PostgreSQL', 'Redis', 'Docker', 'REST API', 'Microservices', 'OpenAI', 'Vue.js', 'CodeIgniter', 'MongoDB', 'Git', 'Queue Processing', 'API Architecture']; @endphp
        @foreach($tags as $tag)
        <span class="inline-flex items-center gap-2 mx-5 text-indigo-100 text-sm font-mono font-medium whitespace-nowrap">
            <span class="w-1.5 h-1.5 rounded-full bg-indigo-300 flex-shrink-0"></span>
            {{ $tag }}
        </span>
        @endforeach
    </div>
</div>


{{-- ══════════════════════ ABOUT ══════════════════════ --}}
<section id="about" class="py-28 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-24 items-center">

            {{-- Left: Bio --}}
            <div class="space-y-8 reveal">
                <div class="relative">
                    <span class="sec-deco">01</span>
                    <p class="font-mono text-xs text-indigo-500 uppercase tracking-[.2em] mb-3">About Me</p>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">
                        Who I <span class="hl text-indigo-600">Am</span>
                    </h2>
                </div>
                <p class="text-slate-600 text-lg leading-relaxed">{{ $data['summary'] }}</p>
                <p class="text-slate-500 leading-relaxed">Passionate about clean architecture, performance optimization, and AI-powered automation. Always learning, always shipping.</p>

                <div class="space-y-3">
                    @foreach([
                        ['icon'=>'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z','val'=>$data['location'],'href'=>null],
                        ['icon'=>'M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z','val'=>$data['email'],'href'=>'mailto:'.$data['email']],
                        ['icon'=>'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z','val'=>$data['phone'],'href'=>'tel:'.$data['phone']],
                    ] as $r)
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $r['icon'] }}"/>
                            </svg>
                        </div>
                        @if($r['href'])
                        <a href="{{ $r['href'] }}" class="text-slate-600 hover:text-indigo-600 text-sm transition-colors">{{ $r['val'] }}</a>
                        @else
                        <span class="text-slate-600 text-sm">{{ $r['val'] }}</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: Stats --}}
            @php
            $stats = [
                ['v'=>'4+',  'l'=>'Years Experience',    'ic'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'bg'=>'bg-indigo-50','ic_c'=>'text-indigo-500','border'=>'border-indigo-100'],
                ['v'=>'10+', 'l'=>'Projects Shipped',    'ic'=>'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10','bg'=>'bg-violet-50','ic_c'=>'text-violet-500','border'=>'border-violet-100'],
                ['v'=>'25%', 'l'=>'API Performance Gain','ic'=>'M13 10V3L4 14h7v7l9-11h-7z', 'bg'=>'bg-cyan-50','ic_c'=>'text-cyan-600','border'=>'border-cyan-100'],
                ['v'=>'5',   'l'=>'Industry Domains',    'ic'=>'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9','bg'=>'bg-emerald-50','ic_c'=>'text-emerald-600','border'=>'border-emerald-100'],
            ];
            @endphp
            <div class="grid grid-cols-2 gap-4 reveal rd2">
                @foreach($stats as $s)
                <div class="lift bg-white border border-slate-100 rounded-2xl p-6 text-center shadow-sm">
                    <div class="w-11 h-11 rounded-xl {{ $s['bg'] }} border {{ $s['border'] }} flex items-center justify-center mx-auto mb-3">
                        <svg class="w-5 h-5 {{ $s['ic_c'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['ic'] }}"/>
                        </svg>
                    </div>
                    <div class="text-3xl font-black text-slate-900 mb-1">{{ $s['v'] }}</div>
                    <div class="text-xs text-slate-500 font-medium leading-tight">{{ $s['l'] }}</div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════ SKILLS ══════════════════════ --}}
<section id="skills" class="py-28 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <p class="font-mono text-xs text-indigo-500 uppercase tracking-[.2em] mb-3">02. Skills</p>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900">Technical <span class="hl text-indigo-600">Expertise</span></h2>
        </div>

        @php
        $cc = [
            'Languages'       => ['lbl'=>'text-blue-600',   'pill'=>'bg-blue-50 border-blue-100 text-blue-700',   'bar'=>'bg-blue-500'],
            'Frameworks'      => ['lbl'=>'text-violet-600', 'pill'=>'bg-violet-50 border-violet-100 text-violet-700','bar'=>'bg-violet-500'],
            'Data & Storage'  => ['lbl'=>'text-emerald-600','pill'=>'bg-emerald-50 border-emerald-100 text-emerald-700','bar'=>'bg-emerald-500'],
            'AI & Automation' => ['lbl'=>'text-orange-600', 'pill'=>'bg-orange-50 border-orange-100 text-orange-700','bar'=>'bg-orange-500'],
            'Tools'           => ['lbl'=>'text-cyan-600',   'pill'=>'bg-cyan-50 border-cyan-100 text-cyan-700',   'bar'=>'bg-cyan-500'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
            @foreach($data['skills'] as $category => $skillList)
            @php $c = $cc[$category] ?? ['lbl'=>'text-slate-600','pill'=>'bg-slate-50 border-slate-200 text-slate-600','bar'=>'bg-slate-400']; @endphp
            <div class="reveal lift bg-white border border-slate-100 rounded-2xl p-6 shadow-sm hover:border-indigo-100 transition-colors">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="w-1 h-5 rounded-full {{ $c['bar'] }}"></div>
                    <h3 class="font-mono text-xs font-bold {{ $c['lbl'] }} uppercase tracking-widest">{{ $category }}</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($skillList as $skill)
                    <span class="sp px-3 py-1.5 rounded-lg text-xs font-medium border {{ $c['pill'] }}">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════ EXPERIENCE ══════════════════════ --}}
<section id="experience" class="py-28 bg-slate-50 overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <p class="font-mono text-xs text-indigo-500 uppercase tracking-[.2em] mb-3">03. Experience</p>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900">Work <span class="hl text-indigo-600">History</span></h2>
        </div>

        {{-- Timeline --}}
        <div class="ml-2 space-y-0">
            @foreach($data['experience'] as $job)
            <div class="reveal tl mb-8 last:mb-0">
                <div class="tl-dot"></div>
                <div class="bg-white border border-slate-100 rounded-2xl p-6 shadow-sm hover:border-indigo-100 hover:shadow-md transition-all duration-200">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $job['title'] }}</h3>
                            <p class="text-indigo-600 font-semibold text-sm mt-0.5">{{ $job['company'] }}</p>
                            <p class="text-slate-400 text-xs font-mono mt-0.5">{{ $job['location'] }}</p>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-600 text-xs font-mono font-semibold whitespace-nowrap">
                            {{ $job['period'] }}
                        </span>
                    </div>
                    <ul class="space-y-2">
                        @foreach($job['responsibilities'] as $item)
                        <li class="flex items-start gap-2.5 text-slate-500 text-sm leading-relaxed">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-400 flex-shrink-0 mt-[7px]"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════ PROJECTS ══════════════════════ --}}
<section id="projects" class="py-28 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <p class="font-mono text-xs text-indigo-500 uppercase tracking-[.2em] mb-3">04. Projects</p>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900">Featured <span class="hl text-indigo-600">Work</span></h2>
            <p class="text-slate-500 mt-4 max-w-md mx-auto text-sm">From SaaS platforms and e-commerce to real-time apps and AI integrations.</p>
        </div>

        <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
            @foreach($data['projects'] as $project)
            @php
                $projectImage = $project['image'] ?? ('https://placehold.co/1200x750/e2e8f0/334155?text=' . urlencode($project['name'] . ' Preview'));
                $openUrl = ($project['link'] ?? '#') !== '#'
                    ? ($project['link'] ?? '#')
                    : (($project['github'] ?? '#') !== '#' ? ($project['github'] ?? '#') : null);
                $ctaText = ($project['link'] ?? '#') !== '#'
                    ? 'Open Project'
                    : ((($project['github'] ?? '#') !== '#') ? 'GitHub' : 'Private / NDA');
                $ctaClass = ($project['link'] ?? '#') !== '#'
                    ? 'bg-indigo-600 hover:bg-indigo-700 text-white'
                    : ((($project['github'] ?? '#') !== '#')
                        ? 'bg-slate-900 hover:bg-slate-800 text-white'
                        : 'bg-amber-50 border border-amber-200 text-amber-700');
                $projectData = [
                    'name' => $project['name'],
                    'description' => $project['description'],
                    'features' => $project['features'] ?? [],
                    'technologies' => $project['technologies'] ?? [],
                    'image' => $projectImage,
                    'link' => $project['link'] ?? '#',
                    'github' => $project['github'] ?? '#',
                ];
            @endphp
            <article
                class="project-card text-left reveal flex flex-col bg-white border border-slate-200 rounded-2xl p-4 shadow-sm"
                data-project='@json($projectData)'
                role="button"
                tabindex="0"
                aria-label="Open details for {{ $project['name'] }}">
                <div class="relative project-thumb overflow-hidden rounded-xl border border-slate-200 bg-slate-100">
                    <img src="{{ $projectImage }}"
                         alt="{{ $project['name'] }} preview"
                         class="w-full h-full object-cover object-center"
                         loading="lazy"
                         onerror="this.src='https://placehold.co/1200x750/e2e8f0/334155?text={{ urlencode($project['name']) }}';">
                    <span class="project-hover-badge absolute top-2 right-2 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-white/90 border border-slate-200 text-slate-700">
                        Click to view
                    </span>
                    <span class="absolute right-2 bottom-2 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-900/70 text-white">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        Details
                    </span>
                </div>

                <h3 class="mt-4 text-lg font-bold text-slate-900 leading-snug">{{ $project['name'] }}</h3>
                <p class="mt-2 text-slate-500 text-sm leading-relaxed line-clamp-2">{{ \Illuminate\Support\Str::limit($project['description'], 110) }}</p>

                <div class="mt-3 flex flex-wrap gap-1.5">
                    @foreach(array_slice($project['technologies'], 0, 3) as $tech)
                    <span class="px-2.5 py-1 rounded-lg bg-slate-50 border border-slate-200 text-slate-500 text-xs font-mono">{{ $tech }}</span>
                    @endforeach
                    @if(count($project['technologies']) > 3)
                    <span class="px-2.5 py-1 rounded-lg bg-slate-50 border border-slate-200 text-slate-400 text-xs font-mono">+{{ count($project['technologies']) - 3 }}</span>
                    @endif
                </div>

                <div class="mt-3">
                    @if($openUrl)
                    <a href="{{ $openUrl }}" target="_blank" rel="noopener" class="project-open-link open-link-btn inline-flex items-center gap-1.5 px-3 py-1.5 rounded-md {{ $ctaClass }} text-xs font-semibold transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        {{ $ctaText }}
                    </a>
                    @else
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-md {{ $ctaClass }} text-xs font-semibold">
                        {{ $ctaText }}
                    </span>
                    @endif
                </div>
            </article>
            @endforeach
        </div>

    </div>
</section>

{{-- Project details modal --}}
<div id="project-modal" class="fixed inset-0 z-[100] hidden items-end md:items-center justify-center p-0 md:p-6">
    <div id="project-modal-overlay" class="absolute inset-0 bg-slate-900/55 modal-backdrop"></div>
    <div id="project-modal-card" class="relative w-full md:max-w-6xl bg-white rounded-t-2xl md:rounded-2xl border border-slate-200 shadow-2xl overflow-hidden modal-enter max-h-[92vh] overflow-y-auto">
        <button type="button" id="project-modal-close" class="absolute top-3 right-3 z-10 h-10 w-10 rounded-full bg-white/90 border border-slate-200 text-slate-600 hover:text-slate-900 hover:bg-white transition-colors" aria-label="Close project modal">
            <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>

        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="bg-slate-100 border-b lg:border-b-0 lg:border-r border-slate-200">
                <img id="project-modal-image" src="" alt="Project preview" class="w-full h-72 md:h-[460px] lg:h-full object-cover object-center">
            </div>
            <div class="p-6 md:p-8 lg:p-10">
                <p class="font-mono text-[11px] tracking-[.16em] uppercase text-indigo-500">Project Details</p>
                <h3 id="project-modal-title" class="mt-2 text-3xl font-black text-slate-900"></h3>
                <p id="project-modal-description" class="mt-4 text-slate-600 leading-relaxed text-sm md:text-[15px]"></p>
                <div id="project-modal-stack" class="mt-5 flex flex-wrap gap-2"></div>
                <div id="project-modal-features-wrap" class="mt-5 hidden">
                    <p class="text-xs font-mono tracking-[.14em] uppercase text-slate-500 mb-2">Key Features</p>
                    <ul id="project-modal-features" class="space-y-2"></ul>
                </div>

                <div class="mt-7 flex flex-wrap gap-2.5">
                    <a id="project-modal-live" href="#" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        Visit Project
                    </a>
                    <a id="project-modal-source" href="#" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-slate-900 hover:bg-slate-800 text-white text-sm font-semibold transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        Source Code
                    </a>
                    <span id="project-modal-private" class="hidden inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-slate-100 border border-slate-200 text-slate-500 text-sm font-semibold">
                        Private / NDA
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- ══════════════════════ EDUCATION & CERTIFICATIONS ══════════════════════ --}}
<section id="education" class="py-28 bg-slate-50 overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <p class="font-mono text-xs text-indigo-500 uppercase tracking-[.2em] mb-3">05. Background</p>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900">Education & <span class="hl text-indigo-600">Certifications</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- Education --}}
            <div class="reveal bg-white border border-slate-100 rounded-2xl p-6 shadow-sm">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-1 h-5 rounded-full bg-indigo-500"></div>
                    <h3 class="font-mono text-xs font-bold text-indigo-600 uppercase tracking-widest">Education</h3>
                </div>
                @foreach($data['education'] as $edu)
                <div class="mb-5 last:mb-0 pb-5 last:pb-0 border-b border-slate-100 last:border-0">
                    <p class="text-slate-900 font-semibold text-sm leading-snug">{{ $edu['degree'] }}</p>
                    <p class="text-indigo-500 text-xs mt-1 font-medium">{{ $edu['institution'] }}</p>
                    <div class="flex items-center gap-3 mt-1.5">
                        <span class="text-slate-400 text-xs font-mono">{{ $edu['period'] }}</span>
                        @if(isset($edu['score']))
                        <span class="text-emerald-600 text-xs font-mono font-semibold">{{ $edu['score'] }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Certifications --}}
            <div class="reveal rd1 bg-white border border-slate-100 rounded-2xl p-6 shadow-sm">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-1 h-5 rounded-full bg-violet-500"></div>
                    <h3 class="font-mono text-xs font-bold text-violet-600 uppercase tracking-widest">Certifications</h3>
                </div>
                @foreach($data['certifications'] as $cert)
                <div class="flex items-start gap-3 mb-4 last:mb-0">
                    <div class="w-5 h-5 rounded-full bg-violet-50 border border-violet-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <span class="text-slate-600 text-sm leading-relaxed">{{ $cert }}</span>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════ CONTACT ══════════════════════ --}}
<section id="contact" class="py-28 bg-slate-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <p class="font-mono text-xs text-indigo-500 uppercase tracking-[.2em] mb-3">06. Contact</p>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900">Let's <span class="hl text-indigo-600">Connect</span></h2>
            <p class="text-slate-500 mt-4 max-w-sm mx-auto text-sm">Open to full-time roles, freelance work, or just a conversation about backend engineering.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">

            {{-- Info --}}
            <div class="lg:col-span-2 space-y-4 reveal">
                @foreach([
                    ['d'=>'M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z','l'=>'Email','v'=>$data['email'],'h'=>'mailto:'.$data['email']],
                    ['d'=>'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z','l'=>'Phone','v'=>$data['phone'],'h'=>'tel:'.$data['phone']],
                    ['d'=>'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z','l'=>'Location','v'=>$data['location'],'h'=>null],
                ] as $ci)
                <div class="flex items-center gap-4 bg-white border border-slate-100 rounded-xl p-4 shadow-sm">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $ci['d'] }}"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-mono text-slate-400 uppercase tracking-wider mb-0.5">{{ $ci['l'] }}</p>
                        @if($ci['h'])
                        <a href="{{ $ci['h'] }}" class="text-slate-700 hover:text-indigo-600 text-sm font-medium transition-colors truncate block">{{ $ci['v'] }}</a>
                        @else
                        <p class="text-slate-700 text-sm font-medium">{{ $ci['v'] }}</p>
                        @endif
                    </div>
                </div>
                @endforeach

                <div class="flex gap-3 pt-2">
                    <a href="{{ $data['github'] }}" target="_blank" rel="noopener"
                       class="flex-1 flex items-center justify-center gap-2 py-3 bg-slate-900 hover:bg-slate-800 rounded-xl text-white text-sm font-semibold transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        GitHub
                    </a>
                    <a href="{{ $data['linkedin'] }}" target="_blank" rel="noopener"
                       class="flex-1 flex items-center justify-center gap-2 py-3 bg-indigo-600 hover:bg-indigo-700 rounded-xl text-white text-sm font-semibold transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                </div>
            </div>

            {{-- Form --}}
            <div class="lg:col-span-3 reveal rd2">
                <form id="contact-form" class="bg-white border border-slate-100 rounded-2xl p-8 shadow-sm space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-mono text-slate-500 uppercase tracking-wider mb-2">Name</label>
                            <input type="text" name="name" required placeholder="Your name" class="inp">
                        </div>
                        <div>
                            <label class="block text-xs font-mono text-slate-500 uppercase tracking-wider mb-2">Email</label>
                            <input type="email" name="email" required placeholder="your@email.com" class="inp">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-mono text-slate-500 uppercase tracking-wider mb-2">Subject</label>
                        <input type="text" name="subject" required placeholder="What's this about?" class="inp">
                    </div>
                    <div>
                        <label class="block text-xs font-mono text-slate-500 uppercase tracking-wider mb-2">Message</label>
                        <textarea name="message" rows="5" required placeholder="Tell me about your project or opportunity..." class="inp resize-none"></textarea>
                    </div>
                    <div id="form-message" class="hidden"></div>
                    <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-2.5 px-6 py-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm shadow-lg shadow-indigo-200 hover:shadow-indigo-300 transition-all duration-200 hover:-translate-y-0.5">
                        <span id="submit-text">Send Message</span>
                        <span id="submit-loading" class="hidden items-center gap-2">
                            <svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                            Sending...
                        </span>
                        <svg id="send-icon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<a href="https://wa.me/8801983427887" target="_blank" rel="noopener" class="wa-fab" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
    <svg class="w-7 h-7" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true">
        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122 0-221.7 99.6-221.7 221.7c0 39.1 10.2 77.3 29.6 111L0 480l118.7-31.1c32.6 17.8 69.3 27.2 106.1 27.2h.1c121.9 0 221.8-99.6 221.8-221.7c0-59.3-23.1-115-65.8-157.3zM223.9 438.7c-33.2 0-65.7-8.9-94.2-25.7l-6.8-4l-70.4 18.5l18.8-68.6l-4.4-7.1c-18.5-29.4-28.2-63.4-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1c34.8 34.8 54 81.2 54 130.4c-.1 101.8-83 184.6-184.8 184.6zm101.1-138.3c-5.5-2.8-32.8-16.1-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8c-3.7 5.5-14.3 18-17.6 21.7c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.6-65.9c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7c-1.4-2.8-12.5-30.1-17.1-41.3c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2c-3.7 0-9.7 1.4-14.8 6.9c-5.1 5.5-19.5 19.1-19.5 46.5s20 53.9 22.8 57.6c2.8 3.7 39.3 60 95.2 84.1c35.4 15.3 49.2 16.6 66.9 14c10.8-1.6 32.8-13.4 37.4-26.3c4.6-12.9 4.6-24 3.2-26.3c-1.3-2.3-5-3.7-10.5-6.5z"/>
    </svg>
</a>

@endsection

@push('scripts')
<script>
// ── Reveal on scroll ──────────────────────────────────────────
const revObs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); revObs.unobserve(e.target); } });
}, { threshold: 0.07, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal').forEach(el => revObs.observe(el));
window.addEventListener('load', () => {
    document.querySelectorAll('#hero .reveal').forEach((el, i) => setTimeout(() => el.classList.add('visible'), i * 110));
});

// ── Typewriter ────────────────────────────────────────────────
(function () {
    const words = ['Backend Engineer','Laravel Developer','API Architect','Node.js Developer','Microservices Dev','AI Integration Dev'];
    let wi = 0, ci = 0, del = false;
    const el = document.getElementById('typing-text');
    if (!el) return;
    function tick() {
        const w = words[wi];
        el.textContent = del ? w.slice(0, ci--) : w.slice(0, ci++);
        if (!del && ci > w.length) { del = true; return setTimeout(tick, 1800); }
        if (del && ci < 0) { del = false; wi = (wi + 1) % words.length; }
        setTimeout(tick, del ? 50 : 90);
    }
    setTimeout(tick, 800);
})();

// ── Contact form ──────────────────────────────────────────────
document.getElementById('contact-form')?.addEventListener('submit', async function (e) {
    e.preventDefault();
    const btn      = this.querySelector('button[type="submit"]');
    const txtEl    = document.getElementById('submit-text');
    const loadEl   = document.getElementById('submit-loading');
    const sendIcon = document.getElementById('send-icon');
    const msgDiv   = document.getElementById('form-message');
    btn.disabled = true;
    txtEl.classList.add('hidden');
    sendIcon.classList.add('hidden');
    loadEl.classList.remove('hidden');
    loadEl.classList.add('inline-flex');
    try {
        const res  = await fetch('{{ route("portfolio.contact") }}', {
            method : 'POST',
            body   : new FormData(this),
            headers: { 'X-Requested-With': 'XMLHttpRequest', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? this.querySelector('[name="_token"]').value }
        });
        const data = await res.json();
        if (!data.success) throw new Error(data.message);
        msgDiv.innerHTML = '<div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl text-sm font-medium">Message sent! I\'ll get back to you soon.</div>';
        this.reset();
    } catch {
        msgDiv.innerHTML = '<div class="p-4 bg-red-50 border border-red-200 text-red-600 rounded-xl text-sm">Failed to send. Email me directly at <span class="font-mono underline">{{ $data["email"] }}</span></div>';
    } finally {
        btn.disabled = false;
        txtEl.classList.remove('hidden');
        sendIcon.classList.remove('hidden');
        loadEl.classList.add('hidden');
        loadEl.classList.remove('inline-flex');
        msgDiv.classList.remove('hidden');
        setTimeout(() => msgDiv.classList.add('hidden'), 7000);
    }
});

// ── Projects modal (single optimized instance) ─────────────────────────────
(function () {
    const grid = document.getElementById('projects-grid');
    const modal = document.getElementById('project-modal');
    const overlay = document.getElementById('project-modal-overlay');
    const card = document.getElementById('project-modal-card');
    const closeBtn = document.getElementById('project-modal-close');
    if (!grid || !modal || !overlay || !card || !closeBtn) return;

    const titleEl = document.getElementById('project-modal-title');
    const descEl = document.getElementById('project-modal-description');
    const imageEl = document.getElementById('project-modal-image');
    const stackEl = document.getElementById('project-modal-stack');
    const featureWrapEl = document.getElementById('project-modal-features-wrap');
    const featureListEl = document.getElementById('project-modal-features');
    const liveEl = document.getElementById('project-modal-live');
    const sourceEl = document.getElementById('project-modal-source');
    const privateEl = document.getElementById('project-modal-private');

    const fallbackImage = 'https://placehold.co/1200x750/e2e8f0/334155?text=Project+Preview';

    const setLinkState = (el, url) => {
        const ok = url && url !== '#';
        el.classList.toggle('hidden', !ok);
        if (ok) el.href = url;
    };

    const openModal = (project) => {
        titleEl.textContent = project.name || 'Project';
        descEl.textContent = project.description || 'No description available.';
        imageEl.src = project.image || fallbackImage;
        imageEl.alt = `${project.name || 'Project'} preview`;
        imageEl.onerror = () => { imageEl.src = fallbackImage; };

        stackEl.innerHTML = '';
        (project.technologies || []).forEach((tech) => {
            const chip = document.createElement('span');
            chip.className = 'px-2.5 py-1 rounded-lg bg-slate-50 border border-slate-200 text-slate-600 text-xs font-mono';
            chip.textContent = tech;
            stackEl.appendChild(chip);
        });

        featureListEl.innerHTML = '';
        const features = project.features || [];
        if (features.length) {
            featureWrapEl.classList.remove('hidden');
            features.forEach((feature) => {
                const li = document.createElement('li');
                li.className = 'text-slate-600 text-sm flex items-start gap-2';
                li.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-[7px] flex-shrink-0"></span><span></span>';
                li.lastElementChild.textContent = feature;
                featureListEl.appendChild(li);
            });
        } else {
            featureWrapEl.classList.add('hidden');
        }

        setLinkState(liveEl, project.link);
        setLinkState(sourceEl, project.github);
        const hasPublicLinks = (project.link && project.link !== '#') || (project.github && project.github !== '#');
        privateEl.classList.toggle('hidden', hasPublicLinks);

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
        requestAnimationFrame(() => card.classList.add('modal-enter-active'));
    };

    const closeModal = () => {
        card.classList.remove('modal-enter-active');
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }, 180);
    };

    grid.addEventListener('click', (e) => {
        if (e.target.closest('.project-open-link')) return;
        const trigger = e.target.closest('.project-card');
        if (!trigger) return;
        try {
            openModal(JSON.parse(trigger.dataset.project || '{}'));
        } catch {
            openModal({});
        }
    });

    grid.addEventListener('keydown', (e) => {
        const trigger = e.target.closest('.project-card');
        if (!trigger) return;
        if (e.key !== 'Enter' && e.key !== ' ') return;
        e.preventDefault();
        try {
            openModal(JSON.parse(trigger.dataset.project || '{}'));
        } catch {
            openModal({});
        }
    });

    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', closeModal);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
    });
})();
</script>
@endpush
