@props([
    'spacing' => 'base'
])

@php

// @Todo 'py-[max(10vh,2rem)]'
$sizes = [
    'sm'   => 'py-[clamp(1.00rem,01.62vw,01.56rem)]',
    'base' => 'py-[clamp(1.25rem,02.62vw,02.50rem)]',
    'md'   => 'py-[clamp(1.50rem,04.24vw,04.06rem)]',
    'lg'   => 'py-[clamp(2.00rem,06.85vw,06.56rem)]',
    'xl'   => 'py-[clamp(3.00rem,11.09vw,10.63rem)]',
    '2xl'  => 'py-[clamp(5.00rem,17.94vw,17.19rem)]'
];

$sizes = [
    'sm'   => 'py-[max(2vh,1rem)]',
    'base' => 'py-[max(3vh,1.25rem)]',
    'md'   => 'py-[max(5vh,1.5rem)]',
    'lg'   => 'py-[max(8vh,1.75rem)]',
    'xl'   => 'py-[max(13vh,2rem)]',
    '2xl'  => 'py-[max(21vh,2.25rem)]'
];

@endphp

<div  {{ $attributes->merge(['class' => 'mx-auto w-[min(100vw-2rem,96rem)] ' . $sizes[$spacing]]) }}>
    {{ $slot }}
</div>