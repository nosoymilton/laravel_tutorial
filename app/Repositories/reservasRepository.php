<?php

namespace App\Repositories;

use App\Models\reservas;
use App\Repositories\BaseRepository;

/**
 * Class reservasRepository
 * @package App\Repositories
 * @version November 16, 2020, 10:59 pm UTC
*/

class reservasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ejemplares_idejemplarea',
        'id_idusuario',
        'fechareserva',
        'prestado'
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
        return reservas::class;
    }
}
