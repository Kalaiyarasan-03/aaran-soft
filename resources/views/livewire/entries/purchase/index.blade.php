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
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" center>Purchase Date
                </x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('purchase_no')" left>Party Name</x-table.header-text>
                <x-table.header-text center>Total Qty</x-table.header-text>
                <x-table.header-text center>Total Taxable</x-table.header-text>
                <x-table.header-text center>Total Gst</x-table.header-text>
                <x-table.header-text center>Grand Total</x-table.header-text>
                <x-table.header-action/>
            </x-slot>

            <!-- Table Body ------------------------------------------------------------------------------------------->
            <x-slot name="table_body">

                @php
                    $totalQty = 0;
                    $totalTaxable = 0;
                    $totalGst = 0;
                    $totalGrandtotal = 0;

                @endphp

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
                                {{ $row->total_qty + 0}}
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
                                <div class="group inline-block relative cursor-pointer max-w-fit min-w-fit">
                                    <div class="absolute hidden group-hover:block pr-0.5 whitespace-nowrap top-1 w-full">
                                        <div class="flex flex-col justify-start items-center -translate-y-full">
                                            <div class="bg-blue-500  shadow-md text-white rounded-lg py-1 px-3 cursor-default text-base">
                                                Edit
                                            </div>
                                            <div class="w-0 h-0 border-l-[12px] border-r-[12px] border-t-[8px] border-l-transparent border-r-transparent border-t-blue-500 -mt-[1px]"></div>
                                        </div>
                                    </div>
                                <a href="{{route('purchases.upsert',[$row->id])}}"
                                   class="flex text-gray-600 truncate text-xl text-center">
                                    <x-button.link>&nbsp;
                                        <x-icons.icon :icon="'pencil'"
                                                      class="text-blue-500 hover:text-white  hover:rounded-sm hover:bg-blue-500 h-5 w-auto block"/>
                                    </x-button.link>
                                </a>
                                </div>
                                <div class="group inline-block relative cursor-pointer max-w-fit min-w-fit">
                                    <div class="absolute hidden group-hover:block pr-0.5 whitespace-nowrap top-1 w-full">
                                        <div class="flex flex-col justify-start items-center -translate-y-full">
                                            <div class="bg-red-500  shadow-md text-white rounded-lg py-1 px-3 cursor-default text-base">
                                                delete
                                            </div>
                                            <div class="w-0 h-0 border-l-[12px] border-r-[12px] border-t-[8px] border-l-transparent border-r-transparent border-t-red-500 -mt-[1px]"></div>
                                        </div>
                                    </div>
                                <x-button.link wire:click="getDelete({{$row->id}})"
                                >&nbsp;
                                    <x-icons.icon :icon="'trash'"
                                                  class="text-red-600 h-5 hover:bg-red-500 hover:text-white hover:rounded-sm hover:font-bold w-auto block"/>
                                </x-button.link>
                                </div>
                            </div>
                        </x-table.cell-text>

                    </x-table.row>

                    @php
                        $totalQty  += floatval($row->total_qty + 0);
                        $totalTaxable  += floatval($row->total_taxable);
                        $totalGst  += floatval($row->total_gst);
                        $totalGrandtotal  += floatval($row->grand_total);

                    @endphp

                @empty
                    <x-table.empty/>
                @endforelse


                <x-table.row>
                    <x-table.cell-text :colspan="5" :class="'text-blue-600 font-semibold'" right>&nbsp;TOTALS&nbsp;&nbsp;&nbsp;</x-table.cell-text>
                    <x-table.cell-text center :class="'text-blue-600 font-semibold'">{{ $totalQty}}</x-table.cell-text>
                    <x-table.cell-text right
                                       :class="'text-blue-600 font-semibold'">{{ \App\Helper\ConvertTo::decimal2($totalTaxable)}}</x-table.cell-text>
                    <x-table.cell-text right
                                       :class="'text-blue-600 font-semibold'">{{ \App\Helper\ConvertTo::decimal2($totalGst)}}</x-table.cell-text>
                    <x-table.cell-text right
                                       :class="'text-blue-600 font-semibold'">{{ \App\Helper\ConvertTo::decimal2($totalGrandtotal)}}</x-table.cell-text>
                </x-table.row>


            </x-slot>

            <!-- Pagination ----------------------------------------------------------------------------------------->
            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>

        </x-forms.table>
        <x-modal.delete/>
    </x-forms.m-panel>
</div>
