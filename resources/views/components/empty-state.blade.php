@props(['title', 'description', 'icon' => null, 'action' => null])

<div class="text-center py-12">
    @if($icon)
        <div class="mx-auto h-12 w-12 text-gray-400">
            {!! $icon !!}
        </div>
    @endif
    <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-gray-100">{{ $title }}</h3>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ $description }}</p>
    @if($action)
        <div class="mt-6">
            {{ $action }}
        </div>
    @endif
</div>

