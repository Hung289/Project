<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Route;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Role::paginate(15);
        return view('admin.Role.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = [];
        $all = Route::getRoutes();
        // dd($all);
        foreach($all as $r){
            $name = $r->getName();
            $pos = strpos($name,'admin');
            if($pos !== false){
                array_push($routes,$r->getName());
            }
           
        }
        // dd($routes);

        return view('admin.Role.add',compact('routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ],[
             'name.required'=>'Tên Nhóm quyền không được bỏ trống'   
        ]);
        // dd($request->route);
        $routes = json_encode($request->route);//db không lưu được bảng . Câu lệnh này chuyển mảng thành chuỗi json để lưu vao db
        // dd($routes);
        Role::create([
            'name'=>$request->name,
            'permissions'=>$routes
        ]);

        return redirect()->route('admin.role.index')->with('success','Thêm mới nhóm quyền thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
