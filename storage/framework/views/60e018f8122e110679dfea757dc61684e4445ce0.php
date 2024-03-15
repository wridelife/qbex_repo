<?php $attributes = $attributes->exceptProps([
    'id',
    'name',
    'label',
    'value',
    'checked' => false,
    'addHiddenValue' => true,
    'hiddenValue' => 0,
]); ?>
<?php foreach (array_filter(([
    'id',
    'name',
    'label',
    'value',
    'checked' => false,
    'addHiddenValue' => true,
    'hiddenValue' => 0,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $checked = !! $checked
?>


<?php if($addHiddenValue): ?>
    <input type="hidden" id="<?php echo e($id ?? $name); ?>-hidden" name="<?php echo e($name); ?>" value="<?php echo e($hiddenValue); ?>">
<?php endif; ?>

<div class="col-span-3">
    <input
        type="checkbox"
        name="<?php echo e($name); ?>"
        value="<?php echo e($value ?? 1); ?>"
        <?php echo e($checked ? 'checked' : ''); ?>

        <?php echo e($attributes->merge(['class' => 'form-check-input'])); ?>

        id="<?php echo e($label); ?>"
    >
    <?php if($label ?? null): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['extraClasses' => 'inline relative bottom-2px','name' => $label,'label' => $label]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['extraClasses' => 'inline relative bottom-2px','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
</div><?php /**PATH /var/www/cab/resources/views/components/inputs/checkbox.blade.php ENDPATH**/ ?>