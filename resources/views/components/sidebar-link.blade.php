@props(['active' => false, 'href'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex items-center px-4 py-2.5 text-sm font-medium rounded-lg transition-colors' . ($active ? ' bg-white text-indigo-600' : ' text-white hover:bg-white hover:text-indigo-600')]) }}>
    {{ $slot }}
</a>