<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund_Categories extends Model
{
    use HasFactory;
        protected $table="fund_categories";
    protected $fillable = [
        "fund_categories_name",
    ] ;


}
