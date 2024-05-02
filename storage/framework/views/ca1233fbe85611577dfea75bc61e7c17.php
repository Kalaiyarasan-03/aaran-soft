<div class="p-12 bg-neutral-200">
    <div class=" bg-white  rounded-lg sm:px-6 p-10 lg:px-8  space-y-4">
        <!--[if BLOCK]><![endif]--><?php if($id==0): ?>
            <h1 class="text-center font-extrabold text-4xl text-green-800">Create Your Blog</h1>
        <?php else: ?>
            <h1 class="text-center font-extrabold text-4xl text-blue-700">Edit Your Blog</h1>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <div class="gap-2 ">
            <label for="title">Title</label>
            <input wire:model="title" id="title" class="w-full purple-textbox">
        </div>

        <div class="gap-5">
            <label for="body">Body</label>
            <?php if (isset($component)) { $__componentOriginal17d23910dd41851864ca92c8841a0308 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17d23910dd41851864ca92c8841a0308 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.rich-text','data' => ['wire:model' => 'body','height' => 'h-96','placeholder' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.rich-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'body','height' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('h-96'),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17d23910dd41851864ca92c8841a0308)): ?>
<?php $attributes = $__attributesOriginal17d23910dd41851864ca92c8841a0308; ?>
<?php unset($__attributesOriginal17d23910dd41851864ca92c8841a0308); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17d23910dd41851864ca92c8841a0308)): ?>
<?php $component = $__componentOriginal17d23910dd41851864ca92c8841a0308; ?>
<?php unset($__componentOriginal17d23910dd41851864ca92c8841a0308); ?>
<?php endif; ?>
        </div>

        <div class=" flex-items-center pt-2">
            <label class="w-[10rem] text-zinc-500 tracking-wide py-2">Image</label>
            <div class="flex-shrink-0 h-80 w-80 mr-4">
                <!--[if BLOCK]><![endif]--><?php if($image): ?>
                    Photo Preview:
                    <img
                        src="<?php echo e($isUploaded? $image->temporaryUrl() : url(\Illuminate\Support\Facades\Storage::url($image))); ?>"
                        width="250" height="250">
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>

            <div>
                <input type="file" wire:model="image" class="">
                <button wire:click.prevent="save_image"></button>
            </div>
        </div>

        <div class="flex gap-2">
            <div class="text-end">
                <?php if (isset($component)) { $__componentOriginal76a5a562ecfea092c39dd7341f8e47da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76a5a562ecfea092c39dd7341f8e47da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.save','data' => ['wire:click.prevent' => 'save','class' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.save'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click.prevent' => 'save','class' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76a5a562ecfea092c39dd7341f8e47da)): ?>
<?php $attributes = $__attributesOriginal76a5a562ecfea092c39dd7341f8e47da; ?>
<?php unset($__attributesOriginal76a5a562ecfea092c39dd7341f8e47da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76a5a562ecfea092c39dd7341f8e47da)): ?>
<?php $component = $__componentOriginal76a5a562ecfea092c39dd7341f8e47da; ?>
<?php unset($__componentOriginal76a5a562ecfea092c39dd7341f8e47da); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginala0a709ee50522d2384532798ae8bd5ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a709ee50522d2384532798ae8bd5ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.back','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a709ee50522d2384532798ae8bd5ac)): ?>
<?php $attributes = $__attributesOriginala0a709ee50522d2384532798ae8bd5ac; ?>
<?php unset($__attributesOriginala0a709ee50522d2384532798ae8bd5ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a709ee50522d2384532798ae8bd5ac)): ?>
<?php $component = $__componentOriginala0a709ee50522d2384532798ae8bd5ac; ?>
<?php unset($__componentOriginala0a709ee50522d2384532798ae8bd5ac); ?>
<?php endif; ?>
            </div>

            <div>
                <!--[if BLOCK]><![endif]--><?php if($id!=0): ?>
                    <button wire:click="set_delete(<?php echo e($id); ?>)" wire:confirm="Are you sure you want to delete this ?"
                            class='inline-flex items-center px-2 py-2 border border-transparent
                               rounded-md font-semibold text-xs text-white uppercase tracking-widest
                               focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150
                               focus:ring-red-500 bg-red-600 hover:bg-red-500 active:bg-red-700 border-red-600'>&nbsp;
                        <?php if (isset($component)) { $__componentOriginal9ac924c5c420f7949c263872f514d839 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac924c5c420f7949c263872f514d839 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.icon','data' => ['icon' => 'trash','class' => 'h-5 w-auto block px-1.5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('trash'),'class' => 'h-5 w-auto block px-1.5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $attributes = $__attributesOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__attributesOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac924c5c420f7949c263872f514d839)): ?>
<?php $component = $__componentOriginal9ac924c5c420f7949c263872f514d839; ?>
<?php unset($__componentOriginal9ac924c5c420f7949c263872f514d839); ?>
<?php endif; ?>&nbsp;Delete
                    </button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]--></div>
        </div>
    </div>
</div>


<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/blog/post/upsert.blade.php ENDPATH**/ ?>