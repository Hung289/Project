<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryRoom;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRoom\CategoryRoomAddRequest;
use App\Http\Requests\CategoryRoom\CategoryRoomEditRequest;

class CategoryRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cateRoom = CategoryRoom::orderBy('id','DESC')->paginate(5);
        return view('admin.CategoryRoom.list',['cateRoom'=>$cateRoom]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CategoryRoom.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRoomAddRequest $request,CategoryRoom $CategoryRoom)
    {
        // dd(request()->all());
        $model = $CategoryRoom->add();
        
        if($model){
            return redirect()->route('admin.categoryRoom.create')->with('success','Thêm mới thành công');
        }else{
            return redirect()->back()->with('error','Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryRoom  $categoryRoom
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryRoom $categoryRoom)
    {
        return view('admin.CategoryRoom.view',['categoryRoom'=>$categoryRoom]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryRoom  $categoryRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryRoom $categoryRoom)
    {
        return view('admin.CategoryRoom.edit',['cateRoomEdit'=>$categoryRoom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryRoom  $categoryRoom
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRoomEditRequest $request, CategoryRoom $categoryRoom)
    {
        $model = $categoryRoom->updateEdit();
        return redirect()->route('admin.categoryRoom.index')->with('success','Cập nhật thành công danh mục');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryRoom  $categoryRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryRoom $categoryRoom)
    {
        if ($categoryRoom && $categoryRoom->room->count() == 0) {
            $categoryRoom->delete() ;
            return response(['success'=>true]);     
        } else {
            return response(['success'=>false]);
        }
        
    }

    public function search(Request $request){
        $cateRoom = CategoryRoom::where('name','like','%'.$request->key.'%')
                    ->paginate(5);
        return view('admin.CategoryRoom.list',['cateRoom'=>$cateRoom]);
    }
}
