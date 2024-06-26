<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gedetineerden') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 text-gray-800 dark:text-gray-200">
            <?php $fields = ['BSN', 'Voornaam', 'Achternaam', 'Woonplaats', 'Actie']; ?>
            <x-data-table :fields="$fields" headercls="bg-gray-800 border-b-4 border-gray-500">
                @foreach ($prisoners as $prisoner)
                    <tr class="even:bg-gray-800 odd:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <td class="p-1 pr-0">{{ $prisoner->profile->bsn }}</td>
                        <td class="p-1 pr-0">{{ $prisoner->profile->first_name }}</td>
                        <td class="p-1 pr-0">{{ $prisoner->profile->last_name }}</td>
                        <td class="p-1 pr-0">{{ $prisoner->profile->city }}</td>
                        <td class="p-1 pr-0">-</td>
                    </tr>
                @endforeach
            </x-data-table>
        </div>
    </div>
</x-app-layout>
