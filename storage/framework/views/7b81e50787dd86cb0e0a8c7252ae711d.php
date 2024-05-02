<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'sortable' => null,
    'direction' => null,
    'multiColumn' => null,
    'align' => 'center',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'sortable' => null,
    'direction' => null,
    'multiColumn' => null,
    'align' => 'center',
]); ?>
<?php foreach (array_filter(([
    'sortable' => null,
    'direction' => null,
    'multiColumn' => null,
    'align' => 'center',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<th
    <?php echo e($attributes->merge(['class' => 'px-2 py-2 bg-zinc-50 border border-gray-300'])->only('class')); ?>

>
    <!--[if BLOCK]><![endif]--><?php if (! ($sortable)): ?>
        <button <?php echo e($attributes->except('class')); ?> class="w-full
        flex items-center space-x-1 px-3
        text-md leading-4 font-semibold text-gray-500
        uppercase tracking-wider group focus:outline-none focus:underline">
            <span class="w-full text-<?php echo e($align); ?>"><?php echo e($slot); ?></span>
        </button>
    <?php else: ?>
        <button <?php echo e($attributes->except('class')); ?> class="w-full
        flex items-center space-x-1 px-3
        text-md leading-4 font-semibold text-gray-500
        uppercase tracking-wider group focus:outline-none focus:underline">
            <span class="w-full text-<?php echo e($align); ?>"><?php echo e($slot); ?></span>

            <span class="relative flex items-center">
                <!--[if BLOCK]><![endif]--><?php if($multiColumn): ?>
                    <!--[if BLOCK]><![endif]--><?php if($direction === 'asc'): ?>
                        <svg class="w-3 h-3 group-hover:opacity-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 absolute" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path></svg>
                    <?php elseif($direction === 'desc'): ?>
                        <div class="opacity-0 group-hover:opacity-100 absolute">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                          stroke-width="2"
                                                                          d="M5 15l7-7 7 7"></path></svg>
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                          stroke-width="2"
                                                                          d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                        <svg class="w-3 h-3 group-hover:opacity-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    <?php else: ?>
                        <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 15l7-7 7 7"></path></svg>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php else: ?>
                    <!--[if BLOCK]><![endif]--><?php if($direction === 'asc'): ?>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    <?php elseif($direction === 'desc'): ?>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                    <?php else: ?>
                        <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 15l7-7 7 7"></path></svg>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </span>
        </button>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</th>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/table/heading.blade.php ENDPATH**/ ?>