<div>
     <?php $__env->slot('header', null, []); ?> Sales Report <?php $__env->endSlot(); ?>

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
        <div class="flex justify-center w-full">
            <div class="flex">
                <?php if (isset($component)) { $__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-date','data' => ['wire:model.live' => 'start_date','label' => 'From']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'start_date','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('From')]); ?>
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
                <div class="ml-3">
                <?php if (isset($component)) { $__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-date','data' => ['wire:model.live' => 'end_date','label' => 'To']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'end_date','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('To')]); ?>
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
                </div>
            </div>
            <div class="ml-3">
                <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model.live' => 'by_company','label' => 'Party']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'by_company','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Party')]); ?>
                    <option value="">choose</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($i->id); ?>" ><?php echo e($i->vname); ?></option>
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
            <div class="ml-3">
                <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model.live' => 'byOrder','label' => 'Order No']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'byOrder','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Order No')]); ?>
                    <option value="">choose</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($i->id); ?>" ><?php echo e($i->vname); ?></option>
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
            <div class="ml-auto mr-2">
                <button class="bg-blue-600 flex rounded-lg px-5 py-3 text-white"><?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'arrow-down','class' => 'h-6 w-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('arrow-down'),'class' => 'h-6 w-auto block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $attributes = $__attributesOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__attributesOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $component = $__componentOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__componentOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?><div class="pl-2">Export</div></button>
            </div>

        </div>

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
             <?php $__env->slot('table_header', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalf96400b992b21d8a2fd46a817e5f2c5f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf96400b992b21d8a2fd46a817e5f2c5f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-slno','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-slno'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Sl.no <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Order No <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Invoice NO <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Invoice Date <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Party Name <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Total Qty <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Total Taxable <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Total Gst <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.ths-center','data' => ['wire:click.prevent' => 'sortBy(\'invoice_no\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.ths-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'sortBy(\'invoice_no\')']); ?>Grand Total <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $attributes = $__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__attributesOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457)): ?>
<?php $component = $__componentOriginal1b4c35faade5eed3f8bea90c7bd01457; ?>
<?php unset($__componentOriginal1b4c35faade5eed3f8bea90c7bd01457); ?>
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
                            <a href=""
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                <?php echo e($index + 1); ?>

                            </a>
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
                            <a href="<?php echo e(route('sales.upsert',[$row->id])); ?>"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                <?php echo e($row->order->vname); ?>

                            </a>
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
                            <a href="<?php echo e(route('sales.upsert',[$row->id])); ?>"
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                <?php echo e($row->invoice_no); ?>

                            </a>
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
                            <a href="<?php echo e(route('sales.upsert',[$row->id])); ?>"
                               class="flex px-3 text-gray-600 truncate text-xl text-center">
                                <?php echo e($row->invoice_date); ?>

                            </a>
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
                            <a href="<?php echo e(route('sales.upsert',[$row->id])); ?>"
                               class="flex px-3 text-gray-600 truncate text-xl text-left">
                                <?php echo e($row->contact->vname); ?>

                            </a>
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
                            <a href="<?php echo e(route('sales.upsert',[$row->id])); ?>"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                <?php echo e($row->total_qty); ?>

                            </a>
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
                            <a href="<?php echo e(route('sales.upsert',[$row->id])); ?>"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                <?php echo e($row->total_taxable); ?>

                            </a>
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
                            <a href="<?php echo e(route('sales.upsert',[$row->id])); ?>"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                <?php echo e($row->total_gst); ?>

                            </a>
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
                            <a href="<?php echo e(route('sales.upsert',[$row->id])); ?>"
                               class="flex flex-col px-3 text-gray-600 truncate text-xl text-center">
                                <?php echo e($row->grand_total); ?>

                            </a>
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
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/entries/sales/report.blade.php ENDPATH**/ ?>