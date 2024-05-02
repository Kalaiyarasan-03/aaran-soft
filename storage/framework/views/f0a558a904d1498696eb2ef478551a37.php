<div class="relative h-72">
    <div class="border border-gray-300 max-w-screen-md rounded-t-md  overflow-scroll shadow-lg bg-white h-full border-b-0">

        <div>
            <div class="flex items-center gap-3 p-2 border-b border-gray-300">
                <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'clipboard-document-list','class' => 'block h-8 w-auto text-blue-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('clipboard-document-list'),'class' => 'block h-8 w-auto text-blue-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $attributes = $__attributesOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__attributesOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $component = $__componentOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__componentOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
                <span class="text-xl font-semibold tracking-wider text-zinc-600">To Do List</span>
            </div>

            <div class="flex flex-shrink-0 m-3 flex-col">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="flex flex-row justify-between gap-3">

                        <div class="flex gap-3 w-full">
                            <label>
                                <input wire:click="isChecked(<?php echo e($row->id); ?>)" type="checkbox"
                                       <?php if($row->completed): ?> checked <?php endif; ?>
                                       class="h-4 w-4 bg-gray-100 border-gray-300 rounded focus:ring-2 transition duration-300 ease-in-out
                                                   <?php echo e($row->completed ? 'text-green-400 focus:ring-green-500': 'focus:ring-gray-500 text-gray-700'); ?>">
                            </label>

                            <!--[if BLOCK]><![endif]--><?php if($row->vname === $ename): ?>
                                <label class="flex flex-row w-full">
                                    <input class="w-10 purple-textbox" wire:change.prevent="updateTodo(<?php echo e($row->id); ?>)"
                                           wire:model="slno">
                                    <input class="purple-textbox w-full" wire:change.prevent="updateTodo(<?php echo e($row->id); ?>)"
                                           wire:model="ename">
                                </label>
                            <?php else: ?>
                                <label
                                    class="font-medium <?php echo e($row->completed ? 'line-through text-green-500': 'text-gray-700'); ?>">
                                    <?php echo e($row->slno); ?>&nbsp;.&nbsp;&nbsp;&nbsp;<?php echo e($row->vname); ?>

                                </label>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]--><?php if($editmode): ?>
                                <label>
                                    <input wire:model="vname">
                                </label>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                        </div>

                        <div class="flex-shrink-0 text-[0.5rem] pt-1 text-zinc-400">
                            <?php echo e(\Illuminate\Support\Carbon::parse($row->vdate)->diffForHumans()); ?>

                        </div>

                        <div class="flex justify-center gap-2">

                            <button wire:click.prevent="markAsPublic('<?php echo e($row->id); ?>')">

                                <!--[if BLOCK]><![endif]--><?php if($row->subjective): ?>
                                    <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'eye','class' => 'text-blue-500 hover:text-gray-500 h-5 w-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('eye'),'class' => 'text-blue-500 hover:text-gray-500 h-5 w-auto block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $attributes = $__attributesOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__attributesOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $component = $__componentOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__componentOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'eye-slash','class' => 'text-gray-300 hover:text-blue-500 h-5 w-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('eye-slash'),'class' => 'text-gray-300 hover:text-blue-500 h-5 w-auto block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $attributes = $__attributesOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__attributesOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $component = $__componentOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__componentOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </button>

                            <button wire:click.prevent="edit('<?php echo e($row->vname); ?>')">

                                <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'pencil','class' => 'text-gray-300 hover:text-blue-500 h-4 w-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('pencil'),'class' => 'text-gray-300 hover:text-blue-500 h-4 w-auto block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $attributes = $__attributesOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__attributesOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $component = $__componentOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__componentOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
                            </button>

                            <button wire:click="getDelete(<?php echo e($row->id); ?>)">
                                <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'trash','class' => 'text-gray-300 hover:text-red-600 h-5 w-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('trash'),'class' => 'text-gray-300 hover:text-red-600 h-5 w-auto block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $attributes = $__attributesOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__attributesOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $component = $__componentOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__componentOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
                            </button>
                        </div>
                    </div>
                    <?php if (isset($component)) { $__componentOriginald02f4e077c8d394be64c99cbb1834d3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald02f4e077c8d394be64c99cbb1834d3e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.section-border','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald02f4e077c8d394be64c99cbb1834d3e)): ?>
<?php $attributes = $__attributesOriginald02f4e077c8d394be64c99cbb1834d3e; ?>
<?php unset($__attributesOriginald02f4e077c8d394be64c99cbb1834d3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald02f4e077c8d394be64c99cbb1834d3e)): ?>
<?php $component = $__componentOriginald02f4e077c8d394be64c99cbb1834d3e; ?>
<?php unset($__componentOriginald02f4e077c8d394be64c99cbb1834d3e); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
    <div class=" border border-gray-300 max-w-screen-md rounded-b-md shadow-lg">
        <label>
            <input type="text" wire:model="vname" wire:change="saveTodo" placeholder="Ink your ideas..."
                   class="border-transparent appearance-none border ring-1 ring-gray-200
                                  border-gray-200 bg-gray-100 py-2 px-3 text-zinc-800 font-semibold
                                  placeholder-gray-400 text-base focus:outline-none
                                  focus:ring-1 focus:ring-gray-300 focus:border-transparent w-full rounded-b-md">
        </label>
    </div>
</div>

<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/taskmanager/todos/index.blade.php ENDPATH**/ ?>