<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 08 Mar 2017 16:43:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Address
 * 
 * @property int $id
 * @property string $name
 * @property string $adress
 * @property string $city
 * @property string $country
 * @property string $zip_code
 * @property int $user
 *
 * @package App\Models
 */
class Address extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user' => 'int'
	];

	protected $fillable = [
		'name',
		'adress',
		'city',
		'country',
		'zip_code',
		'user'
	];
}
