<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('meta_description', 'Md Lakibul Hasan — Backend Software Engineer specializing in PHP, Laravel, Node.js, and scalable API development.')">
  <meta name="keywords" content="Backend Developer, PHP, Laravel, Node.js, API Development, Dhaka, Bangladesh">
  <meta name="author" content="Md Lakibul Hasan">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Apply saved theme before first paint — default is dark -->
  <script>
    (function() {
      try {
        // v2 design defaults to dark; reset any 'light' stored by the old site
        if (localStorage.getItem('themeV') !== '2') {
          localStorage.setItem('theme', 'dark');
          localStorage.setItem('themeV', '2');
        }
        if (localStorage.getItem('theme') === 'light') document.documentElement.classList.remove('dark');
        else document.documentElement.classList.add('dark');
      } catch(e) {}
    })();
  </script>

  <!-- PWA Meta -->
  <meta name="theme-color" content="#050507">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="Lakibul Portfolio">

  <!-- Open Graph -->
  <meta property="og:title" content="@yield('title', 'Md Lakibul Hasan — Backend Software Engineer')">
  <meta property="og:description" content="@yield('meta_description', 'Backend Software Engineer — 4+ years building scalable APIs, microservices, and AI-driven automation.')">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('title', 'Md Lakibul Hasan — Backend Software Engineer')">
  <meta name="twitter:description" content="@yield('meta_description')">

  <title>@yield('title', 'Md Lakibul Hasan — Backend Software Engineer')</title>

  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/images/icon-192x192.png') }}">
  <link rel="manifest" href="{{ asset('manifest.json') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@300;400;500;600;700&family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter Tight','ui-sans-serif','system-ui','sans-serif'],
            display: ['Fraunces','ui-serif','Georgia','serif'],
            mono: ['JetBrains Mono','ui-monospace','SFMono-Regular','Menlo','monospace'],
          },
          colors: {
            ink: {
              50:'#f7f7f8', 100:'#ececee', 200:'#d4d4d9', 300:'#a8a8b1',
              400:'#6f6f7a', 500:'#4a4a53', 600:'#2e2e35', 700:'#1f1f24',
              800:'#141418', 900:'#0a0a0c', 950:'#050507'
            },
          },
          boxShadow: {
            'soft': '0 1px 0 0 rgba(255,255,255,0.04) inset, 0 10px 30px -10px rgba(0,0,0,0.5)',
          },
        }
      }
    }
  </script>

  <style>
    :root { --grid-line: rgba(255,255,255,0.06); }
    html { scroll-behavior: smooth; }
    body { font-feature-settings: "ss01","cv11","ss03"; }

    .hair { border-color: rgba(255,255,255,0.08); }
    html:not(.dark) .hair { border-color: rgba(0,0,0,0.08); }

    .reveal { opacity:0; transform:translateY(14px); transition:opacity .8s cubic-bezier(.2,.7,.2,1),transform .8s cubic-bezier(.2,.7,.2,1); }
    .reveal.in { opacity:1; transform:none; }

    .u-link { position:relative; }
    .u-link::after { content:""; position:absolute; left:0; right:100%; bottom:-2px; height:1px; background:currentColor; transition:right .35s ease; }
    .u-link:hover::after { right:0; }

    :focus-visible { outline:2px solid currentColor; outline-offset:3px; border-radius:4px; }

    @keyframes pulse-dot { 0%,100%{box-shadow:0 0 0 0 rgba(34,197,94,.45)} 70%{box-shadow:0 0 0 8px rgba(34,197,94,0)} }
    .dot-pulse { animation:pulse-dot 2s infinite; }

    @keyframes blink { 50%{opacity:0} }
    .caret { display:inline-block; width:.6ch; background:currentColor; animation:blink 1s steps(1) infinite; }

    ::-webkit-scrollbar { width:4px; }
    ::-webkit-scrollbar-track { background:#050507; }
    ::-webkit-scrollbar-thumb { background:rgba(255,255,255,0.1); border-radius:9999px; }
    html:not(.dark) ::-webkit-scrollbar-track { background:#fafafa; }
    html:not(.dark) ::-webkit-scrollbar-thumb { background:rgba(0,0,0,0.12); }

    /* Light mode overrides */
    html:not(.dark) body { background:#fafafa; color:#0a0a0c; }
    html:not(.dark) header nav { background:rgba(255,255,255,0.75) !important; }
    html:not(.dark) #mobile-menu { background:rgba(255,255,255,0.95) !important; }
    html:not(.dark) .bg-ink-950 { background:#fafafa !important; }
    html:not(.dark) .bg-ink-900\/40 { background:rgba(10,10,12,0.03) !important; }
    html:not(.dark) .bg-ink-900\/60 { background:rgba(10,10,12,0.05) !important; }
    html:not(.dark) .bg-ink-900\/70 { background:rgba(255,255,255,0.75) !important; }
    html:not(.dark) .bg-ink-900\/95 { background:rgba(255,255,255,0.95) !important; }
    html:not(.dark) .text-ink-100,
    html:not(.dark) .text-ink-200 { color:#1f1f24 !important; }
    html:not(.dark) .text-ink-300 { color:#4a4a53 !important; }
    html:not(.dark) .text-ink-400 { color:#6f6f7a !important; }
    html:not(.dark) .text-ink-500 { color:#a8a8b1 !important; }
    html:not(.dark) .text-white { color:#0a0a0c !important; }
    html:not(.dark) a.bg-white,
    html:not(.dark) button.bg-white,
    html:not(.dark) span.bg-white { background:#0a0a0c !important; color:#fff !important; }
    html:not(.dark) .hover\:bg-ink-100:hover { background:#1f1f24 !important; }
    html:not(.dark) .bg-white\/5 { background:rgba(0,0,0,0.05) !important; }
    html:not(.dark) .bg-white\/10 { background:rgba(0,0,0,0.08) !important; }
    html:not(.dark) .bar-fill { background:#0a0a0c !important; }
    html:not(.dark) #progress { background:#0a0a0c !important; }
    html:not(.dark) .from-ink-950\/60 { --tw-gradient-from:rgba(250,250,250,0.6) var(--tw-gradient-from-position) !important; }
    html:not(.dark) .from-ink-950\/75 { --tw-gradient-from:rgba(250,250,250,0.5) var(--tw-gradient-from-position) !important; }
    html:not(.dark) .via-ink-950\/10 { --tw-gradient-via:rgba(10,10,12,0.04) !important; }
  </style>

  @stack('styles')
</head>
<body class="bg-ink-950 text-ink-100 antialiased selection:bg-white selection:text-black">

<!-- Loading screen -->
<div id="loading-screen" class="fixed inset-0 bg-ink-950 z-[200] flex items-center justify-center">
  <div class="w-8 h-8 rounded-full border border-white/10 border-t-white animate-spin"></div>
</div>

<!-- Scroll progress bar -->
<div id="progress" class="fixed top-0 left-0 h-[2px] bg-white z-[60] w-0"></div>

<!-- NAV -->
<header class="fixed top-0 inset-x-0 z-50">
  <div class="mx-auto max-w-[1280px] px-6 lg:px-10 pt-5">
    <nav class="flex items-center justify-between rounded-full border hair bg-ink-900/70 backdrop-blur-xl px-5 py-2.5">
      <a href="#hero" class="flex items-center gap-2 font-mono text-[13px] tracking-tight">
        <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-400 dot-pulse"></span>
        <span class="opacity-70">~/</span><span class="font-semibold">lakibul</span><span class="opacity-40">.dev</span>
      </a>

      <ul class="hidden md:flex items-center gap-7 text-[13px] text-ink-300">
        <li><a class="u-link hover:text-white nav-link" href="#projects">Projects</a></li>
        <li><a class="u-link hover:text-white nav-link" href="#experience">Experience</a></li>
        <li><a class="u-link hover:text-white nav-link" href="#skills">Skills</a></li>
        <li><a class="u-link hover:text-white nav-link" href="#about">About</a></li>
        <li><a class="u-link hover:text-white nav-link" href="#contact">Contact</a></li>
      </ul>

      <div class="flex items-center gap-2">
        <button id="themeToggle" aria-label="Toggle theme" class="w-9 h-9 grid place-items-center rounded-full border hair hover:bg-white/5 transition">
          <svg class="theme-sun w-4 h-4 hidden dark:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>
          <svg class="theme-moon w-4 h-4 dark:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z"/></svg>
        </button>

        <button id="mobile-menu-btn" class="md:hidden w-9 h-9 grid place-items-center rounded-full border hair hover:bg-white/5 transition" aria-label="Toggle menu">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
        </button>

        <a href="#contact" class="hidden sm:inline-flex items-center gap-1.5 rounded-full bg-white text-ink-950 text-[13px] font-medium px-4 py-2 hover:bg-ink-100 transition">
          Get in touch
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden mt-2 rounded-2xl border hair bg-ink-900/95 backdrop-blur-xl px-5 py-4">
      <ul class="space-y-3 text-[14px] text-ink-300">
        <li><a class="block hover:text-white transition" href="#projects">Projects</a></li>
        <li><a class="block hover:text-white transition" href="#experience">Experience</a></li>
        <li><a class="block hover:text-white transition" href="#skills">Skills</a></li>
        <li><a class="block hover:text-white transition" href="#about">About</a></li>
        <li><a class="block hover:text-white transition" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</header>

<main>
  @yield('content')
</main>

<!-- Footer -->
<footer class="border-t hair py-10 bg-ink-950">
  <div class="mx-auto max-w-[1280px] px-6 lg:px-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
    <div class="font-mono text-[12px] text-ink-400">&copy; {{ date('Y') }} Md Lakibul Hasan. Crafted with care.</div>
    <div class="font-mono text-[12px] text-ink-400">v2.0 &middot; Built with Laravel &amp; Tailwind CSS</div>
  </div>
</footer>

<script>
  // Loading screen
  window.addEventListener('load', () => {
    const s = document.getElementById('loading-screen');
    if (!s) return;
    s.style.transition = 'opacity 0.3s ease';
    s.style.opacity = '0';
    setTimeout(() => s.remove(), 320);
  });

  // Theme toggle
  const html = document.documentElement;
  document.getElementById('themeToggle')?.addEventListener('click', () => {
    html.classList.toggle('dark');
    localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
    syncBodyClasses();
  });

  function syncBodyClasses() {
    const dark = html.classList.contains('dark');
    document.body.classList.toggle('bg-ink-950', dark);
    document.body.classList.toggle('text-ink-100', dark);
    document.body.classList.toggle('bg-[#fafafa]', !dark);
    document.body.classList.toggle('text-[#0a0a0c]', !dark);
  }
  syncBodyClasses();

  // Scroll progress
  const progress = document.getElementById('progress');
  window.addEventListener('scroll', () => {
    const h = document.documentElement;
    progress.style.width = (h.scrollTop / (h.scrollHeight - h.clientHeight) * 100) + '%';
  }, { passive: true });

  // Mobile menu
  document.getElementById('mobile-menu-btn')?.addEventListener('click', () => {
    document.getElementById('mobile-menu')?.classList.toggle('hidden');
  });
  document.querySelectorAll('#mobile-menu a').forEach(a => {
    a.addEventListener('click', () => document.getElementById('mobile-menu')?.classList.add('hidden'));
  });

  // Smooth scroll
  document.addEventListener('click', e => {
    const anchor = e.target.closest('a[href^="#"]');
    if (!anchor) return;
    const hash = anchor.getAttribute('href');
    const target = document.querySelector(hash);
    if (!target) return;
    e.preventDefault();
    window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
    history.pushState(null, '', hash);
  });

  // Active nav highlight on scroll
  const navLinks = document.querySelectorAll('.nav-link');
  const sectionObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      navLinks.forEach(link => {
        const active = link.getAttribute('href') === `#${entry.target.id}`;
        link.classList.toggle('text-white', active);
        link.classList.toggle('text-ink-300', !active);
      });
    });
  }, { threshold: 0.15, rootMargin: '-80px 0px -40% 0px' });
  document.querySelectorAll('section[id]').forEach(s => sectionObserver.observe(s));
</script>

@stack('scripts')
</body>
</html>
