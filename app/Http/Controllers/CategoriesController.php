<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;



class CategoriesController extends Controller
{
    /**
     * Display a list of active categories.
     */
    public function index(Request $request)
    {
        // Initialize query for all categories
        $query = Category::query();

        // Filter by status (active or inactive) if specified
        if ($request->has('status')) {
            $status = $request->status;
            if ($status == 'active') {
                $query->where('category_status', 'Active');
            } elseif ($status == 'inactive') {
                $query->where('category_status', 'Inactive');
            }
        }

        // Search functionality
        if ($request->has('search')) {
            $query->where('category_name', 'like', '%' . $request->search . '%');
        }

        // Pagination (10 categories per page)
        $categories = $query->latest()->paginate(10);

        return view('admin.categories', compact('categories'));
    }



    /**
     * Store a new category.
     */
    public function store(Request $request): RedirectResponse
    {
      //  dd($request);
        // Validate the request data
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_status' => 'required',
           // 'user_id' => Auth::id(),
        ]);
       // dd($validated);
        // Check if the category already exists
        $existingCategory = DB::table('categories')
            ->where('category_name', $validated['category_name'])
            ->first();

        if ($existingCategory) {
            return back()->with('error', 'Failed! Category name already exists.');
        }

//        // Auto-generate category ID
//        $count = DB::table('categories')->count();
//        $newNum = 1000 + $count;
//        $category_No = 'CAT' . $newNum;

        // Create new category
        $categoryData = new Category([
           // "category_id" => $category_No,
            "category_name" => $validated['category_name'],
            "description" => $validated['description'],
            "category_status" => $validated['category_status'],
            "user_id" => Auth::id(), // Attach authenticated user ID
        ]);
//dd($categoryData);
        // Attempt to save the category
        if ($categoryData->save()) {
            return redirect()->route('categories.index')->with('success', 'Success! Category created.');
        } else {
            return redirect()->back()->with('error', 'Failed! Unable to create category.');
        }
    }

    // Update an existing category
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
            'category_status' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'category_status' => $request->category_status,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }
}
