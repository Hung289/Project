<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
class OrderDetail extends Model
{
    protected $fillable = [
        'order_id','room_id','service_id','from_date','to_date','quantity_service'
    ];

    protected function order()
    {
        return $this->belongsTo('App\Models\Order','order_id','id');
    }

    protected function room()
    {
        return $this->belongsTo('App\Models\Room','room_id','id');
    }

    protected function service()
    {
        return $this->belongsTo('App\Models\Service','service_id','id');
    }


    public function checkRoomForDate($from_date, $to_date)
    {
        // model goij query kieeur gif nhir :v$this nay u dung roi oke 
        // owr day ko on 
        //loi roi
        // query sai, 2 cot 
        // 24/6 - 27-6
        // 25/6 - 1/7 
        //toi afm tiep
        //het gio cmnr vl =))oke 
        // de suy nghi
        // ngồi ăn cơm suy nghĩ lớn hơn bé hơn cũng đéo được =))
        //vcc, giờ chỉ cần check no owrnam trong cai ngay den ngay di
        //ông thầy bảo datebetween
        // cai dau la no ow giua =))//vl//eos ddc a
        // 
        // dd(date_create_from_format('F d, Y', 'Apr 30, 2010');$from_date);
        // duoc nay =))//sao ruyeefn vaof kia ddc
        // e he he =)) kkkkkk =)))//
        //phải biết xài google =))//vl sang địt vã mồ hôi đít
        //sao phải cần 2 cái return $this->whereBetween('from_date', [$from_date, $to_date])
          //  ->orwhereBetween('to_date', [$from_date, $to_date])
        //   thì phai so sanh 2 ngay nhạp vao chu, 1 ngay nhap vao thi da de//đấy hôm nọ bảo
        //cái này 2 ngày rồi//
        //validate cái form lịch mới vc//

        // cái đấy là ko được chọn ngày sau ngày hiện tại =)) , ngày đến vs lớn hơn ngày đi =))/
        //biết làm ko
        //làm luôn
        // dễ vl =))
        //vl gáy ti thôi =)) để xem đã =))
        // xem file validete nào//cái lịch của html mà
        // validate tren server chứ//bấm vào đấy
        //mấy ngày trước hôm nay bị tối đi ko bấm vào đc.Đây vẫn bấm đc hết
        // cái nào.cái chọn thời gian.để demo cho
        // file html ?
        return $this->whereBetween('from_date', [$from_date, $to_date])
            ->orwhereBetween('to_date', [$from_date, $to_date])
            ->orwhere(function ($query) use ($from_date, $to_date){
                return $query->where('from_date', '<=', $from_date)
                     ->where('to_date', '>=',  $to_date);
            })
            ->get('room_id');
       
    }

    

    
}
