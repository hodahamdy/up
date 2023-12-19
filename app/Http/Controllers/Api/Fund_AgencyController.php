<?php

namespace App\Http\Controllers\Api;

use App\Models\Funding_Agency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Fund_AgencyController extends Controller
{

    public function index(){
        $fund=Funding_Agency::all();
        return response()->json($fund);
    }
    public function store(Request $request){
        $this->validate($request, [
            'fund_name'=>'required|string',
            'fund_desc'=>'required|string',
            'fund_logo'=>'required|image|mimes:jpg,png,jpeg',
            'fund_interset_percentage'=> 'required|string',
            'fund_repay_period'=> 'required|string',
            'fund_rules'=> 'required|string',
            'fund_cost_from'=> 'required|string',
            'fund_cost_to'=> 'required|string',
            'fund_categories_id'=> 'required',
        ] );
         // get image details
         $img = $request->file('fund_logo');
         $extenstion = $img->getClientOriginalExtension();
         $ImageName = "fund_agency". uniqid() . ".$extenstion" ;

         //Move Img to it is folder
         $img->move( public_path('Uploads/fund_agency') , $ImageName);

        $fund=Funding_Agency::create( [
            'fund_name'=> $request->fund_name,
            'fund_desc'=> $request->fund_desc,
            'fund_interset_percentage'=>$request->fund_interset_percentage,
            'fund_repay_period'=>$request->fund_repay_period,
            'fund_rules'=>$request->fund_rules,
            'fund_logo'=>$ImageName,
            'fund_cost_from'=>$request->fund_cost_from,
            'fund_cost_to'=>$request->fund_cost_to,
            'fund_categories_id'=>$request->fund_categories_id,

        ]);
        return response()->json(['msg'=>'funding agency added successfully',"status"=>200]);
    }
    public function show($id){
        $fund=Funding_Agency::find($id);
        return response()->json($fund);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
        'fund_name'=> 'required|string',
        'fund_logo'=>'required|image|mimes:jpg,png,jpeg',
        'fund_desc'=>'required|string',
        'fund_interset_percentage'=> 'required|string',
        'fund_repay_period'=> 'required|string',
        'fund_cost_from'=> 'required|string',
        'fund_cost_to'=> 'required|string',
        'fund_rules'=> 'required|string',
        'fund_categories_id'=> 'required',
        ]);
        $fund=Funding_Agency::find($id);
        if(!$fund){
            return response()->json(['message'=> 'funding agency not found',"status"=>404]);
         }
          $ImageName = $fund->fund_logo ;

         if( $request->hasFile('fund_logo') )
         {
             if($ImageName !== null )
             {
                 $file_delete=public_path('Uploads/fund_agency/') . $ImageName;
                 if (file_exists($file_delete)) {unlink($file_delete);}
             }

             // get image details
             $img = $request->file('fund_logo');
             $extenstion = $img->getClientOriginalExtension();
             $ImageName = "fund_agency". uniqid() . ".$extenstion" ;

             //Move Img to it is folder
             $img->move( public_path('Uploads/fund_agency') , $ImageName);


         }
        $fund->fund_name=$request->fund_name;
        $fund->fund_desc=$request->fund_desc;
        $fund->fund_interset_percentage=$request->fund_interset_percentage;
        $fund->fund_cost_from=$request->fund_cost_from;
        $fund->fund_repay_period=$request->fund_repay_period;
        $fund->fund_cost_to=$request->fund_cost_to;
        $fund->fund_rules=$request->fund_rules;
        $fund->fund_logo=$ImageName;
        $fund->fund_categories_id=$request->fund_categories_id;

        $fund->save();
        return response()->json(['msg'=> 'funding agency updated successfully',"status"=>200]);

    }
    public function delete($id){
        $fund=Funding_Agency::find($id);
        if(!$fund){
            return response()->json(['message'=> 'funding agency not found',"status"=>404]);
         }
         if( $fund->fund_logo !== null )
        {
            unlink( public_path('Uploads/fund_agency/') . $fund->fund_logo );
        }
         $fund->delete();
        return response()->json(['msg'=> 'funding agency deleted successfully',"status"=>200]);
    }

}
