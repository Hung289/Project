<?php

namespace App\Models;

use App\Models\Role;
use App\Models\UserRole;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'level', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function room()
    {
        return $this->hasMany('App\Models\Room', 'user_room_id', 'id');
    }

    public function blog()
    {
        return $this->hasMany('App\Models\Blog', 'blog_id', 'id');
    }

    public function order()
    {
        return $this->hasMany('App\Models\Order', 'user_id', 'id');
    }

    public function reviewRoom()
    {
        return $this->hasMany('App\Models\ReviewRoom', 'room_id', 'id');
    }

    public function commentBlog()
    {
        return $this->hasMany('App\Models\CommentBlog', 'user_id', 'id');
    }

    public function roomStar()
    {
        return $this->hasMany('App\Models\RoomStar', 'user_id', 'id');
    }

    public function add()
    {
        $img = request()->avatar;
        $image_name = $img->getClientOriginalName();
        $img->move(base_path('public/uploads/images/user'), $image_name);
        $model = $this->create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => bcrypt(request()->password),
            'phone' => request()->phone,
            'level' => request()->level,
            'avatar' => $image_name
        ]);

        return $model;
    }

    public function updateEdit()
    {
        if (request()->has('avatar')) {
            $img = request()->avatar;
            $image_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/user'), $image_name);
            $model = $this->update([
                'name' => request()->name,
                'email' => request()->email,
                'password' => bcrypt(request()->password),
                'phone' => request()->phone,
                'level' => request()->level,
                'avatar' => $image_name
            ]);
            return $model;
        } else {
            $model = $this->update([
                'name' => request()->name,
                'email' => request()->email,
                'password' => bcrypt(request()->password),
                'phone' => request()->phone,
                'level' => request()->level,
            ]);
            return $model;
        }
    }

    public function registerWeb()
    {
        $model = $this->create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => bcrypt(request()->password),
            'level' => 2,
        ]);
        return $model;
    }

    public function editCustomerInfor()
    {
        // if (request()->has('avatar') && request()->has('NewPass')) {
        //     $img = request()->avatar;
        //     $image_name = $img->getClientOriginalName();
        //     $img->move(base_path('public/uploads/images/user'), $image_name);
        //     $model = $this->update([
        //         'name' => request()->name,
        //         'phone' => request()->phone,
        //         'avatar' => $image_name,
        //         'password' => bcrypt(request()->NewPass)
        //     ]);
        //     return $model;
        // }
        // else if (request()->has('avatar')) {
        //     $img = request()->avatar;
        //     $image_name = $img->getClientOriginalName();
        //     $img->move(base_path('public/uploads/images/user'), $image_name);
        //     // dd(request()->OldPass);
        //     $model = $this->update([
        //         'name' => request()->name,
        //         'phone' => request()->phone,
        //         'avatar' => $image_name,
        //     ]);
        //     return $model;
        // }else if (request()->has('NewPass')){
        //     // dd(request()->OldPass);
        //     $model = $this->update([
        //         'name' => request()->name,
        //         'phone' => request()->phone,
        //         'password' => bcrypt(request()->NewPass)
        //     ]);
        //     return $model;
        // }else if(request()->has('avatar') && request()->OldPass == '' && request()->NewPass == '') {
        //     // dd(request()->OldPass);
        //     $model = $this->update([
        //         'name' => request()->name,
        //         'phone' => request()->phone,

        //     ]);
        //     return $model;
        // }

        if (request()->NewPass !== null) {
            if (request()->has('avatar')) {
                $img = request()->avatar;
                $image_name = $img->getClientOriginalName();
                $img->move(base_path('public/uploads/images/user'), $image_name);
                $model = $this->update([
                    'name' => request()->name,
                    'phone' => request()->phone,
                    'avatar' => $image_name,
                    'password' => bcrypt(request()->NewPass)
                ]);
                return $model;
            } else {
                $model = $this->update([
                    'name' => request()->name,
                    'phone' => request()->phone,
                    'password' => bcrypt(request()->NewPass)
                ]);
                return $model;
            }
        }
        if (request()->has('avatar') && request()->NewPass === null) {
            $img = request()->avatar;
            $image_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/user'), $image_name);
            $model = $this->update([
                'name' => request()->name,
                'phone' => request()->phone,
                'avatar' => $image_name,
            ]);
            return $model;
        }
    }

    public function hasPermission($route)
    {
        $routes = $this->routes();
        return in_array($route, $routes) ? true : false;
    }

    //Các route đã được gán cho người dùng này
    public function routes()
    {
        $roles = $this->getRoles();
        dd($roles->count());
        foreach ($this->getRoles as $role) {
            var_dump($role->name);
        }
        return ['admin.room.create', 'admin.user.edit', 'admin.room.index', 'admin.blog.index', 'admin.index'];
    }

    public function getRoles()
    {
        return $this->belongsToMany('App\Models\Role', 'user_roles', 'role_id', 'user_id');
        // return $this->hasMany('App\Models\UserRole','role_id','id');
    }
}
