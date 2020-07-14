<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
    Route cho trang admin
*/
//Trang home trang web
Route::get('/Webindex','Web\webPageController@indexWeb')->name('indexWeb');
//login
Route::get('home-login','Web\webPageController@getLoginWeb')->name('getloginWeb');
Route::post('home-login','Web\webPageController@postLoginWeb')->name('postLoginWeb');
// Register
Route::get('home-register','Web\webPageController@getRegisterWeb')->name('getRegisterWeb');
Route::post('home-register','Web\webPageController@postRegisterWeb')->name('postRegisterWeb');
//Logout
Route::get('home-logout','Web\webPageController@WebLogout')->name('getLogoutWeb');




// Trang about
Route::get('about','Web\webPageController@getAbout')->name('about');
//Trang Bill
Route::get('cart-room','Web\webPageController@getCartRoom')->name('CartRoom');

//Trang blog-grid
Route::get('blog-grid','Web\webPageController@getBlogGrid')->name('blogGrid');
//Trang blof-stand
Route::get('blog-stand','Web\webPageController@getBlogStand')->name('blogStand');
//Trang checkout
Route::group(['prefix'=>'cartRoom','namespace'=>'Web','middleware' => 'webLogin'],function(){
    Route::get('checkout','CheckOutController@getCheckOut')->name('checkout');
    Route::post('checkout','CheckOutController@postCheckOut')->name('post.checkout');
});
//Trang contact
Route::get('contact','Web\webPageController@getContact')->name('contact');
Route::post('contactPost','Web\webPageController@postContact')->name('postContact');
//Trang gallery
Route::get('gallery','Web\webPageController@getGallery')->name('gallery');

//Trang RoomGrid
Route::get('room-grid','Web\webPageController@getRoomGrid')->name('roomGrid');
// Trang Restaurant
Route::get('restaurant','Web\webPageController@getRestaurant')->name('restaurant');
// Trang Reservation
Route::get('reservation','Web\webPageController@getReservation')->name('reservation');
//Trang service
Route::get('service','Web\webPageController@getService')->name('service');
Route::get('service-view','Web\webPageController@getViewService')->name('viewService');
//Trang sửa thông tin tài khoản khách hàng
Route::get('Customer-infor/{id}','Web\webPageController@getCustomerInfor')->name('CustomerInfor');
Route::post('Customer_infor/{id}','Web\webPageController@postCustomerInfor')->name('PostCustomerInfor');





//Nhóm route liên quan đến danh sách phòng
//Trang danh sách phòng chung nhau
Route::get('room-list/{id}','Web\webPageController@getRoomListMaster')->name('RoomListMaster');
//trang RoomList
Route::get('room-list/{orderby?}/{ord?}','Web\webPageController@getRoomList')->name('roomList');







//trang list service chung
Route::get('serviceMaster/{id}/{room?}','Web\webPageController@getServiceMaster')->name('serviceMaster');
//trang list service chung chỉ để xem không thêm
Route::get('serviceMasterView/{id}','Web\webPageController@getServiceMasterNotIdRoom')->name('serviceMasterNotIdRoom');



//Trang blogDetail







Route::group(['prefix' => 'web-page','namespace' => 'Web'],function(){
    Route::get('view','CartRoomController@view')->name('cart.view');

    Route::get('add/{id}','CartRoomController@add')->name('cart.add');
    Route::get('remove/{id}','CartRoomController@remove')->name('cart.remove');
    Route::get('update/{id}','CartRoomController@update')->name('cart.update');
    Route::get('clear','CartRoomController@clear')->name('cart.clear');
    Route::get('addService/{id}/{room?}','CartRoomController@addService')->name('addService');
    Route::get('removeService/{id}','CartRoomController@removeService')->name('cart.removeService');
    Route::get('updateService/{id}','CartRoomController@update')->name('cart.updateService');
});


// Trang RoomDetail những thứ liên quan đến room-detail
Route::group(['prefix'=>'review-room','namespace'=>'Web'],function(){
    Route::get('room-detail/{id}','webPageController@getRoomDetail')->name('roomDetail');
    Route::post('room-detail/{id}','webPageController@postReviewRoom')->name('postReviewRoom');
    Route::post('room-detil/{id}/{parent}','webPageController@postReviewRoomChild')->name('postReviewRoomChild');
});

//Trang BlogDetail những thứ liên quan đến blog_detail
Route::group(['prefix'=>'Blog','namespace'=>'Web'],function(){
    Route::get('blog-detail/{id}','webPageController@getBlogDetail')->name('blogDetail');
    Route::post('blog-detai/{id}','webPageController@postCommentBlog')->name('postCommentBlog');
    Route::post('blog-detai/{id}/{parent}','webPageController@postCommentBlogChild')->name('postCommentBlogChild');
});


Route::get('getDate','Web\webPageController@get_total_price')->name('getDate');


//Route search room
Route::post('search/{min?}/{max?}','Web\webPageController@getFilterRoom')->name('getFilterRoom');
// Route::post('search','Web\webPageController@ajax_list')->name('ajax_list');

// Route rating star
Route::post('postStar','Web\webPageController@voteStar')->name('postStar');

//đw

















/**
 * 
 * Route trang admin
 * 
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth' ,'as'=>'admin.'],function(){
    Route::get('/','AdminController@index')->name('index');//admin.index
    Route::get('/file','AdminController@file')->name('file');//admin.file

    Route::resources([
        'user' => 'UserController',
        'categoryRoom' => 'CategoryRoomController',
        'categoryService' => 'CategoryServiceController',
        'categoryBlog' => 'CategoryBlogController',
        'room' => 'RoomController',
        'service' => 'ServiceController',
        'blog' => 'BlogController',
        'brand'=>'BrandController',
        'banner'=>'BannerController',
        'role'=>'RoleController',
        'order'=>'OrderController'
    ]);
    
    Route::get('admin/room','RoomController@getIndexAdmin')->name('room.indexAdmin');

    Route::get('admin/editPartner/{id}','AdminController@getEditAdminPartner')->name('getEditAdminPartner');
    Route::post('admin/editPartner/{id}','AdminController@postEditAdminPartner')->name('postEditAdminPartner');

    Route::get('searchBlog','BlogController@search')->name('searchBlog');
    Route::get('searchCateBlog','CategoryBlogController@search')->name('searchCateBlog');
    Route::get('searchRoom','RoomController@search')->name('searchRoom');
    Route::get('searchCateRoom','CategoryRoomController@search')->name('searchCateRoom');
    Route::get('searchUser','UserController@search')->name('searchUser');
    Route::get('searchCateService','CategoryServiceController@search')->name('searchCateService');
    Route::get('searchService','ServiceController@search')->name('searchService');
    Route::get('searchBrand','BrandController@search')->name('searchBrand');
    Route::get('searchBanner','BannerController@search')->name('searchBanner');
});
//admin error
Route::get('admin/error','Admin\AdminController@error')->name('error');
// Login trang admin
Route::get('admin/login','Admin\LoginController@getLogin')->name('Login');
Route::post('admin/login','Admin\LoginController@postLogin')->name('postLogin');
Route::get('admin/logout','Admin\LoginController@Logout')->name('logout');