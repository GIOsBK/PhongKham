<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StatusShift;
use App\Http\Requests\AddStatRequest;
use App\Http\Requests\EditStatRequest;

class StatusShiftController extends Controller
{
    //
    public function getStat(){
    	$data['statlist'] = StatusShift::all();
    	return view('backend.statusshift',$data);
    }

    public function postStat(AddStatRequest $request){
    	$statusshift = new StatusShift;
    	$statusshift->stat_name = $request->name;
    	$statusshift->stat_slug = str_slug($request->name);
    	$statusshift->stat_description = $request->description;
    	$statusshift->save();
    	return back();
    }

    public function getEditStat($id){
    	$data['stat']= StatusShift::find($id);
    	return view('backend.editstatusshift',$data);
    }

    public function postEditStat(EditStatRequest $request,$id){
    	$statusshift = StatusShift::find($id);
    	$statusshift->stat_name = $request->name;
    	$statusshift->stat_slug = str_slug($request->name);
    	$statusshift->stat_description = $request->description;
    	$statusshift->save();
    	return redirect()->intended('admin/statusshift');
    }


    public function getDeleteStat($id){
    	StatusShift::destroy($id);
    	return back();
    }
}
