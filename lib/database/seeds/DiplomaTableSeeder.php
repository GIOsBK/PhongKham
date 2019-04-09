<?php

use Illuminate\Database\Seeder;

class DiplomaTableSeeder extends Seeder
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
        		'dipl_name'=>'Giáo sư',
        		'dilp_slug'=>str_slug('Giáo sư'),
        		'dipl_price' => 200000
        	],
        	[
        		'dipl_name'=>'Tiến sĩ',
        		'dilp_slug'=>str_slug('Tiến sĩ'),
        		'dipl_price' => 150000
        	],
        	[
        		'dipl_name'=>'Thạc sĩ',
        		'dilp_slug'=>str_slug('Thạc sĩ'),
        		'dipl_price' => 120000
        	],
        	[
        		'dipl_name'=>'Bác sĩ',
        		'dilp_slug'=>str_slug('Bác sĩ'),
        		'dipl_price' => 100000
        	],

        ];
        DB::table('tb_diplomaa')->insert($data);
    }
}
