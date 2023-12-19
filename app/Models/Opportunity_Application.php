<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity_Application extends Model
{
    use HasFactory;
    protected $table = "opportunities_applications";
    protected $fillable = [
        "opp_id",
        "user_id",
        "opp_date_submit",
    ] ;
    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
    public function opportunity(){
        return $this->belongsTo(Opportunity::class,"opp_id");
    }
}

