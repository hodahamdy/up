<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Fund_Application;

class Fund_ApplicationController extends Controller
{

    public function index(){
        
        $fundapp=Fund_Application::all();
        return response()->json($fundapp);
    }
    public function store(Request $request){
        $this->validate($request, [
            'fund_agen_id'=>'required',
            'user_id'=>'required',
            'fundapp_date_submit'=>'required|date',
        ] );
        $fundapp=Fund_Application::create( [
            'fund_agen_id'=> $request->fund_agen_id,
            'user_id'=> $request->user_id,
            'fundapp_date_submit'=>$request->fundapp_date_submit,

        ]);
        return response()->json(['msg'=>'application added successfully',"status"=>200]);
    }
    public function show($id){
        $fundapp=Fund_Application::find($id);
        return response()->json($fundapp);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'fund_agen_id'=>'required',
            'user_id'=>'required',
            'fundapp_date_submit'=>'required|date',
        ]);
        $fundapp=Fund_Application::find($id);
        if(!$fundapp){
            return response()->json(['message'=> 'application not found',"status"=>404]);
         }
        $fundapp->fund_agen_id=$request->fund_agen_id;
        $fundapp->user_id=$request->user_id;
        $fundapp->fundapp_date_submit=$request->fundapp_date_submit;
        $fundapp->save();
        return response()->json(['msg'=> 'application updated successfully',"status"=>200]);
    }
    public function delete($id){
        $fundapp=Fund_Application::find($id);
        if(!$fundapp){
            return response()->json(['message'=> 'application not found',"status"=>404]);
         }
         $fundapp->delete();
        return response()->json(['msg'=> 'application deleted successfully',"status"=>200]);
    }

}
