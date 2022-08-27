<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class GanadorSorteo
 * @package App\Models
 * @version August 27, 2022, 6:19 pm UTC
 *
 * @property \App\Models\Usuario $usuario
 * @property integer $usuario_id
 */
class GanadorSorteo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ganadores_sorteo';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'usuario_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'usuario_id', 'id');
    }
}
