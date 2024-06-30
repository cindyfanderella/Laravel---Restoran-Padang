<?php $__env->startSection('content-guest'); ?>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('../../img/Cappuccino1.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>
                  <h6 class="text-white font-weight-bolder text-center mt-2 mb-0">Welcome to 'Our Café'</h6>
                </div>
              </div>
              <?php if($errors->any()): ?>
                <?php echo e(session()->flash('warning', 'Tolong Cek Ulang Data Yang Kamu Masukkan!')); ?>

                <script>
                  $("#username").focus()
                </script>
              <?php endif; ?>
              <div class="card-body">
                <form role="form" class="text-start" method="POST" action="<?php echo e(route('register')); ?>">
                  <?php echo csrf_field(); ?>
                  <div class="my-3">
                    <div class="input-group input-group-outline <?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                      <label class="form-label">Name</label>
                      <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name" class="form-control">
                    </div>
                    <?php if($errors->has('name')): ?>
                      <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                        <small><?php echo e($errors->first('name')); ?></small>
                      </div>
                    <?php endif; ?>
                  </div>

                  <div class="my-3">
                    <div class="input-group input-group-outline <?php echo e($errors->has('username') ? ' has-danger' : ''); ?>">
                      <label class="form-label">Username</label>
                      <input type="text" name="username" value="<?php echo e(old('username')); ?>" id="username" class="form-control">
                    </div>
                    <?php if($errors->has('username')): ?>
                      <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                        <small><?php echo e($errors->first('username')); ?></small>
                      </div>
                    <?php endif; ?>
                  </div>

                  <div class="my-3">
                    <div class="input-group input-group-outline <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control">
                    </div>
                    <?php if($errors->has('password')): ?>
                      <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                        <small><?php echo e($errors->first('password')); ?></small>
                      </div>
                    <?php endif; ?>
                  </div>

                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                    <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                  </div>
                  <div class="mb-1">
                    <small class="float-end">
                      Sudah Punya akun? <a href="<?php echo e(route('login')); ?>">Login</a>
                    </small>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign up</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
      $(function() {
        $("#username").focus()
      });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['titlePage' => 'Register'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/auth/register.blade.php ENDPATH**/ ?>