<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity_Category;
use Illuminate\Http\Request;

class Opportunity_CategoryController extends Controller
{
    public function index(){
        $category=Opportunity_Category::all();
        return view("Admin.Opportunity.OpportunityCategory.index",compact("category"));

    }
    public function create(){
        return view("Admin.Opportunity.OpportunityCategory.create");

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
         return redirect(route('opp_category.index'));


    }
    public function edit (Opportunity_Category $id){
        

        return view('Admin.Opportunity.OpportunityCategory.edit',compact('id'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [

            'opp_cat_name'=>'required|string',
            'opp_cat_desc'=>'required|string'
        ]);
        $category=Opportunity_Category::find($id);
        if(!$category){
            return redirect(route('opp_category.index'));

         }
        $category->opp_cat_name=$request->opp_cat_name;
        $category->opp_cat_desc=$request->opp_cat_desc;
        $category->save();
        return redirect(route('opp_category.index'));

    }
    public function delete($id){
        $category=Opportunity_Category::find($id);
        if(!$category){
            return redirect(route('opp_category.index'));

         }

         $category->delete();
         return redirect(route('opp_category.index'));

    }
}
