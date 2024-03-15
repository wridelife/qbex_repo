<?php $__env->startSection('title'); ?>
    Admin <?php echo e(__('crud.navlinks.setting')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
    Admin <?php echo e(__('crud.navlinks.setting')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    
    <div class="flex flex-wrap mb-6" id="tabs">
        <div class="w-full flex">
            <ul class="tab-head flex mb-0 list-none pb-4 flex-col">
                <li class="mr-2 mb-2 last:mr-0 text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-white bg-blue-500" onclick="changeActiveTab(event,'tab-general')" href="#general" id="#general">
                        <i class="fa fa-space-shuttle text-base mr-1"></i> Change Profile
                    </a>
                </li>
                <li class="mr-2 mb-2 last:mr-0 text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-blue-500 bg-white dark:text-gray-300 dark:bg-gray-800" onclick="changeActiveTab(event,'tab-changePassword')" href="#changePassword" id="#changePassword">
                        <i class="fa fa-cog text-base mr-1"></i> Change Password
                    </a>
                </li>
            </ul>
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded dark:text-gray-400 dark:bg-gray-800">
                <div class="px-4 py-5 flex-auto dark:text-gray-400 dark:bg-gray-800">
                    <div class="tab-content tab-space dark:text-gray-400 dark:bg-gray-800">
                        <div class="block" id="tab-general">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.updateProfile'),'hasFile' => true]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.updateProfile')),'has-file' => true]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    <div class="w-full md:w-1/2 mb-4 md:mb-0">
                                        <div class="h-full flex items-center justify-center relative" x-data="avatarComponentData()">
                                            <img class="rounded-full" :src="avatarDataUrl" style="object-fit: cover; width: 150px; height: 150px;"/>
                                            <label class="relative" for="avatar" title="Select New Avatar">
                                                <i class="fa rounded-full text-white bg-blue-500 absolute fa-pencil cursor-pointer" style="position: absolute; font-size: 12px; padding: 8px; top: 30px; right: 5px;"></i>
                                            </label>
                                            <input type="file" class="hidden" name="avatar" id="avatar" @change="fileChanged" />
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2 mb-4 md:mb-0">
                                        <div class="mb-6">
                                            
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.inputs.first_name'),'name' => 'name','space' => 'w-full','value' => ''.e(auth()->user('admin')->name ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.first_name')),'name' => 'name','space' => 'w-full','value' => ''.e(auth()->user('admin')->name ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            
                                            <div class="w-full px-4 mb-4 md:mb-0">
                                                <div class="mb-6">
                                                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="phone"><?php echo e(__('crud.inputs.phone')); ?></label>
                                                    <input type="tel" class="dark:bg-gray-700 dark:text-gray-300 appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none mb-2 inptFielsd" id="phone" value="<?php echo e(auth()->user('admin')->mobile); ?>" placeholder="123456789" />
                                                </div>
                                            </div>
                                            
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.email','data' => ['label' => __('crud.inputs.email'),'name' => 'email','style' => 'color: gray;','disabled' => true,'value' => ''.e(auth()->user('admin')->email ?? '').'','space' => 'w-full']]); ?>
<?php $component->withName('inputs.email'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.email')),'name' => 'email','style' => 'color: gray;','disabled' => true,'value' => ''.e(auth()->user('admin')->email ?? '').'','space' => 'w-full']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.inputs.language'),'name' => 'language','space' => 'md:w-full']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.language')),'name' => 'language','space' => 'md:w-full']); ?>
                                                <?php $__currentLoopData = get_all_language(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e(old('language', auth()->user('admin')->language && auth()->user('admin')->language == $key ? "selected" : '' )); ?> value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm" type="submit"><?php echo e(__('crud.general.update')." ".__('crud.navlinks.profile')); ?></button>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <div class="hidden" id="tab-changePassword">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.changePassword')]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.changePassword'))]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.password','data' => ['label' => __('crud.inputs.old_password'),'name' => 'old_password','space' => 'md:w-full']]); ?>
<?php $component->withName('inputs.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.old_password')),'name' => 'old_password','space' => 'md:w-full']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.password','data' => ['label' => __('crud.inputs.new_password'),'name' => 'password']]); ?>
<?php $component->withName('inputs.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.new_password')),'name' => 'password']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.password','data' => ['label' => __('crud.inputs.password_confirmation'),'name' => 'password_confirmation']]); ?>
<?php $component->withName('inputs.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.password_confirmation')),'name' => 'password_confirmation']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm" type="submit"><?php echo e(__('crud.general.change_password')); ?></button>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.telephoneImport', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('endScripts'); ?>
    <script>
        /* Alpine component for avatar uploader viewer */
        function avatarComponentData() {
            return {
                avatarDataUrl: "<?php echo e(auth()->user('admin')->avatar ? asset('storage/'.auth()->user('admin')->avatar) : asset('img/avatar.png')); ?>",

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

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/profile_settings.blade.php ENDPATH**/ ?>