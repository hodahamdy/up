<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fund_Categories;
use Illuminate\Http\Request;

class Fund_CategoryController extends Controller
{

    public function index(){
        $fundcategory=Fund_Categories::all();

        return view('Admin.Funding.fundCategory.index',compact('fundcategory'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'fund_categories_name'=>'required',
        ] );
        $fundcategory=Fund_Categories::create( [
            'fund_categories_name'=> $request->fund_categories_name,

        ]);
        return redirect()->back();
        // return view('Admin.Funding.fundCategory.index');
        // return view('Admin.Funding.fundCategory.index');
//
    }
    public function create(){
        return view('Admin.Funding.fundCategory.create');

    }
    public function edit (Fund_Categories $id){

        return view('Admin.Funding.fundCategory.edit',compact('id'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'fund_categories_name'=>'required',
        ]);
        $fundcategory=Fund_Categories::find($id);
        if(!$fundcategory){
        return view('Admin.Funding.fundCategory.index')->with('category not found');

         }
        $fundcategory->fund_categories_name=$request->fund_categories_name;
        $fundcategory->save();
        return view('Admin.Funding.fundCategory.index');

    }
    public function delete($id){
        $fundcategory=Fund_Categories::find($id);
        if(!$fundcategory){
            return view('Admin.Funding.fundCategory.index')->with('category not found');

                 }
                          $fundcategory->delete();
                          return redirect()->back();

    }

}
