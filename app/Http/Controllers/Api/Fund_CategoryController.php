<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Fund_Categories;

class Fund_CategoryController extends Controller
{

    public function index(){
        $fundcategory=Fund_Categories::all();
        return response()->json($fundcategory);
    }
    public function store(Request $request){
        $this->validate($request, [
            'fund_categories_name'=>'required',
        ] );
        $fundcategory=Fund_Categories::create( [
            'fund_categories_name'=> $request->fund_categories_name,

        ]);
        return response()->json(['msg'=>'category added successfully',"status"=>200]);
    }
    public function show($id){
        $fundcategory=Fund_Categories::find($id);
        return response()->json($fundcategory);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'fund_categories_name'=>'required',
        ]);
        $fundcategory=Fund_Categories::find($id);
        if(!$fundcategory){
            return response()->json(['message'=> 'category not found',"status"=>404]);
         }
        $fundcategory->fund_categories_name=$request->fund_categories_name;
        $fundcategory->save();
        return response()->json(['msg'=> 'category updated successfully',"status"=>200]);
    }
    public function delete($id){
        $fundcategory=Fund_Categories::find($id);
        if(!$fundcategory){
            return response()->json(['message'=> 'category not found',"status"=>404]);
         }
         $fundcategory->delete();
        return response()->json(['msg'=> 'category deleted successfully',"status"=>200]);
    }

}

