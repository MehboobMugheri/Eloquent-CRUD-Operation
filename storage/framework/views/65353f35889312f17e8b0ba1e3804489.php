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
        <div class="col-8 text-white mt-3" style="background-color: teal;">
            <h2 style="text-align: center">Eloquent CRUD Operation</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-8" style="background-color: lightblue">
            <h4><?php echo e($title ?? "Component CRUD"); ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-8 text-white mt-3">
          <?php if(session('status')): ?>
          <div class="alert" style="background-color: lightgreen">
             <?php echo e(session('status')); ?>

          </div>
        <?php endif; ?>
        </div>
        </div>
        <div class="row">
            <div class="col-8">
                <?php echo e($slot); ?>

            </div>
        </div>
  </div>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html><?php /**PATH E:\Laravel\Eloquent\resources\views/components/layout.blade.php ENDPATH**/ ?>