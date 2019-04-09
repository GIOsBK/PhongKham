<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Http\Requests\AddSpecRequest;
use App\Http\Requests\EditSpecRequest;

class SpecialistController extends Controller
{
    //
    public function getSpec(){
    	$data['speclistlist'] = Specialist::all();
    	return view('backend.specialist',$data);
    }

    public function postSpec(AddSpecRequest $request){
    	$specialist = new Specialist;
    	$specialist->spec_name = $request->name;
    	$specialist->spec_slug = str_slug($request->name);
        $specialist->spec_detail = $request->detail;
    	$specialist->save();
    	return back();
    }

    public function getEditSpec($id){
        $data['spec'] = Specialist::find($id);
    	return view('backend.editspecialist',$data);
    }

    public function postEditSpec(EditSpecRequest $request,$id){
        $specialist = Specialist::find($id);
        $specialist->spec_name = $request->name;
        $specialist->spec_slug = str_slug($request->name);
        $specialist->spec_detail = $request->detail;
        $specialist->save();
        return redirect()->intended('admin/specialist');
    }

    public function getDeleteSpec($id){
        Specialist::destroy($id);
        return back();
    }
}
