<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
    <script rel="stylesheet" src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="<?php echo e(asset('js/init-alpine.js')); ?>"></script>
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="<?php echo e(asset('img/login-office.jpeg')); ?>" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src="<?php echo e(asset('img/login-office-dark.jpeg')); ?>" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <form action="<?php echo e(route('admin.login')); ?>" method="post">
                            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                <?php echo e(__('crud.general.login')); ?></h1>
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400"><?php echo e(__('crud.inputs.email')); ?></span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="janeDoe@mail.com" name="email" autofocus
                                    <?php if(config('constants.demo_mode', '') == '1'): ?>
                                    value="<?php echo e(old('email', 'admin@dragon.com')); ?>"
                                    <?php else: ?>
                                    value="<?php echo e(old('email')); ?>"
                                    <?php endif; ?>
                                     />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400"><?php echo e(__('crud.inputs.password')); ?></span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="**********" type="password" name="password" 
                                    <?php if(config('constants.demo_mode', '') == '1'): ?>
                                    value="password"
                                    <?php endif; ?>
                                     />
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </label>

                            <?php echo csrf_field(); ?>
                            <button type="submit"
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"><?php echo e(__('crud.general.login')); ?></button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/notyf.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/notyf.css')); ?>">
    <script>
        const notyf = new Notyf({
                duration: 2500,
                position: {
                    x: 'right',
                    y: 'top',
                },
                dismissible: true
            });
    </script>
    <?php if($errors->any()): ?>
    <script>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    notyf.error("<?php echo e($error); ?>");
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
    <?php endif; ?>
</body>

</html><?php /**PATH /var/www/cab/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>