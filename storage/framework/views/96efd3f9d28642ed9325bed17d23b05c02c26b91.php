<?php 
    $editing = isset($notification);
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
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.inputs.type'),'name' => 'notify_type','space' => 'w-full']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.type')),'name' => 'notify_type','space' => 'w-full']); ?>
                <option <?php echo e($editing && $notification->notify_type == "all" ? "selected" : ""); ?> value="all">All</option>
                <option <?php echo e($editing && $notification->notify_type == "user" ? "selected" : ""); ?> value="user">User</option>
                <option <?php echo e($editing && $notification->notify_type == "provider" ? "selected" : ""); ?> value="provider">Provider</option>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.textarea','data' => ['space' => 'w-full','label' => __('crud.inputs.description'),'name' => 'description','placeholder' => 'max. 255 Characters']]); ?>
<?php $component->withName('inputs.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'w-full','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.description')),'name' => 'description','placeholder' => 'max. 255 Characters']); ?><?php echo e(old('description', ($editing ? $notification->description : ''))); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.date','data' => ['name' => 'expiry_date','label' => __('crud.inputs.expiry_date'),'value' => ''.e(old('expiry_date', ($editing ? $notification->expiry_date->format('Y-m-d') : ''))).'']]); ?>
<?php $component->withName('inputs.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'expiry_date','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.expiry_date')),'value' => ''.e(old('expiry_date', ($editing ? $notification->expiry_date->format('Y-m-d') : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['status' => ''.e(old('status', ($editing ? $notification->status : ''))).'']]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['status' => ''.e(old('status', ($editing ? $notification->status : ''))).'']); ?> <?php echo $__env->renderComponent(); ?>
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
                avatarDataUrl: '<?php echo e($editing && $notification->image ? asset("storage/".$notification->image) : asset("img/default.png")); ?>',

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
<?php /**PATH /var/www/cab/resources/views/admin/notification/form-inputs.blade.php ENDPATH**/ ?>