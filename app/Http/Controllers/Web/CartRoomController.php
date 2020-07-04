<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomImage;
use App\Models\CategoryRoom;
use App\CartRoom\CartRoom;
use App\Models\CategoryService;
use App\Models\User;
use App\Models\Blog;
use App\Models\CategoryBlog;
use App\Models\BlogImage;
use App\Models\Service;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Session;
use Carbon\Carbon;

class CartRoomController extends Controller
{
    public function __construct()
    {
        $CategoryRoom = CategoryRoom::all();
        view()->share('CategoryRoom', $CategoryRoom);

        $CategoryService = CategoryService::all();
        view()->share('CategoryService', $CategoryService);

        $CategoryBlog = CategoryBlog::all();
        // dd($CategoryBlog);
        view()->share('CategoryBlog', $CategoryBlog);

        // $rooms = Room::all();
        // view()->share('rooms',$rooms);

        $roomImages = RoomImage::all();
        view()->share('roomImages', $roomImages);

        $blogs = Blog::all();
        view()->share('blogs', $blogs);

        $blogImages = BlogImage::all();
        view()->share('blogImages', $blogImages);

        $brands = Brand::all();
        view()->share('brands', $brands);
    }
    public function view(CartRoom $cart)
    {
        // dd($cart);
        $CategoryRoom = CategoryRoom::all();
        return view('page.cart_room', ['CategoryRoom' => $CategoryRoom]);
    }

    public function add(Request $request, CartRoom $cart, $id, OrderDetail $orderDetail, Room $room)
    {
        if (!empty($request->ArriveDate) && !empty($request->DepartDate)) {
            $from_date = $request->ArriveDate;
            $to_date = $request->DepartDate;
            $listRoomUsed  = $orderDetail->checkRoomForDate($from_date, $to_date);
            // dd($listRoomUsed[0]->room_id);
            // $params['listRoomUsed'] = $listRoomUsed;
            $from =  Carbon::parse($from_date);
            $to = Carbon::parse($to_date);
        }
        $room = Room::find($id);
        $qty = $request->qty ? $request->qty : 1;
        $arrRoomUsed = array();
        // foreach ($listRoomUsed)
        foreach ($listRoomUsed as $key => $value) {
            // dd($value->room_id);
            array_push($arrRoomUsed, $value->room_id);
        }
        if (($to->day) > ($from->day)) {
            if (in_array($id, $arrRoomUsed)) {
                return redirect()->back()->with('error', 'Phòng này vào thời gian này đã bị đặt');
            } else {
                $songay =  ($to->day) - ($from->day);
                $model = $cart->add($room, $qty, $from_date, $to_date, $songay);
        return redirect()->route('indexWeb')->with('success', 'Thêm thành công ' . $room->name . ' vào giỏ phòng');
            }
        } else {
            return redirect()->back()->with('error', 'Ngày đi nhỏ hơn đến đi. Không thể tiến hành booking room');
        }
        

        // // dd($cart);
        // $room = Room::find($id);
        // // dd($room);
        // $qty = $request->qty ? $request->qty : 1;
        // $arriveDate = $request->ArriveDate;
        // // dd($arriveDate);
        // $departDate = $request->DepartDate;
        // $from =  Carbon::parse($arriveDate);
        // $to = Carbon::parse($departDate);
        // // dd(gettype($to->day()));
        // $dateFormCheck = OrderDetail::whereBetween('from_date', [$arriveDate, $departDate])->get('id')->toArray();
        // $dateToCheck = OrderDetail::whereBetween('to_date', [$arriveDate, $departDate])->get('id')->toArray();
        // $dateBetweenOut = OrderDetail::where('from_date', '<=', $arriveDate)
        //          ->where('to_date', '>=',  $departDate)->get('id')->toArray();
        // $dateBetweenIn = OrderDetail::where('from_date', '>=', $arriveDate)
        //          ->where('to_date', '<=',  $departDate)->get('id')->toArray();
        // if (($to->day) > ($from->day)) {
        //     if(empty($dateFormCheck) && empty($dateToCheck) && empty($dateBetweenOut) && empty($dateBetweenIn)){
        //         $songay =  ($to->day) - ($from->day);
        //     }else{
        //         return redirect()->back()->with('error', 'Ngày bị đặt');
        //     }      
        // } else {
        //     return redirect()->back()->with('error', 'Ngày đi nhỏ hơn đến đi. Không thể tiến hành booking room');
        // }
        // $model = $cart->add($room, $qty, $arriveDate, $departDate, $songay);
        // return redirect()->route('indexWeb')->with('success', 'Thêm thành công ' . $room->name . ' vào giỏ phòng');
    }

    public function remove(CartRoom $cart, $id)
    {
        // dd($cart);

        $cart->remove($id);
        return redirect()->route('cart.view');
    }

    public function addService(Request $request, CartRoom $cartService, $id)
    {
        $service = Service::find($id);
        // dd($cartService);
        $qty = $request->qty ? $request->qty : 1;
        $cartService->addService($service, $qty);
        // dd(session('cartService'));
        return redirect()->route('indexWeb')->with('success', 'Thêm thành công ' . $service->name . ' vào giỏ hàng');
    }

    public function removeService(CartRoom $cartService, $id)
    {
        // dd($cartService);
        $cartService->removeService($id);
        return redirect()->route('cart.view');
    }

    public function update(CartRoom $cartService, $id, Request $request)
    {
        $qty = $request->qty;
        // dd($qty);
        $cartService->update($id, $qty);
        return redirect()->route('cart.view');
    }
}
