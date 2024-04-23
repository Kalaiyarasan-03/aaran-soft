<div>
    <x-slot name="header">Receipt</x-slot>

    <x-forms.m-panel>

        <!-- Top Controls --------------------------------------------------------------------------------------------->
        <x-forms.top-controls-filter :show-filters="$showFilters"/>
        <x-input.advance-search-filter :show-filters="$showFilters" :contacts="$contacts" :orders="''">
            <div>
                <x-input.model-select wire:model.live="byModel" :label="'Model'">
                    <option value="">choose</option>
                    @foreach($receipt_types as $i)
                        <option value="{{$i->id}}">{{$i->vname}}</option>
                    @endforeach
                </x-input.model-select>
            </div>
        </x-input.advance-search-filter>

        <!--Table Header ---------------------------------------------------------------------------------------------->
        <x-forms.table>
            <x-slot name="table_header">
                <x-table.header-serial/>
                <x-table.header-text wire:click.prevent="sortBy('vdate')" center>Date</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vdate')" center>Party Name</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vdate')" center>Model</x-table.header-text>
                <x-table.header-text center>Amount</x-table.header-text>
                <x-table.header-action/>
            </x-slot>

            <!-- Table Body ------------------------------------------------------------------------------------------->
            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)

                    <x-table.row>
                        <x-table.cell-text center>
                            <a href="{{route('receipts.upsert',[$row->id])}}">
                                {{ $index+1}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('receipts.upsert',[$row->id])}}">
                                {{date('d-m-Y', strtotime($row->vdate))}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('receipts.upsert',[$row->id])}}">
                                {{ $row->contact->vname }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('receipts.upsert',[$row->id])}}">
                                {{ $row->receipttype->vname}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('receipts.upsert',[$row->id])}}">
                                {{ $row->receipt_amount}}
                            </a>
                        </x-table.cell-text>

                        <!-- Button Action ---------------------------------------------------------------------------->
                        <x-table.cell>
                            <div class="w-full flex justify-center gap-3">
                                <a href="{{route('receipts.upsert',[$row->id])}}"
                                   class="flex text-gray-600 truncate text-xl text-center">
                                    <x-button.link>&nbsp;
                                        <x-icons.icon :icon="'pencil'"
                                                      class="text-blue-500 h-5 w-auto block"/>
                                    </x-button.link>
                                </a>
                                <x-button.link wire:click="getDelete({{$row->id}})">&nbsp;
                                    <x-icons.icon :icon="'trash'"
                                                  class="text-red-600 h-5 w-auto block"/>
                                </x-button.link>
                            </div>
                        </x-table.cell>
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
        <x-modal.delete/>

    </x-forms.m-panel>
</div>
