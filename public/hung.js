// $(function(){
//     $('#nuttao').click(function(){
//         // alert("cc");
//         let timerInterval
//         Swal.fire({
//         title: 'Auto close alert!',
//         html: 'Thêm mới người dùng thành công',
//         timer: 2000,
//         timerProgressBar: true,
//         onBeforeOpen: () => {
//             Swal.showLoading()
//             timerInterval = setInterval(() => {
//             const content = Swal.getContent()
//             if (content) {
//                 const b = content.querySelector('b')
//                 if (b) {
//                 b.textContent = Swal.getTimerLeft()
//                 }
//             }
//             }, 100)
//         },
//         onClose: () => {
//             clearInterval(timerInterval)
//         }
//         }).then((result) => {
//         /* Read more about handling dismissals below */
//         if (result.dismiss === Swal.DismissReason.timer) {
//             console.log('I was closed by the timer')
//         }
//         })

//         Swal.fire({
//             icon: 'error',
//             title: 'Oops...',
//             text: 'Thêm mới người dùng thất bại',
//           })
//     })
//     $('form[name=pForm]').submit(function(event){
//         event.preventDefault();
//         return false;
//     });
    
// })
