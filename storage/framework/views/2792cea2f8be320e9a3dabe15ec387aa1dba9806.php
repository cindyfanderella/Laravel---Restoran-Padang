<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets')); ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo e(asset('assets')); ?>/img/icon2.png">
  <title>
    <?php echo e($titlePage); ?> | RM Padang
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?php echo e(asset('assets')); ?>/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo e(asset('assets')); ?>/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- Tempusdominus Bootstrap 4 -->
  
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins')); ?>/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('plugins')); ?>/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo e(asset('assets')); ?>/css/material-dashboard.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo e(asset('css/add.css')); ?>">
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/flick/jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/flick/theme.min.css">
</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php if (\Illuminate\Support\Facades\Blade::check('customer')): ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php echo $__env->make('layouts.assets.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid py-4">

            <?php echo $__env->yieldContent('content'); ?>

            <footer class="footer small text-end text-black-50"><div class="container-fluid px-4 px-lg-5">Copyright &copy; PemWeb - RM Padang 2024</div></footer>
        </div>
    </main>
  <?php endif; ?>

  <?php echo $__env->yieldContent('modals'); ?>
  
  <!--   Core JS Files   -->
  
  <!-- jQuery -->
  <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="<?php echo e(asset('assets/js/core/bootstrap.bundle.min.js')); ?>"></script>
  <!-- Select2 -->
  <script src="<?php echo e(asset('plugins/select2/js/select2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  
  <script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/plugins/chartjs.min.js')); ?>"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <?php echo $__env->make('_partials.ajaxPromise', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <?php echo $__env->yieldPushContent('js'); ?>
  <script>
    $(function() {
      // $('.select2').select2({
      //   allowClear: true,
      //   width: 100%,
      // })

      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    })

    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <?php echo $__env->make('_partials.session-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo e(asset('assets/js/material-dashboard.min.js?v=3.0.0')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/layouts/customer.blade.php ENDPATH**/ ?>