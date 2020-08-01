<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            array('name'=>'Quyền Tối Cao','permissions'=>'["admin.index","admin.file","admin.user.index","admin.user.create","admin.user.store","admin.user.show","admin.user.edit","admin.user.update","admin.user.destroy","admin.categoryRoom.index","admin.categoryRoom.create","admin.categoryRoom.store","admin.categoryRoom.show","admin.categoryRoom.edit","admin.categoryRoom.update","admin.categoryRoom.destroy","admin.categoryService.index","admin.categoryService.create","admin.categoryService.store","admin.categoryService.show","admin.categoryService.edit","admin.categoryService.update","admin.categoryService.destroy","admin.categoryBlog.index","admin.categoryBlog.create","admin.categoryBlog.store","admin.categoryBlog.show","admin.categoryBlog.edit","admin.categoryBlog.update","admin.categoryBlog.destroy","admin.room.index","admin.room.create","admin.room.store","admin.room.show","admin.room.edit","admin.room.update","admin.room.destroy","admin.service.index","admin.service.create","admin.service.store","admin.service.show","admin.service.edit","admin.service.update","admin.service.destroy","admin.blog.index","admin.blog.create","admin.blog.store","admin.blog.show","admin.blog.edit","admin.blog.update","admin.blog.destroy","admin.brand.index","admin.brand.create","admin.brand.store","admin.brand.show","admin.brand.edit","admin.brand.update","admin.brand.destroy","admin.banner.index","admin.banner.create","admin.banner.store","admin.banner.show","admin.banner.edit","admin.banner.update","admin.banner.destroy","admin.role.index","admin.role.create","admin.role.store","admin.role.show","admin.role.edit","admin.role.update","admin.role.destroy","admin.order.index","admin.order.create","admin.order.store","admin.order.show","admin.order.edit","admin.order.update","admin.order.destroy","admin.reviewRoom.index","admin.reviewRoom.create","admin.reviewRoom.store","admin.reviewRoom.show","admin.reviewRoom.edit","admin.reviewRoom.update","admin.reviewRoom.destroy","admin.system.index","admin.system.create","admin.system.store","admin.system.show","admin.system.edit","admin.system.update","admin.system.destroy","admin.system.store3","admin.system.store2","admin.system.update2","admin.system.update3","admin.room.updateStatusRoom","admin.reviewRoom2.update","admin.searchBlog","admin.searchCateBlog","admin.searchRoom","admin.searchCateRoom","admin.searchUser","admin.searchCateService","admin.searchService","admin.searchBrand","admin.searchBanner"]'),
            array('name'=>'Admin Đối tác','permissions'=>'["admin.index","admin.room.create","admin.room.store","admin.room.show","admin.room.edit","admin.room.update","admin.room.destroy","admin.room.indexAdmin","admin.getEditAdminPartner","admin.postEditAdminPartner"]')    
        ]);
    }
}
