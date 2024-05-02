<nav class="z-10 bg-gray-50" x-data="{ open: false }">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between">
            <div class="text-zinc-600 font-bold text-xl">
                <a href="<?php echo e(route('home')); ?>" class="flex items-center">
                    <div class="p-1 lg:p-3 rounded py-3">
                        <?php if (isset($component)) { $__componentOriginal61b59373c24a77451c21074fea234917 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61b59373c24a77451c21074fea234917 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.assets.logo.cxlogo','data' => ['icon' => 'light','class' => 'h-9 ml-4 mx-auto w-auto  block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('assets.logo.cxlogo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('light'),'class' => 'h-9 ml-4 mx-auto w-auto  block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61b59373c24a77451c21074fea234917)): ?>
<?php $attributes = $__attributesOriginal61b59373c24a77451c21074fea234917; ?>
<?php unset($__attributesOriginal61b59373c24a77451c21074fea234917); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61b59373c24a77451c21074fea234917)): ?>
<?php $component = $__componentOriginal61b59373c24a77451c21074fea234917; ?>
<?php unset($__componentOriginal61b59373c24a77451c21074fea234917); ?>
<?php endif; ?>
                    </div>
                    <span
                        class="self-center text-3xl font-semibold whitespace-nowrap px-2 -mt-2 tracking-wider">CODEXSUN</span>
                </a>
            </div>

            <!--main menu ---------------------------------------------------------------------------------------------->
            <div class="hidden md:block">
                <ul class="flex items-center space-x-8">
                    <li>
                        <a class="text-2xl font-sans text-zinc-500 hover:bg-blue-100 hover:text-zinc-700 rounded-md px-2 hover:border-b-4 py-1 hover:border-blue-400 transition-all duration-500"
                           href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li>
                        <a class="text-2xl font-sans text-zinc-500 hover:bg-blue-100 hover:text-zinc-700 rounded-md px-2 hover:border-b-4 py-1 hover:border-blue-400 transition-all duration-500"
                           href="<?php echo e(route('service')); ?>">Project</a>
                    </li>
                    <li>
                        <a class="text-2xl font-sans text-zinc-500 hover:bg-blue-100 hover:text-zinc-700 rounded-md px-2 hover:border-b-4 py-1 hover:border-blue-400 transition-all duration-500"
                           href="<?php echo e(route('about')); ?>">About Us</a>
                    </li>
                    <li>
                        <a class="text-2xl font-sans text-zinc-500 hover:bg-blue-100 hover:text-zinc-700 rounded-md px-2 hover:border-b-4 py-1 hover:border-blue-400 transition-all duration-500"
                           href="<?php echo e(route('contact')); ?>">Contact</a>
                    </li>
                    <li>
                        <a class="text-2xl font-sans text-zinc-500 hover:bg-blue-100 hover:text-zinc-700 rounded-md px-2 hover:border-b-4 py-1 hover:border-blue-400 transition-all duration-500"
                           href="<?php echo e(route('posts')); ?>">Blog</a>
                    </li>
                </ul>
            </div>

            <!--hamburger button---------------------------------------------------------------------------------------->
            <div class="md:hidden">
                <nav>
                    <button class="w-10 h-10 relative focus:outline-none text-gray-800" @click="open = !open">
                        <div
                            class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                <span aria-hidden="true"
                      class="block absolute h-0.5 w-5 bg-current transform transition duration-700 ease-in-out"
                      :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                            <span aria-hidden="true"
                                  class="block absolute  h-0.5 w-5 bg-current   transform transition duration-700 ease-in-out"
                                  :class="{'opacity-0': open } "></span>
                            <span aria-hidden="true"
                                  class="block absolute  h-0.5 w-5 bg-current transform  transition duration-700 ease-in-out"
                                  :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                        </div>
                    </button>
                </nav>

            </div>

            <!--login--------------------------------------------------------------------------------------------------->
            <div class="hidden md:block">
                <?php if(Route::has('login')): ?>
                    <div id="menu" class="space-x-4 ">
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(route('dashboard')); ?>" role="button"
                               class="font-semibold text-xl hover:text-white hover:bg-green-400  px-3 py-1 rounded-md focus:outline-none focus:underline  transition ease-in-out duration-150">
                                Dashboard
                            </a>

                            <a
                                href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-semibold text-xl hover:text-white hover:bg-red-500 px-3 py-1 rounded-md
                                 focus:outline-none focus:underline transition ease-in-out duration-700"
                            >
                                Log out
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>

                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>"
                               class="font-semibold text-xl hover:text-white hover:bg-blue-600 px-3 py-1 rounded-md
                                   focus:outline-none transition ease-in-out duration-500">
                                Log in
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>


        <!--mobile view------------------------------------------------------------------------------------------------->
        <div :class="{'block': open, 'hidden': ! open}"
             class="hidden sm:hidden transform transition duration-800 ease-in-out w-1/2 text-center ml-auto mr-0 bg-gray-800 rounded-lg ">
            <ul class="mt-4 space-y-4">
                <li>
                    <a class="hover:underline font-serif block px-4 py-2 text-white "
                       href="<?php echo e(route('home')); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="hover:underline font-serif block px-4 py-2 text-white "
                       href="<?php echo e(route('service')); ?>">services</a>
                </li>
                <li>
                    <a class="hover:underline font-serif block px-4 py-2 text-white "
                       href="<?php echo e(route('about')); ?>">About Us</a>
                </li>
                <li>
                    <a class="hover:underline font-serif block px-4 py-2 text-white "
                       href="<?php echo e(route('contact')); ?>">Contact</a>
                </li>
                <li>
                    <a class="hover:underline font-serif block px-4 py-2 text-white "
                       href="<?php echo e(route('posts')); ?>">Blog</a>
                </li>


                <?php if(Route::has('login')): ?>

                    <?php if(auth()->guard()->check()): ?>
                        <li>
                            <a href="<?php echo e(route('dashboard')); ?>" role="button"
                               class="hover:underline font-serif block px-4 py-2 text-white ">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a
                                href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="hover:underline font-serif block px-4 py-2 text-white "
                            >
                                Log out
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(route('login')); ?>"
                               class="hover:underline font-serif block px-4 py-2 text-white ">
                                Log in
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/menu/web-top-new.blade.php ENDPATH**/ ?>