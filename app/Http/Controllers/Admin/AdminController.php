<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('layoutadmin.home');
    }

    public function file(){
        return view('admin.file');
    }
}