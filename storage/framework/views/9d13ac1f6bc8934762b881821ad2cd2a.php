

<?php $__env->startSection('title'); ?>
        <h2>Edit User Data</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
          <form action="" method="POST">
            <?php echo csrf_field(); ?>
            <label for="">Name: </label>
            <input type="text" name="username" value="" class="form-control">
            <label for="">Email: </label>
            <input type="email" name="useremail" value="" class="form-control">
            <label for="">Age: </label>
            <input type="text" name="userage" value="" class="form-control">
            <label for="">City: </label>
            <input type="text" name="usercity" value="" class="form-control">
            <button class="btn btn-primary mt-3">Submit</button>
          </form>
           
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\Eloquent\resources\views/editUser.blade.php ENDPATH**/ ?>