@props(['header' => 'Nothing'])

<div class="flex flex-col justify-center">
    <h2>{{ $header }}</h2>
</div>
<div class="w-1/2 flex flex-col justify-center">
    <p>
        {{ $slot }}
    </p>
</div>