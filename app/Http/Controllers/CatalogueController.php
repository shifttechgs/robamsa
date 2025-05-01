<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;



class CatalogueController extends Controller
{
    /**
     * Display a list of active products.
     */
    public function index(Request $request)
    {
        $query = Product::query();
       // $query = Category::query();
        $activeCategories = Category::active()->get();

        // Search Functionality
        if ($request->has('search')) {
            $query->where('product_name', 'like', '%' . $request->search . '%');
        }

        // Pagination (10 products per page)
        $products = $query->latest()->paginate(10);

        return view('admin.catalogues', compact('products', 'activeCategories'));
    }


    public function displayProducts(Request $request)
    {
        $query = Product::query();
        // $query = Category::query();
        $activeCategories = Category::active()->get();

        // Search Functionality
        if ($request->has('search')) {
            $query->where('product_name', 'like', '%' . $request->search . '%');
        }

        // Pagination (10 products per page)
        $products = $query->latest()->paginate(10);

        return view('welcome', compact('products', 'activeCategories'));
    }

    public function productDetails($id)
    {
        $product = Product::with('category')->findOrFail($id); // Eager load category
       // dd($product);
        //dd($product->toArray());
        return view('products.product_details', compact('product'));
    }


    public function cart()

    {

        return view('products.cart');

    }

//    public function checkout()
//
//    {
//
//        return view('products.checkout');
//
//    }


//    public function addToCart(Request $request, $id)
//    {
//        $quantity = $request->query('quantity', 1); // Default to 1 if not provided
//        $product = Product::findOrFail($id);
//
//        Cart::add([
//            'id' => $product->id,
//            'name' => $product->name,
//            'price' => $product->price,
//            'quantity' => $quantity,
//        ]);
//
//        return redirect()->back()->with('success', 'Product added to cart!');
//    }


//    public function addToCart(Request $request, $id)
//
//    {
//        dd($request);
//
//        $quantity = $request->query('quantity', 1); // Default to 1 if not provided
//        $product = Product::findOrFail($id);
//
//
//        $cart = session()->get('cart', []);
//
//        //dd($cart);
//
//        if(isset($cart[$id])) {
//
//            $cart[$id]['quantity']++;
//
//        } else {
//
//            $cart[$id] = [
//
//                "id" => $product->id,
//                "name" => $product->product_name,
//
//                "quantity" => $quantity,
//
//                "price" => $product->price,
//
//                "image" => $product->image_code
//
//            ];
//           // dd($cart);
//
//        }
//
//
//
//        session()->put('cart', $cart);
//
//        return redirect()->back()->with('success', 'Product added to cart successfully!');
//
//    }
    public function addToCart($id)

    {

        $product = Product::findOrFail($id);



        $cart = session()->get('cart', []);

        //dd($cart);

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "id" => $product->id,
                "name" => $product->product_name,

                "quantity" => 1,

                "price" => $product->price,

                "image" => $product->image_code

            ];
            // dd($cart);

        }
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');


    }

public function updateCart(Request $request){
    if($request->id && $request->quantity){

        $cart = session()->get('cart');

        $cart[$request->id]["quantity"] = $request->quantity;

        session()->put('cart', $cart);

        session()->flash('success', 'Cart updated successfully');

    }
}

//    public function updateCart(Request $request)
//    {
//        \Log::info('Update Cart Request:', ['id' => $request->id, 'quantity' => $request->quantity]);
//
//        // Validate incoming data to ensure it's a valid number
//        $request->validate([
//            'id' => 'required|integer',
//            'quantity' => 'required|integer|min:1'
//        ]);
//
//        if ($request->id && $request->quantity) {
//            $cart = session()->get('cart');
//
//            if (isset($cart[$request->id])) {
//                // Update the cart quantity
//                $cart[$request->id]["quantity"] = $request->quantity;
//                session()->put('cart', $cart);
//                \Log::info('Cart updated successfully:', ['cart' => $cart]);
//
//                return response()->json(['success' => 'Cart updated successfully']);
//            }
//        }
//
//        return response()->json(['error' => 'Invalid request'], 400);
//    }
//



    public function removeFromCart(Request $request)

    {
        \Log::info('Remove from cart request:', ['id' => $request->id]);

        if ($request->id) {
            $cart = session()->get('cart', []);

            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            return response()->json(['success' => 'Product removed successfully']);
        }

        return response()->json(['error' => 'Product not found'], 400);

    }



    /**
     * Display products that are in stock.
     */
//    public function inStock()
//    {
//        $products = Product::inStock()->latest()->get();
//
//        return view('catalogues.in_stock', compact('products'));
//    }

    /**
     * Display products within a specific active category.
     */
//    public function productsByCategory($categoryId)
//    {
//        $category = Category::active()->findOrFail($categoryId);
//        $products = $category->products()->active()->get();
//
//        return view('catalogues.by_category', compact('category', 'products'));
//    }

//    /**
//     * get categories.
//     */
//public function categories(){
//    // Fetch active categories
//    $query = Category::active()->get();
//
//    // You can pass $query to the view if needed
//    return view('your-view', compact('query'));
//}
    /**
     * Store a new product.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'stock_status' => 'required',
            'product_status' => 'required',
            'category_id' => 'required',
            'image_code' => 'required|image',
        ]);

        $productId = 'PROD-' . time() . rand(100, 999);

        // Handle image upload
        $imageName = null;
        if ($request->hasFile('image_code')) {
            $image = $request->file('image_code');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('images', $imageName, 'public'); // Save only name
        }

        $product = new Product([
            'product_id' => $productId,
            'product_name' => $validated['product_name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'discount' => $validated['discount'],
            'stock_status' => $validated['stock_status'],
            'product_status' => $validated['product_status'],
            'category_id' => $validated['category_id'],
            'image_code' => $imageName, // Only the image name saved
            'user_id' => Auth::id(),
        ]);

        if ($product->save()) {
            return redirect()->route('catalogues.index')->with('success', 'Product added successfully.');
        }

        return redirect()->back()->with('error', 'Failed! Unable to create product.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'stock_status' => 'required',
            'product_status' => 'required',
            'category_id' => 'required',
            'image_code' => 'sometimes|image',
        ]);

        $product = Product::findOrFail($id);

        $imageName = $product->image_code; // Default to existing image
        if ($request->hasFile('image_code')) {
            $image = $request->file('image_code');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('images', $imageName, 'public');
        }

        $product->update([
            'product_name' => $validated['product_name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'discount' => $validated['discount'],
            'stock_status' => $validated['stock_status'],
            'product_status' => $validated['product_status'],
            'category_id' => $validated['category_id'],
            'image_code' => $imageName, // Only the image name saved
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('catalogues.index')->with('success', 'Product updated successfully!');
    }

}
