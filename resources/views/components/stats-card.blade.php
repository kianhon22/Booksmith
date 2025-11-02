@props(['title', 'value', 'icon', 'color' => 'indigo'])

@php
$colorClasses = match($color) {
    'green' => 'bg-green-500',
    'red' => 'bg-red-500',
    'yellow' => 'bg-yellow-500',
    'blue' => 'bg-blue-500',
    'purple' => 'bg-purple-500',
    default => 'bg-indigo-500',
};
@endphp

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <div class="{{ $colorClasses }} rounded-lg p-3">
                {!! $icon !!}
            </div>
        </div>
        <div class="ml-5 w-0 flex-1">
            <dl>
                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                    {{ $title }}
                </dt>
                <dd class="flex items-baseline">
                    <div class="text-2xl font-semibold text-black dark:text-gray-100">
                        {{ $value }}
                    </div>
                    @if(isset($change))
                        <div class="ml-2">
                            {{ $change }}
                        </div>
                    @endif
                </dd>
            </dl>
        </div>
    </div>
    @if(isset($footer))
        <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
            {{ $footer }}
        </div>
    @endif
</div>

