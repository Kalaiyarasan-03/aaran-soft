<div>
     <?php $__env->slot('header', null, []); ?> Task - Reply <?php $__env->endSlot(); ?>
    <div class="w-full border-t-2 border-gray-400 rounded-md shadow-lg bg-opacity-5">
        <div class="p-6 pt-12 pb-6 bg-white rounded-md space-y-4">


            <div class="flex flex-col gap-3">
                <div class="flex border border-gray-300">
                    <div class="w-[8rem] border flex flex-col justify-between">
                        <a class="cursor-pointer text-2xl h-3/4 flex items-center justify-center">
                            <?php echo e($task_id); ?>

                        </a>
                        <div
                                class="h-1/4 flex items-center justify-center bg-blue-300  <?php echo e(\App\Enums\Status::tryFrom($status)->getStyle()); ?>">
                            <?php echo e(\App\Enums\Status::tryFrom($status)->getName()); ?>

                        </div>
                    </div>

                    <div class="w-full">
                        <div class="flex justify-between w-full py-1">
                            <a class="cursor-pointer w-full text-2xl text-left px-3 hover:underline underline-offset-8">
                                <?php echo e($vname); ?>

                            </a>
                            <div class="p-1">
                                <a
                                        class="cursor-pointer px-3 text-center rounded-full outline outline-1 outline-green-600 bg-green-100"><?php echo e(\App\Enums\Channels::tryFrom($channel)->getName()); ?></a>
                            </div>
                            <div class="w-[15rem] text-lg text-right px-5">
                                <a class="cursor-pointer">By : <?php echo e($username); ?></a>
                            </div>
                        </div>

                        <div class="flex w-full px-3 py-1 text-zinc-500">
                            <?php echo $body; ?>

                        </div>

                        <div class="flex flex-row justify-between">

                            <div class="px-3 flex flex-row justify-between">

                                <div class="flex flex-row gap-2">
                                    <span class=" text-sm py-0.5 text-gray-500">Assign To :</span>
                                    <span
                                            class=" text-md text-gray-600"><?php echo e(\Aaran\Taskmanager\Models\Task::allocate($allocated)); ?></span>

                                </div>

                                <a class="cursor-pointer flex flex-row px-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                                    </svg>
                                    <span class="text-xl font-semibold pl-1 -mt-0.5">
                                    <?php echo e($commentsCount); ?>

                                    </span>
                                </a>
                            </div>


                            <div class="px-3 py-1 flex flex-row gap-3 items-center">
                                
                                <?php echo e(date('d-m-Y -h:i a', strtotime($updated_at))); ?>

                                <div
                                        class="text-center flex items-center w-4 h-4 mr-2 text-sm rounded-full <?php echo e(\App\Enums\Active::tryFrom($actives)->getStyle()); ?>">
                                    &nbsp;
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="h-40 w-40 lg:mr-8">
                    <img class="rounded-xl justify-items-start h-40 w-40 transition duration-300 ease-in-out hover:scale-110"
                         src="<?php echo e(\Illuminate\Support\Facades\Storage::url($row->image)); ?>">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="p-1 flex flex-row justify-between border-b border-gray-200  ">
                    <div class="px-5 ">
                        <?php echo e($row->vname); ?>

                    </div>
                    <div class="text-sm text-gray-500">
                        <?php echo e($row->user->name); ?>

                        &nbsp;&nbsp;@&nbsp;&nbsp;<?php echo e(date('d-m-Y h:i a', strtotime($row->updated_at))); ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="flex justify-center items-center space-x-2">
                    <?php if (isset($component)) { $__componentOriginal2a02b714221f61026ff2aff5463d52d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a02b714221f61026ff2aff5463d52d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.inbox','data' => ['class' => 'h-8 w-8 text-cool-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.inbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-8 w-8 text-cool-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a02b714221f61026ff2aff5463d52d0)): ?>
<?php $attributes = $__attributesOriginal2a02b714221f61026ff2aff5463d52d0; ?>
<?php unset($__attributesOriginal2a02b714221f61026ff2aff5463d52d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a02b714221f61026ff2aff5463d52d0)): ?>
<?php $component = $__componentOriginal2a02b714221f61026ff2aff5463d52d0; ?>
<?php unset($__componentOriginal2a02b714221f61026ff2aff5463d52d0); ?>
<?php endif; ?>
                    <span class="font-medium py-8 text-cool-gray-400 text-xl">No Entry found...</span>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


            <div class="flex justify-between">

                <div class="h-12">
                    <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => ['wire:click' => 'create']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'create']); ?>
                        Reply
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
                </div>


                <div>
                    <label for="changeStatus" class="w-[8rem] text-zinc-500 tracking-wide py-2 hidden">Under</label>
                    <select wire:model="changeStatus" class="w-full purple-textbox" id="changeStatus">
                        <option class="text-zinc-500 px-1">Status...</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\Status::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($obj->value); ?>"><?php echo e($obj->getName()); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                    <div class="flex flex-row gap-10">
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['changeStatus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-500"><?php echo e('Choose any one and update'); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

                        <button wire:click.prevent="updateStatus" class="text-sm text-gray-400">Update</button>

                        <!--[if BLOCK]><![endif]--><?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                        <button wire:click.prevent="adminCloseTask" class="text-sm text-red-500">Close</button>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    </div>
                </div>
            </div>

            <!-- Create Record -->
            <form wire:submit.prevent="save">
                <div>
                    <?php if (isset($component)) { $__componentOriginal6eb288a80e68f6f6b1755bcc863df159 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6eb288a80e68f6f6b1755bcc863df159 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal.dialog','data' => ['wire:model.defer' => 'showEditModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal.dialog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.defer' => 'showEditModal']); ?>
                         <?php $__env->slot('title', null, []); ?> 
                         <?php $__env->endSlot(); ?>

                         <?php $__env->slot('content', null, []); ?> 

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

                            <div class="pb-2">&nbsp;</div>

                         <?php $__env->endSlot(); ?>

                         <?php $__env->slot('footer', null, []); ?> 
                            <div class="w-full flex justify-between gap-3">
                                <div class="flex gap-2">
                                    <?php if (isset($component)) { $__componentOriginal79c47ff43af68680f280e55afc88fe59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79c47ff43af68680f280e55afc88fe59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.primary','data' => ['type' => 'submit','wire:click.prevent' => 'save']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','wire:click.prevent' => 'save']); ?>Save <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $attributes = $__attributesOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__attributesOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79c47ff43af68680f280e55afc88fe59)): ?>
<?php $component = $__componentOriginal79c47ff43af68680f280e55afc88fe59; ?>
<?php unset($__componentOriginal79c47ff43af68680f280e55afc88fe59); ?>
<?php endif; ?>
                                </div>

                            </div>

                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6eb288a80e68f6f6b1755bcc863df159)): ?>
<?php $attributes = $__attributesOriginal6eb288a80e68f6f6b1755bcc863df159; ?>
<?php unset($__attributesOriginal6eb288a80e68f6f6b1755bcc863df159); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6eb288a80e68f6f6b1755bcc863df159)): ?>
<?php $component = $__componentOriginal6eb288a80e68f6f6b1755bcc863df159; ?>
<?php unset($__componentOriginal6eb288a80e68f6f6b1755bcc863df159); ?>
<?php endif; ?>
                </div>
            </form>


        </div>
    </div>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/taskmanager/task/show.blade.php ENDPATH**/ ?>