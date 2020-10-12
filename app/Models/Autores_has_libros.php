<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Autores_has_libros
 * @package App\Models
 * @version September 15, 2020, 1:43 am UTC
 *
 * @property \App\Models\Autore $autoresautores
 * @property \App\Models\Libro $libroslibros
 * @property integer $libros_idlibros
 * @property integer $libros_idiomas_ididiomas
 * @property integer $libros_editoriales_ideditoriales
 */
class Autores_has_libros extends Model
{

    public $table = 'autores_has_libros';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'libros_idlibros',
        'libros_idiomas_ididiomas',
        'libros_editoriales_ideditoriales'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'autores_idautores' => 'integer',
        'libros_idlibros' => 'integer',
        'libros_idiomas_ididiomas' => 'integer',
        'libros_editoriales_ideditoriales' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libros_idlibros' => 'required|integer',
        'libros_idiomas_ididiomas' => 'required|integer',
        'libros_editoriales_ideditoriales' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function autoresautores()
    {
        return $this->belongsTo(\App\Models\Autore::class, 'autores_idautores');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function libroslibros()
    {
        return $this->belongsTo(\App\Models\Libro::class, 'libros_idlibros');
    }
}
