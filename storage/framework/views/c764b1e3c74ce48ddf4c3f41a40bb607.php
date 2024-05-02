<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id'=>null
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id'=>null
]); ?>
<?php foreach (array_filter(([
    'id'=>null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<td class='px-2 py-2 border border-gray-200 whitespace-no-wrap text-sm leading-2 text-gray-900'>
    <div class="w-full flex justify-center gap-3">
        <?php if (isset($component)) { $__componentOriginal18f8bbe41143780f52ea88032f66285f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18f8bbe41143780f52ea88032f66285f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.edit','data' => ['wire:click' => 'edit('.e($id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'edit('.e($id).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18f8bbe41143780f52ea88032f66285f)): ?>
<?php $attributes = $__attributesOriginal18f8bbe41143780f52ea88032f66285f; ?>
<?php unset($__attributesOriginal18f8bbe41143780f52ea88032f66285f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18f8bbe41143780f52ea88032f66285f)): ?>
<?php $component = $__componentOriginal18f8bbe41143780f52ea88032f66285f; ?>
<?php unset($__componentOriginal18f8bbe41143780f52ea88032f66285f); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal2f7ce0275334e77cd0ee30513f7af79e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f7ce0275334e77cd0ee30513f7af79e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.delete','data' => ['wire:click' => 'getDelete('.e($id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'getDelete('.e($id).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f7ce0275334e77cd0ee30513f7af79e)): ?>
<?php $attributes = $__attributesOriginal2f7ce0275334e77cd0ee30513f7af79e; ?>
<?php unset($__attributesOriginal2f7ce0275334e77cd0ee30513f7af79e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f7ce0275334e77cd0ee30513f7af79e)): ?>
<?php $component = $__componentOriginal2f7ce0275334e77cd0ee30513f7af79e; ?>
<?php unset($__componentOriginal2f7ce0275334e77cd0ee30513f7af79e); ?>
<?php endif; ?>
    </div>
</td>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/table/cell-action.blade.php ENDPATH**/ ?>