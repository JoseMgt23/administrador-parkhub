<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parqueadero
 *
 * @property $id
 * @property $nombre
 * @property $ubicacion
 * @property $capacidad
 * @property $tarifa_por_hora
 * @property $servicios_ofrecidos
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Parqueadero extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ubicacion' => 'required',
		'capacidad' => 'required',
		'tarifa_por_hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ubicacion','capacidad','tarifa_por_hora','servicios_ofrecidos'];



}
