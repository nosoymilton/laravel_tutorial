<?php

namespace App\Repositories;

use App\Models\Idiomas;
use App\Repositories\BaseRepository;

/**
 * Class IdiomasRepository
 * @package App\Repositories
 * @version September 15, 2020, 12:59 am UTC
*/

class IdiomasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idioma'
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
        return Idiomas::class;
    }
}
