<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id'
]); ?>
<?php foreach (array_filter(([
    'id'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form wire:submit.prevent="save">
    <div class="w-full">
        <?php if (isset($component)) { $__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.modal','data' => ['maxWidth' => '6xl','wire:model.defer' => 'showEditModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['maxWidth' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('6xl'),'wire:model.defer' => 'showEditModal']); ?>
            <div class="px-6  pt-4">
                <div class="text-lg">
                    <?php echo e($id === "" ? 'New Entry' : 'Edit Entry'); ?>

                </div>
                <?php if (isset($component)) { $__componentOriginald02f4e077c8d394be64c99cbb1834d3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald02f4e077c8d394be64c99cbb1834d3e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.section-border','data' => ['class' => 'py-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'py-2']); ?>
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
                <?php echo e($slot); ?>

                <div class="mb-1">&nbsp;</div>
            </div>
            <div class="px-6 py-3 bg-gray-100 text-right">
                <div class="w-full flex justify-between gap-3">
                    <div class="py-2">
                        <label for="active_id" class="inline-flex relative items-center cursor-pointer">
                            <input type="checkbox" id="active_id" class="sr-only peer"
                                   wire:model="active_id">
                            <div
                                class="w-10 h-5 bg-gray-200 rounded-full peer peer-focus:ring-2
                                        peer-focus:ring-blue-300
                                         peer-checked:after:translate-x-full peer-checked:after:border-white
                                         after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300
                                         after:border after:rounded-full after:h-4 after:w-4 after:transition-all
                                         peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900">Active</span>
                        </label>
                    </div>
                    <div class="flex gap-3">
                        <?php if (isset($component)) { $__componentOriginal3b509dc3e89384e478121caad4800432 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b509dc3e89384e478121caad4800432 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.cancel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.cancel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b509dc3e89384e478121caad4800432)): ?>
<?php $attributes = $__attributesOriginal3b509dc3e89384e478121caad4800432; ?>
<?php unset($__attributesOriginal3b509dc3e89384e478121caad4800432); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b509dc3e89384e478121caad4800432)): ?>
<?php $component = $__componentOriginal3b509dc3e89384e478121caad4800432; ?>
<?php unset($__componentOriginal3b509dc3e89384e478121caad4800432); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal76a5a562ecfea092c39dd7341f8e47da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76a5a562ecfea092c39dd7341f8e47da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.save','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.save'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76a5a562ecfea092c39dd7341f8e47da)): ?>
<?php $attributes = $__attributesOriginal76a5a562ecfea092c39dd7341f8e47da; ?>
<?php unset($__attributesOriginal76a5a562ecfea092c39dd7341f8e47da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76a5a562ecfea092c39dd7341f8e47da)): ?>
<?php $component = $__componentOriginal76a5a562ecfea092c39dd7341f8e47da; ?>
<?php unset($__componentOriginal76a5a562ecfea092c39dd7341f8e47da); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d)): ?>
<?php $attributes = $__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d; ?>
<?php unset($__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d)): ?>
<?php $component = $__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d; ?>
<?php unset($__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d); ?>
<?php endif; ?>
    </div>
</form>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/forms/create-new.blade.php ENDPATH**/ ?>