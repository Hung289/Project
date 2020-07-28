<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Route;
use App\Http\Requests\Role\RoleAddRequest;
use App\Http\Requests\Role\RoleEditRequest;

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
        
        return view('admin.Role.list', compact('data'));
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
        foreach ($all as $r) {
            $name = $r->getName();
            $pos = strpos($name, 'admin');
            if ($pos !== false && !in_array($name, $routes)) {
                array_push($routes, $name);
            }
        }

        return view('admin.Role.add', compact('routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleAddRequest $request)
    {   
        // dd($request->route);
        $routes = json_encode($request->route); //db không lưu được mảng . Câu lệnh này chuyển mảng thành chuỗi json để lưu vao db
        // dd($routes);
        Role::create([
            'name' => $request->name,
            'permissions' => $routes
        ]);

        return redirect()->route('admin.role.index')->with('success', 'Thêm mới nhóm quyền thành công');
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
        // dd($role->permissions);
        $routes = [];
        $permissions = json_decode($role->permissions);
        // dd($permissions);
        $all = Route::getRoutes();
        // dd($all);
        foreach ($all as $r) {
            $name = $r->getName();
            $pos = strpos($name, 'admin');
            if ($pos !== false && !in_array($name, $routes)) {
                array_push($routes, $name);
            }
        }

        return view('admin.Role.edit',compact('routes','role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(RoleEditRequest $request, Role $role)
    {
        $routes = json_encode($request->route); //db không lưu được bảng . Câu lệnh này chuyển mảng thành chuỗi json để lưu vao db
        // dd($routes);
        $role->update([
            'name' => $request->name,
            'permissions' => $routes
        ]);
        return redirect()->route('admin.role.index')->with('success', 'Cập nhật nhóm quyền thành công');
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
