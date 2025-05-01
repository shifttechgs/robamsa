<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'total_amount',
        'order_status',
        'payment_status',
        'delivery_address',
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class); // OrderItem model will be used for the line items
    }

    // User model (User.php)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class, 'order_id', 'order_number');
    }




    // Auto-generate unique order_number when creating an order
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            $order->order_number = 'ROB' . strtoupper(Str::random(8)); // Example: ROB8GJX2P3
        });
    }
}
