<div>
    <x-slot name="header">System Config</x-slot>

    <x-forms.m-panel>

        <div class="flex flex-col gap-3">
            <button wire:click.prevent="runMigration" class="px-2 py-1 bg-gray-400">Run Migration</button>

            <button wire:click.prevent="runMigrationRollBack" class="px-2 py-1 bg-gray-400">Run Migration:rollback
            </button>

            <button wire:click.prevent="clearView" class="px-2 py-1 bg-gray-400">Run view:clear</button>

            <button wire:click.prevent="storageLink" class="px-2 py-1 bg-gray-400">Storage Link</button>

            <button wire:click.prevent="runMigrationFreshSeed" class="px-2 py-1 bg-gray-400">Run Migration:fresh
                --seed
            </button>

            <div wire:loading
                 wire:target="clearView,storageLink,storageLink,runMigrationRollBack,runMigration,runMigrationFreshSeed">
                Work is on progress...
            </div>
        </div>
        @admin
        <div class="w-1/4">
            <div>
                <x-input.model-select wire:model.live="no" :label="'Name'">
                    <option value="">choose</option>
                    @foreach($user as $i)
                        <option value="{{$i->id}}">   {{$i->name.' - Tenant Id : '.$i->tenant_id}}</option>
                    @endforeach
                </x-input.model-select>
            </div>

            <div>
                <x-input.model-select wire:model.live="tenant_id" :label="'Tenant Id'">
                    <option>Choose...</option>
                    @foreach($tenants as $i)
                        <option value="{{ $i->id }}">{{ $i->t_name.' - Tenant Id : '.$i->id }}</option>
                    @endforeach
                </x-input.model-select>
                <x-input.model-select wire:model.live="role_id" :label="'Role Id'">
                    <option>Choose...</option>
                    @foreach($roles as $i)
                        <option value="{{ $i->id }}">{{ $i->vname }}</option>
                    @endforeach
                </x-input.model-select>
            </div>
            <button type="submit" wire:click.prevent="update"
                    class="inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest
                                        transition-all shadow-xs
                                        bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b dark:shadow-blue-900
                                        shadow-blue-200 hover:shadow-2xl hover:shadow-blue-200 hover:-tranneutral-y-px'">
                <x-icons.icon :icon="'save'" class="h-5 w-auto block px-1.5"/>
                SAVE
            </button>
        </div>
        @endadmin

    </x-forms.m-panel>
</div>
