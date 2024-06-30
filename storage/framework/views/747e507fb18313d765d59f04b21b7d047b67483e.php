<script>
     function HitData(url, data, type) {
        return new Promise((resolve, reject) => {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                data: data,
                type: type,
                success: (response) => {
                    resolve(response)
                },
                error: (error) => {
                    reject(error)
                }
            })
        })
    }
</script><?php /**PATH C:\xampp\htdocs\Restoran-Master\resources\views/_partials/ajaxPromise.blade.php ENDPATH**/ ?>