

<?php $__env->startSection('content'); ?>
<!-- Page Heading -->


<!-- Content Row -->
<div class="row shadow">
    <iframe src="<?php echo e(url('languages')); ?>" allowfullscreen
        style="width: 100%; height: 800px; border:none; border-radius: 10px;"
        class="embed-responsive-item smallScroll"></iframe>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/translations.blade.php ENDPATH**/ ?>