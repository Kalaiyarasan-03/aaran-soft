<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['column','class'=>'']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['column','class'=>'']); ?>
<?php foreach (array_filter((['column','class'=>'']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<th class="text-center whitespace-nowrap border border-gray-300  bg-zinc-50 py-2  text-gray-500">
    <a class="flex-shrink-0 px-3" <?php echo e($attributes->merge(['class' => $class])); ?>

    role="button"
       href="#">
        <?php echo e($slot); ?>

    </a></th>


<?php /**PATH D:\web-app\aaran-soft\resources\views/components/table/ths-center.blade.php ENDPATH**/ ?>