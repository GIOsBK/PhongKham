<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddDoctorRequest;
use App\Models\User;
use App\Models\Diploma;
use App\Models\Specialist;
use DB;


class UDoctorController extends Controller
{
    //
    public function getDoctor(){
    	$data['doctorlist'] = DB::table('tb_users')
    							->join('tb_specialist','tb_users.user_spec','=','tb_specialist.spec_id')
    							->join('tb_diplomaa','tb_users.user_dipl','=','tb_diplomaa.dipl_id')
    							->where('tb_users.level',0)
    							->orderBy('id','desc')
    							->get();                 
    	return view('backend.doctor',$data);
    }

    public function getAddDoctor(){
        $dipllist = Diploma::all();
        $speclist = Specialist::all();

    	return view('backend.adddoctor', compact('dipllist', 'speclist'));
    }

    public function postAddDoctor(AddDoctorRequest $request){
    	$filename = $request->avatar->getClientOriginalName();
    	$udoct = new User;
        $udoct->email = $request->email;
        $udoct->password = bcrypt($request->password);
    	$udoct->full_name = $request->full_name;
        $udoct->name_slug = str_slug($request->full_name);
        $udoct->phone_number = $request->phone_number;
    	$udoct->old = $request->old;
    	$udoct->avatar = $filename;	
    	$udoct->level = 0;
        $udoct->user_spec = $request->user_spec;
        $udoct->user_dipl = $request->user_dipl;
        $request->avatar->storeAs('avatar',$filename);
    	$udoct->save();
    	return redirect()->intended('admin/doctor');
    }


    public function getEditDoctor($id){

    	$data['doctor'] = User::find($id);
    	$data['speclist'] = Specialist::all();
    	$data['dipllist'] = Diploma::all();
    	return view('backend.editdoctor',$data);
    }

    public function postEditDoctor(Request $request, $id){
        $udoct = new User;
        $arr['email'] = $request->email;
        $arr['password'] = bcrypt($request->password);
        $arr['full_name'] = $request->full_name;
        $arr['name_slug'] = str_slug($request->full_name);
        $arr['phone_number'] = $request->phone_number;
        $arr['old'] = $request->old;
        $arr['level'] = 0;
        $arr['user_spec'] = $request->user_spec;
        $arr['user_dipl'] = $request->user_dipl;
        $arr['user_detail'] = $request->detail;

        if($request->hasFile('avatar')){
            $avatar = $request->avatar->getClientOriginalName();
            $arr['avatar'] = $avatar;
            $request->avatar->storeAs('avatar',$avatar);
        }
        $udoct::where('id',$id)->update($arr);
        return redirect()->intended('admin/doctor');


    }
/*
    public function getDeleteDoctor($id){
        User::destroy($id);
        return back();
    }*/
}
