<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Banner;
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
use App\Http\Requests\Date\DateRequest;
use Illuminate\Support\Facades\DB;

class webPageController extends Controller
{
    function __construct()
    {

        $CategoryRoom = CategoryRoom::all();
        view()->share('CategoryRoom', $CategoryRoom);

        $CategoryService = CategoryService::all();
        view()->share('CategoryService', $CategoryService);

        $CategoryBlog = CategoryBlog::all();
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
        view()->share('brands', $brands);
    }

    public function indexWeb()
    {
        $Services = CategoryService::paginate(3);
        $rooms = Room::paginate(6);
        $banners = Banner::all();
        $commentBlogs = CommentBlog::all();
        $blogNew = Blog::where('new', 0)->first();
        $blogs = Blog::limit(3)->get();
        return view('page.home', ['Services' => $Services, 'rooms' => $rooms, 'banners' => $banners, 'commentBlogs' => $commentBlogs, 'blogNew' => $blogNew, 'blogs' => $blogs]);
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
        return view('page.gallery', ['rooms' => $rooms, 'RoomImages' => $RoomImages]);
    }

    public function getRoomList(Request $request)
    {
        $rooms = Room::orderByParam()->paginate();
        
        return view('page.room_list', ['rooms' => $rooms]);
    }

    public function getServiceMaster($id,$room)
    {
        // dd($room);
        $cateService = CategoryService::where('id', $id)->get();
        $Services = Service::where('category_service_id', $id)->get();
        $new_service = Service::where('category_service_id', $id)->where('new', 0)->paginate(4);
        return view('page.service_detail', ['Services' => $Services, 'new_service' => $new_service, 'cateService' => $cateService,'room'=>$room]);
    }


    public function getRestaurant()
    {
        $Services = Service::all();
        $new_service = Service::where('new', 0)->paginate(4);
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
        // $reviewRoom = ReviewRoom::where('parent', 0)->where('room_id',$id)->orderBy('id', 'DESC')->paginate(2);
        // $reviewRoomChild = ReviewRoom::orderBy('id', 'DESC')->get();
        $room = Room::where('id', $id)->first();
        $rImage = RoomImage::where('room_id', $id)->first();
        $roomStars = $roomStar->calAvg($id);
        return view('page.room_detail', [
            'room' => $room, 'rImage' => $rImage,
            'avgStarAcao' => $roomStars['bien1'], 'avgStarDes' => $roomStars['bien2'], 'avgStarTran' => $roomStars['bien3'], 'avgStarOver' => $roomStars['bien4'],
            'tb' => $roomStars['bien5']
        ]);
    }

    public function getBlogDetail(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        $bImage = BlogImage::where('blog_id', $id)->first();
        $blog2 = BlogImage::where('blog_id', $id)->paginate(2);
        $cateBlog = CategoryBlog::all();
        $commentBlog = CommentBlog::where('parent', 0)->orderBy('id', 'DESC')->paginate(2);
        $commentBlogChild = CommentBlog::all();
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

    public function getFilterRoom(DateRequest $request, OrderDetail $orderDetail, Room $room)
    {
        $params = array();

        if (!empty($request->searchFromDate) && !empty($request->searchToDate)) {
            // cái params date này ko cần cho vào room đâu, gọi vào thằng order detail là được
            // nên là ko cần cho vào params
            $from_date = $request->searchFromDate;
            $to_date = $request->searchToDate;
            $listRoomUsed  = $orderDetail->checkRoomForDate($from_date, $to_date);
            $params['listRoomUsed'] = $listRoomUsed;
        }

        //Tìm theo vị trí
        if (!empty($request->location)) {
            $location = $request->location;
            $params['search'] = $location ? $location : "";
        }

        //Tìm theo giá
        if (!empty($request->price)) {
            $prices = $request->price;
            $params['prices'] = $prices ? $prices : "";    
        }

        //Tìm theo số giường
        if(!empty($request->bed)){
            $beds = $request->bed;
            // dd($beds);
            $params['beds'] = $beds ? $beds : "";
        }

        //Tìm theo sô bồn tắm
        if(!empty($request->bath)){
            $baths = $request->bath;
            $params['baths'] = $baths ? $baths : "";
        }

        // dd($params);
        $rooms = $room->filteRoom($params);

        return view('page.room_list',['rooms'=>$rooms]);
    }

    
    public function ajax_list(DateRequest $request, OrderDetail $orderDetail, Room $room)
    {
        $params = array();

        if (!empty($request->searchFromDate) && !empty($request->searchToDate)) {
            // cái params date này ko cần cho vào room đâu, gọi vào thằng order detail là được
            // nên là ko cần cho vào params
            $from_date = $request->searchFromDate;
            $to_date = $request->searchToDate;
            $listRoomUsed  = $orderDetail->checkRoomForDate($from_date, $to_date);
            $params['listRoomUsed'] = $listRoomUsed;
        }

        //Tìm theo vị trí
        if (!empty($request->location)) {
            $location = $request->location;
            $params['search'] = $location ? $location : "";
        }

        //Tìm theo giá
        if (!empty($request->price)) {
            $prices = $request->price;
            $params['prices'] = $prices ? $prices : "";    
        }

        //Tìm theo số giường
        if(!empty($request->bed)){
            $beds = $request->bed;
            // dd($beds);
            $params['beds'] = $beds ? $beds : "";
        }

        //Tìm theo sô bồn tắm
        if(!empty($request->bath)){
            $baths = $request->bath;
            $params['baths'] = $baths ? $baths : "";
        }

        $rooms = $room->filteRoom($params);

        return response()->json($rooms);
    }

    public function postReviewRoom(Request $request, ReviewRoom $reviewRoom, $id)
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
        if (Auth::check()) {
            $model = $roomStar->postStar();
            if ($model) {
                return redirect()->back()->with('success', 'Đăng thành công đánh giá');
            }
        } else {
            session::flash('error_login', 'Bạn Cần Phải Đăng Nhập Để Thực Hiện Chức Năng Này');
            return back();
        }
    }
}
