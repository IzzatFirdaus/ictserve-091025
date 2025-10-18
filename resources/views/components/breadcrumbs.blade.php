@props(['items' => []])

@if(count($items) > 0)
<nav aria-label="{{ __('Breadcrumb') }}"
     class="mb-6"
     {{ $attributes }}>
    <ol class="flex items-center space-x-2 text-sm"
        role="list"
        itemscope
        itemtype="https://schema.org/BreadcrumbList">
        {{-- Home Link --}}
        <li class="flex items-center"
            itemprop="itemListElement"
            itemscope
            itemtype="https://schema.org/ListItem">
            <a href="{{ route('welcome') }}"
               class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded px-1"
               itemprop="item">
                <svg class="w-4 h-4"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                     aria-hidden="true">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                <span class="sr-only" itemprop="name">{{ __('Home') }}</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>

        @foreach($items as $index => $item)
            {{-- Separator --}}
            <li class="flex items-center" aria-hidden="true">
                <svg class="w-4 h-4 text-gray-400"
                     fill="currentColor"
                     viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"></path>
                </svg>
            </li>

            {{-- Breadcrumb Item --}}
            <li class="flex items-center"
                itemprop="itemListElement"
                itemscope
                itemtype="https://schema.org/ListItem">
                @if(isset($item['url']) && !$loop->last)
                    <a href="{{ $item['url'] }}"
                       class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded px-1"
                       itemprop="item">
                        <span itemprop="name">{{ $item['label'] }}</span>
                    </a>
                @else
                    <span class="text-gray-900 dark:text-white font-medium"
                          aria-current="page"
                          itemprop="name">
                        {{ $item['label'] }}
                    </span>
                @endif
                <meta itemprop="position" content="{{ $index + 2 }}" />
            </li>
        @endforeach
    </ol>
</nav>
@endif
