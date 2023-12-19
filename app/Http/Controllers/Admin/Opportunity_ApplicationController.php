<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use App\Models\Opportunity_Application;
use App\Models\User;
use Illuminate\Http\Request;

class Opportunity_ApplicationController extends Controller
{

    public function index(){
        $application=Opportunity_Application::all();
        return view("Admin.Opportunity.OpportunityApplication.index",compact("application"));
    }
    public function create(){
        $opportunity=Opportunity::all();
        $user=User::all();
        return view("Admin.Opportunity.OpportunityApplication.create",compact("opportunity","user"));
    }
    public function store(Request $request){
        $this->validate($request, [
            'opp_id'=>'required',
            'user_id'=>'required',
            'opp_date_submit'=> 'required',
        ] );
        $application=Opportunity_Application::create( [
            'opp_id'=> $request->opp_id,
            'user_id'=> $request->user_id,
            'opp_date_submit'=>$request->opp_date_submit,
        ]);
        return redirect(route('opp_app.index'));

    }
    public function edit(Opportunity_Application $id){
        $opportunity=Opportunity::all();
        $user=User::all();
        return view("Admin.Opportunity.OpportunityApplication.edit",compact("opportunity","user","id"));
    }

    public function update(Request $request, $id){

        $this->validate($request, [
        'opp_id'=>'required',
        'user_id'=>'required',
        'opp_date_submit'=> 'required',
        ]);
        $application=Opportunity_Application::find($id);
        if(!$application){
            return redirect(route('opp_app.index'));
        }
        $application->opp_id=$request->opp_id;
        $application->user_id=$request->user_id;
        $application->opp_date_submit=$request->opp_date_submit;
        $application->save();
        return redirect(route('opp_app.index'));
    }
    public function delete($id){
        $application=Opportunity_Application::find($id);
        if(!$application){
            return redirect(route('opp_app.index'));
        }
         $application->delete();
         return redirect(route('opp_app.index'));
        }
}

