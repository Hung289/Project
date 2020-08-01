<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Tối Cao',
            'email' => Str::random(4).'@gmail.com',
            'phone' => '0912345632',
            'level' => 0,
            'password' => bcrypt(123456)
        ]);
    }
}
