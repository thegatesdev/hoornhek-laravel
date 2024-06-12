<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Prisoners') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 text-gray-800 dark:text-gray-200">
            <?php $fields = ["BSN", "Naam", "Adres", "Woonplaats"]; ?>
            <x-data-table :fields="$fields">
                @foreach ($prisoners as $prisoner)
                    <tr>
                        <td>{{ $prisoner->bsn }}</td>
                        <td>{{ $prisoner->name }}</td>
                        <td>{{ $prisoner->address }}</td>
                        <td>{{ $prisoner->city }}</td>
                    </tr>
                @endforeach
            </x-data-table>
        </div>
    </div>
</x-app-layout>
