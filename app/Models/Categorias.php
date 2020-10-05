<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categorias
 * @package App\Models
 * @version September 15, 2020, 1:05 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $libros
 * @property string $categoria
 * @property string $descripcion
 */
class Categorias extends Model
{

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idcategorias';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    public $table = 'categorias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'categoria',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcategorias' => 'integer',
        'categoria' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'categoria' => 'required|string|max:45',
        'descripcion' => 'required|string|max:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function libros()
    {
        return $this->belongsToMany(\App\Models\Libro::class, 'categorias_has_libros');
    }
}
