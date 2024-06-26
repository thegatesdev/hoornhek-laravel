@props(['current' => ''])

<div class="flex-none w-52 bg-brown-dark flex flex-col items-center space-y-2 py-6">
    <x-named-link path="prisoners.index" current="{{ $current }}">Gedetineerden</x-named-link>
    <x-named-link path="cases.index" current="{{ $current }}">Casussen</x-named-link>
    <x-named-link path="locations.index" current="{{ $current }}">Locaties</x-named-link>
    <x-named-link path="occupations.index" current="{{ $current }}">Bezettingen</x-named-link>
</div>
