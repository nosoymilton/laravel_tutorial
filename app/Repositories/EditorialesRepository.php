<?php

namespace App\Repositories;

use App\Models\Editoriales;
use App\Repositories\BaseRepository;

/**
 * Class EditorialesRepository
 * @package App\Repositories
 * @version September 15, 2020, 12:57 am UTC
*/

class EditorialesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'editorial',
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
        return Editoriales::class;
    }
}
