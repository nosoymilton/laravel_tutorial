<?php

namespace App\Repositories;

use App\Models\prestamos;
use App\Repositories\BaseRepository;

/**
 * Class prestamosRepository
 * @package App\Repositories
 * @version November 16, 2020, 11:25 pm UTC
*/

class prestamosRepository extends BaseRepository
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
        return prestamos::class;
    }
}
