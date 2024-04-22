<div>
    <x-slot name="header">Purchase</x-slot>

    <x-forms.m-panel>

        <!-- Top Controls --------------------------------------------------------------------------------------------->
        <x-forms.top-controls-filter :orders="$orders" />
        <x-input.advance-search-filter :show-filters="$showFilters" :contacts="$contacts" :orders="''"/>

        <!-- Header --------------------------------------------------------------------------------------------------->
        <x-forms.table>
            <x-slot name="table_header">
                <x-table.header-serial/>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Order No</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Purchase No</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Purchase Date</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Party Name</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Total Qty</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Total Taxable</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Total Gst</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Grand Total</x-table.header-text>
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

                        <x-table.cell-text>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->order->vname}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->purchase_no}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->purchase_date}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->contact->vname}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->total_qty}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->total_taxable }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->total_gst }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('purchases.upsert',[$row->id])}}">
                                {{ $row->grand_total }}
                            </a>
                        </x-table.cell-text>

                        <!-- Button Action ---------------------------------------------------------------------------->
                        <x-table.cell-action id="{{$row->id}}"/>

                    </x-table.row>

                @empty
                    <x-table.empty/>
                @endforelse
            </x-slot>

            <!-- Table Footer ----------------------------------------------------------------------------------------->
            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>

        </x-forms.table>
        <x-modal.delete/>
    </x-forms.m-panel>
</div>
