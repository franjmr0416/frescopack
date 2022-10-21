<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $IdAddress
 * @property int $FK_IdUser
 * @property string|null $ContactName
 * @property string|null $Address
 * @property int|null $PostalCode
 * @property string|null $Neighborhood
 * @property string|null $City
 * @property string|null $State
 * @property string|null $Email
 * @property string|null $Phone
 * @property string $Type
 * @property int $Status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';
	protected $primaryKey = 'IdAddress';

	protected $casts = [
		'FK_IdUser' => 'int',
		'PostalCode' => 'int',
		'Status' => 'int'
	];

	protected $fillable = [
		'FK_IdUser',
		'ContactName',
		'Address',
		'PostalCode',
		'Neighborhood',
		'City',
		'State',
		'Email',
		'Phone',
		'Type',
		'Status'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'FK_IdUser');
	}
}
