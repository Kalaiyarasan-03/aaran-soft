<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['id' => null, 'maxWidth' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['id' => null, 'maxWidth' => null]); ?>
<?php foreach (array_filter((['id' => null, 'maxWidth' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.modal','data' => ['id' => $id,'maxWidth' => $maxWidth,'attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'maxWidth' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($maxWidth),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
    <div class="px-6  pt-4">
        <div class="text-lg">
            <?php echo e($title); ?>

        </div>

        <div class="mt-1 overscroll-y-contain w-full">
            <?php echo e($content); ?>

        </div>
    </div>

    <div class="px-6 py-3 bg-gray-100 text-right">
        <?php echo e($footer); ?>

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
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/modal/dialog.blade.php ENDPATH**/ ?>