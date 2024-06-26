@props(['path', 'current' => ''])

<a href="{{ route($path) }}" class="{{ $current == $path ? 'pointer-events-none opacity-50 cursor-not-allowed' : '' }}">{{ $slot }}</a>