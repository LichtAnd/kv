@props([
    'spacing' => 'base'
])

@php


$sizes = [
    'sm'   => 'py-[clamp(.8rem,2.5vw,2rem)]',
    'base' => 'py-[clamp(1rem,5vw,4rem)]',
    'md'   => 'py-[clamp(2rem,6vw,6rem)]',
    'lg'   => 'py-[clamp(3rem,11vw,12rem)]',
    'xl'   => 'py-[clamp(4rem,16vw,16rem)]',
    '2xl'  => 'py-[clamp(6rem,20vw,20rem)]'
];

@endphp

<div  {{ $attributes->merge(['class' => 'mx-auto w-[clamp(16rem,90vw,100rem)] ' . $sizes[$spacing]]) }}>
    {{ $slot }}
</div>