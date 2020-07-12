@if(session('success'))
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{session('success')}}",
        showConfirmButton: false,
        timer: 1500
    })
    // alert("{{session('success')}}");
</script>
@endif
@if(Session::has('errors'))
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: "{{Session('errors')}}",
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif