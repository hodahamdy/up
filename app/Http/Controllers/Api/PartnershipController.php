<?php

namespace App\Http\Controllers\Api;

use App\Models\Partnership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnershipController extends Controller
{

    public function index(){
        $part=Partnership::all();
        return response()->json($part);
    }
    public function store(Request $request){
        $this->validate($request, [
            'part_title'=>'required|string',
            'part_desc'=>'required|string',
            'part_duration'=> 'required|string',
            'part_percentage'=> 'required|string',
            'part_location'=> 'required|string',
            'part_rules'=> 'required|string',
            'part_cost'=> 'required|string',
        ] );
        $part=Partnership::create( [
            'part_title'=> $request->part_title,
            'part_desc'=> $request->part_desc,
            'part_duration'=>$request->part_duration,
            'part_percentage'=>$request->part_percentage,
            'part_location'=>$request->part_location,
            'part_rules'=>$request->part_rules,
            'part_cost'=>$request->part_cost,

        ]);
        return response()->json(['msg'=>'partner added successfully',"status"=>200]);
    }
    public function show($id){
        $part=Partnership::find($id);
        return response()->json($part);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
        'part_title'=>'required|string',
        'part_desc'=>'required|string',
        'part_duration'=> 'required|string',
        'part_percentage'=> 'required|string',
        'part_location'=> 'required|string',
        'part_rules'=> 'required|string',
        'part_cost'=> 'required|string',
        ]);
        $part=Partnership::find($id);
        if(!$part){
            return response()->json(['message'=> 'partner not found',"status"=>404]);
         }
        $part->part_title=$request->part_title;
        $part->part_desc=$request->part_desc;
        $part->part_duration=$request->part_duration;
        $part->part_percentage=$request->part_percentage;
        $part->part_location=$request->part_location;
        $part->part_rules=$request->part_rules;
        $part->part_cost=$request->part_cost;
        $part->save();
        return response()->json(['msg'=> 'partner updated successfully',"status"=>200]);
    }
    public function delete($id){
        $part=Partnership::find($id);
        if(!$part){
            return response()->json(['message'=> 'partner not found',"status"=>404]);
         }
         $part->delete();
        return response()->json(['msg'=> 'partner deleted successfully',"status"=>200]);
    }

}
