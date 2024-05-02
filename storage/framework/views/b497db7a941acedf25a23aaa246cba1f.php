<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'showModel' =>false,
    'width' => 'w-1/3',
    'height'=> 'h-80'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'showModel' =>false,
    'width' => 'w-1/3',
    'height'=> 'h-80'
]); ?>
<?php foreach (array_filter(([
    'showModel' =>false,
    'width' => 'w-1/3',
    'height'=> 'h-80'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>
    <button wire:click="$set('showModel',true); "
            class="bg-green-500 w-full h-8 text-white">
        Not found , Want to create new
    </button>

    <!--[if BLOCK]><![endif]--><?php if($showModel): ?>
        <div x-data x-init="$refs.vname.focus()">

            <div wire:click="clearAll"
                 class="fixed inset-0 bg-gray-900 bg-opacity-90 cursor-pointer"></div>

            <div
                    class="bg-white shadow-md m-auto rounded-md fixed inset-0 inline-block overflow-y-auto <?php echo e($width); ?> <?php echo e($height); ?>">

                <div class="flex flex-col h-full justify-between">

                    <header class="p-2">
                        <h3 class="font-bold text-lg border-b border-gray-400 text-gray-500 py-2">&nbsp;&nbsp;&nbsp;&nbsp;Create&nbsp;new</h3>
                    </header>

                    <main class="px-5 mb-2">
                        <?php echo e($slot); ?>

                    </main>

                    <footer class="flex justify-end px-2 py-4 mt-3 bg-gray-200 rounded-b-md gap-3">

                        <button
                                wire:click.prevent="clearAll"
                                class='w-36 bg-blue-600 hover:bg-blue-500  border-b-4 border-blue-700 hover:border-blue-700
                                   focus:outline-none text-white  uppercase font-bold shadow-md rounded-lg p-1'>
                            <div class="flex gap-3 justify-center">
                                <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'chevrons-left','class' => 'h-4 w-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'chevrons-left','class' => 'h-4 w-auto block']); ?>
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
                                <div class="pt-1.0">Back</div>
                            </div>
                        </button>

                        <button wire:click.prevent="save"
                                class='w-36 bg-green-600 hover:bg-green-500  border-b-4 border-green-700 hover:border-green-700
                                    focus:outline-none text-white  uppercase font-bold shadow-md rounded-lg p-1'>
                            <div class="flex gap-3  justify-center">
                                <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'save','class' => 'h-4 w-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'save','class' => 'h-4 w-auto block']); ?>
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
                                <div class="pt-1.0">
                                    SAVE
                                </div>
                            </div>
                        </button>
                    </footer>
                </div>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/controls/lookup/model.blade.php ENDPATH**/ ?>