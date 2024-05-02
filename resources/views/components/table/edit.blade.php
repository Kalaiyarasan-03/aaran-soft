{{--<div x-data="{--}}
{{--        Notification: false,--}}
{{--        click() {--}}
{{--            this.Notification = true;--}}
{{--            let that = this;--}}
{{--            setTimeout(function(){--}}
{{--                that.Notification = false;--}}
{{--            }, 3000);--}}
{{--        }--}}
{{--    }" class="relative z-20 flex items-center">--}}
{{--    <div x-show="Notification" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-2" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-10" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-2" class="absolute left-0" x-cloak>--}}
{{--        <div class="px-3 h-7 -ml-1.5 items-center flex text-xs bg-blue-500 border-r border-blue-500 -translate-x-full text-white rounded">--}}
{{--            <span>Edit</span>--}}
{{--            <div class="absolute right-0 inline-block h-full -mt-px overflow-hidden translate-x-3 -translate-y-2 top-1/2">--}}
{{--                <div class="w-3 h-3 origin-top-left transform rotate-45 bg-blue-500 border border-transparent"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<div>
    <button {{ $attributes}} type='button' class="hover:bg-blue-500 hover:text-white  hover:rounded-sm">
    <div class="group inline-block relative cursor-pointer max-w-fit min-w-fit">
        <div class="absolute hidden group-hover:block pr-0.5 whitespace-nowrap top-1 w-full">
            <div class="flex flex-col justify-start items-center -translate-y-full">
                <div class="bg-blue-500  shadow-md text-white rounded-lg py-1 px-3 cursor-default text-base">
                    Edit
                </div>
                <div class="w-0 h-0 border-l-[12px] border-r-[12px] border-t-[8px] border-l-transparent border-r-transparent border-t-black -mt-[1px]"></div>
            </div>
        </div>
        <span>
            <x-icons.icon :icon="'pencil'"
                          class="text-blue-400 h-5 hover:bg-blue-500 hover:text-white px-0.5 py-0.5 hover:rounded-sm"/>
        </span>
    </div>
    </button>




    {{--<button {{ $attributes}}  @click="click();" type='button'>--}}
{{--    <x-icons.icon :icon="'pencil'"--}}
{{--                  class="text-blue-400 h-5 hover:bg-blue-500 hover:text-white px-0.5 py-0.5 hover:rounded-sm"/>--}}
{{--</button>--}}

</div>
