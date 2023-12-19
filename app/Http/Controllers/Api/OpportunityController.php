<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Opportunity;

class OpportunityController extends Controller
{
    public function index(){
        $opportunity=opportunity::all();
        return response()->json($opportunity);
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
            'opp_image'=> 'nullable|image|mimes:jpg,png,jpeg',
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
        return response()->json(['msg'=>'opportunity added successfully',"status"=>200]);
    }
    public function show($id){
        $opportunity=opportunity::find($id);
        return response()->json($opportunity);
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
            'category_id'=> 'required',
        ]);
        $opportunity=opportunity::find($id);
        if(!$opportunity){
            return response()->json(['message'=> 'opportunity not found',"status"=>404]);
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
        $opportunity->opp_image=$request->opp_image;
        $opportunity->opp_location=$request->opp_location;
        $opportunity->category_id=$request->category_id;
        $opportunity->save();
        return response()->json(['msg'=> 'opportunity updated successfully',"status"=>200]);


    }
    public function delete($id){
        $opportunity=Opportunity::find($id);
        if(!$opportunity){
            return response()->json(['message'=> 'opportunity not found',"status"=>404]);
         }
         if( $opportunity->opp_image !== null )
         {
             unlink( public_path('Uploads/opportunity/') . $opportunity->opp_image );
         }
         $opportunity->delete();
         return response()->json(['msg'=> 'opportunity deleted successfully',"status"=>200]);
    }
}
