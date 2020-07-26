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
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\ReviewRoom;
use App\Models\CommentBlog;
use App\Models\RoomStar;
use App\Models\Brand;
use App\Models\OrderDetailService;
use Session;
use App\Http\Requests\Date\DateRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\User\CustomerRequest;
use App\Http\Requests\LoginWeb\LoginWebAddRequest;
use App\Http\Requests\RegisterWeb\RegisterWebAddRequest;
use Illuminate\Support\Facades\Mail;

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
        $room_all = Room::all();   
        return view('page.home', ['room_all'=>$room_all,'Services' => $Services, 'rooms' => $rooms, 'banners' => $banners, 'commentBlogs' => $commentBlogs, 'blogNew' => $blogNew, 'blogs' => $blogs]);
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
        $blogs = Blog::paginate(9);
        return view('page.blog_grid',compact('blogs'));
    }

    public function getBlogStand($id)
    {
        $blogs = Blog::where('category_blog_id',$id)->get();
        // dd($blogs);
        $blogNew = Blog::where('new',0)->limit(3)->get();
        
        $listCateRoom = CategoryRoom::all();
        return view('page.blog_stand',compact('blogs','blogNew','listCateRoom'));
    }

    public function getSearchBlog(Request $request,Blog $blog)
    {
        $blogs = $blog->searchBlog();
        return view('page.blog_grid', ['blogs' => $blogs]);
    }

    public function getContact()
    {
        return view('page.contact');
    }

    public function postContact(Request $request)
    {
        Mail::send('email.contact', [
            'email' => $request->email,
            'name' => $request->name,
            'content' => $request->content,
            'address' => $request->address
        ], function ($mail) use ($request) {
            $mail->to('nthung2896@gmail.com');
            $mail->from($request->email);
            $mail->subject('Phản Hồi Khách Hàng');
        });
        return redirect()->route('contact')->with('success', 'Bạn đã gửi phản hồi thành công');
    }

    public function getGallery()
    {
        $rooms = Room::all();
        $RoomImages = RoomImage::all();
        return view('page.gallery', ['rooms' => $rooms, 'RoomImages' => $RoomImages]);
    }

    public function getRoomList(Request $request)
    {
        $roombt = Room::all();
        $rooms = Room::where('status',0)->orderByParam()->paginate(4);
        // dd($rooms);
        return view('page.room_list', ['rooms' => $rooms]);
    }



    public function getService($room_id,$from_date,$to_date)
    {
        $room = Room::find($room_id);
        $CategoryService = CategoryService::all();
        return view('page.service', ['CategoryService' => $CategoryService,'room'=>$room,'from_date'=>$from_date,'to_date'=>$to_date]);
    }
    public function getViewService()
    {
        $CategoryService = CategoryService::all();
        return view('page.view_sevice', ['CategoryService' => $CategoryService]);
    }
    public function getServiceMaster($id,$room,$from_date,$to_date)
    {
        $rooms = Room::find($room);
        $cateService = CategoryService::where('id', $id)->get();
        $Services = Service::where('category_service_id', $id)->get();
        $new_service = Service::where('category_service_id', $id)->where('new', 0)->paginate(4);
        return view('page.service_detail', ['from_date'=>$from_date,'to_date'=>$to_date,'Services' => $Services, 'new_service' => $new_service, 'cateService' => $cateService, 'rooms' => $rooms]);
    }
    public function getServiceMasterNotIdRoom($id)
    {
        $cateService = CategoryService::where('id', $id)->get();
        $Services = Service::where('category_service_id', $id)->get();
        $new_service = Service::where('category_service_id', $id)->where('new', 0)->paginate(4);
        return view('page.view_service_detail', ['Services' => $Services, 'new_service' => $new_service, 'cateService' => $cateService]);
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

    public function getRoomDetail(Request $request, $id, RoomStar $roomStar, Room $room, CategoryRoom $categoryRoom, OrderDetail $orderDetail)
    {
        $listDateFormTo = OrderDetail::where('room_id', $id)->get();
        $room = Room::where('id', $id)->first();
        $rImage = RoomImage::where('room_id', $id)->first();
        $roomStars = $roomStar->calAvg($id);
        $lastRoom = Room::orderBy('created_at', 'DESC')->paginate(3);
        $listCateRoom = CategoryRoom::all();
        return view('page.room_detail', [
            'room' => $room, 'rImage' => $rImage,
            'avgStarAcao' => $roomStars['bien1'], 'avgStarDes' => $roomStars['bien2'], 'avgStarTran' => $roomStars['bien3'], 'avgStarOver' => $roomStars['bien4'],
            'tb' => $roomStars['bien5'], 'lastRoom' => $lastRoom, 'listCateRoom' => $listCateRoom,
            'listDateFormTo' => $listDateFormTo
        ]);
    }

    public function getBlogDetail(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        $bImage = BlogImage::where('blog_id', $id)->first();
        $blog2 = BlogImage::where('blog_id', $id)->paginate(2);
        $cateBlog = CategoryBlog::all();
        $blogNew = Blog::where('new',0)->limit(3)->get();
        $listCateRoom = CategoryRoom::all();
        $commentBlog = CommentBlog::where('parent', 0)->orderBy('id', 'DESC')->paginate(2);
        $commentBlogChild = CommentBlog::all();
        return view('page.blog_detail', ['listCateRoom'=>$listCateRoom,'blogNew'=>$blogNew,'blog' => $blog, 'bImage' => $bImage, 'blog2' => $blog2, 'cateBlog' => $cateBlog, 'commentBlog' => $commentBlog, 'commentBlogChild' => $commentBlogChild]);
    }

    public function getRegisterWeb()
    {
        return view('register');
    }

    public function postRegisterWeb(RegisterWebAddRequest $request, User $user)
    {
        $users = $user->registerWeb();
        return redirect()->back()->with('success', 'Chúc mừng bạn đã đăng ký thành công');
    }

    public function getLoginWeb()
    {
        return view('login');
    }

    public function postLoginWeb(LoginWebAddRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
            return redirect()->route('indexWeb')->with('success','Chúc mừng bạn đã đăng nhập thành công');
        } else {
            return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không đúng');;
        }
    }

    public function WebLogout()
    {
        Auth::logout();
        return redirect()->route('indexWeb')->with('success','Đăng xuất thành công');
    }

    public function getRoomListMaster(Request $request,$id)
    {
        $rooms = Room::where('category_room_id', $id)->paginate(4);
        return view('page.room_list_master', ['rooms' => $rooms]);
    }

    public function getFilterRoom(DateRequest $request, OrderDetail $orderDetail, Room $room)
    {
        $params = array();

        if (!empty($request->searchFromDate) && !empty($request->searchToDate)) {
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
        if (!empty($request->bed)) {
            $beds = $request->bed;
            // dd($beds);
            $params['beds'] = $beds ? $beds : "";
        }

        //Tìm theo sô bồn tắm
        if (!empty($request->bath)) {
            $baths = $request->bath;
            $params['baths'] = $baths ? $baths : "";
        }

        //Tìm kiếm theo số người lớn
        if (!empty($request->guest)) {
            $guest = $request->guest;
            $params['guests'] = $guest ? $guest : "";
        }

        //Tìm kiếm theo số trẻ em
        if (!empty($request->adult)) {
            $adult = $request->adult;
            $params['adults'] = $adult ? $adult : "";
        }

        // dd($params);
        $rooms = $room->filteRoom($params);

        return view('page.room_list', ['rooms' => $rooms]);
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
        if (!empty($request->bed)) {
            $beds = $request->bed;
            // dd($beds);
            $params['beds'] = $beds ? $beds : "";
        }

        //Tìm theo sô bồn tắm
        if (!empty($request->bath)) {
            $baths = $request->bath;
            $params['baths'] = $baths ? $baths : "";
        }

        $rooms = $room->filteRoom($params);

        return response()->json($rooms);
    }

    public function postReviewRoom(Request $request, ReviewRoom $reviewRoom, $id)
    {
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
            return redirect()->back()->with('error', 'Bạn phải đăng nhập để bình luận về bài viết');
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

    public function getCustomerInfor(Request $request, $id)
    {
        $users = User::find($id);
        return view('page.CustomerInfor', ['users' => $users]);
    }

    public function PostCustomerInfor(CustomerRequest $request, User $user, $id)
    {
        $users = User::find($id);
        $oldPass = $request->OldPass;
        $cc = $users->password;
        $model = $users->editCustomerInfor();

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function getForgot(Request $request)
    {
        return view('page.forgot_password');
    }

    public function historyBooking()
    {
        $orders = Order::all();
        $roomImages = RoomImage::all();
        $orderDetils = OrderDetail::all();
        $orderDetilService = OrderDetailService::all();
        $services = Service::all();
        return view('page.historyBooking',compact('services','orders','roomImages','orderDetils','orderDetilService'));
    }
}
