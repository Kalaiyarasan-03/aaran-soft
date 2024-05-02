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

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<div class="form-group">
    <div wire:ignore>
        <textarea  id='description'
                  placeholder="<?php echo e($placeholder); ?>"
                  class="overflow-auto text-ellipsis form-textarea block w-full text
                    rounded-lg appearance-none border-2 <?php echo e($height); ?>

                    border-gray-200 py-2 px-3 bg-white text-zinc-700
                    placeholder-gray-400 text-base focus:outline-none
                    focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-150 ease-in-out"
        ></textarea>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        $('#description').summernote({
            placeholder: 'Enter description',
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('description', contents);
                }
            }
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/input/rich-text-editor.blade.php ENDPATH**/ ?>