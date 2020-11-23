<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class sanciones
 * @package App\Models
 * @version November 16, 2020, 11:27 pm UTC
 *
 */
class sanciones extends Model
{

    public $table = 'sanciones';
    



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
