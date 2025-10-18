@props([
    'status' => 'available', // available, urgent, support
    'iconOnly' => false
])

@php
$statusConfig = [
    'available' => [
        'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
        'text' => __('Available'),
        'class' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
        'ariaLabel' => __('Status: Available for requests')
    ],
    'urgent' => [
        'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z',
        'text' => __('Urgent'),
        'class' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200',
        'ariaLabel' => __('Status: Urgent - Priority support')
    ],
    'support' => [
        'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
        'text' => __('24/7'),
        'class' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200',
        'ariaLabel' => __('Status: 24/7 support available')
    ]
];

$config = $statusConfig[$status] ?? $statusConfig['available'];
@endphp

<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold shadow-sm {{ $config['class'] }} {{ $attributes->get('class') }}"
      role="status"
      aria-label="{{ $config['ariaLabel'] }}">
    {{-- Icon with semantic meaning --}}
    <svg class="w-4 h-4 {{ $iconOnly ? '' : 'mr-1.5' }}"
         fill="none"
         stroke="currentColor"
         viewBox="0 0 24 24"
         aria-hidden="true">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="{{ $config['icon'] }}"></path>
    </svg>

    @unless($iconOnly)
        {{-- Text for screen readers and visual users --}}
        <span>{{ $config['text'] }}</span>
    @endunless
</span>
