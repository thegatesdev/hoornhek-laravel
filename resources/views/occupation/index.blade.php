<x-app-layout>
    <x-slot name="sidebar">
        <x-sidebar current="occupations.index"></x-sidebar>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 py-12">
        <?php $fields = ['Location', 'Cel', 'BSN', 'Actie']; ?>
        <x-data-table :fields="$fields">
            @foreach ($occupations as $occ)
                <tr>
                    <td class="p-1 pr-0">{{ $occ->location->city }}</td>
                    <td class="p-1 pr-0">{{ $occ->cell }}</td>
                    <td class="p-1 pr-0">{{ $occ->case_prisoner->prisoner->profile->bsn }}</td>
                    <td class="p-1 pr-0">-</td>
                </tr>
            @endforeach
        </x-data-table>
    </div>
</x-app-layout>
