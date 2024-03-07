<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
       'marca',
        'modelo',
        'n_serie',
        'status_eq_med',
        'id_area',
        'id_accesorio'

        //protected $guarded = ['id, created_at, 'updated_at'];
    ];
    
}
