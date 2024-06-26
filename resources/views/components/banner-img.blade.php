@props(['src' => null, 'alt' => ''])

<div  {{ $attributes->merge(['class' => 'w-full']) }}>
    @if ($src)
        <img src="{{ $src }}" alt="{{ $alt }}">
    @endif
</div>