<div>
    <select wire:model="acyear" wire:change="changeAcyear" class="purple-textbox w-[10rem]">
        <option class="text-gray-400"> choose ..</option>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Enums\AcYear::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($year->value); ?>"><?php echo e($year->getName()); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </select>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/controls/select/acyear-select.blade.php ENDPATH**/ ?>