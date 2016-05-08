<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
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