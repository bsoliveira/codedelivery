<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    		'client_id',
	        'user_delivery_id',
	        'total',
	        'status'
	    ];

	public function client()
	{
		return $this->hasOne(Client::class);
	}

	public function deliveryMan()
	{
		return $this->belongsTo(User::class);
	}

	public function items()
	{
		return $this->hasMany(OrderItem::class);
	}

}
