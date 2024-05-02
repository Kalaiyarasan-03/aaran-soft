<div class="relative w-full">
    <label>
        <input type="search" wire:model.live="searches"    wire:keydown.escape="$set('searches', '')"
               class="search-box"
               placeholder="type for Search...           escape to clear">
    </label>
    <div class="absolute top-0 left-0 inline-flex items-center p-2">
        <?php if (isset($component)) { $__componentOriginalf3c1efbd73123acdd386fcf945a3cc32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf3c1efbd73123acdd386fcf945a3cc32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.search-lens','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.search-lens'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf3c1efbd73123acdd386fcf945a3cc32)): ?>
<?php $attributes = $__attributesOriginalf3c1efbd73123acdd386fcf945a3cc32; ?>
<?php unset($__attributesOriginalf3c1efbd73123acdd386fcf945a3cc32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf3c1efbd73123acdd386fcf945a3cc32)): ?>
<?php $component = $__componentOriginalf3c1efbd73123acdd386fcf945a3cc32; ?>
<?php unset($__componentOriginalf3c1efbd73123acdd386fcf945a3cc32); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/input/search-box.blade.php ENDPATH**/ ?>