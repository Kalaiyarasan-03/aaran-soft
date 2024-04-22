<div>
    <x-slot name="header">Dashboard</x-slot>
    <div class="w-full h-screen">
        <div class="flex justify-between gap-3 py-5 xl:pl-12 h-2/5 ">
            <div class="w-1/4 ">

                @if(Aaran\Aadmin\Src\Customise::hasTodoList())
                     <livewire:taskmanager.todos.index/>
                @endif

            </div>

            <livewire:attendance.attendance.index/>

        </div>
        <div class="fixed right-0 px-2 py-2 text-gray-400 bottom-0">
            v-{{config('aadmin.soft_version')}}-{{\Livewire\str()->ucfirst(config('aadmin.app_type'))}}
        </div>
    </div>
</div>
