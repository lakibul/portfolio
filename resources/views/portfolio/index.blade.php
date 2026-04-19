@extends('layouts.app')

@section('title', $data['name'] . ' — Backend Software Engineer')
@section('meta_description', 'Backend Software Engineer — 4+ years building scalable APIs, microservices, and AI-driven automation with PHP, Laravel, and Node.js.')

@push('styles')
<style>
  /* Dotted grid backdrop */
  .grid-bg {
    background-image:
      linear-gradient(to right, var(--grid-line) 1px, transparent 1px),
      linear-gradient(to bottom, var(--grid-line) 1px, transparent 1px);
    background-size: 80px 80px;
  }
  html:not(.dark) .grid-bg {
    background-image:
      linear-gradient(to right, rgba(0,0,0,0.05) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(0,0,0,0.05) 1px, transparent 1px);
  }

  /* Marquee */
  @keyframes marquee { from{transform:translateX(0)} to{transform:translateX(-50%)} }
  .marquee-track { animation: marquee 40s linear infinite; }

  /* Portrait */
  .portrait-img { filter:grayscale(1) contrast(1.08) brightness(0.95); transition:filter .6s ease,transform .6s ease; }
  .reveal.in .portrait-img, .portrait-img:hover { filter:grayscale(1) contrast(1.12) brightness(1); }
  .portrait-scan {
    background-image: repeating-linear-gradient(
      to bottom,rgba(255,255,255,0.04) 0px,rgba(255,255,255,0.04) 1px,transparent 1px,transparent 3px
    );
  }
  html:not(.dark) .portrait-img { filter:grayscale(1) contrast(1.05) brightness(1.02); }

  /* Project row hover */
  .proj-row-img { transition:transform .9s cubic-bezier(.2,.7,.2,1),filter .6s ease; filter:grayscale(0.15) contrast(1.02); }
  .proj-row:hover .proj-row-img { transform:scale(1.03); filter:grayscale(0) contrast(1.05); }
  .proj-row .proj-row-cta { transition:transform .4s ease; }
  .proj-row:hover .proj-row-cta { transform:translateX(4px); }
  .proj-row-index { font-variant-numeric:tabular-nums; }

  /* Skill bar */
  .bar-fill { width:0; transition:width 1.4s cubic-bezier(.2,.7,.2,1); }
  .bar-fill.in { width:var(--w, 80%); }

  /* Skill pill */
  .skill-pill {
    display:inline-flex; align-items:center; gap:6px;
    border:1px solid rgba(255,255,255,0.1); border-radius:9999px;
    padding:6px 12px; font-size:12.5px; font-family:'JetBrains Mono',ui-monospace,monospace;
    color:#d4d4d9; background:rgba(255,255,255,0.02);
    transition:background .2s,color .2s,border-color .2s,transform .2s;
  }
  .skill-pill:hover { background:rgba(255,255,255,0.08); color:#fff; border-color:rgba(255,255,255,0.22); }
  html:not(.dark) .skill-pill { border-color:rgba(0,0,0,0.1); color:#2e2e35; background:rgba(0,0,0,0.02); }
  html:not(.dark) .skill-pill:hover { background:rgba(0,0,0,0.06); color:#000; border-color:rgba(0,0,0,0.2); }

  /* WhatsApp FAB */
  @keyframes wa-float { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-7px)} }
  @keyframes wa-pulse { 0%{box-shadow:0 0 0 0 rgba(37,211,102,.38)} 70%{box-shadow:0 0 0 16px rgba(37,211,102,0)} 100%{box-shadow:0 0 0 0 rgba(37,211,102,0)} }
  .wa-fab {
    position:fixed; right:1.35rem; bottom:1.35rem; z-index:80;
    width:4.1rem; height:4.1rem; border-radius:9999px;
    background:linear-gradient(145deg,#2ad56f,#20be5d);
    color:#fff; display:flex; align-items:center; justify-content:center;
    border:2px solid rgba(255,255,255,.95);
    box-shadow:0 18px 38px -14px rgba(22,163,74,.7),0 4px 12px rgba(15,23,42,.16);
    animation:wa-float 3s ease-in-out infinite,wa-pulse 2.5s infinite;
    transition:transform .22s ease,filter .22s ease;
  }
  .wa-fab:hover { transform:translateY(-3px) scale(1.05); }
  @media(max-width:640px){ .wa-fab{right:1rem;bottom:1rem;width:3.65rem;height:3.65rem;} }
</style>
@endpush

@section('content')

{{-- ═══════════════════════ HERO ═══════════════════════ --}}
<section id="hero" class="relative pt-36 pb-24 lg:pt-44 lg:pb-32 overflow-hidden bg-ink-950">
  <div class="absolute inset-0 grid-bg opacity-60 [mask-image:radial-gradient(ellipse_at_center,black_30%,transparent_75%)]"></div>
  <div class="relative mx-auto max-w-[1280px] px-6 lg:px-10">

    <div class="grid grid-cols-12 gap-8 items-end">

      {{-- Left: copy --}}
      <div class="col-span-12 lg:col-span-8">
        <div class="flex items-center gap-3 text-[12px] font-mono tracking-wide text-ink-300 mb-8 reveal">
          <span class="inline-flex items-center gap-2 rounded-full border hair px-3 py-1">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 dot-pulse"></span>
            Available
          </span>
          <span class="hidden sm:inline opacity-50">— {{ $data['location'] }} · UTC+6</span>
        </div>

        @php
          $nameParts = explode(' ', $data['name']);
          $lastName  = array_pop($nameParts);
          $firstName = implode(' ', $nameParts);
        @endphp
        <h1 class="reveal font-display font-medium text-[clamp(52px,9vw,128px)] leading-[0.95] tracking-[-0.03em]">
          {{ $firstName }}
          <span class="block italic text-ink-300">{{ $lastName }}<span class="caret align-baseline ml-1 text-ink-300" style="height:0.8em"></span></span>
        </h1>

        <div class="mt-10 max-w-2xl reveal">
          <p class="text-[15px] md:text-[17px] leading-relaxed text-ink-200">
            {{ $data['tagline'] }}
          </p>
        </div>

        <div class="mt-10 flex flex-wrap items-center gap-3 reveal">
          <a href="#projects" class="inline-flex items-center gap-2 rounded-full bg-white text-ink-950 text-[14px] font-medium pl-5 pr-4 py-3 hover:bg-ink-100 transition">
            View selected work
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
          <a href="{{ route('portfolio.download-cv') }}" class="inline-flex items-center gap-2 rounded-full border hair text-[14px] px-5 py-3 hover:bg-white/5 transition">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v12M7 10l5 5 5-5M5 21h14"/></svg>
            Download CV
          </a>
          <div class="ml-2 hidden sm:flex items-center gap-4 text-[13px] text-ink-300">
            <a href="{{ $data['github'] }}" target="_blank" rel="noopener" class="u-link hover:text-white">GitHub</a>
            <span class="opacity-30">·</span>
            <a href="{{ $data['linkedin'] }}" target="_blank" rel="noopener" class="u-link hover:text-white">LinkedIn</a>
            <span class="opacity-30">·</span>
            <a href="mailto:{{ $data['email'] }}" class="u-link hover:text-white">Email</a>
          </div>
        </div>
      </div>

      {{-- Right: portrait --}}
      <div class="col-span-12 lg:col-span-4 reveal">
        <div class="relative">
          <span class="absolute -top-2 -left-2 w-5 h-5 border-t border-l hair"></span>
          <span class="absolute -top-2 -right-2 w-5 h-5 border-t border-r hair"></span>
          <span class="absolute -bottom-2 -left-2 w-5 h-5 border-b border-l hair"></span>
          <span class="absolute -bottom-2 -right-2 w-5 h-5 border-b border-r hair"></span>

          <div class="p-2 rounded-2xl border hair bg-gradient-to-br from-white/[0.04] to-transparent">
            <div class="relative aspect-[4/5] rounded-xl overflow-hidden bg-ink-800">
              <img src="https://i.ibb.co.com/9mwsLCYm/1768554565016-1.png" alt="{{ $data['name'] }}" class="portrait-img w-full h-full object-cover" loading="eager" />
              <div class="absolute inset-0 portrait-scan pointer-events-none mix-blend-overlay opacity-40"></div>
              <div class="absolute inset-0 bg-gradient-to-t from-ink-950/75 via-transparent to-ink-950/20 pointer-events-none"></div>

              <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-25">
                <svg class="w-16 h-16" viewBox="0 0 64 64" fill="none" stroke="white" stroke-width="0.75">
                  <rect x="12" y="12" width="40" height="40"/>
                  <line x1="32" y1="4" x2="32" y2="14"/><line x1="32" y1="50" x2="32" y2="60"/>
                  <line x1="4" y1="32" x2="14" y2="32"/><line x1="50" y1="32" x2="60" y2="32"/>
                </svg>
              </div>

              <div class="absolute bottom-0 inset-x-0 p-3.5">
                <div class="rounded-lg border border-white/15 bg-black/40 backdrop-blur-md px-3.5 py-2.5 flex items-center justify-between">
                  <div>
                    <div class="font-mono text-[10px] uppercase tracking-[0.2em] text-white/60">Subject</div>
                    <div class="text-white text-[13px] font-medium leading-tight mt-0.5">{{ $data['name'] }}</div>
                  </div>
                  <div class="text-right">
                    <div class="font-mono text-[10px] uppercase tracking-[0.2em] text-white/60">Role</div>
                    <div class="text-white text-[13px] font-medium leading-tight mt-0.5">Backend Eng.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="absolute -top-3 -right-3 rounded-full border hair bg-ink-950 px-3 py-1.5 font-mono text-[10px] tracking-[0.25em] text-ink-200 rotate-[6deg] shadow-soft">
            EST · 2021
          </div>

          <div class="absolute -bottom-4 -left-4 rounded-xl border hair bg-ink-900/95 backdrop-blur px-4 py-3 shadow-soft">
            <div class="flex items-end gap-3">
              <div class="font-display text-3xl leading-none">4<span class="text-ink-400">+</span></div>
              <div class="font-mono text-[9.5px] tracking-widest uppercase text-ink-400 leading-tight">Years<br/>shipping</div>
            </div>
          </div>

          <div class="absolute -bottom-3 -right-3 w-16 h-16 rounded-full border hair bg-ink-950 grid place-items-center rotate-[-8deg]">
            <div class="text-center">
              <div class="font-mono text-[8px] tracking-[0.2em] text-ink-400">STACK</div>
              <div class="font-display text-[13px] leading-none mt-0.5">PHP</div>
              <div class="font-mono text-[7px] text-ink-500 mt-0.5">LARAVEL</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Bottom meta row --}}
    <div class="mt-20 pt-6 border-t hair grid grid-cols-2 md:grid-cols-3 gap-6 font-mono text-[12px] text-ink-400">
      {{-- <div>
        <div class="text-ink-300 uppercase tracking-[0.18em] text-[10px] mb-2">Currently</div>
        <div class="text-white">{{ $data['experience'][0]['title'] }} · {{ $data['experience'][0]['company'] }}</div>
      </div> --}}
      <div>
        <div class="text-ink-300 uppercase tracking-[0.18em] text-[10px] mb-2">Focus</div>
        <div class="text-white">Microservices · AI Automation · Perf · APIs</div>
      </div>
      <div>
        <div class="text-ink-300 uppercase tracking-[0.18em] text-[10px] mb-2">Stack</div>
        <div class="text-white">PHP · Laravel · CodeIgniter · Node · Redis · Docker</div>
      </div>
      <div>
        <div class="text-ink-300 uppercase tracking-[0.18em] text-[10px] mb-2">Database and Others</div>
        <div class="text-white">MySQl · PostgreSQL · MongoDB</div>
      </div>
    </div>
  </div>
</section>


{{-- ═══════════════════════ MARQUEE ═══════════════════════ --}}
<section aria-label="Technologies" class="py-6 border-y hair overflow-hidden bg-ink-950">
  @php
    $marqueeItems = ['PHP','Laravel','Node.js','MySQL','PostgreSQL','Redis','Docker','REST API','Microservices','OpenAI','Vue.js','CodeIgniter','MongoDB','Queue Processing'];
  @endphp
  <div class="flex gap-10 marquee-track whitespace-nowrap font-mono text-[13px] text-ink-400 uppercase tracking-[0.22em]">
    <div class="flex gap-10 shrink-0">
      @foreach($marqueeItems as $item)<span>{{ $item }}</span><span>✺</span>@endforeach
    </div>
    <div class="flex gap-10 shrink-0" aria-hidden="true">
      @foreach($marqueeItems as $item)<span>{{ $item }}</span><span>✺</span>@endforeach
    </div>
  </div>
</section>


{{-- ═══════════════════════ PROJECTS ═══════════════════════ --}}
<section id="projects" class="py-24 lg:py-32 bg-ink-950">
  <div class="mx-auto max-w-[1280px] px-6 lg:px-10">

    {{-- Section header --}}
    <div class="grid grid-cols-12 gap-8 mb-16 reveal">
      <div class="col-span-12 md:col-span-7">
        <div class="font-mono text-[11px] tracking-[0.25em] text-ink-400 uppercase mb-4">01 / Selected Work</div>
        <h2 class="font-display text-5xl md:text-7xl tracking-[-0.02em] leading-[0.95]">
          Systems shipped,<br/><em class="font-normal text-ink-300">not just demoed.</em>
        </h2>
      </div>
      <div class="col-span-12 md:col-span-5 md:pt-6 flex flex-col justify-end">
        <p class="text-[14.5px] text-ink-300 leading-relaxed max-w-sm">A cross-section of production systems across SaaS, e-commerce, AI, and real-time apps. Each shipped, maintained, and measured in production.</p>
        <div class="mt-6 flex flex-wrap items-center gap-3 font-mono text-[11px] text-ink-400">
          <span class="px-2.5 py-1 rounded-full border hair">{{ count($data['projects']) }}+ shipped</span>
          <span class="px-2.5 py-1 rounded-full border hair">2021 — 2026</span>
          <span class="px-2.5 py-1 rounded-full border hair">5 industries</span>
        </div>
      </div>
    </div>

    {{-- Featured project (first in array) --}}
    @php $featured = $data['projects'][0]; @endphp
    @php
      $featuredHref = ($featured['link'] ?? '#') !== '#'
        ? $featured['link']
        : ($featured['github'] ?? '#');
      $featuredLabel = ($featured['link'] ?? '#') !== '#' ? 'View live' : 'View on GitHub';
    @endphp
    <article class="proj-row reveal group relative rounded-2xl border hair overflow-hidden bg-ink-900/40 mb-16">
      <div class="grid grid-cols-12">
        <a href="{{ $featuredHref }}" target="_blank" rel="noopener"
           class="col-span-12 lg:col-span-7 relative block aspect-[16/10] lg:aspect-auto overflow-hidden bg-ink-800">
          <img class="proj-row-img w-full h-full object-cover"
               src="{{ $featured['image'] ?? '' }}"
               alt="{{ $featured['name'] }} preview" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-r from-ink-950/60 via-transparent to-transparent"></div>
          <div class="absolute top-5 left-5">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-white/95 text-ink-950 px-3 py-1.5 font-mono text-[10px] tracking-[0.2em] uppercase font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
              Featured · 2024
            </span>
          </div>
          <div class="absolute bottom-5 left-5 font-mono text-[10px] uppercase tracking-[0.22em] text-white/75">
            Case study · 01
          </div>
        </a>

        <div class="col-span-12 lg:col-span-5 p-7 md:p-9 lg:p-10 flex flex-col">
          <div class="font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-4">Production Project</div>
          <h3 class="font-display text-3xl md:text-4xl tracking-[-0.01em] leading-[1.05]">
            {{ $featured['name'] }}
          </h3>
          <p class="mt-5 text-[14.5px] text-ink-300 leading-relaxed">{{ $featured['description'] }}</p>

          {{-- First 3 tech as metric strip --}}
          <div class="mt-7 grid grid-cols-3 gap-4 py-5 border-y hair">
            @foreach(array_slice($featured['technologies'], 0, 3) as $i => $tech)
            <div>
              <div class="font-display text-2xl">{{ $tech }}</div>
              <div class="font-mono text-[10px] uppercase tracking-[0.18em] text-ink-400 mt-1">
                {{ $i === 0 ? 'Primary stack' : ($i === 1 ? 'Integrated' : 'Client platform') }}
              </div>
            </div>
            @endforeach
          </div>

          <div class="mt-6 flex flex-wrap gap-1.5">
            @foreach($featured['technologies'] as $tech)
            <span class="font-mono text-[11px] text-ink-300 border hair rounded-full px-2.5 py-1">{{ $tech }}</span>
            @endforeach
          </div>

          @php
          $featuredModalData = [
            'name'         => $featured['name'],
            'description'  => $featured['description'],
            'technologies' => $featured['technologies'] ?? [],
            'features'     => $featured['features'] ?? [],
            'link'         => $featured['link'] ?? null,
            'github'       => $featured['github'] ?? null,
            'image'        => $featured['image'] ?? null,
          ];
          @endphp
          <div class="mt-auto pt-8 flex flex-wrap items-center gap-5">
            <a href="{{ $featuredHref }}" target="_blank" rel="noopener"
               class="proj-row-cta inline-flex items-center gap-2 text-[14px] text-white">
              <span class="u-link">{{ $featuredLabel }}</span>
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M7 17L17 7M8 7h9v9"/></svg>
            </a>
            <button class="proj-details-btn inline-flex items-center gap-1.5 font-mono text-[12px] text-ink-400 hover:text-white transition rounded-full border hair px-3.5 py-2 hover:bg-white/5"
                    data-project="{{ json_encode($featuredModalData) }}">
              Details
              <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
            </button>
          </div>
        </div>
      </div>
    </article>

    {{-- Remaining projects grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach(array_slice($data['projects'], 1) as $i => $project)
      @php
        $num      = str_pad($i + 2, 2, '0', STR_PAD_LEFT);
        $href     = ($project['link'] ?? '#') !== '#' ? $project['link'] : ($project['github'] ?? null);
        $label    = ($project['link'] ?? '#') !== '#' ? 'Live site' : (($project['github'] ?? '#') !== '#' ? 'GitHub' : null);
        $hasLink  = $href && $href !== '#';
      @endphp
      <article class="proj-row reveal group relative rounded-2xl border hair overflow-hidden bg-ink-900/40 hover:bg-ink-900/60 transition flex flex-col">
        @if($hasLink)
        <a href="{{ $href }}" target="_blank" rel="noopener" class="block">
        @else
        <div class="block">
        @endif
          <div class="relative aspect-[4/3] overflow-hidden bg-ink-800">
            <img class="proj-row-img w-full h-full object-cover"
                 src="{{ $project['image'] ?? ('https://placehold.co/800x500/141418/d4d4d9?text=' . urlencode($project['name'])) }}"
                 alt="{{ $project['name'] }} preview" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-ink-950/70 via-ink-950/10 to-transparent"></div>
            <div class="absolute top-3 left-3 right-3 flex items-center justify-between font-mono text-[10px] uppercase tracking-[0.2em] text-white/85">
              <span class="inline-flex items-center gap-1.5 rounded-full border border-white/20 bg-black/40 backdrop-blur-sm px-2.5 py-1">
                <span class="proj-row-index">{{ $num }}</span><span class="opacity-40 mx-0.5">·</span><span>{{ $project['technologies'][0] ?? 'Dev' }}</span>
              </span>
              <span class="opacity-75">2024</span>
            </div>
            <div class="absolute bottom-3 left-3 font-mono text-[10px] uppercase tracking-[0.2em] text-white/80">Backend</div>
          </div>
        @if($hasLink)
        </a>
        @else
        </div>
        @endif

        <div class="p-6 flex-1 flex flex-col">
          <div class="flex items-start justify-between gap-3">
            <h3 class="font-display text-xl md:text-[22px] tracking-[-0.01em] leading-[1.15]">{{ $project['name'] }}</h3>
            <svg class="w-4 h-4 text-ink-400 group-hover:text-white transition shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M7 17L17 7M8 7h9v9"/></svg>
          </div>
          <p class="mt-3 text-[13.5px] text-ink-300 leading-relaxed">{{ \Illuminate\Support\Str::limit($project['description'], 120) }}</p>

          <div class="mt-5 flex flex-wrap gap-1.5">
            @foreach(array_slice($project['technologies'], 0, 4) as $tech)
            <span class="font-mono text-[10.5px] text-ink-300 border hair rounded-full px-2 py-0.5">{{ $tech }}</span>
            @endforeach
            @if(count($project['technologies']) > 4)
            <span class="font-mono text-[10.5px] text-ink-400 border hair rounded-full px-2 py-0.5">+{{ count($project['technologies']) - 4 }}</span>
            @endif
          </div>

          @php
          $projModalData = [
            'name'         => $project['name'],
            'description'  => $project['description'],
            'technologies' => $project['technologies'] ?? [],
            'features'     => $project['features'] ?? [],
            'link'         => $project['link'] ?? null,
            'github'       => $project['github'] ?? null,
            'image'        => $project['image'] ?? null,
          ];
          @endphp
          <div class="mt-auto pt-5 flex items-center justify-between gap-3">
            <div>
              @if($hasLink)
              <a href="{{ $href }}" target="_blank" rel="noopener"
                 class="proj-row-cta inline-flex items-center gap-2 text-[13px] text-white">
                <span class="u-link">{{ $label }}</span>
                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M7 17L17 7M8 7h9v9"/></svg>
              </a>
              @else
              <span class="font-mono text-[11px] text-ink-400">Private / NDA</span>
              @endif
            </div>
            <button class="proj-details-btn inline-flex items-center gap-1.5 font-mono text-[11px] text-ink-400 hover:text-white transition rounded-full border hair px-3 py-1.5 hover:bg-white/5 shrink-0"
                    data-project="{{ json_encode($projModalData) }}">
              Details
              <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
            </button>
          </div>
        </div>
      </article>
      @endforeach
    </div>

  </div>
</section>


{{-- ═══════════════════════ EXPERIENCE ═══════════════════════ --}}
<section id="experience" class="py-24 lg:py-32 border-t hair bg-ink-950">
  <div class="mx-auto max-w-[1280px] px-6 lg:px-10">
    <div class="grid grid-cols-12 gap-8">

      <div class="col-span-12 lg:col-span-4 reveal">
        <div class="font-mono text-[11px] tracking-[0.25em] text-ink-400 uppercase mb-4">02 / Experience</div>
        <h2 class="font-display text-4xl md:text-6xl tracking-[-0.02em] leading-[1]">Work history</h2>
        <p class="mt-6 text-[14px] text-ink-300 max-w-sm leading-relaxed">Shipping backend systems across fintech-adjacent, e-commerce, and SaaS domains.</p>
      </div>

      <div class="col-span-12 lg:col-span-8 space-y-4">
        @foreach($data['experience'] as $job)
        <article class="reveal group rounded-2xl border hair bg-ink-900/40 hover:bg-ink-900/60 transition overflow-hidden">
          <div class="p-6 md:p-8">
            <div class="flex flex-wrap items-start justify-between gap-4">
              <div>
                <div class="flex items-center gap-3 mb-2">
                  @if($loop->first)
                  <span class="font-mono text-[11px] text-emerald-400 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Current
                  </span>
                  @endif
                  <span class="font-mono text-[11px] text-ink-400">{{ $job['location'] }}</span>
                </div>
                <h3 class="text-2xl md:text-3xl tracking-tight">{{ $job['title'] }}</h3>
                <div class="text-ink-300 mt-1">{{ $job['company'] }}</div>
              </div>
              <div class="font-mono text-[12px] text-ink-300 whitespace-nowrap">{{ $job['period'] }}</div>
            </div>
            <ul class="mt-6 space-y-2.5 text-[14.5px] text-ink-200 leading-relaxed">
              @foreach($job['responsibilities'] as $item)
              <li class="flex gap-3"><span class="text-ink-500 mt-2 shrink-0">—</span>{{ $item }}</li>
              @endforeach
            </ul>
          </div>
        </article>
        @endforeach
      </div>

    </div>
  </div>
</section>


{{-- ═══════════════════════ SKILLS ═══════════════════════ --}}
<section id="skills" class="py-24 lg:py-32 border-t hair bg-ink-950">
  <div class="mx-auto max-w-[1280px] px-6 lg:px-10">

    <div class="flex items-end justify-between gap-6 mb-12 reveal">
      <div>
        <div class="font-mono text-[11px] tracking-[0.25em] text-ink-400 uppercase mb-4">03 / Skills</div>
        <h2 class="font-display text-4xl md:text-6xl tracking-[-0.02em] leading-[1]">Technical expertise</h2>
      </div>
    </div>

    <div class="grid grid-cols-12 gap-6">

      {{-- Proficiency bars (left) --}}
      <div class="col-span-12 lg:col-span-7 space-y-5">
        @foreach($data['skill_bars'] as $skill)
        <div class="reveal rounded-2xl border hair p-5 md:p-6">
          <div class="flex items-end justify-between gap-4 mb-3">
            <div>
              <div class="text-[15px] md:text-[16px]">{{ $skill['name'] }}</div>
              <div class="font-mono text-[11px] text-ink-400 mt-1">{{ $skill['note'] }}</div>
            </div>
            <div class="font-mono text-[12px] text-ink-300">{{ $skill['w'] }}<span class="opacity-50">%</span></div>
          </div>
          <div class="h-[6px] rounded-full bg-white/5 overflow-hidden">
            <div class="bar-fill h-full bg-white" style="--w:{{ $skill['w'] }}%"></div>
          </div>
        </div>
        @endforeach
      </div>

      {{-- Grouped pills (right) --}}
      <div class="col-span-12 lg:col-span-5 space-y-6">
        @foreach(['Data & Storage', 'AI & Automation', 'Tools'] as $group)
        @if(isset($data['skills'][$group]))
        <div class="rounded-2xl border hair p-6 reveal">
          <div class="font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-4">{{ $group }}</div>
          <div class="flex flex-wrap gap-2">
            @foreach($data['skills'][$group] as $skill)
            <span class="skill-pill">{{ $skill }}</span>
            @endforeach
          </div>
        </div>
        @endif
        @endforeach
      </div>

    </div>
  </div>
</section>


{{-- ═══════════════════════ ABOUT + STATS ═══════════════════════ --}}
<section id="about" class="py-24 lg:py-32 border-t hair bg-ink-950">
  <div class="mx-auto max-w-[1280px] px-6 lg:px-10 grid grid-cols-12 gap-8">

    <div class="col-span-12 lg:col-span-5 reveal">
      <div class="font-mono text-[11px] tracking-[0.25em] text-ink-400 uppercase mb-4">04 / About</div>
      <h2 class="font-display text-4xl md:text-6xl tracking-[-0.02em] leading-[1]">Who I am</h2>
    </div>

    <div class="col-span-12 lg:col-span-7 space-y-6">
      <p class="reveal text-[18px] md:text-[20px] leading-relaxed text-ink-100">{{ $data['summary'] }}</p>
      <p class="reveal text-[16px] leading-relaxed text-ink-300">Passionate about clean architecture, performance, and shipping — always learning, always building.</p>

      {{-- Stats grid --}}
      <div class="reveal grid grid-cols-2 sm:grid-cols-4 gap-px bg-white/10 rounded-2xl overflow-hidden border hair mt-6">
        <div class="bg-ink-950 p-5">
          <div class="font-display text-4xl">4<span class="text-ink-500">+</span></div>
          <div class="font-mono text-[10.5px] uppercase tracking-[0.18em] text-ink-400 mt-2">Years exp.</div>
        </div>
        <div class="bg-ink-950 p-5">
          <div class="font-display text-4xl">{{ count($data['projects']) }}<span class="text-ink-500">+</span></div>
          <div class="font-mono text-[10.5px] uppercase tracking-[0.18em] text-ink-400 mt-2">Projects shipped</div>
        </div>
        <div class="bg-ink-950 p-5">
          <div class="font-display text-4xl">25<span class="text-ink-500">%</span></div>
          <div class="font-mono text-[10.5px] uppercase tracking-[0.18em] text-ink-400 mt-2">API perf gain</div>
        </div>
        <div class="bg-ink-950 p-5">
          <div class="font-display text-4xl">5</div>
          <div class="font-mono text-[10.5px] uppercase tracking-[0.18em] text-ink-400 mt-2">Industry domains</div>
        </div>
      </div>

      {{-- Education --}}
      <div class="reveal mt-10">
        <div class="font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-5">Education</div>
        <div class="divide-y hair">
          @foreach($data['education'] as $edu)
          <div class="py-4 flex flex-wrap items-baseline justify-between gap-3">
            <div>
              <div class="text-[15px]">{{ $edu['degree'] }}</div>
              <div class="text-ink-400 text-[13px]">
                {{ $edu['institution'] }}@if(isset($edu['score'])) · {{ $edu['score'] }}@endif
              </div>
            </div>
            <div class="font-mono text-[12px] text-ink-400">{{ $edu['period'] }}</div>
          </div>
          @endforeach
        </div>

        {{-- Certifications --}}
        <div class="mt-8">
          <div class="font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-3">Certifications</div>
          <ul class="space-y-1.5 text-[14px] text-ink-200">
            @foreach($data['certifications'] as $cert)
            <li>{{ $cert }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>


{{-- ═══════════════════════ CONTACT ═══════════════════════ --}}
<section id="contact" class="py-24 lg:py-32 border-t hair bg-ink-950">
  <div class="mx-auto max-w-[1280px] px-6 lg:px-10">
    <div class="grid grid-cols-12 gap-8">

      <div class="col-span-12 lg:col-span-5 reveal">
        <div class="font-mono text-[11px] tracking-[0.25em] text-ink-400 uppercase mb-4">05 / Contact</div>
        <h2 class="font-display text-5xl md:text-7xl tracking-[-0.02em] leading-[0.95]">Let's build<br/>something.</h2>
        <p class="mt-6 text-[15px] text-ink-300 max-w-md leading-relaxed">Open to full-time roles, freelance work, or a conversation about backend engineering.</p>

        <div class="mt-10 space-y-5 font-mono text-[13px]">
          <a href="mailto:{{ $data['email'] }}" class="flex items-center justify-between gap-4 py-4 border-b hair group">
            <span class="text-ink-400 uppercase tracking-[0.22em] text-[11px]">Email</span>
            <span class="text-white group-hover:underline">{{ $data['email'] }}</span>
          </a>
          <a href="tel:{{ $data['phone'] }}" class="flex items-center justify-between gap-4 py-4 border-b hair group">
            <span class="text-ink-400 uppercase tracking-[0.22em] text-[11px]">Phone</span>
            <span class="text-white group-hover:underline">{{ $data['phone'] }}</span>
          </a>
          <div class="flex items-center justify-between gap-4 py-4 border-b hair">
            <span class="text-ink-400 uppercase tracking-[0.22em] text-[11px]">Location</span>
            <span class="text-white">{{ $data['location'] }}</span>
          </div>
          <div class="flex items-center justify-between gap-4 py-4 border-b hair">
            <span class="text-ink-400 uppercase tracking-[0.22em] text-[11px]">Social</span>
            <span class="flex items-center gap-4">
              <a href="{{ $data['github'] }}" target="_blank" rel="noopener" class="u-link hover:text-white">GitHub</a>
              <a href="{{ $data['linkedin'] }}" target="_blank" rel="noopener" class="u-link hover:text-white">LinkedIn</a>
            </span>
          </div>
        </div>
      </div>

      <div class="col-span-12 lg:col-span-7 reveal">
        <form id="contactForm" class="rounded-2xl border hair p-6 md:p-8 bg-ink-900/40 grid grid-cols-2 gap-5">
          @csrf
          <label class="col-span-2 sm:col-span-1">
            <span class="block font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-2">Name</span>
            <input required name="name" type="text"
                   class="w-full bg-transparent border-b hair pb-2 focus:border-white outline-none transition text-[15px] placeholder:text-ink-600"
                   placeholder="Your name" />
          </label>
          <label class="col-span-2 sm:col-span-1">
            <span class="block font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-2">Email</span>
            <input required name="email" type="email"
                   class="w-full bg-transparent border-b hair pb-2 focus:border-white outline-none transition text-[15px] placeholder:text-ink-600"
                   placeholder="you@company.com" />
          </label>
          <label class="col-span-2">
            <span class="block font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-2">Subject</span>
            <input name="subject" type="text"
                   class="w-full bg-transparent border-b hair pb-2 focus:border-white outline-none transition text-[15px] placeholder:text-ink-600"
                   placeholder="What's this about?" />
          </label>
          <label class="col-span-2">
            <span class="block font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-2">Message</span>
            <textarea required name="message" rows="5"
                      class="w-full bg-transparent border-b hair pb-2 focus:border-white outline-none transition text-[15px] resize-none placeholder:text-ink-600"
                      placeholder="Tell me about the project, timeline, and budget."></textarea>
          </label>
          <div id="form-message" class="col-span-2 hidden"></div>
          <div class="col-span-2 flex flex-wrap items-center justify-between gap-4 pt-3">
            <span class="font-mono text-[11px] text-ink-400">Avg. response time · 24h</span>
            <button type="submit" class="inline-flex items-center gap-2 rounded-full bg-white text-ink-950 text-[14px] font-medium px-5 py-3 hover:bg-ink-100 transition">
              <span id="submit-text">Send message</span>
              <span id="submit-loading" class="hidden items-center">
                <svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
              </span>
              <svg id="send-icon" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

{{-- ═══════════════════════ PROJECT MODAL ═══════════════════════ --}}
<div id="proj-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-8">
  <div id="proj-modal-overlay" class="absolute inset-0 bg-ink-950/85 backdrop-blur-md"></div>

  <div id="proj-modal-card"
       class="relative w-full max-w-5xl max-h-[90vh] overflow-y-auto rounded-2xl border hair bg-ink-900 shadow-[0_30px_80px_-20px_rgba(0,0,0,0.8)] opacity-0 translate-y-5 transition-all duration-200 ease-out">

    <!-- Close button -->
    <button id="proj-modal-close"
            class="absolute top-4 right-4 z-10 w-9 h-9 grid place-items-center rounded-full border hair bg-ink-950 hover:bg-white/5 transition"
            aria-label="Close modal">
      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
        <path d="M18 6L6 18M6 6l12 12"/>
      </svg>
    </button>

    <div class="grid grid-cols-1 lg:grid-cols-5">

      <!-- Image panel -->
      <div class="lg:col-span-2 relative aspect-[4/3] lg:aspect-auto lg:min-h-[480px] overflow-hidden bg-ink-800 rounded-t-2xl lg:rounded-l-2xl lg:rounded-tr-none">
        <img id="proj-modal-img" src="" alt="" class="w-full h-full object-cover" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-t from-ink-950/80 via-ink-950/20 to-transparent pointer-events-none"></div>
        <!-- kind badge -->
        <div class="absolute top-4 left-4">
          <span id="proj-modal-kind"
                class="inline-flex items-center gap-1.5 rounded-full border border-white/20 bg-black/50 backdrop-blur-sm px-3 py-1.5 font-mono text-[10px] uppercase tracking-[0.2em] text-white/85">
          </span>
        </div>
        <!-- scan lines -->
        <div class="absolute inset-0 pointer-events-none mix-blend-overlay opacity-20"
             style="background-image:repeating-linear-gradient(to bottom,rgba(255,255,255,0.06) 0px,rgba(255,255,255,0.06) 1px,transparent 1px,transparent 3px)">
        </div>
      </div>

      <!-- Content panel -->
      <div class="lg:col-span-3 p-7 md:p-9 flex flex-col">
        <div class="font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-3">Project Details</div>
        <h3 id="proj-modal-title" class="font-display text-3xl md:text-4xl tracking-[-0.01em] leading-[1.05]"></h3>
        <p id="proj-modal-desc" class="mt-5 text-[14.5px] text-ink-300 leading-relaxed"></p>

        <!-- Stack -->
        <div class="mt-6">
          <div class="font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-3">Stack</div>
          <div id="proj-modal-stack" class="flex flex-wrap gap-1.5"></div>
        </div>

        <!-- Features -->
        <div id="proj-modal-features-wrap" class="mt-6 hidden">
          <div class="font-mono text-[11px] tracking-[0.22em] uppercase text-ink-400 mb-3">Key Features</div>
          <ul id="proj-modal-features" class="space-y-2 text-[13.5px] text-ink-300"></ul>
        </div>

        <!-- CTAs -->
        <div class="mt-auto pt-7 border-t hair flex flex-wrap gap-3 items-center">
          <a id="proj-modal-live" href="#" target="_blank" rel="noopener"
             class="hidden inline-flex items-center gap-2 rounded-full bg-white text-ink-950 text-[13px] font-medium px-4 py-2.5 hover:bg-ink-100 transition">
            Live site
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M7 17L17 7M8 7h9v9"/></svg>
          </a>
          <a id="proj-modal-github" href="#" target="_blank" rel="noopener"
             class="hidden inline-flex items-center gap-2 rounded-full border hair text-[13px] px-4 py-2.5 hover:bg-white/5 transition">
            <svg class="w-3.5 h-3.5 shrink-0" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
            </svg>
            GitHub
          </a>
          <span id="proj-modal-private" class="hidden font-mono text-[12px] text-ink-400 border hair rounded-full px-3.5 py-2">
            Private / NDA
          </span>
        </div>
      </div>

    </div>
  </div>
</div>

{{-- WhatsApp FAB --}}
<a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $data['phone']) }}" target="_blank" rel="noopener" class="wa-fab" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
  <svg class="w-7 h-7" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true">
    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122 0-221.7 99.6-221.7 221.7c0 39.1 10.2 77.3 29.6 111L0 480l118.7-31.1c32.6 17.8 69.3 27.2 106.1 27.2h.1c121.9 0 221.8-99.6 221.8-221.7c0-59.3-23.1-115-65.8-157.3zM223.9 438.7c-33.2 0-65.7-8.9-94.2-25.7l-6.8-4l-70.4 18.5l18.8-68.6l-4.4-7.1c-18.5-29.4-28.2-63.4-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1c34.8 34.8 54 81.2 54 130.4c-.1 101.8-83 184.6-184.8 184.6zm101.1-138.3c-5.5-2.8-32.8-16.1-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8c-3.7 5.5-14.3 18-17.6 21.7c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.6-65.9c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7c-1.4-2.8-12.5-30.1-17.1-41.3c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2c-3.7 0-9.7 1.4-14.8 6.9c-5.1 5.5-19.5 19.1-19.5 46.5s20 53.9 22.8 57.6c2.8 3.7 39.3 60 95.2 84.1c35.4 15.3 49.2 16.6 66.9 14c10.8-1.6 32.8-13.4 37.4-26.3c4.6-12.9 4.6-24 3.2-26.3c-1.3-2.3-5-3.7-10.5-6.5z"/>
  </svg>
</a>

@endsection

@push('scripts')
<script>
  // ── Reveal observer ──────────────────────────────────────────────────────
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
  }, { rootMargin: '0px 0px -10% 0px', threshold: 0.08 });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el));

  // ── Skills bar observer ─────────────────────────────────────────────────
  const barIO = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('in');
        const bar = e.target.querySelector('.bar-fill');
        if (bar) requestAnimationFrame(() => bar.classList.add('in'));
        barIO.unobserve(e.target);
      }
    });
  }, { threshold: 0.2 });
  document.querySelectorAll('#skills .reveal').forEach(el => barIO.observe(el));

  // ── Project modal ───────────────────────────────────────────────────────
  (function() {
    const modal    = document.getElementById('proj-modal');
    const overlay  = document.getElementById('proj-modal-overlay');
    const card     = document.getElementById('proj-modal-card');
    const closeBtn = document.getElementById('proj-modal-close');
    if (!modal) return;

    const titleEl  = document.getElementById('proj-modal-title');
    const descEl   = document.getElementById('proj-modal-desc');
    const imgEl    = document.getElementById('proj-modal-img');
    const kindEl   = document.getElementById('proj-modal-kind');
    const stackEl  = document.getElementById('proj-modal-stack');
    const featWrap = document.getElementById('proj-modal-features-wrap');
    const featList = document.getElementById('proj-modal-features');
    const liveEl   = document.getElementById('proj-modal-live');
    const ghEl     = document.getElementById('proj-modal-github');
    const privEl   = document.getElementById('proj-modal-private');

    const openModal = (p) => {
      titleEl.textContent = p.name || '';
      descEl.textContent  = p.description || '';
      imgEl.src           = p.image || ('https://placehold.co/800x500/141418/d4d4d9?text=' + encodeURIComponent(p.name || 'Project'));
      imgEl.alt           = p.name || '';
      kindEl.textContent  = (p.technologies && p.technologies[0]) ? p.technologies[0] : 'Project';

      stackEl.innerHTML = '';
      (p.technologies || []).forEach(t => {
        const s = document.createElement('span');
        s.className = 'font-mono text-[11px] text-ink-300 border hair rounded-full px-2.5 py-1';
        s.textContent = t;
        stackEl.appendChild(s);
      });

      featList.innerHTML = '';
      const features = p.features || [];
      if (features.length) {
        featWrap.classList.remove('hidden');
        features.forEach(f => {
          const li = document.createElement('li');
          li.className = 'flex items-start gap-2.5';
          li.innerHTML = '<span class="text-ink-500 mt-[5px] shrink-0">—</span><span></span>';
          li.lastElementChild.textContent = f;
          featList.appendChild(li);
        });
      } else {
        featWrap.classList.add('hidden');
      }

      const hasLive = p.link   && p.link   !== '#' && p.link   !== null;
      const hasGh   = p.github && p.github !== '#' && p.github !== null;
      liveEl.classList.toggle('hidden', !hasLive);
      ghEl.classList.toggle('hidden', !hasGh);
      privEl.classList.toggle('hidden', hasLive || hasGh);
      if (hasLive) liveEl.href = p.link;
      if (hasGh)   ghEl.href   = p.github;

      modal.classList.remove('hidden');
      modal.classList.add('flex');
      document.body.style.overflow = 'hidden';
      requestAnimationFrame(() => requestAnimationFrame(() => {
        card.classList.remove('opacity-0', 'translate-y-5');
      }));
    };

    const closeModal = () => {
      card.classList.add('opacity-0', 'translate-y-5');
      setTimeout(() => {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        document.body.style.overflow = '';
      }, 200);
    };

    document.querySelectorAll('.proj-details-btn').forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();
        e.stopPropagation();
        try { openModal(JSON.parse(btn.dataset.project)); } catch(err) { console.error(err); }
      });
    });

    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', closeModal);
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
    });
  })();

  // ── Contact form ────────────────────────────────────────────────────────
  document.getElementById('contactForm')?.addEventListener('submit', async function(e) {
    e.preventDefault();
    const btn      = this.querySelector('button[type=submit]');
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
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content
            ?? this.querySelector('[name="_token"]').value
        }
      });
      const data = await res.json();
      if (!data.success) throw new Error(data.message);
      msgDiv.innerHTML = '<div class="p-4 border border-white/10 rounded-xl text-[13px] font-mono text-emerald-400">Message sent! I\'ll get back to you soon.</div>';
      this.reset();
    } catch {
      msgDiv.innerHTML = '<div class="p-4 border border-white/10 rounded-xl text-[13px] font-mono text-red-400">Failed to send. Email me at <span class="underline">{{ $data["email"] }}</span></div>';
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
