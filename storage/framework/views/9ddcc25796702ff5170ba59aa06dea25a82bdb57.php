<?php $__env->startSection('breadcrumb'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Manajer</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Menu's</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Menu's</h6>
  </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Menu's table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="text-end px-4">
              <a href="<?php echo e(route('manajer.menu.create')); ?>"><button type="button" class="text-uppercase btn btn-sm btn-primary">Create</button></a>
            </div>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Menu</th>
                    <th class="text-uppercase text-secondary text-center text-xs font-weight-bolder opacity-7 ps-2">Harga</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Deskripsi</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kategori</th>
                    <th class="text-center text-uppercase text-secondary text-wrap text-xs font-weight-bolder opacity-7">Ketersediaan</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Terakhir di Ubah</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(count($menus) < 1): ?>
                    <tr>
                      <td colspan="8" class="text-center">No Menus</td>
                    </tr>
                  <?php else: ?>
                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="text-secondary text-xl text-center" style="width: 2px"><?php echo e(++$i); ?></td>
                        <td>
                          <p class="text-xl text-secondary mb-0"><?php echo e($menu->nama_menu); ?></p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Rp. <?php echo e(number_format($menu->harga,0,',','.')); ?></p>
                        </td>
                        <td class="align-middle text-sm" style="width: 25%">
                          <?php if(empty($menu->deskripsi)): ?>
                            <p class="text-xl text-center text-secondary mb-0">-</p>
                          <?php else: ?>
                            <p class="text-xl text-secondary mb-0 text-wrap"><?php echo e($menu->deskripsi); ?></p>
                          <?php endif; ?>
                        </td>
                        <td>
                          <p class="text-xl text-capitalize text-center text-secondary mb-0"><?php echo e($menu->kategori); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-info"><?php echo e($menu->ketersediaan); ?></span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xl text-secondary mb-0"><?php echo e($menu->updated_at->diffForHumans()); ?></p>
                        </td>
                        <td class="align-middle text-center">
                          <a href="<?php echo e(route('manajer.menu.edit', $menu->nama_menu)); ?>" class="text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Menu">
                            Edit
                          </a>
                          |
                          <a href="#" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus Menu" onclick="deleteModal('<?php echo e($menu->nama_menu); ?>')">
                            Hapus
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </tbody>
              </table>
              <div class="text-center m-4" id="menu-link">
                <?php echo $menus->onEachSide(5)->links(); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php echo $__env->make('_partials.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
  <script>
    async function deleteModal(menu) {
      $("#delete-modal").modal('show')
      $("#this-content").html(`Menu <b class="text-capitalize">${menu}</b>, for Real`)
      $("#deleteData").attr('action', `/manajer/menu/${menu}`)
    }
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['titlePage' => 'Menu\'s', 'activePage' => 'menu-manajer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/manajer/menu/index.blade.php ENDPATH**/ ?>