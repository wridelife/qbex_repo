<?php 
    $editing = isset($peakHour);
?>

<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.time','data' => ['name' => 'start_time','space' => 'mb:w-full','label' => __('crud.inputs.start_time'),'value' => ''.e(old('start_time', ($editing ? $peakHour->start_time : ''))).'']]); ?>
<?php $component->withName('inputs.time'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'start_time','space' => 'mb:w-full','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.start_time')),'value' => ''.e(old('start_time', ($editing ? $peakHour->start_time : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.time','data' => ['name' => 'end_time','space' => 'mb:w-full','label' => __('crud.inputs.end_time'),'value' => ''.e(old('end_time', ($editing ? $peakHour->end_time : ''))).'']]); ?>
<?php $component->withName('inputs.time'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'end_time','space' => 'mb:w-full','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.end_time')),'value' => ''.e(old('end_time', ($editing ? $peakHour->end_time : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/cab/resources/views/admin/peakHour/form-inputs.blade.php ENDPATH**/ ?>