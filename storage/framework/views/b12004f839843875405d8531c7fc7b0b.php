<div>
     <?php $__env->slot('header', null, []); ?> Contact Entry <?php $__env->endSlot(); ?>

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
        <div class="lg:flex">

            <!-- Left area -------------------------------------------------------------------------------------------->
            <div class="lg:w-1/2 ml-2 px-8">

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

                <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'mobile','label' => 'Mobile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'mobile','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Mobile')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'whatsapp','label' => 'Whatsapp']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'whatsapp','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Whatsapp')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'contact_person','label' => 'Contact Person']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'contact_person','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Contact Person')]); ?>
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

                <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'contact_type','label' => 'Contact Type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'contact_type','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Contact Type')]); ?>
                    <option class="text-gray-400"> choose ..</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\ContactType::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($contact_type->value); ?>"><?php echo e($contact_type->getName()); ?></option>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'msme_no','label' => 'MSME No']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'msme_no','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('MSME No')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'msme_type','label' => 'MSME Type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'msme_type','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('MSME Type')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'opening_balance','label' => 'Opening Balance']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'opening_balance','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Opening Balance')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-date','data' => ['wire:model' => 'effective_from','label' => 'Opening Date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'effective_from','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Opening Date')]); ?>
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

            <!-- Right area ------------------------------------------------------------------------------------------->
            <div class="lg:w-1/2 px-8">

                <?php if (isset($component)) { $__componentOriginalc30373af7a89be2e0ff287538918c46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc30373af7a89be2e0ff287538918c46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'address_type','label' => 'Address Type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'address_type','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Address Type')]); ?>
                    <option class="text-gray-400"> choose ..</option>
                    <option value="Primary">Primary</option>
                    <option value="Secondary">Second</option>
                    <option value="Third">Third</option>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'address_1','label' => 'Address']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'address_1','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Address')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'address_2','label' => 'Area-Road']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'address_2','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Area-Road')]); ?>
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

                <div class="flex flex-row  gap-3">
                    <div class="xl:flex w-full gap-2">
                        <label for="city_name" class="w-[10rem] text-zinc-500 tracking-wide py-2 ">City</label>
                        <div x-data="{isTyped: <?php if ((object) ('cityTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('cityTyped'->value()); ?>')<?php echo e('cityTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('cityTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false" class="w-full">
                            <div class="relative">
                                <input
                                    id="city_name"
                                    type="search"
                                    wire:model.live="city_name"
                                    autocomplete="off"
                                    placeholder="Choose.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementCity"
                                    wire:keydown.arrow-down="incrementCity"
                                    wire:keydown.enter="enterCity"
                                    class="block w-full purple-textbox "
                                />

                                <!-- City Dropdown -------------------------------------------------------------------->

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
                                                <!--[if BLOCK]><![endif]--><?php if($cityCollection): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $cityCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightCity === $i ? 'bg-yellow-100' : ''); ?>"
                                                            wire:click.prevent="setCity('<?php echo e($city->vname); ?>','<?php echo e($city->id); ?>')"
                                                            x-on:click="isTyped = false">
                                                            <?php echo e($city->vname); ?>

                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.city-model',[$city_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3604028140-0', $__slots ?? [], get_defined_vars());

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

                <div class="flex flex-col mt-3 gap-2">
                    <div class="xl:flex w-full gap-2">
                        <label for="state_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">State</label>
                        <div x-data="{isTyped: <?php if ((object) ('stateTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('stateTyped'->value()); ?>')<?php echo e('stateTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('stateTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false" class="w-full">
                            <div class="relative">
                                <input
                                    id="state_name"
                                    type="search"
                                    wire:model.live="state_name"
                                    autocomplete="off"
                                    placeholder="Choose.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementState"
                                    wire:keydown.arrow-down="incrementState"
                                    wire:keydown.enter="enterState"
                                    class="block w-full purple-textbox"
                                />

                                <!-- State Dropdown -------------------------------------------------------------------->
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
                                                <!--[if BLOCK]><![endif]--><?php if($stateCollection): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $stateCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $states): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightState === $i ? 'bg-yellow-100' : ''); ?>"
                                                            wire:click.prevent="setState('<?php echo e($states->vname); ?>','<?php echo e($states->id); ?>')"
                                                            x-on:click="isTyped = false">
                                                            <?php echo e($states->vname); ?>

                                                        </li>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.state-model',[$state_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3604028140-1', $__slots ?? [], get_defined_vars());

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

                <div class="flex flex-col gap-2 mt-3">
                    <div class="xl:flex w-full gap-2">
                        <label for="pincode_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Pincode</label>
                        <div x-data="{isTyped: <?php if ((object) ('pincodeTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('pincodeTyped'->value()); ?>')<?php echo e('pincodeTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('pincodeTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false" class="w-full">
                            <div class="relative">
                                <input
                                    id="pincode_name"
                                    type="search"
                                    wire:model.live="pincode_name"
                                    autocomplete="off"
                                    placeholder="Choose.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementPincode"
                                    wire:keydown.arrow-down="incrementPincode"
                                    wire:keydown.enter="enterPincode"
                                    class="block w-full purple-textbox"
                                />

                                <!-- Pin-code Dropdown -------------------------------------------------------------------->
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
                                                <!--[if BLOCK]><![endif]--><?php if($pincodeCollection): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $pincodeCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $pincode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightPincode === $i ? 'bg-yellow-100' : ''); ?>"
                                                            wire:click.prevent="setPincode('<?php echo e($pincode->vname); ?>','<?php echo e($pincode->id); ?>')"
                                                            x-on:click="isTyped = false">
                                                            <?php echo e($pincode->vname); ?>

                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.pincode-model',[$pincode_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3604028140-2', $__slots ?? [], get_defined_vars());

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

                <div class="flex flex-col gap-2 mt-3">
                    <div class="xl:flex w-full gap-2">
                        <label for="country_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Country</label>
                        <div x-data="{isTyped: <?php if ((object) ('countryTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('countryTyped'->value()); ?>')<?php echo e('countryTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('countryTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false" class="w-full">
                            <div class="relative">
                                <input
                                    id="country_name"
                                    type="search"
                                    wire:model.live="country_name"
                                    autocomplete="off"
                                    placeholder="Choose.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementCountry"
                                    wire:keydown.arrow-down="incrementCountry"
                                    wire:keydown.enter="enterCountry"
                                    class="block w-full purple-textbox"
                                />

                                <!-- Country Dropdown -------------------------------------------------------------------->
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
                                                <!--[if BLOCK]><![endif]--><?php if($countryCollection): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $countryCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightCountry === $i ? 'bg-yellow-100' : ''); ?>"
                                                            wire:click.prevent="setCountry('<?php echo e($country->vname); ?>','<?php echo e($country->id); ?>')"
                                                            x-on:click="isTyped = false">
                                                            <?php echo e($country->vname); ?>

                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.country-model',[$country_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3604028140-3', $__slots ?? [], get_defined_vars());

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

                <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'gstin','label' => 'GST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'gstin','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('GST')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'email','label' => 'Email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'email','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Email')]); ?>
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

                <button wire:click="addItems"
                        class="px-3 bg-green-500 text-white font-semibold tracking-wider rounded-lg p-2">Add
                    Address
                </button>
            </div>

        </div>

        <!-- Address Display ------------------------------------------------------------------------------------------>
        <section>
            <!--[if BLOCK]><![endif]--><?php if($itemList): ?>
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
                        <?php if (isset($component)) { $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true]); ?>id <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['center' => true]); ?>Address Type <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['left' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['left' => true]); ?>Address <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['left' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['left' => true]); ?>Area-Road <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['center' => true]); ?>City <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['center' => true]); ?>State <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['center' => true]); ?>Pincode <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['center' => true]); ?>Country <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['center' => true]); ?>Gst <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['left' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['left' => true]); ?>Email <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.header-text','data' => ['class' => 'w-[6rem]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.header-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[6rem]']); ?>Action <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $attributes = $__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__attributesOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb)): ?>
<?php $component = $__componentOriginal33a3c819afe379f77009ed0ad68ef8bb; ?>
<?php unset($__componentOriginal33a3c819afe379f77009ed0ad68ef8bb); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('table_body', null, []); ?> 
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $itemList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>  $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                                    <!--[if BLOCK]><![endif]--><?php if(isset($row['contact_detail_id'])): ?>
                                        <?php echo e($row['contact_detail_id']); ?>

                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.cell-text','data' => ['wire:click.prevent' => 'changeItems('.e($index).')','center' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.cell-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'changeItems('.e($index).')','center' => true]); ?>
                                    <?php echo e($row['address_type']); ?>

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
                                    <?php echo e($row['address_1']); ?>

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
                                    <?php echo e($row['address_2']); ?>

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
                                    <?php echo e($row['city_name']); ?>

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
                                    <?php echo e($row['state_name']); ?>

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
                                    <?php echo e($row['pincode_name']); ?>

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
                                    <?php echo e($row['country_name']); ?>

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
                                    <?php echo e($row['gstin']); ?>

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
                                    <?php echo e($row['email']); ?>

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
                                    <div class="flex justify-center gap-3">
                                        <?php if (isset($component)) { $__componentOriginal18f8bbe41143780f52ea88032f66285f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18f8bbe41143780f52ea88032f66285f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.edit','data' => ['wire:click.prevent' => 'changeItems('.e($index).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'changeItems('.e($index).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18f8bbe41143780f52ea88032f66285f)): ?>
<?php $attributes = $__attributesOriginal18f8bbe41143780f52ea88032f66285f; ?>
<?php unset($__attributesOriginal18f8bbe41143780f52ea88032f66285f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18f8bbe41143780f52ea88032f66285f)): ?>
<?php $component = $__componentOriginal18f8bbe41143780f52ea88032f66285f; ?>
<?php unset($__componentOriginal18f8bbe41143780f52ea88032f66285f); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal2f7ce0275334e77cd0ee30513f7af79e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f7ce0275334e77cd0ee30513f7af79e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.delete','data' => ['wire:click.prevent' => 'removeItems('.e($index).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'removeItems('.e($index).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f7ce0275334e77cd0ee30513f7af79e)): ?>
<?php $attributes = $__attributesOriginal2f7ce0275334e77cd0ee30513f7af79e; ?>
<?php unset($__attributesOriginal2f7ce0275334e77cd0ee30513f7af79e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f7ce0275334e77cd0ee30513f7af79e)): ?>
<?php $component = $__componentOriginal2f7ce0275334e77cd0ee30513f7af79e; ?>
<?php unset($__componentOriginal2f7ce0275334e77cd0ee30513f7af79e); ?>
<?php endif; ?>
                                    </div>
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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </section>

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
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/master/contact/upsert.blade.php ENDPATH**/ ?>