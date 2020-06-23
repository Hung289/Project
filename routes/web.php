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
    Route cho trang người dùng
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
Route::get('bill','Web\webPageController@getBill')->name('bill');

//Trang blog-grid
Route::get('blog-grid','Web\webPageController@getBlogGrid')->name('blogGrid');
//Trang blof-stand
Route::get('blog-stand','Web\webPageController@getBlogStand')->name('blogStand');
//Trang checkout
Route::get('checkout','Web\webPageController@getCheckout')->name('checkout');
//Trang contact
Route::get('contact','Web\webPageController@getContact')->name('contact');
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





//Nhóm route liên quan đến danh sách phòng
//Trang danh sách phòng chung nhau
Route::get('room-list/{id}','Web\webPageController@getRoomListMaster')->name('RoomListMaster');
//trang RoomList
Route::get('room-list/{orderby?}/{ord?}','Web\webPageController@getRoomList')->name('roomList');







//trang list service chung
Route::get('serviceMaster/{id}','Web\webPageController@getServiceMaster')->name('serviceMaster');



//Trang blogDetail
Route::get('blog-detail/{id}','Web\webPageController@getBlogDetail')->name('blogDetail');



// Trang RoomDetail
Route::get('room-detail/{id}','Web\webPageController@getRoomDetail')->name('roomDetail');



Route::group(['prefix' => 'admin', 'namespace' => 'Admin' ,'middleware' => 'adminLogin'],function(){
    Route::get('/','AdminController@index')->name('admin.index');

    Route::resources([
        'user' => 'UserController',
        'categoryRoom' => 'CategoryRoomController',
        'categoryService' => 'CategoryServiceController',
        'categoryBlog' => 'CategoryBlogController',
        'room' => 'RoomController',
        'service' => 'ServiceController',
        'blog' => 'BlogController'
    ]);

    Route::get('searchBlog','BlogController@search')->name('searchBlog');
    Route::get('searchCateBlog','CategoryBlogController@search')->name('searchCateBlog');
    Route::get('searchRoom','RoomController@search')->name('searchRoom');
    Route::get('searchCateRoom','CategoryRoomController@search')->name('searchCateRoom');
    Route::get('searchUser','UserController@search')->name('searchUser');
    Route::get('searchCateService','CategoryServiceController@search')->name('searchCateService');
    Route::get('searchService','ServiceController@search')->name('searchService');
});

// Login trang admin
Route::get('admin/login','Admin\LoginController@getLogin')->name('Login');
Route::post('admin/login','Admin\LoginController@postLogin')->name('postLogin');
Route::get('admin/logout','Admin\LoginController@Logout')->name('logout');