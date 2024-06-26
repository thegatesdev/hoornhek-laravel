<x-app-layout>
    <x-slot name="sidebar">
        <x-sidebar current="cases.index"></x-sidebar>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 py-12">
        <?php $fields = ['Naam', 'Start Datum', 'Actie']; ?>
        <x-data-table :fields="$fields">
            @foreach ($cases as $case)
                <tr>
                    <td class="p-1 pr-0">{{ $case->name }}</td>
                    <td class="p-1 pr-0">{{ $case->created_at }}</td>
                    <td class="p-1 pr-0">-</td>
                </tr>
            @endforeach
        </x-data-table>
    </div>
</x-app-layout>
