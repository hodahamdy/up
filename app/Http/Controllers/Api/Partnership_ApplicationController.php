<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner_Application;

class Partnership_ApplicationController extends Controller

{

    public function index(){
        $partapp=Partner_Application::all();
        return response()->json($partapp);
    }
    public function store(Request $request){
// dd($request->all());
        $this->validate($request, [
            'user_id'=>'required',
            'part_id'=>'required',
            'part_date_submit'=> 'required',
        ] );

        $partapp=Partner_Application::create( [
            'user_id'=> $request->user_id,
            'part_id'=> $request->part_id,
            'part_date_submit'=>$request->part_date_submit,
       ]);
        return response()->json(['msg'=>'partner application added successfully',"status"=>200]);
    }
    public function show($id){
        $partapp=Partner_Application::find($id);
        return response()->json($partapp);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
        'user_id'=>'required',
        'part_id'=>'required',
        'part_date_submit'=> 'required|date',
        ]);
        $partapp=Partner_Application::find($id);
        if(!$partapp){
            return response()->json(['message'=> 'partner application not found',"status"=>404]);
         }
        $partapp->user_id=$request->user_id;
        $partapp->part_id=$request->part_id;
        $partapp->part_date_submit=$request->part_date_submit;
        $partapp->save();
        return response()->json(['msg'=> 'partner application updated successfully',"status"=>200]);
    }
    public function delete($id){
        $partapp=Partner_Application::find($id);
        if(!$partapp){
            return response()->json(['message'=> 'partner application not found',"status"=>404]);
         }
         $partapp->delete();
        return response()->json(['msg'=> 'partner application  deleted successfully',"status"=>200]);
    }

}

