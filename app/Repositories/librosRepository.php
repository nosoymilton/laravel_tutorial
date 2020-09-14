<?php

namespace App\Repositories;

use App\Models\libros;
use App\Repositories\BaseRepository;

/**
 * Class librosRepository
 * @package App\Repositories
 * @version September 14, 2020, 4:16 am UTC
*/

class librosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'isbn',
        'titulo',
        'numpaginas',
        'fechapublicacion'
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
        return libros::class;
    }
}
