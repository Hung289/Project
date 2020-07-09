<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\CategoryService;
use Illuminate\Http\Request;
use App\Http\Requests\Service\ServiceAddRequest;
use App\Http\Requests\Service\ServiceEditRequest;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','DESC')->get();
        return view('admin.Servicess.list',['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responseservices
     */
    public function create()
    {
        $serviceCate = CategoryService::all();
        return view('admin.Servicess.add',['serviceCate'=>$serviceCate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceAddRequest $request,Service $service)
    {
        $model = $service->add();
        if($model){
            return redirect()->route('service.create')->with('success','Thêm mới thành công');
        }else{
            return redirect()->back()->with('error','Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.Servicess.view',['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $serviceCate = CategoryService::all();
        return view('admin.Servicess.edit',['service'=>$service,'serviceCate'=>$serviceCate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceEditRequest $request, Service $service)
    {
        $model = $service->updateEdit();
        return redirect()->route('service.index')->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service->delete()){
            return response(['success'=>true]);
        }else{
            return response(['success'=>false]);
        }
    }

    public function search(Request $request){
        $services = Service::where('name','like','%'.$request->key.'%')
                    ->paginate(5);
        return view('admin.Service.list',['services'=>$services]);
    }
}
