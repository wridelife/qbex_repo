<?php
$editing = isset($serviceType);
?>
<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <?php
    $locales = get_all_language();
    if($editing) {
        $name = $serviceType->translations['name'];
        $description = $serviceType->translations['description'];
    }
    ?>

    <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['name' => 'name['.e($key).']','label' => __('crud.inputs.name').' ('.$value.')','value' => ''.e(old('name['.$key.']', ($editing ? ($name[$key] ?? '') : ''))).'','required' => true]]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'name['.e($key).']','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.name').' ('.$value.')'),'value' => ''.e(old('name['.$key.']', ($editing ? ($name[$key] ?? '') : ''))).'','required' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'capacity','step' => '.01','label' => __('crud.inputs.capacity'),'value' => ''.e(old('capacity', ($editing ? $serviceType->capacity : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'capacity','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.capacity')),'value' => ''.e(old('capacity', ($editing ? $serviceType->capacity : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'order','step' => '.01','label' => __('order by number'),'value' => ''.e(old('order', ($editing ? $serviceType->order : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'order','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('order by number')),'value' => ''.e(old('order', ($editing ? $serviceType->order : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['status' => $editing ? $serviceType->status : '']]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($editing ? $serviceType->status : '')]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.textarea','data' => ['space' => 'w-full','label' => __('crud.inputs.description').' ('.$value.')','name' => 'description['.e($key).']','required' => true]]); ?>
<?php $component->withName('inputs.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'w-full','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.description').' ('.$value.')'),'name' => 'description['.e($key).']','required' => true]); ?>
            <?php echo e(old('description['.$key.']', ($editing ? ($description[$key] ?? '') : ''))); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    
    

    
    

    <hr class="border-gray-700 w-full mx-4 my-3">

    <h2 class="dark:text-gray-400 text-gray-700 font-semibold text-2xl px-4 block w-full my-3">
        Fare Estimation
    </h2>
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'fixed','step' => '.01','label' => __('crud.inputs.fixed'),'value' => ''.e(old('fixed', ($editing ? $serviceType->fixed : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'fixed','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.fixed')),'value' => ''.e(old('fixed', ($editing ? $serviceType->fixed : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'night_fare','step' => '.01','label' => __('crud.inputs.night_fare'),'value' => ''.e(old('night_fare', ($editing ? $serviceType->night_fare : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'night_fare','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.night_fare')),'value' => ''.e(old('night_fare', ($editing ? $serviceType->night_fare : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'waiting_free_mins','label' => __('crud.inputs.waiting_free_mins'),'value' => ''.e(old('waiting_free_mins', ($editing ? $serviceType->waiting_free_mins : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'waiting_free_mins','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.waiting_free_mins')),'value' => ''.e(old('waiting_free_mins', ($editing ? $serviceType->waiting_free_mins : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'waiting_min_charge','step' => '.01','label' => __('crud.inputs.waiting_min_charge'),'value' => ''.e(old('waiting_min_charge', ($editing ? $serviceType->waiting_min_charge : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'waiting_min_charge','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.waiting_min_charge')),'value' => ''.e(old('waiting_min_charge', ($editing ? $serviceType->waiting_min_charge : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['name' => 'calculator','label' => ''.e(__('crud.inputs.calculator')).'']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'calculator','label' => ''.e(__('crud.inputs.calculator')).'']); ?>
        <option
            <?php echo e(old('calculator', ($editing && $serviceType->calculator ? $serviceType->calculator : '')) == "MIN" ? 'selected' : ''); ?>

            value="MIN">Min</option>
        <option
            <?php echo e(old('calculator', ($editing && $serviceType->calculator ? $serviceType->calculator : '')) == "HOUR" ? 'selected' : ''); ?>

            value="HOUR">Hour</option>
        <option
            <?php echo e(old('calculator', ($editing && $serviceType->calculator ? $serviceType->calculator : '')) == "DISTANCE" ? 'selected' : ''); ?>

            value="DISTANCE">Distance</option>
        <option
            <?php echo e(old('calculator', ($editing && $serviceType->calculator ? $serviceType->calculator : '')) == "DISTANCEMIN" ? 'selected' : ''); ?>

            value="DISTANCEMIN">Distance & Per Minute Pricing
        </option>
        <option
            <?php echo e(old('calculator', ($editing && $serviceType->calculator ? $serviceType->calculator : '')) == "DISTANCEHOUR" ? 'selected' : ''); ?>

            value="DISTANCEHOUR">Distance & Per Hour Pricing
        </option>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <hr class="border-gray-700 w-full mx-4 my-3">

    <h2 class="dark:text-gray-400 text-gray-700 font-semibold text-2xl px-4 block w-full my-3">
        Outstation Fare
    </h2>

    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'roundtrip_km','step' => '.01','label' => __('crud.inputs.roundtrip_km'),'value' => ''.e(old('roundtrip_km', ($editing ? $serviceType->roundtrip_km : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'roundtrip_km','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.roundtrip_km')),'value' => ''.e(old('roundtrip_km', ($editing ? $serviceType->roundtrip_km : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'outstation_km','step' => '.01','label' => __('crud.inputs.outstation_km'),'value' => ''.e(old('outstation_km', ($editing ? $serviceType->outstation_km : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'outstation_km','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.outstation_km')),'value' => ''.e(old('outstation_km', ($editing ? $serviceType->outstation_km : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'outstation_driver','step' => '.01','label' => __('crud.inputs.outstation_driver'),'value' => ''.e(old('outstation_driver', ($editing ? $serviceType->outstation_driver : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'outstation_driver','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.outstation_driver')),'value' => ''.e(old('outstation_driver', ($editing ? $serviceType->outstation_driver : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    


    <hr class="border-gray-700 w-full mx-4 my-3">

    <h2 class="dark:text-gray-400 text-gray-700 font-semibold text-2xl px-4 block w-full my-3">
        Realted Images
    </h2>

    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
            <div x-data="imageComponentData()">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'image','label' => __('crud.inputs.image')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'image','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.image'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <img :src="imageDataUrl" style="object-fit: cover; width: 150px; height: 150px;" /><br />

                <div class="mt-2">
                    <input class="block dark:text-gray-400 text-gray-800 text-sm font-semibold mb-2" type="file"
                        name="image" id="image" @change="fileChanged" accept="image/*" />
                </div>
            </div>
        </div>
    </div>

    
</div>

<?php $__env->startPush('endScripts'); ?>
<script>
    /* Alpine component for image uploader viewer */
        function imageComponentData() {
            return {
                imageDataUrl: '<?php echo e($editing && $serviceType->image ? asset("storage/".$serviceType->image) : asset("img/avatar.png")); ?>',

                fileChanged(event) {
                    this.fileToDataUrl(event, src => this.imageDataUrl = src)
                },

                fileToDataUrl(event, callback) {
                    if (! event.target.files.length) return

                    let file = event.target.files[0],
                        reader = new FileReader()

                    reader.readAsDataURL(file)
                    reader.onload = e => callback(e.target.result)
                }
            }
        }
        function markerComponentData() {
            return {
                markerDataUrl: '<?php echo e($editing && $serviceType->marker ? asset("storage/".$serviceType->marker) : asset("img/avatar.png")); ?>',

                fileChanged(event) {
                    this.fileToDataUrl(event, src => this.markerDataUrl = src)
                },

                fileToDataUrl(event, callback) {
                    if (! event.target.files.length) return

                    let file = event.target.files[0],
                        reader = new FileReader()

                    reader.readAsDataURL(file)
                    reader.onload = e => callback(e.target.result)
                }
            }
        }
</script>
<?php $__env->stopPush(); ?><?php /**PATH /var/www/cab/resources/views/admin/serviceType/form-inputs.blade.php ENDPATH**/ ?>