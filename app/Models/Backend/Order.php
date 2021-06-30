<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
       public $fillable = [

    	'user_id',
    	'ip_address',
    	'first_name',
    	'product_id',
    	'last_name',
    	'email',
    	'phone',
    	'shipping_address',
    	'additional_message',
    	'product_finalprice',
    	'pricewithcoupon',
    	'is_paid',
    	'payment_id',
    	'transaction_id'



    ];
}
