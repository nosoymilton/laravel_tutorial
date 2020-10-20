<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Editoriales
 * @package App\Models
 * @version September 15, 2020, 12:57 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $idiomas
 * @property string $editorial
 * @property string $descripcion
 */
class Editoriales extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ideditoriales';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    public $table = 'editoriales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'editorial',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ideditoriales' => 'integer',
        'editorial' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'editorial' => 'required|string|max:45',
        'descripcion' => 'required|string|max:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    
    public function libros()
    {
        return $this->hasMany(\App\Models\libros::class, 'idlibros');
    }
}
