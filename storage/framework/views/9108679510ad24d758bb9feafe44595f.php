<header class="flex items-center px-4 py-3 text-semibold text-gray-800  border-b shadow-md print:hidden">

    <div class="w-full px-2 flex justify-between items-center">

        <div class="p-1 cursor-pointer hover:bg-gray-200 "
             @click="sidebarOpen = !sidebarOpen">

            <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': sidebarOpen, 'inline-flex': ! sidebarOpen }" class="inline-flex"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
                <path :class="{'hidden': ! sidebarOpen, 'inline-flex': sidebarOpen }" class="hidden"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>

        </div>

        <div class="w-full flex justify-between items-center">

            <!-- Page Heading -->
            <div class="ml-4 font-semibold text-xl text-gray-800 leading-tight justify-start shrink-0 ">

                <?php echo e($slot); ?>

            </div>

            <div class="flex w-full justify-end">

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('sys.default-company.index', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2443748684-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                
                
                

            </div>

            
            <div class="sm:flex sm:items-center sm:ml-3">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <?php if (isset($component)) { $__componentOriginal5954c031019ccaf1a9ccc0ed3b962050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5954c031019ccaf1a9ccc0ed3b962050 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                         <?php $__env->slot('trigger', null, []); ?> 
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-10 w-12 rounded-full object-cover"
                                             src="<?php echo e(Auth::user()->profile_photo_url); ?>"
                                             alt="<?php echo e(Auth::user()->name); ?>"/>
                                    </button>
                                <?php else: ?>
                                    <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        <?php echo e(Auth::user()->name); ?>


                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                                <?php endif; ?>
                            <?php endif; ?>
                         <?php $__env->endSlot(); ?>


                         <?php $__env->slot('content', null, []); ?> 

                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                <?php echo e(__('Manage Account')); ?>

                            </div>

                            <?php if (isset($component)) { $__componentOriginalcafa6812ff59710a937cc54aeae6f335 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcafa6812ff59710a937cc54aeae6f335 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.dropdown-link','data' => ['href' => ''.e(route('profile.show')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('profile.show')).'']); ?>
                                <?php echo e(__('Profile')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcafa6812ff59710a937cc54aeae6f335)): ?>
<?php $attributes = $__attributesOriginalcafa6812ff59710a937cc54aeae6f335; ?>
<?php unset($__attributesOriginalcafa6812ff59710a937cc54aeae6f335); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcafa6812ff59710a937cc54aeae6f335)): ?>
<?php $component = $__componentOriginalcafa6812ff59710a937cc54aeae6f335; ?>
<?php unset($__componentOriginalcafa6812ff59710a937cc54aeae6f335); ?>
<?php endif; ?>

                            
                            
                            
                            
                            

                            <!-- Authentication -->
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php if (isset($component)) { $__componentOriginalcafa6812ff59710a937cc54aeae6f335 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcafa6812ff59710a937cc54aeae6f335 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                    <?php echo e(__('Log Out')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcafa6812ff59710a937cc54aeae6f335)): ?>
<?php $attributes = $__attributesOriginalcafa6812ff59710a937cc54aeae6f335; ?>
<?php unset($__attributesOriginalcafa6812ff59710a937cc54aeae6f335); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcafa6812ff59710a937cc54aeae6f335)): ?>
<?php $component = $__componentOriginalcafa6812ff59710a937cc54aeae6f335; ?>
<?php unset($__componentOriginalcafa6812ff59710a937cc54aeae6f335); ?>
<?php endif; ?>
                            </form>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5954c031019ccaf1a9ccc0ed3b962050)): ?>
<?php $attributes = $__attributesOriginal5954c031019ccaf1a9ccc0ed3b962050; ?>
<?php unset($__attributesOriginal5954c031019ccaf1a9ccc0ed3b962050); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5954c031019ccaf1a9ccc0ed3b962050)): ?>
<?php $component = $__componentOriginal5954c031019ccaf1a9ccc0ed3b962050; ?>
<?php unset($__componentOriginal5954c031019ccaf1a9ccc0ed3b962050); ?>
<?php endif; ?>
                </div>
            </div>

            

        </div>

    </div>
</header>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/menu/top-menu.blade.php ENDPATH**/ ?>