<?php 
    $editing = isset($plan);
    $locales = get_all_language();
if($editing) {
    $name = $plan->translations['name'];
    $description = $plan->translations['description'];

}
?>

<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
            <div x-data="avatarComponentData()">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'avatar','label' => __('crud.inputs.image')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'avatar','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.image'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <img id="avatar" :src="avatarDataUrl" style="object-fit: cover; width: 150px; height: 150px;"/><br />

                <div class="mt-2">
                    <input
                        class="block dark:text-gray-400 text-gray-800 text-sm font-semibold mb-2"
                        type="file"
                        name="image"
                        id="avatar"
                        @change="fileChanged"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
            <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['name' => 'name['.e($key).']','label' => __('crud.inputs.name').' ('.$key.')','value' => ''.e(old('name['.$key.']', ($editing ? ($name[$key] ?? '') : ''))).'','required' => true]]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'name['.e($key).']','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.name').' ('.$key.')'),'value' => ''.e(old('name['.$key.']', ($editing ? ($name[$key] ?? '') : ''))).'','required' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.textarea','data' => ['space' => 'w-full','label' => __('crud.inputs.description').' ('.$key.')','name' => 'description['.e($key).']','required' => true]]); ?>
<?php $component->withName('inputs.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'w-full','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.description').' ('.$key.')'),'name' => 'description['.e($key).']','required' => true]); ?>
                <?php echo e(old('description['.$key.']', ($editing ? ($description[$key] ?? '') : ''))); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
    
            <input type="checkbox" name="is_active" id="is_active" class="switch-input" value="1" <?php echo e(old('is_active',$editing ? $plan->is_active : '' ) ? 'checked' : ''); ?>/>
            <label for="is_active"><?php echo e(__("Is Active")); ?></label>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'price','step' => '.01','label' => __('crud.inputs.price'),'value' => ''.e(old('price', ($editing ? $plan->price : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'price','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.price')),'value' => ''.e(old('price', ($editing ? $plan->price : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['name' => 'invoice_period','step' => '.01','label' => __('Invoice period'),'value' => ''.e(old('invoice_period', ($editing ? $plan->invoice_period : ''))).'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'invoice_period','step' => '.01','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Invoice period')),'value' => ''.e(old('invoice_period', ($editing ? $plan->invoice_period : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    

    
</div>

<?php $__env->startPush('endScripts'); ?>
    <script>
        /* Alpine component for avatar uploader viewer */
        function avatarComponentData() {
            return {
                avatarDataUrl: '<?php echo e($editing && $plan->image ? asset("storage/".$plan->image) : asset("img/default.png")); ?>',

                fileChanged(event) {
                    this.fileToDataUrl(event, src => this.avatarDataUrl = src)
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
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/cab/resources/views/admin/plan/form-inputs.blade.php ENDPATH**/ ?>