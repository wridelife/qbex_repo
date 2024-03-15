<div class="flex flex-wrap w-full">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.inputs.type'),'name' => 'send_to','wire:model' => 'send_to','wire:ignore' => true]]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.type')),'name' => 'send_to','wire:model' => 'send_to','wire:ignore' => true]); ?>
        <option <?php echo e($send_to == "ALL" ? "selected" : ""); ?> value="ALL">All</option>
        <option <?php echo e($send_to == "USERS" ? "selected" : ""); ?> value="USERS">User</option>
        <option <?php echo e($send_to == "PROVIDERS" ? "selected" : ""); ?> value="PROVIDERS">Provider</option>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.datetime','data' => ['name' => 'schedule_at','label' => __('crud.inputs.schedule_at'),'wire:model' => 'scheduled_at','value' => '']]); ?>
<?php $component->withName('inputs.datetime'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'schedule_at','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.schedule_at')),'wire:model' => 'scheduled_at','value' => '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if($send_to == 'USERS'): ?>
       <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-custom-push', [
            'user_condition' => $condition,
            'condition_data' => $condition_data
        ])->html();
} elseif ($_instance->childHasBeenRendered('l606218570-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l606218570-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l606218570-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l606218570-0');
} else {
    $response = \Livewire\Livewire::mount('user-custom-push', [
            'user_condition' => $condition,
            'condition_data' => $condition_data
        ]);
    $html = $response->html();
    $_instance->logRenderedChild('l606218570-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php elseif($send_to == 'PROVIDERS'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('provider-custom-push', [
            'provider_condition' => $condition,
            'condition_data' => $condition_data
        ])->html();
} elseif ($_instance->childHasBeenRendered('l606218570-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l606218570-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l606218570-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l606218570-1');
} else {
    $response = \Livewire\Livewire::mount('provider-custom-push', [
            'provider_condition' => $condition,
            'condition_data' => $condition_data
        ]);
    $html = $response->html();
    $_instance->logRenderedChild('l606218570-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>
</div><?php /**PATH /var/www/cab/resources/views/livewire/custom-push.blade.php ENDPATH**/ ?>