@props([
    'title' => '',
    'subtitle' => '',
    'description' => '',
    'icon' => '',
    'gradient' => 'from-blue-500 to-blue-600',
    'status' => 'available',
    'actionUrl' => '#',
    'actionText' => __('Learn More'),
    'responseTime' => '',
    'buttonColor' => 'blue'
])

<article class="modern-card overflow-hidden will-change-transform group"
         {{ $attributes }}>
    {{-- Card Header with Gradient and Icon --}}
    <div class="relative h-48 bg-gradient-to-br {{ $gradient }} flex items-center justify-center overflow-hidden">
        {{-- Status Badge (Top Right) - WCAG 2.2 Compliant --}}
        <div class="absolute top-4 right-4 z-10">
            <x-status-badge :status="$status" />
        </div>

        {{-- Service Icon (Centered) --}}
        <div class="service-icon h-16 w-16 relative z-10">
            @if($icon)
                {!! $icon !!}
            @else
                <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            @endif
        </div>

        {{-- Decorative Patterns (Subtle, no semantic meaning) --}}
        <div class="absolute inset-0 bg-gradient-to-br from-transparent to-black opacity-10" aria-hidden="true"></div>
        <div class="absolute top-4 right-4 w-20 h-20 bg-white bg-opacity-10 rounded-full blur-xl" aria-hidden="true"></div>
        <div class="absolute bottom-4 left-4 w-12 h-12 bg-white bg-opacity-10 rounded-full blur-lg" aria-hidden="true"></div>
    </div>

    {{-- Card Body --}}
    <div class="p-6 bg-white dark:bg-gray-800">
        {{-- Title and Subtitle --}}
        <div class="mb-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                {{ $title }}
            </h3>
            @if($subtitle)
                <p class="text-sm text-blue-600 dark:text-blue-400 font-medium">
                    {{ $subtitle }}
                </p>
            @endif
        </div>

        {{-- Description --}}
        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed text-sm">
            {{ $description }}
        </p>

        {{-- Action Button and Response Time --}}
        <div class="flex items-center justify-between">
            <a href="{{ $actionUrl }}"
               class="inline-flex items-center px-4 py-2 bg-{{ $buttonColor }}-600 border border-transparent rounded-lg font-medium text-sm text-white hover:bg-{{ $buttonColor }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $buttonColor }}-500 transition-all duration-200 hover:scale-105 active:scale-100"
               aria-label="{{ $actionText }} - {{ $title }}">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
                {{ $actionText }}
            </a>

            @if($responseTime)
                <span class="text-xs text-gray-500 dark:text-gray-400 flex items-center" role="status">
                    <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="sr-only">{{ __('Expected response time:') }}</span>
                    {{ $responseTime }}
                </span>
            @endif
        </div>
    </div>
</article>
