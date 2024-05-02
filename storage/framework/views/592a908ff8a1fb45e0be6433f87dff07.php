<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'label'=>''

]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'label'=>''

]); ?>
<?php foreach (array_filter(([
'label'=>''

]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="xl:flex flex-row gap-3 py-3">
    <label for="<?php echo e($label); ?>"
           class="w-[10rem] text-zinc-500 tracking-wide py-2"><?php echo e(Str::replace('_',' ',Str::ucfirst($label))); ?></label>
    <select id="<?php echo e($label); ?>" <?php echo e($attributes); ?> class="w-full purple-textbox">
        <?php echo e($slot); ?>

    </select>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/input/model-select.blade.php ENDPATH**/ ?>