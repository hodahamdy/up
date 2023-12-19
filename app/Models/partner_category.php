<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner_category extends Model
{
    use HasFactory;
    protected $table="pratner_categories";
    protected $fillable = [
       'category_name' ,
    ] ;
}
