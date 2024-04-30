<div>
    <x-slot name="header">Task - Reply</x-slot>
    <div class="w-full border-t-2 border-gray-400 rounded-md shadow-lg bg-opacity-5">
        <div class="p-6 pt-12 pb-6 bg-white rounded-md space-y-4">


            <div class="flex flex-col gap-3">
                <div class="flex border border-gray-300">
                    <div class="w-[8rem] border flex flex-col justify-between">
                        <a class="cursor-pointer text-2xl h-3/4 flex items-center justify-center">
                            {{ $task_id }}
                        </a>
                        <div
                                class="h-1/4 flex items-center justify-center bg-blue-300  {{  \App\Enums\Status::tryFrom($status)->getStyle() }}">
                            {{  \App\Enums\Status::tryFrom($status)->getName() }}
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="flex justify-between w-full py-1">
                            <a class="cursor-pointer w-full text-2xl text-left px-3 hover:underline underline-offset-8">
                                {{ $vname }}
                            </a>
                            <div class="p-1">
                                <a
                                        class="cursor-pointer px-3 text-center rounded-full outline outline-1 outline-green-600 bg-green-100">{{ \App\Enums\Channels::tryFrom($channel)->getName() }}</a>
                            </div>
                            <div class="w-[15rem] text-lg text-right px-5">
                                <a class="cursor-pointer">By : {{ $username }}</a>
                            </div>
                        </div>

                        <div class="flex w-full px-3 py-1 text-zinc-500">
                            {!! $body !!}
                        </div>

                        <div class="flex flex-row justify-between">

                            <div class="px-3 flex flex-row justify-between">

                                <div class="flex flex-row gap-2">
                                    <span class=" text-sm py-0.5 text-gray-500">Assign To :</span>
                                    <span
                                            class=" text-md text-gray-600">{{\Aaran\Taskmanager\Models\Task::allocate($allocated) }}</span>

                                </div>

                                <a class="cursor-pointer flex flex-row px-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                                    </svg>
                                    <span class="text-xl font-semibold pl-1 -mt-0.5">
                                    {{$commentsCount}}
                                    </span>
                                </a>
                            </div>


                            <div class="px-3 py-1 flex flex-row gap-3 items-center">
                                {{--                                {{$updated_at->diffForHumans()}}--}}
                                {{date('d-m-Y -h:i a', strtotime($updated_at))}}
                                <div
                                        class="text-center flex items-center w-4 h-4 mr-2 text-sm rounded-full {{\App\Enums\Active::tryFrom($actives)->getStyle()}}">
                                    &nbsp;
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @forelse ($images as $row)
                <div class="h-40 w-40 lg:mr-8">
                    <img class="rounded-xl justify-items-start h-40 w-40 transition duration-300 ease-in-out hover:scale-110"
                         src="{{ \Illuminate\Support\Facades\Storage::url($row->image) }}">
                </div>
            @empty

            @endforelse

            @forelse ($replies as $row)
                <div class="p-1 flex flex-row justify-between border-b border-gray-200  ">
                    <div class="px-5 ">
                        {{$row->vname}}
                    </div>
                    <div class="text-sm text-gray-500">
                        {{$row->user->name}}
                        &nbsp;&nbsp;@&nbsp;&nbsp;{{date('d-m-Y h:i a', strtotime($row->updated_at))}}
                    </div>
                </div>
            @empty
                <div class="flex justify-center items-center space-x-2">
                    <x-icons.inbox class="h-8 w-8 text-cool-gray-400"/>
                    <span class="font-medium py-8 text-cool-gray-400 text-xl">No Entry found...</span>
                </div>
            @endforelse


            <div class="flex justify-between">

                <div class="h-12">
                    <x-button.primary wire:click="create">
                        Reply
                    </x-button.primary>
                </div>


                <div>
                    <label for="changeStatus" class="w-[8rem] text-zinc-500 tracking-wide py-2 hidden">Under</label>
                    <select wire:model="changeStatus" class="w-full purple-textbox" id="changeStatus">
                        <option class="text-zinc-500 px-1">Status...</option>
                        @foreach(\App\Enums\Status::cases() as $obj)
                            <option value="{{$obj->value}}">{{ $obj->getName() }}</option>
                        @endforeach
                    </select>
                    <div class="flex flex-row gap-10">
                        @error('changeStatus')
                        <span class="text-red-500">{{  'Choose any one and update' }}</span>
                        @enderror

                        <button wire:click.prevent="updateStatus" class="text-sm text-gray-400">Update</button>

                        @admin
                        <button wire:click.prevent="adminCloseTask" class="text-sm text-red-500">Close</button>
                        @endadmin

                    </div>
                </div>
            </div>

            <!-- Create Record -->
            <form wire:submit.prevent="save">
                <div>
                    <x-modal.dialog wire:model.defer="showEditModal">
                        <x-slot name="title">
                        </x-slot>

                        <x-slot name="content">

                            <div class="flex flex-col gap-3 py-3">
                                <label for="reply" class="w-[8rem] text-zinc-500 tracking-wide py-2">Comments</label>
                                <textarea rows="5" id="reply" wire:model="reply" autocomplete="off" autofocus
                                          class="rounded-lg appearance-none border
                                                 border-gray-300 py-2 px-2 bg-white text-gray-800 w-full
                                                 placeholder-gray-400 shadow-md text-base focus:outline-none
                                                 focus:ring-2 focus:ring-purple-500 focus:border-transparent
                                                 form-textarea block transition duration-150 ease-in-out sm:text-sm
                                                 sm:leading-5"></textarea>
                            </div>
                            <x-input.model-text wire:model="verified" :label="'Verified'"/>
                            <x-input.model-date wire:model="verified_on" :label="'Verified On'"/>

                            <div class="pb-2">&nbsp;</div>

                        </x-slot>

                        <x-slot name="footer">
                            <div class="w-full flex justify-between gap-3">
                                <div class="flex gap-2">
                                    <x-button.primary type="submit" wire:click.prevent="save">Save</x-button.primary>
                                </div>

                            </div>

                        </x-slot>
                    </x-modal.dialog>
                </div>
            </form>


        </div>
    </div>
</div>
