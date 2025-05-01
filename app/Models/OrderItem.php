<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'total_amount',
    ];

    // Relationship: An OrderItem belongs to an Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relationship: An OrderItem belongs to a Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
