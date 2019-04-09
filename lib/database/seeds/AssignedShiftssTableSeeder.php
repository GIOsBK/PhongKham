<?php

use Illuminate\Database\Seeder;

class AssignedShiftssTableSeeder extends Seeder
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
        		'assi_name'=>'Ca 1',
        		'assi_slug'=>str_slug('Ca 1'),
        		'assi_timeStart'=>'8:00am',
        		'assi_timeFinish'=>'8:30am',
        		'assi_factor'=>1.0,
        		'assi_description'=>'Ca làm việc bắt đầu từ 8g00 đến 8g30'
        	],
        	[
        		'assi_name'=>'Ca 2',
        		'assi_slug'=>str_slug('Ca 2'),
        		'assi_timeStart'=>'8:30am',
        		'assi_timeFinish'=>'9:00am',
        		'assi_factor'=>1.0,
        		'assi_description'=>'Ca làm việc bắt đầu từ 8g00 đến 8g30'
        	],
        ];
        DB::table('tb_assigned_shiftss')->insert($data);
    }
}
