<?php $__env->startSection('breadcrumb'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Kasir</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Transaction</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Transaction</h6>
  </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Transactions table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="text-end px-4">
              <a href="<?php echo e(route('kasir.transaction.create')); ?>"><button type="button" class="text-uppercase btn btn-sm btn-primary">Create</button></a>
            </div>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Pelanggan</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Menu</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Total</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Pegawai</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7" colspan="2">Waktu</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(count($datas) < 1): ?>
                    <tr>
                      <td colspan="8" class="text-center">No Transaksi Recordings</td>
                    </tr>
                  <?php else: ?>
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="text-secondary text-center" style="width: 2px"><?php echo e(++$i); ?></td>
                        <td>
                          <p class="text-xl text-secondary mb-0"><?php echo e($data->nama_pelanggan); ?></p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?php echo e($data->menu->nama_menu); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0"><?php echo e($data->jumlah); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">Rp. <?php echo e(number_format($data->total_harga, 0,',','.')); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0"><?php if(isset($data->pegawai->name)): ?> <?php echo e($data->pegawai->name); ?> <?php else: ?> - <?php endif; ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0"><?php echo e($data->created_at->format('D, d M Y')); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0"><?php echo e($data->created_at->format('H:i')); ?></p>
                        </td>
                        <td class="align-middle text-center">
                          <a href="<?php echo e(route('kasir.transaction.edit', $data->id)); ?>" class="text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit data">
                            Edit
                          </a>
                          |
                          <a href="#" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus data" onclick="deleteModal('<?php echo e($data->id); ?>')">
                            Hapus
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </tbody>
              </table>
              <div class="text-center m-4" id="data-link">
                <?php echo $datas->onEachSide(5)->links(); ?>

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
    async function deleteModal(id) {
      $("#delete-modal").modal('show')
      $("#this-content").html(`Following Transaction, for Real`)
      $("#deleteData").attr('action', `/kasir/transaction/${id}`)
    }
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['titlePage' => 'Transaksi', 'activePage' => 'transaksi-kasir'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/kasir/index.blade.php ENDPATH**/ ?>