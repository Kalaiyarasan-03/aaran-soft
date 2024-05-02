<div>
     <?php $__env->slot('header', null, []); ?> Dashboard <?php $__env->endSlot(); ?>
    <div class="w-full h-screen">
        <div class="lg:flex justify-between gap-3 py-5 xl:pl-12 h-2/5 ">
            <div class="lg:w-1/4 ">
                <!--[if BLOCK]><![endif]--><?php if(Aaran\Aadmin\Src\Customise::hasTodoList()): ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('taskmanager.todos.index', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3851140180-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            </div>


            <!--[if BLOCK]><![endif]--><?php if(Aaran\Aadmin\Src\Customise::hasAttendance()): ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('attendance.attendance.index', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3851140180-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        </div>
        <div class="fixed right-0 px-2 py-2 text-gray-400 bottom-0">
            v-<?php echo e(config('aadmin.soft_version')); ?>-DB-<?php echo e(config('aadmin.soft_version')); ?>

            -<?php echo e(\Livewire\str()->ucfirst(config('aadmin.app_type'))); ?>

        </div>
    </div>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/dashboard/index.blade.php ENDPATH**/ ?>