<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Libros
 * @package App\Models
 * @version September 15, 2020, 12:50 am UTC
 *
 * @property \App\Models\Editoriale $editorialeseditoriales
 * @property \App\Models\Idioma $idiomasidiomas
 * @property \Illuminate\Database\Eloquent\Collection $autores
 * @property \Illuminate\Database\Eloquent\Collection $categorias
 * @property \Illuminate\Database\Eloquent\Collection $ejemplares
 * @property string $isbn
 * @property string $titulo
 * @property integer $numpaginas
 * @property string $apublicacion
 * @property integer $idiomas_ididiomas
 * @property integer $editoriales_ideditoriales
 */
class Libros extends Model
{

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idlibros';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

   
    public $table = 'libros';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'isbn',
        'titulo',
        'numpaginas',
        'apublicacion',
        'idiomas_ididiomas',
        'editoriales_ideditoriales'
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
        'numpaginas' => 'integer',
        'apublicacion' => 'year',
        'idiomas_ididiomas' => 'integer',
        'editoriales_ideditoriales' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'isbn' => 'required|string|max:13',
        'titulo' => 'required|string|max:100',
        'numpaginas' => 'required|integer',
        'apublicacion' => 'required',
        'idiomas_ididiomas' => 'required|integer',
        'editoriales_ideditoriales' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function editorial()
    {
        return $this->belongsTo(\App\Models\Editoriales::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idioma()
    {
        return $this->belongsTo(\App\Models\Idiomas::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function autores()
    {
        return $this->belongsToMany(\App\Models\Autores::class, 'autores_has_libros');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function categorias()
    {
        return $this->belongsToMany(\App\Models\Categorias::class, 'categorias_has_libros');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ejemplares()
    {
        return $this->hasMany(\App\Models\ejemplares::class);
    }
}
