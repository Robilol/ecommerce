<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 08 Mar 2017 16:43:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductAttribute
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class ProductAttribute extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
