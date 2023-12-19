<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund_Application extends Model
{
    use HasFactory;
    protected $table ="fund_applications";
    protected $fillable = [
        "fund_agen_id",
        "user_id",
        "fundapp_date_submit",
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function fundagency(){
        return $this->belongsTo(Funding_Agency::class,'fund_agen_id','id');
    }
}
