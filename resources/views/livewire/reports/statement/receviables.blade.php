<div>
    <x-slot name="header">Receviables</x-slot>

    <x-forms.m-panel>
        <div class="flex w-full gap-3">

            <div class="w-[40rem]">
                <x-input.model-select wire:model.live="by_company" :label="'Party Name'">
                    <option value="">choose</option>
                    @foreach($contact as $i)
                        <option value="{{$i->id}}">{{$i->vname}}</option>
                    @endforeach
                </x-input.model-select>
            </div>

            <x-input.model-date wire:model.live="start_date" :label="'From Date'"/>

            <x-input.model-date wire:model.live="end_date" :label="'To Date'"/>

        </div>

        <x-forms.table>
            <x-slot name="table_header">
                <x-table.ths-slno wire:click.prevent="sortBy('invoice_no')">Sl.no</x-table.ths-slno>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Particulars</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Invoice Amount</x-table.ths-center>
                <x-table.ths-center wire:click.prevent="sortBy('invoice_no')">Receipt Amount</x-table.ths-center>
            </x-slot>

            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)
                    <x-table.row>
                        <x-table.cell>
                            <a href=""
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->invoice_no}} - {{ $row->invoice_date}}
                            </a>
                        </x-table.cell>

                        <x-table.cell>
                            <a href="{{route('sales.upsert',[$row->id])}}"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                {{ $row->grand_total }}
                            </a>
                        </x-table.cell>

                        <x-table.cell-text>
                                {{ $row->grand_total }}
                        </x-table.cell-text>
                    </x-table.row>
                @empty
                    <x-table.empty/>
                @endforelse
            </x-slot>
            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>
        </x-forms.table>
    </x-forms.m-panel>

</div>
