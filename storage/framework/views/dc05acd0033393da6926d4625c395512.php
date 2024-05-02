<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'showFilters'=>false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'showFilters'=>false,
]); ?>
<?php foreach (array_filter(([
'showFilters'=>false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="md:flex md:justify-between md:items-center">
    <div class="w-full h-20 md:w-2/4 md:items-center flex md:space-x-2">

        <?php if (isset($component)) { $__componentOriginal48172b913a8a86c362b6733702593fb9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48172b913a8a86c362b6733702593fb9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.search-box','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.search-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48172b913a8a86c362b6733702593fb9)): ?>
<?php $attributes = $__attributesOriginal48172b913a8a86c362b6733702593fb9; ?>
<?php unset($__attributesOriginal48172b913a8a86c362b6733702593fb9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48172b913a8a86c362b6733702593fb9)): ?>
<?php $component = $__componentOriginal48172b913a8a86c362b6733702593fb9; ?>
<?php unset($__componentOriginal48172b913a8a86c362b6733702593fb9); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala4ca387f5db5cfcd161ce68903cbb7d2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4ca387f5db5cfcd161ce68903cbb7d2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.toggle-filter','data' => ['showFilters' => $showFilters]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.toggle-filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['show-filters' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showFilters)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala4ca387f5db5cfcd161ce68903cbb7d2)): ?>
<?php $attributes = $__attributesOriginala4ca387f5db5cfcd161ce68903cbb7d2; ?>
<?php unset($__attributesOriginala4ca387f5db5cfcd161ce68903cbb7d2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala4ca387f5db5cfcd161ce68903cbb7d2)): ?>
<?php $component = $__componentOriginala4ca387f5db5cfcd161ce68903cbb7d2; ?>
<?php unset($__componentOriginala4ca387f5db5cfcd161ce68903cbb7d2); ?>
<?php endif; ?>

    </div>

    <div class="flex justify-between items-center  md:space-x-2 md:flex md:items-center">
        <?php if (isset($component)) { $__componentOriginal42224b5b1834d44e39b6d57b712399f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42224b5b1834d44e39b6d57b712399f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.per-page','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.per-page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42224b5b1834d44e39b6d57b712399f3)): ?>
<?php $attributes = $__attributesOriginal42224b5b1834d44e39b6d57b712399f3; ?>
<?php unset($__attributesOriginal42224b5b1834d44e39b6d57b712399f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42224b5b1834d44e39b6d57b712399f3)): ?>
<?php $component = $__componentOriginal42224b5b1834d44e39b6d57b712399f3; ?>
<?php unset($__componentOriginal42224b5b1834d44e39b6d57b712399f3); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal2ddbcc2abbd70977e6b075de7cbd13eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbcc2abbd70977e6b075de7cbd13eb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.new','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.new'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbcc2abbd70977e6b075de7cbd13eb)): ?>
<?php $attributes = $__attributesOriginal2ddbcc2abbd70977e6b075de7cbd13eb; ?>
<?php unset($__attributesOriginal2ddbcc2abbd70977e6b075de7cbd13eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbcc2abbd70977e6b075de7cbd13eb)): ?>
<?php $component = $__componentOriginal2ddbcc2abbd70977e6b075de7cbd13eb; ?>
<?php unset($__componentOriginal2ddbcc2abbd70977e6b075de7cbd13eb); ?>
<?php endif; ?>
    </div>
</div>

<?php /**PATH D:\web-app\aaran-soft\resources\views/components/forms/top-controls-filter.blade.php ENDPATH**/ ?>