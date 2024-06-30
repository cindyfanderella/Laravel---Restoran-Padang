<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <span class="navbar-brand font-weight-bold" style="font-size: 2.5em">RM Padang <img src="<?php echo e(asset('assets/img/icon2.png')); ?>" alt="logo" width="40" height="40"></span>
  <div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        
      </div>
      <ul class="navbar-nav justify-content-end">
        <?php if(auth()->guard()->check()): ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="<?php echo e(route('admin.registration.index')); ?>" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('kasir')): ?>
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="<?php echo e(route('kasir.transaction.index')); ?>" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('manajer')): ?>
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="<?php echo e(route('manajer.dashboard')); ?>" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            <?php endif; ?>
            <li title="Home" class="nav-item d-flex p-2 align-items-center">
              <a href="<?php echo e(route('welcome')); ?>" class="nav-link text-body font-weight-bold px-0">
                <i class="material-icons">home</i>
              </a>
            </li>
        <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('customer')): ?>
          <?php if(auth()->guard()->guest()): ?>
            <li title="Home" class="nav-item d-flex p-1 align-items-center">
              <a href="<?php echo e(route('welcome')); ?>" class="nav-link text-body font-weight-bold px-0">
                <i class="material-icons">home</i>
              </a>
            </li>
          <?php endif; ?>
          <li title="Menu" class="nav-item d-flex p-1 align-items-center">
            <a href="<?php echo e(route('pelanggan.menu.index')); ?>" class="nav-link text-body font-weight-bold px-0">
              <i class="material-icons">menu_book</i>
            </a>
          </li>
          <?php if(auth()->guard()->check()): ?>
            <li title="Transaksi" class="nav-item d-flex p-1 align-items-center">
              <a href="<?php echo e(route('pelanggan.transaksi.index')); ?>" class="nav-link text-body font-weight-bold px-0">
                <i class="material-icons">summarize</i>
              </a>
            </li> 
          <?php endif; ?>
        <?php endif; ?>
        
        
        <?php if(auth()->guard()->check()): ?>
        <li title="Logout" class="nav-item d-flex p-1 align-items-center">
          <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal" class="nav-link px-0">
            <i class="material-icons">logout</i>
         </a>
        </li>
        <?php endif; ?>
        
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<?php $__env->startSection('modals'); ?>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h4 class="modal-title text-center" id="exampleModalLabel">Siap Untuk Pergi?</h4>
          
          <p class="text-center" style="font-size: 1.25em">
            Pilih "Logout" untuk Mengakhiri session.
          </p>
          <div class="text-center">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Kembali</button>
            <a class="btn btn-primary" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
              <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
              <?php echo csrf_field(); ?>
            </form>
          </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/layouts/assets/navbar.blade.php ENDPATH**/ ?>