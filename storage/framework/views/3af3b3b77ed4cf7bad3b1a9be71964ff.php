<div>
    <?php if (isset($component)) { $__componentOriginal208b24aac446d582cb38fbe7f5a3e14e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal208b24aac446d582cb38fbe7f5a3e14e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.controls.lookup.model','data' => ['showModel' => $showModel]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('controls.lookup.model'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['show-model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showModel)]); ?>
        <?php if (isset($component)) { $__componentOriginal7d16718e6657ecb56d37e0c011ee97fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d16718e6657ecb56d37e0c011ee97fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.lookup-text','data' => ['wire:model.live' => 'vname','xRef' => 'vname','label' => 'City','name' => 'vname']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.lookup-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'vname','x-ref' => 'vname','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('City'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('vname')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d16718e6657ecb56d37e0c011ee97fc)): ?>
<?php $attributes = $__attributesOriginal7d16718e6657ecb56d37e0c011ee97fc; ?>
<?php unset($__attributesOriginal7d16718e6657ecb56d37e0c011ee97fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d16718e6657ecb56d37e0c011ee97fc)): ?>
<?php $component = $__componentOriginal7d16718e6657ecb56d37e0c011ee97fc; ?>
<?php unset($__componentOriginal7d16718e6657ecb56d37e0c011ee97fc); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal208b24aac446d582cb38fbe7f5a3e14e)): ?>
<?php $attributes = $__attributesOriginal208b24aac446d582cb38fbe7f5a3e14e; ?>
<?php unset($__attributesOriginal208b24aac446d582cb38fbe7f5a3e14e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal208b24aac446d582cb38fbe7f5a3e14e)): ?>
<?php $component = $__componentOriginal208b24aac446d582cb38fbe7f5a3e14e; ?>
<?php unset($__componentOriginal208b24aac446d582cb38fbe7f5a3e14e); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/controls/model/common/city-model.blade.php ENDPATH**/ ?>