<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function index(){
        $totalRoom = Room::count();
        $totalOrder = Order::count();
        return view('layoutadmin.home',compact('totalRoom','totalOrder'));
    }

    public function file(){
        return view('admin.file');
    }


}
