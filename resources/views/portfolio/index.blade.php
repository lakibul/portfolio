@extends('layouts.app')

@section('title', $data['name'] . ' — Backend Software Engineer')
@section('meta_description', 'Portfolio of ' . $data['name'] . ', Backend Software Engineer specializing in PHP, Laravel, Node.js, and scalable API development. Based in Dhaka, Bangladesh.')

@push('styles')
<style>
    /* ── Reveal ─────────────────────────────────────────────── */
    .reveal { opacity:0; transform:translateY(28px); transition:opacity .6s ease,transform .6s ease; }
    .reveal.visible { opacity:1; transform:translateY(0); }
    .reveal-delay-1 { transition-delay:.1s; }
    .reveal-delay-2 { transition-delay:.2s; }
    .reveal-delay-3 { transition-delay:.3s; }
    .reveal-delay-4 { transition-delay:.45s; }

    /* ── Dot grid ───────────────────────────────────────────── */
    .dot-grid { background-image:radial-gradient(rgba(99,102,241,.12) 1px,transparent 1px); background-size:32px 32px; }

    /* ── Typewriter ─────────────────────────────────────────── */
    @keyframes blink{0%,100%{opacity:1}50%{opacity:0}}
    .cursor-blink{animation:blink 1s step-end infinite;}

    /* ── Card hover lift ────────────────────────────────────── */
    .lift{transition:transform .28s ease,box-shadow .28s ease;}
    .lift:hover{transform:translateY(-5px);box-shadow:0 24px 64px -10px rgba(99,102,241,.22);}

    /* ── Gradient text ──────────────────────────────────────── */
    .grad{background:linear-gradient(135deg,#818cf8,#22d3ee);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}

    /* ── Gradient border ring ───────────────────────────────── */
    .grad-ring{background:linear-gradient(135deg,#6366f1,#a855f7,#06b6d4);padding:2px;border-radius:9999px;display:inline-block;}

    /* ── Pulse ring for hero photo ──────────────────────────── */
    @keyframes pulse-ring{0%,100%{box-shadow:0 0 0 0 rgba(99,102,241,.35);}50%{box-shadow:0 0 0 14px rgba(99,102,241,0);}}
    .pulse-ring{animation:pulse-ring 3.5s ease-in-out infinite;}

    /* ── Float badge ────────────────────────────────────────── */
    @keyframes floaty{0%,100%{transform:translateY(0) translateX(-50%);}50%{transform:translateY(-7px) translateX(-50%);}}
    .float-badge{animation:floaty 3.5s ease-in-out infinite;}

    /* ── Skill badge ────────────────────────────────────────── */
    .skill-pill{transition:transform .18s,background .18s,color .18s;}
    .skill-pill:hover{transform:translateY(-2px);}

    /* ── Timeline dot + line ────────────────────────────────── */
    .tl-item{position:relative;padding-left:1.75rem;}
    .tl-item::before{content:'';position:absolute;left:0;top:6px;bottom:-24px;width:2px;background:linear-gradient(180deg,#6366f1,rgba(99,102,241,.05));}
    .tl-item:last-child::before{bottom:0;}
    .tl-dot{position:absolute;left:-7px;top:4px;width:16px;height:16px;border-radius:9999px;background:#0f172a;border:2px solid #6366f1;box-shadow:0 0 0 4px rgba(99,102,241,.15);}

    /* ── Input focus ────────────────────────────────────────── */
    .inp{background:rgba(30,41,59,.6);border:1px solid #334155;border-radius:.75rem;padding:.75rem 1rem;width:100%;font-size:.875rem;color:#cbd5e1;outline:none;transition:border-color .2s;}
    .inp::placeholder{color:#475569;}
    .inp:focus{border-color:#6366f1;}

    /* ── Scrollbar ──────────────────────────────────────────── */
    ::-webkit-scrollbar{width:4px;}
    ::-webkit-scrollbar-track{background:#020617;}
    ::-webkit-scrollbar-thumb{background:linear-gradient(180deg,#6366f1,#06b6d4);border-radius:9999px;}

    /* ── Section number ─────────────────────────────────────── */
    .sec-num{font-family:'JetBrains Mono',monospace;font-size:.7rem;letter-spacing:.12em;text-transform:uppercase;color:#6366f1;display:flex;align-items:center;gap:.6rem;margin-bottom:1rem;}
    .sec-num::before{content:'';display:inline-block;width:2rem;height:1px;background:#6366f1;}
</style>
@endpush

@section('content')

{{-- ══════════════════════════════════════════════
     HERO
══════════════════════════════════════════════ --}}
<section id="hero" class="relative min-h-screen flex items-center bg-slate-950 overflow-hidden">

    {{-- Background --}}
    <div class="absolute inset-0 dot-grid"></div>
    <div class="absolute -top-32 -left-48 w-[520px] h-[520px] bg-indigo-700/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-48 w-[520px] h-[520px] bg-cyan-600/8 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-20 items-center">

            {{-- Left: Text --}}
            <div class="order-2 lg:order-1 space-y-8">

                <div class="reveal">
                    <div class="inline-flex items-center gap-2 bg-indigo-500/10 border border-indigo-500/20 rounded-full px-4 py-1.5 mb-7">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="font-mono text-xs text-indigo-300 tracking-wide">Available for opportunities</span>
                    </div>
                    <h1 class="text-5xl sm:text-6xl xl:text-[4.5rem] font-black leading-[1.04] tracking-tight text-white">
                        Md Lakibul<br>
                        <span class="grad">Hasan</span>
                    </h1>
                </div>

                <div class="reveal reveal-delay-1 flex items-center gap-3 h-8">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 flex-shrink-0"></span>
                    <span id="typing-text" class="font-mono text-lg text-slate-400"></span>
                    <span class="cursor-blink text-indigo-400 text-xl font-thin">|</span>
                </div>

                <p class="reveal reveal-delay-2 text-slate-400 text-lg leading-relaxed max-w-lg">
                    {{ $data['tagline'] }}
                </p>

                <div class="reveal reveal-delay-3 flex flex-wrap gap-4">
                    <a href="#projects"
                       class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold shadow-lg shadow-indigo-600/25 hover:shadow-indigo-500/40 transition-all duration-200 hover:-translate-y-0.5">
                        View My Work
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('portfolio.download-cv') }}"
                       class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl border border-slate-700 hover:border-indigo-500/60 bg-slate-900/60 text-slate-300 hover:text-white text-sm font-semibold transition-all duration-200 hover:-translate-y-0.5">
                        Download CV
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    </a>
                </div>

                <div class="reveal reveal-delay-4 flex items-center gap-6 pt-1">
                    <a href="{{ $data['github'] }}" target="_blank" rel="noopener"
                       class="flex items-center gap-2 text-slate-500 hover:text-white transition-colors duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        <span class="text-sm font-medium">GitHub</span>
                    </a>
                    <a href="{{ $data['linkedin'] }}" target="_blank" rel="noopener"
                       class="flex items-center gap-2 text-slate-500 hover:text-indigo-400 transition-colors duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        <span class="text-sm font-medium">LinkedIn</span>
                    </a>
                    <a href="mailto:{{ $data['email'] }}"
                       class="flex items-center gap-2 text-slate-500 hover:text-cyan-400 transition-colors duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span class="text-sm font-medium">Email</span>
                    </a>
                </div>
            </div>

            {{-- Right: Profile photo --}}
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                <div class="relative inline-block">
                    <div class="absolute -inset-6 rounded-full bg-gradient-to-br from-indigo-500/15 to-cyan-500/10 blur-2xl pointer-events-none"></div>
                    <div class="grad-ring pulse-ring relative">
                        <div class="rounded-full overflow-hidden bg-slate-900 w-64 h-64 md:w-72 md:h-72 xl:w-80 xl:h-80">
                            <img src="{{ asset('assets/images/profile.jpg') }}"
                                 alt="{{ $data['name'] }}"
                                 class="w-full h-full object-cover object-top"
                                 onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['name']) }}&size=320&background=4f46e5&color=ffffff&bold=true&format=svg'">
                        </div>
                    </div>
                    <div class="float-badge absolute -bottom-5 left-1/2 flex items-center gap-2 bg-slate-900 border border-slate-700/80 rounded-2xl px-4 py-2.5 shadow-2xl shadow-black/50 whitespace-nowrap">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse flex-shrink-0"></span>
                        <span class="text-xs font-semibold text-slate-300">Open to work</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:flex flex-col items-center gap-2 text-slate-700">
        <span class="font-mono text-[10px] tracking-widest uppercase">scroll</span>
        <div class="w-5 h-8 border border-slate-800 rounded-full flex justify-center pt-1.5">
            <div class="w-1 h-2 bg-indigo-500 rounded-full animate-bounce"></div>
        </div>
    </div>

</section>


{{-- ══════════════════════════════════════════════
     ABOUT
══════════════════════════════════════════════ --}}
<section id="about" class="py-28 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-24 items-center">

            {{-- Left: Bio --}}
            <div class="space-y-8 reveal">
                <div>
                    <div class="sec-num">01. About Me</div>
                    <h2 class="text-4xl md:text-5xl font-black text-white leading-tight">
                        Who I <span class="grad">Am</span>
                    </h2>
                </div>

                <p class="text-slate-400 text-lg leading-relaxed">{{ $data['summary'] }}</p>
                <p class="text-slate-500 leading-relaxed">Passionate about clean architecture, performance optimization, and systems that scale. Currently exploring AI-powered automation and intelligent backend pipelines.</p>

                <div class="space-y-3 pt-2">
                    @foreach([
                        ['d' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'v' => $data['location'], 'h' => null],
                        ['d' => 'M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'v' => $data['email'], 'h' => 'mailto:'.$data['email']],
                        ['d' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'v' => $data['phone'], 'h' => 'tel:'.$data['phone']],
                    ] as $row)
                    <div class="flex items-center gap-4">
                        <div class="w-9 h-9 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $row['d'] }}"/>
                            </svg>
                        </div>
                        @if($row['h'])
                        <a href="{{ $row['h'] }}" class="text-slate-400 hover:text-indigo-400 text-sm transition-colors">{{ $row['v'] }}</a>
                        @else
                        <span class="text-slate-400 text-sm">{{ $row['v'] }}</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: Stats --}}
            @php
            $stats = [
                ['val' => '4+',  'label' => 'Years Experience',    'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['val' => '10+', 'label' => 'Projects Shipped',    'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                ['val' => '25%', 'label' => 'API Performance Gain','icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                ['val' => '5',   'label' => 'Industry Domains',    'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9'],
            ];
            @endphp
            <div class="grid grid-cols-2 gap-4 reveal reveal-delay-2">
                @foreach($stats as $s)
                <div class="lift bg-slate-800/50 border border-slate-700/60 rounded-2xl p-6 text-center">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['icon'] }}"/>
                        </svg>
                    </div>
                    <div class="text-3xl font-black text-white mb-1">{{ $s['val'] }}</div>
                    <div class="text-xs text-slate-500 font-medium leading-tight">{{ $s['label'] }}</div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════
     SKILLS
══════════════════════════════════════════════ --}}
<section id="skills" class="py-28 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="sec-num justify-center">02. Skills</div>
            <h2 class="text-4xl md:text-5xl font-black text-white">Technical <span class="grad">Expertise</span></h2>
        </div>

        @php
        $cc = [
            'Languages'       => ['pill' => 'bg-blue-500/10 border-blue-500/25 text-blue-300',   'h' => 'text-blue-400'],
            'Frameworks'      => ['pill' => 'bg-violet-500/10 border-violet-500/25 text-violet-300','h' => 'text-violet-400'],
            'Data & Storage'  => ['pill' => 'bg-emerald-500/10 border-emerald-500/25 text-emerald-300','h' => 'text-emerald-400'],
            'AI & Automation' => ['pill' => 'bg-orange-500/10 border-orange-500/25 text-orange-300','h' => 'text-orange-400'],
            'Tools'           => ['pill' => 'bg-cyan-500/10 border-cyan-500/25 text-cyan-300',    'h' => 'text-cyan-400'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
            @foreach($data['skills'] as $category => $skillList)
            @php $c = $cc[$category] ?? ['pill' => 'bg-slate-700/50 border-slate-600/50 text-slate-300', 'h' => 'text-slate-400']; @endphp
            <div class="reveal lift bg-slate-900/80 border border-slate-800 hover:border-slate-700 rounded-2xl p-6">
                <h3 class="font-mono text-xs font-bold {{ $c['h'] }} uppercase tracking-widest mb-4">{{ $category }}</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($skillList as $skill)
                    <span class="skill-pill px-3 py-1.5 rounded-lg text-xs font-medium border {{ $c['pill'] }}">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════════
     EXPERIENCE
══════════════════════════════════════════════ --}}
<section id="experience" class="py-28 bg-slate-900">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="sec-num justify-center">03. Experience</div>
            <h2 class="text-4xl md:text-5xl font-black text-white">Work <span class="grad">History</span></h2>
        </div>

        {{-- Education + Certifications --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-10">

            <div class="reveal bg-slate-800/40 border border-slate-700/50 rounded-2xl p-6">
                <h3 class="font-mono text-xs text-indigo-400 uppercase tracking-widest mb-5">Education</h3>
                @foreach($data['education'] as $edu)
                <div class="mb-5 last:mb-0 pb-5 last:pb-0 border-b border-slate-700/40 last:border-0">
                    <p class="text-white font-semibold text-sm leading-snug">{{ $edu['degree'] }}</p>
                    <p class="text-indigo-400 text-xs mt-1">{{ $edu['institution'] }}</p>
                    <div class="flex items-center gap-3 mt-1.5">
                        <span class="text-slate-600 text-xs font-mono">{{ $edu['period'] }}</span>
                        @if(isset($edu['score']))
                        <span class="text-cyan-400 text-xs font-mono">{{ $edu['score'] }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <div class="reveal reveal-delay-1 bg-slate-800/40 border border-slate-700/50 rounded-2xl p-6">
                <h3 class="font-mono text-xs text-indigo-400 uppercase tracking-widest mb-5">Certifications</h3>
                @foreach($data['certifications'] as $cert)
                <div class="flex items-start gap-3 mb-4 last:mb-0">
                    <div class="w-5 h-5 rounded-full bg-indigo-500/20 border border-indigo-500/30 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <span class="text-slate-400 text-sm leading-relaxed">{{ $cert }}</span>
                </div>
                @endforeach
            </div>

        </div>

        {{-- Work timeline --}}
        <div class="space-y-0 ml-2">
            @foreach($data['experience'] as $job)
            <div class="reveal tl-item mb-8 last:mb-0">
                <div class="tl-dot"></div>
                <div class="bg-slate-800/40 border border-slate-700/50 hover:border-indigo-500/30 rounded-2xl p-6 transition-colors duration-200">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-white">{{ $job['title'] }}</h3>
                            <p class="text-indigo-400 font-medium text-sm mt-0.5">{{ $job['company'] }}</p>
                            <p class="text-slate-600 text-xs mt-0.5 font-mono">{{ $job['location'] }}</p>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-mono whitespace-nowrap">
                            {{ $job['period'] }}
                        </span>
                    </div>
                    <ul class="space-y-2">
                        @foreach($job['responsibilities'] as $item)
                        <li class="flex items-start gap-2.5 text-slate-400 text-sm leading-relaxed">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 flex-shrink-0 mt-2"></span>
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


{{-- ══════════════════════════════════════════════
     PROJECTS
══════════════════════════════════════════════ --}}
<section id="projects" class="py-28 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="sec-num justify-center">04. Projects</div>
            <h2 class="text-4xl md:text-5xl font-black text-white">Featured <span class="grad">Work</span></h2>
            <p class="text-slate-500 mt-4 max-w-lg mx-auto text-sm">A selection of systems I've built — from SaaS platforms and e-commerce to real-time apps and AI integrations.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
            @foreach($data['projects'] as $project)
            <div class="lift reveal flex flex-col bg-slate-900/80 border border-slate-800 hover:border-indigo-500/40 rounded-2xl p-6 group transition-colors duration-200">

                {{-- Icon + Title --}}
                <div class="flex items-start gap-3 mb-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-indigo-500/20 transition-colors">
                        <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-white group-hover:text-indigo-400 transition-colors leading-snug pt-1.5">{{ $project['name'] }}</h3>
                </div>

                {{-- Description --}}
                <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-4">{{ $project['description'] }}</p>

                {{-- Tech badges --}}
                <div class="flex flex-wrap gap-1.5 mb-5">
                    @foreach(array_slice($project['technologies'], 0, 4) as $tech)
                    <span class="px-2 py-1 rounded-md bg-slate-800 border border-slate-700/80 text-slate-400 text-xs font-mono">{{ $tech }}</span>
                    @endforeach
                    @if(count($project['technologies']) > 4)
                    <span class="px-2 py-1 rounded-md bg-slate-800 border border-slate-700/80 text-slate-600 text-xs font-mono">+{{ count($project['technologies']) - 4 }}</span>
                    @endif
                </div>

                {{-- Actions --}}
                <div class="pt-4 border-t border-slate-800 flex items-center flex-wrap gap-2">
                    @if(isset($project['github']) && $project['github'] !== '#')
                    <a href="{{ $project['github'] }}" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-800 hover:bg-slate-700 border border-slate-700 hover:border-slate-600 text-slate-300 hover:text-white rounded-lg text-xs font-medium transition-all">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        Source Code
                    </a>
                    @endif
                    @if(isset($project['link']) && $project['link'] !== '#')
                    <a href="{{ $project['link'] }}" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-indigo-600/15 hover:bg-indigo-600/25 border border-indigo-500/25 hover:border-indigo-500/50 text-indigo-400 hover:text-indigo-300 rounded-lg text-xs font-medium transition-all">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        {{ $project['name'] }}
                    </a>
                    @endif
                    @if((!isset($project['github']) || $project['github'] === '#') && (!isset($project['link']) || $project['link'] === '#'))
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-800/50 border border-slate-700/50 text-slate-600 rounded-lg text-xs font-medium cursor-default">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        Private / NDA
                    </span>
                    @endif
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════════
     CONTACT
══════════════════════════════════════════════ --}}
<section id="contact" class="py-28 bg-slate-900">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <div class="sec-num justify-center">05. Contact</div>
            <h2 class="text-4xl md:text-5xl font-black text-white">Let's <span class="grad">Connect</span></h2>
            <p class="text-slate-500 mt-4 max-w-sm mx-auto text-sm">Open to full-time roles, freelance projects, or a conversation about backend engineering.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">

            {{-- Info --}}
            <div class="lg:col-span-2 space-y-4 reveal">
                @foreach([
                    ['d' => 'M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'l' => 'Email', 'v' => $data['email'], 'h' => 'mailto:'.$data['email']],
                    ['d' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'l' => 'Phone', 'v' => $data['phone'], 'h' => 'tel:'.$data['phone']],
                    ['d' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'l' => 'Location', 'v' => $data['location'], 'h' => null],
                ] as $ci)
                <div class="flex items-center gap-4 bg-slate-800/40 border border-slate-700/50 rounded-xl p-4">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $ci['d'] }}"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-mono text-slate-600 uppercase tracking-wider mb-0.5">{{ $ci['l'] }}</p>
                        @if($ci['h'])
                        <a href="{{ $ci['h'] }}" class="text-slate-300 text-sm hover:text-indigo-400 transition-colors truncate block">{{ $ci['v'] }}</a>
                        @else
                        <p class="text-slate-300 text-sm">{{ $ci['v'] }}</p>
                        @endif
                    </div>
                </div>
                @endforeach

                <div class="flex gap-3 pt-2">
                    <a href="{{ $data['github'] }}" target="_blank" rel="noopener"
                       class="flex-1 flex items-center justify-center gap-2 py-3 bg-slate-800/40 hover:bg-slate-800 border border-slate-700/50 hover:border-slate-600 rounded-xl text-slate-400 hover:text-white text-sm font-medium transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        GitHub
                    </a>
                    <a href="{{ $data['linkedin'] }}" target="_blank" rel="noopener"
                       class="flex-1 flex items-center justify-center gap-2 py-3 bg-slate-800/40 hover:bg-indigo-600/20 border border-slate-700/50 hover:border-indigo-500/40 rounded-xl text-slate-400 hover:text-indigo-400 text-sm font-medium transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                </div>
            </div>

            {{-- Form --}}
            <div class="lg:col-span-3 reveal reveal-delay-2">
                <form id="contact-form" class="bg-slate-900/80 border border-slate-800 rounded-2xl p-8 space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-mono text-slate-600 uppercase tracking-wider mb-2">Name</label>
                            <input type="text" name="name" required placeholder="Your name" class="inp">
                        </div>
                        <div>
                            <label class="block text-xs font-mono text-slate-600 uppercase tracking-wider mb-2">Email</label>
                            <input type="email" name="email" required placeholder="your@email.com" class="inp">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-mono text-slate-600 uppercase tracking-wider mb-2">Subject</label>
                        <input type="text" name="subject" required placeholder="What's this about?" class="inp">
                    </div>
                    <div>
                        <label class="block text-xs font-mono text-slate-600 uppercase tracking-wider mb-2">Message</label>
                        <textarea name="message" rows="5" required placeholder="Tell me about your project or opportunity..." class="inp resize-none"></textarea>
                    </div>
                    <div id="form-message" class="hidden"></div>
                    <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-2.5 px-6 py-4 bg-indigo-600 hover:bg-indigo-500 text-white rounded-xl font-semibold text-sm shadow-lg shadow-indigo-600/20 hover:shadow-indigo-500/40 transition-all duration-200 hover:-translate-y-0.5">
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

@endsection

@push('scripts')
<script>
// ── Reveal on scroll ──────────────────────────────────────────────────────
const revObs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); revObs.unobserve(e.target); } });
}, { threshold: 0.07, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal').forEach(el => revObs.observe(el));
window.addEventListener('load', () => {
    document.querySelectorAll('#hero .reveal').forEach((el, i) => setTimeout(() => el.classList.add('visible'), i * 110));
});

// ── Typewriter ────────────────────────────────────────────────────────────
(function () {
    const words = ['Backend Engineer', 'Laravel Developer', 'API Architect', 'Node.js Developer', 'Microservices Dev', 'AI Integration Dev'];
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

// ── Contact form ──────────────────────────────────────────────────────────
document.getElementById('contact-form')?.addEventListener('submit', async function (e) {
    e.preventDefault();
    const btn     = this.querySelector('button[type="submit"]');
    const txtEl   = document.getElementById('submit-text');
    const loadEl  = document.getElementById('submit-loading');
    const sendIcon= document.getElementById('send-icon');
    const msgDiv  = document.getElementById('form-message');
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
        msgDiv.innerHTML = '<div class="p-4 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-xl text-sm font-medium">Message sent! I\'ll get back to you soon.</div>';
        this.reset();
    } catch {
        msgDiv.innerHTML = '<div class="p-4 bg-red-500/10 border border-red-500/20 text-red-400 rounded-xl text-sm">Failed to send. Please email me directly at <span class="font-mono underline">{{ $data["email"] }}</span>.</div>';
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
</script>
@endpush
