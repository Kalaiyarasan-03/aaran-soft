<div>
    <x-slot name="header">Company</x-slot>

    <x-forms.m-panel>

        <!-- Top Controls --------------------------------------------------------------------------------------------->
        <div class="flex justify-between pb-5">
            <div class="w-2/4 flex space-x-2">

                <x-input.search-box/>
                <x-input.toggle-filter :show-filters="$showFilters"/>
            </div>

            <div class="space-x-2 flex items-center">
                <x-forms.per-page/>
                @admin
                <x-button.new/>
                @endadmin
            </div>
        </div>

        <x-input.advance-search :show-filters="$showFilters"/>
        <x-forms.table>

        <!-- Table Header --------------------------------------------------------------------------------------------->

            <x-slot name="table_header">
                <x-table.header-serial/>
                <x-table.header-text center>Company Name</x-table.header-text>
                <x-table.header-text center>Address-1</x-table.header-text>
                <x-table.header-text center>Address-2</x-table.header-text>
                <x-table.header-text center>Mobile</x-table.header-text>
                <x-table.header-text center>Landline</x-table.header-text>
                <x-table.header-text center>Gst</x-table.header-text>
                <x-table.header-text center>Pan</x-table.header-text>
                <x-table.header-text center>Email</x-table.header-text>
                <x-table.header-text center>Website</x-table.header-text>
                <x-table.header-text center>Action</x-table.header-text>
            </x-slot>

            <!-- Table Body ------------------------------------------------------------------------------------------->
            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)

                    <x-table.row>
                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <div class="flex">
                            <div class="flex-shrink-0 h-10 w-10 mr-4 rounded-xl">
                                <a href="{{route('companies.upsert',[$row->id])}}">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($row->logo)}}" alt="logo"/>
                                </a></div>

                               <div><a href="{{route('companies.upsert',[$row->id])}}"
                                   class="flex px-3 text-gray-600 truncate text-xl text-left">
                                    {{ $row->display_name}}
                                </a></div>
                            </div>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $row->address_1 }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $row->address_2 }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $row->mobile }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $row->landline }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $row->gstin }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $row->pan }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $row->email }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('companies.upsert',[$row->id])}}">
                                {{ $row->website }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <div class="w-full  justify-center gap-3">
                                <a href="{{route('companies.upsert',[$row->id])}}"
                                   class="px-3 text-gray-600 truncate text-xl text-center">
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

            <!-- Pagination ------------------------------------------------------------------------------------------->
            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>
        </x-forms.table>

    </x-forms.m-panel>
</div>
