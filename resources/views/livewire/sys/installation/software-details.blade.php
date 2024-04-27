<div>
    <div>
        <x-slot name="header">Software Details</x-slot>

        <x-forms.m-panel>

            <!-- Top Controls --------------------------------------------------------------------------------------------->
            <x-forms.top-controls :show-filters="$showFilters"/>

            <!-- Header --------------------------------------------------------------------------------------------------->
            <x-forms.table>

                <!-- Table Header --------------------------------------------------------------------------------------------->

                <x-slot name="table_header">
                    <x-table.header-serial/>
                    <x-table.header-text center>Sub Domain</x-table.header-text>
                    <x-table.header-text center>Database</x-table.header-text>
                    <x-table.header-text center>Git</x-table.header-text>
                    <x-table.header-text center>Copy Build Folder</x-table.header-text>
                    <x-table.header-text center>Copy Env</x-table.header-text>
                    <x-table.header-text center>Db Migrate</x-table.header-text>
                    <x-table.header-text center>Storage Link</x-table.header-text>
                    <x-table.header-text center>User Created</x-table.header-text>
                    <x-table.header-text center>User Tenant Id</x-table.header-text>
                    <x-table.header-text center>Installed on</x-table.header-text>
                    <x-table.header-text center>Soft Version</x-table.header-text>
                    <x-table.header-text center>Db Version</x-table.header-text>
                    <x-table.header-text center>verified</x-table.header-text>
                    <x-table.header-action/>
                </x-slot>

                <!-- Table Body ------------------------------------------------------------------------------------------->
                <x-slot name="table_body">
                    @forelse ($list as $index =>  $row)

                        <x-table.row>
                            <x-table.cell-text center>
                                {{ $index + 1 }}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->sub_domain}}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->database}}
                            </x-table.cell-text>


                            <x-table.cell-text center>
                                {{ $row->git}}
                            </x-table.cell-text>


                            <x-table.cell-text center>
                                {{ $row->copy_build_folder}}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->copy_env}}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->db_migrate}}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->storage_link}}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->user_created}}
                            </x-table.cell-text>


                            <x-table.cell-text center>
                                {{ $row->user_tenant_id}}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->installed_on}}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->soft_version}}
                            </x-table.cell-text>

                            <x-table.cell-text center>
                                {{ $row->Db_version}}
                            </x-table.cell-text>
                            <x-table.cell-text center>
                                {{ $row->verify}}
                            </x-table.cell-text>

                            <x-table.cell-action id="{{$row->id}}"/>

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

            <!-- Create/ Edit Popup --------------------------------------------------------------------------------------->
            <x-forms.create-new :id="$vid">
                <div class="lg:flex w-full">
                    <div class="w-full">
                        <x-input.model-text wire:model="sub_domain" :label="'Sub Domain'"/>
                        <x-input.model-text wire:model="database" :label="'Database'"/>
                        <x-input.model-text wire:model="git" :label="'Git'"/>
                        <x-input.model-text wire:model="copy_build_folder" :label="'Copy Build Folder'"/>
                        <x-input.model-text wire:model="copy_env" :label="'Copy Env'"/>
                        <x-input.model-text wire:model="db_migrate" :label="'Db Migrate'"/>
                    </div>
                    <div class="w-full pl-5">
                        <x-input.model-text wire:model="storage_link" :label="'Storage Link'"/>
                        <x-input.model-text wire:model="user_created" :label="'User Created'"/>
                        <x-input.model-text wire:model="user_tenant_id" :label="'User Tenant Id'"/>
                        <x-input.model-date wire:model="installed_on" :label="'Installed on'"/>
                        <x-input.model-text wire:model="soft_version" :label="'Soft Version'"/>
                        <x-input.model-text wire:model="Db_version" :label="'Db Version'"/>
                        <x-input.model-select wire:model="verify" :label="'verify'">
                            <option class="text-gray-400"> choose ..</option>
                            <option value="verified">kalai
                                <x-icons.icon :icon="'Check'"
                                              class="text-black h-5 w-auto block"/>
                            </option>
                            <option value="not verified">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </option>
                            <option value="Third">Third</option>
                        </x-input.model-select>
                    </div>
                </div>
            </x-forms.create-new>

        </x-forms.m-panel>
    </div>
</div>
