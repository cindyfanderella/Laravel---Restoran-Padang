<script>
    <?php if(Session::has('success')): ?>
      var msg = "<?php echo e(session('success')); ?>";
      Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    <?php endif; ?>
    <?php if(Session::has('error')): ?>
      var msg = "<?php echo e(session('error')); ?>";
      Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    <?php endif; ?>
    <?php if(Session::has('warning')): ?>
      var msg = "<?php echo e(session('warning')); ?>";
      Swal.fire({
          icon: 'warning',
          title: 'Warning!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    <?php endif; ?>
</script><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/_partials/session-script.blade.php ENDPATH**/ ?>