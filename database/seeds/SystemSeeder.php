<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('systems')->insert([
            array('key'=>'hostline', 'data'=>'0931695258', 'label'=>'đây là hostline'),
            array('key'=>'iconSocial', 'data'=>'["iconsocial_03.png","iconsocial_05.png","iconsocial_07.png","iconsocial_09.png"]', 'label'=>'iconSocial'),
            array('key'=>'email', 'data'=>'nthung2896@gmail.com', 'label'=>'email'),
            array('key'=>'address', 'data'=>'238 Hoàng Quốc Việt,Hà Nội', 'label'=>'đây là hostline'),
            array('key'=>'logo', 'data'=>'02_Home_02_03.png', 'Asvon'=>'đây là hostline'),
        ]);
    }
}
