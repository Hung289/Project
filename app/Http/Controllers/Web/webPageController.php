<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryService;
use App\Models\User;
use App\Models\Room;
use App\Models\Blog;
use App\Models\CategoryRoom;
use App\Models\CategoryBlog;
use App\Models\RoomImage;
use App\Models\BlogImage;
use App\Models\Service;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\ReviewRoom;
use App\Models\CommentBlog;
use App\Models\RoomStar;
use App\Models\Brand;
use Session;

class webPageController extends Controller
{
    function __construct()
    {
        // $Category=Category::where('parent',null)->get();//lấy ra tất cả với parent=0
        // view()->share('Category',$Category);
        $CategoryRoom = CategoryRoom::all();
        view()->share('CategoryRoom', $CategoryRoom);

        $CategoryService = CategoryService::all();
        view()->share('CategoryService', $CategoryService);

        $CategoryBlog = CategoryBlog::all();
        // dd($CategoryBlog);
        view()->share('CategoryBlog', $CategoryBlog);

        // $rooms = Room::all();
        // view()->share('rooms',$rooms);

        $roomImages = RoomImage::all();
        view()->share('roomImages', $roomImages);

        $blogs = Blog::all();
        view()->share('blogs', $blogs);

        $blogImages = BlogImage::all();
        view()->share('blogImages', $blogImages);

        $brands = Brand::all();
        view()->share('brands',$brands);
    }

    public function indexWeb()
    {
        $Services = CategoryService::paginate(3);
        $rooms = Room::paginate(6);

        return view('page.home', ['Services' => $Services, 'rooms' => $rooms]);
    }

    public function getAbout()
    {
        return view('page.about');
    }

    public function getCartRoom()
    {
        return view('page.cart_room');
    }

    public function getBlogGrid()
    {
        return view('page.blog_grid');
    }

    public function getBlogStand()
    {
        return view('page.blog_stand');
    }

    public function getCheckout()
    {
        return view('page.checkout');
    }

    public function getContact()
    {
        return view('page.contact');
    }

    public function getGallery()
    {
        $rooms = Room::all();
        $RoomImages = RoomImage::all();
        return view('page.gallery',['rooms'=>$rooms,'RoomImages'=>$RoomImages]);
    }


    // public function getRoomList(){
    //     $rooms = Room::all();
    //     return view('page.room_list',['rooms'=>$rooms]);
    // }
    public function getRoomList(Request $request)
    {
        $rooms = Room::orderByParam()->paginate(6);
        // dd($rooms);
        // $from = $request->searchFromDate;
        // $to = $request->searchToDate;
        // $cc  = OrderDetail::whereDate('from_date','>=', $from)->whereDate('to_date', '<=',$to)->get();

        $roomSearchLocation = Room::where('location', 'like', '%' . $request->boxSearchLocation . '%')
            ->paginate(6);

        return view('page.room_list', ['rooms' => $rooms, 'roomSearchLocation' => $roomSearchLocation]);
    }


    public function getServiceMaster($id)
    {
        $cateService = CategoryService::where('id', $id)->get();
        // dd($cateService);
        $Services = Service::where('category_service_id', $id)->get();
        // dd($Services);
        $new_service = Service::where('category_service_id', $id)->where('new', 0)->paginate(4);
        return view('page.service_detail', ['Services' => $Services, 'new_service' => $new_service, 'cateService' => $cateService]);
    }


    public function getRestaurant()
    {
        $Services = Service::all();
        $new_service = Service::where('new', 0)->paginate(4);
        // dd($new_service);
        return view('page.restaurant', ['Services' => $Services, 'new_service' => $new_service]);
    }

    public function getRoomGrid()
    {
        return view('page.room_grid');
    }

    public function getReservation()
    {
        return view('page.reservation');
    }

    public function getRoomDetail(Request $request, $id, RoomStar $roomStar)
    {

        $this->validate($request, [], []);
        $reviewRoom = ReviewRoom::where('parent', 0)->orderBy('id', 'DESC')->paginate(2);
        $reviewRoomChild = ReviewRoom::all();
        // dd($reviewRoom);
        $room = Room::where('id', $id)->first();
        $rImage = RoomImage::where('room_id', $id)->first();
       
        $roomStars = $roomStar->calAvg($id);
        return view('page.room_detail', [
            'room' => $room, 'rImage' => $rImage,
            'reviewRoom' => $reviewRoom, 'reviewRoomChild' => $reviewRoomChild,
            'avgStarAcao' => $roomStars['bien1'], 'avgStarDes' => $roomStars['bien2'], 'avgStarTran' => $roomStars['bien3'], 'avgStarOver' => $roomStars['bien4'],
            'tb' => $roomStars['bien5']
        ]);
    }

    public function getBlogDetail(Request $request, $id)
    {
        // dd($id);
        $blog = Blog::where('id', $id)->first();
        // dd($blog);
        $bImage = BlogImage::where('blog_id', $id)->first();
        $blog2 = BlogImage::where('blog_id', $id)->paginate(2);
        $cateBlog = CategoryBlog::all();
        $commentBlog = CommentBlog::where('parent', 0)->orderBy('id', 'DESC')->paginate(2);
        $commentBlogChild = CommentBlog::all();
        // dd($blog2);
        // dd($bImageAfter1);
        return view('page.blog_detail', ['blog' => $blog, 'bImage' => $bImage, 'blog2' => $blog2, 'cateBlog' => $cateBlog, 'commentBlog' => $commentBlog, 'commentBlogChild' => $commentBlogChild]);
    }


    public function getService()
    {
        $CategoryService = CategoryService::all();
        return view('page.service', ['CategoryService' => $CategoryService]);
    }


    public function getRegisterWeb()
    {
        return view('register');
    }

    public function postRegisterWeb(Request $request, User $user)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:3|max:32'
        ], [
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password không nhỏ hơn 3 kí tự',
            'password.max' => 'Password không lớn hơn 32 ký tự'
        ]);
        $users = $user->registerWeb();
        return redirect()->back()->with('success', 'Chúc mừng bạn đã đăng ký thành công');
    }

    public function getLoginWeb()
    {
        return view('login');
    }

    public function postLoginWeb(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required | min:3 |max: 32'
        ], [
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password không nhỏ hơn 3 ký tự',
            'password.max' => 'Password không lớn hơn 32 ký tự'
        ]);
        if (Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
            return redirect()->route('indexWeb');
        } else {
            return redirect()->back();
        }
    }

    public function WebLogout()
    {
        Auth::logout();
        return redirect()->route('indexWeb');
    }

    public function getRoomListMaster($id)
    {
        $rooms = Room::where('category_room_id', $id)->get();
        // dd($rooms);
        return view('page.room_list_master', ['rooms' => $rooms]);
    }

    public function getFilterRoom(Request $request)
    {
        $from = $request->searchFromDate;
        $to = $request->searchToDate;
        $cc  = OrderDetail::whereDate('from_date', '>=', $from)->whereDate('to_date', '<=', $to)->get();
        dd($cc);
    }

    // public function postReviewRoom(Request $request, $id)
    // {       
    //     $room = Room::find($id);       
    //     if (Auth::check()) {
    //         $reviewRoom = ReviewRoom::create([
    //             'user_id'=>Auth::user()->id,
    //             'room_id'=>$room->id,
    //             'content'=>$request->content
    //         ]);
    //         return redirect()->back()->with('success','Đăng thành công bình luận');
    //     } else {
    //         session::flash('error_login', 'Bạn Cần Phải Đăng Nhập Để Thực Hiện Chức Năng Này');
    //         return back();
    //     }
    //     return back();
    // }

    public function postReviewRoom(Request $request,ReviewRoom $reviewRoom, $id)
    {
        $this->validate($request, [
            'content' => 'required',
        ], [
            'content.required' => 'Bạn chưa nhập content',
        ]);
        if (Auth::check()) {
            $reviewRooomTo = $reviewRoom->postRR($id);
            return redirect()->back()->with('success', 'Đăng thành công bình luận');
        } else {
            session::flash('error_login', 'Bạn Cần Phải Đăng Nhập Để Thực Hiện Chức Năng Này');
            return back();
        }
        return back();
    }


    public function postReviewRoomChild(ReviewRoom $reviewRoom, $id, $parent)
    {
        if (Auth::check()) {
            $reviewRoomChild = $reviewRoom->postRRChild($id, $parent);
            if ($reviewRoomChild) {
                return redirect()->back()->with('success', 'Đăng thành công bình luận');
            }
        } else {
            session::flash('error_login', 'Bạn Cần Phải Đăng Nhập Để Thực Hiện Chức Năng Này');
            return back();
        }
    }

    public function postCommentBlog(CommentBlog $commentBlog, $id)
    {
        // dd($commentBlog);
        if (Auth::check()) {
            $commentBlogTo = $commentBlog->postCB($id);
            return redirect()->back()->with('success', 'Đăng thành công bình luận');
        } else {
            session::flash('error_login', 'Bạn Cần Phải Đăng Nhập Để Thực Hiện Chức Năng Này');
            return back();
        }
        return back();
    }

    public function postCommentBlogChild(CommentBlog $commentBlog, $id, $parent)
    {
        // dd($parent);
        if (Auth::check()) {
            $commentBlogChild = $commentBlog->postCBC($id, $parent);
            if ($commentBlogChild) {
                return redirect()->back()->with('success', 'Đăng thành công');
            }
        } else {
            session::flash('error_login', 'Bạn Cần Phải Đăng Nhập Để Thực Hiện Chức Năng Này');
            return back();
        }
    }
    public function voteStar(Request $request, RoomStar $roomStar)
    {
        // dd($req);
        // dd($request->idRoom);
        if (Auth::check()) {
            $model = $roomStar->postStar();
            // dd($model);
            if ($model) {
                return redirect()->back()->with('success', 'Đăng thành công đánh giá');
            }
        } else {
            session::flash('error_login', 'Bạn Cần Phải Đăng Nhập Để Thực Hiện Chức Năng Này');
            return back();
        }
    }
}
