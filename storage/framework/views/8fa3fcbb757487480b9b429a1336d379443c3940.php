<?php $__env->startSection('title'); ?>
<?php echo e(__('crud.general.tnc')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="relative bg-indigo-700 overflow-hidden">
    <div class="container px-4 mx-auto">
        <div class="mx-auto mt-10 lg:mb-16 max-w-md pb-10">
            <div class="max-w-2xl lg:max-w-md mb-6 text-white text-4xl">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading"><?php echo e(__('crud.general.tnc')); ?></h2>
            </div>
        </div>
    </div>
</section>
<section class="py-20">
    <div class="container px-4 mx-auto">
        <div class="max-w-2xl mx-auto">
            <?php echo getTnc(); ?>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/tnc.blade.php ENDPATH**/ ?>