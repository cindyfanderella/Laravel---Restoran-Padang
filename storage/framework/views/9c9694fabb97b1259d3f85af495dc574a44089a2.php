<?php if($errors->any()): ?>
    <?php echo e(session()->flash('error', 'Tolong Cek Ulang Data Yang Kamu Masukkan!')); ?>

    <div class="alert alert-danger mb-0">
        <p><strong>Whoops!</strong> Ada Kesalahan Dalam Input yang Kamu Masukkan.</p>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/_partials/alert-error.blade.php ENDPATH**/ ?>