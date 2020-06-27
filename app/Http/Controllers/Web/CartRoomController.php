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
use Illuminate\Support\Facades\Auth;
use Session;
use Carbon\Carbon;

class CartRoomController extends Controller
{
    public function __construct()
    {
        $CategoryRoom = CategoryRoom::all();
        view()->share('CategoryRoom',$CategoryRoom);

        $CategoryService = CategoryService::all();
        view()->share('CategoryService',$CategoryService);

        $CategoryBlog = CategoryBlog::all();
        // dd($CategoryBlog);
        view()->share('CategoryBlog',$CategoryBlog);

        // $rooms = Room::all();
        // view()->share('rooms',$rooms);

        $roomImages = RoomImage::all();
        view()->share('roomImages',$roomImages);

        $blogs = Blog::all();
        view()->share('blogs',$blogs);

        $blogImages = BlogImage::all();
        view()->share('blogImages',$blogImages);
    }
    public function view(CartRoom $cart){
        // dd($cart);
        $CategoryRoom = CategoryRoom::all();
        return view('page.cart_room',['CategoryRoom'=> $CategoryRoom]);
    }

    public function add(Request $request,CartRoom $cart,$id){
        // dd($cart);
        $room = Room::find($id);
        // dd($room);
        $qty = $request->qty ? $request->qty : 1;
        $arriveDate = $request->ArriveDate;
        $departDate = $request->DepartDate;
        $from =  Carbon::parse($arriveDate);
        $to = Carbon::parse($departDate);
        // dd(gettype($to->day()));
        if(($to->day)>($from->day)){
            $songay =  ($to->day)-($from->day);
            // dd($songay);
            // return $songay;
        }

        
        // dd($dt);
        // dd($songay);

        $model = $cart->add($room,$qty,$arriveDate,$departDate,$songay);
        // dd(session('cart'));
        
        return redirect()->route('indexWeb')->with('success','Thêm thành công '.$room->name.' vào giỏ hàng');
    }

    public function remove(CartRoom $cart,$id)
    {
        // dd($cart);
        
        $cart->remove($id);
        return redirect()->route('cart.view');
    }

    public function addService(Request $request,CartRoom $cartService,$id)
    {
        $service = Service::find($id);
        // dd($cartService);
        $qty = $request->qty ? $request->qty : 1;
        $cartService->addService($service,$qty);
        // dd(session('cartService'));
        return redirect()->route('indexWeb')->with('success','Thêm thành công '.$service->name.' vào giỏ hàng');
    }

    public function removeService(CartRoom $cartService,$id)
    {
        // dd($cartService);
        $cartService->removeService($id);
        return redirect()->route('cart.view');
    }

    public function update(CartRoom $cartService,$id,Request $request)
    {
        $qty = $request->qty;
        // dd($qty);
        $cartService->update($id, $qty);
    	return redirect()->route('cart.view');
    }
}
