<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class libros
 * @package App\Models
 * @version September 14, 2020, 4:16 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $ejemplares
 * @property string $isbn
 * @property string $titulo
 * @property string $numpaginas
 * @property string $fechapublicacion
 */
class libros extends Model
{
    use SoftDeletes;

    public $table = 'libros';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'isbn',
        'titulo',
        'numpaginas',
        'fechapublicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idlibros' => 'integer',
        'isbn' => 'string',
        'titulo' => 'string',
        'numpaginas' => 'string',
        'fechapublicacion' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'isbn' => 'required|string|max:13',
        'titulo' => 'required|string|max:100',
        'numpaginas' => 'required|string|max:45',
        'fechapublicacion' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        'deleted_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ejemplares()
    {
        return $this->hasMany(\App\Models\Ejemplare::class, 'libros_idlibros');
    }
}
