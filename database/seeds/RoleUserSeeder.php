<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            array('user_id'=>1,'role_id'=>1)
        ]);
    }
}
