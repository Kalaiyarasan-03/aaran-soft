<div>
    <x-slot name="header">Dashboard</x-slot>
    <div class="w-full h-screen">
        <div class="flex flex-col sm:flex-row gap-3 py-5">

            <div class="w-full">
                @if(Aaran\Aadmin\Src\Customise::hasTodoList())
                    <livewire:taskmanager.todos.index/>
                @endif

            </div>

            <div class="w-full">
                @if(Aaran\Aadmin\Src\Customise::hasAttendance())
                    <livewire:attendance.attendance.index/>
                @endif
            </div>

        </div>
        <div class="fixed right-0 px-2 py-2 text-gray-400 bottom-0">
            v-{{config('aadmin.soft_version')}}-{{\Livewire\str()->ucfirst(config('aadmin.app_type'))}}
        </div>
    </div>
</div>
