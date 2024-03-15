<?php $attributes = $attributes->exceptProps([
'status'
]); ?>
<?php foreach (array_filter(([
'status'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if(in_array($status ,
['COMPLETED'])): ?>
<span
    class="px-2 py-1 font-semibold leading-tight text-green-600 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100 text-xs">
    <?php echo e($status); ?>

</span>
<?php elseif(in_array($status ,
['SEARCHING','ACCEPTED','STARTED','ARRIVED','PICKEDUP','DROPPED'])): ?>
<span
    class="px-2 py-1 font-semibold leading-tight text-yellow-600 bg-yellow-100 rounded-full dark:text-yellow-100 dark:bg-yellow-700 text-xs">
    <?php echo e($status); ?>

</span>
<?php elseif($status =='SCHEDULED'): ?>
<span
    class="px-2 py-1 font-semibold leading-tight text-orange-600 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-700 text-xs">
    <?php echo e($status); ?>

</span>
<?php elseif($status =='CANCELLED'): ?>
<span
    class="px-2 py-1 font-semibold leading-tight text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700 text-xs">
    <?php echo e($status); ?>

</span>
<?php endif; ?><?php /**PATH /var/www/cab/resources/views/components/request-show-status.blade.php ENDPATH**/ ?>