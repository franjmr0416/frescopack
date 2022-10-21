<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colonia
 * 
 * @property int|null $CColonia
 * @property int|null $CCodigoPostal
 * @property string|null $CNombreAsentamiento
 *
 * @package App\Models
 */
class Colonia extends Model
{
	protected $table = 'colonias';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CColonia' => 'int',
		'CCodigoPostal' => 'int'
	];

	protected $fillable = [
		'CColonia',
		'CCodigoPostal',
		'CNombreAsentamiento'
	];
}
