<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests;
use Session;
use App\Http\Requests\LoginAdmin\LoginAdminAddRequest;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('loginAdmin');
    }
    public function postLogin(LoginAdminAddRequest $request)
    {
        $users = User::all();
        if(Auth::attempt($request->only('email','password'),$request->has('remember'))){
            foreach ($users as $user ) {
                if($user->email==$request->email){
                    if($user->level==1 || $user->level == 0){
                        return redirect()->route('admin.index');
                    }else{
                        Session::flash('error_login','Bạn Chỉ Là Thường Dân Nên Không Có Quyền Vào Web. Liên Hệ Admin Để Được Xét Thăng Cấp');
                        return redirect()->route('Login');
                    }
                }
            }
            return redirect()->route('admin.index')->with('success','Đăng nhập thành công');
        }else{
            return redirect()->back()->with('error','Tài khoản hoặc mật khẩu không đúng');
        }
    }
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('Login');
    }
}
