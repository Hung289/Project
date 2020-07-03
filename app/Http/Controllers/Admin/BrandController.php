<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Brand\BrandAddRequest;
use App\Http\Requests\Brand\BrandEditRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::paginate(5);
        // dd($brands);
        return view('admin.Brand.list', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Brand.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Brand $brand, BrandAddRequest $request)
    {
        // dd($brand);
        $brands = $brand->add();
        if ($brands) {
            return redirect()->route('brand.create')->with('success', 'Thêm mới danh mục thành công');
        } else {
            return redirect()->back()->with('errors', 'Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        // dd($brand);
        return view('admin.Brand.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(BrandEditRequest $request, Brand $brand)
    {
        $brands = $brand->updateEdit();
        if ($brands) {
            return redirect()->route('brand.index')->with('success', 'Cập nhật thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        if($brand->delete()){
            return response(['success'=>true]);
        }else{
            return response(['success'=>false]);
        }
        
    }

    public function search(Request $request)
    {
        // $blogs = Blog::where('name', 'like', '%' . $request->key . '%')
        //     ->orWhere('title', 'like', '%' . $request->key . '%')
        //     ->paginate(5);
        // return view('admin.Blog.list', ['blogs' => $blogs]);
        $brands = Brand::where('name','like', '%' . $request->key . '%')
                ->paginate(5);
        return view('admin.Brand.list',['brands'=>$brands]);
    }
}
