<x-layout.public title="{{ __('Accessibility Statement') }} - ICTServe">
    {{-- Breadcrumbs --}}
    <x-breadcrumbs :items="[
        ['label' => __('Accessibility Statement'), 'url' => null]
    ]" />

    <div class="max-w-4xl mx-auto space-y-8">
        {{-- Page Header --}}
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                {{ __('Accessibility Statement') }}
            </h1>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                {{ __('ICTServe is committed to ensuring digital accessibility for all users') }}
            </p>
        </div>

        {{-- Commitment Section --}}
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 md:p-8">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                {{ __('Our Commitment') }}
            </h2>
            <div class="prose prose-blue dark:prose-invert max-w-none">
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    {{ __('Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC) is committed to ensuring that its ICTServe platform is accessible to all users, including persons with disabilities. We strive to conform to the Web Content Accessibility Guidelines (WCAG) 2.2 Level AA standards.') }}
                </p>
            </div>
        </section>

        {{-- Standards Compliance --}}
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 md:p-8">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                {{ __('Standards and Guidelines') }}
            </h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white mb-1">
                            {{ __('WCAG 2.2 Level AA Compliance') }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            {{ __('We conform to the Web Content Accessibility Guidelines (WCAG) 2.2 Level AA published by the World Wide Web Consortium (W3C).') }}
                        </p>
                    </div>
                </div>

                <div class="flex items-start">
                    <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white mb-1">
                            {{ __('ISO 9241 Standards') }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            {{ __('Our design follows ISO 9241-210 (Human-Centred Design), ISO 9241-110 (Dialogue Principles), and ISO 9241-11 (Usability) standards.') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Accessibility Features --}}
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 md:p-8">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                {{ __('Accessibility Features') }}
            </h2>
            <ul class="space-y-3" role="list">
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('Keyboard navigation support for all interactive elements') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('Screen reader compatible with ARIA landmarks and labels') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('High contrast ratios (minimum 4.5:1 for text, 3:1 for UI components)') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('Minimum touch target size of 44×44 pixels for interactive elements') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('Skip navigation links for efficient keyboard access') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('Form validation with clear error messages and inline feedback') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('Bilingual support (Bahasa Melayu and English)') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('Reduced motion support for users with vestibular disorders') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3 mt-2 flex-shrink-0" aria-hidden="true"></span>
                    <span class="text-gray-600 dark:text-gray-400">{{ __('Dark mode support for reduced eye strain') }}</span>
                </li>
            </ul>
        </section>

        {{-- Known Limitations --}}
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 md:p-8">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                {{ __('Known Limitations') }}
            </h2>
            <p class="text-gray-600 dark:text-gray-400 mb-4">
                {{ __('We are continuously working to improve accessibility. Currently known limitations include:') }}
            </p>
            <ul class="space-y-2 text-gray-600 dark:text-gray-400" role="list">
                <li class="flex items-start">
                    <span class="text-blue-600 dark:text-blue-400 mr-2" aria-hidden="true">•</span>
                    <span>{{ __('Some third-party embedded content may not meet accessibility standards') }}</span>
                </li>
                <li class="flex items-start">
                    <span class="text-blue-600 dark:text-blue-400 mr-2" aria-hidden="true">•</span>
                    <span>{{ __('Legacy PDF documents are being converted to accessible formats') }}</span>
                </li>
            </ul>
        </section>

        {{-- Assistive Technologies --}}
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 md:p-8">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                {{ __('Supported Assistive Technologies') }}
            </h2>
            <p class="text-gray-600 dark:text-gray-400 mb-4">
                {{ __('ICTServe has been tested with the following assistive technologies:') }}
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">{{ __('Screen Readers') }}</h3>
                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1" role="list">
                        <li>• NVDA (Windows)</li>
                        <li>• JAWS (Windows)</li>
                        <li>• VoiceOver (macOS, iOS)</li>
                        <li>• TalkBack (Android)</li>
                    </ul>
                </div>
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">{{ __('Browsers') }}</h3>
                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1" role="list">
                        <li>• Chrome 90+</li>
                        <li>• Firefox 88+</li>
                        <li>• Safari 14+</li>
                        <li>• Edge 90+ (Chromium)</li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- Feedback and Contact --}}
        <section class="bg-blue-50 dark:bg-blue-900 border border-blue-200 dark:border-blue-700 rounded-lg p-6 md:p-8">
            <h2 class="text-2xl font-semibold text-blue-900 dark:text-blue-100 mb-4">
                {{ __('Report Accessibility Issues') }}
            </h2>
            <p class="text-blue-800 dark:text-blue-200 mb-4">
                {{ __('We welcome your feedback on the accessibility of ICTServe. If you encounter any accessibility barriers, please let us know:') }}
            </p>
            <div class="space-y-3">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <a href="mailto:ict-support@motac.gov.my" class="text-blue-700 dark:text-blue-300 hover:underline font-medium">
                        ict-support@motac.gov.my
                    </a>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <a href="tel:+60380008000" class="text-blue-700 dark:text-blue-300 hover:underline font-medium">
                        +603-8000-8000
                    </a>
                </div>
                <div class="flex items-start">
                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                    </svg>
                    <div>
                        <a href="{{ route('contact') }}" class="text-blue-700 dark:text-blue-300 hover:underline font-medium">
                            {{ __('Use our Contact Form') }}
                        </a>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mt-1">
                            {{ __('Response time: Within 2 business days') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Last Updated --}}
        <div class="text-center text-sm text-gray-500 dark:text-gray-400">
            <p>
                {{ __('Last updated:') }} {{ now()->format('F j, Y') }}
            </p>
            <p class="mt-1">
                {{ __('ICTServe Version 1.0.0') }}
            </p>
        </div>
    </div>
</x-layout.public>
