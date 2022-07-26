<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
use App\Models\Products;


class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'fname',
        'lanme',
        'email',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'country',
        'pincode',
        'total_price',
        'status',
        'message',
        'tracking_no',
    ];

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);

    }

    public function products()
    {
        return $this->belongsTo(Product::class);

    }
}
