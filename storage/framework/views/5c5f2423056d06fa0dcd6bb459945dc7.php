<div>
     <?php $__env->slot('header', null, []); ?> Sales Entry <?php $__env->endSlot(); ?>
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
        <section class="grid grid-cols-2">

            <!-- Top Left Area ------------------------------------------------------------------------------------------------>
            <div class="mt-3 ">
                <div class="xl:flex w-full gap-2">

                    <!-- Party Name --------------------------------------------------------------------------------------->
                    <label for="contact_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Party Name</label>
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
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['contact_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red-500"><?php echo e('The Party Name is Required.'); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

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

                <!-- Order No --------------------------------------------------------------------------------------------->

                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasOrder()): ?>
                    <div class="xl:flex flex-col gap-2 pt-6">
                        <div class="xl:flex w-full gap-2">
                            <label for="order_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Order NO</label>
                            <div x-data="{isTyped: <?php if ((object) ('orderTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('orderTyped'->value()); ?>')<?php echo e('orderTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('orderTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false"
                                 class="w-full">
                                <div class="relative">
                                    <input
                                        id="order_name"
                                        type="search"
                                        wire:model.live="order_name"
                                        autocomplete="off"
                                        placeholder="Order.."
                                        @focus="isTyped = true"
                                        @keydown.escape.window="isTyped = false"
                                        @keydown.tab.window="isTyped = false"
                                        @keydown.enter.prevent="isTyped = false"
                                        wire:keydown.arrow-up="decrementOrder"
                                        wire:keydown.arrow-down="incrementOrder"
                                        wire:keydown.enter="enterOrder"
                                        class="block w-full purple-textbox"
                                    />
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['order_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-500"><?php echo e('The Order is Required.'); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

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
                                                    <!--[if BLOCK]><![endif]--><?php if($orderCollection): ?>
                                                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $orderCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightOrder === $i ? 'bg-yellow-100' : ''); ?>"
                                                                wire:click.prevent="setOrder('<?php echo e($order->vname); ?>','<?php echo e($order->id); ?>')"
                                                                x-on:click="isTyped = false">
                                                                <?php echo e($order->vname); ?>

                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.order.order-model',[$order_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1553379168-0', $__slots ?? [], get_defined_vars());

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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!-- Billing Address -------------------------------------------------------------------------------------->

                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasBillingAddress()): ?>
                    <div class="xl:flex gap-2 md:w-full pt-6">
                        <label for="billing_address" class="w-[10rem] text-zinc-500 tracking-wide py-2">Billing
                            Address</label>
                        <div x-data="{isTyped: <?php if ((object) ('billing_addressTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('billing_addressTyped'->value()); ?>')<?php echo e('billing_addressTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('billing_addressTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false"
                             class="md:w-full">
                            <div class="relative ">
                                <input
                                    id="billing_address"
                                    type="search"
                                    wire:model.live="billing_address"
                                    autocomplete="off"
                                    placeholder="Billing Address.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementBilling_address"
                                    wire:keydown.arrow-down="incrementBilling_address"
                                    wire:keydown.enter="enterBilling_address"
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
                                            <ul class=" overflow-y-scroll h-96">
                                                <!--[if BLOCK]><![endif]--><?php if($billing_addressCollection): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $billing_addressCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $billing_address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightBilling_address === $i ? 'bg-yellow-100' : ''); ?>"
                                                            wire:click.prevent="setBilling_address('<?php echo e($billing_address->address_type.'-'.$billing_address->address_1); ?>','<?php echo e($billing_address->id); ?>')"
                                                            x-on:click="isTyped = false">

                                                            <?php echo e($billing_address->address_type); ?>&nbsp;-&nbsp;
                                                            <?php echo e($billing_address->address_1); ?>&nbsp;-&nbsp;
                                                            <?php echo e($billing_address->address_2); ?>&nbsp;-&nbsp;
                                                            <?php echo e($billing_address->gstin); ?>

                                                        </li>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <a  href="<?php echo e(route('contacts.upsert',[$contact_id])); ?>"
                                                           role="button"
                                                           class="flex items-center  justify-center bg-green-500 w-full h-8 text-white text-center">
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!-- Shipping Address ------------------------------------------------------------------------------------->

                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasShippingAddress()): ?>
                    <div class="xl:flex gap-2 w-full pt-6">
                        <label for="shipping_address" class="w-[10rem] text-zinc-500 tracking-wide py-2">Shipping
                            Address</label>
                        <div x-data="{isTyped: <?php if ((object) ('shipping_addressTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('shipping_addressTyped'->value()); ?>')<?php echo e('shipping_addressTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('shipping_addressTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false"
                             class="w-full">
                            <div class="relative ">
                                <input
                                    id="shipping_address"
                                    type="search"
                                    wire:model.live="shipping_address"
                                    autocomplete="off"
                                    placeholder="Shipping Address.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementShipping_address"
                                    wire:keydown.arrow-down="incrementShipping_address"
                                    wire:keydown.enter="enterShipping_address"
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
                                                <!--[if BLOCK]><![endif]--><?php if($shipping_addressCollection): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $shipping_addressCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $shipping_address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                                        <?php echo e($highlightShipping_address === $i ? 'bg-yellow-100' : ''); ?>"
                                                            wire:click.prevent="setShipping_address('<?php echo e($shipping_address->address_type.'-'. $shipping_address->address_1); ?>','<?php echo e($shipping_address->id); ?>')"
                                                            x-on:click="isTyped = false">
                                                            <?php echo e($shipping_address->address_type); ?>&nbsp;-&nbsp;
                                                            <?php echo e($shipping_address->address_1); ?>&nbsp;-&nbsp;
                                                            <?php echo e($shipping_address->address_2); ?>&nbsp;-&nbsp;
                                                            <?php echo e($shipping_address->gstin); ?>

                                                        </li>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <a href="<?php echo e(route('contacts.upsert',[$contact_id])); ?>"
                                                           role="button"
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            </div>

            <!-- Top Right Area-------------------------------------------------------------------------------------------->

            <div class="ml-5">

                <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'invoice_no','label' => 'Invoice No']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'invoice_no','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Invoice No')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'invoice_date','label' => 'Invoice Date','type' => 'date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'invoice_date','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Invoice Date'),'type' => 'date']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-select','data' => ['wire:model' => 'sales_type','label' => 'Sales Type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'sales_type','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Sales Type')]); ?>
                    <option class="text-gray-400"> choose ..</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\GST::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sales_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($sales_type->value); ?>"><?php echo e($sales_type->getName()); ?></option>
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

                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasJob_no()): ?>
                <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'job_no','label' => 'Job No']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'job_no','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Job No')]); ?>
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!-- Style ------------------------------------------------------------------------------------------------>

                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasStyle()): ?>
                    <div class="xl:flex gap-2 w-full pt-4">
                        <label for="contact_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Style</label>
                        <div x-data="{isTyped: <?php if ((object) ('styleTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('styleTyped'->value()); ?>')<?php echo e('styleTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('styleTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false"
                             class="w-full">
                            <div class="relative ">
                                <input
                                    id="style_name"
                                    type="search"
                                    wire:model.live="style_name"
                                    autocomplete="off"
                                    placeholder="Style Name.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementStyle"
                                    wire:keydown.arrow-down="incrementStyle"
                                    wire:keydown.enter="enterStyle"
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
                                                <!--[if BLOCK]><![endif]--><?php if($styleCollection): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $styleCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightStyle === $i ? 'bg-yellow-100' : ''); ?>"
                                                            wire:click.prevent="setStyle('<?php echo e($style->vname); ?>','<?php echo e($style->id); ?>')"
                                                            x-on:click="isTyped = false">
                                                            <?php echo e($style->vname); ?>

                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.order.style-model',[$style_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1553379168-1', $__slots ?? [], get_defined_vars());

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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!-- Despatch --------------------------------------------------------------------------------------------->

                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasDespatch()): ?>
                    <div class="xl:flex gap-2 w-full pt-4">
                        <label for="contact_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Despatch No</label>
                        <div x-data="{isTyped: <?php if ((object) ('despatchTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('despatchTyped'->value()); ?>')<?php echo e('despatchTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('despatchTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false"
                             class="w-full">
                            <div class="relative ">
                                <input
                                    id="style_name"
                                    type="search"
                                    wire:model.live="despatch_name"
                                    autocomplete="off"
                                    placeholder="Despatch No.."
                                    @focus="isTyped = true"
                                    @keydown.escape.window="isTyped = false"
                                    @keydown.tab.window="isTyped = false"
                                    @keydown.enter.prevent="isTyped = false"
                                    wire:keydown.arrow-up="decrementDespatch"
                                    wire:keydown.arrow-down="incrementDespatch"
                                    wire:keydown.enter="enterDespatch"
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
                                                <!--[if BLOCK]><![endif]--><?php if($despatchCollection): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $despatchCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $despatch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightDespatch === $i ? 'bg-yellow-100' : ''); ?>"
                                                            wire:click.prevent="setDespatch('<?php echo e($despatch->vname); ?>','<?php echo e($despatch->id); ?>')"
                                                            x-on:click="isTyped = false">
                                                            <?php echo e($despatch->vname); ?>

                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.despatch-model',[$despatch_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1553379168-2', $__slots ?? [], get_defined_vars());

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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </section>
        <?php if (isset($component)) { $__componentOriginald02f4e077c8d394be64c99cbb1834d3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald02f4e077c8d394be64c99cbb1834d3e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.section-border','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

        <!-- Sale Items  -------------------------------------------------------------------------------------------------->

        <section class="text-xl font-bold text-orange-400">
            Sales Item
        </section>

        <section class="md:flex md:flex-row w-full gap-0.5">

            <!--PO/DC  -------------------------------------------------------------------------------------------------------->

            <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasPo_no()): ?>
                <div class="w-full">
                    <label for="qty"></label>
                    <input id="qty" wire:model.live="po_no" class="block w-full purple-textbox-no-rounded"
                           autocomplete="false"
                           placeholder="PO No..">
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasDc_no()): ?>
                <div class="w-full">
                    <label for="qty"></label>
                    <input id="qty" wire:model.live="dc_no" class="block w-full md:w-full purple-textbox-no-rounded"
                           autocomplete="false"
                           placeholder="DC No..">
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasNo_of_roll()): ?>
                <div class="w-full">
                    <label for="no_of_roll"></label>
                    <input id="no_of_roll" wire:model.live="no_of_roll" class="block w-full md:w-full purple-textbox-no-rounded"
                           autocomplete="false"
                           placeholder="No of Roll..">
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--Product Name ---------------------------------------------------------------------------------------------->
            <div class="w-full">
                <label for="product_name"></label>
                <div x-data="{isTyped: <?php if ((object) ('productTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('productTyped'->value()); ?>')<?php echo e('productTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('productTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false">
                    <div class="relative">
                        <input
                            id="product_name"
                            type="search"
                            wire:model.live="product_name"
                            autocomplete="off"
                            placeholder="Product Name.."
                            @focus="isTyped = true"
                            @keydown.escape.window="isTyped = false"
                            @keydown.tab.window="isTyped = false"
                            @keydown.enter.prevent="isTyped = false"
                            wire:keydown.arrow-up="decrementProduct"
                            wire:keydown.arrow-down="incrementProduct"
                            wire:keydown.enter="enterProduct"
                            class="block w-full purple-textbox-no-rounded"
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
                                        <!--[if BLOCK]><![endif]--><?php if($productCollection): ?>
                                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $productCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                <li class="cursor-pointer w-full h-fit px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300
                                                        <?php echo e($highlightProduct === $i ? 'bg-yellow-100' : ''); ?>"
                                                    wire:click.prevent="setProduct('<?php echo e($product->vname); ?>','<?php echo e($product->id); ?>','<?php echo e($product->gst_percent); ?>')"
                                                    x-on:click="isTyped = false">
                                                    <?php echo e($product->vname); ?> &nbsp;-&nbsp; GST&nbsp;:
                                                    &nbsp;<?php echo e($product->gst_percent); ?>%
                                                </li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.master.product-model',[$product_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1553379168-3', $__slots ?? [], get_defined_vars());

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

            <!--Product Description --------------------------------------------------------------------------------------->

            <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasProductDescription()): ?>
                <div class="w-full">
                    <label for="qty"></label>
                    <input id="qty" wire:model.live="description" class="block w-full purple-textbox-no-rounded"
                           autocomplete="false"
                           placeholder="description">
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--Colour Name ----------------------------------------------------------------------------------------------->

            <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasColour()): ?>
                <div class="w-full">
                    <label for="colour_name"></label>
                    <div x-data="{isTyped: <?php if ((object) ('colourTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('colourTyped'->value()); ?>')<?php echo e('colourTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('colourTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false">
                        <div class="relative">
                            <input
                                id="colour_name"
                                type="search"
                                wire:model.live="colour_name"
                                autocomplete="off"
                                placeholder="Colour Name.."
                                @focus="isTyped = true"
                                @keydown.escape.window="isTyped = false"
                                @keydown.tab.window="isTyped = false"
                                @keydown.enter.prevent="isTyped = false"
                                wire:keydown.arrow-up="decrementColour"
                                wire:keydown.arrow-down="incrementColour"
                                wire:keydown.enter="enterColour"
                                class="block w-full purple-textbox-no-rounded"
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
                                            <!--[if BLOCK]><![endif]--><?php if($colourCollection): ?>
                                                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $colourCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $colour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                    <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightColour === $i ? 'bg-yellow-100' : ''); ?>"
                                                        wire:click.prevent="setColour('<?php echo e($colour->vname); ?>','<?php echo e($colour->id); ?>')"
                                                        x-on:click="isTyped = false">
                                                        <?php echo e($colour->vname); ?>

                                                    </li>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.colour-model',[$colour_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1553379168-4', $__slots ?? [], get_defined_vars());

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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--Size ------------------------------------------------------------------------------------------------------>

            <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasSize()): ?>
                <div class="w-full">
                    <label for="size_name"></label>
                    <div x-data="{isTyped: <?php if ((object) ('sizeTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('sizeTyped'->value()); ?>')<?php echo e('sizeTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('sizeTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false">
                        <div class="relative">
                            <input
                                id="size_name"
                                type="search"
                                wire:model.live="size_name"
                                autocomplete="off"
                                placeholder="Size.."
                                @focus="isTyped = true"
                                @keydown.escape.window="isTyped = false"
                                @keydown.tab.window="isTyped = false"
                                @keydown.enter.prevent="isTyped = false"
                                wire:keydown.arrow-up="decrementSize"
                                wire:keydown.arrow-down="incrementSize"
                                wire:keydown.enter="enterSize"
                                class="block w-full purple-textbox-no-rounded"
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
                                            <!--[if BLOCK]><![endif]--><?php if($sizeCollection): ?>
                                                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $sizeCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                    <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightSize === $i ? 'bg-yellow-100' : ''); ?>"
                                                        wire:click.prevent="setSize('<?php echo e($size->vname); ?>','<?php echo e($size->id); ?>')"
                                                        x-on:click="isTyped = false">
                                                        <?php echo e($size->vname); ?>

                                                    </li>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.size-model',[$size_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1553379168-5', $__slots ?? [], get_defined_vars());

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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!-- Quantity ------------------------------------------------------------------------------------------------->
            <div class="w-full">
                <label for="qty"></label>
                <input id="qty" wire:model.live="qty" class="block w-full purple-textbox-no-rounded"
                       autocomplete="false"
                       placeholder="Qty">
            </div>

            <!-- Price ---------------------------------------------------------------------------------------------------->
            <div class="w-full">
                <label for="price"></label>
                <input id="price" wire:model.live="price" class="block w-full purple-textbox-no-rounded"
                       autocomplete="false"
                       placeholder="price">
            </div>
            <button wire:click="addItems" class="px-3 justify-items-center py-1.5 md:px-3 bg-green-500 text-white font-semibold tracking-wider ">Add
            </button>
        </section>

        <!-- Display Items ----------------------------------------------------------------------------------------------->
        <section>
            <div class="py-2 mt-5 overflow-x-auto">

                <table class="overflow-x-auto md:w-full ">
                    <thead>
                    <tr class="h-8 text-xs bg-gray-100 border border-gray-300">

                        <th class="w-12 px-2 text-center border border-gray-300">#</th>

                        <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasPo_no()): ?>
                            <th class="px-2 text-center border border-gray-300">Po</th>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasDc_no()): ?>
                            <th class="px-2 text-center border border-gray-300">Dc</th>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasNo_of_roll()): ?>
                            <th class="px-2 text-center border border-gray-300">No of Roll</th>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <th class="px-2 text-center border border-gray-300">PRODUCT</th>

                        <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasColour()): ?>
                            <th class="px-2 text-center border border-gray-300">COLOUR</th>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasSize()): ?>
                            <th class="px-2 text-center border border-gray-300">SIZE</th>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <th class="px-2 text-center border border-gray-300">QTY</th>
                        <th class="px-2 text-center border border-gray-300">PRICE</th>
                        <th class="px-2 text-center border border-gray-300">TAXABLE</th>
                        <th class="px-2 text-center border border-gray-300">GST PERCENT</th>
                        <th class="px-2 text-center border border-gray-300">GST</th>
                        <th class="px-2 text-center border border-gray-300">SUBTOTAL</th>
                        <th class="w-12 px-1 text-center border border-gray-300">ACTION</th>
                    </tr>
                    </thead>

                    <!--Display Table Items ------------------------------------------------------------------------------->
                    <tbody>

                    <!--[if BLOCK]><![endif]--><?php if($itemList): ?>

                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $itemList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="border border-gray-400 hover:bg-amber-50">
                                <td class="text-center border border-gray-300 bg-gray-100">
                                    <button class="w-full h-full cursor-pointer"
                                            wire:click.prevent="changeItems(<?php echo e($index); ?>)">
                                        <?php echo e($index+1); ?>

                                    </button>
                                </td>


                                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasPo_no()): ?>
                                    <td class="px-2 text-left border border-gray-300 cursor-pointer"
                                        wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['po_no']); ?></td>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasDc_no()): ?>
                                    <td class="px-2 text-left border border-gray-300 cursor-pointer"
                                        wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['dc_no']); ?></td>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasNo_of_roll()): ?>
                                    <td class="px-2 text-left border border-gray-300 cursor-pointer"
                                        wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['no_of_roll']); ?></td>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <td class="px-2 text-left border border-gray-300 cursor-pointer"
                                    wire:click.prevent="changeItems(<?php echo e($index); ?>)">
                                    <div><?php echo e($row['product_name']); ?>

                                    <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasProductDescription()): ?>
                                       <?php echo e($row['description']); ?>

                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>

                                </td>

                                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasColour()): ?>
                                    <td class="px-2 text-left border border-gray-300 cursor-pointer"
                                        wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['colour_name']); ?></td>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasSize()): ?>
                                    <td class="px-2 text-left border border-gray-300 cursor-pointer"
                                        wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['size_name']); ?></td>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <td class="px-2 text-center border border-gray-300 cursor-pointer"
                                    wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['qty']); ?></td>
                                <td class="px-2 text-right border border-gray-300 cursor-pointer"
                                    wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['price']); ?></td>
                                <td class="px-2 text-right border border-gray-300 cursor-pointer"
                                    wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['taxable']); ?></td>
                                <td class="px-2 text-center border border-gray-300 cursor-pointer"
                                    wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['gst_percent']); ?></td>
                                <td class="px-2 text-right border border-gray-300 cursor-pointer"
                                    wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['gst_amount']); ?></td>
                                <td class="px-2 text-right border border-gray-300 cursor-pointer"
                                    wire:click.prevent="changeItems(<?php echo e($index); ?>)"><?php echo e($row['subtotal']); ?></td>
                                <td class="text-center border border-gray-300">
                                    <button wire:click.prevent="removeItems(<?php echo e($index); ?>)"
                                            class="py-1.5 w-full text-red-500 items-center ">
                                        <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'trash','class' => 'block w-auto h-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'trash','class' => 'block w-auto h-6']); ?>
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
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>

                    <!-- Table Bottom ------------------------------------------------------------------------------------->
                    <tfoot class="mt-2">
                    <tr class="h-8 text-sm border border-gray-400 bg-cyan-50">
                        <td colspan="4" class="px-2 text-xs text-right border border-gray-300">&nbsp;TOTALS&nbsp;&nbsp;&nbsp;</td>
                        <td class="px-2 text-center border border-gray-300"><?php echo e($total_qty); ?></td>
                        <td class="px-2 text-center border border-gray-300">&nbsp;</td>
                        <td class="px-2 text-right border border-gray-300"><?php echo e($total_taxable); ?></td>
                        <td class="px-2 text-center border border-gray-300">&nbsp;</td>
                        <td class="px-2 text-right border border-gray-300"><?php echo e($total_gst); ?></td>
                        <td class="px-2 text-right border border-gray-300"><?php echo e($grandtotalBeforeRound); ?></td>
                        <td class="px-2 text-center border border-gray-300">&nbsp;</td>
                    </tr>
                    </tfoot>
                </table>

            </div>

        </section>
        <?php if (isset($component)) { $__componentOriginald02f4e077c8d394be64c99cbb1834d3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald02f4e077c8d394be64c99cbb1834d3e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.section-border','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

        <section class="grid grid-cols-2 gap-2 ">
            <!-- Bottom Left -------------------------------------------------------------------------------------------------->
            <section class="w-full">
                <div class="w-3/4">
                    <div class="flex flex-col gap-2 pt-5">
                        <div class="xl:flex w-full gap-2">

                            <!-- Ledger ----------------------------------------------------------------------------------->
                            <label for="ledger_name" class="w-[10rem] text-zinc-500 tracking-wide py-2">Ledger</label>
                            <div x-data="{isTyped: <?php if ((object) ('ledgerTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('ledgerTyped'->value()); ?>')<?php echo e('ledgerTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('ledgerTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false"
                                 class='w-full'>
                                <div class="relative">
                                    <input
                                        id="ledger_name"
                                        type="search"
                                        wire:model.live="ledger_name"
                                        autocomplete="off"
                                        placeholder="Ledger.."
                                        @focus="isTyped = true"
                                        @keydown.escape.window="isTyped = false"
                                        @keydown.tab.window="isTyped = false"
                                        @keydown.enter.prevent="isTyped = false"
                                        wire:keydown.arrow-up="decrementLedger"
                                        wire:keydown.arrow-down="incrementLedger"
                                        wire:keydown.enter="enterLedger"
                                        class="block w-full purple-textbox"
                                    />
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['ledger_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-500"><?php echo e('The Ledger is Required.'); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

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
                                                    <!--[if BLOCK]><![endif]--><?php if($ledgerCollection): ?>
                                                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $ledgerCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $ledger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightLedger === $i ? 'bg-yellow-100' : ''); ?>"
                                                                wire:click.prevent="setLedger('<?php echo e($ledger->vname); ?>','<?php echo e($ledger->id); ?>')"
                                                                x-on:click="isTyped = false">
                                                                <?php echo e($ledger->vname); ?>

                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.ledger-model',[$ledger_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1553379168-6', $__slots ?? [], get_defined_vars());

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

                    <!-- Transport ---------------------------------------------------------------------------------------->

                    <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasTransport()): ?>
                        <div class="flex flex-col gap-2 pt-5">
                            <div class="xl:flex w-full gap-2">
                                <label for="transport_name"
                                       class="w-[10rem] text-zinc-500 tracking-wide py-2">Transport</label>
                                <div x-data="{isTyped: <?php if ((object) ('transportTyped') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('transportTyped'->value()); ?>')<?php echo e('transportTyped'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('transportTyped'); ?>')<?php endif; ?>}" @click.away="isTyped = false"
                                     class="w-full">
                                    <div class="relative">
                                        <input
                                            id="transport_name"
                                            type="search"
                                            wire:model.live="transport_name"
                                            autocomplete="off"
                                            placeholder="Transport.."
                                            @focus="isTyped = true"
                                            @keydown.escape.window="isTyped = false"
                                            @keydown.tab.window="isTyped = false"
                                            @keydown.enter.prevent="isTyped = false"
                                            wire:keydown.arrow-up="decrementTransport"
                                            wire:keydown.arrow-down="incrementTransport"
                                            wire:keydown.enter="enterTransport"
                                            class="block w-full purple-textbox"
                                        />
                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['transport_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-red-500"><?php echo e('The Transport is Required.'); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

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
                                                        <!--[if BLOCK]><![endif]--><?php if($transportCollection): ?>
                                                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $transportCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                <li class="cursor-pointer px-3 py-1 hover:font-bold hover:bg-yellow-100 border-b border-gray-300 h-8
                                                        <?php echo e($highlightTransport === $i ? 'bg-yellow-100' : ''); ?>"
                                                                    wire:click.prevent="setTransport('<?php echo e($transport->vname); ?>','<?php echo e($transport->id); ?>')"
                                                                    x-on:click="isTyped = false">
                                                                    <?php echo e($transport->vname); ?>

                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('controls.model.common.transport-mode',[$transport_name]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1553379168-7', $__slots ?? [], get_defined_vars());

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
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasDestination()): ?>
                        <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'destination','label' => 'Destination']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'destination','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Destination')]); ?>
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
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if(\Aaran\Aadmin\Src\SaleEntry::hasBundle()): ?>
                        <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'bundle','label' => 'Bundle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'bundle','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Bundle')]); ?>
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
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </section>

            <!-- Bottom Right  -------------------------------------------------------------------------------------------->

            <section class="w-full">
                <div class="w-3/4 mr-3 ml-auto ">

                    <?php if (isset($component)) { $__componentOriginal125b9b8674aa2979b8bad8bd582d1c91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125b9b8674aa2979b8bad8bd582d1c91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.model-text','data' => ['wire:model' => 'additional','wire:change.debounce' => 'calculateTotal','class' => 'md:text-right purple-textbox w-full md:ml-20','label' => 'Additional']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.model-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'additional','wire:change.debounce' => 'calculateTotal','class' => 'md:text-right purple-textbox w-full md:ml-20','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Additional')]); ?>
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


                    <div class="grid w-full md:grid-cols-2 pt-6">
                        <label
                            class="md:px-3 md:pb-2 text-left text-gray-600 text-md">Taxable&nbsp;Amount&nbsp;:&nbsp;&nbsp;</label>
                        <label class="ml-8 md:px-3 md:pb-2 text-right text-gray-800 text-md"><?php echo e($total_taxable); ?></label>
                    </div>


                    <div class="grid w-full grid-cols-2 pt-6">
                        <label
                            class="px-3 pb-2 text-left text-gray-600 text-md">Gst&nbsp;:&nbsp;&nbsp;</label>
                        <label class="px-3 pb-2 text-right text-gray-800 text-md"><?php echo e($total_gst); ?></label>
                    </div>


                    <div class="grid w-full grid-cols-2 pt-6">
                        <label
                            class="px-3 pb-2 text-left text-gray-600 text-md">Round off&nbsp;:&nbsp;&nbsp;</label>
                        <label class="px-3 pb-2 text-right text-gray-800 text-md"><?php echo e($round_off); ?></label>
                    </div>


                    <div class="grid w-full grid-cols-2 pt-6">
                        <label
                            class="mr-3 md:px-3 md:pb-2 text-xl text-left  text-gray-600">Grand&nbsp;Total&nbsp;:&nbsp;&nbsp;</label>
                        <label
                            class="ml-8  px-3 pb-2  md:px-3 md:pb-2 text-xl font-extrabold text-right text-gray-800"><?php echo e($grand_total); ?></label>
                    </div>
                </div>
            </section>

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
    <?php if (isset($component)) { $__componentOriginal96d4f847d403d43e57a7bbea90baa0b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96d4f847d403d43e57a7bbea90baa0b7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.m-panel-bottom-button','data' => ['save' => true,'back' => true,'print' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.m-panel-bottom-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['save' => true,'back' => true,'print' => true]); ?>
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

<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/entries/sales/upsert.blade.php ENDPATH**/ ?>