<div>
     <?php $__env->slot('header', null, []); ?> Receipt Entry <?php $__env->endSlot(); ?>
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

        <!-- Left Area -------------------------------------------------------------------------------------------------->
        <div class="md:grid grid-cols-2 gap-2 ">
            <div class="px-4">
                    <!-- Party Name ------------------------------------------------------------------------------------->
                <div class="xl:flex w-full gap-2 pt-3">

                    <label for="size_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Party Name</label>
                    <div x-data="{isTyped: <?php if ((object) ('contactTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('contactTyped'->value()); ?>')<?php echo e('contactTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('contactTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false" class="w-full">
                        <div class="relative ">
                            <input
                                id="contact_name"
                                type="search"
                                wire:model.live="contact_name"
                                autocomplete="off"
                                placeholder="Party Name.."
                                @focus="isTyped = true"
                                @keydown.escape.window="isTyped = false"
                                @keydown.tab.window="isTyped = false"
                                @keydown.enter.prevent="isTyped = false"
                                wire:keydown.arrow-up="decrementContact"
                                wire:keydown.arrow-down="incrementContact"
                                wire:keydown.enter="enterContact"
                                class="block w-full purple-textbox "
                            />

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
                                            <!--[if BLOCK]><![endif]--><?php if($contactCollection): ?>
                                                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $contactCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                    <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightContact === $i ? 'bg-yellow-100' : ''); ?>"
                                                        wire:click.prevent="setContact('<?php echo e($contact->vname); ?>','<?php echo e($contact->id); ?>')"
                                                        x-on:click="isTyped = false">
                                                        <?php echo e($contact->vname); ?>

                                                    </li>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <a href="<?php echo e(route('contacts.upsert',['0'])); ?>" role="button"
                                                       class="flex items-center justify-center bg-green-500 w-full h-8 text-white text-center">
                                                        Not found , Want to create new
                                                    </a>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Model -------------------------------------------------------------------------------------->
                <div class="xl:flex w-full gap-2 pt-3">
                    <label for="receipttype_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Payment-Model</label>
                    <div x-data="{isTyped: <?php if ((object) ('recepittypeTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('recepittypeTyped'->value()); ?>')<?php echo e('recepittypeTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('recepittypeTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false" class="w-full">
                        <div class="relative">
                            <input
                                id="receipttype_name"
                                type="search"
                                wire:model.live="receipttype_name"
                                autocomplete="off"
                                placeholder="Receipt-type Name.."
                                @focus="isTyped = true"
                                @keydown.escape.window="isTyped = false"
                                @keydown.tab.window="isTyped = false"
                                @keydown.enter.prevent="isTyped = false"
                                wire:keydown.arrow-up="decrementReceipttype"
                                wire:keydown.arrow-down="incrementReceipttype"
                                wire:keydown.enter="enterReceipttype"
                                class="block w-full purple-textbox"
                            />

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
                                            <!--[if BLOCK]><![endif]--><?php if($receipttypeCollection): ?>
                                                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $receipttypeCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $receipttype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                    <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightReceipttype === $i ? 'bg-yellow-100' : ''); ?>"
                                                        wire:click.prevent="setReceipttype('<?php echo e($receipttype->vname); ?>','<?php echo e($receipttype->id); ?>')"
                                                        x-on:click="isTyped = false">
                                                        <?php echo e($receipttype->vname); ?>

                                                    </li>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.receipttype-model',[$receipttype_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2554513777-0', $__slots ?? [], get_defined_vars());

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

            <!-- Right Area --------------------------------------------------------------------------------------------->
            <div class="px-4">
                <?php if (isset($component)) { $__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-date','data' => ['wire:model' => 'vdate','label' => 'Date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'vdate','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Date')]); ?>
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
                <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'receipt_amount','label' => 'Receipt Amount']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'receipt_amount','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Receipt Amount')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'chq_no','label' => 'Cheque No']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'chq_no','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Cheque No')]); ?>
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
                <?php if (isset($component)) { $__componentOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96bdcaf5c4a73a97ba020c7762c5cfff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-date','data' => ['wire:model' => 'chq_date','label' => 'Cheque Date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'chq_date','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Cheque Date')]); ?>
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

                    <!-- Bank Name -------------------------------------------------------------------------------------->
                <div class="md:flex w-full gap-2 pt-3">
                    <label for="bank_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Bank Name</label>
                    <div x-data="{isTyped: <?php if ((object) ('bankTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('bankTyped'->value()); ?>')<?php echo e('bankTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('bankTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false" class="w-full">
                        <div class="relative">
                            <input
                                id="bank_name"
                                type="search"
                                wire:model.live="bank_name"
                                autocomplete="off"
                                placeholder="Bank Name.."
                                @focus="isTyped = true"
                                @keydown.escape.window="isTyped = false"
                                @keydown.tab.window="isTyped = false"
                                @keydown.enter.prevent="isTyped = false"
                                wire:keydown.arrow-up="decrementBank"
                                wire:keydown.arrow-down="incrementBank"
                                wire:keydown.enter="enterBank"
                                class="block w-full purple-textbox"
                            />

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
                                            <!--[if BLOCK]><![endif]--><?php if($bankCollection): ?>
                                                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $bankCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                    <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightBank === $i ? 'bg-yellow-100' : ''); ?>"
                                                        wire:click.prevent="setBank('<?php echo e($bank->vname); ?>','<?php echo e($bank->id); ?>')"
                                                        x-on:click="isTyped = false">
                                                        <?php echo e($bank->vname); ?>

                                                    </li>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.bank-model',[$bank_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2554513777-1', $__slots ?? [], get_defined_vars());

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

    <!-- Footer --------------------------------------------------------------------------------------------------------->
    <div class="px-8 border border-gray-400 border-t-0 bg-gray-100 rounded-b-md shadow-lg w-full">
        <div class="flex flex-row justify-between py-4">
            <div class="flex gap-3">
                <?php if (isset($component)) { $__componentOriginal76a5a562ecfea092c39dd7341f8e47da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76a5a562ecfea092c39dd7341f8e47da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.save','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.save'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76a5a562ecfea092c39dd7341f8e47da)): ?>
<?php $attributes = $__attributesOriginal76a5a562ecfea092c39dd7341f8e47da; ?>
<?php unset($__attributesOriginal76a5a562ecfea092c39dd7341f8e47da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76a5a562ecfea092c39dd7341f8e47da)): ?>
<?php $component = $__componentOriginal76a5a562ecfea092c39dd7341f8e47da; ?>
<?php unset($__componentOriginal76a5a562ecfea092c39dd7341f8e47da); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginala0a709ee50522d2384532798ae8bd5ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a709ee50522d2384532798ae8bd5ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.back','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a709ee50522d2384532798ae8bd5ac)): ?>
<?php $attributes = $__attributesOriginala0a709ee50522d2384532798ae8bd5ac; ?>
<?php unset($__attributesOriginala0a709ee50522d2384532798ae8bd5ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a709ee50522d2384532798ae8bd5ac)): ?>
<?php $component = $__componentOriginala0a709ee50522d2384532798ae8bd5ac; ?>
<?php unset($__componentOriginala0a709ee50522d2384532798ae8bd5ac); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/entries/receipt/upsert.blade.php ENDPATH**/ ?>