<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\User\UserAddRequest;
use App\Http\Requests\User\UserEditRequest;
use App\Models\UserRole;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userList = User::orderBy('id','DESC')->get();
        return view('admin.User.list',['userList'=>$userList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.User.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAddRequest $request,User $User)
    {
        $model = $User->add();
        // dd($model);
        if($model){
            return redirect()->route('admin.user.create')->with('success','Thêm mới người dùng thành công');
        }else{
            return redirect()->back()->with('error','Thêm mới người dùng thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.User.model',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $role_assigments = $user->getRoles->pluck('name','id')->toArray();
        $roles = Role::orderBy('name','ASC')->get();
        return view('admin.User.edit',['user'=>$user,'roles'=>$roles,'role_assigments'=>$role_assigments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, User $user)
    {
        // dd($request->all());
        $model = $user->updateEdit();
        $roleUser = $request->role;
        // dd($roleUser);
        if(is_array($roleUser)){
            UserRole::where('user_id',$user->id)->delete();
            foreach($roleUser as $role_id){
                UserRole::create([
                    'user_id'=>$user->id,
                    'role_id'=>$role_id
                ]);
            }
        }
        return redirect()->route('admin.user.index')->with('success','Cập nhật thành công tài khoản');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->delete()){
            return response(['success'=>true]);
        }else{
            return response(['success'=>false]);
        }
    }

    public function search(Request $request){
        $userList = User::where('name','like','%'.$request->key.'%')
                    ->paginate(5);
        return view('admin.User.list',['userList'=>$userList]);
    }
}
