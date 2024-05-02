<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal240b346222373db75a76d6fd86b68b0d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal240b346222373db75a76d6fd86b68b0d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.authentication-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.authentication-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('logo', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal61b59373c24a77451c21074fea234917 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61b59373c24a77451c21074fea234917 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.assets.logo.cxlogo','data' => ['icon' => 'light','class' => 'h-16 ml-4 mx-auto w-auto  block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('assets.logo.cxlogo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('light'),'class' => 'h-16 ml-4 mx-auto w-auto  block']); ?>
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
         <?php $__env->endSlot(); ?>

        <?php if (isset($component)) { $__componentOriginal4151bb3060f1ac8bccc8bc754e59a995 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4151bb3060f1ac8bccc8bc754e59a995 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.validation-errors','data' => ['class' => 'mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4151bb3060f1ac8bccc8bc754e59a995)): ?>
<?php $attributes = $__attributesOriginal4151bb3060f1ac8bccc8bc754e59a995; ?>
<?php unset($__attributesOriginal4151bb3060f1ac8bccc8bc754e59a995); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4151bb3060f1ac8bccc8bc754e59a995)): ?>
<?php $component = $__componentOriginal4151bb3060f1ac8bccc8bc754e59a995; ?>
<?php unset($__componentOriginal4151bb3060f1ac8bccc8bc754e59a995); ?>
<?php endif; ?>

        <?php $__sessionArgs = ['status'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <div class="mb-4 font-medium text-sm text-green-600">
            <?php echo e($value); ?>

        </div>
        <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div>
                <?php if (isset($component)) { $__componentOriginal981108a4a73438ece539c37b50c0f3cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal981108a4a73438ece539c37b50c0f3cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.label','data' => ['for' => 'email','value' => ''.e(__('Email')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','value' => ''.e(__('Email')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal981108a4a73438ece539c37b50c0f3cb)): ?>
<?php $attributes = $__attributesOriginal981108a4a73438ece539c37b50c0f3cb; ?>
<?php unset($__attributesOriginal981108a4a73438ece539c37b50c0f3cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal981108a4a73438ece539c37b50c0f3cb)): ?>
<?php $component = $__componentOriginal981108a4a73438ece539c37b50c0f3cb; ?>
<?php unset($__componentOriginal981108a4a73438ece539c37b50c0f3cb); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9e12c0b1d94b31146bf99bfb272201c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e12c0b1d94b31146bf99bfb272201c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.input','data' => ['id' => 'email','class' => 'block mt-1 w-full','type' => 'email','name' => 'email','value' => old('email'),'required' => true,'autofocus' => true,'autocomplete' => 'username']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'email','class' => 'block mt-1 w-full','type' => 'email','name' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email')),'required' => true,'autofocus' => true,'autocomplete' => 'username']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e12c0b1d94b31146bf99bfb272201c1)): ?>
<?php $attributes = $__attributesOriginal9e12c0b1d94b31146bf99bfb272201c1; ?>
<?php unset($__attributesOriginal9e12c0b1d94b31146bf99bfb272201c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e12c0b1d94b31146bf99bfb272201c1)): ?>
<?php $component = $__componentOriginal9e12c0b1d94b31146bf99bfb272201c1; ?>
<?php unset($__componentOriginal9e12c0b1d94b31146bf99bfb272201c1); ?>
<?php endif; ?>
            </div>

            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginal981108a4a73438ece539c37b50c0f3cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal981108a4a73438ece539c37b50c0f3cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.label','data' => ['for' => 'password','value' => ''.e(__('Password')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password','value' => ''.e(__('Password')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal981108a4a73438ece539c37b50c0f3cb)): ?>
<?php $attributes = $__attributesOriginal981108a4a73438ece539c37b50c0f3cb; ?>
<?php unset($__attributesOriginal981108a4a73438ece539c37b50c0f3cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal981108a4a73438ece539c37b50c0f3cb)): ?>
<?php $component = $__componentOriginal981108a4a73438ece539c37b50c0f3cb; ?>
<?php unset($__componentOriginal981108a4a73438ece539c37b50c0f3cb); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9e12c0b1d94b31146bf99bfb272201c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e12c0b1d94b31146bf99bfb272201c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.input','data' => ['id' => 'password','class' => 'block mt-1 w-full','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'current-password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'password','class' => 'block mt-1 w-full','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'current-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e12c0b1d94b31146bf99bfb272201c1)): ?>
<?php $attributes = $__attributesOriginal9e12c0b1d94b31146bf99bfb272201c1; ?>
<?php unset($__attributesOriginal9e12c0b1d94b31146bf99bfb272201c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e12c0b1d94b31146bf99bfb272201c1)): ?>
<?php $component = $__componentOriginal9e12c0b1d94b31146bf99bfb272201c1; ?>
<?php unset($__componentOriginal9e12c0b1d94b31146bf99bfb272201c1); ?>
<?php endif; ?>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <?php if (isset($component)) { $__componentOriginal790df55dca2b3e04beb0cb96474b7619 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal790df55dca2b3e04beb0cb96474b7619 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.checkbox','data' => ['id' => 'remember_me','name' => 'remember']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal790df55dca2b3e04beb0cb96474b7619)): ?>
<?php $attributes = $__attributesOriginal790df55dca2b3e04beb0cb96474b7619; ?>
<?php unset($__attributesOriginal790df55dca2b3e04beb0cb96474b7619); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal790df55dca2b3e04beb0cb96474b7619)): ?>
<?php $component = $__componentOriginal790df55dca2b3e04beb0cb96474b7619; ?>
<?php unset($__componentOriginal790df55dca2b3e04beb0cb96474b7619); ?>
<?php endif; ?>
                    <span class="ms-2 text-sm text-gray-600"><?php echo e(__('Remember me')); ?></span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <?php if(Route::has('password.request')): ?>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot your password?')); ?>

                    </a>
                <?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal498acac1005e068a94423e1928a2b120 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal498acac1005e068a94423e1928a2b120 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jet.button','data' => ['class' => 'ms-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ms-4']); ?>
                    <?php echo e(__('Log in')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal498acac1005e068a94423e1928a2b120)): ?>
<?php $attributes = $__attributesOriginal498acac1005e068a94423e1928a2b120; ?>
<?php unset($__attributesOriginal498acac1005e068a94423e1928a2b120); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal498acac1005e068a94423e1928a2b120)): ?>
<?php $component = $__componentOriginal498acac1005e068a94423e1928a2b120; ?>
<?php unset($__componentOriginal498acac1005e068a94423e1928a2b120); ?>
<?php endif; ?>
            </div>
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal240b346222373db75a76d6fd86b68b0d)): ?>
<?php $attributes = $__attributesOriginal240b346222373db75a76d6fd86b68b0d; ?>
<?php unset($__attributesOriginal240b346222373db75a76d6fd86b68b0d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal240b346222373db75a76d6fd86b68b0d)): ?>
<?php $component = $__componentOriginal240b346222373db75a76d6fd86b68b0d; ?>
<?php unset($__componentOriginal240b346222373db75a76d6fd86b68b0d); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH D:\web-app\aaran-soft\resources\views/auth/login.blade.php ENDPATH**/ ?>