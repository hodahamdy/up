<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fund_Application;
use App\Models\Funding_Agency;
use App\Models\User;
use Illuminate\Http\Request;

class Fund_ApplicationController extends Controller
{

    public function index(){
        $fundapp=Fund_Application::all();
        return view('Admin.Funding.fundApplication.index',compact("fundapp"));
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
         return view('Admin.Funding.fundApplication.index');

    }
    public function create(){
        $fundapp=Funding_Agency::all();
        $user=User::all();
        return view('Admin.Funding.fundApplication.create',compact('fundapp','user'));

    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'fund_agen_id'=>'required',
            'user_id'=>'required',
            'fundapp_date_submit'=>'required|date',
        ]);
        $fundapp=Fund_Application::find($id);
        if(!$fundapp){
        return view('Admin.Funding.fundApplication.index')->with('fund app not found');

         }
        $fundapp->fund_agen_id=$request->fund_agen_id;
        $fundapp->user_id=$request->user_id;
        $fundapp->fundapp_date_submit=$request->fundapp_date_submit;
        $fundapp->save();
        return view('Admin.Funding.fundApplication.index')->with('fund app updated successfully');

    }
    public function delete($id){
        $fundapp=Fund_Application::find($id);
        if(!$fundapp){
        return view('Admin.Funding.fundApplication.index')->with('fund app not found');

         }

         $fundapp->delete();
        return view('Admin.Funding.fundApplication.index')->with('fund app deleted successfully');

    }

}
