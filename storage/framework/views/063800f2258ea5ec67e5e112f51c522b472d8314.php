<div>
    <h3 class="dark:text-gray-400 block text-gray-800 text-lg underline font-semibold mb-2 w-full">
        <?php echo e(__('crud.admin.peakHours.name')); ?> : <?php echo e($ph->start_time); ?> - <?php echo e($ph->end_time); ?></h3>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['wire:submit.prevent' => 'updateServicePeakHour','action' => '#']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:submit.prevent' => 'updateServicePeakHour','action' => '#']); ?>
        <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['wire:model.defer' => 'min_price','wire:loading.attr' => 'disabled','name' => 'min_price','step' => '.01','label' => __('crud.inputs.min_price'),'space' => 'md:w-full','value' => '']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model.defer' => 'min_price','wire:loading.attr' => 'disabled','name' => 'min_price','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.min_price')),'space' => 'md:w-full','value' => '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
        <div class="flex flex-wrap -mb-4 md:mb-0">
            <?php if($errors->has('min_price')): ?>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="text-red-500">-> <?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
            <?php if(session()->has('peak_hour_success')): ?>
            <span class="text-green-500">
                <?php echo e(session()->get('peak_hour_success')); ?>

            </span>
            <?php endif; ?>
        </div>
        <div class="flex justify-end mb-6">
            <button wire:loading.remove type="submit"
                class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"><?php echo e(__('crud.general.update')); ?>

                Charges For <?php echo e(__('crud.admin.peakHours.name')); ?></button>
            <button wire:loading disabled
                class="right-0 block py-1 px-4 leading-loose bg-green-500 hover:bg-green-400 text-white font-semibold rounded-lg transition duration-200 text-sm"><i
                    class="fa-spinner fa-pulse fa"></i> <?php echo e(__('crud.general.updating')); ?> Charges For
                <?php echo e(__('crud.admin.peakHours.name')); ?></button>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/cab/resources/views/livewire/service-type-peak-hour.blade.php ENDPATH**/ ?>