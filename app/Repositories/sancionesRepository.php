<?php

namespace App\Repositories;

use App\Models\sanciones;
use App\Repositories\BaseRepository;

/**
 * Class sancionesRepository
 * @package App\Repositories
 * @version November 16, 2020, 11:27 pm UTC
*/

class sancionesRepository extends BaseRepository
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
        return sanciones::class;
    }
}
