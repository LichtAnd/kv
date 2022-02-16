@props([
    'color' => 'primary',
    'size' => 'base',
    'outline' => false,
    'sizes' => [
        'small' => 'text-xs px-4 py-2',
        'base' => 'text-sm px-4 py-2'
    ],
    'colors' => [
        'primary' => 'text-white bg-primary-400 border-primary-400 hover:bg-primary-600 hover:border-primary-600',
        'secondary' => 'text-white bg-secondary-400 border-secondary-400 hover:bg-secondary-600 hover:border-secondary-600'
    ],
    'outlinecolors' => [
        'primary' => 'text-primary-400 bg-transparent border-primary-400 hover:text-primary-600 hover:border-primary-600',
        'secondary' => 'text-secondary-400 bg-transparent border-secondary-400 hover:text-secondary-600 hover:border-secondary-600'
    ],    
])

@php
    $colorclasses = $outline ? $outlinecolors[$color] : $colors[$color];
@endphp

<a {{ $attributes->merge(['class' => "$sizes[$size] $colorclasses w-full border-2 font-semibold text-center uppercase tracking-wider rounded-md transition"]) }}>
    {{ $slot }}
</a>