<div>
    <x-slot name="header">Purchase</x-slot>

    <x-forms.m-panel>

        <!-- Top Controls --------------------------------------------------------------------------------------------->
        <x-forms.top-controls-filter :orders="$orders"/>
        <x-input.advance-search-filter :show-filters="$showFilters" :contacts="$contacts" :orders="''"/>
        <x-forms.table>

        <!-- Table Header --------------------------------------------------------------------------------------------->
            <x-slot name="table_header">
                <x-table.header-serial/>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Order No</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Purchase No</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Purchase Date</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" left>Party Name</x-table.header-text>
                <x-table.header-text center>Total Qty</x-table.header-text>
                <x-table.header-text center>Total Taxable</x-table.header-text>
                <x-table.header-text center>Total Gst</x-table.header-text>
                <x-table.header-text center>Grand Total</x-table.header-text>
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

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->order->vname}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->purchase_no}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{date('d-m-Y', strtotime($row->purchase_date))}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text left>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->contact->vname}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->total_qty}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->total_taxable }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->total_gst }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->grand_total }}
                            </a>
                        </x-table.cell-text>

                        <!-- Button Action ---------------------------------------------------------------------------->
                        <x-table.cell-text>
                            <div class="w-full flex justify-center gap-3">
                                <a href="{{route('purchases.upsert',[$row->id])}}"
                                   class="flex text-gray-600 truncate text-xl text-center">
                                    <x-button.link>&nbsp;
                                        <x-icons.icon :icon="'pencil'"
                                                      class="text-blue-500 hover:text-white  hover:rounded-sm hover:bg-blue-500 h-5 w-auto block"/>
                                    </x-button.link>
                                </a>
                                <x-button.link wire:click="getDelete({{$row->id}})"
                                              >&nbsp;
                                    <x-icons.icon :icon="'trash'"
                                                  class="text-red-600 h-5 hover:bg-red-500 hover:text-white hover:rounded-sm hover:font-bold w-auto block"/>
                                </x-button.link>
                            </div>
                        </x-table.cell-text>

                    </x-table.row>

                @empty
                    <x-table.empty/>
                @endforelse
            </x-slot>

            <!-- Pagination ----------------------------------------------------------------------------------------->
            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>

        </x-forms.table>
        <x-modal.delete/>
    </x-forms.m-panel>
</div>
