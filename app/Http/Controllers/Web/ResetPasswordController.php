<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ResetPassword;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ResetPasswordController extends Controller
{
    public function getForgotPassword(Request $request)
    {
        // dd($request->email);
        //Tạo token và gửi đường link reset vào email nếu email tồn tại
        $result = User::where('email',$request->email)->first();
        // dd($result);
        if($result){
            $resetPassword = ResetPassword::create([
                'email'=>$request->email,
                'token'=>Str::random(60)
            ]);
            //Lấy ra token vừa lưu
            $token = ResetPassword::where('email',$request->email)->first();
            $link = $token->token; //send it to email
            $c_mail = $request->email;
            Mail::send('email.resetPassword',[
                'link'=>$link
            ],function($mail) use ($c_mail){
                $mail->to($c_mail);
                $mail->from('nthung2896@gmail.com');
                $mail->subject('AVSON - Hotel & Room Services -- Link lấy lại mật khẩu');
            });
            return redirect()->back()->with('success','Vui lòng kiểm tra email để có thể tiến hành đổi mật khẩu mới');
        }else{
            return redirect()->back()->with('error','Email không có trong hệ thống vui lòng kiểm tra lại');
        }
    }

    public function resetPassword(Request $request,$token)
    {
        // dd($token);
        $result = ResetPassword::where('token', $request->token)->first();
        // dd($result);
    	$data['info'] = $result->token;

    	if($result){
    		return view('page.recover_password', $data);
    	} else {
    		echo 'This link is expired';
    	}
    }

    public function newPass(Request $request)
    {
        if($request->password == $request->confirm){
            //check email with token
            $result = ResetPassword::where('token', $request->token)->first();

            // Update new password 
    		User::where('email', $result->email)->update(['password'=>bcrypt($request->password)]);

    		// Delete token
    		ResetPassword::where('token', $request->token)->delete();

    		return redirect()->route('getloginWeb');
    	} else {
    		return redirect()->back()->with('error','Xác nhận mật khẩu không đúng. Vui lòng thử lại');
    	}
        
    }
}
