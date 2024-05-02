<div>
    <div class="loading w-full flex justify-center h-auto object-cover">
        <div class="w-full rounded h-full">

            <?php if (isset($component)) { $__componentOriginal5aa7f71bb3a8f847acd56d4f89e804af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5aa7f71bb3a8f847acd56d4f89e804af = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.webs.home.hero','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('webs.home.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5aa7f71bb3a8f847acd56d4f89e804af)): ?>
<?php $attributes = $__attributesOriginal5aa7f71bb3a8f847acd56d4f89e804af; ?>
<?php unset($__attributesOriginal5aa7f71bb3a8f847acd56d4f89e804af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5aa7f71bb3a8f847acd56d4f89e804af)): ?>
<?php $component = $__componentOriginal5aa7f71bb3a8f847acd56d4f89e804af; ?>
<?php unset($__componentOriginal5aa7f71bb3a8f847acd56d4f89e804af); ?>
<?php endif; ?>
















        </div>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
        </script>








        <script>
            new WOW().init();
        </script>
    </div>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/webs/home/index.blade.php ENDPATH**/ ?>