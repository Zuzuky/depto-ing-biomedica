<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'jefa_id',
       'eq_med_id',
        'ing_biomed_id',
        'area_id',
        'falla',
       

        //protected $guarded = ['id, created_at, 'updated_at'];
    ];
}
