<?php

namespace App\Repositories;

use App\Models\Categorias;
use App\Repositories\BaseRepository;

/**
 * Class CategoriasRepository
 * @package App\Repositories
 * @version September 15, 2020, 1:05 am UTC
*/

class CategoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categoria',
        'descripcion'
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
        return Categorias::class;
    }
}
