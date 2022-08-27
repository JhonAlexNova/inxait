<?php

namespace App\Repositories;

use App\Models\Ciudad;
use App\Repositories\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version August 27, 2022, 2:48 pm UTC
*/

class CiudadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'cedula',
        'celular',
        'correo',
        'habeas_data'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ciudad::class;
    }


    public function withRelations($departamento_id){
        $data = $this->model->where('departamento_id',$departamento_id)->get();
        return $data;
    }
}
