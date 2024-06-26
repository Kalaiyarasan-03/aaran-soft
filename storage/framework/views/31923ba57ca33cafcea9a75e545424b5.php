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
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-red-600" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>

            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg">
                    <?php echo e($title); ?>

                </h3>

                <div class="mt-2">
                    <?php echo e($content); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="px-6 py-4 bg-gray-100 text-right">
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
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/modal/confirmation.blade.php ENDPATH**/ ?>