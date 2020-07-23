<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryService;
use App\Models\User;
use App\Models\Room;
use App\Models\Blog;
use App\Models\CategoryRoom;
use App\Models\CategoryBlog;
use App\Models\RoomImage;
use App\Models\BlogImage;
use App\Models\Customer;
use App\CartRoom\CartRoom;
use App\Models\Service;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderDetailService;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Brand;
use App\Http\Requests\CheckOut\CheckOutAddRequest;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
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

    public function getCheckOut()
    {
        $orders = Order::all();
        return view('page.checkout', compact('orders'));
    }

    public function postCheckOut(CheckOutAddRequest $request, CartRoom $cart, Order $orders, OrderDetail $orderDetails, OrderDetailService $orderDetailServices, Customer $customers)
    {
        $customer = $customers->addCustomer();
        $order = $orders->addOrder($customer, $cart);
        foreach ($cart->items as $item) {
            $orderDetail = $orderDetails->addOrderDetail($order, $item);
            foreach ($item['services'] as $service) {
                $orderDetailService = $orderDetailServices->addOrderDetailService($orderDetail, $service);
            }
        }
        $c_email = Auth::user()->email;
        $c_name = Auth::user()->name;
        // dd($c_email);

        Mail::send('email.booking', [
            'order' => $order,
            'room' => $cart->items,
            'service' => $cart->services,
            'c_name' => $c_name
        ], function ($mail) use ($c_email, $c_name) {
            $mail->to($c_email, $c_name);
            $mail->from('nthung2896@gmail.com');
            $mail->subject('AVSON - Hotel & Room Services');
        });
        session(['cart' => []]);
        session(['cartService' => []]);
        return redirect()->route('indexWeb')->with('success', 'Đặt phòng Thành Công. Bạn cui lòng kiểm tra gmail để biết chi tiết');
    }
}
