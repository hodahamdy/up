<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\partner_category;
use Illuminate\Http\Request;

class Partnership_CategoryController extends Controller
{
    public function index(){
        $category=partner_category::all();

        return view('Admin.Partnership.PartnerCategory.index',compact('category'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'category_name'=>'required',
        ] );
        $category=partner_category::create( [
            'category_name'=> $request->category_name,

        ]);
        return redirect(route('partcat.index'));
       }
    public function create(){
            return view('Admin.Partnership.PartnerCategory.create');


    }
    public function edit (partner_category $id){

        return view('Admin.Partnership.PartnerCategory.edit',compact('id'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'category_name'=>'required',
        ]);
        $category=partner_category::find($id);
        if(!$category){
            return view('Admin.Partnership.PartnerCategory.edit');

         }
        $category->category_name=$request->category_name;
        $category->save();
        return view('Admin.Partnership.PartnerCategory.edit');

    }
    public function delete($id){
        $category=partner_category::find($id);
        if(!$category){
            return redirect()->back();
        }

         $category->delete();
        return redirect()->back();

    }

}


    