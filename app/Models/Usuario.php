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
class Usuario extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'usuarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'ciudad_id',
        'nombre',
        'apellido',
        'cedula',
        'celular',
        'correo',
        'habeas_data'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ciudad_id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'cedula' => 'string',
        'celular' => 'string',
        'correo' => 'string',
        'habeas_data' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'required',
        'celular' => 'required',
        'correo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ciudad()
    {
        return $this->belongsTo(\App\Models\Ciudad::class, 'ciudad_id', 'id');
    }
}
