<div>
    <h3 class="dark:text-gray-400 block text-gray-800 text-lg underline font-semibold mb-2 w-full"><?php echo e($gf->city_name); ?>

    </h3>
    <?php
    $rand = rand(1,100);
    ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['wire:submit.prevent' => 'updateServiceGeoFence','action' => '#']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:submit.prevent' => 'updateServiceGeoFence','action' => '#']); ?>
        <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['idSuff' => $gf->id,'wire:model.defer' => 'distance','wire:loading.attr' => 'disabled','name' => 'distance','step' => '.01','label' => __('crud.inputs.base_distance'),'value' => '','space' => 'md:w-1/4']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['idSuff' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gf->id),'wire:model.defer' => 'distance','wire:loading.attr' => 'disabled','name' => 'distance','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.base_distance')),'value' => '','space' => 'md:w-1/4']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['idSuff' => $gf->id,'wire:model.defer' => 'price','name' => 'price','step' => '.01','wire:loading.attr' => 'disabled','label' => __('crud.payment.distance_price'),'value' => '','space' => 'md:w-1/4']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['idSuff' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gf->id),'wire:model.defer' => 'price','name' => 'price','step' => '.01','wire:loading.attr' => 'disabled','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.payment.distance_price')),'value' => '','space' => 'md:w-1/4']); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['idSuff' => $gf->id,'wire:model.defer' => 'minute','wire:loading.attr' => 'disabled','name' => 'minute','step' => '.01','label' => __('crud.payment.minutes_price'),'value' => '','space' => 'md:w-1/4']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['idSuff' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gf->id),'wire:model.defer' => 'minute','wire:loading.attr' => 'disabled','name' => 'minute','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.payment.minutes_price')),'value' => '','space' => 'md:w-1/4']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            

            

            

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['idSuff' => $gf->id,'wire:model.defer' => 'city_limits','wire:loading.attr' => 'disabled','name' => 'city_limits','step' => '.01','label' => __('crud.inputs.city_limits'),'value' => '','space' => 'md:w-1/4']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['idSuff' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gf->id),'wire:model.defer' => 'city_limits','wire:loading.attr' => 'disabled','name' => 'city_limits','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.city_limits')),'value' => '','space' => 'md:w-1/4']); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <div class="w-full px-4 mb-4 md:mb-0">
                <div class="mb-6">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'ed'.e($gf->id).'','label' => __('crud.general.enable')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'ed'.e($gf->id).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.general.enable'))]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <label for="ed<?php echo e($gf->id); ?>" class="flex items-center cursor-pointer">
                        <div class="relative">
                            <input type="checkbox" id="ed<?php echo e($gf->id); ?>" class="sr-only" wire:model.defer="status">
                            <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
                            <div class="dot absolute left-1 top-1 w-6 h-6 rounded-full transition"></div>
                        </div>
                    </label>
                </div>
            </div>
            <style>
                input:checked~.dot {
                    transform: translateX(100%);
                    background: rgba(249, 250, 251);
                }

                input:not(:checked)~.dot {
                    background: rgba(249, 250, 251);
                    opacity: 0.5;
                    transform: translateX(0%);
                }
            </style>

        </div>
        <div class="flex flex-wrap -mb-4 md:mb-0">
            <?php if($errors->any()): ?>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="text-red-500">-> <?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="flex justify-end mb-6">
            <button wire:loading.remove type="submit"
                class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"><?php echo e(__('crud.general.update')); ?>

                Charges For <?php echo e($gf->city_name); ?></button>
            <button wire:loading disabled
                class="right-0 block py-1 px-4 leading-loose bg-green-500 hover:bg-green-400 text-white font-semibold rounded-lg transition duration-200 text-sm"><i
                    class="fa fa-spinner fa-spin"></i> <?php echo e(__('crud.general.updating')); ?> Charges For
                <?php echo e($gf->city_name); ?></button>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/cab/resources/views/livewire/service-geo-fence.blade.php ENDPATH**/ ?>