<div>
     <?php $__env->slot('header', null, []); ?> Product Entry <?php $__env->endSlot(); ?>

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
        <div>
            <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'vname','label' => 'Name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'vname','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Name')]); ?>
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

            <!-- Product Type ------------------------------------------------------------------------------------->
            <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'product_type','label' => 'Product Type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'product_type','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Product Type')]); ?>
                <option class="text-gray-400"> choose ..</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\ProductType::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($product_type->value); ?>"><?php echo e($product_type->getName()); ?></option>
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

            <!-- Hsn-Code------------------------------------------------------------------------------------------>
            <div class="flex flex-row gap-3 py-3">
                <div class="xl:flex gap-2 w-full">
                    <label for="hsncode_no" class="w-[10rem] text-zinc-500 tracking-wide py-2">Hsncode</label>
                    <div x-data="{isTyped: <?php if ((object) ('hsncodeTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('hsncodeTyped'->value()); ?>')<?php echo e('hsncodeTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('hsncodeTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false" class="w-full">
                        <div>
                            <input
                                id="hsncode_no"
                                type="search"
                                wire:model.live="hsncode_no"
                                autocomplete="off"
                                placeholder="Hsncode No.."
                                @focus="isTyped = true"
                                @keydown.escape.window="isTyped = false"
                                @keydown.tab.window="isTyped = false"
                                @keydown.enter.prevent="isTyped = false"
                                wire:keydown.arrow-up="decrementHsncode"
                                wire:keydown.arrow-down="incrementHsncode"
                                wire:keydown.enter="enterHsncode"
                                class="block purple-textbox w-full"
                            />

                            <!-- Hsn-Code Dropdown------------------------------------------------------------->

                            <div x-show="isTyped"
                                 x-transition:leave="transition ease-in duration-100"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 x-cloak
                            >
                                <div class="absolute z-20 w-full mt-2">
                                    <div class="block py-1 shadow-md w-full
                rounded-lg border-transparent flex-1 appearance-none border
                                 bg-white text-gray-800 ring-1 ring-purple-600">
                                        <ul class="overflow-y-scroll h-96">
                                            <!--[if BLOCK]><![endif]--><?php if($hsncodeCollection): ?>
                                                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $hsncodeCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $hsncode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                    <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightHsncode === $i ? 'bg-yellow-100' : ''); ?>"
                                                        wire:click.prevent="setHsncode('<?php echo e($hsncode->vname); ?>','<?php echo e($hsncode->id); ?>')"
                                                        x-on:click="isTyped = false">
                                                        <?php echo e($hsncode->vname); ?>

                                                    </li>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.hsncode-model',[$hsncode_no]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2577888388-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Units/Gst ---------------------------------------------------------------------------------------->
            <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'units','label' => 'Units']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'units','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Units')]); ?>
                <option class="text-gray-400"> choose ..</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\Units::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $units): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($units->value); ?>"><?php echo e($units->getName()); ?></option>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'gst_percent','label' => 'Gst Percent']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'gst_percent','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Gst Percent')]); ?>
                <option class="text-gray-400"> choose ..</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\GstPercent::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gst_percent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($gst_percent->value); ?>"><?php echo e($gst_percent->getName()); ?></option>
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
    <!-- Save Button area --------------------------------------------------------------------------------------------->
    <?php if (isset($component)) { $__componentOriginal96d4f847d403d43e57a7bbea90baa0b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96d4f847d403d43e57a7bbea90baa0b7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.m-panel-bottom-button','data' => ['save' => true,'back' => true,'active' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.m-panel-bottom-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['save' => true,'back' => true,'active' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96d4f847d403d43e57a7bbea90baa0b7)): ?>
<?php $attributes = $__attributesOriginal96d4f847d403d43e57a7bbea90baa0b7; ?>
<?php unset($__attributesOriginal96d4f847d403d43e57a7bbea90baa0b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96d4f847d403d43e57a7bbea90baa0b7)): ?>
<?php $component = $__componentOriginal96d4f847d403d43e57a7bbea90baa0b7; ?>
<?php unset($__componentOriginal96d4f847d403d43e57a7bbea90baa0b7); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/master/product/upsert.blade.php ENDPATH**/ ?>