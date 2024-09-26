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
   <div class="container">
    <div class="row">
        <div class="col-8 bg-danger text-white mt-3">
           <h1 >Eloquent ORM CRUD Operation</h1>
        </div>
    </div>
        <div class="row">
        <div class="col-8 bg-success text-white">
          <?php echo $__env->yieldContent('title'); ?>
        </div>
    </div>

    <div class="row">
      <div class="col-8 mb-3">
        <?php if(session('status')): ?>
          <div class="text-success">
            <?php echo e(session('status')); ?>

          </div>
        <?php endif; ?>
      </div>
  </div>

      <div class="row">
        <div class="col-8">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
   </div>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html><?php /**PATH E:\Laravel\Eloquent\resources\views/layout.blade.php ENDPATH**/ ?>