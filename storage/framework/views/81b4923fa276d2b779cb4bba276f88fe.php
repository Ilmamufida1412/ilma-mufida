<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabungan</title>
    <link href="<?php echo e(asset('/')); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="<?php echo e(asset('/')); ?>assets/plugins\fontawesome\css\all.min.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Tabungan Sekolah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php echo e((request()->segment('1')=='' || request()->segment('1') == 'home') ? 'active' : ''); ?>" 
                    aria-current="page" href="<?php echo e(url('home')); ?>">
                    <i class="fas fa-tachometer-alt"></i>Home
                </a>
              </li>
              <li class="nav-item <?php echo e((request()->segment('1') == 'students') ? 'active' : ''); ?>">
                <a class="nav-link active" aria-current="page" href="students">
                    <i class="fas fa-user"></i>students
                </a>
              </li>
            </ul>
            <button class="btn btn-danger" type="submit">Logout</button>
          </div>
        </div>
    </nav>
    
    
    <div class="mt-2 ps-5">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    
    <script src="<?php echo e(asset('/')); ?>assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\app-laravel10\resources\views/layout/main.blade.php ENDPATH**/ ?>