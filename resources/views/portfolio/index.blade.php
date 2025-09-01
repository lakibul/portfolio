@extends('layouts.app')

@section('title', $data['name'] . ' - ' . $data['title'])
@section('meta_description', 'Portfolio of ' . $data['name'] . ', ' . $data['title'] . ' specializing in backend development with PHP, Laravel, Node.js and more.')

@section('content')
<!-- Hero Section -->
<section id="hero" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100 dark:from-dark-900 dark:to-dark-800 pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <div class="mb-8 animate-fadeInUp">
                <img src="{{ asset('assets/images/profile.jpg') }}" alt="{{ $data['name'] }}"
                     class="w-32 h-32 rounded-full mx-auto mb-8 shadow-lg border-4 border-white dark:border-dark-700 object-cover"
                     onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['name']) }}&size=128&background=3b82f6&color=ffffff'">
            </div>

            <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-fadeInUp animate-delay-100">
                <span class="gradient-text">{{ $data['name'] }}</span>
            </h1>

            <h2 class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-6 animate-fadeInUp animate-delay-200">
                {{ $data['title'] }}
            </h2>

            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-8 animate-fadeInUp animate-delay-300">
                {{ $data['tagline'] }}
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fadeInUp animate-delay-400">
                <a href="#contact" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors shadow-lg hover:shadow-xl">
                    Get In Touch
                </a>
                <a href="{{ route('portfolio.download-cv') }}" class="border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    Download CV
                </a>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center space-x-6 mt-8 animate-fadeInUp animate-delay-500">
                <a href="{{ $data['linkedin'] }}" target="_blank" class="text-gray-600 hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400 transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="{{ $data['github'] }}" target="_blank" class="text-gray-600 hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400 transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                <a href="mailto:{{ $data['email'] }}" class="text-gray-600 hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white dark:bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 animate-fadeInUp">About Me</h2>
            <div class="w-20 h-1 bg-primary-600 mx-auto animate-fadeInUp animate-delay-100"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeInLeft">
                <h3 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-white">
                    Professional Backend Developer
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                    {{ $data['summary'] }}
                </p>

                <div class="space-y-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-primary-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">{{ $data['email'] }}</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-primary-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">{{ $data['phone'] }}</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-primary-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">{{ $data['location'] }}</span>
                    </div>
                </div>
            </div>

            <div class="animate-fadeInRight">
                <div class="bg-gray-50 dark:bg-dark-800 p-8 rounded-lg">
                    <h4 class="text-xl font-semibold mb-6 text-gray-900 dark:text-white">Quick Facts</h4>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">3+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">50+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">10+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Technologies</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">24/7</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Availability</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-gray-50 dark:bg-dark-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 animate-fadeInUp">Technical Skills</h2>
            <div class="w-20 h-1 bg-primary-600 mx-auto animate-fadeInUp animate-delay-100"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-6 max-w-2xl mx-auto animate-fadeInUp animate-delay-200">
                Comprehensive expertise in modern backend technologies and development practices
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($data['skills'] as $category => $skillList)
            <div class="bg-white dark:bg-dark-900 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow animate-fadeInUp animate-delay-{{ $loop->index * 100 + 100 }}">
                <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white flex items-center">
                    <svg class="w-5 h-5 text-primary-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ $category }}
                </h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($skillList as $skill)
                    <span class="bg-primary-100 dark:bg-primary-900 text-primary-800 dark:text-primary-200 px-3 py-1 rounded-full text-sm font-medium">
                        {{ $skill }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endforeach
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

<!-- Projects Section -->
<section id="projects" class="py-20 bg-gray-50 dark:bg-dark-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 animate-fadeInUp">Featured Projects</h2>
            <div class="w-20 h-1 bg-primary-600 mx-auto animate-fadeInUp animate-delay-100"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-6 max-w-2xl mx-auto animate-fadeInUp animate-delay-200">
                Showcase of my recent work in backend development and API design
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
            @foreach($data['projects'] as $project)
            <div class="bg-white dark:bg-dark-900 rounded-lg shadow-lg hover:shadow-xl transition-shadow overflow-hidden animate-fadeInUp animate-delay-{{ $loop->index * 200 + 100 }}">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ $project['name'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $project['description'] }}</p>

                    <div class="mb-4">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white mb-2">Technologies:</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($project['technologies'] as $tech)
                            <span class="bg-gray-100 dark:bg-dark-700 text-gray-800 dark:text-gray-300 px-2 py-1 rounded text-xs">
                                {{ $tech }}
                            </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white mb-2">Key Features:</h4>
                        <ul class="space-y-1">
                            @foreach($project['features'] as $feature)
                            <li class="flex items-start text-sm">
                                <svg class="w-3 h-3 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="flex justify-between items-center">
                        <a href="{{ $project['github'] }}" target="_blank" class="inline-flex items-center text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            View Code
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white dark:bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 animate-fadeInUp">Get In Touch</h2>
            <div class="w-20 h-1 bg-primary-600 mx-auto animate-fadeInUp animate-delay-100"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-6 max-w-2xl mx-auto animate-fadeInUp animate-delay-200">
                Ready to work together? Let's discuss your next project and how I can help bring your ideas to life.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="animate-fadeInLeft">
                <h3 class="text-2xl font-semibold mb-8 text-gray-900 dark:text-white">Let's Talk</h3>

                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900 dark:text-white">Email</h4>
                            <a href="mailto:{{ $data['email'] }}" class="text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                {{ $data['email'] }}
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900 dark:text-white">Phone</h4>
                            <a href="tel:{{ $data['phone'] }}" class="text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                {{ $data['phone'] }}
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900 dark:text-white">Location</h4>
                            <p class="text-gray-600 dark:text-gray-400">{{ $data['location'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Follow Me</h4>
                    <div class="flex space-x-4">
                        <a href="{{ $data['linkedin'] }}" target="_blank" class="w-10 h-10 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center text-primary-600 hover:bg-primary-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="{{ $data['github'] }}" target="_blank" class="w-10 h-10 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center text-primary-600 hover:bg-primary-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="animate-fadeInRight">
                <form id="contact-form" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Full Name
                        </label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-4 py-3 border border-gray-300 dark:border-dark-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800 text-gray-900 dark:text-white">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-3 border border-gray-300 dark:border-dark-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800 text-gray-900 dark:text-white">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Subject
                        </label>
                        <input type="text" id="subject" name="subject" required
                               class="w-full px-4 py-3 border border-gray-300 dark:border-dark-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800 text-gray-900 dark:text-white">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Message
                        </label>
                        <textarea id="message" name="message" rows="5" required
                                  class="w-full px-4 py-3 border border-gray-300 dark:border-dark-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800 text-gray-900 dark:text-white resize-none"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed">
                        <span id="submit-text">Send Message</span>
                        <span id="submit-loading" class="hidden">Sending...</span>
                    </button>
                </form>

                <!-- Success/Error Messages -->
                <div id="form-message" class="mt-4 hidden"></div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Contact form submission
document.getElementById('contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = this;
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
            messageDiv.innerHTML = `
                <div class="bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-600 text-green-700 dark:text-green-300 px-4 py-3 rounded">
                    ${data.message}
                </div>
            `;
            form.reset();
        } else {
            throw new Error(data.message || 'Something went wrong');
        }
    } catch (error) {
        messageDiv.innerHTML = `
            <div class="bg-red-100 dark:bg-red-900 border border-red-400 dark:border-red-600 text-red-700 dark:text-red-300 px-4 py-3 rounded">
                Failed to send message. Please try again or contact me directly.
            </div>
        `;
    } finally {
        // Reset button state
        submitBtn.disabled = false;
        submitText.classList.remove('hidden');
        submitLoading.classList.add('hidden');
        messageDiv.classList.remove('hidden');

        // Hide message after 5 seconds
        setTimeout(() => {
            messageDiv.classList.add('hidden');
        }, 5000);
    }
});
</script>
@endpush
