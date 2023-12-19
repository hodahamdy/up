<?php

namespace App\Http\Controllers\Api;

use App\Models\Opportunity_Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Opportunity_CategoryController extends Controller
{
    public function index(){
        $category=Opportunity_Category::all();
        return response()->json($category);
    }
    public function store(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'opp_cat_name'=>'required|string',
            'opp_cat_desc'=>'required|string'
        ]    );
        $category=Opportunity_Category::create( [

            'opp_cat_name'=> $request->opp_cat_name,
            'opp_cat_desc'=> $request->opp_cat_desc
        ]);
        return response()->json(['msg'=>'category added successfully',"status"=>200]);
    }
    public function show($id){
        $category=Opportunity_Category::find($id);
        return response()->json($category);
    }
    public function update(Request $request, $id){
        $this->validate($request, [

            'opp_cat_name'=>'required|string',
            'opp_cat_desc'=>'required|string'
        ]);
        $category=Opportunity_Category::find($id);
        if(!$category){
            return response()->json(['message'=> 'category not found', "status"=>404]);
         }
        $category->opp_cat_name=$request->opp_cat_name;
        $category->opp_cat_desc=$request->opp_cat_desc;
        $category->save();
        return response()->json(['msg'=> 'category updated successfully',"status"=>200]);


    }
    public function delete($id){
        $category=Opportunity_Category::find($id);
        if(!$category){
            return response()->json(['message'=> 'category not found',"status"=>404]);
         }

         $category->delete();
         return response()->json(['msg'=> 'category deleted successfully',"status"=>200]);
    }
}
