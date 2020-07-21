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
@if(session('successthemmoi'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: "{{session('successthemmoi')}}"
    })
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