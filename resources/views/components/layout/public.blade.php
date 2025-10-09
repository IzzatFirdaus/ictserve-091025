@props(['title' => 'ICTServe'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'ICTServe') }}</title>

        <!-- SEO Meta Tags -->
        <meta name="description" content="Sistem Pengurusan Perkhidmatan ICT untuk Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC). Comprehensive ICT service management system.">
        <meta name="keywords" content="MOTAC, ICT, Service Management, Malaysia Government, Digital Transformation, iServe">
        <meta name="author" content="Ministry of Tourism, Arts and Culture Malaysia">
        <meta name="robots" content="index, follow">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="{{ $title ?? 'ICTServe - MOTAC ICT Service Management' }}">
        <meta property="og:description" content="Sistem Pengurusan Perkhidmatan ICT untuk Kementerian Pelancongan, Seni dan Budaya Malaysia">
        <meta property="og:image" content="{{ asset('images/motac-logo.jpeg') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url('/') }}">
        <meta property="twitter:title" content="{{ $title ?? 'ICTServe - MOTAC ICT Service Management' }}">
        <meta property="twitter:description" content="Sistem Pengurusan Perkhidmatan ICT untuk Kementerian Pelancongan, Seni dan Budaya Malaysia">
        <meta property="twitter:image" content="{{ asset('images/motac-logo.jpeg') }}">

        <!-- Favicons and App Icons -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

        <!-- PWA Manifest -->
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <meta name="theme-color" content="#1e40af">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-title" content="ICTServe">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Preload Critical Images -->
        <link rel="preload" href="{{ asset('images/jata-negara.svg') }}" as="image" type="image/svg+xml">
        <link rel="preload" href="{{ asset('images/motac-logo.jpeg') }}" as="image" type="image/jpeg">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
        <!-- Skip to main content link for accessibility -->
        <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:top-4 focus:left-4 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Skip to main content
        </a>

        <!-- Header -->
        <header class="gov-header shadow-lg" role="banner">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <!-- Logo Section with Official Branding -->
                    <div class="logo-container">
                        <!-- Malaysia National Emblem -->
                        <img src="{{ asset('images/jata-negara.svg') }}"
                             alt="Jata Negara Malaysia"
                             class="logo-secondary img-sharp"
                             width="32"
                             height="32"
                             loading="eager">

                        <!-- MOTAC Logo -->
                        <img src="{{ asset('images/motac-logo.jpeg') }}"
                             alt="Ministry of Tourism, Arts and Culture Malaysia"
                             class="logo-primary img-sharp rounded-sm"
                             width="48"
                             height="48"
                             loading="eager">

                        <!-- System Branding -->
                        <div class="flex flex-col">
                            <h1 class="text-lg md:text-xl font-bold text-white">
                                {{ config('app.name', 'ICTServe') }}
                            </h1>
                            <span class="text-xs md:text-sm text-blue-100 opacity-90">
                                (iServe) - MOTAC ICT Services
                            </span>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <nav class="hidden md:flex space-x-8" role="navigation" aria-label="Main navigation">
                        <a href="/" class="text-blue-100 hover:text-white transition-colors font-medium" aria-current="{{ request()->is('/') ? 'page' : 'false' }}">
                            Home
                        </a>
                        <a href="/services" class="text-blue-100 hover:text-white transition-colors font-medium" aria-current="{{ request()->is('services') ? 'page' : 'false' }}">
                            Services
                        </a>
                        <a href="/contact" class="text-blue-100 hover:text-white transition-colors font-medium" aria-current="{{ request()->is('contact') ? 'page' : 'false' }}">
                            Contact
                        </a>
                    </nav>

                    <!-- Mobile Menu Button -->
                    <button type="button"
                            class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-blue-100 hover:text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            data-mobile-menu-toggle
                            aria-expanded="false"
                            aria-controls="mobile-menu"
                            aria-label="Toggle navigation menu">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <!-- Admin Login Link -->
                    <div class="flex items-center">
                        <a href="/admin/login" class="inline-flex items-center px-4 py-2 bg-white bg-opacity-10 backdrop-blur-sm border border-white border-opacity-20 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-opacity-20 focus:bg-opacity-20 active:bg-opacity-30 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 transition ease-in-out duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Staff Login
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu"
                 class="mobile-menu hidden"
                 data-mobile-menu
                 role="dialog"
                 aria-modal="true"
                 aria-label="Mobile navigation menu">
                <div class="mobile-menu-panel">
                    <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Menu</h2>
                        <button type="button"
                                class="p-2 rounded-md text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
                                data-mobile-menu-toggle
                                aria-label="Close menu">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <nav class="p-4" aria-label="Mobile navigation">
                        <ul class="space-y-2">
                            <li>
                                <a href="/" class="block px-4 py-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-blue-50 dark:hover:bg-blue-900 transition-colors">
                                    🏠 Home
                                </a>
                            </li>
                            <li>
                                <a href="/services" class="block px-4 py-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-blue-50 dark:hover:bg-blue-900 transition-colors">
                                    🛠️ Services
                                </a>
                            </li>
                            <li>
                                <a href="/contact" class="block px-4 py-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-blue-50 dark:hover:bg-blue-900 transition-colors">
                                    📞 Contact
                                </a>
                            </li>
                            <li class="pt-2 border-t border-gray-200 dark:border-gray-700">
                                <a href="/admin/login" class="block px-4 py-2 rounded-md text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900 transition-colors font-medium">
                                    🔐 Admin Portal
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main id="main-content" class="py-12" role="main">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 dark:bg-gray-900 text-white" role="contentinfo">
            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <!-- Official Logos Section -->
                <div class="footer-logos border-b border-gray-700 mb-8">
                    <img src="{{ asset('images/jata-negara.svg') }}"
                         alt="Jata Negara Malaysia"
                         class="footer-logo h-16"
                         width="64"
                         height="64"
                         loading="lazy">
                    <img src="{{ asset('images/motac-logo.jpeg') }}"
                         alt="MOTAC Logo"
                         class="footer-logo h-16 rounded"
                         width="64"
                         height="64"
                         loading="lazy">
                    <img src="{{ asset('images/bpm-logo.png') }}"
                         alt="1BestariNet Program Malaysia"
                         class="footer-logo h-12"
                         width="auto"
                         height="48"
                         loading="lazy">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- About -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            ICTServe (iServe)
                        </h3>
                        <p class="text-gray-300 text-sm leading-relaxed">
                            Sistem Pengurusan Perkhidmatan ICT untuk Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC).
                        </p>
                        <p class="text-gray-400 text-xs mt-2">
                            Dibangunkan sebagai sebahagian daripada inisiatif transformasi digital kerajaan Malaysia.
                        </p>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                            Quick Links
                        </h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-200">→ Home</a></li>
                            <li><a href="/services" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-200">→ Services</a></li>
                            <li><a href="/contact" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-200">→ Contact</a></li>
                            <li><a href="/admin/login" class="text-gray-300 hover:text-blue-400 hover:pl-2 transition-all duration-200">→ Admin Portal</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Contact Information
                        </h3>
                        <div class="text-gray-300 text-sm space-y-2">
                            <p class="font-medium">Kementerian Pelancongan, Seni dan Budaya Malaysia</p>
                            <p>Tingkat 13-27, No. 2, Menara 1,</p>
                            <p>Jalan P5/6, Presint 5,</p>
                            <p>62200 W.P. Putrajaya</p>
                            <div class="mt-3 pt-3 border-t border-gray-700">
                                <p class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    ict-support@motac.gov.my
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-700 mt-8 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-400 text-sm">
                            &copy; {{ date('Y') }} Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC). All rights reserved.
                        </p>
                        <div class="flex items-center mt-4 md:mt-0 space-x-4">
                            <span class="text-gray-500 text-xs">Powered by Laravel {{ app()->version() }}</span>
                            <span class="text-gray-500 text-xs">•</span>
                            <span class="text-gray-500 text-xs">Malaysia Digital Government</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
