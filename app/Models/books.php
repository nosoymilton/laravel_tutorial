<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class books
 * @package App\Models
 * @version September 1, 2020, 5:45 am UTC
 *
 * @property string $name
 * @property string $email_autor
 * @property integer $publication_year
 */
class books extends Model
{
    use SoftDeletes;

    public $table = 'books';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email_autor',
        'publication_year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email_autor' => 'string',
        'publication_year' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email_autor' => 'email'
    ];
    
    
}
