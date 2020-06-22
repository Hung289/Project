<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryService;
use Illuminate\Http\Request;

class CategoryServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cateService = CategoryService::orderBy('id','DESC')->paginate(5);
        return view('admin.CategoryService.list',compact('cateService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CategoryService.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryService $CategoryService)
    {
        $model = $CategoryService->add();
        if($model){
            return redirect()->route('categoryService.create')->with('success','Thêm mới thành công');
        }else{
            return redirect()->back()->with('error','Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryService  $categoryService
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryService $categoryService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryService  $categoryService
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryService $categoryService)
    {
        return view('admin.CategoryService.edit',['categoryService'=>$categoryService]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryService  $categoryService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryService $categoryService)
    {
        $model = $categoryService->updateEdit();
        return redirect()->route('categoryService.index')->with('success','Cập nhật thành công danh mục');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryService  $categoryService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryService $categoryService)
    {
        
        $categoryService->delete();
        return redirect()->route('categoryService.index')->with('success','Xóa thành công');
    }


    public function search(Request $request){
        $cateService = CategoryService::where('name','like','%'.$request->key.'%')
                    ->paginate(5);
        return view('admin.CategoryService.list',['cateService'=>$cateService]);
    }
}
