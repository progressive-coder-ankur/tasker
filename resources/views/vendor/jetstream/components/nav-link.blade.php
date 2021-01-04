@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-900 text-white hover:bg-gray-700 hover:text-white'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white' ;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
