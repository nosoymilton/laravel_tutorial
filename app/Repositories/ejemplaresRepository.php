<?php

namespace App\Repositories;

use App\Models\ejemplares;
use App\Repositories\BaseRepository;

/**
 * Class ejemplaresRepository
 * @package App\Repositories
 * @version September 14, 2020, 4:16 am UTC
*/

class ejemplaresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numeroejemplar',
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
        return ejemplares::class;
    }
}
