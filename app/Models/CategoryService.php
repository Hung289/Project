<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryService extends Model
{
    protected $fillable = [
        'name', 'slug', 'image', 'image_hover', 'description', 'ordering', 'status', 'banner_service', 'link_video_service'
    ];


    public function service()
    {
        return $this->hasMany('App\Models\Service', 'category_service_id', 'id');
    }

    public function add()
    {
        $img = request()->image;
        $img_name = $img->getClientOriginalName();
        $img->move(base_path('public/uploads/images/CategoryService'), $img_name);

        $img_hover = request()->imageHover;
        $img_name_hover = $img_hover->getClientOriginalName();
        $img_hover->move(base_path('public/uploads/images/CategoryService'), $img_name_hover);

        $img_banner_service = request()->bannerService;
        $img_name_banner_service = $img_banner_service->getClientOriginalName();
        $img_banner_service->move(base_path('public/uploads/images/CategoryService'), $img_name_banner_service);

        $model = $this->create([
            'name' => request()->name,
            'slug' => Str::slug(request()->name),
            'image' => $img_name,
            'image_hover' => $img_name_hover,
            'description' => request()->description,
            'status' => request()->status,
            'banner_service' => $img_name_banner_service,
            'link_video_service' => request()->linkVideoService
        ]);
        return $model;
    }


    public function updateEdit()
    {
        if (request()->has('image')) {
            $img = request()->image;
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/CategoryService'), $img_name);

            $model = $this->update([
                'name' => request()->name,
                'slug' => Str::slug(request()->name),
                'image' => $img_name,
                'description' => request()->description,
                'status' => request()->status,
                'link_video_service'=>request()->linkVideoService
            ]);
            return $model;
        } else if (request()->has('imageHover')) {
            $img_hover = request()->imageHover;
            $img_name_hover = $img_hover->getClientOriginalName();
            $img_hover->move(base_path('public/uploads/images/CategoryService'), $img_name_hover);

            $model = $this->update([
                'name' => request()->name,
                'slug' => Str::slug(request()->name),
                'image_hover' => $img_name_hover,
                'description' => request()->description,
                'status' => request()->status,
                'link_video_service'=>request()->linkVideoService
            ]);
            return $model;
        } else if (request()->has('bannerService')) {
            
            $img_banner_service = request()->bannerService;
            $img_name_banner_service = $img_banner_service->getClientOriginalName();
            $img_banner_service->move(base_path('public/uploads/images/CategoryService'), $img_name_banner_service);
            $model = $this->update([
                'name' => request()->name,
                'slug' => Str::slug(request()->name),
                'banner_service' => $img_name_banner_service,
                'description' => request()->description,
                'status' => request()->status,
                'link_video_service'=>request()->linkVideoService
            ]);
            return $model;
        } else if (request()->has('image') && request()->has('imageHover') && request()->has('bannerService')) {
            $img = request()->image;
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/CategoryService'), $img_name);

            $img_hover = request()->imageHover;
            $img_name_hover = $img_hover->getClientOriginalName();
            $img_hover->move(base_path('public/uploads/images/CategoryService'), $img_name_hover);

            $img_banner_service = request()->bannerService;
            $img_name_banner_service = $img_banner_service->getClientOriginalName();
            $img_banner_service->move(base_path('public/uploads/images/CategoryService'), $img_name_banner_service);

            $model = $this->update([
                'name' => request()->name,
                'slug' => Str::slug(request()->name),
                'image' => $img_name,
                'image_hover' => $img_name_hover,
                'banner_service' => $img_name_banner_service,
                'description' => request()->description,
                'status' => request()->status,
                'link_video_service'=>request()->linkVideoService
            ]);
            return $model;
        } else if (request()->has('image') && request()->has('imageHover')) {
            $img = request()->image;
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/CategoryService'), $img_name);

            $img_hover = request()->imageHover;
            $img_name_hover = $img_hover->getClientOriginalName();
            $img_hover->move(base_path('public/uploads/images/CategoryService'), $img_name_hover);

            $model = $this->update([
                'name' => request()->name,
                'slug' => Str::slug(request()->name),
                'image' => $img_name,
                'image_hover' => $img_name_hover,
                'description' => request()->description,
                'status' => request()->status,
                'link_video_service'=>request()->linkVideoService
            ]);
            return $model;
        } else if (request()->has('image') && request()->has('bannerService')) {
            $img = request()->image;
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/CategoryService'), $img_name);

            $img_banner_service = request()->bannerService;
            $img_name_banner_service = $img_banner_service->getClientOriginalName();
            $img_banner_service->move(base_path('public/uploads/images/CategoryService'), $img_name_banner_service);

            $model = $this->update([
                'name' => request()->name,
                'slug' => Str::slug(request()->name),
                'image' => $img_name,
                'description' => request()->description,
                'status' => request()->status,
                'link_video_service'=>request()->linkVideoService
            ]);
            return $model;
        }else if(request()->has('imageHover') && request()->has('bannerService')){
            $img_hover = request()->imageHover;
            $img_name_hover = $img_hover->getClientOriginalName();
            $img_hover->move(base_path('public/uploads/images/CategoryService'), $img_name_hover);

            $img_banner_service = request()->bannerService;
            $img_name_banner_service = $img_banner_service->getClientOriginalName();
            $img_banner_service->move(base_path('public/uploads/images/CategoryService'), $img_name_banner_service);

            $model = $this->update([
                'name' => request()->name,
                'slug' => Str::slug(request()->name),
                'image_hover' => $img_name_hover,
                'banner_service' => $img_name_banner_service,
                'description' => request()->description,
                'status' => request()->status,
                'link_video_service'=>request()->linkVideoService
            ]);
            
            return $model;
        } else {
            $model = $this->update([
                'name' => request()->name,
                'slug' => Str::slug(request()->name),
                'description' => request()->description,
                'status' => request()->status,
                'link_video_service'=>request()->linkVideoService
            ]);
            return $model;
        }
    }
}