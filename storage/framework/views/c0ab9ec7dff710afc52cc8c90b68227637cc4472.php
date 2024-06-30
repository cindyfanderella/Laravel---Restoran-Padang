<?php $__env->startSection('breadcrumb'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Manajer</a></li>
      <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="<?php echo e(route('manajer.menu.index')); ?>">Menu's</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Create Menu</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Create Menu</h6>
  </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Create Menu</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            <?php echo $__env->make('_partials.alert-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form class="form" action="<?php echo e(route('manajer.menu.store')); ?>" enctype="multipart/form-data" method="post">
              <?php echo csrf_field(); ?>
                <div class="my-3">
                  <label class="form-label">Nama Menu</label>
                  <div class="input-group input-group-outline <?php $__errorArgs = ['nama_menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <input type="text" name="nama_menu" class="form-control" value="<?php echo e(old('nama_menu')); ?>">
                  </div>
                  <?php $__errorArgs = ['nama_menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div id="nama_menu-error" class="error text-danger pl-3" for="nama_menu" style="display: block;">
                      <small><?php echo e($errors->first('nama_menu')); ?></small>
                    </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="my-3">
                  <label class="">Harga</label>
                  <div class="input-group input-group-outline <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <input type="number" placeholder="Rp. 1000" min="500" name="harga" class="form-control">
                  </div>
                  <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div id="harga-error" class="error text-danger pl-3" for="harga" style="display: block;">
                      <small><?php echo e($errors->first('harga')); ?></small>
                    </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="my-3">
                  <label class="form-label">Deskripsi</label>
                  <div class="input-group input-group-outline <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <textarea name="desc" class="form-control" rows="3"></textarea>
                  </div>
                  <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div id="desc-error" class="error text-danger pl-3" for="desc" style="display: block;">
                      <small><?php echo e($errors->first('desc')); ?></small>
                    </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="my-3">
                  <label class="form-label">Foto Menu</label>
                  <div class="input-group input-group-outline <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <input type="file" id="inputFotoMenu" accept="image/png, image/jpeg" name="foto" class="form-control">
                  </div>
                  <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div id="foto-error" class="error text-danger pl-3" for="foto" style="display: block;">
                      <small><?php echo e($errors->first('foto')); ?></small>
                    </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="my-3">
                  <label class="form-label">Kategori <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger">(<?php echo e($errors->first('kategori')); ?>)</small>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                  <div class="input-group input-group-outline form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" id="kategori1" value="makanan"> Makanan
                    </label>
                  </div>
                  <div class="input-group input-group-outline form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" id="kategori2" value="minuman"> Minuman
                    </label>
                  </div>
                </div>

                <div class="my-3">
                  <label class="form-label">Ketersediaan</label>
                  <div class="input-group input-group-outline <?php $__errorArgs = ['ketersediaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <input type="number" placeholder="1" min="0" name="ketersediaan" class="form-control">
                  </div>
                  <?php $__errorArgs = ['ketersediaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div id="ketersediaan-error" class="error text-danger pl-3" for="ketersediaan" style="display: block;">
                      <small><?php echo e($errors->first('ketersediaan')); ?></small>
                    </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              
              <div class="text-end">
                <button type="submit" class="text-uppercase btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['titlePage' => 'Create Menu', 'activePage' => 'menu-manajer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/manajer/menu/create.blade.php ENDPATH**/ ?>