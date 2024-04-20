<div>
    <x-slot name="header">Client</x-slot>

    <x-forms.m-panel>
        <!-- Top Controls --------------------------------------------------------------------------------------------->

        <x-forms.top-controls :show-filters="$showFilters"/>

        <x-forms.table :list="$list">
            <x-slot name="table_header">
                <x-table.header-serial wire:click.prevent="sortBy('vname')"/>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Company Name</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Active</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Payable</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Action</x-table.header-text>
            </x-slot>

            <!-- Table Body ------------------------------------------------------------------------------------------->

            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)

                    <x-table.row>
                        <x-table.cell-text center>
                            <a href="{{route('clients.show',[$row->id])}}">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text >
                            <a href="{{route('clients.show',[$row->id])}}">
                                <div class="text-gray-600 truncate text-xl text-left">
                                    {{ $row->vname }}
                                </div>
                                    &nbsp;&nbsp;&nbsp;-&nbsp;{{ $row->group }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('clients.show',[$row->id])}}">
                                {{$row->active_id == '1' ? 'Active' : 'Not Active'}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('clients.show',[$row->id])}}">
                                {{$row->payable == '1' ? 'yes' : 'No'}}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <div class="w-full flex justify-center gap-3">
                                <a href="{{route('clients.show',[$row->id])}}"
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

            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>
        </x-forms.table>

        <x-modal.delete/>

        <!-- Create --------------------------------------------------------------------------------------------------->

        <x-forms.create :id="$vid">
            <x-input.model-text wire:model="vname" :label="'company'"/>
            <x-input.model-text wire:model="group" :label="'group'"/>
            <x-input.model-select wire:model="payable" :label="'payable'">
                <option>Choose</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </x-input.model-select>
        </x-forms.create>

    </x-forms.m-panel>
</div>
