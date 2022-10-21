<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CodigosPostale
 * 
 * @property int|null $CCp
 * @property string|null $CEstado
 * @property int|null $CMunicipio
 * @property int|null $CLocalidad
 *
 * @package App\Models
 */
class CodigosPostale extends Model
{
	protected $table = 'codigos_postales';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CCp' => 'int',
		'CMunicipio' => 'int',
		'CLocalidad' => 'int'
	];

	protected $fillable = [
		'CCp',
		'CEstado',
		'CMunicipio',
		'CLocalidad'
	];
}
