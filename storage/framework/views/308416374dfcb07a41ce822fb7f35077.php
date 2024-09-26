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
    Update User Data 
   <?php $__env->endSlot(); ?>
<?php $__env->startSection('content'); ?>
          <form action="<?php echo e(route('user.update',$users->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <?php echo method_field('PUT'); ?>
            <label for="">Name: </label>
            <input type="text" name="username" value="<?php echo e($users->name); ?>" class="form-control">
            <label for="">Email: </label>
            <input type="email" name="useremail" value="<?php echo e($users->email); ?>" class="form-control">
            <label for="">Age: </label>
            <input type="text" name="userage" value="<?php echo e($users->age); ?>" class="form-control">
            <label for="">City: </label>
            <input type="text" name="usercity" value="<?php echo e($users->city); ?>" class="form-control">
            
            <button class="btn btn-primary mt-3">Update</button>
          </form>
           
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH E:\Laravel\Eloquent\resources\views/updateUser.blade.php ENDPATH**/ ?>