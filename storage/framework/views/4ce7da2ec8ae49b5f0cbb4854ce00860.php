<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'height'=>'h-96',
    'placeholder'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'height'=>'h-96',
    'placeholder'
]); ?>
<?php foreach (array_filter(([
    'height'=>'h-96',
    'placeholder'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    wire:ignore.self
    class="rounded-md shadow-sm"
    x-data="{
        value: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>,
        isFocused() { return document.activeElement !== this.$refs.trix },
        setValue() { this.$refs.trix.editor.loadHTML(this.value) }
    }"
    x-init="setValue(); $watch('value', () => isFocused() && setValue())"
    x-on:trix-change="value = $event.target.value"
    <?php echo e($attributes->whereDoesntStartWith('wire:model')); ?>


>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
    <input id="x" class="hidden">
    <trix-editor x-ref="trix" input="x" placeholder="<?php echo e($placeholder); ?>"
                 class="overflow-auto text-ellipsis form-textarea block w-full text
                    rounded-lg appearance-none border-2 <?php echo e($height); ?>

                    border-gray-200 py-2 px-3 bg-white text-zinc-700
                    placeholder-gray-400 text-base focus:outline-none
                    focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-150 ease-in-out"></trix-editor>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/input/rich-text.blade.php ENDPATH**/ ?>