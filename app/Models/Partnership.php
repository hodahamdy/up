<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    use HasFactory;
    protected $table="partnership";
    protected $fillable = [
        "part_title",
        "part_desc",
        "part_duration",
        "part_percentage",
        "part_location",
        "part_rules",
        "part_cost",
        "partner_image",
        "partner_category_id",

    ] ;
    public function partnersCategory(){
        return $this->belongsTo(partner_category::class,"partner_category_id");

    }
}
