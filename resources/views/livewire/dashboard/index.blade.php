<div>
    <x-slot name="header">Dashboard</x-slot>
    <div class="w-full h-screen">
        <div class="lg:flex justify-between gap-3 py-5 xl:pl-12 h-2/5 ">
            <div class="lg:w-1/4 ">
                @if(Aaran\Aadmin\Src\Customise::hasTodoList())
                    <livewire:taskmanager.todos.index/>
                @endif

            </div>


            @if(Aaran\Aadmin\Src\Customise::hasAttendance())
                <livewire:attendance.attendance.index/>
            @endif


            <div class="grid grid-rows-5">
            <div class="inline-flex rounded-xl pointer-events-auto p-2 max-w-sm h-12 bg-green-500 gap-2">
                <span aria-hidden="true" class="inline-flex h-6 w-6 items-center justify-center ml-2 my-auto rounded-full border-2 border-green-200 text-lg font-bold text-white">&check;</span>
                <p class="text-sm font-semibold flex-shrink-0 ml-1.5 my-auto text-white">you have saved successfully </p>
                <span class="ml-3 flex rounded-full bg-green-500">
                    <button class="close rounded-full hover:bg-green-600">
                        <x-icons.icon :icon="'x-mark'" class="w-8 h-auto block font-bold text-white"/>
                    </button>
                </span>
            </div>
            <div class="inline-flex rounded-xl pointer-events-auto p-2 max-w-sm h-12 bg-blue-600 gap-2">
                <span aria-hidden="true" class="inline-flex h-6 w-6 items-center justify-center ml-2 my-auto rounded-full border-2 border-white text-lg font-bold text-white">!</span>
                <p class="text-sm font-semibold leading-5 ml-1.5 my-auto text-white">you have saved infooo</p>
                <span class="ml-11 flex rounded-full bg-blue-600">
                    <button class="close rounded-full text-right hover:bg-blue-700">
                        <x-icons.icon :icon="'x-mark'" class="w-8  font-bold h-auto text-right block text-white"/>
                    </button>
                </span>
            </div>
            <div class="inline-flex rounded-xl pointer-events-auto p-2 max-w-sm h-12 bg-red-500 gap-2">
                <span aria-hidden="true" class="inline-flex h-8 w-8 items-center justify-center my-auto rounded-full border-2 border-white text-lg font-bold text-white">
                    <x-icons.icon :icon="'error'" class="w-6 font-semibold h-auto block text-white"/>
                </span>
                <p class="text-sm font-semibold leading-5 ml-1.5 my-auto text-white">you have saved successfully</p>
                <span class="ml-3 flex border border-red-500 rounded-full bg-red-500 ">
                    <button class="close font-semibold text-2xl rounded-3xl hover:bg-white">
                        <x-icons.icon :icon="'x-mark'" class="w-8 font-semibold h-auto block text-white  hover:text-gray-800"/>
                    </button>
                </span>
            </div>
                <div class="inline-flex rounded-xl pointer-events-auto p-2 max-w-sm h-12 bg-yellow-400 gap-2">
                <span aria-hidden="true" class="inline-flex h-8 w-8 items-center justify-center my-auto rounded-full border-2 border-white text-lg font-bold text-black">
                    <x-icons.icon :icon="'error'" class="w-6 font-semibold h-auto block text-white"/>
                </span>
                <p class="text-sm font-semibold leading-5 ml-1.5 my-auto text-white">you have saved successfully</p>
                <span class=" ml-3 flex  rounded-full bg-yellow-400 ">
                    <button class="close font-semibold text-2xl rounded-3xl hover:bg-white">
                        <x-icons.icon :icon="'x-mark'" class="w-8 font-semibold h-auto block text-white  hover:text-gray-800"/>
                    </button>
                </span>
            </div>
                <div class="inline-flex rounded-xl pointer-events-auto p-2 max-w-sm h-12 bg-gray-300 gap-2">
                <span aria-hidden="true" class="inline-flex h-8 w-8 items-center justify-center my-auto rounded-full border-2 border-white text-lg font-bold text-black">
                    <x-icons.icon :icon="'error'" class="w-6 font-semibold h-auto block text-white"/>
                </span>
                <p class="text-sm font-semibold leading-5 ml-1.5 my-auto text-white">you have saved successfully</p>
                <span class=" ml-3 flex rounded-full bg-gray-300 ">
                    <button class="close font-semibold text-2xl rounded-3xl hover:bg-white">
                        <x-icons.icon :icon="'x-mark'" class="w-8 font-semibold h-auto block text-white  hover:text-gray-800"/>
                    </button>
                </span>
            </div>
            </div>




        </div>
        <div class="fixed right-0 px-2 py-2 text-gray-400 bottom-0">
            v-{{config('aadmin.soft_version')}}-DB-{{config('aadmin.soft_version')}}
            -{{\Livewire\str()->ucfirst(config('aadmin.app_type'))}}
        </div>
    </div>
</div>
