<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 08 Mar 2017 16:43:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrderDetail
 * 
 * @property int $id
 * @property int $quantity
 * @property float $sub_total
 * @property int $product
 * @property int $order
 *
 * @package App\Models
 */
class OrderDetail extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'quantity' => 'int',
		'sub_total' => 'float',
		'product' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'quantity',
		'sub_total',
		'product',
		'order'
	];
}
