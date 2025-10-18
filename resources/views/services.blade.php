<x-layout.public title="{{ __('Services') }} - ICTServe">
    {{-- Breadcrumbs (WCAG 2.2 SC 2.4.8) --}}
    <x-breadcrumbs :items="[
        ['label' => __('Services'), 'url' => null]
    ]" />

    <div class="space-y-8">
        <!-- Page Header -->
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                {{ __('ICT Services') }}
            </h1>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                {{ __('Comprehensive ICT services for MOTAC staff and departments') }}
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Request Card -->
            <div class="modern-card overflow-hidden will-change-transform">
                <!-- Card Header with Icon -->
                <div class="relative h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                    <div class="service-icon h-16 w-16">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <!-- Decorative Pattern -->
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-black opacity-10"></div>
                    <div class="absolute top-4 right-4 w-20 h-20 bg-white bg-opacity-10 rounded-full"></div>
                    <div class="absolute bottom-4 left-4 w-12 h-12 bg-white bg-opacity-10 rounded-full"></div>
                </div>

                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Service Request
                            </h3>
                            <p class="text-sm text-blue-600 dark:text-blue-400 font-medium">
                                New ICT Service
                            </p>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Available
                            </span>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        Request new ICT services, equipment, or software for your department. Our team will review and process your request efficiently.
                    </p>

                    <div class="flex items-center justify-between">
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 hover:scale-105">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Request Service
                        </a>
                        <span class="text-sm text-gray-500">~2-3 business days</span>
                    </div>
                </div>
            </div>

            <!-- Issue Reporting Card -->
            <div class="modern-card overflow-hidden will-change-transform">
                <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center">
                    <div class="service-icon h-16 w-16 bg-gradient-to-br from-red-500 to-red-600">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-black opacity-10"></div>
                    <div class="absolute top-4 right-4 w-20 h-20 bg-white bg-opacity-10 rounded-full"></div>
                    <div class="absolute bottom-4 left-4 w-12 h-12 bg-white bg-opacity-10 rounded-full"></div>
                </div>

                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Issue Reporting
                            </h3>
                            <p class="text-sm text-red-600 dark:text-red-400 font-medium">
                                Technical Issue
                            </p>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Urgent
                            </span>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        Report technical issues, system problems, or request maintenance support. Priority support for critical issues.
                    </p>

                    <div class="flex items-center justify-between">
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-lg font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-200 hover:scale-105">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                            Report Issue
                        </a>
                        <span class="text-sm text-gray-500">~24 hours response</span>
                    </div>
                </div>
            </div>

            <!-- Support & Help Card -->
            <div class="modern-card overflow-hidden will-change-transform">
                <div class="relative h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                    <div class="service-icon h-16 w-16 bg-gradient-to-br from-green-500 to-green-600">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-black opacity-10"></div>
                    <div class="absolute top-4 right-4 w-20 h-20 bg-white bg-opacity-10 rounded-full"></div>
                    <div class="absolute bottom-4 left-4 w-12 h-12 bg-white bg-opacity-10 rounded-full"></div>
                </div>

                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Support & Help
                            </h3>
                            <p class="text-sm text-green-600 dark:text-green-400 font-medium">
                                Help & Support
                            </p>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                24/7
                            </span>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        Get help with existing systems, training, or general ICT support. Our knowledgeable team is here to assist you.
                    </p>

                    <div class="flex items-center justify-between">
                        <a href="/contact" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-lg font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200 hover:scale-105">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Get Support
                        </a>
                        <span class="text-sm text-gray-500">~1 hour response</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-blue-50 dark:bg-blue-900 border border-blue-200 dark:border-blue-700 rounded-lg p-6 text-center">
            <h2 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                Need immediate assistance?
            </h2>
            <p class="text-blue-700 dark:text-blue-300 mb-4">
                Contact our ICT support team directly for urgent issues.
            </p>
            <a href="/contact" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Contact Support
            </a>
        </div>
    </div>
</x-layout.public>
