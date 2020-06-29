$(function (){
    var star = '.star',
        selected = '.selected';
    
    $(star).on('click', function(){
      $(selected).each(function(){
        $(this).removeClass('selected');
      });
      $(this).addClass('selected');
      var star = $(this).data("star");
      alert(star);
      var idRoom = $("[name='roomD']").val();
      alert(idRoom);
      var _token = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
        url: "{{ route('postStar') }}",
        type:"POST",
        data:{
            '_token': _token,
            idRoom : idRoom,
            star: star,
        },
        success:function(response) {
            console.log(response);
         },
      });
    });
   
  });