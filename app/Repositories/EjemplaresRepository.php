<?php

namespace App\Repositories;

use App\Models\Ejemplares;
use App\Repositories\BaseRepository;

/**
 * Class EjemplaresRepository
 * @package App\Repositories
 * @version September 15, 2020, 1:04 am UTC
*/

class EjemplaresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libros_idlibros',
        'libros_idiomas_ididiomas',
        'libros_editoriales_ideditoriales'
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
        return Ejemplares::class;
    }
}
