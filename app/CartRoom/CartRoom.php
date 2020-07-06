<?php

namespace App\CartRoom;

use App\Models\Room;
use App\Models\RoomImage;
use App\Models\CategoryRoom;
use Carbon\Carbon;
use DateTime;

class CartRoom
{
    public $items = [];
    public $services = [];
    public $total_price = 0;
    public $total_price_service = 0;
    public $total_quantity = 0;

    public function __construct()
    {

        $this->items = session('cart') ? session('cart') : [];
        $this->services = session('cartService') ? session('cartService') : [];
        $this->total_price = $this->get_total_price();
        $this->total_price_service = $this->get_total_price_service();
        $this->total_quantity = $this->get_total_quantity_service();
    }

    public function add($room, $qty = 1, $from_date, $to_date,$songay)
    {
        $image = RoomImage::where('room_id', $room->id)->first();
        $cateRoom = CategoryRoom::where('id', $room->category_room_id)->first();
        // dd($cateRoom);
        if (isset($this->items[$room->id])) {
            $this->items[$room->id]['quantity'] += $qty;
            // $this->items[$room->id] = [
            //     'id' => $room->id,
            //     'name' => $room->name,
            //     'quantity' => $qty,
            //     'price' => $room->priceNight ? $room->priceNight : $room->priceNight,
            //     'image' => $image->image,
            //     'bed' => $room->bed,
            //     'bath' => $room->bath,
            //     'area' => $room->area,
            //     'location' => $room->location,
            //     'category_room_id' => $cateRoom->name,
            //     'arriveDate' => $from_date,
            //     'departDate' => $to_date,
            //     'songay'=>$songay
            // ];
        } else {
            $this->items[$room->id] = [
                'id' => $room->id,
                'name' => $room->name,
                'quantity' => $qty,
                'price' => $room->priceNight ? $room->priceNight : $room->priceNight,
                'image' => $image->image,
                'bed' => $room->bed,
                'bath' => $room->bath,
                'area' => $room->area,
                'location' => $room->location,
                'category_room_id' => $cateRoom->name,
                'arriveDate' => $from_date,
                'departDate' => $to_date,
                'songay'=>$songay
            ];
        }

        session(['cart' => $this->items]);
    }

    public function remove($id)
    {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
        // dd(session(['cart'=>$this->items]));
        session(['cart' => $this->items]);
    }

    public function get_total_price()
    {
        // dd($this->item);
        $t = 0;
        foreach ($this->items as $item) {
            $t +=($item['price']*$item['songay']);  
        }
        return $t;
    }






    //service
    public function addService($service, $qty = 1,$room)
    {
        if (isset($this->services[$service->id])) {
            $this->services[$service->id]['quantity'] += $qty;
        } else {
            $this->services[$service->id] = [
                'id' => $service->id,
                'name' => $service->name,
                'quantity' => $qty,
                'price' => $service->price ? $service->price : $service->price,
                'imageService' => $service->image,
                'room_id'=>$room
            ];
        }
        session(['cartService' => $this->services]);
    }

    public function get_total_price_service()
    {
        $g = 0;
        foreach ($this->services as $service) {
            $g += $service['price'] * $service['quantity'];
        }
        return $g;
    }

    public function get_total_quantity_service()
    {
        $t = 0;
        foreach ($this->services as  $service) {
            $t += $service['quantity'];
        }
        return $t;
    }

    public function removeService($id)
    {
        if (isset($this->services[$id])) {
            unset($this->services[$id]);
        }
        session(['cartService' => $this->services]);
    }
    public function update($id, $qty)
    {
        if (isset($this->services[$id])) {
            $this->services[$id]['quantity'] = $qty;
        }
        session(['cartService' => $this->services]);
    }
}
