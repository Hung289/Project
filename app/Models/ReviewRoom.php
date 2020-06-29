<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class ReviewRoom extends Model
{
    protected $fillable = [
        'user_id', 'room_id', 'parent', 'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'room_id', 'id');
    }

    public function postRR($id)
    {
        $room = Room::find($id);
        // dd($room);
        $model = ReviewRoom::create([
            'user_id' => Auth::user()->id,
            'room_id' => $room->id,
            'content' => request()->content
        ]);
        // dd($model);
        return $model;
    }

    public function postRRChild($id, $parent)
    {
        // dd(Auth::user()->id);
        $room = Room::find($id);
        $model = $this->create([
            'user_id' => Auth::user()->id,
            'room_id' => $room->id,
            'content' => request()->contentChild,
            'parent' => $parent
        ]);
        return $model;
    }
}
