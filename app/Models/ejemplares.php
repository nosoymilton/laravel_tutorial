<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ejemplares
 * @package App\Models
 * @version September 14, 2020, 4:16 am UTC
 *
 * @property \App\Models\Libro $libroslibros
 * @property string $numeroejemplar
 * @property integer $libros_idlibros
 */
class ejemplares extends Model
{
    use SoftDeletes;

    public $table = 'ejemplares';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'numeroejemplar',
        'libros_idlibros'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idejemplares' => 'integer',
        'numeroejemplar' => 'string',
        'libros_idlibros' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numeroejemplar' => 'required|string|max:45',
        'libros_idlibros' => 'required|integer',
        'created_at' => 'required',
        'updated_at' => 'required',
        'deleted_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function libroslibros()
    {
        return $this->belongsTo(\App\Models\Libro::class, 'libros_idlibros');
    }
}
