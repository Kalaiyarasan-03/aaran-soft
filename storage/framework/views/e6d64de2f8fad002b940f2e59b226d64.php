<button type="submit" wire:click.prevent="save"
    <?php echo e($attributes->merge(['class' => '
                                inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest
                                transition-all shadow-xs
                                bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b dark:shadow-blue-900
                                shadow-blue-200 hover:shadow-2xl hover:shadow-blue-200 hover:-tranneutral-y-px'])); ?>

>
    <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'save','class' => 'h-5 w-auto block px-1.5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('save'),'class' => 'h-5 w-auto block px-1.5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $attributes = $__attributesOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__attributesOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $component = $__componentOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__componentOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
    SAVE
</button>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/button/save.blade.php ENDPATH**/ ?>