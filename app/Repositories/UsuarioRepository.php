<?php

namespace App\Repositories;

use App\Models\Usuario;
use App\Repositories\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version August 27, 2022, 2:48 pm UTC
*/

class UsuarioRepository extends BaseRepository
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
        return Usuario::class;
    }

    public function withNuevoGanador(){
        $users = $this->model->all();
        $data = null;
        if(count($users)>=5){
            $data = $this->model->inRandomOrder()->first();
        }
        return $data;
    }


}
