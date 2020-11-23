<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class reservas
 * @package App\Models
 * @version November 16, 2020, 10:59 pm UTC
 *
 * @property integer $ejemplares_idejemplarea
 * @property integer $id_idusuario
 * @property string $fechareserva
 * @property el $prestado
 */
class reservas extends Model
{

    public $table = 'reservas';
    



    public $fillable = [
        'fechareserva',
        'ejemplares_idejemplares',
        'users_idusers'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fechareserva' => 'date',
        'ejemplares_idejemplares' => 'integer',
        'users_idusers' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fechareserva' => 'required',
        'ejemplares_idejemplares' => 'required',
        'users_idusers' => 'required'
    ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\User::class);
    }

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ejemplares()
    {
        return $this->belongsTo(\App\Models\ejemplares::class);
    }
}
