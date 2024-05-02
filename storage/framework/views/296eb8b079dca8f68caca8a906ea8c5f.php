

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'placeholder' => null,
    'trailingAddOn' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'placeholder' => null,
    'trailingAddOn' => null,
]); ?>
<?php foreach (array_filter(([
    'placeholder' => null,
    'trailingAddOn' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex">
    <label>
        <select <?php echo e($attributes->merge(['class' => 'form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5' . ($trailingAddOn ? ' rounded-r-none' : '')])); ?>>
            <!--[if BLOCK]><![endif]--><?php if($placeholder): ?>
                <option disabled value=""><?php echo e($placeholder); ?></option>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <?php echo e($slot); ?>

        </select>
    </label>

    <!--[if BLOCK]><![endif]--><?php if($trailingAddOn): ?>
        <?php echo e($trailingAddOn); ?>

    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/input/select.blade.php ENDPATH**/ ?>