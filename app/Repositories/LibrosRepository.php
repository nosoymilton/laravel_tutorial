<?php

namespace App\Repositories;

use App\Models\Libros;
use App\Repositories\BaseRepository;

/**
 * Class LibrosRepository
 * @package App\Repositories
 * @version September 15, 2020, 12:50 am UTC
*/

class LibrosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'isbn',
        'titulo',
        'numpaginas',
        'apublicacion',
        'idiomas_ididiomas',
        'editoriales_ideditoriales'
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
        return Libros::class;
    }
}
