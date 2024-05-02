<div>
    <div class="py-12 bg-neutral-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-20">
            <div><h1 class="text-black text-6xl font-extrabold">Latest Updates</h1>
            </div>

            <div class="text-right ">

                <!--[if BLOCK]><![endif]--><?php if(session()->get('company_id')!=''): ?>
                <?php if (isset($component)) { $__componentOriginal2ddbcc2abbd70977e6b075de7cbd13eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbcc2abbd70977e6b075de7cbd13eb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.new','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.new'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div class="'bg-blue-500 hover:bg-amber-950'">
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbcc2abbd70977e6b075de7cbd13eb)): ?>
<?php $attributes = $__attributesOriginal2ddbcc2abbd70977e6b075de7cbd13eb; ?>
<?php unset($__attributesOriginal2ddbcc2abbd70977e6b075de7cbd13eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbcc2abbd70977e6b075de7cbd13eb)): ?>
<?php $component = $__componentOriginal2ddbcc2abbd70977e6b075de7cbd13eb; ?>
<?php unset($__componentOriginal2ddbcc2abbd70977e6b075de7cbd13eb); ?>
<?php endif; ?><?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            </div>

            <div class="lg:grid lg:grid-cols-2">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="transition-colors bg-white duration-300 w-11/12 max-h-96 hover:shadow-2xl border border-black border-opacity-50 hover:border-opacity-5 rounded-xl
            text-ellipsis overflow-hidden mx-3 my-2 px-4 py-3">
                        <a href="<?php echo e(route('posts.views',[$row->id])); ?>">

                            <div class="mt-4">
                                <div>
                                    <div class="flex">
                                        <div>
                                            <div class="h-40 w-40 lg:mr-8">
                                                <img class="rounded-xl justify-items-start h-40 w-40 transition duration-300 ease-in-out hover:scale-110"
                                                     src="<?php echo e(\Illuminate\Support\Facades\Storage::url($row->image)); ?>">
                                            </div>
                                        </div>

                                        <div>
                                            <h1 class="text-3xl text-left capitalize">
                                                <?php echo e($row->title); ?>

                                            </h1>

                                            <div class=" text-lg mt-3 text-ellipsis overflow-hidden  space-y-4">
                                                <?php echo \Illuminate\Support\Str::limit($row->body, 100 ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <header class="mt-8 lg:mt-0">
                            <span class="mt-2 block text-gray-400 text-xs">
                                Published <time><?php echo e($row->created_at->diffForHumans()); ?></time>
                            </span>
                                    </header>
                                </div>

                                <footer>
                                    <div class="ml-3">
                                        <h5 class="font-bold capitalize">
                                            <?php echo e($row->user->name); ?>

                                        </h5>
                                    </div>
                                </footer>

                            </div>
                        </a>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>

    <footer>
        <div class="w-full bg-gray-800">
            <div
                class="container xl:flex sm:flex  w-full h-auto px-5 py-6 mx-auto flex items-center sm:flex-row flex-col dark:bg-gray-800">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                         stroke-linecap="round"
                         stroke-linejoin="round" stroke-width="2"
                         class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl text-white">AARAN </span>
                </a>
                <p class="text-sm text-gray-100 sm:ml-6 sm:mt-0 mt-4 ">© 2023 Sundar —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-200 ml-1"
                       target="_blank">@aaransoftwares@gmail.com</a>
                </p>
            </div>
        </div>
    </footer>
</div>


<?php /**PATH D:\web-app\aaran-soft\resources\views/livewire/blog/post/index.blade.php ENDPATH**/ ?>