<x-app-layout>
    <x-slot name="sidebar">
        <x-sidebar current="prisoners.index"></x-sidebar>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 py-12">
        <?php $fields = ['BSN', 'Voornaam', 'Achternaam', 'Woonplaats', 'Actie']; ?>
        <x-data-table :fields="$fields">
            @foreach ($prisoners as $prisoner)
                <tr>
                    <td class="p-1 pr-0">{{ $prisoner->profile->bsn }}</td>
                    <td class="p-1 pr-0">{{ $prisoner->profile->first_name }}</td>
                    <td class="p-1 pr-0">{{ $prisoner->profile->last_name }}</td>
                    <td class="p-1 pr-0">{{ $prisoner->profile->city }}</td>
                    <td class="p-1 pr-0">-</td>
                </tr>
            @endforeach
        </x-data-table>
    </div>
</x-app-layout>
