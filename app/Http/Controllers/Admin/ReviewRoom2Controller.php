<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReviewRoom;

class ReviewRoom2Controller extends Controller
{
    public function update($id)
    {
        $reviewRoom = ReviewRoom::find($id);
        $model = $reviewRoom->updateStatus();
        return redirect()->back()->with('success','Cập nhật thành công danh mục');
    }
}
