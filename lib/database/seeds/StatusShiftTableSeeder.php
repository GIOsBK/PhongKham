<?php

use Illuminate\Database\Seeder;

class StatusShiftTableSeeder extends Seeder
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
        		'stat_name'=>'BOOK',
        		'stat_slug'=>str_slug('BOOK'),
        		'stat_description'=>'Ca làm việc này chưa được đặt'
        	],
        	[
        		'stat_name'=>'BOOKED',
        		'stat_slug'=>str_slug('BOOKED'),
        		'stat_description'=>'Ca làm việc này đã được đặt'
        	],
        	[
        		'stat_name'=>'CANCELLED',
        		'stat_slug'=>str_slug('CANCELLED'),
        		'stat_description'=>'Ca làm việc này đã được đặt nhưng đã bị hủy'
        	],

        ];
        DB::table('tb_status_shift')->insert($data);
    }
}
