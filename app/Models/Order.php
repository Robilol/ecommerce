<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 08 Mar 2017 16:43:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Order
 * 
 * @property int $id
 * @property string $reference
 * @property float $sub_total
 * @property float $total
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $user
 *
 * @package App\Models
 */
class Order extends Eloquent
{
	protected $casts = [
		'sub_total' => 'float',
		'total' => 'float',
		'user' => 'int'
	];

	protected $fillable = [
		'reference',
		'sub_total',
		'total',
		'user'
	];
}
