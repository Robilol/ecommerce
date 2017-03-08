<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 08 Mar 2017 16:43:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductAttributesAssociation
 * 
 * @property int $id
 * @property string $value
 * @property int $product
 * @property int $attribute
 *
 * @package App\Models
 */
class ProductAttributesAssociation extends Eloquent
{
	protected $table = 'product_attributes_association';
	public $timestamps = false;

	protected $casts = [
		'product' => 'int',
		'attribute' => 'int'
	];

	protected $fillable = [
		'value',
		'product',
		'attribute'
	];
}
