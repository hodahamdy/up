<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Abbasudo\Purity\Traits\Filterable;


class project extends Model
{
    use HasFactory;
    use Filterable;
    protected $table = 'project';
    protected $fillable = [
        'name',
        'desc',
        'percentage',
        'rule',
        'duration',
        'city',
        'cost',

    ] ;

}

