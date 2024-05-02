<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'left' => false,
    'center' => false,
    'right' => false,
    'colspan' => 0,
    'class' =>'text-zinc-600'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'left' => false,
    'center' => false,
    'right' => false,
    'colspan' => 0,
    'class' =>'text-zinc-600'
]); ?>
<?php foreach (array_filter(([
    'left' => false,
    'center' => false,
    'right' => false,
    'colspan' => 0,
    'class' =>'text-zinc-600'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<td colspan="<?php echo e($colspan); ?>" class = 'px-2 py-2 border border-gray-200 whitespace-no-wrap text-sm leading-2 text-gray-900'>
    <div <?php echo e($attributes->class([
            'tracking-wider font-semibold text-md',
            'text-left'=>$left,
            'text-center'=>$center,
            'text-right'=>$right,
            $class
        ])); ?>>
        <?php echo e($slot); ?>

    </div>
</td>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/table/cell-text.blade.php ENDPATH**/ ?>