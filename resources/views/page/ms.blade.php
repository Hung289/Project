@if(session('success'))
<script>
    Swal.fire({
        // position: 'top-end',
        icon: 'success',
        title: "{{session('success')}}",
        showConfirmButton: false,
        timer: 3000
    })
    // alert("{{session('success')}}");
</script>
@endif
@if(Session::has('error'))
<script>
    Swal.fire({
        // position: 'top-end',
        icon: 'warning',
        title: "{{Session('error')}}",
        showConfirmButton: false,
        timer: 3000
    })
</script>
@endif