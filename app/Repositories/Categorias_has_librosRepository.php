<?php

namespace App\Repositories;

use App\Models\Categorias_has_libros;
use App\Repositories\BaseRepository;

/**
 * Class Categorias_has_librosRepository
 * @package App\Repositories
 * @version September 15, 2020, 1:42 am UTC
*/

class Categorias_has_librosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libros_idlibros'
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
        return Categorias_has_libros::class;
    }
}
