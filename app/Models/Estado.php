<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 * 
 * @property string|null $CEstado
 * @property string|null $CPais
 * @property string|null $NombreEstado
 *
 * @package App\Models
 */
class Estado extends Model
{
	protected $table = 'estados';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'CEstado',
		'CPais',
		'NombreEstado'
	];
}
