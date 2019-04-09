<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\User;
use DB;

class DoctorController extends Controller
{
    //
    public function getHome(){
        $data['doctorlist']= User::where('level',0)->get();
        $data['speclist'] = Specialist::all();
    	return view('frontend.home',$data);
    }

    public function getSpecialist(){
    	
    	$data['doctorlist'] = DB::table('tb_doctors')
    							->join('tb_specialist','tb_doctors.doct_spec','=','tb_specialist.spec_id')
    							->select(DB::raw('count(*) as doctor_count'))
    							->groupBy('doct_spec')
    							->get();

    	$data1['specialist'] = DB::table('tb_specialist')
    							->select(DB::raw('spec_name'))
    							->get();
    							// dd($data, $data1);

    	return view('frontend.specialist',$data, $data1);
    }
}
