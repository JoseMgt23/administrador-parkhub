<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $usuario_id
 * @property $parqueadero_id
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'usuario_id' => 'required',
		'parqueadero_id' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario_id','parqueadero_id','fecha_inicio','fecha_fin','estado'];



}
