<?php $__env->startSection('title'); ?>
Admin - <?php echo e(__('crud.admin.settlements.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
<?php echo e(__('crud.admin.settlements.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full rounded-lg shadow-xs bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
    <div class="w-full px-5 py-5">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('admin.settlement.store')).'','method' => 'post']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('admin.settlement.store')).'','method' => 'post']); ?>
            <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                <?php
                    $user_type = old('request_from', 'provider');
                    $user_id = old('from_id', NULL);
                ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dynamic-settlement', [
                    'type' => $user_type, 
                    'id' => $user_id
                ])->html();
} elseif ($_instance->childHasBeenRendered('VLcRdtt')) {
    $componentId = $_instance->getRenderedChildComponentId('VLcRdtt');
    $componentTag = $_instance->getRenderedChildComponentTagName('VLcRdtt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VLcRdtt');
} else {
    $response = \Livewire\Livewire::mount('dynamic-settlement', [
                    'type' => $user_type, 
                    'id' => $user_id
                ]);
    $html = $response->html();
    $_instance->logRenderedChild('VLcRdtt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'amount','label' => __('crud.inputs.amount'),'value' => ''.e(old('amount', '')).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'amount','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.amount')),'value' => ''.e(old('amount', '')).'']); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.inputs.mode'),'name' => 'send_by']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.mode')),'name' => 'send_by']); ?>
                    <option <?php echo e(old('mode', '') == "Online" ? 'selected' : ''); ?> value="Online">Online</option>
                    <option <?php echo e(old('mode', '') == "Offline" ? 'selected' : ''); ?> value="Offline">Offline</option>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                    type="submit">Add <?php echo e(__('crud.admin.settlements.name')); ?></button>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/payment/create.blade.php ENDPATH**/ ?>