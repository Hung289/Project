<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $systems = System::all();
        return view('admin.System.list', compact('systems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.System.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, System $system)
    {
        $model = System::create([
            'key' => $request->key,
            'data' => $request->data,
            'label' => $request->label
        ]);
        return redirect()->back()->with('success', 'Thêm thành công');
    }

    public function store2(Request $request, System $system)
    {
        $images = $request->file('image');
        $mangs = [];
        foreach ($images as $img) {
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/System'), $img_name);
            if (!in_array($img_name, $mangs)) {
                array_push($mangs, $img_name);
            }
        }
        // dd($mangs);
        $mangsJson = json_encode($mangs);
        $model = System::create([
            'key' => $request->key,
            'data' => $mangsJson,
            'label' => $request->label
        ]);
        return redirect()->back()->with('success', 'Thêm thành công');
    }

    public function store3(Request $request, System $system)
    {
        $image = $request->file('image');
        $img_name = $image->getClientOriginalName();
        $image->move(base_path('public/uploads/images/System'), $img_name);
        $model = System::create([
            'key' => $request->key,
            'data' => $img_name,
            'label' => $request->label
        ]);
        return redirect()->back()->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function show(System $system)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function edit(System $system)
    {
        // dd($system);
        return view('admin.System.edit', compact('system'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, System $system)
    {
        $model = $system->update([
            'key' => $request->key,
            'data' => $request->data,
            'label' => $request->label
        ]);
        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function update2(Request $request, System $system) //cấp nhật icon Social
    {
        if ($request->has('image')) {
            $images = $request->file('image');
            $mangs = [];
            foreach ($images as $img) {
                $img_name = $img->getClientOriginalName();
                $img->move(base_path('public/uploads/images/System'), $img_name);
                if (!in_array($img_name, $mangs)) {
                    array_push($mangs, $img_name);
                }
            }
            // dd($mangs);
            $mangsJson = json_encode($mangs);
            $model = $system->update([
                'key' => $request->key,
                'data' => $mangsJson,
                'label' => $request->label
            ]);
            return redirect()->back()->with('success', 'Câp nhật thành công');
        } else {
            $model = $system->update([
                'key' => $request->key,
                'label' => $request->label
            ]);
            return redirect()->back()->with('success', 'Câp nhật thành công');
        }
    }

    public function update3(Request $request, System $system) //Cập nhật logo 
    {
        if ($request->has('image')) {
            $img = $request->file('image');
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/System'), $img_name);
            $model = $system->update([
                'key' => $request->key,
                'data' => $img_name,
                'label' => $request->label
            ]);
            return redirect()->back()->with('success', 'Câp nhật thành công');
        } else {
            $model = $system->update([
                'key' => $request->key,
                'label' => $request->label
            ]);
            return redirect()->back()->with('success', 'Câp nhật thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function destroy(System $system)
    {
        //
    }
}
