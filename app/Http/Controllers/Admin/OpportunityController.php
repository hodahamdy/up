<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use App\Models\Opportunity_Category;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function index(){
        $opportunity=opportunity::all();
        return view('Admin.Opportunity.index',compact('opportunity'));

    }
    public function create(){
        $category=Opportunity_Category::all();
        return view('Admin.Opportunity.create',compact('category'));
   }
    public function store(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'opp_name'=>'required|string',
            'opp_desc'=>'required|string',
            'opp_contract_duration'=> 'required',
            'opp_rules'=> 'required|string',
            'opp_copyrights_percentage'=> 'required|string',
            'opp_markting_percentage'=> 'required|string',
            'opp_cost_from'=> 'required',
            'opp_cost_to'=> 'required',
            'opp_image'=> 'required|image|mimes:jpg,png,jpeg',
            'opp_location'=> 'required|string',
            'category_id'=> 'required',
        ]    );

         // get image details
         $img = $request->file('opp_image');
         $extenstion = $img->getClientOriginalExtension();
         $ImageName = "opportunity". uniqid() . ".$extenstion" ;

         //Move Img to it is folder
         $img->move( public_path('Uploads/opportunity') , $ImageName);

        $opportunity=opportunity::create( [

            'opp_name'=> $request->opp_name,
            'opp_desc'=> $request->opp_desc,
            'opp_contract_duration'=>$request->opp_contract_duration,
            'opp_rules'=>$request->opp_rules,
            'opp_copyrights_percentage'=> $request->opp_copyrights_percentage,
            'opp_markting_percentage'=> $request->opp_markting_percentage,
            'opp_cost_from'=> $request->opp_cost_from,
            'opp_cost_to'=> $request->opp_cost_to,
            'opp_image'=>$ImageName,
            'opp_location'=> $request->opp_location,
            'category_id'=> $request->category_id,

        ]);
        return redirect(route('opportunity.index'));
    }

    public function edit(Opportunity $id){
        $category=Opportunity_Category::all();
        return view('Admin.Opportunity.edit', compact('category','id'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'opp_name'=>'required|string',
            'opp_desc'=>'required|string',
            'opp_contract_duration'=> 'required|string',
            'opp_rules'=> 'required|string',
            'opp_copyrights_percentage'=> 'required|string',
            'opp_markting_percentage'=> 'required|string',
            'opp_cost_from'=> 'required',
            'opp_cost_to'=> 'required',
            'opp_image'=> 'nullable|image|mimes:jpg,png,jpeg',
            'opp_location'=> 'required|string',

        ]);
        $opportunity=opportunity::find($id);
        if(!$opportunity){
            return redirect(route('opportunity.index'));
        }
         $ImageName = $opportunity->opp_image ;

         if( $request->hasFile('opp_image') )
         {
             if($ImageName !== null )
             {
                 $file_delete=public_path('Uploads/opportunity/') . $ImageName;
                 if (file_exists($file_delete)) {unlink($file_delete);}
             }

             // get image details
             $img = $request->file('opp_image');
             $extenstion = $img->getClientOriginalExtension();
             $ImageName = "opportunity". uniqid() . ".$extenstion" ;

             //Move Img to it is folder
             $img->move( public_path('Uploads/opportunity') , $ImageName);
         }

        $opportunity->opp_name=$request->opp_name;
        $opportunity->opp_desc=$request->opp_desc;
        $opportunity->opp_contract_duration=$request->opp_contract_duration;
        $opportunity->opp_rules=$request->opp_rules;
        $opportunity->opp_copyrights_percentage=$request->opp_copyrights_percentage;
        $opportunity->opp_markting_percentage=$request->opp_markting_percentage;
        $opportunity->opp_cost_from=$request->opp_cost_from;
        $opportunity->opp_cost_to=$request->opp_cost_to;
        $opportunity->opp_image=$ImageName;
        $opportunity->opp_location=$request->opp_location;
        $opportunity->category_id=$request->category_id;
        $opportunity->save();
        return redirect(route('opportunity.index'));


    }
    public function delete($id){
        $opportunity=Opportunity::find($id);
        if(!$opportunity){
            return redirect(route('opportunity.index'));
        }
         if( $opportunity->opp_image !== null )
         {
             unlink( public_path('Uploads/opportunity/') . $opportunity->opp_image );
         }
         $opportunity->delete();
         return redirect(route('opportunity.index'));
    }
}
