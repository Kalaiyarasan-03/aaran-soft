<?php if (isset($component)) { $__componentOriginal3231dea9f29c0262402b06b193353b6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3231dea9f29c0262402b06b193353b6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.base.li-menuitem','data' => ['routes' => 'cashbooks','label' => 'Cash Book']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.base.li-menuitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['routes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('cashbooks'),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Cash Book')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3231dea9f29c0262402b06b193353b6b)): ?>
<?php $attributes = $__attributesOriginal3231dea9f29c0262402b06b193353b6b; ?>
<?php unset($__attributesOriginal3231dea9f29c0262402b06b193353b6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3231dea9f29c0262402b06b193353b6b)): ?>
<?php $component = $__componentOriginal3231dea9f29c0262402b06b193353b6b; ?>
<?php unset($__componentOriginal3231dea9f29c0262402b06b193353b6b); ?>
<?php endif; ?>

<?php /**PATH D:\web-app\aaran-soft\resources\views/components/menu/items/accounts-menu.blade.php ENDPATH**/ ?>