<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalRoom = Room::count();
        return view('layoutadmin.home',compact('totalRoom'));
    }

    public function file(){
        return view('admin.file');
    }


}
