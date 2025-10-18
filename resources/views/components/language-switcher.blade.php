{{-- Language Switcher Component (WCAG 2.2 Compliant) --}}
@props(['currentLocale' => app()->getLocale()])

{{-- [DEBUG] Session Locale: {{ session('locale') }} --}}


<div class="relative inline-block text-left"
     x-data="{ open: false }"
     {{ $attributes }}>
    {{-- Language Button --}}
    <button type="button"
            @click="open = !open"
            @keydown.escape="open = false"
            class="inline-flex items-center px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all"
            aria-haspopup="true"
            :aria-expanded="open"
            aria-label="{{ __('Change language') }}">
        {{-- Globe Icon --}}
        <svg class="w-4 h-4 mr-2"
             fill="none"
             stroke="currentColor"
             viewBox="0 0 24 24"
             aria-hidden="true">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
        </svg>

        {{-- Current Language --}}
        <span class="uppercase">{{ $currentLocale === 'ms' ? 'BM' : 'EN' }}</span>

        {{-- Chevron --}}
        <svg class="ml-2 h-4 w-4 transition-transform"
             :class="{ 'rotate-180': open }"
             fill="currentColor"
             viewBox="0 0 20 20"
             aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
        </svg>
    </button>

    {{-- Dropdown Menu --}}
    <div x-show="open"
         x-cloak
         @click.away="open = false"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 dark:divide-gray-700 focus:outline-none z-50"
         role="menu"
         aria-orientation="vertical"
         aria-labelledby="language-menu">
        <div class="py-1" role="none">
            {{-- Bahasa Melayu --}}
            <a href="{{ route('locale.switch', 'ms') }}"
               class="group flex items-center px-4 py-2 text-sm {{ $currentLocale === 'ms' ? 'bg-blue-50 text-blue-700 dark:bg-blue-900 dark:text-blue-200' : 'text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700' }} transition-colors"
               role="menuitem"
               @click="open = false">
                @if($currentLocale === 'ms')
                    <svg class="mr-3 h-5 w-5 text-blue-600 dark:text-blue-400"
                         fill="currentColor"
                         viewBox="0 0 20 20"
                         aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                @else
                    <span class="mr-3 h-5 w-5" aria-hidden="true"></span>
                @endif
                <span class="flex-1">Bahasa Melayu</span>
                <span class="text-xs text-gray-500 dark:text-gray-400 ml-2">BM</span>
            </a>

            {{-- English --}}
            <a href="{{ route('locale.switch', 'en') }}"
               class="group flex items-center px-4 py-2 text-sm {{ $currentLocale === 'en' ? 'bg-blue-50 text-blue-700 dark:bg-blue-900 dark:text-blue-200' : 'text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700' }} transition-colors"
               role="menuitem"
               @click="open = false">
                @if($currentLocale === 'en')
                    <svg class="mr-3 h-5 w-5 text-blue-600 dark:text-blue-400"
                         fill="currentColor"
                         viewBox="0 0 20 20"
                         aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                @else
                    <span class="mr-3 h-5 w-5" aria-hidden="true"></span>
                @endif
                <span class="flex-1">English</span>
                <span class="text-xs text-gray-500 dark:text-gray-400 ml-2">EN</span>
            </a>
        </div>
    </div>
</div>
