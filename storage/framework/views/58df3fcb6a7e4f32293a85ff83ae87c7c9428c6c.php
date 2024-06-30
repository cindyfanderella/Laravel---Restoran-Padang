<?php $__env->startSection('breadcrumb'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Manajer</a></li>
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
          <div class="card-body px-2 pb-2">
            <div class="text-start px-4">
              <style>
                input[type=text] {
                  width: 75px;
                  display: inline;
                }
                @media only screen and (max-width: 450px) {
                  input[type=text] {
                    width: auto;
                    display: block;
                  }
                }
              </style>
              <span class="text-md">Filter dari </span> <input type="text" class="form-control mb-0 mx-4" name="filter-dari" id="filter-dari"> <span class="text-md">Sampai</span> <input type="text" class="form-control mb-0 mx-4" name="filter-sampai" id="filter-sampai"> 
              <input type="button" id="button-date" onclick="filterDate()" class="btn mb-0 btn-info" value="Filter">
            </div>
            <div class="text-end px-4">
              <a href=""><button type="button" class="text-uppercase btn btn-sm btn-secondary">Reload</button></a>
              
              <a href="<?php echo e(route('manajer.cetak-laporan')); ?>" id="cetak-pdf"><button type="button" class="text-uppercase btn btn-sm btn-primary">Cetak PDF</button></a>

              <a class="d-none" href="<?php echo e(route('manajer.cetak-laporan-filtering')); ?>" id="cetak-pdf-filtering" onclick="event.preventDefault();
                document.getElementById('cetak-form').submit();"><button type="button" class="text-uppercase btn btn-sm btn-primary">Cetak PDF</button></a>

              <form id="cetak-form" action="<?php echo e(route('manajer.cetak-laporan-filtering')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
                <input class="d-none" type="date" name="from" id="from">
                <input class="d-none" type="date" name="to" id="to">
              </form>
            </div>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <span class="m-4" id="text-filter"></span>
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Pelanggan</th>
                    <th id="td-user_id" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">User</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Menu</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Total</th>
                    <th id="td-nama_pegawai" class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Pegawai</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7" colspan="2" id="td-created_at">Waktu</th>
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
                          <p class="text-xl text-capitalize text-secondary mb-0"><?php echo e($data->nama_pelanggan); ?></p>
                        </td>
                        <td class="text-center">
                          <p class="text-xl text-secondary mb-0"><?php if(isset($data->user_id)): ?> <?php echo e($data->pelanggan->username); ?> <?php else: ?> - <?php endif; ?></p>
                        </td>
                        <td> 
                          <p class="text-xs font-weight-bold mb-0"><?php echo e($data->menu->nama_menu); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0"><?php echo e($data->jumlah); ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">Rp. <?php echo e(number_format($data->total_harga,0,',','.')); ?></p>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
      $(function() {
        $("input[name=filter-dari]").datepicker({  maxDate: new Date(), dateFormat: 'yy-mm-dd' })
        $("input[name=filter-sampai]").datepicker({  maxDate: new Date(), dateFormat: 'yy-mm-dd' })
      });

      async function filterData() {
        var from = $("input[name=filter-dari]").val()
        var to = $("input[name=filter-sampai]").val()
        var data = {
          _token: '<?php echo e(csrf_token()); ?>',
          from, to
        }
        const resp = await HitData('/manajer/filter/laporan', data, 'POST')
        const fdata = resp.data
        $("tbody").empty()
        $("#td-created_at").remove()
        $("#td-user_id").remove()
        $("#td-nama_pegawai").remove()

        if (fdata.length === 0) {
          $("#cetak-pdf-filtering").addClass('d-none')
          $("tbody").append('<tr><td colspan="6" class="text-secondary text-center" style="width: 2px">No Transaction</td></tr>')
        }
        var iter = 1
        for (const data of fdata) {
          var	number_string = data['total_harga'].toString(),
            sisa 	= number_string.length % 3,
            rupiah 	= number_string.substr(0, sisa),
            ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
              
          if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
          }
          $("tbody").append(`<tr>
                        <td class="text-secondary text-center" style="width: 2px">${iter}</td>
                        <td>
                          <p class="text-xl text-secondary mb-0">${data['nama_pelanggan']}</p>
                        </td>
                        <td> 
                          <p class="text-xs font-weight-bold mb-0">${data['nama_menu']}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">${data['jumlah']}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">Rp. ${rupiah} </p>
                        </td>
                      </tr>`)
          iter++;
        }
      }

      function filterDate() {
        var from = $("input[name=filter-dari]").val()
        var to = $("input[name=filter-sampai]").val()
        var title = `Filter dari tanggal <b class="filter-from">${from}</b> sampai tanggal <b class="filter-to">${to}</b>`

        if (from == '' && to == '') {
          var msg = 'Input Tanggal Tidak Boleh Kosong!'
          Swal.fire(
            'Warning!',
            msg,
            'warning'
          )
        } else if (from != '' && to != '') {
          if (from > to) {
            var msg = "Input Tanggal Harus Berurutan!"
            Swal.fire(
              'Warning!',
              msg,
              'warning'
            ) 
          } else {
            Swal.fire({
              title: `${title}?`,
              // showDenyButton: true,
              showCancelButton: true,
              confirmButtonText: 'Yes',
            }).then((result) => {
              /* Read more about isConfirmed, isDenied below */
              if (result.isConfirmed) {
                $("#text-filter").html(title)
                $("#cetak-pdf").addClass('d-none');
                $("#cetak-pdf-filtering").removeClass('d-none');
                $("#from").val(from)
                $("#to").val(to)
                $("#data-link").remove()
                filterData()
                // Swal.fire('Saved!', '', 'success')
              } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
              }
            })
          }
        }
      }

      async function filterCetak() {
        var from = $("input[name=filter-dari]").val()
        var to = $("input[name=filter-sampai]").val()
        var data = {
          _token: '<?php echo e(csrf_token()); ?>',
          from, to
        }
        const resp = await HitData('/manajer/laporan/cetak', data, 'POST')
      }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['titlePage' => 'Laporan', 'activePage' => 'laporan-manajer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/manajer/laporan/index.blade.php ENDPATH**/ ?>