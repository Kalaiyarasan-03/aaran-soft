<!--  2 - Task -->
<li class="flex align-center flex-col cursor-pointer">

    <div
            @click="selected !== 2 ? selected = 2 : selected = null"
            class="relative flex flex-row justify-between items-center h-11 focus:outline-none hover:bg-gray-700
                                text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-3">

                        <span class="inline-flex justify-center items-center ml-4">
                            <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'grid','class' => 'w-5 h-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('grid'),'class' => 'w-5 h-auto block']); ?>
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
                             <?php if (isset($component)) { $__componentOriginalb49a46a4596a9d9724bcd49347066b11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb49a46a4596a9d9724bcd49347066b11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Task Manager <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb49a46a4596a9d9724bcd49347066b11)): ?>
<?php $attributes = $__attributesOriginalb49a46a4596a9d9724bcd49347066b11; ?>
<?php unset($__attributesOriginalb49a46a4596a9d9724bcd49347066b11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb49a46a4596a9d9724bcd49347066b11)): ?>
<?php $component = $__componentOriginalb49a46a4596a9d9724bcd49347066b11; ?>
<?php unset($__componentOriginalb49a46a4596a9d9724bcd49347066b11); ?>
<?php endif; ?>
                        </span>

        <span class="inline-flex justify-center items-center">
                        <svg fill="currentColor" viewBox="0 0 20 20"
                             :class="{'rotate-0': selected ==null, 'rotate-180': selected === 2}"
                             class="inline w-6 h-6 float-right transition-transform duration-500 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg></span>


    </div>

    <div x-show="selected === 2" class="p-1 flex flex-col">

        <ul class="grid-cols-1 grid bg-gray-800">

            <?php echo $__env->make('components.menu.items.task-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <li class="bg-gray-900 mt-0.5"></li>
        </ul>
    </div>
</li>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/menu/sub/task.blade.php ENDPATH**/ ?>