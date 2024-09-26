<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    "action",
    "method" => "post"
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    "action",
    "method" => "post"
]); ?>
<?php foreach (array_filter(([
    "action",
    "method" => "post"
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form action="<?php echo e($action); ?>" method="<?php echo e($method === 'GET' ? 'GET' : 'POST'); ?>" $attribute>
    <?php echo csrf_field(); ?>
    <?php if (! (in_array($method,['GET','POST']))): ?>
        <?php echo method_field($method); ?>
    <?php endif; ?>
    <?php echo e($slot); ?>

</form><?php /**PATH E:\Laravel\Eloquent\resources\views/components/form.blade.php ENDPATH**/ ?>