@props(['active'])

@php
$classes = ($active ?? false)
? 'items-center border-s-2 border-secondary text-sm font-medium leading-5 focus:outline-none focus:border-secondary transition duration-150 ease-in-out'
: 'items-center border-s-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-text hover:border-gray-300 focus:outline-none focus:text-text focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>