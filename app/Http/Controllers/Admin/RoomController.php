<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\CategoryRoom;
use App\Models\RoomImage;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Brand;
use Session;
use App\Http\Requests\Room\RoomAddRequest;
use App\Http\Requests\Room\RoomEditRequest;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{

    /**
     * Hiển thị danh sách phòng theo admin đối tác
     * 
     */
    public function getIndexAdmin()
    {
        $user = Auth::user()->id;
        // dd($user);
        $roomImage = RoomImage::all();
        // $roomTheoId = Room::where('user_room_id',$user)->get();
        $rooms = Room::where('user_room_id',$user)->orderBy('id','DESC')->get();
        return view('admin.Room.listAdmin',['rooms'=>$rooms,'roomImage'=>$roomImage]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        // dd($user);
        $roomImage = RoomImage::all();
        $roomTheoId = Room::where('user_room_id',$user)->get();
        // dd($roomTheoId);
        $rooms = Room::orderBy('id','DESC')->get();
        return view('admin.Room.list',['rooms'=>$rooms,'roomImage'=>$roomImage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $CateRoom = CategoryRoom::all();
        return view('admin.Room.add',compact('CateRoom','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomAddRequest $request,Room $Room)
    {
        
        $model = $Room->add();
        // dd($model);
        if($model){
            return redirect()->route('admin.room.create')->with('success','Thêm mới thành công');
        }else{
            return redirect()->route('admin.room.create')->with('success','Thêm mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        // dd($room);
        $roomImage = RoomImage::all();
        return view('admin.Room.view',['room'=>$room,'roomImage'=>$roomImage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        // dd($room);
        $BrandRoom = Brand::all();
        $CateRoom = CategoryRoom::all();
        $Users = User::all();
        return view('admin.Room.edit',['room'=>$room,'CateRoom'=>$CateRoom,'Users'=>$Users,'BrandRoom'=>$BrandRoom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(RoomEditRequest $request, Room $room)
    {
        // dd($room);
        $model = $room->updateEdit();
        if($model){
            return redirect()->route('admin.room.index')->with('success','Cập nhật thành công');
        }else{
            return redirect()->back()->with('errors','Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        if($room->delete()){
            return response(['success'=>true]);
        }else{
            return response(['success'=>false]);
        }
    }

    public function search(Request $request){
        $rooms = Room::where('name','like','%'.$request->key.'%')
                    ->paginate(5);
                    $roomImage = RoomImage::all();
        return view('admin.Room.list',['rooms'=>$rooms,'roomImage'=>$roomImage]);
    }

    public function updateStatusRoom($id)
    {
        $room = Room::find($id);
        $model = $room->updateStatusRooms();
        return redirect()->back()->with('success','Cập nhật thành công danh mục');
    }
}
