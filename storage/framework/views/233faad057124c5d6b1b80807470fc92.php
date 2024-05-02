<div>
     <?php $__env->slot('header', null, []); ?> Tasks <?php $__env->endSlot(); ?>


    <?php if (isset($component)) { $__componentOriginal1d2ce7aa24e0009b85b1e2a9af4c2464 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1d2ce7aa24e0009b85b1e2a9af4c2464 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.m-panel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.m-panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginal051cba49a8cccdf60bdb05204f441230 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal051cba49a8cccdf60bdb05204f441230 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.top-controls','data' => ['showFilters' => $showFilters]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.top-controls'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['show-filters' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showFilters)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal051cba49a8cccdf60bdb05204f441230)): ?>
<?php $attributes = $__attributesOriginal051cba49a8cccdf60bdb05204f441230; ?>
<?php unset($__attributesOriginal051cba49a8cccdf60bdb05204f441230); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal051cba49a8cccdf60bdb05204f441230)): ?>
<?php $component = $__componentOriginal051cba49a8cccdf60bdb05204f441230; ?>
<?php unset($__componentOriginal051cba49a8cccdf60bdb05204f441230); ?>
<?php endif; ?>


        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="flex flex-col gap-3">
                <div class="flex border border-gray-300">

                    <div class="w-[8rem] border flex flex-col justify-between">
                        <a href="<?php echo e(route('tasks.show',[$row->id])); ?>"
                           class="cursor-pointer text-2xl h-3/4 flex items-center justify-center">
                            <?php echo e($row->id); ?>

                        </a>

                        <div class="h-1/4 flex items-center justify-center bg-blue-300  <?php echo e(\App\Enums\Status::tryFrom($row->status)->getStyle()); ?>">
                            <?php echo e(\App\Enums\Status::tryFrom($row->status)->getName()); ?>

                        </div>
                    </div>

                    <div class="p-5">
                        <div class="h-10 w-10 lg:mr-5">
                            <img class="rounded-md justify-items-start h-10 w-10  "
                                 src="<?php echo e(\Illuminate\Support\Facades\Storage::url($row->image)); ?>">
                        </div>
                    </div>

                    <div class="w-full p-5">
                        <div class="flex justify-between w-full py-1">
                            <a href="<?php echo e(route('tasks.show',[$row->id])); ?>"
                               class="cursor-pointer w-full text-2xl text-left px-2 hover:underline underline-offset-8">
                                <?php echo e($row->title); ?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo e($row->client->vname); ?>

                            </a>

                            <div class="p-1">
                                <a class="cursor-pointer px-3 text-center rounded-full outline outline-1 outline-green-600 bg-green-100 flex flex-shrink-0">
                                    <?php echo e(\App\Enums\Channels::tryFrom($row->channel)->getName()); ?></a>
                            </div>

                            <div class="text-lg text-right px-2 flex flex-row gap-3 flex-shrink-0">
                                <a class="cursor-pointer">By : <?php echo e($row->user->name); ?></a>
                                <button wire:click="edit(<?php echo e($row->id); ?>)"
                                        class="bg-gray-300 px-1.5 rounded-md text-gray-500">Edit
                                </button>
                            </div>
                        </div>

                        <div class="flex w-full px-3 py-5 text-zinc-500">
                            <?php echo $row->body; ?>

                        </div>

                        <div class="flex flex-row justify-between">

                            <div class="px-3 flex flex-row justify-between">

                                <div class="flex flex-row gap-2">
                                    <span class=" text-sm py-0.5 text-gray-500">Assign To :</span>
                                    <span
                                            class=" text-md text-gray-600"><?php echo e(\Aaran\Taskmanager\Models\Task::allocate($row->allocated)); ?></span>
                                </div>

                                <a href="<?php echo e(route('tasks.show',[$row->id])); ?>"
                                   class="cursor-pointer flex flex-row px-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0
                                              0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48
                                              0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                                    </svg>
                                    <span class="text-xl font-semibold pl-1 -mt-0.5">

                                        </span>
                                </a>
                            </div>


                            <div class="px-3 py-1 flex flex-row gap-3 items-center">
                                <?php echo e(\App\Helper\ConvertTo::dateTime($row->updated_at)); ?>

                                <div
                                        class="text-center flex items-center w-4 h-4 mr-2 text-sm rounded-full <?php echo e(\App\Enums\Active::tryFrom($row->active_id)->getStyle()); ?>">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- Create Record -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="flex justify-center items-center space-x-2">
                <?php if (isset($component)) { $__componentOriginal2d7ce9af332b48c30415ac50055c18a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d7ce9af332b48c30415ac50055c18a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.empty','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.empty'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d7ce9af332b48c30415ac50055c18a5)): ?>
<?php $attributes = $__attributesOriginal2d7ce9af332b48c30415ac50055c18a5; ?>
<?php unset($__attributesOriginal2d7ce9af332b48c30415ac50055c18a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d7ce9af332b48c30415ac50055c18a5)): ?>
<?php $component = $__componentOriginal2d7ce9af332b48c30415ac50055c18a5; ?>
<?php unset($__componentOriginal2d7ce9af332b48c30415ac50055c18a5); ?>
<?php endif; ?>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <?php if (isset($component)) { $__componentOriginalda074efadb5da906410cf6de45ef064e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda074efadb5da906410cf6de45ef064e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.create','data' => ['id' => $vid]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vid)]); ?>

            <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'client_id','label' => 'Client']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'client_id','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Client')]); ?>
                <option class="text-gray-400"> choose ..</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($client->id); ?>"><?php echo e($client->vname); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $attributes = $__attributesOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__attributesOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $component = $__componentOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__componentOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'vname','label' => 'Title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'vname','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Title')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $attributes = $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $component = $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>


            <div class="px-1 py-4">
                <?php if (isset($component)) { $__componentOriginal17d23910dd41851864ca92c8841a0308 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17d23910dd41851864ca92c8841a0308 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.rich-text','data' => ['wire:model' => 'body','placeholder' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.rich-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'body','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17d23910dd41851864ca92c8841a0308)): ?>
<?php $attributes = $__attributesOriginal17d23910dd41851864ca92c8841a0308; ?>
<?php unset($__attributesOriginal17d23910dd41851864ca92c8841a0308); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17d23910dd41851864ca92c8841a0308)): ?>
<?php $component = $__componentOriginal17d23910dd41851864ca92c8841a0308; ?>
<?php unset($__componentOriginal17d23910dd41851864ca92c8841a0308); ?>
<?php endif; ?>
            </div>


            <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'channel','label' => 'Channel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'channel','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Channel')]); ?>
                <option class="text-gray-400"> choose ..</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\Channels::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($channel->value); ?>"><?php echo e($channel->getName()); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $attributes = $__attributesOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__attributesOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $component = $__componentOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__componentOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'allocated','label' => 'Assign To']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'allocated','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Assign To')]); ?>
                <option class="text-gray-400"> choose ..</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $attributes = $__attributesOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__attributesOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $component = $__componentOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__componentOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>

            <!--[if BLOCK]><![endif]--><?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
            <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'verified','label' => 'Verified']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'verified','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Verified')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $attributes = $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $component = $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-date','data' => ['wire:model' => 'verified_on','label' => 'Verified On']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'verified_on','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Verified On')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff)): ?>
<?php $attributes = $__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff; ?>
<?php unset($__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff)): ?>
<?php $component = $__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff; ?>
<?php unset($__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <label class="w-[10rem] text-zinc-500 tracking-wide py-2"></label>

            <div class="flex-shrink-0 h-40 w-40 mr-4">
                <!--[if BLOCK]><![endif]--><?php if($photos): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    Photo Preview:
                    <img

                        src="<?php echo e($image->temporaryUrl()); ?>"
                        width="100" height="100" alt="<?php echo e($image); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>

            <div>

                <input type="file" wire:model="photos" multiple class="" >
                <button wire:click.prevent="save_image"></button>
            </div>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda074efadb5da906410cf6de45ef064e)): ?>
<?php $attributes = $__attributesOriginalda074efadb5da906410cf6de45ef064e; ?>
<?php unset($__attributesOriginalda074efadb5da906410cf6de45ef064e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda074efadb5da906410cf6de45ef064e)): ?>
<?php $component = $__componentOriginalda074efadb5da906410cf6de45ef064e; ?>
<?php unset($__componentOriginalda074efadb5da906410cf6de45ef064e); ?>
<?php endif; ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1d2ce7aa24e0009b85b1e2a9af4c2464)): ?>
<?php $attributes = $__attributesOriginal1d2ce7aa24e0009b85b1e2a9af4c2464; ?>
<?php unset($__attributesOriginal1d2ce7aa24e0009b85b1e2a9af4c2464); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d2ce7aa24e0009b85b1e2a9af4c2464)): ?>
<?php $component = $__componentOriginal1d2ce7aa24e0009b85b1e2a9af4c2464; ?>
<?php unset($__componentOriginal1d2ce7aa24e0009b85b1e2a9af4c2464); ?>
<?php endif; ?>

</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/taskmanager/task/index.blade.php ENDPATH**/ ?>