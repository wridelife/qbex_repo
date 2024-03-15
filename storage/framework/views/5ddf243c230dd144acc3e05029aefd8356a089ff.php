<?php $__env->startSection('title'); ?>
    User Request
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.requestDetail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/requestDetail_template.blade.php ENDPATH**/ ?>