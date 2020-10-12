<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Idiomas
 * @package App\Models
 * @version September 15, 2020, 12:59 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $editoriales
 * @property string $idioma
 */
class Idiomas extends Model
{
/**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ididiomas';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    public $table = 'idiomas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'idioma'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ididiomas' => 'integer',
        'idioma' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idioma' => 'required|string|max:45'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function editoriales()
    {
        return $this->belongsToMany(\App\Models\Editoriale::class, 'libros');
    }
}
