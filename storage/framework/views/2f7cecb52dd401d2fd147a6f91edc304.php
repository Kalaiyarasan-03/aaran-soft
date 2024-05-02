<div>
    <button type="button" wire:click="create"
            class="text-gray-600 bg-white focus:outline-none hover:bg-gray-100 font-semibold px-2 py-2 rounded-lg">
        <?php echo e($defaultCompany->company->vname ?:'Select Company'); ?>

        &nbsp;-&nbsp;<?php echo e(\App\Enums\AcYear::tryFrom($defaultCompany->acyear)->getName()?:''); ?>

    </button>

    <?php if (isset($component)) { $__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.modal','data' => ['wire:model.defer' => 'showEditModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.defer' => 'showEditModal']); ?>

        <div
                class=" flex flex-row justify-between px-6 pt-4 text-xl font-semibold text-blue-600/100 dark:text-blue-500/100 ">
            <div>Choose Company</div>
            <div>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.select.acyear-select', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-414892597-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </div>

        <?php if (isset($component)) { $__componentOriginald02f4e077c8d394be64c99cbb1834d3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald02f4e077c8d394be64c99cbb1834d3e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.section-border','data' => ['class' => 'py-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'py-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald02f4e077c8d394be64c99cbb1834d3e)): ?>
<?php $attributes = $__attributesOriginald02f4e077c8d394be64c99cbb1834d3e; ?>
<?php unset($__attributesOriginald02f4e077c8d394be64c99cbb1834d3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald02f4e077c8d394be64c99cbb1834d3e)): ?>
<?php $component = $__componentOriginald02f4e077c8d394be64c99cbb1834d3e; ?>
<?php unset($__componentOriginald02f4e077c8d394be64c99cbb1834d3e); ?>
<?php endif; ?>
        <div class=" mt-4 mb-5 px-6  pt-4">
            <table class="w-full">
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>  $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                            <button wire:click.prevent="switchCompany(<?php echo e($row->id); ?>)"
                                    class="flex px-3 text-gray-600 truncate text-xl text-left w-full">
                                <?php echo e($row->vname); ?>

                            </button>
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
                            <button wire:click.prevent="switchCompany(<?php echo e($row->id); ?>)"
                                    class="flex px-2 text-gray-600 text-xl justify-end w-full">
                                <?php echo e($row->vname === $defaultCompany->company->vname ?'Default': '-'); ?>


                            </button>
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
            </table>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d)): ?>
<?php $attributes = $__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d; ?>
<?php unset($__attributesOriginal36e5ba78b7cd1d1f3255d0772d54175d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d)): ?>
<?php $component = $__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d; ?>
<?php unset($__componentOriginal36e5ba78b7cd1d1f3255d0772d54175d); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/sys/default-company/index.blade.php ENDPATH**/ ?>