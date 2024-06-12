@props([
    'fields' => []
])

<table>
    <thead>
        <tr>
            @foreach ($fields as $field)
                <th>{{ $field }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>