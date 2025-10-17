<x-layout.public title="ICTServe - ICT Service Management System">
    <div class="space-y-16">
        <!-- Hero Section with Government Branding -->
        <div class="hero-banner relative overflow-hidden rounded-2xl fade-in">
            <div class="hero-overlay"></div>
            <div class="relative px-6 lg:px-8 py-24 sm:py-32 text-center">
                <!-- Official Logos Row -->
                <div class="flex justify-center items-center space-x-8 mb-8 slide-up">
                    <img src="{{ asset('images/jata-negara.svg') }}"
                         alt="Jata Negara Malaysia - National Emblem of Malaysia"
                         class="h-16 w-auto img-sharp filter brightness-0 invert"
                         width="64"
                         height="64"
                         loading="eager"
                         fetchpriority="high">
                    <div class="h-12 w-px bg-white bg-opacity-30" role="separator" aria-hidden="true"></div>
                    <img src="{{ asset('images/motac-logo.jpeg') }}"
                         alt="Ministry of Tourism, Arts and Culture Malaysia (MOTAC) Official Logo"
                         class="h-16 w-auto rounded-lg shadow-lg"
                         width="auto"
                         height="64"
                         loading="eager"
                         fetchpriority="high">
                </div>

                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl slide-up" style="animation-delay: 0.1s;">
                    Welcome to <span class="text-blue-200">ICTServe</span>
                </h1>
                <p class="mt-6 text-xl leading-8 text-blue-100 max-w-3xl mx-auto slide-up" style="animation-delay: 0.2s;">
                    Sistem Pengurusan Perkhidmatan ICT untuk Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC)
                </p>
                <p class="mt-4 text-lg text-blue-200 opacity-90 slide-up" style="animation-delay: 0.3s;">
                    Comprehensive ICT service management for government digital transformation
                </p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 slide-up" style="animation-delay: 0.4s;">
                    <a href="/services"
                       class="group inline-flex items-center rounded-lg bg-white px-6 py-3 text-base font-semibold text-blue-700 shadow-lg hover:bg-blue-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transition-all duration-200 hover:scale-105"
                       aria-label="Browse available ICT services">
                        <svg class="w-5 h-5 mr-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Browse Services
                    </a>
                    <a href="/contact"
                       class="inline-flex items-center text-lg font-semibold leading-6 text-white hover:text-blue-200 transition-colors duration-200"
                       aria-label="Contact ICT support team">
                        Contact Support
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 lg:grid-cols-3">
                <!-- Service Requests -->
                <div class="flex flex-col-reverse">
                    <div class="mt-6">
                        <h2 class="text-lg font-semibold leading-8 tracking-tight text-gray-900 dark:text-white">
                            Service Requests
                        </h2>
                        <p class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-400">
                            Submit requests for new ICT services, equipment, or software for your department.
                        </p>
                        <div class="mt-4">
                            <a href="/services" class="text-sm font-semibold leading-6 text-blue-600 hover:text-blue-500">
                                Request Service <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                    <div class="flex h-7 items-center">
                        <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Issue Reporting -->
                <div class="flex flex-col-reverse">
                    <div class="mt-6">
                        <h2 class="text-lg font-semibold leading-8 tracking-tight text-gray-900 dark:text-white">
                            Issue Reporting
                        </h2>
                        <p class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-400">
                            Report technical issues, system problems, or request maintenance support.
                        </p>
                        <div class="mt-4">
                            <a href="/services" class="text-sm font-semibold leading-6 text-red-600 hover:text-red-500">
                                Report Issue <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                    <div class="flex h-7 items-center">
                        <svg class="h-5 w-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Support & Help -->
                <div class="flex flex-col-reverse">
                    <div class="mt-6">
                        <h2 class="text-lg font-semibold leading-8 tracking-tight text-gray-900 dark:text-white">
                            Support & Help
                        </h2>
                        <p class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-400">
                            Get help with existing systems, training, or general ICT support.
                        </p>
                        <div class="mt-4">
                            <a href="/contact" class="text-sm font-semibold leading-6 text-green-600 hover:text-green-500">
                                Get Support <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                    <div class="flex h-7 items-center">
                        <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-white dark:bg-gray-800 py-12">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                            Serving MOTAC's ICT Needs
                        </h2>
                        <p class="mt-4 text-lg leading-8 text-gray-600 dark:text-gray-400">
                            Comprehensive ICT service management for all MOTAC departments and staff.
                        </p>
                    </div>
                    <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                        <div class="flex flex-col bg-gray-400/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-600 dark:text-gray-400">Departments Served</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 dark:text-white">15+</dd>
                        </div>
                        <div class="flex flex-col bg-gray-400/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-600 dark:text-gray-400">Active Users</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 dark:text-white">500+</dd>
                        </div>
                        <div class="flex flex-col bg-gray-400/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-600 dark:text-gray-400">Services Available</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 dark:text-white">25+</dd>
                        </div>
                        <div class="flex flex-col bg-gray-400/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-600 dark:text-gray-400">Support Hours</dt>
                            <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 dark:text-white">24/7</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-blue-600 rounded-lg shadow-xl">
            <div class="px-6 py-16 sm:px-6 sm:py-24 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Ready to get started?
                    </h2>
                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-blue-100">
                        Access our comprehensive ICT services or contact our support team for assistance.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="/services" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-blue-600 shadow-sm hover:bg-blue-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                            Browse Services
                        </a>
                        <a href="/contact" class="text-sm font-semibold leading-6 text-white">
                            Contact Us <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.public>
