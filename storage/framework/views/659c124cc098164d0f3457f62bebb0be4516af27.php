<?php $attributes = $attributes->exceptProps([
    'name',
    'label',
    'value' => null,
    'space' => NULL,
]); ?>
<?php foreach (array_filter(([
    'name',
    'label',
    'value' => null,
    'space' => NULL,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="w-full px-4 mb-4 md:mb-0 <?php echo e($space ? $space : "md:w-1/2"); ?>" x-data="{ show: true }">
    <div class="mb-6 realtive">
        <div class="pb-2">
            <?php if($label ?? null): ?>
                <?php echo $__env->make('components.inputs.partials.label', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <div class="relative">
                <input :type="show ? 'password' : 'text'" class="dark:bg-gray-700 dark:text-gray-300 text-md block rounded w-full appearance-none p-4 text-xs font-semibold leading-none bg-gray-50 outline-none" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>" placeholder="<?php echo e($label); ?>">
                <div class="absolute inset-y-0 right-0 px-3 flex items-center text-sm leading-5 bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                    <span :class="{'hidden': !show, 'block':show }" class="cursor-pointer" @click="show = !show">
                        <i class="fa fa-eye-slash"></i>
                    </span>
                    <span :class="{'block': !show, 'hidden':show }" class="cursor-pointer" @click="show = !show">
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/cab/resources/views/components/inputs/password.blade.php ENDPATH**/ ?>