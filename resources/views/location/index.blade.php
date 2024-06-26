<x-app-layout>
    <x-slot name="sidebar">
        <x-sidebar current="locations.index"></x-sidebar>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 py-12">
        <?php $fields = ['Plaats', 'Adres', 'Aantal cellen', 'Actie']; ?>
        <x-data-table :fields="$fields">
            @foreach ($locations as $loc)
                <tr>
                    <td class="p-1 pr-0">{{ $loc->city }}</td>
                    <td class="p-1 pr-0">{{ $loc->address }}</td>
                    <td class="p-1 pr-0">{{ $loc->cell_amount }}</td>
                    <td class="p-1 pr-0">-</td>
                </tr>
            @endforeach
        </x-data-table>
    </div>
</x-app-layout>
