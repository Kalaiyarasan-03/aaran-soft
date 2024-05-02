<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name')); ?></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.10-beta.0/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.13.10/dist/cdn.min.js"></script>
    <!-- Styles -->
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body class="font-sans antialiased">


<div x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen=false"
     class="min-h-screen bg-white print:bg-white">
    <div class="flex-1">

        <?php if (isset($component)) { $__componentOriginalab43d69aeff5c02e5207838f54312e77 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab43d69aeff5c02e5207838f54312e77 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.top-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.top-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($header); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab43d69aeff5c02e5207838f54312e77)): ?>
<?php $attributes = $__attributesOriginalab43d69aeff5c02e5207838f54312e77; ?>
<?php unset($__attributesOriginalab43d69aeff5c02e5207838f54312e77); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab43d69aeff5c02e5207838f54312e77)): ?>
<?php $component = $__componentOriginalab43d69aeff5c02e5207838f54312e77; ?>
<?php unset($__componentOriginalab43d69aeff5c02e5207838f54312e77); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal6cb0b1341c9a7e345e40fd2c068a2c4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cb0b1341c9a7e345e40fd2c068a2c4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.side-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.side-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cb0b1341c9a7e345e40fd2c068a2c4b)): ?>
<?php $attributes = $__attributesOriginal6cb0b1341c9a7e345e40fd2c068a2c4b; ?>
<?php unset($__attributesOriginal6cb0b1341c9a7e345e40fd2c068a2c4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cb0b1341c9a7e345e40fd2c068a2c4b)): ?>
<?php $component = $__componentOriginal6cb0b1341c9a7e345e40fd2c068a2c4b; ?>
<?php unset($__componentOriginal6cb0b1341c9a7e345e40fd2c068a2c4b); ?>
<?php endif; ?>

        <!-- Page Content -->
        <main class="p-3 bg-white print:bg-white">
            <?php echo e($slot); ?>

        </main>


    </div>
</div>
<?php if (isset($component)) { $__componentOriginal28174ed9fa6cdc4e8c05e1ad52ee0759 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28174ed9fa6cdc4e8c05e1ad52ee0759 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notify','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notify'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28174ed9fa6cdc4e8c05e1ad52ee0759)): ?>
<?php $attributes = $__attributesOriginal28174ed9fa6cdc4e8c05e1ad52ee0759; ?>
<?php unset($__attributesOriginal28174ed9fa6cdc4e8c05e1ad52ee0759); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28174ed9fa6cdc4e8c05e1ad52ee0759)): ?>
<?php $component = $__componentOriginal28174ed9fa6cdc4e8c05e1ad52ee0759; ?>
<?php unset($__componentOriginal28174ed9fa6cdc4e8c05e1ad52ee0759); ?>
<?php endif; ?>

<?php echo $__env->yieldPushContent('modals'); ?>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


<script>
    function copyToClipboard(id) {
        navigator.clipboard.writeText(id);
    }
</script>

<?php echo $__env->yieldPushContent('custom-scripts'); ?>

</body>
</html>
<?php /**PATH D:\web-app\aaran-soft\resources\views/layouts/app.blade.php ENDPATH**/ ?>