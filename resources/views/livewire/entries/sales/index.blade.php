<div>
    <x-slot name="header">Sales</x-slot>

    <x-forms.m-panel>

        <!-- Top Controls --------------------------------------------------------------------------------------------->
        <x-forms.top-controls-filter :show-filters="$showFilters"/>
        <x-input.advance-search-filter :show-filters="$showFilters" :contacts="$contacts" :orders="$orders"/>
        <x-forms.table>

            <!--Table Header ---------------------------------------------------------------------------------------------->
            <x-slot name="table_header">
                <x-table.header-serial/>
                <x-table.header-text wire:click.prevent="sortBy('invoice_no')" center>Invoice NO</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('invoice_no')" center>Invoice Date</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('invoice_no')" left>Party Name</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('invoice_no')" center>Total Qty</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('invoice_no')" center>Total Taxable</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('invoice_no')" center>Total Gst</x-table.header-text>

                <x-table.header-text wire:click.prevent="sortBy('invoice_no')" center>Grand Total</x-table.header-text>
                <x-table.header-text center>Print</x-table.header-text>
                <x-table.header-action/>
            </x-slot>

            <!-- Table Body ------------------------------------------------------------------------------------------->

            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)

                    <x-table.row>
                        <x-table.cell-text center>
                            <a href="">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell-text>


                        <x-table.cell-text center >
                            <a href="{{route('sales.upsert',[$row->id])}}">
                                {{ $row->invoice_no}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('sales.upsert',[$row->id])}}">
                                {{ $row->invoice_date}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text left>
                            <a href="{{route('sales.upsert',[$row->id])}}">
                                {{ $row->contact->vname}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('sales.upsert',[$row->id])}}">
                                {{ $row->total_qty+0}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <a href="{{route('sales.upsert',[$row->id])}}">
                                {{ $row->total_taxable }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <a href="{{route('sales.upsert',[$row->id])}}">
                                {{ $row->total_gst }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <a href="{{route('sales.upsert',[$row->id])}}">
                                {{ $row->grand_total }}
                            </a>
                        </x-table.cell-text>

                        <!-- Button Action ---------------------------------------------------------------------------->
                        <x-table.cell-text center >
                            <x-icons.icon :icon="'printer'" wire:click="print({{$row->id}})" class="mt-1 hover:rounded-sm hover:bg-purple-500 hover:text-white h-5 w-auto block"/>
                        </x-table.cell-text>

                        <x-table.cell-text center class="mb-2">
                            <div class="w-full flex justify-center gap-3">

                                <a href="{{route('sales.upsert',[$row->id])}}">
                                    <x-button.link>&nbsp;
                                        <x-icons.icon :icon="'pencil'" class="text-blue-500 hover:text-white  hover:rounded-sm hover:bg-blue-500 h-5 w-auto block"/>
                                    </x-button.link>
                                </a>
                                <x-button.link wire:click="getDelete({{$row->id}})">&nbsp;
                                    <x-icons.icon :icon="'trash'" class="text-red-600 h-5 hover:bg-red-500 hover:text-white hover:rounded-sm hover:font-bold w-auto block"/>
                                </x-button.link>
                            </div>
                        </x-table.cell-text>
                    </x-table.row>

                @empty
                    <x-table.empty/>
                @endforelse
            </x-slot>

            <!-- Pagination ------------------------------------------------------------------------------------------->
            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>

        </x-forms.table>
        <x-modal.delete/>
    </x-forms.m-panel>
</div>
