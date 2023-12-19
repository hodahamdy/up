<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\partner_category;
use App\Models\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller

{

    public function index(){
        $part=Partnership::all();
        return view('Admin.Partnership.index',compact('part'));
    }
    public function create(){
        $category= partner_category::all() ;
        return view('Admin.Partnership.create',compact('category'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'part_title'=>'required|string',
            'part_desc'=>'required|string',
            'part_duration'=> 'required|string',
            'part_percentage'=> 'required|string',
            'part_location'=> 'required|string',
            'part_rules'=> 'required|string',
            'part_cost'=> 'required|string',
            'category_id'=> 'required',
            'partner_image'=> 'required|image|mimes:jpg,png,jpeg',
        ] );
        // get image details
        $img = $request->file('partner_image');
        $extenstion = $img->getClientOriginalExtension();
        $ImageName = "partneship". uniqid() . ".$extenstion" ;

        //Move Img to it is folder
        $img->move( public_path('Uploads/partneship') , $ImageName);
        $part=Partnership::create( [
            'part_title'=> $request->part_title,
            'part_desc'=> $request->part_desc,
            'part_duration'=>$request->part_duration,
            'part_percentage'=>$request->part_percentage,
            'part_location'=>$request->part_location,
            'part_rules'=>$request->part_rules,
            'part_cost'=>$request->part_cost,
            'category_id'=> $request->category_id,
            'partner_image'=>$ImageName,
        ]);
        return redirect(route('part.index'));
    }

    public function edit(Partnership $id){
        $category=partner_category::all();
        return view('Admin.Partnership.edit', compact('category','id'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
        'part_title'=>'required|string',
        'part_desc'=>'required|string',
        'part_duration'=> 'required|string',
        'part_percentage'=> 'required|string',
        'part_location'=> 'required|string',
        'part_rules'=> 'required|string',
        'part_cost'=> 'required|string',
        'partner_image'=> 'nullable|image|mimes:jpg,png,jpeg',
        ]);
        $part=Partnership::find($id);
        if(!$part){
            return redirect(route('part.index'));
        }
        $ImageName = $part->partner_image ;

        if( $request->hasFile('partner_image') )
        {
            if($ImageName !== null )
            {
                $file_delete=public_path('Uploads/partneship/') . $ImageName;
                if (file_exists($file_delete)) {unlink($file_delete);}
            }

            // get image details
            $img = $request->file('partner_image');
            $extenstion = $img->getClientOriginalExtension();
            $ImageName = "partneship". uniqid() . ".$extenstion" ;

            //Move Img to it is folder
            $img->move( public_path('Uploads/partneship') , $ImageName);
        }

        $part->part_title=$request->part_title;
        $part->part_desc=$request->part_desc;
        $part->part_duration=$request->part_duration;
        $part->part_percentage=$request->part_percentage;
        $part->part_location=$request->part_location;
        $part->part_rules=$request->part_rules;
        $part->part_cost=$request->part_cost;
        $part->partner_image=$ImageName;
        $part->category_id=$request->category_id;

        $part->save();
        return redirect(route('part.index'));
    }
    public function delete($id){
        $part=Partnership::find($id);
        if(!$part){
            return redirect(route('part.index'));
        }
        if( $part->partner_image !== null )
        {
            unlink( public_path('Uploads/partneship/') . $part->partner_image );
        }
         $part->delete();
         return redirect(route('part.index'));
        }

}

