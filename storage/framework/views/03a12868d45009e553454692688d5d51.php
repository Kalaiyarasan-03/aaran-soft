<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Styles -->
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body>
<div>
    <?php if (isset($component)) { $__componentOriginale726f4d31c7949bec9e9964786645389 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale726f4d31c7949bec9e9964786645389 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu.web-top-new','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu.web-top-new'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale726f4d31c7949bec9e9964786645389)): ?>
<?php $attributes = $__attributesOriginale726f4d31c7949bec9e9964786645389; ?>
<?php unset($__attributesOriginale726f4d31c7949bec9e9964786645389); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale726f4d31c7949bec9e9964786645389)): ?>
<?php $component = $__componentOriginale726f4d31c7949bec9e9964786645389; ?>
<?php unset($__componentOriginale726f4d31c7949bec9e9964786645389); ?>
<?php endif; ?>

    <?php echo e($slot); ?>


</div>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php echo $__env->yieldPushContent('custom-scripts'); ?>
</body>
</html>
<?php /**PATH D:\web-app\aaran-soft\resources\views/layouts/web.blade.php ENDPATH**/ ?>