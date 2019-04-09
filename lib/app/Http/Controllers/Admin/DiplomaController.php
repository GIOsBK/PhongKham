<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Diploma;
use App\Http\Requests\AddDiplRequest;
use App\Http\Requests\EditDiplRequest;

class DiplomaController extends Controller
{
    //
    public function getDipl(){
    	$data['dipllist'] = Diploma::all();
    	return view('backend.diploma',$data);
    }

    public function postDipl(AddDiplRequest $request){
    	$diploma = new Diploma;
    	$diploma->dipl_name = $request->name;
    	$diploma->dilp_slug = str_slug($request->name);
    	$diploma->dipl_price = $request->price;
    	$diploma->save();
    	return back();
    }


    public function getEditDipl($id){
    	$data['dipl'] = Diploma::find($id);
    	return view('backend.editdiploma',$data);
    }

    public function postEditDipl(EditDiplRequest $request,$id){
    	$diploma = Diploma::find($id);
    	$diploma->dipl_name = $request->name;
    	$diploma->dilp_slug = str_slug($request->name);
    	$diploma->dipl_price = $request->price;
    	$diploma->save();
    	return redirect()->intended('admin/diploma');
    }

    public function getDeleteDipl($id){
    	Diploma::destroy($id);
    	return back();
    }
}
