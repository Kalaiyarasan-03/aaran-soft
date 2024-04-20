<div>
    <x-slot name="header">Bank</x-slot>

    <x-forms.m-panel>

        <!-- Top Controls --------------------------------------------------------------------------------------------->

        <x-forms.top-controls :show-filters="$showFilters"/>
        <x-forms.table :list="$list">

            <!-- Header --------------------------------------------------------------------------------------------------->

            <x-slot name="table_header">
                <x-table.header-serial wire:click.prevent="sortBy('vname')"/>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Company Name</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Bank</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Acno</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>IFSC</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Active</x-table.header-text>
                <x-table.header-text center>Action</x-table.header-text>
            </x-slot>

            <!-- Table Body ------------------------------------------------------------------------------------------->

            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)

                    <x-table.row>
                        <x-table.cell-text center>
                            <a href="{{route('banks.details',[$row->id])}}">
                                {{ $index + 1 }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('banks.details',[$row->id])}}">
                                {{ $row->vname }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('banks.details',[$row->id])}}">
                                {{ $row->bank }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('banks.details',[$row->id])}}">
                                {{ $row->acno }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('banks.details',[$row->id])}}">
                                {{ $row->ifsc }}
                            </a>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <a href="{{route('banks.details',[$row->id])}}">
                                {{$row->active_id == '1' ? 'Active' : 'Not Active'}}
                            </a>
                        </x-table.cell-text>

                        <x-table.action :id="$row->id"/>
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

        <!--Form Create ----------------------------------------------------------------------------------------------->

        <x-forms.create :id="$vid">

            <div class="flex">
                <div class="lg ml-2 px-8">

                    <x-input.model-select wire:model="client_id" :label="'client'">
                        <option class="text-gray-400"> choose ..</option>
                        @foreach($clients as $row)
                            <option value="{{$row->id}}">{{$row->vname}}</option>
                        @endforeach
                    </x-input.model-select>

                    <x-input.model-text wire:model="vname" :label="'company'"/>
                    <x-input.model-text wire:model="acno" :label="'Ac No'"/>
                    <x-input.model-text wire:model="ifsc" :label="'IFSC Code'"/>
                    <x-input.model-text wire:model="bank" :label="'Bank'"/>
                    <x-input.model-text wire:model="branch" :label="'Branch'"/>
                    <x-input.model-text wire:model="customer_id" :label="'Customer Id'"/>
                </div>


                <div class=" px-8">
                    <x-input.model-text wire:model="customer_id2" :label="'User Id'"/>
                    <x-input.model-text wire:model="pks" :label="'Pks'"/>
                    <x-input.model-text wire:model="trs" :label="'Trs'"/>
                    <x-input.model-text wire:model="profileps" :label="'Profile'"/>
                    <x-input.model-text wire:model="mobile" :label="'Mobile'"/>
                    <x-input.model-text wire:model="email" :label="'Email'"/>
                    <x-input.model-text wire:model="dvcatm" :label="'dvcatm'"/>
                </div>
            </div>
        </x-forms.create>

    </x-forms.m-panel>
</div>
