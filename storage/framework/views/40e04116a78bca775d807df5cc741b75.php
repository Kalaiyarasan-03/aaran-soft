<div>
     <?php $__env->slot('header', null, []); ?> Social Details <?php $__env->endSlot(); ?>
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
                <?php if (isset($component)) { $__componentOriginalf96400b992b21d8a2fd46a817e5f2c5f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf96400b992b21d8a2fd46a817e5f2c5f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-slno','data' => ['wire:click.prevent' => 'sortBy(\'category\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-slno'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'category\')']); ?>Sl.no <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf96400b992b21d8a2fd46a817e5f2c5f)): ?>
<?php $attributes = $__attributesOriginalf96400b992b21d8a2fd46a817e5f2c5f; ?>
<?php unset($__attributesOriginalf96400b992b21d8a2fd46a817e5f2c5f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf96400b992b21d8a2fd46a817e5f2c5f)): ?>
<?php $component = $__componentOriginalf96400b992b21d8a2fd46a817e5f2c5f; ?>
<?php unset($__componentOriginalf96400b992b21d8a2fd46a817e5f2c5f); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'category\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'category\')']); ?>category <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $attributes = $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $component = $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'category\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'category\')']); ?>email_id <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $attributes = $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $component = $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'category\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'category\')']); ?>user_name <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $attributes = $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $component = $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'category\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'category\')']); ?>password <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $attributes = $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $component = $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal701475f387ee41fe9c47cd33055131bf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal701475f387ee41fe9c47cd33055131bf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.heading','data' => ['class' => 'w-[12rem]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[12rem]']); ?>Action <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal701475f387ee41fe9c47cd33055131bf)): ?>
<?php $attributes = $__attributesOriginal701475f387ee41fe9c47cd33055131bf; ?>
<?php unset($__attributesOriginal701475f387ee41fe9c47cd33055131bf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal701475f387ee41fe9c47cd33055131bf)): ?>
<?php $component = $__componentOriginal701475f387ee41fe9c47cd33055131bf; ?>
<?php unset($__componentOriginal701475f387ee41fe9c47cd33055131bf); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>

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

                        <?php if (isset($component)) { $__componentOriginalc607f3dbbf983abb970b49dd6ee66681 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <p class="flex px-3 text-gray-600 truncate text-xl text-left">
                                <?php echo e($index + 1); ?>

                            </p>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $attributes = $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $component = $__componentOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc607f3dbbf983abb970b49dd6ee66681 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <p class="flex px-3 text-gray-600 truncate text-xl text-left">
                                <?php echo e(\App\Enums\Social::tryFrom($row->category)->getName()); ?>

                            </p>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $attributes = $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $component = $__componentOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc607f3dbbf983abb970b49dd6ee66681 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <p class="flex px-3 text-gray-600 truncate text-xl text-left">
                                <?php echo e($row->email_id); ?>

                            </p>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $attributes = $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $component = $__componentOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc607f3dbbf983abb970b49dd6ee66681 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <p class="flex px-3 text-gray-600 truncate text-xl text-left">
                                <?php echo e($row->vname); ?>

                            </p>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $attributes = $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $component = $__componentOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc607f3dbbf983abb970b49dd6ee66681 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <p class="flex px-3 text-gray-600 truncate text-xl text-left">
                                <?php echo e($row->password); ?>

                            </p>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $attributes = $__attributesOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__attributesOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681)): ?>
<?php $component = $__componentOriginalc607f3dbbf983abb970b49dd6ee66681; ?>
<?php unset($__componentOriginalc607f3dbbf983abb970b49dd6ee66681); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal8f23da8c130ce7d9986db1dcc3ddef5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8f23da8c130ce7d9986db1dcc3ddef5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.action','data' => ['id' => $row->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8f23da8c130ce7d9986db1dcc3ddef5a)): ?>
<?php $attributes = $__attributesOriginal8f23da8c130ce7d9986db1dcc3ddef5a; ?>
<?php unset($__attributesOriginal8f23da8c130ce7d9986db1dcc3ddef5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8f23da8c130ce7d9986db1dcc3ddef5a)): ?>
<?php $component = $__componentOriginal8f23da8c130ce7d9986db1dcc3ddef5a; ?>
<?php unset($__componentOriginal8f23da8c130ce7d9986db1dcc3ddef5a); ?>
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
            <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'category','label' => 'Category Type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'category','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Category Type')]); ?>
                <option class="text-gray-400"> choose ..</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\Social::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->value); ?>"><?php echo e($category->getName()); ?></option>
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
            <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'email_id','label' => 'Email Id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'email_id','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Email Id')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'vname','label' => 'User Name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'vname','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('User Name')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'password','label' => 'Password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'password','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Password')]); ?>
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
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/admin/social/index.blade.php ENDPATH**/ ?>