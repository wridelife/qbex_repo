<?php $attributes = $attributes->exceptProps([
    'name',
    'label',
    'space' => null,
]); ?>
<?php foreach (array_filter(([
    'name',
    'label',
    'space' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="w-full px-4 mb-4 md:mb-0 <?php echo e($space ? $space : "md:w-1/2"); ?>">
    <div class="mb-6">
        <?php if($label ?? null): ?>
            <?php echo $__env->make('components.inputs.partials.label', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <textarea 
            id="<?php echo e($name); ?>"
            name="<?php echo e($name); ?>"
            rows="3"
            <?php echo e(($required ?? false) ? 'required' : ''); ?>

            autocomplete="off"
            class="appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none dark:bg-gray-700 dark:text-gray-300"
        ><?php echo e($slot); ?></textarea>
    </div>
</div><?php /**PATH /var/www/cab/resources/views/components/inputs/textarea.blade.php ENDPATH**/ ?>