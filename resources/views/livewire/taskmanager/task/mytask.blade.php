<div>
    <x-slot name="header">My Task</x-slot>


    <x-forms.m-panel>
        <x-forms.top-controls :show-filters="$showFilters"/>


        @forelse ($list as $index=> $row)
            <div class="flex flex-col gap-3">
                <div class="flex border border-gray-300">
                    <div class="w-[8rem] border flex flex-col justify-between">
                        <a href="{{ route('tasks.show',[$row->id]) }}"
                           class="cursor-pointer text-2xl h-3/4 flex items-center justify-center">
                            {{ $index+1 }}
                        </a>
                        <div
                            class="h-1/4 flex items-center justify-center bg-blue-300  {{ \App\Enums\Status::tryFrom($row->status)->getStyle() }}">
                            {{ \App\Enums\Status::tryFrom($row->status)->getName() }}
                        </div>
                    </div>

                    <div class="p-5">
                        <div class="h-40 w-40 lg:mr-8">
                            <img class="rounded-xl justify-items-start h-40 w-40 transition duration-300 ease-in-out hover:scale-110"
                                 src="{{ \Illuminate\Support\Facades\Storage::url($row->image) }}">
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="flex justify-between w-full py-1">
                            <a href="{{ route('tasks.show',[$row->id]) }}"
                               class="cursor-pointer w-full text-2xl text-left px-3 hover:underline underline-offset-8">
                                {{ $row->title }}&nbsp;&nbsp;-&nbsp;&nbsp;{{ $row->client->vname }}
                            </a>
                            <div class="p-1">
                                <a
                                    class="cursor-pointer px-3 text-center rounded-full outline outline-1 outline-green-600 bg-green-100  flex flex-shrink-0">{{ \App\Enums\Channels::tryFrom($row->channel)->getName() }}</a>
                            </div>
                            <div class="w-[15rem] text-lg text-right px-5">
                                <a class="cursor-pointer">By : {{ $row->user->name }}</a>
                            </div>
                        </div>

                        <div class="flex w-full px-3 py-5 text-zinc-500">
                            {!! $row->body !!}
                        </div>

                        <div class="flex flex-row justify-between">

                            <div class="px-3 flex flex-row justify-between">

                                <div class="flex flex-row gap-2">
                                    <span class=" text-sm py-0.5 text-gray-500">Assign To :</span>
                                    <span
                                        class=" text-md text-gray-600">
{{--                                        {{\Aaran\Crm\Models\Task::allocate($row->allocated) }}--}}
                                    </span>

                                </div>


                                <a href="{{ route('tasks.show',[$row->id]) }}"
                                   class="cursor-pointer flex flex-row px-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                                    </svg>
                                    <span class="text-xl font-semibold pl-1 -mt-0.5">
{{--                                           {{ \App\Models\TaskManger\Reply::counts($row->id)}}--}}
                                        </span>
                                </a>


                            </div>


                            <div class="px-3 py-1 flex flex-row gap-3 items-center">
                                {{ \App\Helper\ConvertTo::dateTime($row->updated_at)}}
                                <div
                                    class="text-center flex items-center w-4 h-4 mr-2 text-sm rounded-full {{\App\Enums\Active::tryFrom($row->active_id)->getStyle()}}">
                                    &nbsp;
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        @empty

            <div class="flex justify-center items-center space-x-2">
                <x-table.empty/>
            </div>

        @endforelse


        <!-- Create Record -->
        <x-forms.create :id="$vid">

            <x-input.model-select wire:model="client_id" :label="'Client'">
                <option class="text-gray-400"> choose ..</option>
                @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->vname}}</option>
                @endforeach
            </x-input.model-select>

            <x-input.model-text wire:model="vname" :label="'Title'"/>

            <div class="px-1 py-4">
                <x-input.rich-text wire:model.lazy="body" id="body" :placeholder="''"/>
            </div>


            <x-input.model-select wire:model="channel" :label="'Channel'">
                <option class="text-gray-400"> choose ..</option>
                @foreach(\App\Enums\Channels::cases() as $channel)
                    <option value="{{$channel->value}}">{{$channel->getName()}}</option>
                @endforeach
            </x-input.model-select>

            <x-input.model-select wire:model="allocated" :label="'Assign To'">
                <option class="text-gray-400"> choose ..</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </x-input.model-select>
            @admin
            <x-input.model-text wire:model="verified" :label="'Verified'"/>
            <x-input.model-date wire:model="verified_on" :label="'Verified On'"/>
            @endadmin

{{--            <div class=" flex-items-center pt-2">--}}
                <label class="w-[10rem] text-zinc-500 tracking-wide py-2">Image</label>
                <div class="flex-shrink-0 h-80 w-80 mr-4">
                    @if($image)
                        Photo Preview:
                        <img
                            src="{{$isUploaded? $image->temporaryUrl() : url(\Illuminate\Support\Facades\Storage::url($image)) }}"
                            width="50" height="50">
                    @endif
                </div>
            <div>
                <input type="file" wire:model="image" class="">
                <button wire:click.prevent="save_image"></button>
            </div>
        </x-forms.create>

    </x-forms.m-panel>

</div>
