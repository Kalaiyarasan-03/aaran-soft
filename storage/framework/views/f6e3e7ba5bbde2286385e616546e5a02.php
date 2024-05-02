<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'left' => false,
    'center' => false,
    'right' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'left' => false,
    'center' => false,
    'right' => false,
]); ?>
<?php foreach (array_filter(([
    'left' => false,
    'center' => false,
    'right' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<th <?php echo e($attributes->class([
    'tracking-wider border border-gray-300  bg-zinc-50 py-1.5 px-1 text-sm text-gray-400',
    'text-left'=>$left,
    'text-center'=>$center,
    'text-right'=>$right,
])); ?>>
    <?php echo e($slot); ?>

</th>


<?php /**PATH D:\web-app\aaran-soft\resources\views/components/table/header-text.blade.php ENDPATH**/ ?>