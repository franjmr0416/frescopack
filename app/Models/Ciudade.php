<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudade
 * 
 * @property int|null $CMunicipio
 * @property string|null $CEstado
 * @property string|null $Descripcion
 *
 * @package App\Models
 */
class Ciudade extends Model
{
	protected $table = 'ciudades';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CMunicipio' => 'int'
	];

	protected $fillable = [
		'CMunicipio',
		'CEstado',
		'Descripcion'
	];
}
