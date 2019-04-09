<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'email'=>'admin@gmail.com',
        		'password'=>bcrypt('adminadmin'),
        		'full_name'=>'Trần Thị Hà',
                'name_slug'=>str_slug('Trần Thị Hà'),
                'phone_number'=>'0123456789',
        		'old'=>23,
        		'avatar'=>'#',
                'level'=>1,
                'user_dipl'=>1,
                'user_spec'=>1
        	],
        ];
        DB::table('tb_users')->insert($data);
    }
}
