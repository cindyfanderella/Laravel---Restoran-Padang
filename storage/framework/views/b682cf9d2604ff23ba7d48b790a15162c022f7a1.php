<?php $__env->startSection('breadcrumb'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Manajer</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
  </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <style>
    a:hover{
      color: black;
    }
  </style>
  <div class="container mt-5">
      <div class="row">
          <div class="col-xl-6">
              <a href="<?php echo e(route('manajer.menu.index')); ?>">
                <div class="card">
                  <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                      <i class="material-icons opacity-10">menu_book</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Menu's Book</p>
                      <p style="font-size: 1.25em">There is <b class="mb-0">'<?php echo e($total_menu); ?>' menus</b> exist</p>
                    </div>
                  </div>
                  <hr class="dark horizontal my-0">
                  <div class="card-footer p-3">
                    <p class="mb-0">
                      <div class="row">
                        <div class="col-xl-2 col-2">
                          <span class="text-success text-sm font-weight-bolder"><?php echo e($total_menu); ?></span>
                        </div>
                        <div class="col-xl-10 col-8">
                          <span class="d-inline-block text-secondary text-truncate" style="max-width: 250px;">
                            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($menu->nama_menu); ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </span>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </a>
          </div>

          <div class="col-xl-6 py-4">
              <a href="<?php echo e(route('manajer.laporan')); ?>">
                <div class="card">
                  <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                      <i class="material-icons opacity-10">summarize</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Transaksi's Book</p>
                      <h4 class="mb-0 text-xl">Rp. <?php echo e(number_format($income, 2, ',', '.')); ?> <span class="text-md">in a week</span></h4>
                    </div>
                  </div>
                  <hr class="dark horizontal my-0">
                  <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><?php echo e($total_transaksi); ?> </span>transaction's in last week</p>
                  </div>
                </div>
              </a>
          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['titlePage' => 'Home', 'activePage' => 'dashboard-manajer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/manajer/dashboard.blade.php ENDPATH**/ ?>