<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> 
     <?php $__env->slot('title', null, []); ?> 
    Single User Data 
   <?php $__env->endSlot(); ?>

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <tr>
        <td><?php echo e($users->id); ?></td>
        <td><?php echo e($users->name); ?></td>
        <td><?php echo e($users->email); ?></td>
        <td><?php echo e($users->age); ?></td>
        <td><?php echo e($users->city); ?></td>
        <td><a href="<?php echo e(route('user.edit',$users->id)); ?>" class="btn btn-warning">Update</a></td>
        <td><form action="<?php echo e(route('user.destroy',$users->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button href="" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
</table>
<a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary mt-3">Back</a>  
           
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH E:\Laravel\Eloquent\resources\views/singleUser.blade.php ENDPATH**/ ?>