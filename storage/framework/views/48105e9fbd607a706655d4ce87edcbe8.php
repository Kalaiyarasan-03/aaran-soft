<div x-show="sidebarOpen" x-transition.opacity.duration.600ms @click="sidebarOpen = false"
     class="fixed inset-0 bg-black bg-opacity-30 z-10 "></div>
<nav x-cloak
     class="absolute inset-0 transform duration-500 z-30 w-80 bg-gray-900 text-white h-auto print:hidden"
     :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': sidebarOpen === false}">
    <div class="flex justify-between px-5 py-6">
        <a href="<?php echo e(route('dashboard')); ?>" class="flex gap-3">
            <?php if (isset($component)) { $__componentOriginal61b59373c24a77451c21074fea234917 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61b59373c24a77451c21074fea234917 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.assets.logo.cxlogo','data' => ['icon' => 'dark','class' => 'h-10 w-auto block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('assets.logo.cxlogo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('dark'),'class' => 'h-10 w-auto block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61b59373c24a77451c21074fea234917)): ?>
<?php $attributes = $__attributesOriginal61b59373c24a77451c21074fea234917; ?>
<?php unset($__attributesOriginal61b59373c24a77451c21074fea234917); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61b59373c24a77451c21074fea234917)): ?>
<?php $component = $__componentOriginal61b59373c24a77451c21074fea234917; ?>
<?php unset($__componentOriginal61b59373c24a77451c21074fea234917); ?>
<?php endif; ?>
            <span class="font-bold text-2xl sm:text-3xl tracking-widest"><?php echo e(config('app.name')); ?></span>
        </a>

        <button
            class="focus:outline-none focus:bg-gray-700 hover:bg-gray-800 rounded-md text-gray-300"
            @click="sidebarOpen = false"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-8 w-8"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
    </div>

    <div class=" bg-gray-900 text-white h-full overflow-y-scroll">
        <ul class="flex flex-col py-6 space-y-1"
            x-data="{selected:null}">

            <?php if(Aaran\Aadmin\Src\MainMenu::hasAudit()): ?>
                <?php if (isset($component)) { $__componentOriginal55efcf060206c84a285e9e74e02ae743 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal55efcf060206c84a285e9e74e02ae743 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.sub.audit','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.sub.audit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal55efcf060206c84a285e9e74e02ae743)): ?>
<?php $attributes = $__attributesOriginal55efcf060206c84a285e9e74e02ae743; ?>
<?php unset($__attributesOriginal55efcf060206c84a285e9e74e02ae743); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal55efcf060206c84a285e9e74e02ae743)): ?>
<?php $component = $__componentOriginal55efcf060206c84a285e9e74e02ae743; ?>
<?php unset($__componentOriginal55efcf060206c84a285e9e74e02ae743); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if(Aaran\Aadmin\Src\MainMenu::hasTask()): ?>
                <?php if (isset($component)) { $__componentOriginal83889e343fadd2418bd9013faaa72b7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal83889e343fadd2418bd9013faaa72b7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.sub.task','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.sub.task'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal83889e343fadd2418bd9013faaa72b7d)): ?>
<?php $attributes = $__attributesOriginal83889e343fadd2418bd9013faaa72b7d; ?>
<?php unset($__attributesOriginal83889e343fadd2418bd9013faaa72b7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal83889e343fadd2418bd9013faaa72b7d)): ?>
<?php $component = $__componentOriginal83889e343fadd2418bd9013faaa72b7d; ?>
<?php unset($__componentOriginal83889e343fadd2418bd9013faaa72b7d); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if(Aaran\Aadmin\Src\MainMenu::hasEntries()): ?>
                <?php if (isset($component)) { $__componentOriginal8501f19797d56a830e048edc7272531d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8501f19797d56a830e048edc7272531d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.sub.entries','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.sub.entries'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8501f19797d56a830e048edc7272531d)): ?>
<?php $attributes = $__attributesOriginal8501f19797d56a830e048edc7272531d; ?>
<?php unset($__attributesOriginal8501f19797d56a830e048edc7272531d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8501f19797d56a830e048edc7272531d)): ?>
<?php $component = $__componentOriginal8501f19797d56a830e048edc7272531d; ?>
<?php unset($__componentOriginal8501f19797d56a830e048edc7272531d); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(Aaran\Aadmin\Src\MainMenu::hasAccounts()): ?>
                <?php if (isset($component)) { $__componentOriginal949000311103e6d582106ca1e119f1dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal949000311103e6d582106ca1e119f1dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.sub.accounts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.sub.accounts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal949000311103e6d582106ca1e119f1dd)): ?>
<?php $attributes = $__attributesOriginal949000311103e6d582106ca1e119f1dd; ?>
<?php unset($__attributesOriginal949000311103e6d582106ca1e119f1dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal949000311103e6d582106ca1e119f1dd)): ?>
<?php $component = $__componentOriginal949000311103e6d582106ca1e119f1dd; ?>
<?php unset($__componentOriginal949000311103e6d582106ca1e119f1dd); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if(Aaran\Aadmin\Src\MainMenu::hasMaster()): ?>
                <?php if (isset($component)) { $__componentOriginal00dcf90f52e54847f376f4087ce1eb2b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00dcf90f52e54847f376f4087ce1eb2b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.sub.master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.sub.master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal00dcf90f52e54847f376f4087ce1eb2b)): ?>
<?php $attributes = $__attributesOriginal00dcf90f52e54847f376f4087ce1eb2b; ?>
<?php unset($__attributesOriginal00dcf90f52e54847f376f4087ce1eb2b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00dcf90f52e54847f376f4087ce1eb2b)): ?>
<?php $component = $__componentOriginal00dcf90f52e54847f376f4087ce1eb2b; ?>
<?php unset($__componentOriginal00dcf90f52e54847f376f4087ce1eb2b); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if(Aaran\Aadmin\Src\MainMenu::hasCommon()): ?>
                <?php if (isset($component)) { $__componentOriginalf660b31751e46f2091ce03a7bf98c446 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf660b31751e46f2091ce03a7bf98c446 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.sub.common','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.sub.common'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf660b31751e46f2091ce03a7bf98c446)): ?>
<?php $attributes = $__attributesOriginalf660b31751e46f2091ce03a7bf98c446; ?>
<?php unset($__attributesOriginalf660b31751e46f2091ce03a7bf98c446); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf660b31751e46f2091ce03a7bf98c446)): ?>
<?php $component = $__componentOriginalf660b31751e46f2091ce03a7bf98c446; ?>
<?php unset($__componentOriginalf660b31751e46f2091ce03a7bf98c446); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(Aaran\Aadmin\Src\MainMenu::hasReport()): ?>
                <?php if (isset($component)) { $__componentOriginaldc8bf5e8531530ef4e734fac159634dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc8bf5e8531530ef4e734fac159634dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.sub.report','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.sub.report'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc8bf5e8531530ef4e734fac159634dc)): ?>
<?php $attributes = $__attributesOriginaldc8bf5e8531530ef4e734fac159634dc; ?>
<?php unset($__attributesOriginaldc8bf5e8531530ef4e734fac159634dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc8bf5e8531530ef4e734fac159634dc)): ?>
<?php $component = $__componentOriginaldc8bf5e8531530ef4e734fac159634dc; ?>
<?php unset($__componentOriginaldc8bf5e8531530ef4e734fac159634dc); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalb11545e89852d8f17ed59a87c5d2026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb11545e89852d8f17ed59a87c5d2026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.sub.logout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.sub.logout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb11545e89852d8f17ed59a87c5d2026f)): ?>
<?php $attributes = $__attributesOriginalb11545e89852d8f17ed59a87c5d2026f; ?>
<?php unset($__attributesOriginalb11545e89852d8f17ed59a87c5d2026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb11545e89852d8f17ed59a87c5d2026f)): ?>
<?php $component = $__componentOriginalb11545e89852d8f17ed59a87c5d2026f; ?>
<?php unset($__componentOriginalb11545e89852d8f17ed59a87c5d2026f); ?>
<?php endif; ?>
        </ul>
    </div>
</nav>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/menu/side-menu.blade.php ENDPATH**/ ?>