<div class="flex flex-wrap w-full">
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.inputs.user_condition'),'name' => 'user_condition','wire:model' => 'user_condition']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.user_condition')),'name' => 'user_condition','wire:model' => 'user_condition']); ?>
        <option <?php echo e($user_condition == "ALL" ? "selected" : ""); ?> value="ACTIVE">For Active Users In</option>
        <option <?php echo e($user_condition == "USERS" ? "selected" : ""); ?> value="LOCATION">Users Who Are In</option>
        <option <?php echo e($user_condition == "PROVIDERS" ? "selected" : ""); ?> value="RIDES">Who Used the Service More Than</option>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if($user_condition == 'ACTIVE'): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.inputs.active_duration'),'name' => 'user_active','wire:model' => 'condition_data','wire:ignore' => true]]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.active_duration')),'name' => 'user_active','wire:model' => 'condition_data','wire:ignore' => true]); ?>
            <option <?php echo e($condition_data == "HOUR" ? "selected" : ""); ?> value="HOUR">Last One Hour</option>
            <option <?php echo e($condition_data == "WEEK" ? "selected" : ""); ?> value="WEEK">Last Week</option>
            <option <?php echo e($condition_data == "MONTH" ? "selected" : ""); ?> value="MONTH">Last Month</option>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php elseif($user_condition == 'LOCATION'): ?>
        <div class="w-full px-4 mb-6 md:mb-0 md:w-1/2">
            <label class=" dark:text-gray-400 block text-gray-800 text-sm font-semibold mb-2" for="location">
                <?php echo e(__('crud.general.location')); ?>

            </label>
            <input type="text" id="location" name="user_location" value="" autocomplete="off" wire:model.defer="condition_data" class="appearance-none w-full p-4 text-xs font-semibold leading-none rounded outline-none bg-gray-50 dark:bg-gray-700 dark:text-gray-300" placeholder="Enter crud.inputs.location">
        </div>
        
    <?php elseif($user_condition == 'RIDES'): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'user_rides','label' => __('crud.inputs.num_trips'),'wire:model.defer' => 'condition_data','value' => '']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'user_rides','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.num_trips')),'wire:model.defer' => 'condition_data','value' => '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
</div><?php /**PATH /var/www/cab/resources/views/livewire/user-custom-push.blade.php ENDPATH**/ ?>