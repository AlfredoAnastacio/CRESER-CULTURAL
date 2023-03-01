<script>
    $( document ).ready(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: true
        });        

        @if ($message = Session::get('success'))
            Toast.fire({
                icon: 'success',
                title: '{{$message}}'
            });
        @endif

        @if (count($errors))
            @foreach ($errors->all() as $error)
                Toast.fire({
                    icon: 'error',
                    title: '{{$error}}'
                });
            @endforeach
        @endif        
    });
</script>