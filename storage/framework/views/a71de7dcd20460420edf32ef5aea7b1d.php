<div>
    <div>
         <?php $__env->slot('header', null, []); ?> Software Details <?php $__env->endSlot(); ?>

        <?php if (isset($component)) { $__componentOriginal1d2ce7aa24e0009b85b1e2a9af4c2464 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1d2ce7aa24e0009b85b1e2a9af4c2464 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.m-panel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.m-panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

            <!-- Top Controls --------------------------------------------------------------------------------------------->
            <?php if (isset($component)) { $__componentOriginal051cba49a8cccdf60bdb05204f441230 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal051cba49a8cccdf60bdb05204f441230 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.top-controls','data' => ['showFilters' => $showFilters]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.top-controls'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['show-filters' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showFilters)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal051cba49a8cccdf60bdb05204f441230)): ?>
<?php $attributes = $__attributesOriginal051cba49a8cccdf60bdb05204f441230; ?>
<?php unset($__attributesOriginal051cba49a8cccdf60bdb05204f441230); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal051cba49a8cccdf60bdb05204f441230)): ?>
<?php $component = $__componentOriginal051cba49a8cccdf60bdb05204f441230; ?>
<?php unset($__componentOriginal051cba49a8cccdf60bdb05204f441230); ?>
<?php endif; ?>

            <!-- Header --------------------------------------------------------------------------------------------------->
            <?php if (isset($component)) { $__componentOriginalc8787418e3497dceb2e03210afaa9bf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8787418e3497dceb2e03210afaa9bf0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

                <!-- Table Header --------------------------------------------------------------------------------------------->

                 <?php $__env->slot('table_header', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal0fde9e85184aeda8a711a8e246d03a19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fde9e85184aeda8a711a8e246d03a19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-serial','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-serial'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fde9e85184aeda8a711a8e246d03a19)): ?>
<?php $attributes = $__attributesOriginal0fde9e85184aeda8a711a8e246d03a19; ?>
<?php unset($__attributesOriginal0fde9e85184aeda8a711a8e246d03a19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fde9e85184aeda8a711a8e246d03a19)): ?>
<?php $component = $__componentOriginal0fde9e85184aeda8a711a8e246d03a19; ?>
<?php unset($__componentOriginal0fde9e85184aeda8a711a8e246d03a19); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Domain <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Database <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Git <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Copy Build Folder <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Copy Env <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Db Migrate <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Storage Link <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>User Created <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Set User Tenant Id <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Installed on <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Soft Version <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>Db Version <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal46cc76887b580234be3f1f79d13452da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal46cc76887b580234be3f1f79d13452da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-action','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal46cc76887b580234be3f1f79d13452da)): ?>
<?php $attributes = $__attributesOriginal46cc76887b580234be3f1f79d13452da; ?>
<?php unset($__attributesOriginal46cc76887b580234be3f1f79d13452da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal46cc76887b580234be3f1f79d13452da)): ?>
<?php $component = $__componentOriginal46cc76887b580234be3f1f79d13452da; ?>
<?php unset($__componentOriginal46cc76887b580234be3f1f79d13452da); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>

                <!-- Table Body ------------------------------------------------------------------------------------------->
                 <?php $__env->slot('table_body', null, []); ?> 
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>  $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <?php if (isset($component)) { $__componentOriginalce497eb0b465689d7cb385400a2cd821 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce497eb0b465689d7cb385400a2cd821 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <?php echo e($index + 1); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <?php echo e($row->sub_domain); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <?php echo e($row->database); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>


                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <?php echo e($row->git); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>


                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <label>
                                    <input type="checkbox" onclick="return false"
                                           <?php if($row->copy_build_folder): ?> checked <?php endif; ?>
                                           class="h-4 w-4 bg-gray-100 border-gray-300 rounded focus:animate-none focus:outline-none
                                                   <?php echo e($row->copy_build_folder ? 'text-green-400 focus:ring-green-500': 'focus:ring-gray-500 text-gray-700'); ?>">
                                </label>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <label>
                                    <input type="checkbox" onclick="return false"
                                           <?php if($row->copy_env): ?> checked <?php endif; ?>
                                           class="h-4 w-4 bg-gray-100 border-gray-300 rounded focus:animate-none focus:outline-none
                                                   <?php echo e($row->copy_env ? 'text-green-400 focus:ring-green-500': 'focus:ring-gray-500 text-gray-700'); ?>">
                                </label>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <label>
                                    <input type="checkbox" onclick="return false"
                                           <?php if($row->db_migrate): ?> checked <?php endif; ?>
                                           class="h-4 w-4 bg-gray-100 border-gray-300 rounded focus:animate-none focus:outline-none
                                                   <?php echo e($row->db_migrate ? 'text-green-400 focus:ring-green-500': 'focus:ring-gray-500 text-gray-700'); ?>">
                                </label>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <label>
                                    <input type="checkbox" onclick="return false"
                                           <?php if($row->storage_link): ?> checked <?php endif; ?>
                                           class="h-4 w-4 bg-gray-100 border-gray-300 rounded focus:animate-none focus:outline-none
                                                   <?php echo e($row->storage_link ? 'text-green-400 focus:ring-green-500': 'focus:ring-gray-500 text-gray-700'); ?>">
                                </label>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <label>
                                    <input type="checkbox" onclick="return false"
                                           <?php if($row->user_created): ?> checked <?php endif; ?>
                                           class="h-4 w-4 bg-gray-100 border-gray-300 rounded focus:animate-none focus:outline-none
                                                   <?php echo e($row->user_created ? 'text-green-400 focus:ring-green-500': 'focus:ring-gray-500 text-gray-700'); ?>">
                                </label>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>


                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <label>
                                    <input type="checkbox" onclick="return false"
                                           <?php if($row->user_tenant_id): ?> checked <?php endif; ?>
                                           class="h-4 w-4 bg-gray-100 border-gray-300 rounded focus:animate-none focus:outline-none
                                                   <?php echo e($row->user_tenant_id ? 'text-green-400 focus:ring-green-500': 'focus:ring-gray-500 text-gray-700'); ?>">
                                </label>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <?php echo e(date('d-m-Y', strtotime($row->installed_on))); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <?php echo e($row->soft_version); ?>

                                
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>
                                <?php echo e($row->db_version); ?>

                                
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $attributes = $__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__attributesOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff)): ?>
<?php $component = $__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff; ?>
<?php unset($__componentOriginalc14e8e77acb701f9aa0eb7e53e3644ff); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal6a4946a29986cd9b1b6a9c850fcca85b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a4946a29986cd9b1b6a9c850fcca85b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-action','data' => ['id' => ''.e($row->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e($row->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a4946a29986cd9b1b6a9c850fcca85b)): ?>
<?php $attributes = $__attributesOriginal6a4946a29986cd9b1b6a9c850fcca85b; ?>
<?php unset($__attributesOriginal6a4946a29986cd9b1b6a9c850fcca85b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a4946a29986cd9b1b6a9c850fcca85b)): ?>
<?php $component = $__componentOriginal6a4946a29986cd9b1b6a9c850fcca85b; ?>
<?php unset($__componentOriginal6a4946a29986cd9b1b6a9c850fcca85b); ?>
<?php endif; ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce497eb0b465689d7cb385400a2cd821)): ?>
<?php $attributes = $__attributesOriginalce497eb0b465689d7cb385400a2cd821; ?>
<?php unset($__attributesOriginalce497eb0b465689d7cb385400a2cd821); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce497eb0b465689d7cb385400a2cd821)): ?>
<?php $component = $__componentOriginalce497eb0b465689d7cb385400a2cd821; ?>
<?php unset($__componentOriginalce497eb0b465689d7cb385400a2cd821); ?>
<?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php if (isset($component)) { $__componentOriginal2d7ce9af332b48c30415ac50055c18a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d7ce9af332b48c30415ac50055c18a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.empty','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.empty'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d7ce9af332b48c30415ac50055c18a5)): ?>
<?php $attributes = $__attributesOriginal2d7ce9af332b48c30415ac50055c18a5; ?>
<?php unset($__attributesOriginal2d7ce9af332b48c30415ac50055c18a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d7ce9af332b48c30415ac50055c18a5)): ?>
<?php $component = $__componentOriginal2d7ce9af332b48c30415ac50055c18a5; ?>
<?php unset($__componentOriginal2d7ce9af332b48c30415ac50055c18a5); ?>
<?php endif; ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                 <?php $__env->endSlot(); ?>

                <!-- Pagination ------------------------------------------------------------------------------------------->
                 <?php $__env->slot('table_pagination', null, []); ?> 
                    <?php echo e($list->links()); ?>

                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8787418e3497dceb2e03210afaa9bf0)): ?>
<?php $attributes = $__attributesOriginalc8787418e3497dceb2e03210afaa9bf0; ?>
<?php unset($__attributesOriginalc8787418e3497dceb2e03210afaa9bf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8787418e3497dceb2e03210afaa9bf0)): ?>
<?php $component = $__componentOriginalc8787418e3497dceb2e03210afaa9bf0; ?>
<?php unset($__componentOriginalc8787418e3497dceb2e03210afaa9bf0); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal2b3245a5746dec4123f46f887cebc745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b3245a5746dec4123f46f887cebc745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal.delete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b3245a5746dec4123f46f887cebc745)): ?>
<?php $attributes = $__attributesOriginal2b3245a5746dec4123f46f887cebc745; ?>
<?php unset($__attributesOriginal2b3245a5746dec4123f46f887cebc745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b3245a5746dec4123f46f887cebc745)): ?>
<?php $component = $__componentOriginal2b3245a5746dec4123f46f887cebc745; ?>
<?php unset($__componentOriginal2b3245a5746dec4123f46f887cebc745); ?>
<?php endif; ?>

            <!-- Create/ Edit Popup --------------------------------------------------------------------------------------->
            <?php if (isset($component)) { $__componentOriginal94c248cb8d22c1927d97853a98caabdf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94c248cb8d22c1927d97853a98caabdf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.create-new','data' => ['id' => $vid]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.create-new'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vid)]); ?>
                <div class="lg:flex w-full">
                    <div class="w-full">
                        <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'sub_domain','label' => 'Sub Domain']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'sub_domain','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Sub Domain')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $attributes = $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $component = $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'database','label' => 'Database']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'database','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Database')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $attributes = $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $component = $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'git','label' => 'Git']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'git','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Git')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $attributes = $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91)): ?>
<?php $component = $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91; ?>
<?php unset($__componentOriginal125b9b8674aa2979b8bad8bd582d1c91); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal66700085a0699ec9232be8d3eb1f9a69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.checkbox','data' => ['wire:model' => 'copy_build_folder','label' => 'Copy Build Folder']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'copy_build_folder','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Copy Build Folder')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $attributes = $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $component = $__componentOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal66700085a0699ec9232be8d3eb1f9a69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.checkbox','data' => ['wire:model' => 'copy_env','label' => 'Copy Env']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'copy_env','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Copy Env')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $attributes = $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $component = $__componentOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal66700085a0699ec9232be8d3eb1f9a69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.checkbox','data' => ['wire:model' => 'db_migrate','label' => 'Db Migrate']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'db_migrate','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Db Migrate')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $attributes = $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $component = $__componentOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
                    </div>
                    <div class="w-full pl-5">
                        <?php if (isset($component)) { $__componentOriginal66700085a0699ec9232be8d3eb1f9a69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.checkbox','data' => ['wire:model' => 'storage_link','label' => 'Storage Link']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'storage_link','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Storage Link')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $attributes = $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $component = $__componentOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal66700085a0699ec9232be8d3eb1f9a69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.checkbox','data' => ['wire:model' => 'user_created','label' => 'User Created']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'user_created','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('User Created')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $attributes = $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $component = $__componentOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal66700085a0699ec9232be8d3eb1f9a69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.checkbox','data' => ['wire:model' => 'user_tenant_id','label' => 'User Tenant Id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'user_tenant_id','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('User Tenant Id')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $attributes = $__attributesOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__attributesOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69)): ?>
<?php $component = $__componentOriginal66700085a0699ec9232be8d3eb1f9a69; ?>
<?php unset($__componentOriginal66700085a0699ec9232be8d3eb1f9a69); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-date','data' => ['wire:model' => 'installed_on','label' => 'Installed on']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'installed_on','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Installed on')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff)): ?>
<?php $attributes = $__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff; ?>
<?php unset($__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff)): ?>
<?php $component = $__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff; ?>
<?php unset($__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'soft_version','label' => 'Soft Version']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'soft_version','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Soft Version')]); ?>
                            <option class="text-gray-400"> choose ..</option>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\Version::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="text-gray-700" value="<?php echo e($v->name); ?>"><?php echo e($v->value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $attributes = $__attributesOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__attributesOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $component = $__componentOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__componentOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'db_version','label' => 'DB Version']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'db_version','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('DB Version')]); ?>
                            <option class="text-gray-400"> choose ..</option>
                            <?php $__currentLoopData = \App\Enums\Version::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $db): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="text-gray-700" value="<?php echo e($db->name); ?>"><?php echo e($db->value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $attributes = $__attributesOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__attributesOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $component = $__componentOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__componentOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'verify','label' => 'Verify by']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'verify','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Verify by')]); ?>
                            <option class="text-gray-400"> choose ..</option>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Models\User::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="text-gray-700" value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $attributes = $__attributesOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__attributesOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc30373af7a89be2e0ff287538918c46b)): ?>
<?php $component = $__componentOriginalc30373af7a89be2e0ff287538918c46b; ?>
<?php unset($__componentOriginalc30373af7a89be2e0ff287538918c46b); ?>
<?php endif; ?>


                    </div>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94c248cb8d22c1927d97853a98caabdf)): ?>
<?php $attributes = $__attributesOriginal94c248cb8d22c1927d97853a98caabdf; ?>
<?php unset($__attributesOriginal94c248cb8d22c1927d97853a98caabdf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94c248cb8d22c1927d97853a98caabdf)): ?>
<?php $component = $__componentOriginal94c248cb8d22c1927d97853a98caabdf; ?>
<?php unset($__componentOriginal94c248cb8d22c1927d97853a98caabdf); ?>
<?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1d2ce7aa24e0009b85b1e2a9af4c2464)): ?>
<?php $attributes = $__attributesOriginal1d2ce7aa24e0009b85b1e2a9af4c2464; ?>
<?php unset($__attributesOriginal1d2ce7aa24e0009b85b1e2a9af4c2464); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d2ce7aa24e0009b85b1e2a9af4c2464)): ?>
<?php $component = $__componentOriginal1d2ce7aa24e0009b85b1e2a9af4c2464; ?>
<?php unset($__componentOriginal1d2ce7aa24e0009b85b1e2a9af4c2464); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/developer/installation/software-details.blade.php ENDPATH**/ ?>