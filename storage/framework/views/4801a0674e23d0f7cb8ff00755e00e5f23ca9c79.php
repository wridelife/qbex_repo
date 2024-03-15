<?php 
    $editing = isset($customPush);
?>

<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <?php
        $send_to = old('send_to', '');
    ?>
    
    <div id="map" class="hidden"></div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('custom-push', [
        'send_to' => old('send_to', NULL),
        'condition' => $send_to == 'USERS' ? old('user_condition', NULL) : old('provider_condition', NULL),
        'condition_data' => old('condition_data', NULL),
        'scheduled_at' => old('schedule_at', NULL)
    ])->html();
} elseif ($_instance->childHasBeenRendered('PIhDU0o')) {
    $componentId = $_instance->getRenderedChildComponentId('PIhDU0o');
    $componentTag = $_instance->getRenderedChildComponentTagName('PIhDU0o');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PIhDU0o');
} else {
    $response = \Livewire\Livewire::mount('custom-push', [
        'send_to' => old('send_to', NULL),
        'condition' => $send_to == 'USERS' ? old('user_condition', NULL) : old('provider_condition', NULL),
        'condition_data' => old('condition_data', NULL),
        'scheduled_at' => old('schedule_at', NULL)
    ]);
    $html = $response->html();
    $_instance->logRenderedChild('PIhDU0o', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.textarea','data' => ['space' => 'w-full','label' => __('crud.inputs.message'),'name' => 'message','placeholder' => 'max. 255 Characters']]); ?>
<?php $component->withName('inputs.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'w-full','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.message')),'name' => 'message','placeholder' => 'max. 255 Characters']); ?><?php echo e(old('message', '')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php $__env->startPush('endScripts'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(config('constants.map_key')); ?>&libraries=places,geocoding"></script>

    <script>
        var map;
        let autcomplete;
        function initMap() {
            autocomplete = new google.maps.places.Autocomplete(document.getElementById('location'), {
                types: ['establishment'],
                fields: ['name']
            });
        }

        Livewire.on('loadSearchBox', function() {
            console.log("called this function");
            initMap();
        });

        initMap();
    </script>
<?php $__env->stopPush(); ?><?php /**PATH /var/www/cab/resources/views/admin/customPush/form-inputs.blade.php ENDPATH**/ ?>