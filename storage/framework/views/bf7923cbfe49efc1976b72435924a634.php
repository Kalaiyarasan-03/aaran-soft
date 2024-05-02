<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'save'=>false,
    'back'=>false,
    'print'=>false,
    'active'=>false

]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'save'=>false,
    'back'=>false,
    'print'=>false,
    'active'=>false

]); ?>
<?php foreach (array_filter(([
    'save'=>false,
    'back'=>false,
    'print'=>false,
    'active'=>false

]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="px-8 border border-gray-400 border-t-0 bg-gray-100 rounded-b-md shadow-lg w-full">
    <div class="flex flex-row justify-between py-4">
        <div class="flex gap-3">
            <!--[if BLOCK]><![endif]--><?php if($save): ?>

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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if($back): ?>

                <?php if (isset($component)) { $__componentOriginala0a709ee50522d2384532798ae8bd5ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a709ee50522d2384532798ae8bd5ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.back','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a709ee50522d2384532798ae8bd5ac)): ?>
<?php $attributes = $__attributesOriginala0a709ee50522d2384532798ae8bd5ac; ?>
<?php unset($__attributesOriginala0a709ee50522d2384532798ae8bd5ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a709ee50522d2384532798ae8bd5ac)): ?>
<?php $component = $__componentOriginala0a709ee50522d2384532798ae8bd5ac; ?>
<?php unset($__componentOriginala0a709ee50522d2384532798ae8bd5ac); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div>
            <!--[if BLOCK]><![endif]--><?php if($print): ?>
                <?php if (isset($component)) { $__componentOriginal7d06eb147f2f5d27afa5db8c4763c07c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d06eb147f2f5d27afa5db8c4763c07c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.print','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.print'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d06eb147f2f5d27afa5db8c4763c07c)): ?>
<?php $attributes = $__attributesOriginal7d06eb147f2f5d27afa5db8c4763c07c; ?>
<?php unset($__attributesOriginal7d06eb147f2f5d27afa5db8c4763c07c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d06eb147f2f5d27afa5db8c4763c07c)): ?>
<?php $component = $__componentOriginal7d06eb147f2f5d27afa5db8c4763c07c; ?>
<?php unset($__componentOriginal7d06eb147f2f5d27afa5db8c4763c07c); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div>
            <!--[if BLOCK]><![endif]--><?php if($active): ?>
                <?php if (isset($component)) { $__componentOriginal0a6155966f323138491148d1034aa85a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a6155966f323138491148d1034aa85a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.active','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.active'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a6155966f323138491148d1034aa85a)): ?>
<?php $attributes = $__attributesOriginal0a6155966f323138491148d1034aa85a; ?>
<?php unset($__attributesOriginal0a6155966f323138491148d1034aa85a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a6155966f323138491148d1034aa85a)): ?>
<?php $component = $__componentOriginal0a6155966f323138491148d1034aa85a; ?>
<?php unset($__componentOriginal0a6155966f323138491148d1034aa85a); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/forms/m-panel-bottom-button.blade.php ENDPATH**/ ?>