<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
    <h1 style="text-align: center">Eloquent ORM Fetch Data</h1>
    <div class="container">
        <div class="row">
            <table class="table table-striped table-bordered">
            <div class="col-8">
               <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
               </tr>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                    <td><?php echo e($user->id); ?> </td>
                    <td><?php echo e($user->name); ?> </td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->age); ?></td>
                    <td><?php echo e($user->city); ?></td>
                   </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html><?php /**PATH E:\Laravel\Eloquent\resources\views/welcome.blade.php ENDPATH**/ ?>