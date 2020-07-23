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

    public function add($room, $from_date, $to_date, $songay)
    {
        $image = RoomImage::where('room_id', $room->id)->first();
        $cateRoom = CategoryRoom::where('id', $room->category_room_id)->first();
        if (!isset($this->items[$room->id])) {
            $this->items[$room->id] = [
                'id' => $room->id,
                'name' => $room->name,
                'price' => $room->priceNight ? $room->priceNight : $room->priceNight,
                'image' => $image->image,
                'bed' => $room->bed,
                'bath' => $room->bath,
                'area' => $room->area,
                'location' => $room->location,
                'category_room_id' => $cateRoom->name,
                'arriveDate' => $from_date,
                'departDate' => $to_date,
                'songay' => $songay,
                'services' => [],
            ];
        }
        // dd( $this->items);
        session(['cart' => $this->items]);
    }

    public function remove($id)
    {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
        session(['cart' => $this->items]);
    }

    public function get_total_price()
    {
        // dd($this->item);
        $t = 0;
        foreach ($this->items as $item) {
            $t += ($item['price'] * $item['songay']);
        }
        return $t;
    }

    //service
    public function addService($room_id,$service, $qty = 1, $from_date, $to_date)
    {
        if (isset($this->items[$room_id])) {
            $services = $this->items[$room_id]['services'];
            if (isset($services[$service->id])) {
                $services[$service->id]['quantity'] += 1;
            }else{
                $service_item = [
                    'id' => $service->id,
                    'name' => $service->name,
                    'quantity' => $qty,
                    'price' => $service->price ? $service->price : $service->price,
                    'imageService' => $service->image,
                    'from_date' => $from_date,
                    'to_date' => $to_date
                ];

                $services[$service->id] = $service_item;
            }

            $this->items[$room_id]['services'] = $services;
            session(['cart' => $this->items]);
        }
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

    public function removeService($room_id,$service_id)
    {

        if (isset($this->items[$room_id]['services'][$service_id])) {
            unset($this->items[$room_id]['services'][$service_id]);
            session(['cart' => $this->items]);
        }

    }


    public function update($room_id,$service_id, $qty)
    {
        if (isset($this->items[$room_id]['services'][$service_id])) {
            $this->items[$room_id]['services'][$service_id]['quantity'] = $qty;
        }

        session(['cart' => $this->items]);
    }
}
