<div x-data={showAdd:false}>
    <div class="grid grid-cols-3 gap-4 justify-between">
        <div class="col-span-2">
            <h2 class="text-2xl font-semibold dark:text-gray-400">Rental Packages</h2>
        </div>
        <div class="col-span-1"style="display: flex; align-items: flex-end; justify-content: flex-end;">
            <button @click="showAdd = !showAdd" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <?php echo e(__('crud.general.add')); ?> <?php echo e(__('crud.admin.serviceTypes.rental.name')); ?> <?php echo e(__('crud.inputs.for')); ?> <?php echo e(__('crud.admin.serviceTypes.name')); ?> 
                <i x-show="!showAdd" class="fa fa-angle-right"></i>
                <i x-show="showAdd" class="fa fa-angle-down"></i>
            </button>
        </div>
    </div>

    
    <form x-show.transition.origin.top.left="showAdd"  wire:submit.prevent="saveServiceRentalPackage" class="mt-3 w-full" method="post">
        <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['label' => __('crud.admin.serviceTypes.rental.hour'),'name' => 'hour','value' => '','wire:model.defer' => 'hour','showError' => 1==1]]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.serviceTypes.rental.hour')),'name' => 'hour','value' => '','wire:model.defer' => 'hour','showError' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(1==1)]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['label' => __('crud.admin.serviceTypes.rental.km'),'name' => 'rental_km','value' => '','wire:model.defer' => 'km','showError' => 1==1]]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.serviceTypes.rental.km')),'name' => 'rental_km','value' => '','wire:model.defer' => 'km','showError' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(1==1)]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['label' => __('crud.admin.serviceTypes.rental.price'),'name' => 'rental_price','value' => '','wire:model.defer' => 'price','showError' => 1==1]]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.serviceTypes.rental.price')),'name' => 'rental_price','value' => '','wire:model.defer' => 'price','showError' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(1==1)]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            
            <br>
            <div class="mx-4 w-full items-end"style="display: flex; align-items: flex-end; justify-content: flex-end;">
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green" wire:loading.remove wire:target="saveServiceRentalPackage" type="submit">
                    <?php echo e(__('crud.general.create')); ?> <?php echo e(__('crud.admin.serviceTypes.rental.name')); ?> <?php echo e(__('crud.admin.serviceTypes.rental.package')); ?>

                </button>
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green" disabled wire:loading wire:target="saveServiceRentalPackage">
                    <i class="fa-spinner fa-pulse fa"></i> <?php echo e(__('crud.general.adding')); ?> <?php echo e(__('crud.admin.serviceTypes.rental.name')); ?> <?php echo e(__('crud.admin.serviceTypes.rental.package')); ?>

                </button>
            </div>
        </div>
    </form>
    
    <hr class="mt-4 mb-9 border-gray-600">

    <?php $__empty_1 = true; $__currentLoopData = $currentService->rental_hour_package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('single-service-rental', ['package' => $package])->html();
} elseif ($_instance->childHasBeenRendered('pacakge'.$package->id)) {
    $componentId = $_instance->getRenderedChildComponentId('pacakge'.$package->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('pacakge'.$package->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pacakge'.$package->id);
} else {
    $response = \Livewire\Livewire::mount('single-service-rental', ['package' => $package]);
    $html = $response->html();
    $_instance->logRenderedChild('pacakge'.$package->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <span class="dark:text-gray-400">
            No Existing Packages Found
        </span>
    <?php endif; ?>
</div><?php /**PATH /var/www/cab/resources/views/livewire/service-rental.blade.php ENDPATH**/ ?>