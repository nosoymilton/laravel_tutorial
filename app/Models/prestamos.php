<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class prestamos
 * @package App\Models
 * @version November 16, 2020, 11:25 pm UTC
 *
 */
class prestamos extends Model
{

    public $table = 'prestamos';
    



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
