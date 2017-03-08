<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 08 Mar 2017 16:43:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $ean
 * @property string $name
 * @property string $description
 * @property float $price
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Product extends Eloquent
{
	protected $casts = [
		'price' => 'float'
	];

	protected $fillable = [
		'ean',
		'name',
		'description',
		'price',
		'image'
	];
}
