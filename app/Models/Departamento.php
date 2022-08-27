<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Usuario
 * @package App\Models
 * @version August 27, 2022, 2:48 pm UTC
 *
 * @property \App\Models\Ciudad $ciudad
 * @property integer $ciudad_id
 * @property string $nombre
 * @property string $apellido
 * @property string $cedula
 * @property string $celular
 * @property string $correo
 * @property string $habeas_data
 */
class Departamento extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'departamentos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string'
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
