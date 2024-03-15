<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    

    <!-- Content Row -->
    <div class="row shadow">
        <iframe id="scaled-frame" src="<?php echo e(url('telescope/requests')); ?>" allowfullscreen style="width: 100%; height: 500px; border:none; border-radius: 10px;" class="embed-responsive-item smallScroll"></iframe>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/telescope.blade.php ENDPATH**/ ?>