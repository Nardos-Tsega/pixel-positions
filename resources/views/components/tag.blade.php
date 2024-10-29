@props(['size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl transition-colors duration-300";

    if($size === 'base' ) {
        $classes .= " px-5 py-2 text-sm"; // Changed py-1 to py-2
    }

    if($size === 'small' ) {
        $classes .= " px-3 py-1.5 text-2xs"; // Changed py-1 to py-1.5
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>
