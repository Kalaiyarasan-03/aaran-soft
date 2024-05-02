<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'showFilters'=>false
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'showFilters'=>false
]); ?>
<?php foreach (array_filter(([
'showFilters'=>false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
    <!--[if BLOCK]><![endif]--><?php if($showFilters): ?>
        <div class="bg-zinc-200 p-4 rounded shadow-inner flex relative">
            <div class="w-1/2 pr-2 space-y-4">
                <?php if (isset($component)) { $__componentOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.group','data' => ['inline' => true,'for' => 'activeRecord','label' => 'Active']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['inline' => true,'for' => 'activeRecord','label' => 'Active']); ?>
                    <?php if (isset($component)) { $__componentOriginalec0f377b60f1e2ad7b17ff3295f4376d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec0f377b60f1e2ad7b17ff3295f4376d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.select','data' => ['wire:model.live' => 'activeRecord','id' => 'activeRecord']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'activeRecord','id' => 'activeRecord']); ?>
                        <option value="" disabled>Select...</option>
                        <option value="1">Active</option>
                        <option value="0">Not Active</option>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec0f377b60f1e2ad7b17ff3295f4376d)): ?>
<?php $attributes = $__attributesOriginalec0f377b60f1e2ad7b17ff3295f4376d; ?>
<?php unset($__attributesOriginalec0f377b60f1e2ad7b17ff3295f4376d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec0f377b60f1e2ad7b17ff3295f4376d)): ?>
<?php $component = $__componentOriginalec0f377b60f1e2ad7b17ff3295f4376d; ?>
<?php unset($__componentOriginalec0f377b60f1e2ad7b17ff3295f4376d); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d)): ?>
<?php $attributes = $__attributesOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d; ?>
<?php unset($__attributesOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d)): ?>
<?php $component = $__componentOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d; ?>
<?php unset($__componentOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d); ?>
<?php endif; ?>

                <div class="h-5">
                    &nbsp;
                </div>

            </div>

            <div class="w-1/2 pl-2 space-y-4">
                <?php if (isset($component)) { $__componentOriginal3cd6b0015a0c15f27307e605cb38a27a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cd6b0015a0c15f27307e605cb38a27a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.link','data' => ['wire:click' => 'resetFilters','class' => 'absolute right-0 bottom-0 p-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'resetFilters','class' => 'absolute right-0 bottom-0 p-4']); ?>Reset
                    Filters
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cd6b0015a0c15f27307e605cb38a27a)): ?>
<?php $attributes = $__attributesOriginal3cd6b0015a0c15f27307e605cb38a27a; ?>
<?php unset($__attributesOriginal3cd6b0015a0c15f27307e605cb38a27a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cd6b0015a0c15f27307e605cb38a27a)): ?>
<?php $component = $__componentOriginal3cd6b0015a0c15f27307e605cb38a27a; ?>
<?php unset($__componentOriginal3cd6b0015a0c15f27307e605cb38a27a); ?>
<?php endif; ?>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/input/advance-search.blade.php ENDPATH**/ ?>