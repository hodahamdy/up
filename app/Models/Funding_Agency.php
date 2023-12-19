<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funding_Agency extends Model
{
    use HasFactory;
    protected $table = "funding_agencies";
    protected $fillable = [
        "fund_name",
        "fund_desc",
        "fund_rules",
        "fund_logo",
        "fund_cost_from",
        "fund_cost_to",
        "fund_interset_percentage",
        "fund_repay_period",
        "fund_categories_id",
    ] ;
    public function agencyCategory(){
        return $this->belongsTo(Fund_Categories::class,"fund_categories_id");
    }
}
