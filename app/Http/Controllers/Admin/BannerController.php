<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\Banner\BannerAddRequest;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::paginate(5);
        return view('admin.Banner.list',['banners'=>$banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Banner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerAddRequest $request,Banner $banner)
    {
        // dd($banner);
        $model = $banner->add();
        if($model){
            return redirect()->route('banner.create')->with('success','Thêm mới thành công');
        }else{
            return redirect()->back()->with('errors','Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        // dd($banner->content);
        return view('admin.Banner.edit',['banner'=>$banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $model = $banner->updateEdit();
        // dd($model);
        return redirect()->route('banner.index')->with('success','Cập nhật thành công banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        // dd($banner);
        if($banner->delete()){
            return response(['success'=>true]);
        }else{
            return response(['success'=>false]);
        }
        
        
    }

    public function search(Request $request)
    {
        $banners = Banner::where('name','like','%' . $request->key . '%')->paginate(5);
        return view('admin.Banner.list',['banners'=>$banners]);
    }
}
