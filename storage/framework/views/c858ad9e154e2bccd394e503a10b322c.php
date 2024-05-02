<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name'=>'',
    'label'=>''
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name'=>'',
    'label'=>''
]); ?>
<?php foreach (array_filter(([
    'name'=>'',
    'label'=>''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="grid grid-cols-1 gap-2">
    <label for="<?php echo e($name); ?>" class="gray-label"><?php echo e($label); ?></label>
    <input type="text" id="<?php echo e($name); ?>" <?php echo e($attributes); ?>

           class="purple-textbox w-full purple-textbox"
           autofocus
           placeholder="<?php echo e($label); ?>"/>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/input/lookup-text.blade.php ENDPATH**/ ?>