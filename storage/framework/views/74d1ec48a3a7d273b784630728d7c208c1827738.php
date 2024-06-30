<?php $__env->startSection('content'); ?>
  <div class="container-fluid py-4">
    
    <div class="row justify-content-center">
      <?php $__empty_1 = true; $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <div class="col-md-4">
            <div class="card m-4">
            <img class="card-img-top" src="<?php echo e(asset($menu->foto)); ?>" style="object-fit: cover;" height="350" alt="Card image cap">
              <h5 class="h5 p-2 card-title text-center text-capitalize">
                <?php echo e($menu->nama_menu); ?>

              </h5>
              <div class="card-body">
                <p><b>Harga:</b> Rp. <?php echo e(number_format($menu->harga,0,',','.')); ?> <br>
                  <b>Qty:</b> <?php echo e($menu->ketersediaan); ?> <br>
                  <b>Deskripsi:</b> <?php echo e($menu->deskripsi); ?> <br>
                  <b>Kategori:</b> <?php echo e($menu->kategori); ?></p>
                <div class="row justify-content-center">
                  <div class="col-6">
                    <a href="<?php echo e(route('pelanggan.menu.show', $menu->nama_menu)); ?>" class="btn text-info" data-toggle="tooltip" data-original-title="Lihat Menu">
                      <i class="material-icons">visibility</i> <small>show</small>
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="<?php echo e(route('pelanggan.buy-menu', $menu->nama_menu)); ?>" class="btn text-info" data-toggle="tooltip" data-original-title="Pesan Menu">
                      <i class="material-icons">restaurant</i> <small>Pesan</small>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <h3 class="h3 text-center">Tidak ada menu</h3>
      <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.customer', ['titlePage' => 'Menu\'s'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/pelanggan/menu/index.blade.php ENDPATH**/ ?>