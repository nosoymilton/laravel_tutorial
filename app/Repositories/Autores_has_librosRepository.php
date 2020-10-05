<?php

namespace App\Repositories;

use App\Models\Autores_has_libros;
use App\Repositories\BaseRepository;

/**
 * Class Autores_has_librosRepository
 * @package App\Repositories
 * @version September 15, 2020, 1:43 am UTC
*/

class Autores_has_librosRepository extends BaseRepository
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
        return Autores_has_libros::class;
    }
}
