<?php $__env->startPush('startScripts'); ?>
    <link href="<?php echo e(asset('css/select2.min.css')); ?>" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
Admin - <?php echo e(__('crud.navlinks.setting')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
<?php echo e(__('crud.navlinks.setting')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.setting')->html();
} elseif ($_instance->childHasBeenRendered('103XsB1')) {
    $componentId = $_instance->getRenderedChildComponentId('103XsB1');
    $componentTag = $_instance->getRenderedChildComponentTagName('103XsB1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('103XsB1');
} else {
    $response = \Livewire\Livewire::mount('admin.setting');
    $html = $response->html();
    $_instance->logRenderedChild('103XsB1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/settings.blade.php ENDPATH**/ ?>