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

<div class="xl:flex flex-row gap-3 py-3 ">
    <label for="<?php echo e($label); ?>"
           class="w-[10rem] text-zinc-500 tracking-wide py-2"><?php echo e(Str::replace('_',' ',Str::ucfirst($label))); ?></label>

    <input type="checkbox" id="<?php echo e($label); ?>" autocomplete="off" <?php echo e($attributes); ?>

            class="h-5 w-5 mt-2 bg-gray-100 border-gray-300 rounded focus:ring-2 transition duration-300 ease-in-out text-green-400 focus:ring-green-500'"/>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/input/checkbox.blade.php ENDPATH**/ ?>