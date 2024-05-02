<?php if (isset($component)) { $__componentOriginal154ca065331093e92b3c84266f13a4aa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal154ca065331093e92b3c84266f13a4aa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.base','data' => ['attributes' => $attributes->merge(['class' => 'text-white bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 border-indigo-600'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge(['class' => 'text-white bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 border-indigo-600']))]); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal154ca065331093e92b3c84266f13a4aa)): ?>
<?php $attributes = $__attributesOriginal154ca065331093e92b3c84266f13a4aa; ?>
<?php unset($__attributesOriginal154ca065331093e92b3c84266f13a4aa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal154ca065331093e92b3c84266f13a4aa)): ?>
<?php $component = $__componentOriginal154ca065331093e92b3c84266f13a4aa; ?>
<?php unset($__componentOriginal154ca065331093e92b3c84266f13a4aa); ?>
<?php endif; ?>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/button/secondary.blade.php ENDPATH**/ ?>