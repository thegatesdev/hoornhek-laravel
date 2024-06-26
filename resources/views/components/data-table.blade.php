@props([
    'fields' => [],
    'headercls' => ""
])

<table class="w-full">
    <thead class="{{ $headercls }} pb-4 bg-blue-pale">
        <tr class="text-left">
            @foreach ($fields as $field)
                <th class="p-1.5">{{ $field }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody class="bg-blue-pale-light text-black">
        {{ $slot }}
    </tbody>
</table>