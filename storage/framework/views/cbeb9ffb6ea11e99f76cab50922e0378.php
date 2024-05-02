<div>
     <?php $__env->slot('header', null, []); ?> Style Details <?php $__env->endSlot(); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.table','data' => ['list' => $list]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['list' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($list)]); ?>
             <?php $__env->slot('table_header', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal0fde9e85184aeda8a711a8e246d03a19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fde9e85184aeda8a711a8e246d03a19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-serial','data' => ['wire:click.prevent' => 'sortBy(\'vname\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-serial'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'vname\')']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['wire:click.prevent' => 'sortBy(\'vname\')','center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'vname\')','center' => true]); ?>Style Name <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['wire:click.prevent' => 'sortBy(\'vname\')','center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'vname\')','center' => true]); ?>Description <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e($row->vname); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e($row->desc); ?>

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

        <?php if (isset($component)) { $__componentOriginalda074efadb5da906410cf6de45ef064e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda074efadb5da906410cf6de45ef064e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.create','data' => ['id' => $vid]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vid)]); ?>
            <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'vname','label' => 'style Name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'vname','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('style Name')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'desc','label' => 'Description']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'desc','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Description')]); ?>
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
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda074efadb5da906410cf6de45ef064e)): ?>
<?php $attributes = $__attributesOriginalda074efadb5da906410cf6de45ef064e; ?>
<?php unset($__attributesOriginalda074efadb5da906410cf6de45ef064e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda074efadb5da906410cf6de45ef064e)): ?>
<?php $component = $__componentOriginalda074efadb5da906410cf6de45ef064e; ?>
<?php unset($__componentOriginalda074efadb5da906410cf6de45ef064e); ?>
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
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/master/style/index.blade.php ENDPATH**/ ?>