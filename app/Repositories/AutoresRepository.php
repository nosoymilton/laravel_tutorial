<?php

namespace App\Repositories;

use App\Models\Autores;
use App\Repositories\BaseRepository;

/**
 * Class AutoresRepository
 * @package App\Repositories
 * @version September 15, 2020, 1:04 am UTC
*/

class AutoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombres',
        'apellidopaterno',
        'apellidomaterno'
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
        return Autores::class;
    }
}
