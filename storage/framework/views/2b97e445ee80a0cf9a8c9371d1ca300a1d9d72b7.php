<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#">
      
      <span class="font-weight-bold text-white" style="font-size: 1.5em">RM Padang<img src="<?php echo e(asset('assets/img/icon2.png')); ?>" class="navbar-brand-img h-100" alt="main_logo"></span>
      
      
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo e($activePage == 'user-admin' ? 'active bg-gradient-primary' : ''); ?>" href="<?php echo e(route('admin.registration.index')); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">User</span>
          </a>
        </li>
      <?php endif; ?>

      <?php if (\Illuminate\Support\Facades\Blade::check('kasir')): ?>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo e($activePage == 'transaksi-kasir' ? 'active bg-gradient-primary' : ''); ?>" href="<?php echo e(route('kasir.transaction.index')); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
        </li>
      <?php endif; ?>

      <?php if (\Illuminate\Support\Facades\Blade::check('manajer')): ?>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo e($activePage == 'dashboard-manajer' ? 'active bg-gradient-primary' : ''); ?>" href="<?php echo e(route('manajer.dashboard')); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo e($activePage == 'menu-manajer' ? 'active bg-gradient-primary' : ''); ?>" href="<?php echo e(route('manajer.menu.index')); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">menu_book</i>
            </div>
            <span class="nav-link-text ms-1">Menu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo e($activePage == 'laporan-manajer' ? 'active bg-gradient-primary' : ''); ?>" href="<?php echo e(route('manajer.laporan')); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">summarize</i>
            </div>
            <span class="nav-link-text ms-1">Laporan</span>
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      
    </div>
  </div>
</aside><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/layouts/assets/sidebar.blade.php ENDPATH**/ ?>