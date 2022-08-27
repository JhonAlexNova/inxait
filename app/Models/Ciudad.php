<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ciudad extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ciudades';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'departamento_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
       
    ];

    /**
     * Validation rules
     *
     * @var array
     */
   

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
}
