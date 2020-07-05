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

// @foreach($rooms as $room)

//                     @endforeach

// @foreach($rooms as $room)
// <div class="col-md-6">
//     <!-- Single Room -->
//     <div class="single-room">

//         <div class="room-thumb">
//             @foreach($roomImages as $rI)
//             <?php $check = ($rI->room_id == $room->id) ? "$rI->image" : "" ?>
//             @if(!$check=="")
//             <img src="public/uploads/images/rooms/{{$check}}" alt="Room">
//             @break
//             @endif
//             @endforeach
//         </div>
//         <div class="room-desc">
//             <div class="room-cat">
//                 <p>{{$room->cateRoom->name}}</p>
//             </div>
//             <h4><a href="{{route('roomDetail',['id'=>$room->id])}}">{{$room->name}}</a></h4>
//             <p>
//                 {!!$room->description!!}
//             </p>
//             <ul class="room-info list-inline">
//                 <li><i class="fas fa-bed"></i>{{$room->bed}} Bed</li>
//                 <li><i class="fas fa-bath"></i>{{$room->bath}} Baths</li>
//                 <li><i class="fas fa-ruler-triangle"></i>{{$room->area}} m</li>
//             </ul>
//             <div class="room-price">
//                 <p>{{number_format($room->priceNight)}} $</p>
//             </div>
//         </div>
//     </div>
// </div>
// @endforeach


$(document).ready(function(){

    let boxRoom = {
        tagRoom : (room) => {
            return `<div class="single-room list-style" id="cclistRoom">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-6">
                    <div class="room-thumb">
                        <img src="public/uploads/images/rooms/${room.image}" alt="Room">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-desc">
                        <div class="room-cat">
                            <p>${room.cat_name}</p>
                        </div>
                        <h4><a href="http://localhost:81/ProjectSem1/review-room/room-detail/${room.id}">${room.name}</a></h4>
                        <ul class="room-info list-inline">
                            <li><i class="fas fa-bed"></i>${room.bed} Bed</li>
                            <li><i class="fas fa-bath"></i>${room.bath} Baths</li>
                            <li><i class="fas fa-ruler-triangle"></i>${room.area} m</li>
                        </ul>
                        <div class="room-price">
                            <p>{{number_format(${room.priceNight})}} $</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>`
        }
    }

    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('#csrf_token').attr('value')
	    }
    });
    let url_load_room = $('#form_search').attr('action');
    
    function loadRoom(form = ''){
        console.log(form);
        
        $.ajax({
            type: "POST",
            url: url_load_room,
            data: form,
            dataType: 'json',
            success: function(data) {
                $('#listRoomChild').remove();
                $('#listRoom').append('<div id="listRoomChild"></div>')
                data.forEach(item => {
                    console.log(item);
                    $('#listRoomChild').append(boxRoom.tagRoom(item))
                });
            }
        })
    }

    loadRoom();

    $('#nuttimkiem').click(function(){
        let data = $('#form_search').serialize();
        console.log(data);
        
        
        loadRoom(data);
    })
})