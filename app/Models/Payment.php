<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'm_payment_id',
        'order_id',
        'payment_method',
        'amount',
        'payment_status',
        'pf_payment_id',

        //'transaction_id', // Corrected spelling
        'user_id',
    ];



    // Relationship: A Payment belongs to an Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relationship: A Payment belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
