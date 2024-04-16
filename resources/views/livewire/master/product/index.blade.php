<div>
    <x-slot name="header">Product</x-slot>

    <!-- Top Controls --------------------------------------------------------------------------------------------------->
    <x-forms.m-panel>
        <x-forms.top-controls :show-filters="$showFilters"/>

        <!-- Header --------------------------------------------------------------------------------------------------->
        <x-forms.table>
            <x-slot name="table_header">
                <x-table.header-serial wire:click.prevent="sortBy('vname')"/>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Product Name</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('product_type')" center>Product Type
                </x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Hsn Code</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('units')" center>Unit of Measure</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('units')" center>Gst Percent</x-table.header-text>
                <x-table.header-action/>
            </x-slot>

            <!-- Table Body ------------------------------------------------------------------------------------------->
            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)

                    <x-table.row>
                        <x-table.cell-text center>
                            <a href="{{route('products.upsert',[$row->id])}}">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text>
                            <a href="{{route('products.upsert',[$row->id])}}">
                                {{ $row->vname }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('products.upsert',[$row->id])}}">
                                {{ \App\Enums\ProductType::tryFrom($row->product_type)->getName()}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('products.upsert',[$row->id])}}">
                                {{ $row->hsncode->vname }}
                            </a>
                        </x-table.cell-text>


                        <x-table.cell-text center>
                            <a href="{{route('products.upsert',[$row->id])}}">
                                {{\App\Enums\Units::tryFrom($row->units)->getName()}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('products.upsert',[$row->id])}}">
                                {{ \App\Enums\GstPercent::tryFrom($row->gst_percent)->getName()}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text>
                            <div class="w-full flex justify-center gap-3">
                                <a href="{{route('products.upsert',[$row->id])}}"
                                   class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                    <x-button.link>&nbsp;
                                        <x-icons.icon :icon="'pencil'"
                                                      class="text-blue-500 h-5 w-auto block"/>
                                    </x-button.link>
                                </a>
                                <x-button.link wire:click="set_delete({{$row->id}})"
                                               wire:confirm="Are you sure you want to delete this ?">&nbsp;
                                    <x-icons.icon :icon="'trash'"
                                                  class="text-red-600 h-5 w-auto block"/>
                                </x-button.link>
                            </div>
                        </x-table.cell-text>
                    </x-table.row>

                @empty
                    <x-table.empty/>
                @endforelse
            </x-slot>


            <!-- Table Footer ------------------------------------------------------------------------------------------->
            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>
        </x-forms.table>

    </x-forms.m-panel>
</div>
