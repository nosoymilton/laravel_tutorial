<?php

namespace App\Repositories;

use App\Models\books;
use App\Repositories\BaseRepository;

/**
 * Class booksRepository
 * @package App\Repositories
 * @version September 1, 2020, 5:45 am UTC
*/

class booksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email_autor',
        'publication_year'
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
        return books::class;
    }
}
