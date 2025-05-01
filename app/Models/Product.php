<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_name',
        'description',
        'price',
        'stock_status',
        'product_status',
        'discount',
        //'promotion_id',
        //'date_created',
        'image_code',
        'category_id',
        'user_id',
    ];

//    protected static function boot()
//    {
//        parent::boot();
//        static::creating(function ($product) {
//            $product->product_id = Str::uuid();
//        });
//    }

    /**
     * Scope: Get only active products
     */
    public function scopeActive($query)
    {
        return $query->where('product_status', 'active');
    }



    /**
     * Scope: Get only in-stock products
     */
    public function scopeInStock($query)
    {
        return $query->where('stock_status', 'in_stock');
    }


    /**
     * Relationship: A product belongs to a category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Relationship: A product belongs to a user (optional).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // In Product.php model
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

}
