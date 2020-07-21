<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReviewRoom;
use Illuminate\Http\Request;

class ReviewRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviewRoom = ReviewRoom::orderBy('id','desc')->get();
        return view('admin.ReviewRoom.list',compact('reviewRoom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReviewRoom  $reviewRoom
     * @return \Illuminate\Http\Response
     */
    public function show(ReviewRoom $reviewRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReviewRoom  $reviewRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(ReviewRoom $reviewRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReviewRoom  $reviewRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReviewRoom $reviewRoom)
    {
        // dd($reviewRoom);
        $model = $reviewRoom->updateStatus();
        return redirect()->route('admin.reviewRoom.index')->with('success','Cập nhật thành công danh mục');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReviewRoom  $reviewRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReviewRoom $reviewRoom)
    {
        //
    }
}
