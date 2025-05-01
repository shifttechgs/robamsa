<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'description',
        'category_status',
        //'date_created',
        'user_id',
    ];

    /**
     * Scope: Get only active categories
     */
    public function scopeActive($query)
    {
        return $query->where('category_status', 'active');
    }

    /**
     * Relationship: A category has many products.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

//    public function shopProducts()
//    {
//        return $this->hasMany(Product::class);
//    }

    /**
     * Relationship: A category belongs to a user (optional).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
