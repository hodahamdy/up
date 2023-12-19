<?php

namespace App\Http\Controllers\Api;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Opportunity_Application;

class Opportunity_ApplicationController extends Controller
{

    public function index(){
        $application=Opportunity_Application::all();
        return response()->json($application);
    }
    public function store(Request $request){
        $this->validate($request, [
            'opp_id'=>'required',
            'user_id'=>'required',
            'opp_date_submit'=> 'required',
        ] );
        $application=Opportunity_Application::create( [
            'opp_id'=> $request->opp_id,
            'user_id'=> $request->user_id,
            'opp_date_submit'=>$request->opp_date_submit,
        ]);
        return response()->json(['msg'=>'application added successfully',"status"=>200]);
    }
    public function show($id){
        $application=Opportunity_Application::find($id);
        return response()->json($application);
    }
    public function update(Request $request, $id){
        
        $this->validate($request, [
        'opp_id'=>'required',
        'user_id'=>'required',
        'opp_date_submit'=> 'required',
        ]);
        $application=Opportunity_Application::find($id);
        if(!$application){
            return response()->json(['message'=> 'application not found',"status"=>404]);
         }
        $application->opp_id=$request->opp_id;
        $application->user_id=$request->user_id;
        $application->opp_date_submit=$request->opp_date_submit;
        $application->save();
        return response()->json(['msg'=> 'application updated successfully',"status"=>200]);
    }
    public function delete($id){
        $application=Opportunity_Application::find($id);
        if(!$application){
            return response()->json(['message'=> 'application not found',"status"=>404]);
         }
         $application->delete();
        return response()->json(['msg'=> 'application deleted successfully',"status"=>200]);
    }
}
