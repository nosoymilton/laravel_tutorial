<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categorias_has_libros
 * @package App\Models
 * @version September 15, 2020, 1:42 am UTC
 *
 * @property \App\Models\Categoria $categoriascategorias
 * @property \App\Models\Libro $libroslibros
 * @property integer $libros_idlibros
 */
class Categorias_has_libros extends Model
{

    public $table = 'categorias_has_libros';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'libros_idlibros'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'categorias_idcategorias' => 'integer',
        'libros_idlibros' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libros_idlibros' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoriascategorias()
    {
        return $this->belongsTo(\App\Models\Categorias::class, 'categorias_idcategorias');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function libroslibros()
    {
        return $this->belongsTo(\App\Models\libros::class, 'libros_idlibros');
    }
}
