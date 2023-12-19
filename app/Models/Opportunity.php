<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;
    protected $table = "opportunities";
    protected $fillable = [
        "opp_name",
        "opp_desc",
        "opp_contract_duration",
        "opp_rules",
        "opp_copyrights_percentage",
        "opp_markting_percentage",
        "opp_cost_from",
        "opp_cost_to",
        "opp_image",
        "opp_location",
        "category_id",
    ] ;
    public function category(){
        return $this->belongsTo(Opportunity_Category::class,"category_id","id");
    }
}
