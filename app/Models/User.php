<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $IdUser
 * @property string $Name
 * @property string|null $LastName
 * @property string $Company
 * @property string $Email
 * @property string|null $Password
 * @property string $Phone
 * @property float|null $Discount
 * @property string|null $BusinessName
 * @property string|null $Cfdi
 * @property string|null $Rfc
 * @property string|null $Type
 * @property string|null $Location
 * @property string|null $Role
 * @property int $Status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Address[] $addresses
 * @property Collection|Billingsdata[] $billingsdatas
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'IdUser';

	protected $casts = [
		'Discount' => 'float',
		'Status' => 'int'
	];

	protected $fillable = [
		'Name',
		'LastName',
		'Company',
		'Email',
		'Password',
		'Phone',
		'Discount',
		'BusinessName',
		'Cfdi',
		'Rfc',
		'Type',
		'Location',
		'Role',
		'Status'
	];

	public function addresses()
	{
		return $this->hasMany(Address::class, 'FK_IdUser');
	}

	public function billingsdatas()
	{
		return $this->hasMany(Billingsdata::class, 'FK_IdUser');
	}
}
