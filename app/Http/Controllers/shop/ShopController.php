<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = Product::query();

        // Get active categories with the count of products for each category
        $activeCategories = Category::active()->withCount('products')->get();  // Using withCount to get product count

        // If a category is passed in the request, filter products by category ID
        if ($request->has('category')) {
            $categoryId = $request->category;
            $query->where('category_id', $categoryId);  // Filter by category ID
        }

        // Search functionality
        if ($request->has('search')) {
            $query->where('product_name', 'like', '%' . $request->search . '%');
        }

        // Pagination (10 products per page)
        $products = $query->latest()->paginate(10);

        return view('products.shopProducts', compact('products', 'activeCategories'));
    }




}
