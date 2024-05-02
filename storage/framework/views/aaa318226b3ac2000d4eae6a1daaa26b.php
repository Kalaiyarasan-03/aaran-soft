<?php if (isset($component)) { $__componentOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f3d4c0d4af7bf8e6f9db4822e3fcd7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.group','data' => ['borderless' => true,'paddingless' => true,'for' => 'perPage','label' => 'Per Page']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['borderless' => true,'paddingless' => true,'for' => 'perPage','label' => 'Per Page']); ?>
    <label for="perPage">&nbsp;</label>
    <select wire:model.live="perPage" id="perPage" class="w-20 md:w-20 purple-textbox" >
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </select>
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
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/forms/per-page.blade.php ENDPATH**/ ?>