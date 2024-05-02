<div class="flex-col space-y-4">
    <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full divide-y divide-cool-gray-200">
            <thead>
            <tr>
                <!--[if BLOCK]><![endif]--><?php if(isset($table_header)): ?>
                    <?php echo e($table_header); ?>

                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-cool-gray-200">
            <!--[if BLOCK]><![endif]--><?php if(isset($table_body)): ?>
                <?php echo e($table_body); ?>

            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    </div>
    <div class="py-2">
        <!--[if BLOCK]><![endif]--><?php if(isset($table_pagination)): ?>
            <?php echo e($table_pagination); ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/forms/table.blade.php ENDPATH**/ ?>