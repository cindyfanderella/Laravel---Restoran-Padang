<?php $__env->startSection('breadcrumb'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Admin</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Registration</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Registration</h6>
  </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">User's table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="text-end px-4">
              <a href="<?php echo e(route('admin.registration.create')); ?>"><button type="button" class="text-uppercase btn btn-sm btn-primary">Create</button></a>
            </div>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Username</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Password</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Role</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Terakhir di Ubah</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(count($users) < 1): ?>
                    <tr>
                      <td colspan="8" class="text-center">No Users</td>
                    </tr>
                  <?php else: ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="text-secondary text-center" style="width: 2px"><?php echo e(++$i); ?></td>
                        <td>
                          <p class="text-xl text-secondary mb-0"><?php echo e($user->name); ?></p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?php echo e($user->username); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0"><?php echo e($user->pass); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <?php if($user->role == 'admin'): ?>
                            <span class="badge badge-sm bg-gradient-info">Admin</span>
                          <?php elseif($user->role == 'kasir'): ?>
                            <span class="badge badge-sm bg-gradient-warning">Kasir</span>
                          <?php elseif($user->role == 'manajer'): ?>
                            <span class="badge badge-sm bg-gradient-success">Manajer</span>
                          <?php elseif($user->role == 'pelanggan'): ?>
                            <span class="badge badge-sm bg-gradient-primary">Pelanggan</span>
                          <?php endif; ?>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0"><?php echo e($user->updated_at->diffForHumans()); ?></p>
                        </td>
                        <td class="align-middle text-center">
                          <a href="<?php echo e(route('admin.registration.edit', $user->username)); ?>" class="text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          |
                          <a href="#" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus user" onclick="deleteModal('<?php echo e($user->username); ?>', '<?php echo e($user->name); ?>', '<?php echo e($user->role); ?>')">
                            Hapus
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </tbody>
              </table>
              <div class="text-center m-4" id="user-link">
                <?php echo $users->onEachSide(5)->links(); ?>

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
    async function deleteModal(username, name, role) {
      $("#delete-modal").modal('show')
      $("#this-content").html(`User <i class="text-capitalize">${role}</i> [${username}] ${name}, for Real`)
      $("#deleteData").attr('action', `/admin/registration/${username}`)
    }
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['titlePage' => 'User', 'activePage' => 'user-admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/admin/index.blade.php ENDPATH**/ ?>