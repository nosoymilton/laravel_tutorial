<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Autores
 * @package App\Models
 * @version September 15, 2020, 1:04 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $libros
 * @property string $nombres
 * @property string $apellidopaterno
 * @property string $apellidomaterno
 */
class Autores extends Model
{

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idautores';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
   
    public $table = 'autores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nombres',
        'apellidopaterno',
        'apellidomaterno'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idautores' => 'integer',
        'nombres' => 'string',
        'apellidopaterno' => 'string',
        'apellidomaterno' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombres' => 'required|string|max:45',
        'apellidopaterno' => 'required|string|max:45',
        'apellidomaterno' => 'required|string|max:45'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function libros()
    {
        return $this->belongsToMany(\App\Models\Libro::class, 'autores_has_libros');
    }
}
