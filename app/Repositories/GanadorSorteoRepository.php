<?php

namespace App\Repositories;

use App\Models\GanadorSorteo;
use App\Repositories\BaseRepository;

/**
 * Class GanadorSorteoRepository
 * @package App\Repositories
 * @version August 27, 2022, 6:19 pm UTC
*/

class GanadorSorteoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return GanadorSorteo::class;
    }

    public function withRelations(){
        $data = $this->model->with('usuario')->orderBy('id','DESC')->get();
        return $data;
    }
}
