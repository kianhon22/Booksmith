@props(['type' => 'info'])

@php
$classes = match($type) {
    'success' => 'bg-green-50 border-green-200 text-green-800 dark:bg-green-900/50 dark:border-green-800 dark:text-green-200',
    'error' => 'bg-red-50 border-red-200 text-red-800 dark:bg-red-900/50 dark:border-red-800 dark:text-red-200',
    'warning' => 'bg-yellow-50 border-yellow-200 text-yellow-800 dark:bg-yellow-900/50 dark:border-yellow-800 dark:text-yellow-200',
    'info' => 'bg-blue-50 border-blue-200 text-blue-800 dark:bg-blue-900/50 dark:border-blue-800 dark:text-blue-200',
    default => 'bg-gray-50 border-gray-200 text-gray-800 dark:bg-gray-900/50 dark:border-gray-800 dark:text-gray-200',
};

$icon = match($type) {
    'success' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
    'error' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
    'warning' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>',
    'info' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
    default => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
};
@endphp

<div {{ $attributes->merge(['class' => 'border rounded-lg p-4 flex items-start ' . $classes]) }} x-data="{ show: true }" x-show="show" x-transition>
    <svg class="w-5 h-5 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        {!! $icon !!}
    </svg>
    <div class="flex-1">
        {{ $slot }}
    </div>
    <button @click="show = false" class="ml-4 flex-shrink-0">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

