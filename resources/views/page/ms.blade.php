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
@if(session('successService'))
<script>
    let timerInterval
    Swal.fire({
        title: "{{Session('successService')}}",
        html: 'I will close in <b></b> milliseconds.',
        timer: 3500,
        timerProgressBar: true,
        onBeforeOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
                const content = Swal.getContent()
                if (content) {
                    const b = content.querySelector('b')
                    if (b) {
                        b.textContent = Swal.getTimerLeft()
                    }
                }
            }, 100)
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
        }
    })
    
</script>
@endif