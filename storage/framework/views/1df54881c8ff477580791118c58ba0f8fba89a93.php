<?php $__env->startSection('content'); ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Buy <?php echo e($selected_menu); ?> Menu</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            <?php echo $__env->make('_partials.alert-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form class="form" action="<?php echo e(route('pelanggan.store-menu')); ?>" method="post">
              <?php echo csrf_field(); ?>
                <input type="hidden" name="nama_pelanggan" value="<?php echo e(Auth::user()->name); ?>">

                <div id="list-menu">
                  <div class="row justify-content-center">
                    <div class="col-md-5">
                      <div class="my-3">
                        <label class="form-label">Menu</label>
                        <div class="form-group input-group input-group-outline <?php $__errorArgs = ['pesan[0][menu]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <select class="select2bs4 select-count disabled" name="pesan[0][menu]" id="pesan-0-menu" required>
                            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($menu->id); ?>" <?php echo e(($selected_menu == $menu->nama_menu) ? 'selected="selected"' : ''); ?> data-id="0" data-menu-id="<?php echo e($menu->id); ?>" data-harga="<?php echo e($menu->harga); ?>"><?php echo e($menu->nama_menu); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                        <?php $__errorArgs = ['pesan.0.menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div id="menu-error" class="error text-danger pl-3" for="menu" style="display: block;">
                            <small><?php echo e($errors->first('pesan.0.menu')); ?></small>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Jumlah</label>
                        <div class="input-group input-group-outline <?php $__errorArgs = ['pesan[0][jumlah]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <input type="number" value="<?php echo e((old('pesan[0][jumlah]')) ? old('pesan[0][jumlah]') : '1'); ?>" min="1" name="pesan[0][jumlah]" id="pesan-0-jumlah" placeholder="1" class="form-control jumlah-count" data-id="0"
                          <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($selected_menu == $menu->nama_menu): ?>
                            data-menu-id="<?php echo e($menu->id); ?>" data-harga="<?php echo e($menu->harga); ?>"
                            <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> required>
                        </div>
                        <?php $__errorArgs = ['pesan.0.jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div id="jumlah-error" class="error text-danger pl-3" for="jumlah" style="display: block;">
                            <small><?php echo e($errors->first('pesan.0.jumlah')); ?></small>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="my-3">
                        <label class="form-label">Total Harga</label>
                        <div class="input-group input-group-outline">
                          <input type="text" value="<?php echo e(old('pesan[0][total_harga]')); ?>" id="pesan-0-total" name="pesan[0][total_harga]" class="form-control total" required readonly>
                        </div>
                        <?php $__errorArgs = ['pesan.0.total_harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div id="total_harga-error" class="error text-danger pl-3" for="total_harga" style="display: block;">
                            <small><?php echo e($errors->first('pesan.0.total_harga')); ?></small>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Add Menu</label>
                        <div class="input-group input-group-outline">
                          <button class="btn btn-primary text-md" type="button" onclick="addMenu()" style="border-radius: 100%">+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-md-2 col-6">
                    <div class="my-3">
                      <label class="form-label">Total Bayar</label>
                      <div class="input-group input-group-outline">
                        <input type="text" value="<?php echo e(old('total_bayar')); ?>" id="total_bayar" name="total_bayar" class="form-control" readonly>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="text-end">
                <button type="submit" class="text-uppercase btn btn-primary">Buy</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
      $(function() {

      })

      var i = 0;

      function addMenu() {
        ++i
        $('#list-menu').append(`
                  <div class="row justify-content-center menu" id="list-trans-${i}">
                    <div class="col-md-5">
                      <div class="my-3">
                        <label class="form-label">Menu</label>
                        <div class="form-group input-group input-group-outline <?php $__errorArgs = ['pesan[${i}][menu]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <select class="form-control select2bs4 select-count" name="pesan[${i}][menu]" id="pesan-${i}-menu" required>
                            <option value="" selected></option>
                            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($menu->id); ?>" <?php echo e((old('pesan[${i}][menu]') == $menu->nama_menu) ? 'selected="selected"' : ''); ?>data-id="${i}" data-menu-id="<?php echo e($menu->id); ?>" data-harga="<?php echo e($menu->harga); ?>"><?php echo e($menu->nama_menu); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                        <?php $__errorArgs = ['pesan.${i}.menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div id="menu-error" class="error text-danger pl-3" for="menu" style="display: block;">
                            <small><?php echo e($errors->first('pesan.${i}.menu')); ?></small>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Jumlah</label>
                        <div class="input-group input-group-outline <?php $__errorArgs = ['pesan[${i}][jumlah]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <input type="number" value="<?php echo e((old('pesan[${i}][jumlah]')) ? old('pesan[${i}][jumlah]') : '1'); ?>" min="1" name="pesan[${i}][jumlah]" id="pesan-${i}-jumlah" placeholder="1" class="form-control jumlah-count" required>
                        </div>
                        <?php $__errorArgs = ['pesan.${i}.jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div id="jumlah-error" class="error text-danger pl-3" for="jumlah" style="display: block;">
                            <small><?php echo e($errors->first('pesan.${i}.jumlah')); ?></small>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="my-3">
                        <label class="form-label">Total Harga</label>
                        <div class="input-group input-group-outline">
                          <input type="text" value="<?php echo e(old('pesan[${i}][total_harga]')); ?>" id="pesan-${i}-total" name="pesan[${i}][total_harga]" class="form-control total" required readonly>
                        </div>
                        <?php $__errorArgs = ['pesan.${i}.total_harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div id="total_harga-error" class="error text-danger pl-3" for="total_harga" style="display: block;">
                            <small><?php echo e($errors->first('pesan.${i}.total_harga')); ?></small>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Remove</label>
                        <div class="input-group input-group-outline">
                          <button class="btn btn-primary text-md remove-trans" type="button" data-id="${i}" style="border-radius: 100%">-</button>
                        </div>
                      </div>
                    </div>
                  </div>`)
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })
      }

      function totalBayar() {
        var sum = 0;
        $('.total').each(function(){
            sum += parseFloat(this.value);
        });
        $('#total_bayar').val(sum)
      }
        
      $(document).on('click', '.remove-trans', function () {
        var id = $(this).attr('data-id')
        $(`#list-trans-${id}`).remove()
        totalBayar()
      });

      $(document).on('change', '.select-count', function () {
        var element = $(this).find('option:selected'); 
        var harga = element.attr("data-harga"); 
        var menu_id = element.attr("data-menu-id"); 
        var id = element.attr("data-id"); 
        var id_jumlah = `#pesan-${id}-jumlah`;
        $(id_jumlah).attr('data-harga', harga)
        $(id_jumlah).attr('data-menu-id', menu_id)
        $(id_jumlah).attr('data-id', id)
        var jumlah = $(id_jumlah).val();
        var total = harga * jumlah
        var total_harga = (total/1000).toFixed(3)
        $(`#pesan-${id}-total`).val(total)
        totalBayar()
      });

      $(document).on('change', '.jumlah-count', function() {
        var harga = $(this).attr('data-harga');
        var menu_id = $(this).attr('data-menu-id');
        var id = $(this).attr('data-id');
        var jumlah = $(this).val()
        var total = harga * jumlah
        var total_harga = (total/1000).toFixed(3)
        $(`#pesan-${id}-total`).val(total)
        totalBayar()
      });
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.customer', ['titlePage' => 'Buy'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/pelanggan/menu/create.blade.php ENDPATH**/ ?>