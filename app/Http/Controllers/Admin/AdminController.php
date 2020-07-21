<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\RoomImage;
use App\Http\Requests\User\CustomerRequest;

class AdminController extends Controller
{
    public function index(){
        $users = User::where('level',2)->get();
        $rooms = Room::all();
        $roomImage = RoomImage::all();
        $totalRoom = Room::count();
        $totalOrder = Order::count();
        return view('layoutadmin.home',compact('totalRoom','totalOrder','users','rooms','roomImage'));
    }

    public function file(){
        return view('admin.file');
    }

    public function error()
    {
        $code = request()->code;
        $errors = [
            'code' => 403,
            'title'=>'Unauthorized',
            'message'=>'Bạn không có quyền truy cập ...!'
        ];
        return view('admin.error',$errors);
    }

    public function getEditAdminPartner(Request $request,$id)
    {
        $users = User::find($id);
        // dd($user);
        return view('admin.User.editPartner',compact('users'));
    }

    public function postEditAdminPartner(CustomerRequest $request,User $user,$id)
    {
        $users = User::find($id);
        $model = $users->editCustomerInfor();
        return redirect()->back()->with('success', 'Cập nhật thành công');
    }
}
