<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AssignedShiftss;
use App\Http\Requests\AddAssiRequest;
use App\Http\Requests\EditAssiRequest;

class AssignedShiftsController extends Controller
{
    //
    public function getAssi(){
    	$data['assilist'] = AssignedShiftss::all();
    	return view('backend.assignedshifts',$data);
    }

    public function postAssi(AddAssiRequest $request){
    	$assignedshifts = new AssignedShiftss;
    	$assignedshifts->assi_name = $request->name;
    	$assignedshifts->assi_slug = str_slug($request->name);
    	$assignedshifts->assi_timeStart = $request->timeStart;
    	$assignedshifts->assi_timeFinish = $request->timeFinish;
    	$assignedshifts->assi_factor = $request->factor;
    	$assignedshifts->assi_description = $request->description;
    	$assignedshifts->save();
    	return back();
    }

    public function getEditAssi($id){
    	$data['assi'] = AssignedShiftss::find($id);
    	return view('backend.editassignedshifts',$data);
    }

    public function postEditAssi(EditAssiRequest $request,$id){
    	$assignedshifts = AssignedShiftss::find($id);
    	$assignedshifts->assi_name = $request->name;
    	$assignedshifts->assi_slug = str_slug($request->name);
    	$assignedshifts->assi_timeStart = $request->timeStart;
    	$assignedshifts->assi_timeFinish = $request->timeFinish;
    	$assignedshifts->assi_factor = $request->factor;
    	$assignedshifts->assi_description = $request->description;
    	$assignedshifts->save();
    	return redirect()->intended('admin/assignedshifts');

    }

    public function getDeleteAssi($id){
    	AssignedShiftss::destroy($id);
    	return back();
    }
}
