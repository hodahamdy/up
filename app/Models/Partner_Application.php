<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner_Application extends Model
{
    use HasFactory;
    protected $table="partner_applications";
    protected $fillable = [
        "user_id",
        "part_id",
        "part_date_submit",

    ];
    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
    public function partner(){
        return $this->belongsTo(Partnership::class,"part_id");
    }
}
