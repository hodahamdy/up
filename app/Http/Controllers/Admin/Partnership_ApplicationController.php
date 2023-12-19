<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner_Application;
use App\Models\Partnership;
use App\Models\User;
use Illuminate\Http\Request;

class Partnership_ApplicationController extends Controller

{

    public function index(){
        $partapp=Partner_Application::all();

        return view('Admin.Partnership.PartnerApplication.index',compact('partapp'));
    }
    public function create(){
        $user=User::all();
        $partner=Partnership::all();
        return view('Admin.Partnership.PartnerApplication.create',compact('user','partner'));

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
       return redirect(route('part_app.index'));
    }
    public function edit (Partner_Application $id){
        $user=User::all();
        $partner=Partnership::all();
        return view('Admin.Partnership.PartnerApplication.edit',compact('user','partner','id'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
        'user_id'=>'required',
        'part_id'=>'required',
        'part_date_submit'=> 'required|date',
        ]);
        $partapp=Partner_Application::find($id);
        if(!$partapp){
            return redirect(route('part_app.index'));
        }
        $partapp->user_id=$request->user_id;
        $partapp->part_id=$request->part_id;
        $partapp->part_date_submit=$request->part_date_submit;
        $partapp->save();
        return redirect(route('part_app.index'));
    }
    public function delete($id){
        $partapp=Partner_Application::find($id);
        if(!$partapp){
            return redirect(route('part_app.index'));
        }
         $partapp->delete();
         return redirect(route('part_app.index'));
        }

}

